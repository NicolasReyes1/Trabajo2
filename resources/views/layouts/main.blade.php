<!DOCTYPE html>
<html lang="en">
    <head>
        <div class="">
            <div class="d-flex justify-content-between align-items-center border p-2"> <!-- Agregamos p-2 para agregar un espacio interior al contenedor -->
                <label for="nombres"><strong>ArriendAPP</strong></label>
                <a class="btn btn-outline-primary" href="{{ route('logout') }}">Cerrar Sesión</a>
            </div>
        </div>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Autenticación</title>
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        @stack('css')
    </head>

    <body>
        <div class="container-fluid">
            <div class="row">
                <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                    <div class="position-sticky">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="../public/home">
                                    Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../public/list">
                                    Arriendos
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../public/newarriendo">
                                    Nuevo arriendos
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
                    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                        @yield('main-content')
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
                    <script src="{{ asset('js/scripts.js') }}"></script>
                        @stack('js')
                    </main>
            </div>
        </div>
    </body>
    </html>

