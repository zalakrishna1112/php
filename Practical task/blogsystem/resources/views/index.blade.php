<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>BLOG SYSTEM</title>
</head>
<body>
    <div class="container col-md-6">
        <h1 class="text-center">ADD BLOG</H1>
    </br>
        <form action="" method="post" enctype="multipart/form-data">
        
            <div class="forms-groups">
            @csrf
                <label>title</label>
                <input type="text" name="name" class="form-control">
            </div>
        </br>
            <div class="form-group">
                <textarea name="description" id="" cols="30" rows="5" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <input type="hidden" value="{{session()->get('userid')}}" name="user_id">
            </div>
</br>
            <div class="form-group">
                <input type="file" name="file" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-warning my-3">
            </div>
            
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>