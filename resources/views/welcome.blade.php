<!doctype html>
<html lang="en">
    <head>
        <title>GamingCot</title>
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
        
        




    </head>
    <body>
    
    <x-chat-component />

    <div id="chat-toggle" style="position: fixed; bottom: 20px; right: 30px; cursor: pointer; z-index: 1000;">
    <button class="btn btn-warning" style="border-radius: 50%; width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
        <svg viewBox="0 0 24 24" width="20" height="20" fill="#000000" xmlns="http://www.w3.org/2000/svg">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier"> 
                <title>ic_fluent_bot_add_24_filled</title>
                <g id="ic_fluent_bot_add_24_filled" fill="#212121" fill-rule="nonzero">
                    <path d="M17.5,12 C20.5375661,12 23,14.4624339 23,17.5 C23,20.5375661 20.5375661,23 17.5,23 C14.4624339,23 12,20.5375661 12,17.5 C12,14.4624339 14.4624339,12 17.5,12 Z M12.0222607,13.9993086 C11.3751676,15.0097525 11,16.2110637 11,17.5 C11,19.1441769 11.6104632,20.6457725 12.6170965,21.7904935 C11.8149076,21.9312924 10.9419626,22.0010712 10,22.0010712 C7.11050247,22.0010712 4.87168436,21.3444691 3.30881727,20.0007885 C2.48019625,19.2883988 2.00354153,18.2500002 2.00354153,17.1572408 L2.00354153,16.249921 C2.00354153,15.0072804 3.01090084,13.999921 4.25354153,13.999921 L12.0222607,13.9993086 Z M17.5,13.9992349 L17.4101244,14.0072906 C17.2060313,14.0443345 17.0450996,14.2052662 17.0080557,14.4093593 L17,14.4992349 L16.9996498,16.9992349 L14.4976498,17 L14.4077742,17.0080557 C14.2036811,17.0450996 14.0427494,17.2060313 14.0057055,17.4101244 L13.9976498,17.5 L14.0057055,17.5898756 C14.0427494,17.7939687 14.2036811,17.9549004 14.4077742,17.9919443 L14.4976498,18 L17.0006498,17.9992349 L17.0011076,20.5034847 L17.0091633,20.5933603 C17.0462073,20.7974534 17.207139,20.9583851 17.411232,20.995429 L17.5011076,21.0034847 L17.5909833,20.995429 C17.7950763,20.9583851 17.956008,20.7974534 17.993052,20.5933603 L18.0011076,20.5034847 L18.0006498,17.9992349 L20.5045655,18 L20.5944411,17.9919443 C20.7985342,17.9549004 20.9594659,17.7939687 20.9965098,17.5898756 L21.0045655,17.5 L20.9965098,17.4101244 C20.9594659,17.2060313 20.7985342,17.0450996 20.5944411,17.0080557 L20.5045655,17 L17.9996498,16.9992349 L18,14.4992349 L17.9919443,14.4093593 C17.9549004,14.2052662 17.7939687,14.0443345 17.5898756,14.0072906 L17.5,13.9992349 Z M10.0003312,2.00049432 C10.380027,2.00049432 10.6938222,2.2826482 10.7434846,2.64872376 L10.7503312,2.75049432 L10.7495415,3.49949432 L14.25,3.5 C15.4926407,3.5 16.5,4.50735931 16.5,5.75 L16.5,10.254591 C16.5,10.5557334 16.4408388,10.843058 16.3335049,11.1055761 C15.2082115,11.3083422 14.1840602,11.8017755 13.3407048,12.5047635 L5.75,12.504591 C4.50735931,12.504591 3.5,11.4972317 3.5,10.254591 L3.5,5.75 C3.5,4.50735931 4.50735931,3.5 5.75,3.5 L9.24954153,3.49949432 L9.25033122,2.75049432 C9.25033122,2.40531635 9.48351624,2.11460166 9.80095151,2.02728504 L9.89856066,2.00734093 L10.0003312,2.00049432 Z M7.74928905,6.5 C7.05932576,6.5 6.5,7.05932576 6.5,7.74928905 C6.5,8.43925235 7.05932576,8.99857811 7.74928905,8.99857811 C8.43925235,8.99857811 8.99857811,8.43925235 8.99857811,7.74928905 C8.99857811,7.05932576 8.43925235,6.5 7.74928905,6.5 Z M12.2420255,6.5 C11.5520622,6.5 10.9927364,7.05932576 10.9927364,7.74928905 C10.9927364,8.43925235 11.5520622,8.99857811 12.2420255,8.99857811 C12.9319888,8.99857811 13.4913145,8.43925235 13.4913145,7.74928905 C13.4913145,7.05932576 12.9319888,6.5 12.2420255,6.5 Z"> </path> 
                </g> 
            </g> 
        </svg>
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

   



