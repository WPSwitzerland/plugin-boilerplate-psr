(()=>{"use strict";var e={n:t=>{var r=t&&t.__esModule?()=>t.default:()=>t;return e.d(r,{a:r}),r},d:(t,r)=>{for(var n in r)e.o(r,n)&&!e.o(t,n)&&Object.defineProperty(t,n,{enumerable:!0,get:r[n]})},o:(e,t)=>Object.prototype.hasOwnProperty.call(e,t)};const t=window.wp.blocks,r=window.wp.blockEditor,n=window.wp.components,o=(window.wp.i18n,window.wp.serverSideRender);var a=e.n(o);const c=JSON.parse('{"name":"shp/example"}'),{name:l}=c;(0,t.registerBlockType)(l,{edit:()=>{const e=(0,r.useBlockProps)();return React.createElement("div",e,React.createElement(n.Disabled,null,React.createElement(a(),{block:l})))}})})();