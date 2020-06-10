(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["app-modules-auth-auth-module"],{

/***/ "./src/app/modules/auth/auth-routing.module.ts":
/*!*****************************************************!*\
  !*** ./src/app/modules/auth/auth-routing.module.ts ***!
  \*****************************************************/
/*! exports provided: AuthRoutingModule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "AuthRoutingModule", function() { return AuthRoutingModule; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm5/router.js");
/* harmony import */ var _layout_auth_layout_auth_layout_component__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./layout/auth-layout/auth-layout.component */ "./src/app/modules/auth/layout/auth-layout/auth-layout.component.ts");
/* harmony import */ var _pages_auth_login_auth_login_component__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./pages/auth-login/auth-login.component */ "./src/app/modules/auth/pages/auth-login/auth-login.component.ts");
/* harmony import */ var _pages_auth_signup_auth_signup_component__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./pages/auth-signup/auth-signup.component */ "./src/app/modules/auth/pages/auth-signup/auth-signup.component.ts");
/* harmony import */ var _pages_auth_recovery_mail_auth_recovery_mail_component__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./pages/auth-recovery-mail/auth-recovery-mail.component */ "./src/app/modules/auth/pages/auth-recovery-mail/auth-recovery-mail.component.ts");
/* harmony import */ var _pages_auth_recovery_password_auth_recovery_password_component__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./pages/auth-recovery-password/auth-recovery-password.component */ "./src/app/modules/auth/pages/auth-recovery-password/auth-recovery-password.component.ts");
/* harmony import */ var _pages_auth_recovery_success_auth_recovery_success_component__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ./pages/auth-recovery-success/auth-recovery-success.component */ "./src/app/modules/auth/pages/auth-recovery-success/auth-recovery-success.component.ts");









//======================================================================
var routes = [
    {
        path: "",
        component: _layout_auth_layout_auth_layout_component__WEBPACK_IMPORTED_MODULE_3__["AuthLayoutComponent"],
        children: [
            { path: "", component: _pages_auth_login_auth_login_component__WEBPACK_IMPORTED_MODULE_4__["AuthLoginComponent"] },
            { path: "login", component: _pages_auth_login_auth_login_component__WEBPACK_IMPORTED_MODULE_4__["AuthLoginComponent"] },
            { path: "signup", component: _pages_auth_signup_auth_signup_component__WEBPACK_IMPORTED_MODULE_5__["AuthSignupComponent"] },
            { path: "recovery/email", component: _pages_auth_recovery_mail_auth_recovery_mail_component__WEBPACK_IMPORTED_MODULE_6__["AuthRecoveryMailComponent"] },
            { path: "recovery/password", component: _pages_auth_recovery_password_auth_recovery_password_component__WEBPACK_IMPORTED_MODULE_7__["AuthRecoveryPasswordComponent"] },
            { path: "success/:type", component: _pages_auth_recovery_success_auth_recovery_success_component__WEBPACK_IMPORTED_MODULE_8__["AuthRecoverySuccessComponent"] },
        ]
    }
];
//======================================================================
var AuthRoutingModule = /** @class */ (function () {
    //======================================================================
    function AuthRoutingModule() {
    }
    AuthRoutingModule = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["NgModule"])({
            imports: [
                _angular_router__WEBPACK_IMPORTED_MODULE_2__["RouterModule"].forChild(routes)
            ],
            exports: [
                _angular_router__WEBPACK_IMPORTED_MODULE_2__["RouterModule"]
            ]
        })
        //======================================================================
    ], AuthRoutingModule);
    return AuthRoutingModule;
}());



/***/ }),

/***/ "./src/app/modules/auth/auth.module.ts":
/*!*********************************************!*\
  !*** ./src/app/modules/auth/auth.module.ts ***!
  \*********************************************/
/*! exports provided: AuthModule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "AuthModule", function() { return AuthModule; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _angular_common__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/common */ "./node_modules/@angular/common/fesm5/common.js");
/* harmony import */ var _pages_auth_login_auth_login_component__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./pages/auth-login/auth-login.component */ "./src/app/modules/auth/pages/auth-login/auth-login.component.ts");
/* harmony import */ var _pages_auth_signup_auth_signup_component__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./pages/auth-signup/auth-signup.component */ "./src/app/modules/auth/pages/auth-signup/auth-signup.component.ts");
/* harmony import */ var _pages_auth_recovery_mail_auth_recovery_mail_component__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./pages/auth-recovery-mail/auth-recovery-mail.component */ "./src/app/modules/auth/pages/auth-recovery-mail/auth-recovery-mail.component.ts");
/* harmony import */ var _pages_auth_recovery_password_auth_recovery_password_component__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./pages/auth-recovery-password/auth-recovery-password.component */ "./src/app/modules/auth/pages/auth-recovery-password/auth-recovery-password.component.ts");
/* harmony import */ var _pages_auth_recovery_success_auth_recovery_success_component__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./pages/auth-recovery-success/auth-recovery-success.component */ "./src/app/modules/auth/pages/auth-recovery-success/auth-recovery-success.component.ts");
/* harmony import */ var _layout_auth_layout_auth_layout_component__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ./layout/auth-layout/auth-layout.component */ "./src/app/modules/auth/layout/auth-layout/auth-layout.component.ts");
/* harmony import */ var _components_social_login_social_login_component__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! ./components/social-login/social-login.component */ "./src/app/modules/auth/components/social-login/social-login.component.ts");
/* harmony import */ var _components_or_holder_or_holder_component__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! ./components/or-holder/or-holder.component */ "./src/app/modules/auth/components/or-holder/or-holder.component.ts");
/* harmony import */ var _auth_routing_module__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! ./auth-routing.module */ "./src/app/modules/auth/auth-routing.module.ts");
/* harmony import */ var _shared_shared_module__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! ../shared/shared.module */ "./src/app/modules/shared/shared.module.ts");
/* harmony import */ var _lib_components_inputs_ngx_ea_intl_tel_input_ngx_ea_intl_tel_input_module__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! ../lib/components/inputs/ngx-ea-intl-tel-input/ngx-ea-intl-tel-input.module */ "./src/app/modules/lib/components/inputs/ngx-ea-intl-tel-input/ngx-ea-intl-tel-input.module.ts");














//======================================================================
var AuthModule = /** @class */ (function () {
    //======================================================================
    function AuthModule() {
    }
    AuthModule = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["NgModule"])({
            declarations: [
                _pages_auth_login_auth_login_component__WEBPACK_IMPORTED_MODULE_3__["AuthLoginComponent"],
                _pages_auth_signup_auth_signup_component__WEBPACK_IMPORTED_MODULE_4__["AuthSignupComponent"],
                _pages_auth_recovery_mail_auth_recovery_mail_component__WEBPACK_IMPORTED_MODULE_5__["AuthRecoveryMailComponent"],
                _pages_auth_recovery_password_auth_recovery_password_component__WEBPACK_IMPORTED_MODULE_6__["AuthRecoveryPasswordComponent"],
                _pages_auth_recovery_success_auth_recovery_success_component__WEBPACK_IMPORTED_MODULE_7__["AuthRecoverySuccessComponent"],
                _layout_auth_layout_auth_layout_component__WEBPACK_IMPORTED_MODULE_8__["AuthLayoutComponent"],
                _components_social_login_social_login_component__WEBPACK_IMPORTED_MODULE_9__["SocialLoginComponent"],
                _components_or_holder_or_holder_component__WEBPACK_IMPORTED_MODULE_10__["OrHolderComponent"],
            ],
            imports: [
                _shared_shared_module__WEBPACK_IMPORTED_MODULE_12__["SharedModule"],
                _angular_common__WEBPACK_IMPORTED_MODULE_2__["CommonModule"],
                _auth_routing_module__WEBPACK_IMPORTED_MODULE_11__["AuthRoutingModule"],
                _lib_components_inputs_ngx_ea_intl_tel_input_ngx_ea_intl_tel_input_module__WEBPACK_IMPORTED_MODULE_13__["NgxEaIntlTelInputModule"]
            ]
        })
        //======================================================================
    ], AuthModule);
    return AuthModule;
}());



/***/ }),

/***/ "./src/app/modules/auth/components/or-holder/or-holder.component.html":
/*!****************************************************************************!*\
  !*** ./src/app/modules/auth/components/or-holder/or-holder.component.html ***!
  \****************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<div class=\"or-holder pt-32px pb-32px\">\n  <div class=\"line\"></div>\n  <p class=\"p i-bold\">{{\"global.or\" | translate}}</p>\n  <div class=\"line\"></div>\n</div>"

/***/ }),

/***/ "./src/app/modules/auth/components/or-holder/or-holder.component.scss":
/*!****************************************************************************!*\
  !*** ./src/app/modules/auth/components/or-holder/or-holder.component.scss ***!
  \****************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = ".or-holder {\n  display: -webkit-box;\n  display: flex;\n  -webkit-box-align: center;\n          align-items: center; }\n  .or-holder p {\n    padding: 0px 8px;\n    color: #EDEEF9;\n    -webkit-user-select: none;\n       -moz-user-select: none;\n        -ms-user-select: none;\n            user-select: none; }\n  .or-holder .line {\n    height: 3px;\n    background-color: #EDEEF9;\n    -webkit-box-flex: 1;\n            flex-grow: 1; }\n\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIi9Vc2Vycy9iL0RvY3VtZW50cy9mcmVlbGFuY2UvaWRlYWxpemVyci1hbmd1bGFyL3NyYy9hcHAvbW9kdWxlcy9hdXRoL2NvbXBvbmVudHMvb3ItaG9sZGVyL29yLWhvbGRlci5jb21wb25lbnQuc2NzcyIsIi9Vc2Vycy9iL0RvY3VtZW50cy9mcmVlbGFuY2UvaWRlYWxpemVyci1hbmd1bGFyL3NyYy9hc3NldHMvc2Nzcy9hYnN0cmFjdHMvX3ZhcmlhYmxlcy5zY3NzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUVBO0VBQ0ksb0JBQWE7RUFBYixhQUFhO0VBQ2IseUJBQW1CO1VBQW5CLG1CQUFtQixFQUFBO0VBRnZCO0lBSVEsZ0JBQWdCO0lBQ2hCLGNDY1E7SURiUix5QkFBaUI7T0FBakIsc0JBQWlCO1FBQWpCLHFCQUFpQjtZQUFqQixpQkFBaUIsRUFBQTtFQU56QjtJQVNRLFdBQVc7SUFDWCx5QkNTUTtJRFJSLG1CQUFZO1lBQVosWUFBWSxFQUFBIiwiZmlsZSI6InNyYy9hcHAvbW9kdWxlcy9hdXRoL2NvbXBvbmVudHMvb3ItaG9sZGVyL29yLWhvbGRlci5jb21wb25lbnQuc2NzcyIsInNvdXJjZXNDb250ZW50IjpbIkBpbXBvcnQgJ3NyYy9hc3NldHMvc2Nzcy9hYnN0cmFjdHMvdmFyaWFibGVzJztcblxuLm9yLWhvbGRlcntcbiAgICBkaXNwbGF5OiBmbGV4O1xuICAgIGFsaWduLWl0ZW1zOiBjZW50ZXI7XG4gICAgcHtcbiAgICAgICAgcGFkZGluZzogMHB4IDhweDtcbiAgICAgICAgY29sb3I6ICRicmFuZDA7XG4gICAgICAgIHVzZXItc2VsZWN0OiBub25lO1xuICAgIH1cbiAgICAubGluZXtcbiAgICAgICAgaGVpZ2h0OiAzcHg7XG4gICAgICAgIGJhY2tncm91bmQtY29sb3I6ICRicmFuZDA7XG4gICAgICAgIGZsZXgtZ3JvdzogMTtcbiAgICB9XG59IiwiLy9UUkFOU0lUSU9OXG4kYnIyOjJweDtcbiRicjQ6NHB4O1xuJGJyODo4cHg7XG5cbi8vVFJBTlNJVElPTlxuJHRyYW5zaXRpb24tMjogMC4ycyBsaW5lYXI7XG5cbi8vQk9YIFNIQURPV1xuJGJveC1zaGFkb3ctMTogMCA3cHggMTZweCAwIHJnYmEoMCwgMCwgMCwgMC4wNCk7XG4kYm94LXNoYWRvdy0yOiAwIDE2cHggMTZweCAwIHJnYmEoMCwgMCwgMCwgMC4wNik7XG4kYm94LXNoYWRvdy0zOiAwIDZweCAxMnB4IDAgcmdiYSgwLCAwLCAwLCAwLjEpO1xuJGJveC1zaGFkb3ctNDogNHB4IDRweCAxM3B4IDAgcmdiYSgwLCAyOCwgNTAsIDAuNTgpO1xuJGJveC1zaGFkb3ctNTogNHB4IDRweCAxM3B4IDAgcmdiYSgwLCAyOCwgNTAsIDAuMDcpO1xuXG5cblxuLy9DT0xPUlNcbiRpbnB1dDogI0Y5RkFGRTtcbiR3aGl0ZTogI0ZGRkZGRjtcbiRibGFjazogIzAwMDAwMDtcbiRicmFuZDA6ICNFREVFRjk7XG4kYnJhbmQxOiAjQTVBQUUyO1xuJGJyYW5kMjogIzk0OTlEQztcbiRicmFuZDM6ICM4Mjg4RDY7XG4kYnJhbmQ0OiAjNzA3N0QxO1xuJGJyYW5kNTogIzVFNjZDQjtcbiRicmFuZDY6ICM0QzU1QzU7XG4kYnJhbmQ3OiAjM0I0NUMwO1xuJGdyZXk6ICNCMEI3QzM7XG4kc3VjY2VzczogIzAwQ0Y2OTtcbiR3YXJuaW5nOiAjRkZDMDAwO1xuJGRhbmdlcjogI0ZGMDQ1QjtcbiR0cmFuc3BhcmVudDogdHJhbnNwYXJlbnQ7XG4kbGluazogIzE2ODZDOTtcblxuXG4vL0ZPTlRTXG4kaV9ibGFjayA6IFwiaV9ibGFja1wiO1xuJGlfYm9sZCA6IFwiaV9ib2xkXCI7XG4kaV9leHRyYV9ib2xkIDogXCJpX2V4dHJhX2JvbGRcIjtcbiRpX2V4dHJhX2xpZ2h0IDogXCJpX2V4dHJhX2xpZ2h0XCI7XG4kaV9saWdodCA6IFwiaV9saWdodFwiO1xuJGlfbWVkaXVtIDogXCJpX21lZGl1bVwiO1xuJGlfcmVndWxhciA6IFwiaV9yZWd1bGFyXCI7XG4kaV9zZW1pX2JvbGQgOiBcImlfc2VtaV9ib2xkXCI7XG4kaV90aGluIDogXCJpX3RoaW5cIjtcblxuXG4vL0ZPTlQgU0laRVxuJGgxOjM0cHg7XG4kaDI6MjhweDtcbiRoMzoyNHB4O1xuJGg0OjIwcHg7XG4kaDU6MTZweDtcbiRwOjE0cHg7XG4kbGFiZWw6MTJweDtcbiRzbWFsbDoxMHB4O1xuXG5cbi8vQk9SREVSXG4kYm9yZGVyMzogM3B4IHNvbGlkICRicmFuZDA7Il19 */"

