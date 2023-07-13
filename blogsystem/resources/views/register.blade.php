<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <h1 class="text-center">Register form</h1>
        <form action="{{url('/register')}}" method="post" enctype="multipart/form-data">
            @csrf
            <label>Name</label>

            <div class="form-groups">
                <input type="text" name="name" class="form-control" placeholder="enter your name">
            </div>
            <div class="form-group">
                <label>EMAIL</label>
                <input type="text" name="email" placeholder="enter your email" class="form-control">
            </div>
        </BR>
            <div class="form-group">
                <textarea name="address" id="" cols="30" rows="5" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label>USER NAME:</label>
                <input type="text" name="unm" class="form-control" placeholder="enter your username">
            </div>
            <div class="form-group">
                <label>PASSWORD:</label>
                <input type="password" name="pass" class="form-control" placeholder="enter your password">
            </div>
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
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-primary my-3">
            </div>
        </form>
    </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>