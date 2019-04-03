<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Mengubah Berita</title>
<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body>
	<div class="container">
		<h2>Perubahan Berita</h2><br />
		@if ($errors->any())
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
				</ul>
			</div><br />
		@endif
		<form method="post" action="{{action('BlogeController@update', $id)}}">
		{{csrf_field()}}
		<input name="_method" type="hidden" value="PATCH">
			
		<div class="row">
			<div class="form-group col-md-4">
				<label for="title">Judul postingan:</label>
				<input type="text" class="form-control" name="title" value="{{$bloge->title}}">
			</div>
		</div>
		
		<div class="row">
			<div class="form-group col-md-4">
				<label for="slug">Admin:</label>
				<input type="text" class="form-control" name="slug" value="{{$bloge->slug}}">
			</div>
		</div>
			
		<div class="row">	
			<div class="form-group col-md-4">
				<label for="stock">Isi Berita:</label>
				<textarea name="subject" id="" cols="100" rows="20" placeholder="isi...." value="{{$bloge->subject}}" ></textarea>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-4"></div>
				<div class="form-group col-md-4">
					<button type="submit" class="btn btn-success" style="marginleft:38px">Update
					Berita</button>
				</div>
		</div>
		</form>
	</div>
</body>
</html>
