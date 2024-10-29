<div id="chat-container" style="position: fixed; bottom: 80px; right: 30px; display: none; width: 300px; z-index: 9999;">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center p-3" style="border-top: 4px solid #ffa900;">
            <h5 class="mb-0">Chat messages</h5>
            <div class="d-flex flex-row align-items-center">
                <span class="badge bg-warning me-3">{{ $messages->count() }}</span>
                <i class="fas fa-minus me-3 text-muted fa-xs"></i>
                <i class="fas fa-comments me-3 text-muted fa-xs"></i>
                <i class="fas fa-times text-muted fa-xs"></i>
            </div>
        </div>
        <div class="card-body" data-mdb-perfect-scrollbar-init style="position: relative; height: 400px; overflow-y: scroll;">
            <!-- Mostrar mensajes dinámicamente -->
            @foreach ($messages as $message)
                @if ($loop->index % 2 == 0) <!-- Mensaje del usuario -->
                    <div class="d-flex justify-content-end mb-4 pt-1">
                        <div>
                            <p class="small p-2 me-3 mb-3 text-white rounded-3 bg-warning">{{ $message->content }}</p>
                        </div>
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava6-bg.webp" alt="avatar" style="width: 45px; height: 100%;">
                    </div>
                @else <!-- Mensaje de GPT -->
                    <div class="d-flex flex-row justify-content-start mb-4 pt-1">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava5-bg.webp" alt="avatar" style="width: 45px; height: 100%;">
                        <div>
                            <p class="small p-2 ms-3 mb-3 rounded-3 bg-body-tertiary">{{ $message->content }}</p>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>

        <!-- Mostrar error si lo hay -->
        @if (session('error'))
            <div style="color: red; padding: 10px;">
                {{ session('error') }}
            </div>
        @endif

        <!-- Formulario para enviar mensajes -->
        <div class="card-footer text-muted d-flex justify-content-start align-items-center p-3">
            <form action="{{ route('chat.sendMessage') }}" method="POST" class="input-group mb-0 w-100">
                @csrf
                <input type="text" name="message" class="form-control" placeholder="Escribe tu mensaje aquí..." required>
                <button type="submit" class="btn btn-warning" style="padding-top: .55rem;">Enviar</button>
            </form>
        </div>
    </div>
</div>
