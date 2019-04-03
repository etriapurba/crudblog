<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Daftar Berita </title>
<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body>
	<div class="container">
	<br />
	@if (\Session::has('success'))
		<div class="alert alert-success">
			<p>{{ \Session::get('success') }}</p>
		</div><br />
	@endif
		<table class="table table-striped">
			<thead>
				<tr>
					<th>ID</th>
					<th>Judul Postingan</th>
					<th>Admin :</th>
					<th>Isi berita</th>
					
					<th colspan="2">Action</th>
				</tr>
			</thead>
			
			<tbody>
			@foreach($bloges as $bloge)
			<tr>
				<td>{{$bloge['id']}}</td>
				<td>{{$bloge['title']}}</td>
				<td>{{$bloge['slug']}}</td>
				<td>{{$bloge['subject']}}</td>
				
				
				<td><a href="{{action('BlogeController@show', $bloge['id'])}}"
					class="btn btn-info">Detail</a>
				</td>
				
				<td><a href="{{action('BlogeController@edit', $bloge['id'])}}"
					class="btn btn-warning">Ubah</a>
				</td>
				
				<td>
					<form action="{{action('BlogeController@destroy',
					$bloge['id'])}}" method="post">
					{{csrf_field()}}
						<input name="_method" type="hidden" value="DELETE">
						<button class="btn btn-danger" type="submit">Hapus</button>
					</form>
				</td>
			</tr>
			@endforeach
			
			</tbody>
		</table>
		
		<table align="center">
				<td><a href="{{action('BlogeController@create', $bloge['id'])}}"
					class="btn btn-info">Tambah Data</a>
				</td>
		</table>
			
	</div>
</body>
</html>