<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/salt/jquery/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Dec 2017 12:31:57 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin Dashboard</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="/node_modules/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="/node_modules/rickshaw/rickshaw.min.css" />
  <link rel="stylesheet" href="/bower_components/chartist/dist/chartist.min.css" />
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="/images/favicon.html" />
</head>
<body class="sidebar-dark">
  <!-- partial:partials/_settings-panel.html -->
  <div class="settings-panel">
    <ul class="nav nav-tabs" id="setting-panel" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="layouts-tab" data-toggle="tab" href="#layouts-section" role="tab" aria-controls="layouts-section" aria-expanded="true"><i class="mdi mdi-settings"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section"><i class="mdi mdi-account"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="close-button" href="#"><i class="mdi mdi-window-close"></i></a>
      </li>
    </ul>
    <div class="tab-content" id="setting-content">
      <div class="tab-pane fade show active" id="layouts-section" role="tabpanel" aria-labelledby="layouts-tab">
        <div class="color-tiles">
          <div class="tiles primary" id="primary-theme"></div>
          <div class="tiles success" id="success-theme"></div>
          <div class="tiles warning" id="warning-theme"></div>
          <div class="tiles danger" id="danger-theme"></div>
          <div class="tiles pink" id="pink-theme"></div>
          <div class="tiles info" id="info-theme"></div>
          <div class="tiles dark" id="dark-theme"></div>
          <div class="tiles light" id="light-theme"></div>
        </div>
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle btn-block mb-4" type="button" id="sidebar-color" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Sidebar Mode
          </button>
          <div class="dropdown-menu" aria-labelledby="sidebar-color">
            <a class="dropdown-item" href="#" id="side-theme-light">Light</a>
            <a class="dropdown-item" href="#" id="side-theme-dark">Dark</a>
          </div>
        </div>
        <div class="dropdown d-none d-md-block">
          <button class="btn btn-secondary dropdown-toggle btn-block" type="button" id="Layouts-type" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Layouts
          </button>
          <div class="dropdown-menu" aria-labelledby="Layouts-type">
            <a class="dropdown-item" href="#" id="boxed-layout-view">Boxed</a>
            <a class="dropdown-item" href="#" id="compact-layout-view">Compact menu</a>
            <a class="dropdown-item" href="#" id="icon-only-layout-view">Icon Menu</a>
            <a class="dropdown-item" href="#" id="rtl-layout-view">RTL</a>
            <a class="dropdown-item" href="#" id="hidden-menu-1-layout-view">Hidden Menu 1</a>
            <a class="dropdown-item" href="#" id="hidden-menu-2-layout-view">Hidden Menu 2</a>
          </div>
        </div>
      </div>
      <!-- layout section tabends -->
      <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-tab">
        <ul class="chat-list">
          <li class="list active">
            <div class="profile"><img src="http://via.placeholder.com/47x47" alt=""><span class="online"></span></div>
            <div class="info">
              <p>Thomas Douglas</p>
              <p>Available</p>
            </div>
          </li>
          <li class="list">
            <div class="profile"><img src="http://via.placeholder.com/47x47" alt=""><span class="online"></span></div>
            <div class="info">
              <p>Thomas Douglas</p>
              <p>Available</p>
            </div>
          </li>
          <li class="list">
            <div class="profile"><img src="http://via.placeholder.com/47x47" alt=""></div>
            <div class="info">
              <p>Thomas Douglas</p>
              <p>Available</p>
            </div>
          </li>
          <li class="list">
            <div class="profile"><img src="http://via.placeholder.com/47x47" alt=""><span class="ofline"></span></div>
            <div class="info">
              <p>Thomas Douglas</p>
              <p>Available</p>
            </div>
          </li>
          <li class="list">
            <div class="profile"><img src="http://via.placeholder.com/47x47" alt=""><span class="online"></span></div>
            <div class="info">
              <p>Thomas Douglas</p>
              <p>Available</p>
            </div>
          </li>
          <li class="list">
            <div class="profile"><img src="http://via.placeholder.com/47x47" alt=""></div>
            <div class="info">
              <p>Thomas Douglas</p>
              <p>Available</p>
            </div>
          </li>
        </ul>
      </div>
      <!-- chat section tabends -->
    </div>
  </div>
  <!-- partial -->
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar navbar-light col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper">
        <a class="navbar-brand brand-logo" href="{{URL::to('/admin_dashboard')}}"><img src="" alt="Home"></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
          <span class="navbar-toggler-icon"></span>
        </button>
     <!--    <div class="btn-group d-none d-sm-block">
          <button type="button" class="btn btn-secondary btn-sm text-muted border-0 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
          </div>
        </div> -->
        <form class="form-inline mt-2 ml-3 mt-md-0 d-none d-sm-block">
          <!-- <div class="input-group solid">
            <span class="input-group-addon"><i class="mdi mdi-magnify"></i></span>
            <input type="text" class="form-control">
          </div> -->
        </form>
        <ul class="navbar-nav ml-lg-auto">
          
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator" id="MailDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-message-outline"></i>
              <span class="count bg-danger">4</span>
            </a>
            <div class="dropdown-menu navbar-dropdown mail-notification" aria-labelledby="MailDropdown">
              <a class="dropdown-item" href="#">
                <div class="sender-img">
                  <img src="http://via.placeholder.com/47x47" alt="">
                  <span class="badge badge-success">&nbsp;</span>
                </div>
                <div class="sender">
                  <p class="Sende-name">Profile</p>
                  <p class="Sender-message">Click to view profile</p>
                </div>
              </a>
              <a class="dropdown-item" href="#">
                <div class="sender-img">
                  <img src="http://via.placeholder.com/47x47" alt="">
                  <span class="badge badge-success">&nbsp;</span>
                </div>
                <div class="sender">
                  <p class="Sende-name">Setting</p>
                  <p class="Sender-message">Click to change settings</p>
                </div>
              </a>
              
              <a class="dropdown-item" href="{{URL::to('/logout')}}">
                <div class="sender-img">
                  <img src="http://via.placeholder.com/47x47" alt="">
                  <span class="badge badge-warning">&nbsp;</span>
                </div>
                <div class="sender">
                  <p class="Sende-name">Logout</p>
                  <p class="Sender-message">Click to logout.</p>
                </div>
              </a>
              <!-- <a href="#" class="dropdown-item view-all">View all</a> -->
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <div class="user-info">
            <div class="profile">
              <img src="http://via.placeholder.com/47x47" alt="">
            </div>
            <div class="details">
              <p class="user-name">Srabon Bhowmik</p>
              <p class="designation">Developer</p>
            </div>
          </div>
          <ul class="nav">
            <!--main pages start-->
            <li class="nav-item nav-category">
              <span class="nav-link">Main</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{URL::to('/allstudent')}}">
                <i class="mdi mdi-gauge menu-icon"></i>
                <span class="menu-title">All Students</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{URL::to('/addstudent')}}">
                <i class="mdi mdi-puzzle menu-icon"></i>
                <span class="menu-title">Add Student</span>
                <span class="badge badge-danger badge-pill ml-auto">New</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#layoutsSubmenu" aria-expanded="false" aria-controls="layoutsSubmenu">
                <i class="mdi mdi-arrow-expand-all menu-icon"></i>
                <span class="menu-title">Student Information</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="layoutsSubmenu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/tutionfee')}}">Fee</a>
                  </li>
                 <!--  <li class="nav-item">
                    <a class="nav-link" href="pages/layout/rtl-layout.html">Result</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/layout/horizontal-menu.html">Horizontal Menu</a>
                  </li> -->
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#sidebar_layouts" aria-expanded="false" aria-controls="sidebar_layouts">
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                <span class="menu-title">Activity</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="sidebar_layouts">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/singer')}}">Singer</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/designer')}}">Designer</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/anchor')}}">Anchor</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/dancer')}}">Dancer</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/speaker')}}">Speaker</a>
                  </li>
                </ul>
              </div>
            </li>
            <!--main pages end-->
            <!--sample pages start-->
            <li class="nav-item nav-category">
              <span class="nav-link">Sample pages</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#authSubmenu" aria-expanded="false" aria-controls="authSubmenu">
                <i class="mdi mdi-lock-outline menu-icon"></i>
                <span class="menu-title">Authentication</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="authSubmenu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/login.html">
                      Login
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/login-2.html">
                      Login 2
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/register.html">
                      Register
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/register-2.html">
                      Register 2
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/lock-screen.html">
                      Lockscreen
                    </a>
                  </li>
                </ul>
              </div>
            </li>
          <!--   <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#errorSubmenu" aria-expanded="false" aria-controls="errorSubmenu">
                <i class="mdi mdi-alert-circle-outline menu-icon"></i>
                <span class="menu-title">Error pages</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="errorSubmenu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/error-404.html">
                      404
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/error-500.html">
                      500
                    </a>
                  </li>
                </ul>
              </div>
            </li> -->
            <!-- <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#generalSubmenu" aria-expanded="false" aria-controls="generalSubmenu">
                <i class="mdi mdi-google-pages menu-icon"></i>
                <span class="menu-title">General Pages</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="generalSubmenu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/blank-page.html">
                      Blank Page
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/landing-page.html">
                      Landing Page
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/profile.html">
                      Profile
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/faq.html">
                      FAQ
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/faq-2.html">
                      FAQ 2
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/news-grid.html">
                      News grid
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/portfolio-1.html">
                      Portfolio 1
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/portfolio-2.html">
                      Portfolio 2
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/search-results.html">
                      Search result
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/timeline.html">
                      Timeline
                    </a>
                  </li>
                </ul>
              </div>
            </li> -->
            <!-- <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ecommerceSubmenu" aria-expanded="false" aria-controls="ecommerceSubmenu">
                <i class="mdi mdi-cart-outline menu-icon"></i>
                <span class="menu-title">E-commerce</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="ecommerceSubmenu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/pricing.html">
                      Pricing
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/invoice.html">
                      Invoice
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/orders.html">
                      Orders
                    </a>
                  </li>
                </ul>
              </div>
            </li> -->
            <!--sample pages end-->
            <!--ui features start-->
           <!--  <li class="nav-item nav-category">
              <span class="nav-link">UI Features</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#uiBasicSubmenu" aria-expanded="false" aria-controls="uiBasicSubmenu">
                <i class="mdi mdi-buffer menu-icon"></i>
                <span class="menu-title">Basic Elements</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="uiBasicSubmenu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="pages/ui-features/accordions.html">Accordions</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/ui-features/modals.html">Modals</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/ui-features/progress.html">Progress bar</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/ui-features/tabs.html">Tabs</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/ui-features/typography.html">Typography</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#uiAdvancedSubmenu" aria-expanded="false" aria-controls="uiAdvancedSubmenu">
                <i class="mdi mdi-cube-outline menu-icon"></i>
                <span class="menu-title">Advanced Elements</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="uiAdvancedSubmenu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="pages/ui-features/image-cropper.html">Cropper</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/ui-features/dragula.html">Dragula</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/ui-features/clipboard.html">Clipboard</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/ui-features/context-menu.html">Context menu</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/ui-features/carousel.html">Carousel</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/ui-features/colcade.html">Colcade</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#uiPopupSubmenu" aria-expanded="false" aria-controls="uiPopupSubmenu">
                <i class="mdi mdi-message-text-outline menu-icon"></i>
                <span class="menu-title">Popups</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="uiPopupSubmenu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="pages/ui-features/alerts.html">Alerts</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/ui-features/avgrund.html">Avgrund</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/ui-features/tour.html">Tour</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#uiNotificationsSubmenu" aria-expanded="false" aria-controls="uiNotificationsSubmenu">
                <i class="mdi mdi-bell-outline menu-icon"></i>
                <span class="menu-title">Notifications</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="uiNotificationsSubmenu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="pages/ui-features/notifications.html">Simple Notification</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/ui-features/desktop-notifications.html">Desktop Notification</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#sliderSubmenu" aria-expanded="false" aria-controls="sliderSubmenu">
                <i class="mdi mdi-bulletin-board menu-icon"></i>
                <span class="menu-title">Sliders</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="sliderSubmenu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="pages/ui-features/no-ui-slider.html">noUiSlider</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/ui-features/ion-range-slider.html">ion-rangeSlider</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#iconsSubmenu" aria-expanded="false" aria-controls="iconsSubmenu">
                <i class="mdi mdi-album menu-icon"></i>
                <span class="menu-title">Icons</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="iconsSubmenu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="pages/icons/flag-icons.html">Flag icons</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/icons/font-awesome.html">Font Awesome</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/icons/simple-line-icon.html">Simple line icons</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/icons/themify.html">Themify icons</a>
                  </li>
                </ul>
              </div>
            </li> -->
            <!-- ui end -->
            <!-- data rep start-->
       <!--      <li class="nav-item nav-category">
              <span class="nav-link">Data representation</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#chartsSubmenu" aria-expanded="false" aria-controls="chartsSubmenu">
                <i class="mdi mdi-chart-donut menu-icon"></i>
                <span class="menu-title">Charts</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="chartsSubmenu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="pages/charts/chartjs.html">ChartJs</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/charts/morris.html">Morris</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/charts/flot-chart.html">Float</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/charts/google-charts.html">Google charts</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/charts/sparkline.html">Sparkline js</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/charts/c3.html">C3 charts</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/charts/chartist.html">Chartists</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/charts/rickshaw.html">Rickshaw</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/charts/justGage.html">JustGage</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#tablesSubmenu" aria-expanded="false" aria-controls="tablesSubmenu">
                <i class="mdi mdi-table-large menu-icon"></i>
                <span class="menu-title">Tables</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="tablesSubmenu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="pages/tables/basic-table.html">Basic table</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/tables/data-table.html">Data table</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/tables/bootstrap-table.html">Bootstrap table</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/tables/js-grid.html">Js-grid</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/tables/sortable-table.html">Sortable table</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#mapsSubmenu" aria-expanded="false" aria-controls="mapsSubmenu">
                <i class="mdi mdi-map-marker-outline menu-icon"></i>
                <span class="menu-title">Maps</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="mapsSubmenu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="pages/maps/mapeal.html">Mapeal</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/maps/vector-map.html">Vector map</a>
                  </li>
                </ul>
              </div>
            </li>
            <!--data rep end--> -->
            <!--forms start-->
            <!-- <li class="nav-item nav-category">
              <span class="nav-link">Forms</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#formsSubmenu" aria-expanded="false" aria-controls="formsSubmenu">
                <i class="mdi mdi-clipboard-outline menu-icon"></i>
                <span class="menu-title">Form components</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="formsSubmenu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="pages/forms/basic-elements.html">Basic elements</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/forms/x-editable.html">X-editable</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/forms/typeahead.html">Typeahead</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/forms/form-repeater.html">Form repeater</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/forms/form-mask.html">Form mask</a>
                  </li>
                </ul>
              </div>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#advancedSubmenu" aria-expanded="false" aria-controls="advancedSubmenu">
                <i class="mdi mdi-repeat menu-icon"></i>
                <span class="menu-title">Album</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="advancedSubmenu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/p1')}}">Phase 1</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/p2')}}">Phase 2</a>
                  </li>
                  <!-- <li class="nav-item"> -->
                <!--     <a class="nav-link" href="pages/forms/bt-select-splitter.html">Splitter</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/forms/icheck.html">Icheck</a>
                  </li> -->
                </ul>
              </div>
            </li>
           <!--  <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#validationSubmenu" aria-expanded="false" aria-controls="validationSubmenu">
                <i class="mdi mdi-flag-outline menu-icon"></i>
                <span class="menu-title">Validation</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="validationSubmenu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="pages/forms/form-validation.html">Form validation</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/forms/bt-maxlength.html">Maxlength</a>
                  </li>
                </ul>
              </div>
            </li> -->
           <!--  <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#fileUploadSubmenu" aria-expanded="false" aria-controls="fileUploadSubmenu">
                <i class="mdi mdi-attachment menu-icon"></i>
                <span class="menu-title">File upload</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="fileUploadSubmenu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="pages/forms/dropify.html">Dropify</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/forms/dropzone.html">Dropzone</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/forms/jquery-file-upload.html">Jquery upload</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#textEditorSubmenu" aria-expanded="false" aria-controls="textEditorSubmenu">
                <i class="mdi mdi-pencil menu-icon"></i>
                <span class="menu-title">Text editors</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="textEditorSubmenu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="pages/forms/summernote.html">Summernote</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/forms/tinymce.html">Tinymce</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/forms/quill-editor.html">Quill editor</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/forms/simplemde-editor.html">Simplemde</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/forms/wysihtml.html">Wysihtml</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#codeEditorSubmenu" aria-expanded="false" aria-controls="codeEditorSubmenu">
                <i class="mdi mdi-code-brackets menu-icon"></i>
                <span class="menu-title">Code editors</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="codeEditorSubmenu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="pages/forms/ace_editor.html">Ace</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/forms/code-mirror.html">Codemirror</a>
                  </li>
                </ul>
              </div>
            </li> -->
            <!--forms end-->
            <!--Apps start-->