<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4" style="margin-right: 0px; margin-left: 0px; border-bottom: 1px solid; background-color: rgba(31, 41, 55, 1); font-size: 1.12rem;">
    <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-decoration-none" style="color: #635985;">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" width="40px" height="40px" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <rect x="119.467" y="452.267" style="fill:#FD5E95;" width="264.533" height="34.133"></rect> <rect x="162.133" y="264.533" style="fill:#7DBB34;" width="187.733" height="162.133"></rect> <rect x="162.133" y="264.533" style="fill:#60A333;" width="17.067" height="162.133"></rect> <rect x="264.533" y="281.6" style="fill:#A6DE64;" width="25.6" height="145.067"></rect> <rect x="162.133" y="264.533" style="fill:#60A333;" width="187.733" height="25.6"></rect> <path style="fill:#A6DE64;" d="M375.467,273.067H136.533c-4.713,0-8.533-3.821-8.533-8.533v-68.267c0-4.713,3.821-8.533,8.533-8.533 h238.933c4.713,0,8.533,3.821,8.533,8.533v68.267C384,269.246,380.179,273.067,375.467,273.067z"></path> <path style="fill:#60A333;" d="M136.533,187.733c-4.713,0-8.533,3.821-8.533,8.533v68.267c0,4.713,3.821,8.533,8.533,8.533h8.533 v-85.333H136.533z"></path> <g> <rect x="145.067" y="187.733" style="fill:#7DBB34;" width="128.352" height="85.333"></rect> <path style="fill:#7DBB34;" d="M375.467,187.733h-76.8v85.333h76.8c4.713,0,8.533-3.821,8.533-8.533v-68.267 C384,191.554,380.179,187.733,375.467,187.733z"></path> </g> <path style="fill:#FD5E95;" d="M145.067,512H59.733c-4.713,0-8.533-3.821-8.533-8.533v-34.133c0-4.713,3.821-8.533,8.533-8.533 h85.333c4.713,0,8.533,3.821,8.533,8.533v34.133C153.6,508.179,149.779,512,145.067,512z"></path> <path style="fill:#D14D7B;" d="M70.4,494.933c-1.178,0-2.133-0.956-2.133-2.133v-32h-8.533c-4.713,0-8.533,3.821-8.533,8.533v34.133 c0,4.713,3.821,8.533,8.533,8.533h85.333c4.713,0,8.533-3.821,8.533-8.533v-8.533H70.4z"></path> <path style="fill:#FD5E95;" d="M247.467,512h-85.333c-4.713,0-8.533-3.821-8.533-8.533v-34.133c0-4.713,3.821-8.533,8.533-8.533 h85.333c4.713,0,8.533,3.821,8.533,8.533v34.133C256,508.179,252.179,512,247.467,512z"></path> <path style="fill:#D14D7B;" d="M172.8,494.933c-1.178,0-2.133-0.956-2.133-2.133v-32h-8.533c-4.713,0-8.533,3.821-8.533,8.533 v34.133c0,4.713,3.821,8.533,8.533,8.533h85.333c4.713,0,8.533-3.821,8.533-8.533v-8.533H172.8z"></path> <path style="fill:#FD5E95;" d="M349.867,512h-85.333c-4.713,0-8.533-3.821-8.533-8.533v-34.133c0-4.713,3.821-8.533,8.533-8.533 h85.333c4.713,0,8.533,3.821,8.533,8.533v34.133C358.4,508.179,354.579,512,349.867,512z"></path> <path style="fill:#D14D7B;" d="M275.2,494.933c-1.178,0-2.133-0.956-2.133-2.133v-32h-8.533c-4.713,0-8.533,3.821-8.533,8.533 v34.133c0,4.713,3.821,8.533,8.533,8.533h85.333c4.713,0,8.533-3.821,8.533-8.533v-8.533H275.2z"></path> <path style="fill:#FD5E95;" d="M452.267,512h-85.333c-4.713,0-8.533-3.821-8.533-8.533v-34.133c0-4.713,3.821-8.533,8.533-8.533 h85.333c4.713,0,8.533,3.821,8.533,8.533v34.133C460.8,508.179,456.979,512,452.267,512z"></path> <path style="fill:#D14D7B;" d="M377.6,494.933c-1.178,0-2.133-0.956-2.133-2.133v-32h-8.533c-4.713,0-8.533,3.821-8.533,8.533 v34.133c0,4.713,3.821,8.533,8.533,8.533h85.333c4.713,0,8.533-3.821,8.533-8.533v-8.533H377.6z"></path> <path style="fill:#FD5E95;" d="M196.267,460.8h-85.333c-4.713,0-8.533-3.821-8.533-8.533v-34.133c0-4.713,3.821-8.533,8.533-8.533 h85.333c4.713,0,8.533,3.821,8.533,8.533v34.133C204.8,456.979,200.979,460.8,196.267,460.8z"></path> <path style="fill:#D14D7B;" d="M121.6,443.733c-1.178,0-2.133-0.956-2.133-2.133v-32h-8.533c-4.713,0-8.533,3.821-8.533,8.533 v34.133c0,4.713,3.821,8.533,8.533,8.533h85.333c4.713,0,8.533-3.821,8.533-8.533v-8.533H121.6z"></path> <path style="fill:#FD5E95;" d="M298.667,460.8h-85.333c-4.713,0-8.533-3.821-8.533-8.533v-34.133c0-4.713,3.821-8.533,8.533-8.533 h85.333c4.713,0,8.533,3.821,8.533,8.533v34.133C307.2,456.979,303.379,460.8,298.667,460.8z"></path> <path style="fill:#D14D7B;" d="M224,443.733c-1.178,0-2.133-0.956-2.133-2.133v-32h-8.533c-4.713,0-8.533,3.821-8.533,8.533v34.133 c0,4.713,3.821,8.533,8.533,8.533h85.333c4.713,0,8.533-3.821,8.533-8.533v-8.533H224z"></path> <path style="fill:#FD5E95;" d="M401.067,460.8h-85.333c-4.713,0-8.533-3.821-8.533-8.533v-34.133c0-4.713,3.821-8.533,8.533-8.533 h85.333c4.713,0,8.533,3.821,8.533,8.533v34.133C409.6,456.979,405.779,460.8,401.067,460.8z"></path> <path style="fill:#D14D7B;" d="M326.4,443.733c-1.178,0-2.133-0.956-2.133-2.133v-32h-8.533c-4.713,0-8.533,3.821-8.533,8.533 v34.133c0,4.713,3.821,8.533,8.533,8.533h85.333c4.713,0,8.533-3.821,8.533-8.533v-8.533H326.4z"></path> <path style="fill:#FFE88A;" d="M281.6,0h-51.2v170.667h51.2c23.564,0,42.667-38.205,42.667-85.333S305.164,0,281.6,0z"></path> <path style="fill:#FFF1B5;" d="M230.4,102.4h93.011c0.56-5.515,0.855-11.221,0.855-17.067s-0.295-11.552-0.855-17.067H230.4V102.4z"></path> <ellipse style="fill:#F9D84E;" cx="230.4" cy="85.333" rx="42.667" ry="85.333"></ellipse> <path style="fill:#EB9617;" d="M238.933,76.8H230.4v-8.533h8.533c4.713,0,8.533-3.821,8.533-8.533s-3.821-8.533-8.533-8.533v-8.533 c0-4.713-3.821-8.533-8.533-8.533c-4.713,0-8.533,3.821-8.533,8.533V51.2c-4.713,0-8.533,3.821-8.533,8.533v25.6 c0,4.713,3.821,8.533,8.533,8.533h8.533v8.533h-8.533c-4.713,0-8.533,3.821-8.533,8.533s3.821,8.533,8.533,8.533V128 c0,4.713,3.821,8.533,8.533,8.533c4.713,0,8.533-3.821,8.533-8.533v-8.533c4.713,0,8.533-3.821,8.533-8.533v-25.6 C247.467,80.621,243.646,76.8,238.933,76.8z"></path> </g></svg>
        <h2 style="color: rgba(209, 213, 219, 0.75);">GamingCot</h2>
    </a>

    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a style="color: rgba(209, 213, 219, 1);" href="/" class="nav-link px-2">Home</a></li>

        <li class="nav-item dropdown">
            <a style="color: rgba(209, 213, 219, 1);" class="nav-link dropdown-toggle px-2" href="#" id="computersDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Computadoras
            </a>
            <ul class="dropdown-menu" aria-labelledby="computersDropdown">
                <li><a class="dropdown-item" href="{{ route('productos.escritorio') }}">Escritorio</a></li>
                <li><a class="dropdown-item" href="{{ route('productos.portatiles') }}">Portátiles</a></li>
            </ul>
        </li>

        <li class="nav-item dropdown">
            <a style="color: rgba(209, 213, 219, 1);" class="nav-link dropdown-toggle px-2" href="#" id="peripheralsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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

        <!-- Botón "About" que activa el modal -->
        <li>
            <a style="color: rgba(209, 213, 219, 1);" href="#" class="nav-link px-2" data-bs-toggle="modal" data-bs-target="#aboutModal">About</a>
        </li>
    </ul>

    @if (Route::has('login'))
    <div class="col-md-3 text-end">
        @auth
            <a href="{{ url('/dashboard') }}" class="btn me-2" style="background-color: rgba(229, 231, 235, 1); color: rgba(31, 41, 55, 1);">
                Dashboard
            </a>
        @else
            <a href="{{ route('login') }}" class="btn me-2" style="background-color: rgba(229, 231, 235, 1); color: rgba(31, 41, 55, 1);">
                Log in
            </a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="btn" style="background-color: rgba(103, 105, 108, 0.7); color: rgba(234, 235, 238, 1);">
                    Sign-up
                </a>
            @endif
        @endauth
    </div>
    @endif