/***/ }),

/***/ "./src/app/modules/auth/components/or-holder/or-holder.component.ts":
/*!**************************************************************************!*\
  !*** ./src/app/modules/auth/components/or-holder/or-holder.component.ts ***!
  \**************************************************************************/
/*! exports provided: OrHolderComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "OrHolderComponent", function() { return OrHolderComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");


//======================================================================
var OrHolderComponent = /** @class */ (function () {
    //======================================================================
    function OrHolderComponent() {
    }
    //======================================================================
    OrHolderComponent.prototype.ngOnInit = function () { };
    OrHolderComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
            selector: 'or-holder',
            template: __webpack_require__(/*! ./or-holder.component.html */ "./src/app/modules/auth/components/or-holder/or-holder.component.html"),
            styles: [__webpack_require__(/*! ./or-holder.component.scss */ "./src/app/modules/auth/components/or-holder/or-holder.component.scss")]
        }) //======================================================================
        ,
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [])
    ], OrHolderComponent);
    return OrHolderComponent;
}()); //======================================================================



/***/ }),

/***/ "./src/app/modules/auth/components/social-login/social-login.component.html":
/*!**********************************************************************************!*\
  !*** ./src/app/modules/auth/components/social-login/social-login.component.html ***!
  \**********************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<!-- <div id=\"login-sdks-load\">\n  <ul>\n    <li><a href=\"\" class=\"bg-facebook\" href=\"javascript:void(0)\" (click)=\"fbLogin()\"><i class=\"mdi mdi-facebook\"></i></a></li>\n    <li><a href=\"\" class=\"bg-google\"><i class=\"mdi mdi-google\"></i></a></li>\n    <li><a href=\"\" class=\"bg-twitter\"><i class=\"mdi mdi-twitter\"></i></a></li>\n    <li><a href=\"\" class=\"bg-linkedin\" href=\"javascript:void(0)\"><i class=\"mdi mdi-linkedin\"></i></a></li>\n  </ul>\n</div> -->\n"

/***/ }),

/***/ "./src/app/modules/auth/components/social-login/social-login.component.scss":
/*!**********************************************************************************!*\
  !*** ./src/app/modules/auth/components/social-login/social-login.component.scss ***!
  \**********************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "ul {\n  margin-left: -12px;\n  margin-right: -12px;\n  display: -webkit-box;\n  display: flex;\n  -webkit-box-align: center;\n          align-items: center;\n  -webkit-box-pack: center;\n          justify-content: center; }\n  ul li {\n    padding-right: 12px;\n    padding-left: 12px; }\n  ul li a {\n      display: block;\n      width: 65px;\n      height: 40px;\n      border-radius: 8px;\n      display: -webkit-box;\n      display: flex;\n      -webkit-box-align: center;\n              align-items: center;\n      -webkit-box-pack: center;\n              justify-content: center; }\n  ul li a i {\n        font-size: 24px;\n        color: #FFFFFF; }\n\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIi9Vc2Vycy9iL0RvY3VtZW50cy9mcmVlbGFuY2UvaWRlYWxpemVyci1hbmd1bGFyL3NyYy9hcHAvbW9kdWxlcy9hdXRoL2NvbXBvbmVudHMvc29jaWFsLWxvZ2luL3NvY2lhbC1sb2dpbi5jb21wb25lbnQuc2NzcyIsIi9Vc2Vycy9iL0RvY3VtZW50cy9mcmVlbGFuY2UvaWRlYWxpemVyci1hbmd1bGFyL3NyYy9hc3NldHMvc2Nzcy9hYnN0cmFjdHMvX3ZhcmlhYmxlcy5zY3NzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUVBO0VBQ0ksa0JBQWtCO0VBQ2xCLG1CQUFtQjtFQUNuQixvQkFBYTtFQUFiLGFBQWE7RUFDYix5QkFBbUI7VUFBbkIsbUJBQW1CO0VBQ25CLHdCQUF1QjtVQUF2Qix1QkFBdUIsRUFBQTtFQUwzQjtJQU9RLG1CQUFtQjtJQUNuQixrQkFBa0IsRUFBQTtFQVIxQjtNQVVZLGNBQWM7TUFDZCxXQUFXO01BQ1gsWUFBWTtNQUNaLGtCQ1pKO01EYUksb0JBQWE7TUFBYixhQUFhO01BQ2IseUJBQW1CO2NBQW5CLG1CQUFtQjtNQUNuQix3QkFBdUI7Y0FBdkIsdUJBQXVCLEVBQUE7RUFoQm5DO1FBa0JnQixlQUFlO1FBQ2YsY0NGRCxFQUFBIiwiZmlsZSI6InNyYy9hcHAvbW9kdWxlcy9hdXRoL2NvbXBvbmVudHMvc29jaWFsLWxvZ2luL3NvY2lhbC1sb2dpbi5jb21wb25lbnQuc2NzcyIsInNvdXJjZXNDb250ZW50IjpbIkBpbXBvcnQgJ3NyYy9hc3NldHMvc2Nzcy9hYnN0cmFjdHMvdmFyaWFibGVzJztcblxudWx7XG4gICAgbWFyZ2luLWxlZnQ6IC0xMnB4O1xuICAgIG1hcmdpbi1yaWdodDogLTEycHg7XG4gICAgZGlzcGxheTogZmxleDtcbiAgICBhbGlnbi1pdGVtczogY2VudGVyO1xuICAgIGp1c3RpZnktY29udGVudDogY2VudGVyO1xuICAgIGxpe1xuICAgICAgICBwYWRkaW5nLXJpZ2h0OiAxMnB4O1xuICAgICAgICBwYWRkaW5nLWxlZnQ6IDEycHg7XG4gICAgICAgIGF7XG4gICAgICAgICAgICBkaXNwbGF5OiBibG9jaztcbiAgICAgICAgICAgIHdpZHRoOiA2NXB4O1xuICAgICAgICAgICAgaGVpZ2h0OiA0MHB4O1xuICAgICAgICAgICAgYm9yZGVyLXJhZGl1czogJGJyODtcbiAgICAgICAgICAgIGRpc3BsYXk6IGZsZXg7XG4gICAgICAgICAgICBhbGlnbi1pdGVtczogY2VudGVyO1xuICAgICAgICAgICAganVzdGlmeS1jb250ZW50OiBjZW50ZXI7XG4gICAgICAgICAgICBpe1xuICAgICAgICAgICAgICAgIGZvbnQtc2l6ZTogMjRweDtcbiAgICAgICAgICAgICAgICBjb2xvcjogJHdoaXRlO1xuICAgICAgICAgICAgfVxuICAgICAgICB9XG4gICAgfVxufSIsIi8vVFJBTlNJVElPTlxuJGJyMjoycHg7XG4kYnI0OjRweDtcbiRicjg6OHB4O1xuXG4vL1RSQU5TSVRJT05cbiR0cmFuc2l0aW9uLTI6IDAuMnMgbGluZWFyO1xuXG4vL0JPWCBTSEFET1dcbiRib3gtc2hhZG93LTE6IDAgN3B4IDE2cHggMCByZ2JhKDAsIDAsIDAsIDAuMDQpO1xuJGJveC1zaGFkb3ctMjogMCAxNnB4IDE2cHggMCByZ2JhKDAsIDAsIDAsIDAuMDYpO1xuJGJveC1zaGFkb3ctMzogMCA2cHggMTJweCAwIHJnYmEoMCwgMCwgMCwgMC4xKTtcbiRib3gtc2hhZG93LTQ6IDRweCA0cHggMTNweCAwIHJnYmEoMCwgMjgsIDUwLCAwLjU4KTtcbiRib3gtc2hhZG93LTU6IDRweCA0cHggMTNweCAwIHJnYmEoMCwgMjgsIDUwLCAwLjA3KTtcblxuXG5cbi8vQ09MT1JTXG4kaW5wdXQ6ICNGOUZBRkU7XG4kd2hpdGU6ICNGRkZGRkY7XG4kYmxhY2s6ICMwMDAwMDA7XG4kYnJhbmQwOiAjRURFRUY5O1xuJGJyYW5kMTogI0E1QUFFMjtcbiRicmFuZDI6ICM5NDk5REM7XG4kYnJhbmQzOiAjODI4OEQ2O1xuJGJyYW5kNDogIzcwNzdEMTtcbiRicmFuZDU6ICM1RTY2Q0I7XG4kYnJhbmQ2OiAjNEM1NUM1O1xuJGJyYW5kNzogIzNCNDVDMDtcbiRncmV5OiAjQjBCN0MzO1xuJHN1Y2Nlc3M6ICMwMENGNjk7XG4kd2FybmluZzogI0ZGQzAwMDtcbiRkYW5nZXI6ICNGRjA0NUI7XG4kdHJhbnNwYXJlbnQ6IHRyYW5zcGFyZW50O1xuJGxpbms6ICMxNjg2Qzk7XG5cblxuLy9GT05UU1xuJGlfYmxhY2sgOiBcImlfYmxhY2tcIjtcbiRpX2JvbGQgOiBcImlfYm9sZFwiO1xuJGlfZXh0cmFfYm9sZCA6IFwiaV9leHRyYV9ib2xkXCI7XG4kaV9leHRyYV9saWdodCA6IFwiaV9leHRyYV9saWdodFwiO1xuJGlfbGlnaHQgOiBcImlfbGlnaHRcIjtcbiRpX21lZGl1bSA6IFwiaV9tZWRpdW1cIjtcbiRpX3JlZ3VsYXIgOiBcImlfcmVndWxhclwiO1xuJGlfc2VtaV9ib2xkIDogXCJpX3NlbWlfYm9sZFwiO1xuJGlfdGhpbiA6IFwiaV90aGluXCI7XG5cblxuLy9GT05UIFNJWkVcbiRoMTozNHB4O1xuJGgyOjI4cHg7XG4kaDM6MjRweDtcbiRoNDoyMHB4O1xuJGg1OjE2cHg7XG4kcDoxNHB4O1xuJGxhYmVsOjEycHg7XG4kc21hbGw6MTBweDtcblxuXG4vL0JPUkRFUlxuJGJvcmRlcjM6IDNweCBzb2xpZCAkYnJhbmQwOyJdfQ== */"

/***/ }),

/***/ "./src/app/modules/auth/components/social-login/social-login.component.ts":
/*!********************************************************************************!*\
  !*** ./src/app/modules/auth/components/social-login/social-login.component.ts ***!
  \********************************************************************************/
