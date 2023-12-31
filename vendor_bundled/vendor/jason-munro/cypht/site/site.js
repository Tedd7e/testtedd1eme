/* MIT https://github.com/fabiospampinato/cash */
(function(){
'use strict';var e={"class":"className",contenteditable:"contentEditable","for":"htmlFor",readonly:"readOnly",maxlength:"maxLength",tabindex:"tabIndex",colspan:"colSpan",rowspan:"rowSpan",usemap:"useMap"};function aa(a,b){try{return a(b)}catch(c){return b}}
var k=document,m=window,ba=k.documentElement,n=k.createElement.bind(k),ca=n("div"),p=n("table"),da=n("tbody"),ea=n("tr"),q=Array.isArray,r=Array.prototype,fa=r.concat,t=r.filter,ha=r.indexOf,ia=r.map,ja=r.push,ka=r.slice,u=r.some,la=r.splice,ma=/^#(?:[\w-]|\\.|[^\x00-\xa0])*$/,na=/^\.(?:[\w-]|\\.|[^\x00-\xa0])*$/,oa=/<.+>/,pa=/^\w+$/;function v(a,b){return a&&(w(b)||x(b))?na.test(a)?b.getElementsByClassName(a.slice(1)):pa.test(a)?b.getElementsByTagName(a):b.querySelectorAll(a):[]}
var B=function(){function a(a,c){if(a){if(a instanceof B)return a;var b=a;if(C(a)){if(b=(c instanceof B?c[0]:c)||k,b=ma.test(a)?b.getElementById(a.slice(1)):oa.test(a)?qa(a):v(a,b),!b)return}else if(D(a))return this.ready(a);if(b.nodeType||b===m)b=[b];this.length=b.length;a=0;for(c=this.length;a<c;a++)this[a]=b[a]}}a.prototype.init=function(b,c){return new a(b,c)};return a}(),E=B.prototype,F=E.init;F.fn=F.prototype=E;E.length=0;E.splice=la;"function"===typeof Symbol&&(E[Symbol.iterator]=r[Symbol.iterator]);
E.map=function(a){return F(fa.apply([],ia.call(this,function(b,c){return a.call(b,c,b)})))};E.slice=function(a,b){return F(ka.call(this,a,b))};var ra=/-([a-z])/g;function G(a){return a.replace(ra,function(a,c){return c.toUpperCase()})}F.guid=1;function sa(a,b){var c=a&&(a.matches||a.webkitMatchesSelector||a.msMatchesSelector);return!!c&&!!b&&c.call(a,b)}function H(a){return!!a&&a===a.window}function w(a){return!!a&&9===a.nodeType}function x(a){return!!a&&1===a.nodeType}
function D(a){return"function"===typeof a}function C(a){return"string"===typeof a}function ta(a){return!isNaN(parseFloat(a))&&isFinite(a)}function I(a){if("object"!==typeof a||null===a)return!1;a=Object.getPrototypeOf(a);return null===a||a===Object.prototype}F.isWindow=H;F.isFunction=D;F.isArray=q;F.isNumeric=ta;F.isPlainObject=I;E.get=function(a){if(void 0===a)return ka.call(this);a=Number(a);return this[0>a?a+this.length:a]};E.eq=function(a){return F(this.get(a))};E.first=function(){return this.eq(0)};
E.last=function(){return this.eq(-1)};function J(a,b,c){if(c)for(c=a.length;c--&&!1!==b.call(a[c],c,a[c]););else if(I(a)){var d=Object.keys(a);c=0;for(var h=d.length;c<h;c++){var f=d[c];if(!1===b.call(a[f],f,a[f]))break}}else for(c=0,h=a.length;c<h&&!1!==b.call(a[c],c,a[c]);c++);return a}F.each=J;E.each=function(a){return J(this,a)};E.prop=function(a,b){if(a){if(C(a))return a=e[a]||a,2>arguments.length?this[0]&&this[0][a]:this.each(function(c,h){h[a]=b});for(var c in a)this.prop(c,a[c]);return this}};
E.removeProp=function(a){return this.each(function(b,c){delete c[e[a]||a]})};function K(){for(var a=[],b=0;b<arguments.length;b++)a[b]=arguments[b];b="boolean"===typeof a[0]?a.shift():!1;var c=a.shift(),d=a.length;if(!c)return{};if(!d)return K(b,F,c);for(var h=0;h<d;h++){var f=a[h],g;for(g in f)b&&(q(f[g])||I(f[g]))?(c[g]&&c[g].constructor===f[g].constructor||(c[g]=new f[g].constructor),K(b,c[g],f[g])):c[g]=f[g]}return c}F.extend=K;E.extend=function(a){return K(E,a)};
function L(a){return C(a)?function(b,c){return sa(c,a)}:D(a)?a:a instanceof B?function(b,c){return a.is(c)}:a?function(b,c){return c===a}:function(){return!1}}E.filter=function(a){var b=L(a);return F(t.call(this,function(a,d){return b.call(a,d,a)}))};function M(a,b){return b?a.filter(b):a}var ua=/\S+/g;function N(a){return C(a)?a.match(ua)||[]:[]}E.hasClass=function(a){return!!a&&u.call(this,function(b){return x(b)&&b.classList.contains(a)})};
E.removeAttr=function(a){var b=N(a);return this.each(function(a,d){x(d)&&J(b,function(a,b){d.removeAttribute(b)})})};E.attr=function(a,b){if(a){if(C(a)){if(2>arguments.length){if(!this[0]||!x(this[0]))return;var c=this[0].getAttribute(a);return null===c?void 0:c}return void 0===b?this:null===b?this.removeAttr(a):this.each(function(c,h){x(h)&&h.setAttribute(a,b)})}for(c in a)this.attr(c,a[c]);return this}};
E.toggleClass=function(a,b){var c=N(a),d=void 0!==b;return this.each(function(a,f){x(f)&&J(c,function(a,c){d?b?f.classList.add(c):f.classList.remove(c):f.classList.toggle(c)})})};E.addClass=function(a){return this.toggleClass(a,!0)};E.removeClass=function(a){return arguments.length?this.toggleClass(a,!1):this.attr("class","")};
function O(a,b,c,d){for(var h=[],f=D(b),g=d&&L(d),y=0,z=a.length;y<z;y++)if(f){var l=b(a[y]);l.length&&ja.apply(h,l)}else for(l=a[y][b];!(null==l||d&&g(-1,l));)h.push(l),l=c?l[b]:null;return h}function P(a){return 1<a.length?t.call(a,function(a,c,d){return ha.call(d,a)===c}):a}F.unique=P;E.add=function(a,b){return F(P(this.get().concat(F(a,b).get())))};function Q(a,b,c){if(x(a)){var d=m.getComputedStyle(a,null);return c?d.getPropertyValue(b)||void 0:d[b]||a.style[b]}}
function R(a,b){return parseInt(Q(a,b),10)||0}var S=/^--/,T={},va=ca.style,wa=["webkit","moz","ms"];function xa(a,b){void 0===b&&(b=S.test(a));if(b)return a;if(!T[a]){b=G(a);var c=""+b[0].toUpperCase()+b.slice(1);b=(b+" "+wa.join(c+" ")+c).split(" ");J(b,function(b,c){if(c in va)return T[a]=c,!1})}return T[a]}
var ya={animationIterationCount:!0,columnCount:!0,flexGrow:!0,flexShrink:!0,fontWeight:!0,gridArea:!0,gridColumn:!0,gridColumnEnd:!0,gridColumnStart:!0,gridRow:!0,gridRowEnd:!0,gridRowStart:!0,lineHeight:!0,opacity:!0,order:!0,orphans:!0,widows:!0,zIndex:!0};function za(a,b,c){void 0===c&&(c=S.test(a));return c||ya[a]||!ta(b)?b:b+"px"}
E.css=function(a,b){if(C(a)){var c=S.test(a);a=xa(a,c);if(2>arguments.length)return this[0]&&Q(this[0],a,c);if(!a)return this;b=za(a,b,c);return this.each(function(d,f){x(f)&&(c?f.style.setProperty(a,b):f.style[a]=b)})}for(var d in a)this.css(d,a[d]);return this};var Aa=/^\s+|\s+$/;function Ba(a,b){a=a.dataset[b]||a.dataset[G(b)];return Aa.test(a)?a:aa(JSON.parse,a)}
E.data=function(a,b){if(!a){if(!this[0])return;var c={},d;for(d in this[0].dataset)c[d]=Ba(this[0],d);return c}if(C(a))return 2>arguments.length?this[0]&&Ba(this[0],a):void 0===b?this:this.each(function(c,d){c=b;c=aa(JSON.stringify,c);d.dataset[G(a)]=c});for(d in a)this.data(d,a[d]);return this};function Ca(a,b){var c=a.documentElement;return Math.max(a.body["scroll"+b],c["scroll"+b],a.body["offset"+b],c["offset"+b],c["client"+b])}
function Da(a,b){return R(a,"border"+(b?"Left":"Top")+"Width")+R(a,"padding"+(b?"Left":"Top"))+R(a,"padding"+(b?"Right":"Bottom"))+R(a,"border"+(b?"Right":"Bottom")+"Width")}
J([!0,!1],function(a,b){J(["Width","Height"],function(a,d){E[(b?"outer":"inner")+d]=function(c){if(this[0])return H(this[0])?b?this[0]["inner"+d]:this[0].document.documentElement["client"+d]:w(this[0])?Ca(this[0],d):this[0][(b?"offset":"client")+d]+(c&&b?R(this[0],"margin"+(a?"Top":"Left"))+R(this[0],"margin"+(a?"Bottom":"Right")):0)}})});
J(["Width","Height"],function(a,b){var c=b.toLowerCase();E[c]=function(d){if(!this[0])return void 0===d?void 0:this;if(!arguments.length)return H(this[0])?this[0].document.documentElement["client"+b]:w(this[0])?Ca(this[0],b):this[0].getBoundingClientRect()[c]-Da(this[0],!a);var h=parseInt(d,10);return this.each(function(b,d){x(d)&&(b=Q(d,"boxSizing"),d.style[c]=za(c,h+("border-box"===b?Da(d,!a):0)))})}});var U={};
E.toggle=function(a){return this.each(function(b,c){if(x(c))if(void 0===a?"none"===Q(c,"display"):a){if(c.style.display=c.___cd||"","none"===Q(c,"display")){b=c.style;c=c.tagName;if(U[c])c=U[c];else{var d=n(c);k.body.insertBefore(d,null);var h=Q(d,"display");k.body.removeChild(d);c=U[c]="none"!==h?h:"block"}b.display=c}}else c.___cd=Q(c,"display"),c.style.display="none"})};E.hide=function(){return this.toggle(!1)};E.show=function(){return this.toggle(!0)};
function Ea(a,b){return!b||!u.call(b,function(b){return 0>a.indexOf(b)})}var V={focus:"focusin",blur:"focusout"},W={mouseenter:"mouseover",mouseleave:"mouseout"},Fa=/^(mouse|pointer|contextmenu|drag|drop|click|dblclick)/i;function Ga(a,b,c,d,h){var f=a.___ce=a.___ce||{};f[b]=f[b]||[];f[b].push([c,d,h]);a.addEventListener(b,h)}function X(a){a=a.split(".");return[a[0],a.slice(1).sort()]}
function Y(a,b,c,d,h){var f=a.___ce=a.___ce||{};if(b)f[b]&&(f[b]=f[b].filter(function(f){var g=f[0],z=f[1];f=f[2];if(h&&f.guid!==h.guid||!Ea(g,c)||d&&d!==z)return!0;a.removeEventListener(b,f)}));else for(b in f)Y(a,b,c,d,h)}
E.off=function(a,b,c){var d=this;if(void 0===a)this.each(function(a,b){(x(b)||w(b)||H(b))&&Y(b)});else if(C(a))D(b)&&(c=b,b=""),J(N(a),function(a,h){a=X(h);h=a[0];var f=a[1],g=W[h]||V[h]||h;d.each(function(a,d){(x(d)||w(d)||H(d))&&Y(d,g,f,b,c)})});else for(var h in a)this.off(h,a[h]);return this};
E.on=function(a,b,c,d,h){var f=this;if(!C(a)){for(var g in a)this.on(g,b,c,a[g],h);return this}C(b)||(void 0!==b&&null!==b&&(void 0!==c&&(d=c),c=b),b="");D(d)||(d=c,c=void 0);if(!d)return this;J(N(a),function(a,g){a=X(g);g=a[0];var l=a[1],z=W[g]||V[g]||g,y=g in W,Ka=g in V;z&&f.each(function(a,f){if(x(f)||w(f)||H(f))a=function La(a){if(a.target["___i"+a.type])return a.stopImmediatePropagation();if(!a.namespace||Ea(l,a.namespace.split(".")))if(b||!(Ka&&(a.target!==f||a.___ot===z)||y&&a.relatedTarget&&
f.contains(a.relatedTarget))){var g=f;if(b){for(var A=a.target;!sa(A,b);){if(A===f)return;A=A.parentNode;if(!A)return}g=A;a.___cd=!0}a.___cd&&Object.defineProperty(a,"currentTarget",{configurable:!0,get:function(){return g}});Object.defineProperty(a,"data",{configurable:!0,get:function(){return c}});A=d.call(g,a,a.___td);h&&Y(f,z,l,b,La);!1===A&&(a.preventDefault(),a.stopPropagation())}},a.guid=d.guid=d.guid||F.guid++,Ga(f,z,l,b,a)})});return this};E.one=function(a,b,c,d){return this.on(a,b,c,d,!0)};
E.ready=function(a){function b(){return setTimeout(a,0,F)}"loading"!==k.readyState?b():k.addEventListener("DOMContentLoaded",b);return this};E.trigger=function(a,b){if(C(a)){var c=X(a),d=c[0];c=c[1];var h=W[d]||V[d]||d;if(!h)return this;var f=Fa.test(h)?"MouseEvents":"HTMLEvents";a=k.createEvent(f);a.initEvent(h,!0,!0);a.namespace=c.join(".");a.___ot=d}a.___td=b;var g=a.___ot in V;return this.each(function(b,c){g&&D(c[a.___ot])&&(c["___i"+a.type]=!0,c[a.___ot](),c["___i"+a.type]=!1);c.dispatchEvent(a)})};
function Ha(a){return a.multiple&&a.options?O(t.call(a.options,function(a){return a.selected&&!a.disabled&&!a.parentNode.disabled}),"value"):a.value||""}var Ia=/%20/g,Ja=/\r?\n/g,Ma=/file|reset|submit|button|image/i,Na=/radio|checkbox/i;
E.serialize=function(){var a="";this.each(function(b,c){J(c.elements||[c],function(b,c){c.disabled||!c.name||"FIELDSET"===c.tagName||Ma.test(c.type)||Na.test(c.type)&&!c.checked||(b=Ha(c),void 0!==b&&(b=q(b)?b:[b],J(b,function(b,d){b=a;d="&"+encodeURIComponent(c.name)+"="+encodeURIComponent(d.replace(Ja,"\r\n")).replace(Ia,"+");a=b+d})))})});return a.slice(1)};
E.val=function(a){return arguments.length?this.each(function(b,c){if((b=c.multiple&&c.options)||Na.test(c.type)){var d=q(a)?ia.call(a,String):null===a?[]:[String(a)];b?J(c.options,function(a,b){b.selected=0<=d.indexOf(b.value)},!0):c.checked=0<=d.indexOf(c.value)}else c.value=void 0===a||null===a?"":a}):this[0]&&Ha(this[0])};E.clone=function(){return this.map(function(a,b){return b.cloneNode(!0)})};E.detach=function(a){M(this,a).each(function(a,c){c.parentNode&&c.parentNode.removeChild(c)});return this};
var Oa=/^\s*<(\w+)[^>]*>/,Pa=/^<(\w+)\s*\/?>(?:<\/\1>)?$/,Qa={"*":ca,tr:da,td:ea,th:ea,thead:p,tbody:p,tfoot:p};function qa(a){if(!C(a))return[];if(Pa.test(a))return[n(RegExp.$1)];var b=Oa.test(a)&&RegExp.$1;b=Qa[b]||Qa["*"];b.innerHTML=a;return F(b.childNodes).detach().get()}F.parseHTML=qa;E.empty=function(){return this.each(function(a,b){for(;b.firstChild;)b.removeChild(b.firstChild)})};
E.html=function(a){return arguments.length?void 0===a?this:this.each(function(b,c){x(c)&&(c.innerHTML=a)}):this[0]&&this[0].innerHTML};E.remove=function(a){M(this,a).detach().off();return this};E.text=function(a){return void 0===a?this[0]?this[0].textContent:"":this.each(function(b,c){x(c)&&(c.textContent=a)})};E.unwrap=function(){this.parent().each(function(a,b){"BODY"!==b.tagName&&(a=F(b),a.replaceWith(a.children()))});return this};
E.offset=function(){var a=this[0];if(a)return a=a.getBoundingClientRect(),{top:a.top+m.pageYOffset,left:a.left+m.pageXOffset}};E.offsetParent=function(){return this.map(function(a,b){for(a=b.offsetParent;a&&"static"===Q(a,"position");)a=a.offsetParent;return a||ba})};
E.position=function(){var a=this[0];if(a){var b="fixed"===Q(a,"position"),c=b?a.getBoundingClientRect():this.offset();if(!b){var d=a.ownerDocument;for(b=a.offsetParent||d.documentElement;(b===d.body||b===d.documentElement)&&"static"===Q(b,"position");)b=b.parentNode;b!==a&&x(b)&&(d=F(b).offset(),c.top-=d.top+R(b,"borderTopWidth"),c.left-=d.left+R(b,"borderLeftWidth"))}return{top:c.top-R(a,"marginTop"),left:c.left-R(a,"marginLeft")}}};
E.children=function(a){return M(F(P(O(this,function(a){return a.children}))),a)};E.contents=function(){return F(P(O(this,function(a){return"IFRAME"===a.tagName?[a.contentDocument]:"TEMPLATE"===a.tagName?a.content.childNodes:a.childNodes})))};E.find=function(a){return F(P(O(this,function(b){return v(a,b)})))};var Ra=/^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g,Sa=/^$|^module$|\/(java|ecma)script/i,Ta=["type","src","nonce","noModule"];
function Ua(a,b){a=F(a);a.filter("script").add(a.find("script")).each(function(a,d){if(Sa.test(d.type)&&ba.contains(d)){var c=n("script");c.text=d.textContent.replace(Ra,"");J(Ta,function(a,b){d[b]&&(c[b]=d[b])});b.head.insertBefore(c,null);b.head.removeChild(c)}})}
function Z(a,b,c,d,h,f,g,y){J(a,function(a,f){J(F(f),function(a,f){J(F(b),function(b,g){var l=c?g:f;b=c?a:b;g=c?f:g;l=b?l.cloneNode(!0):l;b=!b;h?g.insertBefore(l,d?g.firstChild:null):g.parentNode.insertBefore(l,d?g:g.nextSibling);b&&Ua(l,g.ownerDocument)},y)},g)},f);return b}E.after=function(){return Z(arguments,this,!1,!1,!1,!0,!0)};E.append=function(){return Z(arguments,this,!1,!1,!0)};E.appendTo=function(a){return Z(arguments,this,!0,!1,!0)};E.before=function(){return Z(arguments,this,!1,!0)};
E.insertAfter=function(a){return Z(arguments,this,!0,!1,!1,!1,!1,!0)};E.insertBefore=function(a){return Z(arguments,this,!0,!0)};E.prepend=function(){return Z(arguments,this,!1,!0,!0,!0,!0)};E.prependTo=function(a){return Z(arguments,this,!0,!0,!0,!1,!1,!0)};E.replaceWith=function(a){return this.before(a).remove()};E.replaceAll=function(a){F(a).replaceWith(this);return this};E.wrapAll=function(a){a=F(a);for(var b=a[0];b.children.length;)b=b.firstElementChild;this.first().before(a);return this.appendTo(b)};
E.wrap=function(a){return this.each(function(b,c){var d=F(a)[0];F(c).wrapAll(b?d.cloneNode(!0):d)})};E.wrapInner=function(a){return this.each(function(b,c){b=F(c);c=b.contents();c.length?c.wrapAll(a):b.append(a)})};E.has=function(a){var b=C(a)?function(b,d){return v(a,d).length}:function(b,d){return d.contains(a)};return this.filter(b)};E.is=function(a){var b=L(a);return u.call(this,function(a,d){return b.call(a,d,a)})};E.next=function(a,b,c){return M(F(P(O(this,"nextElementSibling",b,c))),a)};
E.nextAll=function(a){return this.next(a,!0)};E.nextUntil=function(a,b){return this.next(b,!0,a)};E.not=function(a){var b=L(a);return this.filter(function(c,d){return(!C(a)||x(d))&&!b.call(d,c,d)})};E.parent=function(a){return M(F(P(O(this,"parentNode"))),a)};E.index=function(a){var b=a?F(a)[0]:this[0];a=a?this:F(b).parent().children();return ha.call(a,b)};E.closest=function(a){var b=this.filter(a);if(b.length)return b;var c=this.parent();return c.length?c.closest(a):b};
E.parents=function(a,b){return M(F(P(O(this,"parentElement",!0,b))),a)};E.parentsUntil=function(a,b){return this.parents(b,a)};E.prev=function(a,b,c){return M(F(P(O(this,"previousElementSibling",b,c))),a)};E.prevAll=function(a){return this.prev(a,!0)};E.prevUntil=function(a,b){return this.prev(b,!0,a)};E.siblings=function(a){return M(F(P(O(this,function(a){return F(a).parent().children().not(a)}))),a)};"undefined"!==typeof exports?module.exports=F:m.cash=m.$=F;
})();!function(t,o){"function"==typeof define&&define.amd?define(o):"object"==typeof exports?module.exports=o():t.tingle=o()}(this,function(){var o=!1;function t(t){this.opts=function(){for(var t=1;t<arguments.length;t++)for(var o in arguments[t])arguments[t].hasOwnProperty(o)&&(arguments[0][o]=arguments[t][o]);return arguments[0]}({},{onClose:null,onOpen:null,beforeOpen:null,beforeClose:null,stickyFooter:!1,footer:!1,cssClass:[],closeLabel:"Close",closeMethods:["overlay","button","escape"]},t),this.init()}function e(){this.modalBoxFooter&&(this.modalBoxFooter.style.width=this.modalBox.clientWidth+"px",this.modalBoxFooter.style.left=this.modalBox.offsetLeft+"px")}return t.prototype.init=function(){if(!this.modal)return function(){this.modal=document.createElement("div"),this.modal.classList.add("tingle-modal"),0!==this.opts.closeMethods.length&&-1!==this.opts.closeMethods.indexOf("overlay")||this.modal.classList.add("tingle-modal--noOverlayClose");this.modal.style.display="none",this.opts.cssClass.forEach(function(t){"string"==typeof t&&this.modal.classList.add(t)},this),-1!==this.opts.closeMethods.indexOf("button")&&(this.modalCloseBtn=document.createElement("button"),this.modalCloseBtn.type="button",this.modalCloseBtn.classList.add("tingle-modal__close"),this.modalCloseBtnIcon=document.createElement("span"),this.modalCloseBtnIcon.classList.add("tingle-modal__closeIcon"),this.modalCloseBtnIcon.innerHTML='<svg viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg"><path d="M.3 9.7c.2.2.4.3.7.3.3 0 .5-.1.7-.3L5 6.4l3.3 3.3c.2.2.5.3.7.3.2 0 .5-.1.7-.3.4-.4.4-1 0-1.4L6.4 5l3.3-3.3c.4-.4.4-1 0-1.4-.4-.4-1-.4-1.4 0L5 3.6 1.7.3C1.3-.1.7-.1.3.3c-.4.4-.4 1 0 1.4L3.6 5 .3 8.3c-.4.4-.4 1 0 1.4z" fill="#000" fill-rule="nonzero"/></svg>',this.modalCloseBtnLabel=document.createElement("span"),this.modalCloseBtnLabel.classList.add("tingle-modal__closeLabel"),this.modalCloseBtnLabel.innerHTML=this.opts.closeLabel,this.modalCloseBtn.appendChild(this.modalCloseBtnIcon),this.modalCloseBtn.appendChild(this.modalCloseBtnLabel));this.modalBox=document.createElement("div"),this.modalBox.classList.add("tingle-modal-box"),this.modalBoxContent=document.createElement("div"),this.modalBoxContent.classList.add("tingle-modal-box__content"),this.modalBox.appendChild(this.modalBoxContent),-1!==this.opts.closeMethods.indexOf("button")&&this.modal.appendChild(this.modalCloseBtn);this.modal.appendChild(this.modalBox)}.call(this),function(){this._events={clickCloseBtn:this.close.bind(this),clickOverlay:function(t){var o=this.modal.offsetWidth-this.modal.clientWidth,e=t.clientX>=this.modal.offsetWidth-15,s=this.modal.scrollHeight!==this.modal.offsetHeight;if("MacIntel"===navigator.platform&&0==o&&e&&s)return;-1!==this.opts.closeMethods.indexOf("overlay")&&!function(t,o){for(;(t=t.parentElement)&&!t.classList.contains(o););return t}(t.target,"tingle-modal")&&t.clientX<this.modal.clientWidth&&this.close()}.bind(this),resize:this.checkOverflow.bind(this),keyboardNav:function(t){-1!==this.opts.closeMethods.indexOf("escape")&&27===t.which&&this.isOpen()&&this.close()}.bind(this)},-1!==this.opts.closeMethods.indexOf("button")&&this.modalCloseBtn.addEventListener("click",this._events.clickCloseBtn);this.modal.addEventListener("mousedown",this._events.clickOverlay),window.addEventListener("resize",this._events.resize),document.addEventListener("keydown",this._events.keyboardNav)}.call(this),document.body.appendChild(this.modal,document.body.firstChild),this.opts.footer&&this.addFooter(),this},t.prototype._busy=function(t){o=t},t.prototype._isBusy=function(){return o},t.prototype.destroy=function(){null!==this.modal&&(this.isOpen()&&this.close(!0),function(){-1!==this.opts.closeMethods.indexOf("button")&&this.modalCloseBtn.removeEventListener("click",this._events.clickCloseBtn);this.modal.removeEventListener("mousedown",this._events.clickOverlay),window.removeEventListener("resize",this._events.resize),document.removeEventListener("keydown",this._events.keyboardNav)}.call(this),this.modal.parentNode.removeChild(this.modal),this.modal=null)},t.prototype.isOpen=function(){return!!this.modal.classList.contains("tingle-modal--visible")},t.prototype.open=function(){if(!this._isBusy()){this._busy(!0);var t=this;return"function"==typeof t.opts.beforeOpen&&t.opts.beforeOpen(),this.modal.style.removeProperty?this.modal.style.removeProperty("display"):this.modal.style.removeAttribute("display"),document.getSelection().removeAllRanges(),this._scrollPosition=window.pageYOffset,document.body.classList.add("tingle-enabled"),document.body.style.top=-this._scrollPosition+"px",this.setStickyFooter(this.opts.stickyFooter),this.modal.classList.add("tingle-modal--visible"),"function"==typeof t.opts.onOpen&&t.opts.onOpen.call(t),t._busy(!1),this.checkOverflow(),this}},t.prototype.close=function(t){if(!this._isBusy()){if(this._busy(!0),!1,"function"==typeof this.opts.beforeClose)if(!this.opts.beforeClose.call(this))return void this._busy(!1);document.body.classList.remove("tingle-enabled"),document.body.style.top=null,window.scrollTo({top:this._scrollPosition,behavior:"instant"}),this.modal.classList.remove("tingle-modal--visible");var o=this;o.modal.style.display="none","function"==typeof o.opts.onClose&&o.opts.onClose.call(this),o._busy(!1)}},t.prototype.setContent=function(t){return"string"==typeof t?this.modalBoxContent.innerHTML=t:(this.modalBoxContent.innerHTML="",this.modalBoxContent.appendChild(t)),this.isOpen()&&this.checkOverflow(),this},t.prototype.getContent=function(){return this.modalBoxContent},t.prototype.addFooter=function(){return function(){this.modalBoxFooter=document.createElement("div"),this.modalBoxFooter.classList.add("tingle-modal-box__footer"),this.modalBox.appendChild(this.modalBoxFooter)}.call(this),this},t.prototype.setFooterContent=function(t){return this.modalBoxFooter.innerHTML=t,this},t.prototype.getFooterContent=function(){return this.modalBoxFooter},t.prototype.setStickyFooter=function(t){return this.isOverflow()||(t=!1),t?(this.modalBox.contains(this.modalBoxFooter)&&(this.modalBox.removeChild(this.modalBoxFooter),this.modal.appendChild(this.modalBoxFooter),this.modalBoxFooter.classList.add("tingle-modal-box__footer--sticky"),e.call(this)),this.modalBoxContent.style["padding-bottom"]=this.modalBoxFooter.clientHeight+20+"px"):this.modalBoxFooter&&(this.modalBox.contains(this.modalBoxFooter)||(this.modal.removeChild(this.modalBoxFooter),this.modalBox.appendChild(this.modalBoxFooter),this.modalBoxFooter.style.width="auto",this.modalBoxFooter.style.left="",this.modalBoxContent.style["padding-bottom"]="",this.modalBoxFooter.classList.remove("tingle-modal-box__footer--sticky"))),this},t.prototype.addFooterBtn=function(t,o,e){var s=document.createElement("button");return s.innerHTML=t,s.addEventListener("click",e),"string"==typeof o&&o.length&&o.split(" ").forEach(function(t){s.classList.add(t)}),this.modalBoxFooter.appendChild(s),s},t.prototype.resize=function(){console.warn("Resize is deprecated and will be removed in version 1.0")},t.prototype.isOverflow=function(){return window.innerHeight<=this.modalBox.clientHeight},t.prototype.checkOverflow=function(){this.modal.classList.contains("tingle-modal--visible")&&(this.isOverflow()?this.modal.classList.add("tingle-modal--overflow"):this.modal.classList.remove("tingle-modal--overflow"),!this.isOverflow()&&this.opts.stickyFooter?this.setStickyFooter(!1):this.isOverflow()&&this.opts.stickyFooter&&(e.call(this),this.setStickyFooter(!0)))},{modal:t}});!function(){"use strict";var e=function(t){if(!(this instanceof e))return new e(t);if(this.version=1,this.support=!("undefined"==typeof File||"undefined"==typeof Blob||"undefined"==typeof FileList||!Blob.prototype.webkitSlice&&!Blob.prototype.mozSlice&&!Blob.prototype.slice),!this.support)return!1;var r=this;r.files=[],r.defaults={chunkSize:1048576,forceChunkSize:!1,simultaneousUploads:3,fileParameterName:"file",chunkNumberParameterName:"resumableChunkNumber",chunkSizeParameterName:"resumableChunkSize",currentChunkSizeParameterName:"resumableCurrentChunkSize",totalSizeParameterName:"resumableTotalSize",typeParameterName:"resumableType",identifierParameterName:"resumableIdentifier",fileNameParameterName:"resumableFilename",relativePathParameterName:"resumableRelativePath",totalChunksParameterName:"resumableTotalChunks",dragOverClass:"dragover",throttleProgressCallbacks:.5,query:{},headers:{},preprocess:null,preprocessFile:null,method:"multipart",uploadMethod:"POST",testMethod:"GET",prioritizeFirstAndLastChunk:!1,target:"/",testTarget:null,parameterNamespace:"",testChunks:!0,generateUniqueIdentifier:null,getTarget:null,maxChunkRetries:100,chunkRetryInterval:void 0,permanentErrors:[400,401,403,404,409,415,500,501],maxFiles:void 0,withCredentials:!1,xhrTimeout:0,clearInput:!0,chunkFormat:"blob",setChunkTypeFromFile:!1,maxFilesErrorCallback:function(e,t){var n=r.getOpt("maxFiles");alert("Please upload no more than "+n+" file"+(1===n?"":"s")+" at a time.")},minFileSize:1,minFileSizeErrorCallback:function(e,t){alert(e.fileName||e.name+" is too small, please upload files larger than "+n.formatSize(r.getOpt("minFileSize"))+".")},maxFileSize:void 0,maxFileSizeErrorCallback:function(e,t){alert(e.fileName||e.name+" is too large, please upload files less than "+n.formatSize(r.getOpt("maxFileSize"))+".")},fileType:[],fileTypeErrorCallback:function(e,t){alert(e.fileName||e.name+" has type not allowed, please upload files of type "+r.getOpt("fileType")+".")}},r.opts=t||{},r.getOpt=function(t){var r=this;if(t instanceof Array){var i={};return n.each(t,function(e){i[e]=r.getOpt(e)}),i}if(r instanceof p){if(void 0!==r.opts[t])return r.opts[t];r=r.fileObj}if(r instanceof c){if(void 0!==r.opts[t])return r.opts[t];r=r.resumableObj}if(r instanceof e)return void 0!==r.opts[t]?r.opts[t]:r.defaults[t]},r.indexOf=function(e,t){if(e.indexOf)return e.indexOf(t);for(var r=0;r<e.length;r++)if(e[r]===t)return r;return-1},r.events=[],r.on=function(e,t){r.events.push(e.toLowerCase(),t)},r.fire=function(){for(var e=[],t=0;t<arguments.length;t++)e.push(arguments[t]);var n=e[0].toLowerCase();for(t=0;t<=r.events.length;t+=2)r.events[t]==n&&r.events[t+1].apply(r,e.slice(1)),"catchall"==r.events[t]&&r.events[t+1].apply(null,e);"fileerror"==n&&r.fire("error",e[2],e[1]),"fileprogress"==n&&r.fire("progress")};var n={stopEvent:function(e){e.stopPropagation(),e.preventDefault()},each:function(e,t){if(void 0!==e.length){for(var r=0;r<e.length;r++)if(!1===t(e[r]))return}else for(r in e)if(!1===t(r,e[r]))return},generateUniqueIdentifier:function(e,t){var n=r.getOpt("generateUniqueIdentifier");if("function"==typeof n)return n(e,t);var i=e.webkitRelativePath||e.relativePath||e.fileName||e.name;return e.size+"-"+i.replace(/[^0-9a-zA-Z_-]/gim,"")},contains:function(e,t){var r=!1;return n.each(e,function(e){return e!=t||(r=!0,!1)}),r},formatSize:function(e){return e<1024?e+" bytes":e<1048576?(e/1024).toFixed(0)+" KB":e<1073741824?(e/1024/1024).toFixed(1)+" MB":(e/1024/1024/1024).toFixed(1)+" GB"},getTarget:function(e,t){var n=r.getOpt("target");if("test"===e&&r.getOpt("testTarget")&&(n="/"===r.getOpt("testTarget")?r.getOpt("target"):r.getOpt("testTarget")),"function"==typeof n)return n(t);var i=n.indexOf("?")<0?"?":"&",a=t.join("&");return a&&(n=n+i+a),n}},i=function(e){e.currentTarget.classList.remove(r.getOpt("dragOverClass")),n.stopEvent(e),e.dataTransfer&&e.dataTransfer.items?u(e.dataTransfer.items,e):e.dataTransfer&&e.dataTransfer.files&&u(e.dataTransfer.files,e)},a=function(e){e.currentTarget.classList.remove(r.getOpt("dragOverClass"))},s=function(e){e.preventDefault();var t=e.dataTransfer;r.indexOf(t.types,"Files")>=0?(e.stopPropagation(),t.dropEffect="copy",t.effectAllowed="copy",e.currentTarget.classList.add(r.getOpt("dragOverClass"))):(t.dropEffect="none",t.effectAllowed="none")};function o(e,t,r,n){var i;return e.isFile?e.file(function(e){e.relativePath=t+e.name,r.push(e),n()}):(e.isDirectory?i=e:e instanceof File&&r.push(e),"function"==typeof e.webkitGetAsEntry&&(i=e.webkitGetAsEntry()),i&&i.isDirectory?function(e,t,r,n){var i=e.createReader(),a=[];!function e(){i.readEntries(function(i){if(i.length)return a=a.concat(i),e();l(a.map(function(e){return o.bind(null,e,t,r)}),n)})}()}(i,t+i.name+"/",r,n):("function"==typeof e.getAsFile&&(e=e.getAsFile())instanceof File&&(e.relativePath=t+e.name,r.push(e)),void n()))}function l(e,t){if(!e||0===e.length)return t();e[0](function(){l(e.slice(1),t)})}function u(e,t){if(e.length){r.fire("beforeAdd");var n=[];l(Array.prototype.map.call(e,function(e){var t=e;return"function"==typeof e.webkitGetAsEntry&&(t=e.webkitGetAsEntry()),o.bind(null,t,"",n)}),function(){n.length&&f(n,t)})}}var f=function(e,t){var i=0,a=r.getOpt(["maxFiles","minFileSize","maxFileSize","maxFilesErrorCallback","minFileSizeErrorCallback","maxFileSizeErrorCallback","fileType","fileTypeErrorCallback"]);if(void 0!==a.maxFiles&&a.maxFiles<e.length+r.files.length){if(1!==a.maxFiles||1!==r.files.length||1!==e.length)return a.maxFilesErrorCallback(e,i++),!1;r.removeFile(r.files[0])}var s=[],o=[],l=e.length,u=function(){if(!--l){if(!s.length&&!o.length)return;window.setTimeout(function(){r.fire("filesAdded",s,o)},0)}};n.each(e,function(e){var l=e.name,f=e.type;if(a.fileType.length>0){var p=!1;for(var d in a.fileType){a.fileType[d]=a.fileType[d].replace(/\s/g,"").toLowerCase();var m=(a.fileType[d].match(/^[^.][^/]+$/)?".":"")+a.fileType[d];if(l.substr(-1*m.length).toLowerCase()===m||-1!==m.indexOf("/")&&(-1!==m.indexOf("*")&&f.substr(0,m.indexOf("*"))===m.substr(0,m.indexOf("*"))||f===m)){p=!0;break}}if(!p)return a.fileTypeErrorCallback(e,i++),!0}if(void 0!==a.minFileSize&&e.size<a.minFileSize)return a.minFileSizeErrorCallback(e,i++),!0;if(void 0!==a.maxFileSize&&e.size>a.maxFileSize)return a.maxFileSizeErrorCallback(e,i++),!0;function h(n){r.getFromUniqueIdentifier(n)?o.push(e):function(){e.uniqueIdentifier=n;var i=new c(r,e,n);r.files.push(i),s.push(i),i.container=void 0!==t?t.srcElement:null,window.setTimeout(function(){r.fire("fileAdded",i,t)},0)}(),u()}var g=n.generateUniqueIdentifier(e,t);g&&"function"==typeof g.then?g.then(function(e){h(e)},function(){u()}):h(g)})};function c(e,t,r){var i=this;i.opts={},i.getOpt=e.getOpt,i._prevProgress=0,i.resumableObj=e,i.file=t,i.fileName=t.fileName||t.name,i.size=t.size,i.relativePath=t.relativePath||t.webkitRelativePath||i.fileName,i.uniqueIdentifier=r,i._pause=!1,i.container="",i.preprocessState=0;var a=void 0!==r,s=function(e,t){switch(e){case"progress":i.resumableObj.fire("fileProgress",i,t);break;case"error":i.abort(),a=!0,i.chunks=[],i.resumableObj.fire("fileError",i,t);break;case"success":if(a)return;i.resumableObj.fire("fileProgress",i,t),i.isComplete()&&i.resumableObj.fire("fileSuccess",i,t);break;case"retry":i.resumableObj.fire("fileRetry",i)}};return i.chunks=[],i.abort=function(){var e=0;n.each(i.chunks,function(t){"uploading"==t.status()&&(t.abort(),e++)}),e>0&&i.resumableObj.fire("fileProgress",i)},i.cancel=function(){var e=i.chunks;i.chunks=[],n.each(e,function(e){"uploading"==e.status()&&(e.abort(),i.resumableObj.uploadNextChunk())}),i.resumableObj.removeFile(i),i.resumableObj.fire("fileProgress",i)},i.retry=function(){i.bootstrap();var e=!1;i.resumableObj.on("chunkingComplete",function(){e||i.resumableObj.upload(),e=!0})},i.bootstrap=function(){i.abort(),a=!1,i.chunks=[],i._prevProgress=0;for(var e=i.getOpt("forceChunkSize")?Math.ceil:Math.floor,t=Math.max(e(i.file.size/i.getOpt("chunkSize")),1),r=0;r<t;r++)!function(e){i.chunks.push(new p(i.resumableObj,i,e,s)),i.resumableObj.fire("chunkingProgress",i,e/t)}(r);window.setTimeout(function(){i.resumableObj.fire("chunkingComplete",i)},0)},i.progress=function(){if(a)return 1;var e=0,t=!1;return n.each(i.chunks,function(r){"error"==r.status()&&(t=!0),e+=r.progress(!0)}),e=t?1:e>.99999?1:e,e=Math.max(i._prevProgress,e),i._prevProgress=e,e},i.isUploading=function(){var e=!1;return n.each(i.chunks,function(t){if("uploading"==t.status())return e=!0,!1}),e},i.isComplete=function(){var e=!1;return 1!==i.preprocessState&&(n.each(i.chunks,function(t){var r=t.status();if("pending"==r||"uploading"==r||1===t.preprocessState)return e=!0,!1}),!e)},i.pause=function(e){i._pause=void 0===e?!i._pause:e},i.isPaused=function(){return i._pause},i.preprocessFinished=function(){i.preprocessState=2,i.upload()},i.upload=function(){var e=!1;if(!1===i.isPaused()){var t=i.getOpt("preprocessFile");if("function"==typeof t)switch(i.preprocessState){case 0:return i.preprocessState=1,t(i),!0;case 1:return!0}n.each(i.chunks,function(t){if("pending"==t.status()&&1!==t.preprocessState)return t.send(),e=!0,!1})}return e},i.markChunksCompleted=function(e){if(i.chunks&&!(i.chunks.length<=e))for(var t=0;t<e;t++)i.chunks[t].markComplete=!0},i.resumableObj.fire("chunkingStart",i),i.bootstrap(),this}function p(e,t,r,i){var a=this;a.opts={},a.getOpt=e.getOpt,a.resumableObj=e,a.fileObj=t,a.fileObjSize=t.size,a.fileObjType=t.file.type,a.offset=r,a.callback=i,a.lastProgressCallback=new Date,a.tested=!1,a.retries=0,a.pendingRetry=!1,a.preprocessState=0,a.markComplete=!1;var s=a.getOpt("chunkSize");return a.loaded=0,a.startByte=a.offset*s,a.endByte=Math.min(a.fileObjSize,(a.offset+1)*s),a.fileObjSize-a.endByte<s&&!a.getOpt("forceChunkSize")&&(a.endByte=a.fileObjSize),a.xhr=null,a.test=function(){a.xhr=new XMLHttpRequest;var e=function(e){a.tested=!0;var t=a.status();"success"==t?(a.callback(t,a.message()),a.resumableObj.uploadNextChunk()):a.send()};a.xhr.addEventListener("load",e,!1),a.xhr.addEventListener("error",e,!1),a.xhr.addEventListener("timeout",e,!1);var t=[],r=a.getOpt("parameterNamespace"),i=a.getOpt("query");"function"==typeof i&&(i=i(a.fileObj,a)),n.each(i,function(e,n){t.push([encodeURIComponent(r+e),encodeURIComponent(n)].join("="))}),t=t.concat([["chunkNumberParameterName",a.offset+1],["chunkSizeParameterName",a.getOpt("chunkSize")],["currentChunkSizeParameterName",a.endByte-a.startByte],["totalSizeParameterName",a.fileObjSize],["typeParameterName",a.fileObjType],["identifierParameterName",a.fileObj.uniqueIdentifier],["fileNameParameterName",a.fileObj.fileName],["relativePathParameterName",a.fileObj.relativePath],["totalChunksParameterName",a.fileObj.chunks.length]].filter(function(e){return a.getOpt(e[0])}).map(function(e){return[r+a.getOpt(e[0]),encodeURIComponent(e[1])].join("=")})),a.xhr.open(a.getOpt("testMethod"),n.getTarget("test",t)),a.xhr.timeout=a.getOpt("xhrTimeout"),a.xhr.withCredentials=a.getOpt("withCredentials");var s=a.getOpt("headers");"function"==typeof s&&(s=s(a.fileObj,a)),n.each(s,function(e,t){a.xhr.setRequestHeader(e,t)}),a.xhr.send(null)},a.preprocessFinished=function(){a.preprocessState=2,a.send()},a.send=function(){var e=a.getOpt("preprocess");if("function"==typeof e)switch(a.preprocessState){case 0:return a.preprocessState=1,void e(a);case 1:return}if(!a.getOpt("testChunks")||a.tested){a.xhr=new XMLHttpRequest,a.xhr.upload.addEventListener("progress",function(e){new Date-a.lastProgressCallback>1e3*a.getOpt("throttleProgressCallbacks")&&(a.callback("progress"),a.lastProgressCallback=new Date),a.loaded=e.loaded||0},!1),a.loaded=0,a.pendingRetry=!1,a.callback("progress");var t=function(e){var t=a.status();if("success"==t||"error"==t)a.callback(t,a.message()),a.resumableObj.uploadNextChunk();else{a.callback("retry",a.message()),a.abort(),a.retries++;var r=a.getOpt("chunkRetryInterval");void 0!==r?(a.pendingRetry=!0,setTimeout(a.send,r)):a.send()}};a.xhr.addEventListener("load",t,!1),a.xhr.addEventListener("error",t,!1),a.xhr.addEventListener("timeout",t,!1);var r=[["chunkNumberParameterName",a.offset+1],["chunkSizeParameterName",a.getOpt("chunkSize")],["currentChunkSizeParameterName",a.endByte-a.startByte],["totalSizeParameterName",a.fileObjSize],["typeParameterName",a.fileObjType],["identifierParameterName",a.fileObj.uniqueIdentifier],["fileNameParameterName",a.fileObj.fileName],["relativePathParameterName",a.fileObj.relativePath],["totalChunksParameterName",a.fileObj.chunks.length]].filter(function(e){return a.getOpt(e[0])}).reduce(function(e,t){return e[a.getOpt(t[0])]=t[1],e},{}),i=a.getOpt("query");"function"==typeof i&&(i=i(a.fileObj,a)),n.each(i,function(e,t){r[e]=t});var s=a.fileObj.file.slice?"slice":a.fileObj.file.mozSlice?"mozSlice":a.fileObj.file.webkitSlice?"webkitSlice":"slice",o=a.fileObj.file[s](a.startByte,a.endByte,a.getOpt("setChunkTypeFromFile")?a.fileObj.file.type:""),l=null,u=[],f=a.getOpt("parameterNamespace");if("octet"===a.getOpt("method"))l=o,n.each(r,function(e,t){u.push([encodeURIComponent(f+e),encodeURIComponent(t)].join("="))});else if(l=new FormData,n.each(r,function(e,t){l.append(f+e,t),u.push([encodeURIComponent(f+e),encodeURIComponent(t)].join("="))}),"blob"==a.getOpt("chunkFormat"))l.append(f+a.getOpt("fileParameterName"),o,a.fileObj.fileName);else if("base64"==a.getOpt("chunkFormat")){var c=new FileReader;c.onload=function(e){l.append(f+a.getOpt("fileParameterName"),c.result),a.xhr.send(l)},c.readAsDataURL(o)}var p=n.getTarget("upload",u),d=a.getOpt("uploadMethod");a.xhr.open(d,p),"octet"===a.getOpt("method")&&a.xhr.setRequestHeader("Content-Type","application/octet-stream"),a.xhr.timeout=a.getOpt("xhrTimeout"),a.xhr.withCredentials=a.getOpt("withCredentials");var m=a.getOpt("headers");"function"==typeof m&&(m=m(a.fileObj,a)),n.each(m,function(e,t){a.xhr.setRequestHeader(e,t)}),"blob"==a.getOpt("chunkFormat")&&a.xhr.send(l)}else a.test()},a.abort=function(){a.xhr&&a.xhr.abort(),a.xhr=null},a.status=function(){return a.pendingRetry?"uploading":a.markComplete?"success":a.xhr?a.xhr.readyState<4?"uploading":200==a.xhr.status||201==a.xhr.status?"success":n.contains(a.getOpt("permanentErrors"),a.xhr.status)||a.retries>=a.getOpt("maxChunkRetries")?"error":(a.abort(),"pending"):"pending"},a.message=function(){return a.xhr?a.xhr.responseText:""},a.progress=function(e){void 0===e&&(e=!1);var t=e?(a.endByte-a.startByte)/a.fileObjSize:1;if(a.pendingRetry)return 0;switch(a.xhr&&a.xhr.status||a.markComplete||(t*=.95),a.status()){case"success":case"error":return 1*t;case"pending":return 0*t;default:return a.loaded/(a.endByte-a.startByte)*t}},this}return r.uploadNextChunk=function(){var e=!1;if(r.getOpt("prioritizeFirstAndLastChunk")&&(n.each(r.files,function(t){return t.chunks.length&&"pending"==t.chunks[0].status()&&0===t.chunks[0].preprocessState?(t.chunks[0].send(),e=!0,!1):t.chunks.length>1&&"pending"==t.chunks[t.chunks.length-1].status()&&0===t.chunks[t.chunks.length-1].preprocessState?(t.chunks[t.chunks.length-1].send(),e=!0,!1):void 0}),e))return!0;if(n.each(r.files,function(t){if(e=t.upload())return!1}),e)return!0;var t=!1;return n.each(r.files,function(e){if(!e.isComplete())return t=!0,!1}),t||r.fire("complete"),!1},r.assignBrowse=function(e,t){void 0===e.length&&(e=[e]),n.each(e,function(e){var n;"INPUT"===e.tagName&&"file"===e.type?n=e:((n=document.createElement("input")).setAttribute("type","file"),n.style.display="none",e.addEventListener("click",function(){n.style.opacity=0,n.style.display="block",n.focus(),n.click(),n.style.display="none"},!1),e.appendChild(n));var i=r.getOpt("maxFiles");void 0===i||1!=i?n.setAttribute("multiple","multiple"):n.removeAttribute("multiple"),t?n.setAttribute("webkitdirectory","webkitdirectory"):n.removeAttribute("webkitdirectory");var a=r.getOpt("fileType");void 0!==a&&a.length>=1?n.setAttribute("accept",a.map(function(e){return(e=e.replace(/\s/g,"").toLowerCase()).match(/^[^.][^/]+$/)&&(e="."+e),e}).join(",")):n.removeAttribute("accept"),n.addEventListener("change",function(e){f(e.target.files,e),r.getOpt("clearInput")&&(e.target.value="")},!1)})},r.assignDrop=function(e){void 0===e.length&&(e=[e]),n.each(e,function(e){e.addEventListener("dragover",s,!1),e.addEventListener("dragenter",s,!1),e.addEventListener("dragleave",a,!1),e.addEventListener("drop",i,!1)})},r.unAssignDrop=function(e){void 0===e.length&&(e=[e]),n.each(e,function(e){e.removeEventListener("dragover",s),e.removeEventListener("dragenter",s),e.removeEventListener("dragleave",a),e.removeEventListener("drop",i)})},r.isUploading=function(){var e=!1;return n.each(r.files,function(t){if(t.isUploading())return e=!0,!1}),e},r.upload=function(){if(!r.isUploading()){r.fire("uploadStart");for(var e=1;e<=r.getOpt("simultaneousUploads");e++)r.uploadNextChunk()}},r.pause=function(){n.each(r.files,function(e){e.abort()}),r.fire("pause")},r.cancel=function(){r.fire("beforeCancel");for(var e=r.files.length-1;e>=0;e--)r.files[e].cancel();r.fire("cancel")},r.progress=function(){var e=0,t=0;return n.each(r.files,function(r){e+=r.progress()*r.size,t+=r.size}),t>0?e/t:0},r.addFile=function(e,t){f([e],t)},r.addFiles=function(e,t){f(e,t)},r.removeFile=function(e){for(var t=r.files.length-1;t>=0;t--)r.files[t]===e&&r.files.splice(t,1)},r.getFromUniqueIdentifier=function(e){var t=!1;return n.each(r.files,function(r){r.uniqueIdentifier==e&&(t=r)}),t},r.getSize=function(){var e=0;return n.each(r.files,function(t){e+=t.size}),e},r.handleDropEvent=function(e){i(e)},r.handleChangeEvent=function(e){f(e.target.files,e),e.target.value=""},r.updateQuery=function(e){r.opts.query=e},this};"undefined"!=typeof module?(module.exports=e,module.exports.Resumable=e):"function"==typeof define&&define.amd?define(function(){return e}):window.Resumable=e}();

