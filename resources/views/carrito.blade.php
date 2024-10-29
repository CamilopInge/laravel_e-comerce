<!doctype html>
<html lang="en">
    <head>
        <title>Lista de productos</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />

        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    </head>

    <body>


    <x-chat-component />

<div id="chat-toggle" style="position: fixed; bottom: 20px; right: 30px; cursor: pointer; z-index: 1000;">
    <button class="btn btn-warning" style="border-radius: 50%; width: 50px; height: 50px;">
        <i class="fas fa-comment-dots"></i>
    </button>
</div>

<script>
    document.getElementById('chat-toggle').onclick = function() {
        const chatContainer = document.getElementById('chat-container');
        if (chatContainer.style.display === 'none' || chatContainer.style.display === '') {
            chatContainer.style.display = 'block'; // Mostrar el chat
        } else {
            chatContainer.style.display = 'none'; // Ocultar el chat
        }
    };
</script>


<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4" style="margin-right: 0px; margin-left: 0px; border-bottom: 1px solid; background-color:#393053; font-size: 1.12rem;">
    <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-decoration-none" style="color: #635985;">
   
    <svg  style="margin-left: 40px; margin-right:10px;" width="60px" height="60px" viewBox="-2.4 -2.4 28.80 28.80" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" fill="#000000" transform="rotate(0)matrix(1, 0, 0, 1, 0, 0)"><g id="SVGRepo_bgCarrier" stroke-width="0" transform="translate(0,0), scale(1)"><path transform="translate(-2.4, -2.4), scale(1.7999999999999998)" fill="#635985" d="M9.166.33a2.25 2.25 0 00-2.332 0l-5.25 3.182A2.25 2.25 0 00.5 5.436v5.128a2.25 2.25 0 001.084 1.924l5.25 3.182a2.25 2.25 0 002.332 0l5.25-3.182a2.25 2.25 0 001.084-1.924V5.436a2.25 2.25 0 00-1.084-1.924L9.166.33z" strokewidth="0"></path></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.048"></g><g id="SVGRepo_iconCarrier"> <g transform="translate(0 -1028.4)"> <path d="m6 1034.4c-0.7071 0-1.4347 0.1-2.0625 0.3-2.3366 0.8-3.943 3.2-3.9375 5.7-0.005475 2.4 1.6009 4.8 3.9375 5.6 0.9747 0.4 2.1565 0.4 3.1875 0.4 1.95 0 3.172-2.1 4.875-2 1.703-0.1 2.925 2 4.875 2 1.031 0 2.213 0 3.187-0.4 2.337-0.8 3.943-3.2 3.938-5.6 0.005-2.5-1.601-4.9-3.938-5.7-0.631-0.2-1.354-0.3-2.062-0.3h-1.125-9.75-0.7812z" fill="#95a5a6"></path> <path d="m6 1033.4c-0.7071 0-1.4347 0.1-2.0625 0.3-2.3366 0.8-3.943 3.2-3.9375 5.7-0.005475 2.4 1.6009 4.8 3.9375 5.6 0.9747 0.4 2.1565 0.4 3.1875 0.4 1.95 0 3.172-2.1 4.875-2 1.703-0.1 2.925 2 4.875 2 1.031 0 2.213 0 3.187-0.4 2.337-0.8 3.943-3.2 3.938-5.6 0.005-2.5-1.601-4.9-3.938-5.7-0.631-0.2-1.354-0.3-2.062-0.3h-1.125-9.75-0.7812z" fill="#bdc3c7"></path> <path d="m11 11a4 4 0 1 1 -8 0 4 4 0 1 1 8 0z" transform="translate(-1 1028.4)" fill="#ecf0f1"></path> <path d="m6 1036.4c-0.5523 0-1 0.4-1 1v1h-1c-0.5523 0-1 0.4-1 1 0 0.5 0.4477 1 1 1h1v1c0 0.5 0.4477 1 1 1s1-0.5 1-1v-1h1c0.5523 0 1-0.5 1-1 0-0.6-0.4477-1-1-1h-1v-1c0-0.6-0.4477-1-1-1z" fill="#7f8c8d"></path> <path d="m11 11a4 4 0 1 1 -8 0 4 4 0 1 1 8 0z" transform="translate(11 1028.4)" fill="#ecf0f1"></path> <path d="m16 10a1 1 0 1 1 -2 0 1 1 0 1 1 2 0z" transform="translate(1 1029.4)" fill="#27ae60"></path> <path d="m16 10a1 1 0 1 1 -2 0 1 1 0 1 1 2 0z" transform="translate(3 1031.4)" fill="#f39c12"></path> <path d="m16 10a1 1 0 1 1 -2 0 1 1 0 1 1 2 0z" transform="translate(3 1027.4)" fill="#2980b9"></path> <path d="m16 10a1 1 0 1 1 -2 0 1 1 0 1 1 2 0z" transform="translate(5 1029.4)" fill="#c0392b"></path> <path d="m11.5 11c-0.276 0-0.5 0.224-0.5 0.5s0.224 0.5 0.5 0.5h1c0.276 0 0.5-0.224 0.5-0.5s-0.224-0.5-0.5-0.5h-1z" transform="translate(0 1028.4)" fill="#7f8c8d"></path> </g> </g></svg>
    <h2>GamingCot</h2>
