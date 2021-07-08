@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{$product->image}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">id.{{$product->id}} {{$product->title}}</h5>
                <p class="card-text">{{$product->description}}</p>
                <a href="#" class="btn btn-primary">Klikcoins: {{$product->klikcoinsProducts}}</a>
                <a href="{{route('delete', $product->id)}}"><button type="delete" class="btn btn-primary">Delete</button></a>
                <a href="{{route('edit', $product->id)}}"><button type="submit" class="btn btn-primary">Edit</button></a>
            </div>
        </div>
    </div>
</div>
@endsection