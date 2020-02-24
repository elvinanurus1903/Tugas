@extends('front.master')
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" >
<link rel="stylesheet" type="text/css" href="{{ asset('/layout/styles/layout.css') }}" media="all">
</head>

@section('title', 'Beranda')
@section('main')
<div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 
  

             
<table class="table table-bordered table-striped">
<tr>
    <th width="20%">Nim</th>
    <th width="20%">Nama</th>
    <th width="20%">Email</th>
    <th width="10%">Gambar</th>
    <th width="30%">Aksi</th>
 </tr>
 @foreach($data as $row)
  <tr>
   <td>{{ $row->nim }}</td>
   <td>{{ $row->nama }}</td>
   <td>{{ $row->email}}</td>
     <td><img src="{{ URL::to('/') }}/images/{{ $row->image }}" class="img-thumbnail" width="75" /></td>
    <td> 
      <a href="{{route('front.show', $row->id)}}" class="btn btn-primary ">Lihat</a>
   </td>
  </tr>
 @endforeach
</table>
{!! $data->appends(request()->except('page'))->render() !!}

      </div>
 
    </main>
  </div>
  @endsection
</body>
</html>