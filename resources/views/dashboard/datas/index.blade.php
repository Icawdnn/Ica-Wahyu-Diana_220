@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="font-weight-bold">Daftar Pasien</h1>
</div>

@if(session()->has('success'))
<div class="alert alert-success" role="alert">
  {{session('success')}}
</div>
@endif
<div class="table-responsive">
    <a href="/master/datas/create" class="btn btn-primary mb-3">Create New Post</a>
    <!-- <a href="" class="badge bg-danger"> -->
    <table class="table table-striped table-sm">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nama</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Umur</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($datas as $data)
    <tr>
      <td>{{ $data->id }}</td>
      <td>{{ $data->nama }}</td>
      <td>{{ $data->jeniskelamin }}</td>
      <td>{{ $data->umur }}</td>
      <td>
          <a href="/master/datas/{{ $data->id }}/edit" class="badge bg-warning">
          <i class="bi bi-pencil-square"></i></a>
          <form action="/master/datas/{{ $data->id }}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><i class="bi bi-trash"></i></button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection