<div id="display_f{$field.fieldId|escape}" class="files-field display_f{$field.fieldId|escape} uninitialized {if $data.replaceFile}replace{/if}" data-galleryid="{$field.galleryId|escape}" data-firstfile="{$field.firstfile|escape}" data-filter="{$field.filter|escape}" data-limit="{$field.limit|escape}">
    {if $field.canUpload}
        {if $field.limit}
            {if $field.limit == 1}
                {remarksbox _type=info title="{tr}Attached files limitation{/tr}"}
                    {tr }The amount of files that can be attached is limited to <strong>1</strong>. The latest file will be preserved.{/tr}
                {/remarksbox}
            {else}
                {remarksbox _type=info title="{tr}Attached files limitation{/tr}"}
                    {tr _0=$field.limit}The amount of files that can be attached is limited to <strong>%0</strong>. The latest files will be preserved.{/tr}
                {/remarksbox}
            {/if}
        {/if}
        <ol class="tracker-item-files current-list">
            {foreach from=$field.files item=info}
                <li data-file-id="{$info.fileId|escape}" class="m-1">
                    {if $prefs.vimeo_upload eq 'y' and $field.options_map.displayMode eq 'vimeo'}
                        {icon name='vimeo'}
                    {elseif $field.options_map.displayMode eq 'img'}
                        <img src="tiki-download_file.php?fileId={$info.fileId|escape}&display&y=24" height="24">
                        {$info.name|escape}
                    {elseif $field.options_map.displayMode eq 'barelink'}
                        <a href="{$info.fileId|sefurl:'file'}">
                            {$info.name|escape}
                        </a>
                    {else}
                        {$info.fileId|sefurl:'file'|iconify:$info.filetype:$info.fileId:2}
                        <a href="{$info.fileId|sefurl:'file'}" data-box="box">
                            {$info.name|escape}
                        </a>
                    {/if}
                    <a href="#" class="file-delete-icon text-danger">
                        {icon name='delete'}
                    </a>
                </li>
            {/foreach}
        </ol>
        <input class="input" type="text" name="{$field.ins_id|escape}" value="{$field.value|escape}" style="display: none">
        {if $field.options_map.displayMode eq 'vimeo'}
            {wikiplugin _name='vimeo' fromFieldId=$field.fieldId|escape fromItemId=$item.itemId|escape galleryId=$field.galleryId|escape}{/wikiplugin}
        {else}
            {if $field.options_map.uploadInModal neq 'n'}
                <a href="{service controller=file action=uploader uploadInModal=1 galleryId=$field.galleryId limit=$field.limit|default:100 type=$field.filter image_max_size_x=$field.image_x image_max_size_y=$field.image_y addDecriptionOnUpload=$data.addDecriptionOnUpload trackerId=$field.trackerId requireTitle=$field.requireTitle directoryPattern=$field.directoryPattern}" class="btn btn-primary upload-files">
                    {if $field.limit !== 1}{tr}Upload Files{/tr}{else}{tr}Upload File{/tr}{/if}
                </a>
            {else}
                <div class="upload-files-inline-form">
                    {service_inline controller=file action=uploader uploadInModal=0 galleryId=$field.galleryId limit=$field.limit|default:100 type=$field.filter image_max_size_x=$field.image_x image_max_size_y=$field.image_y addDecriptionOnUpload=$data.addDecriptionOnUpload directoryPattern=$field.directoryPattern}
                </div>
            {/if}
        {/if}
        {if $context.canBrowse}
            {if $prefs.fgal_elfinder_feature eq 'y'}
                {button href='tiki-list_file_gallery.php' _text="{tr}Browse files{/tr}" _onclick=$context.onclick title="{tr}Browse files{/tr}"}
            {else}
                <a href="{service controller=file action=browse galleryId=$context.galleryId limit=$field.limit|default:100 type=$field.filter image_x=$field.image_x image_y=$field.image_y}" class="btn btn-primary browse-files">{tr}Browse Files{/tr}</a>
            {/if}
        {/if}
        {if $prefs.fgal_upload_from_source eq 'y' and $field.canUpload}
            <fieldset>
                {if $prefs.vimeo_upload eq 'y' and $field.options_map.displayMode eq 'vimeo'}
                    <label for="vimeourl_{$field.ins_id|escape}" class="small">
                        {tr}Link to existing Vimeo URL{/tr}
                    </label>
                    <input class="url vimeourl form-control" name="vimeourl" id="vimeourl_{$field.ins_id|escape}" placeholder="http://vimeo.com/..." data-mode="vimeo">
                    <input type="hidden" class="reference" name="reference" value="1">
                {else}
                    <label for="url_{$field.ins_id|escape}" class="small">
                        {tr}Upload from URL{/tr}
                    </label>
                    <input class="url form-control" name="url" id="url_{$field.ins_id|escape}" placeholder="http://">
                    <input type="hidden" class="reference" name="reference" value="0">
                {/if}
                <p class="description">
                    {tr}Type or paste the URL and press ENTER{/tr}
                </p>
            </fieldset>
        {/if}
    {else}
            {remarksbox type="error" close="n" title="{tr}You do not have permission to upload files to this gallery.{/tr}" }
            {/remarksbox}
    {/if}
</div>

