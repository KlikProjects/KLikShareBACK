@extends('layouts.app')

@section('content')
<form method="post" action="{{route('update', $product->id)}}">
@method('put')
    @csrf
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Title</span>
        <input type="text" name="newtitle" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$product->title}}">
    </div>


    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Description</span>
        <input type="text" name="newdescription" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-defaul" value="{{$product->description}}" >
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Image</span>
        <input type="text" name="newimage" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$product->image}}">
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Category</span>
        <input type="text" name="newcategory" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$product->category}}">
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Klikcoins</span>
        <input type="integer" name="newklikcoins" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$product->klikcoinsProducts}}">
    </div>
    

    <button type="submit" class="btn btn-primary">Update</button>
</form>

@endsection