<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

  <title>Document</title>
</head>

<body>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">images</th>
        <th scope="col">name</th>
      <th scope="col">email</th>
        <th scope="col">id</th>

        



      </tr>
    </thead>
    <tbody>
      @foreach($data as $d)
      <tr>
        <td>{{$d->id}}</td>
        <td><img src="{{url('upload/user/'.$d->file)}}" width="100px" height="200px"></td>
        <td>{{$d->name}}</td>
        <td>{{$d->email}}</td>




        
        <td>
         <a href="{{url('/editprofile/'.$d->id)}}" class="btn btn-primary">EDIT</a>
         <a href="{{url('/display1/'.$d->id)}}" class="btn btn-danger">delete</a>
         <a href="{{url('/display1/'.$d->id)}}" class="btn btn-danger">{{$d->status}}</a>

        </td>




      </tr>
      @endforeach


    </tbody>
  </table>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>

</body>

</html>