@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="mt-4">Create New</h1> 
</div>

<div class="col-lg-8">
  <form method="post" action="/master/datas">
    @csrf 
    <div class="mb-3">
      <label for="nama" class="form-label">Nama</label>
      <input type="nama" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" requierd>
      @error('nama')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
    </div>
    <div class="mb-3">
      <label for="jeniskelamin" class="form-label @error('jeniskelamin') is-invalid @enderror">Jenis Kelamin</label>
      <input type="jeniskelamin" class="form-control" id="jeniskelamin" name="jeniskelamin" requierd>
      @error('jeniskelamin')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
    </div>
    <div class="mb-3">
      <label for="umur" class="form-label @error('umur') is-invalid @enderror">Umur</label>
      <input type="umur" class="form-control" id="umur" name="umur" required>
      @error('umur')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<!-- <script>
  const nama = document.querySelector('#nama');
  const jeniskelamin = document.querySelector('#jeniskelamin');
  const umur = document.querySelector('#umur');
</script> -->
<!-- <form method="post" action="/admin/datas">
    @csrf
  <div class="mb-3">
    <label for="nama" class="form-label">nama</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" id="nama" name="nama" required>
    @error('nama')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
    <input type="text" class="form-control @error('jeniskelamin') is-invalid @enderror" id="jeniskelamin" name="jeniskelamin" required>
    @error('jeniskelamin')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="umur" class="form-label">umur</label>
    <input type="text" class="form-control @error('umur') is-invalid @enderror" id="umur" name="umur" required>
    @error('umur')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>
  <button type="submit" class="btn btn-primary">Create</button>
</form> -->
@endsection