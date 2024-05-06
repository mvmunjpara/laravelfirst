<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center">Student Join</h1>
 
    <table class="table">
      <thead>
        <th>ID</th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>AGE</th>
        <th>CITY</th>
      </thead>
      <tbody>
        @foreach($students as $student)
        <tr>
          <td>{{$student->id}}</td>
          <td>{{$student->name}}</td>
          <td>{{$student->email}}</td>
          <td>{{$student->age}}</td>
          <td>{{$student->city}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>