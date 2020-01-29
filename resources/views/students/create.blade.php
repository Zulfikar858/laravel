@extends('layout.main')

@section('title', 'Form Tambah Data Mahasiswa')

@section('container')
<div class="container">
<div class="row">
<div class="col-6">
<h1 class= "mt-3">Form Tambah mahasiswa</h1>
<form method="post" action="/students/create">
@csrf
<div class="form-group">
    <label for="Nama">Nama</label>
    <input type="text" class="form-control" id="Nama" placeholder="Masukkan Nama" name="Nama">
  </div>
  <div class="form-group">
    <label for="nrp">nrp</label>
    <input type="text" class="form-control" id="nrp" placeholder="Masukkan nrp" name="nrp">
  </div>
  <div class="form-group">
    <label for="email">email</label>
    <input type="text" class="form-control" id="email" placeholder="Masukkan email" name="email">
  </div>
  <div class="form-group">
    <label for="Jurusan">Jurusan</label>
    <input type="text" class="form-control" id="Jurusan" placeholder="Masukkan Jurusan" name="Jurusan">
  </div>
  <button type="submit" class="btn btn-primary">Tambah Data!</button>
 
</form>
</div>
</div>
</div>
@endsection