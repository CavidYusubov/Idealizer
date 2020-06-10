(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["app-modules-dashboard-dashboard-module"],{

/***/ "./src/app/modules/dashboard/components/dashboard-header/dashboard-header.component.html":
/*!***********************************************************************************************!*\
  !*** ./src/app/modules/dashboard/components/dashboard-header/dashboard-header.component.html ***!
  \***********************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<div class=\"dashboard-header\">\n  <div class=\"wrapper h100\">\n    <div class=\"h100 display-flex justify-content-space-between align-items-center\">\n\n\n      <!-- COMMENT ================================================================================ -->\n      <div class=\"left d-block-mobile\">\n        <h3 class=\"h3 i-medium\">{{title}}</h3>\n      </div>\n      <!-- ================================================================================ COMMENT -->\n\n      <app-timeline class=\"mob-w100\"></app-timeline>\n\n      <!-- COMMENT ================================================================================ -->\n      <div class=\"right d-block-mobile\">\n\n\n        <div>\n          <header-auth [user]=\"user\"></header-auth>\n        </div>\n\n\n      </div>\n      <!-- ================================================================================ COMMENT -->\n\n\n    </div>\n\n  </div>\n</div>"

/***/ }),

/***/ "./src/app/modules/dashboard/components/dashboard-header/dashboard-header.component.scss":
/*!***********************************************************************************************!*\
  !*** ./src/app/modules/dashboard/components/dashboard-header/dashboard-header.component.scss ***!
  \***********************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = ".dashboard-header {\n  position: fixed;\n  top: 0px;\n  left: 100px;\n  width: calc(100% - 100px);\n  height: 100px;\n  background-color: #EDEEF9;\n  z-index: 100; }\n  @media (max-width: 563px) {\n    .dashboard-header {\n      left: 71px;\n      width: calc(100% - 71px); } }\n  .dashboard-header .wrapper {\n    border-bottom: 1px solid #FFFFFF; }\n  @media (max-width: 563px) {\n      .dashboard-header .wrapper {\n        padding: 0; } }\n  @media (max-width: 1066px) {\n  .d-block-mobile {\n    display: none; }\n  .mob-w100 {\n    width: 100%; } }\n\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIi9Vc2Vycy9iL0RvY3VtZW50cy9mcmVlbGFuY2UvaWRlYWxpemVyci1hbmd1bGFyL3NyYy9hcHAvbW9kdWxlcy9kYXNoYm9hcmQvY29tcG9uZW50cy9kYXNoYm9hcmQtaGVhZGVyL2Rhc2hib2FyZC1oZWFkZXIuY29tcG9uZW50LnNjc3MiLCIvVXNlcnMvYi9Eb2N1bWVudHMvZnJlZWxhbmNlL2lkZWFsaXplcnItYW5ndWxhci9zcmMvYXNzZXRzL3Njc3MvYWJzdHJhY3RzL192YXJpYWJsZXMuc2NzcyJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFFQTtFQUNJLGVBQWU7RUFDZixRQUFRO0VBQ1IsV0FBVztFQUNYLHlCQUF5QjtFQUN6QixhQUFhO0VBQ2IseUJDYVk7RURaWixZQUFZLEVBQUE7RUFFWjtJQVRKO01BVVEsVUFBVTtNQUNWLHdCQUF3QixFQUFBLEVBVy9CO0VBdEJEO0lBZVEsZ0NDRU8sRUFBQTtFREFQO01BakJSO1FBa0JZLFVBQVUsRUFBQSxFQUdqQjtFQUdMO0VBQ0k7SUFDSSxhQUFhLEVBQUE7RUFHakI7SUFDSSxXQUFXLEVBQUEsRUFDZCIsImZpbGUiOiJzcmMvYXBwL21vZHVsZXMvZGFzaGJvYXJkL2NvbXBvbmVudHMvZGFzaGJvYXJkLWhlYWRlci9kYXNoYm9hcmQtaGVhZGVyLmNvbXBvbmVudC5zY3NzIiwic291cmNlc0NvbnRlbnQiOlsiQGltcG9ydCAnc3JjL2Fzc2V0cy9zY3NzL2Fic3RyYWN0cy92YXJpYWJsZXMnO1xuXG4uZGFzaGJvYXJkLWhlYWRlciB7XG4gICAgcG9zaXRpb246IGZpeGVkO1xuICAgIHRvcDogMHB4O1xuICAgIGxlZnQ6IDEwMHB4O1xuICAgIHdpZHRoOiBjYWxjKDEwMCUgLSAxMDBweCk7XG4gICAgaGVpZ2h0OiAxMDBweDtcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiAkYnJhbmQwO1xuICAgIHotaW5kZXg6IDEwMDtcblxuICAgIEBtZWRpYSAobWF4LXdpZHRoOiA1NjNweCkge1xuICAgICAgICBsZWZ0OiA3MXB4O1xuICAgICAgICB3aWR0aDogY2FsYygxMDAlIC0gNzFweCk7XG4gICAgfVxuXG4gICAgLndyYXBwZXIge1xuICAgICAgICBib3JkZXItYm90dG9tOiAxcHggc29saWQgJHdoaXRlO1xuXG4gICAgICAgIEBtZWRpYSAobWF4LXdpZHRoOiA1NjNweCkge1xuICAgICAgICAgICAgcGFkZGluZzogMDtcbiAgICAgICAgfVxuXG4gICAgfVxufVxuXG5AbWVkaWEgKG1heC13aWR0aDogMTA2NnB4KSB7XG4gICAgLmQtYmxvY2stbW9iaWxlIHtcbiAgICAgICAgZGlzcGxheTogbm9uZTtcbiAgICB9XG5cbiAgICAubW9iLXcxMDAge1xuICAgICAgICB3aWR0aDogMTAwJTtcbiAgICB9XG59IiwiLy9UUkFOU0lUSU9OXG4kYnIyOjJweDtcbiRicjQ6NHB4O1xuJGJyODo4cHg7XG5cbi8vVFJBTlNJVElPTlxuJHRyYW5zaXRpb24tMjogMC4ycyBsaW5lYXI7XG5cbi8vQk9YIFNIQURPV1xuJGJveC1zaGFkb3ctMTogMCA3cHggMTZweCAwIHJnYmEoMCwgMCwgMCwgMC4wNCk7XG4kYm94LXNoYWRvdy0yOiAwIDE2cHggMTZweCAwIHJnYmEoMCwgMCwgMCwgMC4wNik7XG4kYm94LXNoYWRvdy0zOiAwIDZweCAxMnB4IDAgcmdiYSgwLCAwLCAwLCAwLjEpO1xuJGJveC1zaGFkb3ctNDogNHB4IDRweCAxM3B4IDAgcmdiYSgwLCAyOCwgNTAsIDAuNTgpO1xuJGJveC1zaGFkb3ctNTogNHB4IDRweCAxM3B4IDAgcmdiYSgwLCAyOCwgNTAsIDAuMDcpO1xuXG5cblxuLy9DT0xPUlNcbiRpbnB1dDogI0Y5RkFGRTtcbiR3aGl0ZTogI0ZGRkZGRjtcbiRibGFjazogIzAwMDAwMDtcbiRicmFuZDA6ICNFREVFRjk7XG4kYnJhbmQxOiAjQTVBQUUyO1xuJGJyYW5kMjogIzk0OTlEQztcbiRicmFuZDM6ICM4Mjg4RDY7XG4kYnJhbmQ0OiAjNzA3N0QxO1xuJGJyYW5kNTogIzVFNjZDQjtcbiRicmFuZDY6ICM0QzU1QzU7XG4kYnJhbmQ3OiAjM0I0NUMwO1xuJGdyZXk6ICNCMEI3QzM7XG4kc3VjY2VzczogIzAwQ0Y2OTtcbiR3YXJuaW5nOiAjRkZDMDAwO1xuJGRhbmdlcjogI0ZGMDQ1QjtcbiR0cmFuc3BhcmVudDogdHJhbnNwYXJlbnQ7XG4kbGluazogIzE2ODZDOTtcblxuXG4vL0ZPTlRTXG4kaV9ibGFjayA6IFwiaV9ibGFja1wiO1xuJGlfYm9sZCA6IFwiaV9ib2xkXCI7XG4kaV9leHRyYV9ib2xkIDogXCJpX2V4dHJhX2JvbGRcIjtcbiRpX2V4dHJhX2xpZ2h0IDogXCJpX2V4dHJhX2xpZ2h0XCI7XG4kaV9saWdodCA6IFwiaV9saWdodFwiO1xuJGlfbWVkaXVtIDogXCJpX21lZGl1bVwiO1xuJGlfcmVndWxhciA6IFwiaV9yZWd1bGFyXCI7XG4kaV9zZW1pX2JvbGQgOiBcImlfc2VtaV9ib2xkXCI7XG4kaV90aGluIDogXCJpX3RoaW5cIjtcblxuXG4vL0ZPTlQgU0laRVxuJGgxOjM0cHg7XG4kaDI6MjhweDtcbiRoMzoyNHB4O1xuJGg0OjIwcHg7XG4kaDU6MTZweDtcbiRwOjE0cHg7XG4kbGFiZWw6MTJweDtcbiRzbWFsbDoxMHB4O1xuXG5cbi8vQk9SREVSXG4kYm9yZGVyMzogM3B4IHNvbGlkICRicmFuZDA7Il19 */"

/***/ }),

/***/ "./src/app/modules/dashboard/components/dashboard-header/dashboard-header.component.ts":
/*!*********************************************************************************************!*\
  !*** ./src/app/modules/dashboard/components/dashboard-header/dashboard-header.component.ts ***!
  \*********************************************************************************************/
/*! exports provided: DashboardHeaderComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "DashboardHeaderComponent", function() { return DashboardHeaderComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var src_app_modules_shared_services_dashboard_service__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! src/app/modules/shared/services/dashboard.service */ "./src/app/modules/shared/services/dashboard.service.ts");
/* harmony import */ var src_app_modules_shared_services_auth_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! src/app/modules/shared/services/auth.service */ "./src/app/modules/shared/services/auth.service.ts");
/* harmony import */ var src_app_modules_shared_services_utils_service__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! src/app/modules/shared/services/utils.service */ "./src/app/modules/shared/services/utils.service.ts");





//======================================================================
var DashboardHeaderComponent = /** @class */ (function () {
    //======================================================================
    function DashboardHeaderComponent(DASHBOARD, AUTH) {
        this.DASHBOARD = DASHBOARD;
        this.AUTH = AUTH;
        this.subsTitle();
        this.subsUser();
    }
    //======================================================================
    DashboardHeaderComponent.prototype.ngOnInit = function () { };
    //======================================================================
    DashboardHeaderComponent.prototype.ngOnDestroy = function () {
        this.subs_title.unsubscribe();
        this.subs_user.unsubscribe();
    };
    DashboardHeaderComponent.prototype.subsTitle = function () {
        var _this = this;
        this.subs_title = this.DASHBOARD.title.subscribe(function (title) {
            _this.title = title;
        });
    };
    DashboardHeaderComponent.prototype.subsUser = function () {
        var _this = this;
        this.subs_user = this.AUTH.user.subscribe(function (user) {
            if (!Object(src_app_modules_shared_services_utils_service__WEBPACK_IMPORTED_MODULE_4__["objectIsNull"])(user)) {
                _this.user = user;
            }
            else {
                _this.user = null;
            }
        });
    };
    DashboardHeaderComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
            selector: 'dashboard-header',
            template: __webpack_require__(/*! ./dashboard-header.component.html */ "./src/app/modules/dashboard/components/dashboard-header/dashboard-header.component.html"),
            styles: [__webpack_require__(/*! ./dashboard-header.component.scss */ "./src/app/modules/dashboard/components/dashboard-header/dashboard-header.component.scss")]
        }) //======================================================================
        ,
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [src_app_modules_shared_services_dashboard_service__WEBPACK_IMPORTED_MODULE_2__["DashboardService"],
            src_app_modules_shared_services_auth_service__WEBPACK_IMPORTED_MODULE_3__["AuthService"]])
    ], DashboardHeaderComponent);
    return DashboardHeaderComponent;
}()); //======================================================================



/***/ }),

/***/ "./src/app/modules/dashboard/components/dashboard-sidebar/dashboard-sidebar.component.html":
/*!*************************************************************************************************!*\
  !*** ./src/app/modules/dashboard/components/dashboard-sidebar/dashboard-sidebar.component.html ***!
  \*************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<div class=\"dashboard-sidebar\">\n  <div class=\"top\">\n    <a [routerLink]=\"['/']\"\n       class=\"brand\">\n      <img src=\"/assets/images/idealizerr_logo.svg\"\n           class=\"object-fit-contain\">\n    </a>\n  </div>\n  <div class=\"center\">\n    <nav>\n      <ul>\n        <li><a [routerLink]=\"['/dashboard']\"\n             (click)=\"setTitle('')\"\n             routerLinkActive=\"active\"\n             [routerLinkActiveOptions]=\"{exact: true}\"><i class=\"mdi mdi-home\"></i></a></li>\n        <li *ngIf=\"currentUser.user_role !== 'juri'\"><a [routerLink]=\"['/dashboard/startups']\"\n             (click)=\"setTitle('')\"\n             routerLinkActive=\"active\"><i class=\"mdi mdi-view-list\"></i></a></li>\n        <li><a [routerLink]=\"['/dashboard/notifications']\"\n             (click)=\"setTitle('')\"\n             routerLinkActive=\"active\"><i class=\"mdi mdi-bell\"></i><span *ngIf=\"notificationsLength !== 0\"\n                  class=\"badge i-bold\">{{notificationsLength}}</span></a></li>\n        <li><a [routerLink]=\"['/dashboard/settings']\"\n             (click)=\"setTitle('')\"\n             routerLinkActive=\"active\"><i class=\"mdi mdi-settings\"></i></a></li>\n      </ul>\n    </nav>\n  </div>\n  <div class=\"bottom\"></div>\n</div>\n"

/***/ }),

/***/ "./src/app/modules/dashboard/components/dashboard-sidebar/dashboard-sidebar.component.scss":
/*!*************************************************************************************************!*\
  !*** ./src/app/modules/dashboard/components/dashboard-sidebar/dashboard-sidebar.component.scss ***!
  \*************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = ".dashboard-sidebar {\n  position: fixed;\n  top: 0px;\n  left: 0px;\n  width: 100px;\n  height: 100%;\n  padding: 32px 10px;\n  box-sizing: border-box;\n  display: -webkit-box;\n  display: flex;\n  -webkit-box-align: center;\n          align-items: center;\n  -webkit-box-pack: justify;\n          justify-content: space-between;\n  -webkit-box-orient: vertical;\n  -webkit-box-direction: normal;\n          flex-direction: column; }\n  @media (max-width: 563px) {\n    .dashboard-sidebar {\n      width: 71px; } }\n  .dashboard-sidebar .brand img {\n    width: 60px;\n    -o-object-fit: contain;\n       object-fit: contain; }\n  .dashboard-sidebar nav {\n    padding: 40px 10px;\n    box-sizing: border-box;\n    border-radius: 8px;\n    background-color: #3B45C0;\n    box-shadow: 4px 4px 13px 0 rgba(0, 28, 50, 0.58); }\n  .dashboard-sidebar nav ul {\n      display: -webkit-box;\n      display: flex;\n      -webkit-box-align: center;\n              align-items: center;\n      -webkit-box-orient: vertical;\n      -webkit-box-direction: normal;\n              flex-direction: column;\n      -webkit-box-pack: center;\n              justify-content: center;\n      margin-top: -8px;\n      margin-bottom: -8px; }\n  .dashboard-sidebar nav ul li {\n        padding-top: 8px;\n        padding-bottom: 8px; }\n  .dashboard-sidebar nav ul li a {\n          width: 40px;\n          height: 40px;\n          border-radius: 8px;\n          display: -webkit-box;\n          display: flex;\n          -webkit-box-align: center;\n                  align-items: center;\n          -webkit-box-pack: center;\n                  justify-content: center;\n          -webkit-transition: 0.2s linear;\n          transition: 0.2s linear;\n          position: relative; }\n  .dashboard-sidebar nav ul li a i {\n            font-size: 24px;\n            color: #FFFFFF;\n            -webkit-transition: 0.2s linear;\n            transition: 0.2s linear; }\n  .dashboard-sidebar nav ul li a.active, .dashboard-sidebar nav ul li a:hover {\n            background-color: #FFFFFF; }\n  .dashboard-sidebar nav ul li a.active i, .dashboard-sidebar nav ul li a:hover i {\n              color: #3B45C0; }\n  .badge {\n  display: inline-block;\n  background-color: #dc3545;\n  padding: 4px 5px;\n  color: #fff;\n  position: absolute;\n  top: -10px;\n  right: -10px;\n  border-radius: 4px;\n  font-size: 12px; }\n\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIi9Vc2Vycy9iL0RvY3VtZW50cy9mcmVlbGFuY2UvaWRlYWxpemVyci1hbmd1bGFyL3NyYy9hcHAvbW9kdWxlcy9kYXNoYm9hcmQvY29tcG9uZW50cy9kYXNoYm9hcmQtc2lkZWJhci9kYXNoYm9hcmQtc2lkZWJhci5jb21wb25lbnQuc2NzcyIsIi9Vc2Vycy9iL0RvY3VtZW50cy9mcmVlbGFuY2UvaWRlYWxpemVyci1hbmd1bGFyL3NyYy9hc3NldHMvc2Nzcy9hYnN0cmFjdHMvX3ZhcmlhYmxlcy5zY3NzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUVBO0VBQ0ksZUFBZTtFQUNmLFFBQVE7RUFDUixTQUFTO0VBQ1QsWUFBWTtFQUNaLFlBQVk7RUFDWixrQkFBa0I7RUFDbEIsc0JBQXNCO0VBQ3RCLG9CQUFhO0VBQWIsYUFBYTtFQUNiLHlCQUFtQjtVQUFuQixtQkFBbUI7RUFDbkIseUJBQThCO1VBQTlCLDhCQUE4QjtFQUM5Qiw0QkFBc0I7RUFBdEIsNkJBQXNCO1VBQXRCLHNCQUFzQixFQUFBO0VBRXRCO0lBYko7TUFjUSxXQUFXLEVBQUEsRUEwRGxCO0VBeEVEO0lBbUJZLFdBQVc7SUFDWCxzQkFBbUI7T0FBbkIsbUJBQW1CLEVBQUE7RUFwQi9CO0lBeUJRLGtCQUFrQjtJQUNsQixzQkFBc0I7SUFDdEIsa0JDMUJBO0lEMkJBLHlCQ0ZRO0lER1IsZ0RDbkIyQyxFQUFBO0VEVm5EO01BZ0NZLG9CQUFhO01BQWIsYUFBYTtNQUNiLHlCQUFtQjtjQUFuQixtQkFBbUI7TUFDbkIsNEJBQXNCO01BQXRCLDZCQUFzQjtjQUF0QixzQkFBc0I7TUFDdEIsd0JBQXVCO2NBQXZCLHVCQUF1QjtNQUN2QixnQkFBZ0I7TUFDaEIsbUJBQW1CLEVBQUE7RUFyQy9CO1FBd0NnQixnQkFBZ0I7UUFDaEIsbUJBQW1CLEVBQUE7RUF6Q25DO1VBNENvQixXQUFXO1VBQ1gsWUFBWTtVQUNaLGtCQzdDWjtVRDhDWSxvQkFBYTtVQUFiLGFBQWE7VUFDYix5QkFBbUI7a0JBQW5CLG1CQUFtQjtVQUNuQix3QkFBdUI7a0JBQXZCLHVCQUF1QjtVQUN2QiwrQkM5Q007VUQ4Q04sdUJDOUNNO1VEK0NOLGtCQUFrQixFQUFBO0VBbkR0QztZQXNEd0IsZUFBZTtZQUNmLGNDdENUO1lEdUNTLCtCQ3BERTtZRG9ERix1QkNwREUsRUFBQTtFREoxQjtZQTZEd0IseUJDNUNULEVBQUE7RURqQmY7Y0FnRTRCLGNDdENaLEVBQUE7RURnRGhCO0VBQ0kscUJBQXFCO0VBQ3JCLHlCQUF5QjtFQUN6QixnQkFBZ0I7RUFDaEIsV0FBVztFQUNYLGtCQUFrQjtFQUNsQixVQUFVO0VBQ1YsWUFBWTtFQUNaLGtCQUFrQjtFQUNsQixlQUFlLEVBQUEiLCJmaWxlIjoic3JjL2FwcC9tb2R1bGVzL2Rhc2hib2FyZC9jb21wb25lbnRzL2Rhc2hib2FyZC1zaWRlYmFyL2Rhc2hib2FyZC1zaWRlYmFyLmNvbXBvbmVudC5zY3NzIiwic291cmNlc0NvbnRlbnQiOlsiQGltcG9ydCAnc3JjL2Fzc2V0cy9zY3NzL2Fic3RyYWN0cy92YXJpYWJsZXMnO1xuXG4uZGFzaGJvYXJkLXNpZGViYXIge1xuICAgIHBvc2l0aW9uOiBmaXhlZDtcbiAgICB0b3A6IDBweDtcbiAgICBsZWZ0OiAwcHg7XG4gICAgd2lkdGg6IDEwMHB4O1xuICAgIGhlaWdodDogMTAwJTtcbiAgICBwYWRkaW5nOiAzMnB4IDEwcHg7XG4gICAgYm94LXNpemluZzogYm9yZGVyLWJveDtcbiAgICBkaXNwbGF5OiBmbGV4O1xuICAgIGFsaWduLWl0ZW1zOiBjZW50ZXI7XG4gICAganVzdGlmeS1jb250ZW50OiBzcGFjZS1iZXR3ZWVuO1xuICAgIGZsZXgtZGlyZWN0aW9uOiBjb2x1bW47XG5cbiAgICBAbWVkaWEgKG1heC13aWR0aDogNTYzcHgpIHtcbiAgICAgICAgd2lkdGg6IDcxcHg7XG4gICAgfVxuXG4gICAgLmJyYW5kIHtcbiAgICAgICAgaW1nIHtcbiAgICAgICAgICAgIHdpZHRoOiA2MHB4O1xuICAgICAgICAgICAgb2JqZWN0LWZpdDogY29udGFpbjtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIG5hdiB7XG4gICAgICAgIHBhZGRpbmc6IDQwcHggMTBweDtcbiAgICAgICAgYm94LXNpemluZzogYm9yZGVyLWJveDtcbiAgICAgICAgYm9yZGVyLXJhZGl1czogJGJyODtcbiAgICAgICAgYmFja2dyb3VuZC1jb2xvcjogJGJyYW5kNztcbiAgICAgICAgYm94LXNoYWRvdzogJGJveC1zaGFkb3ctNDtcblxuICAgICAgICB1bCB7XG4gICAgICAgICAgICBkaXNwbGF5OiBmbGV4O1xuICAgICAgICAgICAgYWxpZ24taXRlbXM6IGNlbnRlcjtcbiAgICAgICAgICAgIGZsZXgtZGlyZWN0aW9uOiBjb2x1bW47XG4gICAgICAgICAgICBqdXN0aWZ5LWNvbnRlbnQ6IGNlbnRlcjtcbiAgICAgICAgICAgIG1hcmdpbi10b3A6IC04cHg7XG4gICAgICAgICAgICBtYXJnaW4tYm90dG9tOiAtOHB4O1xuXG4gICAgICAgICAgICBsaSB7XG4gICAgICAgICAgICAgICAgcGFkZGluZy10b3A6IDhweDtcbiAgICAgICAgICAgICAgICBwYWRkaW5nLWJvdHRvbTogOHB4O1xuXG4gICAgICAgICAgICAgICAgYSB7XG4gICAgICAgICAgICAgICAgICAgIHdpZHRoOiA0MHB4O1xuICAgICAgICAgICAgICAgICAgICBoZWlnaHQ6IDQwcHg7XG4gICAgICAgICAgICAgICAgICAgIGJvcmRlci1yYWRpdXM6ICRicjg7XG4gICAgICAgICAgICAgICAgICAgIGRpc3BsYXk6IGZsZXg7XG4gICAgICAgICAgICAgICAgICAgIGFsaWduLWl0ZW1zOiBjZW50ZXI7XG4gICAgICAgICAgICAgICAgICAgIGp1c3RpZnktY29udGVudDogY2VudGVyO1xuICAgICAgICAgICAgICAgICAgICB0cmFuc2l0aW9uOiAkdHJhbnNpdGlvbi0yO1xuICAgICAgICAgICAgICAgICAgICBwb3NpdGlvbjogcmVsYXRpdmU7XG5cbiAgICAgICAgICAgICAgICAgICAgaSB7XG4gICAgICAgICAgICAgICAgICAgICAgICBmb250LXNpemU6IDI0cHg7XG4gICAgICAgICAgICAgICAgICAgICAgICBjb2xvcjogJHdoaXRlO1xuICAgICAgICAgICAgICAgICAgICAgICAgdHJhbnNpdGlvbjogJHRyYW5zaXRpb24tMjtcbiAgICAgICAgICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICAgICAgICAgICYuYWN0aXZlLFxuICAgICAgICAgICAgICAgICAgICAmOmhvdmVyIHtcbiAgICAgICAgICAgICAgICAgICAgICAgIGJhY2tncm91bmQtY29sb3I6ICR3aGl0ZTtcblxuICAgICAgICAgICAgICAgICAgICAgICAgaSB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgY29sb3I6ICRicmFuZDc7XG4gICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICB9XG4gICAgICAgIH1cblxuICAgIH1cbn1cblxuLmJhZGdlIHtcbiAgICBkaXNwbGF5OiBpbmxpbmUtYmxvY2s7XG4gICAgYmFja2dyb3VuZC1jb2xvcjogI2RjMzU0NTtcbiAgICBwYWRkaW5nOiA0cHggNXB4O1xuICAgIGNvbG9yOiAjZmZmO1xuICAgIHBvc2l0aW9uOiBhYnNvbHV0ZTtcbiAgICB0b3A6IC0xMHB4O1xuICAgIHJpZ2h0OiAtMTBweDtcbiAgICBib3JkZXItcmFkaXVzOiA0cHg7XG4gICAgZm9udC1zaXplOiAxMnB4O1xufSIsIi8vVFJBTlNJVElPTlxuJGJyMjoycHg7XG4kYnI0OjRweDtcbiRicjg6OHB4O1xuXG4vL1RSQU5TSVRJT05cbiR0cmFuc2l0aW9uLTI6IDAuMnMgbGluZWFyO1xuXG4vL0JPWCBTSEFET1dcbiRib3gtc2hhZG93LTE6IDAgN3B4IDE2cHggMCByZ2JhKDAsIDAsIDAsIDAuMDQpO1xuJGJveC1zaGFkb3ctMjogMCAxNnB4IDE2cHggMCByZ2JhKDAsIDAsIDAsIDAuMDYpO1xuJGJveC1zaGFkb3ctMzogMCA2cHggMTJweCAwIHJnYmEoMCwgMCwgMCwgMC4xKTtcbiRib3gtc2hhZG93LTQ6IDRweCA0cHggMTNweCAwIHJnYmEoMCwgMjgsIDUwLCAwLjU4KTtcbiRib3gtc2hhZG93LTU6IDRweCA0cHggMTNweCAwIHJnYmEoMCwgMjgsIDUwLCAwLjA3KTtcblxuXG5cbi8vQ09MT1JTXG4kaW5wdXQ6ICNGOUZBRkU7XG4kd2hpdGU6ICNGRkZGRkY7XG4kYmxhY2s6ICMwMDAwMDA7XG4kYnJhbmQwOiAjRURFRUY5O1xuJGJyYW5kMTogI0E1QUFFMjtcbiRicmFuZDI6ICM5NDk5REM7XG4kYnJhbmQzOiAjODI4OEQ2O1xuJGJyYW5kNDogIzcwNzdEMTtcbiRicmFuZDU6ICM1RTY2Q0I7XG4kYnJhbmQ2OiAjNEM1NUM1O1xuJGJyYW5kNzogIzNCNDVDMDtcbiRncmV5OiAjQjBCN0MzO1xuJHN1Y2Nlc3M6ICMwMENGNjk7XG4kd2FybmluZzogI0ZGQzAwMDtcbiRkYW5nZXI6ICNGRjA0NUI7XG4kdHJhbnNwYXJlbnQ6IHRyYW5zcGFyZW50O1xuJGxpbms6ICMxNjg2Qzk7XG5cblxuLy9GT05UU1xuJGlfYmxhY2sgOiBcImlfYmxhY2tcIjtcbiRpX2JvbGQgOiBcImlfYm9sZFwiO1xuJGlfZXh0cmFfYm9sZCA6IFwiaV9leHRyYV9ib2xkXCI7XG4kaV9leHRyYV9saWdodCA6IFwiaV9leHRyYV9saWdodFwiO1xuJGlfbGlnaHQgOiBcImlfbGlnaHRcIjtcbiRpX21lZGl1bSA6IFwiaV9tZWRpdW1cIjtcbiRpX3JlZ3VsYXIgOiBcImlfcmVndWxhclwiO1xuJGlfc2VtaV9ib2xkIDogXCJpX3NlbWlfYm9sZFwiO1xuJGlfdGhpbiA6IFwiaV90aGluXCI7XG5cblxuLy9GT05UIFNJWkVcbiRoMTozNHB4O1xuJGgyOjI4cHg7XG4kaDM6MjRweDtcbiRoNDoyMHB4O1xuJGg1OjE2cHg7XG4kcDoxNHB4O1xuJGxhYmVsOjEycHg7XG4kc21hbGw6MTBweDtcblxuXG4vL0JPUkRFUlxuJGJvcmRlcjM6IDNweCBzb2xpZCAkYnJhbmQwOyJdfQ== */"

/***/ }),

/***/ "./src/app/modules/dashboard/components/dashboard-sidebar/dashboard-sidebar.component.ts":
/*!***********************************************************************************************!*\
  !*** ./src/app/modules/dashboard/components/dashboard-sidebar/dashboard-sidebar.component.ts ***!
  \***********************************************************************************************/
/*! exports provided: DashboardSidebarComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "DashboardSidebarComponent", function() { return DashboardSidebarComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var src_app_modules_shared_services_dashboard_service__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! src/app/modules/shared/services/dashboard.service */ "./src/app/modules/shared/services/dashboard.service.ts");
/* harmony import */ var src_app_modules_shared_services_core_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! src/app/modules/shared/services/core.service */ "./src/app/modules/shared/services/core.service.ts");
/* harmony import */ var _ngx_translate_core__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @ngx-translate/core */ "./node_modules/@ngx-translate/core/fesm5/ngx-translate-core.js");
/* harmony import */ var _shared_services_auth_service__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../../../shared/services/auth.service */ "./src/app/modules/shared/services/auth.service.ts");






//======================================================================
var DashboardSidebarComponent = /** @class */ (function () {
    //======================================================================
    function DashboardSidebarComponent(DASHBOARD, CORE, tp, auth) {
        this.DASHBOARD = DASHBOARD;
        this.CORE = CORE;
        this.tp = tp;
        this.auth = auth;
        this.notificationsLength = 0;
    }
    //======================================================================
    DashboardSidebarComponent.prototype.ngOnInit = function () {
        var _this = this;
        this.auth.user.subscribe(function (currentUser) {
            _this.currentUser = currentUser;
        });
        this.CORE.notifications.subscribe(function (data) {
            var length = 0;
            data.forEach(function (dt) {
                if (dt.read === "0") {
                    length++;
                }
            });
            _this.notificationsLength = length;
        });
    };
    DashboardSidebarComponent.prototype.ngOnDestroy = function () {
        if (this._notifications) {
            this._notifications.unsubscribe();
        }
    };
    //======================================================================
    DashboardSidebarComponent.prototype.setTitle = function (title) { };
    DashboardSidebarComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
            selector: "dashboard-sidebar",
            template: __webpack_require__(/*! ./dashboard-sidebar.component.html */ "./src/app/modules/dashboard/components/dashboard-sidebar/dashboard-sidebar.component.html"),
            providers: [_ngx_translate_core__WEBPACK_IMPORTED_MODULE_4__["TranslatePipe"]],
            styles: [__webpack_require__(/*! ./dashboard-sidebar.component.scss */ "./src/app/modules/dashboard/components/dashboard-sidebar/dashboard-sidebar.component.scss")]
        }) //======================================================================
        ,
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [src_app_modules_shared_services_dashboard_service__WEBPACK_IMPORTED_MODULE_2__["DashboardService"],
            src_app_modules_shared_services_core_service__WEBPACK_IMPORTED_MODULE_3__["CoreService"],
            _ngx_translate_core__WEBPACK_IMPORTED_MODULE_4__["TranslatePipe"],
            _shared_services_auth_service__WEBPACK_IMPORTED_MODULE_5__["AuthService"]])
    ], DashboardSidebarComponent);
    return DashboardSidebarComponent;
}()); //======================================================================



/***/ }),

/***/ "./src/app/modules/dashboard/dashboard-routing.module.ts":
/*!***************************************************************!*\
  !*** ./src/app/modules/dashboard/dashboard-routing.module.ts ***!
  \***************************************************************/
/*! exports provided: DashboardRoutingModule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "DashboardRoutingModule", function() { return DashboardRoutingModule; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm5/router.js");
/* harmony import */ var _layout_dashboard_layout_dashboard_layout_component__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./layout/dashboard-layout/dashboard-layout.component */ "./src/app/modules/dashboard/layout/dashboard-layout/dashboard-layout.component.ts");
/* harmony import */ var _pages_dashboard_main_dashboard_main_component__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./pages/dashboard-main/dashboard-main.component */ "./src/app/modules/dashboard/pages/dashboard-main/dashboard-main.component.ts");
/* harmony import */ var _pages_dashboard_startups_dashboard_startups_component__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./pages/dashboard-startups/dashboard-startups.component */ "./src/app/modules/dashboard/pages/dashboard-startups/dashboard-startups.component.ts");
/* harmony import */ var _pages_dashboard_settings_dashboard_settings_component__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./pages/dashboard-settings/dashboard-settings.component */ "./src/app/modules/dashboard/pages/dashboard-settings/dashboard-settings.component.ts");
/* harmony import */ var _pages_dashboard_notifications_dashboard_notifications_component__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./pages/dashboard-notifications/dashboard-notifications.component */ "./src/app/modules/dashboard/pages/dashboard-notifications/dashboard-notifications.component.ts");
/* harmony import */ var _pages_dashboard_new_startup_dashboard_new_startup_component__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ./pages/dashboard-new-startup/dashboard-new-startup.component */ "./src/app/modules/dashboard/pages/dashboard-new-startup/dashboard-new-startup.component.ts");
/* harmony import */ var _guards_jury_guard_service__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! ./guards/jury-guard.service */ "./src/app/modules/dashboard/guards/jury-guard.service.ts");










