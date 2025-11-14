
<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="dark" data-toggled="close">

    <head>

        <!-- META DATA -->
		<meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=no'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="Description" content="Laravel Bootstrap Responsive Admin Web Dashboard Template">
        <meta name="Author" content="Spruko Technologies Private Limited">
        <meta name="keywords" content="dashboard bootstrap, laravel template, admin panel in laravel, php admin panel, admin panel for laravel, admin template bootstrap 5, laravel admin panel, admin dashboard template, hrm dashboard, vite laravel, admin dashboard, ecommerce admin dashboard, dashboard laravel, analytics dashboard, template dashboard, admin panel template, bootstrap admin panel template">
        
        <!-- TITLE -->
		<title> All Staffs </title>

        <!-- FAVICON -->
        <link rel="icon" href="build/assets/images/brand-logos/favicon.ico" type="image/x-icon">

        <!-- BOOTSTRAP CSS -->
	    <link  id="style" href="build/assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- ICONS CSS -->
        <link href="build/assets/icon-fonts/icons.css" rel="stylesheet">
        
        <!-- APP SCSS -->
        <link rel="preload" as="style" href="build/assets/app-fce3f544.css" /><link rel="stylesheet" href="build/assets/app-fce3f544.css" />

        <!-- NODE WAVES CSS -->
        <link href="build/assets/libs/node-waves/waves.min.css" rel="stylesheet"> 

        <!-- SIMPLEBAR CSS -->
        <link rel="stylesheet" href="build/assets/libs/simplebar/simplebar.min.css">

        <!-- COLOR PICKER CSS -->
        <link rel="stylesheet" href="build/assets/libs/flatpickr/flatpickr.min.css">
        <link rel="stylesheet" href="build/assets/libs/@simonwep/pickr/themes/nano.min.css">

        <!-- CHOICES CSS -->
        <link rel="stylesheet" href="build/assets/libs/choices.js/public/assets/styles/choices.min.css">

        <!-- CHOICES JS -->
        <script src="build/assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>

        <!-- MAIN JS -->
        <script src="build/assets/main.js"></script>

         
        <!-- DATA TABLES CSS -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.bootstrap5.min.css">


	</head>

	<body>

        <!-- SWITCHER -->

        <div class="offcanvas offcanvas-end" tabindex="-1" id="switcher-canvas" aria-labelledby="offcanvasRightLabel">
                
                <div class="offcanvas-header border-bottom">
                    <h5 class="offcanvas-title text-default" id="offcanvasRightLabel">Switcher</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <nav class="border-bottom border-block-end-dashed">
                        <div class="nav nav-tabs nav-justified" id="switcher-main-tab" role="tablist">
                            <button class="nav-link active" id="switcher-home-tab" data-bs-toggle="tab" data-bs-target="#switcher-home"
                                type="button" role="tab" aria-controls="switcher-home" aria-selected="true">Theme Styles</button>
                            <button class="nav-link" id="switcher-profile-tab" data-bs-toggle="tab" data-bs-target="#switcher-profile"
                                type="button" role="tab" aria-controls="switcher-profile" aria-selected="false">Theme Colors</button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active border-0" id="switcher-home" role="tabpanel" aria-labelledby="switcher-home-tab"
                            tabindex="0">
                            <div class="">
                                <p class="switcher-style-head">Theme Color Mode:</p>
                                <div class="row switcher-style gx-0">
                                    <div class="col-4">
                                        <div class="form-check switch-select">
                                            <label class="form-check-label" for="switcher-light-theme">
                                                Light
                                            </label>
                                            <input class="form-check-input" type="radio" name="theme-style" id="switcher-light-theme"
                                                checked>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-check switch-select">
                                            <label class="form-check-label" for="switcher-dark-theme">
                                                Dark
                                            </label>
                                            <input class="form-check-input" type="radio" name="theme-style" id="switcher-dark-theme">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <p class="switcher-style-head">Directions:</p>
                                <div class="row switcher-style gx-0">
                                    <div class="col-4">
                                        <div class="form-check switch-select">
                                            <label class="form-check-label" for="switcher-ltr">
                                                LTR
                                            </label>
                                            <input class="form-check-input" type="radio" name="direction" id="switcher-ltr" checked>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-check switch-select">
                                            <label class="form-check-label" for="switcher-rtl">
                                                RTL
                                            </label>
                                            <input class="form-check-input" type="radio" name="direction" id="switcher-rtl">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <p class="switcher-style-head">Navigation Styles:</p>
                                <div class="row switcher-style gx-0">
                                    <div class="col-4">
                                        <div class="form-check switch-select">
                                            <label class="form-check-label" for="switcher-vertical">
                                                Vertical
                                            </label>
                                            <input class="form-check-input" type="radio" name="navigation-style" id="switcher-vertical"
                                                checked>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-check switch-select">
                                            <label class="form-check-label" for="switcher-horizontal">
                                                Horizontal
                                            </label>
                                            <input class="form-check-input" type="radio" name="navigation-style"
                                                id="switcher-horizontal">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="navigation-menu-styles">
                                <p class="switcher-style-head">Vertical & Horizontal Menu Styles:</p>
                                <div class="row switcher-style gx-0 pb-2 gy-2">
                                    <div class="col-4">
                                        <div class="form-check switch-select">
                                            <label class="form-check-label" for="switcher-menu-click">
                                                Menu Click
                                            </label>
                                            <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                                id="switcher-menu-click">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-check switch-select">
                                            <label class="form-check-label" for="switcher-menu-hover">
                                                Menu Hover
                                            </label>
                                            <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                                id="switcher-menu-hover">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-check switch-select">
                                            <label class="form-check-label" for="switcher-icon-click">
                                                Icon Click
                                            </label>
                                            <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                                id="switcher-icon-click">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-check switch-select">
                                            <label class="form-check-label" for="switcher-icon-hover">
                                                Icon Hover
                                            </label>
                                            <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                                id="switcher-icon-hover">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidemenu-layout-styles">
                                <p class="switcher-style-head">Sidemenu Layout Styles:</p>
                                <div class="row switcher-style gx-0 pb-2 gy-2">
                                    <div class="col-sm-6">
                                        <div class="form-check switch-select">
                                            <label class="form-check-label" for="switcher-default-menu">
                                                Default Menu
                                            </label>
                                            <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                                id="switcher-default-menu" checked>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-check switch-select">
                                            <label class="form-check-label" for="switcher-closed-menu">
                                                Closed Menu
                                            </label>
                                            <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                                id="switcher-closed-menu">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-check switch-select">
                                            <label class="form-check-label" for="switcher-icontext-menu">
                                                Icon Text
                                            </label>
                                            <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                                id="switcher-icontext-menu">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-check switch-select">
                                            <label class="form-check-label" for="switcher-icon-overlay">
                                                Icon Overlay
                                            </label>
                                            <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                                id="switcher-icon-overlay">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-check switch-select">
                                            <label class="form-check-label" for="switcher-detached">
                                                Detached
                                            </label>
                                            <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                                id="switcher-detached">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-check switch-select">
                                            <label class="form-check-label" for="switcher-double-menu">
                                                Double Menu
                                            </label>
                                            <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                                id="switcher-double-menu">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <p class="switcher-style-head">Page Styles:</p>
                                <div class="row switcher-style gx-0">
                                    <div class="col-4">
                                        <div class="form-check switch-select">
                                            <label class="form-check-label" for="switcher-regular">
                                                Regular
                                            </label>
                                            <input class="form-check-input" type="radio" name="page-styles" id="switcher-regular"
                                                checked>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-check switch-select">
                                            <label class="form-check-label" for="switcher-classic">
                                                Classic
                                            </label>
                                            <input class="form-check-input" type="radio" name="page-styles" id="switcher-classic">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-check switch-select">
                                            <label class="form-check-label" for="switcher-modern">
                                                Modern
                                            </label>
                                            <input class="form-check-input" type="radio" name="page-styles" id="switcher-modern">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <p class="switcher-style-head">Layout Width Styles:</p>
                                <div class="row switcher-style gx-0">
                                    <div class="col-4">
                                        <div class="form-check switch-select">
                                            <label class="form-check-label" for="switcher-full-width">
                                                Full Width
                                            </label>
                                            <input class="form-check-input" type="radio" name="layout-width" id="switcher-full-width"
                                                checked>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-check switch-select">
                                            <label class="form-check-label" for="switcher-boxed">
                                                Boxed
                                            </label>
                                            <input class="form-check-input" type="radio" name="layout-width" id="switcher-boxed">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <p class="switcher-style-head">Menu Positions:</p>
                                <div class="row switcher-style gx-0">
                                    <div class="col-4">
                                        <div class="form-check switch-select">
                                            <label class="form-check-label" for="switcher-menu-fixed">
                                                Fixed
                                            </label>
                                            <input class="form-check-input" type="radio" name="menu-positions" id="switcher-menu-fixed"
                                                checked>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-check switch-select">
                                            <label class="form-check-label" for="switcher-menu-scroll">
                                                Scrollable
                                            </label>
                                            <input class="form-check-input" type="radio" name="menu-positions" id="switcher-menu-scroll">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <p class="switcher-style-head">Header Positions:</p>
                                <div class="row switcher-style gx-0">
                                    <div class="col-4">
                                        <div class="form-check switch-select">
                                            <label class="form-check-label" for="switcher-header-fixed">
                                                Fixed
                                            </label>
                                            <input class="form-check-input" type="radio" name="header-positions"
                                                id="switcher-header-fixed" checked>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-check switch-select">
                                            <label class="form-check-label" for="switcher-header-scroll">
                                                Scrollable
                                            </label>
                                            <input class="form-check-input" type="radio" name="header-positions"
                                                id="switcher-header-scroll">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <p class="switcher-style-head">Loader:</p>
                                <div class="row switcher-style gx-0">
                                    <div class="col-4">
                                        <div class="form-check switch-select">
                                            <label class="form-check-label" for="switcher-loader-enable">
                                                Enable
                                            </label>
                                            <input class="form-check-input" type="radio" name="page-loader"
                                                id="switcher-loader-enable">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-check switch-select">
                                            <label class="form-check-label" for="switcher-loader-disable">
                                                Disable
                                            </label>
                                            <input class="form-check-input" type="radio" name="page-loader"
                                                id="switcher-loader-disable" checked>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade border-0" id="switcher-profile" role="tabpanel" aria-labelledby="switcher-profile-tab" tabindex="0">
                            <div>
                                <div class="theme-colors">
                                    <p class="switcher-style-head">Menu Colors:</p>
                                    <div class="d-flex switcher-style pb-2">
                                        <div class="form-check switch-select me-3">
                                            <input class="form-check-input color-input color-white" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Light Menu" type="radio" name="menu-colors"
                                                id="switcher-menu-light">
                                        </div>
                                        <div class="form-check switch-select me-3">
                                            <input class="form-check-input color-input color-dark" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Dark Menu" type="radio" name="menu-colors"
                                                id="switcher-menu-dark" checked>
                                        </div>
                                        <div class="form-check switch-select me-3">
                                            <input class="form-check-input color-input color-primary" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Color Menu" type="radio" name="menu-colors"
                                                id="switcher-menu-primary">
                                        </div>
                                        <div class="form-check switch-select me-3">
                                            <input class="form-check-input color-input color-gradient" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Gradient Menu" type="radio" name="menu-colors"
                                                id="switcher-menu-gradient">
                                        </div>
                                        <div class="form-check switch-select me-3">
                                            <input class="form-check-input color-input color-transparent"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Transparent Menu"
                                                type="radio" name="menu-colors" id="switcher-menu-transparent">
                                        </div>
                                    </div>
                                    <div class="px-4 pb-3 text-muted fs-11">Note:If you want to change color Menu dynamically change from below Theme Primary color picker</div>
                                </div>
                                <div class="theme-colors">
                                    <p class="switcher-style-head">Header Colors:</p>
                                    <div class="d-flex switcher-style pb-2">
                                        <div class="form-check switch-select me-3">
                                            <input class="form-check-input color-input color-white" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Light Header" type="radio" name="header-colors"
                                                id="switcher-header-light" checked>
                                        </div>
                                        <div class="form-check switch-select me-3">
                                            <input class="form-check-input color-input color-dark" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Dark Header" type="radio" name="header-colors"
                                                id="switcher-header-dark">
                                        </div>
                                        <div class="form-check switch-select me-3">
                                            <input class="form-check-input color-input color-primary" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Color Header" type="radio" name="header-colors"
                                                id="switcher-header-primary">
                                        </div>
                                        <div class="form-check switch-select me-3">
                                            <input class="form-check-input color-input color-gradient" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Gradient Header" type="radio" name="header-colors"
                                                id="switcher-header-gradient">
                                        </div>
                                        <div class="form-check switch-select me-3">
                                            <input class="form-check-input color-input color-transparent" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Transparent Header" type="radio" name="header-colors"
                                                id="switcher-header-transparent">
                                        </div>
                                    </div>
                                    <div class="px-4 pb-3 text-muted fs-11">Note:If you want to change color Header dynamically change from below Theme Primary color picker</div>
                                </div>
                                <div class="theme-colors">
                                    <p class="switcher-style-head">Theme Primary:</p>
                                    <div class="d-flex flex-wrap align-items-center switcher-style">
                                        <div class="form-check switch-select me-3">
                                            <input class="form-check-input color-input color-primary-1" type="radio"
                                                name="theme-primary" id="switcher-primary">
                                        </div>
                                        <div class="form-check switch-select me-3">
                                            <input class="form-check-input color-input color-primary-2" type="radio"
                                                name="theme-primary" id="switcher-primary1">
                                        </div>
                                        <div class="form-check switch-select me-3">
                                            <input class="form-check-input color-input color-primary-3" type="radio" name="theme-primary"
                                                id="switcher-primary2">
                                        </div>
                                        <div class="form-check switch-select me-3">
                                            <input class="form-check-input color-input color-primary-4" type="radio" name="theme-primary"
                                                id="switcher-primary3">
                                        </div>
                                        <div class="form-check switch-select me-3">
                                            <input class="form-check-input color-input color-primary-5" type="radio" name="theme-primary"
                                                id="switcher-primary4">
                                        </div>
                                        <div class="form-check switch-select ps-0 mt-1 color-primary-light">
                                            <div class="theme-container-primary"></div>
                                            <div class="pickr-container-primary"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="theme-colors">
                                    <p class="switcher-style-head">Theme Background:</p>
                                    <div class="d-flex flex-wrap align-items-center switcher-style">
                                        <div class="form-check switch-select me-3">
                                            <input class="form-check-input color-input color-bg-1" type="radio"
                                                name="theme-background" id="switcher-background">
                                        </div>
                                        <div class="form-check switch-select me-3">
                                            <input class="form-check-input color-input color-bg-2" type="radio"
                                                name="theme-background" id="switcher-background1">
                                        </div>
                                        <div class="form-check switch-select me-3">
                                            <input class="form-check-input color-input color-bg-3" type="radio" name="theme-background"
                                                id="switcher-background2">
                                        </div>
                                        <div class="form-check switch-select me-3">
                                            <input class="form-check-input color-input color-bg-4" type="radio"
                                                name="theme-background" id="switcher-background3">
                                        </div>
                                        <div class="form-check switch-select me-3">
                                            <input class="form-check-input color-input color-bg-5" type="radio"
                                                name="theme-background" id="switcher-background4">
                                        </div>
                                        <div class="form-check switch-select ps-0 mt-1 tooltip-static-demo color-bg-transparent">
                                            <div class="theme-container-background"></div>
                                            <div class="pickr-container-background"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="menu-image mb-3">
                                    <p class="switcher-style-head">Menu With Background Image:</p>
                                    <div class="d-flex flex-wrap align-items-center switcher-style">
                                        <div class="form-check switch-select m-2">
                                            <input class="form-check-input bgimage-input bg-img1" type="radio"
                                                name="theme-background" id="switcher-bg-img">
                                        </div>
                                        <div class="form-check switch-select m-2">
                                            <input class="form-check-input bgimage-input bg-img2" type="radio"
                                                name="theme-background" id="switcher-bg-img1">
                                        </div>
                                        <div class="form-check switch-select m-2">
                                            <input class="form-check-input bgimage-input bg-img3" type="radio" name="theme-background"
                                                id="switcher-bg-img2">
                                        </div>
                                        <div class="form-check switch-select m-2">
                                            <input class="form-check-input bgimage-input bg-img4" type="radio"
                                                name="theme-background" id="switcher-bg-img3">
                                        </div>
                                        <div class="form-check switch-select m-2">
                                            <input class="form-check-input bgimage-input bg-img5" type="radio"
                                                name="theme-background" id="switcher-bg-img4">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between canvas-footer flex-wrap"> 
                            <a href="https://themeforest.net/item/ynex-laravel-admin-panel-template/48397579" class="btn btn-primary m-1" target="_blank">Buy Now</a> 
                            <a href="https://themeforest.net/user/spruko/portfolio" class="btn btn-secondary m-1" target="_blank">Our Portfolio</a> 
                            <a href="javascript:void(0);" id="reset-all" class="btn btn-danger m-1">Reset</a> 
                        </div>
                    </div>
                </div>
            </div>
        <!-- END SWITCHER -->

        <!-- LOADER -->
		<div id="loader">
			<img src="build/assets/images/media/loader.svg" alt="">
		</div>
		<!-- END LOADER -->

        <!-- PAGE -->
		<div class="page">

            <!-- HEADER -->

           @include('navbar')

        @include('sidebar')
            <!-- END SIDEBAR -->

            <!-- MAIN-CONTENT -->

            <div class="main-content app-content">

                
                <div class="container-fluid">

                    <!-- Page Header -->
                    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                        <h1 class="page-title fw-semibold fs-18 mb-0">Data Tables</h1>
                        <div class="ms-md-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- Page Header Close -->
                  
                    <div class="alert alert-solid-secondary alert-dismissible fs-15 fade show mb-4" style="background:#2ECC71;border: none;">
                  Data Stored Successfully!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" style="color: black;font-weight: bold;">X</button>
                </div>
           

                @if ($errors->any())
                <div class="alert alert-danger ">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        


                <!-- Start::row-1 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                  All Campaigns
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="datatable-basic" class="table table-bordered text-nowrap w-100">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                              
                                                <th>Manage</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         
                                            @foreach ($campaign as $val )
                                                
                                       
                                            <tr>
                                            
                                            <td>{{ $loop->iteration}}</td>
                                            <td>{{ $val }}</td>
                                            <td>

                                               <button style="background-color:violet"> <a href="/campaign/delete.php?name={{ $val }}">Delete</a></button>
                                            
                                         
                                           </td>
                                            </tr>

                                       
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{-- {{ $staff->links() }} --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End::row-1 -->

              

                </div>


            </div> 
            <!-- END MAIN-CONTENT -->

            <!-- SEARCH-MODAL -->

            <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModal" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                    <div class="input-group">
                        <a href="javascript:void(0);" class="input-group-text" id="Search-Grid"><i class="fe fe-search header-link-icon fs-18"></i></a>
                        <input type="search" class="form-control border-0 px-2" placeholder="Search" aria-label="Username">
                        <a href="javascript:void(0);" class="input-group-text" id="voice-search"><i class="fe fe-mic header-link-icon"></i></a>
                        <a href="javascript:void(0);" class="btn btn-light btn-icon" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fe fe-more-vertical"></i>
                        </a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                        </ul>
                    </div>
                    <div class="mt-4">
                        <p class="font-weight-semibold text-muted mb-2">Are You Looking For...</p>
                        <span class="search-tags"><i class="fe fe-user me-2"></i>People<a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a></span>
                        <span class="search-tags"><i class="fe fe-file-text me-2"></i>Pages<a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a></span>
                        <span class="search-tags"><i class="fe fe-align-left me-2"></i>Articles<a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a></span>
                        <span class="search-tags"><i class="fe fe-server me-2"></i>Tags<a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a></span>
                    </div>
                    <div class="my-4">
                        <p class="font-weight-semibold text-muted mb-2">Recent Search :</p>
                        <div class="p-2 border br-5 d-flex align-items-center text-muted mb-2 alert">
                        <a href="notifications.html"><span>Notifications</span></a>
                        <a class="ms-auto lh-1" href="javascript:void(0);" data-bs-dismiss="alert" aria-label="Close"><i class="fe fe-x text-muted"></i></a>
                        </div>
                        <div class="p-2 border br-5 d-flex align-items-center text-muted mb-2 alert">
                        <a href="alerts.html"><span>Alerts</span></a>
                        <a class="ms-auto lh-1" href="javascript:void(0);" data-bs-dismiss="alert" aria-label="Close"><i class="fe fe-x text-muted"></i></a>
                        </div>
                        <div class="p-2 border br-5 d-flex align-items-center text-muted mb-0 alert">
                        <a href="mail.html"><span>Mail</span></a>
                        <a class="ms-auto lh-1" href="javascript:void(0);" data-bs-dismiss="alert" aria-label="Close"><i class="fe fe-x text-muted"></i></a>
                        </div>
                    </div>
                    </div>
                    <div class="modal-footer">
                    <div class="btn-group ms-auto">
                        <button class="btn btn-sm btn-primary-light">Search</button>
                        <button class="btn btn-sm btn-primary">Clear Recents</button>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <!-- END SEARCH-MODAL -->

            <!-- FOOTER -->
            
            <!-- END FOOTER -->

		</div>
        <!-- END PAGE-->

        <!-- SCRIPTS -->

        <!-- SCROLL-TO-TOP -->
        <div class="scrollToTop">
                <span class="arrow"><i class="ri-arrow-up-s-fill fs-20"></i></span>
        </div>
        <div id="responsive-overlay"></div>

        <!-- POPPER JS -->
        <script src="build/assets/libs/@popperjs/core/umd/popper.min.js"></script>

        <!-- BOOTSTRAP JS -->
        <script src="build/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- NODE WAVES JS -->
        <script src="build/assets/libs/node-waves/waves.min.js"></script>

        <!-- SIMPLEBAR JS -->
        <script src="build/assets/libs/simplebar/simplebar.min.js"></script>
        <link rel="modulepreload" href="build/assets/simplebar-635bad04.js" /><script type="module" src="build/assets/simplebar-635bad04.js"></script>

        <!-- COLOR PICKER JS -->
        <script src="build/assets/libs/@simonwep/pickr/pickr.es5.min.js"></script>
        
        <!-- JQUERY JS -->
        <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

        <!-- DATATABLES CDN JS -->
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.6/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>

        <!-- INTERNAL DATATABLES JS -->
        <link rel="modulepreload" href="build/assets/datatables-52162115.js" /><script type="module" src="build/assets/datatables-52162115.js"></script>
        

        <!-- STICKY JS -->
		<script src="build/assets/sticky.js"></script>

        <!-- APP JS -->
		<link rel="modulepreload" href="build/assets/app-3cade095.js" /><script type="module" src="build/assets/app-3cade095.js"></script>

        <!-- CUSTOM-SWITCHER JS -->
        <link rel="modulepreload" href="build/assets/custom-switcher-383b6a5b.js" /><script type="module" src="build/assets/custom-switcher-383b6a5b.js"></script>
        
        <!-- END SCRIPTS -->

	</body>
</html>
