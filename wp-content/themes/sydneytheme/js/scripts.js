/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./src/app.js":
/*!********************!*\
  !*** ./src/app.js ***!
  \********************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! jquery */ \"jquery\");\n/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_0__);\n/* harmony import */ var _sass_main_scss__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./sass/main.scss */ \"./src/sass/main.scss\");\n/* harmony import */ var _sass_main_scss__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_sass_main_scss__WEBPACK_IMPORTED_MODULE_1__);\n/* harmony import */ var _components_header_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./components/header.js */ \"./src/components/header.js\");\n/* harmony import */ var _components_header_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_components_header_js__WEBPACK_IMPORTED_MODULE_2__);\n/* harmony import */ var _components_slider_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./components/slider.js */ \"./src/components/slider.js\");\n/* harmony import */ var _components_slider_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_components_slider_js__WEBPACK_IMPORTED_MODULE_3__);\n\n\n\n\n\n//# sourceURL=webpack:///./src/app.js?");

/***/ }),

/***/ "./src/components/header.js":
/*!**********************************!*\
  !*** ./src/components/header.js ***!
  \**********************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("(function ($, root, undefined) {\n\n    $(function () {\n\n        'use strict';\n    });\n\n    $(document).ready(function () {\n        $(\".nav__hamburger-icon\").click(function () {\n            $(\".nav__hamburger-icon\").toggleClass(\"nav__open\");\n            console.log('clicked');\n        });\n    });\n})(jQuery, this);\n\n//# sourceURL=webpack:///./src/components/header.js?");

/***/ }),

/***/ "./src/components/slider.js":
/*!**********************************!*\
  !*** ./src/components/slider.js ***!
  \**********************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("(function ($, root, undefined) {\n\n  $(function () {\n\n    'use strict';\n\n    var slides;\n    var currentNextSlide = [];\n    var currentPreviousSlide = [];\n    var counter = 0;\n    var slidesArray = [];\n\n    // stop multiple clicking while animation is still happening\n    var nextFinished = 1;\n    var previousFinished = 1;\n\n    $(document).ready(function () {\n      slides = document.getElementById(\"slider\").children;\n      slidesArray = Array.prototype.slice.call(slides);\n\n      $('#next').click(function () {\n        if (previousFinished === 1 && nextFinished === 1) {\n          // change the z-index of the images on click next, to reset the styles for the animation. This is needed due to when the previous button is clicked the styles change as the slides come back, so we need to reset the styles of going forward. \n          $(\".slider__slide-wrapper.previous:nth-child(2)\").css({ \"z-index\": 3 });\n          $(\".slider__slide-wrapper.previous:last-child\").css({ \"z-index\": 1 });\n          $(\".slider__slide-wrapper.previous:first-child\").css({ \"z-index\": 2 });\n          nextSlide();\n          nextFinished = 0;\n          previousFinished = 0;\n          setTimeout(function () {\n            nextFinished = 1;\n            previousFinished = 1;\n          }, 2000);\n        }\n      });\n\n      $('#previous').click(function () {\n        if (previousFinished === 1 && nextFinished === 1) {\n          previousSlide();\n          nextFinished = 0;\n          previousFinished = 0;\n          setTimeout(function () {\n            nextFinished = 1;\n            previousFinished = 1;\n          }, 2000);\n        }\n      });\n    });\n\n    var nextSlide = function () {\n      // add this in a timeout to delay the time it takes to remove styles from previous button, otherwise the slides overlap in wrong order before the next function happens.\n      setTimeout(function () {\n        $(\".previous\").removeClass(\"previous\");\n        $(\".slider__slide-wrapper\").addClass(\"next\");\n        // remove injected css to allow styles to work as expected, as next is default css. \n        $(\".slider__slide-wrapper\").css(\"z-index\", \"\");\n      }, 125);\n\n      // keep track of what number of slides there are to be able to change the order, they go up in ascending order going forward.\n      counter++;\n      if (counter >= 3) {\n        counter = 0;\n      }\n      currentNextSlide[0] = slidesArray[0];\n      // removes the first slide from array and returns that removed slide to the end of the array. But changes length of array.\n      slidesArray.shift();\n      // use push to add the slide to the array and return the new length. \n      slidesArray.push(currentNextSlide[0]);\n      // now insert the last slide to the end of the slider\n      $('#slider').append(slidesArray[2]);\n    };\n\n    var previousSlide = function () {\n      // change the z-index of the images on click previous, to reset the styles for the animation. This is needed due to the fact the styles are being set on default for going next. \n      $(\".slider__slide-wrapper\").addClass(\"previous\");\n      $(\".next\").removeClass(\"next\");\n      $(\".slider__slide-wrapper.previous:nth-child(2)\").css(\"z-index\", \"\");\n      setTimeout(function () {\n        $(\".slider__slide-wrapper.previous:nth-child(2)\").css({ \"z-index\": 1 });\n      }, 1750);\n\n      // keep track of what number of slides there are to be able to change the order, now they go down in descending order going back.\n      counter--;\n      if (counter <= -1) {\n        counter = 2;\n      }\n      currentPreviousSlide[0] = slidesArray[2];\n      // use push to remove the slide from the array and return the new length. \n      slidesArray.pop();\n      // adds new slide to the beginning of the array, and returns the new length.\n      slidesArray.unshift(currentPreviousSlide[0]);\n      // now insert the first child slide to the beginning of the slider\n      $('#slider').prepend(slidesArray[0]);\n    };\n  });\n})(jQuery, this);\n\n//# sourceURL=webpack:///./src/components/slider.js?");

/***/ }),

/***/ "./src/sass/main.scss":
/*!****************************!*\
  !*** ./src/sass/main.scss ***!
  \****************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

eval("// extracted by mini-css-extract-plugin\n\n//# sourceURL=webpack:///./src/sass/main.scss?");

/***/ }),

/***/ 0:
/*!***********************************************!*\
  !*** multi ./src/app.js ./src/sass/main.scss ***!
  \***********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

eval("__webpack_require__(/*! ./src/app.js */\"./src/app.js\");\nmodule.exports = __webpack_require__(/*! ./src/sass/main.scss */\"./src/sass/main.scss\");\n\n\n//# sourceURL=webpack:///multi_./src/app.js_./src/sass/main.scss?");

/***/ }),

/***/ "jquery":
/*!*************************!*\
  !*** external "jQuery" ***!
  \*************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("module.exports = jQuery;\n\n//# sourceURL=webpack:///external_%22jQuery%22?");

/***/ })

/******/ });