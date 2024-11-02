<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Login Page</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOM8oF+y8Gpaj6DQb/CMzAUpA1Jn5ybgXVql6W4Y" crossorigin="anonymous" />

    <style>
        body {
            background-color: rgba(17, 21, 39, 1); /* Fondo general */
            color: rgba(209, 213, 219, 1); /* Color de letras generales */
        }
        .card {
            background-color: rgba(31, 41, 55, 1); /* Fondo del login */
            border-radius: 1rem;
        }
        .btn-custom {
            background-color: rgba(229, 231, 235, 1); /* Fondo del botón */
            color: rgba(31, 41, 55, 1); /* Color del texto en el botón */
        }
        .btn-custom:hover {
            background-color: rgba(200, 200, 200, 1); /* Fondo del botón al pasar el mouse */
            color: rgba(31, 41, 55, 1);
        }
        .form-label, .text-body, .link-danger {
            color: rgba(209, 213, 219, 1); /* Color de texto de los elementos del formulario */
        }
        .form-control {
            background-color: rgba(17, 21, 39, 1); /* Fondo de los inputs */
            color: rgba(209, 213, 219, 1); /* Color del texto de los inputs */
            border: 1px solid rgba(209, 213, 219, 0.3); /* Borde sutil */
        }
        .form-control::placeholder {
            color: rgba(209, 213, 219, 0.6); /* Color del placeholder */
        }
        .form-control:focus {
            background-color: rgba(17, 21, 39, 1);
            color: rgba(209, 213, 219, 1);
            border-color: rgba(229, 231, 235, 1); /* Borde más claro al hacer foco */
            box-shadow: none;
        }
    </style>
</head>

