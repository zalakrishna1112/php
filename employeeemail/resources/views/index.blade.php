<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>

    <div class="container col-md-6 my-5 ">
    @if(session('sucess'))  
     <div class="alert alert-success">
     {{session('sucess')}}
     </div>
     @endif
          <h1 class="text-bg-primary">EMPLOYEE CRUD USING  Query Builder </h1>
        <form action="{{url('/')}}" method="post" enctype="multipart/form-data">
            <div class="form-group">
                @csrf
                <label>NAME:</label>
                <input type="text" name="name" id="" placeholder="enter your name" class="form-control">
            </div>
            @error('name')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <div class="form-group">
                <label>EMAIL</label>
                <input type="text" name="email" placeholder="enter your email" class="form-control">
            </div>
            @error('email')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </BR>
            <div class="form-group">
                <textarea name="address" id="" cols="30" rows="5" class="form-control"></textarea>
            </div>
            @error('address')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <div class="form-group">
                <label>USER NAME:</label>
                <input type="text" name="unm" class="form-control" placeholder="enter your username">
            </div>
            @error('unm')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <div class="form-group">
                <label>PASSWORD:</label>
                <input type="password" name="pass" class="form-control" placeholder="enter your password">
            </div>
            @error('pass')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </br>
            <div class="form-control">
                <label>gen:</label>
                <input type="radio" name="gen" value="male">male
                <input type="radio" name="gen" value="female">female
            </div>
            <div class="form-group">
              <label>file:</label>
              <input type="file" name="file" class="form-control">
            </div>
            @error('file')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-primary my-3">
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>