//======================================================================
var routes = [
    {
        path: "",
        component: _layout_dashboard_layout_dashboard_layout_component__WEBPACK_IMPORTED_MODULE_3__["DashboardLayoutComponent"],
        children: [
            { path: "", component: _pages_dashboard_main_dashboard_main_component__WEBPACK_IMPORTED_MODULE_4__["DashboardMainComponent"] },
            { path: "startups", component: _pages_dashboard_startups_dashboard_startups_component__WEBPACK_IMPORTED_MODULE_5__["DashboardStartupsComponent"], canActivate: [_guards_jury_guard_service__WEBPACK_IMPORTED_MODULE_9__["JuryGuard"]] },
            { path: "settings", component: _pages_dashboard_settings_dashboard_settings_component__WEBPACK_IMPORTED_MODULE_6__["DashboardSettingsComponent"] },
            { path: "notifications", component: _pages_dashboard_notifications_dashboard_notifications_component__WEBPACK_IMPORTED_MODULE_7__["DashboardNotificationsComponent"] },
            { path: "startup/:id", component: _pages_dashboard_startups_dashboard_startups_component__WEBPACK_IMPORTED_MODULE_5__["DashboardStartupsComponent"] },
            { path: "new/startup", component: _pages_dashboard_new_startup_dashboard_new_startup_component__WEBPACK_IMPORTED_MODULE_8__["DashboardNewStartupComponent"] },
            { path: "new/startup/:id", component: _pages_dashboard_new_startup_dashboard_new_startup_component__WEBPACK_IMPORTED_MODULE_8__["DashboardNewStartupComponent"] }
        ]
    }
];
//======================================================================
var DashboardRoutingModule = /** @class */ (function () {
    //======================================================================
    function DashboardRoutingModule() {
    }
    DashboardRoutingModule = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["NgModule"])({
            imports: [_angular_router__WEBPACK_IMPORTED_MODULE_2__["RouterModule"].forChild(routes)],
            exports: [_angular_router__WEBPACK_IMPORTED_MODULE_2__["RouterModule"]]
        })
        //======================================================================
    ], DashboardRoutingModule);
    return DashboardRoutingModule;
}());

//======================================================================


/***/ }),

/***/ "./src/app/modules/dashboard/dashboard.module.ts":
/*!*******************************************************!*\
  !*** ./src/app/modules/dashboard/dashboard.module.ts ***!
  \*******************************************************/
/*! exports provided: DashboardModule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "DashboardModule", function() { return DashboardModule; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _angular_common__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/common */ "./node_modules/@angular/common/fesm5/common.js");
/* harmony import */ var _layout_dashboard_layout_dashboard_layout_component__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./layout/dashboard-layout/dashboard-layout.component */ "./src/app/modules/dashboard/layout/dashboard-layout/dashboard-layout.component.ts");
/* harmony import */ var _pages_dashboard_main_dashboard_main_component__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./pages/dashboard-main/dashboard-main.component */ "./src/app/modules/dashboard/pages/dashboard-main/dashboard-main.component.ts");
/* harmony import */ var _pages_dashboard_settings_dashboard_settings_component__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./pages/dashboard-settings/dashboard-settings.component */ "./src/app/modules/dashboard/pages/dashboard-settings/dashboard-settings.component.ts");
/* harmony import */ var _pages_dashboard_notifications_dashboard_notifications_component__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./pages/dashboard-notifications/dashboard-notifications.component */ "./src/app/modules/dashboard/pages/dashboard-notifications/dashboard-notifications.component.ts");
/* harmony import */ var _pages_dashboard_startups_dashboard_startups_component__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./pages/dashboard-startups/dashboard-startups.component */ "./src/app/modules/dashboard/pages/dashboard-startups/dashboard-startups.component.ts");
/* harmony import */ var _pages_dashboard_new_startup_dashboard_new_startup_component__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ./pages/dashboard-new-startup/dashboard-new-startup.component */ "./src/app/modules/dashboard/pages/dashboard-new-startup/dashboard-new-startup.component.ts");
/* harmony import */ var _components_dashboard_header_dashboard_header_component__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! ./components/dashboard-header/dashboard-header.component */ "./src/app/modules/dashboard/components/dashboard-header/dashboard-header.component.ts");
/* harmony import */ var _components_dashboard_sidebar_dashboard_sidebar_component__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! ./components/dashboard-sidebar/dashboard-sidebar.component */ "./src/app/modules/dashboard/components/dashboard-sidebar/dashboard-sidebar.component.ts");
/* harmony import */ var _shared_shared_module__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! ../shared/shared.module */ "./src/app/modules/shared/shared.module.ts");
/* harmony import */ var _dashboard_routing_module__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! ./dashboard-routing.module */ "./src/app/modules/dashboard/dashboard-routing.module.ts");
/* harmony import */ var _pages_dashboard_settings_profile_information_profile_information_component__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! ./pages/dashboard-settings/profile-information/profile-information.component */ "./src/app/modules/dashboard/pages/dashboard-settings/profile-information/profile-information.component.ts");
/* harmony import */ var _pages_dashboard_settings_profile_information_form_profile_information_form_component__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! ./pages/dashboard-settings/profile-information-form/profile-information-form.component */ "./src/app/modules/dashboard/pages/dashboard-settings/profile-information-form/profile-information-form.component.ts");
/* harmony import */ var _pages_dashboard_settings_profile_mobile_number_form_profile_mobile_number_form_component__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! ./pages/dashboard-settings/profile-mobile-number-form/profile-mobile-number-form.component */ "./src/app/modules/dashboard/pages/dashboard-settings/profile-mobile-number-form/profile-mobile-number-form.component.ts");
/* harmony import */ var _pages_dashboard_settings_profile_email_form_profile_email_form_component__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(/*! ./pages/dashboard-settings/profile-email-form/profile-email-form.component */ "./src/app/modules/dashboard/pages/dashboard-settings/profile-email-form/profile-email-form.component.ts");
/* harmony import */ var _pages_dashboard_settings_profile_password_form_profile_password_form_component__WEBPACK_IMPORTED_MODULE_17__ = __webpack_require__(/*! ./pages/dashboard-settings/profile-password-form/profile-password-form.component */ "./src/app/modules/dashboard/pages/dashboard-settings/profile-password-form/profile-password-form.component.ts");
/* harmony import */ var _lib_components_inputs_ngx_ea_intl_tel_input_ngx_ea_intl_tel_input_module__WEBPACK_IMPORTED_MODULE_18__ = __webpack_require__(/*! ../lib/components/inputs/ngx-ea-intl-tel-input/ngx-ea-intl-tel-input.module */ "./src/app/modules/lib/components/inputs/ngx-ea-intl-tel-input/ngx-ea-intl-tel-input.module.ts");
/* harmony import */ var _pages_dashboard_startups_add_startup_card_add_startup_card_component__WEBPACK_IMPORTED_MODULE_19__ = __webpack_require__(/*! ./pages/dashboard-startups/add-startup-card/add-startup-card.component */ "./src/app/modules/dashboard/pages/dashboard-startups/add-startup-card/add-startup-card.component.ts");
/* harmony import */ var _pages_dashboard_new_startup_new_files_form_new_files_form_component__WEBPACK_IMPORTED_MODULE_20__ = __webpack_require__(/*! ./pages/dashboard-new-startup/new-files-form/new-files-form.component */ "./src/app/modules/dashboard/pages/dashboard-new-startup/new-files-form/new-files-form.component.ts");
/* harmony import */ var _pages_dashboard_new_startup_new_question_form_new_question_form_component__WEBPACK_IMPORTED_MODULE_21__ = __webpack_require__(/*! ./pages/dashboard-new-startup/new-question-form/new-question-form.component */ "./src/app/modules/dashboard/pages/dashboard-new-startup/new-question-form/new-question-form.component.ts");
/* harmony import */ var _pages_dashboard_new_startup_new_program_new_program_component__WEBPACK_IMPORTED_MODULE_22__ = __webpack_require__(/*! ./pages/dashboard-new-startup/new-program/new-program.component */ "./src/app/modules/dashboard/pages/dashboard-new-startup/new-program/new-program.component.ts");
/* harmony import */ var _pages_dashboard_new_startup_new_video_form_new_video_form_component__WEBPACK_IMPORTED_MODULE_23__ = __webpack_require__(/*! ./pages/dashboard-new-startup/new-video-form/new-video-form.component */ "./src/app/modules/dashboard/pages/dashboard-new-startup/new-video-form/new-video-form.component.ts");
/* harmony import */ var _pages_dashboard_main_dashboard_voice_giving_dashboard_voice_giving_component__WEBPACK_IMPORTED_MODULE_24__ = __webpack_require__(/*! ./pages/dashboard-main/dashboard-voice-giving/dashboard-voice-giving.component */ "./src/app/modules/dashboard/pages/dashboard-main/dashboard-voice-giving/dashboard-voice-giving.component.ts");
/* harmony import */ var _pages_dashboard_main_dashboard_jury_voice_giving_dashboard_jury_voice_giving_component__WEBPACK_IMPORTED_MODULE_25__ = __webpack_require__(/*! ./pages/dashboard-main/dashboard-jury-voice-giving/dashboard-jury-voice-giving.component */ "./src/app/modules/dashboard/pages/dashboard-main/dashboard-jury-voice-giving/dashboard-jury-voice-giving.component.ts");
/* harmony import */ var _guards_jury_guard_service__WEBPACK_IMPORTED_MODULE_26__ = __webpack_require__(/*! ./guards/jury-guard.service */ "./src/app/modules/dashboard/guards/jury-guard.service.ts");
/* harmony import */ var _services_jury_voices_local_storage_service__WEBPACK_IMPORTED_MODULE_27__ = __webpack_require__(/*! ./services/jury-voices-local-storage.service */ "./src/app/modules/dashboard/services/jury-voices-local-storage.service.ts");
/* harmony import */ var _pages_dashboard_new_startup_new_join_competition_new_join_competition_component__WEBPACK_IMPORTED_MODULE_28__ = __webpack_require__(/*! ./pages/dashboard-new-startup/new-join-competition/new-join-competition.component */ "./src/app/modules/dashboard/pages/dashboard-new-startup/new-join-competition/new-join-competition.component.ts");
/* harmony import */ var _pages_dashboard_main_step_detail_step_detail_component__WEBPACK_IMPORTED_MODULE_29__ = __webpack_require__(/*! ./pages/dashboard-main/step-detail/step-detail.component */ "./src/app/modules/dashboard/pages/dashboard-main/step-detail/step-detail.component.ts");






























//======================================================================
var DashboardModule = /** @class */ (function () {
    //======================================================================
    function DashboardModule() {
    }
    DashboardModule = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["NgModule"])({
            declarations: [
                _layout_dashboard_layout_dashboard_layout_component__WEBPACK_IMPORTED_MODULE_3__["DashboardLayoutComponent"],
                _pages_dashboard_main_dashboard_main_component__WEBPACK_IMPORTED_MODULE_4__["DashboardMainComponent"],
                _pages_dashboard_settings_dashboard_settings_component__WEBPACK_IMPORTED_MODULE_5__["DashboardSettingsComponent"],
                _pages_dashboard_notifications_dashboard_notifications_component__WEBPACK_IMPORTED_MODULE_6__["DashboardNotificationsComponent"],
                _pages_dashboard_startups_dashboard_startups_component__WEBPACK_IMPORTED_MODULE_7__["DashboardStartupsComponent"],
                _pages_dashboard_new_startup_dashboard_new_startup_component__WEBPACK_IMPORTED_MODULE_8__["DashboardNewStartupComponent"],
                _components_dashboard_header_dashboard_header_component__WEBPACK_IMPORTED_MODULE_9__["DashboardHeaderComponent"],
                _components_dashboard_sidebar_dashboard_sidebar_component__WEBPACK_IMPORTED_MODULE_10__["DashboardSidebarComponent"],
                _pages_dashboard_settings_profile_information_profile_information_component__WEBPACK_IMPORTED_MODULE_13__["ProfileInformationComponent"],
                _pages_dashboard_settings_profile_information_form_profile_information_form_component__WEBPACK_IMPORTED_MODULE_14__["ProfileInformationFormComponent"],
                _pages_dashboard_settings_profile_mobile_number_form_profile_mobile_number_form_component__WEBPACK_IMPORTED_MODULE_15__["ProfileMobileNumberFormComponent"],
                _pages_dashboard_settings_profile_email_form_profile_email_form_component__WEBPACK_IMPORTED_MODULE_16__["ProfileEmailFormComponent"],
                _pages_dashboard_settings_profile_password_form_profile_password_form_component__WEBPACK_IMPORTED_MODULE_17__["ProfilePasswordFormComponent"],
                _pages_dashboard_startups_add_startup_card_add_startup_card_component__WEBPACK_IMPORTED_MODULE_19__["AddStartupCardComponent"],
                _pages_dashboard_new_startup_new_files_form_new_files_form_component__WEBPACK_IMPORTED_MODULE_20__["NewFilesFormComponent"],
                _pages_dashboard_new_startup_new_question_form_new_question_form_component__WEBPACK_IMPORTED_MODULE_21__["NewQuestionFormComponent"],
                _pages_dashboard_new_startup_new_program_new_program_component__WEBPACK_IMPORTED_MODULE_22__["NewProgramComponent"],
                _pages_dashboard_new_startup_new_video_form_new_video_form_component__WEBPACK_IMPORTED_MODULE_23__["NewVideoFormComponent"],
                _pages_dashboard_main_dashboard_voice_giving_dashboard_voice_giving_component__WEBPACK_IMPORTED_MODULE_24__["DashboardVoiceGivingComponent"],
                _pages_dashboard_main_dashboard_jury_voice_giving_dashboard_jury_voice_giving_component__WEBPACK_IMPORTED_MODULE_25__["DashboardJuryVoiceGivingComponent"],
                _pages_dashboard_new_startup_new_join_competition_new_join_competition_component__WEBPACK_IMPORTED_MODULE_28__["NewJoinCompetitionComponent"],
                _pages_dashboard_main_step_detail_step_detail_component__WEBPACK_IMPORTED_MODULE_29__["StepDetailComponent"]
            ],
            providers: [
                _guards_jury_guard_service__WEBPACK_IMPORTED_MODULE_26__["JuryGuard"],
                _services_jury_voices_local_storage_service__WEBPACK_IMPORTED_MODULE_27__["JuryVoicesLocalStorageService"]
            ],
            imports: [
                _shared_shared_module__WEBPACK_IMPORTED_MODULE_11__["SharedModule"],
                _dashboard_routing_module__WEBPACK_IMPORTED_MODULE_12__["DashboardRoutingModule"],
                _angular_common__WEBPACK_IMPORTED_MODULE_2__["CommonModule"],
                _lib_components_inputs_ngx_ea_intl_tel_input_ngx_ea_intl_tel_input_module__WEBPACK_IMPORTED_MODULE_18__["NgxEaIntlTelInputModule"]
            ]
        })
        //======================================================================
    ], DashboardModule);
    return DashboardModule;
}());

//======================================================================


/***/ }),

/***/ "./src/app/modules/dashboard/guards/jury-guard.service.ts":
/*!****************************************************************!*\
  !*** ./src/app/modules/dashboard/guards/jury-guard.service.ts ***!
  \****************************************************************/
/*! exports provided: JuryGuard */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "JuryGuard", function() { return JuryGuard; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm5/router.js");
/* harmony import */ var _shared_services_auth_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../shared/services/auth.service */ "./src/app/modules/shared/services/auth.service.ts");




var JuryGuard = /** @class */ (function () {
    //======================================================================|||||||||||
    function JuryGuard(AUTH, ROUTER) {
        this.AUTH = AUTH;
        this.ROUTER = ROUTER;
    }
    //======================================================================|||||||||||
    JuryGuard.prototype.canActivate = function (route, state) {
        var _this = this;
        return new Promise(function (res, rej) {
            _this.AUTH.user.subscribe(function (user) {
                if (user.user_role !== 'juri') {
                    res(true);
                }
            });
        });
    };
    JuryGuard = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Injectable"])()
        //======================================================================|||||||||||
        ,
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [_shared_services_auth_service__WEBPACK_IMPORTED_MODULE_3__["AuthService"], _angular_router__WEBPACK_IMPORTED_MODULE_2__["Router"]])
    ], JuryGuard);
    return JuryGuard;
}()); //======================================================================|||||||||||



/***/ }),

/***/ "./src/app/modules/dashboard/layout/dashboard-layout/dashboard-layout.component.html":
/*!*******************************************************************************************!*\
  !*** ./src/app/modules/dashboard/layout/dashboard-layout/dashboard-layout.component.html ***!
  \*******************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<section class=\"dashboard-layout\">\n  <div>\n    <dashboard-header></dashboard-header>\n  </div>\n  <div>\n    <dashboard-sidebar></dashboard-sidebar>\n  </div>\n  <div class=\"router-holder\">\n    <div class=\"show-mobile\">\n      <div class=\"row align-items-center justify-content-between\">\n        <div class=\"col-auto left\">\n          <h3 class=\"h5 i-medium\">{{title}}</h3>\n        </div>\n        <div class=\"col-auto right\">\n          <header-auth [user]=\"user\"></header-auth>\n        </div>\n      </div>\n    </div>\n    <router-outlet></router-outlet>\n  </div>\n</section>"

/***/ }),

/***/ "./src/app/modules/dashboard/layout/dashboard-layout/dashboard-layout.component.scss":
/*!*******************************************************************************************!*\
  !*** ./src/app/modules/dashboard/layout/dashboard-layout/dashboard-layout.component.scss ***!
  \*******************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = ".dashboard-layout {\n  background-color: #EDEEF9;\n  min-height: 100vh;\n  padding-top: 32px; }\n\n.router-holder {\n  padding-left: 100px;\n  padding-top: 100px; }\n\n@media (max-width: 563px) {\n    .router-holder {\n      padding-left: 71px; } }\n\n.show-mobile {\n  display: none;\n  margin-bottom: 10px;\n  padding-left: 10px;\n  padding-right: 10px; }\n\n@media (max-width: 1066px) {\n  .show-mobile {\n    display: block; } }\n\n@media (max-width: 563px) {\n  .right {\n    -webkit-box-ordinal-group: 0;\n            order: -1;\n    margin-bottom: 10px; } }\n\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIi9Vc2Vycy9iL0RvY3VtZW50cy9mcmVlbGFuY2UvaWRlYWxpemVyci1hbmd1bGFyL3NyYy9hcHAvbW9kdWxlcy9kYXNoYm9hcmQvbGF5b3V0L2Rhc2hib2FyZC1sYXlvdXQvZGFzaGJvYXJkLWxheW91dC5jb21wb25lbnQuc2NzcyIsIi9Vc2Vycy9iL0RvY3VtZW50cy9mcmVlbGFuY2UvaWRlYWxpemVyci1hbmd1bGFyL3NyYy9hc3NldHMvc2Nzcy9hYnN0cmFjdHMvX3ZhcmlhYmxlcy5zY3NzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUVBO0VBQ0kseUJDa0JZO0VEakJaLGlCQUFpQjtFQUNqQixpQkFBaUIsRUFBQTs7QUFHckI7RUFDSSxtQkFBbUI7RUFDbkIsa0JBQWtCLEVBQUE7O0FBRWxCO0lBSko7TUFLUSxrQkFBa0IsRUFBQSxFQUV6Qjs7QUFFRDtFQUNJLGFBQWE7RUFDYixtQkFBbUI7RUFDbkIsa0JBQWtCO0VBQ2xCLG1CQUFtQixFQUFBOztBQUd2QjtFQUNJO0lBQ0ksY0FBYyxFQUFBLEVBQ2pCOztBQU1MO0VBR0k7SUFDSSw0QkFBUztZQUFULFNBQVM7SUFDVCxtQkFBbUIsRUFBQSxFQUN0QiIsImZpbGUiOiJzcmMvYXBwL21vZHVsZXMvZGFzaGJvYXJkL2xheW91dC9kYXNoYm9hcmQtbGF5b3V0L2Rhc2hib2FyZC1sYXlvdXQuY29tcG9uZW50LnNjc3MiLCJzb3VyY2VzQ29udGVudCI6WyJAaW1wb3J0ICdzcmMvYXNzZXRzL3Njc3MvYWJzdHJhY3RzL3ZhcmlhYmxlcyc7XG5cbi5kYXNoYm9hcmQtbGF5b3V0IHtcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiAkYnJhbmQwO1xuICAgIG1pbi1oZWlnaHQ6IDEwMHZoO1xuICAgIHBhZGRpbmctdG9wOiAzMnB4O1xufVxuXG4ucm91dGVyLWhvbGRlciB7XG4gICAgcGFkZGluZy1sZWZ0OiAxMDBweDtcbiAgICBwYWRkaW5nLXRvcDogMTAwcHg7XG5cbiAgICBAbWVkaWEgKG1heC13aWR0aDogNTYzcHgpIHtcbiAgICAgICAgcGFkZGluZy1sZWZ0OiA3MXB4O1xuICAgIH1cbn1cblxuLnNob3ctbW9iaWxlIHtcbiAgICBkaXNwbGF5OiBub25lO1xuICAgIG1hcmdpbi1ib3R0b206IDEwcHg7XG4gICAgcGFkZGluZy1sZWZ0OiAxMHB4O1xuICAgIHBhZGRpbmctcmlnaHQ6IDEwcHg7XG59XG5cbkBtZWRpYSAobWF4LXdpZHRoOiAxMDY2cHgpIHtcbiAgICAuc2hvdy1tb2JpbGUge1xuICAgICAgICBkaXNwbGF5OiBibG9jaztcbiAgICB9XG5cblxuXG59XG5cbkBtZWRpYSAobWF4LXdpZHRoOiA1NjNweCkge1xuICAgIC5sZWZ0IHt9XG5cbiAgICAucmlnaHQge1xuICAgICAgICBvcmRlcjogLTE7XG4gICAgICAgIG1hcmdpbi1ib3R0b206IDEwcHg7XG4gICAgfVxuXG59IiwiLy9UUkFOU0lUSU9OXG4kYnIyOjJweDtcbiRicjQ6NHB4O1xuJGJyODo4cHg7XG5cbi8vVFJBTlNJVElPTlxuJHRyYW5zaXRpb24tMjogMC4ycyBsaW5lYXI7XG5cbi8vQk9YIFNIQURPV1xuJGJveC1zaGFkb3ctMTogMCA3cHggMTZweCAwIHJnYmEoMCwgMCwgMCwgMC4wNCk7XG4kYm94LXNoYWRvdy0yOiAwIDE2cHggMTZweCAwIHJnYmEoMCwgMCwgMCwgMC4wNik7XG4kYm94LXNoYWRvdy0zOiAwIDZweCAxMnB4IDAgcmdiYSgwLCAwLCAwLCAwLjEpO1xuJGJveC1zaGFkb3ctNDogNHB4IDRweCAxM3B4IDAgcmdiYSgwLCAyOCwgNTAsIDAuNTgpO1xuJGJveC1zaGFkb3ctNTogNHB4IDRweCAxM3B4IDAgcmdiYSgwLCAyOCwgNTAsIDAuMDcpO1xuXG5cblxuLy9DT0xPUlNcbiRpbnB1dDogI0Y5RkFGRTtcbiR3aGl0ZTogI0ZGRkZGRjtcbiRibGFjazogIzAwMDAwMDtcbiRicmFuZDA6ICNFREVFRjk7XG4kYnJhbmQxOiAjQTVBQUUyO1xuJGJyYW5kMjogIzk0OTlEQztcbiRicmFuZDM6ICM4Mjg4RDY7XG4kYnJhbmQ0OiAjNzA3N0QxO1xuJGJyYW5kNTogIzVFNjZDQjtcbiRicmFuZDY6ICM0QzU1QzU7XG4kYnJhbmQ3OiAjM0I0NUMwO1xuJGdyZXk6ICNCMEI3QzM7XG4kc3VjY2VzczogIzAwQ0Y2OTtcbiR3YXJuaW5nOiAjRkZDMDAwO1xuJGRhbmdlcjogI0ZGMDQ1QjtcbiR0cmFuc3BhcmVudDogdHJhbnNwYXJlbnQ7XG4kbGluazogIzE2ODZDOTtcblxuXG4vL0ZPTlRTXG4kaV9ibGFjayA6IFwiaV9ibGFja1wiO1xuJGlfYm9sZCA6IFwiaV9ib2xkXCI7XG4kaV9leHRyYV9ib2xkIDogXCJpX2V4dHJhX2JvbGRcIjtcbiRpX2V4dHJhX2xpZ2h0IDogXCJpX2V4dHJhX2xpZ2h0XCI7XG4kaV9saWdodCA6IFwiaV9saWdodFwiO1xuJGlfbWVkaXVtIDogXCJpX21lZGl1bVwiO1xuJGlfcmVndWxhciA6IFwiaV9yZWd1bGFyXCI7XG4kaV9zZW1pX2JvbGQgOiBcImlfc2VtaV9ib2xkXCI7XG4kaV90aGluIDogXCJpX3RoaW5cIjtcblxuXG4vL0ZPTlQgU0laRVxuJGgxOjM0cHg7XG4kaDI6MjhweDtcbiRoMzoyNHB4O1xuJGg0OjIwcHg7XG4kaDU6MTZweDtcbiRwOjE0cHg7XG4kbGFiZWw6MTJweDtcbiRzbWFsbDoxMHB4O1xuXG5cbi8vQk9SREVSXG4kYm9yZGVyMzogM3B4IHNvbGlkICRicmFuZDA7Il19 */"

/***/ }),

/***/ "./src/app/modules/dashboard/layout/dashboard-layout/dashboard-layout.component.ts":
/*!*****************************************************************************************!*\
  !*** ./src/app/modules/dashboard/layout/dashboard-layout/dashboard-layout.component.ts ***!
  \*****************************************************************************************/
/*! exports provided: DashboardLayoutComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "DashboardLayoutComponent", function() { return DashboardLayoutComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var src_app_modules_shared_services_core_service__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! src/app/modules/shared/services/core.service */ "./src/app/modules/shared/services/core.service.ts");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm5/router.js");
/* harmony import */ var src_app_modules_shared_services_dashboard_service__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! src/app/modules/shared/services/dashboard.service */ "./src/app/modules/shared/services/dashboard.service.ts");
/* harmony import */ var src_app_modules_shared_services_utils_service__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! src/app/modules/shared/services/utils.service */ "./src/app/modules/shared/services/utils.service.ts");
/* harmony import */ var src_app_modules_shared_services_auth_service__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! src/app/modules/shared/services/auth.service */ "./src/app/modules/shared/services/auth.service.ts");







//======================================================================
var DashboardLayoutComponent = /** @class */ (function () {
    //======================================================================
    function DashboardLayoutComponent(CORE, router, DASHBOARD, AUTH) {
        this.CORE = CORE;
        this.router = router;
        this.DASHBOARD = DASHBOARD;
        this.AUTH = AUTH;
        this.CORE.route.next("dashboard");
        this.subsTitle();
        this.subsUser();
    }
    DashboardLayoutComponent.prototype.subsTitle = function () {
        var _this = this;
        this.subs_title = this.DASHBOARD.title.subscribe(function (title) {
            _this.title = title;
        });
    };
    DashboardLayoutComponent.prototype.subsUser = function () {
        var _this = this;
        this.subs_user = this.AUTH.user.subscribe(function (user) {
            if (!Object(src_app_modules_shared_services_utils_service__WEBPACK_IMPORTED_MODULE_5__["objectIsNull"])(user)) {
                _this.user = user;
            }
            else {
                _this.user = null;
            }
        });
    };
    DashboardLayoutComponent.prototype.ngOnInit = function () {
        var _this = this;
        this.getNotifications();
        this._routerEvents = this.router.events.subscribe(function (val) {
            if (val instanceof _angular_router__WEBPACK_IMPORTED_MODULE_3__["NavigationEnd"]) {
                _this.getNotifications();
            }
        });
    };
    DashboardLayoutComponent.prototype.ngOnDestroy = function () {
        if (this._routerEvents) {
            this._routerEvents.unsubscribe();
        }
        this.subs_title.unsubscribe();
    };
    DashboardLayoutComponent.prototype.getNotifications = function () {
        var _this = this;
        this.CORE.getNotifications().subscribe(function (data) {
            _this.CORE.notifications.next(data.body);
        });
    };
    DashboardLayoutComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
            selector: "app-dashboard-layout",
            template: __webpack_require__(/*! ./dashboard-layout.component.html */ "./src/app/modules/dashboard/layout/dashboard-layout/dashboard-layout.component.html"),
            styles: [__webpack_require__(/*! ./dashboard-layout.component.scss */ "./src/app/modules/dashboard/layout/dashboard-layout/dashboard-layout.component.scss")]
        })
        //======================================================================
        ,
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [src_app_modules_shared_services_core_service__WEBPACK_IMPORTED_MODULE_2__["CoreService"],
            _angular_router__WEBPACK_IMPORTED_MODULE_3__["Router"],
            src_app_modules_shared_services_dashboard_service__WEBPACK_IMPORTED_MODULE_4__["DashboardService"],
            src_app_modules_shared_services_auth_service__WEBPACK_IMPORTED_MODULE_6__["AuthService"]])
    ], DashboardLayoutComponent);
    return DashboardLayoutComponent;
}()); //======================================================================



/***/ }),

/***/ "./src/app/modules/dashboard/pages/dashboard-main/dashboard-jury-voice-giving/dashboard-jury-voice-giving.component.html":
/*!*******************************************************************************************************************************!*\
  !*** ./src/app/modules/dashboard/pages/dashboard-main/dashboard-jury-voice-giving/dashboard-jury-voice-giving.component.html ***!
  \*******************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "  <div class=\"wrapper-main\"\n       *ngIf=\"!pageProps.juri_voice_gived && pageProps.juri_voice_giving\">\n      <h2 class=\"i-regular h4 mb-5\"><span class=\"i-bold\">{{\"dashboard.voice-jury\" | translate}}</span></h2>\n    <div class=\"row\">\n      <div class=\"col-md-4\"\n           *ngFor=\"let item of members; let i = index\">\n        <div class=\"startup-holder pb-32px\"\n             style=\"height: 100%\">\n          <startup-card-voice [startup]=item\n                              [index]=\"i\"\n                              (voiceGive)=\"giveVoice($event)\"\n                              [jury]=\"true\">\n          </startup-card-voice>\n        </div>\n      </div>\n    </div>\n      <div class=\"row justify-content-center\"\n           *ngIf=\"voices.length === members.length\">\n        <button class=\"btn btn-success\"\n                (click)=\"finishVoice()\">{{\"dashboard.voice-end\" | translate}}</button>\n      </div>\n  </div>\n  <div class=\"wrapper-main\"\n       *ngIf=\"pageProps.juri_voice_gived\">\n    <h2 class=\"i-regular h4 mb-5\"><span class=\"i-bold\">{{\"dashboard.voice-summary\" | translate}}</span></h2>\n    <div class=\"row\">\n      <div class=\"col-md-4\"\n           *ngFor=\"let item of members; let i = index\">\n        <div class=\"startup-holder pb-32px\"\n             style=\"height: 100%\">\n          <startup-card-voice [startup]=item\n                              [index]=\"i\"\n                              [rate]=\"false\"\n                              (voiceGive)=\"giveVoice($event)\">\n          </startup-card-voice>\n        </div>\n      </div>\n    </div>\n  </div>\n"

/***/ }),

/***/ "./src/app/modules/dashboard/pages/dashboard-main/dashboard-jury-voice-giving/dashboard-jury-voice-giving.component.scss":
/*!*******************************************************************************************************************************!*\
  !*** ./src/app/modules/dashboard/pages/dashboard-main/dashboard-jury-voice-giving/dashboard-jury-voice-giving.component.scss ***!
  \*******************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = ".wrapper-main {\n  box-shadow: 4px 4px 13px 0 rgba(0, 28, 50, 0.07);\n  border-radius: 8px;\n  background-color: #FFFFFF;\n  padding: 48px;\n  padding-bottom: 64px;\n  position: relative; }\n  @media (max-width: 1250px) {\n    .wrapper-main {\n      padding: 30px; } }\n  @media (max-width: 1031px) {\n    .wrapper-main {\n      padding-left: 10px;\n      padding-right: 10px; } }\n\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIi9Vc2Vycy9iL0RvY3VtZW50cy9mcmVlbGFuY2UvaWRlYWxpemVyci1hbmd1bGFyL3NyYy9hcHAvbW9kdWxlcy9kYXNoYm9hcmQvcGFnZXMvZGFzaGJvYXJkLW1haW4vZGFzaGJvYXJkLWp1cnktdm9pY2UtZ2l2aW5nL2Rhc2hib2FyZC1qdXJ5LXZvaWNlLWdpdmluZy5jb21wb25lbnQuc2NzcyJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFBQTtFQUNFLGdEQUFnRDtFQUNoRCxrQkFBa0I7RUFDbEIseUJBQXlCO0VBQ3pCLGFBQWE7RUFDYixvQkFBb0I7RUFDcEIsa0JBQWtCLEVBQUE7RUFFbEI7SUFSRjtNQVNJLGFBQWEsRUFBQSxFQVFoQjtFQUxDO0lBWkY7TUFhSSxrQkFBa0I7TUFDbEIsbUJBQW1CLEVBQUEsRUFHdEIiLCJmaWxlIjoic3JjL2FwcC9tb2R1bGVzL2Rhc2hib2FyZC9wYWdlcy9kYXNoYm9hcmQtbWFpbi9kYXNoYm9hcmQtanVyeS12b2ljZS1naXZpbmcvZGFzaGJvYXJkLWp1cnktdm9pY2UtZ2l2aW5nLmNvbXBvbmVudC5zY3NzIiwic291cmNlc0NvbnRlbnQiOlsiLndyYXBwZXItbWFpbiB7XG4gIGJveC1zaGFkb3c6IDRweCA0cHggMTNweCAwIHJnYmEoMCwgMjgsIDUwLCAwLjA3KTtcbiAgYm9yZGVyLXJhZGl1czogOHB4O1xuICBiYWNrZ3JvdW5kLWNvbG9yOiAjRkZGRkZGO1xuICBwYWRkaW5nOiA0OHB4O1xuICBwYWRkaW5nLWJvdHRvbTogNjRweDtcbiAgcG9zaXRpb246IHJlbGF0aXZlO1xuXG4gIEBtZWRpYSAobWF4LXdpZHRoOiAxMjUwcHgpIHtcbiAgICBwYWRkaW5nOiAzMHB4O1xuICB9XG5cbiAgQG1lZGlhIChtYXgtd2lkdGg6IDEwMzFweCkge1xuICAgIHBhZGRpbmctbGVmdDogMTBweDtcbiAgICBwYWRkaW5nLXJpZ2h0OiAxMHB4O1xuICB9XG5cbn1cbiJdfQ== */"