/*! exports provided: SocialLoginComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "SocialLoginComponent", function() { return SocialLoginComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");


// declare const FB: any;
//======================================================================
var SocialLoginComponent = /** @class */ (function () {
    //======================================================================
    function SocialLoginComponent() {
    }
    //======================================================================
    SocialLoginComponent.prototype.ngOnInit = function () { };
    SocialLoginComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
            selector: 'social-login',
            template: __webpack_require__(/*! ./social-login.component.html */ "./src/app/modules/auth/components/social-login/social-login.component.html"),
            styles: [__webpack_require__(/*! ./social-login.component.scss */ "./src/app/modules/auth/components/social-login/social-login.component.scss")]
        }) //======================================================================
        ,
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [])
    ], SocialLoginComponent);
    return SocialLoginComponent;
}()); //======================================================================



/***/ }),

/***/ "./src/app/modules/auth/layout/auth-layout/auth-layout.component.html":
/*!****************************************************************************!*\
  !*** ./src/app/modules/auth/layout/auth-layout/auth-layout.component.html ***!
  \****************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<div class=\"website-header-holder\">\n  <div class=\"wrapper\">\n    <website-header></website-header>\n  </div>\n</div>\n<section class=\"auth-layout\">\n  <div class=\"bg-image\">\n    <img\n         [src]=\"current_auth_setting && current_auth_setting.image ? current_auth_setting.image : '/assets/images/ilustrations/auth-bg.svg'\">\n  </div>\n  <div class=\"auth-wrapper\">\n    <div class=\"left\">\n      <div>\n        <a [routerLink]=\"['/']\"\n           class=\"brand\">\n          <img src=\"/assets/images/idealizerr_logo.svg\"\n               class=\"object-fit-contain\">\n        </a>\n      </div>\n      <div class=\"pt-24px\">\n        <h1 class=\"h1 i-semi-bold\"\n            *ngIf=\"current_auth_setting && current_auth_setting.title\">{{current_auth_setting.title}}</h1>\n        <h4 class=\"h4 i-regular pt-8px w60 lh-28px\"\n            *ngIf=\"current_auth_setting && current_auth_setting.description\">{{current_auth_setting.description}}</h4>\n      </div>\n    </div>\n    <div class=\"right\">\n      <div class=\"router-holder\">\n        <router-outlet></router-outlet>\n      </div>\n    </div>\n  </div>\n</section>"

/***/ }),

/***/ "./src/app/modules/auth/layout/auth-layout/auth-layout.component.scss":
/*!****************************************************************************!*\
  !*** ./src/app/modules/auth/layout/auth-layout/auth-layout.component.scss ***!
  \****************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = ".auth-layout {\n  position: absolute;\n  width: 100%;\n  height: 100%; }\n  .auth-layout .bg-image {\n    width: 100%;\n    height: 100%;\n    background-color: #EDEEF9;\n    position: relative;\n    overflow: hidden; }\n  .auth-layout .bg-image img {\n      position: absolute;\n      width: 600px;\n      bottom: -10px;\n      left: -10px; }\n  .auth-layout .auth-wrapper {\n    position: absolute;\n    top: 0px;\n    left: 0px;\n    z-index: 2;\n    width: 100%;\n    height: 100%;\n    display: -webkit-box;\n    display: flex;\n    -webkit-box-pack: justify;\n            justify-content: space-between; }\n  .auth-layout .auth-wrapper .left {\n      padding: 48px;\n      box-sizing: border-box;\n      width: calc(100% - 530px);\n      display: -webkit-box;\n      display: flex;\n      -webkit-box-orient: vertical;\n      -webkit-box-direction: normal;\n              flex-direction: column; }\n  .auth-layout .auth-wrapper .left .brand {\n        width: 100px;\n        padding-right: 24px; }\n  .auth-layout .auth-wrapper .left .brand img {\n          width: 100%;\n          -o-object-fit: contain;\n             object-fit: contain; }\n  @media (max-width: 768px) {\n        .auth-layout .auth-wrapper .left {\n          display: none; } }\n  .auth-layout .auth-wrapper .right {\n      width: 530px;\n      height: 100%; }\n  .auth-layout .auth-wrapper .right .router-holder {\n        width: 100%;\n        height: 100%;\n        background-color: #FFFFFF;\n        box-shadow: 0 16px 16px 0 rgba(0, 0, 0, 0.06);\n        box-sizing: border-box;\n        padding: 48px 64px;\n        overflow: hidden;\n        overflow-y: scroll; }\n  @media (max-width: 768px) {\n        .auth-layout .auth-wrapper .right {\n          width: 100%; } }\n  .website-header-holder {\n  display: none; }\n  @media (max-width: 768px) {\n  .website-header-holder {\n    display: block; } }\n\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIi9Vc2Vycy9iL0RvY3VtZW50cy9mcmVlbGFuY2UvaWRlYWxpemVyci1hbmd1bGFyL3NyYy9hcHAvbW9kdWxlcy9hdXRoL2xheW91dC9hdXRoLWxheW91dC9hdXRoLWxheW91dC5jb21wb25lbnQuc2NzcyIsIi9Vc2Vycy9iL0RvY3VtZW50cy9mcmVlbGFuY2UvaWRlYWxpemVyci1hbmd1bGFyL3NyYy9hc3NldHMvc2Nzcy9hYnN0cmFjdHMvX3ZhcmlhYmxlcy5zY3NzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUlBO0VBQ0ksa0JBQWtCO0VBQ2xCLFdBQVc7RUFDWCxZQUFZLEVBQUE7RUFIaEI7SUFNUSxXQUFXO0lBQ1gsWUFBWTtJQUNaLHlCQ1NRO0lEUlIsa0JBQWtCO0lBQ2xCLGdCQUFnQixFQUFBO0VBVnhCO01BYVksa0JBQWtCO01BQ2xCLFlBQVk7TUFDWixhQUFhO01BQ2IsV0FBVyxFQUFBO0VBaEJ2QjtJQXFCUSxrQkFBa0I7SUFDbEIsUUFBUTtJQUNSLFNBQVM7SUFDVCxVQUFVO0lBQ1YsV0FBVztJQUNYLFlBQVk7SUFFWixvQkFBYTtJQUFiLGFBQWE7SUFDYix5QkFBOEI7WUFBOUIsOEJBQThCLEVBQUE7RUE3QnRDO01BZ0NZLGFBQWE7TUFDYixzQkFBc0I7TUFDdEIseUJBQW9DO01BQ3BDLG9CQUFhO01BQWIsYUFBYTtNQUNiLDRCQUFzQjtNQUF0Qiw2QkFBc0I7Y0FBdEIsc0JBQXNCLEVBQUE7RUFwQ2xDO1FBd0NnQixZQUFZO1FBQ1osbUJBQW1CLEVBQUE7RUF6Q25DO1VBNENvQixXQUFXO1VBQ1gsc0JBQW1CO2FBQW5CLG1CQUFtQixFQUFBO0VBSTNCO1FBakRaO1VBa0RnQixhQUFhLEVBQUEsRUFFcEI7RUFwRFQ7TUFtRVksWUFyRU87TUFzRVAsWUFBWSxFQUFBO0VBcEV4QjtRQXdEZ0IsV0FBVztRQUNYLFlBQVk7UUFDWix5QkMzQ0Q7UUQ2Q0MsNkNDdERnQztRRHVEaEMsc0JBQXNCO1FBQ3RCLGtCQUFrQjtRQUNsQixnQkFBZ0I7UUFDaEIsa0JBQWtCLEVBQUE7RUFNdEI7UUF0RVo7VUF1RWdCLFdBQVcsRUFBQSxFQUdsQjtFQUlUO0VBQ0ksYUFBYSxFQUFBO0VBR2pCO0VBQ0k7SUFDSSxjQUFjLEVBQUEsRUFDakIiLCJmaWxlIjoic3JjL2FwcC9tb2R1bGVzL2F1dGgvbGF5b3V0L2F1dGgtbGF5b3V0L2F1dGgtbGF5b3V0LmNvbXBvbmVudC5zY3NzIiwic291cmNlc0NvbnRlbnQiOlsiQGltcG9ydCAnc3JjL2Fzc2V0cy9zY3NzL2Fic3RyYWN0cy92YXJpYWJsZXMnO1xuXG4kcm91dGVyLXdpZHRoOjUzMHB4O1xuXG4uYXV0aC1sYXlvdXQge1xuICAgIHBvc2l0aW9uOiBhYnNvbHV0ZTtcbiAgICB3aWR0aDogMTAwJTtcbiAgICBoZWlnaHQ6IDEwMCU7XG5cbiAgICAuYmctaW1hZ2Uge1xuICAgICAgICB3aWR0aDogMTAwJTtcbiAgICAgICAgaGVpZ2h0OiAxMDAlO1xuICAgICAgICBiYWNrZ3JvdW5kLWNvbG9yOiAkYnJhbmQwO1xuICAgICAgICBwb3NpdGlvbjogcmVsYXRpdmU7XG4gICAgICAgIG92ZXJmbG93OiBoaWRkZW47XG5cbiAgICAgICAgaW1nIHtcbiAgICAgICAgICAgIHBvc2l0aW9uOiBhYnNvbHV0ZTtcbiAgICAgICAgICAgIHdpZHRoOiA2MDBweDtcbiAgICAgICAgICAgIGJvdHRvbTogLTEwcHg7XG4gICAgICAgICAgICBsZWZ0OiAtMTBweDtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIC5hdXRoLXdyYXBwZXIge1xuICAgICAgICBwb3NpdGlvbjogYWJzb2x1dGU7XG4gICAgICAgIHRvcDogMHB4O1xuICAgICAgICBsZWZ0OiAwcHg7XG4gICAgICAgIHotaW5kZXg6IDI7XG4gICAgICAgIHdpZHRoOiAxMDAlO1xuICAgICAgICBoZWlnaHQ6IDEwMCU7XG4gICAgICAgIC8vIHBhZGRpbmc6IDgwcHg7XG4gICAgICAgIGRpc3BsYXk6IGZsZXg7XG4gICAgICAgIGp1c3RpZnktY29udGVudDogc3BhY2UtYmV0d2VlbjtcblxuICAgICAgICAubGVmdCB7XG4gICAgICAgICAgICBwYWRkaW5nOiA0OHB4O1xuICAgICAgICAgICAgYm94LXNpemluZzogYm9yZGVyLWJveDtcbiAgICAgICAgICAgIHdpZHRoOiBjYWxjKDEwMCUgLSAjeyRyb3V0ZXItd2lkdGh9KTtcbiAgICAgICAgICAgIGRpc3BsYXk6IGZsZXg7XG4gICAgICAgICAgICBmbGV4LWRpcmVjdGlvbjogY29sdW1uO1xuXG4gICAgICAgICAgICAvLyBhbGlnbi1pdGVtczogY2VudGVyO1xuICAgICAgICAgICAgLmJyYW5kIHtcbiAgICAgICAgICAgICAgICB3aWR0aDogMTAwcHg7XG4gICAgICAgICAgICAgICAgcGFkZGluZy1yaWdodDogMjRweDtcblxuICAgICAgICAgICAgICAgIGltZyB7XG4gICAgICAgICAgICAgICAgICAgIHdpZHRoOiAxMDAlO1xuICAgICAgICAgICAgICAgICAgICBvYmplY3QtZml0OiBjb250YWluO1xuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgQG1lZGlhIChtYXgtd2lkdGg6IDc2OHB4KSB7XG4gICAgICAgICAgICAgICAgZGlzcGxheTogbm9uZTtcbiAgICAgICAgICAgIH1cbiAgICAgICAgfVxuXG4gICAgICAgIC5yaWdodCB7XG4gICAgICAgICAgICAucm91dGVyLWhvbGRlciB7XG4gICAgICAgICAgICAgICAgd2lkdGg6IDEwMCU7XG4gICAgICAgICAgICAgICAgaGVpZ2h0OiAxMDAlO1xuICAgICAgICAgICAgICAgIGJhY2tncm91bmQtY29sb3I6ICR3aGl0ZTtcbiAgICAgICAgICAgICAgICAvLyBib3JkZXItcmFkaXVzOiAkYnI0O1xuICAgICAgICAgICAgICAgIGJveC1zaGFkb3c6ICRib3gtc2hhZG93LTI7XG4gICAgICAgICAgICAgICAgYm94LXNpemluZzogYm9yZGVyLWJveDtcbiAgICAgICAgICAgICAgICBwYWRkaW5nOiA0OHB4IDY0cHg7XG4gICAgICAgICAgICAgICAgb3ZlcmZsb3c6IGhpZGRlbjtcbiAgICAgICAgICAgICAgICBvdmVyZmxvdy15OiBzY3JvbGw7XG4gICAgICAgICAgICB9XG5cbiAgICAgICAgICAgIHdpZHRoOiAkcm91dGVyLXdpZHRoO1xuICAgICAgICAgICAgaGVpZ2h0OiAxMDAlO1xuXG4gICAgICAgICAgICBAbWVkaWEgKG1heC13aWR0aDogNzY4cHgpIHtcbiAgICAgICAgICAgICAgICB3aWR0aDogMTAwJTtcbiAgICAgICAgICAgIH1cblxuICAgICAgICB9XG4gICAgfVxufVxuXG4ud2Vic2l0ZS1oZWFkZXItaG9sZGVyIHtcbiAgICBkaXNwbGF5OiBub25lO1xufVxuXG5AbWVkaWEgKG1heC13aWR0aDogNzY4cHgpIHtcbiAgICAud2Vic2l0ZS1oZWFkZXItaG9sZGVyIHtcbiAgICAgICAgZGlzcGxheTogYmxvY2s7XG4gICAgfVxufSIsIi8vVFJBTlNJVElPTlxuJGJyMjoycHg7XG4kYnI0OjRweDtcbiRicjg6OHB4O1xuXG4vL1RSQU5TSVRJT05cbiR0cmFuc2l0aW9uLTI6IDAuMnMgbGluZWFyO1xuXG4vL0JPWCBTSEFET1dcbiRib3gtc2hhZG93LTE6IDAgN3B4IDE2cHggMCByZ2JhKDAsIDAsIDAsIDAuMDQpO1xuJGJveC1zaGFkb3ctMjogMCAxNnB4IDE2cHggMCByZ2JhKDAsIDAsIDAsIDAuMDYpO1xuJGJveC1zaGFkb3ctMzogMCA2cHggMTJweCAwIHJnYmEoMCwgMCwgMCwgMC4xKTtcbiRib3gtc2hhZG93LTQ6IDRweCA0cHggMTNweCAwIHJnYmEoMCwgMjgsIDUwLCAwLjU4KTtcbiRib3gtc2hhZG93LTU6IDRweCA0cHggMTNweCAwIHJnYmEoMCwgMjgsIDUwLCAwLjA3KTtcblxuXG5cbi8vQ09MT1JTXG4kaW5wdXQ6ICNGOUZBRkU7XG4kd2hpdGU6ICNGRkZGRkY7XG4kYmxhY2s6ICMwMDAwMDA7XG4kYnJhbmQwOiAjRURFRUY5O1xuJGJyYW5kMTogI0E1QUFFMjtcbiRicmFuZDI6ICM5NDk5REM7XG4kYnJhbmQzOiAjODI4OEQ2O1xuJGJyYW5kNDogIzcwNzdEMTtcbiRicmFuZDU6ICM1RTY2Q0I7XG4kYnJhbmQ2OiAjNEM1NUM1O1xuJGJyYW5kNzogIzNCNDVDMDtcbiRncmV5OiAjQjBCN0MzO1xuJHN1Y2Nlc3M6ICMwMENGNjk7XG4kd2FybmluZzogI0ZGQzAwMDtcbiRkYW5nZXI6ICNGRjA0NUI7XG4kdHJhbnNwYXJlbnQ6IHRyYW5zcGFyZW50O1xuJGxpbms6ICMxNjg2Qzk7XG5cblxuLy9GT05UU1xuJGlfYmxhY2sgOiBcImlfYmxhY2tcIjtcbiRpX2JvbGQgOiBcImlfYm9sZFwiO1xuJGlfZXh0cmFfYm9sZCA6IFwiaV9leHRyYV9ib2xkXCI7XG4kaV9leHRyYV9saWdodCA6IFwiaV9leHRyYV9saWdodFwiO1xuJGlfbGlnaHQgOiBcImlfbGlnaHRcIjtcbiRpX21lZGl1bSA6IFwiaV9tZWRpdW1cIjtcbiRpX3JlZ3VsYXIgOiBcImlfcmVndWxhclwiO1xuJGlfc2VtaV9ib2xkIDogXCJpX3NlbWlfYm9sZFwiO1xuJGlfdGhpbiA6IFwiaV90aGluXCI7XG5cblxuLy9GT05UIFNJWkVcbiRoMTozNHB4O1xuJGgyOjI4cHg7XG4kaDM6MjRweDtcbiRoNDoyMHB4O1xuJGg1OjE2cHg7XG4kcDoxNHB4O1xuJGxhYmVsOjEycHg7XG4kc21hbGw6MTBweDtcblxuXG4vL0JPUkRFUlxuJGJvcmRlcjM6IDNweCBzb2xpZCAkYnJhbmQwOyJdfQ== */"

