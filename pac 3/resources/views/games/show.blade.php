<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <title>{{ $game->title }}</title>
</head>
<body class="bg-light">
    <div class="container">
        <div class="py-5 text-center">
            <h2>{{ $game->title }}</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4 shadow-sm">
                    <img src="{{ asset('storage/' . $game->image) }}" class="bd-placeholder-img card-img-top" alt="{{ $game->title }}">
                    <div class="card-body">
                        <p class="card-text">{{ $game->description }}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="{{ route('games.edit', $game) }}" class="btn btn-sm btn-outline-secondary">Edit</a>
                                <form action="{{ route('games.destroy', $game) }}" method="post" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-secondary">Delete</button>
                                </form>
                            </div>
                            <small class="text-muted">Genre: {{ $game->genre }}</small>
                            <small class="text-muted">Platform: {{ $game->platform }}</small>
                            <small class="text-muted">Release Date: {{ $game->release_date }}</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
