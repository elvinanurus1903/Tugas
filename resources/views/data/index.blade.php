
@extends('data.parent')
@section('title', 'Beranda')
@section('main')

<div class="table-responsive table-invoice">
          <table class="table table-striped">
 <tr>
 <form method="GET" class="form-inline">
              <div class="form-group">
                <input type="text" name="search" class="form-control" placeholder="Search" value="{{ request()->get('search') }}">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Search</button>
              </div>
            </form>

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
   
    <form action="{{route('upload.destroy', $row->id)}}"  method="post">
       <a href="{{route('upload.show', $row->id)}}" class="btn btn-primary btn-sm">Lihat</a>
    <a href="{{route('upload.edit', $row->id)}}" class="btn btn-warning btn-sm">Edit</a>
      @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
</form>
   </td>
  </tr>
 @endforeach
</table>
{!! $data->appends(request()->except('page'))->render() !!}
</div>
@endsection