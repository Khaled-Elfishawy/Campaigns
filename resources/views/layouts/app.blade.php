<!DOCTYPE html>
<html lang="en" dir="ltr" direction="ltr" style="direction:ltr;">
    <!--begin::Head-->
    <head>
        <base href="" />
        <title>@yield('title', env('APP_NAME'))</title>

        <link ref="stylesheet" type="text/css" href="{{url('/')}}/assets/dist/snackbar.min.css" /> 
        <meta charset="utf-8" />
        <meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Flask & Laravel versions. Grab your copy now and get life-time updates for free." />
        <meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Flask & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="Metronic | Bootstrap HTML, VueJS, React, Angular, Asp.Net Core, Rails, Spring, Blazor, Django, Flask & Laravel Admin Dashboard Theme" />
        <meta property="og:url" content="https://keenthemes.com/metronic" />
        <meta property="og:site_name" content="Keenthemes | Metronic" />
        <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
        <link rel="shortcut icon" href="{{url('/')}}/assets/media/logos/favicon.ico" />
        <!--begin::Fonts(mandatory for all pages)-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
        <!--end::Fonts-->
        <!--begin::Vendor Stylesheets(used for this page only)-->
        <link href="{{url('/')}}/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
        <link href="{{url('/')}}/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
        <!--end::Vendor Stylesheets-->
        <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
        <link href="{{url('/')}}/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
        <link href="{{url('/')}}/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
        <!--end::Global Stylesheets Bundle-->
<style>
@import url('https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap');
body{
    font-family: 'Tajawal', sans-serif;

}
</style>
        
    </head>
    <!--end::Head-->
    <!--begin::Body-->
    <body id="kt_app_body" data-kt-app-layout="light-sidebar" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" class="app-default">
        <!--begin::Theme mode setup on page load-->
        <script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-theme-mode")) { themeMode = document.documentElement.getAttribute("data-theme-mode"); } else { if ( localStorage.getItem("data-theme") !== null ) { themeMode = localStorage.getItem("data-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-theme", themeMode); }</script>
