<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>buat postingan</title>
    <link href="{{asset('bootstrap-5/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="{{asset('bootstrap-5/js/bootstrap.bundle.min.js')}}" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
    <h2> buat postingan.</h2>
    <br>
    <form action="{{url('posts')}}" method="post" class="form-control">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">judul</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">konten</label>
            <textarea class="form-control" id="content" name="content" rows="3"></textarea>
        </div>
        <a href="{{url('posts')}}">< kembali</a>
        <button type="submit" class="btn btn-primary">buat</button>
    </form>
    </div>
   
</body>
</html>