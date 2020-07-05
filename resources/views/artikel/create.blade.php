@extends('layouts.master')

@section('content')
    <h2>Ini halaman create</h2>
@endsection

@push('scripts')
    <script>
    var wrappers = document.getElementsByClassName("wrappers");
    var artikel = ["ini", "contoh"];

    console.log("ini artikel: ", artikel)
    </script>
@endpush