/***/ }),

/***/ "./src/app/modules/auth/layout/auth-layout/auth-layout.component.ts":
/*!**************************************************************************!*\
  !*** ./src/app/modules/auth/layout/auth-layout/auth-layout.component.ts ***!
  \**************************************************************************/
/*! exports provided: AuthLayoutComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "AuthLayoutComponent", function() { return AuthLayoutComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var src_app_modules_shared_services_auth_service__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! src/app/modules/shared/services/auth.service */ "./src/app/modules/shared/services/auth.service.ts");



//======================================================================
var AuthLayoutComponent = /** @class */ (function () {
    function AuthLayoutComponent(AUTH) {
        this.AUTH = AUTH;
        this.getAuthSettings();
    }
    //======================================================================
    AuthLayoutComponent.prototype.ngOnInit = function () { };
    //======================================================================
    AuthLayoutComponent.prototype.ngOnDestroy = function () {
        this.subs_auth_page_location ? this.subs_auth_page_location.unsubscribe() : "";
    };
    AuthLayoutComponent.prototype.getAuthSettings = function () {
        var _this = this;
        this.AUTH.getAuthSettings().subscribe(function (RESPONSE) {
            _this.auth_settings = RESPONSE.body;
            _this.subsAuthPageLocation();
        }, function (ERROR) { });
    };
    AuthLayoutComponent.prototype.subsAuthPageLocation = function () {
        var _this = this;
        this.subs_auth_page_location = this.AUTH.auth_page_location.subscribe(function (location) {
            _this.auth_page_location = location;
            for (var key in _this.auth_settings) {
                if (key == _this.auth_page_location) {
                    _this.current_auth_setting = _this.auth_settings[key];
                }
            }
        });
    };
    AuthLayoutComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
            selector: 'app-auth-layout',
            template: __webpack_require__(/*! ./auth-layout.component.html */ "./src/app/modules/auth/layout/auth-layout/auth-layout.component.html"),
            styles: [__webpack_require__(/*! ./auth-layout.component.scss */ "./src/app/modules/auth/layout/auth-layout/auth-layout.component.scss")]
        }) //======================================================================
        ,
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [src_app_modules_shared_services_auth_service__WEBPACK_IMPORTED_MODULE_2__["AuthService"]])
    ], AuthLayoutComponent);
    return AuthLayoutComponent;
}()); //======================================================================



/***/ }),

/***/ "./src/app/modules/auth/pages/auth-login/auth-login.component.html":
/*!*************************************************************************!*\
  !*** ./src/app/modules/auth/pages/auth-login/auth-login.component.html ***!
  \*************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<div class=\"auth-login-holder\">\n  <div class=\"top\">\n    <h2 class=\"h2 i-medium pb-8px\">{{\"global.signin\" | translate}}</h2>\n    <p class=\"p i-light\">{{\"global.noaccount\" | translate}} <a [routerLink]=\"['/auth/signup']\"\n         class=\"link i-semi-bold\">{{\"global.noaccsignup\" | translate}} </a></p>\n  </div>\n  <div class=\"center\">\n    <!-- <div class=\"pt-40px\">\n      <social-login></social-login>\n    </div> -->\n    <div>\n      <!-- <or-holder></or-holder> -->\n    </div>\n\n    <div class=\"pb-40px\">\n      <form [formGroup]='form'\n            autocomplete='on'\n            validate\n            (keyup.enter)='submitForm()'>\n\n        <!-- COMMENT ================================================================================ -->\n        <div class=\"input-holder pb-24px\">\n          <label for=\"email\">{{\"global.email-heading\" | translate}}</label>\n          <div class=\"input\">\n            <input type='text'\n                   name='email'\n                   placeholder='{{\"global.email-placeholder\" | translate}}'\n                   formControlName='email'\n                   id='email'>\n          </div>\n          <ul>\n            <li *ngIf=\"form.controls['email'].hasError('required') && form.controls['email'].touched\">\n              {{\"global.requiredField\" | translate}}\n            </li>\n          </ul>\n        </div>\n        <!-- ================================================================================ COMMENT -->\n\n        <!-- COMMENT ================================================================================ -->\n        <div class=\"input-holder pb-32px\">\n          <label for=\"password\">{{\"global.password\" | translate}}</label>\n          <div class=\"input password\">\n            <input [type]='password_visible ? \"text\" : \"password\"'\n                   name='password'\n                   placeholder='{{\"global.password-placeholder\" | translate}}'\n                   formControlName='password'\n                   id='password'>\n            <i class=\"mdi mdi-eye\"\n               *ngIf=\"!password_visible\"\n               (click)=\"togglePasswordVisible()\"></i>\n            <i class=\"mdi mdi-eye-off\"\n               *ngIf=\"password_visible\"\n               (click)=\"togglePasswordVisible()\"></i>\n          </div>\n          <div class=\"forgot-password pt-8px display-flex justify-content-flex-end\">\n            <a [routerLink]=\"['/auth/recovery/email']\"\n               class=\"link p i-medium\">{{\"global.forgot-password\" | translate}}</a>\n          </div>\n          <ul>\n            <li *ngIf=\"form.controls['password'].hasError('required') && form.controls['password'].touched\">\n              {{\"global.requiredField\" | translate}}</li>\n            <li *ngIf=\"form.controls['password'].hasError('minlength') && form.controls['password'].touched\">\n              {{\"global.requiredSymbol\" | translate:{'val': 6} }}</li>\n          </ul>\n        </div>\n        <!-- ================================================================================ COMMENT -->\n\n        <div>\n          <button class=\"btn btn-brand7 w100\"\n                  [disabled]=\"!form.valid\"\n                  (click)=\"submitForm()\">{{\"global.signin\" | translate}}</button>\n        </div>\n\n      </form>\n    </div>\n  </div>\n  <div class=\"bottom\"></div>\n</div>"

/***/ }),

/***/ "./src/app/modules/auth/pages/auth-login/auth-login.component.scss":
/*!*************************************************************************!*\
  !*** ./src/app/modules/auth/pages/auth-login/auth-login.component.scss ***!
  \*************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = ".auth-login-holder {\n  display: -webkit-box;\n  display: flex;\n  -webkit-box-orient: vertical;\n  -webkit-box-direction: normal;\n          flex-direction: column;\n  -webkit-box-pack: justify;\n          justify-content: space-between;\n  height: 100%; }\n\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIi9Vc2Vycy9iL0RvY3VtZW50cy9mcmVlbGFuY2UvaWRlYWxpemVyci1hbmd1bGFyL3NyYy9hcHAvbW9kdWxlcy9hdXRoL3BhZ2VzL2F1dGgtbG9naW4vYXV0aC1sb2dpbi5jb21wb25lbnQuc2NzcyJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFFQTtFQUNJLG9CQUFhO0VBQWIsYUFBYTtFQUNiLDRCQUFzQjtFQUF0Qiw2QkFBc0I7VUFBdEIsc0JBQXNCO0VBQ3RCLHlCQUE4QjtVQUE5Qiw4QkFBOEI7RUFDOUIsWUFBWSxFQUFBIiwiZmlsZSI6InNyYy9hcHAvbW9kdWxlcy9hdXRoL3BhZ2VzL2F1dGgtbG9naW4vYXV0aC1sb2dpbi5jb21wb25lbnQuc2NzcyIsInNvdXJjZXNDb250ZW50IjpbIkBpbXBvcnQgJ3NyYy9hc3NldHMvc2Nzcy9hYnN0cmFjdHMvdmFyaWFibGVzJztcblxuLmF1dGgtbG9naW4taG9sZGVye1xuICAgIGRpc3BsYXk6IGZsZXg7XG4gICAgZmxleC1kaXJlY3Rpb246IGNvbHVtbjtcbiAgICBqdXN0aWZ5LWNvbnRlbnQ6IHNwYWNlLWJldHdlZW47XG4gICAgaGVpZ2h0OiAxMDAlO1xufSJdfQ== */"

/***/ }),

/***/ "./src/app/modules/auth/pages/auth-login/auth-login.component.ts":
/*!***********************************************************************!*\
  !*** ./src/app/modules/auth/pages/auth-login/auth-login.component.ts ***!
  \***********************************************************************/
