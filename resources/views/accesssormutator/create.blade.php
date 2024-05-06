<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Add Accessor Mutator</title>
	<link rel="stylesheet" href="">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
	
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="text-center bg-light">
					<h1>Eloquent CRUD</h1>
					<h4>Add User </h4>
				</div>
				<form action="{{route('accessorsmutators.store')}}" method="POST">
					@csrf
				  <div class="mb-3">
				    <label for="user_name"  class="form-label">User name</label>
				    <input type="text" name="user_name" class="form-control" id="user_name">
				  </div>
				  @error('user_name')
					    <div class="text-danger">{{ $message }}</div>
				  @enderror
				  <div class="mb-3">
				    <label for="email" class="form-label">Email</label>
				    <input type="email" name="email" class="form-control" id="email">
				  </div>
				  @error('email')
					    <div class="text-danger">{{ $message }}</div>
				  @enderror
				  <div class="mb-3">
				    <label for="password" class="form-label">Password</label>
				    <input type="password" name="password" class="form-control" id="password" >
				  </div>
				  @error('password')
					    <div class="text-danger">{{ $message }}</div>
				  @enderror
				  <div class="mb-3">
				    <label for="dob" class="form-label">Date of birth</label>
				    <input type="date" name="dob" class="form-control" id="dob" >
				  </div>
				  @error('dob')
					    <div class="text-danger">{{ $message }}</div>
				  @enderror
				   <div class="mb-3">
				    <label for="salary" class="form-label">Salary</label>
				    <input type="number" name="salary" class="form-control" id="salary" >
				  </div>
				@error('salary')
					    <div class="text-danger">{{ $message }}</div>
				  @enderror
				  
				  <button type="submit" class="btn btn-primary">Submit</button>
				  <a href="{{ url('accessorsmutators')}}" class="btn btn-info">Back</a>
				</form>
				
			</div>
		</div>
	</div>




	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>