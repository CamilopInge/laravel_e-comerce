<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Sign Up</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <style>
        /* Colores de fondo */
        body {
            background-color: rgba(17, 21, 39, 1); /* Fondo general */
        }
        .card {
            background-color: rgba(31, 41, 55, 1); /* Fondo de la tarjeta */
            border-radius: 15px;
            color: rgba(209, 213, 219, 1); /* Color de texto */
        }
        .btn-custom {
            background-color: rgba(229, 231, 235, 1); /* Fondo del botón */
            color: rgba(31, 41, 55, 1); /* Color del texto en el botón */
        }
        .btn-custom:hover {
            background-color: rgba(200, 200, 200, 1); /* Fondo del botón al pasar el mouse */
            color: rgba(31, 41, 55, 1);
        }
        .form-label {
            color: rgba(209, 213, 219, 1); /* Color de etiquetas de formulario */
        }
        .form-control {
            background-color: rgba(17, 21, 39, 1); /* Fondo de los inputs */
            color: rgba(209, 213, 219, 1); /* Color del texto de los inputs */
            border: 1px solid rgba(209, 213, 219, 0.5); /* Borde de los inputs */
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
        .text-body-custom, .text-body-custom:hover {
            color: #4c3281; /* Color de los enlaces */
            text-decoration: underline;
        }
    </style>
</head>

<body>
<section class="vh-100">
  <div class="container h-100 py-5">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4" style="color: rgba(209, 213, 219, 1);">Sign up</p>

                <form method="POST" action="{{ route('register') }}" class="mx-1 mx-md-4">
                  @csrf

                  <!-- Nombre -->
                  <div class="d-flex flex-row align-items-center mb-4">
                    
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="name" name="name" class="form-control form-control-lg" placeholder="Your Name" value="{{ old('name') }}" required autofocus autocomplete="name" />
                      <label class="form-label" for="name">Your Name</label>
                      @error('name')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>

                  <!-- Correo Electrónico -->
                  <div class="d-flex flex-row align-items-center mb-4">
                   
                    <div class="form-outline flex-fill mb-0">
                      <input type="email" id="email" name="email" class="form-control form-control-lg" placeholder="Your Email" value="{{ old('email') }}" required autocomplete="username" />
                      <label class="form-label" for="email">Your Email</label>
                      @error('email')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>

                  <!-- Contraseña -->
                  <div class="d-flex flex-row align-items-center mb-4">
                    
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="Password" required autocomplete="new-password" />
                      <label class="form-label" for="password">Password</label>
                      @error('password')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>

                  <!-- Confirmar Contraseña -->
                  <div class="d-flex flex-row align-items-center mb-4">
                    
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" id="password_confirmation" name="password_confirmation" class="form-control form-control-lg" placeholder="Repeat your password" required autocomplete="new-password" />
                      <label class="form-label" for="password_confirmation">Repeat your password</label>
                      @error('password_confirmation')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>

                  <!-- Términos y Condiciones -->
                  <div class="form-check d-flex justify-content-center mb-5">
                    <input class="form-check-input me-2" type="checkbox" value="" id="terms" required />
                    <label class="form-check-label" for="terms">
                      I agree all statements in <a href="#!" class="text-body-custom">Terms of service</a>
                    </label>
                  </div>

                  <!-- Botón de registro -->
                  <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-custom btn-lg">Register</button>
                  </div>

                  <p class="text-center mt-5 mb-0" style="color: rgba(209, 213, 219, 1);">Have already an account? 
                    <a href="{{ route('login') }}" class="fw-bold text-body-custom">Login here</a>
                  </p>
                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                <img src="https://wallpapers.com/images/featured/consolas-de-videojuegos-fldd65ierjjx2laf.jpg" class="img-fluid" alt="Sample image" style="border-radius: 25px;">
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
