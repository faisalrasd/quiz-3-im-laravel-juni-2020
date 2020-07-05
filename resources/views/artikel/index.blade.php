@extends('layouts.master')

@section('content')
<div class="ml-3 mt-3">
    <h1> Artikel </h1>
    <a href="/artikel/create" class="btn-primary">
    Buat artikel

    </a>
</div>
    <table class="table">
        <thead>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Isi</th>
        </tr>
        </thead>
        <tbody>
        @foreach($artikel as $key => $artikel)
       <tr>
        <td>{{ $key + 1 }} </td>
        <td> {{ $artikel-> judul}}</td>
        <td> {{ $artikel-> isi}}</td>
        <td>
        <a href="/artikel/{{$artikel->id}}" class="btn-sm btn-info">Lihat </a>
        <a href="/artikel/{{$artikel->id}}/edit" class="btn-sm btn-default">Edit </a>
        <form action="/artikel/{{$artikel->id}}" method="post" style="display: inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
        </form>
        </td>
       </tr>
       @endforeach
        </tbody>
    </table>
@endsection