<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ciuff Ciuff mf</title>
</head>
<body>
    @foreach ( $trainsToday as $train)
        <h1>{{$train}}</h1>
    @endforeach
<h1>{{$currentDate}}</h1>
</body>
</html>
