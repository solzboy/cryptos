<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="icon" href="assets/images/favicon/favicon.png" />

        <title>@yield('title'){{ config("app.name") }}</title>

        <!-- Bootstrap 4.0-->
        <link
            rel="stylesheet"
            href="/dashboard/assets/vendor_components/bootstrap/dist/css/bootstrap.min.css"
        />

        <!-- theme style -->
        <link rel="stylesheet" href="/dashboard/css/horizontal-menu.css" />
        <link rel="stylesheet" href="/dashboard/css/style.css" />

        <!-- Admin skins -->
        <link rel="stylesheet" href="/dashboard/css/skin_color.css" />
    </head>
    <body class="layout-top-nav light-skin theme-classic">
        <!-- Site wrapper -->
        <div class="wrapper">
            <header class="main-header">
                <div class="inside-header">
                    <div
                        class="d-flex align-items-center logo-box justify-content-between"
                    >
                        <a href="index.html" class="logo">
                            <div class="logo-mini">
                                <span class="light-logo"
                                    ><img
                                        src="/dashboard/images/logo-dark.png"
                                        alt="logo"
                                /></span>
                                <span class="dark-logo"
                                    ><img
                                        src="/dashboard/images/logo-dark.png"
                                        alt="logo"
                                /></span>
                            </div>
                            <div class="logo-lg">
                                <span class="light-logo"
                                    ><img
                                        src="/dashboard/images/logo-dark-text.png"
                                        alt="logo"
                                /></span>
                                <span class="dark-logo"
                                    ><img
                                        src="/dashboard/images/logo-light-text.png"
                                        alt="logo"
                                /></span>
                            </div>
                        </a>
                    </div>
                    <!-- Header Navbar -->
                    <nav class="navbar navbar-static-top">
                        <!-- Sidebar toggle button-->
                        <div>
                            <a
                                href="#"
                                data-provide="fullscreen"
                                class="sidebar-toggle d-lg-inline-flex d-none"
                                title="Full Screen"
                            >
                                <i class="mdi mdi-crop-free"></i>
                            </a>
                        </div>

                        <div class="navbar-custom-menu r-side">
                            <ul class="nav navbar-nav">
                                <!-- full Screen -->
                                <li class="search-bar">
                                    <div
                                        class="lookup lookup-circle lookup-right"
                                    >
                                        <input type="text" name="s" />
                                    </div>
                                </li>
                                <!-- Messages -->

                                <!-- Notifications -->

                                <!-- Tasks -->

                                <!-- User Account-->
                                <li class="dropdown user user-menu">
                                    <a
                                        href="#"
                                        class="dropdown-toggle"
                                        data-toggle="dropdown"
                                        title="User"
                                    >
                                        <img
                                            src="/dashboard/images/avatar/7.jpg"
                                            class="user-image rounded-circle"
                                            alt="User Image"
                                        />
                                    </a>
                                    <ul class="dropdown-menu animated flipInX">
                                        <!-- User image -->
                                        <li
                                            class="user-header bg-img"
                                            style="
                                                background-image: url(/dashboard/images/user-info.jpg);
                                            "
                                            data-overlay="3"
                                        >
                                            <div
                                                class="flexbox align-self-center"
                                            >
                                                <h4
                                                    class="user-name align-self-center"
                                                >
                                                    <span
                                                        >{{ Auth::user()->name }}</span
                                                    >
                                                    <small
                                                        >{{ Auth::user()->email }}</small
                                                    >
                                                </h4>
                                            </div>
                                        </li>
                                        <!-- Menu Body -->
                                        <li class="user-body">
                                            <a
                                                class="dropdown-item"
                                                href="/account_wallet"
                                                ><i class="ion ion-bag"></i> My
                                                Balance</a
                                            >
                                            <div class="dropdown-divider"></div>
                                            <a
                                                class="dropdown-item"
                                                href="javascript:void(0)"
                                                ><i
                                                    class="ion ion-settings"
                                                ></i>
                                                Account Setting</a
                                            >
                                            <div class="dropdown-divider"></div>
                                            <a
                                                class="dropdown-item"
                                                href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
							document.getElementById('logout-form').submit();"
                                                ><i class="ion-log-out"></i>
                                                {{ __("Logout") }}</a
                                            >
                                            <form
                                                id="logout-form"
                                                action="{{ route('logout') }}"
                                                method="POST"
                                                style="display: none"
                                            >
                                                @csrf
                                            </form>
                                            <div class="dropdown-divider"></div>
                                        </li>
                                    </ul>
                                </li>

                                <!-- Control Sidebar Toggle Button -->
                            </ul>
                        </div>
                    </nav>
                </div>
            </header>

            <nav class="main-nav" role="navigation">
                <!-- Mobile menu toggle button (hamburger/x icon) -->
                <input id="main-menu-state" type="checkbox" />
                <label class="main-menu-btn" for="main-menu-state">
                    <span class="main-menu-btn-icon"></span> Toggle main menu
                    visibility
                </label>

                <!-- Sample menu definition -->
                <ul id="main-menu" class="sm sm-blue">
                    <li>
                        <a href="/home"
                            ><i class="icon-Layout-4-blocks"
                                ><span class="path1"></span
                                ><span class="path2"></span></i
                            >Dashboard</a
                        >
                    </li>
                    <li>
                        <a href="/admin/users"
                            ><i class="icon-Layout-4-blocks"
                                ><span class="path1"></span
                                ><span class="path2"></span></i
                            >Users</a
                        >
                    </li>
                    <li>
                        <a href="/admin/plans"
                            ><i class="icon-Layout-4-blocks"
                                ><span class="path1"></span
                                ><span class="path2"></span></i
                            >Plans</a
                        >
                    </li>
                    <li>
                        <a href="/admin/transcations"
                            ><i class="icon-Layout-4-blocks"
                                ><span class="path1"></span
                                ><span class="path2"></span></i
                            >Transcations</a
                        >
                    </li>
                    <li>
                        <a href="/admin/hash"
                            ><i class="icon-Layout-4-blocks"
                                ><span class="path1"></span
                                ><span class="path2"></span></i
                            >Hash</a
                        >
                    </li>
                </ul>
            </nav>

            @yield('content')
            <!-- Content Wrapper. Contains page content -->

            <!-- /.content-wrapper -->

            <footer class="main-footer">
                &copy; 2020 <a href="#">Blue Chips Network</a>. All Rights
                Reserved.
            </footer>
        </div>
        <!-- ./wrapper -->

        <!-- js -->
        <script src="/dashboard/js/vendors.min.js"></script>

        <!-- Crypto Admin App -->
        <script src="/dashboard/js/jquery.smartmenus.js"></script>
        <script src="/dashboard/js/menus.js"></script>
        <script src="/dashboard/js/template.js"></script>

        <!-- Crypto Admin for demo purposes -->
        <script src="/dashboard/js/demo.js"></script>
        @yield('scripts')
    </body>
</html>