/***/ }),

/***/ "./src/app/modules/dashboard/pages/dashboard-main/dashboard-jury-voice-giving/dashboard-jury-voice-giving.component.ts":
/*!*****************************************************************************************************************************!*\
  !*** ./src/app/modules/dashboard/pages/dashboard-main/dashboard-jury-voice-giving/dashboard-jury-voice-giving.component.ts ***!
  \*****************************************************************************************************************************/
/*! exports provided: DashboardJuryVoiceGivingComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "DashboardJuryVoiceGivingComponent", function() { return DashboardJuryVoiceGivingComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _services_jury_voices_local_storage_service__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../services/jury-voices-local-storage.service */ "./src/app/modules/dashboard/services/jury-voices-local-storage.service.ts");



// ======================================================================
var DashboardJuryVoiceGivingComponent = /** @class */ (function () {
    function DashboardJuryVoiceGivingComponent(JLS) {
        this.JLS = JLS;
        this.emitFinishVoice = new _angular_core__WEBPACK_IMPORTED_MODULE_1__["EventEmitter"]();
        this.emitGiveVoice = new _angular_core__WEBPACK_IMPORTED_MODULE_1__["EventEmitter"]();
        this.emitNextPage = new _angular_core__WEBPACK_IMPORTED_MODULE_1__["EventEmitter"]();
    }
    DashboardJuryVoiceGivingComponent.prototype.ngOnInit = function () {
    };
    DashboardJuryVoiceGivingComponent.prototype.giveVoice = function ($event) {
        this.JLS.saveVoice($event);
        this.emitGiveVoice.emit($event);
    };
    DashboardJuryVoiceGivingComponent.prototype.finishVoice = function () {
        this.emitFinishVoice.emit();
    };
    DashboardJuryVoiceGivingComponent.prototype.nextPage = function () {
        this.emitNextPage.emit();
    };
    tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Input"])(),
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:type", Object)
    ], DashboardJuryVoiceGivingComponent.prototype, "jury", void 0);
    tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Input"])(),
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:type", Object)
    ], DashboardJuryVoiceGivingComponent.prototype, "pageProps", void 0);
    tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Input"])(),
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:type", Object)
    ], DashboardJuryVoiceGivingComponent.prototype, "admin", void 0);
    tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Input"])(),
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:type", Object)
    ], DashboardJuryVoiceGivingComponent.prototype, "limit", void 0);
    tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Input"])(),
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:type", Object)
    ], DashboardJuryVoiceGivingComponent.prototype, "interval", void 0);
    tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Input"])(),
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:type", Object)
    ], DashboardJuryVoiceGivingComponent.prototype, "juryOrAdmin", void 0);
    tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Input"])(),
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:type", Object)
    ], DashboardJuryVoiceGivingComponent.prototype, "members", void 0);
    tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Input"])(),
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:type", Object)
    ], DashboardJuryVoiceGivingComponent.prototype, "voices", void 0);
    tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Output"])(),
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:type", Object)
    ], DashboardJuryVoiceGivingComponent.prototype, "emitFinishVoice", void 0);
    tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Output"])(),
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:type", Object)
    ], DashboardJuryVoiceGivingComponent.prototype, "emitGiveVoice", void 0);
    tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Output"])(),
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:type", Object)
    ], DashboardJuryVoiceGivingComponent.prototype, "emitNextPage", void 0);
    DashboardJuryVoiceGivingComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
            selector: 'app-dashboard-jury-voice-giving',
            template: __webpack_require__(/*! ./dashboard-jury-voice-giving.component.html */ "./src/app/modules/dashboard/pages/dashboard-main/dashboard-jury-voice-giving/dashboard-jury-voice-giving.component.html"),
            styles: [__webpack_require__(/*! ./dashboard-jury-voice-giving.component.scss */ "./src/app/modules/dashboard/pages/dashboard-main/dashboard-jury-voice-giving/dashboard-jury-voice-giving.component.scss")]
        }) // ======================================================================
        ,
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [_services_jury_voices_local_storage_service__WEBPACK_IMPORTED_MODULE_2__["JuryVoicesLocalStorageService"]])
    ], DashboardJuryVoiceGivingComponent);
    return DashboardJuryVoiceGivingComponent;
}()); // ======================================================================



/***/ }),

/***/ "./src/app/modules/dashboard/pages/dashboard-main/dashboard-main.component.html":
/*!**************************************************************************************!*\
  !*** ./src/app/modules/dashboard/pages/dashboard-main/dashboard-main.component.html ***!
  \**************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<div class=\"wrapper\">\n  <app-loading *ngIf=\"loading\"></app-loading>\n  <ng-container *ngIf=\"!(voteStarted) && activePlan\">\n        <div class=\"wrapper-main\">\n                <div class=\"row\">\n                  <div class=\"col-lg-6\">\n                    <div class=\"safehtml\">\n                      <div [innerHTML]=\"activePlan.action_description | safehtml\"></div>\n                    </div>\n                    <div *ngIf=\"!jury && registration\">\n                      <button (click)=\"navigate()\" class=\"btn btn-brand\">{{\"dashboard.add-startup\" | translate}}</button>\n                    </div>\n                  </div>\n                  <div class=\"col-lg-6 right-side\" *ngIf=\"activePlan.action_video && activePlan.action_video !== '#'\">\n                    <div class=\"text-right mt-2\" *ngIf=\"juryVoiceGiving || voiceGiving\">\n                            <button *ngIf=\"!jury && voiceGiving && pageProps && !pageProps.voice_gived\" class=\"btn btn-success pulse-anim d-block w-100 mb-3\" (click)=\"conditionalVoiceGiving(pageProps)\">{{\"dashboard.start-voting\" | translate}}</button>\n                            <button *ngIf=\"!jury && voiceGiving && pageProps && pageProps.voice_gived\" class=\"btn btn-success\" (click)=\"conditionalVoiceGiving(pageProps)\">{{\"dashboard.show-your-voices\" | translate}}</button>\n                            <button *ngIf=\"juryOrAdmin && juryVoiceGiving && pageProps && !pageProps.juri_voice_gived\" class=\"btn btn-success pulse-anim d-block w-100 mb-3\" (click)=\"conditionalVoiceGiving(pageProps)\">{{\"dashboard.start-voting\" | translate}}</button>\n                            <button *ngIf=\"juryOrAdmin && juryVoiceGiving && pageProps && pageProps.juri_voice_gived\" class=\"btn btn-success pulse-anim d-block w-100 mb-3\" (click)=\"conditionalVoiceGiving(pageProps)\">{{\"dashboard.show-your-voices\" | translate}}</button>\n                    </div>\n                    <section class=\"youtube-embed-player\">\n                      <div class=\"holder\">\n                        <iframe style=\"width: 100%\" height=\"315\" [src]=\"safeYoutube\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>\n                      </div>\n                    </section>\n                  </div>\n                  <div class=\"col-lg-6 right-side\" *ngIf=\"!(activePlan.action_video && activePlan.action_video !== '#')\">\n                          <div class=\"text-right mt-2\" *ngIf=\"juryVoiceGiving || voiceGiving\">\n                                  <button *ngIf=\"!jury && voiceGiving && pageProps && !pageProps.voice_gived\" class=\"btn btn-success pulse-anim w-100 d-block\" (click)=\"conditionalVoiceGiving(pageProps)\">{{\"dashboard.start-voting\" | translate}}</button>\n                                  <button *ngIf=\"!jury && voiceGiving && pageProps && pageProps.voice_gived\" class=\"btn btn-success\" (click)=\"conditionalVoiceGiving(pageProps)\">{{\"dashboard.show-your-voices\" | translate}}</button>\n                                  <button *ngIf=\"juryOrAdmin && juryVoiceGiving && pageProps && !pageProps.juri_voice_gived\" class=\"btn btn-success pulse-anim w-100 d-block\" (click)=\"conditionalVoiceGiving(pageProps)\">{{\"dashboard.start-voting\" | translate}}</button>\n                                  <button *ngIf=\"juryOrAdmin && juryVoiceGiving && pageProps && pageProps.juri_voice_gived\" class=\"btn btn-success pulse-anim w-100 d-block\" (click)=\"conditionalVoiceGiving(pageProps)\">{{\"dashboard.show-your-voices\" | translate}}</button>\n                          </div>\n                  </div>\n                </div>\n              </div>\n  </ng-container>\n  <ng-container *ngIf=\"voteStarted\">\n        <app-dashboard-voice-giving\n                *ngIf=\"members && voiceGiving && (pageProps.voice_giving || pageProps.voice_gived) && (admin || !jury)\"\n                [jury]=\"jury\"\n                [pageProps]=\"pageProps\"\n                [admin]=\"admin\"\n                [limit]=\"limit\"\n                [interval]=\"interval\"\n                [juryOrAdmin]=\"juryOrAdmin\"\n                [members]=\"members\"\n                [voices]=\"voices\"\n                (emitFinishVoice)=\"finishVoice()\"\n                (emitGiveVoice)=\"giveVoice($event)\"\n                (emitNextPage)=\"nextPage()\"\n        ></app-dashboard-voice-giving>\n        <app-dashboard-jury-voice-giving\n                *ngIf=\"members && juryVoiceGiving && (pageProps.juri_voice_giving || pageProps.juri_voice_gived) && (admin || jury)\"\n                [jury]=\"jury\"\n                [pageProps]=\"pageProps\"\n                [admin]=\"admin\"\n                [limit]=\"limit\"\n                [interval]=\"interval\"\n                [juryOrAdmin]=\"juryOrAdmin\"\n                [members]=\"members\"\n                [voices]=\"voices\"\n                (emitFinishVoice)=\"finishVoice()\"\n                (emitGiveVoice)=\"giveVoice($event)\"\n                (emitNextPage)=\"nextPage()\"\n        ></app-dashboard-jury-voice-giving>\n  </ng-container>\n</div>\n"

/***/ }),

/***/ "./src/app/modules/dashboard/pages/dashboard-main/dashboard-main.component.scss":
/*!**************************************************************************************!*\
  !*** ./src/app/modules/dashboard/pages/dashboard-main/dashboard-main.component.scss ***!
  \**************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = ".wrapper-main {\n  box-shadow: 4px 4px 13px 0 rgba(0, 28, 50, 0.07);\n  border-radius: 8px;\n  background-color: #FFFFFF;\n  padding: 48px;\n  padding-bottom: 64px;\n  position: relative; }\n  @media (max-width: 1250px) {\n    .wrapper-main {\n      padding: 30px; } }\n  @media (max-width: 1031px) {\n    .wrapper-main {\n      padding-left: 10px;\n      padding-right: 10px; } }\n  @media (max-width: 991px) {\n  .right-side {\n    margin-top: 30px; } }\n\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIi9Vc2Vycy9iL0RvY3VtZW50cy9mcmVlbGFuY2UvaWRlYWxpemVyci1hbmd1bGFyL3NyYy9hcHAvbW9kdWxlcy9kYXNoYm9hcmQvcGFnZXMvZGFzaGJvYXJkLW1haW4vZGFzaGJvYXJkLW1haW4uY29tcG9uZW50LnNjc3MiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBQUE7RUFDRSxnREFBZ0Q7RUFDaEQsa0JBQWtCO0VBQ2xCLHlCQUF5QjtFQUN6QixhQUFhO0VBQ2Isb0JBQW9CO0VBQ3BCLGtCQUFrQixFQUFBO0VBRWxCO0lBUkY7TUFTSSxhQUFhLEVBQUEsRUFRaEI7RUFMQztJQVpGO01BYUksa0JBQWtCO01BQ2xCLG1CQUFtQixFQUFBLEVBR3RCO0VBQ0Q7RUFDRTtJQUNFLGdCQUFnQixFQUFBLEVBQ2pCIiwiZmlsZSI6InNyYy9hcHAvbW9kdWxlcy9kYXNoYm9hcmQvcGFnZXMvZGFzaGJvYXJkLW1haW4vZGFzaGJvYXJkLW1haW4uY29tcG9uZW50LnNjc3MiLCJzb3VyY2VzQ29udGVudCI6WyIud3JhcHBlci1tYWluIHtcbiAgYm94LXNoYWRvdzogNHB4IDRweCAxM3B4IDAgcmdiYSgwLCAyOCwgNTAsIDAuMDcpO1xuICBib3JkZXItcmFkaXVzOiA4cHg7XG4gIGJhY2tncm91bmQtY29sb3I6ICNGRkZGRkY7XG4gIHBhZGRpbmc6IDQ4cHg7XG4gIHBhZGRpbmctYm90dG9tOiA2NHB4O1xuICBwb3NpdGlvbjogcmVsYXRpdmU7XG5cbiAgQG1lZGlhIChtYXgtd2lkdGg6IDEyNTBweCkge1xuICAgIHBhZGRpbmc6IDMwcHg7XG4gIH1cblxuICBAbWVkaWEgKG1heC13aWR0aDogMTAzMXB4KSB7XG4gICAgcGFkZGluZy1sZWZ0OiAxMHB4O1xuICAgIHBhZGRpbmctcmlnaHQ6IDEwcHg7XG4gIH1cblxufVxuQG1lZGlhIChtYXgtd2lkdGg6IDk5MXB4KSB7XG4gIC5yaWdodC1zaWRlIHtcbiAgICBtYXJnaW4tdG9wOiAzMHB4O1xuICB9XG59Il19 */"

/***/ }),

/***/ "./src/app/modules/dashboard/pages/dashboard-main/dashboard-main.component.ts":
/*!************************************************************************************!*\
  !*** ./src/app/modules/dashboard/pages/dashboard-main/dashboard-main.component.ts ***!
  \************************************************************************************/
/*! exports provided: DashboardMainComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "DashboardMainComponent", function() { return DashboardMainComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var src_app_modules_shared_services_dashboard_service__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! src/app/modules/shared/services/dashboard.service */ "./src/app/modules/shared/services/dashboard.service.ts");
/* harmony import */ var _ngx_translate_core__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @ngx-translate/core */ "./node_modules/@ngx-translate/core/fesm5/ngx-translate-core.js");
/* harmony import */ var src_app_modules_shared_services_core_service__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! src/app/modules/shared/services/core.service */ "./src/app/modules/shared/services/core.service.ts");
/* harmony import */ var src_app_modules_shared_services_notify_service__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! src/app/modules/shared/services/notify.service */ "./src/app/modules/shared/services/notify.service.ts");
/* harmony import */ var _angular_platform_browser__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! @angular/platform-browser */ "./node_modules/@angular/platform-browser/fesm5/platform-browser.js");
/* harmony import */ var _shared_services_auth_service__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ../../../shared/services/auth.service */ "./src/app/modules/shared/services/auth.service.ts");
/* harmony import */ var _services_jury_voices_local_storage_service__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ../../services/jury-voices-local-storage.service */ "./src/app/modules/dashboard/services/jury-voices-local-storage.service.ts");
/* harmony import */ var src_app_modules_shared_services_utils_service__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! src/app/modules/shared/services/utils.service */ "./src/app/modules/shared/services/utils.service.ts");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm5/router.js");











// ======================================================================
var DashboardMainComponent = /** @class */ (function () {
    // ======================================================================
    function DashboardMainComponent(DASHBOARD, _, CORE, NOTIFY, title, auth, JLS, SANITIZER, ROUTER) {
        this.DASHBOARD = DASHBOARD;
        this._ = _;
        this.CORE = CORE;
        this.NOTIFY = NOTIFY;
        this.title = title;
        this.auth = auth;
        this.JLS = JLS;
        this.SANITIZER = SANITIZER;
        this.ROUTER = ROUTER;
        this.interval = 0;
        this.loading = false;
        this.voices = [];
        this.juryVoices = {};
    }
    // ======================================================================
    DashboardMainComponent.prototype.limitType = function () {
        return typeof this.limit;
    };
    DashboardMainComponent.prototype.ngOnDestroy = function () {
        if (this.subs_competition)
            this.subs_competition.unsubscribe();
    };
    DashboardMainComponent.prototype.ngOnInit = function () {
        var _this = this;
        this.auth.user.subscribe(function (user) {
            if (user) {
                _this.jury = user.user_role === 'juri';
                _this.admin = user.user_role === 'admin';
                _this.juryOrAdmin = _this.jury || _this.admin;
                // this.jury = false;
                console.log('Jury: ', _this.jury, 'Admin: ', _this.admin, 'juryOrAdmin: ', _this.juryOrAdmin);
            }
        });
        this.subs_competition = this.CORE.competition.subscribe(function (competition) {
            if (!Object(src_app_modules_shared_services_utils_service__WEBPACK_IMPORTED_MODULE_9__["objectIsNull"])(competition)) {
                var last_en_index;
                for (var i = 0; i < competition.action_plans.length; i++) {
                    if (competition.action_plans[i].status == "1") {
                        _this.activePlan = competition.action_plans[i];
                    }
                }
                if (_this.activePlan.action_title === 'Qeydiyyat') {
                    _this.registration = true;
                }
                else if (_this.activePlan.action_title === 'Yoxlama') {
                    _this.validation = true;
                }
                else if (_this.activePlan.action_title === 'Səsvermə') {
                    _this.startVoting();
                    _this.voiceGiving = true;
                }
                else if (_this.activePlan.action_title === 'Juri səsverməsi') {
                    _this.startVoting();
                    _this.juryVoiceGiving = true;
                }
                else if (_this.activePlan.action_title === 'Final mərhələ') {
                    _this.finalStage = true;
                }
                if (_this.activePlan.action_video) {
                    var isYoutube = _this.activePlan.action_video.match(/^(https?\:\/\/)?(www\.)?(youtube\.com|youtu\.?be)\/.+$/);
                    if (isYoutube) {
                        var matches = _this.activePlan.action_video.match(/^.*(youtu\.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=)([^#\&\?]*).*/);
                        if (matches) {
                            _this.safeYoutube = _this.SANITIZER.bypassSecurityTrustResourceUrl("https://www.youtube.com/embed/" + matches[2]);
                        }
                    }
                }
            }
        });
        this.DASHBOARD.title.next(this._.instant('dashboard.maininfo'));
        this.title.setTitle("Idealizerr - " + this._.instant('dashboard.maininfo'));
    };
    DashboardMainComponent.prototype.startVoting = function () {
        var _this = this;
        this.limit = null;
        this.CORE.getVoiceProps().subscribe(function (data) {
            _this.pageProps = data.body;
            _this.CORE.getRateLimit().subscribe(function (data) {
                _this.limit = parseInt(data.body.voice_limit);
            });
        });
    };
    DashboardMainComponent.prototype.conditionalVoiceGiving = function (pageProps) {
        if (pageProps.voice_giving) {
            if (!pageProps.voice_gived) {
                this.voteStarted = true;
                this.getPageData();
            }
            else {
                this.voteStarted = true;
                this.getPageDataVoices();
            }
        }
        if (pageProps.juri_voice_giving && (this.juryOrAdmin)) {
            if (!pageProps.juri_voice_gived) {
                this.voteStarted = true;
                this.getPageDataForJury();
            }
            else {
                this.voteStarted = true;
                this.getPageDataVoices();
            }
        }
    };
    DashboardMainComponent.prototype.getPageDataVoices = function () {
        var _this = this;
        this.loading = true;
        this.CORE.getGivedVoices().subscribe(function (data) {
            _this.members = data.body;
            _this.loading = false;
        });
    };
    DashboardMainComponent.prototype.getPageData = function () {
        var _this = this;
        this.loading = true;
        this.CORE.getMembers().subscribe(function (data) {
            _this.members = data.body;
            _this.loading = false;
            _this.interval = 0;
        });
    };
    DashboardMainComponent.prototype.getPageDataForJury = function () {
        var _this = this;
        this.loading = true;
        this.CORE.getJuryMembers().subscribe(function (data) {
            _this.members = data.body;
            _this.loading = false;
            _this.interval = 0;
            var savedVoices = Object.values(_this.JLS.storage);
            savedVoices.forEach(function (sv) {
                _this.giveVoice(sv);
            });
        });
    };
    DashboardMainComponent.prototype.giveVoice = function ($event) {
        var _this = this;
        if ($event.offVoice) {
            this.members[$event.index].voiceGiven = false;
            this.limit++;
            this.interval--;
            if ($event.selectedValues) {
                this.members[$event.index].selectedValues = null;
                delete this.juryVoices[this.members[$event.index].id];
            }
            this.voices.splice(this.voices.indexOf(this.members[$event.index].id), 1);
        }
        else {
            if ((this.pageProps.juri_voice_giving && (this.juryOrAdmin)) || this.interval !== 2) {
                this.limit--;
                this.interval++;
                this.members[$event.index].voiceGiven = true;
                if ($event.selectedValues) {
                    this.members[$event.index].selectedValues = $event.selectedValues;
                    this.juryVoices[this.members[$event.index].id] =
                        $event.selectedValues;
                }
                this.voices.push(this.members[$event.index].id);
                if (this.interval === 2) {
                    setTimeout(function () {
                        if (_this.pageProps.voice_giving) {
                            window.scrollTo(0, document.body.scrollHeight);
                        }
                    }, 500);
                }
            }
            else {
                if (this.pageProps.voice_giving) {
                    window.scrollTo(0, document.body.scrollHeight);
                }
            }
        }
    };
    DashboardMainComponent.prototype.nextPage = function () {
        if (this.jury) {
        }
        this.members = null;
        this.conditionalVoiceGiving(this.pageProps);
    };
    DashboardMainComponent.prototype.navigate = function () {
        this.ROUTER.navigate(['/dashboard/new/startup']);
    };
    DashboardMainComponent.prototype.finishVoice = function () {
        var _this = this;
        if (this.pageProps.juri_voice_giving && (this.juryOrAdmin)) {
            var formData = new FormData();
            for (var _i = 0, _a = this.voices; _i < _a.length; _i++) {
                var item = _a[_i];
                if (this.juryVoices[item]) {
                    formData.append('startup_id[]', item);
                    formData.append('criteria1[]', this.juryVoices[item].criteria1);
                    formData.append('criteria2[]', this.juryVoices[item].criteria2);
                    formData.append('criteria3[]', this.juryVoices[item].criteria3);
                    formData.append('criteria4[]', this.juryVoices[item].criteria4);
                    formData.append('criteria5[]', this.juryVoices[item].criteria5);
                }
            }
            this.CORE.giveVoiceForJury(formData).subscribe(function (data) {
                _this.JLS.clearVoices();
                if (data.body.errors) {
                    _this.NOTIFY.setNotification({
                        status: 'danger',
                        text: data.body.errors,
                    });
                }
                else {
                    _this.NOTIFY.setNotification({
                        status: 'success',
                        text: 'Ses verme bitdi',
                    });
                    _this.startVoting();
                    window.scrollTo(0, 0);
                }
            });
        }
        else {
            this.CORE.finishVoting(this.voices).subscribe(function (data) {
                _this.JLS.clearVoices();
                if (data.body.errors) {
                    _this.NOTIFY.setNotification({
                        status: 'danger',
                        text: data.body.errors,
                    });
                }
                else {
                    _this.NOTIFY.setNotification({
                        status: 'success',
                        text: 'Ses verme bitdi',
                    });
                    _this.startVoting();
                    window.scrollTo(0, 0);
                }
            });
        }
    };
    DashboardMainComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
            selector: 'app-dashboard-main',
            template: __webpack_require__(/*! ./dashboard-main.component.html */ "./src/app/modules/dashboard/pages/dashboard-main/dashboard-main.component.html"),
            styles: [__webpack_require__(/*! ./dashboard-main.component.scss */ "./src/app/modules/dashboard/pages/dashboard-main/dashboard-main.component.scss")]
        }) // ======================================================================
        ,
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [src_app_modules_shared_services_dashboard_service__WEBPACK_IMPORTED_MODULE_2__["DashboardService"],
            _ngx_translate_core__WEBPACK_IMPORTED_MODULE_3__["TranslateService"],
            src_app_modules_shared_services_core_service__WEBPACK_IMPORTED_MODULE_4__["CoreService"],
            src_app_modules_shared_services_notify_service__WEBPACK_IMPORTED_MODULE_5__["NotifyService"],
            _angular_platform_browser__WEBPACK_IMPORTED_MODULE_6__["Title"],
            _shared_services_auth_service__WEBPACK_IMPORTED_MODULE_7__["AuthService"],
            _services_jury_voices_local_storage_service__WEBPACK_IMPORTED_MODULE_8__["JuryVoicesLocalStorageService"],
            _angular_platform_browser__WEBPACK_IMPORTED_MODULE_6__["DomSanitizer"],
            _angular_router__WEBPACK_IMPORTED_MODULE_10__["Router"]])
    ], DashboardMainComponent);
    return DashboardMainComponent;
}()); // ======================================================================



/***/ }),

/***/ "./src/app/modules/dashboard/pages/dashboard-main/dashboard-voice-giving/dashboard-voice-giving.component.html":
/*!*********************************************************************************************************************!*\
  !*** ./src/app/modules/dashboard/pages/dashboard-main/dashboard-voice-giving/dashboard-voice-giving.component.html ***!
  \*********************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "  <div class=\"wrapper-main\"\n       *ngIf=\"!pageProps.voice_gived && pageProps.voice_giving\">\n      <h2 class=\"i-regular h4\"><span class=\"i-bold\">{{\"dashboard.voice-limit-general\" | translate}}:</span> {{limit}}</h2>\n      <h2 class=\"i-regular h4 mb-5\"><span class=\"i-bold\">{{\"dashboard.voice-limit-per-page\" | translate}}:</span> {{2 - interval}}</h2>\n    <div class=\"row\">\n      <div class=\"col-md-4\"\n           *ngFor=\"let item of members; let i = index\">\n        <div class=\"startup-holder pb-32px\"\n             style=\"height: 100%\">\n          <startup-card-voice [startup]=item\n                              [index]=\"i\"\n                              (voiceGive)=\"giveVoice($event)\"\n                              [jury]=\"false\">\n          </startup-card-voice>\n        </div>\n      </div>\n    </div>\n      <div class=\"row justify-content-center\"\n           *ngIf=\"limit !== 0 && interval === 2\">\n        <button class=\"btn btn-success pulse-anim\"\n                (click)=\"nextPage()\">{{\"dashboard.next-page\" | translate}}</button>\n      </div>\n      <div class=\"row justify-content-center\"\n           *ngIf=\"limit === 0\">\n        <button class=\"btn btn-success\"\n                (click)=\"finishVoice()\">{{\"dashboard.voice-end\" | translate}}</button>\n      </div>\n  </div>\n  <div class=\"wrapper-main\"\n       *ngIf=\"pageProps.voice_gived\">\n    <h2 class=\"i-regular h4 mb-5\"><span class=\"i-bold\">{{\"dashboard.voice-summary\" | translate}}</span></h2>\n    <div class=\"row\">\n      <div class=\"col-md-4\"\n           *ngFor=\"let item of members; let i = index\">\n        <div class=\"startup-holder pb-32px\"\n             style=\"height: 100%\">\n          <startup-card-voice [startup]=item\n                              [index]=\"i\"\n                              [rate]=\"false\"\n                              (voiceGive)=\"giveVoice($event)\">\n          </startup-card-voice>\n        </div>\n      </div>\n    </div>\n  </div>\n"

/***/ }),

/***/ "./src/app/modules/dashboard/pages/dashboard-main/dashboard-voice-giving/dashboard-voice-giving.component.scss":
/*!*********************************************************************************************************************!*\
  !*** ./src/app/modules/dashboard/pages/dashboard-main/dashboard-voice-giving/dashboard-voice-giving.component.scss ***!
  \*********************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = ".wrapper-main {\n  box-shadow: 4px 4px 13px 0 rgba(0, 28, 50, 0.07);\n  border-radius: 8px;\n  background-color: #FFFFFF;\n  padding: 48px;\n  padding-bottom: 64px;\n  position: relative; }\n  @media (max-width: 1250px) {\n    .wrapper-main {\n      padding: 30px; } }\n  @media (max-width: 1031px) {\n    .wrapper-main {\n      padding-left: 10px;\n      padding-right: 10px; } }\n\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIi9Vc2Vycy9iL0RvY3VtZW50cy9mcmVlbGFuY2UvaWRlYWxpemVyci1hbmd1bGFyL3NyYy9hcHAvbW9kdWxlcy9kYXNoYm9hcmQvcGFnZXMvZGFzaGJvYXJkLW1haW4vZGFzaGJvYXJkLXZvaWNlLWdpdmluZy9kYXNoYm9hcmQtdm9pY2UtZ2l2aW5nLmNvbXBvbmVudC5zY3NzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBO0VBQ0UsZ0RBQWdEO0VBQ2hELGtCQUFrQjtFQUNsQix5QkFBeUI7RUFDekIsYUFBYTtFQUNiLG9CQUFvQjtFQUNwQixrQkFBa0IsRUFBQTtFQUVsQjtJQVJGO01BU0ksYUFBYSxFQUFBLEVBUWhCO0VBTEM7SUFaRjtNQWFJLGtCQUFrQjtNQUNsQixtQkFBbUIsRUFBQSxFQUd0QiIsImZpbGUiOiJzcmMvYXBwL21vZHVsZXMvZGFzaGJvYXJkL3BhZ2VzL2Rhc2hib2FyZC1tYWluL2Rhc2hib2FyZC12b2ljZS1naXZpbmcvZGFzaGJvYXJkLXZvaWNlLWdpdmluZy5jb21wb25lbnQuc2NzcyIsInNvdXJjZXNDb250ZW50IjpbIi53cmFwcGVyLW1haW4ge1xuICBib3gtc2hhZG93OiA0cHggNHB4IDEzcHggMCByZ2JhKDAsIDI4LCA1MCwgMC4wNyk7XG4gIGJvcmRlci1yYWRpdXM6IDhweDtcbiAgYmFja2dyb3VuZC1jb2xvcjogI0ZGRkZGRjtcbiAgcGFkZGluZzogNDhweDtcbiAgcGFkZGluZy1ib3R0b206IDY0cHg7XG4gIHBvc2l0aW9uOiByZWxhdGl2ZTtcblxuICBAbWVkaWEgKG1heC13aWR0aDogMTI1MHB4KSB7XG4gICAgcGFkZGluZzogMzBweDtcbiAgfVxuXG4gIEBtZWRpYSAobWF4LXdpZHRoOiAxMDMxcHgpIHtcbiAgICBwYWRkaW5nLWxlZnQ6IDEwcHg7XG4gICAgcGFkZGluZy1yaWdodDogMTBweDtcbiAgfVxuXG59XG4iXX0= */"

/***/ }),

/***/ "./src/app/modules/dashboard/pages/dashboard-main/dashboard-voice-giving/dashboard-voice-giving.component.ts":
/*!*******************************************************************************************************************!*\
  !*** ./src/app/modules/dashboard/pages/dashboard-main/dashboard-voice-giving/dashboard-voice-giving.component.ts ***!
  \*******************************************************************************************************************/
/*! exports provided: DashboardVoiceGivingComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "DashboardVoiceGivingComponent", function() { return DashboardVoiceGivingComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");


// ======================================================================
var DashboardVoiceGivingComponent = /** @class */ (function () {
    function DashboardVoiceGivingComponent() {
        this.emitFinishVoice = new _angular_core__WEBPACK_IMPORTED_MODULE_1__["EventEmitter"]();
        this.emitGiveVoice = new _angular_core__WEBPACK_IMPORTED_MODULE_1__["EventEmitter"]();
        this.emitNextPage = new _angular_core__WEBPACK_IMPORTED_MODULE_1__["EventEmitter"]();
    }
    DashboardVoiceGivingComponent.prototype.ngOnInit = function () {
    };
    DashboardVoiceGivingComponent.prototype.giveVoice = function ($event) {
        this.emitGiveVoice.emit($event);
    };
    DashboardVoiceGivingComponent.prototype.finishVoice = function () {
        this.emitFinishVoice.emit();
    };
    DashboardVoiceGivingComponent.prototype.nextPage = function () {
        this.emitNextPage.emit();
    };
    tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Input"])(),
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:type", Object)
    ], DashboardVoiceGivingComponent.prototype, "jury", void 0);
    tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Input"])(),
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:type", Object)
    ], DashboardVoiceGivingComponent.prototype, "pageProps", void 0);
    tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Input"])(),
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:type", Object)
    ], DashboardVoiceGivingComponent.prototype, "admin", void 0);
    tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Input"])(),
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:type", Object)
    ], DashboardVoiceGivingComponent.prototype, "limit", void 0);
    tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Input"])(),
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:type", Object)
    ], DashboardVoiceGivingComponent.prototype, "interval", void 0);
    tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Input"])(),
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:type", Object)
    ], DashboardVoiceGivingComponent.prototype, "juryOrAdmin", void 0);
    tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Input"])(),
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:type", Object)
    ], DashboardVoiceGivingComponent.prototype, "members", void 0);
    tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Input"])(),
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:type", Object)
    ], DashboardVoiceGivingComponent.prototype, "voices", void 0);
    tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Output"])(),
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:type", Object)
    ], DashboardVoiceGivingComponent.prototype, "emitFinishVoice", void 0);
    tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Output"])(),
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:type", Object)
    ], DashboardVoiceGivingComponent.prototype, "emitGiveVoice", void 0);
    tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Output"])(),
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:type", Object)
    ], DashboardVoiceGivingComponent.prototype, "emitNextPage", void 0);
    DashboardVoiceGivingComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
            selector: 'app-dashboard-voice-giving',
            template: __webpack_require__(/*! ./dashboard-voice-giving.component.html */ "./src/app/modules/dashboard/pages/dashboard-main/dashboard-voice-giving/dashboard-voice-giving.component.html"),
            styles: [__webpack_require__(/*! ./dashboard-voice-giving.component.scss */ "./src/app/modules/dashboard/pages/dashboard-main/dashboard-voice-giving/dashboard-voice-giving.component.scss")]
        }) // ======================================================================
        ,
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [])
    ], DashboardVoiceGivingComponent);
    return DashboardVoiceGivingComponent;
}()); // ======================================================================



