@extends('layouts.app')

@section('content')
<form method="post" action="{{route('store')}}">
@csrf
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Title</span>
        <input type="text" name="newtitle" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>


    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Description</span>
        <input type="text" name="newdescription" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-defaul" >
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Image</span>
        <input type="text" name="newimage" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Category</span>
        <input type="text" name="newcategory" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Klikcoins</span>
        <input type="integer" name="newklikcoins" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
    

    <button type="submit" class="btn btn-primary">Create</button>
</form>

@endsection