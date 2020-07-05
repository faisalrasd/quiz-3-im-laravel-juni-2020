@extends('layouts.master')

@section('content')
<div class="ml-3 mt-3">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Form artikel</h3>
        </div>
            <form role="form" action="/artikel" method="POST">
            @csrf
            <div class="form-group">
                <label for="judul">Judul :</label>
                <input type="text" class="form-control" name="judul" placeholder="Enter judul" id="judul">
            </div>
            <div class="form-group">
                <label for="isi">Isi :</label>
                <input type="text" class="form-control" placeholder="Enter isi" name="isi" id="isi">
            </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
    </div>
</div>

@endsection
<!--
@section('content')
<div class="ml-3 mt-3">
        <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Form artikel</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
<!--                    <form role="form" action="/jawaban" method="POST">
                    @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="judul">Judul :</label>
                                <input type="text" class="form-control" name="judul" placeholder="Enter judul" id="judul">
                            </div>
                            <div class="form-group">
                                <label for="isi">Isi :</label>
                                <input type="text" class="form-control" placeholder="Enter isi" name="isi" id="isi">
                            </div>
                        </div>
                        <!-- /.card-body -->

<!--                        <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
        </div>
</div>

@endsection
-->