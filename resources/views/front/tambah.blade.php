@extends('front.master')
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" >
<link rel="stylesheet" type="text/css" href="{{ asset('/layout/styles/layout.css') }}" media="all">
</head>

@section('title', 'Tambah Data')
@section('main')
<div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 

             
@if($errors->any())
<div class="alert alert-danger">
 <ul>
  @foreach($errors->all() as $error)
  <li>{{ $error }}</li>
  @endforeach
 </ul>
</div>
@endif
<form method="post" action="{{ route('front.store') }}" enctype="multipart/form-data">
 @csrf
  <label ">Nim</label>
   <input type="text" name="nim" >
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

      </div>
 
    </main>
  </div>
  @endsection
</body>
</html>