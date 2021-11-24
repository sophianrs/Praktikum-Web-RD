@extends('layout/main')

@section('title', 'Sophia Nouriska Blog')

@section('container')
@section('container')
<div class="container">
  <h3 class="mt-3">
      Beauty Content
  </h3>

  @foreach ($beauty as $data)
      <div class="card d-inline" style="width: 18rem;" >
        <div class="card-body">
        <h5 class="card-title">{{$data->judul}}</h5>
        <h6 class="card-subtitle mb-2 text-muted">{{$data->penulis}}</h6>
        {{-- <p class="card-text">{{$data->deskripsi}}</p> --}}
        <a href="/beauty/{{$data->id}}" class="card-link">Detail</a>
        </div>
     </div><br>
  @endforeach

    
  </div>
@endsection
@endsection