</header>

<!-- Modal de About -->
<div class="modal fade" id="aboutModal" tabindex="-1" aria-labelledby="aboutModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="background-color: rgba(31, 41, 55, 1); color: rgba(209, 213, 219, 1);">
            <div class="modal-header">
                <h5 class="modal-title" id="aboutModalLabel">Información del Proyecto</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Universidad Cooperativa de Colombia</p>
                <p>Proyecto Patrones de Diseño Orientado a Objetivos</p>
                <p>Brayan Aguirre</p>
                <p>Harrizon Lopez</p>
                <p>Bogotá, D.C.</p>
                <p>2024</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>


        <main>
<section class="section-carousel">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="margin: 0 50px 0 50px;">
  <ol class="carousel-indicators">
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"></li>
  </ol>
  <div class="carousel-inner" style="border-radius: 1.5rem;">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://parallax.com.pe/wp-content/uploads/2021/02/logitech-g-color-collection-02-1-rotated.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://redragon.es/content/uploads/2023/02/230131-Redragon-Arma-tu-estudio-Storm-Pro-Low.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://img.pccomponentes.com/pcblog/3678/tipos-ordenadores-portatiles.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://fotografias.larazon.es/clipping/cmsimages01/2022/04/29/8B5F0219-4F1F-45D4-A153-64B718300243/98.jpg?crop=800,450,x0,y175&width=1900&height=1069&optimize=low&format=webply" alt="Fourt slide">
    </div>
  </div>
  <a class="carousel-control-prev"  role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next"  role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</section>

