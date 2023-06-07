<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- <link rel="stylesheet" href="{{ asset('csss/style.css') }}"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="text-primary">Blog page</h1>
        <a href="{{ route('blog.create') }}" class="btn btn-primary">Add New</a>
        <div class="row">

            <div class="col-sm-12">
                <div class="card border-0 shadow">
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-warning">edit</a>
                  <a href="#" class="btn btn-danger">delete</a>
                </div>
              </div>
            </div>

            <div class="col-sm-12 mt-2">
              <div class="card border-0 shadow">
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-warning">edit</a>
                  <a href="#" class="btn btn-danger">delete</a>
                </div>
              </div>
            </div>

          </div>
    </div>

</body>
</html>