{if $field.canUpload}
    {jq}
        $('.files-field.uninitialized').removeClass('uninitialized').each(function () {
            var $self = $(this);
            var $files = $('.current-list', this);
            var $warning = $('.alert', this);
            var $field = $('.input', this);
            var $url = $('.url', this);
            var replaceFile = $(this).is('.replace');

            function toggleWarning() {
                var limit = $self.data('limit');
                if (limit) {
                    if ($files.children().length > limit) {
                        $warning.show();
                        $files.children().css('text-decoration', 'line-through');
                        $files.children().slice(-5).css('text-decoration', '');
                    } else {
                        $files.children().css('text-decoration', '');
                        $warning.hide();
                    }
                }
            }

            function addFile(fileId, type, name) {
                var li = $('<li>').appendTo($files); li.text(name).data('file-id', fileId);

                $field.input_csv('add', ',', fileId);

                li.prepend($.fileTypeIcon(fileId, { type: type, name: name }));
                li.append($('<a class="file-delete-icon text-danger">{{icon name='delete'}}</a>'));

                if (replaceFile && $self.data('firstfile') > 0) {
                    li.prev('li').remove();
                }

                if (! $self.data('firstfile')) {
                    $self.data('firstfile', fileId);
                }

                $field.change();

                toggleWarning();
            }

            $field.hide();
            toggleWarning();

            $self.find('.btn.upload-files').clickModal({

                success: function (data) {
                    var $ff = $(this).parents(".files-field");
                    $field = $(".input", $ff);
                    $files = $(".current-list", $ff);

                    $.each(data.files, function (k, file) {
                        addFile(file.fileId, file.type, file.label);
                    });

                    $.closeModal();
                }
            });
            $self.find('.btn.browse-files').on('click', function () {
                if (! $(this).data('initial-href')) {
                    $(this).data('initial-href', $(this).attr('href'));
                }

                // Before the dialog handler triggers, replace the href with one including current files
                $(this).attr('href', $(this).data('initial-href') + '&file=' + $field.val());
            });
            $self.find('.btn.browse-files').clickModal({
                size: 'modal-lg',
                success: function (data) {
                    var $ff = $(this).parents(".files-field");
                    $field = $(".input", $ff);
                    $files = $(".current-list", $ff);

                    $files.empty();
                    $field.val('');

                    $.each(data.files, function (k, file) {
                        addFile(file.fileId, file.type, file.name);
                    });

                    $.closeModal();
                }
            });

            $files.find('input').hide();
            // Delete for previously existing and to be added files
            $files.parent().on('click', '.file-delete-icon', function (e) {
                var fileId = $(e.target).closest('li').data('file-id');
                if (fileId) {
                    $field.input_csv('delete', ',', fileId);
                    $(e.target).closest('li').remove();
                    $field.change();
                    toggleWarning();
                }
                return false;
            });

            $url.keypress(function (e) {
                if (e.which === 13) {
                    var $this = $(this);
                    var url = $this.val();
                    $this.attr('disabled', true).clearError();

                    $.ajax({
                        type: 'POST',
                        url: $.service('file', 'remote'),
                        dataType: 'json',
                        data: {
                            galleryId: $self.data('galleryid'),
                            url: url,
                            reference: $this.next('.reference').val()
                        },
                        success: function (data) {
                            var $ff = $this.parents(".files-field");
                            $field = $(".input", $ff);
                            $files = $(".current-list", $ff);

                            addFile(data.fileId, data.type, data.name);
                            $this.val('');
                        },
                        error: function (jqxhr) {
                            $this.showError(jqxhr);
                        },
                        complete: function () {
                            $this.removeAttr('disabled');
                        }
                    });

                    return false;
                }
            });

            window.handleFinderFile = function (file, elfinder) {
                var hash = "";
                if (typeof file === "string") {
                    var m = file.match(/target=([^&]*)/);
                    if (!m || m.length < 2) {
                        return false;    // error?
                    }
                    hash = m[1];
                } else {
                    hash = file.hash;
                }
                $.ajax({
                    type: 'GET',
                    url: $.service('file_finder', 'finder'),
                    dataType: 'json',
                    data: {
                        cmd: "tikiFileFromHash",
                        hash: hash
                    },
                    success: function (data) {
                        var eventOrigin = $("body").data("eventOrigin");
                        if (eventOrigin) {
                            var $ff = $(eventOrigin).parents(".files-field");
                            $field = $(".input", $ff);
                            $files = $(".current-list", $ff);
                        }

        addFile(data.fileId, data.filetype, data.name);
                    },
                    error: function (jqxhr) {
                    },
                    complete: function () {
                        $(window).data("elFinderDialog").dialog("close");
                        $($(window).data("elFinderDialog")).remove();
                        $(window).data("elFinderDialog", null);
                        return false;
                    }
                });
            };
            handleVimeoFile = function (link, data) {
                var eventOrigin = link;
                if (eventOrigin) {
                    var $ff = $(eventOrigin).parents(".files-field");
                    $field = $(".input", $ff);
                    $files = $(".current-list", $ff);
                }

        addFile(data.fileId, data.filetype, data.name);
            };
        });
    {/jq}

    {if $prefs.vimeo_upload eq 'y' and $field.options_map.displayMode eq 'vimeo' and $prefs.feature_jquery_validation eq 'y'}
        {jq}
            $.validator.addMethod("isVimeoUrl", function(value, element) {
                return this.optional(element) || value.match(/http[s]?\:\/\/(?:www\.)?vimeo\.com.*\/\d{4}/);
            }, tr("* URL format is incorrect. It should start with 'https://vimeo.com/' and contain a video id of at least 4 digits '\nnnnnnn'"));
            $.validator.addClassRules({
                vimeourl : { isVimeoUrl : true }
            });
        {/jq}
    {/if}
{/if}
