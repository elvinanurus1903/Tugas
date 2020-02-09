@extends('data.parent')
@section('title', 'Edit Data Mahasiswa')

@section('main')
            
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <br />
     <form method="post" action="{{ route('upload.update', $data->id) }}" enctype="multipart/form-data">
        <div class="col-md-12">
                @csrf
                @method('PATCH')
                <div class="form-group">
       <label>Nim</label>
        <input type="text" name="nim" value="{{ $data->nim }}" class="form-control" />
       </div>
      <div class="form-group">
       <label>Nama</label>
        <input type="text" name="nama" value="{{ $data->nama}}" class="form-control" />
       </div>
    
       <div class="form-group">
       <label>Email</label>
        <input type="text" name="email" value="{{ $data->email}}" class="form-control" />
      </div>
      <div class="form-group">
       <label >Pilih Gambar</label>

        <input type="file" name="image" />
              <img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" width="100" />
                        <input type="hidden" name="hidden_image" value="{{ $data->image }}" />
       </div>
      <br />
      <div class="form-group ">
       <input type="submit" name="edit" class="btn btn-warning" value="Edit" />
      </div>
     </form>

@endsection