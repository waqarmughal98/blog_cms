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
(window.webpackJsonp158=window.webpackJsonp158||[]).push([[22],{510:function(t,e,i){"use strict";var n=i(517),a=i(518);function r(t,e){return function(t){if(Array.isArray(t))return t}(t)||function(t,e){if("undefined"==typeof Symbol||!(Symbol.iterator in Object(t)))return;var i=[],n=!0,a=!1,r=void 0;try{for(var o,s=t[Symbol.iterator]();!(n=(o=s.next()).done)&&(i.push(o.value),!e||i.length!==e);n=!0);}catch(t){a=!0,r=t}finally{try{n||null==s.return||s.return()}finally{if(a)throw r}}return i}(t,e)||function(t,e){if(!t)return;if("string"==typeof t)return o(t,e);var i=Object.prototype.toString.call(t).slice(8,-1);"Object"===i&&t.constructor&&(i=t.constructor.name);if("Map"===i||"Set"===i)return Array.from(t);if("Arguments"===i||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(i))return o(t,e)}(t,e)||function(){throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}function o(t,e){(null==e||e>t.length)&&(e=t.length);for(var i=0,n=new Array(e);i<e;i++)n[i]=t[i];return n}var s={data:function(){return{display:!1}},computed:{config:function(){return this.$store.getters[this.code+"/config"]},text:function(){return this.$store.getters[this.code+"/text"]},globalStaticData:function(){return this.$store.getters[this.code+"/staticData"]},globalMarketData:function(){return this.$store.getters[this.code+"/marketData"]},code:function(){return this.$root.code},type:function(){return this.$attrs.type},api:function(){return this.$attrs.api},realtime:function(){return this.checkBoolean(this.$attrs.realtime)},assets:function(){var t=[];if(this.config.assetRecognitionRegexp){var e=new RegExp(this.config.assetRecognitionRegexp,"i"),i=location.href.replace(this.config.websiteUrl+"/","").match(e);i&&void 0!==i[1]&&void 0!==i[2]&&(t=[i[1].toUpperCase()+"~"+i[2].toUpperCase()])}return 0==t.length&&void 0!==this.$attrs.assets&&(t=this.$attrs.assets.toString().split(",")),t},from:function(){return this.assets.length?this.assets.map((function(t){return t.split("~")[0]})):[]},to:function(){return this.assets.length?this.assets.map((function(t){return t.split("~")[1]})):[]},assetsSubscription:function(){var t={type:this.marketDataType,subType:this.marketDataSubType,assets:this.assets,api:this.api,realtime:this.realtime};return"order-book"==this.marketDataType?t.exchange=this.$attrs.exchange:"rankings"==this.marketDataType&&"table-rankings"==this.type?(t.currency=this.$attrs.currency,t.page=1,t.limit=parseInt(this.$attrs.rows_per_page,10)):"rankings"==this.marketDataType&&"treemap"==this.type&&(t.page=1,t.limit=2e3),t},fields:function(){return this.$attrs.fields?this.$attrs.fields.split(","):[]},animation:function(){return this.$attrs.animation},classes:function(){return[this.code+"-"+this.$attrs.type,this.code+"-"+this.$attrs.template,this.code+"-"+this.$attrs.color]},classesWithIndicator:function(){var t=this.classes,e=this.quoteValue(this.assets[0],"change_abs_24h"),i=e<0?this.code+"-down":e>0?this.code+"-up":"";return i&&-1==t.indexOf(i)&&t.push(i),t},marketDataLoaded:function(){var t=this,e=!1;if("table-history"==this.type||"chart"==this.type){var i=this.marketData(this.assets[0]);e=!!(i&&i.length>1&&i[0].period==this.$attrs.period)}else if("table-trades"==this.type||"table-exchanges-quotes"==this.type)e=!!this.marketData(this.assets[0]);else if(["table-rankings","table-exchanges","table-wallets","table-mining-pools","order-book","treemap","ticker-news","typed-news","news-block"].indexOf(this.type)>-1)e=!!this.marketData();else if("button-link"==this.type&&"rankings"==this.marketDataType)e=!0;else if("info"==this.type)e=!0;else if("geomap"==this.type){var n=0;this.assets.forEach((function(e){n+=t.quoteValue(e,"asset")==e?1:0})),e=n>100}else{n=0;this.assets.forEach((function(e){n+=t.quoteValue(e,"asset")==e?1:0})),e=n==this.assets.length}return e},isChildWidget:function(){return void 0!==this.$parent.$parent.$parent&&void 0!==this.$parent.$parent.$parent.api},marketDataType:function(){return"table-history"==this.type||"chart"==this.type?"history":"table-trades"==this.type?"trades":"table-rankings"==this.type||"treemap"==this.type?"rankings":"table-exchanges"==this.type?"exchanges":"table-exchanges-quotes"==this.type?"exchanges-quotes":"table-wallets"==this.type?"wallets":"table-mining-pools"==this.type?"mining-pools":"order-book"==this.type?"order-book":"ticker-news"==this.type||"typed-news"==this.type||"news-block"==this.type?"news":"button-link"==this.type&&this.isChildWidget?this.$parent.$parent.$parent.marketDataType:"quotes"},marketDataSubType:function(){return"history"==this.marketDataType?this.$attrs.period:"live"}},methods:{checkBoolean:function(t){var e=arguments.length>1&&void 0!==arguments[1]&&arguments[1];return void 0===t&&e||"boolean"==typeof t&&t||"string"==typeof t&&"true"==t},symbolFrom:function(t){var e=r(t.split("~"),2),i=e[0];e[1];return i},symbolTo:function(t){var e=r(t.split("~"),2);e[0];return e[1]},staticData:function(t){var e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:null;return e?this.globalStaticData[t][e]||{}:this.globalStaticData[t]},staticDataValue:function(t,e,i){var n=this.staticData(t,e);return n&&void 0!==n[i]?n[i]:""},coinValue:function(t,e){return this.staticDataValue("coins",t,e)},marketData:function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:null,e=null;return void 0!==this.globalMarketData[this.api]&&void 0!==this.globalMarketData[this.api][this.marketDataType]&&void 0!==this.globalMarketData[this.api][this.marketDataType][this.marketDataSubType]&&(e=null!==t?this.globalMarketData[this.api][this.marketDataType][this.marketDataSubType][t]||null:this.globalMarketData[this.api][this.marketDataType][this.marketDataSubType]),e},quoteValue:function(t,e){var i=arguments.length>2&&void 0!==arguments[2]?arguments[2]:null,n=this.marketData(t);return n?null!==i&&void 0!==n[i]?n[i][e]||"":n[e]:""},quoteValueFormatted:function(t,e){var i=arguments.length>2&&void 0!==arguments[2]?arguments[2]:null,r=new n.a,o=new a.a,s=this.quoteValue(t,e,i);return["price","change_abs","change_abs_24h","open","high","low","close","open_24h","high_24h","low_24h","last_volume_from","volume_from","vwap"].indexOf(e)>-1?s=r.variableDecimal(s):["change_pct","change_pct_24h","total_volume_pct"].indexOf(e)>-1?s=r.percentage(s):["supply","market_cap","volume_day_to","volume_24h_to","volume_to","total_volume_24h_to"].indexOf(e)>-1?s=r.bigNumber(s):["last_volume_to","volume_day_from","volume_24h_from","volume_from","total_volume_24h_from"].indexOf(e)>-1?s=r.decimal(s):"last_update"==e?s=o.long(1e3*s):"date_time"==e?s=o.date(1e3*s):"last_update_ago"==e&&(s=o.ago(1e3*this.quoteValue(t,"last_update",i))),s},sortValue:function(t,e){var i=arguments.length>2&&void 0!==arguments[2]?arguments[2]:null;return["name","logo_name","logo_name_link"].indexOf(e)>-1?this.coinValue(this.symbolFrom(t),"name"):e.match(/^portfolio_/)?this.portfolioValue(t,i,e):"last_update_ago"==e?this.quoteValue(t,"last_update",i):this.quoteValue(t,e,i)},subscribeMarketData:function(t){this.$store.dispatch(this.code+"/subscribeMarketData",t||this.assetsSubscription)},unsubscribeMarketData:function(t){this.$store.dispatch(this.code+"/unsubscribeMarketData",{type:this.marketDataType,subType:this.marketDataSubType,assets:t,api:this.api})},disconnectDataSourcesAndClearMarketData:function(){this.$store.dispatch(this.code+"/disconnectDataSourcesAndClearMarketData")},translate:function(t){return void 0!==this.text[t]?this.text[t]:t}},created:function(){var t=this;this.$on("data-loaded",(function(){t.display=!0,t.$nextTick((function(){"function"==typeof t.onDataLoaded&&t.onDataLoaded()}))})),this.marketDataLoaded?this.$emit("data-loaded",{widgetType:this.type,eventType:"WIDGET_INIT_DATA_AVAILABLE"}):this.subscribeMarketData(),this.$watch("marketDataLoaded",(function(e,i){!i&&e&&t.$emit("data-loaded",{widgetType:t.type,eventType:"WIDGET_INIT_DATA_LOADED"})})),this.$watch("$attrs.assets",(function(e,i){t.marketDataLoaded?t.$emit("data-loaded",{widgetType:t.type,eventType:"ASSETS_CHANGE_DATA_AVAILABLE"}):(t.display=!1,!t.api||t.isChildWidget&&"button-link"==t.type||(t.unsubscribeMarketData(i.split(",")),t.subscribeMarketData()))})),this.$watch("$attrs.realtime",(function(e,i){i&&t.unsubscribeMarketData(t.assets),t.subscribeMarketData()})),this.$watch("$attrs.currency",(function(){"table-rankings"==t.type&&t.subscribeMarketData()})),this.$watch("$attrs.rows_per_page",(function(){"table-rankings"==t.type&&(t.disconnectDataSourcesAndClearMarketData(),t.subscribeMarketData())}))}},u=i(1),l=Object(u.a)(s,void 0,void 0,!1,null,null,null);l.options.__file="assets/js/src/components/widgets/_mixins/template.vue";e.a=l.exports},516:function(t,e,i){"use strict";var n={computed:{template:function(){return this.$attrs.template}}},a=i(1),r=Object(a.a)(n,void 0,void 0,!1,null,null,null);r.options.__file="assets/js/src/components/widgets/_mixins/widget-type.vue";e.a=r.exports},517:function(t,e,i){"use strict";i.d(e,"a",(function(){return r}));var n=i(74),a=i.n(n);function r(){var t=function(t){var e=a()(t).format("0,0.00");return"NaN"!==e?e:parseFloat(t).toFixed(2)};return{integer:function(t){return a()(t).format("0,0")},decimal:t,percentage:function(e){return t(e)+"%"},variableDecimal:function(t){var e,i=a()(t),n=Math.abs(i.value());n>=10?e="0,0.00":0==n?e="0.00":.1<=n&&n<10?e="0.0000":n<.1&&(e="0.00000000");var r=i.format(e);return"NaN"!==r?r:parseFloat(t).toFixed(8)},bigNumber:function(t){return a()(t).format("0,0.00a").toUpperCase()},compareNumbers:function(t,e){var i,n;if("number"==typeof t&&"number"==typeof e)i=t,n=e;else{var r=a()(1.1).format("0.0").substring(1,2),o=a()(1e3).format("0,0").substring(1,2);"."==o&&(t=t.replace(o,""),e=e.replace(o,"")),"."!=r&&(t=t.replace(r,"."),e=e.replace(r,".")),i=parseFloat(t.replace(/[^0-9.-]/g,"")),n=parseFloat(e.replace(/[^0-9.-]/g,""))}return t&&e&&!isNaN(i)&&!isNaN(n)?i>n?1:i<n?-1:0:t.localeCompare(e)}}}},518:function(t,e,i){"use strict";i.d(e,"a",(function(){return r}));var n=i(104),a=i.n(n);function r(){return{date:function(t){return a()(t).format("ll")},time:function(t){return a()(t).format("H:mm")},long:function(t){return a()(t).format("LLL")},ago:function(t){return a()(t).fromNow()}}}},532:function(t,e,i){var n,a;(function(){var r,o,s,u,l,h,c,d,p,m,f,g,v,y,b,D,w,k,M=[].slice;r=/^\(?([^)]*)\)?(?:(.)(D*)(d*))?$/,f=document.createElement("div").style,u=null!=f.transition||null!=f.webkitTransition||null!=f.mozTransition||null!=f.oTransition,p=window.requestAnimationFrame||window.mozRequestAnimationFrame||window.webkitRequestAnimationFrame||window.msRequestAnimationFrame,o=window.MutationObserver||window.WebKitMutationObserver||window.MozMutationObserver,h=function(t){var e;return(e=document.createElement("div")).innerHTML=t,e.children[0]},d=function(t,e){return t.className=t.className.replace(new RegExp("(^| )"+e.split(" ").join("|")+"( |$)","gi")," ")},l=function(t,e){return d(t,e),t.className+=" "+e},g=function(t,e){var i;if(null!=document.createEvent)return(i=document.createEvent("HTMLEvents")).initEvent(e,!0,!0),t.dispatchEvent(i)},c=function(){var t,e;return null!=(t=null!=(e=window.performance)&&"function"==typeof e.now?e.now():void 0)?t:+new Date},m=function(t,e){return null==e&&(e=0),e?(t*=Math.pow(10,e),t+=.5,(t=Math.floor(t))/Math.pow(10,e)):Math.round(t)},v=function(t){return t<0?Math.ceil(t):Math.floor(t)},b=!1,(y=function(){var t,e,i,n,a;if(!b&&null!=window.jQuery){for(b=!0,a=[],e=0,i=(n=["html","text"]).length;e<i;e++)t=n[e],a.push(function(t){var e;return e=window.jQuery.fn[t],window.jQuery.fn[t]=function(t){var i;return null==t||null==(null!=(i=this[0])?i.odometer:void 0)?e.apply(this,arguments):this[0].odometer.update(t)}}(t));return a}})(),setTimeout(y,0),(s=function(){function t(e){var i,n,a,r,o,s,u,l,h,c=this;if(this.options=e,this.el=this.options.el,null!=this.el.odometer)return this.el.odometer;for(i in this.el.odometer=this,u=t.options)a=u[i],null==this.options[i]&&(this.options[i]=a);null==(r=this.options).duration&&(r.duration=2e3),this.MAX_VALUES=this.options.duration/(1e3/30)/2|0,this.resetFormat(),this.value=this.cleanValue(null!=(l=this.options.value)?l:""),this.renderInside(),this.render();try{for(o=0,s=(h=["innerHTML","innerText","textContent"]).length;o<s;o++)n=h[o],null!=this.el[n]&&function(t){Object.defineProperty(c.el,t,{get:function(){var e;return"innerHTML"===t?c.inside.outerHTML:null!=(e=c.inside.innerText)?e:c.inside.textContent},set:function(t){return c.update(t)}})}(n)}catch(t){t,this.watchForMutations()}}return t.prototype.renderInside=function(){return this.inside=document.createElement("div"),this.inside.className="odometer-inside",this.el.innerHTML="",this.el.appendChild(this.inside)},t.prototype.watchForMutations=function(){var t=this;if(null!=o)try{return null==this.observer&&(this.observer=new o((function(e){var i;return i=t.el.innerText,t.renderInside(),t.render(t.value),t.update(i)}))),this.watchMutations=!0,this.startWatchingMutations()}catch(t){t}},t.prototype.startWatchingMutations=function(){if(this.watchMutations)return this.observer.observe(this.el,{childList:!0})},t.prototype.stopWatchingMutations=function(){var t;return null!=(t=this.observer)?t.disconnect():void 0},t.prototype.cleanValue=function(t){var e;return"string"==typeof t&&(t=(t=(t=t.replace(null!=(e=this.format.radix)?e:".","<radix>")).replace(/[.,]/g,"")).replace("<radix>","."),t=parseFloat(t,10)||0),m(t,this.format.precision)},t.prototype.bindTransitionEnd=function(){var t,e,i,n,a,r,o=this;if(!this.transitionEndBound){for(this.transitionEndBound=!0,e=!1,r=[],i=0,n=(a="transitionend webkitTransitionEnd oTransitionEnd otransitionend MSTransitionEnd".split(" ")).length;i<n;i++)t=a[i],r.push(this.el.addEventListener(t,(function(){return e||(e=!0,setTimeout((function(){return o.render(),e=!1,g(o.el,"odometerdone")}),0)),!0}),!1));return r}},t.prototype.resetFormat=function(){var t,e,i,n,a,o,s,u,l,h;if((t=null!=(l=this.options.format)?l:"(,ddd).dd")||(t="d"),!(a=r.exec(t)))throw new Error("Odometer: Unparsable digit format");return u=(h=a.slice(1,5))[0],s=h[1],i=h[2],n=h[3],o=(e=(null!=i?i.length:void 0)||0)+(null!=n?n.length:void 0)||0,this.format={repeating:u,radix:s,precision:o,fractional:e}},t.prototype.render=function(t){var e,i,n,a,r,o,s;for(null==t&&(t=this.value),this.stopWatchingMutations(),this.resetFormat(),this.inside.innerHTML="",r=this.options.theme,a=[],o=0,s=(e=this.el.className.split(" ")).length;o<s;o++)(i=e[o]).length&&((n=/^odometer-theme-(.+)$/.exec(i))?r=n[1]:/^odometer(-|$)/.test(i)||a.push(i));return a.push("odometer"),u||a.push("odometer-no-transitions"),r?a.push("odometer-theme-"+r):a.push("odometer-auto-theme"),this.el.className=a.join(" "),this.ribbons={},this.formatDigits(t),this.startWatchingMutations()},t.prototype.formatDigits=function(t){var e,i,n,a,r,o,s,u,l,h,c;if(this.digits=[],this.options.formatFunction)for(s=0,l=(h=this.options.formatFunction(t).split("").reverse()).length;s<l;s++)(o=h[s]).match(/[0-9]/)?((e=this.renderDigit()).querySelector(".odometer-value").innerHTML=o,this.digits.push(e),this.insertDigit(e)):this.addSpacer(o);else{for(r=Math.abs(t),(i=Math.max(this.format.fractional,this.getFractionalDigitCount(r)))&&(r=Math.round(r*Math.pow(10,i))),n=0;r>0;)this.addDigit((r%10).toString(),n>=i),r=Math.floor(r/10),(n+=1)===i&&this.addDigit(".",!0);for(a=null!=(c=this.options.minIntegerLen)?c:0,n=u=n-i;u<a;n=u+=1)this.addDigit(0,!0);t<0&&this.addDigit("-",!0)}},t.prototype.update=function(t){var e,i=this;if(e=(t=this.cleanValue(t))-this.value)return d(this.el,"odometer-animating-up odometer-animating-down odometer-animating"),l(this.el,e>0?"odometer-animating-up":"odometer-animating-down"),this.stopWatchingMutations(),this.animate(t),this.startWatchingMutations(),setTimeout((function(){return i.el.offsetHeight,l(i.el,"odometer-animating")}),0),this.value=t},t.prototype.renderDigit=function(){return h('<span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value"></span></span></span></span></span>')},t.prototype.insertDigit=function(t,e){return null!=e?this.inside.insertBefore(t,e):this.inside.children.length?this.inside.insertBefore(t,this.inside.children[0]):this.inside.appendChild(t)},t.prototype.addSpacer=function(t,e,i){var n;return(n=h('<span class="odometer-formatting-mark"></span>')).innerHTML=t,i&&l(n,i),this.insertDigit(n,e)},t.prototype.addDigit=function(t,e){var i,n,a,r;if(null==e&&(e=!0),"-"===t)return this.addSpacer(t,null,"odometer-negation-mark");if("."===t)return this.addSpacer(null!=(r=this.format.radix)?r:".",null,"odometer-radix-mark");if(e)for(a=!1;;){if(!this.format.repeating.length){if(a)throw new Error("Bad odometer format without digits");this.resetFormat(),a=!0}if(i=this.format.repeating[this.format.repeating.length-1],this.format.repeating=this.format.repeating.substring(0,this.format.repeating.length-1),"d"===i)break;this.addSpacer(i)}return(n=this.renderDigit()).querySelector(".odometer-value").innerHTML=t,this.digits.push(n),this.insertDigit(n)},t.prototype.animate=function(t){return u&&"count"!==this.options.animation?this.animateSlide(t):this.animateCount(t)},t.prototype.animateCount=function(t){var e,i,n,a,r,o=this;if(i=+t-this.value)return a=n=c(),e=this.value,(r=function(){var s,u;return c()-a>o.options.duration?(o.value=t,o.render(),void g(o.el,"odometerdone")):((s=c()-n)>50&&(n=c(),u=s/o.options.duration,e+=i*u,o.render(Math.round(e))),null!=p?p(r):setTimeout(r,50))})()},t.prototype.getDigitCount=function(){var t,e,i,n,a,r;for(t=a=0,r=(n=1<=arguments.length?M.call(arguments,0):[]).length;a<r;t=++a)i=n[t],n[t]=Math.abs(i);return e=Math.max.apply(Math,n),Math.ceil(Math.log(e+1)/Math.log(10))},t.prototype.getFractionalDigitCount=function(){var t,e,i,n,a,r,o;for(e=/^\-?\d*\.(\d*?)0*$/,t=r=0,o=(a=1<=arguments.length?M.call(arguments,0):[]).length;r<o;t=++r)n=a[t],a[t]=n.toString(),i=e.exec(a[t]),a[t]=null==i?0:i[1].length;return Math.max.apply(Math,a)},t.prototype.resetDigits=function(){return this.digits=[],this.ribbons=[],this.inside.innerHTML="",this.resetFormat()},t.prototype.animateSlide=function(t){var e,i,n,a,r,o,s,u,h,c,d,p,m,f,g,y,b,D,w,k,M,_,T,x,$,S,A,E,L;if(b=this.value,(u=Math.max(this.format.fractional,this.getFractionalDigitCount(b,t)))&&(t=Math.round(t*Math.pow(10,u)),b=Math.round(b*Math.pow(10,u))),n=t-b){for(this.bindTransitionEnd(),g=null!=(A=this.options.minIntegerLen)?A:0,a=Math.max(this.getDigitCount(b,t),g+u),r=[],e=0,d=k=0;0<=a?k<a:k>a;d=0<=a?++k:--k){if(D=v(b/Math.pow(10,a-d-1)),o=(s=v(t/Math.pow(10,a-d-1)))-D,Math.abs(o)>this.MAX_VALUES){for(c=[],p=o/(this.MAX_VALUES+this.MAX_VALUES*e*.5),i=D;o>0&&i<s||o<0&&i>s;)c.push(Math.round(i)),i+=p;c[c.length-1]!==s&&c.push(s),e++}else c=function(){L=[];for(var t=D;D<=s?t<=s:t>=s;D<=s?t++:t--)L.push(t);return L}.apply(this);for(d=M=0,T=c.length;M<T;d=++M)h=c[d],c[d]=Math.abs(h%10);r.push(c)}for(this.resetDigits(),d=_=0,x=(E=r.reverse()).length;_<x;d=++_)for(c=E[d],this.digits[d]||this.addDigit(" ",d>=u),null==(w=this.ribbons)[d]&&(w[d]=this.digits[d].querySelector(".odometer-ribbon-inner")),this.ribbons[d].innerHTML="",n<0&&(c=c.reverse()),m=S=0,$=c.length;S<$;m=++S)h=c[m],(y=document.createElement("div")).className="odometer-value",y.innerHTML=h,this.ribbons[d].appendChild(y),m===c.length-1&&l(y,"odometer-last-value"),0===m&&l(y,"odometer-first-value");return D<0&&this.addDigit("-"),null!=(f=this.inside.querySelector(".odometer-radix-mark"))&&f.parent.removeChild(f),u?this.addSpacer(this.format.radix,this.digits[u-1],"odometer-radix-mark"):void 0}},t}()).options=null!=(w=window.odometerOptions)?w:{},setTimeout((function(){var t,e,i,n,a;if(window.odometerOptions){for(t in a=[],n=window.odometerOptions)e=n[t],a.push(null!=(i=s.options)[t]?(i=s.options)[t]:i[t]=e);return a}}),0),s.init=function(){var t,e,i,n,a,r;if(null!=document.querySelectorAll){for(r=[],i=0,n=(e=document.querySelectorAll(s.options.selector||".odometer")).length;i<n;i++)t=e[i],r.push(t.odometer=new s({el:t,value:null!=(a=t.innerText)?a:t.textContent}));return r}},null!=(null!=(k=document.documentElement)?k.doScroll:void 0)&&null!=document.createEventObject?(D=document.onreadystatechange,document.onreadystatechange=function(){return"complete"===document.readyState&&!1!==s.options.auto&&s.init(),null!=D?D.apply(this,arguments):void 0}):document.addEventListener("DOMContentLoaded",(function(){if(!1!==s.options.auto)return s.init()}),!1),n=[i(58)],void 0===(a=function(){return s}.apply(e,n))||(t.exports=a)}).call(this)},560:function(t,e,i){"use strict";i.r(e);var n=function(){var t=this.$createElement;return(this._self._c||t)(this.template,this._b({key:this.key,tag:"component"},"component",this.$attrs,!1))};n._withStripped=!0;var a=i(516),r=function(){var t=this.$createElement,e=this._self._c||t;return this.display?e("div",{class:this.classes},[e("div",{class:this.code+"-odometer-container"})]):this._e()};r._withStripped=!0;var o=i(510),s=i(532),u=i.n(s),l={mixins:[o.a],data:function(){return{container:null,odometer:null}},computed:{value:function(){return this.quoteValue(this.assets[0],"price")},format:function(){var t;return this.value>=10?t="(,ddd).DD":0==this.value?t="(d).DD":.1<=this.value&&this.value<10?t="(d).DDDD":this.value<.1&&(t="(d).DDDDDDDD"),t}},methods:{onDataLoaded:function(){this.displayOdometer()},displayOdometer:function(){this.container=this.$el.querySelector("."+this.code+"-odometer-container"),this.odometer=new u.a({el:this.container,value:.01,theme:this.$attrs.theme,format:this.format,minIntegerLen:1}),this.odometer.render();var t=this.container.querySelector(".odometer-inside");t.setAttribute("data-before",this.coinValue(this.symbolFrom(this.assets[0]),"name")),t.setAttribute("data-after",this.symbolTo(this.assets[0])),this.updateOdometer()},updateOdometer:function(){this.odometer&&this.value&&this.odometer.update(this.value)}},created:function(){var t=this;this.$watch("value",(function(e){t.container&&-1==(" "+t.container.className+" ").indexOf(" odometer-animating ")&&t.updateOdometer()}))}},h=i(1),c=Object(h.a)(l,r,[],!1,null,null,null);c.options.__file="assets/js/src/components/widgets/odometer/_generic/template.vue";var d=c.exports,p={mixins:[a.a],computed:{key:function(){return this.$attrs.assets+"-"+this.$attrs.theme}},components:{Generic:d}},m=Object(h.a)(p,n,[],!1,null,null,null);m.options.__file="assets/js/src/components/widgets/odometer/odometer.vue";e.default=m.exports}}]);