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
			<div class="col-sm-12">
				<div class="text-center bg-light">
					<h1>Eloquent CRUD</h1>
					<h4>All User Data</h4>
					@if(Session::has('message'))
					<p class="alert alert-info">{{ Session::get('message') }}</p>
					@endif
				</div>
				<div class="">
					<a href="{{route('accessorsmutators.create')}}" class="btn btn-success">Add New</a>
				</div>
				<table class="table table-striped">
				  <thead>
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">Username</th>
				      <th scope="col">Email</th>
				      <th scope="col">DOB</th>
				      <th scope="col">Salary</th>
				      <th scope="col">View</th>
				      <th scope="col">Delete</th>
				      <th scope="col">Update</th>
				    </tr>
				  </thead>
				  <tbody>
				   	@foreach($accessormutators as $accessormutator)
				    <tr>
				      <th scope="row">{{$accessormutator->id}}</th>
				      <th scope="row">{{$accessormutator->user_name}}</th>
				      <td>{{$accessormutator->email}}</td>
				      <td>{{$accessormutator->dob}}</td>
				      <td>{{$accessormutator->salary}}</td>
				      <td><a href="{{ route('accessorsmutators.view',$accessormutator->id)}}" class="btn btn-primary">View</a></td>
				      
					<td>
						<!-- <a href="{{ route('accessorsmutators.destroy',$accessormutator->id)}}" class="btn btn-danger">Delete</a> -->
						<form action="{{ route('accessorsmutators.destroy',$accessormutator->id)}}" method="POST">
							@csrf
							@method('delete')

							<input type="submit" class="btn btn-danger" value="Delete">
						</form>
					</td>

				      <td><a href="{{ route('accessorsmutators.edit',$accessormutator->id)}}" class="btn btn-warning">Update</a></td>
				    </tr>
				    @endforeach
				    
				  </tbody>
				</table>
			</div>
		</div>
	</div>




	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>