/* extend cash.js with some useful bits */
$.inArray = function(item, list) {
    for (var i in list) {
        if (list[i] === item) {
            return i;
        }
    }
    return -1;
};
$.isEmptyObject = function(obj) {
    for (var key in obj) {
        if (obj.hasOwnProperty(key)) {
            return false;
        }
    }
    return true;
};
$.fn.submit = function() { this[0].submit(); }
$.fn.focus = function() { this[0].focus(); };
$.fn.serializeArray = function() {
    var parts;
    var res = [];
    var args = this.serialize().split('&');
    for (var i in args) {
        parts = args[i].split('=');
        res.push({'name': parts[0], 'value': parts[1]});
    }
    return res.map(function(x) {return {name: x.name, value: decodeURIComponent(x.value)}});
};
$.fn.sort = function(sort_function) {
    var list = [];
    for (var i=0, len=this.length; i < len; i++) {
        list.push(this[i]);
    }
    return $(list.sort(sort_function));
};

/* swipe event handler */
var swipe_event = function(el, callback, direction) {
    var start_x, start_y, dist_x, dist_y, threshold = 150, restraint = 100,
        allowed_time = 500, start_time;

    el.addEventListener('touchstart', function(e) {
        var touchobj = e.changedTouches[0];
        start_x = touchobj.pageX;
        start_y = touchobj.pageY;
        start_time = new Date().getTime();
    }, false);

    el.addEventListener('touchend', function(e) {
        var touchobj = e.changedTouches[0];
        dist_x = touchobj.pageX - start_x;
        dist_y = touchobj.pageY - start_y;
        if ((new Date().getTime() - start_time) <= allowed_time) {
            if (Math.abs(dist_x) >= threshold && Math.abs(dist_y) <= restraint) {
                var dir = (dist_x < 0) ? 'left' : 'right';
                if (dir == direction) {
                    callback();
                }
            }
        }
    }, false);
};

/* ajax multiplexer */
var Hm_Ajax = {
    batch_callbacks: {},
    callback_hooks: [],
    p_callbacks: [],
    aborted: false,
    err_condition: false,
    batch_callback: false,
    active_reqs: 0,
    icon_loading_id: false,

    get_ajax_hook_name: function(args) {
        var index;
        for (index in args) {
            if (args[index]['name'] == 'hm_ajax_hook') {
                return args[index]['value'];
            }
        }
        return;
    },

    request: function(args, callback, extra, no_icon, batch_callback, on_failure) {
        var bcb = false;
        if (typeof batch_callback != 'undefined' && $.inArray(batch_callback, this.batch_callbacks) === -1) {
            bcb = batch_callback.toString();
            var detail = Hm_Ajax.batch_callbacks[bcb];
            if (typeof detail !== 'undefined') {
                Hm_Ajax.batch_callbacks[bcb] += 1;
            }
            else {
                Hm_Ajax.batch_callbacks[bcb] = 1;
            }
        }
        var name = Hm_Ajax.get_ajax_hook_name(args);
        var ajax = new Hm_Ajax_Request();
        if (!no_icon) {
            Hm_Ajax.show_loading_icon();
            $('body').addClass('wait');
        }
        Hm_Ajax.active_reqs++;
        return ajax.make_request(args, callback, extra, name, on_failure, batch_callback);
    },

    show_loading_icon: function() {
        if (Hm_Ajax.icon_loading_id !== false) {
            return;
        }
        var hm_loading_pos = $('.loading_icon').width()/40;
        $('.loading_icon').show();
        function move_background_image() {
            hm_loading_pos = hm_loading_pos + 50;
            $('.loading_icon').css('background-position', hm_loading_pos+'px 0');
            Hm_Ajax.icon_loading_id = setTimeout(move_background_image, 100);
        }
        move_background_image();
    },

    stop_loading_icon : function(loading_id) {
        clearTimeout(loading_id);
        $('.loading_icon').hide();
        Hm_Ajax.icon_loading_id = false;
    },

    process_callback_hooks: function(name, res) {
        var hook;
        var func;
        for (var i in Hm_Ajax.callback_hooks) {
            hook = Hm_Ajax.callback_hooks[i];
            if (hook[0] == name || hook[0] == '*') {
                func = hook[1];
                func(res);
                if (hook[0] == '*') {
                    if ($.inArray(hook, Hm_Ajax.p_callbacks) === -1) {
                        Hm_Ajax.p_callbacks.push(hook);
                    }
                }
            }
        }
    },

    add_callback_hook: function(request_name, hook_function) {
        Hm_Ajax.callback_hooks.push([request_name, hook_function]);
    }
};

/* ajax request wrapper */
var Hm_Ajax_Request = function() { return { 
    callback: false,
    name: false,
    batch_callback: false,
    index: 0,
    on_failure: false,
    start_time: 0,

    xhr_fetch: function(config) {
        var xhr = new XMLHttpRequest();
        var data = '';
        if (config.data) {
            data = this.format_xhr_data(config.data);
        }
        xhr.open('POST', window.location.href)
        xhr.addEventListener('load', function() {
            config.callback.done(Hm_Utils.json_decode(xhr.response, true), xhr);
            config.callback.always(Hm_Utils.json_decode(xhr.response, true));
        });
        xhr.addEventListener('error', function() {
            Hm_Ajax.stop_loading_icon(Hm_Ajax.icon_loading_id);
            config.callback.fail(xhr);
            config.callback.always(Hm_Utils.json_decode(xhr.response, true));
        });
        xhr.addEventListener('abort', function() {
            Hm_Ajax.stop_loading_icon(Hm_Ajax.icon_loading_id);
            config.callback.always(Hm_Utils.json_decode(xhr.response, true));

        });
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.setRequestHeader('X-Requested-with', 'xmlhttprequest');
        xhr.send(data);
    },

    format_xhr_data: function(data) {
        var res = []
        for (var i in data) {
            res.push(encodeURIComponent(data[i]['name']) + '=' + encodeURIComponent(data[i]['value']));
        }
        return res.join('&');
    },

    make_request: function(args, callback, extra, request_name, on_failure, batch_callback) {
        var name;
        var arg;
        this.batch_callback = batch_callback;
        this.name = request_name;
        this.callback = callback;
        if (on_failure) {
            this.on_failure = true;
        }
        if (extra) {
            for (name in extra) {
                args.push({'name': name, 'value': extra[name]});
            }
        }
        var key_found = false;
        for (arg in args) {
            if (args[arg].name == 'hm_page_key') {
                key_found = true;
                break;
            }
        }
        if (!key_found) {
            args.push({'name': 'hm_page_key', 'value': $('#hm_page_key').val()});
        }
        var dt = new Date();
        this.start_time = dt.getTime();
        this.xhr_fetch({url: '', data: args, callback: this});
        return false;
    },

    done: function(res, xhr) {
        if (Hm_Ajax.aborted) {
            return;
        }
        else if (!res || typeof res == 'string' && (res == 'null' || res.indexOf('<') === 0 || res == '{}')) {
            this.fail(xhr);
            return;
        }
        else {
            $('.offline').hide();
            if (hm_encrypt_ajax_requests()) {
                res = Hm_Utils.json_decode(Hm_Crypt.decrypt(res.payload));
            }
            if ((res.state && res.state == 'not callable') || !res.router_login_state) {
                this.fail(xhr, true);
                return;
            }
            if (Hm_Ajax.err_condition) {
                Hm_Ajax.err_condition = false;
                Hm_Notices.hide(true);
            }
            if (res.router_user_msgs && !$.isEmptyObject(res.router_user_msgs)) {
                Hm_Notices.show(res.router_user_msgs);
            }
            if (res.folder_status) {
                for (var name in res.folder_status) {
                    Hm_Folders.unread_counts[name] = res.folder_status[name]['unseen'];
                    Hm_Folders.update_unread_counts();
                }
            }
            if (this.callback) {
                this.callback(res);
            }
            Hm_Ajax.process_callback_hooks(this.name, res);
        }
    },

    run_on_failure: function() {
        if (this.on_failure && this.callback) {
            this.callback(false);
        }
        return false;
    },

    fail: function(xhr, not_callable) {
        if (not_callable === true || (xhr.status && xhr.status == 500)) {
            Hm_Notices.show(['ERRServer Error']);
        }
        else {
            $('.offline').show();
        }
        Hm_Ajax.err_condition = true;
        this.run_on_failure();
    },

    always: function(res) {
        Hm_Ajax.active_reqs--;
        var batch_count = 1;
        if (this.batch_callback) {
            if (typeof Hm_Ajax.batch_callbacks[this.batch_callback.toString()] != 'undefined') {
                batch_count = --Hm_Ajax.batch_callbacks[this.batch_callback.toString()];
            }
        }
        Hm_Message_List.set_row_events();
        if (batch_count === 0) {
            Hm_Ajax.batch_callbacks[this.batch_callback.toString()] = 0;
            Hm_Ajax.aborted = false;
            Hm_Ajax.p_callbacks = [];
            this.batch_callback(res);
            this.batch_callback = false;
            Hm_Ajax.stop_loading_icon(Hm_Ajax.icon_loading_id);
            $('body').removeClass('wait');
        }
        if (Hm_Ajax.active_reqs == 0) {
            Hm_Ajax.stop_loading_icon(Hm_Ajax.icon_loading_id);
            $('body').removeClass('wait');
        }
        res = null;
    }
}};

/* user notification manager */
var Hm_Notices = {
    hide_id: false,

    show: function(msgs, keep) {
        var msg_list = [];
        for (var i in msgs) {
            if (msgs[i].match(/^ERR/)) {
                msg_list.push('<span class="err">'+msgs[i].substring(3)+'</span>');
            }
            else {
                msg_list.push(msgs[i]);
            }
        }
        if (!keep) {
            $('.sys_messages').html(msg_list.join(', '));
        }
        else {
            var existing = $('.sys_messages').html();
            if (existing) {
                $('.sys_messages').append('<br />'+msg_list.join(', '));
            }
            else {
                $('.sys_messages').html(msg_list.join(', '));
            }
        }
        $('.sys_messages').show();
        $('.sys_messages').on('click', function() {
            $('.sys_messages').hide();
            $('.sys_messages').html('');
        });
    },

    hide: function(now) {
        if (Hm_Notices.hide_id) {
            clearTimeout(Hm_Notices.hide_id);
        }
        if (now) {
            $('.sys_messages').hide();
            $('.sys_messages').html('');
        }
        else {
            Hm_Notices.hide_id = setTimeout(function() {
                $('.sys_messages').hide();
                $('.sys_messages').html('');
            }, 5000);
        }
    }
};

/* job scheduler */
var Hm_Timer = {
    jobs: [],
    interval: 1000,

    add_job: function(job, interval, defer, custom_defer) {
        if (custom_defer) {
            Hm_Timer.jobs.push([job, interval, custom_defer]);
        }
        else if (interval) {
            Hm_Timer.jobs.push([job, interval, interval]);
        }
        if (!defer) {
            try { job(); } catch(e) { console.log(e); }
        }
    },

    cancel: function(job) {
        for (var index in Hm_Timer.jobs) {
            if (Hm_Timer.jobs[index][0] == job) {
                Hm_Timer.jobs.splice(index, 1);
                return true;
            }
        }
        return false;
    },

    fire: function() {
        var job;
        var index;
        for (index in Hm_Timer.jobs) {
            job = Hm_Timer.jobs[index];
            job[2]--;
            if (job[2] === 0) {
                job[2] = job[1];
                Hm_Timer.jobs[index] = job;
                try { job[0](); } catch(e) { console.log(e); }
            }
        }
        setTimeout(Hm_Timer.fire, Hm_Timer.interval);
    }
};

