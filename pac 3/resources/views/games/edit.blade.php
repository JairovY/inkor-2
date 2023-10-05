<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <title>Edit {{ $game->title }}</title>
</head>
<body class="bg-light">
    <div class="container">
        <div class="py-5 text-center">
            <h2>Edit {{ $game->title }}</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('games.update', $game) }}" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $game->title }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="genre">Genre</label>
                        <input type="text" class="form-control" id="genre" name="genre" value="{{ $game->genre }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="platform">Platform</label>
                        <input type="text" class="form-control" id="platform" name="platform" value="{{ $game->platform }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="release_date">Release Date</label>
                        <input type="date" class="form-control" id="release_date" name="release_date" value="{{ date('Y-m-d', strtotime($game->release_date)) }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="image">Image URL</label>
                        <input type="text" class="form-control" id="image" name="image" value="{{ $game->image }}">
                    </div>
                    <div class="mb-3">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description">{{ $game->description }}</textarea>
                    </div>
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Update Game</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
