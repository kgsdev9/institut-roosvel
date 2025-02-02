<!doctype html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../assets/libs/tiny-slider/dist/tiny-slider.css" />
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title')</title>
    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon"
        href="https://geeksui.codescandy.com/geeks/assets/images/favicon/favicon.ico" />
    <!-- Libs CSS -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/bootstrap-icons/font/bootstrap-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/libs/simplebar/simplebar.min.css') }}">
    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}">
    <title>sss</title>
    @livewireStyles
</head>

<body class="bg-white">
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid px-0">
            <a class="navbar-brand" href=""><img src="{{ asset('ispr_logo.png') }}" style="height:40px;"
                    alt="Geeks" /></a>
            <!-- Mobile view nav wrap -->
            <div class="ms-auto d-flex align-items-center order-lg-3">

                <ul class="navbar-nav navbar-right-wrap ms-2 flex-row d-none d-md-block">


                    <li class="dropdown ms-2 d-inline-block position-static">
                        <a class="rounded-circle" href="#" data-bs-toggle="dropdown" data-bs-display="static"
                            aria-expanded="false">
                            <div class="avatar avatar-md avatar-indicators avatar-online">
                                <img alt="avatar" src="../assets/images/avatar/avatar-1.jpg" class="rounded-circle" />
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end position-absolute mx-3 my-5">
                            <div class="dropdown-item">
                                <div class="d-flex">
                                    <div class="avatar avatar-md avatar-indicators avatar-online">
                                        <img alt="avatar" src="../assets/images/avatar/avatar-1.jpg"
                                            class="rounded-circle" />
                                    </div>
                                    <div class="ms-3 lh-1">
                                        <h5 class="mb-1">{{ Auth::user()->name }}</h5>
                                        <p class="mb-0">{{ Auth::user()->email }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-divider"></div>
                            <ul class="list-unstyled">

                                <li>
                                    <a class="dropdown-item" href="">
                                        <i class="fe fe-user me-2"></i>
                                        Mes cours
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="">
                                        <i class="fe fe-star me-2"></i>
                                        Mes Matieres
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <i class="fe fe-settings me-2"></i>
                                        Mes QCMS
                                    </a>
                                </li>
                            </ul>
                            <div class="dropdown-divider"></div>
                            <ul class="list-unstyled">
                                <li>
                                    <a class="dropdown-item" href="">
                                        <i class="fe fe-power me-2"></i>
                                        Déconnexion
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <div>
                <!-- Button -->
                <button class="navbar-toggler collapsed ms-2" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="icon-bar top-bar mt-0"></span>
                    <span class="icon-bar middle-bar"></span>
                    <span class="icon-bar bottom-bar"></span>
                </button>
            </div>
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="navbar-default">
                <ul class="navbar-nav mt-3 mt-lg-0 mx-xxl-auto">
                    <li class="nav-item ">
                        <a class="nav-link " href="#">Nos Formations</a>

                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="#">Cours en ligne</a>

                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="#">Ressources </a>

                    </li>

                    <li class="nav-item ">
                        <a class="nav-link " href="#">Examens BTS</a>

                    </li>

                    <li class="nav-item ">
                        <a class="nav-link " href="#">A propos</a>

                    </li>

                </ul>
                <form class="mt-3 mt-lg-0 me-lg-5 d-flex align-items-center">
                    <span class="position-absolute ps-3 search-icon">
                        <i class="fe fe-search"></i>
                    </span>
                    <label for="search" class="visually-hidden"></label>
                    <input type="search" id="search" class="form-control ps-6" placeholder="Rechercher un cours" />
                </form>
            </div>
        </div>
    </nav>

    {{-- <nav class="navbar navbar-expand-lg">
        <div class="container px-0">
            <a class="navbar-brand" href="{{ route('home') }}"><img class="" src="{{ asset('ispr_logo.png') }}"
                    alt="Geeks" style="height:30px;"></a>
            <div class="ms-auto d-flex align-items-center order-lg-3">
                <div class="d-flex gap-2 align-items-center">
                    @guest
                        <a href="{{ route('auth.login') }}" class="btn btn-outline-dark btn-sm ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z">
                                </path>
                                <path fill-rule="evenodd"
                                    d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z">
                                </path>
                            </svg>

                            Connexion</a>
                        <a href="{{ route('auth.register') }}" class="btn btn-dark d-none d-md-block btn-sm"> <svg
                                xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                                class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8">
                                </path>
                            </svg>Inscription</a>
                    @else
                        <a href="{{ route('dashboard.users') }}" class="btn btn-outline-dark btn-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"></path>
                            </svg> Dashboard {{ Auth::user()->name }}
                        </a>
                        <a href="#" class="btn btn-dark d-none d-md-block btn-sm"
                            onclick="event.preventDefault(); document.getElementById('logout-form-btn').submit();">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z">
                                </path>
                                <path fill-rule="evenodd"
                                    d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z">
                                </path>
                            </svg>
                            Déconnexion
                        </a>
                        <form id="logout-form-btn" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @endguest
                </div>
            </div>
            <div>
                <!-- Button -->
                <button class="navbar-toggler collapsed ms-2"type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="icon-bar top-bar mt-0"></span>
                    <span class="icon-bar middle-bar"></span>
                    <span class="icon-bar bottom-bar"></span>
                </button>
            </div>
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="navbar-default">
                <ul class="navbar-nav mt-3 mt-lg-0 mx-xxl-auto">
                    <li class="nav-item dropdown"><a class="nav-link" href="{{ route('candidat.index') }}">NOS
                            FORMATIONS </a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link disabled" href="#">COURS EN LIGNE</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">
                            FORMATIONS PROFESSIONELLES</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ route('about') }}">A PROPOS </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav> --}}
    @yield('content')

    <footer class="footer bg-light-stable py-8 mt-2">
        <div class="container">
            <div class="row gy-6 gy-xl-0 pb-8">
                <div class="col-xl-3 col-lg-12 col-md-6 col-12">
                    <div class="d-flex flex-column gap-4">
                        <div>
                            INSTITUT ROOSEVELT
                        </div>
                        <p class="mb-0">
                            L’Institut Roosevelt est un établissement éducatif de renom offrant des formations de
                            qualité dans divers domaines. Nous nous engageons à fournir des solutions d’éducation
                            adaptées aux besoins du marché du travail.
                        </p>
                    </div>
                </div>
                <div class="col-xl-2 col-md-3 col-6">
                    <div class="d-flex flex-column gap-3">
                        <span class="text-dark-stable">RESSOURCES</span>
                        <ul class="list-unstyled mb-0 d-flex flex-column nav nav-footer nav-x-0">
                            <li>
                                <a href="#!" class="nav-link">À propos</a>
                            </li>
                            <li>
                                <a href="#!" class="nav-link">Devenir partenaire</a>
                            </li>
                            <li>
                                <a href="#!" class="nav-link">Nos partenaires</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-md-3 col-6">
                    <div class="d-flex flex-column gap-3">
                        <span class="text-dark-stable">NOS PAGES</span>
                        <ul class="list-unstyled mb-0 d-flex flex-column nav nav-footer nav-x-0">
                            <li>
                                <a href="https://www.linkedin.com/company/institut-roosevelt/"
                                    class="nav-link">LINKEDIN</a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/institutroosevelt" class="nav-link">FACEBOOK</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-md-3 col-12">
                    <div class="d-flex flex-column gap-3">
                        <span class="text-dark-stable">ACCOMPAGNEMENT</span>
                        <ul class="list-unstyled mb-0 d-flex flex-column nav nav-footer nav-x-0">
                            <li>
                                <a href="#!" class="nav-link" target="_blank">Démarrer ma candidature BTS</a>
                            </li>
                            <li>
                                <a href="#!" class="nav-link" target="_blank">Nos filières et formations</a>
                            </li>
                            <li>
                                <a href="#!" class="nav-link" target="_blank">Informations sur le processus de
                                    candidature</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                    <div class="d-flex flex-column gap-5">
                        <div class="d-flex flex-column gap-3">
                            <span class="text-dark-stable">CONTACT</span>
                            <ul class="list-unstyled mb-0 d-flex flex-column nav nav-footer nav-x-0">
                                <li>
                                    Adresse : Abidjan, Cocody, Rue Roosevelt
                                </li>
                                <li>
                                    Horaires : <span class="fw-semibold">8H à 17H</span>
                                </li>
                                <li>
                                    Email : <span class="fw-semibold">contact@institutroosevelt.ci</span>
                                </li>
                            </ul>
                        </div>
                        <div class="d-flex flex-row gap-2">
                            <a href="#"><img src="assets/images/svg/appstore.svg" alt=""
                                    class="img-fluid" /></a>
                            <a href="#"><img src="assets/images/svg/playstore.svg" alt=""
                                    class="img-fluid" /></a>
                        </div>
                    </div>
                </div>
            </div>

            <div
                class="row align-items-center g-0 border-top border-gray-800 pt-3 flex-column gap-1 flex-lg-row gap-lg-0">
                <!-- Desc -->
                <div class="col-lg-6 col-12 text-center text-md-start">
                    <span>
                        ©
                        <span id="copyright">
                            <script>
                                document.getElementById("copyright").appendChild(document.createTextNode(new Date().getFullYear()));
                            </script>
                        </span>
                        INSTITUT ROOSEVELT - Conception par KGS INFORMATIQUE
                    </span>
                </div>

                <!-- Links -->
                <div class="col-12 col-lg-6">
                    <nav class="nav nav-footer justify-content-center justify-content-md-start justify-content-lg-end">
                        <a class="nav-link active" href="{{ route('CGU') }}">Conditions Générales d'Utilisation</a>
                        <a class="nav-link" href="{{ route('politique.confidentialise') }}">Politique de
                            confidentialité</a>
                        <a class="nav-link" href="{{ route('fac') }}">FAQ</a>
                    </nav>
                </div>
            </div>
        </div>
    </footer>

    <div class="btn-scroll-top">
        <svg class="progress-square svg-content" width="100%" height="100%" viewBox="0 0 40 40">
            <path
                d="M8 1H32C35.866 1 39 4.13401 39 8V32C39 35.866 35.866 39 32 39H8C4.13401 39 1 35.866 1 32V8C1 4.13401 4.13401 1 8 1Z" />
        </svg>
    </div>
    @livewireScripts
    @include('sweetalert::alert')
    <script src="{{ asset('assets/libs/@popperjs/core/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/dist/simplebar.min.js') }}"></script>
    <!-- Theme JS -->
    <script src="{{ asset('assets/js/theme.min.js') }}"></script>
    <script src="../assets/libs/tiny-slider/dist/min/tiny-slider.js"></script>
    <script src="../assets/js/vendors/tnsSlider.js"></script>
    <script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>

    <script src="{{ asset('assets/js/vendors/navbar-nav.js') }}"></script>

</body>

</html>
