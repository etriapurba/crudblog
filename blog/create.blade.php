<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Create </title>
<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body>
	 	<div class="container">
		<h2>Tambah berita</h2><br/>
		
			@if ($errors->any())
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div><br />
			@endif
			@if (\Session::has('success'))
				<div class="alert alert-success">
					<p>{{ \Session::get('success') }}</p>
				</div><br />
			@endif 
		
		<form method="post" action="{{url('blog')}}">
			{{csrf_field()}} 
			<div class="row">
				<div class="form-group col-md-4">
					<label for="title">Judul postingan:</label>
					<input type="text" class="form-control" name="title">
				</div>
			</div>
				
			<div class="row">
				<div class="form-group col-md-4">
					<label for="slug">Admin:</label>
					<input type="text" class="form-control" name="slug">
				</div>
			</div>
			
			<div>
				<textarea name="subject" id="" cols="100" rows="20" placeholder="isi...." ></textarea>
			</div>
			
		<div class="row">
			<div class="form-group col-md-4">
				<button type="submit" class="btn btn-success" style="marginleft:38px">Tambahkan
					Berita</button>
			</div>
		</div>
		</form>
	</div>
</body>
</html>

