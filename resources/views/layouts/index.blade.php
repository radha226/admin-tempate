<!DOCTYPE html>
<html lang="en">

@include('component.head')
<body class="sidebar-color-grey font-source-sans-pro"><!--Modal Default-->
@include('component.sidebar_collapse')
    <!--END TEMPLATE SETTING--><!--BEGIN TOPBAR-->
   @include('component.topbar')
    <!--END TOPBAR--><!--BEGIN HORIZONTAL MENU-->
    <div class="page-horizontal-menu">
        <div id="horizontal-menu" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.html"><i class="icon-home"></i><span
                        class="menu-title">Dashboard</span></a></li>
                <li><a href="page_profile.html"><i class="icon-user"></i><span
                        class="menu-title">User Profile</span></a></li>
                <li><a href="page_mail.html"><i class="icon-envelope"></i><span class="menu-title">Mail Box</span></a>
                </li>
                <li class="dropdown"><a href="#" data-hover="dropdown" class="dropdown-toggle"><i
                        class="icon-screen-desktop"></i><span class="menu-title">Layouts</span></a>
                    <ul class="dropdown-menu">
                        <li><a href="layout_full_width.html"><span class="submenu-title">Full width</span></a></li>
                        <li><a href="layout_boxed.html"><span class="submenu-title">Boxed</span></a></li>
                        <li class="hidden-sm"><a href="layout_sidebar_collapsed.html"><span class="submenu-title">Sidebar Collapsed</span></a>
                        </li>
                        <li class="hidden-sm"><a href="layout_sidebar_fixed.html"><span class="submenu-title">Sidebar fixed</span></a>
                        </li>
                        <li class="hidden-sm"><a href="layout_sidebar_collapsed_fixed.html"><span class="submenu-title">Sidebar collapsed & fixed</span></a>
                        </li>
                        <li><a href="layout_horizontal_menu.html"><span class="submenu-title">Horizontal Menu</span></a>
                        </li>
                        <li><a href="layout_header_fixed.html"><span class="submenu-title">Header Fixed</span></a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#" data-hover="dropdown" class="dropdown-toggle"><i
                        class="icon-magic-wand"></i><span class="menu-title">UI Elements</span><span
                        class="badge badge-danger">3</span></a>
                    <ul class="dropdown-menu">
                        <li><a href="ui_general.html"><span class="submenu-title">General</span><span
                                class="badge badge-success">10</span></a></li>
                        <li><a href="ui_buttons.html"><span class="submenu-title">Buttons</span></a></li>
                        <li><a href="ui_typography.html"><span class="submenu-title">Typography</span></a></li>
                        <li><a href="ui_tabs_accordions.html"><span class="submenu-title">Tabs & Accordions</span></a>
                        </li>
                        <li><a href="ui_modals.html"><span class="submenu-title">Modals</span></a></li>
                        <li><a href="ui_treeview.html"><span class="submenu-title">Tree view</span></a></li>
                        <li><a href="ui_icons.html"><span class="submenu-title">Icons</span></a></li>
                        <li><a href="ui_panels.html"><span class="submenu-title">Panels</span></a></li>
                        <li><a href="ui_nestable_list.html"><span class="submenu-title">Nestable List</span></a></li>
                        <li><a href="ui_toastr.html"><span class="submenu-title">Toastr Notifications</span></a></li>
                        <li><a href="ui_datepaginator.html"><span class="submenu-title">Date Paginator</span></a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#" data-hover="dropdown" class="dropdown-toggle"><i class="icon-note"></i><span
                        class="menu-title">Forms</span></a>
                    <ul class="dropdown-menu">
                        <li><a href="form_components.html"><span class="submenu-title">Form Component</span><span
                                class="label label-info">8</span></a></li>
                        <li><a href="form_wizard.html"><span class="submenu-title">Form Wizard</span></a></li>
                        <li><a href="form_validation.html"><span class="submenu-title">Form Validation</span></a></li>
                        <li><a href="form_select.html"><span class="submenu-title">Dropdown & Select</span></a></li>
                        <li><a href="form_picker.html"><span class="submenu-title">Picker</span></a></li>
                        <li><a href="form_editor.html"><span class="submenu-title">Editor</span></a></li>
                        <li><a href="form_dropzone.html"><span class="submenu-title">Dropzone File Upload</span></a>
                        </li>
                        <li><a href="form_multiple_file_upload.html"><span
                                class="submenu-title">Multiple File Upload</span></a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#" data-hover="dropdown" class="dropdown-toggle"><i class="icon-grid"></i><span
                        class="menu-title">Tables</span></a>
                    <ul class="dropdown-menu">
                        <li><a href="table_basic.html"><span class="submenu-title">Basic table</span></a></li>
                        <li><a href="table_responsive.html"><span class="submenu-title">Responsive table</span></a></li>
                        <li><a href="table_advanced.html"><span class="submenu-title">Advanced table</span></a></li>
                        <li><a href="table_treegrid.html"><span class="submenu-title">Treegrid table</span></a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#" data-hover="dropdown" class="dropdown-toggle"><i
                        class="icon-book-open"></i><span class="menu-title">Pages</span></a>
                    <ul class="dropdown-menu">
                        <li><a href="page_gallery.html"><span class="submenu-title">Gallery</span></a></li>
                        <li><a href="page_calendar.html"><span class="submenu-title">Calendar</span></a></li>
                        <li><a href="page_invoice.html"><span class="submenu-title">Invoice</span></a></li>
                        <li><a href="page_pricing_table.html"><span class="submenu-title">Pricing Table</span></a></li>
                        <li><a href="page_search.html"><span class="submenu-title">Search</span></a></li>
                        <li><a href="page_signin.html"><span class="submenu-title">Sign in</span></a></li>
                        <li><a href="page_signup.html"><span class="submenu-title">Sign up</span></a></li>
                        <li><a href="page_lock_screen.html"><span class="submenu-title">Lock screen</span></a></li>
                        <li><a href="page_404.html"><span class="submenu-title">Page 404</span></a></li>
                        <li><a href="page_500.html"><span class="submenu-title">Page 500</span></a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#" data-hover="dropdown" class="dropdown-toggle"><i
                        class="icon-bar-chart"></i><span class="menu-title">Chart</span><span
                        class="badge badge-warning">8</span></a>
                    <ul class="dropdown-menu">
                        <li><a href="charts_chartjs.html"><span class="submenu-title">ChartJs</span></a></li>
                        <li><a href="charts_flot.html"><span class="submenu-title">Flot Charts</span></a></li>
                        <li><a href="charts_sparklines.html"><span class="submenu-title">Sparklines Charts</span></a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!--END HORIZONTAL MENU-->
    <div id="wrapper"><!--BEGIN PAGE WRAPPER-->
        <div id="page-wrapper"><!--BEGIN SIDEBAR MAIN-->
            <div class="sidebar-main sidebar">
                <div class="sidebar-collapse sidebar-scroll">
                    <ul id="sidebar-main" class="nav">
                        <li class="sidebar-search">
                            <form action="#" class="form-search">
                                <div class="input-icon right"><i class="icon-magnifier"></i><input type="text"
                                                                                                   placeholder="Search..."
                                                                                                   class="form-control"/>
                                </div>
                            </form>
                        </li>
                        <li class="sidebar-hide"><h4 class="sidebar-title-section">Main</h4></li>
                        <li class="active"><a href="index.html"><i class="icon-home"></i><span class="menu-title">Dashboard</span></a>
                        </li>
                        <li><a href="page_profile.html"><i class="icon-user"></i><span class="menu-title">Profile</span><span
                                class="badge badge-success">80%</span></a></li>
                        <li><a href="page_calendar.html"><i class="icon-calendar"></i><span
                                class="menu-title">Calendar</span><span class="badge badge-warning">2 events</span></a>
                        </li>
                        <li class="sidebar-hide"><h4 class="sidebar-title-section">All Components</h4></li>
                        <li><a href="#"><i class="icon-screen-desktop"></i><span
                                class="menu-title">Quick Use</span><span class="arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="layout_full_width.html"><span class="submenu-title">Full width</span></a>
                                </li>
                                <li><a href="layout_boxed.html"><span class="submenu-title">Boxed</span></a></li>
                                <li class="hidden-sm"><a href="layout_sidebar_collapsed.html"><span
                                        class="submenu-title">Sidebar Collapsed</span></a></li>
                                <li class="hidden-sm"><a href="layout_sidebar_fixed.html"><span class="submenu-title">Sidebar fixed</span></a>
                                </li>
                                <li class="hidden-sm"><a href="layout_sidebar_collapsed_fixed.html"><span
                                        class="submenu-title">Sidebar collapsed & fixed</span></a></li>
                                <li><a href="layout_horizontal_menu.html"><span
                                        class="submenu-title">Horizontal Menu</span></a></li>
                                <li><a href="layout_header_fixed.html"><span
                                        class="submenu-title">Header Fixed</span></a></li>
                                <li><a href="layout_dark_style.html"><span class="submenu-title">Dark Style</span></a>
                                </li>
                                <li><a href="layout_light_style.html"><span class="submenu-title">Light Style</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#"><i class="icon-magic-wand"></i><span class="menu-title">UI Elements</span><span
                                class="arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="ui_general.html"><span class="submenu-title">General</span><span
                                        class="badge badge-success">10</span></a></li>
                                <li><a href="ui_buttons.html"><span class="submenu-title">Buttons</span></a></li>
                                <li><a href="ui_typography.html"><span class="submenu-title">Typography</span></a></li>
                                <li><a href="ui_tabs_accordions.html"><span
                                        class="submenu-title">Tabs & Accordions</span></a></li>
                                <li><a href="ui_modals.html"><span class="submenu-title">Modals</span></a></li>
                                <li><a href="ui_treeview.html"><span class="submenu-title">Tree view</span></a></li>
                                <li><a href="ui_icons.html"><span class="submenu-title">Icons</span></a></li>
                                <li><a href="ui_panels.html"><span class="submenu-title">Panels</span></a></li>
                                <li><a href="ui_nestable_list.html"><span class="submenu-title">Nestable List</span></a>
                                </li>
                                <li><a href="ui_toastr.html"><span class="submenu-title">Toastr Notifications</span></a>
                                </li>
                                <li><a href="ui_datepaginator.html"><span
                                        class="submenu-title">Date Paginator</span></a></li>
                                <li><a href="ui_slider.html"><span class="submenu-title">Range 2D Slider</span></a></li>
                            </ul>
                        </li>
                        <li><a href="#"><i class="icon-note"></i><span class="menu-title">Forms</span><span
                                class="arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="form_components.html"><span
                                        class="submenu-title">Form Components</span><span
                                        class="label label-info">8</span></a></li>
                                <li><a href="form_wizard.html"><span class="submenu-title">Form Wizard</span></a></li>
                                <li><a href="form_validation.html"><span
                                        class="submenu-title">Form Validation</span></a></li>
                                <li><a href="form_select.html"><span class="submenu-title">Dropdown & Select</span></a>
                                </li>
                                <li><a href="form_picker.html"><span class="submenu-title">Picker</span></a></li>
                                <li><a href="form_editor.html"><span class="submenu-title">Editor</span></a></li>
                                <li><a href="form_dropzone.html"><span class="submenu-title">Dropzone File Upload</span></a>
                                </li>
                                <li><a href="form_multiple_file_upload.html"><span class="submenu-title">Multiple File Upload</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#"><i class="icon-grid"></i><span class="menu-title">Tables</span><span
                                class="arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="table_basic.html"><span class="submenu-title">Basic table</span></a></li>
                                <li><a href="table_responsive.html"><span class="submenu-title">Responsive table</span></a>
                                </li>
                                <li><a href="table_advanced.html"><span class="submenu-title">Advanced table</span></a>
                                </li>
                                <li><a href="table_treegrid.html"><span class="submenu-title">Treegrid table</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#"><i class="icon-book-open"></i><span class="menu-title">Pages</span><span
                                class="arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="page_gallery.html"><span class="submenu-title">Gallery</span></a></li>
                                <li><a href="page_mail.html"><span class="submenu-title">Mail Box</span><span
                                        class="badge badge-primary">7</span></a></li>
                                <li><a href="page_invoice.html"><span class="submenu-title">Invoice</span></a></li>
                                <li><a href="page_pricing_table.html"><span
                                        class="submenu-title">Pricing Table</span></a></li>
                                <li><a href="page_search.html"><span class="submenu-title">Search</span></a></li>
                                <li><a href="page_signin.html"><span class="submenu-title">Sign in</span></a></li>
                                <li><a href="page_signup.html"><span class="submenu-title">Sign up</span></a></li>
                                <li><a href="page_lock_screen.html"><span class="submenu-title">Lock screen</span></a>
                                </li>
                                <li><a href="page_404.html"><span class="submenu-title">Page 404</span></a></li>
                                <li><a href="page_500.html"><span class="submenu-title">Page 500</span></a></li>
                                <li><a href="page_timeline.html"><span class="submenu-title">Timeline</span></a></li>
                            </ul>
                        </li>
                        <li><a href="#"><i class="icon-bar-chart"></i><span class="menu-title">Charts</span><span
                                class="arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="charts_chartjs.html"><span class="submenu-title">ChartJs</span></a></li>
                                <li><a href="charts_flot.html"><span class="submenu-title">Flot Charts</span></a></li>
                                <li><a href="charts_sparklines.html"><span
                                        class="submenu-title">Sparklines Charts</span></a></li>
                            </ul>
                        </li>
                        <li><a href="#"><i class="icon-compass"></i><span class="menu-title">Maps</span><span
                                class="arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="maps_gmaps.html"><span class="submenu-title">GMaps</span></a></li>
                                <li><a href="maps_vector.html"><span class="submenu-title">Vector maps</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <!--END SIDEBAR MAIN--><!--BEGIN CHAT FORM-->
            <div class="chat-form-wrapper">
                <div id="chat-form">
                    <div class="chat-inner"><h2 class="chat-header"><a href="javascript:;"
                                                                       class="chat-form-close pull-right"><i
                            class="fa fa-times"></i></a><i class="fa fa-user"></i>&nbsp;
                        Active Chat
                        &nbsp;<span class="badge badge-success">5</span></h2>

                        <div id="group-1" class="chat-group"><h4 class="group-title">Recently</h4><a href="#"><img
                                src="../../../s3.amazonaws.com/uifaces/faces/twitter/claudioguglieri/48.jpg"
                                class="avt"/><span class="user-status is-online"></span>
                            <small>Judy Russell</small>
                            <span class="badge badge-info">2</span></a><a href="#"><img
                                src="../../../s3.amazonaws.com/uifaces/faces/twitter/uxceo/48.jpg" class="avt"/><span
                                class="user-status is-online"></span>
                            <small>Eugene Turner</small>
                            <span class="badge badge-info is-hidden">0</span></a><a href="#"><img
                                src="../../../s3.amazonaws.com/uifaces/faces/twitter/rssems/48.jpg" class="avt"/><span
                                class="user-status is-busy"></span>
                            <small>Ann Porter</small>
                            <span class="badge badge-info is-hidden">0</span></a><a href="#"><img
                                src="../../../s3.amazonaws.com/uifaces/faces/twitter/jackmcdade/48.jpg"
                                class="avt"/><span class="user-status is-idle"></span>
                            <small>Benjamin Howell</small>
                            <span class="badge badge-info is-hidden">0</span></a></div>
                        <div id="group-2" class="chat-group"><h4 class="group-title">Work</h4><a href="#"><img
                                src="../../../s3.amazonaws.com/uifaces/faces/twitter/oliveirasimoes/48.jpg" class="avt"/><span
                                class="user-status is-busy"></span>
                            <small>Lawrence Larson</small>
                            <span class="badge badge-info is-hidden">0</span></a><a href="#"><img
                                src="../../../s3.amazonaws.com/uifaces/faces/twitter/adellecharles/48.jpg"
                                class="avt"/><span class="user-status is-offline"></span>
                            <small>Jacqueline Howell</small>
                            <span class="badge badge-info is-hidden">0</span></a><a href="#"><img
                                src="../../../s3.amazonaws.com/uifaces/faces/twitter/jackmcdade/48.jpg"
                                class="avt"/><span class="user-status is-offline"></span>
                            <small>Andrew Brewer</small>
                            <span class="badge badge-info">1</span></a></div>
                        <div id="group-3" class="chat-group"><h4 class="group-title">Friends</h4><a href="#"><img
                                src="../../../s3.amazonaws.com/uifaces/faces/twitter/adellecharles/48.jpg"
                                class="avt"/><span class="user-status is-online"></span>
                            <small>Marilyn Romero</small>
                            <span class="badge badge-info is-hidden">0</span></a><a href="#"><img
                                src="../../../s3.amazonaws.com/uifaces/faces/twitter/rssems/48.jpg" class="avt"/><span
                                class="user-status is-busy"></span>
                            <small>Philip Hall</small>
                            <span class="badge badge-info is-hidden">0</span></a><a href="#"><img
                                src="../../../s3.amazonaws.com/uifaces/faces/twitter/uxceo/48.jpg" class="avt"/><span
                                class="user-status is-offline"></span>
                            <small>Gary Wells</small>
                            <span class="badge badge-info is-hidden">0</span></a></div>
                        <div class="chat-theme-setting text-right">
                            <div id="setting-theme-chat" data-on-label="dark" data-off-label="light"
                                 class="make-switch"><input type="checkbox" class="switch"/></div>
                        </div>
                    </div>
                </div>
                <div class="chat-box-wrapper">
                    <div id="chat-box" style="top:400px">
                        <div class="chat-box-header"><a href="#" class="chat-box-close pull-right mlm"><i
                                class="fa fa-times"></i></a><a href="#" class="chat-box-minimize-btn pull-right"><i
                                class="fa fa-chevron-down"></i></a><span class="user-status is-online"></span><span
                                class="display-name">Willard Mckenzie</span></div>
                        <div class="chat-content">
                            <ul class="chat-box-body">
                                <li><p><img src="../../../api.randomuser.me/portraits/men/27.jpg" class="avt"/><span
                                        class="user">You</span><span class="time">08:44</span></p>

                                    <p>Hi, we have some ideas for this template</p></li>
                                <li class="odd"><p><img
                                        src="../../../s3.amazonaws.com/uifaces/faces/twitter/claudioguglieri/48.jpg"
                                        class="avt"/><span class="user">Jake Rochleau</span><span
                                        class="time">08:45</span></p>

                                    <p>Great! Let tell us now...</p></li>
                            </ul>
                        </div>
                        <div class="chat-textarea"><input placeholder="Type text and press Enter" class="form-control"/>
                        </div>
                    </div>
                    <div class="chat-box-minimize"><img
                            src="../../../s3.amazonaws.com/uifaces/faces/twitter/claudioguglieri/48.jpg"
                            data-pulsate="{border:false,speed:200,reach: 50}" class="img-circle"/><span
                            class="user-status is-online"></span></div>
                </div>
            </div>
            <!--END CHAT FORM--><!--BEGIN PAGE CONTENT-->
            <div class="page-content"><!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">Dashboard</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb hidden-xs hidden">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="index.html">Home</a>&nbsp;&nbsp;<i
                                class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="hidden"><a href="#">Dashboard</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;
                        </li>
                        <li class="active">Dashboard</li>
                    </ol>
                    <ol class="breadcrumb charts-inline hidden-xs pull-right">
                        <li><p><span class="chart-title">Income</span><span
                                values="50000,60000,70000,50000,60000,50000,80000,40000,70000,80000"
                                class="sparkbar green mls mrm"></span><span class="chart-title">Outcome</span><span
                                values="5000,6000,3000,8000,4000,7000,5000,6000,3000,2000"
                                class="sparkbar default mls"></span></p></li>
                    </ol>
                </div>
                <!--END TITLE & BREADCRUMB PAGE-->
                <div class="box-content"><!--BEGIN CONTENT-->
                    <div class="content">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="panel">
                                    <div class="panel-body">
                                        <div id="carousel-example-generic" data-ride="carousel" class="carousel slide">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carousel-example-generic" data-slide-to="0"
                                                    class="active"></li>
                                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="item active"><img
                                                        src="../../../s3.amazonaws.com/uifaces/faces/twitter/nisaanjani/128.jpg"
                                                        alt=""/>

                                                    <div class="carousel-caption"><p>Your eyes can deceive you. Don't
                                                        trust them. I don't know what you're talking about.</p>
                                                        <small><i>Another famous person</i></small>
                                                    </div>
                                                </div>
                                                <div class="item"><img
                                                        src="../../../s3.amazonaws.com/uifaces/faces/twitter/chadengle/73.jpg"
                                                        alt=""/>

                                                    <div class="carousel-caption"><p>Your eyes can deceive you. Don't
                                                        trust them. I don't know what you're talking about.</p>
                                                        <small><i>Another famous person</i></small>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#carousel-example-generic" role="button" data-slide="prev"
                                               class="left carousel-control"><span class="icon-arrow-left"></span></a><a
                                                href="#carousel-example-generic" role="button" data-slide="next"
                                                class="right carousel-control"><span
                                                class="icon-arrow-right"></span></a></div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="panel-body">Earning<span style="font-size: 24px;"
                                                                         class="pull-right">$<span
                                            id='earning-number'></span></span>

                                        <div id="earning-chart" style="width: 100%; height:100px" class="mtl"></div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="panel-body">New Customers<span class="pull-right"> <span
                                            id='new-customer-number' style="font-size: 24px;"></span></span>

                                        <div id="new-customer-chart" style="width: 100%; height:100px"
                                             class="mtl"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="panel">
                                    <div class="panel-body">
                                        <div id="placeholder" style="width: 100%; height:150px"
                                             class="demo-placeholder"></div>
                                        <div class="section section-info"><span class="info-time">Today 2:25 PM</span>

                                            <h3 class="info-title">Salt Lake City, Utah</h3>

                                            <div class="info-block">
                                                <dl>
                                                    <dt>13.5 M</dt>
                                                    <dd>Shares Traded</dd>
                                                </dl>
                                            </div>
                                            <div class="info-block last">
                                                <dl>
                                                    <dt>28.44</dt>
                                                    <dd>Market Cap</dd>
                                                </dl>
                                            </div>
                                            <div class="info-aapl">AAPL
                                                <ul>
                                                    <li><span style="height: 47.5%" class="orange"></span></li>
                                                    <li><span style="height: 70%" class="orange"></span></li>
                                                    <li><span style="height: 70%" class="orange"></span></li>
                                                    <li><span style="height: 40%" class="orange"></span></li>
                                                    <li><span style="height: 75%" class="green"></span></li>
                                                    <li><span style="height: 50%" class="green"></span></li>
                                                    <li><span style="height: 15%" class="green"></span></li>
                                                    <li><span style="height: 25%" class="green"></span></li>
                                                </ul>
                                            </div>
                                            <div class="yearly-change">Yearly Change<span><em>+</em> 127.01</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="panel">
                                    <div class="panel-body"><h3 class="info-title mtn">MOST PLACE IN THE WORLD</h3>
                                        <small>Analytics favourite country user visited</small>
                                        <div class="row mtl">
                                            <div class="col-md-4">
                                                <div id="map-visitor-chart" style="width: 100%; height:200px"></div>
                                            </div>
                                            <div class="col-md-8">
                                                <div id="map-visitor-markers" style="width: 100%; height: 300px"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="widget-weather">
                                    <div class="widget-header"><h5>California USA<span class="caret mls"></span></h5>
                                    </div>
                                    <div class="widget-body">
                                        <div class="date"><p>Dec, 10 - Monday</p></div>
                                        <div class="row">
                                            <div class="col-xs-7"><p class="time">12:30<span>PM</span></p>

                                                <div class="stats"><p>Wind:<span class="text-success">6 mph NE</span>
                                                </p>

                                                    <p>Humidity<span>%</span><span id="number-humidity"
                                                                                   class="text-pink">88</span></p>

                                                    <p>Sunrise:<span>6:30 AM</span></p>

                                                    <p>Sunset<span>5:40 PM</span></p></div>
                                            </div>
                                            <div class="col-xs-5">
                                                <canvas id="icon1" width="60px" height="60px"></canvas>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="items">
                                                <div class="item col-xs-3"><p>France</p>
                                                    <canvas id="icon2" width="30px" height="30px"></canvas>
                                                    <p class="value">14°C</p></div>
                                                <div class="item col-xs-3"><p>Italia</p>
                                                    <canvas id="icon3" width="30px" height="30px"></canvas>
                                                    <p class="value">20°C</p></div>
                                                <div class="item col-xs-3"><p>India</p>
                                                    <canvas id="icon4" width="30px" height="30px"></canvas>
                                                    <p class="value">25°C</p></div>
                                                <div class="item col-xs-3"><p>England</p>
                                                    <canvas id="icon5" width="30px" height="30px"></canvas>
                                                    <p class="value">30°C</p></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mbl">
                            <div class="col-md-5">
                                <div class="widget-user mbl">
                                    <div class="header">
                                        <div class="header-content clearfix">
                                            <div class="user-img col-sm-3"><img
                                                    src="../../../api.randomuser.me/portraits/men/27.jpg"
                                                    class="img-circle img img-responsive"/></div>
                                            <div class="user-info col-sm-9"><h2>Jake Rochleau</h2>

                                                <p>I'm a freelance developer based in Austin, TX. I runs several
                                                    open-source projects</p>

                                                <p><span class="label label-info">Design</span><span
                                                        class="label label-warning">UI/UX</span></p></div>
                                        </div>
                                    </div>
                                    <div class="stats">
                                        <div class="row">
                                            <div class="stat-item col-xs-4"><a href="javascript:void(0)"><span
                                                    id="number-blogs">1,240</span>

                                                <p>blogs</p></a></div>
                                            <div class="stat-item col-xs-4"><a href="javascript:void(0)"><span
                                                    id="number-following">60</span>

                                                <p>following</p></a></div>
                                            <div class="stat-item col-xs-4"><a href="javascript:void(0)"><span
                                                    id="number-follower">117</span>

                                                <p>followers</p></a></div>
                                        </div>
                                    </div>
                                    <ul class="action-list">
                                        <li><a href="javascript:void(0)"><i data-toggle="tooltip" data-placement="top"
                                                                            title="Write message" class="icon-note"></i></a>
                                        </li>
                                        <li><a href="javascript:void(0)"><i data-toggle="tooltip" data-placement="top"
                                                                            title="View" class="icon-info"></i></a></li>
                                        <li><a href="javascript:void(0)"><i data-toggle="tooltip" data-placement="top"
                                                                            title="Favourite"
                                                                            class="icon-heart"></i></a></li>
                                        <li><a href="javascript:void(0)"><i data-toggle="tooltip" data-placement="top"
                                                                            title="Setting"
                                                                            class="icon-settings"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="panel">
                                    <div class="panel-body"><h3 class="info-title mtn">POPULAR ITEMS</h3>
                                        <small>Follow product's income in market place</small>
                                        <div class="table-responsive mtl">
                                            <table class="table table-border-dashed table-hover">
                                                <thead>
                                                <tr>
                                                    <th>App Name</th>
                                                    <th>Download</th>
                                                    <th>Percent</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Highway Rider</td>
                                                    <td>2.346</td>
                                                    <td>
                                                        <div data-hover="tooltip" title="80%"
                                                             class="progress progress-xs mtm mbm">
                                                            <div role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                                                 aria-valuemax="100" style="width: 80%;"
                                                                 class="progress-bar progress-bar-success"><span
                                                                    class="sr-only">80% Complete</span></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>FaceFighter Ultimate</td>
                                                    <td>1.320</td>
                                                    <td>
                                                        <div data-hover="tooltip" title="85%"
                                                             class="progress progress-xs mtm mbm">
                                                            <div role="progressbar" aria-valuenow="85" aria-valuemin="0"
                                                                 aria-valuemax="100" style="width: 85%;"
                                                                 class="progress-bar progress-bar-info"><span
                                                                    class="sr-only">85% Complete</span></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>My Talking Tom</td>
                                                    <td>4.780</td>
                                                    <td>
                                                        <div data-hover="tooltip" title="90%"
                                                             class="progress progress-xs mtm mbm">
                                                            <div role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                                                 aria-valuemax="100" style="width: 90%;"
                                                                 class="progress-bar progress-bar-danger"><span
                                                                    class="sr-only">90% Complete</span></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Bomb Me</td>
                                                    <td>7.884</td>
                                                    <td>
                                                        <div data-hover="tooltip" title="60%"
                                                             class="progress progress-xs mtm mbm">
                                                            <div role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                                                 aria-valuemax="100" style="width: 60%;"
                                                                 class="progress-bar progress-bar-warning"><span
                                                                    class="sr-only">60% Complete</span></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--END CONTENT--></div>
            </div>
            <!--END PAGE CONTENT--></div>
        <!--END PAGE WRAPPER--></div>
    <!--BEGIN FOOTER-->
   @include('component.footer')
    <!--END FOOTER--></div>
@include('component.script')