<!--begin::App-->
<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
    <!--begin::Page-->
    <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
        <!--begin::Header-->
        <div id="kt_app_header" class="app-header">
            <!--begin::Header container-->
            <div class="app-container container-fluid d-flex align-items-stretch justify-content-between" id="kt_app_header_container">
                <!--begin::sidebar mobile toggle-->
                <div class="d-flex align-items-center d-lg-none ms-n2 me-2" title="Show sidebar menu">
                    <div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_sidebar_mobile_toggle">
                        <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                        <span class="svg-icon svg-icon-1">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="currentColor" />
                                <path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                </div>
                <!--end::sidebar mobile toggle-->
                <!--begin::Mobile logo-->
                <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
                    <a href="?page=index" class="d-lg-none">
                        <img alt="Logo" src="{{url('/')}}/assets/media/logos/default-small.svg" class="h-30px" />
                    </a>
                </div>
                <!--end::Mobile logo-->
                <!--begin::Header wrapper-->
                <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">
                    <!--begin::Page title-->
                    <div data-kt-swapper="true" data-kt-swapper-mode="{default: 'prepend', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_content_container', lg: '#kt_app_header_wrapper'}" class="page-title d-flex flex-column justify-content-center flex-wrap me-3 mb-5 mb-lg-0">
                        <!--begin::Title-->
                        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">@yield('title')</h1>
                        <!--end::Title-->
                    </div>
                    <!--end::Page title-->
                    <!--begin::Navbar-->
                    <div class="app-navbar flex-shrink-0">
                        <!--begin::Search-->
                        <div class="app-navbar-item align-items-stretch ms-1 ms-lg-3">
                            <!--layout-partial:partials/search/_dropdown.html-->
                        </div>
                        <!--end::Search-->
                        <!--begin::Activities-->
                        <div class="app-navbar-item ms-1 ms-lg-3">
                            <!--begin::Drawer toggle-->
                            <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px w-md-40px h-md-40px" id="kt_activities_toggle">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="8" y="9" width="3" height="10" rx="1.5" fill="currentColor" />
                                        <rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="currentColor" />
                                        <rect x="18" y="11" width="3" height="8" rx="1.5" fill="currentColor" />
                                        <rect x="3" y="13" width="3" height="6" rx="1.5" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Drawer toggle-->
                        </div>
                        <!--end::Activities-->
                        <!--begin::Notifications-->
                        <div class="app-navbar-item ms-1 ms-lg-3">
                            <!--begin::Menu- wrapper-->
                            <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px w-md-40px h-md-40px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen022.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.2929 2.70711C11.6834 2.31658 12.3166 2.31658 12.7071 2.70711L15.2929 5.29289C15.6834 5.68342 15.6834 6.31658 15.2929 6.70711L12.7071 9.29289C12.3166 9.68342 11.6834 9.68342 11.2929 9.29289L8.70711 6.70711C8.31658 6.31658 8.31658 5.68342 8.70711 5.29289L11.2929 2.70711Z" fill="currentColor" />
                                        <path d="M11.2929 14.7071C11.6834 14.3166 12.3166 14.3166 12.7071 14.7071L15.2929 17.2929C15.6834 17.6834 15.6834 18.3166 15.2929 18.7071L12.7071 21.2929C12.3166 21.6834 11.6834 21.6834 11.2929 21.2929L8.70711 18.7071C8.31658 18.3166 8.31658 17.6834 8.70711 17.2929L11.2929 14.7071Z" fill="currentColor" />
                                        <path opacity="0.3" d="M5.29289 8.70711C5.68342 8.31658 6.31658 8.31658 6.70711 8.70711L9.29289 11.2929C9.68342 11.6834 9.68342 12.3166 9.29289 12.7071L6.70711 15.2929C6.31658 15.6834 5.68342 15.6834 5.29289 15.2929L2.70711 12.7071C2.31658 12.3166 2.31658 11.6834 2.70711 11.2929L5.29289 8.70711Z" fill="currentColor" />
                                        <path opacity="0.3" d="M17.2929 8.70711C17.6834 8.31658 18.3166 8.31658 18.7071 8.70711L21.2929 11.2929C21.6834 11.6834 21.6834 12.3166 21.2929 12.7071L18.7071 15.2929C18.3166 15.6834 17.6834 15.6834 17.2929 15.2929L14.7071 12.7071C14.3166 12.3166 14.3166 11.6834 14.7071 11.2929L17.2929 8.70711Z" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--layout-partial:partials/menus/_notifications-menu.html-->
                            <!--end::Menu wrapper-->
                        </div>
                        <!--end::Notifications-->


                        <!--begin::Theme mode-->
                        <div class="app-navbar-item ms-1 ms-lg-3">
                            <!--layout-partial:partials/theme-mode/_main.html-->
                        </div>
                        <!--end::Theme mode-->
                        <!--begin::User menu-->
                        <div class="app-navbar-item ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
                            <!--begin::Menu wrapper-->
                            <div class="cursor-pointer symbol symbol-35px symbol-md-40px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-start">
                                <img src="{{url('/')}}/assets/media/avatars/300-1.jpg" alt="user" />
                            </div>
                                <!--begin::User account menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content d-flex align-items-center px-3">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-50px me-5">
                                                <img alt="Logo" src="{{url('/')}}/assets/media/avatars/300-1.jpg" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Username-->
                                            <div class="d-flex flex-column">
                                                <div class="fw-bold d-flex align-items-center fs-5">Max Smith 
                                                <span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span></div>
                                                <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">max@kt.com</a>
                                            </div>
                                            <!--end::Username-->
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator my-2"></div>
                                    <!--end::Menu separator-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5 my-1">
                                        <a href="?page=account/settings" class="menu-link px-5">Account Settings</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>                                    
                                    <div class="menu-item px-5">
                                        <a href="{{ route('logout') }}" class="menu-link px-5" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::User account menu-->
                            <!--end::Menu wrapper-->
                        </div>
                        <!--end::User menu-->
                        <!--begin::Header menu toggle-->
                        <div class="app-navbar-item d-lg-none ms-2 me-n3" title="Show header menu">
                            <div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_header_menu_toggle">
                                <!--begin::Svg Icon | path: icons/duotune/text/txt001.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13 11H3C2.4 11 2 10.6 2 10V9C2 8.4 2.4 8 3 8H13C13.6 8 14 8.4 14 9V10C14 10.6 13.6 11 13 11ZM22 5V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4V5C2 5.6 2.4 6 3 6H21C21.6 6 22 5.6 22 5Z" fill="currentColor" />
                                        <path opacity="0.3" d="M21 16H3C2.4 16 2 15.6 2 15V14C2 13.4 2.4 13 3 13H21C21.6 13 22 13.4 22 14V15C22 15.6 21.6 16 21 16ZM14 20V19C14 18.4 13.6 18 13 18H3C2.4 18 2 18.4 2 19V20C2 20.6 2.4 21 3 21H13C13.6 21 14 20.6 14 20Z" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                        <!--end::Header menu toggle-->
                    </div>
                    <!--end::Navbar-->                    
                </div>
                <!--end::Header wrapper-->
            </div>
            <!--end::Header container-->
        </div>
        <!--end::Header-->        
        <!--begin::Wrapper-->
        <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
            <!--begin::Sidebar-->
            <div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
                <!--begin::Logo-->
                <div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
                    <!--begin::Logo image-->
                    <a href="{{url('/')}}" style="margin: 0 auto;">
                        <img alt="Logo" src="{{url('/')}}/assets/media/logos/logo.png" class="h-25px app-sidebar-logo-default theme-light-show" style="height: 67px !important;" />
                        <img alt="Logo" src="{{url('/')}}/assets/media/logos/logo.png" class="h-25px app-sidebar-logo-default theme-dark-show" />
                        <img alt="Logo" src="{{url('/')}}/assets/media/logos/logo.png" class="h-20px app-sidebar-logo-minimize" />
                    </a>
                    <!--end::Logo image-->
                    <!--begin::Sidebar toggle-->
                    <div id="kt_app_sidebar_toggle" class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary body-bg h-30px w-30px position-absolute top-50 start-100 translate-middle rotate" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="app-sidebar-minimize">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr079.svg-->
                        <span class="svg-icon svg-icon-2 rotate-180">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.5" d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z" fill="currentColor" />
                                <path d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z" fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Sidebar toggle-->
                </div>
                <!--end::Logo-->
                <!--begin::sidebar menu-->
                <div class="app-sidebar-menu overflow-hidden flex-column-fluid">
                    <!--begin::Menu wrapper-->
                    <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
                        <!--begin::Menu-->
                        <div class="menu menu-column menu-rounded menu-sub-indention px-3" id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
                            <h3 style="text-align:center;">Welcome : {{auth()->user()->name}}</h3>
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <i class="bi bi-grid fs-3"></i>
                                    </span>
                                    <span class="menu-title">DashBoard</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion">
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link @if(Request::is('/')) active @endif" href="{{url('/')}}">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Home</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    @if(auth()->user()->type != 'sales')
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link @if(Request::is('campaigns') || Request::is('campaigns/*')) active @endif" href="{{url('campaigns')}}">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Campaigns</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    @endif
                                    @if(auth()->user()->type != 'sales')
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link @if(Request::is('sales') || Request::is('sales/*')) active @endif" href="{{url('sales')}}">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Sales</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    @endif
                                    @if(auth()->user()->type != 'sales')
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link @if(Request::is('report') || Request::is('report/*')) active @endif" href="{{url('report')}}">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Reports</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link @if(Request::is('sales_report') || Request::is('sales_report/*')) active @endif" href="{{url('sales_report')}}">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Sales Reports</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    @endif
                                    @if(auth()->user()->type != 'sales')
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link @if(Request::is('user-activity') || Request::is('user-activity/*')) active @endif" href="{{url('user-activity')}}">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Activity Log</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    @endif
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item here @if(Request::is('lead') || Request::is('lead/*')) show @endif menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <i class="bi bi-grid fs-3"></i>
                                    </span>
                                    <span class="menu-title">Clients</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion">
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link @if(Request::is('lead/type')) active @endif" href="{{url('lead/type')}}">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Clients</span>
                                        </a>
                                        <!--end:Menu link-->
                                        <!--begin:Menu link-->
                                        <a class="menu-link @if(Request::is('lead/type/noanswer')) active @endif" href="{{url('lead/type/noanswer')}}">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">No Answer</span>
                                        </a>
                                        <!--end:Menu link-->
                                        <!--begin:Menu link-->
                                        <a class="menu-link @if(Request::is('lead/type/noanswer2')) active @endif" href="{{url('lead/type/noanswer2')}}">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">No AnswerX2</span>
                                        </a>
                                        <!--end:Menu link-->
                                        <!--begin:Menu link-->
                                        <a class="menu-link @if(Request::is('lead/type/inprogress')) active @endif" href="{{url('lead/type/inprogress')}}">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">In Progress</span>
                                        </a>
                                        <!--end:Menu link-->
                                        <!--begin:Menu link-->
                                        <a class="menu-link @if(Request::is('lead/type/high')) active @endif" href="{{url('lead/type/high')}}">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">High Potential</span>
                                        </a>
                                        <!--end:Menu link-->
                                        <!--begin:Menu link-->
                                        <a class="menu-link @if(Request::is('lead/type/low')) active @endif" href="{{url('lead/type/low')}}">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Low Potential</span>
                                        </a>
                                        <!--end:Menu link-->
                                        @if(auth()->user()->type != 'sales')
                                        <!--begin:Menu link-->
                                        <a class="menu-link @if(Request::is('lead/type/ftd')) active @endif" href="{{url('lead/type/ftd')}}">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">FTD</span>
                                        </a>
                                        <!--end:Menu link-->
                                        <!--begin:Menu link-->
                                        <a class="menu-link @if(Request::is('lead/type/rejected')) active @endif" href="{{url('lead/type/rejected')}}">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Rejected</span>
                                        </a>
                                        <!--end:Menu link-->
                                        @endif
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item here @if(Request::is('uploaded_lead') || Request::is('uploaded_lead/*')) show @endif menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <i class="bi bi-grid fs-3"></i>
                                    </span>
                                    <span class="menu-title">Uploaded Data</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion">
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        @if(auth()->user()->type != 'sales')
                                        <!--begin:Menu link-->
                                        <a class="menu-link @if(Request::is('uploaded_lead/upload/')) active @endif" href="{{url('uploaded_lead/upload/')}}">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Upload</span>
                                        </a>
                                        <!--end:Menu link-->
                                        @endif
                                        <!--begin:Menu link-->
                                        <a class="menu-link @if(Request::is('uploaded_lead/type')) active @endif" href="{{url('uploaded_lead/type')}}">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Clients</span>
                                        </a>
                                        <!--end:Menu link-->
                                        <!--begin:Menu link-->
                                        <a class="menu-link @if(Request::is('uploaded_lead/type/noanswer')) active @endif" href="{{url('uploaded_lead/type/noanswer')}}">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">No Answer</span>
                                        </a>
                                        <!--end:Menu link-->
                                        <!--begin:Menu link-->
                                        <a class="menu-link @if(Request::is('uploaded_lead/type/noanswer2')) active @endif" href="{{url('uploaded_lead/type/noanswer2')}}">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">No AnswerX2</span>
                                        </a>
                                        <!--end:Menu link-->
                                        <!--begin:Menu link-->
                                        <a class="menu-link @if(Request::is('uploaded_lead/type/inprogress')) active @endif" href="{{url('uploaded_lead/type/inprogress')}}">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">In Progress</span>
                                        </a>
                                        <!--end:Menu link-->
                                        <!--begin:Menu link-->
                                        <a class="menu-link @if(Request::is('uploaded_lead/type/high')) active @endif" href="{{url('uploaded_lead/type/high')}}">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">High Potential</span>
                                        </a>
                                        <!--end:Menu link-->
                                        <!--begin:Menu link-->
                                        <a class="menu-link @if(Request::is('uploaded_lead/type/low')) active @endif" href="{{url('uploaded_lead/type/low')}}">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Low Potential</span>
                                        </a>
                                        <!--end:Menu link-->
                                        @if(auth()->user()->type != 'sales')
                                        <!--begin:Menu link-->
                                        <a class="menu-link @if(Request::is('uploaded_lead/type/ftd')) active @endif" href="{{url('uploaded_lead/type/ftd')}}">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">FTD</span>
                                        </a>
                                        <!--end:Menu link-->
                                        <!--begin:Menu link-->
                                        <a class="menu-link @if(Request::is('uploaded_lead/type/rejected')) active @endif" href="{{url('uploaded_lead/type/rejected')}}">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Rejected</span>
                                        </a>
                                        <!--end:Menu link-->
                                        @endif
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->
                        </div>
                        <!--end::Menu-->
                    </div>
                    <!--end::Menu wrapper-->
                </div>
                <!--end::sidebar menu-->
            </div>
            <!--end::Sidebar-->
            <!--begin::Main-->
            <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                <!--begin::Content wrapper-->
                <div class="d-flex flex-column flex-column-fluid">
                    <!--begin::Content-->
                    <div id="kt_app_content" class="app-content flex-column-fluid">
                        <!--begin::Content container-->
                        <div id="kt_app_content_container" class="app-container container-fluid">
                            <!--begin::Row-->                
                            @yield('main')
                        </div>
                    </div>
                </div>
                <!--begin::Footer-->
                <div id="kt_app_footer" class="app-footer">
                    <!--begin::Footer container-->
                    <div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
                        <!--begin::Copyright-->
                        <div class="text-dark order-2 order-md-1">
                            <span class="text-muted fw-semibold me-1">2022&copy;</span>
                            <a href="https://onclick-eg.com" target="_blank" class="text-gray-800 text-hover-primary">OnClick Global</a>
                        </div>
                        <!--end::Copyright-->
                    </div>
                    <!--end::Footer container-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end:::Main-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::App-->
