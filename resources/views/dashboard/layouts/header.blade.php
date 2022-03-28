<head>
    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light py-3" id="mainNav">
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbar">
            <span class="navbar-toggler-icon"></span></button>
        <div class="container px-4 px-lg-5">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <a class="navbar">Kampung Inggris Pare</a>
                    @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Welcome Back, {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
                            <li><a class="dropdown-item" href="/home"><i class="bi bi-person"></i> Halaman Utama</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>
                                        Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                    @else
                    <li class="nav-item">
                        <div class="navbar-nav">
                            <div class="nav-item text-nowrap">
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="nav-link px-3 bg-dark border-0">
                                    Logout
                                    <span data-feather="log-out"></span>
                                </button>
                            </form>
                            </div>
                        </div>
                    </li>
                    @endauth
                </ul>

            </div>
        </div>
    </nav>
</body>


{{-- <header class="navbar navbar-white sticky-top bg-primary flex-md-nowrap">

    <body>

        <a class="navbar navbar-light" style="background-color: #e3f2fd;" href="/home">My Web</a>

        <ul class="navbar-nav ms-auto">
            @auth
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Welcome Back, {{ auth()->user()->name }}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
                    <li><a class="dropdown-item" href="/home"><i class="bi bi-person"></i> Halaman Utama</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>
                                Logout
                            </button>
                        </form>
                    </li>
                </ul>
            </li>
            @else
            <li class="nav-item">
                <div class="navbar-nav">
                    <div class="nav-item text-nowrap">
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="nav-link px-3 bg-dark border-0">
                            Logout
                            <span data-feather="log-out"></span>
                        </button>
                    </form>
                    </div>
                </div>
            </li>
            @endauth
        </ul>

    </body>

</header> --}}

<script src="/js/scripts.js"></script>