/* message list */
function Message_List() {
    var self = this;
    this.sources = [];
    this.deleted = [];
    this.background = false;
    this.completed_count = 0;
    this.last_click = '';
    this.callbacks = [];
    this.sort_fld = 4;
    this.past_total = 0;
    this.just_inserted = [];

    this.page_caches = {
        'feeds': 'formatted_feed_data',
        'combined_inbox': 'formatted_combined_inbox',
        'email': 'formatted_all_mail',
        'unread': 'formatted_unread_data',
        'flagged': 'formatted_flagged_data'
    };

    this.run_callbacks = function (completed) {
        var func;
        var index;
        if (completed) {
            for (index in this.callbacks) {
                func = this.callbacks[index];
                try { func(); } catch(e) { console.log(e); }
            }
        }
        fixLtrInRtl();
    };

    this.update = function(ids, msgs, type, cache) {
        var completed = false;
        this.completed_count++;
        if (this.completed_count == this.sources.length) {
            this.completed_count = 0;
            completed = true;
        }
        if ($('input[type=checkbox]', $('.message_table')).filter(function() {return this.checked; }).length > 0) {
            this.run_callbacks(completed);
            return 0;
        }
        if (msgs[0] === "") {
            this.run_callbacks(completed);
            return 0;
        }
        var msg_rows;
        if (!cache) {
            msg_rows = Hm_Utils.tbody();
        }
        else {
            msg_rows = cache;
        }
        if (!this.background && !$.isEmptyObject(msgs)) {
            $('.empty_list').remove();
        }
        var msg_ids = this.add_rows(msgs, msg_rows);
        var count = this.remove_rows(ids, msg_ids, type, msg_rows);
        this.run_callbacks(completed);
        if (!cache) {
            this.set_tab_index();
        }
        return count;
    };

    this.set_tab_index = function() {
        var msg_rows = Hm_Utils.rows();
        var count = 1;
        msg_rows.each(function() {
            $(this).attr('tabindex', count);
            count++;
        });
    };

    this.remove_rows = function(ids, msg_ids, type, msg_rows) {
        var count = $('tr', msg_rows).length;
        var parts;
        var re;
        var i;
        var id;
        for (i=0;i<ids.length;i++) {
            id = ids[i];
            if ((id+'').search('_') != -1) {
                parts = id.split('_', 2);
                parts[0] -= 0;
                re = new RegExp(parts[1]+'$');
                parts[1] = re;
            }
            else {
                parts = [id, false];
            }
            $('tr[class^='+type+'_'+parts[0]+'_]', msg_rows).filter(function() {
                var id = this.className;
                if (id.indexOf(' ') != -1) {
                    id = id.split(' ')[0];
                }
                if (!parts[1] || parts[1].exec(id)) {
                    if ($.inArray(id, msg_ids) == -1) {
                        count--;
                        $(this).remove();
                    }
                }
            });
        }
        return count;
    };

    this.sort = function(fld) {
        var listitems = Hm_Utils.rows();
        var aval;
        var bval;
        var sort_result = listitems.sort(function(a, b) {
            switch (Math.abs(fld)) {
                case 1:
                case 2:
                case 3:
                    aval = $($('td', a)[Math.abs(fld)]).text().replace(/^\s+/g, '');
                    bval = $($('td', b)[Math.abs(fld)]).text().replace(/^\s+/g, '');
                    break;
                case 4:
                default:
                    aval = $('input', $($('td', a)[Math.abs(fld)])).val();
                    bval = $('input', $($('td', b)[Math.abs(fld)])).val();
                    break;
            }
            if (fld == 4 || fld == -4 || !fld) {
                if (fld == -4) {
                    return aval - bval;
                }
                return bval - aval;
            }
            else {
                if (fld && fld < 0) {
                    return bval.toUpperCase().localeCompare(aval.toUpperCase());
                }
                return aval.toUpperCase().localeCompare(bval.toUpperCase());
            }
        });
        this.sort_fld = fld;
        Hm_Utils.tbody().html('');
        for (var i = 0, len=sort_result.length; i < len; i++) {
            Hm_Utils.tbody().append(sort_result[i]);
        }
        this.save_updated_list();
    };

    this.add_rows = function(msgs, msg_rows) {
        var msg_ids = [];
        var row;
        var id;
        var index;
        for (index in msgs) {
            row = msgs[index][0];
            id = msgs[index][1];
            if (this.deleted.indexOf(Hm_Utils.clean_selector(id)) != -1) {
                continue;
            }
            id = id.replace(/ /, '-');
            if (!$('.'+Hm_Utils.clean_selector(id), msg_rows).length) { 
                this.insert_into_message_list(row, msg_rows);
                $('.'+Hm_Utils.clean_selector(id), msg_rows).show();
            }
            else {
                $('.'+Hm_Utils.clean_selector(id), msg_rows).replaceWith(row)
            }
            msg_ids.push(id);
        }
        return msg_ids;
    };

    this.insert_into_message_list = function(row, msg_rows) {
        var sort_fld = this.sort_fld;
        if (typeof sort_fld == 'undefined' || sort_fld == null) {
            sort_fld = 4;
        }
        var element = false;
        if (sort_fld == 4 || sort_fld == -4) {
            var timestr2;
            var timestr = $('.msg_timestamp', $(row)).val();
            $('tr', msg_rows).each(function() {
                timestr2 = $('.msg_timestamp', $(this)).val();
                if ((sort_fld == -4 && (timestr2*1) >= (timestr*1)) ||
                    (sort_fld == 4 && (timestr*1) >= (timestr2*1))) {
                    element = $(this);
                    return false;
                }
            });
        }
        else {
            var bval;
            var aval = $($('td', $(row))[Math.abs(sort_fld)]).text().replace(/^\s+/g, '');
            $('tr', msg_rows).each(function() {
                bval = $($('td', $(this))[Math.abs(sort_fld)]).text().replace(/^\s+/g, '');
                if ((sort_fld < 0 && aval.toUpperCase().localeCompare(bval.toUpperCase()) > 0) ||
                   (sort_fld > 0 && bval.toUpperCase().localeCompare(aval.toUpperCase()) > 0)) {
                    element = $(this);
                    return false;
                }
            });
        }
        if (element) {
            $(row, msg_rows).insertBefore(element);
        }
        else {
            msg_rows.append(row);
        }
        self.just_inserted.push($('.from', $(row)).text()+' - '+$('.subject', $(row)).text());
    };

    this.reset_checkboxes = function() {
        this.toggle_msg_controls();
        this.set_row_events();
    };

    this.toggle_msg_controls = function() {
        if ($('input[type=checkbox]', $('.message_table')).filter(function() {return this.checked; }).length > 0) {
            $('.msg_controls').addClass('msg_controls_visible');
        }
        else {
            $('.msg_controls').removeClass('msg_controls_visible');
        }
    };

    this.update_after_action = function(action_type, selected) {
        var remove = false;
        if (action_type == 'read' && hm_list_path() == 'unread') {
            remove = true;
        }
        if (action_type == 'unflag' && hm_list_path() == 'flagged') {
            remove = true;
        }
        else if (action_type == 'delete' || action_type == 'archive') {
            remove = true;
        }
        if (remove) {
            this.remove_after_action(action_type, selected);
        }
        else {
            if (action_type == 'read' || action_type == 'unread') {
                this.read_after_action(action_type, selected);
            }
            else if (action_type == 'flag' || action_type == 'unflag') {
                this.flag_after_action(action_type, selected);
            }
        }
        this.save_updated_list();
        this.reset_checkboxes();
    };

    this.save_updated_list = function() {
        if (this.page_caches.hasOwnProperty(hm_list_path())) {
            this.set_message_list_state(this.page_caches[hm_list_path()]);
            Hm_Utils.save_to_local_storage('sort_'+hm_list_path(), this.sort_fld);
        }
    };

    this.remove_after_action = function(action_type, selected) {
        var removed = 0;
        var class_name = false;
        var index;
        for (index in selected) {
            class_name = selected[index];
            $('.'+Hm_Utils.clean_selector(class_name)).remove();
            if (action_type == 'delete') {
                this.deleted.push(class_name);
            }
            removed++;
        }
        return removed;
    };

    this.read_after_action = function(action_type, selected) {
        var read = 0;
        var row;
        var index;
        var class_name = false;
        for (index in selected) {
            class_name = selected[index];
            row = $('.'+Hm_Utils.clean_selector(class_name));
            if (action_type == 'read') {
                $('.subject > div', row).removeClass('unseen');
                row.removeClass('unseen');
            }
            else {
                $('.subject > div', row).addClass('unseen');
                row.addClass('unseen');
            }
            read++;
        }
        return read;
    };

    this.flag_after_action = function(action_type, selected) {
        var flagged = 0;
        var class_name;
        var row;
        var index;
        for (index in selected) {
            class_name = selected[index];
            row = $('.'+Hm_Utils.clean_selector(class_name));
            if (action_type == 'flag') {
                $('.icon', row).html('<img width="16" height="16" src="'+hm_flag_image_src()+'" />');
            }
            else {
                $('.icon', row).empty();
            }
            flagged++;
        }
        return flagged;
    };

    this.load_sources = function() {
        var index;
        var source;
        if (!self.background) {
            $('.src_count').text(self.sources.length);
            $('.total').text(Hm_Utils.rows().length);
        }
        for (index in self.sources) {
            source = self.sources[index];
            source.callback(source.id, source.folder);
        }
        return false;
    };

    this.select_combined_view = function() {
        if (self.page_caches.hasOwnProperty(hm_list_path())) {
            self.setup_combined_view(self.page_caches[hm_list_path()]);
        }
        else {
            if (hm_page_name() == 'search') {
                self.setup_combined_view('formatted_search_data');
            }
            else {
                self.setup_combined_view(false);
            }
        }
        var sort_type = Hm_Utils.get_from_local_storage('sort_'+hm_list_path());
        if (sort_type != null) {
            this.sort_fld = sort_type;
            $('.combined_sort').val(sort_type);
        }
        $('.core_msg_control').on("click", function() { return self.message_action($(this).data('action')); });
        $('.toggle_link').on("click", function() { return self.toggle_rows(); });
        $('.refresh_link').on("click", function() { return self.load_sources(); });
    };

    this.add_sources = function(sources) {
        self.sources = sources;
    };

    this.setup_combined_view = function(cache_name) {
        self.add_sources(hm_data_sources());
        var data = Hm_Utils.get_from_local_storage(cache_name);
        var interval = Hm_Utils.get_from_global('combined_view_refresh_interval', 60);
        if (data && data.length) {
            Hm_Utils.tbody().html(data);
            if (cache_name == 'formatted_unread_data') {
                self.clear_read_messages();
            }
            self.set_row_events();
            $('.combined_sort').show();
        }
        if (hm_page_name() == 'search' && hm_run_search() == "0") {
            Hm_Timer.add_job(self.load_sources, interval, true);
        }
        else {
            Hm_Timer.add_job(this.load_sources, interval);
        }
    };

    this.clear_read_messages = function() {
        var class_name;
        var list = Hm_Utils.get_from_local_storage('read_message_list');
        if (list && list.length) {
            list = Hm_Utils.json_decode(list);
            for (class_name in list) {
                $('.'+Hm_Utils.clean_selector(class_name)).remove();
            }
            Hm_Utils.save_to_local_storage('read_message_list', '');
        }
    };

    /* TODO: remove module specific refs */
    this.update_title = function() {
        var count = 0;
        var rows = Hm_Utils.rows();
        var tbody = Hm_Utils.tbody();
        if (hm_list_path() == 'unread') {
            count = rows.length;
            document.title = count+' Unread';
        }
        else if (hm_list_path() == 'flagged') {
            count = rows.length;
            document.title = count+' Flagged';
        }
        else if (hm_list_path() == 'combined_inbox') {
            count = $('tr .unseen', tbody).length;
            document.title = count+' Unread in Everything';
        }
        else if (hm_list_path() == 'email') {
            count = $('tr .unseen', tbody).length;
            document.title = count+' Unread in Email';
        }
        else if (hm_list_path() == 'feeds') {
            count = $('tr .unseen', tbody).length;
            document.title = count+' Unread in Feeds';
        }
    };

    this.message_action = function(action_type) {
        if (action_type == 'delete' && !hm_delete_prompt()) {
            return false;
        }
        var msg_list = $('.message_table');
        var selected = [];
        var current_list = self.filter_list();
        $('input[type=checkbox]', msg_list).each(function() {
            if (this.checked) {
                selected.push($(this).val());
            }
        });
        if (selected.length > 0) {
            var updated = false;
            Hm_Ajax.request(
                [{'name': 'hm_ajax_hook', 'value': 'ajax_message_action'},
                {'name': 'action_type', 'value': action_type},
                {'name': 'message_ids', 'value': selected}],
                function(res) {
                    if (!res) {
                        $('.message_table_body').replaceWith(current_list);
                        self.save_updated_list();
                        self.toggle_msg_controls();
                    }
                    else {
                        if (res.hasOwnProperty('move_count')) {
                            selected = Object.values(res.move_count);
                        }
                        self.update_after_action(action_type, selected);
                        updated = true;
                    }
                },
                [],
                false,
                false,
                true
            );
        }
        if (!updated) {
            self.update_after_action(action_type, selected);
        }
        return false;
    };

    this.prev_next_links = function(cache, class_name) {
        var phref;
        var nhref;
        var target;
        var subject;
        var plink = false;
        var nlink = false;
        var list = Hm_Utils.get_from_local_storage(cache);
        var current = $('<div></div>').append(list).find('.'+Hm_Utils.clean_selector(class_name));
        var prev = current.prev();
        var next = current.next();
        target = $('.msg_headers tr').last();
        if (prev.length) {
            phref = prev.find('.subject').find('a').prop('href');
            subject = new Option(prev.find('.subject').text()).innerHTML;
            plink = '<a class="plink" href="'+phref+'"><div class="prevnext prev_img"></div> '+subject+'</a>';
            $('<tr class="prev"><th colspan="2">'+plink+'</th></tr>').insertBefore(target);
        }
        if (next.length) {
            nhref = next.find('.subject').find('a').prop('href');
            subject = new Option(next.find('.subject').text()).innerHTML;
            nlink = '<a class="nlink" href="'+nhref+'"><div class="prevnext next_img"></div> '+subject+'</a>';
            $('<tr class="next"><th colspan="2">'+nlink+'</th></tr>').insertBefore(target);
        }
        return [phref, nhref];
    };

    this.check_empty_list = function() {
        var count = Hm_Utils.rows().length;
        if (!count) {
            if (!$('.empty_list').length) {
                if (hm_page_name() == 'search') {
                    $('.search_content').append('<div class="empty_list">'+hm_empty_folder()+'</div>');
                }
                else {
                    $('.message_list').append('<div class="empty_list">'+hm_empty_folder()+'</div>');
                }
            }
        }
        else {
            $('.empty_list').remove();
            $('.combined_sort').show();
        }
        return count === 0;
    };

    this.track_read_messages = function(class_name) {
        var read_messages = Hm_Utils.get_from_local_storage('read_message_list');
        if (read_messages && read_messages.length) {
            read_messages = Hm_Utils.json_decode(read_messages);
        }
        else {
            read_messages = {};
        }
        var added = false;
        if (!(class_name in read_messages)) {
            added = true;
        }
        read_messages[class_name] = 1;
        Hm_Utils.save_to_local_storage('read_message_list', Hm_Utils.json_encode(read_messages));
        return added;
    };

    this.adjust_unread_total = function(amount, replace) {
        var missing = $('.total_unread_count').text() === '' ? true : false;
        var current = $('.total_unread_count').text()*1;
        var new_total;
        if (replace && amount == current && amount != 0) {
            return;
        }
        if (!replace && amount == 0) {
            return;
        }
        if (replace) {
            new_total = amount;
        }
        else {
            new_total = current + amount;
        }
        if (new_total < 0) {
            new_total = 0;
        }
        if (new_total != current || missing) {
            $('.total_unread_count').html('&#160;'+new_total+'&#160;');
        }
        if (new_total > current && hm_page_name() != 'message_list' && hm_list_path() != 'unread') {
            $('.menu_unread > a').css('font-weight', 'bold');
        }
        if (amount == -1 || new_total < current) {
            $('.menu_unread > a').css('font-weight', 'normal');
        }
        Hm_Folders.save_folder_list();
        self.past_total = current;
    };

    this.toggle_rows = function() {
        $('input[type=checkbox]', $('.message_table')).each(function () { this.checked = !this.checked; });
        self.toggle_msg_controls();
        return false;
    };

    this.filter_list = function() {
        var data = Hm_Utils.rows().clone().filter(function() {
            if (this.className == 'inline_msg') {
                return false;
            }
            return true;
        });
        var res = $('<tbody class="message_table_body"></tbody>');
        data.appendTo(res);
        return res;
    };

    this.set_message_list_state = function(list_type) {
        var data = this.filter_list();
        data.find('*[style]').attr('style', '');
        data.find('input[type=checkbox]').removeAttr('checked');
        Hm_Utils.save_to_local_storage(list_type, data.html());
        var empty = self.check_empty_list();
        if (!empty) {
            self.set_row_events();
        }
        $('.total').text(Hm_Utils.rows().length);
        self.update_title();
        if (list_type == 'formatted_unread_data') {
            self.adjust_unread_total(Hm_Utils.rows().length, true);
        }
    };

    this.select_range = function(a, b) {
        var start = false;
        var end = false;
        $('input[type=checkbox]', $('.message_table')).each(function() {
            if (end) {
                return false;
            }
            if (!start && ($(this).prop('id') == a || $(this).prop('id') == b)) {
                this.checked = 'checked';
                start = true;
                return true;
            }
            if (start && !end) {
                this.checked = 'checked';
            }
            if (start && ($(this).prop('id') == b || $(this).prop('id') == a)) {
                end = true;
                return true;
            }
        });
    };

    this.process_shift_click = function(el) {
        var id = el.prop('id');
        if (id == self.last_click) {
            return;
        }
        self.select_range(id, self.last_click);
    };

    this.set_row_events = function() {
        Hm_Utils.rows().off('click');
        Hm_Utils.rows().on('click', function(e) { self.process_row_click(e); });
    }

    this.process_row_click = function(e) {
        document.getSelection().removeAllRanges();
        var target = $(e.target);
        var class_name = target[0].className;
        var shift = e.shiftKey;
        var ctrl = e.ctrlKey;
        if (class_name == 'checkbox_label' || class_name == 'checkbox_cell') {
            ctrl = true
        }
        while (target[0].tagName != 'TR') { target = target.parent(); }
        var el = $('input[type=checkbox]', target);
        if (!shift && !ctrl) {
            window.location = $('.subject a', target).prop('href');
            return false;
        }
        else {
            self.select_on_row_click(shift, ctrl, el, target);
        }
        self.toggle_msg_controls();
        e.preventDefault();
        return false;
    }

    this.select_on_row_click = function(shift, ctrl, el, target) {
        if (shift) {
            if (self.last_click) {
                self.process_shift_click(el);
            }
            $('#'+el.prop('id')).prop('checked', 'checked');
            self.last_click = el.prop('id');
        }
        else if (ctrl) {
            if (el.prop('checked')) {
                $('#'+el.prop('id')).prop('checked', false);
            }
            else {
                $('#'+el.prop('id')).prop('checked', 'checked');
                self.last_click = el.prop('id');
            }
        }
    }

    this.set_all_mail_state = function() { self.set_message_list_state('formatted_all_mail'); };
    this.set_combined_inbox_state = function() { self.set_message_list_state('formatted_combined_inbox'); };
    this.set_flagged_state = function() { self.set_message_list_state('formatted_flagged_data'); };
    this.set_unread_state = function() { self.set_message_list_state('formatted_unread_data'); };
    this.set_search_state = function() { self.set_message_list_state('formatted_search_data'); };
};

/* folder list */
var Hm_Folders = {
    expand_after_update: false,
    unread_counts: {},
    observer : false,

    save_folder_list: function() {
        Hm_Utils.save_to_local_storage('formatted_folder_list', $('.folder_list').html());
    },

    load_unread_counts: function() {
        var res = Hm_Utils.json_decode(Hm_Utils.get_from_local_storage('unread_counts'));
        if (!res) {
            Hm_Folders.unread_counts = {};
        }
        else {
            Hm_Folders.unread_counts = res;
        }
    },

    update_unread_counts: function(folder) {
        if (folder) {
            $('.unread_'+folder).html('&#160;'+Hm_Folders.unread_counts[folder]+'&#160;');
        }
        else {
            var name;
            for (name in Hm_Folders.unread_counts) {
                if (!Hm_Folders.unread_counts[name]) {
                    Hm_Folders.unread_counts[name] = 0;
                }
                if (hm_list_path() == name && hm_page_name() == 'message_list') {
                    var title = document.title.replace(/^\[\d+\]/, '');
                    document.title = '['+Hm_Folders.unread_counts[name]+'] '+title;
                    /* HERE */
                }
                $('.unread_'+name).html('&#160;'+Hm_Folders.unread_counts[name]+'&#160;');
            }
        }
        Hm_Utils.save_to_local_storage('unread_counts', Hm_Utils.json_encode(Hm_Folders.unread_counts));
    },

    open_folder_list: function() {
        $('.folder_list').show();
        $('.folder_toggle').toggle();
        if (hm_mobile()) {
            $('main').hide();
        }
        else {
            $('main').css('display', 'table-cell');
        }
        Hm_Utils.save_to_local_storage('hide_folder_list', '');
        return false;
    },

    toggle_folder_list: function() {
        if ($('.folder_list').css('display') == 'none') {
            Hm_Folders.open_folder_list();
        }
        else {
            Hm_Folders.hide_folder_list();
        }
    },

    hide_folder_list: function(forget) {
        $('.folder_list').hide();
        $('.folder_toggle').show();
        if (!forget) {
            Hm_Utils.save_to_local_storage('formatted_folder_list', $('.folder_list').html());
            Hm_Utils.save_to_local_storage('hide_folder_list', '1');
            $('main').css('display', 'block');
        }
        return false;
    },

    reload_folders: function(force, expand_after_update) {
        if (document.cookie.indexOf('hm_reload_folders=1') > -1 || force) {
            Hm_Folders.expand_after_update = expand_after_update;
            var ui_state = Hm_Utils.preserve_local_settings();
            Hm_Folders.update_folder_list();
            sessionStorage.clear();
            Hm_Utils.restore_local_settings(ui_state);
            Hm_Utils.expand_core_settings();
            return true;
        }
        return false;
    },

    sort_list: function(class_name, exclude_name, last_name) {
        var folder = $('.'+class_name+' ul');
        var listitems;
        if (exclude_name) {
            listitems = $('li:not(.'+exclude_name+')', folder);
        }
        else {
            listitems = $('li', folder);
        }
        listitems = listitems.sort(function(a, b) {
            if (last_name && ($(a).attr('class') == last_name || $(b).attr('class') == last_name)) {
                return false;
            }
            if ($(b).text().toUpperCase() == 'ALL') {
                return true;
            }
           return $(a).text().toUpperCase().localeCompare($(b).text().toUpperCase());
        });
        $.each(listitems, function(_, itm) { folder.append(itm); });
    },

    update_folder_list_display: function(res) {
        $('.folder_list').html(res.formatted_folder_list);
        Hm_Folders.sort_list('email_folders', 'menu_email');
        Hm_Folders.sort_list('feeds_folders', 'menu_feeds', 'feeds_add_new');
        Hm_Folders.sort_list('main', 'menu_search', 'menu_logout');
        Hm_Utils.save_to_local_storage('formatted_folder_list', $('.folder_list').html());
        Hm_Folders.hl_selected_menu();
        Hm_Folders.folder_list_events();
        if (Hm_Folders.expand_after_update) {
            Hm_Utils.toggle_section(Hm_Folders.expand_after_update);
        }
        Hm_Folders.expand_after_update = false;
        Hm_Folders.listen_for_new_messages();
        hl_save_link();
    },

    update_folder_list: function() {
        Hm_Ajax.request(
            [{'name': 'hm_ajax_hook', 'value': 'ajax_hm_folders'}],
            Hm_Folders.update_folder_list_display,
            [],
            true
        );
        return false;
    },

    folder_list_events: function() {
        $('.imap_folder_link').on("click", function() { return expand_imap_folders($(this).data('target')); });
        $('.src_name').on("click", function() { return Hm_Utils.toggle_section($(this).data('source')); });
        $('.update_message_list').on("click", function(e) {
            var text = e.target.innerHTML;
            e.target.innerHTML = '<img src="'+hm_web_root_path()+'modules/core/assets/images/spinner.gif" />';
            Hm_Folders.update_folder_list();
            Hm_Ajax.add_callback_hook('hm_reload_folders', function() {
                e.target.innerHTML = text;
            }); 
            return false;
        });
        $('.hide_folders').on("click", function() { return Hm_Folders.hide_folder_list(); });
        $('.logout_link').on("click", function() { return Hm_Utils.confirm_logout(); });
        if (hm_search_terms()) {
            $('.search_terms').val(hm_search_terms());
        }
        $('.search_terms').on('search', function() {
            Hm_Ajax.request([{'name': 'hm_ajax_hook', 'value': 'ajax_reset_search'}]);
        });
    },

    hl_selected_menu: function() {
        var page = hm_page_name();
        var path = hm_list_path();
        $('.folder_list').find('*').removeClass('selected_menu');
        if (path.length) {
            if (page == 'message_list' || page == 'message') {
                $("[data-id='"+Hm_Utils.clean_selector(path)+"']").addClass('selected_menu');
                $('.menu_'+Hm_Utils.clean_selector(path)).addClass('selected_menu');
            }
            else {
                $('.menu_'+path).addClass('selected_menu');
            }
        }
        else {
            $('.menu_'+page).addClass('selected_menu');
        }
    },

    listen_for_new_messages: function() {
        var target = $('.total_unread_count').get(0);
        if (!Hm_Folders.observer) {
            Hm_Folders.observer = new MutationObserver(function(mutations) {
                $('body').trigger('new_message');
            });
        }
        else {
            Hm_Folders.observer.disconnect();
        }
        Hm_Folders.observer.observe(target, {attributes: true, childList: true, characterData: true});
    },

    load_from_local_storage: function() {
        var folder_list = Hm_Utils.get_from_local_storage('formatted_folder_list');
        if (folder_list) {
            $('.folder_list').html(folder_list);
            if (Hm_Utils.get_from_local_storage('hide_folder_list') == '1') {
                $('.folder_list').hide();
                $('.folder_toggle').show();
                $('main').css('display', 'block');
            }
            Hm_Folders.hl_selected_menu();
            Hm_Folders.folder_list_events();
            Hm_Folders.load_unread_counts();
            Hm_Folders.update_unread_counts();
            Hm_Folders.listen_for_new_messages();
            return true;
        }
        return false;
    },

    toggle_folders_event: function() {
        $('.folder_toggle').on("click", function() { return Hm_Folders.open_folder_list(); });
    }
};

/* misc */
var Hm_Utils = {
    get_url_page_number: function() {
        var index;
        var match_result;
        var page_number = 1;
        var params = location.search.substr(1).split('&');
        var param_len = params.length;

        for (index=0; index < param_len; index++) {
            match_result = params[index].match(/list_page=(\d+)/);
            if (match_result) {
                page_number = match_result[1];
                break;
            }
        }
        return page_number;
    },

    get_from_global: function(name, def) {
        if (globals[name]) {
            return globals[name];
        }
        return def;
    },

    preserve_local_settings: function() {
        var i;
        var result = {};
        var prefix = window.location.pathname.length;
        for (i in sessionStorage) {
            i = i.substr(prefix);
            if (i.match(/\..+(_setting|_section)/)) {
                result[i] = Hm_Utils.get_from_local_storage(i);
            }
        }
        return result;
    },

    restore_local_settings: function(settings) {
        var i;
        for (i in settings) {
            Hm_Utils.save_to_local_storage(i, settings[i]);
        }
    },

    reset_search_form: function() {
        Hm_Utils.save_to_local_storage('formatted_search_data', '');
        Hm_Ajax.request([{'name': 'hm_ajax_hook', 'value': 'ajax_reset_search'}],
            function(res) { window.location = '?page=search'; }, false, true);
        return false;
    },

    confirm_logout: function() {
        if ($('#unsaved_changes').val() == 0) {
            document.getElementById('logout_without_saving').click();
        }
        else {
            $('.confirm_logout').show();
        }
        return false;
    },

    get_path_type: function(path) {
        if (path.indexOf('_') != -1) {
            var path_parts = path.split('_');
            return path_parts[0];
        }
        return false;
    },

    parse_folder_path: function(path, path_type) {
        if (!path_type) {
            path_type = Hm_Utils.get_path_type(path);
        }
        if (path && path.indexOf(' ') != -1) {
            path = path.split(' ')[0];
        }
        var type = false;
        var server_id = false;
        var uid = false;
        var folder = '';
        var parts;

        if (path_type == 'imap') {
            parts = path.split('_', 4);
            if (parts.length == 2) {
                type = parts[0];
                server_id = parts[1];
            }
            else if (parts.length == 3) {
                type = parts[0];
                server_id = parts[1];
                folder = parts[2];
            }
            else if (parts.length == 4) {
                type = parts[0];
                server_id = parts[1];
                uid = parts[2];
                folder = parts[3];
            }
            if (type && server_id) {
                return {'type': type, 'server_id' : server_id, 'folder' : folder, 'uid': uid};
            }
        }
        else if (path_type == 'pop3' || path_type == 'feeds') {
            parts = path.split('_', 3);
            if (parts.length > 1) {
                type = parts[0];
                server_id = parts[1];
            }
            if (parts.length == 3) {
                uid = parts[2];
            }
            if (type && server_id) {
                return {'type': type, 'server_id' : server_id, 'uid': uid};
            }
        }
        return false;
    },

    toggle_section: function(class_name, force_on, force_off) {
        if ($(class_name).length) {
            if (force_off) {
                $(class_name).css('display', 'block');
            }
            if (force_on) {
                $(class_name).css('display', 'none');
            }
            $(class_name).toggle();
            Hm_Utils.save_to_local_storage('formatted_folder_list', $('.folder_list').html());
        }
        return false;
    },

    toggle_page_section: function(class_name) {
        if ($(class_name).length) {
            $(class_name).toggle();
            Hm_Utils.save_to_local_storage(class_name, $(class_name).css('display'));
        }
        return false;
    },

    expand_core_settings: function() {
        var sections = Hm_Utils.get_core_settings();
        var key;
        var dsp;
        for (key in sections) {
            dsp = sections[key];
            if (!dsp) {
                dsp = 'none';
            }
            $(key).css('display', dsp);
            Hm_Utils.save_to_local_storage(key, dsp);
        }
    },

    get_core_settings: function() {
        var dsp;
        var results = {}
        var i;
        var hash = window.location.hash;
        var sections = ['.wp_notifications_setting', '.github_all_setting', '.tfa_setting', '.sent_setting', '.general_setting', '.unread_setting', '.flagged_setting', '.all_setting', '.email_setting'];
        for (i=0;i<sections.length;i++) {
            dsp = Hm_Utils.get_from_local_storage(sections[i]);
            if (hash) {
                if (hash.replace('#', '.') != sections[i]) {
                    dsp = 'none';
                }
                else {
                    dsp = 'table-row';
                }
            }
            results[sections[i]] = dsp;
        }
        return results;
    },

    get_from_local_storage: function(key) {
        var prefix = window.location.pathname;
        key = prefix+key;
        var res = false;
        if (hm_encrypt_local_storage()) {
             res = Hm_Crypt.decrypt(sessionStorage.getItem(key));
        }
        else {
            res = sessionStorage.getItem(key);
        }
        return res;
    },

    save_to_local_storage: function(key, val) {
        var prefix = window.location.pathname;
        key = prefix+key;
        if (hm_encrypt_local_storage()) {
            val = Hm_Crypt.encrypt(val);
        }
        if (Storage !== void(0)) {
            try { sessionStorage.setItem(key, val); } catch(e) {
                sessionStorage.clear();
                sessionStorage.setItem(key, val);
            }
            if (sessionStorage.getItem(key) === null) {
                sessionStorage.clear();
                sessionStorage.setItem(key, val);
            }
        }
        return false;
    },

    clean_selector: function(str) {
        return str.replace(/(:|\.|\[|\]|\/)/g, "\\$1");
    },

    toggle_long_headers: function() {
        $('.long_header').toggle();
        $('.all_headers').toggle();
        $('.small_headers').toggle();
        return false;
    },

    set_unsaved_changes: function(state) {
        $('#unsaved_changes').val(state);
    },

    show_sys_messages: function() {
        if ($('.sys_messages').text().length) {
            $('.sys_messages').show();
            $('.sys_messages').on('click', function() {
                $('.sys_messages').hide();
                $('.sys_messages').html('');
            });
        }
    },

    cancel_logout_event: function() {
        $('.cancel_logout').on("click", function() { $('.confirm_logout').hide(); return false; });
    },

    json_encode: function(val) {
        try {
            return JSON.stringify(val);
        }
        catch (e) {
            return false;
        }
    },

    json_decode: function(val, original) {
        try {
            return JSON.parse(val);
        }
        catch (e) {
            if (original === true) {
                return val;
            }
            return false;
        }
    },

    rows: function() {
        return $('.message_table_body > tr').not('.inline_msg');
    },

    tbody: function() {
        return $('.message_table_body');
    },

    html_entities: function(str) {
        return String(str).replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/"/g, '&quot;');
    },

    test_connection: function() {
        $('.offline').hide();
        Hm_Ajax.request(
            [{'name': 'hm_ajax_hook', 'value': 'ajax_test'}],
            false, [], false, false, false);
    }
};

var Hm_Crypt = {
    decrypt: function(ciphertext) {
        try {
            ciphertext = atob(ciphertext);
            if (!ciphertext || ciphertext.length < 200) {
                return false;
            }
            var secret = $('#hm_page_key').val();
            var payload = ciphertext.substr(192);
            var hmac_sig = ciphertext.substr(128, 64);
            var salt = ciphertext.substr(0, 128);
            var digest = forge.md.sha512.create();
            var hmac = forge.hmac.create();
            var key = forge.pkcs5.pbkdf2(secret, salt, 100, 32, digest);
            var hmac_key = forge.pkcs5.pbkdf2(secret, salt, 101, 32, digest);

            hmac.start(digest, hmac_key);
            hmac.update(payload);
            if (hmac.digest().data != hmac_sig) {
                return false;
            }
            var iv = forge.pkcs5.pbkdf2(secret, salt, 100, 16, digest);
            var decipher = forge.cipher.createDecipher('AES-CBC', key);
            decipher.start({iv: iv});
            decipher.update(forge.util.createBuffer(payload, 'raw'));
            decipher.finish();
            return forge.util.decodeUtf8(decipher.output.data);
        } catch(e) {
            return false;
        }
    },

    encrypt: function(plaintext) {
        try {
            var secret = $('#hm_page_key').val();
            var salt = forge.random.getBytesSync(128);
            var digest = forge.md.sha512.create();
            var key = forge.pkcs5.pbkdf2(secret, salt, 100, 32, digest);
            var hmac_key = forge.pkcs5.pbkdf2(secret, salt, 101, 32, digest);
            var iv = forge.pkcs5.pbkdf2(secret, salt, 100, 16, digest);
            var hmac = forge.hmac.create();
            var cipher = forge.cipher.createCipher('AES-CBC', key);
            cipher.start({iv: iv});
            cipher.update(forge.util.createBuffer(plaintext, 'utf8'));
            cipher.finish();
            hmac.start(digest, hmac_key);
            hmac.update(cipher.output.data);
            return btoa(salt+hmac.digest().data+cipher.output.data);
        } catch(e) {
            return false;
        }
    },
}

var update_password = function(id) {
    var pass = $('#update_pw_'+id).val();
    if (pass && pass.length) {
        Hm_Ajax.request(
            [{'name': 'hm_ajax_hook', 'value': 'ajax_update_server_pw'},
            {'name': 'password', 'value': pass},
            {'name': 'server_pw_id', 'value': id}],
            function(res) {
                if (res.connect_status) {
                    $('.div_'+id).remove();
                    if ($('.home_password_dialogs div').length == 1) {
                        $('.home_password_dialogs').remove();
                    }
                }
            }
        );
    }
}

var elog = function(val) {
    if (hm_debug()) {
        console.log(val);
    }
};

var hl_save_link = function() {
    if ($('.save_reminder').length) {
        $('.menu_save a').css('font-weight', 'bold');
    }
    else {
        $('.menu_save a').css('font-weight', 'normal');
    }
};

var reset_default_value_checkbox = function() {
    let checkbox = this.parentElement.parentElement.firstChild;
    if (checkbox.disabled == false) {
        this.style.transform = "scaleX(1)";
        this.parentElement.setAttribute("restore_aria_label","Restore current value");
        checkbox.setAttribute("current_value", checkbox.checked);
        checkbox.checked = !checkbox.checked;
        checkbox.disabled = true;
    }
    else {
        this.style.transform = "scaleX(-1)";
        this.parentElement.setAttribute("restore_aria_label","Restore default value")
        checkbox.checked = checkbox.getAttribute("current_value") == "true" ? true : false;
        checkbox.disabled = false;
    }
};

var reset_default_value_select = function() {
    let field = this.parentElement.parentElement.firstChild;
    let tab_static_default_value = {"inline_message_style" : 0, "smtp_compose_type" : 0, "theme_setting" : 0,
    "timezone" : 0, "list_style" : 0, "idle_time" : 4, "start_page" : 0, "default_sort_order" : 0,
    "unread_since" : 1, "flagged_since" : 1, "all_since" : 1, "all_email_since" : 1, "feed_since" : 0,
    "sent_since" : 1};
    
    if (this.style.transform == "scaleX(1)") {
        this.style.transform = "scaleX(-1)";
        this.parentElement.setAttribute("restore_aria_label","Restore default value")
        field.selectedIndex = field.getAttribute("current_value");
        field.style.backgroundColor = "#fff";
        field.style.pointerEvents = "auto";
        field.style.touchAction = "auto";
    }
    else {
        this.style.transform = "scaleX(1)";
        this.parentElement.setAttribute("restore_aria_label","Restore current value");
        field.setAttribute("current_value", field.selectedIndex);
        if (field.getAttribute("name") == "language") {
            for(let compter = 0; field.length > compter; compter ++){
                if (field.options[compter].getAttribute("value") == "en") {
                    field.selectedIndex = field.options[compter].index;
                }
            }
        }
        else {
            field.selectedIndex = tab_static_default_value[field.getAttribute("name")];
        }
        field.style.backgroundColor = "#eee";
        field.style.pointerEvents = "none";
        field.style.touchAction = "none";
    }
};

var reset_default_value_input = function() {
    let field = this.parentElement.parentElement.firstChild;
    const defaultValue = this.getAttribute("default-value");

    if (this.style.transform == "scaleX(1)") {
        this.style.transform = "scaleX(-1)";
        this.parentElement.setAttribute("restore_aria_label","Restore default value")
        field.value = field.getAttribute("current_value");
        field.style.backgroundColor = "#fff";
        field.style.pointerEvents = "auto";
        field.style.touchAction = "auto";
    }
    else {
        this.style.transform = "scaleX(1)";
        this.parentElement.setAttribute("restore_aria_label","Restore current value");
        field.setAttribute("current_value", field.value);
        field.value = 20;
        if(defaultValue) {
            field.value = defaultValue;
        }
        field.style.backgroundColor = "#eee";
        field.style.pointerEvents = "none";
        field.style.touchAction = "none";
    }
};

/* create a default message list object */
var Hm_Message_List = new Message_List();

/* executes on onload, has access to other module code */
$(function() {
    /* Remove disabled attribute to send checkbox */
    $('.save_settings').on("click", function (e) {
        $('.general_setting input[type=checkbox]').each(function () {
            if (this.hasAttribute('disabled') && this.checked) {
                this.removeAttribute('disabled');
            }
        });
    })
    /* setup settings and server pages */
    if (hm_page_name() == 'settings') {
        Hm_Utils.expand_core_settings();
        $('.settings_subtitle').on("click", function() { return Hm_Utils.toggle_page_section($(this).data('target')); });
    }
    else if (hm_page_name() == 'servers') {
        $('.server_section').on("click", function() { return Hm_Utils.toggle_page_section($(this).data('target')); });
    }
    $('.reset_factory_button').on('click', function() { return hm_delete_prompt(); });

    /* check for folder reload */
    var reloaded = Hm_Folders.reload_folders();

    /* show any pending notices */
    Hm_Utils.show_sys_messages();

    /* setup a few page wide event handlers */
    Hm_Utils.cancel_logout_event();
    Hm_Folders.toggle_folders_event();

    /* fire up the job scheduler */
    Hm_Timer.fire();

    /* load folder list */
    if (!reloaded && !Hm_Folders.load_from_local_storage()) {
        Hm_Folders.update_folder_list();
    }
    if (hm_page_name() == 'message_list' || hm_page_name() == 'search') {
        Hm_Message_List.select_combined_view();
        $('.combined_sort').on("change", function() { Hm_Message_List.sort($(this).val()); });
        $('.source_link').on("click", function() { $('.list_sources').toggle(); $('#list_controls_menu').hide(); return false; });
        if (hm_list_path() == 'unread' && $('.menu_unread > a').css('font-weight') == 'bold') {
            $('.menu_unread > a').css('font-weight', 'normal');
            Hm_Folders.save_folder_list();
        }
    }
    hl_save_link();
    if (hm_page_name() == 'search') {
        $('.search_reset').on("click", Hm_Utils.reset_search_form);
    }
    if (hm_mailto()) {
        try { navigator.registerProtocolHandler("mailto", "?page=compose&compose_to=%s", "Cypht"); } catch(e) {}
    }

    if (hm_page_name() == 'home') {
        $('.pw_update').on("click", function() { update_password($(this).data('id')); });
    }
    if (hm_mobile()) {
        swipe_event(document.body, function() { Hm_Folders.open_folder_list(); }, 'right');
        swipe_event(document.body, function() { Hm_Folders.hide_folder_list(); }, 'left');
        $('.list_controls.on_mobile').show();
        $('.list_controls.no_mobile').hide();
    } else {
        $('.list_controls.on_mobile').hide();
    }
    $('.offline').on("click", function() { Hm_Utils.test_connection(); });
    if (hm_page_name() == 'settings') {
        $('.reset_default_value_checkbox').on("click", reset_default_value_checkbox);
        $('.reset_default_value_select').on("click", reset_default_value_select);
        $('.reset_default_value_input').on("click", reset_default_value_input);
    }
    
    fixLtrInRtl()
});