<!--             <li class="nav-item nav-category">
              <span class="nav-link">Applications</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/apps/email.html">
                <i class="mdi mdi-email-outline menu-icon"></i>
                <span class="menu-title">E-mail</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/apps/calendar.html">
                <i class="mdi mdi-calendar-check menu-icon"></i>
                <span class="menu-title">Calendar</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/apps/todo-list.html">
                <i class="mdi mdi-calendar-text menu-icon"></i>
                <span class="menu-title">To-do list</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/apps/gallery.html">
                <i class="mdi mdi-folder-multiple-image menu-icon"></i>
                <span class="menu-title">Gallery</span>
              </a>
            </li>
            <!--Apps end-->
            <!-- <li class="nav-item">
              <a class="nav-link" href="pages/documentation.html">
                <i class="mdi mdi-file-document-box menu-icon"></i>
                <span class="menu-title">Documentation</span>
              </a>
            </li>
          </ul> -->
        </nav>
        <!-- partial -->
        <div class="content-wrapper">
          <div class="row">
          @yield('content')


          </div>
        </div> -->
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="float-right">
                <a href="#">Srabon Bhowmik</a> &copy; 2019
            </span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- row-offcanvas ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="/node_modules/jquery/dist/jquery.min.js"></script>
  <script src="/node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="/node_modules/flot/jquery.flot.js"></script>
  <script src="/node_modules/flot/jquery.flot.resize.js"></script>
  <script src="/node_modules/flot/jquery.flot.categories.js"></script>
  <script src="/node_modules/flot/jquery.flot.pie.js"></script>
  <script src="/node_modules/rickshaw/vendor/d3.v3.js"></script>
  <script src="/node_modules/rickshaw/rickshaw.min.js"></script>
  <script src="/bower_components/chartist/dist/chartist.min.js"></script>
  <script src="/node_modules/chartist-plugin-legend/chartist-plugin-legend.js"></script>
  <script src="/node_modules/chart.js/dist/Chart.min.js"></script>
  <script src="/node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
  <!-- End plugin js for this page-->
  <script src="../../node_modules/datatables.net/js/jquery.dataTables.js"></script>
  <script src="../../node_modules/datatables.net-bs4/js/dataTables.bootstrap4.js"></script>
  <script src="../../js/data-table.js"></script>
  <!-- inject:js -->
  <script src="/js/off-canvas.js"></script>
  <script src="/js/hoverable-collapse.js"></script>
  <script src="/js/misc.js"></script>
  <script src="/js/settings.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="/js/dashboard_1.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"> </script>


  <script>
    $(document).on('click',"#delete", function (e) {
  e.preventDefault();
  var link = $(this).attr('href');
  bootbox.confirm("Are you sure want to delete ?", function(confirmed) {
    if (confirmed) {
      window.location.href = link;
    };
  });
});
  </script>
  <!-- End custom js for this page-->
</body>


<!-- Mirrored from www.urbanui.com/salt/jquery/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Dec 2017 12:32:50 GMT -->
</html>
