<!doctype html>
<html lang="en">

<head>
    <base href="{{asset('/')}}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard (CodeLean) created using build-in elements and components.">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{asset('Dashboard/main.css')}}" rel="stylesheet">
    <link href="{{asset('Dashboard/my_style.css')}}" rel="stylesheet">
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>
            <div class="app-header__content">
                <div class="app-header-left">
                    <div class="search-wrapper">
                        <div class="input-holder">
                            <input type="text" class="search-input" placeholder="Type to search">
                            <button class="search-icon"><span></span></button>
                        </div>
                        <button class="close"></button>
                    </div>
                    <!-- <ul class="header-megamenu nav">
                        <li class="nav-item">
                            <a href="javascript:void(0);" data-placement="bottom" rel="popover-focus" data-offset="300" data-toggle="popover-custom" class="nav-link">
                                <i class="nav-link-icon pe-7s-gift"> </i> Mega Menu
                                <i class="fa fa-angle-down ml-2 opacity-5"></i>
                            </a>
                            <div class="rm-max-width">
                                <div class="d-none popover-custom-content">
                                    <div class="dropdown-mega-menu">
                                        <div class="grid-menu grid-menu-3col">
                                            <div class="no-gutters row">
                                                <div class="col-sm-6 col-xl-4">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item-header nav-item"> Overview</li>
                                                        <li class="nav-item">
                                                            <a href="javascript:void(0);" class="nav-link">
                                                                <i class="nav-link-icon lnr-inbox"></i>
                                                                <span> Contacts</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="javascript:void(0);" class="nav-link">
                                                                <i class="nav-link-icon lnr-book"></i>
                                                                <span> Incidents</span>
                                                                <div class="ml-auto badge badge-pill badge-danger">5
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="javascript:void(0);" class="nav-link">
                                                                <i class="nav-link-icon lnr-picture"></i>
                                                                <span> Companies</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a disabled="" href="javascript:void(0);" class="nav-link disabled">
                                                                <i class="nav-link-icon lnr-file-empty"></i>
                                                                <span> Dashboards</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-6 col-xl-4">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item-header nav-item"> Favourites</li>
                                                        <li class="nav-item">
                                                            <a href="javascript:void(0);" class="nav-link"> Reports
                                                                Conversions </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="javascript:void(0);" class="nav-link"> Quick Start
                                                                <div class="ml-auto badge badge-success">New</div>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="javascript:void(0);" class="nav-link">Users &amp;
                                                                Groups</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="javascript:void(0);" class="nav-link">Proprieties</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-6 col-xl-4">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item-header nav-item">Sales &amp; Marketing</li>
                                                        <li class="nav-item">
                                                            <a href="javascript:void(0);" class="nav-link">Queues </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="javascript:void(0);" class="nav-link">Resource
                                                                Groups </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="javascript:void(0);" class="nav-link">Goal Metrics
                                                                <div class="ml-auto badge badge-warning">3</div>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="javascript:void(0);" class="nav-link">Campaigns</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="btn-group nav-item">
                            <a class="nav-link" data-toggle="dropdown" aria-expanded="false">
                                <span class="badge badge-pill badge-danger ml-0 mr-2">4</span> Settings
                                <i class="fa fa-angle-down ml-2 opacity-5"></i>
                            </a>
                            <div tabindex="-1" role="menu" aria-hidden="true" class="rm-pointers dropdown-menu">
                                <div class="dropdown-menu-header">
                                    <div class="dropdown-menu-header-inner bg-secondary">
                                        <div class="menu-header-image opacity-5" style="background-image: url('assets/images/dropdown-header/abstract2.jpg');">
                                        </div>
                                        <div class="menu-header-content">
                                            <h5 class="menu-header-title">Overview</h5>
                                            <h6 class="menu-header-subtitle">Dropdown menus for everyone</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="scroll-area-xs">
                                    <div class="scrollbar-container">
                                        <h6 tabindex="-1" class="dropdown-header">Key Figures</h6>
                                        <button type="button" tabindex="0" class="dropdown-item">Service
                                            Calendar</button>
                                        <button type="button" tabindex="0" class="dropdown-item">Knowledge Base</button>
                                        <button type="button" tabindex="0" class="dropdown-item">Accounts</button>
                                        <div tabindex="-1" class="dropdown-divider"></div>
                                        <button type="button" tabindex="0" class="dropdown-item">Products</button>
                                        <button type="button" tabindex="0" class="dropdown-item">Rollup Queries</button>
                                    </div>
                                </div>
                                <ul class="nav flex-column">
                                    <li class="nav-item-divider nav-item"></li>
                                    <li class="nav-item-btn nav-item">
                                        <button class="btn-wide btn-shadow btn btn-danger btn-sm">Cancel</button>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown nav-item">
                            <a aria-haspopup="true" data-toggle="dropdown" class="nav-link" aria-expanded="false">
                                <i class="nav-link-icon pe-7s-settings"></i> Projects
                                <i class="fa fa-angle-down ml-2 opacity-5"></i>
                            </a>
                            <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-rounded dropdown-menu-lg rm-pointers dropdown-menu">
                                <div class="dropdown-menu-header">
                                    <div class="dropdown-menu-header-inner bg-success">
                                        <div class="menu-header-image opacity-1" style="background-image: url('assets/images/dropdown-header/abstract3.jpg');">
                                        </div>
                                        <div class="menu-header-content text-left">
                                            <h5 class="menu-header-title">Overview</h5>
                                            <h6 class="menu-header-subtitle">Unlimited options</h6>
                                            <div class="menu-header-btn-pane">
                                                <button class="mr-2 btn btn-dark btn-sm">Settings</button>
                                                <button class="btn-icon btn-icon-only btn btn-warning btn-sm">
                                                    <i class="pe-7s-config btn-icon-wrapper"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" tabindex="0" class="dropdown-item">
                                    <i class="dropdown-icon lnr-file-empty"></i>Graphic Design
                                </button>
                                <button type="button" tabindex="0" class="dropdown-item">
                                    <i class="dropdown-icon lnr-file-empty"> </i>App Development
                                </button>
                                <button type="button" tabindex="0" class="dropdown-item">
                                    <i class="dropdown-icon lnr-file-empty"> </i>Icon Design
                                </button>
                                <div tabindex="-1" class="dropdown-divider"></div>
                                <button type="button" tabindex="0" class="dropdown-item">
                                    <i class="dropdown-icon lnr-file-empty"></i>Miscellaneous
                                </button>
                                <button type="button" tabindex="0" class="dropdown-item">
                                    <i class="dropdown-icon lnr-file-empty"></i>Frontend Dev
                                </button>
                            </div>
                        </li>
                    </ul> -->
                </div>
                <div class="app-header-right">
                    <div class="header-dots">
                        <div class="dropdown">
                            <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="p-0 mr-2 btn btn-link">
                                <span class="icon-wrapper icon-wrapper-alt rounded-circle">
                                    <span class="icon-wrapper-bg bg-primary"></span>
                                    <i class="icon text-primary ion-android-apps"></i>
                                </span>
                            </button>
                            <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-xl rm-pointers dropdown-menu dropdown-menu-right">
                                <div class="dropdown-menu-header">
                                    <div class="dropdown-menu-header-inner bg-plum-plate">
                                        <div class="menu-header-image" style="background-image: url('assets/images/dropdown-header/abstract4.jpg');">
                                        </div>
                                        <div class="menu-header-content text-white">
                                            <h5 class="menu-header-title">Grid Dashboard</h5>
                                            <h6 class="menu-header-subtitle">Easy grid navigation inside dropdowns</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-menu grid-menu-xl grid-menu-3col">
                                    <div class="no-gutters row">
                                        <div class="col-sm-6 col-xl-4">
                                            <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                                <i class="pe-7s-world icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3"></i>
                                                Automation
                                            </button>
                                        </div>
                                        <div class="col-sm-6 col-xl-4">
                                            <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                                <i class="pe-7s-piggy icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3">
                                                </i> Reports
                                            </button>
                                        </div>
                                        <div class="col-sm-6 col-xl-4">
                                            <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                                <i class="pe-7s-config icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3">
                                                </i> Settings
                                            </button>
                                        </div>
                                        <div class="col-sm-6 col-xl-4">
                                            <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                                <i class="pe-7s-browser icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3">
                                                </i> Content
                                            </button>
                                        </div>
                                        <div class="col-sm-6 col-xl-4">
                                            <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                                <i class="pe-7s-hourglass icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3"></i>
                                                Activity
                                            </button>
                                        </div>
                                        <div class="col-sm-6 col-xl-4">
                                            <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                                <i class="pe-7s-world icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3">
                                                </i> Contacts
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <ul class="nav flex-column">
                                    <li class="nav-item-divider nav-item"></li>
                                    <li class="nav-item-btn text-center nav-item">
                                        <button class="btn-shadow btn btn-primary btn-sm">Follow-ups</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button type="button" data-toggle="dropdown" class="p-0 mr-2 btn btn-link">
                                <span class="icon-wrapper icon-wrapper-alt rounded-circle">
                                    <span class="icon-wrapper-bg bg-focus"></span>
                                    <span class="language-icon opacity-8 flag large DE"></span>
                                </span>
                            </button>
                            <div tabindex="-1" role="menu" aria-hidden="true" class="rm-pointers dropdown-menu dropdown-menu-right">
                                <div class="dropdown-menu-header">
                                    <div class="dropdown-menu-header-inner pt-4 pb-4 bg-focus">
                                        <div class="menu-header-image opacity-05" style="background-image: url('assets/images/dropdown-header/city2.jpg');">
                                        </div>
                                        <div class="menu-header-content text-center text-white">
                                            <h6 class="menu-header-subtitle mt-0"> Choose Language</h6>
                                        </div>
                                    </div>
                                </div>
                                <h6 tabindex="-1" class="dropdown-header"> Popular Languages</h6>
                                <button type="button" tabindex="0" class="dropdown-item">
                                    <span class="mr-3 opacity-8 flag large US"></span> USA
                                </button>
                                <button type="button" tabindex="0" class="dropdown-item">
                                    <span class="mr-3 opacity-8 flag large CH"></span> Switzerland
                                </button>
                                <button type="button" tabindex="0" class="dropdown-item">
                                    <span class="mr-3 opacity-8 flag large FR"></span> France
                                </button>
                                <button type="button" tabindex="0" class="dropdown-item">
                                    <span class="mr-3 opacity-8 flag large ES"></span>Spain
                                </button>
                                <div tabindex="-1" class="dropdown-divider"></div>
                                <h6 tabindex="-1" class="dropdown-header">Others</h6>
                                <button type="button" tabindex="0" class="dropdown-item active">
                                    <span class="mr-3 opacity-8 flag large DE"></span> Germany
                                </button>
                                <button type="button" tabindex="0" class="dropdown-item">
                                    <span class="mr-3 opacity-8 flag large IT"></span> Italy
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="42" class="rounded-circle" src="Frontend/img/user/{{Auth::user()->avatar ?? 'avatar-default.jpeg'}}" alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="rm-pointers dropdown-menu-lg dropdown-menu dropdown-menu-right">
                                            <div class="dropdown-menu-header">
                                                <div class="dropdown-menu-header-inner bg-info">
                                                    <div class="menu-header-image opacity-2" style="background-image: url('assets/images/dropdown-header/city3.jpg');">
                                                    </div>
                                                    <div class="menu-header-content text-left">
                                                        <div class="widget-content p-0">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left mr-3">
                                                                    <img width="42" class="rounded-circle" src="Frontend/img/user/{{Auth::user()->avatar ?? 'avatar-default.jpeg'}}" alt="">
                                                                </div>
                                                                <div class="widget-content-left">
                                                                    <div class="widget-heading">{{Auth::user()->name ?? ''}}</div>
                                                                    <div class="widget-subheading opacity-8">{{Auth::user()->email ?? ''}}</div>
                                                                </div>
                                                                <div class="widget-content-right mr-2">
                                                                    <a href="/admin/logout" class="btn-pill btn-shadow btn-shine btn btn-focus">
                                                                        Logout
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="scroll-area-xs" style="height: 150px;">
                                                <div class="scrollbar-container ps">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item-header nav-item">Activity</li>
                                                        <li class="nav-item">
                                                            <a href="javascript:void(0);" class="nav-link">Chat
                                                                <div class="ml-auto badge badge-pill badge-info">8</div>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="javascript:void(0);" class="nav-link">Recover
                                                                Password</a>
                                                        </li>
                                                        <li class="nav-item-header nav-item">My Account
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="javascript:void(0);" class="nav-link">Settings
                                                                <div class="ml-auto badge badge-success">New</div>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="javascript:void(0);" class="nav-link">Messages
                                                                <div class="ml-auto badge badge-warning">512</div>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="javascript:void(0);" class="nav-link">Logs</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <ul class="nav flex-column">
                                                <li class="nav-item-divider mb-0 nav-item"></li>
                                            </ul>
                                            <div class="grid-menu grid-menu-2col">
                                                <div class="no-gutters row">
                                                    <div class="col-sm-6">
                                                        <button class="btn-icon-vertical btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-warning">
                                                            <i class="pe-7s-chat icon-gradient bg-amy-crisp btn-icon-wrapper mb-2"></i>
                                                            Message Inbox
                                                        </button>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <button class="btn-icon-vertical btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-danger">
                                                            <i class="pe-7s-ticket icon-gradient bg-love-kiss btn-icon-wrapper mb-2"></i>
                                                            <b>Support Tickets</b>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="nav flex-column">
                                                <li class="nav-item-divider nav-item">
                                                </li>
                                                <li class="nav-item-btn text-center nav-item">
                                                    <button class="btn-wide btn btn-primary btn-sm"> Open Messages
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading"> {{Auth::user()->name ?? ''}} </div>
                                    <div class="widget-subheading"> {{App\Utilities\Constant::$user_level[Auth::user()->level ?? ''] ?? ''}}</div>
                                </div>
                                <div class="widget-content-right header-user-info ml-3">
                                    <button type="button" class="btn-shadow p-1 btn btn-primary btn-sm show-toastr-example">
                                        <i class="fa text-white fa-calendar pr-1 pl-1"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="ui-theme-settings">
            <button type="button" id="TooltipDemo" class="btn-open-options btn btn-warning">
                <i class="fa fa-cog fa-w-16 fa-spin fa-2x"></i>
            </button>
            <div class="theme-settings__inner">
                <div class="scrollbar-container">
                    <div class="theme-settings__options-wrapper">
                        <h3 class="themeoptions-heading">Layout Options</h3>
                        <div class="p-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="switch has-switch switch-container-class" data-class="fixed-header">
                                                    <div class="switch-animate switch-on">
                                                        <input type="checkbox" checked data-toggle="toggle" data-onstyle="success">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Fixed Header</div>
                                                <div class="widget-subheading">Makes the header top fixed, always
                                                    visible!</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="switch has-switch switch-container-class" data-class="fixed-sidebar">
                                                    <div class="switch-animate switch-on">
                                                        <input type="checkbox" checked data-toggle="toggle" data-onstyle="success">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Fixed Sidebar</div>
                                                <div class="widget-subheading">Makes the sidebar left fixed, always
                                                    visible!</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="switch has-switch switch-container-class" data-class="fixed-footer">
                                                    <div class="switch-animate switch-off">
                                                        <input type="checkbox" data-toggle="toggle" data-onstyle="success">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Fixed Footer</div>
                                                <div class="widget-subheading">Makes the app footer bottom fixed, always
                                                    visible!</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <h3 class="themeoptions-heading">
                            <div> Header Options </div>
                            <button type="button" class="btn-pill btn-shadow btn-wide ml-auto btn btn-focus btn-sm switch-header-cs-class" data-class="">
                                Restore Default
                            </button>
                        </h3>
                        <div class="p-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <h5 class="pb-2">Choose Color Scheme</h5>
                                    <div class="theme-settings-swatches">
                                        <div class="swatch-holder bg-primary switch-header-cs-class" data-class="bg-primary header-text-light"></div>
                                        <div class="swatch-holder bg-secondary switch-header-cs-class" data-class="bg-secondary header-text-light"></div>
                                        <div class="swatch-holder bg-success switch-header-cs-class" data-class="bg-success header-text-light"></div>
                                        <div class="swatch-holder bg-info switch-header-cs-class" data-class="bg-info header-text-light"></div>
                                        <div class="swatch-holder bg-warning switch-header-cs-class" data-class="bg-warning header-text-dark"></div>
                                        <div class="swatch-holder bg-danger switch-header-cs-class" data-class="bg-danger header-text-light"></div>
                                        <div class="swatch-holder bg-light switch-header-cs-class" data-class="bg-light header-text-dark"></div>
                                        <div class="swatch-holder bg-dark switch-header-cs-class" data-class="bg-dark header-text-light"></div>
                                        <div class="swatch-holder bg-focus switch-header-cs-class" data-class="bg-focus header-text-light"></div>
                                        <div class="swatch-holder bg-alternate switch-header-cs-class" data-class="bg-alternate header-text-light"></div>
                                        <div class="divider"></div>
                                        <div class="swatch-holder bg-vicious-stance switch-header-cs-class" data-class="bg-vicious-stance header-text-light"></div>
                                        <div class="swatch-holder bg-midnight-bloom switch-header-cs-class" data-class="bg-midnight-bloom header-text-light"></div>
                                        <div class="swatch-holder bg-night-sky switch-header-cs-class" data-class="bg-night-sky header-text-light"></div>
                                        <div class="swatch-holder bg-slick-carbon switch-header-cs-class" data-class="bg-slick-carbon header-text-light"></div>
                                        <div class="swatch-holder bg-asteroid switch-header-cs-class" data-class="bg-asteroid header-text-light"></div>
                                        <div class="swatch-holder bg-royal switch-header-cs-class" data-class="bg-royal header-text-light"></div>
                                        <div class="swatch-holder bg-warm-flame switch-header-cs-class" data-class="bg-warm-flame header-text-dark"></div>
                                        <div class="swatch-holder bg-night-fade switch-header-cs-class" data-class="bg-night-fade header-text-dark"></div>
                                        <div class="swatch-holder bg-sunny-morning switch-header-cs-class" data-class="bg-sunny-morning header-text-dark"></div>
                                        <div class="swatch-holder bg-tempting-azure switch-header-cs-class" data-class="bg-tempting-azure header-text-dark"></div>
                                        <div class="swatch-holder bg-amy-crisp switch-header-cs-class" data-class="bg-amy-crisp header-text-dark"></div>
                                        <div class="swatch-holder bg-heavy-rain switch-header-cs-class" data-class="bg-heavy-rain header-text-dark"></div>
                                        <div class="swatch-holder bg-mean-fruit switch-header-cs-class" data-class="bg-mean-fruit header-text-dark"></div>
                                        <div class="swatch-holder bg-malibu-beach switch-header-cs-class" data-class="bg-malibu-beach header-text-light"></div>
                                        <div class="swatch-holder bg-deep-blue switch-header-cs-class" data-class="bg-deep-blue header-text-dark"></div>
                                        <div class="swatch-holder bg-ripe-malin switch-header-cs-class" data-class="bg-ripe-malin header-text-light"></div>
                                        <div class="swatch-holder bg-arielle-smile switch-header-cs-class" data-class="bg-arielle-smile header-text-light"></div>
                                        <div class="swatch-holder bg-plum-plate switch-header-cs-class" data-class="bg-plum-plate header-text-light"></div>
                                        <div class="swatch-holder bg-happy-fisher switch-header-cs-class" data-class="bg-happy-fisher header-text-dark"></div>
                                        <div class="swatch-holder bg-happy-itmeo switch-header-cs-class" data-class="bg-happy-itmeo header-text-light"></div>
                                        <div class="swatch-holder bg-mixed-hopes switch-header-cs-class" data-class="bg-mixed-hopes header-text-light"></div>
                                        <div class="swatch-holder bg-strong-bliss switch-header-cs-class" data-class="bg-strong-bliss header-text-light"></div>
                                        <div class="swatch-holder bg-grow-early switch-header-cs-class" data-class="bg-grow-early header-text-light"></div>
                                        <div class="swatch-holder bg-love-kiss switch-header-cs-class" data-class="bg-love-kiss header-text-light"></div>
                                        <div class="swatch-holder bg-premium-dark switch-header-cs-class" data-class="bg-premium-dark header-text-light"></div>
                                        <div class="swatch-holder bg-happy-green switch-header-cs-class" data-class="bg-happy-green header-text-light"></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <h3 class="themeoptions-heading">
                            <div>Sidebar Options</div>
                            <button type="button" class="btn-pill btn-shadow btn-wide ml-auto btn btn-focus btn-sm switch-sidebar-cs-class" data-class="">
                                Restore Default
                            </button>
                        </h3>
                        <div class="p-3">
                            <ul class="list-group">
                                <!--<li class="list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="switch has-switch" data-on-label="ON" data-off-label="OFF">
                                                    <div class="switch-animate switch-off">
                                                        <input type="checkbox" data-toggle="toggle" data-onstyle="success">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Sidebar Background Image
                                                </div>
                                                <div class="widget-subheading">Enable background images for sidebar!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>-->
                                <li class="list-group-item">
                                    <h5 class="pb-2">Choose Color Scheme</h5>
                                    <div class="theme-settings-swatches">
                                        <div class="swatch-holder bg-primary switch-sidebar-cs-class" data-class="bg-primary sidebar-text-light"></div>
                                        <div class="swatch-holder bg-secondary switch-sidebar-cs-class" data-class="bg-secondary sidebar-text-light"></div>
                                        <div class="swatch-holder bg-success switch-sidebar-cs-class" data-class="bg-success sidebar-text-dark"></div>
                                        <div class="swatch-holder bg-info switch-sidebar-cs-class" data-class="bg-info sidebar-text-dark"></div>
                                        <div class="swatch-holder bg-warning switch-sidebar-cs-class" data-class="bg-warning sidebar-text-dark"></div>
                                        <div class="swatch-holder bg-danger switch-sidebar-cs-class" data-class="bg-danger sidebar-text-light"></div>
                                        <div class="swatch-holder bg-light switch-sidebar-cs-class" data-class="bg-light sidebar-text-dark"></div>
                                        <div class="swatch-holder bg-dark switch-sidebar-cs-class" data-class="bg-dark sidebar-text-light"></div>
                                        <div class="swatch-holder bg-focus switch-sidebar-cs-class" data-class="bg-focus sidebar-text-light"></div>
                                        <div class="swatch-holder bg-alternate switch-sidebar-cs-class" data-class="bg-alternate sidebar-text-light"></div>
                                        <div class="divider"></div>
                                        <div class="swatch-holder bg-vicious-stance switch-sidebar-cs-class" data-class="bg-vicious-stance sidebar-text-light"></div>
                                        <div class="swatch-holder bg-midnight-bloom switch-sidebar-cs-class" data-class="bg-midnight-bloom sidebar-text-light"></div>
                                        <div class="swatch-holder bg-night-sky switch-sidebar-cs-class" data-class="bg-night-sky sidebar-text-light"></div>
                                        <div class="swatch-holder bg-slick-carbon switch-sidebar-cs-class" data-class="bg-slick-carbon sidebar-text-light"></div>
                                        <div class="swatch-holder bg-asteroid switch-sidebar-cs-class" data-class="bg-asteroid sidebar-text-light"></div>
                                        <div class="swatch-holder bg-royal switch-sidebar-cs-class" data-class="bg-royal sidebar-text-light"></div>
                                        <div class="swatch-holder bg-warm-flame switch-sidebar-cs-class" data-class="bg-warm-flame sidebar-text-dark"></div>
                                        <div class="swatch-holder bg-night-fade switch-sidebar-cs-class" data-class="bg-night-fade sidebar-text-dark"></div>
                                        <div class="swatch-holder bg-sunny-morning switch-sidebar-cs-class" data-class="bg-sunny-morning sidebar-text-dark"></div>
                                        <div class="swatch-holder bg-tempting-azure switch-sidebar-cs-class" data-class="bg-tempting-azure sidebar-text-dark"></div>
                                        <div class="swatch-holder bg-amy-crisp switch-sidebar-cs-class" data-class="bg-amy-crisp sidebar-text-dark"></div>
                                        <div class="swatch-holder bg-heavy-rain switch-sidebar-cs-class" data-class="bg-heavy-rain sidebar-text-dark"></div>
                                        <div class="swatch-holder bg-mean-fruit switch-sidebar-cs-class" data-class="bg-mean-fruit sidebar-text-dark"></div>
                                        <div class="swatch-holder bg-malibu-beach switch-sidebar-cs-class" data-class="bg-malibu-beach sidebar-text-light"></div>
                                        <div class="swatch-holder bg-deep-blue switch-sidebar-cs-class" data-class="bg-deep-blue sidebar-text-dark"></div>
                                        <div class="swatch-holder bg-ripe-malin switch-sidebar-cs-class" data-class="bg-ripe-malin sidebar-text-light"></div>
                                        <div class="swatch-holder bg-arielle-smile switch-sidebar-cs-class" data-class="bg-arielle-smile sidebar-text-light"></div>
                                        <div class="swatch-holder bg-plum-plate switch-sidebar-cs-class" data-class="bg-plum-plate sidebar-text-light"></div>
                                        <div class="swatch-holder bg-happy-fisher switch-sidebar-cs-class" data-class="bg-happy-fisher sidebar-text-dark"></div>
                                        <div class="swatch-holder bg-happy-itmeo switch-sidebar-cs-class" data-class="bg-happy-itmeo sidebar-text-light"></div>
                                        <div class="swatch-holder bg-mixed-hopes switch-sidebar-cs-class" data-class="bg-mixed-hopes sidebar-text-light"></div>
                                        <div class="swatch-holder bg-strong-bliss switch-sidebar-cs-class" data-class="bg-strong-bliss sidebar-text-light"></div>
                                        <div class="swatch-holder bg-grow-early switch-sidebar-cs-class" data-class="bg-grow-early sidebar-text-light"></div>
                                        <div class="swatch-holder bg-love-kiss switch-sidebar-cs-class" data-class="bg-love-kiss sidebar-text-light"></div>
                                        <div class="swatch-holder bg-premium-dark switch-sidebar-cs-class" data-class="bg-premium-dark sidebar-text-light"></div>
                                        <div class="swatch-holder bg-happy-green switch-sidebar-cs-class" data-class="bg-happy-green sidebar-text-light"></div>
                                    </div>
                                </li>
                                <!--<li class="theme-settings-swatches d-none list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Background Opacity
                                                </div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div role="group" class="btn-group-sm btn-group">
                                                    <button type="button" class="btn-shadow opacity-3 active btn btn-primary">4%
                                                    </button>
                                                    <button type="button" class="btn-shadow opacity-4 btn btn-primary">6%
                                                    </button>
                                                    <button type="button" class="btn-shadow opacity-5 btn btn-primary">8%
                                                    </button>
                                                    <button type="button" class="btn-shadow opacity-6 btn btn-primary">10%
                                                    </button>
                                                    <button type="button" class="btn-shadow opacity-7 btn btn-primary">15%
                                                    </button>
                                                    <button type="button" class="btn-shadow opacity-8 btn btn-primary">20%
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>-->
                                <!--<li class="theme-settings-swatches d-none list-group-item">
                                    <h5>Sidebar Image Background
                                    </h5>
                                    <div class="divider">
                                    </div>
                                    <div class="swatch-holder swatch-holder-img active">
                                        <a class="img-holder switch-trigger">
                                            <img alt=" " src="assets/images/sidebar/city1.jpg">
                                        </a>
                                    </div>
                                    <div class="swatch-holder swatch-holder-img">
                                        <a class="img-holder switch-trigger">
                                            <img alt=" " src="assets/images/sidebar/city2.jpg">
                                        </a>
                                    </div>
                                    <div class="swatch-holder swatch-holder-img">
                                        <a class="img-holder switch-trigger">
                                            <img alt=" " src="assets/images/sidebar/city3.jpg">
                                        </a>
                                    </div>
                                    <div class="swatch-holder swatch-holder-img">
                                        <a class="img-holder switch-trigger">
                                            <img alt=" " src="assets/images/sidebar/city4.jpg">
                                        </a>
                                    </div>
                                    <div class="swatch-holder swatch-holder-img">
                                        <a class="img-holder switch-trigger">
                                            <img alt=" " src="assets/images/sidebar/city5.jpg">
                                        </a>
                                    </div>
                                    <div class="swatch-holder swatch-holder-img">
                                        <a class="img-holder switch-trigger">
                                            <img alt=" " src="assets/images/sidebar/abstract1.jpg">
                                        </a>
                                    </div>
                                    <div class="swatch-holder swatch-holder-img">
                                        <a class="img-holder switch-trigger">
                                            <img alt=" " src="assets/images/sidebar/abstract2.jpg">
                                        </a>
                                    </div>
                                    <div class="swatch-holder swatch-holder-img">
                                        <a class="img-holder switch-trigger">
                                            <img alt=" " src="assets/images/sidebar/abstract3.jpg">
                                        </a>
                                    </div>
                                    <div class="swatch-holder swatch-holder-img">
                                        <a class="img-holder switch-trigger">
                                            <img alt=" " src="assets/images/sidebar/abstract4.jpg">
                                        </a>
                                    </div>
                                    <div class="swatch-holder swatch-holder-img">
                                        <a class="img-holder switch-trigger">
                                            <img alt=" " src="assets/images/sidebar/abstract5.jpg">
                                        </a>
                                    </div>
                                </li>-->
                            </ul>
                        </div>
                        <h3 class="themeoptions-heading">
                            <div>Main Content Options</div>
                            <button type="button" class="btn-pill btn-shadow btn-wide ml-auto active btn btn-focus btn-sm">Restore
                                Default</button>
                        </h3>
                        <div class="p-3">
                            <ul class="list-group">
                                <!--<li class="list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="switch has-switch" data-on-label="ON" data-off-label="OFF">
                                                    <div class="switch-animate switch-on">
                                                        <input type="checkbox" data-toggle="toggle" data-onstyle="success">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Page Title Icon
                                                </div>
                                                <div class="widget-subheading">Enable the icon box for page titles!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="switch has-switch" data-on-label="ON" data-off-label="OFF">
                                                    <div class="switch-animate switch-on">
                                                        <input type="checkbox" data-toggle="toggle" data-onstyle="success">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Page Title Description
                                                </div>
                                                <div class="widget-subheading">Enable the description below page title!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>-->
                                <li class="list-group-item">
                                    <h5 class="pb-2">Page Section Tabs</h5>
                                    <div class="theme-settings-swatches">
                                        <div role="group" class="mt-2 btn-group">
                                            <button type="button" class="btn-wide btn-shadow btn-primary btn btn-secondary switch-theme-class" data-class="body-tabs-line"> Line</button>
                                            <button type="button" class="btn-wide btn-shadow btn-primary active btn btn-secondary switch-theme-class" data-class="body-tabs-shadow"> Shadow </button>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <h5 class="pb-2">Light Color Schemes
                                    </h5>
                                    <div class="theme-settings-swatches">
                                        <div role="group" class="mt-2 btn-group">
                                            <button type="button" class="btn-wide btn-shadow btn-primary active btn btn-secondary switch-theme-class" data-class="app-theme-white"> White Theme</button>
                                            <button type="button" class="btn-wide btn-shadow btn-primary btn btn-secondary switch-theme-class" data-class="app-theme-gray"> Gray Theme</button>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="app-main">
            <div class="app-sidebar sidebar-shadow">
                <div class="app-header__logo">
                    <div class="logo-src"></div>
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="app-header__menu">
                    <span>
                        <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
                </div>
                <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu">
                            <li class="app-sidebar__heading">Menu</li>

                            <li class="mm-active">
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-plugin"></i>Managers
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="/admin" class="{{request()->segment(2) =='' ? 'mm-active' : ''}}">
                                            <i class="metismenu-icon"></i>Dashboard
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/admin/user" class="{{request()->segment(2) =='user' ? 'mm-active' : ''}}">
                                            <i class="metismenu-icon"></i>User
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/admin/order" class="{{request()->segment(2) =='order' ? 'mm-active' : ''}}">
                                            <i class="metismenu-icon"></i>Order
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/admin/product" class="{{request()->segment(2) =='product' ? 'mm-active' : ''}}">
                                            <i class="metismenu-icon"></i>Product
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/admin/category" class="{{request()->segment(2) =='category' ? 'mm-active' : ''}}">
                                            <i class="metismenu-icon"></i>Category
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/admin/brand" class="{{request()->segment(2) =='brand' ? 'mm-active' : ''}}">
                                            <i class="metismenu-icon"></i>Brand
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/admin/blog" class="{{request()->segment(2) =='blog' ? 'mm-active' : ''}}">
                                            <i class="metismenu-icon"></i>BLog
                                        </a>
                                    </li>
                                    <li>
                                        <a class="{{request()->segment(2) =='comment' ? 'mm-active' : ''}}">
                                            <i class="metismenu-icon"></i>Comment
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="/admin/comment/blog" class="{{request()->segment(3) =='blog' ? 'mm-active' : ''}}">
                                                    <i class="metismenu-icon"></i>Blog
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/admin/comment/product" class="{{request()->segment(3) =='product' ? 'mm-active' : ''}}">
                                                    <i class="metismenu-icon"></i>Product
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="app-main__outer">
                @yield('body')
            </div>
        </div>

    </div>
    <div class="app-drawer-overlay d-none animated fadeIn"></div>

    <script src="{{asset('Dashboard/assets/scripts/jquery-3.2.1.min.js')}}"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="{{asset('Dashboard/assets/scripts/main.js')}}"></script>
    <script type="text/javascript" src="{{asset('Dashboard/assets/scripts/my_script.js')}}"></script>
</body>

</html>