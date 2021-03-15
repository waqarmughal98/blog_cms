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
(window.webpackJsonp158=window.webpackJsonp158||[]).push([[32],{510:function(t,e,a){"use strict";var s=a(517),i=a(518);function r(t,e){return function(t){if(Array.isArray(t))return t}(t)||function(t,e){if("undefined"==typeof Symbol||!(Symbol.iterator in Object(t)))return;var a=[],s=!0,i=!1,r=void 0;try{for(var n,o=t[Symbol.iterator]();!(s=(n=o.next()).done)&&(a.push(n.value),!e||a.length!==e);s=!0);}catch(t){i=!0,r=t}finally{try{s||null==o.return||o.return()}finally{if(i)throw r}}return a}(t,e)||function(t,e){if(!t)return;if("string"==typeof t)return n(t,e);var a=Object.prototype.toString.call(t).slice(8,-1);"Object"===a&&t.constructor&&(a=t.constructor.name);if("Map"===a||"Set"===a)return Array.from(t);if("Arguments"===a||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(a))return n(t,e)}(t,e)||function(){throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}function n(t,e){(null==e||e>t.length)&&(e=t.length);for(var a=0,s=new Array(e);a<e;a++)s[a]=t[a];return s}var o={data:function(){return{display:!1}},computed:{config:function(){return this.$store.getters[this.code+"/config"]},text:function(){return this.$store.getters[this.code+"/text"]},globalStaticData:function(){return this.$store.getters[this.code+"/staticData"]},globalMarketData:function(){return this.$store.getters[this.code+"/marketData"]},code:function(){return this.$root.code},type:function(){return this.$attrs.type},api:function(){return this.$attrs.api},realtime:function(){return this.checkBoolean(this.$attrs.realtime)},assets:function(){var t=[];if(this.config.assetRecognitionRegexp){var e=new RegExp(this.config.assetRecognitionRegexp,"i"),a=location.href.replace(this.config.websiteUrl+"/","").match(e);a&&void 0!==a[1]&&void 0!==a[2]&&(t=[a[1].toUpperCase()+"~"+a[2].toUpperCase()])}return 0==t.length&&void 0!==this.$attrs.assets&&(t=this.$attrs.assets.toString().split(",")),t},from:function(){return this.assets.length?this.assets.map((function(t){return t.split("~")[0]})):[]},to:function(){return this.assets.length?this.assets.map((function(t){return t.split("~")[1]})):[]},assetsSubscription:function(){var t={type:this.marketDataType,subType:this.marketDataSubType,assets:this.assets,api:this.api,realtime:this.realtime};return"order-book"==this.marketDataType?t.exchange=this.$attrs.exchange:"rankings"==this.marketDataType&&"table-rankings"==this.type?(t.currency=this.$attrs.currency,t.page=1,t.limit=parseInt(this.$attrs.rows_per_page,10)):"rankings"==this.marketDataType&&"treemap"==this.type&&(t.page=1,t.limit=2e3),t},fields:function(){return this.$attrs.fields?this.$attrs.fields.split(","):[]},animation:function(){return this.$attrs.animation},classes:function(){return[this.code+"-"+this.$attrs.type,this.code+"-"+this.$attrs.template,this.code+"-"+this.$attrs.color]},classesWithIndicator:function(){var t=this.classes,e=this.quoteValue(this.assets[0],"change_abs_24h"),a=e<0?this.code+"-down":e>0?this.code+"-up":"";return a&&-1==t.indexOf(a)&&t.push(a),t},marketDataLoaded:function(){var t=this,e=!1;if("table-history"==this.type||"chart"==this.type){var a=this.marketData(this.assets[0]);e=!!(a&&a.length>1&&a[0].period==this.$attrs.period)}else if("table-trades"==this.type||"table-exchanges-quotes"==this.type)e=!!this.marketData(this.assets[0]);else if(["table-rankings","table-exchanges","table-wallets","table-mining-pools","order-book","treemap","ticker-news","typed-news","news-block"].indexOf(this.type)>-1)e=!!this.marketData();else if("button-link"==this.type&&"rankings"==this.marketDataType)e=!0;else if("info"==this.type)e=!0;else if("geomap"==this.type){var s=0;this.assets.forEach((function(e){s+=t.quoteValue(e,"asset")==e?1:0})),e=s>100}else{s=0;this.assets.forEach((function(e){s+=t.quoteValue(e,"asset")==e?1:0})),e=s==this.assets.length}return e},isChildWidget:function(){return void 0!==this.$parent.$parent.$parent&&void 0!==this.$parent.$parent.$parent.api},marketDataType:function(){return"table-history"==this.type||"chart"==this.type?"history":"table-trades"==this.type?"trades":"table-rankings"==this.type||"treemap"==this.type?"rankings":"table-exchanges"==this.type?"exchanges":"table-exchanges-quotes"==this.type?"exchanges-quotes":"table-wallets"==this.type?"wallets":"table-mining-pools"==this.type?"mining-pools":"order-book"==this.type?"order-book":"ticker-news"==this.type||"typed-news"==this.type||"news-block"==this.type?"news":"button-link"==this.type&&this.isChildWidget?this.$parent.$parent.$parent.marketDataType:"quotes"},marketDataSubType:function(){return"history"==this.marketDataType?this.$attrs.period:"live"}},methods:{checkBoolean:function(t){var e=arguments.length>1&&void 0!==arguments[1]&&arguments[1];return void 0===t&&e||"boolean"==typeof t&&t||"string"==typeof t&&"true"==t},symbolFrom:function(t){var e=r(t.split("~"),2),a=e[0];e[1];return a},symbolTo:function(t){var e=r(t.split("~"),2);e[0];return e[1]},staticData:function(t){var e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:null;return e?this.globalStaticData[t][e]||{}:this.globalStaticData[t]},staticDataValue:function(t,e,a){var s=this.staticData(t,e);return s&&void 0!==s[a]?s[a]:""},coinValue:function(t,e){return this.staticDataValue("coins",t,e)},marketData:function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:null,e=null;return void 0!==this.globalMarketData[this.api]&&void 0!==this.globalMarketData[this.api][this.marketDataType]&&void 0!==this.globalMarketData[this.api][this.marketDataType][this.marketDataSubType]&&(e=null!==t?this.globalMarketData[this.api][this.marketDataType][this.marketDataSubType][t]||null:this.globalMarketData[this.api][this.marketDataType][this.marketDataSubType]),e},quoteValue:function(t,e){var a=arguments.length>2&&void 0!==arguments[2]?arguments[2]:null,s=this.marketData(t);return s?null!==a&&void 0!==s[a]?s[a][e]||"":s[e]:""},quoteValueFormatted:function(t,e){var a=arguments.length>2&&void 0!==arguments[2]?arguments[2]:null,r=new s.a,n=new i.a,o=this.quoteValue(t,e,a);return["price","change_abs","change_abs_24h","open","high","low","close","open_24h","high_24h","low_24h","last_volume_from","volume_from","vwap"].indexOf(e)>-1?o=r.variableDecimal(o):["change_pct","change_pct_24h","total_volume_pct"].indexOf(e)>-1?o=r.percentage(o):["supply","market_cap","volume_day_to","volume_24h_to","volume_to","total_volume_24h_to"].indexOf(e)>-1?o=r.bigNumber(o):["last_volume_to","volume_day_from","volume_24h_from","volume_from","total_volume_24h_from"].indexOf(e)>-1?o=r.decimal(o):"last_update"==e?o=n.long(1e3*o):"date_time"==e?o=n.date(1e3*o):"last_update_ago"==e&&(o=n.ago(1e3*this.quoteValue(t,"last_update",a))),o},sortValue:function(t,e){var a=arguments.length>2&&void 0!==arguments[2]?arguments[2]:null;return["name","logo_name","logo_name_link"].indexOf(e)>-1?this.coinValue(this.symbolFrom(t),"name"):e.match(/^portfolio_/)?this.portfolioValue(t,a,e):"last_update_ago"==e?this.quoteValue(t,"last_update",a):this.quoteValue(t,e,a)},subscribeMarketData:function(t){this.$store.dispatch(this.code+"/subscribeMarketData",t||this.assetsSubscription)},unsubscribeMarketData:function(t){this.$store.dispatch(this.code+"/unsubscribeMarketData",{type:this.marketDataType,subType:this.marketDataSubType,assets:t,api:this.api})},disconnectDataSourcesAndClearMarketData:function(){this.$store.dispatch(this.code+"/disconnectDataSourcesAndClearMarketData")},translate:function(t){return void 0!==this.text[t]?this.text[t]:t}},created:function(){var t=this;this.$on("data-loaded",(function(){t.display=!0,t.$nextTick((function(){"function"==typeof t.onDataLoaded&&t.onDataLoaded()}))})),this.marketDataLoaded?this.$emit("data-loaded",{widgetType:this.type,eventType:"WIDGET_INIT_DATA_AVAILABLE"}):this.subscribeMarketData(),this.$watch("marketDataLoaded",(function(e,a){!a&&e&&t.$emit("data-loaded",{widgetType:t.type,eventType:"WIDGET_INIT_DATA_LOADED"})})),this.$watch("$attrs.assets",(function(e,a){t.marketDataLoaded?t.$emit("data-loaded",{widgetType:t.type,eventType:"ASSETS_CHANGE_DATA_AVAILABLE"}):(t.display=!1,!t.api||t.isChildWidget&&"button-link"==t.type||(t.unsubscribeMarketData(a.split(",")),t.subscribeMarketData()))})),this.$watch("$attrs.realtime",(function(e,a){a&&t.unsubscribeMarketData(t.assets),t.subscribeMarketData()})),this.$watch("$attrs.currency",(function(){"table-rankings"==t.type&&t.subscribeMarketData()})),this.$watch("$attrs.rows_per_page",(function(){"table-rankings"==t.type&&(t.disconnectDataSourcesAndClearMarketData(),t.subscribeMarketData())}))}},l=a(1),u=Object(l.a)(o,void 0,void 0,!1,null,null,null);u.options.__file="assets/js/src/components/widgets/_mixins/template.vue";e.a=u.exports},512:function(t,e,a){"use strict";var s=function(){var t=this.$createElement;return(this._self._c||t)("span",{class:this.classes},[this._v(this._s(this.value))])};s._withStripped=!0;var i={props:["symbol","attribute"],computed:{classes:function(){return this.$parent.code+"-field-"+this.attribute.replace(/_/g,"-")},value:function(){return this.$parent.staticDataValue("coins",this.symbol,this.attribute)}}},r=a(1),n=Object(r.a)(i,s,[],!1,null,null,null);n.options.__file="assets/js/src/components/widgets/_parts/static-data.vue";e.a=n.exports},513:function(t,e,a){"use strict";var s=function(){var t=this.$createElement,e=this._self._c||t;return this.logoUrl?e("span",{class:this.classes},[e("img",{attrs:{src:this.logoUrl,alt:this.name,title:this.name}})]):this._e()};s._withStripped=!0;var i={props:["symbol"],computed:{classes:function(){return this.$parent.code+"-field-logo"},name:function(){return this.$parent.coinValue(this.symbol,"name")},logoUrl:function(){var t=this.$parent.coinValue(this.symbol,"logo");return this.$parent.config.pluginUrl+(t?"/assets/images/coins/thumb64/"+t:"/assets/images/asset.png")}}},r=a(1),n=Object(r.a)(i,s,[],!1,null,null,null);n.options.__file="assets/js/src/components/widgets/_parts/logo.vue";e.a=n.exports},514:function(t,e,a){"use strict";var s=function(){var t=this.$createElement;return(this._self._c||t)("span",{class:this.classes},[this._v(this._s(this.sign))])};s._withStripped=!0;var i=a(519),r={props:["symbol"],computed:{classes:function(){return[this.$parent.code+"-sign",this.$parent.code+"-sign-"+this.symbol.toLowerCase()]},sign:function(){return(new i.a).sign(this.symbol)}}},n=a(1),o=Object(n.a)(r,s,[],!1,null,null,null);o.options.__file="assets/js/src/components/widgets/_parts/sign.vue";e.a=o.exports},516:function(t,e,a){"use strict";var s={computed:{template:function(){return this.$attrs.template}}},i=a(1),r=Object(i.a)(s,void 0,void 0,!1,null,null,null);r.options.__file="assets/js/src/components/widgets/_mixins/widget-type.vue";e.a=r.exports},517:function(t,e,a){"use strict";a.d(e,"a",(function(){return r}));var s=a(74),i=a.n(s);function r(){var t=function(t){var e=i()(t).format("0,0.00");return"NaN"!==e?e:parseFloat(t).toFixed(2)};return{integer:function(t){return i()(t).format("0,0")},decimal:t,percentage:function(e){return t(e)+"%"},variableDecimal:function(t){var e,a=i()(t),s=Math.abs(a.value());s>=10?e="0,0.00":0==s?e="0.00":.1<=s&&s<10?e="0.0000":s<.1&&(e="0.00000000");var r=a.format(e);return"NaN"!==r?r:parseFloat(t).toFixed(8)},bigNumber:function(t){return i()(t).format("0,0.00a").toUpperCase()},compareNumbers:function(t,e){var a,s;if("number"==typeof t&&"number"==typeof e)a=t,s=e;else{var r=i()(1.1).format("0.0").substring(1,2),n=i()(1e3).format("0,0").substring(1,2);"."==n&&(t=t.replace(n,""),e=e.replace(n,"")),"."!=r&&(t=t.replace(r,"."),e=e.replace(r,".")),a=parseFloat(t.replace(/[^0-9.-]/g,"")),s=parseFloat(e.replace(/[^0-9.-]/g,""))}return t&&e&&!isNaN(a)&&!isNaN(s)?a>s?1:a<s?-1:0:t.localeCompare(e)}}}},518:function(t,e,a){"use strict";a.d(e,"a",(function(){return r}));var s=a(104),i=a.n(s);function r(){return{date:function(t){return i()(t).format("ll")},time:function(t){return i()(t).format("H:mm")},long:function(t){return i()(t).format("LLL")},ago:function(t){return i()(t).fromNow()}}}},519:function(t,e,a){"use strict";function s(){var t={USD:"$",AUD:"$",BRL:"R$",CAD:"$",CNY:"¥",EUR:"€",EGP:"£",GBP:"£",INR:"₹",ILS:"₪",IDR:"Rp",JPY:"¥",KPW:"₩",KRW:"₩",PLN:"zł",RUB:"₽",UAH:"₴",QAR:"﷼",BTC:"Ƀ",LTC:"Ł",DAO:"Ð",ETH:"Ξ",GOLD:"Gold g"};return{sign:function(e){return t[e]||e}}}a.d(e,"a",(function(){return s}))},545:function(t,e,a){"use strict";a.r(e);var s=function(){var t=this.$createElement;return(this._self._c||t)("generic",this._b({tag:"component"},"component",this.$attrs,!1))};s._withStripped=!0;var i=a(516),r=function(){var t=this,e=t.$createElement,a=t._self._c||e;return t.display?a("div",{class:t.classes},[a("table",[a("thead",[a("tr",t._l(t.fields,(function(e){return a("th",{class:t.code+"-heading-"+e.replace(/_/g,"-")},[t._v(t._s(t.translate(e)))])})),0)]),t._v(" "),t.marketData(t.assets[0])?a("tbody",t._l(t.marketData(t.assets[0]).slice(0,t.$attrs.limit),(function(e){return a("tr",t._l(t.fields,(function(s){return a("td",{class:t.code+"-cell-"+s.replace(/_/g,"-"),attrs:{"data-title":t.translate(s)}},[["price","total"].indexOf(s)>-1?[a("sign",{attrs:{symbol:t.symbolTo(t.assets[0])}})]:t._e(),t._v(" "),"name"==s?[a("static-data",{attrs:{symbol:t.symbolFrom(t.assets[0]),attribute:"name"}})]:"type"==s?[a("trade-indicator",{staticClass:"fas",attrs:{trade:e,"down-class":"fa-arrow-down","up-class":"fa-arrow-up"}}),t._v(" "+t._s(t.translate(e[s]))+"\n                    ")]:[a("trade-field",{attrs:{trade:e,field:s}})]],2)})),0)})),0):t._e()])]):t._e()};r._withStripped=!0;var n=a(510),o=function(){var t=this.$createElement;return(this._self._c||t)("span",{class:this.classes},[this._v(this._s(this.tradeValueFormatted(this.trade,this.field)))])};o._withStripped=!0;var l=a(517),u=a(518),c={props:["trade","field"],computed:{classes:function(){return[this.$parent.code+"-trade-"+this.field.replace(/_/g,"-")]}},methods:{tradeValueFormatted:function(t,e){var a=new l.a,s=new u.a,i=t[e]||"";return["price","quantity"].indexOf(e)>-1?i=a.variableDecimal(i):["total"].indexOf(e)>-1?i=a.decimal(i):["trade_date"].indexOf(e)>-1?i=s.long(1e3*i):["trade_date_ago"].indexOf(e)>-1&&(i=s.ago(1e3*t.trade_date)),i}}},h=a(1),p=Object(h.a)(c,o,[],!1,null,null,null);p.options.__file="assets/js/src/components/widgets/_parts/trade-field.vue";var d=p.exports,f=a(512),m=a(513),g=function(){var t=this.$createElement,e=this._self._c||t;return this.classes?e("i",{class:this.classes}):this._e()};g._withStripped=!0;var _={props:["trade","downClass","upClass"],computed:{classes:function(){return"sell"==this.trade.type?[this.downClass,this.$parent.code+"-down"]:"buy"==this.trade.type?[this.upClass,this.$parent.code+"-up"]:""}}},b=Object(h.a)(_,g,[],!1,null,null,null);b.options.__file="assets/js/src/components/widgets/_parts/trade-indicator.vue";var y=b.exports,v=a(514),D={mixins:[n.a],components:{TradeField:d,StaticData:f.a,Logo:m.a,TradeIndicator:y,Sign:v.a}},k=Object(h.a)(D,r,[],!1,null,null,null);k.options.__file="assets/js/src/components/widgets/table-trades/_generic/template.vue";var $=k.exports,w={mixins:[i.a],components:{Generic:$}},x=Object(h.a)(w,s,[],!1,null,null,null);x.options.__file="assets/js/src/components/widgets/table-trades/table-trades.vue";e.default=x.exports}}]);