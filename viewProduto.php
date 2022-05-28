<!DOCTYPE html>

<html lang="en">

<head>
    <base href="./" />
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template" />
    <meta name="author" content="Łukasz Holeczek" />
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard" />
    <title>LuzCommerce</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="apple-touch-icon" sizes="57x57" href="https://coreui.io/demo/4.0/free/assets/favicon/apple-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="60x60" href="https://coreui.io/demo/4.0/free/assets/favicon/apple-icon-60x60.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="https://coreui.io/demo/4.0/free/assets/favicon/apple-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="https://coreui.io/demo/4.0/free/assets/favicon/apple-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="https://coreui.io/demo/4.0/free/assets/favicon/apple-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="https://coreui.io/demo/4.0/free/assets/favicon/apple-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="https://coreui.io/demo/4.0/free/assets/favicon/apple-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="https://coreui.io/demo/4.0/free/assets/favicon/apple-icon-152x152.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="https://coreui.io/demo/4.0/free/assets/favicon/apple-icon-180x180.png" />
    <link rel="icon" type="image/png" sizes="192x192" href="https://coreui.io/demo/4.0/free/assets/favicon/android-icon-192x192.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="https://coreui.io/demo/4.0/free/assets/favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="96x96" href="https://coreui.io/demo/4.0/free/assets/favicon/favicon-96x96.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="https://coreui.io/demo/4.0/free/assets/favicon/favicon-16x16.png" />
    <link rel="manifest" href="assets/favicon/manifest.json" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="msapplication-TileImage" content="https://coreui.io/demo/4.0/free/assets/favicon/manifest.json" />
    <meta name="theme-color" content="#ffffff" />

    <link rel="stylesheet" href="https://coreui.io/demo/4.0/free/vendors/simplebar/css/simplebar.css" />
    <link rel="stylesheet" href="https://coreui.io/demo/4.0/free/css/vendors/simplebar.css" />

    <link href="https://coreui.io/demo/4.0/free/css/style.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/themes/prism.css" />
    <link href="css/examples.css" rel="stylesheet" />

    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());
        gtag("config", "UA-118965717-1");
    </script>
    <link href="https://coreui.io/demo/4.0/free/vendors/@coreui/chartjs/css/coreui-chartjs.css" rel="stylesheet" />
</head>