<section id="featured-products" class="product-store" style="margin-top: 3rem;">
    <div class="container-md">
      <div class="display-header d-flex align-items-center justify-content-between">
        <h2 style="color: rgba(209, 213, 219, 0.7);" class="section-title text-uppercase">Featured Products</h2>
        <div class="btn-right">
          <a href="index.html" class="d-inline-block text-uppercase text-hover fw-bold">View all</a>
        </div>
      </div>

      <!-- PRODUCTOS DESTACADOS -->
      <section style="background-color: rgba(17, 21, 39, 1);">
  <div class="container py-5">
    <div class="row">
      @foreach ($featuredProducts as $product)
        <div class="col-md-4 mb-4">
        <div class="card text-center" style="background-color: rgba(31, 41, 55, 1); border-radius: 15px; color: rgba(209, 213, 219, 1); width: 300px; height: 490px;">
            <div class="d-flex justify-content-between align-items-center p-3">
              <p class="small mb-0" style="color: rgba(209, 213, 219, 0.7);">{{ ucfirst($product->category) }}</p>
              <div class="bg-info rounded-circle d-flex align-items-center justify-content-center" style="width: 25px; height: 25px;">
                <p class="text-white mb-0 small">x{{ $product->quantity ?? 1 }}</p>
              </div>
            </div>
            <img src="{{ $product->image }}" class="card-img-top mx-auto d-block" style="width: 200px; height: 200px; object-fit: cover; border-radius: 10px;" alt="{{ $product->name }}">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">{{ $product->name }}</h5>
              <p class="card-text">Precio: ${{ number_format($product->price, 2) }}</p>
              <p class="card-text">Stock: {{ $product->stock }}</p>
              <a href="#" class="btn btn-custom mt-auto" style="background-color: rgba(229, 231, 235, 1); color: rgba(31, 41, 55, 1); border: none;">Comprar</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>


    </div>
  </section>




        </main>

        <footer class="bg-body-tertiary text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(31, 41, 55, 1); color: rgba(209, 213, 219, 1);">
    © 2020 Copyright:
    <a style="color: rgba(255, 255, 255, 1); font-weight: bold;"
    href="https://mdbootstrap.com/">GamingCot.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
        
    </body>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.2/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


<script>
$('#carouselExampleIndicators').carousel({
  interval: 4000, // Ajusta el tiempo entre slides, en milisegundos
});
</script>





<style>

body {
  background-color: rgba(17, 21, 39, 1);
}

    .carousel-item img {
  max-height: 450px;
  object-fit: cover;
}

</style>



</html>

