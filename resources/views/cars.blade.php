<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>cars</title>
</head>
<style>
    a {text-decoration: none;}
    ul li {list-style-type: none};
</style>
<body>
    <h1>cars</h1>
    
@foreach ($cars as $car)
<ul>
    <li><a href="{{route('singleCar', ['id' => $car->id])}}">{{ $car->title }} <br>
    This is {{ $car->producer }} with {{ $car->number_of_doors }}
    </a></li>

</ul>
@endforeach

</body>
</html>