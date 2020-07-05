@extends('layouts.master')

@section('content')
<div class="ml-3 mt-3">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit artikel</h3>
        </div>
            <form role="form" action="/artikel/{{$artikel->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="judul">Judul :</label>
                <input type="text" class="form-control" id="judul" value="{{$artikel->judul}}" name="judul" placeholder="Enter judul">
            </div>
            <div class="form-group">
                <label for="isi">Isi :</label>
                <input type="text" class="form-control" id="isi" value="{{$artikel->isi}}"  name="isi" placeholder="Enter isi">
            </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
    </div>
</div>
@endsection