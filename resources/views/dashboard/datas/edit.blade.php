@extends('dashboard.layouts.main')
@section('container')
<div class="container-fluid px-4">
    <h1 class="mt-4">Edit Data</h1>
    <div class="row">
</div>

<form method="post" action="/master/datas/{{ $data->id }}">
    @method('put')
    @csrf
  <div class="mb-3">
    <label for="nama" class="form-label">nama</label>
    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" required value="{{ old('nama', $data->nama) }}">
    @error('nama')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
    <input type="text" class="form-control @error('telp') is-invalid @enderror" id="jeniskelamin" name="jeniskelamin" required value="{{ old('jeniskelamin', $data->jeniskelamin) }}">
    @error('jeniskelamin')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="umur" class="form-label">Umur</label>
    <input type="text" class="form-control @error('umur') is-invalid @enderror" id="umur" name="umur" required value="{{ old('umur', $data->umur) }}">
    @error('umur')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>
  <button type="submit" class="btn btn-primary">Create</button>
</form>
@endsection