/*
   check if language is rtl, it checks some elements based on the page and 
   if those contain non-Arabic letters, the ltr class will be added and it
   will fix the direction and font.
*/
function fixLtrInRtl() {
    if (hm_language_direction() != "rtl") {
        return
    }

    function isTextEnglish(text) {
        if (text === "") {
            return false
        }
        var RTL = ['ا', 'ب', 'پ', 'ت', 'س', 'ج', 'چ', 'ح', 'خ', 'د', 'ذ', 'ر', 'ز', 'ژ', 'س', 'ش', 'ص', 'ض', 'ط', 'ظ', 'ع', 'غ', 'ف', 'ق', 'ک', 'گ', 'ل', 'م', 'ن', 'و', 'ه', 'ی'];
        for (var char of RTL) {
            if (text.indexOf(char) > -1) {
                return false;
            }
        }
        return true;
    };

    function getElements() {
        var pageName = hm_page_name();
        if (pageName == "message") {
            return [...$(".msg_text_inner").find('*'), ...$(".header_subject").find("*")];
        }
        if (pageName == "message_list" || pageName == "?page=history") {
            return [...$('*')];
        }
        return []
    }

    setTimeout(function(){
        var elements = getElements() 
        for (var index = 0; index < elements.length; index++) {
            if (isTextEnglish(elements[index].textContent)) {
                if ((elements[index].className).indexOf("ltr") > -1) {
                    continue
                }
                elements[index].className = elements[index].className + ' ltr';
            };
        }
    }, 0)
}

function listControlsMenu() {
    $('#list_controls_menu').toggle();
    $('.list_sources').hide();
}


var delete_contact = function(id, source, type) {
    if (!hm_delete_prompt()) {
        return false;
    }
    Hm_Ajax.request(
        [{'name': 'hm_ajax_hook', 'value': 'ajax_delete_contact'},
        {'name': 'contact_id', 'value': id},
        {'name': 'contact_type', 'value': type},
        {'name': 'contact_source', 'value': source}],
        function(res) {
            if (res.contact_deleted && res.contact_deleted === 1) {
                $('.contact_row_'+id).remove();
            }
        }
    );
};

var add_contact_from_message_view = function() {
    var contact = $('#add_contact').val();
    var source = $('#contact_source').val();
    if (contact) {
        Hm_Ajax.request(
            [{'name': 'hm_ajax_hook', 'value': 'ajax_add_contact'},
            {'name': 'contact_value', 'value': contact},
            {'name': 'contact_source', 'value': source}],
            function(res) { $('.add_contact_controls').toggle(); }
        );
    }
};

var get_search_term = function(class_name) {
    var fld_val = $(class_name).val();
    var addresses = fld_val.split(' ');
    if (addresses.length > 1) {
        fld_val = addresses.pop();
    }
    return fld_val;
};

var autocomplete_contact = function(e, class_name, list_div) {
    var key_code = e.keyCode;
    if (key_code >= 37 && key_code <= 40) {
        return;
    }
    var first;
    var div = $('<div></div>');
    var fld_val = get_search_term(class_name);
    if (fld_val.length > 0) {
        Hm_Ajax.request(
            [{'name': 'hm_ajax_hook', 'value': 'ajax_autocomplete_contact'},
            {'name': 'contact_value', 'value': fld_val}],
            function(res) {
                var active = $(document.activeElement).attr('class');
                if (active == 'compose_to' || active == 'compose_bcc' || active == 'compose_cc') {
                    if (res.contact_suggestions) {
                        var i;
                        var count = 0;
                        $(list_div).html('');
                        for (i in res.contact_suggestions) {
                            div.html(res.contact_suggestions[i]);
                            if ($(class_name).val().match(div.text())) {
                                continue;
                            }
                            if (count == 0) {
                                first = 'first ';
                            }
                            else {
                                first = '';
                            }
                            count++;
                            $(list_div).append('<a tabindex="1" href="#" class="'+first+'contact_suggestion unread_link">'+res.contact_suggestions[i]+'</a>');
                        }
                        if (count > 0) {
                            $(list_div).show();
                            setup_autocomplete_events(class_name, list_div, fld_val);
                        }
                        else {
                            $(list_div).hide();
                        }
                    }
                }
            }, [], true
        );
    }
};

var autocomplete_keyboard_nav = function(event, list_div, class_name, fld_val) {
    var in_list = false;
    if (event.keyCode == 40) {
        if ($(event.target).prop('nodeName') == 'INPUT') {
            $('.first').addClass('selected_menu');
            $('.first').focus();
            in_list = true;
        }
        else {
            $(event.target).removeClass('selected_menu');
            $(event.target).next().addClass('selected_menu');
            $(event.target).next().focus();
            in_list = true;
        }
        return false;
    }
    else if (event.keyCode == 38) {
        if ($(event.target).prev().length) {
            $(event.target).removeClass('selected_menu');
            $(event.target).prev().addClass('selected_menu');
            $(event.target).prev().focus();
            in_list = true;
        }
        else {
            $(class_name).focus();
            $(event.target).removeClass('selected_menu');
        }
        return false;
    }
    else if (event.keyCode == 13) {
        $(class_name).focus();
        $(list_div).hide();
        add_autocomplete(event, class_name, list_div);
        return false;
    }
    else if (event.keyCode == 27) {
        $(list_div).html('');
        $(list_div).hide();
        $(class_name).focus();
        return false;
    }
    else if (event.keyCode == 9) {
        $(list_div).html('');
        $(list_div).hide();
        $(class_name).trigger('focusout');
        return true;
    }
    if (in_list) {
        return false;
    }
    return true;
};

var setup_autocomplete_events = function(class_name, list_div, fld_val) {
    $('.contact_suggestion').on("click", function(event) { return add_autocomplete(event, class_name, list_div); });
    $(class_name).on('keydown', function(event) { return autocomplete_keyboard_nav(event, list_div, class_name, fld_val); });
    $('.contact_suggestion').on('keydown', function(event) { return autocomplete_keyboard_nav(event, list_div, class_name, fld_val); });
    $(document).on("click", function() { $(list_div).hide(); });
};

var add_autocomplete = function(event, class_name, list_div, fld_val) {
    if (!fld_val) {
        fld_val = get_search_term(class_name);
    }
    var new_address = $(event.target).text()
    var existing = $(class_name).val();
    var re = new RegExp(fld_val+'$');
    existing = existing.replace(re, '');
    if (existing.length) {
        existing = existing.replace(/[\s,]+$/, '')+', ';
    }
    $(list_div).html('');
    $(list_div).hide();
    $(class_name).val(existing+new_address);
    $(class_name).focus();
    return false;
};

if (hm_page_name() == 'contacts') {
    $('.delete_contact').on("click", function() {
        delete_contact($(this).data('id'), $(this).data('source'), $(this).data('type'));
        return false;
    });
    $('.show_contact').on("click", function() {
        $('#'+$(this).data('id')).toggle();
        return false;
    });
    $('.reset_contact').on("click", function() {
        window.location.href = '?page=contacts';
    });
    $('.server_title').on("click", function() {
        $(this).next().toggle();
    });
    $('#contact_phone').on("keyup", function() {
        let contact_phone = $('#contact_phone').val();
        const regex_number = new RegExp('^\\d+$');
        const allowed_characters = ['+','-','(',')'];
        for (let chain_counter = 0; chain_counter < contact_phone.length; chain_counter++) {
            if(!(regex_number.test(contact_phone[chain_counter])) && !(allowed_characters.indexOf(contact_phone[chain_counter]) > -1)){
                Hm_Notices.show(["This phone number appears to contain invalid character (s).\nIf you are sure ignore this warning and continue!"]);
                $(this).off();
            }
        }

    });
}
else if (hm_page_name() == 'compose') {
    $('.compose_to').on('keyup', function(e) { autocomplete_contact(e, '.compose_to', '#to_contacts'); });
    $('.compose_cc').on('keyup', function(e) { autocomplete_contact(e, '.compose_cc', '#cc_contacts'); });
    $('.compose_bcc').on('keyup', function(e) { autocomplete_contact(e, '.compose_bcc', '#bcc_contacts'); });
    $('.compose_to').focus();
}



var pop3_test_action = function(event) {
    event.preventDefault();
    Hm_Notices.hide(true);
    var form = $(this).parent();
    Hm_Ajax.request(
        form.serializeArray(),
        function() { },
        {'pop3_connect': 1}
    );
};

var pop3_save_action = function(event) {
    event.preventDefault();
    Hm_Notices.hide(true);
    var form = $(this).parent();
    Hm_Ajax.request(
        form.serializeArray(),
        function(res) {
            if (res.just_saved_credentials) {
                form.find('.credentials').attr('disabled', true);
                form.find('.save_pop3_connection').hide();
                form.find('.pop3_password').val('');
                form.find('.pop3_password').attr('placeholder', '[saved]');
                form.append('<input type="submit" value="Forget" class="forget_pop3_connection" />');
                $('.forget_pop3_connection').on('click', pop3_forget_action);
                Hm_Utils.set_unsaved_changes(1);
                Hm_Folders.reload_folders(true);
            }
        },
        {'pop3_save': 1}
    );
};

var pop3_forget_action = function(event) {
    event.preventDefault();
    Hm_Notices.hide(true);
    var form = $(this).parent();
    Hm_Ajax.request(
        form.serializeArray(),
        function(res) {
            if (res.just_forgot_credentials) {
                form.find('.credentials').prop('disabled', false);
                form.find('.credentials').val('');
                form.find('.credentials').attr('placeholder', '');
                form.append('<input type="submit" value="Save" class="save_pop3_connection" />');
                $('.save_pop3_connection').on('click', pop3_save_action);
                $('.forget_pop3_connection', form).remove();
                Hm_Utils.set_unsaved_changes(1);
                Hm_Folders.reload_folders(true);
            }
        },
        {'pop3_forget': 1}
    );
};

var pop3_delete_action = function(event) {
    if (!hm_delete_prompt()) {
        return false;
    }
    event.preventDefault();
    Hm_Notices.hide(true);
    var form = $(this).parent();
    Hm_Ajax.request(
        form.serializeArray(),
        function(res) {
            if (res.deleted_server_id > -1 ) {
                form.parent().remove();
                Hm_Utils.set_unsaved_changes(1);
                Hm_Folders.reload_folders(true);
                var label = $('.server_count', $('.pop3_server_setup')).text();
                if (label) {
                    var parts = label.split(' ');
                    var count = parts[0]*1;
                    if (count > 0) {
                        count--;
                    }
                    else {
                        count = 0;
                    }
                    $('.server_count', $('.pop3_server_setup')).text(count+' '+parts[1]);

                }
            }
        },
        {'pop3_delete': 1}
    );
};

var display_pop3_mailbox = function(res) {
    var ids = [res.pop3_server_id];
    Hm_Message_List.update(ids, res.formatted_message_list, 'pop3');
    if (res.page_links) {
        $('.page_links').html(res.page_links);
    }
    var key = 'pop3_'+Hm_Utils.get_url_page_number()+'_'+hm_list_path();
    var data = Hm_Message_List.filter_list();
    data.find('*[style]').attr('style', '');
    Hm_Utils.save_to_local_storage(key, data.html());
};

var load_pop3_list = function(id) {
    var key = 'pop3_'+Hm_Utils.get_url_page_number()+'_'+hm_list_path();
    var cached = Hm_Utils.get_from_local_storage(key);
    if (cached) {
        $('.message_table tbody').html(cached);
    }
    Hm_Ajax.request(
        [{'name': 'hm_ajax_hook', 'value': 'ajax_pop3_folder_display'},
        {'name': 'pop3_server_id', 'value': id}],
        display_pop3_mailbox
    );
    return false;
};

var pop3_message_view = function(uid, list_path, callback) {
    if (!uid) {
        uid = hm_msg_uid();
    }
    if (!list_path) {
        list_path = hm_list_path();
    }
    $('.msg_text_inner').html('');
    Hm_Ajax.request(
        [{'name': 'hm_ajax_hook', 'value': 'ajax_pop3_message_display'},
        {'name': 'pop3_list_path', 'value': list_path},
        {'name': 'pop3_uid', 'value': uid}],
        display_pop3_message,
        [],
        false,
        callback
    );
    return false;
};

var display_pop3_message = function(res) {
    $('.msg_text').html('');
    $('.msg_text').append(res.msg_headers);
    $('.msg_text').append(res.msg_text);
    set_message_content();
    document.title = $('.header_subject th').text();
    pop3_message_view_finished();
};

var pop3_message_view_finished = function() {
    var detail = Hm_Utils.parse_folder_path(hm_list_path(), 'pop3');
    if (detail) {
        var class_name = 'pop3_'+detail.server_id+'_'+hm_msg_uid();
        if (hm_list_parent() == 'combined_inbox') {
            Hm_Message_List.prev_next_links('formatted_combined_inbox', class_name);
        }
        else if (hm_list_parent() == 'unread') {
            Hm_Message_List.prev_next_links('formatted_unread_data', class_name);
        }
        else if (hm_list_parent() === 'search') {
            Hm_Message_List.prev_next_links('formatted_search_data', class_name);
        }
        else {
            var key = 'pop3_'+Hm_Utils.get_url_page_number()+'_'+hm_list_path();
            Hm_Message_List.prev_next_links(key, class_name);
        }
    }
    if (Hm_Message_List.track_read_messages(class_name)) {
        if (hm_list_parent() == 'unread') {
            Hm_Message_List.adjust_unread_total(-1);
        }
    }
    $('.header_toggle').on("click", function() { return Hm_Utils.toggle_long_headers(); });
    $('.msg_part_link').on("click", function() { return get_message_content($(this).data('messagePart')); });
};

var pop3_all_mail_content = function(id) {
    Hm_Ajax.request(
        [{'name': 'hm_ajax_hook', 'value': 'ajax_pop3_folder_display'},
        {'name': 'pop3_server_id', 'value': id}],
        display_pop3_list,
        [],
        false,
        Hm_Message_List.set_all_mail_state
    );
    return false;
};

var pop3_combined_inbox_content = function(id) {
    Hm_Ajax.request(
        [{'name': 'hm_ajax_hook', 'value': 'ajax_pop3_folder_display'},
        {'name': 'pop3_server_id', 'value': id}],
        display_pop3_list,
        [],
        false,
        Hm_Message_List.set_combined_inbox_state
    );
    return false;
};

var display_pop3_list = function(res) {
    var ids = [res.pop3_server_id];
    Hm_Message_List.update(ids, res.formatted_message_list, 'pop3');
};

var pop3_status_update = function() {
    var i;
    var id;
    if ($('.pop3_server_ids').length) {
        var ids = $('.pop3_server_ids').val().split(',');
        if ( ids && ids !== '') {
            for (i=0;i<ids.length;i++) {
                id=ids[i];
                Hm_Ajax.request(
                    [{'name': 'hm_ajax_hook', 'value': 'ajax_pop3_status'},
                    {'name': 'pop3_server_ids', 'value': id}],
                    update_pop3_status_display
                );
            }
        }
    }
    return false;
};

var update_pop3_status_display = function(res) {
    var id = res.pop3_status_server_id;
    $('.pop3_status_'+id).html(res.pop3_status_display);
};

var pop3_search_page_content = function(id) {
    if (hm_search_terms) {
        Hm_Ajax.request(
            [{'name': 'hm_ajax_hook', 'value': 'ajax_pop3_folder_display'},
            {'name': 'pop3_search', 'value': 1},
            {'name': 'pop3_server_id', 'value': id}],
            update_pop3_search_result,
            [],
            false,
            Hm_Message_List.set_search_state
        );
    }
    return false;
};

var update_pop3_search_result = function(res) {
    var ids = [res.pop3_server_id];
    Hm_Message_List.update(ids, res.formatted_message_list, 'pop3');
};

var pop3_unread_background = function(id) {
    Hm_Ajax.request(
        [{'name': 'hm_ajax_hook', 'value': 'ajax_pop3_folder_display'},
        {'name': 'pop3_unread_only', 'value': 1},
        {'name': 'pop3_server_id', 'value': id}],
        update_pop3_unread_display_background
    );
    return false;
};

var update_pop3_unread_display_background = function(res) {
    var ids = [res.pop3_server_id];
    var cache = $('<tbody></tbody>').append($(Hm_Utils.get_from_local_storage('formatted_unread_data')));
    globals.Hm_Background_Unread.update(ids, res.formatted_message_list, 'pop3', cache);
    Hm_Utils.save_to_local_storage('formatted_unread_data', cache.html());
};

var pop3_combined_unread_content = function(id) {
    Hm_Ajax.request(
        [{'name': 'hm_ajax_hook', 'value': 'ajax_pop3_folder_display'},
        {'name': 'pop3_unread_only', 'value': 1},
        {'name': 'pop3_server_id', 'value': id}],
        update_pop3_unread_display,
        [],
        false,
        Hm_Message_List.set_unread_state
    );
    return false;
};

var update_pop3_unread_display = function(res) {
    var ids = [res.pop3_server_id];
    Hm_Message_List.update(ids, res.formatted_message_list, 'pop3');
};

var expand_pop3_settings = function() {
    var hash = window.location.hash;
    if (hash) {
        if (hash.replace('#', '.') == '.pop3_setting') {
            $('.pop3_setting').css('display', 'table-row');
        }
    }
    else {
        var dsp = Hm_Utils.get_from_local_storage('.pop3_setting');
        if (dsp == 'table-row' || dsp == 'none') {
            $('.pop3_setting').css('display', dsp);
        }
    }
};

if (hm_page_name() == 'servers') {
    $('.test_pop3_connect').on('click', pop3_test_action);
    $('.save_pop3_connection').on('click', pop3_save_action);
    $('.forget_pop3_connection').on('click', pop3_forget_action);
    $('.delete_pop3_connection').on('click', pop3_delete_action);
    var dsp = Hm_Utils.get_from_local_storage('.pop3_section');
    if (dsp == 'block' || dsp == 'none') {
        $('.pop3_section').css('display', dsp);
    }
}
else if (hm_page_name() == 'message' && hm_list_path().substr(0, 4) == 'pop3') {
    pop3_message_view();
}
else if (hm_page_name() == 'info') {
    setTimeout(pop3_status_update, 100);
}
else if (hm_page_name() == 'settings') {
    expand_pop3_settings();
}


var imap_delete_action = function(event) {
    if (!hm_delete_prompt()) {
        return false;
    }
    event.preventDefault();
    Hm_Notices.hide(true);
    var form = $(this).parent();
    Hm_Ajax.request(
        form.serializeArray(),
        function(res) {
            if (res.deleted_server_id > -1 ) {
                form.parent().remove();
                Hm_Utils.set_unsaved_changes(1);
                Hm_Folders.reload_folders(true);
            }
        },
        {'imap_delete': 1}
    );
};

var imap_hide_action = function(form, server_id, hide) {
    Hm_Ajax.request(
        [{'name': 'hm_ajax_hook', 'value': 'ajax_imap_debug'},
        {'name': 'imap_server_id', 'value': server_id},
        {'name': 'hide_imap_server', 'value': hide}],
        function() {
            if (hide) {
                $('.unhide_imap_connection', form).show();
                $('.hide_imap_connection', form).hide();
            }
            else {
                $('.unhide_imap_connection', form).hide();
                $('.hide_imap_connection', form).show();
            }
            Hm_Folders.reload_folders(true);
        }
    );
};

var imap_hide = function(event) {
    event.preventDefault();
    Hm_Notices.hide(true);
    var form = $(this).parent();
    var server_id = $('.imap_server_id', form).val();
    imap_hide_action(form, server_id, 1);
};

var imap_unhide = function(event) {
    event.preventDefault();
    Hm_Notices.hide(true);
    var form = $(this).parent();
    var server_id = $('.imap_server_id', form).val();
    imap_hide_action(form, server_id, 0);
};

var imap_forget_action = function(event) {
    event.preventDefault();
    Hm_Notices.hide(true);
    var form = $(this).parent();
    Hm_Ajax.request(
        form.serializeArray(),
        function(res) {
            if (res.just_forgot_credentials) {
                form.find('.credentials').prop('disabled', false);
                form.find('.credentials').val('');
                form.append('<input type="submit" value="Save" class="save_imap_connection" />');
                $('.save_imap_connection').on('click', imap_save_action);
                $('.forget_imap_connection', form).hide();
                Hm_Utils.set_unsaved_changes(1);
                Hm_Folders.reload_folders(true);
            }
        },
        {'imap_forget': 1}
    );
};

var imap_save_action = function(event) {
    event.preventDefault();
    Hm_Notices.hide(true);
    var form = $(this).parent();
    Hm_Ajax.request(
        form.serializeArray(),
        function(res) {
            if (res.just_saved_credentials) {
                form.find('.credentials').attr('disabled', true);
                form.find('.save_imap_connection').hide();
                form.find('.imap_password').val('');
                form.find('.imap_password').attr('placeholder', '[saved]');
                form.append('<input type="submit" value="Forget" class="forget_imap_connection" />');
                $('.forget_imap_connection').on('click', imap_forget_action);
                Hm_Utils.set_unsaved_changes(1);
                Hm_Folders.reload_folders(true);
            }
        },
        {'imap_save': 1}
    );
};

var imap_test_action = function(event) {
    $('.imap_folder_data').empty();
    event.preventDefault();
    Hm_Notices.hide(true);
    var form = $(this).parent();
    Hm_Ajax.request(
        form.serializeArray(),
        false,
        {'imap_connect': 1}
    );
}

var imap_setup_server_page = function() {
    $('.imap_delete').on('click', imap_delete_action);
    $('.save_imap_connection').on('click', imap_save_action);
    $('.hide_imap_connection').on('click', imap_hide);
    $('.unhide_imap_connection').on('click', imap_unhide);
    $('.forget_imap_connection').on('click', imap_forget_action);
    $('.test_imap_connect').on('click', imap_test_action);

    var dsp = Hm_Utils.get_from_local_storage('.imap_section');
    if (dsp === 'block' || dsp === 'none') {
        $('.imap_section').css('display', dsp);
    }
    var jdsp = Hm_Utils.get_from_local_storage('.jmap_section');
    if (jdsp === 'block' || jdsp === 'none') {
        $('.jmap_section').css('display', jdsp);
    }
};

var set_message_content = function(path, msg_uid) {
    if (!path) {
        path = hm_list_path();
    }
    if (!msg_uid) {
        msg_uid = hm_msg_uid();
    }
    var key = msg_uid+'_'+path;
    Hm_Utils.save_to_local_storage(key, $('.msg_text').html());
};

var imap_delete_message = function(state, supplied_uid, supplied_detail) {
    if (!hm_delete_prompt()) {
        return false;
    }
    var uid = hm_msg_uid();
    var detail = Hm_Utils.parse_folder_path(hm_list_path(), 'imap');
    if (supplied_uid) {
        uid = supplied_uid;
    }
    if (supplied_detail) {
        detail = supplied_detail;
    }
    if (detail && uid) {
        Hm_Ajax.request(
            [{'name': 'hm_ajax_hook', 'value': 'ajax_imap_delete_message'},
            {'name': 'imap_msg_uid', 'value': uid},
            {'name': 'imap_server_id', 'value': detail.server_id},
            {'name': 'folder', 'value': detail.folder}],
            function(res) {
                if (!res.imap_delete_error) {
                    if (Hm_Utils.get_from_global('msg_uid', false)) {
                        return;
                    }
                    var msg_cache_key = 'imap_'+detail.server_id+'_'+hm_msg_uid()+'_'+detail.folder;
                    remove_from_cached_imap_pages(msg_cache_key);
                    var nlink = $('.nlink');
                    if (nlink.length) {
                        window.location.href = nlink.attr('href');
                    }
                    else {
                        if (!hm_list_parent()) {
                            window.location.href = "?page=message_list&list_path="+hm_list_path();
                        }
                        else {
                            window.location.href = "?page=message_list&list_path="+hm_list_parent();
                        }
                    }
                }
            }
        );
    }
    return false;
};

var imap_unread_message = function(supplied_uid, supplied_detail) {
    var uid = hm_msg_uid();
    var detail = Hm_Utils.parse_folder_path(hm_list_path(), 'imap');
    if (supplied_uid) {
        uid = supplied_uid;
    }
    if (supplied_detail) {
        detail = supplied_detail;
    }
    if (detail && uid) {
        var selected = detail.type+'_'+detail.server_id+'_'+uid+'_'+detail.folder;
        Hm_Ajax.request(
            [{'name': 'hm_ajax_hook', 'value': 'ajax_message_action'},
            {'name': 'action_type', 'value': 'unread'},
            {'name': 'message_ids', 'value': selected}],
            function(res) {
                    if (Hm_Utils.get_from_global('uid', false)) {
                        return;
                    }
                    var nlink = $('.nlink');
                    if (nlink.length) {
                        window.location.href = nlink.attr('href');
                    }
                    else {
                        if (!hm_list_parent()) {
                            window.location.href = "?page=message_list&list_path="+hm_list_path();
                        }
                        else {
                            window.location.href = "?page=message_list&list_path="+hm_list_parent();
                        }
                    }
            },
            [],
            false,
            function() {
                var cache = $('<tbody></tbody>').append($(Hm_Utils.get_from_local_storage('formatted_unread_data')));
                Hm_Message_List.adjust_unread_total($('tr', cache).length, true);
            }
        );
    }
    return false;
}

var imap_flag_message = function(state, supplied_uid, supplied_detail) {
    var uid = hm_msg_uid();
    var detail = Hm_Utils.parse_folder_path(hm_list_path(), 'imap');
    if (supplied_uid) {
        uid = supplied_uid;
    }
    if (supplied_detail) {
        detail = supplied_detail;
    }
    if (detail && uid) {
        Hm_Ajax.request(
            [{'name': 'hm_ajax_hook', 'value': 'ajax_imap_flag_message'},
            {'name': 'imap_msg_uid', 'value': uid},
            {'name': 'imap_flag_state', 'value': state},
            {'name': 'imap_server_id', 'value': detail.server_id},
            {'name': 'folder', 'value': detail.folder}],
            function() {
                if (state === 'flagged') {
                    $('#flag_msg').show();
                    $('#unflag_msg').hide();
                }
                else {
                    $('#flag_msg').hide();
                    $('#unflag_msg').show();
                }
                set_message_content();
                imap_message_view_finished(false, false, true);
            }
        );
    }
    return false;
};

var imap_status_update = function() {
    var id;
    var i;
    if ($('.imap_server_ids').length) {
        var ids = $('.imap_server_ids').val().split(',');
        if ( ids && ids !== '') {
            var process_result = function(res) {
                var id = res.imap_status_server_id;
                $('.imap_status_'+id).html(res.imap_status_display);
            };
            for (i=0;i<ids.length;i++) {
                id=ids[i];
                Hm_Ajax.request(
                    [{'name': 'hm_ajax_hook', 'value': 'ajax_imap_status'},
                    {'name': 'imap_server_ids', 'value': id}],
                    process_result
                );
            }
        }
    }
    return false;
};

var imap_message_list_content = function(id, folder, hook, batch_callback) {
    Hm_Ajax.request(
        [{'name': 'hm_ajax_hook', 'value': hook},
        {'name': 'folder', 'value': folder},
        {'name': 'imap_server_ids', 'value': id}],
        function(res) {
            var ids = res.imap_server_ids.split(',');
            if (folder) {
                var i;
                for (i=0;i<ids.length;i++) {
                    ids[i] = ids[i]+'_'+Hm_Utils.clean_selector(folder);
                }
            }
            if (res.auto_sent_folder) {
                add_auto_folder(res.auto_sent_folder);
            }

            Hm_Message_List.update(ids, res.formatted_message_list, 'imap');
            
            $('.page_links').html(res.page_links);
            cache_imap_page();
        },
        [],
        false,
        batch_callback
    );
    return false;
};

var add_auto_folder = function(folder) {
    $('.list_sources').append('<div class="list_src">imap '+folder+'</div>');
    var count = $('.src_count').text()*1;
    count++;
    $('.src_count').html(count);
};

var imap_sent_content = function(id, folder) {
    return imap_message_list_content(id, folder, 'ajax_imap_sent', cache_sent_data);
};

var cache_sent_data = function() {
    if (hm_list_path() == 'sent') {
        Hm_Message_List.set_message_list_state('formatted_sent_data');
    }
};

var imap_all_mail_content = function(id, folder) {
    return imap_message_list_content(id, folder, 'ajax_imap_combined_inbox', Hm_Message_List.set_all_mail_state);
};

var imap_search_page_content = function(id, folder) {
    if (hm_search_terms()) {
        return imap_message_list_content(id, folder, 'ajax_imap_search', Hm_Message_List.set_search_state);
    }
    return false;
};

var update_imap_combined_source = function(path, state, event) {
    clear_imap_page_combined_inbox();
    event.preventDefault();
    Hm_Ajax.request(
        [{'name': 'hm_ajax_hook', 'value': 'ajax_imap_update_combined_source'},
        {'name': 'list_path', 'value': path},
        {'name': 'combined_source_state', 'value': state}],
        function() {
            if (state === 1) {
                $('.add_source').hide();
                $('.remove_source').show();
            }
            else {
                $('.add_source').show();
                $('.remove_source').hide();
            }
        },
        [],
        true
    );
    return false;
};

var remove_imap_combined_source = function(event) {
    return update_imap_combined_source(hm_list_path(), 0, event);
};

var add_imap_combined_source = function(event) {
    return update_imap_combined_source(hm_list_path(), 1, event);
};

var imap_combined_unread_content = function(id, folder) {
    return imap_message_list_content(id, folder, 'ajax_imap_unread', Hm_Message_List.set_unread_state);
};

var imap_combined_flagged_content = function(id, folder) {
    return imap_message_list_content(id, folder, 'ajax_imap_flagged', Hm_Message_List.set_flagged_state);
};

var imap_combined_inbox_content = function(id, folder) {
    return imap_message_list_content(id, folder, 'ajax_imap_combined_inbox', Hm_Message_List.set_combined_inbox_state);
};

var cache_imap_page = function() {
    var key = 'imap_'+Hm_Utils.get_url_page_number()+'_'+hm_list_path();
    var data = Hm_Message_List.filter_list();
    data.find('input[type=checkbox]').removeAttr('checked');
    Hm_Utils.save_to_local_storage(key, data.html());
    Hm_Utils.save_to_local_storage(key+'_page_links', $('.page_links').html());
}

var clear_imap_page_cache = function() {
    var key = 'imap_'+Hm_Utils.get_url_page_number()+'_'+hm_list_path();
    Hm_Utils.save_to_local_storage(key, '');
    Hm_Utils.save_to_local_storage(key+'_page_links', '');
}

var clear_imap_page_combined_inbox = function() {
    var key = 'imap_1_combined_inbox';
    Hm_Utils.save_to_local_storage(key, '');
    Hm_Utils.save_to_local_storage(key+'_page_links', '');
}

var fetch_cached_imap_page = function() {
    var key = 'imap_'+Hm_Utils.get_url_page_number()+'_'+hm_list_path();
    var page = Hm_Utils.get_from_local_storage(key);
    var links = Hm_Utils.get_from_local_storage(key+'_page_links');
    return [ page, links ];
}

var remove_from_cached_imap_pages = function(msg_cache_key) {
    var keys = ['imap_'+Hm_Utils.get_url_page_number()+'_'+hm_list_path()];
    if (hm_list_parent()) {
        keys.push('imap_'+Hm_Utils.get_url_page_number()+'_'+hm_list_parent());
        if (['combined_inbox', 'unread', 'flagged', 'advanced_search', 'search', 'sent'].includes(hm_list_parent())) {
            keys.push('formatted_'+hm_list_parent());
        }
    }
    keys.forEach(function(key) {
        var data = Hm_Utils.get_from_local_storage(key);
        if (data) {
            var page_data = $('<div></div>').append(data);
            page_data.find('.'+msg_cache_key).remove();
            Hm_Utils.save_to_local_storage(key, page_data.html());
        }
    });
}

var select_imap_folder = function(path, callback) {
    var detail = Hm_Utils.parse_folder_path(path, 'imap');
    if (detail) {
        Hm_Ajax.request(
            [{'name': 'hm_ajax_hook', 'value': 'ajax_imap_folder_display'},
            {'name': 'imap_server_id', 'value': detail.server_id},
            {'name': 'folder', 'value': detail.folder}],
            display_imap_mailbox,
            [],
            false,
            callback
        );
    }
    return false;
};

var setup_imap_message_list_content_page = function() {
    $('.message_table_body').html('');
    var cache_details = fetch_cached_imap_page();
    if (cache_details[0]) {
        $('.message_table tbody').html(cache_details[0]);
    }
    if (cache_details[1]) {
        $('.page_links').html(cache_details[1]);
    }
};

var setup_imap_folder_page = function() {
    var cache_details = fetch_cached_imap_page();
    if (cache_details[0]) {
        $('.message_table tbody').html(cache_details[0]);
    }
    if (cache_details[1]) {
        $('.page_links').html(cache_details[1]);
    }
    Hm_Timer.add_job(function() { select_imap_folder(hm_list_path()); }, 60);
    $('.remove_source').on("click", remove_imap_combined_source);
    $('.add_source').on("click", add_imap_combined_source);
    $('.refresh_link').on("click", function() {
        if ($('.imap_keyword').val()) {
            $('#imap_filter_form').submit();
        }
        else {
            select_imap_folder(hm_list_path());
        }
    });
    $('.imap_filter').on("change", function() { $('#imap_filter_form').submit(); });
    $('.imap_sort').on("change", function() {
        clear_imap_page_cache();
        $('#imap_filter_form').submit();
    });
    $('.imap_keyword').on('search', function() {
        $('#imap_filter_form').submit();
    });
    Hm_Ajax.add_callback_hook('ajax_message_action', function() { select_imap_folder(hm_list_path()); });
};

var display_imap_mailbox = function(res) {
    var ids = [res.imap_server_id];
    Hm_Message_List.update(ids, res.formatted_message_list, 'imap');
    Hm_Message_List.check_empty_list();
    $('.page_links').html(res.page_links);
    $('input[type=checkbox]').on("click", function(e) {
        Hm_Message_List.toggle_msg_controls();
    });
    cache_imap_page();
};

var expand_imap_mailbox = function(res) {
    if (res.imap_expanded_folder_path) {
        $('.'+Hm_Utils.clean_selector(res.imap_expanded_folder_path), $('.email_folders')).append(res.imap_expanded_folder_formatted);
        $('.imap_folder_link', $('.email_folders')).off('click');
        $('.imap_folder_link', $('.email_folders')).on("click", function() { return expand_imap_folders($(this).data('target')); });
        Hm_Folders.update_unread_counts();
    }
};

var prefetch_imap_folders = function() {
    var id_el = $('#imap_prefetch_ids');
    if (!id_el.length) {
        return;
    }
    var ids = id_el.val().split(',');
    if (ids.length == 0 ) {
        return;
    }
    var id = ids.shift();
    if (id === '') {
        return;
    }

    Hm_Ajax.request(
        [{'name': 'hm_ajax_hook', 'value': 'ajax_imap_folder_expand'},
        {'name': 'imap_server_id', 'value': id},
        {'name': 'imap_prefetch', 'value': true},
        {'name': 'folder', 'value': ''}],
        function(res) { $('#imap_prefetch_ids').val(ids.join(',')); prefetch_imap_folders(); },
        [],
        true
    );

};

var expand_imap_folders = function(path) {
    var detail = Hm_Utils.parse_folder_path(path, 'imap');
    var list = $('.imap_'+detail.server_id+'_'+Hm_Utils.clean_selector(detail.folder), $('.email_folders'));
    if ($('li', list).length === 0) {
        $('.expand_link', list).html('-');
        if (detail) {
            Hm_Ajax.request(
                [{'name': 'hm_ajax_hook', 'value': 'ajax_imap_folder_expand'},
                {'name': 'imap_server_id', 'value': detail.server_id},
                {'name': 'folder', 'value': detail.folder}],
                expand_imap_mailbox,
                [],
                false,
                Hm_Folders.save_folder_list
            );
        }
    }
    else {
        $('.expand_link', list).html('+');
        $('ul', list).remove();
        Hm_Folders.save_folder_list();
    }
    return false;
};

