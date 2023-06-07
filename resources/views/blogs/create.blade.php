<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2>Add new blog</h2>
        <div class="card shadow">
            <div class="card-body">
                <form method="post" action="{{ route('blog.add') }}">
                    @csrf
                    <div class="form-group">
                        <label for="Title">Title</label>
                        <input type="text" class="form-control" id="Title" name="title" placeholder="Title">
                    </div>

                    <div class="form-group">
                        <label for="Title">Description</label>
                        <textarea name="description" class="form-control" id=""></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary mt-2">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
