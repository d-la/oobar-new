<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8" />
    <title>Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="../assets/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
    <link href="../assets/plugins/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/plugins/font-awesome/5.3/css/all.min.css" rel="stylesheet" />
    <link href="../assets/plugins/animate/animate.min.css" rel="stylesheet" />
    <link href="../assets/css/default/style.min.css" rel="stylesheet" />
    <link href="../assets/css/default/style-responsive.min.css" rel="stylesheet" />
    <link href="../assets/css/default/theme/default.css" rel="stylesheet" id="theme" />
    <!-- ================== END BASE CSS STYLE ================== -->

    <!-- ================== BEGIN PAGE LEVEL CSS STYLE ================== -->
    <link href="../assets/plugins/jquery-jvectormap/jquery-jvectormap.css" rel="stylesheet" />
    <link href="../assets/plugins/bootstrap-calendar/css/bootstrap_calendar.css" rel="stylesheet" />
    <link href="../assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
    <link href="../assets/plugins/nvd3/build/nv.d3.css" rel="stylesheet" />
    <!-- ================== END PAGE LEVEL CSS STYLE ================== -->

    <!-- ================== BEGIN BASE JS ================== -->
    <script src="../assets/plugins/pace/pace.min.js"></script>
    <!-- ================== END BASE JS ================== -->
</head>

