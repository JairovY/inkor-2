<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Games List</title>
</head>
<body>
    <h1>Video Games List</h1>
    <a href="{{ route('games.create') }}">Add New Game</a>
    <ul>
        @foreach($games as $game)
            <li>
                <a href="{{ route('games.show', $game) }}">{{ $game->title }}</a>
            </li>
        @endforeach
    </ul>
</body>
</html>
