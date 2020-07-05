@extends('layouts.master')

@section('content')
    <div class="ml-3 mt-3">
        <h3>Detail Item</h3>
        <p> {{ $artikel-> judul}}</p>
        <p> {{ $artikel-> isi}}</p>
    </div>
@endsection