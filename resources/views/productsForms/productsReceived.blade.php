@extends('layouts.app')

@section('content')
<div class="container row">
        @foreach ($productsReceived as $productReceived)  
        <div class="card m-3" style="width: 18rem;">
            <img class="card-img-top" src="{{$productReceived->image}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">id.{{$productReceived->id}} {{$productReceived->title}}</h5>
                <p class="card-text">{{$productReceived->description}}</p>
                <a href="#" class="btn btn-primary">Klikcoins: {{$productReceived->klikcoinsProducts}}</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
