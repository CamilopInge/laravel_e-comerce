@extends('layouts.app')

@section('content')

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
        chatContainer.style.display = chatContainer.style.display === 'none' || chatContainer.style.display === '' ? 'block' : 'none';
    };
</script>

<div class="container my-5">
    <h2 class="text-center mb-4">Productos de la categoría Portátiles</h2>

    <!-- Botón para abrir el modal -->
    <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#createPortatilModal">
        Crear Nuevo Producto
    </button>

    <!-- Modal para crear un nuevo producto en la categoría Portátiles -->
    <div class="modal fade" id="createPortatilModal" tabindex="-1" aria-labelledby="createPortatilModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" style="background-color: rgba(31, 41, 55, 1); color: rgba(209, 213, 219, 1);">
                <div class="modal-header">
                    <h5 class="modal-title" id="createPortatilModalLabel">Crear Nuevo Producto - Portátiles</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('products.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nombre del Producto</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Precio</label>
                            <input type="number" class="form-control" id="price" name="price" required step="0.01" min="0">
                        </div>
                        <div class="mb-3">
                            <label for="stock" class="form-label">Stock</label>
                            <input type="number" class="form-control" id="stock" name="stock" required min="0">
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">URL de la Imagen</label>
                            <input type="text" class="form-control" id="image" name="image" required>
                        </div>
                        <input type="hidden" name="category" value="portatiles">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Guardar Producto</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Lista de productos existentes en la categoría Portátiles -->
    <div class="row">
        @foreach ($products as $product)
            <div class="col-12 mb-4">
                <div class="card d-flex flex-row align-items-center p-3" style="background-color: rgba(31, 41, 55, 1); color: rgba(209, 213, 219, 1); border-radius: 15px;">
                    <img src="{{ $product->image }}" class="img-fluid" style="width: 150px; height: 150px; object-fit: cover; border-radius: 10px; margin-right: 20px;" alt="{{ $product->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ Str::limit($product->name, 50) }}</h5>
                        <p class="card-text">Precio: ${{ number_format($product->price, 2) }}</p>
                        <p class="card-text">Stock: {{ $product->stock }}</p>
                        <div class="d-flex gap-2">
                            <!-- Botón para abrir el modal de edición -->
                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#editProductModal{{ $product->id }}">
                                Editar
                            </button>

                            <!-- Modal para editar el producto -->
                            <div class="modal fade" id="editProductModal{{ $product->id }}" tabindex="-1" aria-labelledby="editProductModalLabel{{ $product->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content" style="background-color: rgba(31, 41, 55, 1); color: rgba(209, 213, 219, 1);">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editProductModalLabel{{ $product->id }}">Editar Producto - {{ $product->name }}</h5>
                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('products.update', $product->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="mb-3">
                                                    <label for="name" class="form-label">Nombre del Producto</label>
                                                    <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="price" class="form-label">Precio</label>
                                                    <input type="number" class="form-control" id="price" name="price" value="{{ $product->price }}" required step="0.01" min="0">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="stock" class="form-label">Stock</label>
                                                    <input type="number" class="form-control" id="stock" name="stock" value="{{ $product->stock }}" required min="0">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="image" class="form-label">URL de la Imagen</label>
                                                    <input type="text" class="form-control" id="image" name="image" value="{{ $product->image }}" required>
                                                </div>
                                                <input type="hidden" name="category" value="portatiles">
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Botón de eliminación -->
                            <form action="{{ route('products.destroy', $product) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