<body>
    <div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
        <div class="sidebar-brand d-none d-md-flex">
            LUZ admin
            <use xlink:href="assets/brand/coreui.svg#full"></use>
            </svg>
            <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
                <use xlink:href="assets/brand/coreui.svg#signet"></use>
            </svg>
        </div>
        <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
            <li class="nav-item">
                <a class="nav-link" href="admin.php">
                    <svg class="nav-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                            <path d="M0 96C0 60.65 28.65 32 64 32H448C483.3 32 512 60.65 512 96V416C512 451.3 483.3 480 448 480H64C28.65 480 0 451.3 0 416V96zM64 416H224V160H64V416zM448 160H288V416H448V160z" />
                        </svg>
                    </svg>
                    Dashboard<span class="badge badge-sm bg-info ms-auto">NEW</span></a>
            </li>
            <li class="nav-title">Cadastros</li>
            <li class="nav-group">
                <a class="nav-link nav-group-toggle" href="#">
                    <svg class="nav-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                            <path d="M32 432C32 458.5 53.49 480 80 480h352c26.51 0 48-21.49 48-48V160H32V432zM160 236C160 229.4 165.4 224 172 224h168C346.6 224 352 229.4 352 236v8C352 250.6 346.6 256 340 256h-168C165.4 256 160 250.6 160 244V236zM480 32H32C14.31 32 0 46.31 0 64v48C0 120.8 7.188 128 16 128h480C504.8 128 512 120.8 512 112V64C512 46.31 497.7 32 480 32z" />
                        </svg>
                    </svg>
                    Produtos</a>
                <ul class="nav-group-items">
                    <li class="nav-item">
                        <a class="nav-link" href="produto.php"><span class="nav-icon"></span> Cadastros de Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="viewProduto.php"><span class="nav-icon"></span> Produtos Cadastrados</a>
                    </li>
                </ul>
            </li>
            <li class="nav-group">
                <a class="nav-link nav-group-toggle" href="#">
                    <svg class="nav-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                            <path d="M32 432C32 458.5 53.49 480 80 480h352c26.51 0 48-21.49 48-48V160H32V432zM160 236C160 229.4 165.4 224 172 224h168C346.6 224 352 229.4 352 236v8C352 250.6 346.6 256 340 256h-168C165.4 256 160 250.6 160 244V236zM480 32H32C14.31 32 0 46.31 0 64v48C0 120.8 7.188 128 16 128h480C504.8 128 512 120.8 512 112V64C512 46.31 497.7 32 480 32z" />
                        </svg>
                    </svg>
                    Usuarios</a>
                <ul class="nav-group-items">
                    <li class="nav-item">
                        <a class="nav-link" href="usuario.php"><span class="nav-icon"></span> Cadastros de Usuarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="viewUsuario.php"><span class="nav-icon"></span> Usuarios Cadastrados</a>
                    </li>
                </ul>
            </li>
            <!-- <li class="nav-group">
                <a class="nav-link nav-group-toggle" href="#">
                    <svg class="nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-cursor"></use>
                    </svg>
                    Buttons</a>
                <ul class="nav-group-items">
                    <li class="nav-item">
                        <a class="nav-link" href="https://coreui.io/demo/4.0/free/buttons/buttons.html"><span class="nav-icon"></span> Buttons</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://coreui.io/demo/4.0/free/buttons/button-group.html"><span class="nav-icon"></span> Buttons Group</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://coreui.io/demo/4.0/free/buttons/dropdowns.html"><span class="nav-icon"></span> Dropdowns</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <svg class="nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-chart-pie"></use>
                    </svg>
                    Charts</a>
            </li>
            <li class="nav-group">
                <a class="nav-link nav-group-toggle" href="#">
                    <svg class="nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-notes"></use>
                    </svg>
                    Forms</a>
                <ul class="nav-group-items">
                    <li class="nav-item">
                        <a class="nav-link" href="https://coreui.io/demo/4.0/free/forms/form-control.html">
                            Form Control</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://coreui.io/demo/4.0/free/forms/select.html">
                            Select</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://coreui.io/demo/4.0/free/forms/checks-radios.html">
                            Checks and radios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://coreui.io/demo/4.0/free/forms/range.html">
                            Range</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://coreui.io/demo/4.0/free/forms/input-group.html">
                            Input group</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://coreui.io/demo/4.0/free/forms/floating-labels.html">
                            Floating labels</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://coreui.io/demo/4.0/free/forms/layout.html">
                            Layout</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://coreui.io/demo/4.0/free/forms/validation.html">
                            Validation</a>
                    </li>
                </ul>
            </li>
            <li class="nav-group">
                <a class="nav-link nav-group-toggle" href="#">
                    <svg class="nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-star"></use>
                    </svg>
                    Icons</a>
                <ul class="nav-group-items">
                    <li class="nav-item">
                        <a class="nav-link" href="https://coreui.io/demo/4.0/free/icons/coreui-icons-free.html">
                            CoreUI Icons<span class="badge badge-sm bg-success ms-auto">Free</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://coreui.io/demo/4.0/free/icons/coreui-icons-brand.html">
                            CoreUI Icons - Brand</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://coreui.io/demo/4.0/free/icons/coreui-icons-flag.html">
                            CoreUI Icons - Flag</a>
                    </li>
                </ul>
            </li>
            <li class="nav-group">
                <a class="nav-link nav-group-toggle" href="#">
                    <svg class="nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                    </svg>
                    Notifications</a>
                <ul class="nav-group-items">
                    <li class="nav-item">
                        <a class="nav-link" href="https://coreui.io/demo/4.0/free/notifications/alerts.html"><span class="nav-icon"></span> Alerts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://coreui.io/demo/4.0/free/notifications/badge.html"><span class="nav-icon"></span> Badge</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://coreui.io/demo/4.0/free/notifications/modals.html"><span class="nav-icon"></span> Modals</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://coreui.io/demo/4.0/free/notifications/toasts.html"><span class="nav-icon"></span> Toasts</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="widgets.html">
                    <svg class="nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-calculator"></use>
                    </svg>
                    Widgets<span class="badge badge-sm bg-info ms-auto">NEW</span></a>
            </li>
            <li class="nav-divider"></li>
            <li class="nav-title">Extras</li>
            <li class="nav-group">
                <a class="nav-link nav-group-toggle" href="#">
                    <svg class="nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-star"></use>
                    </svg>
                    Pages</a>
                <ul class="nav-group-items">
                    <li class="nav-item">
                        <a class="nav-link" href="login.html" target="_top">
                            <svg class="nav-icon">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                            </svg>
                            Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.html" target="_top">
                            <svg class="nav-icon">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                            </svg>
                            Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="404.html" target="_top">
                            <svg class="nav-icon">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bug"></use>
                            </svg>
                            Error 404</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="500.html" target="_top">
                            <svg class="nav-icon">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bug"></use>
                            </svg>
                            Error 500</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item mt-auto">
                <a class="nav-link" href="docs.html">
                    <svg class="nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-description"></use>
                    </svg>
                    Docs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-link-danger" href="https://coreui.io/pro/" target="_top">
                    <svg class="nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-layers"></use>
                    </svg>
                    Try CoreUI
                    <div class="fw-semibold">PRO</div>
                </a>
            </li> -->
        </ul>
        <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
    </div>
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
        <header class="header header-sticky mb-4">
            <div class="container-fluid">
                <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
                    <svg class="icon icon-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                            <path d="M0 96C0 78.33 14.33 64 32 64H416C433.7 64 448 78.33 448 96C448 113.7 433.7 128 416 128H32C14.33 128 0 113.7 0 96zM0 256C0 238.3 14.33 224 32 224H416C433.7 224 448 238.3 448 256C448 273.7 433.7 288 416 288H32C14.33 288 0 273.7 0 256zM416 448H32C14.33 448 0 433.7 0 416C0 398.3 14.33 384 32 384H416C433.7 384 448 398.3 448 416C448 433.7 433.7 448 416 448z" />
                        </svg>
                    </svg></button><a class="header-brand d-md-none" href="#">
                    <svg width="118" height="46" alt="CoreUI Logo">
                        <use xlink:href="assets/brand/coreui.svg#full"></use>
                    </svg></a>
                <ul class="header-nav d-none d-md-flex">
                    <li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Users</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Settings</a></li>
                </ul>
                <ul class="header-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <svg class="icon icon-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                    <path d="M256 32V51.2C329 66.03 384 130.6 384 208V226.8C384 273.9 401.3 319.2 432.5 354.4L439.9 362.7C448.3 372.2 450.4 385.6 445.2 397.1C440 408.6 428.6 416 416 416H32C19.4 416 7.971 408.6 2.809 397.1C-2.353 385.6-.2883 372.2 8.084 362.7L15.5 354.4C46.74 319.2 64 273.9 64 226.8V208C64 130.6 118.1 66.03 192 51.2V32C192 14.33 206.3 0 224 0C241.7 0 256 14.33 256 32H256zM224 512C207 512 190.7 505.3 178.7 493.3C166.7 481.3 160 464.1 160 448H288C288 464.1 281.3 481.3 269.3 493.3C257.3 505.3 240.1 512 224 512z" />
                                </svg>
                                ></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <svg class="icon icon-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                    <path d="M480 32H128C110.3 32 96 46.33 96 64v336C96 408.8 88.84 416 80 416S64 408.8 64 400V96H32C14.33 96 0 110.3 0 128v288c0 35.35 28.65 64 64 64h384c35.35 0 64-28.65 64-64V64C512 46.33 497.7 32 480 32zM272 416h-96C167.2 416 160 408.8 160 400C160 391.2 167.2 384 176 384h96c8.836 0 16 7.162 16 16C288 408.8 280.8 416 272 416zM272 320h-96C167.2 320 160 312.8 160 304C160 295.2 167.2 288 176 288h96C280.8 288 288 295.2 288 304C288 312.8 280.8 320 272 320zM432 416h-96c-8.836 0-16-7.164-16-16c0-8.838 7.164-16 16-16h96c8.836 0 16 7.162 16 16C448 408.8 440.8 416 432 416zM432 320h-96C327.2 320 320 312.8 320 304C320 295.2 327.2 288 336 288h96C440.8 288 448 295.2 448 304C448 312.8 440.8 320 432 320zM448 208C448 216.8 440.8 224 432 224h-256C167.2 224 160 216.8 160 208v-96C160 103.2 167.2 96 176 96h256C440.8 96 448 103.2 448 112V208z" />
                                </svg>
                                ></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <svg class="icon icon-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                    <path d="M207.8 20.73c-93.45 18.32-168.7 93.66-187 187.1c-27.64 140.9 68.65 266.2 199.1 285.1c19.01 2.888 36.17-12.26 36.17-31.49l.0001-.6631c0-15.74-11.44-28.88-26.84-31.24c-84.35-12.98-149.2-86.13-149.2-174.2c0-102.9 88.61-185.5 193.4-175.4c91.54 8.869 158.6 91.25 158.6 183.2l0 16.16c0 22.09-17.94 40.05-40 40.05s-40.01-17.96-40.01-40.05v-120.1c0-8.847-7.161-16.02-16.01-16.02l-31.98 .0036c-7.299 0-13.2 4.992-15.12 11.68c-24.85-12.15-54.24-16.38-86.06-5.106c-38.75 13.73-68.12 48.91-73.72 89.64c-9.483 69.01 43.81 128 110.9 128c26.44 0 50.43-9.544 69.59-24.88c24 31.3 65.23 48.69 109.4 37.49C465.2 369.3 496 324.1 495.1 277.2V256.3C495.1 107.1 361.2-9.332 207.8 20.73zM239.1 304.3c-26.47 0-48-21.56-48-48.05s21.53-48.05 48-48.05s48 21.56 48 48.05S266.5 304.3 239.1 304.3z" />
                                </svg>
                                ></a>
                    </li>
                </ul>
                <ul class="header-nav ms-3">
                    <li class="nav-item dropdown">
                        <a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <div class="avatar avatar-md">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                    <path d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 128c39.77 0 72 32.24 72 72S295.8 272 256 272c-39.76 0-72-32.24-72-72S216.2 128 256 128zM256 448c-52.93 0-100.9-21.53-135.7-56.29C136.5 349.9 176.5 320 224 320h64c47.54 0 87.54 29.88 103.7 71.71C356.9 426.5 308.9 448 256 448z" />
                                </svg>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end pt-0">
                            <div class="dropdown-header bg-light py-2">
                                <div class="fw-semibold">Account</div>
                            </div>
                            <a class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                                </svg>
                                Updates<span class="badge badge-sm bg-info ms-2">42</span></a><a class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                                </svg>
                                Messages<span class="badge badge-sm bg-success ms-2">42</span></a><a class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-task"></use>
                                </svg>
                                Tasks<span class="badge badge-sm bg-danger ms-2">42</span></a><a class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-comment-square"></use>
                                </svg>
                                Comments<span class="badge badge-sm bg-warning ms-2">42</span></a>
                            <div class="dropdown-header bg-light py-2">
                                <div class="fw-semibold">Settings</div>
                            </div>
                            <a class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                                </svg>
                                Profile</a><a class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
                                </svg>
                                Settings</a><a class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-credit-card"></use>
                                </svg>
                                Payments<span class="badge badge-sm bg-secondary ms-2">42</span></a><a class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-file"></use>
                                </svg>
                                Projects<span class="badge badge-sm bg-primary ms-2">42</span></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                                </svg>
                                Lock Account</a><a class="dropdown-item" href="login.php">
                                <svg class="icon me-2">
                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                                </svg>
                                Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="header-divider"></div>
            <div class="container-fluid">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb my-0 ms-2">
                        <li class="breadcrumb-item">
                            <span>Home</span>
                        </li>
                        <li class="breadcrumb-item active"><span>Dashboard</span></li>
                    </ol>
                </nav>
            </div>
        </header>
        <div class="body flex-grow-1 px-3">
            <?php
            include_once "model/db.php";
            ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Quantidade</th>
                        <th scope="col">Preço</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Disponivel</th>
                    </tr>
                </thead>
                <?php
                $selectUsuarios = "SELECT * FROM produtos order by id asc";
                $result = $db->query($selectUsuarios);

                while ($row = $result->fetchArray()) {
                    echo "<tbody>";
                    echo "<tr>";
                    echo "<td>{$row['id']}</td>";
                    echo "<td>{$row['descricao']}</td>";
                    echo "<td>{$row['quantidade']}</td>";
                    echo "<td>{$row['preco']}</td>";
                    echo "<td>{$row['marca']}</td>";
                    echo "<td>{$row['disponivel']}</td>";
                    echo "</tr>";
                    echo "</tbody>";
                }
                ?>
            </table>
        </div>
        <footer class="footer">
            <div>
                <a href="https://coreui.io">CoreUI </a><a href="https://coreui.io">Bootstrap Admin Template</a> © 2021
                creativeLabs.
            </div>
            <div class="ms-auto">
                Powered by&nbsp;<a href="https://coreui.io/bootstrap/ui-components/">CoreUI UI Components</a>
            </div>
        </footer>
    </div>

    <script src="https://coreui.io/demo/4.0/free/vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
    <script src="https://coreui.io/demo/4.0/free/vendors/simplebar/js/simplebar.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.24.1/prism.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.24.1/plugins/autoloader/prism-autoloader.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.24.1/plugins/unescaped-markup/prism-unescaped-markup.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.24.1/plugins/normalize-whitespace/prism-normalize-whitespace.js"></script>

    <script src="https://coreui.io/demo/4.0/free/vendors/chart.js/js/chart.min.js"></script>
    <script src="https://coreui.io/demo/4.0/free/vendors/@coreui/chartjs/js/coreui-chartjs.js"></script>
    <script src="https://coreui.io/demo/4.0/free/vendors/@coreui/utils/js/coreui-utils.js"></script>
    <script src="https://coreui.io/demo/4.0/free/js/main.js"></script>
    <script></script>
</body>

</html>