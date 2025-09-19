<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О нас</title>
</head>
<body>
    <p>О нас</p>
    <p>{{ $adress }}</p>
    @foreach($data as $item)
    <p>{{ $item }}</p>
    @endforeach
</body>
</html>