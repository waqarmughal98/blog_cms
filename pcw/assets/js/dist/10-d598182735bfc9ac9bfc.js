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
(window.webpackJsonp158=window.webpackJsonp158||[]).push([[10],{510:function(t,e,a){"use strict";var s=a(517),n=a(518);function i(t,e){return function(t){if(Array.isArray(t))return t}(t)||function(t,e){if("undefined"==typeof Symbol||!(Symbol.iterator in Object(t)))return;var a=[],s=!0,n=!1,i=void 0;try{for(var r,o=t[Symbol.iterator]();!(s=(r=o.next()).done)&&(a.push(r.value),!e||a.length!==e);s=!0);}catch(t){n=!0,i=t}finally{try{s||null==o.return||o.return()}finally{if(n)throw i}}return a}(t,e)||function(t,e){if(!t)return;if("string"==typeof t)return r(t,e);var a=Object.prototype.toString.call(t).slice(8,-1);"Object"===a&&t.constructor&&(a=t.constructor.name);if("Map"===a||"Set"===a)return Array.from(t);if("Arguments"===a||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(a))return r(t,e)}(t,e)||function(){throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}function r(t,e){(null==e||e>t.length)&&(e=t.length);for(var a=0,s=new Array(e);a<e;a++)s[a]=t[a];return s}var o={data:function(){return{display:!1}},computed:{config:function(){return this.$store.getters[this.code+"/config"]},text:function(){return this.$store.getters[this.code+"/text"]},globalStaticData:function(){return this.$store.getters[this.code+"/staticData"]},globalMarketData:function(){return this.$store.getters[this.code+"/marketData"]},code:function(){return this.$root.code},type:function(){return this.$attrs.type},api:function(){return this.$attrs.api},realtime:function(){return this.checkBoolean(this.$attrs.realtime)},assets:function(){var t=[];if(this.config.assetRecognitionRegexp){var e=new RegExp(this.config.assetRecognitionRegexp,"i"),a=location.href.replace(this.config.websiteUrl+"/","").match(e);a&&void 0!==a[1]&&void 0!==a[2]&&(t=[a[1].toUpperCase()+"~"+a[2].toUpperCase()])}return 0==t.length&&void 0!==this.$attrs.assets&&(t=this.$attrs.assets.toString().split(",")),t},from:function(){return this.assets.length?this.assets.map((function(t){return t.split("~")[0]})):[]},to:function(){return this.assets.length?this.assets.map((function(t){return t.split("~")[1]})):[]},assetsSubscription:function(){var t={type:this.marketDataType,subType:this.marketDataSubType,assets:this.assets,api:this.api,realtime:this.realtime};return"order-book"==this.marketDataType?t.exchange=this.$attrs.exchange:"rankings"==this.marketDataType&&"table-rankings"==this.type?(t.currency=this.$attrs.currency,t.page=1,t.limit=parseInt(this.$attrs.rows_per_page,10)):"rankings"==this.marketDataType&&"treemap"==this.type&&(t.page=1,t.limit=2e3),t},fields:function(){return this.$attrs.fields?this.$attrs.fields.split(","):[]},animation:function(){return this.$attrs.animation},classes:function(){return[this.code+"-"+this.$attrs.type,this.code+"-"+this.$attrs.template,this.code+"-"+this.$attrs.color]},classesWithIndicator:function(){var t=this.classes,e=this.quoteValue(this.assets[0],"change_abs_24h"),a=e<0?this.code+"-down":e>0?this.code+"-up":"";return a&&-1==t.indexOf(a)&&t.push(a),t},marketDataLoaded:function(){var t=this,e=!1;if("table-history"==this.type||"chart"==this.type){var a=this.marketData(this.assets[0]);e=!!(a&&a.length>1&&a[0].period==this.$attrs.period)}else if("table-trades"==this.type||"table-exchanges-quotes"==this.type)e=!!this.marketData(this.assets[0]);else if(["table-rankings","table-exchanges","table-wallets","table-mining-pools","order-book","treemap","ticker-news","typed-news","news-block"].indexOf(this.type)>-1)e=!!this.marketData();else if("button-link"==this.type&&"rankings"==this.marketDataType)e=!0;else if("info"==this.type)e=!0;else if("geomap"==this.type){var s=0;this.assets.forEach((function(e){s+=t.quoteValue(e,"asset")==e?1:0})),e=s>100}else{s=0;this.assets.forEach((function(e){s+=t.quoteValue(e,"asset")==e?1:0})),e=s==this.assets.length}return e},isChildWidget:function(){return void 0!==this.$parent.$parent.$parent&&void 0!==this.$parent.$parent.$parent.api},marketDataType:function(){return"table-history"==this.type||"chart"==this.type?"history":"table-trades"==this.type?"trades":"table-rankings"==this.type||"treemap"==this.type?"rankings":"table-exchanges"==this.type?"exchanges":"table-exchanges-quotes"==this.type?"exchanges-quotes":"table-wallets"==this.type?"wallets":"table-mining-pools"==this.type?"mining-pools":"order-book"==this.type?"order-book":"ticker-news"==this.type||"typed-news"==this.type||"news-block"==this.type?"news":"button-link"==this.type&&this.isChildWidget?this.$parent.$parent.$parent.marketDataType:"quotes"},marketDataSubType:function(){return"history"==this.marketDataType?this.$attrs.period:"live"}},methods:{checkBoolean:function(t){var e=arguments.length>1&&void 0!==arguments[1]&&arguments[1];return void 0===t&&e||"boolean"==typeof t&&t||"string"==typeof t&&"true"==t},symbolFrom:function(t){var e=i(t.split("~"),2),a=e[0];e[1];return a},symbolTo:function(t){var e=i(t.split("~"),2);e[0];return e[1]},staticData:function(t){var e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:null;return e?this.globalStaticData[t][e]||{}:this.globalStaticData[t]},staticDataValue:function(t,e,a){var s=this.staticData(t,e);return s&&void 0!==s[a]?s[a]:""},coinValue:function(t,e){return this.staticDataValue("coins",t,e)},marketData:function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:null,e=null;return void 0!==this.globalMarketData[this.api]&&void 0!==this.globalMarketData[this.api][this.marketDataType]&&void 0!==this.globalMarketData[this.api][this.marketDataType][this.marketDataSubType]&&(e=null!==t?this.globalMarketData[this.api][this.marketDataType][this.marketDataSubType][t]||null:this.globalMarketData[this.api][this.marketDataType][this.marketDataSubType]),e},quoteValue:function(t,e){var a=arguments.length>2&&void 0!==arguments[2]?arguments[2]:null,s=this.marketData(t);return s?null!==a&&void 0!==s[a]?s[a][e]||"":s[e]:""},quoteValueFormatted:function(t,e){var a=arguments.length>2&&void 0!==arguments[2]?arguments[2]:null,i=new s.a,r=new n.a,o=this.quoteValue(t,e,a);return["price","change_abs","change_abs_24h","open","high","low","close","open_24h","high_24h","low_24h","last_volume_from","volume_from","vwap"].indexOf(e)>-1?o=i.variableDecimal(o):["change_pct","change_pct_24h","total_volume_pct"].indexOf(e)>-1?o=i.percentage(o):["supply","market_cap","volume_day_to","volume_24h_to","volume_to","total_volume_24h_to"].indexOf(e)>-1?o=i.bigNumber(o):["last_volume_to","volume_day_from","volume_24h_from","volume_from","total_volume_24h_from"].indexOf(e)>-1?o=i.decimal(o):"last_update"==e?o=r.long(1e3*o):"date_time"==e?o=r.date(1e3*o):"last_update_ago"==e&&(o=r.ago(1e3*this.quoteValue(t,"last_update",a))),o},sortValue:function(t,e){var a=arguments.length>2&&void 0!==arguments[2]?arguments[2]:null;return["name","logo_name","logo_name_link"].indexOf(e)>-1?this.coinValue(this.symbolFrom(t),"name"):e.match(/^portfolio_/)?this.portfolioValue(t,a,e):"last_update_ago"==e?this.quoteValue(t,"last_update",a):this.quoteValue(t,e,a)},subscribeMarketData:function(t){this.$store.dispatch(this.code+"/subscribeMarketData",t||this.assetsSubscription)},unsubscribeMarketData:function(t){this.$store.dispatch(this.code+"/unsubscribeMarketData",{type:this.marketDataType,subType:this.marketDataSubType,assets:t,api:this.api})},disconnectDataSourcesAndClearMarketData:function(){this.$store.dispatch(this.code+"/disconnectDataSourcesAndClearMarketData")},translate:function(t){return void 0!==this.text[t]?this.text[t]:t}},created:function(){var t=this;this.$on("data-loaded",(function(){t.display=!0,t.$nextTick((function(){"function"==typeof t.onDataLoaded&&t.onDataLoaded()}))})),this.marketDataLoaded?this.$emit("data-loaded",{widgetType:this.type,eventType:"WIDGET_INIT_DATA_AVAILABLE"}):this.subscribeMarketData(),this.$watch("marketDataLoaded",(function(e,a){!a&&e&&t.$emit("data-loaded",{widgetType:t.type,eventType:"WIDGET_INIT_DATA_LOADED"})})),this.$watch("$attrs.assets",(function(e,a){t.marketDataLoaded?t.$emit("data-loaded",{widgetType:t.type,eventType:"ASSETS_CHANGE_DATA_AVAILABLE"}):(t.display=!1,!t.api||t.isChildWidget&&"button-link"==t.type||(t.unsubscribeMarketData(a.split(",")),t.subscribeMarketData()))})),this.$watch("$attrs.realtime",(function(e,a){a&&t.unsubscribeMarketData(t.assets),t.subscribeMarketData()})),this.$watch("$attrs.currency",(function(){"table-rankings"==t.type&&t.subscribeMarketData()})),this.$watch("$attrs.rows_per_page",(function(){"table-rankings"==t.type&&(t.disconnectDataSourcesAndClearMarketData(),t.subscribeMarketData())}))}},l=a(1),u=Object(l.a)(o,void 0,void 0,!1,null,null,null);u.options.__file="assets/js/src/components/widgets/_mixins/template.vue";e.a=u.exports},516:function(t,e,a){"use strict";var s={computed:{template:function(){return this.$attrs.template}}},n=a(1),i=Object(n.a)(s,void 0,void 0,!1,null,null,null);i.options.__file="assets/js/src/components/widgets/_mixins/widget-type.vue";e.a=i.exports},517:function(t,e,a){"use strict";a.d(e,"a",(function(){return i}));var s=a(74),n=a.n(s);function i(){var t=function(t){var e=n()(t).format("0,0.00");return"NaN"!==e?e:parseFloat(t).toFixed(2)};return{integer:function(t){return n()(t).format("0,0")},decimal:t,percentage:function(e){return t(e)+"%"},variableDecimal:function(t){var e,a=n()(t),s=Math.abs(a.value());s>=10?e="0,0.00":0==s?e="0.00":.1<=s&&s<10?e="0.0000":s<.1&&(e="0.00000000");var i=a.format(e);return"NaN"!==i?i:parseFloat(t).toFixed(8)},bigNumber:function(t){return n()(t).format("0,0.00a").toUpperCase()},compareNumbers:function(t,e){var a,s;if("number"==typeof t&&"number"==typeof e)a=t,s=e;else{var i=n()(1.1).format("0.0").substring(1,2),r=n()(1e3).format("0,0").substring(1,2);"."==r&&(t=t.replace(r,""),e=e.replace(r,"")),"."!=i&&(t=t.replace(i,"."),e=e.replace(i,".")),a=parseFloat(t.replace(/[^0-9.-]/g,"")),s=parseFloat(e.replace(/[^0-9.-]/g,""))}return t&&e&&!isNaN(a)&&!isNaN(s)?a>s?1:a<s?-1:0:t.localeCompare(e)}}}},518:function(t,e,a){"use strict";a.d(e,"a",(function(){return i}));var s=a(104),n=a.n(s);function i(){return{date:function(t){return n()(t).format("ll")},time:function(t){return n()(t).format("H:mm")},long:function(t){return n()(t).format("LLL")},ago:function(t){return n()(t).fromNow()}}}},542:function(t,e,a){"use strict";a.r(e);var s=function(){var t=this.$createElement,e=this._self._c||t;return e("div",[e(this.template,this._b({tag:"component"},"component",this.$attrs,!1))],1)};s._withStripped=!0;var n=a(516),i=function(){var t=this,e=t.$createElement,a=t._self._c||e;return t.display?a("div",{key:t.$attrs.template,class:t.classes},[a("select",{attrs:{name:"assets"}}),t._v(" "),a("input",{directives:[{name:"model",rawName:"v-model",value:t.amountFrom,expression:"amountFrom"}],attrs:{type:"number"},domProps:{value:t.amountFrom},on:{input:function(e){e.target.composing||(t.amountFrom=e.target.value)}}}),t._v(" "),a("span",[t._v(" = ")]),t._v(" "),a("input",{directives:[{name:"model",rawName:"v-model",value:t.amountTo,expression:"amountTo"}],attrs:{disabled:""},domProps:{value:t.amountTo},on:{input:function(e){e.target.composing||(t.amountTo=e.target.value)}}}),t._v(" "),a("select",{attrs:{name:"currency"}}),t._v(" "),a("crypto-widget",{attrs:{type:"inline",template:"generic",color:"default",assets:t.asset,api:t.api,realtime:t.realtime,flash:"false"}})],1):t._e()};i._withStripped=!0;var r=a(510),o=a(517),l=a(58),u=a.n(l),c=(a(360),{data:function(){return{convertFrom:"BTC",convertTo:"USD",amountFrom:1}},computed:{asset:function(){return this.convertFrom+"~"+this.convertTo},amountTo:function(){return(new o.a).variableDecimal(Math.abs(parseFloat(this.amountFrom))*this.quoteValue(this.asset,"price"))}},methods:{onDataLoaded:function(){var t=this,e=u()(this.$el),a=this.$store.getters[this.code+"/staticData"].coins,s=this.$store.getters[this.code+"/staticData"].currencies,n=Object.keys(a).map((function(e){return{id:e,text:"["+e+"] "+a[e].name,selected:e==t.convertFrom}})),i=[{id:1,text:this.translate("cryptocurrencies"),children:Object.keys(a).map((function(t){return{id:t,text:"["+t+"] "+a[t].name}}))},{id:2,text:this.translate("currencies"),children:Object.keys(s).map((function(e){return{id:e,text:"["+e+"] "+s[e],selected:e==t.convertTo}}))}],r=e.find('select[name="assets"]'),o=e.find('select[name="currency"]'),l=function(e){t.convertFrom=u()(e.currentTarget).val()};r.select2({data:n,allowClear:!1,minimumInputLength:1}).on("select2:select",(function(t){var e=t.params.data.element,a=u()(e);a.detach(),r.append(a),r.trigger("change"),l(t)})).on("select2:unselect",(function(t){return l(t)})),o.select2({data:i,minimumInputLength:1}).on("select2:select",(function(e){t.convertTo=u()(e.currentTarget).val()}))}}}),p=a(1),m=Object(p.a)(c,void 0,void 0,!1,null,null,null);m.options.__file="assets/js/src/components/widgets/_mixins/widget-calculator.vue";var h=m.exports,d={mixins:[r.a,h]},f=Object(p.a)(d,i,[],!1,null,null,null);f.options.__file="assets/js/src/components/widgets/calculator/basic/template.vue";var v=f.exports,g=function(){var t=this,e=t.$createElement,a=t._self._c||e;return t.display?a("div",{key:t.$attrs.template,class:t.classes},[a("div",{class:t.code+"-flex"},[a("div",[a("div",[a("input",{directives:[{name:"model",rawName:"v-model",value:t.amountFrom,expression:"amountFrom"}],attrs:{type:"number"},domProps:{value:t.amountFrom},on:{input:function(e){e.target.composing||(t.amountFrom=e.target.value)}}})]),t._v(" "),t._m(0)]),t._v(" "),a("div",[a("div",[a("input",{directives:[{name:"model",rawName:"v-model",value:t.amountTo,expression:"amountTo"}],attrs:{disabled:""},domProps:{value:t.amountTo},on:{input:function(e){e.target.composing||(t.amountTo=e.target.value)}}})]),t._v(" "),t._m(1)])]),t._v(" "),a("crypto-widget",{attrs:{type:"inline",template:"generic",color:"default",assets:t.asset,api:t.api,realtime:t.realtime,flash:"false"}})],1):t._e()};g._withStripped=!0;var y={mixins:[r.a,h]},b=Object(p.a)(y,g,[function(){var t=this.$createElement,e=this._self._c||t;return e("div",[e("select",{attrs:{name:"assets"}})])},function(){var t=this.$createElement,e=this._self._c||t;return e("div",[e("select",{attrs:{name:"currency"}})])}],!1,null,null,null);b.options.__file="assets/js/src/components/widgets/calculator/basic2/template.vue";var _=b.exports,k=function(){var t=this,e=t.$createElement,a=t._self._c||e;return t.display?a("div",{key:t.$attrs.template,class:t.classes},[a("div",{class:t.code+"-flex"},[a("div",[a("div",[a("input",{directives:[{name:"model",rawName:"v-model",value:t.amountFrom,expression:"amountFrom"}],attrs:{type:"number"},domProps:{value:t.amountFrom},on:{input:function(e){e.target.composing||(t.amountFrom=e.target.value)}}})]),t._v(" "),t._m(0)]),t._v(" "),a("div",[a("div",[a("input",{directives:[{name:"model",rawName:"v-model",value:t.amountTo,expression:"amountTo"}],attrs:{disabled:""},domProps:{value:t.amountTo},on:{input:function(e){e.target.composing||(t.amountTo=e.target.value)}}})]),t._v(" "),t._m(1)])]),t._v(" "),a("crypto-widget",{attrs:{type:"inline",template:"generic",color:"default",assets:t.asset,api:t.api,realtime:t.realtime,flash:"false"}})],1):t._e()};k._withStripped=!0;var D={mixins:[r.a,h]},$=Object(p.a)(D,k,[function(){var t=this.$createElement,e=this._self._c||t;return e("div",[e("select",{attrs:{name:"assets"}})])},function(){var t=this.$createElement,e=this._self._c||t;return e("div",[e("select",{attrs:{name:"currency"}})])}],!1,null,null,null);$.options.__file="assets/js/src/components/widgets/calculator/color-border/template.vue";var w=$.exports,T={mixins:[n.a],components:{Basic:v,Basic2:_,ColorBorder:w}},x=Object(p.a)(T,s,[],!1,null,null,null);x.options.__file="assets/js/src/components/widgets/calculator/calculator.vue";e.default=x.exports}}]);