{* $Id$ *}{tr}Queued{/tr} - {if $new_topic}{tr}New {$prefs.mail_template_custom_text}forum topic in <{$mail_forum|truncate:20:"..."}> by {$mail_author|username} <{$mail_author|escape}>:{/tr}{else}    {tr}New {$prefs.mail_template_custom_text}forum post in <{$mail_forum|truncate:20:"..."}> by {$mail_author|username} <{$mail_author|escape}>:{/tr}{/if} {$mail_title|truncate:50:"..."}
