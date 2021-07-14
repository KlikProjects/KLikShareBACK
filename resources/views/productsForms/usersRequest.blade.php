@extends('layouts.app')

@section('content')
<div class="container">
    @foreach( $usersRequest as $item)
    {{$item->name}}

    @endforeach
</div>
@endsection