/***/ }),

/***/ "./src/app/modules/dashboard/pages/dashboard-main/step-detail/step-detail.component.html":
/*!***********************************************************************************************!*\
  !*** ./src/app/modules/dashboard/pages/dashboard-main/step-detail/step-detail.component.html ***!
  \***********************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<div class=\"wrapper-main\">\n  <div class=\"row\">\n    <div class=\"col-lg-6\">\n      <div class=\"safehtml\">\n        <div [innerHTML]=\"detail.action_description | safehtml\"></div>\n      </div>\n    </div>\n    <div class=\"col-lg-6\" *ngIf=\"detail.action_video && detail.action_video !== '#'\">\n      <section class=\"youtube-embed-player\">\n        <div class=\"holder\">\n          <iframe style=\"width: 100%\" height=\"315\" [src]=\"safeYoutube\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>\n        </div>\n      </section>\n    </div>\n    <div class=\"col-lg-6\" *ngIf=\"!(detail.action_video && detail.action_video !== '#')\">\n      <button>Click</button>\n    </div>\n  </div>\n</div>"

/***/ }),

/***/ "./src/app/modules/dashboard/pages/dashboard-main/step-detail/step-detail.component.scss":
/*!***********************************************************************************************!*\
  !*** ./src/app/modules/dashboard/pages/dashboard-main/step-detail/step-detail.component.scss ***!
  \***********************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = ".wrapper-main {\n  box-shadow: 4px 4px 13px 0 rgba(0, 28, 50, 0.07);\n  border-radius: 8px;\n  background-color: #FFFFFF;\n  padding: 48px;\n  padding-bottom: 64px;\n  position: relative; }\n  @media (max-width: 1250px) {\n    .wrapper-main {\n      padding: 30px; } }\n  @media (max-width: 1031px) {\n    .wrapper-main {\n      padding-left: 10px;\n      padding-right: 10px; } }\n\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIi9Vc2Vycy9iL0RvY3VtZW50cy9mcmVlbGFuY2UvaWRlYWxpemVyci1hbmd1bGFyL3NyYy9hcHAvbW9kdWxlcy9kYXNoYm9hcmQvcGFnZXMvZGFzaGJvYXJkLW1haW4vc3RlcC1kZXRhaWwvc3RlcC1kZXRhaWwuY29tcG9uZW50LnNjc3MiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBQUE7RUFDRSxnREFBZ0Q7RUFDaEQsa0JBQWtCO0VBQ2xCLHlCQUF5QjtFQUN6QixhQUFhO0VBQ2Isb0JBQW9CO0VBQ3BCLGtCQUFrQixFQUFBO0VBRWxCO0lBUkY7TUFTSSxhQUFhLEVBQUEsRUFRaEI7RUFMQztJQVpGO01BYUksa0JBQWtCO01BQ2xCLG1CQUFtQixFQUFBLEVBR3RCIiwiZmlsZSI6InNyYy9hcHAvbW9kdWxlcy9kYXNoYm9hcmQvcGFnZXMvZGFzaGJvYXJkLW1haW4vc3RlcC1kZXRhaWwvc3RlcC1kZXRhaWwuY29tcG9uZW50LnNjc3MiLCJzb3VyY2VzQ29udGVudCI6WyIud3JhcHBlci1tYWluIHtcbiAgYm94LXNoYWRvdzogNHB4IDRweCAxM3B4IDAgcmdiYSgwLCAyOCwgNTAsIDAuMDcpO1xuICBib3JkZXItcmFkaXVzOiA4cHg7XG4gIGJhY2tncm91bmQtY29sb3I6ICNGRkZGRkY7XG4gIHBhZGRpbmc6IDQ4cHg7XG4gIHBhZGRpbmctYm90dG9tOiA2NHB4O1xuICBwb3NpdGlvbjogcmVsYXRpdmU7XG5cbiAgQG1lZGlhIChtYXgtd2lkdGg6IDEyNTBweCkge1xuICAgIHBhZGRpbmc6IDMwcHg7XG4gIH1cblxuICBAbWVkaWEgKG1heC13aWR0aDogMTAzMXB4KSB7XG4gICAgcGFkZGluZy1sZWZ0OiAxMHB4O1xuICAgIHBhZGRpbmctcmlnaHQ6IDEwcHg7XG4gIH1cblxufVxuIl19 */"

/***/ }),

/***/ "./src/app/modules/dashboard/pages/dashboard-main/step-detail/step-detail.component.ts":
/*!*********************************************************************************************!*\
  !*** ./src/app/modules/dashboard/pages/dashboard-main/step-detail/step-detail.component.ts ***!
  \*********************************************************************************************/
/*! exports provided: StepDetailComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "StepDetailComponent", function() { return StepDetailComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _angular_platform_browser__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/platform-browser */ "./node_modules/@angular/platform-browser/fesm5/platform-browser.js");



// ======================================================================
var StepDetailComponent = /** @class */ (function () {
    function StepDetailComponent(SANITIZER) {
        this.SANITIZER = SANITIZER;
    }
    StepDetailComponent.prototype.ngOnInit = function () {
        if (this.detail.action_video) {
            var isYoutube = this.detail.action_video.match(/^(https?\:\/\/)?(www\.)?(youtube\.com|youtu\.?be)\/.+$/);
            if (isYoutube) {
                var matches = this.detail.action_video.match(/^.*(youtu\.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=)([^#\&\?]*).*/);
                if (matches) {
                    this.safeYoutube = this.SANITIZER.bypassSecurityTrustResourceUrl("https://www.youtube.com/embed/" + matches[2]);
                }
            }
        }
    };
    tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Input"])(),
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:type", Object)
    ], StepDetailComponent.prototype, "detail", void 0);
    StepDetailComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
            selector: 'app-step-detail',
            template: __webpack_require__(/*! ./step-detail.component.html */ "./src/app/modules/dashboard/pages/dashboard-main/step-detail/step-detail.component.html"),
            styles: [__webpack_require__(/*! ./step-detail.component.scss */ "./src/app/modules/dashboard/pages/dashboard-main/step-detail/step-detail.component.scss")]
        }) // ======================================================================
        ,
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [_angular_platform_browser__WEBPACK_IMPORTED_MODULE_2__["DomSanitizer"]])
    ], StepDetailComponent);
    return StepDetailComponent;
}()); // ======================================================================



/***/ }),

/***/ "./src/app/modules/dashboard/pages/dashboard-new-startup/dashboard-new-startup.component.html":
/*!****************************************************************************************************!*\
  !*** ./src/app/modules/dashboard/pages/dashboard-new-startup/dashboard-new-startup.component.html ***!
  \****************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<section>\n    <div class=\"wrapper\">\n        <div class=\"row\">\n            <div class=\"section-names-container\">\n                <div class=\"section-names\">\n                    <a (click)=\"changeSection('form', !sections.form.active && sections.new)\"\n                       [ngClass]=\"{\n                           'active': sections.form.active,\n                           'disabled': !sections.form.active && sections.new\n                       }\">{{\"global.signup\" | translate}}</a>\n                    <a (click)=\"changeSection('video', !sections.video.active && sections.new)\"\n                       [ngClass]=\"{\n                           'active': sections.video.active,\n                           'disabled': !sections.video.active && sections.new,\n                           'menu-pulse': !sections.new && !accepted\n                       }\">{{\"dashboard.video\" | translate}}</a>\n                    <a (click)=\"changeSection('files', !sections.files.active && sections.new)\"\n                       [ngClass]=\"{\n                           'active': sections.files.active,\n                           'disabled': !sections.files.active && sections.new\n                       }\">{{\"dashboard.files\" | translate}}</a>\n                    <a class=\"success-link\" (click)=\"changeSection('program', !sections.program.active && sections.new)\"\n                       [ngClass]=\"{\n                           'active': sections.program.active,\n                           'disabled': !sections.program.active && sections.new,\n                           'menu-pulse': !sections.new\n                       }\">{{\"dashboard.programs\" | translate}}</a>\n                       <a (click)=\"changeSection('confirmation', !sections.confirmation.active && sections.new)\"\n                       *ngIf=\"canjoincompetition\"\n                       class=\"danger-link\"\n                          [ngClass]=\"{\n                              'active': sections.confirmation.active,\n                              'disabled': (!sections.confirmation.active && sections.new) || (startupDetail && startupDetail.startup.joined),\n                              'menu-pulse': !sections.new && !(startupDetail && startupDetail.startup.joined)\n                          }\">{{\"dashboard.join-competition\" | translate}}</a>\n                </div>\n            </div>\n            <div class=\"col-md-6 col-12\">\n                <div [ngClass]=\"{'display-none': !sections.form.active}\">\n                    <ng-container *ngIf=\"sections.new && !startupDetail\">\n                        <new-question-form (startupNameChange)=\"startupNameChange($event)\"\n                                           [new]=\"true\"></new-question-form>\n                    </ng-container>\n                    <ng-container *ngIf=\"sections.new && startupDetail\">\n                        <new-question-form (startupNameChange)=\"startupNameChange($event)\"\n                                            [detail]=\"startupDetail\"\n                                           [new]=\"true\"></new-question-form>\n                    </ng-container>\n                    <ng-container *ngIf=\"!sections.new && startupDetail\">\n                        <new-question-form (startupNameChange)=\"startupNameChange($event)\"\n                                           [new]=\"sections.new\"\n                                           [detail]=\"startupDetail\"></new-question-form>\n                    </ng-container>\n                </div>\n                <ng-container *ngIf=\"startupDetail\">\n                    <div [ngClass]=\"{'display-none': !sections.video.active}\">\n                        <app-new-video-form [startupId]=\"startupDetail.startup.id\"\n                                            [detail]=\"startupDetail\">\n                        </app-new-video-form>\n                    </div>\n                    <div [ngClass]=\"{'display-none': !sections.files.active}\">\n                        <app-new-files-form [startupId]=\"startupDetail.startup.id\"\n                                            [detail]=\"startupDetail\"></app-new-files-form>\n                    </div>\n                    <div [ngClass]=\"{'display-none': !sections.program.active}\">\n                        <app-new-program [startupId]=\"startupDetail.startup.id\"></app-new-program>\n                    </div>\n                    <div [ngClass]=\"{'display-none': !sections.confirmation.active}\">\n                        <new-join-competition (joined)=\"joinedCompetition($event)\" [detail]=\"startupDetail.startup\"></new-join-competition>\n                    </div>\n                </ng-container>\n            </div>\n            <div class=\"col-md-4 col-12 force-order\">\n                <div class=\"preview\"\n                     *ngIf=\"sections.new\">\n                    <startup-card-form *ngIf=\"startup_show\"\n                                       [class]=\"'bg-white'\"\n                                       [new]=\"sections.new\"\n                                       [startup]=startup_show></startup-card-form>\n                </div>\n                <div class=\"preview\"\n                     *ngIf=\"!sections.new && startupDetail\">\n                    <startup-card-form *ngIf=\"startup_show\"\n                                       [class]=\"'bg-white'\"\n                                       [new]=\"sections.new\"\n                                       [detail]=\"startupDetail.startup\"\n                                       [startup]=startup_show></startup-card-form>\n                </div>\n            </div>\n        </div>\n    </div>\n</section>"

/***/ }),

/***/ "./src/app/modules/dashboard/pages/dashboard-new-startup/dashboard-new-startup.component.scss":
/*!****************************************************************************************************!*\
  !*** ./src/app/modules/dashboard/pages/dashboard-new-startup/dashboard-new-startup.component.scss ***!
  \****************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "section {\n  padding-bottom: 40px; }\n\n.section-names-container {\n  width: 130px; }\n\n@media (max-width: 768px) {\n    .section-names-container {\n      width: 100%; } }\n\n.section-names {\n  position: fixed;\n  width: 130px; }\n\n@media (max-width: 768px) {\n    .section-names {\n      position: static;\n      width: 100%;\n      padding: 0 15px; } }\n\n.section-names:before {\n    content: '';\n    width: 1px;\n    height: 1px;\n    display: inline-block; }\n\n.section-names a {\n    line-height: 50px;\n    border-radius: 8px;\n    width: 100%;\n    text-align: center;\n    font-family: \"i_medium\";\n    color: #000000;\n    background-color: #FFFFFF;\n    margin-bottom: 8px;\n    -webkit-transition: 0.2s linear;\n    transition: 0.2s linear;\n    font-size: 14px; }\n\n.section-names a.active {\n      background-color: #3B45C0;\n      color: #FFFFFF; }\n\n.section-names a.disabled {\n      color: gray;\n      background: #F9FAFE; }\n\n.section-names a:hover {\n      box-shadow: 4px 4px 13px 0 rgba(0, 28, 50, 0.07); }\n\n.menu-pulse {\n  box-shadow: 0 0 0 0 rgba(59, 69, 192, 0.8);\n  -webkit-animation: pulse 2s infinite;\n          animation: pulse 2s infinite; }\n\n.danger-link {\n  background-color: #FF045B !important;\n  color: #fff !important; }\n\n.danger-link.active {\n    background-color: #d00048 !important; }\n\n.danger-link.disabled {\n    background-color: #F9FAFE !important;\n    color: gray !important; }\n\n.success-link {\n  background-color: #00CF69 !important;\n  color: #fff !important; }\n\n.success-link.active {\n    background-color: #009c4f !important; }\n\n.success-link.disabled {\n    background-color: #F9FAFE !important;\n    color: gray !important; }\n\n@media (max-width: 768px) {\n  .force-order {\n    -webkit-box-ordinal-group: 0;\n            order: -1; } }\n\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIi9Vc2Vycy9iL0RvY3VtZW50cy9mcmVlbGFuY2UvaWRlYWxpemVyci1hbmd1bGFyL3NyYy9hcHAvbW9kdWxlcy9kYXNoYm9hcmQvcGFnZXMvZGFzaGJvYXJkLW5ldy1zdGFydHVwL2Rhc2hib2FyZC1uZXctc3RhcnR1cC5jb21wb25lbnQuc2NzcyIsIi9Vc2Vycy9iL0RvY3VtZW50cy9mcmVlbGFuY2UvaWRlYWxpemVyci1hbmd1bGFyL3NyYy9hc3NldHMvc2Nzcy9hYnN0cmFjdHMvX3ZhcmlhYmxlcy5zY3NzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUVBO0VBQ0ksb0JBQW9CLEVBQUE7O0FBR3hCO0VBQ0ksWUFBWSxFQUFBOztBQUVaO0lBSEo7TUFJUSxXQUFXLEVBQUEsRUFFbEI7O0FBRUQ7RUFDSSxlQUFlO0VBQ2YsWUFBWSxFQUFBOztBQUVaO0lBSko7TUFLUSxnQkFBZ0I7TUFDaEIsV0FBVztNQUNYLGVBQWUsRUFBQSxFQW9DdEI7O0FBM0NEO0lBV1EsV0FBVztJQUNYLFVBQVU7SUFDVixXQUFXO0lBQ1gscUJBQXFCLEVBQUE7O0FBZDdCO0lBa0JRLGlCQUFpQjtJQUNqQixrQkM5QkE7SUQrQkEsV0FBVztJQUNYLGtCQUFrQjtJQUNsQix1QkNPYztJRE5kLGNDakJPO0lEa0JQLHlCQ25CTztJRG9CUCxrQkFBa0I7SUFDbEIsK0JDbENrQjtJRGtDbEIsdUJDbENrQjtJRG1DbEIsZUFBZSxFQUFBOztBQTNCdkI7TUE4QlkseUJDaEJJO01EaUJKLGNDMUJHLEVBQUE7O0FETGY7TUFtQ1ksV0FBVztNQUNYLG1CQUFtQixFQUFBOztBQXBDL0I7TUF3Q1ksZ0RDekN1QyxFQUFBOztBRDhDbkQ7RUFDSSwwQ0FBMEM7RUFDMUMsb0NBQTRCO1VBQTVCLDRCQUE0QixFQUFBOztBQUdoQztFQUNJLG9DQUFvQztFQUNwQyxzQkFBc0IsRUFBQTs7QUFGMUI7SUFJUSxvQ0FBaUQsRUFBQTs7QUFKekQ7SUFPUSxvQ0FBb0M7SUFDcEMsc0JBQXNCLEVBQUE7O0FBRzlCO0VBQ0ksb0NBQXFDO0VBQ3JDLHNCQUFzQixFQUFBOztBQUYxQjtJQUlRLG9DQUFrRCxFQUFBOztBQUoxRDtJQU9RLG9DQUFvQztJQUNwQyxzQkFBc0IsRUFBQTs7QUFJMUI7RUFESjtJQUVRLDRCQUFTO1lBQVQsU0FBUyxFQUFBLEVBRWhCIiwiZmlsZSI6InNyYy9hcHAvbW9kdWxlcy9kYXNoYm9hcmQvcGFnZXMvZGFzaGJvYXJkLW5ldy1zdGFydHVwL2Rhc2hib2FyZC1uZXctc3RhcnR1cC5jb21wb25lbnQuc2NzcyIsInNvdXJjZXNDb250ZW50IjpbIkBpbXBvcnQgJ3NyYy9hc3NldHMvc2Nzcy9hYnN0cmFjdHMvdmFyaWFibGVzJztcblxuc2VjdGlvbiB7XG4gICAgcGFkZGluZy1ib3R0b206IDQwcHg7XG59XG5cbi5zZWN0aW9uLW5hbWVzLWNvbnRhaW5lciB7XG4gICAgd2lkdGg6IDEzMHB4O1xuXG4gICAgQG1lZGlhIChtYXgtd2lkdGg6IDc2OHB4KSB7XG4gICAgICAgIHdpZHRoOiAxMDAlO1xuICAgIH1cbn1cblxuLnNlY3Rpb24tbmFtZXMge1xuICAgIHBvc2l0aW9uOiBmaXhlZDtcbiAgICB3aWR0aDogMTMwcHg7XG5cbiAgICBAbWVkaWEgKG1heC13aWR0aDogNzY4cHgpIHtcbiAgICAgICAgcG9zaXRpb246IHN0YXRpYztcbiAgICAgICAgd2lkdGg6IDEwMCU7XG4gICAgICAgIHBhZGRpbmc6IDAgMTVweDtcbiAgICB9XG5cbiAgICAmOmJlZm9yZSB7XG4gICAgICAgIGNvbnRlbnQ6ICcnO1xuICAgICAgICB3aWR0aDogMXB4O1xuICAgICAgICBoZWlnaHQ6IDFweDtcbiAgICAgICAgZGlzcGxheTogaW5saW5lLWJsb2NrO1xuICAgIH1cblxuICAgIGEge1xuICAgICAgICBsaW5lLWhlaWdodDogNTBweDtcbiAgICAgICAgYm9yZGVyLXJhZGl1czogJGJyODtcbiAgICAgICAgd2lkdGg6IDEwMCU7XG4gICAgICAgIHRleHQtYWxpZ246IGNlbnRlcjtcbiAgICAgICAgZm9udC1mYW1pbHk6ICRpX21lZGl1bTtcbiAgICAgICAgY29sb3I6ICRibGFjaztcbiAgICAgICAgYmFja2dyb3VuZC1jb2xvcjogJHdoaXRlO1xuICAgICAgICBtYXJnaW4tYm90dG9tOiA4cHg7XG4gICAgICAgIHRyYW5zaXRpb246ICR0cmFuc2l0aW9uLTI7XG4gICAgICAgIGZvbnQtc2l6ZTogMTRweDtcblxuICAgICAgICAmLmFjdGl2ZSB7XG4gICAgICAgICAgICBiYWNrZ3JvdW5kLWNvbG9yOiAkYnJhbmQ3O1xuICAgICAgICAgICAgY29sb3I6ICR3aGl0ZTtcbiAgICAgICAgfVxuXG4gICAgICAgICYuZGlzYWJsZWQge1xuICAgICAgICAgICAgY29sb3I6IGdyYXk7XG4gICAgICAgICAgICBiYWNrZ3JvdW5kOiAjRjlGQUZFO1xuICAgICAgICB9XG5cbiAgICAgICAgJjpob3ZlciB7XG4gICAgICAgICAgICBib3gtc2hhZG93OiAkYm94LXNoYWRvdy01O1xuICAgICAgICB9XG4gICAgfVxufVxuXG4ubWVudS1wdWxzZSB7XG4gICAgYm94LXNoYWRvdzogMCAwIDAgMCByZ2JhKDU5LCA2OSwgMTkyLCAwLjgpO1xuICAgIGFuaW1hdGlvbjogcHVsc2UgMnMgaW5maW5pdGU7XG59XG5cbi5kYW5nZXItbGluayB7XG4gICAgYmFja2dyb3VuZC1jb2xvcjogJGRhbmdlciAhaW1wb3J0YW50O1xuICAgIGNvbG9yOiAjZmZmICFpbXBvcnRhbnQ7XG4gICAgJi5hY3RpdmUge1xuICAgICAgICBiYWNrZ3JvdW5kLWNvbG9yOiBkYXJrZW4oJGRhbmdlciwgMTAlKSAhaW1wb3J0YW50O1xuICAgIH1cbiAgICAmLmRpc2FibGVkIHtcbiAgICAgICAgYmFja2dyb3VuZC1jb2xvcjogI0Y5RkFGRSAhaW1wb3J0YW50O1xuICAgICAgICBjb2xvcjogZ3JheSAhaW1wb3J0YW50O1xuICAgIH1cbn1cbi5zdWNjZXNzLWxpbmsge1xuICAgIGJhY2tncm91bmQtY29sb3I6ICRzdWNjZXNzICFpbXBvcnRhbnQ7XG4gICAgY29sb3I6ICNmZmYgIWltcG9ydGFudDtcbiAgICAmLmFjdGl2ZSB7XG4gICAgICAgIGJhY2tncm91bmQtY29sb3I6IGRhcmtlbigkc3VjY2VzcywgMTAlKSAhaW1wb3J0YW50O1xuICAgIH1cbiAgICAmLmRpc2FibGVkIHtcbiAgICAgICAgYmFja2dyb3VuZC1jb2xvcjogI0Y5RkFGRSAhaW1wb3J0YW50O1xuICAgICAgICBjb2xvcjogZ3JheSAhaW1wb3J0YW50O1xuICAgIH1cbn1cbi5mb3JjZS1vcmRlciB7XG4gICAgQG1lZGlhIChtYXgtd2lkdGg6IDc2OHB4KSB7XG4gICAgICAgIG9yZGVyOiAtMTtcbiAgICB9XG59IiwiLy9UUkFOU0lUSU9OXG4kYnIyOjJweDtcbiRicjQ6NHB4O1xuJGJyODo4cHg7XG5cbi8vVFJBTlNJVElPTlxuJHRyYW5zaXRpb24tMjogMC4ycyBsaW5lYXI7XG5cbi8vQk9YIFNIQURPV1xuJGJveC1zaGFkb3ctMTogMCA3cHggMTZweCAwIHJnYmEoMCwgMCwgMCwgMC4wNCk7XG4kYm94LXNoYWRvdy0yOiAwIDE2cHggMTZweCAwIHJnYmEoMCwgMCwgMCwgMC4wNik7XG4kYm94LXNoYWRvdy0zOiAwIDZweCAxMnB4IDAgcmdiYSgwLCAwLCAwLCAwLjEpO1xuJGJveC1zaGFkb3ctNDogNHB4IDRweCAxM3B4IDAgcmdiYSgwLCAyOCwgNTAsIDAuNTgpO1xuJGJveC1zaGFkb3ctNTogNHB4IDRweCAxM3B4IDAgcmdiYSgwLCAyOCwgNTAsIDAuMDcpO1xuXG5cblxuLy9DT0xPUlNcbiRpbnB1dDogI0Y5RkFGRTtcbiR3aGl0ZTogI0ZGRkZGRjtcbiRibGFjazogIzAwMDAwMDtcbiRicmFuZDA6ICNFREVFRjk7XG4kYnJhbmQxOiAjQTVBQUUyO1xuJGJyYW5kMjogIzk0OTlEQztcbiRicmFuZDM6ICM4Mjg4RDY7XG4kYnJhbmQ0OiAjNzA3N0QxO1xuJGJyYW5kNTogIzVFNjZDQjtcbiRicmFuZDY6ICM0QzU1QzU7XG4kYnJhbmQ3OiAjM0I0NUMwO1xuJGdyZXk6ICNCMEI3QzM7XG4kc3VjY2VzczogIzAwQ0Y2OTtcbiR3YXJuaW5nOiAjRkZDMDAwO1xuJGRhbmdlcjogI0ZGMDQ1QjtcbiR0cmFuc3BhcmVudDogdHJhbnNwYXJlbnQ7XG4kbGluazogIzE2ODZDOTtcblxuXG4vL0ZPTlRTXG4kaV9ibGFjayA6IFwiaV9ibGFja1wiO1xuJGlfYm9sZCA6IFwiaV9ib2xkXCI7XG4kaV9leHRyYV9ib2xkIDogXCJpX2V4dHJhX2JvbGRcIjtcbiRpX2V4dHJhX2xpZ2h0IDogXCJpX2V4dHJhX2xpZ2h0XCI7XG4kaV9saWdodCA6IFwiaV9saWdodFwiO1xuJGlfbWVkaXVtIDogXCJpX21lZGl1bVwiO1xuJGlfcmVndWxhciA6IFwiaV9yZWd1bGFyXCI7XG4kaV9zZW1pX2JvbGQgOiBcImlfc2VtaV9ib2xkXCI7XG4kaV90aGluIDogXCJpX3RoaW5cIjtcblxuXG4vL0ZPTlQgU0laRVxuJGgxOjM0cHg7XG4kaDI6MjhweDtcbiRoMzoyNHB4O1xuJGg0OjIwcHg7XG4kaDU6MTZweDtcbiRwOjE0cHg7XG4kbGFiZWw6MTJweDtcbiRzbWFsbDoxMHB4O1xuXG5cbi8vQk9SREVSXG4kYm9yZGVyMzogM3B4IHNvbGlkICRicmFuZDA7Il19 */"

/***/ }),

/***/ "./src/app/modules/dashboard/pages/dashboard-new-startup/dashboard-new-startup.component.ts":
/*!**************************************************************************************************!*\
  !*** ./src/app/modules/dashboard/pages/dashboard-new-startup/dashboard-new-startup.component.ts ***!
  \**************************************************************************************************/
/*! exports provided: DashboardNewStartupComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "DashboardNewStartupComponent", function() { return DashboardNewStartupComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var src_app_modules_shared_services_dashboard_service__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! src/app/modules/shared/services/dashboard.service */ "./src/app/modules/shared/services/dashboard.service.ts");
/* harmony import */ var src_app_modules_shared_services_notify_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! src/app/modules/shared/services/notify.service */ "./src/app/modules/shared/services/notify.service.ts");
/* harmony import */ var src_app_modules_shared_services_core_service__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! src/app/modules/shared/services/core.service */ "./src/app/modules/shared/services/core.service.ts");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm5/router.js");
/* harmony import */ var _ngx_translate_core__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! @ngx-translate/core */ "./node_modules/@ngx-translate/core/fesm5/ngx-translate-core.js");
/* harmony import */ var _angular_platform_browser__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! @angular/platform-browser */ "./node_modules/@angular/platform-browser/fesm5/platform-browser.js");








//======================================================================
var DashboardNewStartupComponent = /** @class */ (function () {
    //======================================================================
    function DashboardNewStartupComponent(DASHBOARD, NOTIFY, CORE, ROUTER, _, title) {
        this.DASHBOARD = DASHBOARD;
        this.NOTIFY = NOTIFY;
        this.CORE = CORE;
        this.ROUTER = ROUTER;
        this._ = _;
        this.title = title;
        //======================================================================
        this.sections = {
            new: true,
            form: {
                active: true
            },
            video: {
                active: false
            },
            files: {
                active: false
            },
            program: {
                active: false
            },
            confirmation: {
                active: false
            }
        };
        this.subsStartup();
    }
    DashboardNewStartupComponent.prototype.subsStartup = function () {
        var _this = this;
        this.subs_startup = this.CORE.startup.subscribe(function (startup) {
            _this.startup = startup;
            _this.startup_show = {
                id: _this.startup.id || "",
                title: _this.startup.title,
                image: _this.startup.logo ||
                    "https://www.onsideball.com/InnoProject/images/startups/logo/avatar-startup.jpg",
                cover_image: _this.startup.image ||
                    "https://www.onsideball.com/InnoProject/images/startups/images/cover-avatar.jpg",
                description: _this.startup.description,
                country: {
                    code: _this.startup.country,
                    name: ""
                },
                jury_vote: 0,
                startup_vote: 0,
                rank: 0
            };
        });
    };
    DashboardNewStartupComponent.prototype.startupNameChange = function ($event) {
        this.startup_show[$event.key] = $event.value;
    };
    DashboardNewStartupComponent.prototype.joinedCompetition = function (_event) {
        this.canjoincompetition = false;
        this.startupDetail.startup.canjoincompetition = false;
        this.changeSection('form', !this.sections.form.active && this.sections.new);
    };
    DashboardNewStartupComponent.prototype.ngOnInit = function () {
        var _this = this;
        this.ROUTER.params.subscribe(function (data) {
            _this.sections.new = !("id" in data);
            if (!_this.sections.new) {
                _this.CORE.getDashboardStartupDetail(data.id).subscribe(function (data) {
                    _this.DASHBOARD.title.next(_this._.instant("dashboard.look-startup"));
                    _this.title.setTitle("Idealizerr - " + data.body.startup.title);
                    _this.startup_show.image = data.body.startup.logo;
                    _this.startup_show.cover_image = data.body.startup.image;
                    _this.startup_show.title = data.body.startup.title;
                    _this.startup_show.description = data.body.startup.description;
                    _this.startup_show.admin_check = data.body.startup.startup_check;
                    _this.startup_show.category = data.body.startup.category;
                    _this.category = data.body.startup.category;
                    _this.joined = data.body.startup.joined;
                    _this.canjoincompetition = data.body.startup.canjoincompetition;
                    _this.startupDetail = data.body;
                    _this.accepted = data.body.startup.video_confirmation === 1;
                    if (_this.startupDetail.startup.startup_check === 2 || _this.startupDetail.startup.startup_check === 0) {
                        _this.sections.new = true;
                        // this.startup_show.image = "https://www.onsideball.com/InnoProject/images/startups/logo/avatar-startup.jpg";
                        // this.startup_show.cover_image = 'https://www.onsideball.com/InnoProject/images/startups/images/cover-avatar.jpg';
                    }
                    else {
                        if (!_this.accepted) {
                            _this.changeSection('video', false);
                        }
                        else if (_this.canjoincompetition && _this.accepted) {
                            _this.changeSection('confirmation', false);
                        }
                    }
                });
            }
            else {
                _this.DASHBOARD.title.next(_this._.instant("dashboard.new-startup"));
                _this.title.setTitle("Idealizerr - " + _this._.instant('dashboard.new-startup'));
            }
        });
    };
    //======================================================================
    DashboardNewStartupComponent.prototype.changeSection = function (name, isDisabled) {
        if (this.sections.new && name != "form") {
            this.NOTIFY.setNotification({
                status: "warning",
                text: this._.instant("dashboard.register-validation")
            });
        }
        else {
            for (var key in this.sections) {
                if (typeof this.sections[key] === "object" &&
                    "active" in this.sections[key]) {
                    this.sections[key].active = false;
                }
            }
            this.sections[name].active = true;
        }
    };
    DashboardNewStartupComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
            selector: "app-dashboard-new-startup",
            template: __webpack_require__(/*! ./dashboard-new-startup.component.html */ "./src/app/modules/dashboard/pages/dashboard-new-startup/dashboard-new-startup.component.html"),
            styles: [__webpack_require__(/*! ./dashboard-new-startup.component.scss */ "./src/app/modules/dashboard/pages/dashboard-new-startup/dashboard-new-startup.component.scss")]
        }) //======================================================================
        ,
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [src_app_modules_shared_services_dashboard_service__WEBPACK_IMPORTED_MODULE_2__["DashboardService"],
            src_app_modules_shared_services_notify_service__WEBPACK_IMPORTED_MODULE_3__["NotifyService"],
            src_app_modules_shared_services_core_service__WEBPACK_IMPORTED_MODULE_4__["CoreService"],
            _angular_router__WEBPACK_IMPORTED_MODULE_5__["ActivatedRoute"],
            _ngx_translate_core__WEBPACK_IMPORTED_MODULE_6__["TranslateService"],
            _angular_platform_browser__WEBPACK_IMPORTED_MODULE_7__["Title"]])
    ], DashboardNewStartupComponent);
    return DashboardNewStartupComponent;
}()); //======================================================================



/***/ }),

