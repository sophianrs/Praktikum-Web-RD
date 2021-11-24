@extends('layout/main')

@section('title', 'Beauty Content')

@section('container')
<div class="container">
  <h3 class="mt-3">
      Daftar Beauty Content
  </h3>

  <a href="/beauty/create"> Tambah Data</a>

  @if (session('status'))
      <div class="alert alert-success">
        {{ session('status')}}
      </div>
  @endif

    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Judul</th>
          <th scope="col">Penulis</th>
          <th scope="col">Deskripsi</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        {{-- pada foreach ini adalah nama yang dikirim dari controller --}}
        @foreach ($beauty as $data)
          <tr>
            <th scope="row">{{$loop->iteration }}</th>
            <td>{{$data->judul}}</td>
            <td>{{$data->penulis}}</td>
            <td>{{$data->deskripsi}}</td>
            <td>

              <a href="/beauty/{{$data->id}}/edit" type="submit" class="btn btn-success" > Edit </a>
              {{-- <a href="" class="badge badge-danger"> delete</a> --}}
              <form action="/beauty/{{$data->id}}" method="post">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger"> hapus </button><br>
              </form>
              
              <a href="/beauty/{{$data->id}}" class="btn btn-info"> detail</a>
              
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>

  </div>
@endsection