</a>

    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="{{ route('welcome') }}" class="nav-link px-2 link-secondary">Home</a></li>
                    
                    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle px-2 link-secondary" href="#" id="computersDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Computadoras
    </a>
    <ul class="dropdown-menu" aria-labelledby="computersDropdown">
        <li><a class="dropdown-item" href="{{ route('productos.escritorio') }}">Escritorio</a></li>
        <li><a class="dropdown-item" href="{{ route('productos.portatiles') }}">Portátiles</a></li>
    </ul>
</li>

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle px-2 link-secondary" href="#" id="peripheralsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Periféricos
    </a>
    <ul class="dropdown-menu" aria-labelledby="peripheralsDropdown">
        <li><a class="dropdown-item" href="{{ route('productos.teclados') }}">Teclados</a></li>
        <li><a class="dropdown-item" href="{{ route('productos.mouses') }}">Mouses</a></li>
        <li><a class="dropdown-item" href="{{ route('productos.audifonos') }}">Audífonos</a></li>
        <li><a class="dropdown-item" href="{{ route('productos.monitores') }}">Monitores</a></li>
        <li><a class="dropdown-item" href="{{ route('productos.controles') }}">Controles</a></li>
    </ul>
</li>

                    <li><a href="#" class="nav-link px-2 link-secondary">About</a></li>
      </ul>

    @if (Route::has('login'))
    <div class="col-md-3 text-end">
        @auth
            <a href="{{ url('/dashboard') }}" class="btn btn-outline-primary me-2">
                Dashboard
            </a>
        @else
            <a href="{{ route('login') }}" class="btn btn-outline-primary me-2">
                Log in
            </a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="btn btn-primary">
                    Sign-up
                </a>
            @endif
        @endauth
    </div>
@endif
</header>


        <main>
    <div class="container mt-5 mb-5">
        <div class="row">
            <!-- Apartado de Filtros -->
            <div class="col-md-3" style=":;">
                <h5>Filtros</h5>
                <form method="GET" action="{{ route('productos.index') }}">
                    <div class="form-group">
                        <label>Categoría</label><br>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="category[]" value="portatiles" id="portatiles">
                            <label class="form-check-label" for="portatiles">Portátiles</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="category[]" value="escritorio" id="escritorio">
                            <label class="form-check-label" for="escritorio">Escritorio</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="category[]" value="teclados" id="teclados">
                            <label class="form-check-label" for="teclados">Teclados</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="category[]" value="mouses" id="mouses">
                            <label class="form-check-label" for="mouses">Mouses</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="category[]" value="audifonos" id="audifonos">
                            <label class="form-check-label" for="audifonos">Audifonos</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="category[]" value="monitores" id="monitores">
                            <label class="form-check-label" for="monitores">Monitores</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="category[]" value="controles" id="controles">
                            <label class="form-check-label" for="controles">Controles</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="priceRange">Rango de Precio</label>
                        <input type="text" id="priceRange" class="form-control" style="border:0; font-weight:bold;" />
                        <div id="slider-range"></div>
                        <input type="hidden" name="min_price" id="min_price" />
                        <input type="hidden" name="max_price" id="max_price" />
                    </div>

                    <button type="submit" class="btn btn-primary">Filtrar</button>
                </form>
            </div>

            <!-- Apartado de Productos -->
            <div class="col-md-9">
                <div class="row">
                    @foreach ($products as $product)
                        <div class="col-md-4 mb-4">
                            <div class="card text-center">
                                <img src="{{ $product->image }}" class="card-img-top mx-auto d-block" style="width: 200px; height: 200px; object-fit: cover;" alt="{{ $product->name }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $product->name }}</h5>
                                    <p class="card-text">Precio: ${{ number_format($product->price, 2) }}</p>
                                    <p class="card-text">Stock: {{ $product->stock }}</p>
                                    <a href="#" class="btn btn-primary">Comprar</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Incluye jQuery y jQuery UI para el slider -->





<footer class="text-center text-lg-start bg-body-tertiary text-muted">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Company name
          </h6>
          <p>
            Here you can use rows and columns to organize your footer content. Lorem ipsum
            dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset">Angular</a>
          </p>
          <p>
            <a href="#!" class="text-reset">React</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Vue</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Laravel</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Pricing</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            info@example.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.2/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script>
    $(function() {
        $("#slider-range").slider({
            range: true,
            min: 1,
            max: 100000000, // Ajusta este valor máximo según tu rango de precios
            values: [1, 100000000], // Ajusta los valores iniciales
            slide: function(event, ui) {
                $("#priceRange").val("$" + ui.values[0] + " - $" + ui.values[1]);
                $("#min_price").val(ui.values[0]);
                $("#max_price").val(ui.values[1]);
            }
        });
        $("#priceRange").val("$" + $("#slider-range").slider("values", 0) +
            " - $" + $("#slider-range").slider("values", 1));
    });
</script>




<style>

body {
    background: #18122B;
}

    .carousel-item img {
  max-height: 450px;
  object-fit: cover;
}
</style>


    </body>
</html>
