@extends('adminlte.master')

@section('title')
<h2>tambah data</h2>
@endsection

@section('content')
<form action="/posts" method="POST">
            @csrf

            <div class="form-group">
                <label for="title">Judul</label>
                <input type="text" class="form-control" name="judul" id="title" placeholder="Masukkan Title">
                @error('judul')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="title">Ringkasan</label>
                <input type="text" class="form-control" name="ringkasan" id="title" placeholder="Masukkan Title">
                @error('ringkasan')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="title">Tahun</label>
                <input type="number" class="form-control" name="tahun" id="title" placeholder="Masukkan Title">
                @error('tahun')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="title">Genre</label>
                <input type="text" class="form-control" name="genre" id="title" placeholder="Masukkan Title">
                @error('genre')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="body">Poster</label>
                <input type="file" class="form-control" name="poster" id="body" placeholder="Masukkan Body">
                @error('poster')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
@endsection