@extends('data.parent')
@section('title', 'Tambah Data Mahasiswa')
@section('main')
@if($errors->any())
<div class="alert alert-danger">
 <ul>
  @foreach($errors->all() as $error)
  <li>{{ $error }}</li>
  @endforeach
 </ul>
</div>
@endif
<form method="post" action="{{ route('upload.store') }}" enctype="multipart/form-data">
  <div class="col-md-12">
 @csrf
 <div class="form-group">
  <label ">Nim</label>
   <input type="text" name="nim" class="form-control input-lg" />
 </div>
  <br />
 <div class="form-group">
  <label>Nama</label>
   <input type="text" name="nama" class="form-control input-lg" />
 </div>
 <br />
   <div class="form-group">
  <label >Email</label>
   <input type="text" name="email" class="form-control input-lg" />
 </div>
  <br />
 <div class="form-group">
  <label>Pilih Gambar</label>
   <input type="file" name="image" />
 </div>
 <br />
 <div class="form-group">
  <input type="submit" name="add" class="btn btn-warning input-lg" value="Add" />
 </div>
</div>
</form>

@endsection