<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>cars</title>
</head>
<body>
    <h1>cars</h1>
    
@foreach ($cars as $car)
<p>{{ $car->title }}</p>
<p>
    This is {{ $car->producer }} with {{ $car->number_of_doors }}
    </p>
    @endforeach
</body>
</html>