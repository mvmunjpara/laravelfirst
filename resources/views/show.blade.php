<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Hello, world!</h1>
    <h1 class="text-right"><a href="{{route('addstudent')}}">Add Student</a></h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
      <th scope="col">View</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $student)
    <tr>
      <th scope="row">1</th>
      <td>{{$student->id}}</td>
      <td>{{$student->name}}</td>
      <td>{{$student->email}}</td>
      <td><a href="{{ route('views',$student->id)}}">View</a></td>
      <td><a href="{{ route('edit',$student->id)}}">Edit</a></td>
      <td><a href="{{ route('delete',$student->id)}}">Delete</a></td>
    </tr>
    @endforeach


  </tbody>
</table>
    {{$data->links()}}









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>