var get_message_content = function(msg_part, uid, list_path, detail, callback, noupdate, images) {
    if (!images) {
        images = 0;
    }
    if (!uid) {
        uid = $('.msg_uid').val();
    }
    if (!detail) {
        detail = Hm_Utils.parse_folder_path(hm_list_path(), 'imap');
    }
    if (detail && uid) {
        if (hm_page_name() == 'message') {
            window.scrollTo(0,0);
        }
        Hm_Ajax.request(
            [{'name': 'hm_ajax_hook', 'value': 'ajax_imap_message_content'},
            {'name': 'imap_msg_uid', 'value': uid},
            {'name': 'imap_msg_part', 'value': msg_part},
            {'name': 'imap_allow_images', 'value': images},
            {'name': 'imap_server_id', 'value': detail.server_id},
            {'name': 'folder', 'value': detail.folder}],
            function(res) {
                if (!noupdate) {
                    $('.msg_text').html('');
                    $('.msg_text').append(res.msg_headers);
                    $('.msg_text').append(res.msg_text);
                    $('.msg_text').append(res.msg_parts);
                    set_message_content(list_path, uid);
                    document.title = $('.header_subject th').text();
                    imap_message_view_finished();
                }
                else {
                    $('.reply_link, .reply_all_link, .forward_link').each(function() {
                        $(this).attr("href", $(this).data("href"));
                        $(this).removeClass('disabled_link');
                    });
                }
                if (!res.show_pagination_links) {
                    $('.prev, .next').hide();
                }
            },
            [],
            false,
            callback
        );
    }
    return false;
};

var imap_mark_as_read = function(uid, detail) {
    if (!uid) {
        uid = $('.msg_uid').val();
    }
    if (!detail) {
        detail = Hm_Utils.parse_folder_path(hm_list_path(), 'imap');
    }
    if (detail && uid) {
        Hm_Ajax.request(
            [{'name': 'hm_ajax_hook', 'value': 'ajax_imap_mark_as_read'},
            {'name': 'imap_msg_uid', 'value': uid},
            {'name': 'imap_server_id', 'value': detail.server_id},
            {'name': 'folder', 'value': detail.folder}],
            function() {},
            false,
            true
        );
    }
    return false;
};

var block_unblock_sender = function(msg_uid, detail, scope, action, sender = '', reject_message = '') {
    Hm_Ajax.request(
        [
            {'name': 'hm_ajax_hook', 'value': 'ajax_sieve_block_unblock'},
            {'name': 'imap_msg_uid', 'value': msg_uid},
            {'name': 'imap_server_id', 'value': detail.server_id},
            {'name': 'folder', 'value': detail.folder},
            {'name': 'block_action', 'value': action},
            {'name': 'scope', 'value': scope},
            {'name': 'reject_message', 'value': reject_message}
        ],
        function(res) {
            if (/^(Sender|Domain) Blocked$/.test(res.router_user_msgs[0])) {
                var title = scope == 'domain'
                    ? 'UNBLOCK DOMAIN'
                    : 'UNBLOCK SENDER';
                $("#filter_block_txt").html(title);
                $("#filter_block_txt")
                    .parent()
                    .removeClass('dropdown-toggle')
                    .attr('id', 'unblock_sender')
                    .data('target', scope);
            }
            if (/^(Sender|Domain) Unblocked$/.test(res.router_user_msgs[0])) {
                $("#filter_block_txt").html('BLOCK SENDER');
                $("#filter_block_txt")
                    .parent()
                    .addClass('dropdown-toggle')
                    .removeAttr('id');
            }
        },
        true,
        true
    );
}

var imap_message_view_finished = function(msg_uid, detail, skip_links) {
    var class_name = false;
    if (!detail) {
        detail = Hm_Utils.parse_folder_path(hm_list_path(), 'imap');
    }
    if (!msg_uid) {
        msg_uid = hm_msg_uid();
    }
    if (detail && !skip_links) {
        class_name = 'imap_'+detail.server_id+'_'+msg_uid+'_'+detail.folder;
        if (hm_list_parent() === 'combined_inbox') {
            Hm_Message_List.prev_next_links('formatted_combined_inbox', class_name);
        }
        else if (hm_list_parent() === 'unread') {
            Hm_Message_List.prev_next_links('formatted_unread_data', class_name);
        }
        else if (hm_list_parent() === 'flagged') {
            Hm_Message_List.prev_next_links('formatted_flagged_data', class_name);
        }
        else if (hm_list_parent() === 'advanced_search') {
            Hm_Message_List.prev_next_links('formatted_advanced_search_data', class_name);
        }
        else if (hm_list_parent() === 'search') {
            Hm_Message_List.prev_next_links('formatted_search_data', class_name);
        }
        else if (hm_list_parent() === 'sent') {
            Hm_Message_List.prev_next_links('formatted_sent_data', class_name);
        }
        else {
            var key = 'imap_'+Hm_Utils.get_url_page_number()+'_'+hm_list_path();
            Hm_Message_List.prev_next_links(key, class_name);
        }
    }
    if (Hm_Message_List.track_read_messages(class_name)) {
        if (hm_list_parent() == 'unread') {
            Hm_Message_List.adjust_unread_total(-1);
        }
    }
    $('.all_headers').on("click", function() { return Hm_Utils.toggle_long_headers(); });
    $('.small_headers').on("click", function() { return Hm_Utils.toggle_long_headers(); });
    $('.msg_part_link').on("click", function() {
        $('.header_subject')[0].scrollIntoView();
        $('.msg_text_inner').css('visibility', 'hidden');
        return get_message_content($(this).data('messagePart'), false, false, false, false, false, $(this).data('allowImages'));
    });
    $('#flag_msg').on("click", function() { return imap_flag_message($(this).data('state')); });
    $('#unflag_msg').on("click", function() { return imap_flag_message($(this).data('state')); });
    $('#delete_message').on("click", function() { return imap_delete_message(); });
    $('#move_message').on("click", function(e) { return imap_move_copy(e, 'move', 'message');});
    $('#copy_message').on("click", function(e) { return imap_move_copy(e, 'copy', 'message');});
    $('#archive_message').on("click", function(e) { return imap_archive_message();});
    $('#unread_message').on("click", function() { return inline_imap_unread_message(msg_uid, detail);});
    $('#block_sender').on("click", function(e) {
        e.preventDefault();
        var scope = $('[name=scope]').val();
        var action = $('[name=block_action]').val();
        var sender = $('[name=scope]').data('sender');
        var reject_message = action == 'reject_with_message' ? $('#reject_message_textarea').val() : '';

        if (action == 'reject_with_message' && ! reject_message) {
            $('#reject_message_textarea').css('border', '1px solid brown');
            return;
        }

        $("#filter_block_txt").parent().next().toggle();
        $('#reject_message').remove();
        $('#block_sender_form')[0].reset();

        return block_unblock_sender(msg_uid, detail, scope, action, sender, reject_message);
    });
    $(document).on('click', '#unblock_sender', function(e) {
        e.preventDefault();
        var sender = '';
        if ($(this).data('target') == 'domain') {
            sender = $('[name=scope]').data('domain');
        } else {
            sender = $('[name=scope]').data('sender');
        }
        return block_unblock_sender(msg_uid, detail, $(this).data('target'), 'unblock', sender);
    });
    $('#block_action').on('change', function(e) {
        if ($(this).val() == 'reject_with_message') {
            $('<div id="reject_message"><label>Message</label><textarea id="reject_message_textarea"></textarea></div>').insertAfter($(this));
        } else {
            $('#reject_message').remove();
        }
    });
    fixLtrInRtl();
};

var get_local_message_content = function(msg_uid, path) {
    if (!path) {
        path = hm_list_path();
    }
    if (!msg_uid) {
        msg_uid = hm_msg_uid();
    }
    var key = msg_uid+'_'+path;
    return Hm_Utils.get_from_local_storage(key);
};

var imap_prefetch_message_content = function(uid, server_id, folder) {
    Hm_Ajax.request(
        [{'name': 'hm_ajax_hook', 'value': 'ajax_imap_message_content'},
        {'name': 'imap_msg_uid', 'value': uid},
        {'name': 'imap_msg_part', 'value': ''},
        {'name': 'imap_server_id', 'value': server_id},
        {'name': 'imap_prefetch', 'value': true},
        {'name': 'folder', 'value': folder}],
        function(res) {
            var key = uid+'_imap_'+server_id+'_'+folder;
            if (!Hm_Utils.get_from_local_storage(key)) {
                var div;
                div = $('<div></div>');
                div.append(res.msg_headers);
                div.append(res.msg_text);
                div.append(res.msg_parts);
                Hm_Utils.save_to_local_storage(key, div.html());
            }
        },
        [],
        true
    );
    return false;
};

var imap_prefetch_msgs = function() {
    var detail;
    var key;
    
    $(Hm_Utils.get_from_local_storage('formatted_unread_data')).each(function() {
        if ($(this).attr('class').match(/^imap/)) {
            detail = Hm_Utils.parse_folder_path($(this).attr('class'), 'imap');
            key = detail.uid+'_'+detail.type+'_'+detail.server_id+'_'+detail.folder;
            if (!Hm_Utils.get_from_local_storage(key)) {
                imap_prefetch_message_content(detail.uid, detail.server_id, detail.folder);
                return false;
            }
        }
    });
};

var imap_setup_message_view_page = function(uid, details, list_path, callback) {
    var msg_content = get_local_message_content(uid, list_path);
    if (!msg_content || !msg_content.length || msg_content.indexOf('<div class="msg_text_inner"></div>') > -1) {
        get_message_content(false, uid, list_path, details, callback);
    }
    else {
        $('.msg_text').html(msg_content);
        document.title = $('.header_subject th').text();
        $('.reply_link, .reply_all_link, .forward_link').each(function() {
            $(this).data("href", $(this).attr("href")).removeAttr("href");
            $(this).addClass('disabled_link');
        });
        imap_message_view_finished();
        get_message_content(false, uid, list_path, details, callback, true);
    }
};

var display_reply_content = function(res) {
    $('.compose_to').prop('disabled', false);
    $('.smtp_send').prop('disabled', false);
    $('.compose_subject').prop('disabled', false);
    $('.compose_body').prop('disabled', false);
    $('.smtp_server_id').prop('disabled', false);
    $('.compose_body').text(res.reply_body);
    $('.compose_subject').val(res.reply_subject);
    $('.compose_to').val(res.reply_to);
    document.title = res.reply_subject;
};

var imap_background_unread_content_result = function(res) {
    if (!$.isEmptyObject(res.folder_status)) {
        var detail = Hm_Utils.parse_folder_path(Object.keys(res.folder_status)[0], 'imap');
        var ids = [detail.server_id+'_'+detail.folder];
        var cache = $('<tbody></tbody>').append($(Hm_Utils.get_from_local_storage('formatted_unread_data')));
        globals.Hm_Background_Unread.update(ids, res.formatted_message_list, 'imap', cache);
        Hm_Utils.save_to_local_storage('formatted_unread_data', cache.html());
    }
};

var check_select_for_imap = function() {
    $('body').off('change', 'input[type=checkbox]');
    $('body').on('change', 'input[type=checkbox]', function(e) { search_selected_for_imap(); });
};

var search_selected_for_imap = function() {
    var imap_selected = false;
    $('input[type=checkbox]').each(function() {
        if (this.checked && this.id.search('imap') != -1) {
            imap_selected = true;
            return false;
        }
    });
    if (imap_selected) {
        $('.imap_move').removeClass('disabled_input');
        $('.imap_move').off('click');
        $('.imap_move').on("click", function(e) {return imap_move_copy(e, $(this).data('action'), 'list');});
    }
    else {
        $('.imap_move').addClass('disabled_input');
        $('.imap_move').off('click');
        $('.imap_move').on("click", function() { return false; });
        $('.move_to_location').html('');
        $('.move_to_location').hide();
    }
};

var unselect_non_imap_messages = function() {
    var unselected = 0;
    $('input[type=checkbox]').each(function() {
        if (this.checked && this.id.search('imap') == -1) {
            this.checked = false;
            unselected++;
        }
    });
    if (unselected > 0) {
        Hm_Notices.show({0: 'ERR'+$('.move_to_string3').val()});
    }
};

var imap_move_copy = function(e, action, context) {
    var move_to;
    if (!e.target || e.target.className == 'imap_move') {
        move_to = $('.msg_controls .move_to_location');
    }
    else {
        move_to = $('.msg_text .move_to_location');
    }
    unselect_non_imap_messages();
    var label;
    var folders = $('.email_folders').clone(false);
    folders.find('.manage_folders_li').remove();
    $('.menu_email', folders).remove();
    folders.removeClass('email_folders');
    folders.show();
    $('.imap_folder_link', folders).addClass('imap_move_folder_link').removeClass('imap_folder_link');
    if (action == 'move') {
        label = $('.move_to_string1').val(); 
    }
    else {
        label = $('.move_to_string2').val();
    }
    folders.prepend('<div class="move_to_title">'+label+'<span><a class="close_move_to" href="#">X</a></span></div>');
    move_to.html(folders.html());
    $('.imap_move_folder_link', move_to).on("click", function() { return expand_imap_move_to_folders($(this).data('target'), context); });
    $('a', move_to).not('.imap_move_folder_link').not('.close_move_to').off('click');
    $('a', move_to).not('.imap_move_folder_link').not('.close_move_to').on("click", function() { imap_perform_move_copy($(this).data('id'), context); return false; });
    $('.move_to_type').val(action);
    $('.close_move_to').on("click", function() {
        $('.move_to_location').html('');
        $('.move_to_location').hide();
        return false;
    });
    move_to.show();
    return false;
};

var imap_perform_move_copy = function(dest_id, context) {
    var action = $('.move_to_type').val();
    var ids = [];
    var page = hm_page_name();
    $('.move_to_location').html('');
    $('.move_to_location').hide();

    if (context == 'message') {
        var inline_uuid = Hm_Utils.get_from_global('inline_move_uuid', false);
        if (inline_uuid) {
            ids.push(inline_uuid);
            globals['inline_move_uuid'] = false;
        }
        else if (page == 'message') {
            var uid = hm_msg_uid();
            var path = Hm_Utils.parse_folder_path(hm_list_path());
            ids.push('imap_'+path['server_id']+'_'+uid+'_'+path['folder']);
        }
    }
    else if (context == 'list') {
        $('input[type=checkbox]').each(function() {
            if (this.checked && this.id.search('imap') != -1) {
                ids.push(this.id);
            }
        });
    }
    if (ids.length > 0 && dest_id) {
        Hm_Ajax.request(
            [{'name': 'hm_ajax_hook', 'value': 'ajax_imap_move_copy_action'},
            {'name': 'imap_move_ids', 'value': ids.join(',')},
            {'name': 'imap_move_to', 'value': dest_id},
            {'name': 'imap_move_page', 'value': page},
            {'name': 'imap_move_action', 'value': action}],
            function(res) {
                var index;
                if (hm_page_name() == 'message_list') {
                    Hm_Message_List.reset_checkboxes();
                    if (action == 'move') {
                        for (index in res.move_count) {
                            $('.'+Hm_Utils.clean_selector(res.move_count[index])).remove();
                        }
                    }
                    if (hm_list_path().substr(0, 4) === 'imap') {
                        select_imap_folder(hm_list_path());
                    }
                    else {
                        Hm_Message_List.load_sources();
                    }
                }
                else {
                    if (action == 'move') {
                        var nlink = $('.nlink');
                        if (nlink.length) {
                            window.location.href = nlink.attr('href');
                        }
                        else {
                            if(hm_page_name() == 'search'){
                                window.location.reload();
                            }
                            else if(hm_page_name() == 'advanced_search'){
                                process_advanced_search();
                            }else{
                                window.location.href = "?page=message_list&list_path="+hm_list_parent();
                            }
                        }
                    }
                }
            }
        );
    }
};

var expand_imap_move_to_mailbox = function(res, context) {
    if (res.imap_expanded_folder_path) {
        var move_to = $('.move_to_location');
        var folders = $(res.imap_expanded_folder_formatted);
        folders.find('.manage_folders_li').remove();
        $('.'+Hm_Utils.clean_selector(res.imap_expanded_folder_path), $('.move_to_location')).append(folders);
        $('.imap_folder_link', move_to).addClass('imap_move_folder_link').removeClass('imap_folder_link');
        $('.imap_move_folder_link', move_to).off('click');
        $('.imap_move_folder_link', move_to).on("click", function() { return expand_imap_move_to_folders($(this).data('target'), context); });
        $('a', move_to).not('.imap_move_folder_link').off('click');
        $('a', move_to).not('.imap_move_folder_link').on("click", function() { imap_perform_move_copy($(this).data('id'), context); return false; });
    }
};

var expand_imap_move_to_folders = function(path, context) {
    var detail = Hm_Utils.parse_folder_path(path, 'imap');
    var list = $('.imap_'+detail.server_id+'_'+Hm_Utils.clean_selector(detail.folder), $('.move_to_location'));
    if ($('li', list).length === 0) {
        $('.expand_link', list).html('-');
        if (detail) {
            Hm_Ajax.request(
                [{'name': 'hm_ajax_hook', 'value': 'ajax_imap_folder_expand'},
                {'name': 'imap_server_id', 'value': detail.server_id},
                {'name': 'folder', 'value': detail.folder}],
                function (res) { expand_imap_move_to_mailbox(res, context); }
            );
        }
    }
    else {
        $('.expand_link', list).html('+');
        $('ul', list).remove();
    }
    return false;
};

var imap_background_unread_content = function(id, folder) {
    Hm_Ajax.request(
        [{'name': 'hm_ajax_hook', 'value': 'ajax_imap_unread'},
        {'name': 'folder', 'value': folder},
        {'name': 'imap_server_ids', 'value': id}],
        imap_background_unread_content_result,
        [],
        false,
        function() {
            var cache = $('<tbody></tbody>').append($(Hm_Utils.get_from_local_storage('formatted_unread_data')));
            Hm_Message_List.adjust_unread_total($('tr', cache).length, true);
        }
    );
    return false;
};

var get_imap_folder_status = function(id, folder) {
    Hm_Ajax.request(
        [{'name': 'hm_ajax_hook', 'value': 'ajax_imap_folder_status'},
        {'name': 'imap_server_id', 'value': id},
        {'name': 'folder', 'value': folder}],
        false,
        [],
        true,
        Hm_Folders.update_unread_counts
    );
}

var imap_folder_status = function() {
    var source;
    var sources = hm_data_sources();
    if (!sources || !sources.length) {
        sources = hm_data_sources_background();
    }
    for (var index in sources) {
        source = sources[index];
        if (source.type == 'imap') {
            get_imap_folder_status(source.id, source.folder);
        }
    }
};

if (hm_list_path() == 'sent') {
    Hm_Message_List.page_caches.sent = 'formatted_sent_data';
}

$(function() {
    $(document).on('click', '#enable_sieve_filter', function () {
        $('.sieve_config').toggle();
    });

    $(document).on('keyup', '#new_imap_address', function () {
        if ($('#enable_sieve_filter').is(':checked') && $(this).val()) {
            $('#sieve_config_host').val($(this).val() + ':4190');
        } else {
            $('#sieve_config_host').val('');
        }
    });

    $(document).on('change', '#enable_sieve_filter', function () {
        $('#new_imap_address').trigger('keyup');
    });

    $(document).on('click', '.remove_attachment', function (e) {
        if (!hm_delete_prompt()) {
            e.preventDefault();
            return false;
        }
        return true;
    });

    $(document).on('click', '.checkbox_label', function(e) {
        setTimeout(search_selected_for_imap, 100);
    });

    if (hm_page_name() === 'message_list' && hm_list_path().substr(0, 4) === 'imap') {
        setup_imap_folder_page();
    }
    else if (hm_page_name() === 'message_list' && hm_list_path() === 'combined_inbox') {
        setup_imap_message_list_content_page();
    }
    else if (hm_page_name() === 'message' && hm_list_path().substr(0, 4) === 'imap') {
        imap_setup_message_view_page();
    }
    else if (hm_page_name() === 'servers') {
        imap_setup_server_page();
    }
    else if (hm_page_name() === 'info') {
        setTimeout(imap_status_update, 100);
    }

    if ($('.imap_move').length > 0) {
        check_select_for_imap();
        $('.toggle_link').on("click", function() { setTimeout(search_selected_for_imap, 100); });
        Hm_Ajax.add_callback_hook('ajax_imap_folder_display', check_select_for_imap);
        Hm_Message_List.callbacks.push(check_select_for_imap);
        $('.imap_move').on("click", function() { return false; });
    }

    if (hm_list_path() !== 'unread') {
        if (typeof hm_data_sources_background === 'function') {
            globals.Hm_Background_Unread = new Message_List();
            globals.Hm_Background_Unread.background = true;
            globals.Hm_Background_Unread.add_sources(hm_data_sources_background());
            var interval = Hm_Utils.get_from_global('imap_background_update_interval', 33);
            Hm_Timer.add_job(globals.Hm_Background_Unread.load_sources, interval, true);
        }
    }
    var prefetch_interval = Hm_Utils.get_from_global('imap_prefetch_msg_interval', 43);
    Hm_Timer.add_job(imap_prefetch_msgs, prefetch_interval, true);
    setTimeout(prefetch_imap_folders, 2);

    $(document).on('click', '.dropdown-toggle', function(e) {
        e.preventDefault();
        $(this).next().toggle();
    });
});


var imap_archive_message = function(state, supplied_uid, supplied_detail) {
    var uid = hm_msg_uid();
    var detail = Hm_Utils.parse_folder_path(hm_list_path(), 'imap');
    if (supplied_uid) {
        uid = supplied_uid;
    }
    if (supplied_detail) {
        detail = supplied_detail;
    }
    if (detail && uid) {
        Hm_Ajax.request(
            [{'name': 'hm_ajax_hook', 'value': 'ajax_imap_archive_message'},
            {'name': 'imap_msg_uid', 'value': uid},
            {'name': 'imap_server_id', 'value': detail.server_id},
            {'name': 'folder', 'value': detail.folder}],
            function(res) {
                if (!res.imap_archive_error) {
                    if (Hm_Utils.get_from_global('msg_uid', false)) {
                        return;
                    }
                    var nlink = $('.nlink');
                    if (nlink.length) {
                        window.location.href = nlink.attr('href');
                    }
                    else {
                        if (!hm_list_parent()) {
                            window.location.href = "?page=message_list&list_path="+hm_list_path();
                        }
                        else {
                            window.location.href = "?page=message_list&list_path="+hm_list_parent();
                        }
                    }
                }
            }
        );
    }
    return false;
};


var get_smtp_profile = function(profile_value) {
    if (typeof profile_value === "undefined" || profile_value == "0" || profile_value == "") {
        Hm_Notices.show(['ERRPlease create a profile for saving sent messages option'], true);
    }
    else {
        Hm_Ajax.request(
            [{'name': 'hm_ajax_hook', 'value': 'ajax_profiles_status'},
            {'name': 'profile_value', 'value': profile_value}],
            function(res) { 
            }
        );
    }
};

var check_attachment_dir_access = function() {
    Hm_Notices.show(['ERRAttachment storage unavailable, please contact your site administrator']);
};

var smtp_test_action = function(event) {
    event.preventDefault();
    var form = $(this).parent();
    Hm_Notices.hide(true);
    Hm_Ajax.request(
        form.serializeArray(),
        function(res) {
            Hm_Notices.show(res.router_user_msgs);
        },
        {'smtp_connect': 1}
    );
};

var smtp_save_action = function(event) {
    event.preventDefault();
    var form = $(this).parent();
    Hm_Notices.hide(true);
    Hm_Ajax.request(
        form.serializeArray(),
        function(res) {
            Hm_Notices.show(res.router_user_msgs);
            if (res.just_saved_credentials) {
                form.find('.credentials').attr('disabled', true);
                form.find('.save_smtp_connection').hide();
                form.find('.smtp_password').val('');
                form.find('.smtp_password').attr('placeholder', '[saved]');
                form.append('<input type="submit" value="Forget" class="forget_smtp_connection" />');
                $('.forget_smtp_connection').on('click', smtp_forget_action);
                Hm_Utils.set_unsaved_changes(1);
                Hm_Folders.reload_folders(true);
            }
        },
        {'smtp_save': 1}
    );
};

var smtp_forget_action = function(event) {
    event.preventDefault();
    var form = $(this).parent();
    Hm_Notices.hide(true);
    Hm_Ajax.request(
        form.serializeArray(),
        function(res) {
            Hm_Notices.show(res.router_user_msgs);
            if (res.just_forgot_credentials) {
                form.find('.credentials').prop('disabled', false);
                form.find('.credentials').val('');
                form.append('<input type="submit" value="Save" class="save_smtp_connection" />');
                $('.save_smtp_connection').on('click', smtp_save_action);
                $('.forget_smtp_connection', form).remove();
                Hm_Utils.set_unsaved_changes(1);
                Hm_Folders.reload_folders(true);
            }
        },
        {'smtp_forget': 1}
    );
};

var smtp_delete_action = function(event) {
    if (!hm_delete_prompt()) {
        return false;
    }
    event.preventDefault();
    Hm_Notices.hide(true);
    var form = $(this).parent();
    Hm_Ajax.request(
        form.serializeArray(),
        function(res) {
            Hm_Notices.show(res.router_user_msgs);
            if (res.deleted_server_id > -1 ) {
                form.parent().remove();
                Hm_Utils.set_unsaved_changes(1);
                Hm_Folders.reload_folders(true);
            }
        },
        {'smtp_delete': 1}
    );
};

var smtp_delete_draft = function(id) {
    Hm_Ajax.request(
        [{'name': 'hm_ajax_hook', 'value': 'ajax_smtp_delete_draft'},
        {'name': 'draft_id', 'value': id}],
        function(res) {
            if (res.draft_id != -1) {
                $('.draft_'+id).remove();
                $('.draft_list').toggle();
            }
        }
    );
};

var send_archive = function() {
    $('.compose_post_archive').val(1);
    document.getElementsByClassName("smtp_send")[0].click();
}

var save_compose_state = function(no_files, notice) {
    var no_icon = true;
    if (notice) {
        no_icon = false;
    }
    var uploaded_files = $("input[name='uploaded_files[]']").map(function(){return $(this).val();}).get();
    var body = $('.compose_body').val();
    var subject = $('.compose_subject').val();
    var to = $('.compose_to').val();
    var smtp = $('.compose_server').val();
    var cc = $('.compose_cc').val();
    var bcc = $('.compose_bcc').val();
    var inreplyto = $('.compose_in_reply_to').val();
    
    var draft_id = $('.compose_draft_id').val();
    if (globals.draft_state == body+subject+to+smtp+cc+bcc+uploaded_files) {
        return;
    }
    globals.draft_state = body+subject+to+smtp+cc+bcc+uploaded_files;

    if (!body && !subject && !to && !cc && !bcc) {
        return;
    }

    $('.smtp_send').prop('disabled', true);
    $('.smtp_send').addClass('disabled_input');
    Hm_Ajax.request(
        [{'name': 'hm_ajax_hook', 'value': 'ajax_smtp_save_draft'},
        {'name': 'draft_body', 'value': body},
        {'name': 'draft_id', 'value': draft_id},
        {'name': 'draft_smtp', 'value': smtp},
        {'name': 'draft_subject', 'value': subject},
        {'name': 'draft_cc', 'value': cc},
        {'name': 'draft_bcc', 'value': bcc},
        {'name': 'draft_notice', 'value': notice},
        {'name': 'draft_in_reply_to', 'value': inreplyto},
        {'name': 'delete_uploaded_files', 'value': no_files},
        {'name': 'draft_to', 'value': to},
        {'name': 'uploaded_files', 'value': uploaded_files}],
        function(res) {
            $('.smtp_send').prop('disabled', false);
            $('.smtp_send').removeClass('disabled_input');
            if (res.draft_id) {
                $('.compose_draft_id').val(res.draft_id);
            }
            if (res.draft_subject) {
                $('.draft_list .draft_'+draft_id+' a').text(res.draft_subject);
            }
        },
        [],
        no_icon
    );
};

var toggle_recip_flds = function() {
    var symbol = '+';
    if ($('.toggle_recipients').text() == '+') {
        symbol = '-';
    }
    $('.toggle_recipients').text(symbol);
    $('.recipient_fields').toggle();
    return false;
}

if (hm_page_name() === 'servers') {
    $('.test_smtp_connect').on('click', smtp_test_action);
    $('.save_smtp_connection').on('click', smtp_save_action);
    $('.forget_smtp_connection').on('click', smtp_forget_action);
    $('.delete_smtp_connection').on('click', smtp_delete_action);
    var dsp = Hm_Utils.get_from_local_storage('.smtp_section');
    if (dsp === 'block' || dsp === 'none') {
        $('.smtp_section').css('display', dsp);
    }
}

var reset_smtp_form = function() {
    $('.compose_body').val('');
    $('.compose_subject').val('');
    $('.compose_to').val('');
    $('.compose_cc').val('');
    $('.compose_bcc').val('');
    $('.ke-content', $('iframe').contents()).html('');
    $('.uploaded_files').html('');
    save_compose_state(true);
};

var replace_cursor_positon = function (txtElement) {
    txtElement.val('\r\n\r\n\r\n'+txtElement.val());
    txtElement.prop('selectionEnd',0);
    txtElement.focus();
}

var init_resumable_upload = function () {
    var r = new Resumable({
        target:'?page=compose&hm_ajax_hook=ajax_upload_chunk&draft_smtp=' + $(".compose_server").val(),
        testTarget:'?page=compose&hm_ajax_hook=ajax_get_test_chunk&draft_smtp=' + $(".compose_server").val(),
        testMethod: 'POST',
        headers: {
            'X-Requested-with': 'xmlhttprequest'
        }
    });
    r.assignBrowse(document.getElementsByClassName('compose_attach_button'));
    r.on('fileAdded', function(file, event){
        $('.uploaded_files').append('<tr id="tr-'+file.uniqueIdentifier+'"><td>'
                +file.fileName+'</td><td>'+file.file.type+' ' + (Math.round((file.file.size/1024) * 100)/100) + 'KB '
                +'</td><td><a class="remove_attachment" id="remove-'+file.uniqueIdentifier+'" style="display:none" href="#">Remove</a><a  id="pause-'+file.uniqueIdentifier+'" class="pause_upload" href="#">Pause</a><a style="display:none" id="resume-'+file.uniqueIdentifier+'" class="resume_upload" href="#">Resume</a></td></tr><tr><td colspan="2">'
                +'<div class="meter" style="width:100%"><span id="progress-'
                +file.uniqueIdentifier+'" style="width:0%;"><span class="progress" id="progress-bar-'
                +file.uniqueIdentifier+'"></span></span></div></td></tr>');
        r.upload()
        $('.pause_upload').on('click', function (e) {
            e.preventDefault();
            r.pause();
        });
        $('.resume_upload').on('click', function(e) {
            e.preventDefault();
            $('.remove_attachment').css('display', 'none');
            $('.pause_upload').css('display', '');
            $('.resume_upload').css('display', 'none');
            r.upload();
        });
        $('.remove_attachment').on('click', function(e) {
            e.preventDefault();
            var fileUniqueId = $(this).attr('id').replace('remove-', '');
            file = r.getFromUniqueIdentifier(fileUniqueId);
            if (file) {
                r.removeFile(file);
            }
            $(this).parent().parent().next('tr').remove();
            $(this).parent().parent().remove();
        });
    });
    r.on('fileProgress', function(file) {
        var progress = Math.floor(file.progress() * 100);
        $('#progress-' + file.uniqueIdentifier).css('width', progress+'%');
    });
    r.on('fileSuccess', function(file) {
        $('.remove_attachment').css('display', '');
        $('.pause_upload').css('display', 'none');
        $('.resume_upload').css('display', 'none');
        $('#tr-'+file.uniqueIdentifier).append('<td style="display:none"><input name="uploaded_files[]" type="text" value="'+file.fileName+'" /></td>');
        $('#progress-bar-' + file.uniqueIdentifier).css('background-color', 'green');
        $('#progress-' + file.uniqueIdentifier).parent().css('opacity', '0');
    });
    r.on('fileError', function(file, message) {
        $('#progress-bar-' + file.uniqueIdentifier).css('background-color', 'red');
    });
    r.on('pause', function() {
        $('.remove_attachment').css('display', 'none');
        $('.pause_upload').css('display', 'none');
        $('.resume_upload').css('display', '');
    });
    $('.remove_attachment').on('click', function(e) {
        e.preventDefault();
        var fileUniqueId = $(this).attr('id').replace('remove-', '');
        $(this).parent().parent().next('tr').remove();
        $(this).parent().parent().remove();
        file = r.getFromUniqueIdentifier(fileUniqueId);
        r.removeFile(file);
    });
}

var move_recipient_to_section = function(e) {
    e.preventDefault();
    var id = e.dataTransfer.getData("text");
    var target = $(e.target);
    if (!target.hasClass('compose_container')) {
        target = target.closest('.compose_container');
    }
    target.find('.bubbles').append($('#'+id));
    var input = target.find('input');
    input.focus();
    resize_input(input[0]);
};

var allow_drop = function(e) {
    e.preventDefault();
};

var drag = function(e) {
    e.dataTransfer.setData('text', e.target.id);
};

var bubbles_to_text = function(input) {
    var value = '';
    $(input).prev().children().each(function() {
        if (value) {
            value = value + ', ';
        }
        value = value + $(this).attr('data-value');
        $(this).remove();
    });
    if (value) {
        if ($(input).val()) {
            value = value + ', ' + $(input).val();
        }
        $(input).val(value);
    }
    $(input).css('width', '95%');
};

var resize_input = function(input) {
    $(input).css('width', 'auto');
    var input_width = $(input).parent().outerWidth() - $(input).position().left;
    $(input).css('width', input_width);
};

var text_to_bubbles = function(input) {
    if ($(input).val()) {
        var recipients = $(input).val().split(/,|;/);
        var invalid_recipients = '';
        for (var i = 0; i < recipients.length; i++) {
            if (is_valid_recipient(recipients[i])) {
                append_bubble(recipients[i].trim(), input);
            } else {
                if (invalid_recipients) {
                    invalid_recipients = invalid_recipients + ', ';
                }
                invalid_recipients = invalid_recipients + recipients[i];
            }
        }
        $(input).val(invalid_recipients);
    }
    resize_input(input);
};

var bubble_index = 0;
var append_bubble = function(value, to) {
    var bubble = '<div id="bubble_'+bubble_index+'" class="bubble" draggable="true" ondragstart="drag(event)" data-value="'+value+'">'+value+'<span class="bubble_close">&times;</span></div>';
    $(to).prev().append(bubble);
    bubble_index++;
};

