!function(){var e={184:function(e,t){var n;!function(){"use strict";var r={}.hasOwnProperty;function o(){for(var e=[],t=0;t<arguments.length;t++){var n=arguments[t];if(n){var i=typeof n;if("string"===i||"number"===i)e.push(n);else if(Array.isArray(n)){if(n.length){var a=o.apply(null,n);a&&e.push(a)}}else if("object"===i)if(n.toString===Object.prototype.toString)for(var c in n)r.call(n,c)&&n[c]&&e.push(c);else e.push(n.toString())}}return e.join(" ")}e.exports?(o.default=o,e.exports=o):void 0===(n=function(){return o}.apply(t,[]))||(e.exports=n)}()}},t={};function n(r){var o=t[r];if(void 0!==o)return o.exports;var i=t[r]={exports:{}};return e[r](i,i.exports,n),i.exports}n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,{a:t}),t},n.d=function(e,t){for(var r in t)n.o(t,r)&&!n.o(e,r)&&Object.defineProperty(e,r,{enumerable:!0,get:t[r]})},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},function(){"use strict";function e(e,t,n){return t in e?Object.defineProperty(e,t,{value:n,enumerable:!0,configurable:!0,writable:!0}):e[t]=n,e}var t=window.wp.blocks,r=window.wp.i18n;function o(){return o=Object.assign||function(e){for(var t=1;t<arguments.length;t++){var n=arguments[t];for(var r in n)Object.prototype.hasOwnProperty.call(n,r)&&(e[r]=n[r])}return e},o.apply(this,arguments)}function i(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}function a(e,t){for(var n=0;n<t.length;n++){var r=t[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(e,r.key,r)}}function c(e,t,n){return t&&a(e.prototype,t),n&&a(e,n),Object.defineProperty(e,"prototype",{writable:!1}),e}function l(e){if(void 0===e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return e}function u(e,t){return u=Object.setPrototypeOf||function(e,t){return e.__proto__=t,e},u(e,t)}function s(e,t){if("function"!=typeof t&&null!==t)throw new TypeError("Super expression must either be null or a function");e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,writable:!0,configurable:!0}}),Object.defineProperty(e,"prototype",{writable:!1}),t&&u(e,t)}function p(e){return p="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},p(e)}function d(e,t){if(t&&("object"===p(t)||"function"==typeof t))return t;if(void 0!==t)throw new TypeError("Derived constructors may only return object or undefined");return l(e)}function f(e){return f=Object.setPrototypeOf?Object.getPrototypeOf:function(e){return e.__proto__||Object.getPrototypeOf(e)},f(e)}var g=window.wp.element,v=window.lodash,m=n(184),h=n.n(m),y=window.wp.blockEditor,b=window.wp.components,w=window.wp.keycodes,k=window.wp.compose,_=window.wp.primitives,O=(0,g.createElement)(_.SVG,{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 24 24"},(0,g.createElement)(_.Path,{d:"M20.5 16h-.7V8c0-1.1-.9-2-2-2H6.2c-1.1 0-2 .9-2 2v8h-.7c-.8 0-1.5.7-1.5 1.5h20c0-.8-.7-1.5-1.5-1.5zM5.7 8c0-.3.2-.5.5-.5h11.6c.3 0 .5.2.5.5v7.6H5.7V8z"})),j=(0,g.createElement)(_.SVG,{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 24 24"},(0,g.createElement)(_.Path,{d:"M17 4H7c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h10c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm.5 14c0 .3-.2.5-.5.5H7c-.3 0-.5-.2-.5-.5V6c0-.3.2-.5.5-.5h10c.3 0 .5.2.5.5v12zm-7.5-.5h4V16h-4v1.5z"})),E=(0,g.createElement)(_.SVG,{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 24 24"},(0,g.createElement)(_.Path,{d:"M15 4H9c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h6c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm.5 14c0 .3-.2.5-.5.5H9c-.3 0-.5-.2-.5-.5V6c0-.3.2-.5.5-.5h6c.3 0 .5.2.5.5v12zm-4.5-.5h2V16h-2v1.5z"}));function S(){return[{value:"small",label:(0,r.__)("Small","layout-grid")},{value:"medium",label:(0,r.__)("Medium","layout-grid")},{value:"large",label:(0,r.__)("Large","layout-grid")},{value:"huge",label:(0,r.__)("Huge","layout-grid")}]}var P=function(){return[{label:(0,r.__)("1 cols","layout-grid"),value:1},{label:(0,r.__)("2 cols","layout-grid"),value:2},{label:(0,r.__)("3 cols","layout-grid"),value:3},{label:(0,r.__)("4 cols","layout-grid"),value:4}]},C="Desktop",A="Tablet",B="Mobile",x=function(){return[{value:C,label:(0,r.__)("Desktop","layout-grid"),icon:O},{value:A,label:(0,r.__)("Tablet","layout-grid"),icon:j},{value:B,label:(0,r.__)("Mobile","layout-grid"),icon:E}]},z=[C,A,B];function M(e,t){return"column".concat(e+1).concat(t,"Span")}function D(e,t){return"column".concat(e+1).concat(t,"Offset")}var R=function(e){return e===A?8:e===B?4:12};function V(e,t,n){return e===A?3===t&&2===n?R(e):t>1?R(e)/2:R(e):e===B?R(e):R(e)/t}function T(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),n.push.apply(n,r)}return n}function N(t){for(var n=1;n<arguments.length;n++){var r=null!=arguments[n]?arguments[n]:{};n%2?T(Object(r),!0).forEach((function(n){e(t,n,r[n])})):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(r)):T(Object(r)).forEach((function(e){Object.defineProperty(t,e,Object.getOwnPropertyDescriptor(r,e))}))}return t}var G=function(e,t){return"column".concat(e+1,"-grid__span-").concat(t)},I=function(e,t){return"column".concat(e+1,"-grid__start-").concat(t)},L=function(e,t){return"column".concat(e+1,"-grid__row-").concat(t)},H=function(e,t){return"column".concat(e+1,"-grid__valign-").concat(t)},U=function(e,t,n){return"column".concat(e+1,"-").concat(n.toLowerCase(),"-grid__span-").concat(t)},X=function(e,t,n){return"column".concat(e+1,"-").concat(n.toLowerCase(),"-grid__start-").concat(t)},F=function(e,t,n){return"column".concat(e+1,"-").concat(n.toLowerCase(),"-grid__row-").concat(t)};function q(e,t){return Math.floor(e/t)}function K(e,t){return e%t}function W(e,t,n,r){var o=!(arguments.length>4&&void 0!==arguments[4])||arguments[4];return{name:e,column:t,value:n,device:r,enabled:o}}function Z(e,t,n){for(var r=[],o=R(e),i=function(e,t,n){for(var r=[],o=0,i=0;i<e;i++){var a=M(i,t),c=D(i,t),l=n[a]||V(t,e,i),u=n[c]||0;r.push({position:o+u,span:l}),o+=u,o+=l}return r}(t,e,n),a=0;a<i.length;a++){var c=i[a],l=c.span,u=c.position,s=q(u,o),p=K(u,o);r.push(W("span",a,l,e)),r.push(W("offset",a,p+1,e,p>0)),r.push(W("row",a,s+1,e))}return r}function $(e,t){var n={};return e.filter((function(e){return e.enabled&&t[e.name]})).map((function(e){return n[t[e.name](e.column,e.value,e.device)]=!0})),n}function J(e){return e?e.replace(/column\d-\w*-grid__\w*-\d*/g,"").replace(/column\d-grid__\w*-\d*/g,"").replace(/\s{2,}/,"").replace(/wp-block-jetpack-layout-gutter__\w*/,"").replace(/is-vertically-aligned-\w*/,"").replace(/is-style-[A-Za-z-_]*/,"").replace(/are-vertically-aligned-\w*/):e}function Q(e){var t=e.gutterSize;return{"wp-block-jetpack-layout-gutter__nowrap":!e.addGutterEnds,"wp-block-jetpack-layout-gutter__none":"none"===t,"wp-block-jetpack-layout-gutter__small":"small"===t,"wp-block-jetpack-layout-gutter__medium":"medium"===t,"wp-block-jetpack-layout-gutter__huge":"huge"===t}}var Y=["columns"],ee=function(e){return(0,g.createElement)(b.SVG,o({xmlns:"http://www.w3.org/2000/svg",width:"48",height:"48",viewBox:"0 0 48 48"},e),(0,g.createElement)(b.Path,{d:"M7 12v24h34V12H7zm32 22H9V14h30v20z"}))},te=function(e){return(0,g.createElement)(b.SVG,o({xmlns:"http://www.w3.org/2000/svg",width:"48",height:"48",viewBox:"0 0 48 48"},e),(0,g.createElement)(b.Path,{d:"M7,12v24h34V12H7z M23,34H9V14h14V34z M39,34H25V14h14V34z"}))},ne=function(e){return(0,g.createElement)(b.SVG,o({xmlns:"http://www.w3.org/2000/svg",width:"48",height:"48",viewBox:"0 0 48 48"},e),(0,g.createElement)(b.Path,{d:"M7 12v24h34V12H7zm23 2h9v20h-9V14zm-2 20h-8V14h8v20zM9 14h9v20H9V14z"}))},re=function(e){return(0,g.createElement)(b.SVG,o({xmlns:"http://www.w3.org/2000/svg",width:"48",height:"48",viewBox:"0 0 48 48"},e),(0,g.createElement)(b.Path,{d:"M7 12v24h34V12H7zm8 22H9V14h6v20zm8 0h-6V14h6v20zm8 0h-6V14h6v20zm8 0h-6V14h6v20z"}))},oe=function(e){var t=e.columns,n=function(e,t){if(null==e)return{};var n,r,o=function(e,t){if(null==e)return{};var n,r,o={},i=Object.keys(e);for(r=0;r<i.length;r++)n=i[r],t.indexOf(n)>=0||(o[n]=e[n]);return o}(e,t);if(Object.getOwnPropertySymbols){var i=Object.getOwnPropertySymbols(e);for(r=0;r<i.length;r++)n=i[r],t.indexOf(n)>=0||Object.prototype.propertyIsEnumerable.call(e,n)&&(o[n]=e[n])}return o}(e,Y);return 4===t?(0,g.createElement)(re,n):3===t?(0,g.createElement)(ne,n):2===t?(0,g.createElement)(te,n):(0,g.createElement)(ee,n)},ie=function(e){var t=e.direction,n=e.height,r=e.xPos,o=e.top,i=e.isSelected,a=h()("wpcom-overlay-resize__handle","components-resizable-box__container",{"is-selected":i}),c={height:n+"px",width:r+"px",top:o+"px"},l={left:r+"px"},u=h()("components-resizable-box__handle","components-resizable-box__side-handle",{"components-resizable-box__handle-left":"left"===t,"components-resizable-box__handle-right":"right"===t});return(0,g.createElement)("div",{className:a,style:c},(0,g.createElement)("span",null,(0,g.createElement)("div",{className:u,style:l})))};var ae=function(t){s(a,t);var n,r,o=(n=a,r=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(e){return!1}}(),function(){var e,t=f(n);if(r){var o=f(this).constructor;e=Reflect.construct(t,arguments,o)}else e=t.apply(this,arguments);return d(this,e)});function a(t){var n;return i(this,a),e(l(n=o.call(this,t)),"onMouseDown",(function(e){var t=e.target;if((0===e.button||e.touches)&&(t.dataset.resizeRight||t.dataset.resizeLeft)){n.block=t.closest(".wp-block");var r=n.block.getBoundingClientRect(),o=r.height,i=r.right,a=r.left,c=r.top,l=t.getBoundingClientRect().width,u=n.getChildPosition(n.block),s=t.dataset.resizeLeft;n.setState({resizingColumn:u,xPos:n.getAdjustedOffset(n.getMouseX(e),l),height:o,width:l,top:n.getAdjustedTop(c),direction:s?"left":"right",max:s?n.getAdjustedOffset(i,l):n.getAdjustedOffset(a,l)}),0===e.button?(document.addEventListener("mousemove",n.onMouseMove),document.addEventListener("mouseup",n.onMouseUp),e.preventDefault()):(document.addEventListener("touchmove",n.onMouseMove),document.addEventListener("touchend",n.onMouseUp)),e.stopPropagation()}})),e(l(n),"onMouseMove",(function(e){e.stopPropagation(),void 0===e.touches&&e.preventDefault();var t=n.block.getBoundingClientRect().height;n.setState({xPos:n.getRestrictedOffset(n.getAdjustedOffset(n.getMouseX(e))),height:t});var r=n.getNearestColumn(n.state.direction,e);r&&n.props.onResize(n.state.resizingColumn,r)})),e(l(n),"onMouseUp",(function(e){n.setState({resizingColumn:-1}),document.removeEventListener("mousemove",n.onMouseMove),document.removeEventListener("mouseup",n.onMouseUp),document.removeEventListener("touchmove",n.onMouseMove),document.removeEventListener("touchend",n.onMouseUp)})),n.containerRef=(0,g.createRef)(),n.state={resizingColumn:-1,xPos:0,height:0},n}return c(a,[{key:"getNearestColumn",value:function(e,t){var n=this.props,r=n.totalColumns,o=n.layoutGrid,i=o.getStart(this.state.resizingColumn),a=o.getSpan(this.state.resizingColumn),c=Math.min(r,Math.max(0,function(e,t,n,r){var o=e.getBoundingClientRect(),i=o.width/r,a=t-o.x,c=Math.floor(a/i),l=a%i;return"left"===n?l<=i/2?c:c+1:l<i/2?c:c+1}(this.containerRef.current,this.getMouseX(t),e,r)));if("left"===e){if(c===i)return null;var l=Math.abs(c-i),u={start:c,span:c>i?a-l:a+l,direction:e};return u.start>=i+a?null:(u.span=Math.max(1,u.span),u)}return{span:Math.max(1,c-i),direction:e}}},{key:"getMouseX",value:function(e){var t=e.clientX,n=e.targetTouches;return t||n&&n[0].clientX}},{key:"getAdjustedOffset",value:function(e){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:0,n=this.state.width,r=t>0?t:n;return e-this.containerRef.current.getBoundingClientRect().left-r/2}},{key:"getAdjustedTop",value:function(e){return e-this.containerRef.current.getBoundingClientRect().top}},{key:"getRestrictedOffset",value:function(e){var t=this.state,n=t.direction,r=t.max,o=t.width;return"left"===n?Math.min(r-o,e):Math.max(r+o,e)}},{key:"getChildPosition",value:function(e){for(var t=0;null!==e.previousSibling;)e=e.previousSibling,t++;return t}},{key:"render",value:function(){var e=this.props,t=e.className,n=e.children,r=e.isSelected,o=this.state,i=o.resizingColumn,a=o.xPos,c=o.height,l=h()(t,-1!==i?"wp-block-jetpack-layout-grid__resizing":null);return(0,g.createElement)("div",{className:l,onMouseDown:this.onMouseDown,onTouchStart:this.onMouseDown,ref:this.containerRef},-1!==i&&(0,g.createElement)(ie,{direction:this.state.direction,height:c,xPos:a,top:this.state.top,isSelected:r}),n)}}]),a}(g.Component),ce=ae;function le(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),n.push.apply(n,r)}return n}function ue(t){for(var n=1;n<arguments.length;n++){var r=null!=arguments[n]?arguments[n]:{};n%2?le(Object(r),!0).forEach((function(n){e(t,n,r[n])})):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(r)):le(Object(r)).forEach((function(e){Object.defineProperty(t,e,Object.getOwnPropertyDescriptor(r,e))}))}return t}var se=function(){function t(e,n,r){i(this,t),this.attributes=e,this.device=n,this.columnCount=r}return c(t,[{key:"getGridValues",value:function(){for(var e={},t=0;t<this.columnCount;t++){var n=V(this.device,this.columnCount,t);e[M(t,this.device)]=this.getSpan(t)||n,e[D(t,this.device)]=this.getOffset(t)}return e}},{key:"applyAdjustments",value:function(e){for(var t=this.getGridValues(),n=0;n<e.length;n++)t=ue(ue({},t),e[n]);return t}},{key:"getSpanAdjustment",value:function(t,n){return e({},M(t,this.device),n)}},{key:"getAdjustOffset",value:function(t,n){return e({},D(t,this.device),n)}},{key:"getShrinkOffset",value:function(e,t){var n=this.getOffset(e),r=t>=n?n:t;return{adjustment:this.getAdjustOffset(e,n-r),offsetUsed:r}}},{key:"hasOverlaps",value:function(e){for(var t=0;t<e.length;t++)for(var n=e[t],r=t+1;r<e.length;r++){var o=e[r];if(n.start>o.start&&n.start<o.end)return!0;if(n.end>o.start&&n.end<o.end)return!0}return!1}},{key:"validateGrid",value:function(e){for(var t,n,r=[],o=R(this.device),i=0,a=0,c=0;c<this.columnCount;c++){var l=e[M(c,this.device)],u=e[D(c,this.device)];if((a+=u)>=o&&(a-=o),(a+=l)>o)return!1;r.push({start:i+u,end:i+u+l}),i+=l+u}return!(i>(t=this.device,n=this.columnCount,t===A&&n>2?2*R(t):t===B?R(t)*n:R(t))||this.hasOverlaps(r))}},{key:"getEndAdjustments",value:function(e,t){var n=[];if(t<0)return[this.getAdjustOffset(e,this.getOffset(e)+Math.abs(t))];if(t>0)for(var r=e;r<this.columnCount&&t>0;r++){var o=this.getShrinkOffset(r,Math.abs(t));n.push(o.adjustment),t-=o.offsetUsed}return n}},{key:"getStartMovedLeft",value:function(e,t){for(var n=[],r=e;r>=0&&t>0;r--){var o=this.getShrinkOffset(r,t);n.push(o.adjustment),t-=o.offsetUsed}return n}},{key:"getStartAdjustments",value:function(e,t){var n=this.getOffset(e),r=this.getOffsetFromStart(e,t),o=r-n;return o<0?this.getStartMovedLeft(e,Math.abs(o)):[this.getAdjustOffset(e,r)]}},{key:"getSpan",value:function(e){return this.attributes[M(e,this.device)]}},{key:"getOffset",value:function(e){return this.attributes[D(e,this.device)]}},{key:"getStart",value:function(e){for(var t=0,n=0;n<e;n++)t+=this.getSpan(n)+this.getOffset(n);var r=Math.max(1,Math.floor(t/R(this.device)));return(t+this.getOffset(e))%(r*R(this.device))}},{key:"getOffsetFromStart",value:function(e,t){if(0===e)return t;var n=t-this.getStart(e);return this.getOffset(e)+n}},{key:"convertOffsetToStart",value:function(e,t){return this.getStart(e)+(t-this.getOffset(e))}},{key:"getAdjustedGrid",value:function(e,t){var n=t.start,r=void 0===n?this.getStart(e):n,o=t.span,i=void 0===o?this.getSpan(e):o,a=[];r!==this.getStart(e)&&i!==this.getSpan(e)?a=(a=a.concat(this.getStartAdjustments(e,r))).concat(this.getSpanAdjustment(e,i)):i!==this.getSpan(e)?a=(a=a.concat(this.getSpanAdjustment(e,i))).concat(this.getEndAdjustments(e+1,i-this.getSpan(e))):r!==this.getStart(e)&&(a=(a=a.concat(this.getStartAdjustments(e,r))).concat(this.getEndAdjustments(e+1,r-this.getStart(e))));var c=this.applyAdjustments(a);return a.length>0&&this.validateGrid(c)?c:null}}]),t}();function pe(e,t){(null==t||t>e.length)&&(t=e.length);for(var n=0,r=new Array(t);n<t;n++)r[n]=e[n];return r}function de(e,t){if(e){if("string"==typeof e)return pe(e,t);var n=Object.prototype.toString.call(e).slice(8,-1);return"Object"===n&&e.constructor&&(n=e.constructor.name),"Map"===n||"Set"===n?Array.from(e):"Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)?pe(e,t):void 0}}var fe=window.wp.data,ge=function(e){var t,n,r=e.viewPort,o=e.updateViewport,i=(0,fe.useDispatch)("core/edit-post").__experimentalSetPreviewDeviceType,a=(0,fe.useSelect)((function(e){return e("core/edit-post").__experimentalGetPreviewDeviceType()}),[]),c=(t=(0,k.useResizeObserver)(),n=2,function(e){if(Array.isArray(e))return e}(t)||function(e,t){var n=null==e?null:"undefined"!=typeof Symbol&&e[Symbol.iterator]||e["@@iterator"];if(null!=n){var r,o,i=[],_n=!0,a=!1;try{for(n=n.call(e);!(_n=(r=n.next()).done)&&(i.push(r.value),!t||i.length!==t);_n=!0);}catch(e){a=!0,o=e}finally{try{_n||null==n.return||n.return()}finally{if(a)throw o}}return i}}(t,n)||de(t,n)||function(){throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()),l=c[0],u=c[1],s=(0,k.useViewportMatch)("medium","<"),p=(0,k.useViewportMatch)("small","<");return(0,g.useEffect)((function(){var e=function(e,t){return e?"Mobile":t?"Tablet":"Desktop"}(p,s);e!==r&&o(e)}),[u]),(0,g.createElement)(g.Fragment,null,l,!p&&(0,g.createElement)(y.BlockControls,null,(0,g.createElement)(b.Dropdown,{renderToggle:function(e){var t=e.isOpen,n=e.onToggle;return(0,g.createElement)(b.ToolbarGroup,null,(0,g.createElement)(b.Button,{"aria-expanded":t,onClick:n,icon:x().find((function(e){return e.value===a})).icon}))},renderContent:function(){return(0,g.createElement)(b.MenuGroup,null,(0,g.createElement)(b.MenuItemsChoice,{value:a,onSelect:function(e){return i(e)},choices:x()}))}})))};function ve(e){return function(e){if(Array.isArray(e))return pe(e)}(e)||function(e){if("undefined"!=typeof Symbol&&null!=e[Symbol.iterator]||null!=e["@@iterator"])return Array.from(e)}(e)||de(e)||function(){throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}function me(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),n.push.apply(n,r)}return n}function he(t){for(var n=1;n<arguments.length;n++){var r=null!=arguments[n]?arguments[n]:{};n%2?me(Object(r),!0).forEach((function(n){e(t,n,r[n])})):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(r)):me(Object(r)).forEach((function(e){Object.defineProperty(t,e,Object.getOwnPropertyDescriptor(r,e))}))}return t}function ye(){return!!document.querySelector("#edit-site-editor")}function be(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),n.push.apply(n,r)}return n}function we(t){for(var n=1;n<arguments.length;n++){var r=null!=arguments[n]?arguments[n]:{};n%2?be(Object(r),!0).forEach((function(n){e(t,n,r[n])})):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(r)):be(Object(r)).forEach((function(e){Object.defineProperty(t,e,Object.getOwnPropertyDescriptor(r,e))}))}return t}var ke=["jetpack/layout-grid-column"],_e=function(t){s(u,t);var n,o,a=(n=u,o=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(e){return!1}}(),function(){var e,t=f(n);if(o){var r=f(this).constructor;e=Reflect.construct(t,arguments,r)}else e=t.apply(this,arguments);return d(this,e)});function u(t){var n;return i(this,u),e(l(n=a.call(this,t)),"onChangeLayout",(function(e){for(var t={},r=0;r<e;r++)for(var o=0;o<z.length;o++){var i=V(z[o],e,r);t[M(r,z[o])]=i,t[D(r,z[o])]=0}n.props.updateColumns(n.props.columns,e,t)})),e(l(n),"onResize",(function(e,t){var r=n.props,o=r.attributes,i=r.columns,a=new se(o,n.getPreviewMode(),i).getAdjustedGrid(e,t);a&&n.adjustGrid(a)})),e(l(n),"onChangeSpan",(function(e,t,r){var o=n.props,i=o.attributes,a=o.columns,c=new se(i,t,a).getAdjustedGrid(e,{span:parseInt(r,10)});c&&n.adjustGrid(c)})),e(l(n),"onChangeOffset",(function(e,t,r){var o=n.props,i=o.attributes,a=o.columns,c=new se(i,t,a),l=c.getAdjustedGrid(e,{start:c.convertOffsetToStart(e,parseInt(r,10))});l&&n.adjustGrid(l)})),n.overlayRef=(0,g.createRef)(),n.state={inspectorDeviceType:"Desktop",viewPort:"Desktop"},n}return c(u,[{key:"adjustGrid",value:function(e){var t=this.props,n=t.setAttributes,r=t.attributes;n(we(we({},e),{},{className:J(r.className)}))}},{key:"renderDeviceSettings",value:function(e,t,n){for(var o=this,i=new se(n,t,this.props.columns),a=[],c=function(n){var c=i.getSpan(n)||V(t,e,n),l=i.getOffset(n)||0;a.push((0,g.createElement)("div",{className:"jetpack-layout-grid-settings",key:n},(0,g.createElement)("strong",null,(0,r.__)("Column","layout-grid")," ",n+1),(0,g.createElement)("div",{className:"jetpack-layout-grid-settings__group"},(0,g.createElement)(b.TextControl,{type:"number",label:(0,r.__)("Offset","layout-grid"),value:l||0,min:0,max:R(t)-1,onChange:function(e){return o.onChangeOffset(n,t,e)}}),(0,g.createElement)(b.TextControl,{type:"number",label:(0,r.__)("Span","layout-grid"),value:c,min:1,max:R(t),onChange:function(e){return o.onChangeSpan(n,t,e)}}))))},l=0;l<e;l++)c(l);return a}},{key:"canResizeBreakpoint",value:function(e){return!(!this.overlayRef||!this.overlayRef.current)&&this.overlayRef.current.getBoundingClientRect().width/R(e)>50}},{key:"updateInspectorDevice",value:function(e){this.setState({inspectorDeviceType:e}),"Mobile"!==this.state.viewPort&&this.props.setPreviewDeviceType(e)}},{key:"getPreviewMode",value:function(){return this.props.isBlockOrPatternPreview?"Desktop":"Desktop"===this.state.viewPort||"Mobile"===this.props.previewDeviceType?this.props.previewDeviceType:this.state.viewPort}},{key:"getInspectorMode",value:function(){return"Desktop"===this.state.viewPort?this.props.previewDeviceType:this.state.inspectorDeviceType}},{key:"render",value:function(){var t=this,n=this.props,o=n.className,i=n.attributes,a=void 0===i?{}:i,c=n.isSelected,l=n.columns,u=n.setAttributes,s=n.updateAlignment,p=n.columnAttributes,d=this.state.viewPort,f=this.getPreviewMode(),m=this.getInspectorMode(),k=function(e,t){for(var n=arguments.length>2&&void 0!==arguments[2]?arguments[2]:{},r=arguments.length>3&&void 0!==arguments[3]?arguments[3]:[],o=Z(e,t,n),i={span:G,offset:I,row:L},a={},c=0;c<t;c++)r[c].verticalAlignment&&r[c].verticalAlignment!==n.verticalAlignment&&(a[H(c,r[c].verticalAlignment)]=!0);return N(N({},$(o,i)),a)}(f,l,a,p),_=a.gutterSize,O=a.addGutterEnds,j=a.verticalAlignment,E=new se(a,f,l),C=h()(J(o).replace("layout-grid","layout-grid-editor"),"wp-block-jetpack-editor",k,e({"wp-block-jetpack-layout-tablet":"Tablet"===f,"wp-block-jetpack-layout-desktop":"Desktop"===f,"wp-block-jetpack-layout-mobile":"Mobile"===f,"wp-block-jetpack-layout-resizable":this.canResizeBreakpoint(f)},"are-vertically-aligned-".concat(j),j),Q(a));if(0===l)return(0,g.createElement)(b.Placeholder,{icon:"layout",label:(0,r.__)("Choose Layout","layout-grid"),instructions:(0,r.__)("Select a layout to start with:","layout-grid"),className:C},(0,g.createElement)("ul",{className:"block-editor-inner-blocks__template-picker-options"},P().map((function(e){return(0,g.createElement)("li",{key:e.value},(0,g.createElement)(b.IconButton,{isSecondary:!0,icon:(0,g.createElement)(oe,{columns:e.value}),onClick:function(){return t.onChangeLayout(e.value)},className:"block-editor-inner-blocks__template-picker-option",label:e.label}))}))));var A=(0,g.createElement)(b.ToggleControl,{label:(0,r.__)("Add end gutters","layout-grid"),help:O?(0,r.__)("Toggle off to remove the spacing left and right of the grid.","layout-grid"):(0,r.__)("Toggle on to add space left and right of the layout grid. ","layout-grid"),checked:O,onChange:function(e){return u({addGutterEnds:e})}});return(0,g.createElement)(g.Fragment,null,(0,g.createElement)(ge,{currentViewport:d,updateViewport:function(e){return t.setState({viewPort:e,inspectorDeviceType:e})}}),(0,g.createElement)(ce,{className:C,onResize:this.onResize,totalColumns:R(f),layoutGrid:E,isSelected:c},(0,g.createElement)("div",{className:"wpcom-overlay-grid",ref:this.overlayRef},(0,g.createElement)("div",{className:"wpcom-overlay-grid__inner"},(0,v.times)(R(f)).map((function(e){return(0,g.createElement)("div",{className:"wpcom-overlay-grid__column",key:e})})))),(0,g.createElement)(y.InnerBlocks,{template:null,templateLock:"all",allowedBlocks:ke}),(0,g.createElement)(y.InspectorControls,null,(0,g.createElement)(b.PanelBody,{title:(0,r.__)("Layout","layout-grid")},(0,g.createElement)("div",{className:"jetpack-layout-grid-columns block-editor-block-styles"},P().map((function(e){return(0,g.createElement)("div",{key:e.value,className:h()("block-editor-block-styles__item",{"is-active":l===e.value}),onClick:function(){return t.onChangeLayout(e.value)},onKeyDown:function(n){w.ENTER!==n.keyCode&&w.SPACE!==n.keyCode||(n.preventDefault(),t.onChangeLayout(e.value))},role:"button",tabIndex:"0","aria-label":e.label},(0,g.createElement)("div",{className:"block-editor-block-styles__item-preview"},(0,g.createElement)(oe,{columns:e.value})),(0,g.createElement)("div",{className:"editor-block-styles__item-label block-editor-block-styles__item-label"},e.label))}))),(0,g.createElement)("p",{className:"jetpack-layout-grid-help"},(0,r.__)("Changing the number of columns will reset your layout and could remove content.","layout-grid"))),(0,g.createElement)(b.PanelBody,{title:(0,r.__)("Responsive Breakpoints","layout-grid")},(0,g.createElement)("p",{className:"jetpack-layout-grid-help"},(0,r.__)("Previewing your post will show your browser's breakpoint, not the currently selected one.","layout-grid")),(0,g.createElement)(b.ButtonGroup,null,x().map((function(e){return(0,g.createElement)(b.Button,{key:e.value,isPrimary:e.value===m,onClick:function(){return t.updateInspectorDevice(e.value)}},e.label)}))),this.renderDeviceSettings(l,m,a)),(0,g.createElement)(b.PanelBody,{title:(0,r.__)("Gutter","layout-grid")},(0,g.createElement)("p",null,(0,r.__)("Gutter size","layout-grid")),(0,g.createElement)(b.SelectControl,{value:_,onChange:function(e){return u({gutterSize:e,addGutterEnds:"none"!==e&&O})},options:[{value:"none",label:(0,r.__)("No gutter","layout-grid")}].concat(S())}),"none"===_?(0,g.createElement)(b.Disabled,null,A):A))),(0,g.createElement)(y.BlockControls,null,(0,g.createElement)(y.BlockVerticalAlignmentToolbar,{onChange:s,value:j})))}}]),u}(g.Component),Oe=(0,k.compose)([(0,fe.withDispatch)((function(e,t,n){return{updateAlignment:function(r){var o=t.clientId,i=t.setAttributes,a=e("core/block-editor").updateBlockAttributes,c=n.select("core/block-editor").getBlockOrder;i({verticalAlignment:r}),c(o).forEach((function(e){a(e,{verticalAlignment:r})}))}}})),(0,fe.withDispatch)((function(e,n,r){return{updateColumns:function(o,i,a){var c=n.clientId,l=e("core/block-editor").replaceBlock,u=function(e,n,r){if(r>n)return[].concat(ve(e),ve(Array.from({length:r-n},(function(){return(0,t.createBlock)("jetpack/layout-grid-column")}))));var o=ve(e),i=0;return o.reverse(),(o=o.filter((function(e){return!(i<n-r&&0===e.innerBlocks.length&&(i++,1))}))).slice(Math.max(0,n-r-i)).reverse()}((0,r.select("core/block-editor").getBlocks)(c),o,i);l(c,(0,t.createBlock)(n.name,he(he(he({},n.attributes),a),{},{className:J(n.attributes.className)}),u))}}})),(0,fe.withDispatch)((function(e){return{setPreviewDeviceType:function(t){var n,r;if(ye())return null===(r=e("core/edit-site"))||void 0===r?void 0:r.__experimentalSetPreviewDeviceType(t);null===(n=e("core/edit-post"))||void 0===n||n.__experimentalSetPreviewDeviceType(t)}}})),(0,fe.withSelect)((function(e,t){var n=t.clientId;return{columns:(0,e("core/block-editor").getBlockCount)(n)}})),(0,fe.withSelect)((function(e,t){var n=t.clientId,r=e("core/block-editor"),o=r.getBlockOrder,i=r.getBlocksByClientId;return{columnAttributes:o(n).map((function(e){return i(e)[0].attributes}))}})),(0,fe.withSelect)((function(e){var t,n;return ye()?{previewDeviceType:null===(n=e("core/edit-site"))||void 0===n?void 0:n.__experimentalGetPreviewDeviceType()}:{previewDeviceType:null===(t=e("core/edit-post"))||void 0===t?void 0:t.__experimentalGetPreviewDeviceType()}}))])((function(e){return(0,g.createElement)(b.Disabled.Consumer,null,(function(t){return(0,g.createElement)(_e,o({},e,{isBlockOrPatternPreview:t}))}))}));var je=function(t){s(u,t);var n,o,a=(n=u,o=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(e){return!1}}(),function(){var e,t=f(n);if(o){var r=f(this).constructor;e=Reflect.construct(t,arguments,r)}else e=t.apply(this,arguments);return d(this,e)});function u(t){var n;return i(this,u),e(l(n=a.call(this,t)),"onLeftIn",(function(){n.setState({direction:"left"}),document.addEventListener("mouseup",n.onLeftOut)})),e(l(n),"onLeftOut",(function(){n.setState({direction:null}),document.removeEventListener("mouseup",n.onLeftOut)})),e(l(n),"onRightIn",(function(){n.setState({direction:"right"}),document.addEventListener("mouseup",n.onRightOut)})),e(l(n),"onRightOut",(function(){n.setState({direction:null}),document.removeEventListener("mouseup",n.onRightOut)})),n.state={direction:null},n}return c(u,[{key:"render",value:function(){var t,n=this.props,o=n.className,i=n.hasChildBlocks,a=n.backgroundColor,c=n.setBackgroundColor,l=n.attributes,u=n.setAttributes,s=n.updateAlignment,p=l.padding,d=l.verticalAlignment,f=this.state.direction,v=h()(o,a.class,(e(t={},"wp-block-jetpack-layout-grid__padding-"+p,!0),e(t,"has-background",a.color),e(t,"components-resizable-box__container",!0),e(t,a.class,a.class),e(t,"wp-blocks-jetpack-layout-grid__showleft","right"===f),e(t,"wp-blocks-jetpack-layout-grid__showright","left"===f),e(t,"is-vertically-aligned-".concat(d),d),t)),m={backgroundColor:a.color};return(0,g.createElement)("div",{className:v,style:m},(0,g.createElement)("span",{className:"wp-blocks-jetpack-layout-grid__resize-handles"},(0,g.createElement)("div",{className:"components-resizable-box__handle components-resizable-box__side-handle components-resizable-box__handle-right",onMouseDown:this.onRightIn,"data-resize-right":!0}),(0,g.createElement)("div",{className:"components-resizable-box__handle components-resizable-box__side-handle components-resizable-box__handle-left",onMouseDown:this.onLeftIn,"data-resize-left":!0})),(0,g.createElement)(y.InnerBlocks,{templateLock:!1,renderAppender:i?void 0:function(){return(0,g.createElement)(y.InnerBlocks.ButtonBlockAppender,null)}}),(0,g.createElement)(y.InspectorControls,null,(0,g.createElement)(y.PanelColorSettings,{title:(0,r.__)("Column Color","layout-grid"),initialOpen:!0,colorSettings:[{value:a.color,onChange:c,label:(0,r.__)("Background","layout-grid")}]}),(0,g.createElement)(b.PanelBody,{title:(0,r.__)("Column Padding","layout-grid")},(0,g.createElement)("p",null,(0,r.__)("Choose padding for this column:","layout-grid")),(0,g.createElement)(b.SelectControl,{value:p,onChange:function(e){return u({padding:e})},options:[{value:"none",label:(0,r.__)("No padding","layout-grid")}].concat(S())}))),(0,g.createElement)(y.BlockControls,null,(0,g.createElement)(y.BlockVerticalAlignmentToolbar,{onChange:s,value:d})))}}]),u}(g.Component),Ee=(0,k.compose)((0,y.withColors)("backgroundColor"),(0,fe.withSelect)((function(e,t){var n=t.clientId;return{hasChildBlocks:(0,e("core/block-editor").getBlockOrder)(n).length>0}})),(0,fe.withDispatch)((function(e,t,n){return{updateAlignment:function(r){var o=t.clientId,i=t.setAttributes,a=e("core/block-editor").updateBlockAttributes,c=n.select("core/block-editor").getBlockRootClientId;i({verticalAlignment:r}),a(c(o),{verticalAlignment:null})}}})))(je),Se=[{attributes:{backgroundColor:{type:"string"},customBackgroundColor:{type:"string"},padding:{type:"string",default:"none"},verticalAlignment:{type:"string"}},save:function(t){var n,r=t.attributes,o=void 0===r?{}:r,i=o.className,a=o.backgroundColor,c=o.customBackgroundColor,l=o.padding,u=o.verticalAlignment,s=(0,y.getColorClassName)("background-color",a),p=h()(i,(e(n={},"wp-block-jetpack-layout-grid__padding-"+l,!0),e(n,"has-background",a),e(n,s,s),e(n,"is-vertically-aligned-".concat(u),u),n)),d={backgroundColor:s?void 0:c};return(0,g.createElement)("div",{className:p,style:d},(0,g.createElement)(y.InnerBlocks.Content,null))}}];function Pe(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),n.push.apply(n,r)}return n}(0,t.registerBlockType)("jetpack/layout-grid",{title:(0,r.__)("Layout Grid","layout-grid"),description:(0,r.__)("Align blocks to a global grid, with support for responsive breakpoints.","layout-grid"),icon:function(e){return e.size&&(e.width=e.size,e.height=e.size),(0,g.createElement)(b.SVG,o({xmlns:"http://www.w3.org/2000/svg",width:"24",height:"24",viewBox:"0 0 24 24"},e),(0,g.createElement)(b.Path,{d:"M19 6H6c-1.1 0-2 .9-2 2v9c0 1.1.9 2 2 2h13c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2zm-7.5 11.5H6c-.3 0-.5-.2-.5-.5V8c0-.3.2-.5.5-.5h5.5v10zm4 0H13v-10h2.5v10zm4-.5c0 .3-.2.5-.5.5h-2v-10h2c.3 0 .5.2.5.5v9z"}))},category:"design",supports:{align:["full"],html:!1},example:{attributes:{columns:2},innerBlocks:[{name:"jetpack/layout-grid-column",innerBlocks:[{name:"core/paragraph",attributes:{customFontSize:32,content:(0,r.__)("<strong>Snow Patrol</strong>","layout-grid"),align:"center"}}]},{name:"jetpack/layout-grid-column",innerBlocks:[{name:"core/image",attributes:{url:"https://s.w.org/images/core/5.3/Windbuchencom.jpg"}}]}]},attributes:function(t){for(var n=1;n<arguments.length;n++){var r=null!=arguments[n]?arguments[n]:{};n%2?Pe(Object(r),!0).forEach((function(n){e(t,n,r[n])})):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(r)):Pe(Object(r)).forEach((function(e){Object.defineProperty(t,e,Object.getOwnPropertyDescriptor(r,e))}))}return t}({gutterSize:{type:"string",default:"large"},addGutterEnds:{type:"boolean",default:!0},verticalAlignment:{type:"string"}},function(e,t){for(var n={},r=function(e){t.map((function(t){n[M(e,t)]={type:"number"},n[D(e,t)]={type:"number",default:0}}))},o=0;o<e;o++)r(o);return n}(4,z)),edit:Oe,save:function(e){var t=e.attributes,n=e.innerBlocks,r=t.className,o=function(e){for(var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{},n={},r={span:U,offset:X,row:F},o=0;o<z.length;o++)n=N(N({},n),$(Z(z[o],e,t),r));return t.addGutterEnds||(n["wp-block-jetpack-layout-gutter__nowrap"]=!0),t.verticalAlignment&&"top"!==t.verticalAlignment&&(n["are-vertically-aligned-".concat(t.verticalAlignment)]=!0),n}(n.length,t),i=h()(J(r),o,Q(t));return(0,g.createElement)("div",{className:i},(0,g.createElement)(y.InnerBlocks.Content,null))}}),(0,t.registerBlockType)("jetpack/layout-grid-column",{description:(0,r.__)("A column used inside a Layout Grid block.","layout-grid"),title:(0,r.__)("Column","layout-grid"),icon:function(e){return(0,g.createElement)(b.SVG,o({xmlns:"http://www.w3.org/2000/svg",width:"24",height:"24",viewBox:"0 0 24 24"},e),(0,g.createElement)(b.Path,{d:"M19 6H6c-1.1 0-2 .9-2 2v9c0 1.1.9 2 2 2h13c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2zM5.5 17V8c0-.3.2-.5.5-.5h5.5v10H6c-.3 0-.5-.2-.5-.5zm14 0c0 .3-.2.5-.5.5h-2v-10h2c.3 0 .5.2.5.5v9z"}))},category:"design",parent:["jetpack/layout-grid"],supports:{inserter:!1,reusable:!1,html:!1},attributes:{backgroundColor:{type:"string"},customBackgroundColor:{type:"string"},padding:{type:"string",default:"none"},verticalAlignment:{type:"string"}},edit:Ee,save:function(t){var n,r=t.attributes,o=void 0===r?{}:r,i=o.className,a=o.backgroundColor,c=o.customBackgroundColor,l=o.padding,u=o.verticalAlignment,s=(0,y.getColorClassName)("background-color",a),p=h()(i,(e(n={},"wp-block-jetpack-layout-grid__padding-"+l,!0),e(n,"has-background",a||c),e(n,s,s),e(n,"is-vertically-aligned-".concat(u),u),n)),d={backgroundColor:s?void 0:c};return(0,g.createElement)("div",{className:p,style:d},(0,g.createElement)(y.InnerBlocks.Content,null))},deprecated:Se})}()}();