/***/ "./src/app/modules/dashboard/pages/dashboard-new-startup/new-files-form/new-files-form.component.html":
/*!************************************************************************************************************!*\
  !*** ./src/app/modules/dashboard/pages/dashboard-new-startup/new-files-form/new-files-form.component.html ***!
  \************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<div class=\"little-warning i-medium\">{{\"dashboard.required-files\" | translate}}</div>\n<div class=\"box\">\n        <input type=\"file\"\n               #files\n               style=\"display: none\"\n               (change)=\"uploadFiles($event.target.files)\"\n               multiple>\n        <ul>\n                <li *ngFor=\"let item of uploaded\"\n                    class=\"i-regular mt-1\">{{item.name}} <span class=\"mdi mdi-delete danger\"\n                              style=\"cursor: pointer;\"\n                              (click)=\"deleteFile(item)\"></span></li>\n        </ul>\n        <button class=\"btn i-bold w-auto non-border mt-1\"\n                style=\"background-color: rgb(5, 71, 180);\n  color: rgb(255, 255, 255); width:100%;\"\n                (click)=\"addFiles(files)\">{{\"dashboard.choose-files\" | translate}}</button>\n        <button class=\"btn i-bold w-auto non-border mt-3\"\n                *ngIf=\"uploaded && uploaded.length\"\n                style=\"background-color: rgb(5, 180, 98);\n  color: rgb(255, 255, 255); width:100%;\"\n                (click)=\"submitFiles()\">{{\"dashboard.submit-files\" | translate}}</button>\n        <h2 class=\"i-medium mt-2\">{{\"dashboard.available-files\" | translate}}</h2>\n        <ul class=\"mt-2\">\n                <li class=\"i-regular\"\n                    style=\"font-size: 12px;\"\n                    *ngIf=\"detail.files.length === 0\">{{\"dashboard.no-file\" | translate}}</li>\n                <li *ngFor=\"let item of detail.files\"\n                    class=\"mb-2\">\n                        <a class=\"p i-regular grey link-hover\"\n                           [href]=\"item.file\"\n                           download>{{item.title || 'File'}}\n                        </a>\n                        <i class=\"mdi mdi-delete danger\"\n                           (click)=\"removeFile(item)\"></i>\n                </li>\n        </ul>\n</div>"

/***/ }),

/***/ "./src/app/modules/dashboard/pages/dashboard-new-startup/new-files-form/new-files-form.component.scss":
/*!************************************************************************************************************!*\
  !*** ./src/app/modules/dashboard/pages/dashboard-new-startup/new-files-form/new-files-form.component.scss ***!
  \************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = ".box {\n  box-shadow: 4px 4px 13px 0 rgba(0, 28, 50, 0.07);\n  border-radius: 8px;\n  background-color: #FFFFFF;\n  padding: 48px;\n  padding-bottom: 64px;\n  position: relative; }\n\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIi9Vc2Vycy9iL0RvY3VtZW50cy9mcmVlbGFuY2UvaWRlYWxpemVyci1hbmd1bGFyL3NyYy9hcHAvbW9kdWxlcy9kYXNoYm9hcmQvcGFnZXMvZGFzaGJvYXJkLW5ldy1zdGFydHVwL25ldy1maWxlcy1mb3JtL25ldy1maWxlcy1mb3JtLmNvbXBvbmVudC5zY3NzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBO0VBQ0UsZ0RBQWdEO0VBQ2hELGtCQUFrQjtFQUNsQix5QkFBeUI7RUFDekIsYUFBYTtFQUNiLG9CQUFvQjtFQUNwQixrQkFBa0IsRUFBQSIsImZpbGUiOiJzcmMvYXBwL21vZHVsZXMvZGFzaGJvYXJkL3BhZ2VzL2Rhc2hib2FyZC1uZXctc3RhcnR1cC9uZXctZmlsZXMtZm9ybS9uZXctZmlsZXMtZm9ybS5jb21wb25lbnQuc2NzcyIsInNvdXJjZXNDb250ZW50IjpbIi5ib3gge1xuICBib3gtc2hhZG93OiA0cHggNHB4IDEzcHggMCByZ2JhKDAsIDI4LCA1MCwgMC4wNyk7XG4gIGJvcmRlci1yYWRpdXM6IDhweDtcbiAgYmFja2dyb3VuZC1jb2xvcjogI0ZGRkZGRjtcbiAgcGFkZGluZzogNDhweDtcbiAgcGFkZGluZy1ib3R0b206IDY0cHg7XG4gIHBvc2l0aW9uOiByZWxhdGl2ZTtcbn0iXX0= */"

/***/ }),

/***/ "./src/app/modules/dashboard/pages/dashboard-new-startup/new-files-form/new-files-form.component.ts":
/*!**********************************************************************************************************!*\
  !*** ./src/app/modules/dashboard/pages/dashboard-new-startup/new-files-form/new-files-form.component.ts ***!
  \**********************************************************************************************************/
/*! exports provided: NewFilesFormComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "NewFilesFormComponent", function() { return NewFilesFormComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var src_app_modules_shared_services_core_service__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! src/app/modules/shared/services/core.service */ "./src/app/modules/shared/services/core.service.ts");
/* harmony import */ var src_app_modules_shared_services_notify_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! src/app/modules/shared/services/notify.service */ "./src/app/modules/shared/services/notify.service.ts");
/* harmony import */ var _ngx_translate_core__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @ngx-translate/core */ "./node_modules/@ngx-translate/core/fesm5/ngx-translate-core.js");





var NewFilesFormComponent = /** @class */ (function () {
    function NewFilesFormComponent(CORE, NOTIFY, _) {
        this.CORE = CORE;
        this.NOTIFY = NOTIFY;
        this._ = _;
        this.uploaded = [];
    }
    NewFilesFormComponent.prototype.ngOnInit = function () {
    };
    NewFilesFormComponent.prototype.addFiles = function (files) {
        files.click();
    };
    NewFilesFormComponent.prototype.deleteFile = function (item) {
        this.uploaded = this.uploaded.filter(function (el) { return el !== item; });
    };
    NewFilesFormComponent.prototype.submitFiles = function () {
        var _this = this;
        var formData = new FormData();
        this.uploaded.forEach(function (fl) {
            formData.append("files[]", fl);
        });
        this.CORE.createFiles(this.startupId, formData).subscribe(function (data) {
            _this.NOTIFY.setNotification({
                status: "success",
                text: _this._.instant("dashboard.files-added")
            });
            _this.uploaded = [];
            _this.detail.files = data.body.files;
        }, function (error) {
            console.log(error);
            if (error.error) {
                if (error.error.errors) {
                    for (var key in error.error.errors) {
                        _this.NOTIFY.setNotification({
                            status: "danger",
                            text: error.error.errors[key][0]
                        });
                    }
                }
            }
        });
    };
    NewFilesFormComponent.prototype.removeFile = function (item) {
        var _this = this;
        this.NOTIFY.setNotification({
            hold: true,
            status: "warning",
            text: item.title + " " + this._.instant("dashboard.is-delete")
        }).subscribe(function (data) {
            _this.CORE.removeFile(item.id).subscribe(function (data) {
                if (data.body.errors) {
                    _this.NOTIFY.setNotification({
                        status: "danger",
                        text: data.body.errors
                    });
                    return;
                }
                _this.detail.files = data.body.files;
                _this.NOTIFY.setNotification({
                    status: "success",
                    text: _this._.instant("dashboard.files-deleted")
                });
            });
        });
    };
    NewFilesFormComponent.prototype.uploadFiles = function (files) {
        if (files.length) {
            this.uploaded = this.uploaded.concat([].slice.call(files));
        }
    };
    tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Input"])(),
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:type", Object)
    ], NewFilesFormComponent.prototype, "startupId", void 0);
    tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Input"])(),
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:type", Object)
    ], NewFilesFormComponent.prototype, "detail", void 0);
    NewFilesFormComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
            selector: "app-new-files-form",
            template: __webpack_require__(/*! ./new-files-form.component.html */ "./src/app/modules/dashboard/pages/dashboard-new-startup/new-files-form/new-files-form.component.html"),
            styles: [__webpack_require__(/*! ./new-files-form.component.scss */ "./src/app/modules/dashboard/pages/dashboard-new-startup/new-files-form/new-files-form.component.scss")]
        }),
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [src_app_modules_shared_services_core_service__WEBPACK_IMPORTED_MODULE_2__["CoreService"],
            src_app_modules_shared_services_notify_service__WEBPACK_IMPORTED_MODULE_3__["NotifyService"],
            _ngx_translate_core__WEBPACK_IMPORTED_MODULE_4__["TranslateService"]])
    ], NewFilesFormComponent);
    return NewFilesFormComponent;
}());



/***/ }),

/***/ "./src/app/modules/dashboard/pages/dashboard-new-startup/new-join-competition/new-join-competition.component.html":
/*!************************************************************************************************************************!*\
  !*** ./src/app/modules/dashboard/pages/dashboard-new-startup/new-join-competition/new-join-competition.component.html ***!
  \************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<div class=\"box\">\n  <div\n  *ngIf=\"detail && detail.canjoincompetition\">\n<button class=\"btn btn-success\"\n       style=\"width: 100%\"\n       *ngIf=\"!detail.joined\"\n       (click)=\"joinCompetition()\">{{\"dashboard.join-competition\" | translate}}</button>\n</div>\n<div>\n<button *ngIf=\"detail && detail.joined\" style=\"width: 100%\" class=\"btn btn-secondary\">{{\"dashboard.joined-competition\" | translate}}</button>\n</div>\n</div>"

/***/ }),

/***/ "./src/app/modules/dashboard/pages/dashboard-new-startup/new-join-competition/new-join-competition.component.scss":
/*!************************************************************************************************************************!*\
  !*** ./src/app/modules/dashboard/pages/dashboard-new-startup/new-join-competition/new-join-competition.component.scss ***!
  \************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = ".box {\n  box-shadow: 4px 4px 13px 0 rgba(0, 28, 50, 0.07);\n  border-radius: 8px;\n  background-color: #FFFFFF;\n  padding: 48px;\n  padding-bottom: 64px;\n  position: relative; }\n  @media (max-width: 991px) {\n    .box {\n      padding-left: 24px;\n      padding-right: 24px; } }\n\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIi9Vc2Vycy9iL0RvY3VtZW50cy9mcmVlbGFuY2UvaWRlYWxpemVyci1hbmd1bGFyL3NyYy9hcHAvbW9kdWxlcy9kYXNoYm9hcmQvcGFnZXMvZGFzaGJvYXJkLW5ldy1zdGFydHVwL25ldy1qb2luLWNvbXBldGl0aW9uL25ldy1qb2luLWNvbXBldGl0aW9uLmNvbXBvbmVudC5zY3NzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBO0VBQ0UsZ0RBQWdEO0VBQ2hELGtCQUFrQjtFQUNsQix5QkFBeUI7RUFDekIsYUFBYTtFQUNiLG9CQUFvQjtFQUNwQixrQkFBa0IsRUFBQTtFQUVsQjtJQVJGO01BU0ksa0JBQWtCO01BQ2xCLG1CQUFtQixFQUFBLEVBRXRCIiwiZmlsZSI6InNyYy9hcHAvbW9kdWxlcy9kYXNoYm9hcmQvcGFnZXMvZGFzaGJvYXJkLW5ldy1zdGFydHVwL25ldy1qb2luLWNvbXBldGl0aW9uL25ldy1qb2luLWNvbXBldGl0aW9uLmNvbXBvbmVudC5zY3NzIiwic291cmNlc0NvbnRlbnQiOlsiLmJveCB7XG4gIGJveC1zaGFkb3c6IDRweCA0cHggMTNweCAwIHJnYmEoMCwgMjgsIDUwLCAwLjA3KTtcbiAgYm9yZGVyLXJhZGl1czogOHB4O1xuICBiYWNrZ3JvdW5kLWNvbG9yOiAjRkZGRkZGO1xuICBwYWRkaW5nOiA0OHB4O1xuICBwYWRkaW5nLWJvdHRvbTogNjRweDtcbiAgcG9zaXRpb246IHJlbGF0aXZlO1xuXG4gIEBtZWRpYSAobWF4LXdpZHRoOiA5OTFweCkge1xuICAgIHBhZGRpbmctbGVmdDogMjRweDtcbiAgICBwYWRkaW5nLXJpZ2h0OiAyNHB4O1xuICB9XG59Il19 */"

/***/ }),

/***/ "./src/app/modules/dashboard/pages/dashboard-new-startup/new-join-competition/new-join-competition.component.ts":
/*!**********************************************************************************************************************!*\
  !*** ./src/app/modules/dashboard/pages/dashboard-new-startup/new-join-competition/new-join-competition.component.ts ***!
  \**********************************************************************************************************************/
/*! exports provided: NewJoinCompetitionComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "NewJoinCompetitionComponent", function() { return NewJoinCompetitionComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var src_app_modules_shared_services_core_service__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! src/app/modules/shared/services/core.service */ "./src/app/modules/shared/services/core.service.ts");
/* harmony import */ var src_app_modules_shared_services_notify_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! src/app/modules/shared/services/notify.service */ "./src/app/modules/shared/services/notify.service.ts");




var NewJoinCompetitionComponent = /** @class */ (function () {
    function NewJoinCompetitionComponent(CORE, NOTIFY) {
        this.CORE = CORE;
        this.NOTIFY = NOTIFY;
        this.joined = new _angular_core__WEBPACK_IMPORTED_MODULE_1__["EventEmitter"]();
    }
    NewJoinCompetitionComponent.prototype.ngOnInit = function () { };
    NewJoinCompetitionComponent.prototype.joinCompetition = function () {
        var _this = this;
        this.CORE.joinCompetition(this.detail.id).subscribe(function (data) {
            if (data.body.errors) {
            }
            else {
                _this.NOTIFY.setNotification({
                    text: "Müsabiqədə iştirakınız üçün sorğu göndərildi",
                    status: "success"
                });
                _this.joined.emit(true);
                _this.detail.canjoincompetition = false;
            }
        });
    };
    tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Input"])(),
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:type", Object)
    ], NewJoinCompetitionComponent.prototype, "detail", void 0);
    tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Output"])(),
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:type", Object)
    ], NewJoinCompetitionComponent.prototype, "joined", void 0);
    NewJoinCompetitionComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
            selector: "new-join-competition",
            template: __webpack_require__(/*! ./new-join-competition.component.html */ "./src/app/modules/dashboard/pages/dashboard-new-startup/new-join-competition/new-join-competition.component.html"),
            styles: [__webpack_require__(/*! ./new-join-competition.component.scss */ "./src/app/modules/dashboard/pages/dashboard-new-startup/new-join-competition/new-join-competition.component.scss")]
        }),
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [src_app_modules_shared_services_core_service__WEBPACK_IMPORTED_MODULE_2__["CoreService"],
            src_app_modules_shared_services_notify_service__WEBPACK_IMPORTED_MODULE_3__["NotifyService"]])
    ], NewJoinCompetitionComponent);
    return NewJoinCompetitionComponent;
}());



/***/ }),

/***/ "./src/app/modules/dashboard/pages/dashboard-new-startup/new-program/new-program.component.html":
/*!******************************************************************************************************!*\
  !*** ./src/app/modules/dashboard/pages/dashboard-new-startup/new-program/new-program.component.html ***!
  \******************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<div class=\"box\">\n  <div class=\"row\"\n       *ngIf=\"programs\">\n    <div class=\"col-md-4 mb-2 i-medium\"\n         *ngFor=\"let item of programs\">\n      <div class=\"program-content\"\n           (click)=\"joinProgram(item)\">\n        <div class=\"title\">{{item.title}}</div>\n        <div class=\"description\">{{item.description}}</div>\n      </div>\n    </div>\n  </div>\n</div>"

/***/ }),

/***/ "./src/app/modules/dashboard/pages/dashboard-new-startup/new-program/new-program.component.scss":
/*!******************************************************************************************************!*\
  !*** ./src/app/modules/dashboard/pages/dashboard-new-startup/new-program/new-program.component.scss ***!
  \******************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = ".box {\n  box-shadow: 4px 4px 13px 0 rgba(0, 28, 50, 0.07);\n  border-radius: 8px;\n  background-color: #FFFFFF;\n  padding: 48px;\n  padding-bottom: 64px;\n  position: relative; }\n\n.program-content {\n  border-radius: 4px;\n  padding: 10px 0;\n  border: 2px solid #3B45C0;\n  height: 100%;\n  cursor: pointer; }\n\n.program-content .title {\n    text-align: center;\n    font-weight: bold; }\n\n.program-content .description {\n    margin-top: 20px;\n    text-align: center;\n    font-size: 11px; }\n\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIi9Vc2Vycy9iL0RvY3VtZW50cy9mcmVlbGFuY2UvaWRlYWxpemVyci1hbmd1bGFyL3NyYy9hcHAvbW9kdWxlcy9kYXNoYm9hcmQvcGFnZXMvZGFzaGJvYXJkLW5ldy1zdGFydHVwL25ldy1wcm9ncmFtL25ldy1wcm9ncmFtLmNvbXBvbmVudC5zY3NzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBO0VBQ0UsZ0RBQWdEO0VBQ2hELGtCQUFrQjtFQUNsQix5QkFBeUI7RUFDekIsYUFBYTtFQUNiLG9CQUFvQjtFQUNwQixrQkFBa0IsRUFBQTs7QUFHcEI7RUFDRSxrQkFBa0I7RUFDbEIsZUFBZTtFQUNmLHlCQUF5QjtFQUN6QixZQUFZO0VBQ1osZUFBZSxFQUFBOztBQUxqQjtJQVFJLGtCQUFrQjtJQUNsQixpQkFBaUIsRUFBQTs7QUFUckI7SUFhSSxnQkFBZ0I7SUFDaEIsa0JBQWtCO0lBQ2xCLGVBQWUsRUFBQSIsImZpbGUiOiJzcmMvYXBwL21vZHVsZXMvZGFzaGJvYXJkL3BhZ2VzL2Rhc2hib2FyZC1uZXctc3RhcnR1cC9uZXctcHJvZ3JhbS9uZXctcHJvZ3JhbS5jb21wb25lbnQuc2NzcyIsInNvdXJjZXNDb250ZW50IjpbIi5ib3gge1xuICBib3gtc2hhZG93OiA0cHggNHB4IDEzcHggMCByZ2JhKDAsIDI4LCA1MCwgMC4wNyk7XG4gIGJvcmRlci1yYWRpdXM6IDhweDtcbiAgYmFja2dyb3VuZC1jb2xvcjogI0ZGRkZGRjtcbiAgcGFkZGluZzogNDhweDtcbiAgcGFkZGluZy1ib3R0b206IDY0cHg7XG4gIHBvc2l0aW9uOiByZWxhdGl2ZTtcbn1cblxuLnByb2dyYW0tY29udGVudCB7XG4gIGJvcmRlci1yYWRpdXM6IDRweDtcbiAgcGFkZGluZzogMTBweCAwO1xuICBib3JkZXI6IDJweCBzb2xpZCAjM0I0NUMwO1xuICBoZWlnaHQ6IDEwMCU7XG4gIGN1cnNvcjogcG9pbnRlcjtcblxuICAudGl0bGUge1xuICAgIHRleHQtYWxpZ246IGNlbnRlcjtcbiAgICBmb250LXdlaWdodDogYm9sZDtcbiAgfVxuXG4gIC5kZXNjcmlwdGlvbiB7XG4gICAgbWFyZ2luLXRvcDogMjBweDtcbiAgICB0ZXh0LWFsaWduOiBjZW50ZXI7XG4gICAgZm9udC1zaXplOiAxMXB4O1xuICB9XG59Il19 */"

/***/ }),

/***/ "./src/app/modules/dashboard/pages/dashboard-new-startup/new-program/new-program.component.ts":
/*!****************************************************************************************************!*\
  !*** ./src/app/modules/dashboard/pages/dashboard-new-startup/new-program/new-program.component.ts ***!
  \****************************************************************************************************/
/*! exports provided: NewProgramComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "NewProgramComponent", function() { return NewProgramComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var src_app_modules_shared_services_core_service__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! src/app/modules/shared/services/core.service */ "./src/app/modules/shared/services/core.service.ts");
/* harmony import */ var src_app_modules_shared_services_notify_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! src/app/modules/shared/services/notify.service */ "./src/app/modules/shared/services/notify.service.ts");
/* harmony import */ var _ngx_translate_core__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @ngx-translate/core */ "./node_modules/@ngx-translate/core/fesm5/ngx-translate-core.js");





var NewProgramComponent = /** @class */ (function () {
    function NewProgramComponent(CORE, NOTIFY, _) {
        this.CORE = CORE;
        this.NOTIFY = NOTIFY;
        this._ = _;
    }
    NewProgramComponent.prototype.ngOnInit = function () {
        this.getPrograms();
    };
    NewProgramComponent.prototype.joinProgram = function (item) {
        var _this = this;
        this.NOTIFY.setNotification({
            status: 'warning',
            hold: true,
            id: item.id,
            text: this._.instant("dashboard.sure-to-join-program", { programName: item.title })
        }).subscribe(function (data) {
            _this.CORE.joinProgram({
                startup_id: _this.startupId,
                program: item.title
            }).subscribe(function (data) {
                if (data.body.errors) {
                    _this.NOTIFY.setNotification({
                        status: "danger",
                        text: data.body.errors
                    });
                }
                else {
                    _this.NOTIFY.setNotification({
                        status: "success",
                        text: _this._.instant("dashboard.joined-program", { programName: item.title })
                    });
                }
            });
        });
    };
    NewProgramComponent.prototype.getPrograms = function () {
        var _this = this;
        this.CORE.getPrograms(this.startupId).subscribe(function (data) {
            _this.programs = data.body;
        });
    };
    tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Input"])(),
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:type", Object)
    ], NewProgramComponent.prototype, "startupId", void 0);
    NewProgramComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
            selector: "app-new-program",
            template: __webpack_require__(/*! ./new-program.component.html */ "./src/app/modules/dashboard/pages/dashboard-new-startup/new-program/new-program.component.html"),
            styles: [__webpack_require__(/*! ./new-program.component.scss */ "./src/app/modules/dashboard/pages/dashboard-new-startup/new-program/new-program.component.scss")]
        }),
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [src_app_modules_shared_services_core_service__WEBPACK_IMPORTED_MODULE_2__["CoreService"], src_app_modules_shared_services_notify_service__WEBPACK_IMPORTED_MODULE_3__["NotifyService"], _ngx_translate_core__WEBPACK_IMPORTED_MODULE_4__["TranslateService"]])
    ], NewProgramComponent);
    return NewProgramComponent;
}());



/***/ }),

/***/ "./src/app/modules/dashboard/pages/dashboard-new-startup/new-question-form/new-question-form.component.html":
/*!******************************************************************************************************************!*\
  !*** ./src/app/modules/dashboard/pages/dashboard-new-startup/new-question-form/new-question-form.component.html ***!
  \******************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<div class=\"box\">\n  <form [formGroup]=\"questionForm\"\n        *ngIf=\"questionForm\">\n    <div class=\"input-holder pb-24px\">\n      <label for=\"title\">{{\"dashboard.project-name\" | translate}}</label>\n      <div class=\"input\">\n        <input type='text'\n               name='title'\n               (keyup)=\"startupNameChange.emit({\n                 key: 'title',\n                 value: $event.target.value\n               })\"\n               placeholder=''\n               formControlName='title'\n               id='title'>\n      </div>\n      <ul>\n        <li *ngIf=\"questionForm.controls['title'].hasError('required') && questionForm.controls['title'].touched\">\n          {{\"global.requiredField\" | translate}}</li>\n      </ul>\n    </div>\n    <div class=\"input-holder pb-24px\">\n      <label for=\"description\">{{\"dashboard.projects-solution\" | translate}}</label>\n      <div class=\"input\">\n        <textarea name='description'\n                  placeholder=''\n                  (keyup)=\"startupNameChange.emit({\n                    key: 'description',\n                    value: $event.target.value\n                  })\"\n                  formControlName='description'\n                  id='description'>\n        </textarea>\n      </div>\n      <ul>\n        <li\n            *ngIf=\"questionForm.controls['description'].hasError('required') && questionForm.controls['description'].touched\">\n          {{\"global.requiredField\" | translate}}</li>\n      </ul>\n    </div>\n    <div class=\"input-holder pb-24px\">\n      <label for=\"website\">{{\"dashboard.projects-webpage\" | translate}}</label>\n      <div class=\"input\">\n        <input type='text'\n               name='website'\n               placeholder=''\n               formControlName='website'\n               id='website'>\n      </div>\n      <ul>\n        <li *ngIf=\"questionForm.controls['website'].hasError('required') && questionForm.controls['website'].touched\">\n          {{\"global.requiredField\" | translate}}</li>\n      </ul>\n    </div>\n    <div class=\"input-holder pb-24px\">\n      <label for=\"twitter\">Twitter</label>\n      <div class=\"input\">\n        <input type='text'\n               name='twitter'\n               placeholder=''\n               formControlName='twitter'\n               id='twitter'>\n      </div>\n      <ul>\n        <li *ngIf=\"questionForm.controls['twitter'].hasError('required') && questionForm.controls['twitter'].touched\">\n          {{\"global.requiredField\" | translate}}</li>\n      </ul>\n    </div>\n    <div class=\"input-holder pb-24px\">\n      <label for=\"facebook\">Facebook</label>\n      <div class=\"input\">\n        <input type='text'\n               name='facebook'\n               placeholder=''\n               formControlName='facebook'\n               id='facebook'>\n      </div>\n      <ul>\n        <li *ngIf=\"questionForm.controls['facebook'].hasError('required') && questionForm.controls['facebook'].touched\">\n          {{\"global.requiredField\" | translate}}</li>\n      </ul>\n    </div>\n    <div class=\"input-holder pb-24px\">\n      <label for=\"team\">{{\"dashboard.team-info\" | translate}}</label>\n      <div class=\"input\">\n        <textarea name='team'\n                  placeholder=''\n                  formControlName='team'\n                  id='team'>\n        </textarea>\n      </div>\n      <ul>\n        <li *ngIf=\"questionForm.controls['team'].hasError('required') && questionForm.controls['team'].touched\">\n          {{\"global.requiredField\" | translate}}</li>\n      </ul>\n    </div>\n    <div class=\"input-holder pb-24px\">\n      <label for=\"idea\">{{\"dashboard.projects-solution-explanation\" | translate}}</label>\n      <div class=\"input\">\n        <textarea name='idea'\n                  placeholder=''\n                  formControlName='idea'\n                  id='idea'>\n        </textarea>\n      </div>\n      <ul>\n        <li *ngIf=\"questionForm.controls['idea'].hasError('required') && questionForm.controls['idea'].touched\">\n          {{\"global.requiredField\" | translate}}</li>\n      </ul>\n    </div>\n    <div class=\"input-holder pb-24px\">\n      <label for=\"idea\">{{\"home.select-your-country\" | translate}}</label>\n      <div class=\"input\">\n        <ngx-ea-intl-tel-input\n              [value]=\"questionForm ? questionForm.get('answer1').value : null\"\n              [hideCountriesDialCodeList]=\"[]\"\n              [placeholder]=\"'global.yournumber' | translate\"\n              [formVersion]=\"true\"\n              [label]=\"false\"\n              [disabled]=\"answer1Disabled\"\n              [countries]=\"countries\"\n              [searchPlaceholder]=\"'home.search' | translate\"\n              [choose]=\"'home.select-country' | translate\"\n              (value)=\"mobileNumberInputChange($event)\"></ngx-ea-intl-tel-input>\n      </div>\n      <ul>\n       <li *ngIf=\"questionForm.controls['answer1'].hasError('required') && questionForm.controls['answer1'].touched\">\n        {{\"global.requiredField\" | translate}}</li>\n      </ul>\n    </div>\n    <ng-container *ngFor=\"let item of questions | keyvalue\">\n      <ng-container *ngIf=\"item.value.checkbox; then checkbox; else radio\">\n      </ng-container>\n      <ng-template #checkbox>\n        <div class=\"input-holder pb-24px\"\n             [formArrayName]=\"item.key\">\n          <label>{{item.value.question}}</label>\n          <ng-container *ngFor=\"let key of item.value.options; let i = index\">\n            <div class=\"radio\">\n              <input type=\"checkbox\"\n                     [formControlName]=\"i\"\n                     id=\"checkbox-{{item.key}}-{{key.id}}\">\n              <label class=\"radio-label black\"\n                     for=\"checkbox-{{item.key}}-{{key.id}}\">{{key.value}}</label>\n            </div>\n          </ng-container>\n          <ul>\n            <li *ngIf=\"questionForm.controls[item.key].touched && questionForm.controls[item.key].invalid\">\n              {{\"global.requiredField\" | translate}}\n            </li>\n          </ul>\n        </div>\n      </ng-template>\n      <ng-template #radio>\n        <div class=\"input-holder pb-24px\">\n          <label>{{item.value.question}}</label>\n          <ng-container *ngFor=\"let key of item.value.options; let i = index\">\n            <div class=\"radio\">\n              <input name=\"{{item.key}}\"\n                     type=\"radio\"\n                     value=\"{{key.value}}\"\n                     [formControlName]=\"item.key\"\n                     id=\"radio-{{item.key}}-{{key.id}}\">\n              <label class=\"radio-label black\"\n                     for=\"radio-{{item.key}}-{{key.id}}\">{{key.value}}</label>\n            </div>\n          </ng-container>\n          <ul>\n            <li *ngIf=\"questionForm.controls[item.key].hasError('required') && questionForm.controls[item.key].touched\">\n              {{\"global.requiredField\" | translate}}\n            </li>\n          </ul>\n        </div>\n      </ng-template>\n    </ng-container>\n  </form>\n\n  <div class=\"input-holder pt-24px pb-24px\" *ngIf=\"new && questionForm\">\n    <ul>\n      <li *ngIf=\"allTouched && !questionForm.valid\">\n        {{\"dashboard.image-or-other-required-fields-empty\" | translate}}\n      </li>\n    </ul>\n  </div>\n  <button (click)=\"submitForm()\"\n     *ngIf=\"new\"\n     class=\"dashboard-form-submit-btn\">{{\"dashboard.save\" | translate}}</button>\n</div>\n"

/***/ }),

/***/ "./src/app/modules/dashboard/pages/dashboard-new-startup/new-question-form/new-question-form.component.scss":
/*!******************************************************************************************************************!*\
  !*** ./src/app/modules/dashboard/pages/dashboard-new-startup/new-question-form/new-question-form.component.scss ***!
  \******************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = ".box {\n  box-shadow: 4px 4px 13px 0 rgba(0, 28, 50, 0.07);\n  border-radius: 8px;\n  background-color: #FFFFFF;\n  padding: 48px;\n  padding-bottom: 64px;\n  position: relative; }\n  @media (max-width: 991px) {\n    .box {\n      padding-left: 24px;\n      padding-right: 24px; }\n      .box .input-holder > label {\n        text-align: center; } }\n\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIi9Vc2Vycy9iL0RvY3VtZW50cy9mcmVlbGFuY2UvaWRlYWxpemVyci1hbmd1bGFyL3NyYy9hcHAvbW9kdWxlcy9kYXNoYm9hcmQvcGFnZXMvZGFzaGJvYXJkLW5ldy1zdGFydHVwL25ldy1xdWVzdGlvbi1mb3JtL25ldy1xdWVzdGlvbi1mb3JtLmNvbXBvbmVudC5zY3NzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBO0VBQ0UsZ0RBQWdEO0VBQ2hELGtCQUFrQjtFQUNsQix5QkFBeUI7RUFDekIsYUFBYTtFQUNiLG9CQUFvQjtFQUNwQixrQkFBa0IsRUFBQTtFQUVsQjtJQVJGO01BU0ksa0JBQWtCO01BQ2xCLG1CQUFtQixFQUFBO01BVnZCO1FBY1Esa0JBQWtCLEVBQUEsRUFDbkIiLCJmaWxlIjoic3JjL2FwcC9tb2R1bGVzL2Rhc2hib2FyZC9wYWdlcy9kYXNoYm9hcmQtbmV3LXN0YXJ0dXAvbmV3LXF1ZXN0aW9uLWZvcm0vbmV3LXF1ZXN0aW9uLWZvcm0uY29tcG9uZW50LnNjc3MiLCJzb3VyY2VzQ29udGVudCI6WyIuYm94IHtcbiAgYm94LXNoYWRvdzogNHB4IDRweCAxM3B4IDAgcmdiYSgwLCAyOCwgNTAsIDAuMDcpO1xuICBib3JkZXItcmFkaXVzOiA4cHg7XG4gIGJhY2tncm91bmQtY29sb3I6ICNGRkZGRkY7XG4gIHBhZGRpbmc6IDQ4cHg7XG4gIHBhZGRpbmctYm90dG9tOiA2NHB4O1xuICBwb3NpdGlvbjogcmVsYXRpdmU7XG5cbiAgQG1lZGlhIChtYXgtd2lkdGg6IDk5MXB4KSB7XG4gICAgcGFkZGluZy1sZWZ0OiAyNHB4O1xuICAgIHBhZGRpbmctcmlnaHQ6IDI0cHg7XG5cbiAgICAuaW5wdXQtaG9sZGVyIHtcbiAgICAgID5sYWJlbCB7XG4gICAgICAgIHRleHQtYWxpZ246IGNlbnRlcjtcbiAgICAgIH1cbiAgICB9XG4gIH1cbn0iXX0= */"

/***/ }),

/***/ "./src/app/modules/dashboard/pages/dashboard-new-startup/new-question-form/new-question-form.component.ts":
/*!****************************************************************************************************************!*\
  !*** ./src/app/modules/dashboard/pages/dashboard-new-startup/new-question-form/new-question-form.component.ts ***!
  \****************************************************************************************************************/
/*! exports provided: NewQuestionFormComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "NewQuestionFormComponent", function() { return NewQuestionFormComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/fesm5/forms.js");
/* harmony import */ var src_app_modules_shared_services_core_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! src/app/modules/shared/services/core.service */ "./src/app/modules/shared/services/core.service.ts");
/* harmony import */ var src_app_modules_shared_services_notify_service__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! src/app/modules/shared/services/notify.service */ "./src/app/modules/shared/services/notify.service.ts");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm5/router.js");






