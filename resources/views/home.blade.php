@extends('layouts.app')

@section('content')
<div class="container">
<a href="{{route('create')}}"><button type="text" class="btn btn-danger">Create</button></a>
    <div class="row justify-content-center">
        @foreach ($products as $item)  
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{$item->image}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">id.{{$item->id}} {{$item->title}}</h5>
                <p class="card-text">{{$item->description}}</p>
                <a href="#" class="btn btn-primary">Klikcoins: {{$item->klikcoinsProducts}}</a>
                <a href="{{route('delete', $item->id)}}"><button type="delete" class="btn btn-primary">Delete</button></a>
                <a href="{{route('edit', $item->id)}}"><button type="submit" class="btn btn-primary">Edit</button></a>
                <a href="{{route('show', $item->id)}}"><button type="submit" class="btn btn-primary">Show</button></a>
                <a href="{{route('usersRequest', $item->id)}}"><button type="submit" class="btn btn-primary">User Requested</button></a>
                <a href="{{route('productRequested', $item->id)}}"><button type="submit" class="btn btn-primary">Reservar</button></a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