var is_valid_recipient = function(recipient) {
    var valid_regex = /^[\w ]*[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    return recipient.match(valid_regex);
};

$(function() {    
    if (hm_page_name() === 'settings') {
        $('#clear_chunks_button').on('click', function(e) {
            e.preventDefault();
            Hm_Ajax.request(
                [{'name': 'hm_ajax_hook', 'value': 'ajax_clear_attachment_chunks'}],
                function(res) {
                    
                },
                []
            );
        });
    }
    if (hm_page_name() === 'compose') {
        init_resumable_upload()

        var interval = Hm_Utils.get_from_global('compose_save_interval', 30);
        Hm_Timer.add_job(function() { save_compose_state(); }, interval, true);
        $('.draft_title').on("click", function() { $('.draft_list').toggle(); });
        $('.toggle_recipients').on("click", function() { return toggle_recip_flds(); });
        $('.smtp_reset').on("click", reset_smtp_form);
        $('.delete_draft').on("click", function() { smtp_delete_draft($(this).data('id')); });
        $('.smtp_save').on("click", function() { save_compose_state(false, true); });
        $('.smtp_send_archive').on("click", function() { send_archive(false, true); });
        $('.compose_form').on('submit', function() {
            var msg_uid = hm_msg_uid();
            var detail = Hm_Utils.parse_folder_path(hm_list_path(), 'imap');
            var class_name = 'imap_'+detail.server_id+'_'+msg_uid+'_'+detail.folder;
            var key = 'imap_'+Hm_Utils.get_url_page_number()+'_'+hm_list_path();
            var next_message = Hm_Message_List.prev_next_links(key, class_name)[1];
            if (next_message) {
                $('.compose_next_email_data').val(next_message);
            }
            var uploaded_files = $("input[name='uploaded_files[]']").map(function(){return $(this).val();}).get();
            $('#send_uploaded_files').val(uploaded_files);
            Hm_Ajax.show_loading_icon(); $('.smtp_send').addClass('disabled_input');
            $('.smtp_send_archive').addClass('disabled_input'); 
            $('.smtp_send').on("click", function() { return false; }); 
        });
        if ($('.compose_cc').val() || $('.compose_bcc').val()) {
            toggle_recip_flds();
        }
        if (window.location.href.search('&reply=1') !== -1 || window.location.href.search('&reply_all=1') !== -1) {
            replace_cursor_positon ($('textarea[name="compose_body"]'));
        }
        if (window.location.href.search('&forward=1') !== -1) {
            setTimeout(function() {
                save_compose_state();
            }, 100);
        }
        if ($('.sys_messages').text() != 'Message Sent') {
            get_smtp_profile($('.compose_server').val());
        }
        $('.compose_server').on('change', function() {
            get_smtp_profile($('.compose_server').val());
        });
        if($('.compose_attach_button').attr('disabled') == 'disabled'){
            check_attachment_dir_access();
        };

        $('.compose_container').attr('ondrop', 'move_recipient_to_section(event)').attr('ondragover', 'allow_drop(event)');
        $('.compose_to, .compose_cc, .compose_bcc').on('keypress', function(e) {
            if(e.which == 13) {
                e.preventDefault();
                if (is_valid_recipient($(this).val())) {
                    text_to_bubbles(this);
                }
            }
        });
        $('.compose_subject, .compose_body, .compose_server, .smtp_send, .smtp_send_archive').on('focus', function(e) {
            $('.compose_to, .compose_cc, .compose_bcc').each(function() {
                bubbles_to_text(this);
            });
        });
        $('.compose_to, .compose_cc, .compose_bcc').on('focus', function(e) {
            text_to_bubbles(this);
        });
        $('.compose_container').on('click', function() {
            $(this).find('input').focus();
        });
        $(document).on('click', '.bubble_close', function() {
            $(this).parent().remove();
        });
    }
});


var display_next_nux_step = function(res) {
    $('.nux_step_two').html(res.nux_service_step_two);
    $('.nux_step_one').hide();
    $('.nux_submit').on("click", nux_add_account);
    $('.reset_nux_form').on("click", function() {
        $('.nux_step_one').show();
        $('.nux_step_two').html('');
        document.getElementById('service_select').getElementsByTagName('option')[0].selected = 'selected';
        $('.nux_username').val('');
        $('.nux_extra_fields').remove();
        return false;
    });
};

var nux_add_account = function() {
    var nux_border = $('.nux_username').css('border');
    $('.nux_password').css('border', nux_border);
    var service = $('#nux_service').val();
    var name = $('.nux_name').val();
    var email = $('#nux_email').val();
    var pass = $('.nux_password').val();
    var extra_fields = [];
    $('input.nux_extra_fields').each(function () {
        extra_fields.push({ 'name': $(this).attr('id'), 'value': $(this).val() });
    });
    if (name.length && service.length && email.length && pass.length) {
        Hm_Ajax.request(
            [{'name': 'hm_ajax_hook', 'value': 'ajax_nux_add_service'},
            {'name': 'nux_service', 'value': service},
            {'name': 'nux_email', 'value': email},
            {'name': 'nux_name', 'value': name},
            {'name': 'nux_pass', 'value': pass}, ...extra_fields],
            display_final_nux_step,
            [],
            false
        );
    }
    else {
        if (!pass.length) {
            $('.nux_password').css('border', 'solid red 1px');
        }
    }
    return false;
};

var display_final_nux_step = function(res) {
    if (res.nux_account_added) {
        if (confirm('Do you accept special folders?')) {
            Hm_Ajax.request(
                [{'name': 'hm_ajax_hook', 'value': 'ajax_imap_accept_special_folders'},
                {'name': 'imap_server_id', value: res.nux_server_id},
                {'name': 'imap_service_name', value: res.nux_service_name}],
                function(res) {
                    window.location.href = "?page=servers";
                }
            );
        }
            
        window.location.href = "?page=servers";
    }
};

var nux_service_select = function() {
    var nux_border = $('.nux_username').css('border');
    var el = document.getElementById('service_select');
    var service = el.options[el.selectedIndex].value;
    var email = $('.nux_username').val();
    var account = $('.nux_account_name').val();
    if (email.length && service.length) {
        Hm_Ajax.request(
            [{'name': 'hm_ajax_hook', 'value': 'ajax_nux_service_select'},
            {'name': 'nux_service', 'value': service},
            {'name': 'nux_account_name', 'value': account},
            {'name': 'nux_email', 'value': email}],
            display_next_nux_step,
            [],
            false
        );
    }
    else {
        if (!email.length) {
            $('.nux_username').css('border', 'solid 1px red');
        }
        else {
            $('.nux_username').css('border', nux_border);
        }
        if (!service.length) {
            $('#service_select').css('border', 'solid 1px red');
        }
        else {
            $('#service_select').css('border', nux_border);
        }
    }
};

var expand_server_settings = function() {
    var dsp;
    var i;
    var hash = window.location.hash;
    var sections = ['.feeds_section', '.quick_add_section', '.smtp_section', '.imap_section', '.pop3_section'];
    for (i=0;i<sections.length;i++) {
        dsp = Hm_Utils.get_from_local_storage(sections[i]);
        if (hash) {
            if (hash.replace('#', '.') != sections[i]) {
                dsp = 'none';
            }
            else {
                dsp = 'block';
            }
        }
        if (dsp === 'block' || dsp === 'none') {
            $(sections[i]).css('display', dsp);
            Hm_Utils.save_to_local_storage(sections[i], dsp);
        }
    }
};

var add_extra_fields = function(select, id, label, placeholder) {
    $(select).next().next().after('<input type="text" id="nux_'+id+'" class="nux_extra_fields" placeholder="'+placeholder+'"><label class="screen_reader nux_extra_fields" for="nux_'+id+'">'+label+'</label><br class="nux_extra_fields">');
};

$(function() {
    if (hm_page_name() === 'servers') {
        expand_server_settings();
        $('.nux_next_button').on("click", nux_service_select);
        $('#service_select').on("change", function() {
            if ($(this).val() == 'all-inkl') {
                add_extra_fields(this, 'all_inkl_login', 'Login', 'Your All-inkl Login');
            } else {
                $('.nux_extra_fields').remove();
            }
        });
    }
    else if (hm_page_name() === 'message_list') {
        var list_path = hm_list_path();
        if (list_path === 'unread' || list_path === 'combined_inbox' || list_path === 'flagged') {
            var data_sources = hm_data_sources();
            if (data_sources.length === 0) {
                $('.nux_empty_combined_view').show();
            }
        }
    }
});


$('.config_map_page').on("click", function() {
    var target = $(this).data('target');
    $('.'+target).toggle();
});


var update_search = function(event) {
    event.preventDefault();
    if ($('.search_terms').val().length && $('.search_name').val().length) {
        Hm_Ajax.request(
            [{'name': 'hm_ajax_hook', 'value': 'ajax_update_search'},
            {'name': 'search_name', 'value': $('.search_name').val()},
            {'name': 'search_terms', 'value': $('.search_terms').val()},
            {'name': 'search_fld', 'value': $('#search_fld').val()},
            {'name': 'search_since', 'value': $('#search_since').val()}],
            search_update_results
        );
    }
    return false;
};

var delete_search = function(event) {
    if (!hm_delete_prompt()) {
        return false;
    }
    var name = $('.search_name').val();
    event.preventDefault();
    if (name.length) {
        Hm_Ajax.request(
            [{'name': 'hm_ajax_hook', 'value': 'ajax_delete_search'},
            {'name': 'search_name', 'value': name}],
            search_delete_results
        );
    }
    return false;
};

var save_search = function(event) {
    event.preventDefault();
    if ($('.search_terms').val().length) {
        Hm_Ajax.request(
            [{'name': 'hm_ajax_hook', 'value': 'ajax_save_search'},
            {'name': 'search_name', 'value': $('.search_terms').val()},
            {'name': 'search_terms', 'value': $('.search_terms').val()},
            {'name': 'search_fld', 'value': $('#search_fld').val()},
            {'name': 'search_since', 'value': $('#search_since').val()}],
            search_save_results
        );
    }
    return false;
};


var update_save_search_label = function(event) {
    event.preventDefault();
    if($('.search_label_update').val().length) {
        Hm_Ajax.request(
            [{'name': 'hm_ajax_hook', 'value': 'ajax_update_save_search_label'},
            {'name': 'search_terms_label', 'value': $('.search_terms_label').val()},
            {'name': 'old_search_terms_label', 'value': $('.old_search_terms_label').val()},
            {'name': 'search_name', 'value': $('.search_terms').val()}],
            update_save_search_label_results
        );
    }
    return false;
}

var search_delete_results = function(res) {
    if (res.saved_search_result) {
        Hm_Folders.reload_folders(true, '.search_folders');
        Hm_Utils.reset_search_form();
    }
};

var search_update_results = function(res) {
    if (res.saved_search_result) {
        $('.update_search').remove();
        Hm_Folders.reload_folders(true, '.search_folders');
    }
};

var search_save_results = function(res) {
    if (res.saved_search_result) {
        $('.search_name').val($('.new_search_name').val());
        $('.delete_search').show();
        $('.save_search').hide();
        Hm_Folders.reload_folders(true, '.search_folders');
    }
};

var update_save_search_label_results = function(res) {
    if(res.saved_search_result) {
        $('.update_search_label_field').toggle();
        $('.search_terms_label').val("");
        $('.old_search_terms_label').val(res.new_saved_search_label);
        Hm_Folders.reload_folders(true, '.search_folders');
    }
}

if (hm_page_name() == 'search') {
    $('.save_search').on("click", save_search);
    $('.update_search').on("click", update_search);
    $('.delete_search').on("click", delete_search);
    $('.update_search_label').on("click", function() { $('.update_search_label_field').toggle(); return false; });
    $('.search_label_update').on("click", update_save_search_label);
    if ($('.search_name').val().length) {
        Hm_Utils.save_to_local_storage('formatted_search_data', '');
    }
    else if ($('.search_terms').val().length) {
        $('.save_search').show();
        $('.update_search_label').show()
    }
}
"use strict"

var add_remove_terms = function(el) {
    var close = $(globals.close_html);
    var count = $('.adv_terms').length;
    var term = $('#adv_term').clone(false);
    var not_chk = $('<span id="adv_term_not" class="adv_term_nots"><input type="checkbox" value="not" id="adv_term_not" /> !</span>');
    var and_or_html = '<div class="andor"><input checked="checked" type="radio" name="term_and'
    and_or_html += '_or'+count+'" value="and">and <input type="radio" name="term_and_or'+count;
    and_or_html += '" value="or">or</div>';
    var and_or = $(and_or_html);
    term.attr('id', 'adv_term'+count);
    close.attr('id', 'term_adv_remove'+count);
    and_or.attr('id', 'term_and_or'+count);
    not_chk.attr('id', 'adv_term_not'+count);
    $(el).prev().after(and_or.prop('outerHTML')+not_chk.prop('outerHTML')+term.prop('outerHTML')+close.prop('outerHTML'));
    $(el).hide();
    $('#term_adv_remove'+count).on("click", function() {
        $('#adv_term'+count).remove();
        $('#adv_term_not'+count).remove();
        $('#term_and_or'+count).remove();
        $(this).remove();
        $(el).show();
    });
};

var add_remove_times = function(el) {
    var close = $(globals.close_html);
    var count = $('.adv_times').length;
    var time_html = '<span id="adv_time" class="adv_times">From <input class="adv_time_fld_from" ';
    time_html += 'type="date" value=""> To <input class="adv_time_fld_to" type="date" value=""></span>';
    var timeset = $(time_html);
    var and_or_html = '<div class="timeandor"><input type="radio" name="time_and_or'+count;
    and_or_html += '" checked="checked" value="or">or</div>';
    var and_or = $(and_or_html);
    timeset.attr('id', 'adv_time'+count);
    close.attr('id', 'time_adv_remove'+count);
    and_or.attr('id', 'time_and_or'+count);
    $(el).prev().after(and_or.prop('outerHTML')+timeset.prop('outerHTML')+close.prop('outerHTML'));
    $('#time_adv_remove'+count).on("click", function() {
        $('#adv_time'+count).remove();
        $('#time_and_or'+count).remove();
        $(this).remove();
    });
};

var add_remove_targets = function(el) {
    var close = $(globals.close_html);
    var count = $('.adv_targets').length;
    var target = $('#adv_target').clone(false);
    var and_or_html = '<div class="andor"><input type="radio" name="target_and_or'+count;
    and_or_html += '" value="and">and <input type="radio" name="target_and_or'+count;
    and_or_html += '" checked="checked" value="or">or</div>';
    var and_or = $(and_or_html);

    target.attr('id', 'adv_target'+count);
    $('.target_radio', target).attr('name', 'target_type'+count);
    $('.target_radio', target).removeAttr('checked');
    close.attr('id', 'target_adv_remove'+count);
    and_or.attr('id', 'target_and_or'+count);
    $(el).prev().after(and_or.prop('outerHTML')+target.prop('outerHTML')+close.prop('outerHTML'));
    $(el).hide();
    $('#target_adv_remove'+count).on("click", function() {
        $('#adv_target'+count).remove();
        $('#target_and_or'+count).remove();
        $(this).remove();
        $(el).show();
    });
};

var expand_adv_folder = function(res) {
    if (res.imap_expanded_folder_path) {
        var list_container = $('.adv_folder_list');
        var folders = $(res.imap_expanded_folder_formatted);
        folders.find('.manage_folders_li').remove();
        $('.'+Hm_Utils.clean_selector(res.imap_expanded_folder_path), $('.adv_folder_list')).append(folders);
        $('.imap_folder_link', list_container).addClass('adv_folder_link').removeClass('imap_folder_link');
        $('.adv_folder_link', list_container).off('click');
        $('.adv_folder_link', list_container).on("click", function() { return expand_adv_folder_list($(this).data('target')); });
        $('a', list_container).not('.adv_folder_link').off('click');
        $('a', list_container).not('.adv_folder_link').on("click", function() { adv_folder_select($(this).data('id')); return false; });
    }
};

var adv_select_imap_folder = function(el) {
    var close = $(globals.close_html);
    close.addClass('close_adv_folders');
    var list_container = $('.adv_folder_list');
    var folders = $('.email_folders').clone(false);
    folders.find('.manage_folders_li').remove();
    $('.menu_email', folders).remove();
    folders.removeClass('email_folders');
    $(el).after(close);
    list_container.show();
    folders.show();
    $('.imap_folder_link', folders).addClass('adv_folder_link').removeClass('imap_folder_link');
    $('.adv_folder_list').html(folders.html());

    $('.adv_folder_link', list_container).on("click", function() { return expand_adv_folder_list($(this).data('target')); });
    $('a', list_container).not('.adv_folder_link').not('.close_adv_folders').off('click');
    $('a', list_container).not('.adv_folder_link').not('.close_adv_folders').on("click", function() { adv_folder_select($(this).data('id')); return false; });
    $('.close_adv_folders').on("click", function() {
        $('.adv_folder_list').html('');
        $('.adv_folder_list').hide();
        $(this).remove();
        return false;
    });
};

var adv_folder_select = function(id) {
    if ($('.'+id, $('.adv_source_list')).length > 0) {
        $('.adv_folder_list').html('');
        $('.close_adv_folders').remove();
        $('.adv_folder_list').hide();
        return;
    }
    var container = $('.adv_folder_list');
    var list_item = $('.'+Hm_Utils.clean_selector(id));
    var folder = $('a', list_item).first().text();
    if (folder == '+' || folder == '-') {
        folder = $('a', list_item).eq(1).text();
    }
    var parts = id.split('_', 3);
    var parent_class = '.'+parts[0]+'_'+parts[1]+'_';
    var account = $('a', $(parent_class, container)).first().text();
    var label = account+' &gt; '+folder;
    add_source_to_list(id, label);
    $('.adv_folder_list').html('');
    $('.close_adv_folders').remove();
    $('.adv_folder_list').hide();
};

var add_source_to_list = function(id, label) {
    var close = $(globals.close_html);
    close.addClass('adv_remove_source');
    close.attr('data-target', id);
    var row = '<div class="'+id+'">'+close.prop('outerHTML')+label;
    row += '<input type="hidden" value="'+id+'" /></div>';
    $('.adv_source_list').append(row);
    $('.adv_remove_source').off('click');
    $('.adv_remove_source').on("click", function() {
        $('.'+$(this).data('target'), $('.adv_source_list')).remove();
    });
};

var expand_adv_folder_list = function(path) {
    var detail = Hm_Utils.parse_folder_path(path, 'imap');
    var list = $('.imap_'+detail.server_id+'_'+Hm_Utils.clean_selector(detail.folder), $('.adv_folder_list'));
    if ($('li', list).length === 0) {
        $('.expand_link', list).html('-');
        if (detail) {
            Hm_Ajax.request(
                [{'name': 'hm_ajax_hook', 'value': 'ajax_imap_folder_expand'},
                {'name': 'imap_server_id', 'value': detail.server_id},
                {'name': 'folder', 'value': detail.folder}],
                function (res) { expand_adv_folder(res); }
            );
        }
    }
    else {
        $('.expand_link', list).html('+');
        $('ul', list).remove();
    }
    return false;
};

var adv_collapse = function() {
    $('.terms_section').hide();
    $('.source_section').hide();
    $('.targets_section').hide();
    $('.time_section').hide();
    $('.other_section').hide();
    $('.adv_expand_all').show();
    $('.adv_collapse_all').hide();
}

var adv_expand_sections = function() {
    $('.terms_section').show();
    $('.source_section').show();
    $('.targets_section').show();
    $('.time_section').show();
    $('.other_section').show();
    $('.adv_expand_all').hide();
    $('.adv_collapse_all').show();
}

var get_adv_sources = function() {
    var sources = [];
    var selected_sources = $('div', $('.adv_source_list'));
    if (!selected_sources) {
        return sources;
    }
    selected_sources.each(function() {
        sources.push({'source': this.className, 'label': $(this).text()});
    });
    return sources;
};

var get_adv_terms = function() {
    var term;
    var term_id;
    var condition;
    var not;
    var terms = [];
    var term_flds = $('.adv_terms');
    term_flds.each(function() {
        term = $(this).val();
        if (term && term.trim()) {
            term_id = this.id.substr(8);
            if (term_id) {
                condition = $('input:checked', $('#term_and_or'+term_id)).val();
            }
            else {
                condition = false;
            }
            if ($('input:checked', $('#adv_term_not'+term_id)).val() == 'not') {
                term = 'NOT '+term;
            }
            terms.push({'term': term, 'condition': condition});
        }
    });
    return terms;
};

var get_adv_times = function() {
    var time;
    var from;
    var to;
    var times = [];
    var time_flds = $('.adv_times');
    time_flds.each(function() {
        from = $('.adv_time_fld_from', $(this)).val();
        to = $('.adv_time_fld_to', $(this)).val();
        if (to && from && to.trim() && from.trim()) {
            times.push({'from': from, 'to': to});
        }
    });
    return times;

};

var get_adv_targets = function() {
    var target;
    var value;
    var target_id;
    var condition;
    var targets = [];
    var target_flds = $('.adv_targets');
    target_flds.each(function() {
        target = $('.target_radio:checked', $(this)).val();
        if (target == 'header') {
            value = $('.adv_header_select', $(this)).val();
        }
        else if (target == 'custom') {
            value = 'HEADER '+$('.adv_custom_header', $(this)).val();
        }
        else {
            value = target;
        }
        if (target) {
            target_id = this.id.substr(10);
            if (target_id) {
                condition = $('input:checked', $('#target_and_or'+target_id)).val();
            }
            else {
                condition = false;
            }
            targets.push({'target': value, 'orig': target, 'condition': condition});
        }
    });
    return targets;
};

var get_adv_other = function() {
    var charset = $('.charset').val();
    var flags = [];
    var flag_flds = $('.adv_flag:checked');
    if (flag_flds) {
        flag_flds.each(function() {
            flags.push($(this).val());
        });
    }
    var limit = $('.adv_source_limit').val();
    return {'limit': limit, 'flags': flags, 'charset': charset};
};

var process_advanced_search = function() {
    Hm_Notices.hide(true);
    var terms = get_adv_terms();
    if (terms.length == 0) {
        Hm_Notices.show(['ERRYou must enter at least one search term']);
        return;
    }
    var sources = get_adv_sources();
    if (sources.length == 0) {
        Hm_Notices.show(['ERRYou must select at least one source']);
        return;
    }
    var targets = get_adv_targets();
    if (targets.length == 0) {
        Hm_Notices.show(['ERRYou must have at least one target']);
        return;
    }
    var times = get_adv_times();
    if (times.length == 0) {
        Hm_Notices.show(['ERRYou must enter at least one time range']);
        return;
    }
    var other = get_adv_other();

    save_search_details(terms, sources, targets, times, other);
    search_summary({ 'terms': terms, 'targets': targets, 'sources': sources,
            'times': times, 'other': other });

    send_requests(build_adv_search_requests(terms, sources, targets, times, other));
};

var save_search_details = function(terms, sources, targets, times, other) {
    Hm_Utils.save_to_local_storage('adv_search_params',
        Hm_Utils.json_encode({
            'terms': terms,
            'targets': targets,
            'sources': sources,
            'times': times,
            'other': other
        })
    );
};

var load_search_details = function() {
    return Hm_Utils.json_decode(Hm_Utils.get_from_local_storage('adv_search_params'));
};


var adv_group_vals = function(data, type) {
    var groups = [];
    if (data.length == 2 && data[1]['condition'] == 'or') {
        groups.push([data[0][type]]);
        groups.push([data[1][type]]);
    }
    else if (data.length == 2) {
        groups.push([data[0][type], data[1][type]]);
    }
    else {
        groups.push([data[0][type]]);
    }
    return groups;
};

var send_requests = function(requests) {
    var request;
    $('tr', Hm_Utils.tbody()).remove();
    Hm_Utils.save_to_local_storage('formatted_advanced_search_data', '');
    adv_collapse();
    $('.adv_controls').hide();
    $('.empty_list').remove();
    for (var n=0, rlen=requests.length; n < rlen; n++) {
        request = requests[n];
        var params = [
            {'name': 'hm_ajax_hook', 'value': 'ajax_adv_search'},
            {'name': 'adv_source', 'value': request['source']},
            {'name': 'adv_start', 'value': request['time']['from']},
            {'name': 'adv_end', 'value': request['time']['to']},
            {'name': 'adv_source_limit', 'value': request['other']['limit']},
            {'name': 'adv_charset', 'value': request['other']['charset']},
        ];

        for (var i=0, len=request['terms'].length; i < len; i++) {
            params.push({'name': 'adv_terms[]', 'value': request['terms'][i]});
        }
        for (var i=0, len=request['targets'].length; i < len; i++) {
            params.push({'name': 'adv_targets[]', 'value': request['targets'][i]});
        }
        for (var i=0, len=request['other']['flags'].length; i < len; i++) {
            params.push({'name': 'adv_flags[]', 'value': request['other']['flags'][i]});
        }
        Hm_Ajax.request(
            params,
            function(res) {
                var detail = Hm_Utils.parse_folder_path(request['source'], 'imap');
                Hm_Message_List.update([detail.server_id+n], res.formatted_message_list, 'imap');
                if (Hm_Utils.rows().length > 0) {
                    $('.adv_controls').show();
                    $('.core_msg_control').off('click');
                    $('.core_msg_control').on("click", function() { return Hm_Message_List.message_action($(this).data('action')); });
                    Hm_Message_List.set_checkbox_callback();
                    if (typeof check_select_for_imap !== 'undefined') {
                        check_select_for_imap();
                    }
                }
                Hm_Message_List.check_empty_list();
            },
            [],
            false,
            function() {
                Hm_Message_List.set_message_list_state('formatted_advanced_search_data');
            }
        );
    }
};

var build_adv_search_requests = function(terms, sources, targets, times, other) {
    var source;
    var time;
    var term_vals;
    var target_vals;
    var requests = []
    var term_groups = adv_group_vals(terms, 'term');
    var target_groups = adv_group_vals(targets, 'target');

    for (var tv=0, tvlen=term_groups.length; tv < tvlen; tv++) {
        term_vals = term_groups[tv];
        for (var tag=0, taglen=target_groups.length; tag < taglen; tag++) {
            target_vals = target_groups[tag];
            for (var s=0, slen=sources.length; s < slen; s++) {
                source = sources[s]['source'];
                for (var ti=0, tilen=times.length; ti < tilen; ti++) {
                    time = times[ti];
                    requests.push({'source': source, 'time': time, 'other': other,
                        'targets': target_vals, 'terms': term_vals});
                }
            }
        }
    }
    return requests;
};

var search_summary = function(details) {
    if (!details) {
        return;
    }
    var charset = 0;
    if (details['other']['charset']) { charset = 1; }
    $('.term_count').text($('.term_count').text().replace(/\d+/, details['terms'].length)).show();
    $('.target_count').text($('.target_count').text().replace(/\d+/, details['targets'].length)).show();
    $('.source_count').text($('.source_count').text().replace(/\d+/, details['sources'].length)).show();
    $('.time_count').text($('.time_count').text().replace(/\d+/, details['times'].length)).show();
    $('.other_count').text($('.other_count').text().replace(/\d+/, (charset + details['other']['flags'].length))).show();
};

var apply_saved_search = function() {
    var details = load_search_details();
    if (!details) {
        return;
    }
    search_summary(details);
    var target_id;
    var time_id;
    var not;
    for (var i=0, len=details['terms'].length; i < len; i++) {
        not = false;
        if (details['terms'][i]['term'].substring(0, 4) == 'NOT ') {
            details['terms'][i]['term'] = details['terms'][i]['term'].substring(4);
            not = true;
        }
        if (i == 0) {
            $('#adv_term').val(details['terms'][i]['term']);
            if (not) {
                $('input', $('#adv_term_not')).attr('checked', true);
            }
        }
        else {
            $('.new_term').trigger('click');
            $('#adv_term'+i).val(details['terms'][i]['term']);
            $('input[type=radio][value='+details['terms'][i]['condition']+']', $('#term_and_or'+i)).attr('checked', true);
            if (not) {
                $('input', $('#adv_term_not'+i)).attr('checked', true);
            }
        }
    }
    for (var i=0, len=details['sources'].length; i < len; i++) {
        add_source_to_list(details['sources'][i]['source'], details['sources'][i]['label']);
    }
    for (var i=0, len=details['targets'].length; i < len; i++) {
        if (i == 0) {
            target_id = '#adv_target';
        }
        else {
            target_id = '#adv_target'+i;
            $('.new_target').trigger('click');
            $('input[type=radio][value='+details['targets'][i]['condition']+']', $('#target_and_or'+i)).attr('checked', true);
        }
        $('input[type=radio][value='+details['targets'][i]['orig']+']', $(target_id)).attr('checked', true);
        if (details['targets'][i]['orig'] == 'custom') {
            $('.adv_custom_header', $(target_id)).val(details['targets'][i]['target'].substring(7));
        }
        else if (details['targets'][i]['orig'] == 'header') {
            $('.adv_header_select', $(target_id)).val(details['targets'][i]['target']);
        }
    }
    for (var i=0, len=details['times'].length; i < len; i++) {
        if (i == 0) {
            time_id = '#adv_time';
        }
        else {
            time_id = '#adv_time'+i;
            $('.new_time').trigger('click');
        }
        $('.adv_time_fld_from', $(time_id)).val(details['times'][i]['from']);
        $('.adv_time_fld_to', $(time_id)).val(details['times'][i]['to']);
    }
    $('.charset').val(details['other']['charset']);
    for (var i=0, len=details['other']['flags'].length; i < len; i++) {
        $('input[type=checkbox][value='+details['other']['flags'][i]+']', $('.flags')).attr('checked', true);
    }
    $('.adv_source_limit').val(details['other']['limit']);
};

var adv_reset_page = function() {
    Hm_Utils.save_to_local_storage('formatted_advanced_search_data', '');
    Hm_Utils.save_to_local_storage('adv_search_params', '');
    document.location.href = '?page=advanced_search';
};

$(function() {
    if (hm_page_name() == 'advanced_search') {

        globals.close_html = '<img width="16" height="16" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22';
        globals.close_html += 'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%228%22%20height%3D%228%2';
        globals.close_html += '2%20viewBox%3D%220%200%208%208%22%3E%0A%20%20%3Cpath%20d%3D%22M4%200c-2.21%';
        globals.close_html += '200-4%201.79-4%204s1.79%204%204%204%204-1.79%204-4-1.79-4-4-4zm-1.5%201.781';
        globals.close_html += 'l1.5%201.5%201.5-1.5.719.719-1.5%201.5%201.5%201.5-.719.719-1.5-1.5-1.5%201';
        globals.close_html += '.5-.719-.719%201.5-1.5-1.5-1.5.719-.719z%22%20%2F%3E%0A%3C%2Fsvg%3E" alt="R';
        globals.close_html += 'emove">';

        $('.settings_subtitle').on("click", function() { return Hm_Utils.toggle_page_section($(this).data('target')); });
        $('.adv_folder_select').on("click", function() { adv_select_imap_folder(this); });
        $('.new_time').on("click", function() { add_remove_times(this); });
        $('.new_target').on("click", function() { add_remove_targets(this); });
        $('.new_term').on("click", function() { add_remove_terms(this); });
        $('.adv_expand_all').on("click", function() { adv_expand_sections(); });
        $('.adv_collapse_all').on("click", function() { adv_collapse(); });
        $('#adv_search').on("click", function() { process_advanced_search(); });
        $('.toggle_link').on("click", function() { return Hm_Message_List.toggle_rows(); });
        $('.adv_reset').on("click", function() { adv_reset_page(); });
        $('.combined_sort').on("change", function() { Hm_Message_List.sort($(this).val()); });

        apply_saved_search();
        var data = Hm_Utils.get_from_local_storage('formatted_advanced_search_data');
        if (data && data.length) {
            adv_collapse(); 
            Hm_Utils.tbody().html(data);
            $('.adv_controls').show();
            $('.core_msg_control').off('click');
            $('.core_msg_control').on("click", function() { return Hm_Message_List.message_action($(this).data('action')); });
            Hm_Message_List.set_checkbox_callback();
            if (typeof check_select_for_imap !== 'undefined') {
                check_select_for_imap();
            }
        }
        Hm_Message_List.check_empty_list();
    }
});


if (hm_page_name() == 'compose') {
    $('.compose_sign').on("click", function() {
        var server_id = $('.compose_server').val();
        if (profile_signatures[server_id]) {
            var ta = $('.ke-content', $('iframe').contents());
            if (ta.length) {
                ta.html(ta.html() + profile_signatures[server_id].replace(/\n/g, '<br />'));
            }
            else {
                ta = $('#compose_body');
                insert_sig(ta[0], profile_signatures[server_id]);
            }
        } else {
            Hm_Notices.show(['ERR'+$('#sign_msg').val()]);
        }
    });
}

var insert_sig = function(textarea, sig) {
    var tmpta = document.createElement('textarea');
    tmpta.innerHTML = sig;
    sig = tmpta.value;
    if (document.selection) {
        textarea.focus();
        var sel = document.selection.createRange();
        sel.text = sig;
    }
    else if (textarea.selectionStart || textarea.selectionStart == '0') {
        var startPos = textarea.selectionStart;
        var endPos = textarea.selectionEnd;
        textarea.value = textarea.value.substring(0, startPos) + sig + textarea.value.substring(endPos, textarea.value.length);
    }
    else {
        textarea.value += textarea;
    }
};

$(function() {
    if (hm_page_name() === 'profiles') {
        $('.add_profile').on("click", function() { $('.edit_profile').show(); });
    }
});


var inline_pop3_msg = function(details, uid, list_path, inline_msg_loaded_callback) {
    details['uid'] = uid;
    var path = '.'+details['type']+'_'+details['server_id']+'_'+uid;
    clear_open_msg(inline_msg_style());
    msg_container(inline_msg_style(), path);
    pop3_message_view(uid, list_path, inline_msg_loaded_callback);
    $('div', $(path)).removeClass('unseen');
    return false;
};

var inline_wp_msg = function(uid, list_path, inline_msg_loaded_callback) {
    clear_open_msg(inline_msg_style());
    msg_container(inline_msg_style(), '.'+uid);
    wp_notice_view(uid, inline_msg_loaded_callback);
    $('div', $('.'+uid)).removeClass('unseen');
    return false;
};

var inline_github_msg = function(uid, list_path, inline_msg_loaded_callback) {
    clear_open_msg(inline_msg_style());
    msg_container(inline_msg_style(), '.'+uid);
    github_item_view(list_path, uid, inline_msg_loaded_callback);
    $('div', $('.'+uid)).removeClass('unseen');
    return false;
};

var inline_feed_msg = function(uid, list_path, inline_msg_loaded_callback) {
    clear_open_msg(inline_msg_style());
    msg_container(inline_msg_style(), '.'+list_path+'_'+uid);
    feed_item_view(uid, list_path, inline_msg_loaded_callback);
    $('div', $('.'+list_path+'_'+uid)).removeClass('unseen');
    return false;
};


var inline_msg_prep_imap_delete = function(path, uid, details) {
    $('#'+path).prop('checked', false);
    Hm_Message_List.remove_after_action('delete', [path]);
    return imap_delete_message(false, uid, details);
};

var inline_imap_unread_message = function(uid, details) {
    return imap_unread_message(uid, details);
};

var inline_imap_msg = function(details, uid, list_path, inline_msg_loaded_callback) {
    details['uid'] = uid;
    var path = '.'+details['type']+'_'+details['server_id']+'_'+uid+'_'+details['folder'];
    globals['inline_move_uuid'] = path.substr(1);
    clear_open_msg(inline_msg_style());
    msg_container(inline_msg_style(), path);

    imap_setup_message_view_page(uid, details, list_path, inline_msg_loaded_callback);
    $('.part_encoding').hide();
    $('.part_charset').hide();
    $('div', $(path)).removeClass('unseen');
    $(path).removeClass('unseen');
    update_imap_links(uid, details);
};

var msg_container = function(type, path) {
    if (type == 'right') {
        $('.content_title').after('<div class="inline_right msg_text"></div>');
        $('.message_table').css('width', '50%');
    }
    else {
        $(path).after('<tr class="inline_msg"><td colspan="6"><div class="msg_text"></div></td></tr>');
    }
    $(path).addClass('hl');
    $(path).removeClass('unseen');
};

var clear_open_msg = function(type) {
    if (type == 'right') {
        $('.msg_text').html('');
        $('.msg_text').remove();
        $('tr').removeClass('hl');
    }
    else {
        $('.inline_msg').html('');
        $('.inline_msg').remove();
        $('tr').removeClass('hl');
    }
};

var get_inline_msg_details = function(link) {
    var index;
    var pair;
    var uid = false;
    var list_path = false;
    var pairs = $(link).attr('href').split('&');
    for (index in pairs) {
        pair = pairs[index].split('=');
        if (pair[0] == 'uid') {
            uid = pair[1];
        }
        if (pair[0] == 'list_path') {
            list_path = pair[1];
        }
    }
    return [uid, list_path];
};

var msg_inline_close = function() {
    $('.refresh_link').trigger('click');
    if (inline_msg_style() == 'right') {
        $('.msg_text').remove();
        $('.message_table').css('width', '100%');
    }
    else {
        $('.inline_msg').remove();
    }
    $('tr').removeClass('hl');
};

var update_imap_links = function(uid, details) {
    var path = details['type']+'_'+details['server_id']+'_'+uid+'_'+details['folder'];
    $('#unflag_msg').off('click');
    $('#flag_msg').off('click');
    $('#delete_message').off('click');
    $('#unread_message').off('click');
    $('#delete_message').on("click", function() { return inline_msg_prep_imap_delete(path, uid, details); });
    $('#flag_msg').on("click", function() { return imap_flag_message($(this).data('state'), uid, details); });
    $('#unflag_msg').on("click", function() { return imap_flag_message($(this).data('state', uid, details)); });
    $('#unread_message').on("click", function() { return inline_imap_unread_message(uid, details);});
};

var capture_subject_click = function() {
    $('.subject a').off('click');
    $('.subject a').on("click", function(e) {
        var msg_details = get_inline_msg_details(this); 
        var uid = msg_details[0];
        var list_path = msg_details[1];
        var inline_msg_loaded_callback = function() {
            $('.header_subject th').append('<span class="close_inline_msg">X</span>');
            $('.close_inline_msg').on("click", function() { msg_inline_close(); });
            $('.msg_part_link').on("click", function() { return get_message_content($(this).data('messagePart'), uid, list_path, details, inline_msg_loaded_callback); });
            update_imap_links(uid, details);
        };

        if (list_path && uid) {
            var details = Hm_Utils.parse_folder_path(list_path);
            globals.msg_uid = uid;
            if (details['type'] == 'feeds') {
                inline_feed_msg(uid, list_path, inline_msg_loaded_callback);
                return false;
            }
            else if (details['type'] == 'imap') {
                inline_imap_msg(details, uid, list_path, inline_msg_loaded_callback);
                return false;
            }
            else if (details['type'] == 'pop3') {
                inline_pop3_msg(details, uid, list_path, inline_msg_loaded_callback);
                return false;
            }
            else if (list_path.substr(0, 6) == 'github') {
                inline_github_msg(uid, list_path, inline_msg_loaded_callback);
                return false;
            }
            else if (list_path.substr(0, 3) == 'wp_') {
                inline_wp_msg(uid, list_path, inline_msg_loaded_callback);
                return false;
            }
            return false;
        }
        return true;
    });
};

$(function() {
    if (hm_page_name() == 'message_list' || hm_page_name() == 'search') {
        if (inline_msg()) {
            setTimeout(capture_subject_click, 100);
            $('tr').removeClass('hl');
            Hm_Ajax.add_callback_hook('*', capture_subject_click);
            Hm_Ajax.add_callback_hook('ajax_imap_delete_message', msg_inline_close);
            Hm_Ajax.add_callback_hook('ajax_imap_move_copy_action', msg_inline_close);
            Hm_Ajax.add_callback_hook('ajax_imap_archive_message', msg_inline_close);
            if (hm_list_path().substr(0, 4) !== 'imap') {
                Hm_Ajax.add_callback_hook('ajax_imap_unread', msg_inline_close);
            }
            if (hm_list_path().substr(0, 4) === 'imap') {
                Hm_Ajax.add_callback_hook('ajax_imap_folder_display', capture_subject_click);
            }
        }
    }
});


var folder_page_folder_list = function(container, title, link_class, target, id_dest) {
    var id = $('#imap_server_folder').val();
    var folder_location = $('.'+container);
    $('li', folder_location).not('.'+title).remove();
    var folders = $('.folder_list .imap_'+id+'_').clone(false);
    folders.find('.manage_folders_li').remove();
    $('.imap_folder_link', folders).addClass(link_class).removeClass('imap_folder_link');
    folder_location.prepend(folders);
    folder_location.show();
    $('.'+link_class, folder_location).on("click", function() { return expand_folders_page_list($(this).data('target'), container, link_class, target, id_dest); });
    $('a', folder_location).not('.'+link_class).not('.close').off('click');
    $('a', folder_location).not('.'+link_class).not('.close').on("click", function() { set_folders_page_value($(this).data('id'), container, target, id_dest); return false; });
    $('.close', folder_location).on("click", function() {
        folders.remove();
        folder_location.hide();
        $('.'+target).html('');
        $('#'+id_dest).val('');
        return false;
    });
    return false;
};


var expand_folders_page_list = function(path, container, link_class, target, id_dest) {
    var detail = Hm_Utils.parse_folder_path(path, 'imap');
    var list = $('.imap_'+detail.server_id+'_'+Hm_Utils.clean_selector(detail.folder), $('.'+container));
    if ($('li', list).length === 0) {
        $('.expand_link', list).html('-');
        if (detail) {
            Hm_Ajax.request(
                [{'name': 'hm_ajax_hook', 'value': 'ajax_imap_folder_expand'},
                {'name': 'imap_server_id', 'value': detail.server_id},
                {'name': 'folder', 'value': detail.folder}],
                function(res) {
                    if (res.imap_expanded_folder_path) {
                        var folder_location = $('.'+container);
                        var folders = $(res.imap_expanded_folder_formatted);
                        folders.find('.manage_folders_li').remove();
                        $('.'+Hm_Utils.clean_selector(res.imap_expanded_folder_path), folder_location).append(folders);
                        $('.imap_folder_link', folder_location).addClass(link_class).removeClass('imap_folder_link');
                        $('.'+link_class, folder_location).off('click');
                        $('.'+link_class, folder_location).on("click", function() { return expand_folders_page_list($(this).data('target'), container, link_class, target, id_dest); });
                        $('a', folder_location).not('.'+link_class).not('.close').off('click');
                        $('a', folder_location).not('.'+link_class).not('.close').on("click", function() { set_folders_page_value($(this).data('id'), container, target, id_dest); return false; });
                    }
                }
            );
        }
    }
    else {
        $('.expand_link', list).html('+');
        $('ul', list).remove();
    }
    return false;
};

var set_folders_page_value = function(id, container, target, id_dest) {
    var list = $('.'+container);
    var list_item = $('.'+Hm_Utils.clean_selector(id), list);
    var link = $('a', list_item).first().text();
    if (link == '+' || link == '-') {
        link = $('a', list_item).eq(1).text();
    }
    $('.'+target).html(link);
    $('#'+id_dest).val(id);
    list.hide();

};

var folder_page_delete = function() {
    var val = $('#delete_source').val();
    var id = $('#imap_server_folder').val();
    if (!id.length) {
        Hm_Notices.show({0: 'ERR'+$('#server_error').val()});
        return;
    }
    if (!val.length) {
        Hm_Notices.show({0: 'ERR'+$('#delete_folder_error').val()});
        return;
    }
    if (!confirm($('#delete_folder_confirm').val())) {
        return;
    }
    Hm_Ajax.request(
        [{'name': 'hm_ajax_hook', 'value': 'ajax_imap_folders_delete'},
        {'name': 'imap_server_id', value: id},
        {'name': 'folder', 'value': val}],
        function(res) {
            if (res.imap_folders_success) {
                $('#delete_source').val('');
                $('.selected_delete').html('');
                Hm_Folders.reload_folders(true);
            }
        }
    );
};

var folder_page_rename = function() {
    var val = $('#rename_value').val();
    var par = $('#rename_parent_source').val().trim();
    var folder = $('#rename_source').val().trim();
    var notices = {};
    var id = $('#imap_server_folder').val();
    if (!id.length) {
        Hm_Notices.show({0: 'ERR'+$('#server_error').val()});
        return;
    }
    if (!val.length) {
        notices[0] = 'ERR'+$('#rename_folder_error').val(); 
    }
    if (!folder.length) {
        notices[1] = 'ERR'+$('#folder_name_error').val();
    }
    if (!$.isEmptyObject(notices)) {
        Hm_Notices.show(notices);
        return;
    }
    Hm_Ajax.request(
        [{'name': 'hm_ajax_hook', 'value': 'ajax_imap_folders_rename'},
        {'name': 'imap_server_id', value: id},
        {'name': 'folder', 'value': folder},
        {'name': 'parent', 'value': par},
        {'name': 'new_folder', 'value': val}],
        function(res) {
            if (res.imap_folders_success) {
                $('#rename_value').val('');
                $('#rename_source').val('');
                $('#rename_parent_source').val('');
                $('.selected_rename').html('');
                $('.selected_rename_parent').html('');
                Hm_Folders.reload_folders(true);
            }
        }
    );
};


var folder_page_assign_trash = function() {
    var id = $('#imap_server_folder').val();
    var folder = $('#trash_source').val();
    if (id && folder) {
        assign_special_folder(id, folder, 'trash', function(res) {
            $('#trash_val').text(res.imap_special_name);
            $('.selected_trash').text('');
        });
    }
};

var folder_page_assign_sent = function() {
    var id = $('#imap_server_folder').val();
    var folder = $('#sent_source').val();
    if (id && folder) {
        assign_special_folder(id, folder, 'sent', function(res) {
            $('#sent_val').text(res.imap_special_name);
            $('.selected_sent').text('');
        });
    }
};

var folder_page_assign_archive = function() {
    var id = $('#imap_server_folder').val();
    var folder = $('#archive_source').val();
    if (id && folder) {
        assign_special_folder(id, folder, 'archive', function(res) {
            $('#archive_val').text(res.imap_special_name);
            $('.selected_archive').text('');
        });
    }
};

var folder_page_assign_draft = function() {
    var id = $('#imap_server_folder').val();
    var folder = $('#draft_source').val();
    if (id && folder) {
        assign_special_folder(id, folder, 'draft', function(res) {
            $('#draft_val').text(res.imap_special_name);
            $('.selected_draft').text('');
        });
    }
};

var clear_special_folder = function(type) {
    var id = $('#imap_server_folder').val();
    if (id) {
        Hm_Ajax.request(
            [{'name': 'hm_ajax_hook', 'value': 'ajax_imap_clear_special_folder'},
            {'name': 'imap_server_id', 'value': id},
            {'name': 'special_folder_type', 'value': type}],
            function(res) { $('#'+type+'_val').text($('#not_set_string').val()); }
        );
    }
};

var assign_special_folder = function(id, folder, type, callback) {
    Hm_Ajax.request(
        [{'name': 'hm_ajax_hook', 'value': 'ajax_imap_special_folder'},
        {'name': 'imap_server_id', 'value': id},
        {'name': 'special_folder_type', 'value': type},
        {'name': 'folder', 'value': folder}],
        callback
    );
};

var folder_page_create = function() {
    var par = $('#create_parent').val();
    var folder = $('#create_value').val().trim();
    var id = $('#imap_server_folder').val();
    if (!id.length) {
        Hm_Notices.show({0: 'ERR'+$('#server_error').val()});
        return;
    }
    if (!folder.length) {
        Hm_Notices.show({0: 'ERR'+$('#folder_name_error').val()});
        return;
    }
    Hm_Ajax.request(
        [{'name': 'hm_ajax_hook', 'value': 'ajax_imap_folders_create'},
        {'name': 'imap_server_id', value: id},
        {'name': 'folder', 'value': folder},
        {'name': 'parent', 'value': par}],
        function(res) {
            if (res.imap_folders_success) {
                $('#create_value').val('');
                $('#create_parent').val('');
                $('.selected_parent').html('');
                Hm_Folders.reload_folders(true);
            }
        }
    );

};

$(function() {
    if (hm_page_name() == 'folders') {
        $('#imap_server_folder').on("change", function() {
            $(this).parent().submit();
        });
        $('.settings_subtitle').on("click", function() { return Hm_Utils.toggle_page_section($(this).data('target')); });
    }
    $('.select_parent_folder').on("click", function() { return folder_page_folder_list('parent_folder_select', 'parent_title', 'imap_parent_folder_link', 'selected_parent', 'create_parent'); });
    $('.select_rename_folder').on("click", function() { return folder_page_folder_list('rename_folder_select', 'rename_title', 'imap_rename_folder_link', 'selected_rename', 'rename_source'); });
    $('.select_delete_folder').on("click", function() { return folder_page_folder_list('delete_folder_select', 'delete_title', 'imap_delete_folder_link', 'selected_delete', 'delete_source'); });
    $('.select_trash_folder').on("click", function() { return folder_page_folder_list('trash_folder_select', 'trash_title', 'imap_trash_folder_link', 'selected_trash', 'trash_source'); });
    $('.select_sent_folder').on("click", function() { return folder_page_folder_list('sent_folder_select', 'sent_title', 'imap_sent_folder_link', 'selected_sent', 'sent_source'); });
    $('.select_archive_folder').on("click", function() { return folder_page_folder_list('archive_folder_select', 'archive_title', 'imap_archive_folder_link', 'selected_archive', 'archive_source'); });
    $('.select_draft_folder').on("click", function() { return folder_page_folder_list('draft_folder_select', 'draft_title', 'imap_draft_folder_link', 'selected_draft', 'draft_source'); });
    $('.select_rename_parent_folder').on("click", function() { return folder_page_folder_list('rename_parent_folder_select', 'rename_parent_title', 'imap_rename_parent_folder_link', 'selected_rename_parent', 'rename_parent_source'); });
    $('#create_folder').on("click", function() { folder_page_create(); return false; });
    $('#delete_folder').on("click", function() { folder_page_delete(); return false; });
    $('#rename_folder').on("click", function() { folder_page_rename(); return false; });

    $('#set_trash_folder').on("click", function() { folder_page_assign_trash(); return false; });
    $('#set_sent_folder').on("click", function() { folder_page_assign_sent(); return false; });
    $('#set_archive_folder').on("click", function() { folder_page_assign_archive(); return false; });
    $('#set_draft_folder').on("click", function() { folder_page_assign_draft(); return false; });

    $('#clear_trash_folder').on("click", function() { clear_special_folder('trash'); return false; });
    $('#clear_sent_folder').on("click", function() { clear_special_folder('sent'); return false; });
    $('#clear_archive_folder').on("click", function() { clear_special_folder('archive'); return false; });
    $('#clear_draft_folder').on("click", function() { clear_special_folder("draft"); return false; });
});


var ks_follow_link = function(target) {
    var link = $(target);
    if (link.length > 0) {
        document.location.href = link.attr('href');
    }
};

var ks_redirect = function(target) {
    document.location.href = target;
};

var ks_select_all = function() {
    Hm_Message_List.toggle_rows();
};

var ks_select_msg = function() {
    var focused = $(document.activeElement);
    $('input', focused).each(function() {
        if ($(this).prop('checked')) {
            $(this).prop('checked', false);
        }
        else {
            $(this).prop('checked', true);
        }
    });
    Hm_Message_List.toggle_msg_controls();
};

var ks_prev_msg_list = function() {
    var focused = $(document.activeElement);
    if (focused.prop('tagName').toLowerCase() != 'tr') {
        var row = $('.message_table tbody tr').last();
        row.focus();
    }
    else {
        focused.prev().focus();
    }
};

var ks_load_msg = function() {
    var focused = $(document.activeElement);
    var inline;
    if (focused.prop('tagName').toLowerCase() == 'tr') {
        try {
            inline = inline_msg();
        }
        catch (e) {
            inline = false;
        }
        if (inline) {
            $('a', focused).trigger('click');
        }
        else {
            document.location.href = $('a', focused).attr('href');
        }
    }
};

var ks_next_msg_list = function() {
    var focused = $(document.activeElement);
    if (focused.prop('tagName').toLowerCase() != 'tr') {
        var row = $('.message_table tbody tr').first();
        row.focus();
    }
    else {
        focused.next().focus();
    }
};

var ks_click_button = function(target) {
    $(target).trigger('click');
};

var Keyboard_Shortcuts = {

    unfocus: function() {
        $('input').blur();
        $('textarea').blur();
    },

    check: function(e, shortcuts) {
        var combo;
        var index;
        var matched;
        var control_keys = {'alt': e.altKey, 'shift': e.shiftKey, 'meta': e.metaKey, 'control': e.ctrlKey};
        for (index in shortcuts) {
            combo = shortcuts[index];
            if (combo['page'] != '*' && combo['page'] != hm_page_name()) {
                continue;
            }
            if (e.keyCode != combo['char']) {
                continue;
            }
            matched = Keyboard_Shortcuts.check_control_chars(combo['control_chars'], control_keys);
            if (matched) {
                if (combo['action'] == 'unfocus') {
                    Keyboard_Shortcuts.unfocus();
                    return false;
                }
                if (Keyboard_Shortcuts.in_input_tag(e)) {
                    return true;
                }
                Keyboard_Actions[combo['action']](combo['target']);
                return false;
            }
        }
        return true;
    },

    check_control_char: function(key_type, control_chars, matched, key_status) {
        if (matched && $.inArray(key_type, control_chars) !== -1 && !key_status) {
            matched = false;
        }
        else if ($.inArray(key_type, control_chars) === -1  && key_status) {
            matched = false;
        }
        return matched
    },

    in_input_tag: function(e) {
        var tag = e.target.tagName.toLowerCase();
        if (tag == 'input' || tag == 'textarea') {
            return true;
        }
        return false;
    },

    check_control_chars: function(control_chars, control_keys) {
        var key_type;
        var key_status;
        var matched = true;
        for (key_type in control_keys) {
            key_status = control_keys[key_type];
            matched = Keyboard_Shortcuts.check_control_char(key_type, control_chars, matched, key_status);
        }
        return matched;
    }
};

var Keyboard_Actions = {
    'unfocus': false,
    'redirect': ks_redirect,
    'toggle': Hm_Folders.toggle_folder_list,
    'next': ks_next_msg_list,
    'prev': ks_prev_msg_list,
    'load': ks_load_msg,
    'select': ks_select_msg,
    'select_all': ks_select_all,
    'click': ks_click_button,
    'link': ks_follow_link
};

$(function() {

    if (typeof shortcuts != 'undefined') {
        $(document).not('input').on('keydown', function(e) { return Keyboard_Shortcuts.check(e, shortcuts); });
    }
    if (hm_page_name() == 'shortcuts') {
        $('.reset_shortcut').on("click", function() {
            window.location.href = '?page=shortcuts';
        });
    }
});


/*
 * Update intervals. Uncomment and change the values to override
 * the defaults. Current values are set to the defaults
 */

// Delay between saving drafts on the compose page
// globals.compose_save_interval = 30;

// Delay between IMAP background checks for unread messages
// globals.imap_background_update_interval = 33;

// Delay between background message content prefetching for
// globals.imap_prefetch_msg_interval = 43;

// Delay between updates to compbined message views
// globals.combined_view_refresh_interval = 60;
/**
 * Possible Sieve fields
 * @type {{Message: [{name: string, options: string[], type: string, selected: boolean},{name: string, options: string[], type: string},{name: string, options: string[], type: string}], Header: [{name: string, options: string[], type: string},{name: string, options: string[], type: string},{name: string, options: string[], type: string},{name: string, options: string[], type: string}]}}
 */
var hm_sieve_condition_fields = function() {
    return {
        'Message': [
            {
                name: 'subject',
                description: 'Subject',
                type: 'string',
                selected: true,
                options: ['Contains', 'Matches', 'Regex']
            },
            {
                name: 'body',
                description: 'Body',
                type: 'string',
                options: ['Contains', 'Matches', 'Regex']
            },
            {
                name: 'size',
                description: 'Size (KB)',
                type: 'int',
                options: ['Over', 'Under']
            }
        ],
        'Header': [
            {
                name: 'to',
                description: 'To',
                type: 'string',
                extra_option: false,
                options: ['Contains', 'Matches', 'Regex']
            },
            {
                name: 'from',
                description: 'From',
                type: 'string',
                extra_option: false,
                options: ['Contains', 'Matches', 'Regex']
            },
            {
                name: 'cc',
                description: 'CC',
                type: 'string',
                extra_option: false,
                options: ['Contains', 'Matches', 'Regex']
            },
            {
                name: 'to_or_cc',
                description: 'To or CC',
                type: 'string',
                extra_option: false,
                options: ['Contains', 'Matches', 'Regex']
            },
            {
                name: 'bcc',
                description: 'BCC',
                type: 'string',
                extra_option: false,
                options: ['Contains', 'Matches', 'Regex']
            },
            {
                name: 'custom',
                description: 'Custom',
                type: 'string',
                extra_option: true,
                extra_option_description: 'Field Name',
                options: ['Contains', 'Matches', 'Regex']
            }
        ]
    };
};

/**
 * Possible Sieve actions
 * @type {[{name: string, description: string, placeholder: string, type: string, selected: boolean},{name: string, description: string, placeholder: string, type: string},{name: string, description: string, type: string},{name: string, description: string, type: string},{name: string, description: string, placeholder: string, type: string}]}
 */
var hm_sieve_possible_actions = function() {
    return [
        {
            name: 'keep',
            description: 'Deliver (Keep)',
            type: 'none',
            extra_field: false
        },
        {
            name: 'stop',
            description: 'Stop Filtering',
            type: 'none',
            extra_field: false
        },
        {
            name: 'copy',
            description: 'Copy email to mailbox',
            placeholder: 'Mailbox Name (Folder)',
            type: 'mailbox',
            extra_field: false
        },
        {
            name: 'move',
            description: 'Move email to mailbox',
            placeholder: 'Mailbox Name (Folder)',
            type: 'mailbox',
            extra_field: false
        },
        {
            name: 'flag',
            description: 'Flag',
            placeholder: 'Example: SEEN',
            type: 'select',
            values: ['Seen', 'Answered', 'Flagged', 'Deleted', 'Draft', 'Recent'],
            extra_field: false
        },
        {
            name: 'addflag',
            description: 'Add Flag',
            placeholder: 'Example: SEEN',
            type: 'select',
            values: ['Seen', 'Answered', 'Flagged', 'Deleted', 'Draft', 'Recent'],
            extra_field: false
        },
        {
            name: 'removeflag',
            description: 'Remove Flag',
            placeholder: 'Example: SEEN',
            type: 'select',
            values: ['Seen', 'Answered', 'Flagged', 'Deleted', 'Draft', 'Recent'],
            extra_field: false
        },
        {
            name: 'redirect',
            description: 'Redirect',
            placeholder: 'mail@example.org',
            type: 'string',
            extra_field: false
        },
        {
            name: 'reject',
            description: 'Reject',
            placeholder: 'Reject message',
            type: 'string',
            extra_field: false
        },
        {
            name: 'discard',
            description: 'Discard',
            type: 'none',
            extra_field: false
        },
        {
            name: 'autoreply',
            placeholder: 'Reply Message',
            description: 'Reply Message',
            type: 'text',
            extra_field: true,
            extra_field_type: 'string',
            extra_field_placeholder: 'Subject'
        }
    ];
};

$(function () {

    let is_editing_script = false;
    let current_editing_script_name = '';
    let is_editing_filter = false;
    let current_editing_filter_name = '';
    let current_account;

    if (hm_page_name() === 'block_list') {
        $(document).on('change', '.select_default_behaviour', function(e) {
            if ($(this).val() != 'Reject') {
                $(this).closest('.filter_subblock')
                    .find('.select_default_reject_message')
                    .remove();
            } else {
                $('<input type="text" class="select_default_reject_message" placeholder="Reject message" />').insertAfter($(this));
            }
        });
        $(document).on('click', '.submit_default_behavior', function(e) {
            let parent = $(this).closest('.filter_subblock');
            let elem = parent.find('.select_default_behaviour');
            let submit = $(this);

            const payload = [
                {'name': 'hm_ajax_hook', 'value': 'ajax_sieve_block_change_behaviour'},
                {'name': 'selected_behaviour', 'value': elem.val()},
                {'name': 'imap_server_id', 'value': elem.attr('imap_account')}
            ];
            if (elem.val() == 'Reject') {
                const reject = parent.find('.select_default_reject_message');
                payload.push({'name': 'reject_message', 'value': reject.val()});
            }

            submit.css('opacity', '0.3');
            Hm_Ajax.request(
                payload,
                function(res) {
                    submit.css('opacity', '1');
                    console.log(res);
                }
            );
        });

        $(document).on('click', '.unblock_button', function(e) {
           e.preventDefault();
           let sender = $(this).parent().parent().children().html();
           let elem = $(this);
            Hm_Ajax.request(
                [   {'name': 'hm_ajax_hook', 'value': 'ajax_sieve_unblock_sender'},
                    {'name': 'imap_server_id', 'value': $(this).attr('mailbox_id')},
                    {'name': 'sender', 'value': sender}
                ],
                function(res) {
                    elem.parent().parent().remove();
                    var num_filters = $("#filter_num_" + elem.attr('mailbox_id')).html();
                    num_filters = parseInt(num_filters) - 1;
                    $("#filter_num_" + elem.attr('mailbox_id')).html(num_filters);
                }
            );
        });

        $(document).on('click', '.block_domain_button', function(e) {
            e.preventDefault();
            let sender = $(this).parent().parent().children().html();
            let elem = $(this);
            Hm_Ajax.request(
                [   {'name': 'hm_ajax_hook', 'value': 'ajax_sieve_block_domain'},
                    {'name': 'imap_server_id', 'value': $(this).attr('mailbox_id')},
                    {'name': 'sender', 'value': sender}
                ],
                function(res) {
                    window.location = window.location;
                }
            );
        });

        $('.sievefilters_accounts_title').on("click", function () {
            $(this).parent().find('.sievefilters_accounts').toggle();
        });
    }

    if (hm_page_name() === 'sieve_filters') {
        /**************************************************************************************
         *                             TINGLE SCRIPT MODAL
         **************************************************************************************/
        var edit_script_modal = new tingle.modal({
            footer: true,
            stickyFooter: false,
            closeMethods: ['overlay', 'button', 'escape'],
            closeLabel: "Close",
            cssClass: ['custom-class-1', 'custom-class-2'],
            onOpen: function () {
            },
            onClose: function () {
            },
            beforeClose: function () {
                // here's goes some logic
                // e.g. save content before closing the modal
                return true; // close the modal
                return false; // nothing happens
            }
        });

        // set content
        edit_script_modal.setContent(document.querySelector('#edit_script_modal').innerHTML);
        $('#edit_script_modal').remove();

        // add a button
        edit_script_modal.addFooterBtn('Save', 'tingle-btn tingle-btn--primary tingle-btn--pull-right', async function () {
            save_script(current_account);
        });

        // add another button
        edit_script_modal.addFooterBtn('Close', 'tingle-btn tingle-btn--default tingle-btn--pull-right', function () {
            // here goes some logic
            edit_script_modal.close();
        });


        /**************************************************************************************
         *                             TINGLE SIEVE FILTER MODAL
         **************************************************************************************/
        var edit_filter_modal = new tingle.modal({
            footer: true,
            stickyFooter: false,
            closeMethods: ['overlay', 'button', 'escape'],
            closeLabel: "Close",
            cssClass: ['custom-class-1', 'custom-class-2'],
            onOpen: function () {
            },
            onClose: function () {
                $(".sieve_list_conditions_modal").html("");
                $(".filter_actions_modal_table").html("");
                $(".modal_sieve_filter_name").val("");
                $(".modal_sieve_filter_priority").val("0");
                $(".modal_sieve_filter_test").val("ALLOF");
            },
            beforeClose: function () {
                // here's goes some logic
                // e.g. save content before closing the modal
                return true; // close the modal
                return false; // nothing happens
            }
        });

        // set content
        edit_filter_modal.setContent(document.querySelector('#edit_filter_modal').innerHTML);
        $('#edit_filter_modal').remove();

        // add a button
        edit_filter_modal.addFooterBtn('Save', 'tingle-btn tingle-btn--primary tingle-btn--pull-right', async function () {
            let result = save_filter(current_account);
            if (result) {
                edit_filter_modal.close();
            }
        });

        // add another button
        edit_filter_modal.addFooterBtn('Close', 'tingle-btn tingle-btn--default tingle-btn--pull-right', function () {
            // here goes some logic
            edit_filter_modal.close();
        });

        function ordinal_number(n)
        {
            let ord = 'th';

            if (n % 10 == 1 && n % 100 != 11) {
                ord = 'st';
            } else if (n % 10 == 2 && n % 100 != 12) {
                ord = 'nd';
            } else if (n % 10 == 3 && n % 100 != 13) {
                ord = 'rd';
            }

            return n + ord;
        }

        /**************************************************************************************
         *                                    FUNCTIONS
         **************************************************************************************/
        function save_filter(imap_account) {
            let validation_failed = false
            let conditions_parsed = []
            let actions_parsed = []
            let conditions = $('select[name^=sieve_selected_conditions_field]').map(function(idx, elem) {
                return $(elem).val();
            }).get();

            let conditions_type = $('select[name^=sieve_selected_conditions_options]').map(function(idx, elem) {
                return $(elem).val();
            }).get();

            let conditions_value = $('input[name^=sieve_selected_option_value]').map(function(idx, elem) {
                return $(elem).val();
            }).get();

            let conditions_extra_value = $('input[name^=sieve_selected_extra_option_value]').map(function(idx, elem) {
                return $(elem).val();
            }).get();

            let idx = 0;
            if (conditions.length === 0) {
                $('.sys_messages').html('<span class="err">You must provide at least one condition</span>');
                Hm_Utils.show_sys_messages();
                return false;
            }

            $('.sys_messages').html('');
            conditions.forEach(function (elem, key) {
                if (conditions_value[idx] === "" && conditions_value[idx] !== 'none') {
                    let order = ordinal_number(key + 1);
                    let previous_messages = $('.sys_messages').html();
                    previous_messages += previous_messages ? '<br>': '';
                    $('.sys_messages').html(previous_messages + '<span class="err">The ' + order + ' condition (' + elem + ') must be provided</span>');
                    Hm_Utils.show_sys_messages();
                    validation_failed = true;
                }
                 conditions_parsed.push(
                     {
                         'condition': elem,
                         'type': conditions_type[idx],
                         'extra_option': conditions[idx].extra_option,
                         'extra_option_value': conditions_extra_value[idx],
                         'value': conditions_value[idx]
                     }
                 )
                idx = idx + 1;
            });

            let actions_type = $('select[name^=sieve_selected_actions]').map(function(idx, elem) {
                return $(elem).val();
            }).get();
            let actions_value = $('[name^=sieve_selected_action_value]').map(function(idx, elem) {
                return $(elem).val();
            }).get();
            let actions_field_type = $('[name^=sieve_selected_action_value]').map(function(idx, elem) {
                return $(elem).attr('type');
            }).get();
            let actions_extra_value = $('input[name^=sieve_selected_extra_action_value]').map(function(idx, elem) {
                return $(elem).val();
            }).get();

            if (actions_type.length === 0) {
                $('.sys_messages').html('<span class="err">You must provide at least one action</span>');
                Hm_Utils.show_sys_messages();
                return false;
            }

            idx = 0;
            actions_type.forEach(function (elem, key) {
                console.log(actions_field_type[idx])
                if (actions_value[idx] === "" && actions_field_type[idx] !== 'hidden') {
                    let order = ordinal_number(key + 1);
                    let previous_messages = $('.sys_messages').html();
                    previous_messages += previous_messages ? '<br>': '';
                    $('.sys_messages').html(previous_messages + '<span class="err">The ' + order + ' action (' + elem + ') must be provided</span>');
                    Hm_Utils.show_sys_messages();
                    validation_failed = true;
                }
                actions_parsed.push(
                    {
                        'action': elem,
                        'value': actions_value[idx],
                        'extra_option': actions_type[idx].extra_option,
                        'extra_option_value': actions_extra_value[idx],
                    }
                )
                idx = idx + 1;
            });

            if ($('.modal_sieve_filter_name').val() == "") {
                $('.sys_messages').html('<span class="err">Filter name is required</span>');
                Hm_Utils.show_sys_messages();
                return false;
            }

            if (validation_failed) {
                return false;
            }

            Hm_Ajax.request(
                [   {'name': 'hm_ajax_hook', 'value': 'ajax_sieve_save_filter'},
                    {'name': 'imap_account', 'value': imap_account},
                    {'name': 'sieve_filter_name', 'value': $('.modal_sieve_filter_name').val()},
                    {'name': 'sieve_filter_priority', 'value': $('.modal_sieve_filter_priority').val()},
                    {'name': 'is_editing_filter', 'value': is_editing_filter},
                    {'name': 'current_editing_filter_name', 'value': current_editing_filter_name},
                    {'name': 'conditions_json', 'value': JSON.stringify(conditions_parsed)},
                    {'name': 'actions_json', 'value': JSON.stringify(actions_parsed)},
                    {'name': 'filter_test_type', 'value': $('.modal_sieve_filter_test').val()}
                    ],
                function(res) {
                    window.location = window.location;
                }
            );
        }

        function save_script(imap_account) {
            if ($('.modal_sieve_script_name').val() === "") {
                $('.sys_messages').html('<span class="err">You must provide a name for your script</span>');
                Hm_Utils.show_sys_messages();
                return false;
            }
            if ($('.modal_sieve_script_textarea').val() === "") {
                $('.sys_messages').html('<span class="err">Empty script</span>');
                Hm_Utils.show_sys_messages();
                return false;
            }
            Hm_Ajax.request(
                [   {'name': 'hm_ajax_hook', 'value': 'ajax_sieve_save_script'},
                    {'name': 'imap_account', 'value': imap_account},
                    {'name': 'sieve_script_name', 'value': $('.modal_sieve_script_name').val()},
                    {'name': 'sieve_script_priority', 'value': $('.modal_sieve_script_priority').val()},
                    {'name': 'is_editing_script', 'value': is_editing_script},
                    {'name': 'current_editing_script', 'value': current_editing_script_name},
                    {'name': 'script', 'value': $('.modal_sieve_script_textarea').val()}],
                function(res) {
                    window.location = window.location;
                }
            );
        }

        /**************************************************************************************
         *                                      MODAL EVENTS
         **************************************************************************************/
        $('.sievefilters_accounts_title').on("click", function () {
            $(this).parent().find('.sievefilters_accounts').toggle();
        });
        $('.add_filter').on('click', function () {
            $('.filter_modal_title').html('Add Filter');
            current_account = $(this).attr('account');
            edit_filter_modal.open();
        });
        $('.add_script').on('click', function () {
            $('.script_modal_title').html('Add Script');
            $('.modal_sieve_script_textarea').html('');
            $('.modal_sieve_script_name').val('');
            $('.modal_sieve_script_priority').val('');
            is_editing_script = false;
            current_editing_script_name = '';
            current_account = $(this).attr('account');
            edit_script_modal.open();
        });
        $('.edit_filter').on('click', function (e) {
            e.preventDefault();
            let script_name = $(this).parent().parent().children().next().html();
            $('.filter_modal_title').html(script_name);
            edit_filter_modal.open();
        });

        /**
         * Delete action Button
         */
        $(document).on('click', '.delete_else_action_modal_button', function (e) {
            e.preventDefault();
            $(this).parent().parent().remove();
        });

        /**
         * Delete action Button
         */
        $(document).on('click', '.delete_action_modal_button', function (e) {
            e.preventDefault();
            $(this).parent().parent().remove();
        });

        /**
         * Delete Condition Button
         */
        $(document).on('click', '.delete_condition_modal_button', function (e) {
            e.preventDefault();
            $(this).parent().parent().remove();
        });

        function add_filter_condition() {
            let header_fields = '';
            let message_fields = '';

            hm_sieve_condition_fields().Message.forEach(function (value) {
                if (value.selected === true) {
                    message_fields += '<option selected value="'+value.name+'">' + value.description + '</option>';
                } else {
                    message_fields += '<option value="'+value.name+'">' + value.description + '</option>';
                }
            });
            hm_sieve_condition_fields().Header.forEach(function (value) {
                if (value.selected === true) {
                    header_fields += '<option selected value="'+value.name+'">' + value.description + '</option>';
                } else {
                    header_fields += '<option value="'+value.name+'">' + value.description + '</option>';
                }
            });
            let extra_options = '<td style="width: 230px;"><input type="hidden" class="condition_extra_value" name="sieve_selected_extra_option_value[]" /></td>';
            $('.sieve_list_conditions_modal').append(
                '                            <tr>' +
                '                                <td>' +
                '                                    <select class="add_condition_sieve_filters" name="sieve_selected_conditions_field[]" style="width: 200px;">' +
                '                                        <optgroup label="Message">' +
                message_fields +
                '                                        </optgroup>' +
                '                                        <optgroup label="Header">' +
                header_fields +
                '                                        </optgroup>' +
                '                                    </select>' +
                '                                </td>' +
                extra_options +
                '                                <td>' +
                '                                    <select class="condition_options" name="sieve_selected_conditions_options[]">' +
                '                                        <option value="Contains">' +
                '                                            Contains' +
                '                                        </option>' +
                '                                        <option value="!Contains">' +
                '                                            Not Contains' +
                '                                        </option>' +
                '                                        <option value="Matches">' +
                '                                            Matches' +
                '                                        </option>' +
                '                                        <option value="!Matches">' +
                '                                            Not Matches' +
                '                                        </option>' +
                '                                        <option value="Regex">' +
                '                                            Regex' +
                '                                        </option>' +
                '                                        <option value="!Regex">' +
                '                                            Not Regex' +
                '                                        </option>' +
                '                                    </select>' +
                '                                </td>' +
                '                                <td style="width: 43%;">' +
                '                                    <input type="text" name="sieve_selected_option_value[]" />' +
                '                                </td>' +
                '                                <td style="vertical-align: middle; width: 70px;">' +
                '                                    <a href="#" class="delete_condition_modal_button">Delete</a>' +
                '                                </td>' +
                '                            </tr>'
            );
        }

        /**
         * Add Condition Button
         */
        $(document).on('click', '.sieve_add_condition_modal_button', function () {
            add_filter_condition();
        });

        function add_filter_action(default_value = '') {
            let possible_actions_html = '';

            hm_sieve_possible_actions().forEach(function (value) {
                if (value.selected === true) {
                    possible_actions_html += '<option selected value="'+value.name+'">' + value.description + '</option>';
                    return;
                }
                possible_actions_html += '<option value="'+value.name+'">' + value.description + '</option>';
            });

            let extra_options = '<td style="width: 230px;"><input type="hidden" class="condition_extra_action_value" name="sieve_selected_extra_action_value[]" /></td>';
            $('.filter_actions_modal_table').append(
                '<tr style="border-bottom-color: black;" default_value="'+default_value+'">' +
                '   <td>' +
                '       <select class="sieve_actions_select" name="sieve_selected_actions[]" style="width: 200px;">' +
                '          ' + possible_actions_html +
                '       </select>' +
                '    </td>' +
                extra_options +
                '    <td style="width: 43%;">' +
                '    <img style="display: none" src="'+hm_web_root_path()+'modules/core/assets/images/spinner.gif" />' +
                '    <input type="hidden" name="sieve_selected_action_value[]" value="">' +
                '    </input>' +
                '    <td style="vertical-align: middle; width: 70px;">' +
                '           <a href="#" class="delete_action_modal_button">Delete</a>' +
                '    </td>' +
                '</tr>'
            );
        }

        /**
         * Add Action Button
         */
        $(document).on('click', '.filter_modal_add_action_btn', function () {
            add_filter_action();
        });

        /**
         * Add Else Action Button
         */
        $(document).on('click', '.filter_modal_add_else_action_btn', function () {
            let possible_actions_html = '';

            hm_sieve_possible_actions().forEach(function (value) {
                if (value.selected === true) {
                    possible_actions_html += '<option selected value="'+value.name+'">' + value.description + '</option>';
                    return;
                }
                possible_actions_html += '<option value="'+value.name+'">' + value.description + '</option>';
            });

            $('.filter_else_actions_modal_table').append(
                '<tr style="border-bottom-color: black;">' +
                '   <td>' +
                '       <select class="sieve_actions_select">' +
                '          ' + possible_actions_html +
                '       </select>' +
                '    </td>' +
                '    <td>' +
                '    </td>' +
                '    <td style="vertical-align: middle; width: 70px;">' +
                '           <a href="#" class="delete_else_action_modal_button">Delete</a>' +
                '    </td>' +
                '</tr>'
            );
        });


        /**
         * Action change
         */
        $(document).on('change', '.sieve_actions_select', function () {
            let tr_elem = $(this).parent().parent();
            console.log(tr_elem.attr('default_value'));
            let elem = $(this).parent().next().next();
            let elem_extra = $(this).parent().next().find('.condition_extra_action_value');
            let action_name = $(this).val();
            let selected_action;
            hm_sieve_possible_actions().forEach(function (action) {
               if (action_name === action.name) {
                    selected_action = action;
               }
            });
            if (selected_action) {
                elem_extra.attr('type', 'hidden');
                if (selected_action.extra_field) {
                    elem_extra.attr('type', 'text');
                    elem_extra.attr('placeholder', selected_action.extra_field_placeholder)
                }
                if (selected_action.type === 'none') {
                    elem.html('<input name="sieve_selected_action_value[]" type="hidden" value="" />');
                }
                if (selected_action.type === 'string') {
                    elem.html('<input name="sieve_selected_action_value[]" placeholder="'+selected_action.placeholder+'" type="text" value="" />');
                }
                if (selected_action.type === 'int') {
                    elem.html('<input name="sieve_selected_action_value[]" placeholder="'+selected_action.placeholder+'" type="number" />');
                }
                if (selected_action.type === 'number') {
                    elem.html('<input name="sieve_selected_action_value[]" placeholder="'+selected_action.placeholder+'" type="number" />');
                }
                if (selected_action.type === 'text') {
                    elem.html('<textarea name="sieve_selected_action_value[]" placeholder="'+selected_action.placeholder+'" style="width: 235px;"></textarea>');
                }
                if (selected_action.type === 'select') {
                    options = '';
                    selected_action.values.forEach(function(val) {
                        if (tr_elem.attr('default_value') === val) {
                            options = options + '<option value="' + val + '" selected>'+ val +'</option>'
                        } else {
                            options = options + '<option value="' + val + '">'+ val +'</option>'
                        }
                    });
                    elem.html('<select name="sieve_selected_action_value[]">'+ options +'</select>');
                }
                if (selected_action.type === 'mailbox') {
                    let mailboxes = null;
                    tr_elem.children().find('img').attr('style', '');
                    Hm_Ajax.request(
                        [   {'name': 'hm_ajax_hook', 'value': 'ajax_sieve_get_mailboxes'},
                            {'name': 'imap_account', 'value': current_account} ],
                        function(res) {
                            mailboxes = JSON.parse(res.mailboxes);
                            options = '';
                            mailboxes.forEach(function(val) {
                                if (tr_elem.attr('default_value') === val) {
                                    options = options + '<option value="' + val + '" selected>'+ val +'</option>'
                                } else {
                                    options = options + '<option value="' + val + '">'+ val +'</option>'
                                }
                            });
                            elem.html('<select name="sieve_selected_action_value[]">'+ options +'</select>');
                            $("[name^=sieve_selected_action_value]").last().val(elem.parent().attr('default_value'));
                        }
                    );
                }
            }
        })

        /**
         * Condition type change
         */
        $(document).on('change', '.add_condition_sieve_filters', function () {
            let condition_name = $(this).val();
            let elem = $(this).parent().next().next().find('.condition_options');
            let elem_extra = $(this).parent().next().find('.condition_extra_value');
            let elem_type = $(this).parent().next().next().next();
            let condition;
            let options_html = '';
            let input_type_html = '';
            hm_sieve_condition_fields().Message.forEach(function (cond) {
                if (condition_name === cond.name) {
                    condition = cond;
                }
            });
            hm_sieve_condition_fields().Header.forEach(function (cond) {
                if (condition_name === cond.name) {
                    condition = cond;
                }
            });
            if (condition) {
                if (condition.extra_option === true) {
                    elem_extra.attr('type', 'text');
                    elem_extra.attr('placeholder', condition.extra_option_description);
                } else {
                    elem_extra.attr('type', 'hidden');
                }
                condition.options.forEach(function (option) {
                    options_html += '<option value="'+option+'">'+option+'</option>';
                    options_html += '<option value="!'+option+'">Not '+option+'</option>';
                });
                elem.html(options_html);

                if (condition.type === 'string') {
                    elem_type.html('<input name="sieve_selected_option_value[]" type="text" />')
                }
                if (condition.type === 'int') {
                    elem_type.html('<input name="sieve_selected_option_value[]" type="number" />')
                }
                if (condition.type === 'none') {
                    elem_type.html('<input name="sieve_selected_option_value[]" type="hidden" value="none" />')
                }
            }
        });

        /**
         * Delete filter event
         */
        $(document).on('click', '.delete_filter', function (e) {
            e.preventDefault();
            if (!confirm('Do you want to delete filter?')) {
                return;
            }
            let obj = $(this);
            Hm_Ajax.request(
                [   {'name': 'hm_ajax_hook', 'value': 'ajax_sieve_delete_filter'},
                    {'name': 'imap_account', 'value': $(this).attr('imap_account')},
                    {'name': 'sieve_script_name', 'value': $(this).attr('script_name')}],
                function(res) {
                    if (res.script_removed == '1') {
                        obj.parent().parent().remove();
                    }
                }
            );
        });


        /**
         * Delete script event
         */
        $(document).on('click', '.delete_script', function (e) {
            e.preventDefault();
            if (!confirm('Do you want to delete script?')) {
                return;
            }
            let obj = $(this);
            Hm_Ajax.request(
                [   {'name': 'hm_ajax_hook', 'value': 'ajax_sieve_delete_script'},
                    {'name': 'imap_account', 'value': $(this).attr('imap_account')},
                    {'name': 'sieve_script_name', 'value': $(this).attr('script_name')}],
                function(res) {
                    if (res.script_removed == '1') {
                        obj.parent().parent().remove();
                    }
                }
            );
        });

        /**
         * Edit script event
         */
        $(document).on('click', '.edit_script', function (e) {
            e.preventDefault();
            let obj = $(this);
            $('.script_modal_title').html('Edit Script');
            current_account = $(this).attr('account');
            is_editing_script = true;
            current_editing_script_name = $(this).attr('script_name');
            current_account = $(this).attr('imap_account');
            $('.modal_sieve_script_name').val($(this).attr('script_name_parsed'));
            $('.modal_sieve_script_priority').val($(this).attr('priority'));
            Hm_Ajax.request(
                [   {'name': 'hm_ajax_hook', 'value': 'ajax_sieve_edit_script'},
                    {'name': 'imap_account', 'value': $(this).attr('imap_account')},
                    {'name': 'sieve_script_name', 'value': $(this).attr('script_name')}],
                function(res) {
                    $('.modal_sieve_script_textarea').html(res.script);
                    edit_script_modal.open();
                }
            );
        });

        /**
         * Edit filter event
         */
        $(document).on('click', '.edit_filter', function (e) {
            e.preventDefault();
            let obj = $(this);
            current_account = $(this).attr('account');
            is_editing_filter = true;
            current_editing_filter_name = $(this).attr('script_name');
            current_account = $(this).attr('imap_account');
            $('.modal_sieve_filter_name').val($(this).attr('script_name_parsed'));
            $('.modal_sieve_filter_priority').val($(this).attr('priority'));
            Hm_Ajax.request(
                [   {'name': 'hm_ajax_hook', 'value': 'ajax_sieve_edit_filter'},
                    {'name': 'imap_account', 'value': $(this).attr('imap_account')},
                    {'name': 'sieve_script_name', 'value': $(this).attr('script_name')}],
                function(res) {
                    conditions = JSON.parse(JSON.parse(res.conditions));
                    actions = JSON.parse(JSON.parse(res.actions));
                    test_type = res.test_type;
                    $(".modal_sieve_filter_test").val(test_type);
                    conditions.forEach(function (condition) {
                        add_filter_condition();
                        $(".add_condition_sieve_filters").last().val(condition.condition);
                        $(".add_condition_sieve_filters").last().trigger('change');
                        $(".condition_options").last().val(condition.type);
                        $("[name^=sieve_selected_extra_option_value]").last().val(condition.extra_option_value);
                        if ($("[name^=sieve_selected_option_value]").last().is('input')) {
                            $("[name^=sieve_selected_option_value]").last().val(condition.value);
                        }
                    });

                    actions.forEach(function (action) {
                        add_filter_action(action.value);
                        $(".sieve_actions_select").last().val(action.action);
                        $(".sieve_actions_select").last().trigger('change');
                        $("[name^=sieve_selected_extra_action_value]").last().val(action.extra_option_value);
                        if ($("[name^=sieve_selected_action_value]").last().is('input')) {
                            $("[name^=sieve_selected_action_value]").last().val(action.value);
                        }
                    });
                }
            );
        });
    }
});
var tiki_groupmail_content = function(id, folder) {
    Hm_Ajax.request(
        [{'name': 'hm_ajax_hook', 'value': 'ajax_tiki_groupmail'},
        {'name': 'folder', 'value': folder},
        {'name': 'imap_server_ids', 'value': id}],
        function(res) {
            var ids = res.imap_server_ids.split(',');
            if (folder) {
                var i;
                for (i=0;i<ids.length;i++) {
                    ids[i] = ids[i]+'_'+Hm_Utils.clean_selector(folder);
                }
            }
            if (res.auto_sent_folder) {
                add_auto_folder(res.auto_sent_folder);
            }
            Hm_Message_List.update(ids, res.formatted_message_list, 'imap');
        },
        [],
        false,
        function() { Hm_Message_List.set_message_list_state('formatted_tiki_groupmail'); }
    );
    return false;
};

var tiki_groupmail_take = function(btn, id) {
    var detail = Hm_Utils.parse_folder_path(id);
    $(btn).text(tr('Taking')+'...');
    Hm_Ajax.request(
        [{'name': 'hm_ajax_hook', 'value': 'ajax_take_groupmail'},
        {'name': 'msgid', 'value': id},
        {'name': 'imap_msg_uid', 'value': detail.uid},
        {'name': 'imap_server_id', 'value': detail.server_id},
        {'name': 'folder', 'value': detail.folder}],
        function(res) {
            if (res.operator) {
                $(btn).text(res.operator);
            } else {
                $(btn).text(tr('TAKE'));
            }
            tiki_groupmail_content(detail.server_id, detail.folder);
        },
        [],
        false
    );
}

var tiki_groupmail_put_back = function(btn, id) {
    var detail = Hm_Utils.parse_folder_path(id);
    $(btn).text(tr('Putting back')+'...');
    Hm_Ajax.request(
        [{'name': 'hm_ajax_hook', 'value': 'ajax_put_back_groupmail'},
        {'name': 'msgid', 'value': id},
        {'name': 'imap_msg_uid', 'value': detail.uid},
        {'name': 'imap_server_id', 'value': detail.server_id},
        {'name': 'folder', 'value': detail.folder}],
        function(res) {
            if (res.item_removed) {
                $(btn).text(tr('TAKE'));
            }
            tiki_groupmail_content(detail.server_id, detail.folder);
        },
        [],
        false
    );
}

var tiki_event_rsvp_actions = function() {
    $(document).on("click", '.event_rsvp_link', function(e) {
        var uid = hm_msg_uid();
        var detail = Hm_Utils.parse_folder_path(hm_list_path(), 'imap');
        var $btn = $(this);
        Hm_Ajax.request(
            [{'name': 'hm_ajax_hook', 'value': 'ajax_rsvp_action'},
            {'name': 'rsvp_action', 'value': $btn.data('action')},
            {'name': 'imap_msg_uid', 'value': uid},
            {'name': 'imap_server_id', 'value': detail.server_id},
            {'name': 'folder', 'value': detail.folder}],
            function(res) {
                $.each($('span.event_rsvp_link'), function(i,el) {
                    tiki_event_rsvp_button(el);
                });
                tiki_event_rsvp_button($btn[0]);
            },
            [],
            false
        );
    });
    $(document).on("change", 'select.event_calendar_select', function(e) {
        var uid = hm_msg_uid();
        var detail = Hm_Utils.parse_folder_path(hm_list_path(), 'imap');
        var $btn = $(this);
        Hm_Ajax.request(
            [{'name': 'hm_ajax_hook', 'value': 'ajax_add_to_calendar'},
            {'name': 'calendar_id', 'value': $(this).val()},
            {'name': 'imap_msg_uid', 'value': uid},
            {'name': 'imap_server_id', 'value': detail.server_id},
            {'name': 'folder', 'value': detail.folder}],
            function(res) {
                // noop
            },
            [],
            false
        );
    });
    $(document).on("click", '.event_update_participant_status', function(e) {
        e.preventDefault();
        var uid = hm_msg_uid();
        var detail = Hm_Utils.parse_folder_path(hm_list_path(), 'imap');
        var $btn = $(this);
        Hm_Ajax.request(
            [{'name': 'hm_ajax_hook', 'value': 'ajax_update_participant_status'},
            {'name': 'imap_msg_uid', 'value': uid},
            {'name': 'imap_server_id', 'value': detail.server_id},
            {'name': 'folder', 'value': detail.folder}],
            function(res) {
                $('.event_update_participant_status').text("Participant status updated");
                $('.event_update_participant_status').toggleClass('event_update_participant_status event_participant_status_updated');
            },
            [],
            false
        );
    });
    $(document).on("click", '.event_remove_from_calendar', function(e) {
        e.preventDefault();
        var uid = hm_msg_uid();
        var detail = Hm_Utils.parse_folder_path(hm_list_path(), 'imap');
        var $btn = $(this);
        Hm_Ajax.request(
            [{'name': 'hm_ajax_hook', 'value': 'ajax_remove_from_calendar'},
            {'name': 'imap_msg_uid', 'value': uid},
            {'name': 'imap_server_id', 'value': detail.server_id},
            {'name': 'folder', 'value': detail.folder}],
            function(res) {
                // noop
            },
            [],
            false
        );
    });
}

var tiki_event_message_headers_actions = function(){
    $(document).on("click",'#print_pdf', function(e) {
        e.preventDefault();
        var uid = hm_msg_uid();
        var header_subject= $('.header_subject').text();
        var header_date= $('.header_date').text().replace('Date','').replace('<','').replace('>','');
        var header_from= $('.header_from').text().replace('From','').replace('<','').replace('>','');
        var header_to= $('.header_to').text().replace('To','').replace('<','').replace('>','');
        var msg_text= $('.msg_text_inner').html();

        non_ajax_submit('tiki-webmail.php?page=message&uid='+uid+'&list_path='+hm_list_path(), 'POST', [
            { name: 'page', value: 'message' },
            { name: 'uid', value: uid },
            { name: 'header_subject', value: header_subject },
            { name: 'header_date', value: header_date },
            { name: 'header_from', value: header_from },
            { name: 'header_to', value: header_to },
            { name: 'msg_text', value: msg_text },
            { name: 'display', value: 'pdf' },
        ]);
    });
}

var non_ajax_submit = function(action, method, values) {
    var form = $('<form/>', {
        action: action,
        method: method
    });
    $.each(values, function() {
        form.append($('<input/>', {
            type: 'hidden',
            name: this.name,
            value: this.value
        }));
    });
    form.appendTo('body').submit();
}

var tiki_event_rsvp_button = function(el) {
    var attrs = { };
    $.each(el.attributes, function(idx, attr) {
        attrs[attr.nodeName] = attr.nodeValue;
    });
    $(el).replaceWith(function () {
        var type = $(this).is('a') ? 'span' : 'a';
        return $("<"+type+">", attrs).append($(this).html());
    });
}

var tiki_mobilecheck = function () {
    (function (a) {
        (jQuery.browser = jQuery.browser || {}).mobile = /(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0, 4))
    })(navigator.userAgent || navigator.vendor || window.opera);
    return jQuery.browser.mobile;
};

