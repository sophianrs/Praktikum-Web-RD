@extends('layout/main')

@section('title', 'Detail Beauty Content')

@section('container')
<div class="container">
  <h3 class="mt-3">
      Detail Beauty Content
  </h3>
    <div class="card" style="width: 100%;">
        <div class="card-body">
        <h5 class="card-title">{{$beauty->judul}}</h5>
        <h6 class="card-subtitle mb-2 text-muted">{{$beauty->penulis}}</h6>
        <p class="card-text">{{$beauty->deskripsi}}</p>
        <a href="/" class="card-link">Back</a>
        </div>
    </div>
  </div>
@endsection