<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</head>

<body class="bg-dark">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('dashboard') }}">Blogging</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('dashboard') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('blogs.create') }}">create blog</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">

        @if ($errors->all())
            <div class="alert alert-danger" role="alert">
                <h4 class="alert-heading">Errors!</h4>
                <ul>
                    @for ($i = 0; $i < count($errors->all()); $i++)
                        <li>{{ $errors->all()[$i] }}</li>
                    @endfor
                </ul>
            </div>
        @endif

        <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data" class="text-light">
            @csrf
            <div>
                <label for="title">title</label>
                <input type="text" id="title" value="{{ old('title') }}" name="title" class="form-control">
            </div>
            <div>
                <label for="excerpt">excerpt</label>
                <input type="text" id="excerpt" value="{{ old('excerpt') }}" name="excerpt" class="form-control">
            </div>
            <div>
                <label for="thumbnail">thumbnail</label>
                <input type="file" id="thumbnail" name="thumbnail" class="form-control">
            </div>
            <div>
                <label for="blog-body">blog body</label>
                <textarea name="blog-body" id="blog-body" cols="30" rows="10" class="form-control">{{ old('blog-body') }}</textarea>
            </div>

            <input type="submit" class="btn btn-primary mt-3">
        </form>
    </div>
</body>

</html>
