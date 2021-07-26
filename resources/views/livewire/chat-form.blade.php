<div>
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" id="nombre" wire:model="nombre">
        @error("nombre")
            <small class="text-danger">{{$message}}</small>
        @enderror
    </div>
    <div class="form-group">
        <label for="mensaje">Mensaje</label>
        <input type="text" class="form-control" id="mensaje" wire:model="mensaje">
        @error("mensaje")
            <small class="text-danger">{{$message}}</small>
        @enderror
    </div>

    <button class="btn btn-primary mt-3" wire:click="enviarMensaje">Enviar</button>

    <div style="position: absolute;" class="alert alert-success collapse mt-3" role="alert" id="avisoSuccess">
        Se ha enviado
    </div>

    <script>
        //evento mensajeEnviado
        window.livewire.on('mensajeEnviado', function(){
            //mostramos el aviso
            $("#avisoSuccess").fadeIn("slow");
            //ocultamos el aviso al segundo
            setTimeout(function(){$("#avisoSuccess").fadeOut("slow");}, 1000);
        });
    </script>

</div>