<body>
    <!-- begin #page-loader -->
    <div id="page-loader" class="fade show"><span class="spinner"></span></div>
    <!-- end #page-loader -->

    <!-- begin #page-container -->
    <div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
        <!-- begin #header -->
        <div id="header" class="header navbar-default">
            <!-- begin navbar-header -->
            <div class="navbar-header">
                <a href="index.html" class="navbar-brand"><span class="navbar-logo"></span> <b>Color</b> Admin</a>
                <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- end navbar-header -->

            <!-- begin header-nav -->
            <ul class="navbar-nav navbar-right">
                <li>
                    <form class="navbar-form">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter keyword" />
                            <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle f-s-14">
                        <i class="fa fa-bell"></i>
                        <span class="label">5</span>
                    </a>
                    <ul class="dropdown-menu media-list dropdown-menu-right">
                        <li class="dropdown-header">NOTIFICATIONS (5)</li>
                        <li class="media">
                            <a href="javascript:;">
                                <div class="media-left">
                                    <i class="fa fa-bug media-object bg-silver-darker"></i>
                                </div>
                                <div class="media-body">
                                    <h6 class="media-heading">Server Error Reports <i class="fa fa-exclamation-circle text-danger"></i></h6>
                                    <div class="text-muted f-s-11">3 minutes ago</div>
                                </div>
                            </a>
                        </li>
                        <li class="media">
                            <a href="javascript:;">
                                <div class="media-left">
                                    <img src="../assets/img/user/user-1.jpg" class="media-object" alt="" />
                                    <i class="fab fa-facebook-messenger text-primary media-object-icon"></i>
                                </div>
                                <div class="media-body">
                                    <h6 class="media-heading">John Smith</h6>
                                    <p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                                    <div class="text-muted f-s-11">25 minutes ago</div>
                                </div>
                            </a>
                        </li>
                        <li class="media">
                            <a href="javascript:;">
                                <div class="media-left">
                                    <img src="../assets/img/user/user-2.jpg" class="media-object" alt="" />
                                    <i class="fab fa-facebook-messenger text-primary media-object-icon"></i>
                                </div>
                                <div class="media-body">
                                    <h6 class="media-heading">Olivia</h6>
                                    <p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                                    <div class="text-muted f-s-11">35 minutes ago</div>
                                </div>
                            </a>
                        </li>
                        <li class="media">
                            <a href="javascript:;">
                                <div class="media-left">
                                    <i class="fa fa-plus media-object bg-silver-darker"></i>
                                </div>
                                <div class="media-body">
                                    <h6 class="media-heading"> New User Registered</h6>
                                    <div class="text-muted f-s-11">1 hour ago</div>
                                </div>
                            </a>
                        </li>
                        <li class="media">
                            <a href="javascript:;">
                                <div class="media-left">
                                    <i class="fa fa-envelope media-object bg-silver-darker"></i>
                                    <i class="fab fa-google text-warning media-object-icon f-s-14"></i>
                                </div>
                                <div class="media-body">
                                    <h6 class="media-heading"> New Email From John</h6>
                                    <div class="text-muted f-s-11">2 hour ago</div>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-footer text-center">
                            <a href="javascript:;">View more</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown navbar-user">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="../assets/img/user/user-13.jpg" alt="" />
                        <span class="d-none d-md-inline">Adam Schwartz</span> <b class="caret"></b>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="javascript:;" class="dropdown-item">Edit Profile</a>
                        <a href="javascript:;" class="dropdown-item"><span class="badge badge-danger pull-right">2</span>
                            Inbox</a>
                        <a href="javascript:;" class="dropdown-item">Calendar</a>
                        <a href="javascript:;" class="dropdown-item">Setting</a>
                        <div class="dropdown-divider"></div>
                        <a href="javascript:;" class="dropdown-item">Log Out</a>
                    </div>
                </li>
            </ul>
            <!-- end header navigation right -->
        </div>
        <!-- end #header -->

        <!-- begin #sidebar -->
        <div id="sidebar" class="sidebar">
            <!-- begin sidebar scrollbar -->
            <div data-scrollbar="true" data-height="100%">
                <!-- begin sidebar user -->
                <ul class="nav">
                    <li class="nav-profile">
                        <a href="javascript:;" data-toggle="nav-profile">
                            <div class="cover with-shadow"></div>
                            <div class="image">
                                <img src="../assets/img/user/user-13.jpg" alt="" />
                            </div>
                            <div class="info">
                                <b class="caret pull-right"></b>
                                Sean Ngu
                                <small>Front end developer</small>
                            </div>
                        </a>
                    </li>
                    <li>
                        <ul class="nav nav-profile">
                            <li><a href="javascript:;"><i class="fa fa-cog"></i> Settings</a></li>
                            <li><a href="javascript:;"><i class="fa fa-pencil-alt"></i> Send Feedback</a></li>
                            <li><a href="javascript:;"><i class="fa fa-question-circle"></i> Helps</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- end sidebar user -->
                <!-- begin sidebar nav -->
                <ul class="nav">
                    <li class="nav-header">Navigation</li>
                    <li class="has-sub active">
                        <a href="javascript:;">
                            <b class="caret"></b>
                            <i class="fa fa-th-large"></i>
                            <span>Dashboard</span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="index.html">Dashboard v1</a></li>
                            <li class="active"><a href="index_v2.html">Dashboard v2</a></li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a href="javascript:;">
                            <span class="badge pull-right">10</span>
                            <i class="fa fa-hdd"></i>
                            <span>Email</span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="email_inbox.html">Inbox</a></li>
                            <li><a href="email_compose.html">Compose</a></li>
                            <li><a href="email_detail.html">Detail</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="widget.html">
                            <i class="fab fa-simplybuilt"></i>
                            <span>Widgets <span class="label label-theme m-l-5">NEW</span></span>
                        </a>
                    </li>
                    <li class="has-sub">
                        <a href="javascript:;">
                            <b class="caret"></b>
                            <i class="fa fa-gem"></i>
                            <span>UI Elements <span class="label label-theme m-l-5">NEW</span></span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="ui_general.html">General <i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
                            <li><a href="ui_typography.html">Typography</a></li>
                            <li><a href="ui_tabs_accordions.html">Tabs & Accordions</a></li>
                            <li><a href="ui_unlimited_tabs.html">Unlimited Nav Tabs</a></li>
                            <li><a href="ui_modal_notification.html">Modal & Notification <i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
                            <li><a href="ui_widget_boxes.html">Widget Boxes</a></li>
                            <li><a href="ui_media_object.html">Media Object</a></li>
                            <li><a href="ui_buttons.html">Buttons <i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
                            <li><a href="ui_icons.html">Icons</a></li>
                            <li><a href="ui_simple_line_icons.html">Simple Line Icons</a></li>
                            <li><a href="ui_ionicons.html">Ionicons</a></li>
                            <li><a href="ui_tree.html">Tree View</a></li>
                            <li><a href="ui_language_bar_icon.html">Language Bar & Icon</a></li>
                            <li><a href="ui_social_buttons.html">Social Buttons</a></li>
                            <li><a href="ui_tour.html">Intro JS</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="bootstrap_4.html">
                            <div class="icon-img">
                                <img src="../assets/img/logo/logo-bs4.png" alt="" />
                            </div>
                            <span>Bootstrap 4 <span class="label label-theme m-l-5">NEW</span></span>
                        </a>
                    </li>
                    <li class="has-sub">
                        <a href="javascript:;">
                            <b class="caret"></b>
                            <i class="fa fa-list-ol"></i>
                            <span>Form Stuff <span class="label label-theme m-l-5">NEW</span></span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="form_elements.html">Form Elements <i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
                            <li><a href="form_plugins.html">Form Plugins <i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
                            <li><a href="form_slider_switcher.html">Form Slider + Switcher</a></li>
                            <li><a href="form_validation.html">Form Validation</a></li>
                            <li><a href="form_wizards.html">Wizards</a></li>
                            <li><a href="form_wizards_validation.html">Wizards + Validation</a></li>
                            <li><a href="form_wysiwyg.html">WYSIWYG</a></li>
                            <li><a href="form_editable.html">X-Editable</a></li>
                            <li><a href="form_multiple_upload.html">Multiple File Upload</a></li>
                            <li><a href="form_summernote.html">Summernote</a></li>
                            <li><a href="form_dropzone.html">Dropzone</a></li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a href="javascript:;">
                            <b class="caret"></b>
                            <i class="fa fa-table"></i>
                            <span>Tables</span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="table_basic.html">Basic Tables</a></li>
                            <li class="has-sub">
                                <a href="javascript:;"><b class="caret pull-right"></b> Managed Tables</a>
                                <ul class="sub-menu">
                                    <li><a href="table_manage.html">Default</a></li>
                                    <li><a href="table_manage_autofill.html">Autofill</a></li>
                                    <li><a href="table_manage_buttons.html">Buttons</a></li>
                                    <li><a href="table_manage_colreorder.html">ColReorder</a></li>
                                    <li><a href="table_manage_fixed_columns.html">Fixed Column</a></li>
                                    <li><a href="table_manage_fixed_header.html">Fixed Header</a></li>
                                    <li><a href="table_manage_keytable.html">KeyTable</a></li>
                                    <li><a href="table_manage_responsive.html">Responsive</a></li>
                                    <li><a href="table_manage_rowreorder.html">RowReorder</a></li>
                                    <li><a href="table_manage_scroller.html">Scroller</a></li>
                                    <li><a href="table_manage_select.html">Select</a></li>
                                    <li><a href="table_manage_combine.html">Extension Combination</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a href="javascript:;">
                            <b class="caret"></b>
                            <i class="fa fa-star"></i>
                            <span>Front End</span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="../../../frontend/template/template_one_page_parallax/index.html" target="_blank">One
                                    Page Parallax</a></li>
                            <li><a href="../../../frontend/template/template_blog/index.html" target="_blank">Blog</a></li>
                            <li><a href="../../../frontend/template/template_forum/index.html" target="_blank">Forum</a></li>
                            <li><a href="../../../frontend/template/template_e_commerce/index.html" target="_blank">E-Commerce</a></li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a href="javascript:;">
                            <b class="caret"></b>
                            <i class="fa fa-envelope"></i>
                            <span>Email Template</span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="email_system.html">System Template</a></li>
                            <li><a href="email_newsletter.html">Newsletter Template</a></li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a href="javascript:;">
                            <b class="caret"></b>
                            <i class="fa fa-chart-pie"></i>
                            <span>Chart</span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="chart-flot.html">Flot Chart</a></li>
                            <li><a href="chart-morris.html">Morris Chart</a></li>
                            <li><a href="chart-js.html">Chart JS</a></li>
                            <li><a href="chart-d3.html">d3 Chart</a></li>
                        </ul>
                    </li>
                    <li><a href="calendar.html"><i class="fa fa-calendar"></i> <span>Calendar</span></a></li>
                    <li class="has-sub">
                        <a href="javascript:;">
                            <b class="caret"></b>
                            <i class="fa fa-map"></i>
                            <span>Map</span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="map_vector.html">Vector Map</a></li>
                            <li><a href="map_google.html">Google Map</a></li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a href="javascript:;">
                            <b class="caret"></b>
                            <i class="fa fa-image"></i>
                            <span>Gallery</span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="gallery.html">Gallery v1</a></li>
                            <li><a href="gallery_v2.html">Gallery v2</a></li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a href="javascript:;">
                            <b class="caret"></b>
                            <i class="fa fa-cogs"></i>
                            <span>Page Options</span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="page_blank.html">Blank Page</a></li>
                            <li><a href="page_with_footer.html">Page with Footer</a></li>
                            <li><a href="page_without_sidebar.html">Page without Sidebar</a></li>
                            <li><a href="page_with_right_sidebar.html">Page with Right Sidebar</a></li>
                            <li><a href="page_with_minified_sidebar.html">Page with Minified Sidebar</a></li>
                            <li><a href="page_with_two_sidebar.html">Page with Two Sidebar</a></li>
                            <li><a href="page_with_line_icons.html">Page with Line Icons</a></li>
                            <li><a href="page_with_ionicons.html">Page with Ionicons</a></li>
                            <li><a href="page_full_height.html">Full Height Content</a></li>
                            <li><a href="page_with_wide_sidebar.html">Page with Wide Sidebar</a></li>
                            <li><a href="page_with_light_sidebar.html">Page with Light Sidebar</a></li>
                            <li><a href="page_with_mega_menu.html">Page with Mega Menu</a></li>
                            <li><a href="page_with_top_menu.html">Page with Top Menu</a></li>
                            <li><a href="page_with_boxed_layout.html">Page with Boxed Layout</a></li>
                            <li><a href="page_with_mixed_menu.html">Page with Mixed Menu</a></li>
                            <li><a href="page_boxed_layout_with_mixed_menu.html">Boxed Layout with Mixed Menu</a></li>
                            <li><a href="page_with_transparent_sidebar.html">Page with Transparent Sidebar</a></li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a href="javascript:;">
                            <b class="caret"></b>
                            <i class="fa fa-gift"></i>
                            <span>Extra</span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="extra_timeline.html">Timeline</a></li>
                            <li><a href="extra_coming_soon.html">Coming Soon Page</a></li>
                            <li><a href="extra_search_results.html">Search Results</a></li>
                            <li><a href="extra_invoice.html">Invoice</a></li>
                            <li><a href="extra_404_error.html">404 Error Page</a></li>
                            <li><a href="extra_profile.html">Profile Page</a></li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a href="javascript:;">
                            <b class="caret"></b>
                            <i class="fa fa-key"></i>
                            <span>Login & Register</span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="login.html">Login</a></li>
                            <li><a href="login_v2.html">Login v2</a></li>
                            <li><a href="login_v3.html">Login v3</a></li>
                            <li><a href="register_v3.html">Register v3</a></li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a href="javascript:;">
                            <b class="caret"></b>
                            <i class="fa fa-cubes"></i>
                            <span>Version <span class="label label-theme m-l-5">NEW</span></span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="javascript:;">HTML</a></li>
                            <li><a href="../template_ajax/index.html">AJAX</a></li>
                            <li><a href="../template_angularjs/index.html">ANGULAR JS</a></li>
                            <li><a href="../template_angularjs6/index.html">ANGULAR JS 6 <i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
                            <li><a href="../template_laravel/index.html">LARAVEL <i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
                            <li><a href="../template_vuejs/index.html">VUE JS <i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
                            <li><a href="../template_material/index.html">MATERIAL DESIGN</a></li>
                            <li><a href="../template_apple/index.html">APPLE DESIGN</a></li>
                            <li><a href="../template_transparent/index.html">TRANSPARENT DESIGN <i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a href="javascript:;">
                            <b class="caret"></b>
                            <i class="fa fa-medkit"></i>
                            <span>Helper</span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="helper_css.html">Predefined CSS Classes</a></li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a href="javascript:;">
                            <b class="caret"></b>
                            <i class="fa fa-align-left"></i>
                            <span>Menu Level</span>
                        </a>
                        <ul class="sub-menu">
                            <li class="has-sub">
                                <a href="javascript:;">
                                    <b class="caret"></b>
                                    Menu 1.1
                                </a>
                                <ul class="sub-menu">
                                    <li class="has-sub">
                                        <a href="javascript:;">
                                            <b class="caret"></b>
                                            Menu 2.1
                                        </a>
                                        <ul class="sub-menu">
                                            <li><a href="javascript:;">Menu 3.1</a></li>
                                            <li><a href="javascript:;">Menu 3.2</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="javascript:;">Menu 2.2</a></li>
                                    <li><a href="javascript:;">Menu 2.3</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:;">Menu 1.2</a></li>
                            <li><a href="javascript:;">Menu 1.3</a></li>
                        </ul>
                    </li>
                    <!-- begin sidebar minify button -->
                    <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
                    <!-- end sidebar minify button -->
                </ul>
                <!-- end sidebar nav -->
            </div>
            <!-- end sidebar scrollbar -->
        </div>
        <div class="sidebar-bg"></div>
        <!-- end #sidebar -->

        <!-- begin #content -->
        <div id="content" class="content">
            <!-- begin breadcrumb -->
            <ol class="breadcrumb pull-right">
                <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:;">Dashboard</a></li>
                <li class="breadcrumb-item active">Dashboard v2</li>
            </ol>
            <!-- end breadcrumb -->
            <!-- begin page-header -->
            <h1 class="page-header">Dashboard v2 <small>header small text goes here...</small></h1>
            <!-- end page-header -->
            <!-- begin row -->
            <div class="row">
                <!-- begin col-3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="widget widget-stats bg-gradient-teal">
                        <div class="stats-icon stats-icon-lg"><i class="fa fa-globe fa-fw"></i></div>
                        <div class="stats-content">
                            <div class="stats-title">TODAY'S VISITS</div>
                            <div class="stats-number">7,842,900</div>
                            <div class="stats-progress progress">
                                <div class="progress-bar" style="width: 70.1%;"></div>
                            </div>
                            <div class="stats-desc">Better than last week (70.1%)</div>
                        </div>
                    </div>
                </div>
                <!-- end col-3 -->
                <!-- begin col-3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="widget widget-stats bg-gradient-blue">
                        <div class="stats-icon stats-icon-lg"><i class="fa fa-dollar-sign fa-fw"></i></div>
                        <div class="stats-content">
                            <div class="stats-title">TODAY'S PROFIT</div>
                            <div class="stats-number">180,200</div>
                            <div class="stats-progress progress">
                                <div class="progress-bar" style="width: 40.5%;"></div>
                            </div>
                            <div class="stats-desc">Better than last week (40.5%)</div>
                        </div>
                    </div>
                </div>
                <!-- end col-3 -->
                <!-- begin col-3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="widget widget-stats bg-gradient-purple">
                        <div class="stats-icon stats-icon-lg"><i class="fa fa-archive fa-fw"></i></div>
                        <div class="stats-content">
                            <div class="stats-title">NEW ORDERS</div>
                            <div class="stats-number">38,900</div>
                            <div class="stats-progress progress">
                                <div class="progress-bar" style="width: 76.3%;"></div>
                            </div>
                            <div class="stats-desc">Better than last week (76.3%)</div>
                        </div>
                    </div>
                </div>
                <!-- end col-3 -->
                <!-- begin col-3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="widget widget-stats bg-gradient-black">
                        <div class="stats-icon stats-icon-lg"><i class="fa fa-comment-alt fa-fw"></i></div>
                        <div class="stats-content">
                            <div class="stats-title">NEW COMMENTS</div>
                            <div class="stats-number">3,988</div>
                            <div class="stats-progress progress">
                                <div class="progress-bar" style="width: 54.9%;"></div>
                            </div>
                            <div class="stats-desc">Better than last week (54.9%)</div>
                        </div>
                    </div>
                </div>
                <!-- end col-3 -->
            </div>
            <!-- end row -->
            <!-- begin row -->
            <div class="row">
                <!-- begin col-8 -->
                <div class="col-lg-8">
                    <div class="widget-chart with-sidebar inverse-mode">
                        <div class="widget-chart-content bg-black">
                            <h4 class="chart-title">
                                Visitors Analytics
                                <small>Where do our visitors come from</small>
                            </h4>
                            <div id="visitors-line-chart" class="widget-chart-full-width nvd3-inverse-mode" style="height: 260px;"></div>
                        </div>
                        <div class="widget-chart-sidebar bg-black-darker">
                            <div class="chart-number">
                                1,225,729
                                <small>Total visitors</small>
                            </div>
                            <div id="visitors-donut-chart" class="nvd3-inverse-mode p-t-10" style="height: 180px"></div>
                            <ul class="chart-legend f-s-11">
                                <li><i class="fa fa-circle fa-fw text-primary f-s-9 m-r-5 t-minus-1"></i> 34.0% <span>New
                                        Visitors</span></li>
                                <li><i class="fa fa-circle fa-fw text-success f-s-9 m-r-5 t-minus-1"></i> 56.0% <span>Return
                                        Visitors</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end col-8 -->
                <!-- begin col-4 -->
                <div class="col-lg-4">
                    <div class="panel panel-inverse" data-sortable-id="index-1">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                Visitors Origin
                            </h4>
                        </div>
                        <div id="visitors-map" class="bg-black" style="height: 179px;"></div>
                        <div class="list-group">
                            <a href="javascript:;" class="list-group-item list-group-item-inverse d-flex justify-content-between align-items-center text-ellipsis">
                                1. United State
                                <span class="badge f-w-500 bg-gradient-teal f-s-10">20.95%</span>
                            </a>
                            <a href="javascript:;" class="list-group-item list-group-item-inverse d-flex justify-content-between align-items-center text-ellipsis">
                                2. India
                                <span class="badge f-w-500 bg-gradient-blue f-s-10">16.12%</span>
                            </a>
                            <a href="javascript:;" class="list-group-item list-group-item-inverse d-flex justify-content-between align-items-center text-ellipsis">
                                3. Mongolia
                                <span class="badge f-w-500 bg-gradient-grey f-s-10">14.99%</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end col-4 -->
            </div>
            <!-- end row -->
            <!-- begin row -->
            <div class="row">
                <!-- begin col-4 -->
                <div class="col-lg-4">
                    <!-- begin panel -->
                    <div class="panel panel-inverse" data-sortable-id="index-2">
                        <div class="panel-heading">
                            <h4 class="panel-title">Chat History <span class="label bg-gradient-teal pull-right">4
                                    message</span></h4>
                        </div>
                        <div class="panel-body bg-silver">
                            <div class="chats" data-scrollbar="true" data-height="225px">
                                <div class="left">
                                    <span class="date-time">yesterday 11:23pm</span>
                                    <a href="javascript:;" class="name">Sowse Bawdy</a>
                                    <a href="javascript:;" class="image"><img alt="" src="../assets/img/user/user-12.jpg" /></a>
                                    <div class="message">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit volutpat. Praesent
                                        mattis interdum arcu eu feugiat.
                                    </div>
                                </div>
                                <div class="right">
                                    <span class="date-time">08:12am</span>
                                    <a href="javascript:;" class="name"><span class="label label-primary">ADMIN</span>
                                        Me</a>
                                    <a href="javascript:;" class="image"><img alt="" src="../assets/img/user/user-13.jpg" /></a>
                                    <div class="message">
                                        Nullam posuere, nisl a varius rhoncus, risus tellus hendrerit neque.
                                    </div>
                                </div>
                                <div class="left">
                                    <span class="date-time">09:20am</span>
                                    <a href="javascript:;" class="name">Neck Jolly</a>
                                    <a href="javascript:;" class="image"><img alt="" src="../assets/img/user/user-10.jpg" /></a>
                                    <div class="message">
                                        Euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                    </div>
                                </div>
                                <div class="left">
                                    <span class="date-time">11:15am</span>
                                    <a href="javascript:;" class="name">Shag Strap</a>
                                    <a href="javascript:;" class="image"><img alt="" src="../assets/img/user/user-14.jpg" /></a>
                                    <div class="message">
                                        Nullam iaculis pharetra pharetra. Proin sodales tristique sapien mattis
                                        placerat.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <form name="send_message_form" data-id="message-form">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="message" placeholder="Enter your message here.">
                                    <span class="input-group-append">
                                        <button class="btn btn-primary" type="button"><i class="fa fa-camera"></i></button>
                                        <button class="btn btn-primary" type="button"><i class="fa fa-link"></i></button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-4 -->
                <!-- begin col-4 -->
                <div class="col-lg-4">
                    <!-- begin panel -->
                    <div class="panel panel-inverse" data-sortable-id="index-3">
                        <div class="panel-heading">
                            <h4 class="panel-title">Today's Schedule</h4>
                        </div>
                        <div id="schedule-calendar" class="bootstrap-calendar"></div>
                        <div class="list-group">
                            <a href="javascript:;" class="list-group-item d-flex justify-content-between align-items-center text-ellipsis">
                                Sales Reporting
                                <span class="badge f-w-500 bg-gradient-teal f-s-10">9:00 am</span>
                            </a>
                            <a href="javascript:;" class="list-group-item d-flex justify-content-between align-items-center text-ellipsis">
                                Have a meeting with sales team
                                <span class="badge f-w-500 bg-gradient-blue f-s-10">2:45 pm</span>
                            </a>
                        </div>
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-4 -->
                <!-- begin col-4 -->
                <div class="col-lg-4">
                    <!-- begin panel -->
                    <div class="panel panel-inverse" data-sortable-id="index-4">
                        <div class="panel-heading">
                            <h4 class="panel-title">New Registered Users <span class="pull-right label bg-gradient-teal">24
                                    new users</span></h4>
                        </div>
                        <ul class="registered-users-list clearfix">
                            <li>
                                <a href="javascript:;"><img src="../assets/img/user/user-5.jpg" alt="" /></a>
                                <h4 class="username text-ellipsis">
                                    Savory Posh
                                    <small>Algerian</small>
                                </h4>
                            </li>
                            <li>
                                <a href="javascript:;"><img src="../assets/img/user/user-3.jpg" alt="" /></a>
                                <h4 class="username text-ellipsis">
                                    Ancient Caviar
                                    <small>Korean</small>
                                </h4>
                            </li>
                            <li>
                                <a href="javascript:;"><img src="../assets/img/user/user-1.jpg" alt="" /></a>
                                <h4 class="username text-ellipsis">
                                    Marble Lungs
                                    <small>Indian</small>
                                </h4>
                            </li>
                            <li>
                                <a href="javascript:;"><img src="../assets/img/user/user-8.jpg" alt="" /></a>
                                <h4 class="username text-ellipsis">
                                    Blank Bloke
                                    <small>Japanese</small>
                                </h4>
                            </li>
                            <li>
                                <a href="javascript:;"><img src="../assets/img/user/user-2.jpg" alt="" /></a>
                                <h4 class="username text-ellipsis">
                                    Hip Sculling
                                    <small>Cuban</small>
                                </h4>
                            </li>
                            <li>
                                <a href="javascript:;"><img src="../assets/img/user/user-6.jpg" alt="" /></a>
                                <h4 class="username text-ellipsis">
                                    Flat Moon
                                    <small>Nepalese</small>
                                </h4>
                            </li>
                            <li>
                                <a href="javascript:;"><img src="../assets/img/user/user-4.jpg" alt="" /></a>
                                <h4 class="username text-ellipsis">
                                    Packed Puffs
                                    <small>Malaysian></small>
                                </h4>
                            </li>
                            <li>
                                <a href="javascript:;"><img src="../assets/img/user/user-9.jpg" alt="" /></a>
                                <h4 class="username text-ellipsis">
                                    Clay Hike
                                    <small>Swedish</small>
                                </h4>
                            </li>
                        </ul>
                        <div class="panel-footer text-center">
                            <a href="javascript:;" class="text-inverse">View All</a>
                        </div>
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-4 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end #content -->

        <!-- begin theme-panel -->
        <div class="theme-panel theme-panel-lg">
            <a href="javascript:;" data-click="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cog"></i></a>
            <div class="theme-panel-content">
                <h5 class="m-t-0">Color Theme</h5>
                <ul class="theme-list clearfix">
                    <li><a href="javascript:;" class="bg-red" data-theme="red" data-theme-file="../assets/css/default/theme/red.css"
                            data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body"
                            data-title="Red">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-pink" data-theme="pink" data-theme-file="../assets/css/default/theme/pink.css"
                            data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body"
                            data-title="Pink">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-orange" data-theme="orange" data-theme-file="../assets/css/default/theme/orange.css"
                            data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body"
                            data-title="Orange">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-yellow" data-theme="yellow" data-theme-file="../assets/css/default/theme/yellow.css"
                            data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body"
                            data-title="Yellow">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-lime" data-theme="lime" data-theme-file="../assets/css/default/theme/lime.css"
                            data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body"
                            data-title="Lime">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-green" data-theme="green" data-theme-file="../assets/css/default/theme/green.css"
                            data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body"
                            data-title="Green">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-teal" data-theme="default" data-theme-file="../assets/css/default/theme/default.css"
                            data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body"
                            data-title="Default">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-aqua" data-theme="aqua" data-theme-file="../assets/css/default/theme/aqua.css"
                            data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body"
                            data-title="Aqua">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-blue" data-theme="blue" data-theme-file="../assets/css/default/theme/blue.css"
                            data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body"
                            data-title="Blue">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-purple" data-theme="purple" data-theme-file="../assets/css/default/theme/purple.css"
                            data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body"
                            data-title="Purple">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-indigo" data-theme="indigo" data-theme-file="../assets/css/default/theme/indigo.css"
                            data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body"
                            data-title="Indigo">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-black" data-theme="black" data-theme-file="../assets/css/default/theme/black.css"
                            data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body"
                            data-title="Black">&nbsp;</a></li>
                </ul>
                <div class="divider"></div>
                <div class="row m-t-10">
                    <div class="col-md-6 control-label text-inverse f-w-600">Header Styling</div>
                    <div class="col-md-6">
                        <select name="header-styling" class="form-control form-control-sm">
                            <option value="1">default</option>
                            <option value="2">inverse</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-6 control-label text-inverse f-w-600">Header</div>
                    <div class="col-md-6">
                        <select name="header-fixed" class="form-control form-control-sm">
                            <option value="1">fixed</option>
                            <option value="2">default</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-6 control-label text-inverse f-w-600">Sidebar Styling</div>
                    <div class="col-md-6">
                        <select name="sidebar-styling" class="form-control form-control-sm">
                            <option value="1">default</option>
                            <option value="2">grid</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-6 control-label text-inverse f-w-600">Sidebar</div>
                    <div class="col-md-6">
                        <select name="sidebar-fixed" class="form-control form-control-sm">
                            <option value="1">fixed</option>
                            <option value="2">default</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-6 control-label text-inverse f-w-600">Sidebar Gradient</div>
                    <div class="col-md-6">
                        <select name="content-gradient" class="form-control form-control-sm">
                            <option value="1">disabled</option>
                            <option value="2">enabled</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-6 control-label text-inverse f-w-600">Content Styling</div>
                    <div class="col-md-6">
                        <select name="content-styling" class="form-control form-control-sm">
                            <option value="1">default</option>
                            <option value="2">black</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-6 control-label text-inverse f-w-600">Direction</div>
                    <div class="col-md-6">
                        <select name="direction" class="form-control form-control-sm">
                            <option value="1">LTR</option>
                            <option value="2">RTL</option>
                        </select>
                    </div>
                </div>
                <div class="divider"></div>
                <h5>THEME VERSION</h5>
                <div class="theme-version">
                    <a href="../template_html/index_v2.html" class="active">
                        <span style="background-image: url(../assets/img/theme/default.jpg);"></span>
                    </a>
                    <a href="../template_transparent/index_v2.html">
                        <span style="background-image: url(../assets/img/theme/transparent.jpg);"></span>
                    </a>
                </div>
                <div class="theme-version">
                    <a href="../template_apple/index_v2.html">
                        <span style="background-image: url(../assets/img/theme/apple.jpg);"></span>
                    </a>
                    <a href="../template_material/index_v2.html">
                        <span style="background-image: url(../assets/img/theme/material.jpg);"></span>
                    </a>
                </div>
                <div class="divider"></div>
                <div class="row m-t-10">
                    <div class="col-md-12">
                        <a href="javascript:;" class="btn btn-inverse btn-block btn-rounded" data-click="reset-local-storage"><b>Reset
                                Local Storage</b></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end theme-panel -->

        <!-- begin scroll to top btn -->
        <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i
                class="fa fa-angle-up"></i></a>
        <!-- end scroll to top btn -->
    </div>
    <!-- end page container -->

    <!-- ================== BEGIN BASE JS ================== -->
    <script src="../assets/plugins/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="../assets/plugins/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <!--[if lt IE 9]>
		<script src="../assets/crossbrowserjs/html5shiv.js"></script>
		<script src="../assets/crossbrowserjs/respond.min.js"></script>
		<script src="../assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
    <script src="../assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="../assets/plugins/js-cookie/js.cookie.js"></script>
    <script src="../assets/js/theme/default.min.js"></script>
    <script src="../assets/js/apps.min.js"></script>
    <!-- ================== END BASE JS ================== -->

    <!-- ================== BEGIN PAGE LEVEL JS ================== -->
    <script src="../assets/plugins/d3/d3.min.js"></script>
    <script src="../assets/plugins/nvd3/build/nv.d3.js"></script>
    <script src="../assets/plugins/jquery-jvectormap/jquery-jvectormap.min.js"></script>
    <script src="../assets/plugins/jquery-jvectormap/jquery-jvectormap-world-merc-en.js"></script>
    <script src="../assets/plugins/bootstrap-calendar/js/bootstrap_calendar.min.js"></script>
    <script src="../assets/plugins/gritter/js/jquery.gritter.js"></script>
    <script src="../assets/js/demo/dashboard-v2.min.js"></script>
    <!-- ================== END PAGE LEVEL JS ================== -->

    <script>
        $(document).ready(function () {
            App.init();
            DashboardV2.init();
        });
    </script>
</body>

</html>