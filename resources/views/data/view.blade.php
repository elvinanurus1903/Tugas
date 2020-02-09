@extends('data.parent')
@section('title', 'Data Mahasiswa')
@section('main')


 <table>
 	<tr>
		 <td >  <img width="700px" src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" /></td>
	</tr>
 	<tr>
 		<td ><br> NIM	</td>
 		<td ><br>  {{ $data->nim }} </td>
 	</tr>
 	<tr>
 		<td width="10%"><br>  Nama </td>
 		<td width="10%"><br>   {{ $data->nama }}</td>
 	</tr>
 	<tr>
 		<td width="10%"><br>  Email </td>
 		<td width="10%"><br>   {{ $data->email }}</td>
 	</tr>	
</table>

<br> 
<br> 
<div class="table-responsive table-invoice">
          <table class="table table-striped">
 <tr>
  <th width="20%">Kode</th>
    <th width="20%">Mata Kuliah</th>
   <th width="20%">Semester</th>
   <th width="20%">Nilai</th>
 </tr>
  @foreach($data->matkul as $matkul)
  	<tr>
 		<td width="20%">  {{ $matkul->kode }}</td>
 		<td width="20%">  {{ $matkul->name }}</td>
 		<td width="20%">  {{ $matkul->semester }}</td>
 		<td width="20%">  {{ $matkul->pivot->nilai }}</td>
 	</tr>
  @endforeach
</table>
</div>
@endsection