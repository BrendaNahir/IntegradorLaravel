@extends('layouts.app')
@extends('layouts.nav_guest')
@extends('layouts.footer')

@section('content')

<script src="{{ mix('/js/app.js') }}"></script>

<head>
    <img src="{{ asset('image\home\banner.png') }}" alt="Mascotilandia" style="max-height: 100%; width: auto" class="img-fluid">
    <script src="{{ asset('public\js\color-modes.js') }}"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">


    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/product/">



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <!-- <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet"> -->

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            width: 100%;
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .btn-bd-primary {
            --bd-violet-bg: #712cf9;
            --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

            --bs-btn-font-weight: 600;
            --bs-btn-color: var(--bs-white);
            --bs-btn-bg: var(--bd-violet-bg);
            --bs-btn-border-color: var(--bd-violet-bg);
            --bs-btn-hover-color: var(--bs-white);
            --bs-btn-hover-bg: #6528e0;
            --bs-btn-hover-border-color: #6528e0;
            --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
            --bs-btn-active-color: var(--bs-btn-hover-color);
            --bs-btn-active-bg: #5a23c8;
            --bs-btn-active-border-color: #5a23c8;
        }

        .bd-mode-toggle {
            z-index: 1500;
        }

        .bd-mode-toggle .dropdown-menu .active .bi {
            display: block !important;
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="product.css" rel="stylesheet">
</head>
<!-- /.navbar -->
<nav class="navbar navbar-expand-md bg-dark sticky-top border-bottom" data-bs-theme="dark">
        <div class="container">

            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" aria-controls="offcanvas" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel">
                
                <div class="offcanvas-body">
                    <ul class="navbar-nav flex-grow-1 justify-content-between">
                        <li class="nav-item"><a class="nav-link" href="#">
                                <svg class="bi" width="24" height="24">
                                    <use xlink:href="#aperture" />
                                </svg>
                            </a></li>

                        <li class="nav-item"><a class="nav-link" href="#">Recomendaciones</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Comentarios</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Números útiles</a></li>


                    </ul>
                </div>
            </div>
        </div>
    </nav>
<body>
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
        <symbol id="check2" viewBox="0 0 16 16">
            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
        </symbol>
        <symbol id="circle-half" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
        </symbol>
        <symbol id="moon-stars-fill" viewBox="0 0 16 16">
            <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
            <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
        </symbol>
        <symbol id="sun-fill" viewBox="0 0 16 16">
            <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
        </symbol>
    </svg>



    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
        <symbol id="aperture" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
            <circle cx="12" cy="12" r="10" />
            <path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94" />
        </symbol>
        <symbol id="cart" viewBox="0 0 16 16">
            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
        </symbol>
        <symbol id="chevron-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
        </symbol>
    </svg>

   
    <main>
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-body-tertiary">

            <h1 class="display-3 fw-bold">¡Bienvenidos a nuestra comunidad de amantes de las mascotas!</h1>
            <h3 class="fw-normal text-muted mb-3">Tu fuente confiable para el cuidado y bienestar de tus amigos peludos</h3>

        </div>

        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>

            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('image\carrusel\card_alimentacion.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Nutrición y Alimentación</h3>
                        <h5>Descubre los mejores alimentos para mantener a tu mascota sana y feliz.</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('image\carrusel\card_entrenamiento.jpeg') }}" alt="..." class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Entrenamiento y Comportamiento</h3>
                        <h5>Guías prácticas para el entrenamiento y comportamiento de tus mascotas.</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('image\carrusel\card_juguetes.jpg') }}" alt="..." class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Juguetes y Accesorios</h3>
                        <h5>Encuentra los juguetes y accesorios perfectos para tu mascota.</h5>
                    </div>
                </div>
                < </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Anterior</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Siguiente</span>
                    </button>
            </div>

            <div> <br></div>

            <div class="card mb-3" style="max-width: auto;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('image\logo.jpg') }}" class="img-fluid rounded-start" alt="..." style="max-height: 250px; width: auto">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h1>Sus comentarios</h1>
                            <h3 class="card-text">En el mundo de las petshops y veterinarias, cada visita es una oportunidad para fortalecer el vínculo con nuestras mascotas y asegurarnos de que reciban la mejor atención posible. Aquí hay algunas experiencias compartidas por dueños de mascotas.</h3>
                            <h4 class="text-sm-end"><a class="align" href="#">Ver comentarios</a></h4>
                            @if (Route::has('recommendations'))
                                    <a class="btn btn-light" href="{{ route('recommendations') }}">
                                        {{ __('Ver recomendaciones') }}
                                    </a>
                                @endif
                            <p class="card-text"><small class="text-body-secondary">Último comentario hace 3 minutos</small></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <section id="quotes">
                <h2>Frases Inspiradoras para Dueños de Mascotas</h2>
                <blockquote>"El amor de una mascota no tiene precio, su lealtad es infinita."</blockquote>
                <blockquote>"En el mundo de los humanos, todos los perros son ángeles disfrazados."</blockquote>
                <blockquote>"Un hogar sin una mascota es solo una casa."</blockquote>
                <blockquote>"Las mascotas no son todo en la vida, pero hacen nuestra vida completa."</blockquote>
            </section> -->

            <div class="card mb-3" style="max-width: auto;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <section id="newsletter">
                            <h2>Mantenete Informado</h2>
                            <form action="{{ route('subscribe') }}" method="post">
                                @csrf
                                <input type="email" name="email" placeholder="Ingresa tu email" required>
                                <button type="submit">Suscribirse</button>
                            </form>
                        </section>
                    </div>
                </div>
            </div>

            <script src="{{ mix('js/app.js') }}"></script>
    </main>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>


    @endsection