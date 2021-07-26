<div>
    <h5 class="mt-3"><strong>Lista de Mensajes</strong></h5>
    @foreach ($mensajes as $mensaje)
        <li>{{ $mensaje['usuario'] }} - {{ $mensaje['mensaje'] }} </li>
    @endforeach
</div>
{{-- <script>
    Pusher.logToConsole = true;

    var pusher = new Pusher('c98d187659761df421ca', {
        cluster: 'eu'
    });

    var channel = pusher.subscribe('chat-channel');
    channel.bind('chat-event', function(data) {
        app.messages.push(JSON.stringify(data));
    });

    // Vue application
    const app = new Vue({
        el: '#app',
        data: {
            messages: [],
        },
    });
</script> --}}
