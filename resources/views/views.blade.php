
  <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <a href="{{route('show')}}">Show</a>
    <table class="table">
      <thead>
        <th>ID</th>
        <th>NAME</th>
        <th>EMAIL</th>
      </thead>
      <tbody>
      @foreach($data as $value)
        <tr>
          <td>{{$value->id}} </td>
          <td>{{$value->name}}</td>
          <td>{{$value->email}}</td>  
        
        </tr>
      @endforeach
      </tbody>
    </table>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>