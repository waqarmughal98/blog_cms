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
(window.webpackJsonp158=window.webpackJsonp158||[]).push([[25],{520:function(t,e,a){"use strict";var s=a(58),n=a.n(s),i=(a(523),{data:function(){return{dataTable:null}},methods:{onDataLoaded:function(){this.createDataTable()},createDataTable:function(){var t=n()(this.$el).find("table."+this.code+"-data-table");this.dataTable&&this.dataTable.destroy();var e=this.fields.indexOf(this.$attrs.sort_field);this.dataTable=t.DataTable({language:{search:"",searchPlaceholder:this.translate("search2"),zeroRecords:this.translate("search_not_found"),paginate:{next:'<i class="fas fa-angle-right"></i>',previous:'<i class="fas fa-angle-left"></i>'}},info:!1,searching:this.checkBoolean(this.$attrs.search,!1),lengthChange:!1,paging:this.checkBoolean(this.$attrs.pagination),pageLength:Math.max(1,parseInt(this.$attrs.rows_per_page,10)),pagingType:"simple_numbers",orderClasses:!1,stripeClasses:[this.code+"-row-odd",this.code+"-row-even"],order:e>-1?[[e,this.$attrs.sort_direction]]:[[0,"asc"]]})}},created:function(){var t=this;["pagination","rows_per_page","sort_field","sort_direction","search"].forEach((function(e){t.$watch("$attrs."+e,(function(){t.createDataTable()}))}))}}),r=a(1),o=Object(r.a)(i,void 0,void 0,!1,null,null,null);o.options.__file="assets/js/src/components/widgets/_mixins/widget-datatable.vue";e.a=o.exports},556:function(t,e,a){"use strict";a.r(e);var s=function(){var t=this.$createElement;return(this._self._c||t)("generic",this._b({key:this.key,tag:"component"},"component",this.$attrs,!1))};s._withStripped=!0;var n=a(516),i=function(){var t=this,e=t.$createElement,a=t._self._c||e;return t.display?a("div",{class:t.classes},[a("table",{class:t.code+"-data-table"},[a("thead",{directives:[{name:"show",rawName:"v-show",value:t.displayHeader,expression:"displayHeader"}]},[a("tr",t._l(t.fields,(function(e){return a("th",{class:t.code+"-heading-"+e.replace(/_/g,"-")},[t._v(t._s(t.translate(e)))])})),0)]),t._v(" "),a("tbody",t._l(t.marketData(t.assets[0]),(function(e,s){return t.marketData(t.assets[0])?a("tr",t._l(t.fields,(function(n){return a("td",{class:t.code+"-cell-"+n.replace(/_/g,"-"),attrs:{"data-title":t.translate(n),"data-sort":t.sortValue(e.asset,n,s)}},[["price","open_24h","high_24h","low_24h","volume_24h_to","last_volume_to"].indexOf(n)>-1?[a("sign",{attrs:{symbol:t.symbolTo(e.asset)}})]:t._e(),t._v(" "),"name"==n?[a("static-data",{attrs:{symbol:t.symbolFrom(e.asset),attribute:"name"}})]:["change_abs_24h","change_pct_24h"].indexOf(n)>-1?[a("quote-indicator",{staticClass:"fas",attrs:{asset:e.asset,field:n,"down-class":"fa-arrow-down","up-class":"fa-arrow-up"}}),t._v(" "),a("quote",{attrs:{asset:e.asset,i:s,field:n,"color-indicator":"1"}})]:[a("quote",{attrs:{asset:e.asset,i:s,field:n}})]],2)})),0):t._e()})),0)])]):t._e()};i._withStripped=!0;var r=a(510),o=a(520),l=a(511),c=a(512),d=a(513),h=a(515),u=a(514),p={mixins:[r.a,o.a],data:function(){return{selectedAsset:null,selectedPeriod:null}},computed:{displayHeader:function(){return this.checkBoolean(this.$attrs.display_header,!0)}},components:{Quote:l.a,StaticData:c.a,Logo:d.a,QuoteIndicator:h.a,Sign:u.a}},_=a(1),f=Object(_.a)(p,i,[],!1,null,null,null);f.options.__file="assets/js/src/components/widgets/table-exchanges-quotes/_generic/template.vue";var g=f.exports,m={mixins:[n.a],computed:{key:function(){return this.$attrs.assets[0]+"-"+this.$attrs.fields.length}},components:{Generic:g}},b=Object(_.a)(m,s,[],!1,null,null,null);b.options.__file="assets/js/src/components/widgets/table-exchanges-quotes/table-exchanges-quotes.vue";e.default=b.exports}}]);