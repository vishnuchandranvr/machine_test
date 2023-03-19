<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">
@include('frontend.layout.header')

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            @include('frontend.layout.sidebar')

            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                @include('frontend.layout.topbar')


                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">
                    <h5 class="fw-bold py-3 mb-4 path"><span class="text-muted fw-light">@yield('nav_bar_first')</span>@yield('nav_bar_last')</h5>
                    @yield('filter')
                    
                    
                    
                    <div class="row">
                            <div class="col-lg-12 mb-4 order-0">
                                <div class="card">
                                    
                                        @yield('page_content')
                                       
                                    
                                </div>
                            </div>


                
                        </div>

                    </div>
                    <!-- / Content -->

                    <!-- Footer -->
                    @include('frontend.layout.footer')
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->


    @include('frontend.layout.script')

    @yield('page_js')

</body>

</html>