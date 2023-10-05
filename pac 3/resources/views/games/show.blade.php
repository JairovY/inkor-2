<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $game->title }}</title>
</head>
<body>
    <h1>{{ $game->title }}</h1>
    <p>Genre: {{ $game->genre }}</p>
    <p>Platform: {{ $game->platform }}</p>
    <p>Release Date: {{ $game->release_date }}</p>
    <img src="{{ asset('storage/' . $game->image) }}" alt="{{ $game->title }}">
    <p>{{ $game->description }}</p>
    <a href="{{ route('games.edit', $game) }}">Edit</a>
    <form action="{{ route('games.destroy', $game) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
</body>
</html>
