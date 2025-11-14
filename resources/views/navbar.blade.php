<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />

<style>

    .input-container {
    margin: 30px;
    }

    #glowInput {
    padding: 10px;
    font-size: 16px;
    border: 2px solid #ccc;
    border-radius: 5px;
    transition: box-shadow 0.3s ease;
    }

    #glowInput:hover {
    outline: none;
    box-shadow: 0 0 5px #037dff; /* Glow color and effect */
    }

</style>

    <script>
        function glowUp() {
    // This function is triggered when the input field is clicked
    var input = document.getElementById('glowInput');
    input.classList.add('glow'); // Adding a class to enable glow effect
    }

    </script>

    <header class="app-header">

                <!-- Start::main-header-container -->
                <div class="main-header-container container-fluid">

                    <!-- Start::header-content-left -->
                    <div class="header-content-left">

                        <!-- Start::header-element -->
                        <div class="header-element">
                            <div class="horizontal-logo">
                                <a href="./index.php" class="header-logo">
                                    <img src="build/assets/images/brand-logos/desktop-logo.png" alt="logo" class="desktop-logo">
                                    <img src="build/assets/images/brand-logos/toggle-logo.png" alt="logo" class="toggle-logo">
                                    <img src="build/assets/images/brand-logos/desktop-dark.png" alt="logo" class="desktop-dark">
                                    <img src="build/assets/images/brand-logos/toggle-dark.png" alt="logo" class="toggle-dark">
                                    <img src="build/assets/images/brand-logos/desktop-white.png" alt="logo" class="desktop-white">
                                    <img src="build/assets/images/brand-logos/toggle-white.png" alt="logo" class="toggle-white">
                                </a>
                            </div>
                        </div>

   <div class="header-element">
                            <!-- Start::header-link -->
                            <a aria-label="Hide Sidebar" class="sidemenu-toggle header-link animated-arrow hor-toggle horizontal-navtoggle" data-bs-toggle="sidebar" href="javascript:void(0);"><span></span></a>
                            <!-- End::header-link -->
                        </div>
                        <!-- End::header-element -->

                    </div>
                    <!-- End::header-content-left -->

                    <!-- Start::header-content-right -->
                    <div class="header-content-right">

                        <!-- Start::header-element -->
     
                        <!-- End::header-element -->

                        <!-- Start::header-element -->
                        <div class="header-element header-theme-mode">
                            <!-- Start::header-link|layout-setting -->
                            <a href="javascript:void(0);" class="header-link layout-setting">
                                <span class="light-layout">
                                    <!-- Start::header-link-icon -->
                                <i class="bx bx-moon header-link-icon"></i>
                                    <!-- End::header-link-icon -->
                                </span>
                                <span class="dark-layout">
                                    <!-- Start::header-link-icon -->
                                <i class="bx bx-sun header-link-icon"></i>
                                    <!-- End::header-link-icon -->
                                </span>
                            </a>
                            <!-- End::header-link|layout-setting -->
                        </div>
                        <!-- End::header-element -->

                            <!-- Start::header-link|dropdown-toggle -->
                        <!-- End::header-element -->

                        <!-- Start::header-element -->
                        <div class="header-element header-fullscreen">
                            <!-- Start::header-link -->
                            <a onclick="openFullscreen();" href="javascript:void(0);" class="header-link">
                                <i class="bx bx-fullscreen full-screen-open header-link-icon"></i>
                                <i class="bx bx-exit-fullscreen full-screen-close header-link-icon d-none"></i>
                            </a>
                            <!-- End::header-link -->
                        </div>
                        <!-- End::header-element -->

                        <!-- Start::header-element -->
                        <div class="header-element">
                            <!-- Start::header-link|dropdown-toggle -->
                            <a href="javascript:void(0);" class="header-link dropdown-toggle" id="mainHeaderProfile" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                <div class="d-flex align-items-center">
                                    <div class="me-sm-2 me-0">
                                        <img src="build/assets/images/faces/9.jpg" alt="img" width="32" height="32" class="rounded-circle">
                                    </div>
                                    <div class="d-sm-block d-none">
                                        <p class="fw-semibold mb-0 lh-1">{{ Auth::user()->email }}</p>
                                        <a href="/logout"><b>Logout</b></a>
                                    </div>
                                </div>
                            </a>
                            <!-- End::header-link|dropdown-toggle -->
              
                        </div>  
                        <!-- End::header-element -->
                                        </div>
                    <!-- End::header-content-right -->

                </div>
                <!-- End::main-header-container -->

            </header>