var NewQuestionFormComponent = /** @class */ (function () {
    function NewQuestionFormComponent(fb, CORE, NOTIFY, ROUTER) {
        this.fb = fb;
        this.CORE = CORE;
        this.NOTIFY = NOTIFY;
        this.ROUTER = ROUTER;
        this.startupNameChange = new _angular_core__WEBPACK_IMPORTED_MODULE_1__["EventEmitter"]();
        this.throttleSubmit = false;
        this.allTouched = false;
    }
    NewQuestionFormComponent.prototype.ngOnDestroy = function () {
        if (this._logo) {
            this._logo.unsubscribe();
        }
        if (this._image) {
            this._image.unsubscribe();
        }
    };
    NewQuestionFormComponent.prototype.ngOnInit = function () {
        var _this = this;
        this.CORE.logo.subscribe(function (data) {
            if (data && _this.questionForm) {
                _this.questionForm.patchValue({
                    logo: data.file
                });
            }
        });
        this.CORE.countries.subscribe(function (data) {
            if (data) {
                _this.countries = data;
            }
        });
        this.CORE.image.subscribe(function (data) {
            if (data && _this.questionForm) {
                _this.questionForm.patchValue({
                    image: data.file
                });
            }
        });
        this.CORE.getQuestions().subscribe(function (_a) {
            var all_questions = _a.all_questions;
            var newQuestions = {};
            var _loop_1 = function (key) {
                if (all_questions.hasOwnProperty(key)) {
                    var _a = all_questions[key], question = _a[0], rest = _a.slice(1);
                    rest = rest.map(function (opt) {
                        for (var optKey in opt) {
                            if (key === '9' && _this.new && _this.detail) {
                                return { id: optKey, value: opt[optKey].trim() };
                            }
                            else {
                                return { id: optKey, value: opt[optKey] };
                            }
                        }
                    });
                    newQuestions["answer" + key] = {
                        question: question.question,
                        options: rest
                    };
                    if (key === "2" || key === "12") {
                        newQuestions["answer" + key].checkbox = true;
                    }
                }
            };
            for (var key in all_questions) {
                _loop_1(key);
            }
            _this.questions = newQuestions;
            var formKeys = {};
            if (!_this.new) {
                var newQuestions_1 = {};
                _this.detail.questions_and_answers.forEach(function (qs, idx) {
                    if (idx + 1 === 1)
                        return;
                    newQuestions_1["answer" + (idx + 1)] = {
                        question: qs.question,
                        options: [{ id: qs.id, value: qs.answer }]
                    };
                });
                _this.questions = newQuestions_1;
                Object.keys(_this.questions).forEach(function (ky) {
                    return (formKeys[ky] = ["", _angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].required]);
                });
                _this.answer1Disabled = true;
                _this.questionForm = _this.fb.group(tslib__WEBPACK_IMPORTED_MODULE_0__["__assign"]({ title: [_this.detail.startup.title, _angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].required], website: [_this.detail.startup.website], twitter: [_this.detail.startup.twitter], facebook: [_this.detail.startup.facebook], team: [_this.detail.startup.team, _angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].required], idea: [_this.detail.startup.idea, _angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].required], description: [_this.detail.startup.description, _angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].required], image: ["", _angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].required], logo: ["", _angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].required] }, formKeys, { answer1: [_this.detail.startup.country.code, _angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].required] }));
                _this.questionForm.disable();
            }
            else if (_this.new && _this.detail) {
                var answer2_1, answer12_1;
                Object.keys(_this.questions).forEach(function (ky) {
                    var value;
                    _this.detail.questions_and_answers.forEach(function (qs, idx) {
                        if (qs.question.trim() === _this.questions[ky].question.trim()) {
                            if (ky === 'answer2')
                                answer2_1 = qs;
                            if (ky === 'answer12')
                                answer12_1 = qs;
                            value = qs.answer;
                        }
                    });
                    return (formKeys[ky] = [value, _angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].required]);
                });
                answer2_1 = answer2_1.answer.split(',').map(function (a) { return a.trim(); });
                answer12_1 = answer12_1.answer.split(',').map(function (a) { return a.trim(); });
                _this.questionForm = _this.fb.group(tslib__WEBPACK_IMPORTED_MODULE_0__["__assign"]({ title: [_this.detail.startup.title, _angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].required], website: [_this.detail.startup.website], twitter: [_this.detail.startup.twitter], facebook: [_this.detail.startup.facebook], team: [_this.detail.startup.team, _angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].required], idea: [_this.detail.startup.idea, _angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].required], description: [_this.detail.startup.description, _angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].required], image: [_this.detail.startup.image, _angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].required], logo: [_this.detail.startup.logo, _angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].required] }, formKeys, { answer1: [_this.detail.startup.country.code, _angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].required], answer2: _this.fb.array(_this.questions["answer2"].options.map(function (s) {
                        if (answer2_1.indexOf(s.value.trim()) !== -1) {
                            return _this.fb.control(true);
                        }
                        return _this.fb.control(false);
                    }), _this.atLeastOneCheckboxCheckedValidator()), answer12: _this.fb.array(_this.questions["answer12"].options.map(function (s) {
                        if (answer12_1.indexOf(s.value.trim()) !== -1) {
                            return _this.fb.control(true);
                        }
                        return _this.fb.control(false);
                    }), _this.atLeastOneCheckboxCheckedValidator()) }));
            }
            else {
                Object.keys(_this.questions).forEach(function (ky) { return (formKeys[ky] = ["", _angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].required]); });
                _this.questionForm = _this.fb.group(tslib__WEBPACK_IMPORTED_MODULE_0__["__assign"]({ title: ["", _angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].required], website: [""], twitter: [""], facebook: [""], team: ["", _angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].required], idea: ["", _angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].required], description: ["", _angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].required], image: ["", _angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].required], logo: ["", _angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].required], answer1: ["", _angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].required] }, formKeys, { answer2: _this.fb.array(_this.questions["answer2"].options.map(function (s) {
                        return _this.fb.control(false);
                    }), _this.atLeastOneCheckboxCheckedValidator()), answer12: _this.fb.array(_this.questions["answer12"].options.map(function (s) { return _this.fb.control(false); }), _this.atLeastOneCheckboxCheckedValidator()) }));
            }
        });
    };
    NewQuestionFormComponent.prototype.mobileNumberInputChange = function ($event) {
        console.log($event);
        this.questionForm.get('answer1').setValue($event.country_code);
    };
    NewQuestionFormComponent.prototype.submitForm = function () {
        var _this = this;
        for (var key in this.questionForm.controls) {
            this.questionForm.controls[key].markAsTouched();
        }
        this.allTouched = true;
        if (!this.questionForm.valid)
            return;
        if (this.throttleSubmit)
            return;
        this.throttleSubmit = true;
        if (this.new && this.detail) {
            var answer12_2 = [], answer2_2 = [];
            this.questionForm.value.answer12.forEach(function (a, aIdx) {
                if (a) {
                    answer12_2.push(_this.questions["answer12"].options[aIdx].value);
                }
            });
            this.questionForm.value.answer2.forEach(function (a, aIdx) {
                if (a) {
                    answer2_2.push(_this.questions["answer2"].options[aIdx].value);
                }
            });
            var completeData = tslib__WEBPACK_IMPORTED_MODULE_0__["__assign"]({}, this.questionForm.value, { answer12: answer12_2.toString(), answer2: answer2_2.toString() });
            if (!(completeData.image instanceof File)) {
                delete completeData.image;
            }
            if (!(completeData.logo instanceof File)) {
                delete completeData.logo;
            }
            var formData = new FormData();
            for (var key in completeData) {
                formData.append(key, completeData[key]);
            }
            this.CORE.startupQuestionEdit(formData, this.detail.startup.id).subscribe(function (data) {
                _this.throttleSubmit = false;
                var body = data.body;
                if (body.errors) {
                    _this.NOTIFY.setNotification({
                        status: "danger",
                        text: body.errors
                    });
                }
                else {
                    _this.ROUTER.navigate(["/dashboard/startups"]);
                }
            }, function (error) {
                _this.throttleSubmit = false;
                if (error.error) {
                    if (error.error.errors) {
                        if (error.error.errors.logo) {
                            _this.NOTIFY.setNotification({
                                status: "danger",
                                text: error.error.errors.logo
                            });
                        }
                    }
                }
            });
        }
        else {
            var answer12_3 = [], answer2_3 = [];
            this.questionForm.value.answer12.forEach(function (a, aIdx) {
                if (a) {
                    answer12_3.push(_this.questions["answer12"].options[aIdx].value);
                }
            });
            this.questionForm.value.answer2.forEach(function (a, aIdx) {
                if (a) {
                    answer2_3.push(_this.questions["answer2"].options[aIdx].value);
                }
            });
            var completeData = tslib__WEBPACK_IMPORTED_MODULE_0__["__assign"]({}, this.questionForm.value, { answer12: answer12_3.toString(), answer2: answer2_3.toString() });
            var formData = new FormData();
            for (var key in completeData) {
                formData.append(key, completeData[key]);
            }
            this.CORE.startupQuestion(formData).subscribe(function (data) {
                _this.throttleSubmit = false;
                var body = data.body;
                if (body.errors) {
                    _this.NOTIFY.setNotification({
                        status: "danger",
                        text: body.errors
                    });
                }
                else {
                    _this.ROUTER.navigate(["/dashboard/startups"]);
                }
            }, function (error) {
                _this.throttleSubmit = false;
                if (error.error) {
                    if (error.error.errors) {
                        if (error.error.errors.logo) {
                            _this.NOTIFY.setNotification({
                                status: "danger",
                                text: error.error.errors.logo
                            });
                        }
                    }
                }
            });
        }
    };
    NewQuestionFormComponent.prototype.atLeastOneCheckboxCheckedValidator = function (minRequired) {
        if (minRequired === void 0) { minRequired = 1; }
        return function validate(formGroup) {
            var checked = 0;
            Object.keys(formGroup.controls).forEach(function (key) {
                var control = formGroup.controls[key];
                if (control.value === true) {
                    checked++;
                }
            });
            if (checked < minRequired) {
                return {
                    requireCheckboxToBeChecked: true
                };
            }
            return null;
        };
    };
    tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Input"])(),
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:type", Boolean)
    ], NewQuestionFormComponent.prototype, "new", void 0);
    tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Input"])(),
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:type", Object)
    ], NewQuestionFormComponent.prototype, "detail", void 0);
    tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Output"])(),
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:type", Object)
    ], NewQuestionFormComponent.prototype, "startupNameChange", void 0);
    NewQuestionFormComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
            selector: "new-question-form",
            template: __webpack_require__(/*! ./new-question-form.component.html */ "./src/app/modules/dashboard/pages/dashboard-new-startup/new-question-form/new-question-form.component.html"),
            styles: [__webpack_require__(/*! ./new-question-form.component.scss */ "./src/app/modules/dashboard/pages/dashboard-new-startup/new-question-form/new-question-form.component.scss")]
        }),
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [_angular_forms__WEBPACK_IMPORTED_MODULE_2__["FormBuilder"],
            src_app_modules_shared_services_core_service__WEBPACK_IMPORTED_MODULE_3__["CoreService"],
            src_app_modules_shared_services_notify_service__WEBPACK_IMPORTED_MODULE_4__["NotifyService"],
            _angular_router__WEBPACK_IMPORTED_MODULE_5__["Router"]])
    ], NewQuestionFormComponent);
    return NewQuestionFormComponent;
}());



/***/ }),

/***/ "./src/app/modules/dashboard/pages/dashboard-new-startup/new-video-form/new-video-form.component.html":
/*!************************************************************************************************************!*\
  !*** ./src/app/modules/dashboard/pages/dashboard-new-startup/new-video-form/new-video-form.component.html ***!
  \************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<div class=\"box\">\n     <div style=\"text-align: center; background-color: #FFC000; padding: 10px 0; margin-bottom: 10px; color:#fff\"\n          class=\"i-regular\"\n          *ngIf=\"waiting\">{{\"dashboard.verifying-video\" | translate}}</div>\n     <div style=\"text-align: center; background-color: #00CF69; padding: 10px 0; margin-bottom: 10px; color:#fff\"\n          class=\"i-regular\"\n          *ngIf=\"accepted\">{{\"dashboard.accepted-video\" | translate}}</div>\n     <div class=\"input-holder pb-24px\">\n          <label for=\"title\">{{\"dashboard.youtube-link\" | translate}}</label>\n          <div class=\"input\">\n               <input type='text'\n                      [disabled]=\"disable\"\n                      [value]=\"videoLink\"\n                      placeholder='https://www.youtube.com/watch?v=VVVVVVV'\n                      (change)=\"onYoutubeLinkChange($event.target.value)\">\n          </div>\n     </div>\n     <iframe style=\"width: 100%\"\n             height=\"315\"\n             *ngIf=\"sanitizedLink\"\n             [src]=\"sanitizedLink\"\n             frameborder=\"0\"\n             allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\"\n             allowfullscreen></iframe>\n     <iframe style=\"width: 100%\"\n             height=\"315\"\n             *ngIf=\"youtubeLink\"\n             [src]=\"youtubeLink\"\n             frameborder=\"0\"\n             allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\"\n             allowfullscreen></iframe>\n     <a (click)=\"submitForm()\"\n        *ngIf=\"youtubeLink\"\n        class=\"dashboard-form-submit-btn\">{{\"dashboard.save\" | translate}}</a>\n</div>"

/***/ }),

/***/ "./src/app/modules/dashboard/pages/dashboard-new-startup/new-video-form/new-video-form.component.scss":
/*!************************************************************************************************************!*\
  !*** ./src/app/modules/dashboard/pages/dashboard-new-startup/new-video-form/new-video-form.component.scss ***!
  \************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = ".box {\n  box-shadow: 4px 4px 13px 0 rgba(0, 28, 50, 0.07);\n  border-radius: 8px;\n  background-color: #FFFFFF;\n  padding: 48px;\n  padding-bottom: 64px;\n  position: relative; }\n\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIi9Vc2Vycy9iL0RvY3VtZW50cy9mcmVlbGFuY2UvaWRlYWxpemVyci1hbmd1bGFyL3NyYy9hcHAvbW9kdWxlcy9kYXNoYm9hcmQvcGFnZXMvZGFzaGJvYXJkLW5ldy1zdGFydHVwL25ldy12aWRlby1mb3JtL25ldy12aWRlby1mb3JtLmNvbXBvbmVudC5zY3NzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBO0VBQ0UsZ0RBQWdEO0VBQ2hELGtCQUFrQjtFQUNsQix5QkFBeUI7RUFDekIsYUFBYTtFQUNiLG9CQUFvQjtFQUNwQixrQkFBa0IsRUFBQSIsImZpbGUiOiJzcmMvYXBwL21vZHVsZXMvZGFzaGJvYXJkL3BhZ2VzL2Rhc2hib2FyZC1uZXctc3RhcnR1cC9uZXctdmlkZW8tZm9ybS9uZXctdmlkZW8tZm9ybS5jb21wb25lbnQuc2NzcyIsInNvdXJjZXNDb250ZW50IjpbIi5ib3gge1xuICBib3gtc2hhZG93OiA0cHggNHB4IDEzcHggMCByZ2JhKDAsIDI4LCA1MCwgMC4wNyk7XG4gIGJvcmRlci1yYWRpdXM6IDhweDtcbiAgYmFja2dyb3VuZC1jb2xvcjogI0ZGRkZGRjtcbiAgcGFkZGluZzogNDhweDtcbiAgcGFkZGluZy1ib3R0b206IDY0cHg7XG4gIHBvc2l0aW9uOiByZWxhdGl2ZTtcbn0iXX0= */"

/***/ }),

/***/ "./src/app/modules/dashboard/pages/dashboard-new-startup/new-video-form/new-video-form.component.ts":
/*!**********************************************************************************************************!*\
  !*** ./src/app/modules/dashboard/pages/dashboard-new-startup/new-video-form/new-video-form.component.ts ***!
  \**********************************************************************************************************/
/*! exports provided: NewVideoFormComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "NewVideoFormComponent", function() { return NewVideoFormComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _angular_platform_browser__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/platform-browser */ "./node_modules/@angular/platform-browser/fesm5/platform-browser.js");
/* harmony import */ var src_app_modules_shared_services_core_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! src/app/modules/shared/services/core.service */ "./src/app/modules/shared/services/core.service.ts");
/* harmony import */ var src_app_modules_shared_services_notify_service__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! src/app/modules/shared/services/notify.service */ "./src/app/modules/shared/services/notify.service.ts");
/* harmony import */ var _ngx_translate_core__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @ngx-translate/core */ "./node_modules/@ngx-translate/core/fesm5/ngx-translate-core.js");






var NewVideoFormComponent = /** @class */ (function () {
    function NewVideoFormComponent(SANITIZER, CORE, NOTIFY, _) {
        this.SANITIZER = SANITIZER;
        this.CORE = CORE;
        this.NOTIFY = NOTIFY;
        this._ = _;
        this.videoLink = "";
        this.youtubeLink = "";
        this.link = "";
    }
    NewVideoFormComponent.prototype.ngOnInit = function () {
        if (this.detail.startup.video_confirmation === 0) {
            // this.disable = true;
            this.waiting = true;
            this.videoLink = this.detail.startup.video;
            this.sanitizedLink = this.SANITIZER.bypassSecurityTrustResourceUrl(this.detail.startup.video);
        }
        if (this.detail.startup.video_confirmation === 1) {
            this.disable = true;
            this.accepted = true;
            this.videoLink = this.detail.startup.video;
            this.sanitizedLink = this.SANITIZER.bypassSecurityTrustResourceUrl(this.detail.startup.video);
        }
    };
    NewVideoFormComponent.prototype.sanitize = function (src) {
        return this.SANITIZER.bypassSecurityTrustResourceUrl(src);
    };
    NewVideoFormComponent.prototype.submitForm = function () {
        var _this = this;
        this.CORE.createVideoLink(this.startupId, this.link).subscribe(function (data) {
            if (data.body.errors) {
                _this.NOTIFY.setNotification({
                    status: 'danger',
                    text: data.body.errors
                });
                return;
            }
            _this.youtubeLink = null;
            if (data.body.startup.video_confirmation === 0) {
                // this.disable = true;
                _this.waiting = true;
                _this.videoLink = data.body.startup.video;
                _this.sanitizedLink = _this.SANITIZER.bypassSecurityTrustResourceUrl(data.body.startup.video);
            }
            _this.NOTIFY.setNotification({
                status: "success",
                text: _this._.instant("dashboard.video-added")
            });
        }, function (error) {
            if (error.error.errors) {
                _this.NOTIFY.setNotification({
                    status: 'danger',
                    text: error.error.errors
                });
            }
            else {
                _this.NOTIFY.setNotification({
                    status: 'danger',
                    text: "Bilinməyən xəta"
                });
            }
        });
    };
    NewVideoFormComponent.prototype.onYoutubeLinkChange = function (val) {
        delete this.sanitizedLink;
        var isYoutube = val.match(/^(https?\:\/\/)?(www\.)?(youtube\.com|youtu\.?be)\/.+$/);
        if (isYoutube) {
            var matches = val.match(/^.*(youtu\.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=)([^#\&\?]*).*/);
            if (matches) {
                this.showLink = true;
                this.link = "https://www.youtube.com/embed/" + matches[2];
                this.youtubeLink = this.sanitize("https://www.youtube.com/embed/" + matches[2]);
            }
            else {
                this.showLink = false;
            }
        }
        else {
            this.showLink = false;
        }
    };
    tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Input"])(),
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:type", Object)
    ], NewVideoFormComponent.prototype, "startupId", void 0);
    tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Input"])(),
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:type", Object)
    ], NewVideoFormComponent.prototype, "detail", void 0);
    NewVideoFormComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
            selector: "app-new-video-form",
            template: __webpack_require__(/*! ./new-video-form.component.html */ "./src/app/modules/dashboard/pages/dashboard-new-startup/new-video-form/new-video-form.component.html"),
            styles: [__webpack_require__(/*! ./new-video-form.component.scss */ "./src/app/modules/dashboard/pages/dashboard-new-startup/new-video-form/new-video-form.component.scss")]
        }),
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [_angular_platform_browser__WEBPACK_IMPORTED_MODULE_2__["DomSanitizer"],
            src_app_modules_shared_services_core_service__WEBPACK_IMPORTED_MODULE_3__["CoreService"],
            src_app_modules_shared_services_notify_service__WEBPACK_IMPORTED_MODULE_4__["NotifyService"],
            _ngx_translate_core__WEBPACK_IMPORTED_MODULE_5__["TranslateService"]])
    ], NewVideoFormComponent);
    return NewVideoFormComponent;
}());



/***/ }),

/***/ "./src/app/modules/dashboard/pages/dashboard-notifications/dashboard-notifications.component.html":
/*!********************************************************************************************************!*\
  !*** ./src/app/modules/dashboard/pages/dashboard-notifications/dashboard-notifications.component.html ***!
  \********************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<section>\n    <div class=\"wrapper\">\n        <ul>\n            <li *ngFor=\"let item of notifications; let i = index\" [ngClass]=\"{'new-notification': notificationsLength !== 0 ? i <= (notificationsLength - 1) : false, 'its-link': item.startup_id}\" (click)=\"navigate(item)\">\n                <p class=\"p i-medium\">{{item.text}}</p>\n                <small class=\"small i-regular grey\">{{item.time}}</small>\n            </li>\n            <!-- <li>\n                <p class=\"p i-medium\">Lorem ipsum Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem\n                    ullam aut, sunt, omnis aperiam optio error doloremque cumque possimus quo quidem nemo id ut et totam\n                    facere temporibus voluptas facilis? dolor sit amet consectetur adipisicing elit. Velit esse expedita\n                    officiis </p> <small class=\"small i-regular grey\">12 deq evvel</small>\n            </li> -->\n        </ul>\n    </div>\n</section>"

/***/ }),

/***/ "./src/app/modules/dashboard/pages/dashboard-notifications/dashboard-notifications.component.scss":
/*!********************************************************************************************************!*\
  !*** ./src/app/modules/dashboard/pages/dashboard-notifications/dashboard-notifications.component.scss ***!
  \********************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "ul {\n  background-color: #FFFFFF;\n  border-radius: 8px;\n  padding: 24px;\n  min-height: 76vh; }\n  ul li {\n    padding: 16px 0px;\n    border-bottom: 1px solid #EDEEF9; }\n  ul li p {\n      line-height: 18px; }\n  ul li small {\n      min-width: 120px;\n      text-align: right; }\n  ul .new-notification {\n    background: #3b44c0;\n    border-radius: 4px;\n    color: #fff;\n    padding-left: 10px; }\n  .its-link {\n  cursor: pointer; }\n\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIi9Vc2Vycy9iL0RvY3VtZW50cy9mcmVlbGFuY2UvaWRlYWxpemVyci1hbmd1bGFyL3NyYy9hcHAvbW9kdWxlcy9kYXNoYm9hcmQvcGFnZXMvZGFzaGJvYXJkLW5vdGlmaWNhdGlvbnMvZGFzaGJvYXJkLW5vdGlmaWNhdGlvbnMuY29tcG9uZW50LnNjc3MiLCIvVXNlcnMvYi9Eb2N1bWVudHMvZnJlZWxhbmNlL2lkZWFsaXplcnItYW5ndWxhci9zcmMvYXNzZXRzL3Njc3MvYWJzdHJhY3RzL192YXJpYWJsZXMuc2NzcyJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFJQTtFQUNJLHlCQ2NXO0VEYlgsa0JDSEk7RURJSixhQUFhO0VBQ2IsZ0JBQWdCLEVBQUE7RUFKcEI7SUFNUSxpQkFBaUI7SUFDakIsZ0NDVVEsRUFBQTtFRGpCaEI7TUFTWSxpQkFBaUIsRUFBQTtFQVQ3QjtNQVlZLGdCQUFnQjtNQUNoQixpQkFBaUIsRUFBQTtFQWI3QjtJQWtCUSxtQkFBbUI7SUFDbkIsa0JBQWtCO0lBQ2xCLFdBQVc7SUFDWCxrQkFBa0IsRUFBQTtFQUcxQjtFQUNJLGVBQWUsRUFBQSIsImZpbGUiOiJzcmMvYXBwL21vZHVsZXMvZGFzaGJvYXJkL3BhZ2VzL2Rhc2hib2FyZC1ub3RpZmljYXRpb25zL2Rhc2hib2FyZC1ub3RpZmljYXRpb25zLmNvbXBvbmVudC5zY3NzIiwic291cmNlc0NvbnRlbnQiOlsiXG5cbkBpbXBvcnQgJ3NyYy9hc3NldHMvc2Nzcy9hYnN0cmFjdHMvdmFyaWFibGVzJztcblxudWx7XG4gICAgYmFja2dyb3VuZC1jb2xvcjogJHdoaXRlO1xuICAgIGJvcmRlci1yYWRpdXM6ICRicjg7XG4gICAgcGFkZGluZzogMjRweDtcbiAgICBtaW4taGVpZ2h0OiA3NnZoO1xuICAgIGxpe1xuICAgICAgICBwYWRkaW5nOiAxNnB4IDBweDtcbiAgICAgICAgYm9yZGVyLWJvdHRvbTogMXB4IHNvbGlkICRicmFuZDA7XG4gICAgICAgIHB7XG4gICAgICAgICAgICBsaW5lLWhlaWdodDogMThweDtcbiAgICAgICAgfVxuICAgICAgICBzbWFsbHtcbiAgICAgICAgICAgIG1pbi13aWR0aDogMTIwcHg7XG4gICAgICAgICAgICB0ZXh0LWFsaWduOiByaWdodDtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIC5uZXctbm90aWZpY2F0aW9uIHtcbiAgICAgICAgYmFja2dyb3VuZDogIzNiNDRjMDtcbiAgICAgICAgYm9yZGVyLXJhZGl1czogNHB4O1xuICAgICAgICBjb2xvcjogI2ZmZjtcbiAgICAgICAgcGFkZGluZy1sZWZ0OiAxMHB4O1xuICAgIH1cbn1cbi5pdHMtbGluayB7XG4gICAgY3Vyc29yOiBwb2ludGVyO1xufSIsIi8vVFJBTlNJVElPTlxuJGJyMjoycHg7XG4kYnI0OjRweDtcbiRicjg6OHB4O1xuXG4vL1RSQU5TSVRJT05cbiR0cmFuc2l0aW9uLTI6IDAuMnMgbGluZWFyO1xuXG4vL0JPWCBTSEFET1dcbiRib3gtc2hhZG93LTE6IDAgN3B4IDE2cHggMCByZ2JhKDAsIDAsIDAsIDAuMDQpO1xuJGJveC1zaGFkb3ctMjogMCAxNnB4IDE2cHggMCByZ2JhKDAsIDAsIDAsIDAuMDYpO1xuJGJveC1zaGFkb3ctMzogMCA2cHggMTJweCAwIHJnYmEoMCwgMCwgMCwgMC4xKTtcbiRib3gtc2hhZG93LTQ6IDRweCA0cHggMTNweCAwIHJnYmEoMCwgMjgsIDUwLCAwLjU4KTtcbiRib3gtc2hhZG93LTU6IDRweCA0cHggMTNweCAwIHJnYmEoMCwgMjgsIDUwLCAwLjA3KTtcblxuXG5cbi8vQ09MT1JTXG4kaW5wdXQ6ICNGOUZBRkU7XG4kd2hpdGU6ICNGRkZGRkY7XG4kYmxhY2s6ICMwMDAwMDA7XG4kYnJhbmQwOiAjRURFRUY5O1xuJGJyYW5kMTogI0E1QUFFMjtcbiRicmFuZDI6ICM5NDk5REM7XG4kYnJhbmQzOiAjODI4OEQ2O1xuJGJyYW5kNDogIzcwNzdEMTtcbiRicmFuZDU6ICM1RTY2Q0I7XG4kYnJhbmQ2OiAjNEM1NUM1O1xuJGJyYW5kNzogIzNCNDVDMDtcbiRncmV5OiAjQjBCN0MzO1xuJHN1Y2Nlc3M6ICMwMENGNjk7XG4kd2FybmluZzogI0ZGQzAwMDtcbiRkYW5nZXI6ICNGRjA0NUI7XG4kdHJhbnNwYXJlbnQ6IHRyYW5zcGFyZW50O1xuJGxpbms6ICMxNjg2Qzk7XG5cblxuLy9GT05UU1xuJGlfYmxhY2sgOiBcImlfYmxhY2tcIjtcbiRpX2JvbGQgOiBcImlfYm9sZFwiO1xuJGlfZXh0cmFfYm9sZCA6IFwiaV9leHRyYV9ib2xkXCI7XG4kaV9leHRyYV9saWdodCA6IFwiaV9leHRyYV9saWdodFwiO1xuJGlfbGlnaHQgOiBcImlfbGlnaHRcIjtcbiRpX21lZGl1bSA6IFwiaV9tZWRpdW1cIjtcbiRpX3JlZ3VsYXIgOiBcImlfcmVndWxhclwiO1xuJGlfc2VtaV9ib2xkIDogXCJpX3NlbWlfYm9sZFwiO1xuJGlfdGhpbiA6IFwiaV90aGluXCI7XG5cblxuLy9GT05UIFNJWkVcbiRoMTozNHB4O1xuJGgyOjI4cHg7XG4kaDM6MjRweDtcbiRoNDoyMHB4O1xuJGg1OjE2cHg7XG4kcDoxNHB4O1xuJGxhYmVsOjEycHg7XG4kc21hbGw6MTBweDtcblxuXG4vL0JPUkRFUlxuJGJvcmRlcjM6IDNweCBzb2xpZCAkYnJhbmQwOyJdfQ== */"

/***/ }),

/***/ "./src/app/modules/dashboard/pages/dashboard-notifications/dashboard-notifications.component.ts":
/*!******************************************************************************************************!*\
  !*** ./src/app/modules/dashboard/pages/dashboard-notifications/dashboard-notifications.component.ts ***!
  \******************************************************************************************************/
/*! exports provided: DashboardNotificationsComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "DashboardNotificationsComponent", function() { return DashboardNotificationsComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var src_app_modules_shared_services_dashboard_service__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! src/app/modules/shared/services/dashboard.service */ "./src/app/modules/shared/services/dashboard.service.ts");
/* harmony import */ var src_app_modules_shared_services_core_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! src/app/modules/shared/services/core.service */ "./src/app/modules/shared/services/core.service.ts");
/* harmony import */ var _ngx_translate_core__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @ngx-translate/core */ "./node_modules/@ngx-translate/core/fesm5/ngx-translate-core.js");
/* harmony import */ var _angular_platform_browser__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @angular/platform-browser */ "./node_modules/@angular/platform-browser/fesm5/platform-browser.js");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm5/router.js");







//======================================================================
var DashboardNotificationsComponent = /** @class */ (function () {
    //======================================================================
    function DashboardNotificationsComponent(DASHBOARD, CORE, _, title, ROUTER) {
        this.DASHBOARD = DASHBOARD;
        this.CORE = CORE;
        this._ = _;
        this.title = title;
        this.ROUTER = ROUTER;
        this.notifications = [];
        this.notificationsLength = 0;
    }
    //======================================================================
    DashboardNotificationsComponent.prototype.navigate = function (item) {
        console.log(item);
        if (item.startup_id) {
            this.ROUTER.navigate(["dashboard/new/startup/" + item.startup_id]);
        }
    };
    DashboardNotificationsComponent.prototype.ngOnInit = function () {
        this.DASHBOARD.title.next(this._.instant("dashboard.notifications"));
        this.title.setTitle("Idealizerr - " + this._.instant('dashboard.notifications'));
        this.getNotifications();
    };
    DashboardNotificationsComponent.prototype.getNotifications = function () {
        var _this = this;
        this.CORE.getNotifications().subscribe(function (data) {
            _this._notifications = _this.CORE.notifications.subscribe(function (data) {
                _this.notifications = data;
                var length = 0;
                data.forEach(function (dt) {
                    if (dt.read === "0") {
                        length++;
                    }
                });
                _this.notificationsLength = length;
            });
            _this.CORE.notifications.next(data.body);
            _this.CORE.readNotifications().subscribe(function (data) {
            });
        });
    };
    DashboardNotificationsComponent.prototype.ngOnDestroy = function () {
        if (this._notifications) {
            this._notifications.unsubscribe();
        }
    };
    DashboardNotificationsComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
            selector: "app-dashboard-notifications",
            template: __webpack_require__(/*! ./dashboard-notifications.component.html */ "./src/app/modules/dashboard/pages/dashboard-notifications/dashboard-notifications.component.html"),
            styles: [__webpack_require__(/*! ./dashboard-notifications.component.scss */ "./src/app/modules/dashboard/pages/dashboard-notifications/dashboard-notifications.component.scss")]
        }) //======================================================================
        ,
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [src_app_modules_shared_services_dashboard_service__WEBPACK_IMPORTED_MODULE_2__["DashboardService"],
            src_app_modules_shared_services_core_service__WEBPACK_IMPORTED_MODULE_3__["CoreService"],
            _ngx_translate_core__WEBPACK_IMPORTED_MODULE_4__["TranslateService"],
            _angular_platform_browser__WEBPACK_IMPORTED_MODULE_5__["Title"],
            _angular_router__WEBPACK_IMPORTED_MODULE_6__["Router"]])
    ], DashboardNotificationsComponent);
    return DashboardNotificationsComponent;
}()); //======================================================================



/***/ }),

/***/ "./src/app/modules/dashboard/pages/dashboard-settings/dashboard-settings.component.html":
/*!**********************************************************************************************!*\
  !*** ./src/app/modules/dashboard/pages/dashboard-settings/dashboard-settings.component.html ***!
  \**********************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<section>\n    <div class=\"wrapper\">\n        <div class=\"row\">\n            <div class=\"col-md-6 col-12\">\n                <div *ngIf=\"user\"\n                     class=\"pb-32px\">\n                    <dashboard-settings-profile-information [user]=\"user\"></dashboard-settings-profile-information>\n                </div>\n                <div class=\"pb-32px\">\n                    <dashboard-settings-profile-mobile-number-form [user]=\"user\">\n                    </dashboard-settings-profile-mobile-number-form>\n                </div>\n                <div class=\"pb-32px\">\n                    <dashboard-settings-profile-email-form [user]=\"user\"></dashboard-settings-profile-email-form>\n                </div>\n            </div>\n            <div class=\"col-md-6 col-12\">\n                <div class=\"pb-32px\">\n                    <dashbaord-settings-profile-information-form [user]=\"user\">\n                    </dashbaord-settings-profile-information-form>\n                </div>\n                <div class=\"pb-32px\">\n                    <dashboard-settings-profile-password-form [user]=\"user\"></dashboard-settings-profile-password-form>\n                </div>\n\n            </div>\n        </div>\n    </div>\n</section>"

/***/ }),