/*! exports provided: AuthLoginComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "AuthLoginComponent", function() { return AuthLoginComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/fesm5/forms.js");
/* harmony import */ var src_app_modules_shared_services_auth_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! src/app/modules/shared/services/auth.service */ "./src/app/modules/shared/services/auth.service.ts");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm5/router.js");
/* harmony import */ var src_app_modules_shared_services_notify_service__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! src/app/modules/shared/services/notify.service */ "./src/app/modules/shared/services/notify.service.ts");
/* harmony import */ var _ngx_translate_core__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! @ngx-translate/core */ "./node_modules/@ngx-translate/core/fesm5/ngx-translate-core.js");
/* harmony import */ var _angular_platform_browser__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! @angular/platform-browser */ "./node_modules/@angular/platform-browser/fesm5/platform-browser.js");








//======================================================================
var AuthLoginComponent = /** @class */ (function () {
    //======================================================================
    function AuthLoginComponent(FORM_BUILDER, AUTH, ROUTER, NOTIFY, _, title) {
        this.FORM_BUILDER = FORM_BUILDER;
        this.AUTH = AUTH;
        this.ROUTER = ROUTER;
        this.NOTIFY = NOTIFY;
        this._ = _;
        this.title = title;
        //======================================================================
        this.password_visible = false;
        this.AUTH.auth_page_location.next("login");
        this._buildForm();
    }
    //======================================================================
    AuthLoginComponent.prototype.ngOnInit = function () {
        this.title.setTitle("Idealizerr - " + this._.instant('global.signin'));
    };
    AuthLoginComponent.prototype._buildForm = function () {
        this.form = this.FORM_BUILDER.group({
            email: [null, [_angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].required]],
            password: [null, [_angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].required, _angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].minLength(6)]]
        });
    };
    //======================================================================
    AuthLoginComponent.prototype.submitForm = function () {
        if (this.form.valid) {
            var body = {
                email: this.form.controls["email"].value,
                password: this.form.controls["password"].value
            };
            this._postLogin(body);
        }
    };
    AuthLoginComponent.prototype.togglePasswordVisible = function () {
        this.password_visible = !this.password_visible;
    };
    //======================================================================
    AuthLoginComponent.prototype._postLogin = function (body) {
        var _this = this;
        this.AUTH.login(body).subscribe(function (RESPONSE) {
            if (RESPONSE.body.errors) {
                var errors = RESPONSE.body.errors;
                for (var i = 0; i < errors.length; i++) {
                    _this.NOTIFY.setNotification({
                        status: "danger",
                        text: errors[i]
                    });
                }
            }
            else {
                _this.AUTH.setUser(RESPONSE.body.user_detail);
                _this.AUTH.setToken(RESPONSE.body.access_token);
                _this.ROUTER.navigate(["dashboard"]);
            }
        }, function (ERROR) {
            if (ERROR.error.errors) {
                var errors = ERROR.error.errors;
                for (var i = 0; i < errors.length; i++) {
                    _this.NOTIFY.setNotification({
                        status: "danger",
                        text: errors[i]
                    });
                }
            }
            else {
                _this.NOTIFY.setNotification({
                    status: "danger",
                    text: _this._.instant("home.name_password_validation")
                });
            }
        });
    };
    AuthLoginComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
            selector: "app-auth-login",
            template: __webpack_require__(/*! ./auth-login.component.html */ "./src/app/modules/auth/pages/auth-login/auth-login.component.html"),
            styles: [__webpack_require__(/*! ./auth-login.component.scss */ "./src/app/modules/auth/pages/auth-login/auth-login.component.scss")]
        }) //======================================================================
        ,
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [_angular_forms__WEBPACK_IMPORTED_MODULE_2__["FormBuilder"],
            src_app_modules_shared_services_auth_service__WEBPACK_IMPORTED_MODULE_3__["AuthService"],
            _angular_router__WEBPACK_IMPORTED_MODULE_4__["Router"],
            src_app_modules_shared_services_notify_service__WEBPACK_IMPORTED_MODULE_5__["NotifyService"],
            _ngx_translate_core__WEBPACK_IMPORTED_MODULE_6__["TranslateService"],
            _angular_platform_browser__WEBPACK_IMPORTED_MODULE_7__["Title"]])
    ], AuthLoginComponent);
    return AuthLoginComponent;
}()); //======================================================================



/***/ }),

/***/ "./src/app/modules/auth/pages/auth-recovery-mail/auth-recovery-mail.component.html":
/*!*****************************************************************************************!*\
  !*** ./src/app/modules/auth/pages/auth-recovery-mail/auth-recovery-mail.component.html ***!
  \*****************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<div class=\"auth-recovery-email-holder\">\n  <div class=\"top\">\n    <h2 class=\"h2 i-medium pb-8px\">\n      {{\"global.recover-pass\" | translate}}</h2>\n    <p class=\"p i-light\">{{\"global.recover-email-link\" | translate}}</p>\n  </div>\n  <div class=\"center\">\n    <div class=\"pb-40px\">\n      <form [formGroup]='form'\n            autocomplete='on'\n            validate\n            (keyup.enter)='submitForm()'>\n\n\n        <!-- 1 -->\n        <div class=\"row\">\n          <div class=\"col-12\">\n            <!-- COMMENT ================================================================================ -->\n            <div class=\"input-holder pb-24px\">\n              <label for=\"email\">{{\"global.email\" | translate}}</label>\n              <div class=\"input right-icon\">\n                <input type='email'\n                       name='email'\n                       placeholder='{{\"global.your-email\" | translate}}'\n                       formControlName='email'\n                       id='email'>\n              </div>\n              <ul>\n                <li *ngIf=\"form.controls['email'].hasError('email') && form.controls['email'].touched\">\n                  {{\"global.correct-email\" | translate}}</li>\n                <li *ngIf=\"form.controls['email'].hasError('required') && form.controls['email'].touched\">\n                  {{\"global.requiredField\" | translate}}</li>\n              </ul>\n            </div>\n            <!-- ================================================================================ COMMENT -->\n          </div>\n        </div>\n\n        <!-- 2 -->\n        <div class=\"row\">\n          <div class=\"col-md-12 col-12\">\n            <button class=\"btn btn-brand7 w100\"\n                    [disabled]=\"!form.valid\"\n                    (click)=\"submitForm()\">{{\"global.send\" | translate}}</button>\n          </div>\n          <div class=\"col-md-12 col-12\">\n            <div class=\"pt-16px\">\n              <a (click)=\"locationBack()\"\n                 class=\"btn btn-grey w100\">{{\"global.back\" | translate}}</a>\n            </div>\n          </div>\n        </div>\n\n      </form>\n    </div>\n  </div>\n  <div class=\"bottom\"></div>\n</div>"

/***/ }),

/***/ "./src/app/modules/auth/pages/auth-recovery-mail/auth-recovery-mail.component.scss":
/*!*****************************************************************************************!*\
  !*** ./src/app/modules/auth/pages/auth-recovery-mail/auth-recovery-mail.component.scss ***!
  \*****************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = ".auth-recovery-email-holder {\n  display: -webkit-box;\n  display: flex;\n  -webkit-box-orient: vertical;\n  -webkit-box-direction: normal;\n          flex-direction: column;\n  -webkit-box-pack: justify;\n          justify-content: space-between;\n  height: 100%; }\n\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIi9Vc2Vycy9iL0RvY3VtZW50cy9mcmVlbGFuY2UvaWRlYWxpemVyci1hbmd1bGFyL3NyYy9hcHAvbW9kdWxlcy9hdXRoL3BhZ2VzL2F1dGgtcmVjb3ZlcnktbWFpbC9hdXRoLXJlY292ZXJ5LW1haWwuY29tcG9uZW50LnNjc3MiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBRUE7RUFDSSxvQkFBYTtFQUFiLGFBQWE7RUFDYiw0QkFBc0I7RUFBdEIsNkJBQXNCO1VBQXRCLHNCQUFzQjtFQUN0Qix5QkFBOEI7VUFBOUIsOEJBQThCO0VBQzlCLFlBQVksRUFBQSIsImZpbGUiOiJzcmMvYXBwL21vZHVsZXMvYXV0aC9wYWdlcy9hdXRoLXJlY292ZXJ5LW1haWwvYXV0aC1yZWNvdmVyeS1tYWlsLmNvbXBvbmVudC5zY3NzIiwic291cmNlc0NvbnRlbnQiOlsiQGltcG9ydCAnc3JjL2Fzc2V0cy9zY3NzL2Fic3RyYWN0cy92YXJpYWJsZXMnO1xuXG4uYXV0aC1yZWNvdmVyeS1lbWFpbC1ob2xkZXJ7XG4gICAgZGlzcGxheTogZmxleDtcbiAgICBmbGV4LWRpcmVjdGlvbjogY29sdW1uO1xuICAgIGp1c3RpZnktY29udGVudDogc3BhY2UtYmV0d2VlbjtcbiAgICBoZWlnaHQ6IDEwMCU7XG59Il19 */"

/***/ }),

/***/ "./src/app/modules/auth/pages/auth-recovery-mail/auth-recovery-mail.component.ts":
/*!***************************************************************************************!*\
  !*** ./src/app/modules/auth/pages/auth-recovery-mail/auth-recovery-mail.component.ts ***!
  \***************************************************************************************/
/*! exports provided: AuthRecoveryMailComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "AuthRecoveryMailComponent", function() { return AuthRecoveryMailComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/fesm5/forms.js");
/* harmony import */ var src_app_modules_shared_services_auth_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! src/app/modules/shared/services/auth.service */ "./src/app/modules/shared/services/auth.service.ts");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm5/router.js");
/* harmony import */ var src_app_modules_shared_services_notify_service__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! src/app/modules/shared/services/notify.service */ "./src/app/modules/shared/services/notify.service.ts");
/* harmony import */ var _angular_common__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! @angular/common */ "./node_modules/@angular/common/fesm5/common.js");
/* harmony import */ var _ngx_translate_core__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! @ngx-translate/core */ "./node_modules/@ngx-translate/core/fesm5/ngx-translate-core.js");
/* harmony import */ var _angular_platform_browser__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! @angular/platform-browser */ "./node_modules/@angular/platform-browser/fesm5/platform-browser.js");









//======================================================================
var AuthRecoveryMailComponent = /** @class */ (function () {
    //======================================================================
    function AuthRecoveryMailComponent(FORM_BUILDER, AUTH, ROUTER, NOTIFY, LOCATION, _, title) {
        this.FORM_BUILDER = FORM_BUILDER;
        this.AUTH = AUTH;
        this.ROUTER = ROUTER;
        this.NOTIFY = NOTIFY;
        this.LOCATION = LOCATION;
        this._ = _;
        this.title = title;
        this.AUTH.auth_page_location.next("recovery_email");
        this.buildForm();
    }
    //======================================================================
    AuthRecoveryMailComponent.prototype.ngOnInit = function () {
        this.title.setTitle("Idealizerr - " + this._.instant('global.recover-pass'));
    };
    AuthRecoveryMailComponent.prototype.buildForm = function () {
        this.form = this.FORM_BUILDER.group({
            email: [null, [_angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].required, _angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].email]]
        });
    };
    //======================================================================
    AuthRecoveryMailComponent.prototype.submitForm = function () {
        if (this.form.valid) {
            var email = this.form.controls["email"].value;
            this.recoveryEmail(email);
        }
    };
    //======================================================================
    AuthRecoveryMailComponent.prototype.recoveryEmail = function (email) {
        var _this = this;
        this.AUTH.recoveryEmail(email).subscribe(function (RESPONSE) {
            if (RESPONSE.body.errors) {
                var errors = RESPONSE.body.errors;
                for (var i = 0; i < errors.length; i++) {
                    _this.NOTIFY.setNotification({
                        status: "danger",
                        text: errors[i]
                    });
                }
            }
            else {
                _this.ROUTER.navigate(["auth/success", "email"]);
            }
        }, function (ERROR) {
            _this.NOTIFY.setNotification({
                status: "danger",
                // text:"Düzgün e-poçt daxil edin. Bu e-poçt üçün istifadəçi tapılmadı.",
                text: _this._.instant("home.email_validation")
            });
        });
    };
    //======================================================================
    AuthRecoveryMailComponent.prototype.locationBack = function () {
        this.LOCATION.back();
    };
    AuthRecoveryMailComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
            selector: "app-auth-recovery-mail",
            template: __webpack_require__(/*! ./auth-recovery-mail.component.html */ "./src/app/modules/auth/pages/auth-recovery-mail/auth-recovery-mail.component.html"),
            styles: [__webpack_require__(/*! ./auth-recovery-mail.component.scss */ "./src/app/modules/auth/pages/auth-recovery-mail/auth-recovery-mail.component.scss")]
        }) //======================================================================
        ,
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [_angular_forms__WEBPACK_IMPORTED_MODULE_2__["FormBuilder"],
            src_app_modules_shared_services_auth_service__WEBPACK_IMPORTED_MODULE_3__["AuthService"],
            _angular_router__WEBPACK_IMPORTED_MODULE_4__["Router"],
            src_app_modules_shared_services_notify_service__WEBPACK_IMPORTED_MODULE_5__["NotifyService"],
            _angular_common__WEBPACK_IMPORTED_MODULE_6__["Location"],
            _ngx_translate_core__WEBPACK_IMPORTED_MODULE_7__["TranslateService"],
            _angular_platform_browser__WEBPACK_IMPORTED_MODULE_8__["Title"]])
    ], AuthRecoveryMailComponent);
    return AuthRecoveryMailComponent;
}()); //======================================================================



