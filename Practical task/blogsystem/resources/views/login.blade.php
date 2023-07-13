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
     @elseif(session('fail'))  
     <div class="alert alert-danger">
     {{session('fail')}}
     </div>
     @endif

     
          <h1 class="text-bg-primary">EMPLOYEE Login System </h1>
        <form action="{{url('/loginauth')}}" method="post" enctype="multipart/form-data">
           @csrf
            <div class="form-group">
                
                <label>USER NAME:</label>
                <input type="text" name="unm"  value="{{old('unm')}}"class="form-control" placeholder="enter your username">
            </div>
            @error('unm')
            <div class="alert alert-danger">
                {{$message}}
            </div>
            @enderror

            <div class="form-group">
                <label>PASSWORD:</label>
                <input type="password" name="pass" class="form-control" placeholder="enter your password">
            </div>
        </br>
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-primary my-3">
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>