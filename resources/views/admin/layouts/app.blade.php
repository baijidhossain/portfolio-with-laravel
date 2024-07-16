<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8" />
  <title>Board of Directors - IMAF Americas</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
  <meta content="Themesbrand" name="author" />
  <!-- App favicon -->
  <link rel="shortcut icon" href="https://baijid.dev.alpha.net.bd/imafusa/assets/img/favicon.ico">
  <!-- Bootstrap Css -->
  <link href="{{ asset('assets/backend/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
  <!-- Icons Css -->
  <link href="{{ asset('assets/backend/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
  <!-- App Css-->
  <link href="{{ asset('assets/backend/css/app.min.css') }} "  rel="stylesheet" type="text/css" />

  <style>
    .line-clamp2 {
      display: -webkit-box;
      -webkit-line-clamp: 2;
      -webkit-box-orient: vertical;
      overflow: hidden;
    }
  </style>

</head>

<body>

  <!-- <body data-layout="horizontal"> -->

  <!-- Begin page -->
  <div id="layout-wrapper">

    <x-admin-header/>

    <x-admin-sidebar/>

    <div class="main-content">


      <div class="page-content">

        {{ $slot }}

      </div>
      <!-- End Page-content -->



      <x-admin-footer/>

    </div>
    <!-- end main content-->

  </div>
  <!-- END layout-wrapper -->

  <!-- Right Sidebar -->
  {{-- <div class="right-bar">
    <div data-simplebar class="h-100">
      <div class="rightbar-title d-flex align-items-center p-3">

        <h5 class="m-0 me-2">Theme Customizer</h5>

        <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
          <i class="mdi mdi-close noti-icon"></i>
        </a>
      </div>

      <!-- Settings -->
      <hr class="m-0" />

      <div class="p-4">
        <h6 class="mb-3">Layout</h6>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="layout" id="layout-vertical" value="vertical">
          <label class="form-check-label" for="layout-vertical">Vertical</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="layout" id="layout-horizontal" value="horizontal">
          <label class="form-check-label" for="layout-horizontal">Horizontal</label>
        </div>

        <h6 class="mt-4 mb-3 pt-2">Layout Mode</h6>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="layout-mode" id="layout-mode-light" value="light">
          <label class="form-check-label" for="layout-mode-light">Light</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="layout-mode" id="layout-mode-dark" value="dark">
          <label class="form-check-label" for="layout-mode-dark">Dark</label>
        </div>

        <h6 class="mt-4 mb-3 pt-2">Layout Width</h6>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="layout-width" id="layout-width-fuild" value="fuild"
            onchange="document.body.setAttribute('data-layout-size', 'fluid')">
          <label class="form-check-label" for="layout-width-fuild">Fluid</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="layout-width" id="layout-width-boxed" value="boxed"
            onchange="document.body.setAttribute('data-layout-size', 'boxed')">
          <label class="form-check-label" for="layout-width-boxed">Boxed</label>
        </div>

        <h6 class="mt-4 mb-3 pt-2">Layout Position</h6>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="layout-position" id="layout-position-fixed" value="fixed"
            onchange="document.body.setAttribute('data-layout-scrollable', 'false')">
          <label class="form-check-label" for="layout-position-fixed">Fixed</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="layout-position" id="layout-position-scrollable"
            value="scrollable" onchange="document.body.setAttribute('data-layout-scrollable', 'true')">
          <label class="form-check-label" for="layout-position-scrollable">Scrollable</label>
        </div>

        <h6 class="mt-4 mb-3 pt-2">Topbar Color</h6>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="topbar-color" id="topbar-color-light" value="light"
            onchange="document.body.setAttribute('data-topbar', 'light')">
          <label class="form-check-label" for="topbar-color-light">Light</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="topbar-color" id="topbar-color-dark" value="dark"
            onchange="document.body.setAttribute('data-topbar', 'dark')">
          <label class="form-check-label" for="topbar-color-dark">Dark</label>
        </div>

        <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Size</h6>

        <div class="form-check sidebar-setting">
          <input class="form-check-input" type="radio" name="sidebar-size" id="sidebar-size-default" value="default"
            onchange="document.body.setAttribute('data-sidebar-size', 'lg')">
          <label class="form-check-label" for="sidebar-size-default">Default</label>
        </div>
        <div class="form-check sidebar-setting">
          <input class="form-check-input" type="radio" name="sidebar-size" id="sidebar-size-compact" value="compact"
            onchange="document.body.setAttribute('data-sidebar-size', 'md')">
          <label class="form-check-label" for="sidebar-size-compact">Compact</label>
        </div>
        <div class="form-check sidebar-setting">
          <input class="form-check-input" type="radio" name="sidebar-size" id="sidebar-size-small" value="small"
            onchange="document.body.setAttribute('data-sidebar-size', 'sm')">
          <label class="form-check-label" for="sidebar-size-small">Small (Icon View)</label>
        </div>

        <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Color</h6>

        <div class="form-check sidebar-setting">
          <input class="form-check-input" type="radio" name="sidebar-color" id="sidebar-color-light" value="light"
            onchange="document.body.setAttribute('data-sidebar', 'light')">
          <label class="form-check-label" for="sidebar-color-light">Light</label>
        </div>
        <div class="form-check sidebar-setting">
          <input class="form-check-input" type="radio" name="sidebar-color" id="sidebar-color-dark" value="dark"
            onchange="document.body.setAttribute('data-sidebar', 'dark')">
          <label class="form-check-label" for="sidebar-color-dark">Dark</label>
        </div>
        <div class="form-check sidebar-setting">
          <input class="form-check-input" type="radio" name="sidebar-color" id="sidebar-color-brand" value="brand"
            onchange="document.body.setAttribute('data-sidebar', 'brand')">
          <label class="form-check-label" for="sidebar-color-brand">Brand</label>
        </div>

        <h6 class="mt-4 mb-3 pt-2">Direction</h6>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="layout-direction" id="layout-direction-ltr" value="ltr">
          <label class="form-check-label" for="layout-direction-ltr">LTR</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="layout-direction" id="layout-direction-rtl" value="rtl">
          <label class="form-check-label" for="layout-direction-rtl">RTL</label>
        </div>

      </div>

    </div> <!-- end slimscroll-menu-->
  </div> --}}
  <!-- /Right-bar -->

  <!-- Right bar overlay-->
  <div class="rightbar-overlay"></div>

  <!-- JAVASCRIPT -->
  <script src=" {{ asset('assets/backend/libs/jquery/jquery.min.js') }}"></script>

  <script src=" {{ asset('assets/backend/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <script src=" {{ asset('assets/backend/libs/metismenu/metisMenu.min.js') }} "></script>

  <script src="{{ asset('assets/backend/libs/simplebar/simplebar.min.js')}}"></script>

  <script src="{{ asset('assets/backend/libs/node-waves/waves.min.js')}}"></script>

  <script src="{{ asset('assets/backend/libs/feather-icons/feather.min.js')}}"></script>

  <!-- pace js -->
  <script src="{{ asset('assets/backend/libs/pace-js/pace.min.js')}}"></script>

  <!-- choices js -->
  <script src="{{ asset('assets/backend/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>

  <script src="{{ asset('assets/backend/js/app.js')}}"></script>

</body>

</html>