(self.webpackChunkaffiches=self.webpackChunkaffiches||[]).push([[480],{2323:(e,t,n)=>{"use strict";var r,a,s,l,c=n(7294),o=n(3935),i=(n(7042),n(3371),n(3321),n(9753),n(2526),n(1817),n(1539),n(2165),n(6992),n(8783),n(3948),n(1038),n(9826),n(1058),n(1249),n(8309),n(9669)),m=n.n(i),u=n(9163),d=n(381),f=n.n(d);n(7327),n(3710),n(3843),n(2564);function j(e,t){return function(e){if(Array.isArray(e))return e}(e)||function(e,t){var n=null==e?null:"undefined"!=typeof Symbol&&e[Symbol.iterator]||e["@@iterator"];if(null==n)return;var r,a,s=[],l=!0,c=!1;try{for(n=n.call(e);!(l=(r=n.next()).done)&&(s.push(r.value),!t||s.length!==t);l=!0);}catch(e){c=!0,a=e}finally{try{l||null==n.return||n.return()}finally{if(c)throw a}}return s}(e,t)||function(e,t){if(!e)return;if("string"==typeof e)return p(e,t);var n=Object.prototype.toString.call(e).slice(8,-1);"Object"===n&&e.constructor&&(n=e.constructor.name);if("Map"===n||"Set"===n)return Array.from(e);if("Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n))return p(e,t)}(e,t)||function(){throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}function p(e,t){(null==t||t>e.length)&&(t=e.length);for(var n=0,r=new Array(t);n<t;n++)r[n]=e[n];return r}function b(e,t){return t||(t=e.slice(0)),Object.freeze(Object.defineProperties(e,{raw:{value:Object.freeze(t)}}))}f().locale("fr-FR");var h,g,E,y,v=u.ZP.div(r||(r=b(["\n  --bs-gutter-x: 0px;\n"]))),w=u.ZP.div(a||(a=b(["\n  height: calc(100vh - 93px);\n  background-color: #198754;\n"]))),N=u.ZP.div(s||(s=b(["\n  height: calc(100vh - 90px);\n  background-color: #dc3545;\n"]))),x=u.ZP.div(l||(l=b(['\n  padding: 20px;\n  &:not(:last-child) {\n    border-bottom: 1px solid #eee;\n  }\n  &.current:before {\n    content: "\f231";\n    font-size: 2.5rem;\n    color: #dc3545;\n    font-family: bootstrap-icons !important;\n    position: absolute;\n    margin-left: -39px;\n    margin-top: 23px;\n  }\n'],['\n  padding: 20px;\n  &:not(:last-child) {\n    border-bottom: 1px solid #eee;\n  }\n  &.current:before {\n    content: "\\f231";\n    font-size: 2.5rem;\n    color: #dc3545;\n    font-family: bootstrap-icons !important;\n    position: absolute;\n    margin-left: -39px;\n    margin-top: 23px;\n  }\n'])));function k(e){var t=e.tabletteUID,n=e.currentTime,r=e.setCurrentTime,a=j((0,c.useState)(null),2),s=a[0],l=a[1],o=j((0,c.useState)(!0),2),i=o[0],u=o[1],d=j((0,c.useState)([]),2),p=d[0],b=d[1],h=j((0,c.useState)(null),2),g=h[0],E=h[1],y=f()().format("YYYY-MM-DD"),k=(0,c.useMemo)((function(){return p.filter((function(e){return new Date(y+"T"+e.end+":00")>new Date}))}),[p,y]),z=(0,c.useMemo)((function(){return k.filter((function(e){return Date.now()>=new Date(y+"T"+e.start+":00").getTime()}))[0]||[]}),[k]),S=(0,c.useMemo)((function(){return z.id?Math.round((new Date(y+"T"+z.end+":00").getTime()-Date.now())/1e3/60):0}),[z]),I=(0,c.useMemo)((function(){return z.id?100-100*S/z.duration:0}),[z,n,S]),M=function(e){return e/100*360},_=function(e){var t=Math.floor(e/60),n=e%60,r="";return t>0&&(r+="".concat(t,'<span className="small">h</span>')),t>0&&n>0&&(r+=":"),n>0&&(r+="".concat(n,'<span className="small">m</span>')),r};return(0,c.useEffect)((function(){m().get("/salles/".concat(t,"/entries")).then((function(e){u(!1),"entries"in e.data?(b(e.data.entries),null!==g&&g!==e.data.buildVersion?window.location.reload():E(e.data.buildVersion)):setTimeout((function(){return l(Math.random())}),15e3)})).catch((function(){u(!1),setTimeout((function(){return l(Math.random())}),15e3)}))}),[n,s]),(0,c.useEffect)((function(){var e=setInterval((function(){r(f()().format("HH:mm"))}),1e4);return function(){return clearInterval(e)}}),[]),c.createElement(v,{className:"row"},i?c.createElement("div",{className:"d-flex flex-row justify-content-center align-items-center mt-5"},c.createElement("span",{className:"spinner-border spinner-border-sm"}),c.createElement("span",{className:"ms-2"},"Chargement en cours...")):c.createElement("div",{className:k.length>0?"col-sm-6":"col-sm-12"},z.id?c.createElement(N,{className:"d-flex flex-column justify-content-center align-items-center"},c.createElement("h2",{className:"text-white text-uppercase mb-4"},"Réunion en cours"),c.createElement("div",{className:"progress mx-auto"},c.createElement("span",{className:"progress-left"},c.createElement("span",{className:"progress-bar border-success",style:{transform:I>0&&I>50&&"rotate("+M(I-50)+"deg)"}})),c.createElement("span",{className:"progress-right"},c.createElement("span",{className:"progress-bar border-success",style:{transform:I>0&&I<=50?"rotate("+M(I)+"deg)":"rotate(180deg)"}})),c.createElement("div",{className:"progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center"},c.createElement("div",{className:"text-white h2 font-weight-bold",dangerouslySetInnerHTML:{__html:_(S)}}))),c.createElement("h4",{className:"text-white"},z.start," ",c.createElement("i",{className:"bi bi-arrow-right"})," ",z.end),c.createElement("p",{className:"text-white mt-2 mb-0"},c.createElement("b",null,"Réservé par: "),z.owner),c.createElement("p",{className:"text-white mt-1 mb-0"},c.createElement("i",{className:"bi bi-clock"})," Durée:"," ",c.createElement("span",{dangerouslySetInnerHTML:{__html:_(z.duration)}})),c.createElement("p",{className:"text-white mt-1 mb-0"},c.createElement("i",{className:"bi bi-people"})," ",z.participants," ","participants")):c.createElement(w,{className:"d-flex flex-column justify-content-center align-items-center"},c.createElement("h2",{className:"text-white text-uppercase mb-4"},"Disponible"))),k&&k.length>0&&c.createElement("div",{className:"col-sm-6"},k.map((function(e,t){return c.createElement(x,{key:e.id,className:z.id&&0===t&&"current"},c.createElement("h5",null,e.start," ",c.createElement("i",{className:"bi bi-arrow-right"})," ",e.end),c.createElement("p",{className:"d-flex mt-2 mb-0"},c.createElement("span",null,c.createElement("i",{className:"bi bi-person"})," ",e.owner),c.createElement("span",{className:"ms-3"},c.createElement("i",{className:"bi bi-people"})," ",e.participants," participants"),c.createElement("span",{className:"ms-3"},c.createElement("i",{className:"bi bi-clock"})," ",c.createElement("span",{dangerouslySetInnerHTML:{__html:_(e.duration)}}))))}))))}function z(e,t){return function(e){if(Array.isArray(e))return e}(e)||function(e,t){var n=null==e?null:"undefined"!=typeof Symbol&&e[Symbol.iterator]||e["@@iterator"];if(null==n)return;var r,a,s=[],l=!0,c=!1;try{for(n=n.call(e);!(l=(r=n.next()).done)&&(s.push(r.value),!t||s.length!==t);l=!0);}catch(e){c=!0,a=e}finally{try{l||null==n.return||n.return()}finally{if(c)throw a}}return s}(e,t)||function(e,t){if(!e)return;if("string"==typeof e)return S(e,t);var n=Object.prototype.toString.call(e).slice(8,-1);"Object"===n&&e.constructor&&(n=e.constructor.name);if("Map"===n||"Set"===n)return Array.from(e);if("Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n))return S(e,t)}(e,t)||function(){throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}function S(e,t){(null==t||t>e.length)&&(t=e.length);for(var n=0,r=new Array(t);n<t;n++)r[n]=e[n];return r}function I(e,t){return t||(t=e.slice(0)),Object.freeze(Object.defineProperties(e,{raw:{value:Object.freeze(t)}}))}f().locale("fr-FR");var M=u.ZP.div(h||(h=I(["\n  margin: 0px;\n  padding: 15px 5px 20px;\n  min-height: 93px;\n  background-color: var(--color-primary);\n"]))),_=u.ZP.h1(g||(g=I(["\n  color: #fff;\n  margin-bottom: 0px;\n  font-size: 2.5rem;\n"]))),D=u.ZP.div(E||(E=I(["\n  color: #fff;\n  font-size: 4rem;\n  font-weight: 600;\n  line-height: 3.5rem;\n"]))),T=u.ZP.div(y||(y=I(["\n  color: #fff;\n  font-size: 1.5rem;\n  font-weight: 600;\n  margin-left: 15px;\n  line-height: 1.8rem;\n"])));function A(){var e=z((0,c.useState)(window.SALLES),2),t=e[0],n=e[1],r=z((0,c.useState)(!1),2),a=r[0],s=r[1],l=z((0,c.useState)(f()().format("HH:mm")),2),o=l[0],i=l[1],u=window.TABLETTE_UID||localStorage.getItem("tablette_uid")||window.RANDOM_UID,d=(0,c.useMemo)((function(){return t.find((function(e){return e.tablette_uid===u}))}),[t,u]);return c.createElement("div",{className:"container-fluid p-0"},c.createElement(M,{className:"row"},c.createElement("div",{className:"col-sm-6 d-flex align-items-center"},c.createElement(_,null,d?d.name:"Affecter cette tablette à une salle")),c.createElement("div",{className:"col-sm-6 d-flex justify-content-end align-items-center"},c.createElement(D,null,o),c.createElement(T,null,c.createElement("span",{className:"text-capitalize"},f()().format("dddd")),c.createElement("br",null),f()().format("Do MMMM YYYY")))),d?c.createElement(k,{tabletteUID:u,currentTime:o,setCurrentTime:i}):c.createElement("div",{style:{margin:"20px auto",width:"100%",maxWidth:"350px"}},c.createElement("form",{onSubmit:function(e){e.preventDefault(),s(!0);var r=new FormData,a=parseInt(document.getElementById("salle_id").value);r.append("salle_id",a),r.append("tablette_uid",u),r.append("email",document.getElementById("email").value),r.append("password",document.getElementById("password").value),m().post("/salle/assign/tablette",r).then((function(e){if("success"===e.data.status){var r=t.map((function(e){return e.id===a&&(e.tablette_uid=u),e}));n(r),localStorage.setItem("tablette_uid",u)}else toast("error",e.data.message)})).catch((function(e){return toast("error",e.message)})).then((function(){return s(!1)}))}},c.createElement("div",{className:"mb-3"},c.createElement("label",{htmlFor:"tablette_uid",className:"form-label"},"Tablette UID"),c.createElement("input",{type:"text",className:"form-control",id:"tablette_uid",value:u,required:!0,readOnly:!0})),c.createElement("div",{className:"mb-3"},c.createElement("label",{htmlFor:"salle_id",className:"form-label"},"Salle"),c.createElement("select",{name:"salle_id",className:"form-control",id:"salle_id",required:!0},c.createElement("option",null),t&&t.map((function(e){return c.createElement("option",{key:e.id,value:e.id},e.name,e.tablette_uid&&" (Affecté)")})))),c.createElement("h3",null,"Se connecter"),c.createElement("div",{className:"mb-3"},c.createElement("label",{htmlFor:"email",className:"form-label"},"Email"),c.createElement("input",{type:"email",className:"form-control",id:"email",required:!0})),c.createElement("div",{className:"mb-3"},c.createElement("label",{htmlFor:"password",className:"form-label"},"Mot de passe"),c.createElement("input",{type:"password",className:"form-control",id:"password",required:!0})),c.createElement("div",{className:"text-center"},c.createElement("button",{type:"submit",className:"btn btn-primary shadow-none rounded-pill px-5",disabled:a},a?c.createElement("span",{className:"spinner-border spinner-border-sm fs-6"}):"Affecter")))))}o.render(c.createElement(A,null),document.getElementById("root"))},6700:(e,t,n)=>{var r={"./af":2786,"./af.js":2786,"./ar":867,"./ar-dz":4130,"./ar-dz.js":4130,"./ar-kw":6737,"./ar-kw.js":6737,"./ar-ly":6440,"./ar-ly.js":6440,"./ar-ma":7702,"./ar-ma.js":7702,"./ar-sa":6040,"./ar-sa.js":6040,"./ar-tn":7100,"./ar-tn.js":7100,"./ar.js":867,"./az":1083,"./az.js":1083,"./be":9808,"./be.js":9808,"./bg":8338,"./bg.js":8338,"./bm":7438,"./bm.js":7438,"./bn":8905,"./bn-bd":6225,"./bn-bd.js":6225,"./bn.js":8905,"./bo":1560,"./bo.js":1560,"./br":1278,"./br.js":1278,"./bs":622,"./bs.js":622,"./ca":2468,"./ca.js":2468,"./cs":5822,"./cs.js":5822,"./cv":877,"./cv.js":877,"./cy":7373,"./cy.js":7373,"./da":4780,"./da.js":4780,"./de":9740,"./de-at":217,"./de-at.js":217,"./de-ch":894,"./de-ch.js":894,"./de.js":9740,"./dv":5300,"./dv.js":5300,"./el":837,"./el.js":837,"./en-au":8348,"./en-au.js":8348,"./en-ca":7925,"./en-ca.js":7925,"./en-gb":2243,"./en-gb.js":2243,"./en-ie":6436,"./en-ie.js":6436,"./en-il":7207,"./en-il.js":7207,"./en-in":4175,"./en-in.js":4175,"./en-nz":6319,"./en-nz.js":6319,"./en-sg":1662,"./en-sg.js":1662,"./eo":2915,"./eo.js":2915,"./es":7093,"./es-do":5251,"./es-do.js":5251,"./es-mx":6112,"./es-mx.js":6112,"./es-us":1146,"./es-us.js":1146,"./es.js":7093,"./et":5603,"./et.js":5603,"./eu":7763,"./eu.js":7763,"./fa":6959,"./fa.js":6959,"./fi":1897,"./fi.js":1897,"./fil":2549,"./fil.js":2549,"./fo":4694,"./fo.js":4694,"./fr":4470,"./fr-ca":3049,"./fr-ca.js":3049,"./fr-ch":2330,"./fr-ch.js":2330,"./fr.js":4470,"./fy":5044,"./fy.js":5044,"./ga":9295,"./ga.js":9295,"./gd":2101,"./gd.js":2101,"./gl":8794,"./gl.js":8794,"./gom-deva":7884,"./gom-deva.js":7884,"./gom-latn":3168,"./gom-latn.js":3168,"./gu":5349,"./gu.js":5349,"./he":4206,"./he.js":4206,"./hi":94,"./hi.js":94,"./hr":316,"./hr.js":316,"./hu":2138,"./hu.js":2138,"./hy-am":1423,"./hy-am.js":1423,"./id":9218,"./id.js":9218,"./is":135,"./is.js":135,"./it":626,"./it-ch":150,"./it-ch.js":150,"./it.js":626,"./ja":9183,"./ja.js":9183,"./jv":4286,"./jv.js":4286,"./ka":2105,"./ka.js":2105,"./kk":7772,"./kk.js":7772,"./km":8758,"./km.js":8758,"./kn":9282,"./kn.js":9282,"./ko":3730,"./ko.js":3730,"./ku":1408,"./ku.js":1408,"./ky":3291,"./ky.js":3291,"./lb":6841,"./lb.js":6841,"./lo":5466,"./lo.js":5466,"./lt":7010,"./lt.js":7010,"./lv":7595,"./lv.js":7595,"./me":9861,"./me.js":9861,"./mi":5493,"./mi.js":5493,"./mk":5966,"./mk.js":5966,"./ml":7341,"./ml.js":7341,"./mn":5115,"./mn.js":5115,"./mr":370,"./mr.js":370,"./ms":9847,"./ms-my":1237,"./ms-my.js":1237,"./ms.js":9847,"./mt":2126,"./mt.js":2126,"./my":6165,"./my.js":6165,"./nb":4924,"./nb.js":4924,"./ne":6744,"./ne.js":6744,"./nl":3901,"./nl-be":9814,"./nl-be.js":9814,"./nl.js":3901,"./nn":3877,"./nn.js":3877,"./oc-lnc":2135,"./oc-lnc.js":2135,"./pa-in":5858,"./pa-in.js":5858,"./pl":4495,"./pl.js":4495,"./pt":9520,"./pt-br":7971,"./pt-br.js":7971,"./pt.js":9520,"./ro":6459,"./ro.js":6459,"./ru":238,"./ru.js":238,"./sd":950,"./sd.js":950,"./se":7930,"./se.js":7930,"./si":124,"./si.js":124,"./sk":4249,"./sk.js":4249,"./sl":4985,"./sl.js":4985,"./sq":1104,"./sq.js":1104,"./sr":9131,"./sr-cyrl":9915,"./sr-cyrl.js":9915,"./sr.js":9131,"./ss":5893,"./ss.js":5893,"./sv":8760,"./sv.js":8760,"./sw":1172,"./sw.js":1172,"./ta":7333,"./ta.js":7333,"./te":3110,"./te.js":3110,"./tet":2095,"./tet.js":2095,"./tg":7321,"./tg.js":7321,"./th":9041,"./th.js":9041,"./tk":9005,"./tk.js":9005,"./tl-ph":5768,"./tl-ph.js":5768,"./tlh":9444,"./tlh.js":9444,"./tr":2397,"./tr.js":2397,"./tzl":8254,"./tzl.js":8254,"./tzm":1106,"./tzm-latn":699,"./tzm-latn.js":699,"./tzm.js":1106,"./ug-cn":9288,"./ug-cn.js":9288,"./uk":7691,"./uk.js":7691,"./ur":3795,"./ur.js":3795,"./uz":6791,"./uz-latn":588,"./uz-latn.js":588,"./uz.js":6791,"./vi":5666,"./vi.js":5666,"./x-pseudo":4378,"./x-pseudo.js":4378,"./yo":5805,"./yo.js":5805,"./zh-cn":3839,"./zh-cn.js":3839,"./zh-hk":5726,"./zh-hk.js":5726,"./zh-mo":9807,"./zh-mo.js":9807,"./zh-tw":4152,"./zh-tw.js":4152};function a(e){var t=s(e);return n(t)}function s(e){if(!n.o(r,e)){var t=new Error("Cannot find module '"+e+"'");throw t.code="MODULE_NOT_FOUND",t}return r[e]}a.keys=function(){return Object.keys(r)},a.resolve=s,e.exports=a,a.id=6700}},e=>{"use strict";e.O(0,[477,719],(()=>{return t=2323,e(e.s=t);var t}));e.O()}]);