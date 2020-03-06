<!DOCTYPE html>
<html>
<head>
	<title>Laporan PDF</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Rekap Data Siswa</h4>
		

	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
				<th>NIM</th>
				<th>Nama</th>
				<th>Email</th>
				<th>Image</th>
			</tr>
		</thead>
		<tbody>
			@php $id=1 @endphp
			@foreach($data as $data)
			<tr>
				<td>{{ $id++ }}</td>
				<td>{{$data->nim}}</td>
				<td>{{$data->nama}}</td>
				<td>{{$data->email}}</td>
				<td>{{$data->image}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

</body>
</html>