/***/ "./src/app/modules/dashboard/pages/dashboard-settings/dashboard-settings.component.scss":
/*!**********************************************************************************************!*\
  !*** ./src/app/modules/dashboard/pages/dashboard-settings/dashboard-settings.component.scss ***!
  \**********************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IiIsImZpbGUiOiJzcmMvYXBwL21vZHVsZXMvZGFzaGJvYXJkL3BhZ2VzL2Rhc2hib2FyZC1zZXR0aW5ncy9kYXNoYm9hcmQtc2V0dGluZ3MuY29tcG9uZW50LnNjc3MifQ== */"

/***/ }),

/***/ "./src/app/modules/dashboard/pages/dashboard-settings/dashboard-settings.component.ts":
/*!********************************************************************************************!*\
  !*** ./src/app/modules/dashboard/pages/dashboard-settings/dashboard-settings.component.ts ***!
  \********************************************************************************************/
/*! exports provided: DashboardSettingsComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "DashboardSettingsComponent", function() { return DashboardSettingsComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var src_app_modules_shared_services_auth_service__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! src/app/modules/shared/services/auth.service */ "./src/app/modules/shared/services/auth.service.ts");
/* harmony import */ var src_app_modules_shared_services_utils_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! src/app/modules/shared/services/utils.service */ "./src/app/modules/shared/services/utils.service.ts");
/* harmony import */ var src_app_modules_shared_services_dashboard_service__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! src/app/modules/shared/services/dashboard.service */ "./src/app/modules/shared/services/dashboard.service.ts");
/* harmony import */ var _ngx_translate_core__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @ngx-translate/core */ "./node_modules/@ngx-translate/core/fesm5/ngx-translate-core.js");
/* harmony import */ var _angular_platform_browser__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! @angular/platform-browser */ "./node_modules/@angular/platform-browser/fesm5/platform-browser.js");







//======================================================================
var DashboardSettingsComponent = /** @class */ (function () {
    //======================================================================
    function DashboardSettingsComponent(AUTH, DASHBOARD, _, title) {
        this.AUTH = AUTH;
        this.DASHBOARD = DASHBOARD;
        this._ = _;
        this.title = title;
        this.subsUser();
    }
    //======================================================================
    DashboardSettingsComponent.prototype.ngOnInit = function () {
        this.DASHBOARD.title.next(this._.instant("dashboard.settings"));
        this.title.setTitle("Idealizerr - " + this._.instant('dashboard.settings'));
    };
    //======================================================================
    DashboardSettingsComponent.prototype.ngOnDestroy = function () {
        this.subs_user.unsubscribe();
    };
    DashboardSettingsComponent.prototype.subsUser = function () {
        var _this = this;
        this.subs_user = this.AUTH.user.subscribe(function (user) {
            if (!Object(src_app_modules_shared_services_utils_service__WEBPACK_IMPORTED_MODULE_3__["objectIsNull"])(user)) {
                _this.user = user;
            }
        });
    };
    DashboardSettingsComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
            selector: "app-dashboard-settings",
            template: __webpack_require__(/*! ./dashboard-settings.component.html */ "./src/app/modules/dashboard/pages/dashboard-settings/dashboard-settings.component.html"),
            styles: [__webpack_require__(/*! ./dashboard-settings.component.scss */ "./src/app/modules/dashboard/pages/dashboard-settings/dashboard-settings.component.scss")]
        }) //======================================================================
        ,
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [src_app_modules_shared_services_auth_service__WEBPACK_IMPORTED_MODULE_2__["AuthService"],
            src_app_modules_shared_services_dashboard_service__WEBPACK_IMPORTED_MODULE_4__["DashboardService"],
            _ngx_translate_core__WEBPACK_IMPORTED_MODULE_5__["TranslateService"],
            _angular_platform_browser__WEBPACK_IMPORTED_MODULE_6__["Title"]])
    ], DashboardSettingsComponent);
    return DashboardSettingsComponent;
}()); //======================================================================



/***/ }),

/***/ "./src/app/modules/dashboard/pages/dashboard-settings/profile-email-form/profile-email-form.component.html":
/*!*****************************************************************************************************************!*\
  !*** ./src/app/modules/dashboard/pages/dashboard-settings/profile-email-form/profile-email-form.component.html ***!
  \*****************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<div class=\"whitebox\">\n  <h4 class=\"h4 i-semi-bold grey pb-40px\">{{\"global.your-email\" | translate}}</h4>\n\n\n  <div>\n    <form [formGroup]='form'\n          autocomplete='on'\n          validate\n          (keyup.enter)='submitForm()'>\n\n\n      <!-- NAME ================================================================================ -->\n      <div class=\"row\">\n        <div class=\"col-12\">\n          <div class=\"input-holder pb-24px\">\n            <label for=\"email\">{{\"global.email\" | translate}}</label>\n            <div class=\"input right-icon\">\n              <input type='email'\n                     name='email'\n                     placeholder='{{\"global.your-email\" | translate}}'\n                     disabled\n                     formControlName='email'\n                     id='email'>\n            </div>\n            <ul>\n              <li *ngIf=\"form.controls['email'].hasError('email') && form.controls['email'].touched\">\n                {{\"global.correct-email\" | translate}}</li>\n              <li *ngIf=\"form.controls['email'].hasError('required') && form.controls['email'].touched\">\n                {{\"global.requiredField\" | translate}}</li>\n            </ul>\n          </div>\n        </div>\n      </div>\n      <!-- ================================================================================ COMMENT -->\n\n    </form>\n  </div>\n\n\n</div>"

/***/ }),

/***/ "./src/app/modules/dashboard/pages/dashboard-settings/profile-email-form/profile-email-form.component.scss":
/*!*****************************************************************************************************************!*\
  !*** ./src/app/modules/dashboard/pages/dashboard-settings/profile-email-form/profile-email-form.component.scss ***!
  \*****************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IiIsImZpbGUiOiJzcmMvYXBwL21vZHVsZXMvZGFzaGJvYXJkL3BhZ2VzL2Rhc2hib2FyZC1zZXR0aW5ncy9wcm9maWxlLWVtYWlsLWZvcm0vcHJvZmlsZS1lbWFpbC1mb3JtLmNvbXBvbmVudC5zY3NzIn0= */"

/***/ }),

/***/ "./src/app/modules/dashboard/pages/dashboard-settings/profile-email-form/profile-email-form.component.ts":
/*!***************************************************************************************************************!*\
  !*** ./src/app/modules/dashboard/pages/dashboard-settings/profile-email-form/profile-email-form.component.ts ***!
  \***************************************************************************************************************/
/*! exports provided: ProfileEmailFormComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ProfileEmailFormComponent", function() { return ProfileEmailFormComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/fesm5/forms.js");



//======================================================================
var ProfileEmailFormComponent = /** @class */ (function () {
    //======================================================================
    function ProfileEmailFormComponent(FORM) {
        this.FORM = FORM;
        this.buildForm();
    }
    //======================================================================
    ProfileEmailFormComponent.prototype.ngOnInit = function () { };
    //======================================================================
    ProfileEmailFormComponent.prototype.ngOnChanges = function (changes) {
        if (this.user) {
            this.form.controls["email"].setValue(this.user.email);
        }
    };
    ProfileEmailFormComponent.prototype.buildForm = function () {
        this.form = this.FORM.group({
            email: [null, [_angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].required, _angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].email]]
        });
    };
    //======================================================================
    ProfileEmailFormComponent.prototype.submitForm = function () {
    };
    tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Input"])("user"),
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:type", Object)
    ], ProfileEmailFormComponent.prototype, "user", void 0);
    ProfileEmailFormComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
            selector: 'dashboard-settings-profile-email-form',
            template: __webpack_require__(/*! ./profile-email-form.component.html */ "./src/app/modules/dashboard/pages/dashboard-settings/profile-email-form/profile-email-form.component.html"),
            styles: [__webpack_require__(/*! ./profile-email-form.component.scss */ "./src/app/modules/dashboard/pages/dashboard-settings/profile-email-form/profile-email-form.component.scss")]
        }) //======================================================================
        ,
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [_angular_forms__WEBPACK_IMPORTED_MODULE_2__["FormBuilder"]])
    ], ProfileEmailFormComponent);
    return ProfileEmailFormComponent;
}()); //======================================================================



/***/ }),

/***/ "./src/app/modules/dashboard/pages/dashboard-settings/profile-information-form/profile-information-form.component.html":
/*!*****************************************************************************************************************************!*\
  !*** ./src/app/modules/dashboard/pages/dashboard-settings/profile-information-form/profile-information-form.component.html ***!
  \*****************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<div class=\"whitebox\">\n  <h4 class=\"h4 i-semi-bold grey pb-40px\">{{\"dashboard.profile-info\" | translate}}</h4>\n\n\n  <div>\n    <form [formGroup]='form'\n          autocomplete='on'\n          validate\n          (keyup.enter)='submitForm()'>\n\n\n      <!-- NAME ================================================================================ -->\n      <div class=\"row\">\n        <div class=\"col-12\">\n          <div class=\"input-holder pb-24px\">\n            <label for=\"name\">{{\"global.name\" | translate}}</label>\n            <div class=\"input\">\n              <input type='text'\n                     name='name'\n                     placeholder='{{\"global.yourname\" | translate}}'\n                     formControlName='name'\n                     id='name'>\n            </div>\n            <ul>\n              <li *ngIf=\"form.controls['name'].hasError('required') && form.controls['name'].touched\">\n                {{\"global.requiredField\" | translate}}\n              </li>\n            </ul>\n          </div>\n        </div>\n      </div>\n      <!-- ================================================================================ COMMENT -->\n\n\n      <!-- COMMENT ================================================================================ -->\n      <!-- 1 -->\n      <div class=\"row\">\n        <div class=\"col-12\">\n          <div class=\"input-holder pb-24px\">\n            <label for=\"surname\">{{\"global.lastname\" | translate}}</label>\n            <div class=\"input\">\n              <input type='text'\n                     name='surname'\n                     placeholder='{{\"global.yourlastname\" | translate}}'\n                     formControlName='surname'\n                     id='surname'>\n            </div>\n            <ul>\n              <li *ngIf=\"form.controls['surname'].hasError('required') && form.controls['surname'].touched\">\n                {{\"global.requiredField\" | translate}}\n              </li>\n            </ul>\n          </div>\n        </div>\n      </div>\n      <!-- ================================================================================ COMMENT -->\n\n\n      <!-- COMMENT ================================================================================ -->\n      <div class=\"row\">\n        <div class=\"col-12\">\n          <div class=\"select-holder pb-32px\">\n            <ui-select label=\"{{'dashboard.sex' | translate}}\"\n                       placeholder=\"{{'dashboard.select-sex' | translate}}\"\n                       [options]=\"gender_options\"\n                       [selected]=\"user_gender_option\"\n                       (value)=\"genderSelectChange($event)\"></ui-select>\n            <input type='text'\n                   name='gender'\n                   formControlName='gender'\n                   id='gender'\n                   class=\"display-none\">\n          </div>\n        </div>\n      </div>\n      <!-- ================================================================================ COMMENT -->\n\n\n\n      <!-- COMMENT ================================================================================ -->\n      <div class=\"row\">\n        <div class=\"col-12\">\n          <div class=\"datepicker-holder\">\n            <ui-datepicker name=\"birthday\"\n                           label=\"{{'dashboard.birthday' | translate}}\"\n                           [value]=\"user_birthday\"\n                           [end]=\"datepicker_end_date\"\n                           (value)=\"datepickerValueChange($event)\"></ui-datepicker>\n            <input type='text'\n                   name='birthday'\n                   formControlName='birthday'\n                   id='birthday'\n                   class=\"display-none\">\n          </div>\n        </div>\n      </div>\n      <!-- ================================================================================ COMMENT -->\n\n\n    </form>\n  </div>\n\n\n  <a (click)=\"submitForm()\"\n     *ngIf=\"form_value_changed\"\n     class=\"dashboard-form-submit-btn\">{{\"global.refresh\" | translate}}</a>\n</div>"

/***/ }),

/***/ "./src/app/modules/dashboard/pages/dashboard-settings/profile-information-form/profile-information-form.component.scss":
/*!*****************************************************************************************************************************!*\
  !*** ./src/app/modules/dashboard/pages/dashboard-settings/profile-information-form/profile-information-form.component.scss ***!
  \*****************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = ".whitebox {\n  padding-bottom: 64px;\n  position: relative; }\n  @media (max-width: 768px) {\n    .whitebox {\n      margin-top: 20px; } }\n\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIi9Vc2Vycy9iL0RvY3VtZW50cy9mcmVlbGFuY2UvaWRlYWxpemVyci1hbmd1bGFyL3NyYy9hcHAvbW9kdWxlcy9kYXNoYm9hcmQvcGFnZXMvZGFzaGJvYXJkLXNldHRpbmdzL3Byb2ZpbGUtaW5mb3JtYXRpb24tZm9ybS9wcm9maWxlLWluZm9ybWF0aW9uLWZvcm0uY29tcG9uZW50LnNjc3MiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBRUE7RUFDSSxvQkFBb0I7RUFDcEIsa0JBQWtCLEVBQUE7RUFFbEI7SUFKSjtNQUtRLGdCQUFnQixFQUFBLEVBRXZCIiwiZmlsZSI6InNyYy9hcHAvbW9kdWxlcy9kYXNoYm9hcmQvcGFnZXMvZGFzaGJvYXJkLXNldHRpbmdzL3Byb2ZpbGUtaW5mb3JtYXRpb24tZm9ybS9wcm9maWxlLWluZm9ybWF0aW9uLWZvcm0uY29tcG9uZW50LnNjc3MiLCJzb3VyY2VzQ29udGVudCI6WyJAaW1wb3J0ICdzcmMvYXNzZXRzL3Njc3MvYWJzdHJhY3RzL3ZhcmlhYmxlcyc7XG5cbi53aGl0ZWJveCB7XG4gICAgcGFkZGluZy1ib3R0b206IDY0cHg7XG4gICAgcG9zaXRpb246IHJlbGF0aXZlO1xuXG4gICAgQG1lZGlhKG1heC13aWR0aDogNzY4cHgpIHtcbiAgICAgICAgbWFyZ2luLXRvcDogMjBweDtcbiAgICB9XG59Il19 */"

/***/ }),

/***/ "./src/app/modules/dashboard/pages/dashboard-settings/profile-information-form/profile-information-form.component.ts":
/*!***************************************************************************************************************************!*\
  !*** ./src/app/modules/dashboard/pages/dashboard-settings/profile-information-form/profile-information-form.component.ts ***!
  \***************************************************************************************************************************/
/*! exports provided: ProfileInformationFormComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ProfileInformationFormComponent", function() { return ProfileInformationFormComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/fesm5/forms.js");
/* harmony import */ var src_environments_variables__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! src/environments/variables */ "./src/environments/variables.ts");
/* harmony import */ var src_app_modules_shared_services_auth_service__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! src/app/modules/shared/services/auth.service */ "./src/app/modules/shared/services/auth.service.ts");
/* harmony import */ var src_app_modules_shared_services_notify_service__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! src/app/modules/shared/services/notify.service */ "./src/app/modules/shared/services/notify.service.ts");
/* harmony import */ var _ngx_translate_core__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! @ngx-translate/core */ "./node_modules/@ngx-translate/core/fesm5/ngx-translate-core.js");







//======================================================================
var ProfileInformationFormComponent = /** @class */ (function () {
    //======================================================================
    function ProfileInformationFormComponent(FORM, AUTH, NOTIFY, _) {
        this.FORM = FORM;
        this.AUTH = AUTH;
        this.NOTIFY = NOTIFY;
        this._ = _;
        //======================================================================
        this.datepicker_end_date = new Date();
        this.form_value_changed = false;
        this.gender_options = src_environments_variables__WEBPACK_IMPORTED_MODULE_3__["variables"].select.gender_options;
        this.buildForm();
    }
    //======================================================================
    ProfileInformationFormComponent.prototype.ngOnInit = function () { };
    //======================================================================
    ProfileInformationFormComponent.prototype.ngOnChanges = function (changes) {
        if (this.user) {
            this.form.controls["name"].setValue(this.user.name);
            this.form.controls["surname"].setValue(this.user.surname);
            if (this.user.user_gender) {
                for (var i = 0; i < this.gender_options.length; i++) {
                    if (this.gender_options[i].value == this.user.user_gender) {
                        this.user_gender_option = this.gender_options[i];
                        this.form.controls["gender"].setValue(this.user_gender_option.value);
                    }
                }
            }
            if (this.user.user_birthday) {
                if (this.user.user_birthday > 0) {
                    this.user_birthday = new Date(this.user.user_birthday * 1000);
                }
                else {
                    this.user_birthday = new Date(this.user.user_birthday);
                }
                this.form.controls["birthday"].setValue(this.user.user_birthday);
            }
        }
    };
    //======================================================================
    ProfileInformationFormComponent.prototype.ngOnDestroy = function () {
        this.subs_form_value.unsubscribe();
    };
    ProfileInformationFormComponent.prototype.buildForm = function () {
        this.form = this.FORM.group({
            name: [null, [_angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].required]],
            surname: [null, [_angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].required]],
            gender: [null, []],
            birthday: [null, []]
        });
        this.changesDedected();
    };
    //======================================================================
    ProfileInformationFormComponent.prototype.submitForm = function () {
        var _this = this;
        if (this.form.valid) {
            var info = {};
            info["name"] = this.form.controls["name"].value;
            info["surname"] = this.form.controls["surname"].value;
            info["birthday"] = this.form.controls["birthday"].value;
            info["gender"] = this.form.controls["gender"].value;
            this.AUTH.updateUserInfo(info).subscribe(function (RESPONSE) {
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
                    _this.getUser();
                    _this.form_value_changed = false;
                    _this.NOTIFY.setNotification({
                        status: "success",
                        text: _this._.instant("dashboard.info-renew-success")
                    });
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
                        text: _this._.instant("dashboard.info-renew-error")
                    });
                }
            });
        }
    };
    //======================================================================
    ProfileInformationFormComponent.prototype.getUser = function () {
        var _this = this;
        this.AUTH.getUserInfo().subscribe(function (RESPONSE) {
            _this.AUTH.setUser(RESPONSE.body);
        }, function (ERROR) { });
    };
    //======================================================================
    ProfileInformationFormComponent.prototype.genderSelectChange = function (option) {
        this.user_gender_option = option;
        this.form.controls["gender"].setValue(option.value);
    };
    ProfileInformationFormComponent.prototype.datepickerValueChange = function (value) {
        this.user_birthday = value;
        if (((value.getTime() / 1000) | 0) > 0) {
            this.form.controls["birthday"].setValue((value.getTime() / 1000) | 0);
        }
        else {
            this.form.controls["birthday"].setValue(value.getTime());
        }
    };
    ProfileInformationFormComponent.prototype.changesDedected = function () {
        var _this = this;
        this.subs_form_value = this.form.valueChanges.subscribe(function (value) {
            if (_this.user.name != _this.form.controls["name"].value ||
                _this.user.surname != _this.form.controls["surname"].value ||
                _this.user.user_birthday != _this.form.controls["birthday"].value ||
                _this.user.user_gender != _this.form.controls["gender"].value) {
                _this.form_value_changed = true;
            }
            else {
                _this.form_value_changed = false;
            }
        });
    };
    tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Input"])("user"),
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:type", Object)
    ], ProfileInformationFormComponent.prototype, "user", void 0);
    ProfileInformationFormComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
            selector: "dashbaord-settings-profile-information-form",
            template: __webpack_require__(/*! ./profile-information-form.component.html */ "./src/app/modules/dashboard/pages/dashboard-settings/profile-information-form/profile-information-form.component.html"),
            styles: [__webpack_require__(/*! ./profile-information-form.component.scss */ "./src/app/modules/dashboard/pages/dashboard-settings/profile-information-form/profile-information-form.component.scss")]
        }) //=====================================================================
        ,
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [_angular_forms__WEBPACK_IMPORTED_MODULE_2__["FormBuilder"],
            src_app_modules_shared_services_auth_service__WEBPACK_IMPORTED_MODULE_4__["AuthService"],
            src_app_modules_shared_services_notify_service__WEBPACK_IMPORTED_MODULE_5__["NotifyService"],
            _ngx_translate_core__WEBPACK_IMPORTED_MODULE_6__["TranslateService"]])
    ], ProfileInformationFormComponent);
    return ProfileInformationFormComponent;
}()); //======================================================================



/***/ }),

/***/ "./src/app/modules/dashboard/pages/dashboard-settings/profile-information/profile-information.component.html":
/*!*******************************************************************************************************************!*\
  !*** ./src/app/modules/dashboard/pages/dashboard-settings/profile-information/profile-information.component.html ***!
  \*******************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<div class=\"information\">\n  <div class=\"image\">\n    <img [src]=\"user.user_file\">\n    <label for=\"user_avatar\">\n      <i class=\"mdi mdi-pencil\"></i>\n    </label>\n    <input type=\"file\" (change)=\"avatarUpload($event)\" id=\"user_avatar\" class=\"d-none\">\n  </div>\n  <h3 class=\"h3 i-medium pt-32px\">{{user.name}} {{user.surname}}</h3>\n  <p class=\"h5 i-light pt-16px\">{{user.email}}</p>\n</div>"

/***/ }),

/***/ "./src/app/modules/dashboard/pages/dashboard-settings/profile-information/profile-information.component.scss":
/*!*******************************************************************************************************************!*\
  !*** ./src/app/modules/dashboard/pages/dashboard-settings/profile-information/profile-information.component.scss ***!
  \*******************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = ".information {\n  display: -webkit-box;\n  display: flex;\n  -webkit-box-orient: vertical;\n  -webkit-box-direction: normal;\n          flex-direction: column;\n  -webkit-box-align: center;\n          align-items: center;\n  -webkit-box-pack: start;\n          justify-content: flex-start; }\n\n.image {\n  position: relative; }\n\n.image img {\n    width: 180px;\n    height: 180px;\n    border-radius: 50%;\n    -o-object-fit: cover;\n       object-fit: cover; }\n\n.image label {\n    position: absolute;\n    bottom: 0px;\n    right: 0px;\n    width: 50px;\n    height: 50px;\n    background-color: #FFFFFF;\n    border-radius: 50%;\n    display: -webkit-box;\n    display: flex;\n    -webkit-box-align: center;\n            align-items: center;\n    -webkit-box-pack: center;\n            justify-content: center; }\n\n.image label i {\n      font-size: 24px;\n      color: #3B45C0; }\n\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIi9Vc2Vycy9iL0RvY3VtZW50cy9mcmVlbGFuY2UvaWRlYWxpemVyci1hbmd1bGFyL3NyYy9hcHAvbW9kdWxlcy9kYXNoYm9hcmQvcGFnZXMvZGFzaGJvYXJkLXNldHRpbmdzL3Byb2ZpbGUtaW5mb3JtYXRpb24vcHJvZmlsZS1pbmZvcm1hdGlvbi5jb21wb25lbnQuc2NzcyIsIi9Vc2Vycy9iL0RvY3VtZW50cy9mcmVlbGFuY2UvaWRlYWxpemVyci1hbmd1bGFyL3NyYy9hc3NldHMvc2Nzcy9hYnN0cmFjdHMvX3ZhcmlhYmxlcy5zY3NzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUVBO0VBQ0ksb0JBQWE7RUFBYixhQUFhO0VBQ2IsNEJBQXNCO0VBQXRCLDZCQUFzQjtVQUF0QixzQkFBc0I7RUFDdEIseUJBQW1CO1VBQW5CLG1CQUFtQjtFQUNuQix1QkFBMkI7VUFBM0IsMkJBQTJCLEVBQUE7O0FBRS9CO0VBQ0ksa0JBQWtCLEVBQUE7O0FBRHRCO0lBR1EsWUFBWTtJQUNaLGFBQWE7SUFDYixrQkFBa0I7SUFDbEIsb0JBQWlCO09BQWpCLGlCQUFpQixFQUFBOztBQU56QjtJQVNRLGtCQUFrQjtJQUNsQixXQUFXO0lBQ1gsVUFBVTtJQUNWLFdBQVU7SUFDVixZQUFZO0lBQ1oseUJDSE87SURJUCxrQkFBa0I7SUFDbEIsb0JBQWE7SUFBYixhQUFhO0lBQ2IseUJBQW1CO1lBQW5CLG1CQUFtQjtJQUNuQix3QkFBdUI7WUFBdkIsdUJBQXVCLEVBQUE7O0FBbEIvQjtNQW9CWSxlQUFlO01BQ2YsY0NESSxFQUFBIiwiZmlsZSI6InNyYy9hcHAvbW9kdWxlcy9kYXNoYm9hcmQvcGFnZXMvZGFzaGJvYXJkLXNldHRpbmdzL3Byb2ZpbGUtaW5mb3JtYXRpb24vcHJvZmlsZS1pbmZvcm1hdGlvbi5jb21wb25lbnQuc2NzcyIsInNvdXJjZXNDb250ZW50IjpbIkBpbXBvcnQgJ3NyYy9hc3NldHMvc2Nzcy9hYnN0cmFjdHMvdmFyaWFibGVzJztcblxuLmluZm9ybWF0aW9ue1xuICAgIGRpc3BsYXk6IGZsZXg7XG4gICAgZmxleC1kaXJlY3Rpb246IGNvbHVtbjtcbiAgICBhbGlnbi1pdGVtczogY2VudGVyO1xuICAgIGp1c3RpZnktY29udGVudDogZmxleC1zdGFydDtcbn1cbi5pbWFnZXtcbiAgICBwb3NpdGlvbjogcmVsYXRpdmU7XG4gICAgaW1ne1xuICAgICAgICB3aWR0aDogMTgwcHg7XG4gICAgICAgIGhlaWdodDogMTgwcHg7XG4gICAgICAgIGJvcmRlci1yYWRpdXM6IDUwJTtcbiAgICAgICAgb2JqZWN0LWZpdDogY292ZXI7XG4gICAgfVxuICAgIGxhYmVse1xuICAgICAgICBwb3NpdGlvbjogYWJzb2x1dGU7XG4gICAgICAgIGJvdHRvbTogMHB4O1xuICAgICAgICByaWdodDogMHB4O1xuICAgICAgICB3aWR0aDo1MHB4O1xuICAgICAgICBoZWlnaHQ6IDUwcHg7XG4gICAgICAgIGJhY2tncm91bmQtY29sb3I6ICR3aGl0ZTtcbiAgICAgICAgYm9yZGVyLXJhZGl1czogNTAlO1xuICAgICAgICBkaXNwbGF5OiBmbGV4O1xuICAgICAgICBhbGlnbi1pdGVtczogY2VudGVyO1xuICAgICAgICBqdXN0aWZ5LWNvbnRlbnQ6IGNlbnRlcjtcbiAgICAgICAgaXtcbiAgICAgICAgICAgIGZvbnQtc2l6ZTogMjRweDtcbiAgICAgICAgICAgIGNvbG9yOiAkYnJhbmQ3O1xuICAgICAgICB9XG4gICAgfVxufSIsIi8vVFJBTlNJVElPTlxuJGJyMjoycHg7XG4kYnI0OjRweDtcbiRicjg6OHB4O1xuXG4vL1RSQU5TSVRJT05cbiR0cmFuc2l0aW9uLTI6IDAuMnMgbGluZWFyO1xuXG4vL0JPWCBTSEFET1dcbiRib3gtc2hhZG93LTE6IDAgN3B4IDE2cHggMCByZ2JhKDAsIDAsIDAsIDAuMDQpO1xuJGJveC1zaGFkb3ctMjogMCAxNnB4IDE2cHggMCByZ2JhKDAsIDAsIDAsIDAuMDYpO1xuJGJveC1zaGFkb3ctMzogMCA2cHggMTJweCAwIHJnYmEoMCwgMCwgMCwgMC4xKTtcbiRib3gtc2hhZG93LTQ6IDRweCA0cHggMTNweCAwIHJnYmEoMCwgMjgsIDUwLCAwLjU4KTtcbiRib3gtc2hhZG93LTU6IDRweCA0cHggMTNweCAwIHJnYmEoMCwgMjgsIDUwLCAwLjA3KTtcblxuXG5cbi8vQ09MT1JTXG4kaW5wdXQ6ICNGOUZBRkU7XG4kd2hpdGU6ICNGRkZGRkY7XG4kYmxhY2s6ICMwMDAwMDA7XG4kYnJhbmQwOiAjRURFRUY5O1xuJGJyYW5kMTogI0E1QUFFMjtcbiRicmFuZDI6ICM5NDk5REM7XG4kYnJhbmQzOiAjODI4OEQ2O1xuJGJyYW5kNDogIzcwNzdEMTtcbiRicmFuZDU6ICM1RTY2Q0I7XG4kYnJhbmQ2OiAjNEM1NUM1O1xuJGJyYW5kNzogIzNCNDVDMDtcbiRncmV5OiAjQjBCN0MzO1xuJHN1Y2Nlc3M6ICMwMENGNjk7XG4kd2FybmluZzogI0ZGQzAwMDtcbiRkYW5nZXI6ICNGRjA0NUI7XG4kdHJhbnNwYXJlbnQ6IHRyYW5zcGFyZW50O1xuJGxpbms6ICMxNjg2Qzk7XG5cblxuLy9GT05UU1xuJGlfYmxhY2sgOiBcImlfYmxhY2tcIjtcbiRpX2JvbGQgOiBcImlfYm9sZFwiO1xuJGlfZXh0cmFfYm9sZCA6IFwiaV9leHRyYV9ib2xkXCI7XG4kaV9leHRyYV9saWdodCA6IFwiaV9leHRyYV9saWdodFwiO1xuJGlfbGlnaHQgOiBcImlfbGlnaHRcIjtcbiRpX21lZGl1bSA6IFwiaV9tZWRpdW1cIjtcbiRpX3JlZ3VsYXIgOiBcImlfcmVndWxhclwiO1xuJGlfc2VtaV9ib2xkIDogXCJpX3NlbWlfYm9sZFwiO1xuJGlfdGhpbiA6IFwiaV90aGluXCI7XG5cblxuLy9GT05UIFNJWkVcbiRoMTozNHB4O1xuJGgyOjI4cHg7XG4kaDM6MjRweDtcbiRoNDoyMHB4O1xuJGg1OjE2cHg7XG4kcDoxNHB4O1xuJGxhYmVsOjEycHg7XG4kc21hbGw6MTBweDtcblxuXG4vL0JPUkRFUlxuJGJvcmRlcjM6IDNweCBzb2xpZCAkYnJhbmQwOyJdfQ== */"

/***/ }),

/***/ "./src/app/modules/dashboard/pages/dashboard-settings/profile-information/profile-information.component.ts":
/*!*****************************************************************************************************************!*\
  !*** ./src/app/modules/dashboard/pages/dashboard-settings/profile-information/profile-information.component.ts ***!
  \*****************************************************************************************************************/
/*! exports provided: ProfileInformationComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ProfileInformationComponent", function() { return ProfileInformationComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var src_app_modules_shared_services_auth_service__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! src/app/modules/shared/services/auth.service */ "./src/app/modules/shared/services/auth.service.ts");
/* harmony import */ var src_app_modules_shared_services_notify_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! src/app/modules/shared/services/notify.service */ "./src/app/modules/shared/services/notify.service.ts");
/* harmony import */ var _ngx_translate_core__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @ngx-translate/core */ "./node_modules/@ngx-translate/core/fesm5/ngx-translate-core.js");





//======================================================================
var ProfileInformationComponent = /** @class */ (function () {
    //======================================================================
    function ProfileInformationComponent(AUTH, NOTIFY, _) {
        this.AUTH = AUTH;
        this.NOTIFY = NOTIFY;
        this._ = _;
    }
    //======================================================================
    ProfileInformationComponent.prototype.ngOnInit = function () { };
    //======================================================================
    ProfileInformationComponent.prototype.avatarUpload = function (e) {
        var _this = this;
        var input = e.target;
        var formdata = new FormData();
        formdata.append("image", input.files[0], input.files[0].name);
        formdata.append("api_key", "abcd");
        this.AUTH.upoadUserPhoto(formdata).subscribe(function (RESPONSE) {
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
                _this.getUserInfo();
                _this.NOTIFY.setNotification({
                    status: "success",
                    text: _this._.instant("dashboard.profile-image-success")
                });
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
                    text: _this._.instant("dashboard.profile-image-error")
                });
            }
        });
    };
    //======================================================================
    ProfileInformationComponent.prototype.getUserInfo = function () {
        var _this = this;
        this.AUTH.getUserInfo().subscribe(function (RESPONSE) {
            _this.AUTH.setUser(RESPONSE.body);
        }, function (ERROR) { });
    };
    tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Input"])("user"),
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:type", Object)
    ], ProfileInformationComponent.prototype, "user", void 0);
    ProfileInformationComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
            selector: "dashboard-settings-profile-information",
            template: __webpack_require__(/*! ./profile-information.component.html */ "./src/app/modules/dashboard/pages/dashboard-settings/profile-information/profile-information.component.html"),
            styles: [__webpack_require__(/*! ./profile-information.component.scss */ "./src/app/modules/dashboard/pages/dashboard-settings/profile-information/profile-information.component.scss")]
        }) //======================================================================
        ,
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [src_app_modules_shared_services_auth_service__WEBPACK_IMPORTED_MODULE_2__["AuthService"],
            src_app_modules_shared_services_notify_service__WEBPACK_IMPORTED_MODULE_3__["NotifyService"],
            _ngx_translate_core__WEBPACK_IMPORTED_MODULE_4__["TranslateService"]])
    ], ProfileInformationComponent);
    return ProfileInformationComponent;
}()); //======================================================================



/***/ }),