var tiki_Hm_Ajax_Request = function() {
    var new_request = new Hm_Ajax_Request();
    new_request.fail = function(xhr, not_callable) {
        if (xhr.status && xhr.status == 500) {
            Hm_Notices.show(['ERRInternal Server Error - check server log file for details.']);
        } else if (not_callable === true) {
            Hm_Notices.show(['ERRCould not perform action - your session probably expired. Please reload page.']);
        } else {
            $('.offline').show();
        }
        Hm_Ajax.err_condition = true;
        this.run_on_failure();
    };
    new_request.format_xhr_data = function(data) {
        var res = []
        for (var i in data) {
            res.push(encodeURIComponent(data[i]['name']) + '=' + encodeURIComponent(data[i]['value']));
        }
        if ($('#hm_session_prefix').length > 0) {
            res.push(encodeURIComponent('hm_session_prefix') + '=' + encodeURIComponent($('#hm_session_prefix').val()));
        }
        return res.join('&');
    };
    return new_request;
}

var tiki_enable_oauth2_over_imap = function (){
    if ($('input.tiki_enable_oauth2_over_imap').is(':checked')){
        $(".oauth").addClass("reveal-if-checked");
        $(".oauth").removeClass("reveal-if-unchecked");
    }else {
        $(".oauth").addClass("reveal-if-unchecked");
        $(".oauth").removeClass("reveal-if-checked");
    }
    $(document).on("click", ".tiki_enable_oauth2_over_imap",function(){
        if( $(this).is(':checked') ){
            $(".oauth").addClass("reveal-if-checked");
            $(".oauth").removeClass("reveal-if-unchecked");
        }else {
            $(".oauth").addClass("reveal-if-unchecked");
            $(".oauth").removeClass("reveal-if-checked");
        } 
    });
}

