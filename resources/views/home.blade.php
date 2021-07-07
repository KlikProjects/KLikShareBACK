@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @foreach ($products as $item)  
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{$item->image}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">id.{{$item->id}} {{$item->title}}</h5>
                <p class="card-text">{{$item->description}}</p>
                <a href="#" class="btn btn-primary">Klikcoins: {{$item->klikcoinsProducts}}</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
