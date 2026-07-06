<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-menu-color="brand" data-topbar-color="light">

    <head>
        <meta charset="utf-8" />
        <title>Dashboard | Voyage Edifiant</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="" name="description" />
        <meta content="FAC Immobilier" name="author" />

        <!-- App favicon -->
        <link rel="icon" type="image/png" sizes="48x48" href="{{ url('assets/front/image/favicon.ico') }}">

        <link href="{{ url('/assets/back/libs/morris.js/morris.css') }}" rel="stylesheet" type="text/css" />

        <!-- Plugins css -->
        <link href="{{ url('assets/back/libs/quill/quill.core.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ url('assets/back/libs/quill/quill.bubble.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ url('assets/back/libs/quill/quill.snow.css') }}" rel="stylesheet" type="text/css" />

        <script src="https://cdn.ckeditor.com/ckeditor5/35.3.0/classic/ckeditor.js"></script>

        <!-- App css -->
        <link href="{{ url('/assets/back/css/style.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ url('/assets/back/css/icons.min.css') }}" rel="stylesheet" type="text/css">
        <script src="{{ url('/assets/back/js/config.js') }}"></script>
<<<<<<< HEAD
=======

        <!-- Modern UI Overrides -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        
        <style id="modern-admin-overrides">
            :root {
                --bg-color: #f4f7f6;
                --card-bg: #ffffff;
                --text-primary: #1e293b;
                --text-muted: #64748b;
                --border-color: rgba(0, 0, 0, 0.05);
                --primary-color: #0f172a;
                --border-radius-lg: 16px;
                --box-shadow-soft: 0 4px 20px -2px rgba(0, 0, 0, 0.03);
            }

            body {
                font-family: 'Outfit', sans-serif !important;
                background-color: var(--bg-color) !important;
                color: var(--text-primary);
                -webkit-font-smoothing: antialiased;
            }

            .content-page, .page-content {
                background-color: var(--bg-color) !important;
            }

            /* Cards Refinement */
            .card {
                background-color: var(--card-bg) !important;
                border: 1px solid var(--border-color) !important;
                border-radius: var(--border-radius-lg) !important;
                box-shadow: var(--box-shadow-soft) !important;
                transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1), box-shadow 0.3s cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .card:hover {
                transform: translateY(-3px);
                box-shadow: 0 10px 40px -8px rgba(0, 0, 0, 0.08) !important;
            }

            .card-title {
                font-weight: 600;
                font-size: 1.15rem;
                color: var(--primary-color);
                letter-spacing: -0.01em;
            }

            /* Tables Refinement */
            .table-responsive {
                border-radius: 12px;
            }
            .table {
                border-collapse: separate !important;
                border-spacing: 0 !important;
                margin-bottom: 0 !important;
            }
            .table thead th {
                background-color: #f8fafc !important;
                color: var(--text-muted) !important;
                font-size: 0.75rem !important;
                text-transform: uppercase !important;
                letter-spacing: 0.05em !important;
                font-weight: 600 !important;
                border-bottom: 1px solid var(--border-color) !important;
                border-top: none !important;
                padding: 1rem 1.25rem !important;
            }
            .table tbody td {
                padding: 1rem 1.25rem !important;
                vertical-align: middle !important;
                color: var(--text-primary) !important;
                border-bottom: 1px solid var(--border-color) !important;
                font-size: 0.95rem !important;
                transition: background-color 0.2s ease;
            }
            .table tbody tr:hover td {
                background-color: #f8fafc !important;
            }
            .table tbody tr:last-child td {
                border-bottom: none !important;
            }

            /* Topbar and Sidebar tweaks */
            .navbar-custom {
                background-color: rgba(255, 255, 255, 0.85) !important;
                backdrop-filter: blur(12px) !important;
                -webkit-backdrop-filter: blur(12px) !important;
                border-bottom: 1px solid var(--border-color) !important;
                box-shadow: none !important;
            }
            .leftside-menu, .side-nav {
                background-color: #ffffff !important;
                border-right: 1px solid var(--border-color) !important;
                box-shadow: none !important;
            }
            .side-nav-link {
                font-family: 'Outfit', sans-serif !important;
                font-weight: 500 !important;
                color: var(--text-muted) !important;
                transition: color 0.2s ease, background-color 0.2s ease !important;
            }
            .side-nav-link:hover {
                color: var(--primary-color) !important;
            }
            .side-nav-item.menuitem-active > a {
                color: var(--primary-color) !important;
                font-weight: 600 !important;
            }

            /* Progress Bars Refinement */
            .progress {
                background-color: #f1f5f9 !important;
                border-radius: 100px !important;
                overflow: hidden !important;
                box-shadow: inset 0 1px 2px rgba(0,0,0,0.02) !important;
            }
            .progress-bar {
                border-radius: 100px !important;
                background-image: linear-gradient(90deg, rgba(255,255,255,0.15) 25%, transparent 25%, transparent 50%, rgba(255,255,255,0.15) 50%, rgba(255,255,255,0.15) 75%, transparent 75%, transparent) !important;
                background-size: 1rem 1rem !important;
            }
            
            /* Gradient classes for progress bars */
            .bg-gradient-success { background: linear-gradient(135deg, #10b981, #059669) !important; }
            .bg-gradient-danger { background: linear-gradient(135deg, #ef4444, #dc2626) !important; }
            .bg-gradient-warning { background: linear-gradient(135deg, #f59e0b, #d97706) !important; }
            .bg-gradient-info { background: linear-gradient(135deg, #0ea5e9, #0284c7) !important; }
        </style>
>>>>>>> djuedev
    </head>

    <body>

        <!-- Begin page -->
        <div class="layout-wrapper">

            <!-- ========== Left Sidebar ========== -->
            @include('layouts.back.sidebar')

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <!-- Start Page Content here -->
            <div class="page-content">

                <!-- ========== Topbar Start ========== -->
                <div class="navbar-custom">
                    @include("layouts.back.topbar")
                </div>
                <!-- ========== Topbar End ========== -->

                <div class="px-3">

                    @yield('content')

                </div> <!-- content -->

                <!-- Footer Start -->
                @include('layouts.back.footer')
                <!-- end Footer -->
        
            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- App js -->
        <script src="{{ url('assets/back/js/vendor.min.js') }}"></script>
        <script src="{{ url('assets/back/js/app.js') }}"></script>

        <!-- Knob charts js -->
        <script src="{{ url('assets/back/libs/jquery-knob/jquery.knob.min.js') }}"></script>

        <!-- Sparkline Js-->
        <script src="{{ url('assets/back/libs/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

        <script src="{{ url('assets/back/libs/morris.js/morris.min.js') }}"></script>

        <script src="{{ url('assets/back/libs/raphael/raphael.min.js') }}"></script>

        <!-- Dashboard init-->
        <script src="{{ url('assets/back/js/pages/dashboard.js') }}"></script>

        <!-- Plugins js -->
        <script src="{{ url('assets/back/libs/quill/quill.min.js') }}"></script>

        <!-- Demo js-->
        <script src="{{ url('assets/back/js/pages/form-quilljs.js') }}"></script> --}}

        <script>
        document.addEventListener('DOMContentLoaded', function () {
                var quill = new Quill('#editor', {
                    theme: 'snow'
                });
        
                // Synchroniser le contenu Quill avec le champ caché
                var contentInput = document.getElementById('content');
                quill.on('text-change', function () {
                    contentInput.value = quill.root.innerHTML;
                });
            });
        </script>

        {{-- <script>
            ClassicEditor
                .create(document.querySelector('#editor'))
                .catch(error => {
                    console.error(error);
                });
        </script> --}}
        
        
    

    </body>

</html>