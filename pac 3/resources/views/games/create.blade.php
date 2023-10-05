<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Game</title>
</head>
<body>
    <h1>Add New Game</h1>
    <form action="{{ route('games.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label>Title: <input type="text" name="title" required></label><br>
        <label>Genre: <input type="text" name="genre" required></label><br>
        <label>Platform: <input type="text" name="platform" required></label><br>
        <label>Release Date: <input type="date" name="release_date" required></label><br>
        <label>Image URL: <input type="text" name="image"></label><br>

        <label>Description: <textarea name="description"></textarea></label><br>
        <button type="submit">Add Game</button>
    </form>
</body>
</html>