/***/ }),

/***/ "./src/app/modules/auth/pages/auth-recovery-password/auth-recovery-password.component.html":
/*!*************************************************************************************************!*\
  !*** ./src/app/modules/auth/pages/auth-recovery-password/auth-recovery-password.component.html ***!
  \*************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<div class=\"auth-recovery-password-holder\">\n  <div class=\"top\">\n    <h2 class=\"h2 i-medium pb-8px\">{{\"global.your-new-pass\" | translate}}</h2>\n    <p class=\"p i-light\">{{\"global.renew-pass\" | translate}}</p>\n  </div>\n  <div class=\"center\">\n    <div class=\"pb-40px\">\n      <form [formGroup]='form'\n            autocomplete='on'\n            validate\n            (keyup.enter)='submitForm()'>\n\n\n        <!-- 1 -->\n        <div class=\"row\">\n          <div class=\"col-12\">\n            <!-- COMMENT ================================================================================ -->\n            <div class=\"input-holder pb-32px\">\n              <label for=\"password\">{{\"global.password\" | translate}}</label>\n              <div class=\"input password\">\n                <input [type]='password_visible ? \"text\" : \"password\"'\n                       name='password'\n                       placeholder='{{\"global.password-placeholder\" | translate}}'\n                       formControlName='password'\n                       id='password'>\n                <i class=\"mdi mdi-eye\"\n                   *ngIf=\"!password_visible\"\n                   (click)=\"togglePasswordVisible()\"></i>\n                <i class=\"mdi mdi-eye-off\"\n                   *ngIf=\"password_visible\"\n                   (click)=\"togglePasswordVisible()\"></i>\n              </div>\n              <ul>\n                <li *ngIf=\"form.controls['password'].hasError('required') && form.controls['password'].touched\">\n                  {{\"global.requiredField\" | translate}}</li>\n                <li *ngIf=\"form.controls['password'].hasError('minlength') && form.controls['password'].touched\">\n                  {{\"global.requiredSymbol\" | translate:{'val': 6}  }}</li>\n              </ul>\n            </div>\n            <!-- ================================================================================ COMMENT -->\n          </div>\n        </div>\n\n        <!-- 2 -->\n        <div class=\"row\">\n          <div class=\"col-md-12 col-12\">\n            <button class=\"btn btn-brand7 w100\"\n                    [disabled]=\"!form.valid\"\n                    (click)=\"submitForm()\">{{\"global.refresh\" | translate}}</button>\n          </div>\n        </div>\n\n      </form>\n    </div>\n  </div>\n  <div class=\"bottom\"></div>\n</div>"

/***/ }),

/***/ "./src/app/modules/auth/pages/auth-recovery-password/auth-recovery-password.component.scss":
/*!*************************************************************************************************!*\
  !*** ./src/app/modules/auth/pages/auth-recovery-password/auth-recovery-password.component.scss ***!
  \*************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = ".auth-recovery-password-holder {\n  display: -webkit-box;\n  display: flex;\n  -webkit-box-orient: vertical;\n  -webkit-box-direction: normal;\n          flex-direction: column;\n  -webkit-box-pack: justify;\n          justify-content: space-between;\n  height: 100%; }\n\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIi9Vc2Vycy9iL0RvY3VtZW50cy9mcmVlbGFuY2UvaWRlYWxpemVyci1hbmd1bGFyL3NyYy9hcHAvbW9kdWxlcy9hdXRoL3BhZ2VzL2F1dGgtcmVjb3ZlcnktcGFzc3dvcmQvYXV0aC1yZWNvdmVyeS1wYXNzd29yZC5jb21wb25lbnQuc2NzcyJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFFQTtFQUNJLG9CQUFhO0VBQWIsYUFBYTtFQUNiLDRCQUFzQjtFQUF0Qiw2QkFBc0I7VUFBdEIsc0JBQXNCO0VBQ3RCLHlCQUE4QjtVQUE5Qiw4QkFBOEI7RUFDOUIsWUFBWSxFQUFBIiwiZmlsZSI6InNyYy9hcHAvbW9kdWxlcy9hdXRoL3BhZ2VzL2F1dGgtcmVjb3ZlcnktcGFzc3dvcmQvYXV0aC1yZWNvdmVyeS1wYXNzd29yZC5jb21wb25lbnQuc2NzcyIsInNvdXJjZXNDb250ZW50IjpbIkBpbXBvcnQgJ3NyYy9hc3NldHMvc2Nzcy9hYnN0cmFjdHMvdmFyaWFibGVzJztcblxuLmF1dGgtcmVjb3ZlcnktcGFzc3dvcmQtaG9sZGVye1xuICAgIGRpc3BsYXk6IGZsZXg7XG4gICAgZmxleC1kaXJlY3Rpb246IGNvbHVtbjtcbiAgICBqdXN0aWZ5LWNvbnRlbnQ6IHNwYWNlLWJldHdlZW47XG4gICAgaGVpZ2h0OiAxMDAlO1xufSJdfQ== */"

/***/ }),

/***/ "./src/app/modules/auth/pages/auth-recovery-password/auth-recovery-password.component.ts":
/*!***********************************************************************************************!*\
  !*** ./src/app/modules/auth/pages/auth-recovery-password/auth-recovery-password.component.ts ***!
  \***********************************************************************************************/
/*! exports provided: AuthRecoveryPasswordComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "AuthRecoveryPasswordComponent", function() { return AuthRecoveryPasswordComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/fesm5/forms.js");
/* harmony import */ var src_app_modules_shared_services_auth_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! src/app/modules/shared/services/auth.service */ "./src/app/modules/shared/services/auth.service.ts");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm5/router.js");
/* harmony import */ var src_app_modules_shared_services_notify_service__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! src/app/modules/shared/services/notify.service */ "./src/app/modules/shared/services/notify.service.ts");
/* harmony import */ var _ngx_translate_core__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! @ngx-translate/core */ "./node_modules/@ngx-translate/core/fesm5/ngx-translate-core.js");
/* harmony import */ var _angular_platform_browser__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! @angular/platform-browser */ "./node_modules/@angular/platform-browser/fesm5/platform-browser.js");








//======================================================================
var AuthRecoveryPasswordComponent = /** @class */ (function () {
    //======================================================================
    function AuthRecoveryPasswordComponent(FORM_BUILDER, AUTH, ACTIVATED_ROUTE, NOTIFY, ROUTER, _, title) {
        this.FORM_BUILDER = FORM_BUILDER;
        this.AUTH = AUTH;
        this.ACTIVATED_ROUTE = ACTIVATED_ROUTE;
        this.NOTIFY = NOTIFY;
        this.ROUTER = ROUTER;
        this._ = _;
        this.title = title;
        //======================================================================
        this.password_visible = false;
        this.AUTH.auth_page_location.next("recovery_password");
        this.buildForm();
    }
    //======================================================================
    AuthRecoveryPasswordComponent.prototype.ngOnInit = function () {
        this.title.setTitle("Idealizerr - " + this._.instant('global.your-new-pass'));
    };
    AuthRecoveryPasswordComponent.prototype.buildForm = function () {
        this.form = this.FORM_BUILDER.group({
            password: [null, [_angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].required, _angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].minLength(6)]]
        });
    };
    //======================================================================
    AuthRecoveryPasswordComponent.prototype.submitForm = function () {
        if (this.form.valid) {
            var password = this.form.controls["password"].value;
            var key = this.ACTIVATED_ROUTE.snapshot.queryParams.key;
            this.recoveryPassword(password, key);
        }
    };
    AuthRecoveryPasswordComponent.prototype.togglePasswordVisible = function () {
        this.password_visible = !this.password_visible;
    };
    //======================================================================
    AuthRecoveryPasswordComponent.prototype.recoveryPassword = function (password, key) {
        var _this = this;
        this.AUTH.recoveryPassword(password, key).subscribe(function (RESPONSE) {
            if (RESPONSE.body.errors) {
                var errors = RESPONSE.body.errors;
                for (var i = 0; i < errors.length; i++) {
                    _this.NOTIFY.setNotification({
                        status: "danger",
                        text: errors[i]
                    });
                }
            }
            else {
                _this.NOTIFY.setNotification({
                    status: "success",
                    // text:"Şifrəniz uğurla yeniləndi"
                    text: _this._.instant("home.password_success_validation")
                });
                _this.ROUTER.navigate(["auth/login"]);
            }
        }, function (ERROR) {
            _this.NOTIFY.setNotification({
                status: "danger",
                // text:"Şifrənizin yenilənməsi zamanı problem yarandı!"
                text: _this._.instant("home.password_validation")
            });
        });
    };
    AuthRecoveryPasswordComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
            selector: "app-auth-recovery-password",
            template: __webpack_require__(/*! ./auth-recovery-password.component.html */ "./src/app/modules/auth/pages/auth-recovery-password/auth-recovery-password.component.html"),
            styles: [__webpack_require__(/*! ./auth-recovery-password.component.scss */ "./src/app/modules/auth/pages/auth-recovery-password/auth-recovery-password.component.scss")]
        }) //======================================================================
        ,
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [_angular_forms__WEBPACK_IMPORTED_MODULE_2__["FormBuilder"],
            src_app_modules_shared_services_auth_service__WEBPACK_IMPORTED_MODULE_3__["AuthService"],
            _angular_router__WEBPACK_IMPORTED_MODULE_4__["ActivatedRoute"],
            src_app_modules_shared_services_notify_service__WEBPACK_IMPORTED_MODULE_5__["NotifyService"],
            _angular_router__WEBPACK_IMPORTED_MODULE_4__["Router"],
            _ngx_translate_core__WEBPACK_IMPORTED_MODULE_6__["TranslateService"],
            _angular_platform_browser__WEBPACK_IMPORTED_MODULE_7__["Title"]])
    ], AuthRecoveryPasswordComponent);
    return AuthRecoveryPasswordComponent;
}()); //======================================================================



/***/ }),

/***/ "./src/app/modules/auth/pages/auth-recovery-success/auth-recovery-success.component.html":
/*!***********************************************************************************************!*\
  !*** ./src/app/modules/auth/pages/auth-recovery-success/auth-recovery-success.component.html ***!
  \***********************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<div class=\"auth-success-holder\">\n  <div class=\"top\"></div>\n  <div class=\"center\"\n       *ngIf=\"success_type == 'signup'\">\n    <div class=\"display-flex align-items-center justify-content-center flex-direction-column\">\n      <i class=\"mdi mdi-check\"></i>\n      <p class=\"p i-medium text-center pb-1\">{{\"global.success-signup\" | translate}}</p>\n      <p class=\"p i-medium text-center pb-32px text-danger\">(Şəxsi kabinetə daxil olmaq üçün e-poçtunuzu yoxlayın)</p>\n      <a [routerLink]=\"['/auth/login']\"\n         class=\"btn btn-brand7 w100\">{{\"global.signin\" | translate}}</a>\n    </div>\n  </div>\n  <div class=\"center\"\n       *ngIf=\"success_type == 'email'\">\n    <div class=\"display-flex align-items-center justify-content-center flex-direction-column\">\n      <i class=\"mdi mdi-check\"></i>\n      <p class=\"p i-medium text-center pb-32px\">{{\"global.recover-pass-link\" | translate}}</p>\n      <a [routerLink]=\"['/auth/login']\"\n         class=\"btn btn-brand7 w100\"> {{\"global.signin\" | translate}}</a>\n    </div>\n  </div>\n  <div class=\"bottom\"></div>\n</div>"

/***/ }),