var tiki_setup_move_to_trackers = function() {
    $(document).on('click', '.close_move_to_trackers', function(e) {
        e.preventDefault();
        $('.move_to_trackers:visible').hide();
    });
    $(document).on('click', '#move_to_trackers', function(e) {
        e.preventDefault();
        $(this).parent().find('.move_to_trackers').show();
    });
    $(document).on('click', '.tiki_folder_trigger', function(e) {
        e.preventDefault();
        $(this).next().toggle();
    });
    $(document).on('click', '.move_to_trackers a.object_selector_trigger', function(e) {
        e.preventDefault();
        var $el = $(this);
        $el.parent().find('.object-selector').remove();
        var url = $.service('search', 'object_selector', {
            params: {
                _name: 'move_to_trackers',
                object_type: 'trackeritem',
                tracker_id: $el.data('tracker')
            }
        });
        $.ajax({
            url: url,
            dataType: 'json',
            success: function (data) {
                $el.after(data.selector);
                if (jqueryTiki.select2) {
                    $el.parent().find('.form-select').tiki("select2");
                    $el.parent().find('.select2').attr('style', function(i,s) { return (s || '') + 'width: 100% !important;' });
                }
                $el.parent()
                    .find('.object-selector input[name=move_to_trackers]')
                    .object_selector()
                    .on('change', function() {
                        Hm_Ajax.request(
                            [{'name': 'hm_ajax_hook', 'value': 'ajax_move_to_tracker'},
                            {'name': 'tracker_field_id', 'value': $el.data('field')},
                            {'name': 'tracker_item_id', 'value': $(this).val().replace('trackeritem:', '')},
                            {'name': 'imap_msg_uid', 'value': hm_msg_uid()},
                            {'name': 'list_path', 'value': hm_list_path()},
                            {'name': 'folder', 'value': $el.data('folder')}],
                            function(res) {
                                if (res.tiki_redirect_url) {
                                    window.location.href = res.tiki_redirect_url;
                                }
                            },
                            [],
                            false
                        );
                    });
            }
        });
    });
}

var tiki_get_message_content = function(msg_part, uid, images) {
    if (!images) {
        images = 0;
    }
    if (!uid) {
        uid = $('.msg_uid').val();
    }
    if (uid) {
        if (hm_page_name() == 'message') {
            window.scrollTo(0,0);
        }
        Hm_Ajax.request(
            [{'name': 'hm_ajax_hook', 'value': 'ajax_tiki_message_content'},
            {'name': 'imap_msg_uid', 'value': uid},
            {'name': 'imap_msg_part', 'value': msg_part},
            {'name': 'imap_allow_images', 'value': images},
            {'name': 'list_path', 'value': hm_list_path()}],
            function(res) {
                $('.msg_text').html('');
                $('.msg_text').append(res.msg_headers);
                $('.msg_text').append(res.msg_text);
                $('.msg_text').append(res.msg_parts);
                document.title = $('.header_subject th').text();
                imap_message_view_finished();
                tiki_message_view_finished(res.show_archive);
                tiki_prev_next_links(res.msg_prev_link, res.msg_prev_subject, res.msg_next_link, res.msg_next_subject);
            },
            [],
            false
        );
    }
    return false;
};

var tiki_message_view_finished = function(show_archive) {
    $('.msg_part_link').off("click").on("click", function() {
        $('.header_subject')[0].scrollIntoView();
        $('.msg_text_inner').css('visibility', 'hidden');
        return tiki_get_message_content($(this).data('messagePart'), false, $(this).data('allowImages'));
    });
    $('#flag_msg').off('click').on("click", function() { return tiki_flag_message(); });
    $('#unflag_msg').off('click').on("click", function() { return tiki_flag_message(); });
    $('#delete_message').off("click").on("click", function() { return tiki_delete_message(); });
    $('#move_message').off("click").on("click", function(e) { return tiki_move_copy(e, 'move', 'message');});
    $('#copy_message').off("click").on("click", function(e) { return tiki_move_copy(e, 'copy', 'message');});
    if (typeof show_archive !== 'undefined' && show_archive) {
        $('#archive_message').off("click").on("click", function() { return tiki_archive_message(); });
    } else {
        $('#archive_message').remove();
    }
    $('#unread_message').off('click').on("click", function() { return tiki_unread_message();});
    $('#delete_message').parent().contents().filter(function() { return this.nodeType == 3 && this.previousSibling.nodeType == 3; }).remove();
};

var tiki_prev_next_links = function(prev_link, prev_subject, next_link, next_subject) {
    var target = $('.msg_headers tr').last();
    if (prev_link) {
        var plink = '<a class="plink" href="'+prev_link+'"><div class="prevnext prev_img"></div> '+prev_subject+'</a>';
        $('<tr class="prev"><th colspan="2">'+plink+'</th></tr>').insertBefore(target);
    }
    if (next_link) {
        var nlink = '<a class="nlink" href="'+next_link+'"><div class="prevnext next_img"></div> '+next_subject+'</a>';
        $('<tr class="next"><th colspan="2">'+nlink+'</th></tr>').insertBefore(target);
    }
}

var tiki_delete_message = function() {
    if (!hm_delete_prompt()) {
        return false;
    }
    var uid = hm_msg_uid();
    var list_path = hm_list_path();
    if (list_path && uid) {
        Hm_Ajax.request(
            [{'name': 'hm_ajax_hook', 'value': 'ajax_tiki_delete_message'},
            {'name': 'imap_msg_uid', 'value': uid},
            {'name': 'list_path', 'value': list_path}],
            function(res) {
                if (!res.delete_error) {
                    if (Hm_Utils.get_from_global('msg_uid', false)) {
                        return;
                    }
                    var nlink = $('.nlink');
                    if (nlink.length) {
                        window.location.href = nlink.attr('href');
                    }
                    else {
                        window.location.href = "?page=message_list&list_path="+hm_list_path();
                    }
                }
            }
        );
    }
    return false;
};

var tiki_archive_message = function() {
    var uid = hm_msg_uid();
    var list_path = hm_list_path();
    if (list_path && uid) {
        Hm_Ajax.request(
            [{'name': 'hm_ajax_hook', 'value': 'ajax_tiki_archive_message'},
            {'name': 'imap_msg_uid', 'value': uid},
            {'name': 'list_path', 'value': list_path}],
            function(res) {
                if (!res.archive_error) {
                    if (Hm_Utils.get_from_global('msg_uid', false)) {
                        return;
                    }
                    var nlink = $('.nlink');
                    if (nlink.length) {
                        window.location.href = nlink.attr('href');
                    }
                    else {
                        window.location.href = "?page=message_list&list_path="+hm_list_path();
                    }
                }
            }
        );
    }
    return false;
};

var tiki_flag_message = function() {
    var uid = hm_msg_uid();
    var list_path = hm_list_path();
    if (list_path && uid) {
        Hm_Ajax.request(
            [{'name': 'hm_ajax_hook', 'value': 'ajax_tiki_flag_message'},
            {'name': 'imap_msg_uid', 'value': uid},
            {'name': 'list_path', 'value': list_path}],
            function(res) {
                if (res.flag_state == 'flagged') {
                    $('#flag_msg').hide();
                    $('#unflag_msg').show();
                }
                else {
                    $('#flag_msg').show();
                    $('#unflag_msg').hide();
                }
                tiki_message_view_finished(res.show_archive);
            }
        );
    }
    return false;
};

var tiki_unread_message = function() {
    var uid = hm_msg_uid();
    var list_path = hm_list_path();
    if (list_path && uid) {
        Hm_Ajax.request(
            [{'name': 'hm_ajax_hook', 'value': 'ajax_tiki_message_action'},
            {'name': 'action_type', 'value': 'unread'},
            {'name': 'imap_msg_uid', 'value': uid},
            {'name': 'list_path', 'value': list_path}],
            function() {
                window.location.href = "?page=message_list&list_path="+hm_list_path();
            }
        );
    }
    return false;
}

var tiki_move_copy = function(e, action, context) {
    imap_move_copy(e, action, context);
    var move_to = $('.msg_text .move_to_location');
    $('a', move_to).not('.imap_move_folder_link').not('.close_move_to').off("click").on("click", function(e) {
        e.preventDefault();
        tiki_perform_move_copy($(this).data('id'), move_to);
        return false;
    });
    return false;
}

var expand_tiki_move_to_mailbox = function() {
    var move_to = $('.move_to_location');
    $('a', move_to).not('.imap_move_folder_link').not('.close_move_to').off('click').on("click", function(e) {
        e.preventDefault();
        tiki_perform_move_copy($(this).data('id'), move_to);
        return false;
    });
}

var tiki_perform_move_copy = function(dest_id, move_to) {
    var action = $('.move_to_type').val();
    var ids = [hm_list_path()+'#'+hm_msg_uid()];
    move_to.html('').hide();
    if (ids.length > 0 && dest_id) {
        Hm_Ajax.request(
            [{'name': 'hm_ajax_hook', 'value': 'ajax_tiki_move_copy_action'},
            {'name': 'imap_move_ids', 'value': ids.join(',')},
            {'name': 'imap_move_to', 'value': dest_id},
            {'name': 'imap_move_action', 'value': action}],
            function(res) {
                if (action == 'move') {
                    var nlink = $('.nlink');
                    if (nlink.length) {
                        window.location.href = nlink.attr('href');
                    }
                    else {
                        window.location.href = "?page=message_list&list_path="+hm_list_path();
                    }
                }
            }
        );
    }
}

var tiki_send_archive = function() {
    $('.compose_post_archive').val(0).before('<input type="hidden" name="tiki_archive_replied" value="1">');
    $('.smtp_send').click();
}

var upload_file = function(file) {
    var res = '';
    var form = new FormData();
    var xhr = new XMLHttpRequest;
    Hm_Ajax.show_loading_icon();
    form.append('upload_file', file);
    form.append('hm_ajax_hook', 'ajax_smtp_attach_file');
    form.append('hm_page_key', $('#hm_page_key').val());
    form.append('draft_id', $('.compose_draft_id').val());
    form.append('draft_smtp', $('.compose_server').val());
    form.append('draft_subject', $('.compose_subject').val());
    form.append('draft_body', $('#compose_body').val());
    form.append('draft_to', $('.compose_to').val());
    form.append('draft_cc', $('.compose_cc').val());
    form.append('draft_bcc', $('.compose_bcc').val());
    if ($('#hm_session_prefix').length > 0) {
        form.append('hm_session_prefix', $('#hm_session_prefix').val());
    }
    xhr.open('POST', '', true);
    xhr.setRequestHeader('X-Requested-With', 'xmlhttprequest');
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4){
            if (hm_encrypt_ajax_requests()) {
                res = Hm_Utils.json_decode(xhr.responseText);
                res = Hm_Utils.json_decode(Hm_Crypt.decrypt(res.payload));
            }
            else {
                res = Hm_Utils.json_decode(xhr.responseText);
            }
            if (res.file_details) {
                $('.uploaded_files').append(res.file_details);
                $('.delete_attachment').on("click", function() { return delete_attachment($(this).data('id'), this); });
            }
            Hm_Ajax.stop_loading_icon();
            if (res.router_user_msgs && !$.isEmptyObject(res.router_user_msgs)) {
                Hm_Notices.show(res.router_user_msgs);
            }
        }
    }
    xhr.send(form);
};

/* executes on onload, has access to other module code */
$(function() {
    if (hm_page_name() == 'groupmail') {
        Hm_Message_List.select_combined_view();
        $('.content_cell').swipeDown(function(e) { e.preventDefault(); Hm_Message_List.load_sources(); });
        $('.source_link').click(function() { $('.list_sources').toggle(); return false; });
    }

    if (hm_page_name() == 'message') {
        tiki_event_rsvp_actions();
        tiki_event_message_headers_actions();
        tiki_setup_move_to_trackers();
    }

    if (hm_page_name() == 'sieve_filters') {
        tiki_setup_move_to_trackers(function(e) {
            $(e.target)
                .closest('td')
                .find("[name^=sieve_selected_action_value]")
                .val(JSON.stringify({
                    itemId: parseInt($(this).val().replace('trackeritem:', '')),
                    fieldId: e.data.field,
                    folder:  e.data.folder,
                })
                .replaceAll('"', "'"))
                .trigger('change');
            $('.move_to_trackers').hide();
        });

        if (jqueryTiki.select2) {
            $('select[name="test_type"]').next().remove();
            $('select[name="test_type"]').tiki("select2");
        }
    }

    if (hm_page_name() === 'message' && hm_list_path().substr(0, 14) === 'tracker_folder') {
        tiki_get_message_content();
        Hm_Ajax.add_callback_hook('ajax_imap_folder_expand', expand_tiki_move_to_mailbox);
    }

    if (hm_page_name() == 'settings') {
        tiki_enable_oauth2_over_imap();
    }

    if (hm_page_name() == 'compose' && hm_list_path().substr(0, 14) === 'tracker_folder') {
        if (!hm_msg_uid()) {
            $('.smtp_send_archive').remove();
        } else {
            $('.smtp_send_archive').off('click').on('click', function() { tiki_send_archive(); });
        }
    }

    if (tiki_mobilecheck()) {
        if (! $('body').hasClass('mobile')) $('body').addClass('mobile');
    }

    if (! $('body').hasClass('tiki-cypth')) $('body').addClass('tiki-cypht');
    $('.mobile .folder_cell').detach().appendTo('body');

    $('.mobile .folder_toggle').click(function(){
        $('.mobile .folder_cell').toggleClass('slide-in');
        if ($(this).attr('style') == '') $('.mobile .folder_list').hide();
    });

    $('.inline-cypht .select2-container').each(function () {
        $(this).prev().addClass('noselect2');
    });

    $('.folder_list').on('click', '.clear_cache', function(e) {
        e.preventDefault();
        sessionStorage.clear();
        var url = window.location.href.replace(/#.*/, ''); 
        if (window.location.href.indexOf('clear_cache') == -1) {
            url += (window.location.href.indexOf('?')? '?': '&') + 'clear_cache=1';;
        }
        window.location.href = url;
        return false;
    });

    if (document.cookie.indexOf('hm_first_load=1') > -1) {
        document.cookie = 'hm_reload_folders=1; max-age=0';
        document.cookie = 'hm_first_load=1; max-age=0';
    }
});
