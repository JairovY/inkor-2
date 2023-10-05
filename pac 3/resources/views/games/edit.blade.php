<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit {{ $game->title }}</title>
</head>
<body>
    <h1>Edit {{ $game->title }}</h1>
    <form action="{{ route('games.update', $game) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label>Title: <input type="text" name="title" value="{{ $game->title }}" required></label><br>
        <label>Genre: <input type="text" name="genre" value="{{ $game->genre }}" required></label><br>
        <label>Platform: <input type="text" name="platform" value="{{ $game->platform }}" required></label><br>
        <label>Release Date: <input type="date" name="release_date" value="{{ date('Y-m-d', strtotime($game->release_date)) }}" required></label><br>
        <label>Image URL: <input type="text" name="image"></label><br>
        <label>Description: <textarea name="description">{{ $game->description }}</textarea></label><br>
        <button type="submit">Update Game</button>
    </form>
</body>
</html>