/***/ "./src/app/modules/auth/pages/auth-recovery-success/auth-recovery-success.component.scss":
/*!***********************************************************************************************!*\
  !*** ./src/app/modules/auth/pages/auth-recovery-success/auth-recovery-success.component.scss ***!
  \***********************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = ".auth-success-holder {\n  display: -webkit-box;\n  display: flex;\n  -webkit-box-orient: vertical;\n  -webkit-box-direction: normal;\n          flex-direction: column;\n  -webkit-box-pack: justify;\n          justify-content: space-between;\n  height: 100%; }\n  .auth-success-holder i {\n    font-size: 120px;\n    color: #3B45C0; }\n\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIi9Vc2Vycy9iL0RvY3VtZW50cy9mcmVlbGFuY2UvaWRlYWxpemVyci1hbmd1bGFyL3NyYy9hcHAvbW9kdWxlcy9hdXRoL3BhZ2VzL2F1dGgtcmVjb3Zlcnktc3VjY2Vzcy9hdXRoLXJlY292ZXJ5LXN1Y2Nlc3MuY29tcG9uZW50LnNjc3MiLCIvVXNlcnMvYi9Eb2N1bWVudHMvZnJlZWxhbmNlL2lkZWFsaXplcnItYW5ndWxhci9zcmMvYXNzZXRzL3Njc3MvYWJzdHJhY3RzL192YXJpYWJsZXMuc2NzcyJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFFQTtFQUNJLG9CQUFhO0VBQWIsYUFBYTtFQUNiLDRCQUFzQjtFQUF0Qiw2QkFBc0I7VUFBdEIsc0JBQXNCO0VBQ3RCLHlCQUE4QjtVQUE5Qiw4QkFBOEI7RUFDOUIsWUFBWSxFQUFBO0VBSmhCO0lBTVEsZ0JBQWdCO0lBQ2YsY0NtQk8sRUFBQSIsImZpbGUiOiJzcmMvYXBwL21vZHVsZXMvYXV0aC9wYWdlcy9hdXRoLXJlY292ZXJ5LXN1Y2Nlc3MvYXV0aC1yZWNvdmVyeS1zdWNjZXNzLmNvbXBvbmVudC5zY3NzIiwic291cmNlc0NvbnRlbnQiOlsiQGltcG9ydCAnc3JjL2Fzc2V0cy9zY3NzL2Fic3RyYWN0cy92YXJpYWJsZXMnO1xuXG4uYXV0aC1zdWNjZXNzLWhvbGRlcntcbiAgICBkaXNwbGF5OiBmbGV4O1xuICAgIGZsZXgtZGlyZWN0aW9uOiBjb2x1bW47XG4gICAganVzdGlmeS1jb250ZW50OiBzcGFjZS1iZXR3ZWVuO1xuICAgIGhlaWdodDogMTAwJTtcbiAgICBpe1xuICAgICAgICBmb250LXNpemU6IDEyMHB4O1xuICAgICAgICAgY29sb3I6ICRicmFuZDc7XG4gICAgfVxufSIsIi8vVFJBTlNJVElPTlxuJGJyMjoycHg7XG4kYnI0OjRweDtcbiRicjg6OHB4O1xuXG4vL1RSQU5TSVRJT05cbiR0cmFuc2l0aW9uLTI6IDAuMnMgbGluZWFyO1xuXG4vL0JPWCBTSEFET1dcbiRib3gtc2hhZG93LTE6IDAgN3B4IDE2cHggMCByZ2JhKDAsIDAsIDAsIDAuMDQpO1xuJGJveC1zaGFkb3ctMjogMCAxNnB4IDE2cHggMCByZ2JhKDAsIDAsIDAsIDAuMDYpO1xuJGJveC1zaGFkb3ctMzogMCA2cHggMTJweCAwIHJnYmEoMCwgMCwgMCwgMC4xKTtcbiRib3gtc2hhZG93LTQ6IDRweCA0cHggMTNweCAwIHJnYmEoMCwgMjgsIDUwLCAwLjU4KTtcbiRib3gtc2hhZG93LTU6IDRweCA0cHggMTNweCAwIHJnYmEoMCwgMjgsIDUwLCAwLjA3KTtcblxuXG5cbi8vQ09MT1JTXG4kaW5wdXQ6ICNGOUZBRkU7XG4kd2hpdGU6ICNGRkZGRkY7XG4kYmxhY2s6ICMwMDAwMDA7XG4kYnJhbmQwOiAjRURFRUY5O1xuJGJyYW5kMTogI0E1QUFFMjtcbiRicmFuZDI6ICM5NDk5REM7XG4kYnJhbmQzOiAjODI4OEQ2O1xuJGJyYW5kNDogIzcwNzdEMTtcbiRicmFuZDU6ICM1RTY2Q0I7XG4kYnJhbmQ2OiAjNEM1NUM1O1xuJGJyYW5kNzogIzNCNDVDMDtcbiRncmV5OiAjQjBCN0MzO1xuJHN1Y2Nlc3M6ICMwMENGNjk7XG4kd2FybmluZzogI0ZGQzAwMDtcbiRkYW5nZXI6ICNGRjA0NUI7XG4kdHJhbnNwYXJlbnQ6IHRyYW5zcGFyZW50O1xuJGxpbms6ICMxNjg2Qzk7XG5cblxuLy9GT05UU1xuJGlfYmxhY2sgOiBcImlfYmxhY2tcIjtcbiRpX2JvbGQgOiBcImlfYm9sZFwiO1xuJGlfZXh0cmFfYm9sZCA6IFwiaV9leHRyYV9ib2xkXCI7XG4kaV9leHRyYV9saWdodCA6IFwiaV9leHRyYV9saWdodFwiO1xuJGlfbGlnaHQgOiBcImlfbGlnaHRcIjtcbiRpX21lZGl1bSA6IFwiaV9tZWRpdW1cIjtcbiRpX3JlZ3VsYXIgOiBcImlfcmVndWxhclwiO1xuJGlfc2VtaV9ib2xkIDogXCJpX3NlbWlfYm9sZFwiO1xuJGlfdGhpbiA6IFwiaV90aGluXCI7XG5cblxuLy9GT05UIFNJWkVcbiRoMTozNHB4O1xuJGgyOjI4cHg7XG4kaDM6MjRweDtcbiRoNDoyMHB4O1xuJGg1OjE2cHg7XG4kcDoxNHB4O1xuJGxhYmVsOjEycHg7XG4kc21hbGw6MTBweDtcblxuXG4vL0JPUkRFUlxuJGJvcmRlcjM6IDNweCBzb2xpZCAkYnJhbmQwOyJdfQ== */"

/***/ }),

/***/ "./src/app/modules/auth/pages/auth-recovery-success/auth-recovery-success.component.ts":
/*!*********************************************************************************************!*\
  !*** ./src/app/modules/auth/pages/auth-recovery-success/auth-recovery-success.component.ts ***!
  \*********************************************************************************************/
/*! exports provided: AuthRecoverySuccessComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "AuthRecoverySuccessComponent", function() { return AuthRecoverySuccessComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm5/router.js");
/* harmony import */ var src_app_modules_shared_services_auth_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! src/app/modules/shared/services/auth.service */ "./src/app/modules/shared/services/auth.service.ts");




//======================================================================
var AuthRecoverySuccessComponent = /** @class */ (function () {
    //======================================================================
    function AuthRecoverySuccessComponent(ACTIVATED_ROUTE, AUTH) {
        this.ACTIVATED_ROUTE = ACTIVATED_ROUTE;
        this.AUTH = AUTH;
        this.AUTH.auth_page_location.next("recovery_success");
        this._spanshootSuccessType();
    }
    //======================================================================
    AuthRecoverySuccessComponent.prototype.ngOnInit = function () { };
    AuthRecoverySuccessComponent.prototype._spanshootSuccessType = function () {
        this.success_type = this.ACTIVATED_ROUTE.snapshot.params.type;
    };
    AuthRecoverySuccessComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
            selector: 'app-auth-recovery-success',
            template: __webpack_require__(/*! ./auth-recovery-success.component.html */ "./src/app/modules/auth/pages/auth-recovery-success/auth-recovery-success.component.html"),
            styles: [__webpack_require__(/*! ./auth-recovery-success.component.scss */ "./src/app/modules/auth/pages/auth-recovery-success/auth-recovery-success.component.scss")]
        })
        //======================================================================
        ,
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [_angular_router__WEBPACK_IMPORTED_MODULE_2__["ActivatedRoute"],
            src_app_modules_shared_services_auth_service__WEBPACK_IMPORTED_MODULE_3__["AuthService"]])
    ], AuthRecoverySuccessComponent);
    return AuthRecoverySuccessComponent;
}()); //======================================================================



/***/ }),