<!--layout-partial:partials/_drawers.html-->
        <!--begin::Javascript-->
        <script>var hostUrl = "{{url('/')}}/assets/";</script>
        <!--begin::Global Javascript Bundle(mandatory for all pages)-->
        <script src="{{url('/')}}/assets/plugins/global/plugins.bundle.js"></script>
        <script src="{{url('/')}}/assets/js/scripts.bundle.js"></script>
        <!--end::Global Javascript Bundle-->
        <!--begin::Vendors Javascript(used for this page only)-->
        <script src="{{url('/')}}/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
        <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
        <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
        <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
        <script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
        <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
        <script src="https://cdn.amcharts.com/lib/5/map.js"></script>
        <script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
        <script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
        <script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
        <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
        <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
        <script src="{{url('/')}}/assets/plugins/custom/datatables/datatables.bundle.js"></script>
        <!--end::Vendors Javascript-->
        <!--begin::Custom Javascript(used for this page only)-->
        <script src="{{url('/')}}/assets/js/widgets.bundle.js"></script>
        <script src="{{url('/')}}/assets/js/custom/widgets.js"></script>
        <script src="{{url('/')}}/assets/js/custom/apps/chat/chat.js"></script>
        <script src="{{url('/')}}/assets/js/custom/utilities/modals/upgrade-plan.js"></script>
        <script src="{{url('/')}}/assets/js/custom/utilities/modals/users-search.js"></script>
        <script src="{{url('/')}}/assets/dist/snackbar.min.js"></script>
        <!--end::Custom Javascript-->
        @yield('script')       
        <!--end::Javascript-->
    </body>
    <!--end::Body-->
</html>