<body>
<section class="vh-100">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-md-6 col-lg-5 d-none d-md-block">
                            <img src="https://www.cougargaming.fr/cdn/shop/files/2_6f806448-3592-4c99-b9de-3ee4172abf5d.png?v=1712762133&width=533"
                                 alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem; width: 100%; height: 100%; object-fit: cover;" />
                        </div>
                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5 text-black">

                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="d-flex align-items-center mb-3 pb-1">
                                        <svg  style="margin-right:10px;" width="60px" height="60px" viewBox="-2.4 -2.4 28.80 28.80" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" fill="#000000" transform="rotate(0)matrix(1, 0, 0, 1, 0, 0)"><g id="SVGRepo_bgCarrier" stroke-width="0" transform="translate(0,0), scale(1)"><path transform="translate(-2.4, -2.4), scale(1.7999999999999998)" fill="#635985" d="M9.166.33a2.25 2.25 0 00-2.332 0l-5.25 3.182A2.25 2.25 0 00.5 5.436v5.128a2.25 2.25 0 001.084 1.924l5.25 3.182a2.25 2.25 0 002.332 0l5.25-3.182a2.25 2.25 0 001.084-1.924V5.436a2.25 2.25 0 00-1.084-1.924L9.166.33z" strokewidth="0"></path></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.048"></g><g id="SVGRepo_iconCarrier"> <g transform="translate(0 -1028.4)"> <path d="m6 1034.4c-0.7071 0-1.4347 0.1-2.0625 0.3-2.3366 0.8-3.943 3.2-3.9375 5.7-0.005475 2.4 1.6009 4.8 3.9375 5.6 0.9747 0.4 2.1565 0.4 3.1875 0.4 1.95 0 3.172-2.1 4.875-2 1.703-0.1 2.925 2 4.875 2 1.031 0 2.213 0 3.187-0.4 2.337-0.8 3.943-3.2 3.938-5.6 0.005-2.5-1.601-4.9-3.938-5.7-0.631-0.2-1.354-0.3-2.062-0.3h-1.125-9.75-0.7812z" fill="#95a5a6"></path> <path d="m6 1033.4c-0.7071 0-1.4347 0.1-2.0625 0.3-2.3366 0.8-3.943 3.2-3.9375 5.7-0.005475 2.4 1.6009 4.8 3.9375 5.6 0.9747 0.4 2.1565 0.4 3.1875 0.4 1.95 0 3.172-2.1 4.875-2 1.703-0.1 2.925 2 4.875 2 1.031 0 2.213 0 3.187-0.4 2.337-0.8 3.943-3.2 3.938-5.6 0.005-2.5-1.601-4.9-3.938-5.7-0.631-0.2-1.354-0.3-2.062-0.3h-1.125-9.75-0.7812z" fill="#bdc3c7"></path> <path d="m11 11a4 4 0 1 1 -8 0 4 4 0 1 1 8 0z" transform="translate(-1 1028.4)" fill="#ecf0f1"></path> <path d="m6 1036.4c-0.5523 0-1 0.4-1 1v1h-1c-0.5523 0-1 0.4-1 1 0 0.5 0.4477 1 1 1h1v1c0 0.5 0.4477 1 1 1s1-0.5 1-1v-1h1c0.5523 0 1-0.5 1-1 0-0.6-0.4477-1-1-1h-1v-1c0-0.6-0.4477-1-1-1z" fill="#7f8c8d"></path> <path d="m11 11a4 4 0 1 1 -8 0 4 4 0 1 1 8 0z" transform="translate(11 1028.4)" fill="#ecf0f1"></path> <path d="m16 10a1 1 0 1 1 -2 0 1 1 0 1 1 2 0z" transform="translate(1 1029.4)" fill="#27ae60"></path> <path d="m16 10a1 1 0 1 1 -2 0 1 1 0 1 1 2 0z" transform="translate(3 1031.4)" fill="#f39c12"></path> <path d="m16 10a1 1 0 1 1 -2 0 1 1 0 1 1 2 0z" transform="translate(3 1027.4)" fill="#2980b9"></path> <path d="m16 10a1 1 0 1 1 -2 0 1 1 0 1 1 2 0z" transform="translate(5 1029.4)" fill="#c0392b"></path> <path d="m11.5 11c-0.276 0-0.5 0.224-0.5 0.5s0.224 0.5 0.5 0.5h1c0.276 0 0.5-0.224 0.5-0.5s-0.224-0.5-0.5-0.5h-1z" transform="translate(0 1028.4)" fill="#7f8c8d"></path> </g> </g></svg>
                                        <span class="h1 fw-bold mb-0" style="color: rgba(209, 213, 219, 0.8);">GamingCot</span>
                                    </div>

                                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px; color: rgba(209, 213, 219, 1);">Sign into your account</h5>

                                    <!-- Campo de correo electrónico -->
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="email">Email address</label>
                                        <input type="email" id="email" name="email" class="form-control form-control-lg" required autofocus autocomplete="username">
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Campo de contraseña -->
                                    <div class="form-outline mb-3">
                                        <label class="form-label" for="password">Password</label>
                                        <input type="password" id="password" name="password" class="form-control form-control-lg" required autocomplete="current-password">
                                        @error('password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Recordar y enlace de recuperación de contraseña -->
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="form-check mb-0">
                                            <input class="form-check-input me-2" type="checkbox" id="remember" name="remember" />
                                            <label class="form-check-label" for="remember" style="color: rgba(209, 213, 219, 1);">
                                                Remember me
                                            </label>
                                        </div>
                                        @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}" class="text-body">Forgot password?</a>
                                        @endif
                                    </div>

                                    <!-- Botón de inicio de sesión -->
                                    <div class="text-center text-lg-start mt-4 pt-2">
                                        <button type="submit" class="btn btn-custom btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                                        <p style="color: rgba(209, 213, 219, 1); class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? 
                                            <a href="{{ route('register') }}" class="link-danger">Register</a>
                                        </p>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-sHbdcQ3sRwoCBey7p51M9Jhk0lLmrR/a9F+Z/nyuTtD1QBozQLXEECy63cTEfHlt" crossorigin="anonymous"></script>
</body>
</html>
