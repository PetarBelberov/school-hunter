(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["app"],{

/***/ "./assets/css/app.scss":
/*!*****************************!*\
  !*** ./assets/css/app.scss ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./assets/js/app.js":
/*!**************************!*\
  !*** ./assets/js/app.js ***!
  \**************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _css_app_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../css/app.scss */ "./assets/css/app.scss");
/* harmony import */ var _css_app_scss__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_css_app_scss__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var vue__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! vue */ "./node_modules/vue/dist/vue.esm.js");
/* harmony import */ var _collapse_vue__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./collapse.vue */ "./assets/js/collapse.vue");




var $ = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");
/**
* Create a fresh Vue Application instance
*/
// new Vue({
//     el: '#collapse',
//     components: {collapse}
//   });


var accordion = {
  props: ['title'],
  data: function data() {
    return {
      active: false
    };
  },
  template: "\n              <div class=\"accordion-content\">\n                  <div class=\"tab__header\">\n                      <a href=\"#\" class=\"tab__link p-4 block bg-blue-dark hover:bg-blue-darker no-underline text-white border-b-2 border-white flex justify-between\" @click.prevent=\"active = !active\">\n                          <h4 class=\"listing-section__title\">{{ title }}</h4>\n                          <span class=\"down-Arrow\" v-show=\"!active\">&#9660;</span>\n                          <span class=\"up-Arrow\" v-show=\"active\">&#9650;</span>\n                      </a>\n                  </div>\n                  <div class=\"tab__content p-2\" v-show=\"active\"><slot /></div>            \n              </div>\n  "
};
var subaccordion = {
  props: ['title'],
  data: function data() {
    return {
      active: false
    };
  },
  template: "\n              <div class=\"subaccordion-content\">\n                  <div class=\"tab__header\">\n                      <a href=\"#\" class=\"tab__link p-4 block bg-blue-dark hover:bg-blue-darker no-underline text-white border-b-2 border-white flex justify-between\" @click.prevent=\"active = !active\">\n                          <h5 class=\"listing-section__title\">{{ title }}</h5>\n                          <span class=\"down-Arrow\" v-show=\"!active\">&#9660;</span>\n                          <span class=\"up-Arrow\" v-show=\"active\">&#9650;</span>\n                      </a>\n                  </div>\n                  <div class=\"tab__content p-2\" v-show=\"active\"><slot /></div>            \n              </div>\n  "
};
var app = new vue__WEBPACK_IMPORTED_MODULE_1__["default"]({
  el: '.accordion-container',
  components: {
    accordion: accordion,
    subaccordion: subaccordion
  }
});

/***/ }),

/***/ "./assets/js/collapse.vue":
/*!********************************!*\
  !*** ./assets/js/collapse.vue ***!
  \********************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _collapse_vue_vue_type_template_id_f4975896_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./collapse.vue?vue&type=template&id=f4975896&scoped=true& */ "./assets/js/collapse.vue?vue&type=template&id=f4975896&scoped=true&");
/* harmony import */ var _collapse_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./collapse.vue?vue&type=script&lang=js& */ "./assets/js/collapse.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _collapse_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _collapse_vue_vue_type_template_id_f4975896_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"],
  _collapse_vue_vue_type_template_id_f4975896_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  "f4975896",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "assets/js/collapse.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./assets/js/collapse.vue?vue&type=script&lang=js&":