/***/ "./src/app/modules/dashboard/pages/dashboard-settings/profile-mobile-number-form/profile-mobile-number-form.component.html":
/*!*********************************************************************************************************************************!*\
  !*** ./src/app/modules/dashboard/pages/dashboard-settings/profile-mobile-number-form/profile-mobile-number-form.component.html ***!
  \*********************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<div class=\"whitebox\">\n  <h4 class=\"h4 i-semi-bold grey pb-40px\">{{\"global.mobilephone\" | translate}}</h4>\n\n\n  <div>\n    <div class=\"holder\"\n         *ngIf=\"user\">\n      <ngx-ea-intl-tel-input label=\"{{'global.mobilephone' | translate}}\"\n                             [value]=\"user.user_phone ? user.user_phone : null\"\n                             [hideCountriesDialCodeList]=\"[]\"\n                             [placeholder]=\"'global.yournumber' | translate\"\n                             [searchPlaceholder]=\"'home.search' | translate\"\n                             (value)=\"mobileNumberInputChange($event)\"></ngx-ea-intl-tel-input>\n    </div>\n  </div>\n\n  <a (click)=\"submitForm()\"\n     *ngIf=\"form_value_changed\"\n     class=\"dashboard-form-submit-btn\">{{\"global.refresh\" | translate}}</a>\n\n</div>"

/***/ }),

/***/ "./src/app/modules/dashboard/pages/dashboard-settings/profile-mobile-number-form/profile-mobile-number-form.component.scss":
/*!*********************************************************************************************************************************!*\
  !*** ./src/app/modules/dashboard/pages/dashboard-settings/profile-mobile-number-form/profile-mobile-number-form.component.scss ***!
  \*********************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = ".whitebox {\n  padding-bottom: 64px;\n  position: relative; }\n\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIi9Vc2Vycy9iL0RvY3VtZW50cy9mcmVlbGFuY2UvaWRlYWxpemVyci1hbmd1bGFyL3NyYy9hcHAvbW9kdWxlcy9kYXNoYm9hcmQvcGFnZXMvZGFzaGJvYXJkLXNldHRpbmdzL3Byb2ZpbGUtbW9iaWxlLW51bWJlci1mb3JtL3Byb2ZpbGUtbW9iaWxlLW51bWJlci1mb3JtLmNvbXBvbmVudC5zY3NzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUVBO0VBQ0ksb0JBQW9CO0VBQ3BCLGtCQUFrQixFQUFBIiwiZmlsZSI6InNyYy9hcHAvbW9kdWxlcy9kYXNoYm9hcmQvcGFnZXMvZGFzaGJvYXJkLXNldHRpbmdzL3Byb2ZpbGUtbW9iaWxlLW51bWJlci1mb3JtL3Byb2ZpbGUtbW9iaWxlLW51bWJlci1mb3JtLmNvbXBvbmVudC5zY3NzIiwic291cmNlc0NvbnRlbnQiOlsiQGltcG9ydCAnc3JjL2Fzc2V0cy9zY3NzL2Fic3RyYWN0cy92YXJpYWJsZXMnO1xuXG4ud2hpdGVib3h7XG4gICAgcGFkZGluZy1ib3R0b206IDY0cHg7XG4gICAgcG9zaXRpb246IHJlbGF0aXZlO1xufSJdfQ== */"

/***/ }),

/***/ "./src/app/modules/dashboard/pages/dashboard-settings/profile-mobile-number-form/profile-mobile-number-form.component.ts":
/*!*******************************************************************************************************************************!*\
  !*** ./src/app/modules/dashboard/pages/dashboard-settings/profile-mobile-number-form/profile-mobile-number-form.component.ts ***!
  \*******************************************************************************************************************************/
/*! exports provided: ProfileMobileNumberFormComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ProfileMobileNumberFormComponent", function() { return ProfileMobileNumberFormComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var src_app_modules_shared_services_auth_service__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! src/app/modules/shared/services/auth.service */ "./src/app/modules/shared/services/auth.service.ts");
/* harmony import */ var src_app_modules_shared_services_notify_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! src/app/modules/shared/services/notify.service */ "./src/app/modules/shared/services/notify.service.ts");
/* harmony import */ var _ngx_translate_core__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @ngx-translate/core */ "./node_modules/@ngx-translate/core/fesm5/ngx-translate-core.js");





//======================================================================
var ProfileMobileNumberFormComponent = /** @class */ (function () {
    //======================================================================
    function ProfileMobileNumberFormComponent(AUTH, NOTIFY, _, tp) {
        this.AUTH = AUTH;
        this.NOTIFY = NOTIFY;
        this._ = _;
        this.tp = tp;
        //======================================================================
        this.form_value_changed = false;
    }
    //======================================================================
    ProfileMobileNumberFormComponent.prototype.ngOnInit = function () { };
    ProfileMobileNumberFormComponent.prototype.l = function (property) {
        var args = [];
        for (var _i = 1; _i < arguments.length; _i++) {
            args[_i - 1] = arguments[_i];
        }
        var _a;
        (_a = this.tp).transform.apply(_a, [property].concat(args));
    };
    ProfileMobileNumberFormComponent.prototype.mobileNumberInputChange = function (number) {
        if (this.user.user_phone != number && number.length) {
            this.form_value_changed = true;
            this.number = number;
        }
        else {
            this.form_value_changed = false;
        }
    };
    //======================================================================
    ProfileMobileNumberFormComponent.prototype.submitForm = function () {
        var _this = this;
        if (this.form_value_changed) {
            this.AUTH.updateUserMobileNumber(this.number).subscribe(function (RESPONSE) {
                if (RESPONSE.body.errors) {
                    var errors = RESPONSE.body.errors;
                    for (var i = 0; i < errors.length; i++) {
                        _this.NOTIFY.setNotification({
                            status: "danger",
                            text: errors[i]
                        });
                    }
                    _this.form_value_changed = false;
                }
                else {
                    _this.NOTIFY.setNotification({
                        status: "success",
                        text: _this._.instant("dashboard.mobile-renew-success")
                    });
                    _this.form_value_changed = false;
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
                        text: _this._.instant("dashboard.mobile-renew-error")
                    });
                }
                _this.form_value_changed = false;
            });
        }
    };
    tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Input"])("user"),
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:type", Object)
    ], ProfileMobileNumberFormComponent.prototype, "user", void 0);
    ProfileMobileNumberFormComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
            selector: "dashboard-settings-profile-mobile-number-form",
            template: __webpack_require__(/*! ./profile-mobile-number-form.component.html */ "./src/app/modules/dashboard/pages/dashboard-settings/profile-mobile-number-form/profile-mobile-number-form.component.html"),
            providers: [_ngx_translate_core__WEBPACK_IMPORTED_MODULE_4__["TranslatePipe"]],
            styles: [__webpack_require__(/*! ./profile-mobile-number-form.component.scss */ "./src/app/modules/dashboard/pages/dashboard-settings/profile-mobile-number-form/profile-mobile-number-form.component.scss")]
        }) //======================================================================
        ,
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [src_app_modules_shared_services_auth_service__WEBPACK_IMPORTED_MODULE_2__["AuthService"],
            src_app_modules_shared_services_notify_service__WEBPACK_IMPORTED_MODULE_3__["NotifyService"],
            _ngx_translate_core__WEBPACK_IMPORTED_MODULE_4__["TranslateService"],
            _ngx_translate_core__WEBPACK_IMPORTED_MODULE_4__["TranslatePipe"]])
    ], ProfileMobileNumberFormComponent);
    return ProfileMobileNumberFormComponent;
}()); //======================================================================



/***/ }),

/***/ "./src/app/modules/dashboard/pages/dashboard-settings/profile-password-form/profile-password-form.component.html":
/*!***********************************************************************************************************************!*\
  !*** ./src/app/modules/dashboard/pages/dashboard-settings/profile-password-form/profile-password-form.component.html ***!
  \***********************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<div class=\"whitebox\">\n  <h4 class=\"h4 i-semi-bold grey pb-40px\">{{\"global.renew-pass\" | translate}}</h4>\n\n\n  <div>\n    <form [formGroup]='form'\n          autocomplete='on'\n          validate\n          (keyup.enter)='submitForm()'>\n\n\n      <!-- NAME ================================================================================ -->\n      <div class=\"input-holder pb-32px\">\n        <label for=\"password\">{{\"global.password\" | translate}}</label>\n        <div class=\"input password\">\n          <input [type]='password_visible ? \"text\" : \"password\"'\n                 name='password'\n                 placeholder='{{\"global.password-placeholder\" | translate}}'\n                 formControlName='password'\n                 id='password'>\n          <i class=\"mdi mdi-eye\"\n             *ngIf=\"!password_visible\"\n             (click)=\"togglePasswordVisible()\"></i>\n          <i class=\"mdi mdi-eye-off\"\n             *ngIf=\"password_visible\"\n             (click)=\"togglePasswordVisible()\"></i>\n        </div>\n        <ul>\n          <li *ngIf=\"form.controls['password'].hasError('required') && form.controls['password'].touched\">\n            {{\"global.requiredField\" | translate}}\n          </li>\n          <li *ngIf=\"form.controls['password'].hasError('minlength') && form.controls['password'].touched\">\n            {{\"global.requiredSymbol\" | translate:{val: 6} }}\n          </li>\n        </ul>\n      </div>\n      <!-- ================================================================================ COMMENT -->\n\n\n      <!-- NAME ================================================================================ -->\n      <div class=\"input-holder\">\n        <label for=\"new_password\">{{\"global.your-new-pass\" | translate}}</label>\n        <div class=\"input password\">\n          <input [type]='new_password_visible ? \"text\" : \"password\"'\n                 name='new_password'\n                 placeholder='{{\"global.password-placeholder\" | translate}}'\n                 formControlName='new_password'\n                 id='new_password'>\n          <i class=\"mdi mdi-eye\"\n             *ngIf=\"!new_password_visible\"\n             (click)=\"toggleNewPasswordVisible()\"></i>\n          <i class=\"mdi mdi-eye-off\"\n             *ngIf=\"new_password_visible\"\n             (click)=\"toggleNewPasswordVisible()\"></i>\n        </div>\n        <ul>\n          <li *ngIf=\"form.controls['new_password'].hasError('required') && form.controls['new_password'].touched\">\n            {{\"global.requiredField\" | translate}}\n          </li>\n          <li *ngIf=\"form.controls['new_password'].hasError('minlength') && form.controls['new_password'].touched\">\n            {{\"global.requiredSymbol\" | translate:{val: 6} }}</li>\n        </ul>\n      </div>\n      <!-- ================================================================================ COMMENT -->\n\n    </form>\n  </div>\n\n  <a (click)=\"submitForm()\"\n     *ngIf=\"form_value_changed\"\n     class=\"dashboard-form-submit-btn\">{{\"global.refresh\" | translate}}</a>\n\n</div>"

/***/ }),

/***/ "./src/app/modules/dashboard/pages/dashboard-settings/profile-password-form/profile-password-form.component.scss":
/*!***********************************************************************************************************************!*\
  !*** ./src/app/modules/dashboard/pages/dashboard-settings/profile-password-form/profile-password-form.component.scss ***!
  \***********************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = ".whitebox {\n  padding-bottom: 64px;\n  position: relative; }\n\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIi9Vc2Vycy9iL0RvY3VtZW50cy9mcmVlbGFuY2UvaWRlYWxpemVyci1hbmd1bGFyL3NyYy9hcHAvbW9kdWxlcy9kYXNoYm9hcmQvcGFnZXMvZGFzaGJvYXJkLXNldHRpbmdzL3Byb2ZpbGUtcGFzc3dvcmQtZm9ybS9wcm9maWxlLXBhc3N3b3JkLWZvcm0uY29tcG9uZW50LnNjc3MiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBQUE7RUFDSSxvQkFBb0I7RUFDcEIsa0JBQWtCLEVBQUEiLCJmaWxlIjoic3JjL2FwcC9tb2R1bGVzL2Rhc2hib2FyZC9wYWdlcy9kYXNoYm9hcmQtc2V0dGluZ3MvcHJvZmlsZS1wYXNzd29yZC1mb3JtL3Byb2ZpbGUtcGFzc3dvcmQtZm9ybS5jb21wb25lbnQuc2NzcyIsInNvdXJjZXNDb250ZW50IjpbIi53aGl0ZWJveHtcbiAgICBwYWRkaW5nLWJvdHRvbTogNjRweDtcbiAgICBwb3NpdGlvbjogcmVsYXRpdmU7XG59Il19 */"

/***/ }),

/***/ "./src/app/modules/dashboard/pages/dashboard-settings/profile-password-form/profile-password-form.component.ts":
/*!*********************************************************************************************************************!*\
  !*** ./src/app/modules/dashboard/pages/dashboard-settings/profile-password-form/profile-password-form.component.ts ***!
  \*********************************************************************************************************************/
/*! exports provided: ProfilePasswordFormComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ProfilePasswordFormComponent", function() { return ProfilePasswordFormComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/fesm5/forms.js");
/* harmony import */ var src_app_modules_shared_services_auth_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! src/app/modules/shared/services/auth.service */ "./src/app/modules/shared/services/auth.service.ts");
/* harmony import */ var src_app_modules_shared_services_notify_service__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! src/app/modules/shared/services/notify.service */ "./src/app/modules/shared/services/notify.service.ts");
/* harmony import */ var _ngx_translate_core__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @ngx-translate/core */ "./node_modules/@ngx-translate/core/fesm5/ngx-translate-core.js");






//======================================================================
var ProfilePasswordFormComponent = /** @class */ (function () {
    //======================================================================
    function ProfilePasswordFormComponent(FORM, AUTH, NOTIFY, _) {
        this.FORM = FORM;
        this.AUTH = AUTH;
        this.NOTIFY = NOTIFY;
        this._ = _;
        //======================================================================
        this.password_visible = false;
        //======================================================================
        this.new_password_visible = false;
        this.form_value_changed = false;
        this.buildForm();
    }
    //======================================================================
    ProfilePasswordFormComponent.prototype.ngOnInit = function () { };
    //======================================================================
    ProfilePasswordFormComponent.prototype.ngOnDestroy = function () {
        this.subs_form_value.unsubscribe();
    };
    ProfilePasswordFormComponent.prototype.buildForm = function () {
        this.form = this.FORM.group({
            password: [null, [_angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].required, _angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].minLength(6)]],
            new_password: [null, [_angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].required, _angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].minLength(6)]]
        });
        this.changesDedected();
    };
    ProfilePasswordFormComponent.prototype.togglePasswordVisible = function () {
        this.password_visible = !this.password_visible;
    };
    ProfilePasswordFormComponent.prototype.toggleNewPasswordVisible = function () {
        this.new_password_visible = !this.new_password_visible;
    };
    //======================================================================
    ProfilePasswordFormComponent.prototype.submitForm = function () {
        var _this = this;
        var BODY = {};
        BODY["password"] = this.form.controls["password"].value;
        BODY["new_password"] = this.form.controls["new_password"].value;
        this.AUTH.updateUserPassword(BODY).subscribe(function (RESPONSE) {
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
                    text: _this._.instant("dashboard.password-renew-success")
                });
                _this.form_value_changed = false;
                _this.form.reset();
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
                    text: _this._.instant("dashboard.password-renew-error")
                });
            }
        });
    };
    ProfilePasswordFormComponent.prototype.changesDedected = function () {
        var _this = this;
        this.subs_form_value = this.form.valueChanges.subscribe(function (value) {
            if (_this.form.valid) {
                _this.form_value_changed = true;
            }
            else {
                _this.form_value_changed = false;
            }
        });
    };
    tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Input"])("user"),
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:type", Object)
    ], ProfilePasswordFormComponent.prototype, "user", void 0);
    ProfilePasswordFormComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
            selector: "dashboard-settings-profile-password-form",
            template: __webpack_require__(/*! ./profile-password-form.component.html */ "./src/app/modules/dashboard/pages/dashboard-settings/profile-password-form/profile-password-form.component.html"),
            styles: [__webpack_require__(/*! ./profile-password-form.component.scss */ "./src/app/modules/dashboard/pages/dashboard-settings/profile-password-form/profile-password-form.component.scss")]
        }) //======================================================================
        ,
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [_angular_forms__WEBPACK_IMPORTED_MODULE_2__["FormBuilder"],
            src_app_modules_shared_services_auth_service__WEBPACK_IMPORTED_MODULE_3__["AuthService"],
            src_app_modules_shared_services_notify_service__WEBPACK_IMPORTED_MODULE_4__["NotifyService"],
            _ngx_translate_core__WEBPACK_IMPORTED_MODULE_5__["TranslateService"]])
    ], ProfilePasswordFormComponent);
    return ProfilePasswordFormComponent;
}()); //======================================================================



/***/ }),

/***/ "./src/app/modules/dashboard/pages/dashboard-startups/add-startup-card/add-startup-card.component.html":
/*!*************************************************************************************************************!*\
  !*** ./src/app/modules/dashboard/pages/dashboard-startups/add-startup-card/add-startup-card.component.html ***!
  \*************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<div class=\"add-card\">\n  <i class=\"mdi mdi-plus-circle\"></i>\n  <small class=\"p i-medium\">{{\"dashboard.add-startup\" | translate}}</small>\n</div>"

/***/ }),

/***/ "./src/app/modules/dashboard/pages/dashboard-startups/add-startup-card/add-startup-card.component.scss":
/*!*************************************************************************************************************!*\
  !*** ./src/app/modules/dashboard/pages/dashboard-startups/add-startup-card/add-startup-card.component.scss ***!
  \*************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = ".add-card {\n  border-radius: 8px;\n  border: 3px solid #EDEEF9;\n  display: -webkit-box;\n  display: flex;\n  -webkit-box-align: center;\n          align-items: center;\n  -webkit-box-pack: center;\n          justify-content: center;\n  -webkit-box-orient: vertical;\n  -webkit-box-direction: normal;\n          flex-direction: column;\n  background-color: #FFFFFF;\n  width: 100%;\n  height: 100%;\n  min-height: 368px;\n  cursor: pointer;\n  -webkit-transition: 0.2s linear;\n  transition: 0.2s linear; }\n  .add-card:hover {\n    box-shadow: 0 6px 12px 0 rgba(0, 0, 0, 0.1); }\n  .add-card i {\n    font-size: 80px;\n    color: #3B45C0; }\n  .add-card small {\n    padding-top: 32px;\n    color: #3B45C0; }\n\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIi9Vc2Vycy9iL0RvY3VtZW50cy9mcmVlbGFuY2UvaWRlYWxpemVyci1hbmd1bGFyL3NyYy9hcHAvbW9kdWxlcy9kYXNoYm9hcmQvcGFnZXMvZGFzaGJvYXJkLXN0YXJ0dXBzL2FkZC1zdGFydHVwLWNhcmQvYWRkLXN0YXJ0dXAtY2FyZC5jb21wb25lbnQuc2NzcyIsIi9Vc2Vycy9iL0RvY3VtZW50cy9mcmVlbGFuY2UvaWRlYWxpemVyci1hbmd1bGFyL3NyYy9hc3NldHMvc2Nzcy9hYnN0cmFjdHMvX3ZhcmlhYmxlcy5zY3NzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUVBO0VBQ0ksa0JDQUk7RURDSix5QkNpQlk7RURoQlosb0JBQWE7RUFBYixhQUFhO0VBQ2IseUJBQW1CO1VBQW5CLG1CQUFtQjtFQUNuQix3QkFBdUI7VUFBdkIsdUJBQXVCO0VBQ3ZCLDRCQUFzQjtFQUF0Qiw2QkFBc0I7VUFBdEIsc0JBQXNCO0VBQ3RCLHlCQ1VXO0VEVFgsV0FBVztFQUNYLFlBQVk7RUFDWixpQkFBaUI7RUFDakIsZUFBZTtFQUNmLCtCQ1JzQjtFRFF0Qix1QkNSc0IsRUFBQTtFREoxQjtJQWVRLDJDQ05zQyxFQUFBO0VEVDlDO0lBbUJRLGVBQWU7SUFDZixjQ01RLEVBQUE7RUQxQmhCO0lBd0JRLGlCQUFpQjtJQUNqQixjQ0NRLEVBQUEiLCJmaWxlIjoic3JjL2FwcC9tb2R1bGVzL2Rhc2hib2FyZC9wYWdlcy9kYXNoYm9hcmQtc3RhcnR1cHMvYWRkLXN0YXJ0dXAtY2FyZC9hZGQtc3RhcnR1cC1jYXJkLmNvbXBvbmVudC5zY3NzIiwic291cmNlc0NvbnRlbnQiOlsiQGltcG9ydCAnc3JjL2Fzc2V0cy9zY3NzL2Fic3RyYWN0cy92YXJpYWJsZXMnO1xuXG4uYWRkLWNhcmQge1xuICAgIGJvcmRlci1yYWRpdXM6ICRicjg7XG4gICAgYm9yZGVyOiAkYm9yZGVyMztcbiAgICBkaXNwbGF5OiBmbGV4O1xuICAgIGFsaWduLWl0ZW1zOiBjZW50ZXI7XG4gICAganVzdGlmeS1jb250ZW50OiBjZW50ZXI7XG4gICAgZmxleC1kaXJlY3Rpb246IGNvbHVtbjtcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiAkd2hpdGU7XG4gICAgd2lkdGg6IDEwMCU7XG4gICAgaGVpZ2h0OiAxMDAlO1xuICAgIG1pbi1oZWlnaHQ6IDM2OHB4O1xuICAgIGN1cnNvcjogcG9pbnRlcjtcbiAgICB0cmFuc2l0aW9uOiAkdHJhbnNpdGlvbi0yO1xuXG4gICAgJjpob3ZlciB7XG4gICAgICAgIGJveC1zaGFkb3c6ICRib3gtc2hhZG93LTM7XG4gICAgfVxuXG4gICAgaSB7XG4gICAgICAgIGZvbnQtc2l6ZTogODBweDtcbiAgICAgICAgY29sb3I6ICRicmFuZDc7XG4gICAgfVxuXG4gICAgc21hbGwge1xuICAgICAgICBwYWRkaW5nLXRvcDogMzJweDtcbiAgICAgICAgY29sb3I6ICRicmFuZDc7XG4gICAgfVxufSIsIi8vVFJBTlNJVElPTlxuJGJyMjoycHg7XG4kYnI0OjRweDtcbiRicjg6OHB4O1xuXG4vL1RSQU5TSVRJT05cbiR0cmFuc2l0aW9uLTI6IDAuMnMgbGluZWFyO1xuXG4vL0JPWCBTSEFET1dcbiRib3gtc2hhZG93LTE6IDAgN3B4IDE2cHggMCByZ2JhKDAsIDAsIDAsIDAuMDQpO1xuJGJveC1zaGFkb3ctMjogMCAxNnB4IDE2cHggMCByZ2JhKDAsIDAsIDAsIDAuMDYpO1xuJGJveC1zaGFkb3ctMzogMCA2cHggMTJweCAwIHJnYmEoMCwgMCwgMCwgMC4xKTtcbiRib3gtc2hhZG93LTQ6IDRweCA0cHggMTNweCAwIHJnYmEoMCwgMjgsIDUwLCAwLjU4KTtcbiRib3gtc2hhZG93LTU6IDRweCA0cHggMTNweCAwIHJnYmEoMCwgMjgsIDUwLCAwLjA3KTtcblxuXG5cbi8vQ09MT1JTXG4kaW5wdXQ6ICNGOUZBRkU7XG4kd2hpdGU6ICNGRkZGRkY7XG4kYmxhY2s6ICMwMDAwMDA7XG4kYnJhbmQwOiAjRURFRUY5O1xuJGJyYW5kMTogI0E1QUFFMjtcbiRicmFuZDI6ICM5NDk5REM7XG4kYnJhbmQzOiAjODI4OEQ2O1xuJGJyYW5kNDogIzcwNzdEMTtcbiRicmFuZDU6ICM1RTY2Q0I7XG4kYnJhbmQ2OiAjNEM1NUM1O1xuJGJyYW5kNzogIzNCNDVDMDtcbiRncmV5OiAjQjBCN0MzO1xuJHN1Y2Nlc3M6ICMwMENGNjk7XG4kd2FybmluZzogI0ZGQzAwMDtcbiRkYW5nZXI6ICNGRjA0NUI7XG4kdHJhbnNwYXJlbnQ6IHRyYW5zcGFyZW50O1xuJGxpbms6ICMxNjg2Qzk7XG5cblxuLy9GT05UU1xuJGlfYmxhY2sgOiBcImlfYmxhY2tcIjtcbiRpX2JvbGQgOiBcImlfYm9sZFwiO1xuJGlfZXh0cmFfYm9sZCA6IFwiaV9leHRyYV9ib2xkXCI7XG4kaV9leHRyYV9saWdodCA6IFwiaV9leHRyYV9saWdodFwiO1xuJGlfbGlnaHQgOiBcImlfbGlnaHRcIjtcbiRpX21lZGl1bSA6IFwiaV9tZWRpdW1cIjtcbiRpX3JlZ3VsYXIgOiBcImlfcmVndWxhclwiO1xuJGlfc2VtaV9ib2xkIDogXCJpX3NlbWlfYm9sZFwiO1xuJGlfdGhpbiA6IFwiaV90aGluXCI7XG5cblxuLy9GT05UIFNJWkVcbiRoMTozNHB4O1xuJGgyOjI4cHg7XG4kaDM6MjRweDtcbiRoNDoyMHB4O1xuJGg1OjE2cHg7XG4kcDoxNHB4O1xuJGxhYmVsOjEycHg7XG4kc21hbGw6MTBweDtcblxuXG4vL0JPUkRFUlxuJGJvcmRlcjM6IDNweCBzb2xpZCAkYnJhbmQwOyJdfQ== */"

/***/ }),

/***/ "./src/app/modules/dashboard/pages/dashboard-startups/add-startup-card/add-startup-card.component.ts":
/*!***********************************************************************************************************!*\
  !*** ./src/app/modules/dashboard/pages/dashboard-startups/add-startup-card/add-startup-card.component.ts ***!
  \***********************************************************************************************************/
/*! exports provided: AddStartupCardComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "AddStartupCardComponent", function() { return AddStartupCardComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");


//======================================================================
var AddStartupCardComponent = /** @class */ (function () {
    //======================================================================
    function AddStartupCardComponent() {
    }
    //======================================================================
    AddStartupCardComponent.prototype.ngOnInit = function () { };
    AddStartupCardComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
            selector: 'add-startup-card',
            template: __webpack_require__(/*! ./add-startup-card.component.html */ "./src/app/modules/dashboard/pages/dashboard-startups/add-startup-card/add-startup-card.component.html"),
            styles: [__webpack_require__(/*! ./add-startup-card.component.scss */ "./src/app/modules/dashboard/pages/dashboard-startups/add-startup-card/add-startup-card.component.scss")]
        }) //======================================================================
        ,
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [])
    ], AddStartupCardComponent);
    return AddStartupCardComponent;
}()); //======================================================================



/***/ }),

/***/ "./src/app/modules/dashboard/pages/dashboard-startups/dashboard-startups.component.html":
/*!**********************************************************************************************!*\
  !*** ./src/app/modules/dashboard/pages/dashboard-startups/dashboard-startups.component.html ***!
  \**********************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<section>\n    <div class=\"wrapper\">\n\n        <!-- COMMENT ================================================================================ -->\n        <div>\n            <div class=\"row\">\n                <div class=\"col-md-4 col-12\">\n                    <div class=\"pb-32px\">\n                        <a [routerLink]=\"['/dashboard/new/startup']\"\n                           style=\"display: block;\">\n                            <add-startup-card></add-startup-card>\n                        </a>\n                    </div>\n                </div>\n                <div class=\"col-md-4 col-12\"\n                     *ngFor=\"let item of startups\">\n                    <div class=\"pb-32px\"\n                         style=\"height: 100%\">\n                        <startup-card [class]=\"'bg-white'\"\n                                      [startup]=\"item\"></startup-card>\n                    </div>\n                </div>\n            </div>\n        </div>\n        <!-- ================================================================================ COMMENT -->\n\n\n    </div>\n</section>"

/***/ }),

/***/ "./src/app/modules/dashboard/pages/dashboard-startups/dashboard-startups.component.scss":
/*!**********************************************************************************************!*\
  !*** ./src/app/modules/dashboard/pages/dashboard-startups/dashboard-startups.component.scss ***!
  \**********************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IiIsImZpbGUiOiJzcmMvYXBwL21vZHVsZXMvZGFzaGJvYXJkL3BhZ2VzL2Rhc2hib2FyZC1zdGFydHVwcy9kYXNoYm9hcmQtc3RhcnR1cHMuY29tcG9uZW50LnNjc3MifQ== */"

/***/ }),

/***/ "./src/app/modules/dashboard/pages/dashboard-startups/dashboard-startups.component.ts":
/*!********************************************************************************************!*\
  !*** ./src/app/modules/dashboard/pages/dashboard-startups/dashboard-startups.component.ts ***!
  \********************************************************************************************/
/*! exports provided: DashboardStartupsComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "DashboardStartupsComponent", function() { return DashboardStartupsComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var src_app_modules_shared_services_core_service__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! src/app/modules/shared/services/core.service */ "./src/app/modules/shared/services/core.service.ts");
/* harmony import */ var src_app_modules_shared_services_dashboard_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! src/app/modules/shared/services/dashboard.service */ "./src/app/modules/shared/services/dashboard.service.ts");
/* harmony import */ var _ngx_translate_core__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @ngx-translate/core */ "./node_modules/@ngx-translate/core/fesm5/ngx-translate-core.js");
/* harmony import */ var _angular_platform_browser__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @angular/platform-browser */ "./node_modules/@angular/platform-browser/fesm5/platform-browser.js");






//======================================================================
var DashboardStartupsComponent = /** @class */ (function () {
    //======================================================================
    function DashboardStartupsComponent(CORE, DASHBOARD, _, title) {
        this.CORE = CORE;
        this.DASHBOARD = DASHBOARD;
        this._ = _;
        this.title = title;
        this.getStartups();
    }
    //======================================================================
    DashboardStartupsComponent.prototype.ngOnInit = function () {
        this.DASHBOARD.title.next(this._.instant("home.startups"));
        this.title.setTitle("Idealizerr - " + this._.instant('home.startups'));
    };
    DashboardStartupsComponent.prototype.getStartups = function () {
        var _this = this;
        this.CORE.getMyStartups().subscribe(function (RESPONSE) {
            _this.startups = RESPONSE.body;
        }, function (ERROR) { });
    };
    DashboardStartupsComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
            selector: "app-dashboard-startups",
            template: __webpack_require__(/*! ./dashboard-startups.component.html */ "./src/app/modules/dashboard/pages/dashboard-startups/dashboard-startups.component.html"),
            styles: [__webpack_require__(/*! ./dashboard-startups.component.scss */ "./src/app/modules/dashboard/pages/dashboard-startups/dashboard-startups.component.scss")]
        }) //======================================================================
        ,
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [src_app_modules_shared_services_core_service__WEBPACK_IMPORTED_MODULE_2__["CoreService"],
            src_app_modules_shared_services_dashboard_service__WEBPACK_IMPORTED_MODULE_3__["DashboardService"],
            _ngx_translate_core__WEBPACK_IMPORTED_MODULE_4__["TranslateService"],
            _angular_platform_browser__WEBPACK_IMPORTED_MODULE_5__["Title"]])
    ], DashboardStartupsComponent);
    return DashboardStartupsComponent;
}()); //======================================================================



/***/ }),

/***/ "./src/app/modules/dashboard/services/jury-voices-local-storage.service.ts":
/*!*********************************************************************************!*\
  !*** ./src/app/modules/dashboard/services/jury-voices-local-storage.service.ts ***!
  \*********************************************************************************/
/*! exports provided: JuryVoicesLocalStorageService */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "JuryVoicesLocalStorageService", function() { return JuryVoicesLocalStorageService; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");


var JuryVoicesLocalStorageService = /** @class */ (function () {
    function JuryVoicesLocalStorageService() {
        this.storage = {};
        try {
            var storage = JSON.parse(localStorage.getItem("startup_voices"));
            if (storage !== null) {
                this.storage = storage;
            }
            console.log(this.storage);
        }
        catch (ex) {
            alert("Need permission for cookies");
        }
    }
    JuryVoicesLocalStorageService.prototype.saveVoice = function (voice) {
        if (voice.offVoice) {
            delete this.storage[voice.id];
        }
        else {
            this.storage[voice.id] = voice;
        }
        this.writeStorage();
    };
    JuryVoicesLocalStorageService.prototype.clearVoices = function () {
        try {
            localStorage.removeItem("startup_voices");
        }
        catch (ex) {
        }
    };
    JuryVoicesLocalStorageService.prototype.writeStorage = function () {
        try {
            localStorage.setItem("startup_voices", JSON.stringify(this.storage));
        }
        catch (ex) {
        }
    };
    JuryVoicesLocalStorageService = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Injectable"])(),
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [])
    ], JuryVoicesLocalStorageService);
    return JuryVoicesLocalStorageService;
}());



/***/ }),

/***/ "./src/app/modules/shared/services/dashboard.service.ts":
/*!**************************************************************!*\
  !*** ./src/app/modules/shared/services/dashboard.service.ts ***!
  \**************************************************************/
/*! exports provided: DashboardService */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "DashboardService", function() { return DashboardService; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _angular_common_http__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/common/http */ "./node_modules/@angular/common/fesm5/http.js");
/* harmony import */ var rxjs__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! rxjs */ "./node_modules/rxjs/_esm5/index.js");
/* harmony import */ var _urls_service__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./urls.service */ "./src/app/modules/shared/services/urls.service.ts");





var DashboardService = /** @class */ (function () {
    //======================================================================
    function DashboardService(HTTP, URLS) {
        this.HTTP = HTTP;
        this.URLS = URLS;
        //======================================================================
        this._header = new _angular_common_http__WEBPACK_IMPORTED_MODULE_2__["HttpHeaders"]({
            "Content-Type": "application/json; charset=utf-8"
        });
        //======================================================================
        this.title = new rxjs__WEBPACK_IMPORTED_MODULE_3__["BehaviorSubject"]("");
    }
    DashboardService = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Injectable"])({ providedIn: "root" })
        //======================================================================
        ,
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [_angular_common_http__WEBPACK_IMPORTED_MODULE_2__["HttpClient"], _urls_service__WEBPACK_IMPORTED_MODULE_4__["UrlsService"]])
    ], DashboardService);
    return DashboardService;
}()); //======================================================================



/***/ })

}]);
//# sourceMappingURL=app-modules-dashboard-dashboard-module.js.map