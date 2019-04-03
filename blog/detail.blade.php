<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Detail Berita</title>
<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
	<div class="container" align="center">
		
		@if ($errors->any())
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
				</ul>
			</div><br />
		@endif
		<form method="post" action="{{action('BlogeController@show', $id)}}">
		{{csrf_field()}}
		<input name="_method" type="hidden" value="readonly">

	
		<h2>Detail Berita</h2><br/>
		<table>
			<tr>
				<td>Judul Berita</td>
				
				<td>:</td>
				<td>{{$bloge->title}}</td>
			</tr>
			<tr>
				<td>Admin</td>
				<td>:</td>
				<td>{{$bloge->slug}}</td>
			</tr>
			<tr>
				<td>Isi Berita</td>
				<td>:</td>
				<td>{{$bloge->subject}}</td>
			</tr>
		</table>
	
		<table align="center">
				<td><a href="{{action('BlogeController@index', $bloge['id'])}}"
					class="btn btn-info">Back</a>
				</td>
		</table>
	</div>
<body>
</body>
</html>