/*!*********************************************************!*\
  !*** ./assets/js/collapse.vue?vue&type=script&lang=js& ***!
  \*********************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_collapse_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../node_modules/babel-loader/lib??ref--0-0!../../node_modules/vue-loader/lib??vue-loader-options!./collapse.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./assets/js/collapse.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_collapse_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./assets/js/collapse.vue?vue&type=template&id=f4975896&scoped=true&":
/*!***************************************************************************!*\
  !*** ./assets/js/collapse.vue?vue&type=template&id=f4975896&scoped=true& ***!
  \***************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_collapse_vue_vue_type_template_id_f4975896_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../node_modules/vue-loader/lib??vue-loader-options!./collapse.vue?vue&type=template&id=f4975896&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./assets/js/collapse.vue?vue&type=template&id=f4975896&scoped=true&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_collapse_vue_vue_type_template_id_f4975896_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_collapse_vue_vue_type_template_id_f4975896_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./assets/js/collapse.vue?vue&type=script&lang=js&":
/*!*****************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--0-0!./node_modules/vue-loader/lib??vue-loader-options!./assets/js/collapse.vue?vue&type=script&lang=js& ***!
  \*****************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
//
//
//
//
//
//
/* harmony default export */ __webpack_exports__["default"] = ({
  name: "collapse"
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./assets/js/collapse.vue?vue&type=template&id=f4975896&scoped=true&":
/*!*********************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./assets/js/collapse.vue?vue&type=template&id=f4975896&scoped=true& ***!
  \*********************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _vm._m(0)
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", [
      _c("p", [_vm._v("This is an example of a new components in VueJs")])
    ])
  }
]
render._withStripped = true



/***/ })

},[["./assets/js/app.js","runtime","vendors~app"]]]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvY3NzL2FwcC5zY3NzIiwid2VicGFjazovLy8uL2Fzc2V0cy9qcy9hcHAuanMiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2pzL2NvbGxhcHNlLnZ1ZSIsIndlYnBhY2s6Ly8vLi9hc3NldHMvanMvY29sbGFwc2UudnVlP2QxOGQiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2pzL2NvbGxhcHNlLnZ1ZT9mMDkyIiwid2VicGFjazovLy9hc3NldHMvanMvY29sbGFwc2UudnVlIiwid2VicGFjazovLy8uL2Fzc2V0cy9qcy9jb2xsYXBzZS52dWU/NTcyMiJdLCJuYW1lcyI6WyIkIiwicmVxdWlyZSIsImFjY29yZGlvbiIsInByb3BzIiwiZGF0YSIsImFjdGl2ZSIsInRlbXBsYXRlIiwic3ViYWNjb3JkaW9uIiwiYXBwIiwiVnVlIiwiZWwiLCJjb21wb25lbnRzIl0sIm1hcHBpbmdzIjoiOzs7Ozs7Ozs7QUFBQSx1Qzs7Ozs7Ozs7Ozs7O0FDQUE7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUFBO0FBQ0E7QUFDQTs7QUFFQSxJQUFJQSxDQUFDLEdBQUdDLG1CQUFPLENBQUMsb0RBQUQsQ0FBZjtBQUVBOzs7QUFHQTtBQUNBO0FBQ0E7QUFDQTs7O0FBR0UsSUFBSUMsU0FBUyxHQUFHO0FBQ2RDLE9BQUssRUFBRSxDQUNMLE9BREssQ0FETztBQUlkQyxNQUpjLGtCQUlQO0FBQ0wsV0FBTztBQUNMQyxZQUFNLEVBQUU7QUFESCxLQUFQO0FBR0QsR0FSYTtBQVNkQyxVQUFRO0FBVE0sQ0FBaEI7QUF1QkEsSUFBSUMsWUFBWSxHQUFHO0FBQ2pCSixPQUFLLEVBQUUsQ0FDTCxPQURLLENBRFU7QUFJakJDLE1BSmlCLGtCQUlWO0FBQ0wsV0FBTztBQUNMQyxZQUFNLEVBQUU7QUFESCxLQUFQO0FBR0QsR0FSZ0I7QUFTakJDLFVBQVE7QUFUUyxDQUFuQjtBQXVCQSxJQUFJRSxHQUFHLEdBQUcsSUFBSUMsMkNBQUosQ0FBUTtBQUNoQkMsSUFBRSxFQUFFLHNCQURZO0FBRWhCQyxZQUFVLEVBQUU7QUFDVlQsYUFBUyxFQUFUQSxTQURVO0FBRVZLLGdCQUFZLEVBQVpBO0FBRlU7QUFGSSxDQUFSLENBQVYsQzs7Ozs7Ozs7Ozs7O0FDN0RGO0FBQUE7QUFBQTtBQUFBO0FBQW1HO0FBQ3ZDO0FBQ0w7OztBQUd2RDtBQUMwRjtBQUMxRixnQkFBZ0IsMkdBQVU7QUFDMUIsRUFBRSw4RUFBTTtBQUNSLEVBQUUsK0ZBQU07QUFDUixFQUFFLHdHQUFlO0FBQ2pCO0FBQ0E7QUFDQTtBQUNBOztBQUVBOztBQUVBO0FBQ0EsSUFBSSxLQUFVLEVBQUUsWUFpQmY7QUFDRDtBQUNlLGdGOzs7Ozs7Ozs7Ozs7QUN0Q2Y7QUFBQTtBQUFBLHdDQUFrTCxDQUFnQixvUEFBRyxFQUFDLEM7Ozs7Ozs7Ozs7OztBQ0F0TTtBQUFBO0FBQUE7QUFBQTtBQUFBO0FBQUE7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7O0FDT0E7QUFDQTtBQURBLEc7Ozs7Ozs7Ozs7OztBQ1BBO0FBQUE7QUFBQTtBQUFBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EiLCJmaWxlIjoiYXBwLmpzIiwic291cmNlc0NvbnRlbnQiOlsiLy8gZXh0cmFjdGVkIGJ5IG1pbmktY3NzLWV4dHJhY3QtcGx1Z2luIiwiaW1wb3J0ICcuLi9jc3MvYXBwLnNjc3MnO1xyXG5pbXBvcnQgVnVlIGZyb20gJ3Z1ZSc7XHJcbmltcG9ydCBjb2xsYXBzZSBmcm9tICcuL2NvbGxhcHNlLnZ1ZScgXHJcblxyXG52YXIgJCA9IHJlcXVpcmUoJ2pxdWVyeScpO1xyXG5cclxuLyoqXHJcbiogQ3JlYXRlIGEgZnJlc2ggVnVlIEFwcGxpY2F0aW9uIGluc3RhbmNlXHJcbiovXHJcbi8vIG5ldyBWdWUoe1xyXG4vLyAgICAgZWw6ICcjY29sbGFwc2UnLFxyXG4vLyAgICAgY29tcG9uZW50czoge2NvbGxhcHNlfVxyXG4vLyAgIH0pO1xyXG5cclxuXHJcbiAgdmFyIGFjY29yZGlvbiA9IHtcclxuICAgIHByb3BzOiBbXHJcbiAgICAgICd0aXRsZSdcclxuICAgIF0sXHJcbiAgICBkYXRhKCkge1xyXG4gICAgICByZXR1cm4ge1xyXG4gICAgICAgIGFjdGl2ZTogZmFsc2UsXHJcbiAgICAgIH1cclxuICAgIH0sXHJcbiAgICB0ZW1wbGF0ZTogYFxyXG4gICAgICAgICAgICAgIDxkaXYgY2xhc3M9XCJhY2NvcmRpb24tY29udGVudFwiPlxyXG4gICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPVwidGFiX19oZWFkZXJcIj5cclxuICAgICAgICAgICAgICAgICAgICAgIDxhIGhyZWY9XCIjXCIgY2xhc3M9XCJ0YWJfX2xpbmsgcC00IGJsb2NrIGJnLWJsdWUtZGFyayBob3ZlcjpiZy1ibHVlLWRhcmtlciBuby11bmRlcmxpbmUgdGV4dC13aGl0ZSBib3JkZXItYi0yIGJvcmRlci13aGl0ZSBmbGV4IGp1c3RpZnktYmV0d2VlblwiIEBjbGljay5wcmV2ZW50PVwiYWN0aXZlID0gIWFjdGl2ZVwiPlxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgIDxoNCBjbGFzcz1cImxpc3Rpbmctc2VjdGlvbl9fdGl0bGVcIj57eyB0aXRsZSB9fTwvaDQ+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgPHNwYW4gY2xhc3M9XCJkb3duLUFycm93XCIgdi1zaG93PVwiIWFjdGl2ZVwiPiYjOTY2MDs8L3NwYW4+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgPHNwYW4gY2xhc3M9XCJ1cC1BcnJvd1wiIHYtc2hvdz1cImFjdGl2ZVwiPiYjOTY1MDs8L3NwYW4+XHJcbiAgICAgICAgICAgICAgICAgICAgICA8L2E+XHJcbiAgICAgICAgICAgICAgICAgIDwvZGl2PlxyXG4gICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPVwidGFiX19jb250ZW50IHAtMlwiIHYtc2hvdz1cImFjdGl2ZVwiPjxzbG90IC8+PC9kaXY+ICAgICAgICAgICAgXHJcbiAgICAgICAgICAgICAgPC9kaXY+XHJcbiAgYFxyXG4gIH1cclxuXHJcbiAgdmFyIHN1YmFjY29yZGlvbiA9IHtcclxuICAgIHByb3BzOiBbXHJcbiAgICAgICd0aXRsZSdcclxuICAgIF0sXHJcbiAgICBkYXRhKCkge1xyXG4gICAgICByZXR1cm4ge1xyXG4gICAgICAgIGFjdGl2ZTogZmFsc2UsXHJcbiAgICAgIH1cclxuICAgIH0sXHJcbiAgICB0ZW1wbGF0ZTogYFxyXG4gICAgICAgICAgICAgIDxkaXYgY2xhc3M9XCJzdWJhY2NvcmRpb24tY29udGVudFwiPlxyXG4gICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPVwidGFiX19oZWFkZXJcIj5cclxuICAgICAgICAgICAgICAgICAgICAgIDxhIGhyZWY9XCIjXCIgY2xhc3M9XCJ0YWJfX2xpbmsgcC00IGJsb2NrIGJnLWJsdWUtZGFyayBob3ZlcjpiZy1ibHVlLWRhcmtlciBuby11bmRlcmxpbmUgdGV4dC13aGl0ZSBib3JkZXItYi0yIGJvcmRlci13aGl0ZSBmbGV4IGp1c3RpZnktYmV0d2VlblwiIEBjbGljay5wcmV2ZW50PVwiYWN0aXZlID0gIWFjdGl2ZVwiPlxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgIDxoNSBjbGFzcz1cImxpc3Rpbmctc2VjdGlvbl9fdGl0bGVcIj57eyB0aXRsZSB9fTwvaDU+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgPHNwYW4gY2xhc3M9XCJkb3duLUFycm93XCIgdi1zaG93PVwiIWFjdGl2ZVwiPiYjOTY2MDs8L3NwYW4+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgPHNwYW4gY2xhc3M9XCJ1cC1BcnJvd1wiIHYtc2hvdz1cImFjdGl2ZVwiPiYjOTY1MDs8L3NwYW4+XHJcbiAgICAgICAgICAgICAgICAgICAgICA8L2E+XHJcbiAgICAgICAgICAgICAgICAgIDwvZGl2PlxyXG4gICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPVwidGFiX19jb250ZW50IHAtMlwiIHYtc2hvdz1cImFjdGl2ZVwiPjxzbG90IC8+PC9kaXY+ICAgICAgICAgICAgXHJcbiAgICAgICAgICAgICAgPC9kaXY+XHJcbiAgYFxyXG4gIH1cclxuICBcclxuICB2YXIgYXBwID0gbmV3IFZ1ZSh7XHJcbiAgICBlbDogJy5hY2NvcmRpb24tY29udGFpbmVyJyxcclxuICAgIGNvbXBvbmVudHM6IHtcclxuICAgICAgYWNjb3JkaW9uLFxyXG4gICAgICBzdWJhY2NvcmRpb25cclxuICAgIH1cclxuICB9KTsiLCJpbXBvcnQgeyByZW5kZXIsIHN0YXRpY1JlbmRlckZucyB9IGZyb20gXCIuL2NvbGxhcHNlLnZ1ZT92dWUmdHlwZT10ZW1wbGF0ZSZpZD1mNDk3NTg5NiZzY29wZWQ9dHJ1ZSZcIlxuaW1wb3J0IHNjcmlwdCBmcm9tIFwiLi9jb2xsYXBzZS52dWU/dnVlJnR5cGU9c2NyaXB0Jmxhbmc9anMmXCJcbmV4cG9ydCAqIGZyb20gXCIuL2NvbGxhcHNlLnZ1ZT92dWUmdHlwZT1zY3JpcHQmbGFuZz1qcyZcIlxuXG5cbi8qIG5vcm1hbGl6ZSBjb21wb25lbnQgKi9cbmltcG9ydCBub3JtYWxpemVyIGZyb20gXCIhLi4vLi4vbm9kZV9tb2R1bGVzL3Z1ZS1sb2FkZXIvbGliL3J1bnRpbWUvY29tcG9uZW50Tm9ybWFsaXplci5qc1wiXG52YXIgY29tcG9uZW50ID0gbm9ybWFsaXplcihcbiAgc2NyaXB0LFxuICByZW5kZXIsXG4gIHN0YXRpY1JlbmRlckZucyxcbiAgZmFsc2UsXG4gIG51bGwsXG4gIFwiZjQ5NzU4OTZcIixcbiAgbnVsbFxuICBcbilcblxuLyogaG90IHJlbG9hZCAqL1xuaWYgKG1vZHVsZS5ob3QpIHtcbiAgdmFyIGFwaSA9IHJlcXVpcmUoXCJDOlxcXFx4YW1wcFxcXFxodGRvY3NcXFxcc2Nob29sLWh1bnRlclxcXFxub2RlX21vZHVsZXNcXFxcdnVlLWhvdC1yZWxvYWQtYXBpXFxcXGRpc3RcXFxcaW5kZXguanNcIilcbiAgYXBpLmluc3RhbGwocmVxdWlyZSgndnVlJykpXG4gIGlmIChhcGkuY29tcGF0aWJsZSkge1xuICAgIG1vZHVsZS5ob3QuYWNjZXB0KClcbiAgICBpZiAoIWFwaS5pc1JlY29yZGVkKCdmNDk3NTg5NicpKSB7XG4gICAgICBhcGkuY3JlYXRlUmVjb3JkKCdmNDk3NTg5NicsIGNvbXBvbmVudC5vcHRpb25zKVxuICAgIH0gZWxzZSB7XG4gICAgICBhcGkucmVsb2FkKCdmNDk3NTg5NicsIGNvbXBvbmVudC5vcHRpb25zKVxuICAgIH1cbiAgICBtb2R1bGUuaG90LmFjY2VwdChcIi4vY29sbGFwc2UudnVlP3Z1ZSZ0eXBlPXRlbXBsYXRlJmlkPWY0OTc1ODk2JnNjb3BlZD10cnVlJlwiLCBmdW5jdGlvbiAoKSB7XG4gICAgICBhcGkucmVyZW5kZXIoJ2Y0OTc1ODk2Jywge1xuICAgICAgICByZW5kZXI6IHJlbmRlcixcbiAgICAgICAgc3RhdGljUmVuZGVyRm5zOiBzdGF0aWNSZW5kZXJGbnNcbiAgICAgIH0pXG4gICAgfSlcbiAgfVxufVxuY29tcG9uZW50Lm9wdGlvbnMuX19maWxlID0gXCJhc3NldHMvanMvY29sbGFwc2UudnVlXCJcbmV4cG9ydCBkZWZhdWx0IGNvbXBvbmVudC5leHBvcnRzIiwiaW1wb3J0IG1vZCBmcm9tIFwiLSEuLi8uLi9ub2RlX21vZHVsZXMvYmFiZWwtbG9hZGVyL2xpYi9pbmRleC5qcz8/cmVmLS0wLTAhLi4vLi4vbm9kZV9tb2R1bGVzL3Z1ZS1sb2FkZXIvbGliL2luZGV4LmpzPz92dWUtbG9hZGVyLW9wdGlvbnMhLi9jb2xsYXBzZS52dWU/dnVlJnR5cGU9c2NyaXB0Jmxhbmc9anMmXCI7IGV4cG9ydCBkZWZhdWx0IG1vZDsgZXhwb3J0ICogZnJvbSBcIi0hLi4vLi4vbm9kZV9tb2R1bGVzL2JhYmVsLWxvYWRlci9saWIvaW5kZXguanM/P3JlZi0tMC0wIS4uLy4uL25vZGVfbW9kdWxlcy92dWUtbG9hZGVyL2xpYi9pbmRleC5qcz8/dnVlLWxvYWRlci1vcHRpb25zIS4vY29sbGFwc2UudnVlP3Z1ZSZ0eXBlPXNjcmlwdCZsYW5nPWpzJlwiIiwiZXhwb3J0ICogZnJvbSBcIi0hLi4vLi4vbm9kZV9tb2R1bGVzL3Z1ZS1sb2FkZXIvbGliL2xvYWRlcnMvdGVtcGxhdGVMb2FkZXIuanM/P3Z1ZS1sb2FkZXItb3B0aW9ucyEuLi8uLi9ub2RlX21vZHVsZXMvdnVlLWxvYWRlci9saWIvaW5kZXguanM/P3Z1ZS1sb2FkZXItb3B0aW9ucyEuL2NvbGxhcHNlLnZ1ZT92dWUmdHlwZT10ZW1wbGF0ZSZpZD1mNDk3NTg5NiZzY29wZWQ9dHJ1ZSZcIiIsIjx0ZW1wbGF0ZT5cclxuICAgPGRpdj5cclxuICAgICAgIDxwPlRoaXMgaXMgYW4gZXhhbXBsZSBvZiBhIG5ldyBjb21wb25lbnRzIGluIFZ1ZUpzPC9wPlxyXG4gICA8L2Rpdj5cclxuPC90ZW1wbGF0ZT5cclxuXHJcbjxzY3JpcHQ+XHJcbiAgIGV4cG9ydCBkZWZhdWx0IHtcclxuICAgICAgIG5hbWU6IFwiY29sbGFwc2VcIlxyXG4gICB9XHJcbjwvc2NyaXB0PlxyXG5cclxuPHN0eWxlIHNjb3BlZD5cclxuXHJcbjwvc3R5bGU+IiwidmFyIHJlbmRlciA9IGZ1bmN0aW9uKCkge1xuICB2YXIgX3ZtID0gdGhpc1xuICB2YXIgX2ggPSBfdm0uJGNyZWF0ZUVsZW1lbnRcbiAgdmFyIF9jID0gX3ZtLl9zZWxmLl9jIHx8IF9oXG4gIHJldHVybiBfdm0uX20oMClcbn1cbnZhciBzdGF0aWNSZW5kZXJGbnMgPSBbXG4gIGZ1bmN0aW9uKCkge1xuICAgIHZhciBfdm0gPSB0aGlzXG4gICAgdmFyIF9oID0gX3ZtLiRjcmVhdGVFbGVtZW50XG4gICAgdmFyIF9jID0gX3ZtLl9zZWxmLl9jIHx8IF9oXG4gICAgcmV0dXJuIF9jKFwiZGl2XCIsIFtcbiAgICAgIF9jKFwicFwiLCBbX3ZtLl92KFwiVGhpcyBpcyBhbiBleGFtcGxlIG9mIGEgbmV3IGNvbXBvbmVudHMgaW4gVnVlSnNcIildKVxuICAgIF0pXG4gIH1cbl1cbnJlbmRlci5fd2l0aFN0cmlwcGVkID0gdHJ1ZVxuXG5leHBvcnQgeyByZW5kZXIsIHN0YXRpY1JlbmRlckZucyB9Il0sInNvdXJjZVJvb3QiOiIifQ==