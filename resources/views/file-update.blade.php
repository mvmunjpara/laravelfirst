<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>File Update</title>
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
	<form action="{{ route('photo.update',$photo->id)}}" method="POST" enctype="multipart/form-data">
		@csrf
		@method('put')
		<div class="row">
			<div class="col-3">
				<img id="output" class="img-responsive img-fluid img-thumbnail" src="{{ asset('/storage/'.$photo->photos)}}">
			</div>
			
			<div class="col-9">
				<input type="file" onchange="document.querySelector('#output').src=window.URL.createObjectURL(this.files[0])" name="photo" accept=".jpg,.png,.jpeg">
				@error('photo')
				<div class="alert alert-danger mb-1 mt-2">{{$message}}</div>
				@enderror
			</div>
			<div class="col-12 mt-5">
				<input type="submit" value="Update" class="btn btn-sm btn-primary" />
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

</div>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>