/***/ "./src/app/modules/auth/pages/auth-signup/auth-signup.component.html":
/*!***************************************************************************!*\
  !*** ./src/app/modules/auth/pages/auth-signup/auth-signup.component.html ***!
  \***************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<div class=\"auth-signup-holder\">\n  <div class=\"top\">\n    <h2 class=\"h2 i-medium pb-8px\">{{\"global.noaccsignup\" | translate}}</h2>\n    <p class=\"p i-light\">{{\"global.haveaccount\" | translate}} <a [routerLink]=\"['/auth/login']\"\n         class=\"link i-semi-bold\">{{\"global.signin\" | translate}}</a></p>\n  </div>\n  <div class=\"center\">\n    <div class=\"pt-40px\">\n      <social-login></social-login>\n    </div>\n    <div>\n      <!-- <or-holder></or-holder> -->\n    </div>\n\n\n    <div class=\"pb-40px\">\n      <form [formGroup]='form'\n            autocomplete='on'\n            validate\n            (keyup.enter)='submitForm()'>\n\n        <!-- 1 -->\n        <div class=\"row\">\n          <div class=\"col-md-6 col-12\">\n            <!-- COMMENT ================================================================================ -->\n            <div class=\"input-holder pb-24px\">\n              <label for=\"name\">{{\"global.name\" | translate}}</label>\n              <div class=\"input\">\n                <input type='text'\n                       name='name'\n                       placeholder='{{\"global.yourname\" | translate}}'\n                       formControlName='name'\n                       id='name'>\n              </div>\n              <ul>\n                <li *ngIf=\"form.controls['name'].hasError('required') && form.controls['name'].touched\">\n                  {{\"global.requiredField\" | translate}}\n                </li>\n              </ul>\n            </div>\n            <!-- ================================================================================ COMMENT -->\n          </div>\n          <div class=\"col-md-6 col-12\">\n            <!-- COMMENT ================================================================================ -->\n            <div class=\"input-holder pb-24px\">\n              <label for=\"surname\">{{\"global.lastname\" | translate}}</label>\n              <div class=\"input\">\n                <input type='text'\n                       name='surname'\n                       placeholder='{{\"global.yourlastname\" | translate}}'\n                       formControlName='surname'\n                       id='surname'>\n              </div>\n              <ul>\n                <li *ngIf=\"form.controls['surname'].hasError('required') && form.controls['surname'].touched\">\n                  {{\"global.requiredField\" | translate}}</li>\n              </ul>\n            </div>\n            <!-- ================================================================================ COMMENT -->\n          </div>\n        </div>\n\n        <!-- 2 -->\n        <div class=\"row\">\n          <div class=\"col-12\">\n            <!-- COMMENT ================================================================================ -->\n            <div class=\"input-holder pb-24px\">\n              <label for=\"email\">{{\"global.email\" | translate}}</label>\n              <div class=\"input right-icon\">\n                <input type='email'\n                       name='email'\n                       placeholder='{{\"global.your-email\" | translate}}'\n                       formControlName='email'\n                       id='email'>\n              </div>\n              <ul>\n                <li *ngIf=\"form.controls['email'].hasError('email') && form.controls['email'].touched\">\n                  {{\"global.correct-email\" | translate}}</li>\n                <li *ngIf=\"form.controls['email'].hasError('required') && form.controls['email'].touched\">\n                  {{\"global.requiredField\" | translate}}</li>\n              </ul>\n            </div>\n            <!-- ================================================================================ COMMENT -->\n          </div>\n        </div>\n\n        <!-- 3 -->\n        <div class=\"row\">\n          <div class=\"col-12\">\n            <!-- COMMENT ================================================================================ -->\n            <!-- <div class=\"holder\">\n              <ngx-ea-intl-tel-input [hideCountriesDialCodeList]=\"[AZ,EN]\" [numberPlaceholder]=\"'Mobil nömrəniz'\" [searchPlaceholder]=\"'Axtarış'\"></ngx-ea-intl-tel-input>\n            </div> -->\n\n            <div class=\"input-holder pb-24px\">\n              <label for=\"phone_number\">{{\"global.phone\" | translate}}</label>\n              <div class=\"input right-icon\">\n                <ngx-ea-intl-tel-input\n                                       [value]=\"''\"\n                                       [signUpVersion]=\"true\"\n                                       [hideCountriesDialCodeList]=\"[]\"\n                                       [placeholder]=\"'global.yournumber' | translate\"\n                                       [searchPlaceholder]=\"'home.search' | translate\"\n                                       (value)=\"mobileNumberInputChange($event)\"></ngx-ea-intl-tel-input>\n                <!-- <input type='text'\n                       name='phone_number'\n                       placeholder='{{\"global.yourphone\" | translate}}'\n                       formControlName='phone_number'\n                       id='phone_number'> -->\n              </div>\n              <ul>\n                <li *ngIf=\"form.controls['phone_number'].hasError('required') && form.controls['phone_number'].touched\">\n                  {{\"global.requiredField\" | translate}}</li>\n              </ul>\n            </div>\n            <!-- ================================================================================ COMMENT -->\n          </div>\n        </div>\n\n        <!-- 4 -->\n        <div class=\"row\">\n          <div class=\"col-12\">\n            <!-- COMMENT ================================================================================ -->\n            <div class=\"input-holder pb-32px\">\n              <label for=\"password\">{{\"global.password\" | translate}}</label>\n              <div class=\"input password\">\n                <input [type]='password_visible ? \"text\" : \"password\"'\n                       name='password'\n                       placeholder='{{\"global.password-placeholder\" | translate}}'\n                       formControlName='password'\n                       id='password'>\n                <i class=\"mdi mdi-eye\"\n                   *ngIf=\"!password_visible\"\n                   (click)=\"togglePasswordVisible()\"></i>\n                <i class=\"mdi mdi-eye-off\"\n                   *ngIf=\"password_visible\"\n                   (click)=\"togglePasswordVisible()\"></i>\n              </div>\n              <ul>\n                <li *ngIf=\"form.controls['password'].hasError('required') && form.controls['password'].touched\">\n                  {{\"global.requiredField\" | translate}}</li>\n                <li *ngIf=\"form.controls['password'].hasError('minlength') && form.controls['password'].touched\">\n                  {{\"global.requiredSymbol\" | translate:{'val': 6} }}</li>\n              </ul>\n            </div>\n            <!-- ================================================================================ COMMENT -->\n          </div>\n        </div>\n        <div class=\"row\">\n          <div class=\"col-12\">\n            <!-- COMMENT ================================================================================ -->\n            <div class=\"input-holder pb-32px\">\n              <label for=\"password\">{{\"global.password-conf\" | translate}}</label>\n              <div class=\"input password\">\n                <input [type]='password_visible ? \"text\" : \"password\"'\n                       name='password'\n                      placeholder='{{\"global.password-conf-placeholder\" | translate}}'\n                       formControlName='password-confirm'\n                       id='password-confirm'>\n                <i class=\"mdi mdi-eye\"\n                   *ngIf=\"!password_visible\"\n                   (click)=\"togglePasswordVisible()\"></i>\n                <i class=\"mdi mdi-eye-off\"\n                   *ngIf=\"password_visible\"\n                   (click)=\"togglePasswordVisible()\"></i>\n              </div>\n              <ul>\n                <li *ngIf=\"form.controls['password-confirm'].hasError('required') && form.controls['password-confirm'].touched\">\n                  {{\"global.requiredField\" | translate}}</li>\n                <li *ngIf=\"form.controls['password-confirm'].hasError('minlength') && form.controls['password-confirm'].touched\">\n                  {{\"global.requiredSymbol\" | translate:{'val': 6} }}</li>\n                  <li *ngIf=\"form && form.hasError('invalid') && (form.controls['password-confirm'].touched || form.controls['password'].touched)\">\n                    {{\"global.confirm-password-required\" | translate}}</li>\n              </ul>\n            </div>\n            <!-- ================================================================================ COMMENT -->\n          </div>\n        </div>\n\n        <!-- 5 -->\n        <!-- <div class=\"row\">\n          <div class=\"col-12\">\n            <div class=\"display-flex pb-8px\">\n              <label class=\"checkbox\" for=\"current_competition\">\n                <p class=\"label i-regular\">Cari müsabiqədə iştirak etmək istəyirəm </p>\n                <input type=\"checkbox\" formControlName='current_competition' name=\"current_competition\" id=\"current_competition\">\n                <span class=\"checkmark\"></span>\n              </label>\n              <div class=\"pl-8px\"><i class=\"mdi mdi-information fs-20px brand7\"></i></div>\n            </div>\n          </div>\n        </div> -->\n\n        <!-- 6 -->\n        <div class=\"row\">\n          <div class=\"col-12\">\n            <div class=\"display-flex align-items-center pb-32px\">\n              <label class=\"checkbox\"\n                     for=\"terms_accepted\">\n                <input type=\"checkbox\"\n                       formControlName='terms_accepted'\n                       name=\"terms_accepted\"\n                       id=\"terms_accepted\">\n                <span class=\"checkmark\"></span>\n              </label>\n              <div class=\"pl-8px\">\n                <p class=\"label i-regular\"><a (click)=\"openTermsModal()\"\n                     class=\"link i-semi-bold\">{{\"global.terms\" | translate}}</a></p>\n              </div>\n            </div>\n          </div>\n        </div>\n\n        <div>\n          <button class=\"btn btn-brand7 w100\"\n                  [disabled]=\"!form.valid\"\n                  (click)=\"submitForm()\">{{\"global.signup\" | translate}}</button>\n        </div>\n\n      </form>\n    </div>\n  </div>\n  <div class=\"bottom\"></div>\n</div>\n\n<terms-modal *ngIf=\"terms_display\"\n             (accept)=\"acceptTerms()\"\n             (close)=\"closeTermsModal()\"></terms-modal>"

/***/ }),

/***/ "./src/app/modules/auth/pages/auth-signup/auth-signup.component.scss":
/*!***************************************************************************!*\
  !*** ./src/app/modules/auth/pages/auth-signup/auth-signup.component.scss ***!
  \***************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = ".auth-signup-holder {\n  display: -webkit-box;\n  display: flex;\n  -webkit-box-orient: vertical;\n  -webkit-box-direction: normal;\n          flex-direction: column;\n  -webkit-box-pack: justify;\n          justify-content: space-between;\n  height: 100%; }\n\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIi9Vc2Vycy9iL0RvY3VtZW50cy9mcmVlbGFuY2UvaWRlYWxpemVyci1hbmd1bGFyL3NyYy9hcHAvbW9kdWxlcy9hdXRoL3BhZ2VzL2F1dGgtc2lnbnVwL2F1dGgtc2lnbnVwLmNvbXBvbmVudC5zY3NzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUVBO0VBQ0ksb0JBQWE7RUFBYixhQUFhO0VBQ2IsNEJBQXNCO0VBQXRCLDZCQUFzQjtVQUF0QixzQkFBc0I7RUFDdEIseUJBQThCO1VBQTlCLDhCQUE4QjtFQUM5QixZQUFZLEVBQUEiLCJmaWxlIjoic3JjL2FwcC9tb2R1bGVzL2F1dGgvcGFnZXMvYXV0aC1zaWdudXAvYXV0aC1zaWdudXAuY29tcG9uZW50LnNjc3MiLCJzb3VyY2VzQ29udGVudCI6WyJAaW1wb3J0ICdzcmMvYXNzZXRzL3Njc3MvYWJzdHJhY3RzL3ZhcmlhYmxlcyc7XG5cbi5hdXRoLXNpZ251cC1ob2xkZXJ7XG4gICAgZGlzcGxheTogZmxleDtcbiAgICBmbGV4LWRpcmVjdGlvbjogY29sdW1uO1xuICAgIGp1c3RpZnktY29udGVudDogc3BhY2UtYmV0d2VlbjtcbiAgICBoZWlnaHQ6IDEwMCU7XG59Il19 */"

/***/ }),

/***/ "./src/app/modules/auth/pages/auth-signup/auth-signup.component.ts":
/*!*************************************************************************!*\
  !*** ./src/app/modules/auth/pages/auth-signup/auth-signup.component.ts ***!
  \*************************************************************************/
/*! exports provided: AuthSignupComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "AuthSignupComponent", function() { return AuthSignupComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/fesm5/forms.js");
/* harmony import */ var src_app_modules_shared_services_auth_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! src/app/modules/shared/services/auth.service */ "./src/app/modules/shared/services/auth.service.ts");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm5/router.js");
/* harmony import */ var src_app_modules_shared_services_notify_service__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! src/app/modules/shared/services/notify.service */ "./src/app/modules/shared/services/notify.service.ts");
/* harmony import */ var _ngx_translate_core__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! @ngx-translate/core */ "./node_modules/@ngx-translate/core/fesm5/ngx-translate-core.js");
/* harmony import */ var _angular_platform_browser__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! @angular/platform-browser */ "./node_modules/@angular/platform-browser/fesm5/platform-browser.js");








//======================================================================
var AuthSignupComponent = /** @class */ (function () {
    //======================================================================
    function AuthSignupComponent(FORM_BUILDER, AUTH, ROUTER, NOTIFY, _, title) {
        this.FORM_BUILDER = FORM_BUILDER;
        this.AUTH = AUTH;
        this.ROUTER = ROUTER;
        this.NOTIFY = NOTIFY;
        this._ = _;
        this.title = title;
        //======================================================================
        this.terms_display = false;
        //======================================================================
        this.password_visible = false;
        this.AUTH.auth_page_location.next("signup");
        this._buildForm();
    }
    //======================================================================
    AuthSignupComponent.prototype.ngOnInit = function () {
        this.title.setTitle("Idealizerr - " + this._.instant('global.noaccsignup'));
    };
    AuthSignupComponent.prototype.mobileNumberInputChange = function ($event) {
        console.log($event);
        this.form.get('phone_number').markAsTouched();
        this.form.get('phone_number').setValue($event);
    };
    AuthSignupComponent.prototype.acceptTerms = function () {
        this.form.controls["terms_accepted"].setValue(true);
    };
    AuthSignupComponent.prototype.closeTermsModal = function () {
        this.terms_display = false;
    };
    AuthSignupComponent.prototype.openTermsModal = function () {
        this.terms_display = true;
    };
    AuthSignupComponent.prototype._buildForm = function () {
        this.form = this.FORM_BUILDER.group({
            name: [null, [_angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].required]],
            surname: [null, [_angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].required]],
            email: [null, [_angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].required, _angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].email]],
            phone_number: [null, [_angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].required]],
            password: [null, [_angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].required, _angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].minLength(6)]],
            'password-confirm': [null, [_angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].required, _angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].minLength(6), this.passwordConfirming]],
            // current_competition: [false, []],
            terms_accepted: [false, [_angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].pattern("true")]]
        }, { validator: this.passwordConfirming });
    };
    AuthSignupComponent.prototype.togglePasswordVisible = function () {
        this.password_visible = !this.password_visible;
    };
    //======================================================================
    AuthSignupComponent.prototype.submitForm = function () {
        if (this.form.valid) {
            var body = {
                name: this.form.controls["name"].value,
                surname: this.form.controls["surname"].value,
                email: this.form.controls["email"].value,
                phone_number: this.form.controls["phone_number"].value,
                password: this.form.controls["password"].value,
                // current_competition: this.form.controls['current_competition'].value,
                terms_accepted: this.form.controls["terms_accepted"].value
            };
            this._postSignup(body);
        }
    };
    //======================================================================
    AuthSignupComponent.prototype._postSignup = function (body) {
        var _this = this;
        this.AUTH.signup(body).subscribe(function (RESPONSE) {
            if (RESPONSE.body.errors) {
                var errors = RESPONSE.body.errors;
                for (var i = 0; i < errors.length; i++) {
                    _this.NOTIFY.setNotification({
                        status: "danger",
                        text: errors[i]
                    });
                }
            }
            else {
                _this.ROUTER.navigate(["auth/success/signup"]);
            }
        }, function (ERROR) {
            _this.NOTIFY.setNotification({
                status: "danger",
                text: _this._.instant("home.register_validation")
            });
        });
    };
    AuthSignupComponent.prototype.passwordConfirming = function (c) {
        console.log(c);
        if (c.get('password') && c.get('password').value !== c.get('password-confirm').value) {
            return { invalid: true };
        }
    };
    AuthSignupComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
            selector: "app-auth-signup",
            template: __webpack_require__(/*! ./auth-signup.component.html */ "./src/app/modules/auth/pages/auth-signup/auth-signup.component.html"),
            styles: [__webpack_require__(/*! ./auth-signup.component.scss */ "./src/app/modules/auth/pages/auth-signup/auth-signup.component.scss")]
        }) //======================================================================
        ,
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [_angular_forms__WEBPACK_IMPORTED_MODULE_2__["FormBuilder"],
            src_app_modules_shared_services_auth_service__WEBPACK_IMPORTED_MODULE_3__["AuthService"],
            _angular_router__WEBPACK_IMPORTED_MODULE_4__["Router"],
            src_app_modules_shared_services_notify_service__WEBPACK_IMPORTED_MODULE_5__["NotifyService"],
            _ngx_translate_core__WEBPACK_IMPORTED_MODULE_6__["TranslateService"],
            _angular_platform_browser__WEBPACK_IMPORTED_MODULE_7__["Title"]])
    ], AuthSignupComponent);
    return AuthSignupComponent;
}()); //======================================================================



/***/ })

}]);
//# sourceMappingURL=app-modules-auth-auth-module.js.map