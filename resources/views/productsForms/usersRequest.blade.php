@extends('layouts.app')

@section('content')
<div class="container">

    <h1>{{$product->id}}</h1>
    @foreach( $usersRequest as $user)
    {{$user->name}}
    <a href="{{route('giveToUser',['productID'=>$product->id, 'userID'=>$user->id])}}"><button type="submit" class="btn btn-primary">Give To User</button></a>

    @endforeach
</div>
@endsection