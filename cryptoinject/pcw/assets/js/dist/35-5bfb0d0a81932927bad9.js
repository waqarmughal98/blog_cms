/*!
 * Premium Cryptocurrency Widgets
 * ------------------------------
 * Version 2.17.0, built on Monday, February 15, 2021
 * Copyright (c) Financial Apps and Plugins <info@financialplugins.com>. All rights reserved.
 * Demo: https://cryptowidgets.financialplugins.com/
 * Purchase (WordPress version): https://1.envato.market/mvJYM
 * Purchase (JavaScript version): https://1.envato.market/xvjY1
 * Like: https://www.facebook.com/financialplugins/
 * 
 */
(window.webpackJsonp158=window.webpackJsonp158||[]).push([[35],{521:function(t,s,e){"use strict";var a=e(58),i=e.n(a),r=(e(526),{computed:{key:function(){return this.$attrs.template+"a"+(this.$attrs.assets?this.$attrs.assets.length:0)+(this.$attrs.pause?"p1":"p0")+this.$attrs.direction+this.$attrs.speed}},methods:{onDataLoaded:function(){var t=this;setTimeout((function(){i()(t.$root.$el).find("."+t.code+"-"+t.type+" ul").webTicker({speed:t.$attrs.speed,hoverpause:t.$attrs.pause,direction:t.$attrs.direction,duplicate:!0,startEmpty:!1})}),1)}},created:function(){var t=this;this.$watch("$attrs.speed",(function(){t.onDataLoaded()})),this.$watch("$attrs.pause",(function(){t.onDataLoaded()})),this.$watch("$attrs.direction",(function(){t.onDataLoaded()}))}}),n=e(1),o=Object(n.a)(r,void 0,void 0,!1,null,null,null);o.options.__file="assets/js/src/components/widgets/_mixins/widget-ticker.vue";s.a=o.exports},526:function(t,s){!function(t){function s(s){var e=0;return s.children("li").each((function(){e+=t(this).outerWidth(!0)})),e}function e(s){return Math.max.apply(Math,s.children().map((function(){return t(this).width()})).get())}function a(t){var s=t.data("settings")||{direction:"left",speed:50},e=t.children().first(),a=Math.abs(-t.css(s.direction).replace("px","").replace("auto","0")-e.outerWidth(!0)),i=1e3*a/s.speed,r={};return r[s.direction]=t.css(s.direction).replace("px","").replace("auto","0")-a,{css:r,time:i}}function i(t){var s=t.data("settings")||{direction:"left"};t.css("transition-duration","0s").css(s.direction,"0");var e=t.children().first();e.hasClass("webticker-init")?e.remove():t.children().last().after(e)}function r(t,s){var e=t.data("settings")||{direction:"left"};void 0===s&&(s=!1),s&&i(t);var n=a(t);t.animate(n.css,n.time,"linear",(function(){t.css(e.direction,"0"),r(t,!0)}))}function n(t,s){void 0===s&&(s=!1),s&&i(t);var e=a(t),r=e.time/1e3;r+="s",t.css(e.css).css("transition-duration",r)}function o(s,e,a){var i=[];t.get(s,(function(s){t(s).find("item").each((function(){var s=t(this),e=s.find("title").text(),a=s.find("link").text();i+='<li><a href="'+a+'"">'+e+"</a></li>"})),a.webTicker("update",i,e)}))}function c(a,i){if(a.children("li").length<1)return window.console,!1;var r=a.data("settings");r.duplicateLoops=r.duplicateLoops||0,a.width("auto");var n=0;a.children("li").each((function(){n+=t(this).outerWidth(!0)}));var o,c=a.find("li:first").height();if(r.duplicate){o=e(a);for(var l=0;n-o<a.parent().width()||1===a.children().length||l<r.duplicateLoops;){var d=a.children().clone();a.append(d),n=0,n=s(a),o=e(a),l++}r.duplicateLoops=l}else{var p=a.parent().width()-n;p+=a.find("li:first").width(),a.find(".ticker-spacer").length>0?a.find(".ticker-spacer").width(p):a.append('<li class="ticker-spacer" style="float: '+r.direction+";width:"+p+"px;height:"+c+'px;"></li>')}r.startEmpty&&i&&a.prepend('<li class="webticker-init" style="float: '+r.direction+";width:"+a.parent().width()+"px;height:"+c+'px;"></li>'),n=0,n=s(a),a.width(n+200);var u=0;for(u=s(a);u>=a.width();)a.width(a.width()+200),u=0,u=s(a);return!0}var l=function(){var t=document.createElement("p").style,s=["ms","O","Moz","Webkit"];if(""===t.transition)return!0;for(;s.length;)if(s.pop()+"Transition"in t)return!0;return!1}(),d={init:function(s){return s=jQuery.extend({speed:50,direction:"left",moving:!0,startEmpty:!0,duplicate:!1,rssurl:!1,hoverpause:!0,rssfrequency:0,updatetype:"reset",transition:"linear",height:"30px",maskleft:"",maskright:"",maskwidth:0},s),this.each((function(){jQuery(this).data("settings",s);var e=jQuery(this),a=e.wrap('<div class="mask"></div>');a.after('<span class="tickeroverlay-left">&nbsp;</span><span class="tickeroverlay-right">&nbsp;</span>');var i,d=e.parent().wrap('<div class="tickercontainer"></div>');if(t(window).resize((function(){clearTimeout(i),i=setTimeout((function(){console.log("window was resized"),c(e,!1)}),500)})),e.children("li").css("white-space","nowrap"),e.children("li").css("float",s.direction),e.children("li").css("padding","0 7px"),e.children("li").css("line-height",s.height),a.css("position","relative"),a.css("overflow","hidden"),e.closest(".tickercontainer").css("height",s.height),e.closest(".tickercontainer").css("overflow","hidden"),e.css("float",s.direction),e.css("position","relative"),e.css("font","bold 10px Verdana"),e.css("list-style-type","none"),e.css("margin","0"),e.css("padding","0"),""!==s.maskleft&&""!==s.maskright){var p='url("'+s.maskleft+'")';d.find(".tickeroverlay-left").css("background-image",p),d.find(".tickeroverlay-left").css("display","block"),d.find(".tickeroverlay-left").css("pointer-events","none"),d.find(".tickeroverlay-left").css("position","absolute"),d.find(".tickeroverlay-left").css("z-index","30"),d.find(".tickeroverlay-left").css("height",s.height),d.find(".tickeroverlay-left").css("width",s.maskwidth),d.find(".tickeroverlay-left").css("top","0"),d.find(".tickeroverlay-left").css("left","-2px"),p='url("'+s.maskright+'")',d.find(".tickeroverlay-right").css("background-image",p),d.find(".tickeroverlay-right").css("display","block"),d.find(".tickeroverlay-right").css("pointer-events","none"),d.find(".tickeroverlay-right").css("position","absolute"),d.find(".tickeroverlay-right").css("z-index","30"),d.find(".tickeroverlay-right").css("height",s.height),d.find(".tickeroverlay-right").css("width",s.maskwidth),d.find(".tickeroverlay-right").css("top","0"),d.find(".tickeroverlay-right").css("right","-2px")}else d.find(".tickeroverlay-left").css("display","none"),d.find(".tickeroverlay-right").css("display","none");e.children("li").last().addClass("last");var u=c(e,!0);s.rssurl&&(o(s.rssurl,s.type,e),s.rssfrequency>0&&window.setInterval((function(){o(s.rssurl,s.type,e)}),1e3*s.rssfrequency*60)),l?(e.css("transition-timing-function",s.transition),e.css("transition-duration","0s").css(s.direction,"0"),u&&n(e,!1),e.on("transitionend webkitTransitionEnd oTransitionEnd otransitionend",(function(s){return!!e.is(s.target)&&void n(t(this),!0)}))):u&&r(t(this)),s.hoverpause&&e.hover((function(){if(l){var e=t(this).css(s.direction);t(this).css("transition-duration","0s").css(s.direction,e)}else jQuery(this).stop()}),(function(){jQuery(this).data("settings").moving&&(l?n(t(this),!1):r(e))}))}))},stop:function(){var s=t(this).data("settings");if(s.moving)return s.moving=!1,this.each((function(){if(l){var e=t(this).css(s.direction);t(this).css("transition-duration","0s").css(s.direction,e)}else t(this).stop()}))},cont:function(){var s=t(this).data("settings");if(!s.moving)return s.moving=!0,this.each((function(){l?n(t(this),!1):r(t(this))}))},transition:function(s){var e=t(this);l&&e.css("transition-timing-function",s)},update:function(e,a,i,r){a=a||"reset",void 0===i&&(i=!0),void 0===r&&(r=!1),"string"==typeof e&&(e=t(e));var n=t(this);n.webTicker("stop");var o=t(this).data("settings");if("reset"===a)n.html(e),c(n,!0);else if("swap"===a){var l,d,p;if(window.console,n.children("li").length<1)n.html(e),n.css(o.direction,"0"),c(n,!0);else if(!0===o.duplicate){n.children("li").addClass("old");for(var u=e.length-1;u>=0;u--)l=t(e[u]).data("update"),n.find('[data-update="'+l+'"]').length<1?i&&(0===n.find(".ticker-spacer:first-child").length&&n.find(".ticker-spacer").length>0?n.children("li.ticker-spacer").before(e[u]):(d=t(e[u]),u===e.length-1&&d.addClass("last"),n.find("last").after(d),n.find("last").removeClass("last"))):n.find('[data-update="'+l+'"]').replaceWith(e[u]);n.children("li.webticker-init, li.ticker-spacer").removeClass("old"),r&&n.children("li").remove(".old"),p=0,p=s(n),n.width(p+200),n.find("li.webticker-init").length<1&&(o.startEmpty=!1),n.html(e),n.children("li").css("white-space","nowrap"),n.children("li").css("float",o.direction),n.children("li").css("padding","0 7px"),n.children("li").css("line-height",o.height),c(n,!0)}else{n.children("li").addClass("old");for(var h=0;h<e.length;h++)l=t(e[h]).data("update"),n.find('[data-update="'+l+'"]').length<1?i&&(0===n.find(".ticker-spacer:first-child").length&&n.find(".ticker-spacer").length>0?n.children("li.ticker-spacer").before(e[h]):(d=t(e[h]),h===e.length-1&&d.addClass("last"),n.find(".old.last").after(d),n.find(".old.last").removeClass("last"))):n.find('[data-update="'+l+'"]').replaceWith(e[h]);n.children("li.webticker-init, li.ticker-spacer").removeClass("old"),n.children("li").css("white-space","nowrap"),n.children("li").css("float",o.direction),n.children("li").css("padding","0 7px"),n.children("li").css("line-height",o.height),r&&n.children("li").remove(".old"),p=0,p=s(n),n.width(p+200)}}n.webTicker("cont")}};t.fn.webTicker=function(s){return d[s]?d[s].apply(this,Array.prototype.slice.call(arguments,1)):"object"!=typeof s&&s?void t.error("Method "+s+" does not exist on jQuery.webTicker"):d.init.apply(this,arguments)}}(jQuery)},537:function(t,s,e){"use strict";e.r(s);var a=function(){var t=this.$createElement;return(this._self._c||t)(this.template,this._b({tag:"component"},"component",this.$attrs,!1))};a._withStripped=!0;var i=e(516),r=function(){var t=this,s=t.$createElement,e=t._self._c||s;return t.display?e("div",{key:t.key,class:t.classes},[e("ul",t._l(t.assets,(function(s){return e("li",[e("logo",{attrs:{symbol:t.symbolFrom(s)}}),t._v(" "),e("quote",{attrs:{asset:s,field:"symbol_from"}}),t._v(" "),e("sign",{attrs:{symbol:t.symbolTo(s)}}),e("quote",{attrs:{asset:s,field:"price",animation:t.animation}}),t._v(" "),e("quote-indicator",{staticClass:"fas",attrs:{asset:s,field:"change_abs_24h","down-class":"fa-arrow-down","up-class":"fa-arrow-up"}}),t._v(" "),e("quote",{attrs:{asset:s,field:"change_abs_24h","color-indicator":"1"}}),t._v(" "),e("quote",{attrs:{asset:s,field:"change_pct_24h","color-indicator":"1"}})],1)})),0)]):t._e()};r._withStripped=!0;var n=e(510),o=e(521),c=e(511),l=e(512),d=e(513),p=e(515),u=e(514),h={mixins:[n.a,o.a],components:{Quote:c.a,StaticData:l.a,Logo:d.a,QuoteIndicator:p.a,Sign:u.a}},f=e(1),v=Object(f.a)(h,r,[],!1,null,null,null);v.options.__file="assets/js/src/components/widgets/ticker-quotes/basic/template.vue";var m=v.exports,_=function(){var t=this,s=t.$createElement,e=t._self._c||s;return t.display?e("div",{key:t.key,class:t.classes},[e("ul",t._l(t.assets,(function(s){return e("li",[e("span",[e("logo",{attrs:{symbol:t.symbolFrom(s)}}),t._v(" "),e("static-data",{attrs:{symbol:t.symbolFrom(s),attribute:"name"}}),t._v("\n                ("),e("quote",{attrs:{asset:s,field:"symbol_from"}}),t._v(")\n            ")],1),t._v(" "),e("span",[e("sign",{attrs:{symbol:t.symbolTo(s)}}),e("quote",{attrs:{asset:s,field:"price",animation:t.animation}}),t._v(" "),e("quote-indicator",{staticClass:"fas",attrs:{asset:s,field:"change_abs_24h","down-class":"fa-arrow-down","up-class":"fa-arrow-up"}}),t._v(" "),e("quote",{attrs:{asset:s,field:"change_abs_24h","color-indicator":"1"}}),t._v("\n                ("),e("quote",{attrs:{asset:s,field:"change_pct_24h","color-indicator":"1"}}),t._v(")\n            ")],1)])})),0)]):t._e()};_._withStripped=!0;var g={mixins:[n.a,o.a],components:{Quote:c.a,StaticData:l.a,Logo:d.a,QuoteIndicator:p.a,Sign:u.a}},y=Object(f.a)(g,_,[],!1,null,null,null);y.options.__file="assets/js/src/components/widgets/ticker-quotes/basic2/template.vue";var b=y.exports,w=function(){var t=this,s=t.$createElement,e=t._self._c||s;return t.display?e("div",{key:t.key,class:t.classes},[e("ul",t._l(t.assets,(function(s){return e("li",[e("div",{class:t.code+"-flex"},[e("div",[e("span",[e("logo",{attrs:{symbol:t.symbolFrom(s)}}),t._v(" "),e("static-data",{attrs:{symbol:t.symbolFrom(s),attribute:"name"}}),t._v("\n                        ("),e("quote",{attrs:{asset:s,field:"symbol_from"}}),t._v(")\n                    ")],1),t._v(" "),e("span",[e("sign",{attrs:{symbol:t.symbolTo(s)}}),e("quote",{attrs:{asset:s,field:"price",animation:t.animation}}),t._v(" "),e("quote-indicator",{staticClass:"fas",attrs:{asset:s,field:"change_abs_24h","down-class":"fa-arrow-down","up-class":"fa-arrow-up"}}),t._v(" "),e("quote",{attrs:{asset:s,field:"change_abs_24h","color-indicator":"1"}}),t._v("\n                        ("),e("quote",{attrs:{asset:s,field:"change_pct_24h","color-indicator":"1"}}),t._v(")\n                    ")],1)]),t._v(" "),e("div",{class:t.code+"-chart-wrapper"},[e("crypto-widget",{attrs:{type:"chart",template:"basic",color:t.$attrs.color,background:{direction:"top to bottom",size:60,colors:[t.$attrs.color,"rgba(255,255,255,0)"]},assets:s,axes:!1,api:t.api,period:"24h",realtime:!1}})],1)])])})),0)]):t._e()};w._withStripped=!0;var k={mixins:[n.a,o.a],components:{Quote:c.a,StaticData:l.a,Logo:d.a,QuoteIndicator:p.a,Sign:u.a}},q=Object(f.a)(k,w,[],!1,null,null,null);q.options.__file="assets/js/src/components/widgets/ticker-quotes/chart/template.vue";var x=q.exports,$=function(){var t=this,s=t.$createElement,e=t._self._c||s;return t.display?e("div",{key:t.key,class:t.classes},[e("ul",t._l(t.assets,(function(s){return e("li",[e("div",{class:t.code+"-flex"},[e("div",[e("span",[e("logo",{attrs:{symbol:t.symbolFrom(s)}}),t._v(" "),e("static-data",{attrs:{symbol:t.symbolFrom(s),attribute:"name"}}),t._v("\n                        ("),e("quote",{attrs:{asset:s,field:"symbol_from"}}),t._v(")\n                    ")],1),t._v(" "),e("span",[e("sign",{attrs:{symbol:t.symbolTo(s)}}),e("quote",{attrs:{asset:s,field:"price",animation:t.animation}}),t._v(" "),e("quote-indicator",{staticClass:"fas",attrs:{asset:s,field:"change_abs_24h","down-class":"fa-arrow-down","up-class":"fa-arrow-up"}}),t._v(" "),e("quote",{attrs:{asset:s,field:"change_abs_24h","color-indicator":"1"}}),t._v("\n                        ("),e("quote",{attrs:{asset:s,field:"change_pct_24h","color-indicator":"1"}}),t._v(")\n                    ")],1)]),t._v(" "),e("div",{class:t.code+"-chart-wrapper"},[e("crypto-widget",{attrs:{type:"chart",template:"basic",color:"#fff",background:t.$attrs.color,assets:s,axes:!1,api:t.api,period:"24h",realtime:!1,"tooltip-background":"rgba(0,0,0,0.7)","tooltip-border-color":"rgba(255,255,255,0)"}})],1)])])})),0)]):t._e()};$._withStripped=!0;var j={mixins:[n.a,o.a],components:{Quote:c.a,StaticData:l.a,Logo:d.a,QuoteIndicator:p.a,Sign:u.a}},S=Object(f.a)(j,$,[],!1,null,null,null);S.options.__file="assets/js/src/components/widgets/ticker-quotes/chart2/template.vue";var Q=S.exports,C=function(){var t=this,s=t.$createElement,e=t._self._c||s;return t.display?e("div",{key:t.key,class:t.classes},[e("ul",t._l(t.assets,(function(s){return e("li",[e("div",{class:t.code+"-flex"},[e("div",[e("span",[e("logo",{attrs:{symbol:t.symbolFrom(s)}}),t._v(" "),e("static-data",{attrs:{symbol:t.symbolFrom(s),attribute:"name"}}),t._v("\n                        ("),e("quote",{attrs:{asset:s,field:"symbol_from"}}),t._v(")\n                    ")],1),t._v(" "),e("span",[e("sign",{attrs:{symbol:t.symbolTo(s)}}),e("quote",{attrs:{asset:s,field:"price",animation:t.animation}}),t._v(" "),e("quote-indicator",{staticClass:"fas",attrs:{asset:s,field:"change_abs_24h","down-class":"fa-arrow-down","up-class":"fa-arrow-up"}}),t._v(" "),e("quote",{attrs:{asset:s,field:"change_abs_24h","color-indicator":"1"}}),t._v("\n                        ("),e("quote",{attrs:{asset:s,field:"change_pct_24h","color-indicator":"1"}}),t._v(")\n                    ")],1)]),t._v(" "),e("div",{class:t.code+"-chart-wrapper"},[e("crypto-widget",{attrs:{type:"chart",template:"basic",color:t.$attrs.color,background:"#000",assets:s,axes:!1,api:t.api,period:"24h",realtime:!1,"tooltip-background":"#000"}})],1)])])})),0)]):t._e()};C._withStripped=!0;var T={mixins:[n.a,o.a],components:{Quote:c.a,StaticData:l.a,Logo:d.a,QuoteIndicator:p.a,Sign:u.a}},E=Object(f.a)(T,C,[],!1,null,null,null);E.options.__file="assets/js/src/components/widgets/ticker-quotes/chart3/template.vue";var L=E.exports,F=function(){var t=this,s=t.$createElement,e=t._self._c||s;return t.display?e("div",{key:t.key,class:t.classes},[e("ul",t._l(t.assets,(function(s){return e("li",[e("div",{class:t.code+"-flex"},[e("div",[e("logo",{attrs:{symbol:t.symbolFrom(s)}}),t._v(" "),e("static-data",{attrs:{symbol:t.symbolFrom(s),attribute:"name"}}),t._v(" "),e("quote-indicator",{staticClass:"fas",attrs:{asset:s,field:"change_abs_24h","down-class":"fa-caret-down","up-class":"fa-caret-up"}}),t._v(" "),e("quote",{attrs:{asset:s,field:"price",animation:t.animation}}),t._v(" "),e("quote",{attrs:{asset:s,field:"symbol_to"}}),t._v(" "),e("span",[t._v("(")]),t._v(" "),e("quote",{attrs:{asset:s,field:"change_abs_24h"}}),t._v(" "),e("span",[t._v("/")]),t._v(" "),e("quote",{attrs:{asset:s,field:"change_pct_24h"}}),t._v(" "),e("span",[t._v(")")])],1),t._v(" "),e("div",{class:t.code+"-chart-wrapper"},[e("crypto-widget",{attrs:{type:"chart",template:"basic",color:t.$attrs.color,background:{direction:"top to bottom",size:30,colors:[t.$attrs.color,"rgba(255,255,255,0)"]},assets:s,axes:!1,api:t.api,period:"24h",realtime:!1}})],1)])])})),0)]):t._e()};F._withStripped=!0;var D={mixins:[n.a,o.a],components:{Quote:c.a,StaticData:l.a,Logo:d.a,QuoteIndicator:p.a,Sign:u.a}},O=Object(f.a)(D,F,[],!1,null,null,null);O.options.__file="assets/js/src/components/widgets/ticker-quotes/chart4/template.vue";var I=O.exports,z=function(){var t=this,s=t.$createElement,e=t._self._c||s;return t.display?e("div",{key:t.key,class:t.classes},[e("ul",t._l(t.assets,(function(s){return e("li",[e("logo",{attrs:{symbol:t.symbolFrom(s)}}),t._v(" "),e("static-data",{attrs:{symbol:t.symbolFrom(s),attribute:"name"}}),t._v(" "),e("quote-indicator",{staticClass:"fas",attrs:{asset:s,field:"change_abs_24h","down-class":"fa-caret-down","up-class":"fa-caret-up"}}),t._v(" "),e("quote",{attrs:{asset:s,field:"price",animation:t.animation}}),t._v(" "),e("quote",{attrs:{asset:s,field:"symbol_to"}}),t._v(" "),e("span",[t._v("(")]),t._v(" "),e("quote",{attrs:{asset:s,field:"change_abs_24h"}}),t._v(" "),e("span",[t._v("/")]),t._v(" "),e("quote",{attrs:{asset:s,field:"change_pct_24h"}}),t._v(" "),e("span",[t._v(")")])],1)})),0)]):t._e()};z._withStripped=!0;var W={mixins:[n.a,o.a],components:{Quote:c.a,StaticData:l.a,Logo:d.a,QuoteIndicator:p.a,Sign:u.a}},B=Object(f.a)(W,z,[],!1,null,null,null);B.options.__file="assets/js/src/components/widgets/ticker-quotes/background/template.vue";var M=B.exports,J=function(){var t=this,s=t.$createElement,e=t._self._c||s;return t.display?e("div",{key:t.key,class:t.classes},[e("ul",t._l(t.assets,(function(s){return e("li",[e("logo",{attrs:{symbol:t.symbolFrom(s)}}),t._v(" "),e("static-data",{attrs:{symbol:t.symbolFrom(s),attribute:"name"}}),t._v(" "),e("quote-indicator",{staticClass:"fas",attrs:{asset:s,field:"change_abs_24h","down-class":"fa-caret-down","up-class":"fa-caret-up"}}),t._v(" "),e("quote",{attrs:{asset:s,field:"price",animation:t.animation}}),t._v(" "),e("quote",{attrs:{asset:s,field:"symbol_to"}}),t._v(" "),e("span",[t._v("(")]),t._v(" "),e("quote",{attrs:{asset:s,field:"change_abs_24h"}}),t._v(" "),e("span",[t._v("/")]),t._v(" "),e("quote",{attrs:{asset:s,field:"change_pct_24h"}}),t._v(" "),e("span",[t._v(")")])],1)})),0)]):t._e()};J._withStripped=!0;var A={mixins:[n.a,o.a],components:{Quote:c.a,StaticData:l.a,Logo:d.a,QuoteIndicator:p.a,Sign:u.a}},V=Object(f.a)(A,J,[],!1,null,null,null);V.options.__file="assets/js/src/components/widgets/ticker-quotes/black-background/template.vue";var G=V.exports,H={mixins:[i.a],components:{Basic:m,Basic2:b,Chart:x,Chart2:Q,Chart3:L,Chart4:I,Background:M,BlackBackground:G}},K=Object(f.a)(H,a,[],!1,null,null,null);K.options.__file="assets/js/src/components/widgets/ticker-quotes/ticker-quotes.vue";s.default=K.exports}}]);