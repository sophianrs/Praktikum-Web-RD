@extends('layout/main')

@section('title', 'Form Edit Beauty Content')

@section('container')
<div class="container">
  <h3 class="mt-3">
      Edit Beauty Content
  </h3>
  <form method="POST" action="/beauty/{{$beauty->id}}">
    @method('patch')
    {{-- csrf sebagai token --}}
    @csrf

    <div class="mb-3">
      <label for="judul" class="form-label">Judul</label>
      <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" placeholder="Masukkan Judul Konten" name="judul" value="{{ $beauty->judul }}">

      @error('judul')
      <div class="invalid-feedback" >{{$message}}</div>
      @enderror
      
    </div>
    <div class="mb-3">
        <label for="penulis" class="form-label">Penulis</label>
        <input type="text" class="form-control @error('penulis') is-invalid @enderror" id="penulis" placeholder="Masukkan Penulis konten" name="penulis" value="{{ $beauty->penulis}}">
        
        @error('penulis')
        <div class="invalid-feedback" >{{$message}}</div>
        @enderror
    </div>


    <div class="mb-3">
        <label for="deskipsi" class="form-label">Deskripsi</label>
        <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" id="deskipsi" placeholder="Masukkan Deskripsi Isi Konten" name="deskripsi" value="{{ $beauty->deskripsi }}">  

        @error('deskripsi')
        <div class="invalid-feedback" >{{$message}}</div>
        @enderror
    </div>
    {{-- <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div> --}}
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  </div>
@endsection