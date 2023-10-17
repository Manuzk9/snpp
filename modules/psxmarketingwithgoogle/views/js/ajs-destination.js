"use strict";(self.webpackChunkmarketing_with_google_verification_tag=self.webpackChunkmarketing_with_google_verification_tag||[]).push([[464],{6486:(t,n,i)=>{function e(t,n){var i,e;return"boolean"==typeof(null==n?void 0:n.enabled)?n.enabled:null===(e=null===(i=null==t?void 0:t.__default)||void 0===i?void 0:i.enabled)||void 0===e||e}i.d(n,{n:()=>e})},74:(t,n,i)=>{i.r(n),i.d(n,{LegacyDestination:()=>k,ajsDestinations:()=>z});var e=i(7768),o=i(3825),r=i(8723),a=i(7589),s=i(5374),u=i(3978),c=i(3932),l=i(6486),d=i(5860),h=i(3113),v=i(4466),f=i(3065),p=i(4862),g=i(3427),m=i(6505);function y(t){return t.toLowerCase().replace(".","").replace(/\s+/g,"-")}function w(t,n){return void 0===n&&(n=!1),n?btoa(t).replace(/=/g,""):void 0}function b(t,n,i,o,r,a){return(0,e.mG)(this,void 0,void 0,(function(){var s,u,c,l,d,h,v,f;return(0,e.Jh)(this,(function(p){switch(p.label){case 0:s=y(i),u=w(s,a),c=(0,g.Kg)(),l="".concat(c,"/integrations/").concat(null!=u?u:s,"/").concat(o,"/").concat(null!=u?u:s,".dynamic.js.gz"),p.label=1;case 1:return p.trys.push([1,3,,4]),[4,(0,m.v)(l)];case 2:return p.sent(),function(t,n,i){var o,r;try{var a=(null!==(r=null===(o=null===window||void 0===window?void 0:window.performance)||void 0===o?void 0:o.getEntriesByName(t,"resource"))&&void 0!==r?r:[])[0];a&&n.stats.gauge("legacy_destination_time",Math.round(a.duration),(0,e.ev)([i],a.duration<100?["cached"]:[],!0))}catch(t){}}(l,t,i),[3,4];case 3:throw d=p.sent(),t.stats.gauge("legacy_destination_time",-1,["plugin:".concat(i),"failed"]),d;case 4:return h=window["".concat(s,"Deps")],[4,Promise.all(h.map((function(t){return(0,m.v)(c+t+".gz")})))];case 5:return p.sent(),window["".concat(s,"Loader")](),(v=window["".concat(s,"Integration")]).Integration&&(v({user:function(){return n.user()},addIntegration:function(){}}),v=v.Integration),(f=new v(r)).analytics=n,[2,f]}}))}))}function _(t,n){return(0,e.mG)(this,void 0,void 0,(function(){var i,o=this;return(0,e.Jh)(this,(function(s){switch(s.label){case 0:return i=[],(0,r.s)()?[2,n]:[4,(0,h.x)((function(){return n.length>0&&(0,r.G)()}),(function(){return(0,e.mG)(o,void 0,void 0,(function(){var o;return(0,e.Jh)(this,(function(e){switch(e.label){case 0:return(o=n.pop())?[4,(0,u.a)(o,t)]:[2];case 1:return e.sent()instanceof a._||i.push(o),[2]}}))}))}))];case 1:return s.sent(),i.map((function(t){return n.pushWithBackoff(t)})),[2,n]}}))}))}var k=function(){function t(t,n,i,o){void 0===i&&(i={}),this.options={},this.type="destination",this.middleware=[],this._ready=!1,this._initialized=!1,this.flushing=!1,this.name=t,this.version=n,this.settings=(0,e.pi)({},i),this.settings.type&&"browser"===this.settings.type&&delete this.settings.type,this.options=o,this.buffer=o.disableClientPersistence?new v.Z(4,[]):new f.$(4,"dest-".concat(t)),this.scheduleFlush()}return t.prototype.isLoaded=function(){return this._ready},t.prototype.ready=function(){var t;return null!==(t=this.onReady)&&void 0!==t?t:Promise.resolve()},t.prototype.load=function(t,n){return(0,e.mG)(this,void 0,void 0,(function(){var i,o=this;return(0,e.Jh)(this,(function(e){switch(e.label){case 0:return this._ready||void 0!==this.onReady?[2]:(i=this,[4,b(t,n,this.name,this.version,this.settings,this.options.obfuscate)]);case 1:i.integration=e.sent(),this.onReady=new Promise((function(t){o.integration.once("ready",(function(){o._ready=!0,t(!0)}))})),this.onInitialize=new Promise((function(t){o.integration.on("initialize",(function(){o._initialized=!0,t(!0)}))}));try{t.stats.increment("analytics_js.integration.invoke",1,["method:initialize","integration_name:".concat(this.name)]),this.integration.initialize()}catch(n){throw t.stats.increment("analytics_js.integration.invoke.error",1,["method:initialize","integration_name:".concat(this.name)]),n}return[2]}}))}))},t.prototype.unload=function(t,n){return function(t,n,i){return(0,e.mG)(this,void 0,void 0,(function(){var o,r,a,s;return(0,e.Jh)(this,(function(e){return o=(0,g.Kg)(),r=y(t),a=w(t,i),s="".concat(o,"/integrations/").concat(null!=a?a:r,"/").concat(n,"/").concat(null!=a?a:r,".dynamic.js.gz"),[2,(0,m.t)(s)]}))}))}(this.name,this.version,this.options.obfuscate)},t.prototype.addMiddleware=function(){for(var t,n=[],i=0;i<arguments.length;i++)n[i]=arguments[i];this.middleware=(t=this.middleware).concat.apply(t,n)},t.prototype.shouldBuffer=function(t){return"page"!==t.event.type&&((0,r.s)()||!1===this._ready||!1===this._initialized)},t.prototype.send=function(t,n,i){var o,r;return(0,e.mG)(this,void 0,void 0,(function(){var s,u,d,h,v,f;return(0,e.Jh)(this,(function(g){switch(g.label){case 0:if(this.shouldBuffer(t))return this.buffer.push(t),this.scheduleFlush(),[2,t];if(s=null===(r=null===(o=this.options)||void 0===o?void 0:o.plan)||void 0===r?void 0:r.track,u=t.event.event,s&&u&&"Segment.io"!==this.name){if(d=s[u],!(0,l.n)(s,d))return t.updateEvent("integrations",(0,e.pi)((0,e.pi)({},t.event.integrations),{All:!1,"Segment.io":!0})),t.cancel(new a.Y({retry:!1,reason:"Event ".concat(u," disabled for integration ").concat(this.name," in tracking plan"),type:"Dropped by plan"})),[2,t];if(t.updateEvent("integrations",(0,e.pi)((0,e.pi)({},t.event.integrations),null==d?void 0:d.integrations)),(null==d?void 0:d.enabled)&&!1===(null==d?void 0:d.integrations[this.name]))return t.cancel(new a.Y({retry:!1,reason:"Event ".concat(u," disabled for integration ").concat(this.name," in tracking plan"),type:"Dropped by plan"})),[2,t]}return[4,(0,p.applyDestinationMiddleware)(this.name,t.event,this.middleware)];case 1:if(null===(h=g.sent()))return[2,t];v=new n(h,{}),t.stats.increment("analytics_js.integration.invoke",1,["method:".concat(i),"integration_name:".concat(this.name)]),g.label=2;case 2:return g.trys.push([2,5,,6]),this.integration?[4,(0,c.O)(this.integration.invoke.call(this.integration,i,v))]:[3,4];case 3:g.sent(),g.label=4;case 4:return[3,6];case 5:throw f=g.sent(),t.stats.increment("analytics_js.integration.invoke.error",1,["method:".concat(i),"integration_name:".concat(this.name)]),f;case 6:return[2,t]}}))}))},t.prototype.track=function(t){return(0,e.mG)(this,void 0,void 0,(function(){return(0,e.Jh)(this,(function(n){return[2,this.send(t,o.Track,"track")]}))}))},t.prototype.page=function(t){var n;return(0,e.mG)(this,void 0,void 0,(function(){var i=this;return(0,e.Jh)(this,(function(e){return(null===(n=this.integration)||void 0===n?void 0:n._assumesPageview)&&!this._initialized&&this.integration.initialize(),[2,this.onInitialize.then((function(){return i.send(t,o.Page,"page")}))]}))}))},t.prototype.identify=function(t){return(0,e.mG)(this,void 0,void 0,(function(){return(0,e.Jh)(this,(function(n){return[2,this.send(t,o.Identify,"identify")]}))}))},t.prototype.alias=function(t){return(0,e.mG)(this,void 0,void 0,(function(){return(0,e.Jh)(this,(function(n){return[2,this.send(t,o.Alias,"alias")]}))}))},t.prototype.group=function(t){return(0,e.mG)(this,void 0,void 0,(function(){return(0,e.Jh)(this,(function(n){return[2,this.send(t,o.Group,"group")]}))}))},t.prototype.scheduleFlush=function(){var t=this;this.flushing||setTimeout((function(){return(0,e.mG)(t,void 0,void 0,(function(){var t;return(0,e.Jh)(this,(function(n){switch(n.label){case 0:return this.flushing=!0,t=this,[4,_(this,this.buffer)];case 1:return t.buffer=n.sent(),this.flushing=!1,this.buffer.todo>0&&this.scheduleFlush(),[2]}}))}))}),5e3*Math.random())},t}();function z(t,n,i,e){var o,r;if(void 0===n&&(n={}),void 0===i&&(i={}),(0,s.s)())return[];t.plan&&((i=null!=i?i:{}).plan=t.plan);var a=null!==(r=null===(o=t.middlewareSettings)||void 0===o?void 0:o.routingRules)&&void 0!==r?r:[],u=(0,d.o)(t,null!=i?i:{});return Object.entries(t.integrations).map((function(t){var o,r=t[0],s=t[1];if(!r.startsWith("Segment")){var c=!1===n.All&&void 0===n[r];if(!1!==n[r]&&!c){var l=s.type,d=s.bundlingStatus,h=s.versionSettings;if(("unbundled"!==d&&("browser"===l||(null===(o=null==h?void 0:h.componentTypes)||void 0===o?void 0:o.includes("browser")))||"Segment.io"===r)&&"Iterable"!==r){var v=function(t){var n,i,e,o;return null!==(o=null!==(i=null===(n=t.versionSettings)||void 0===n?void 0:n.override)&&void 0!==i?i:null===(e=t.versionSettings)||void 0===e?void 0:e.version)&&void 0!==o?o:"latest"}(s),f=new k(r,v,u[r],i);return a.filter((function(t){return t.destinationName===r})).length>0&&e&&f.addMiddleware(e),f}}}})).filter((function(t){return void 0!==t}))}}}]);