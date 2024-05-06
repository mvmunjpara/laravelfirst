<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
	

<div class="container">
	<div class="row">
		<div class="col-12">
			<div class="text-center mb-2">File Upload</div>
		</div>
	</div>
	<form action="{{ route('photo.store')}}" method="POST" enctype="multipart/form-data">
		@csrf
		<div class="row">
			<div class="col-12">
				<input type="file" name="photo" accept=".jpg,.png,.jpeg">
			</div>
			@error('photo')
			<div class="alert alert-danger mb-1 mt-2">{{$message}}</div>
			@enderror
			<div class="col-12 mt-5">
				<input type="submit" class="btn btn-sm btn-primary" />
			</div>
		</div>
	</form>
	<div class="row">
		<div class="col-6">
			@if(session('status'))
				<div class="alert alert-success">{{ session('status')}}</div>
			@endif
		</div>
	</div>
	<div class="row">
			@foreach($photos as $photo)
				
		<div class="col-2">
			<img class="img-fluid img-thumbnail" src="{{ asset('/storage/'.$photo->photos)}}">

			<form action="{{ route('photo.destroy',$photo->id)}}" method="POST">
				@csrf
				@method('DELETE')
				<button type="submit" class="btn btn-danger btn-sm mb-3">Delete</button>
			</form>
			<a href="{{ route('photo.edit',$photo->id)}}" class="btn btn-warning btn-sm">Update</a>
		</div>
			@endforeach
	</div>
</div>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>