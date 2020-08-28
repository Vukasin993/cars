@extends('layouts.app')
@section('title', 'Cars')

@section('content')

<h1>Cars</h1>
<div class="row">
    <div class="col-md-4">
        <h5>Producer</h5>
    </div>
    <div class="col-md-4">
    <h5>Name</h5>
    </div>
    <div class="col-md-4">
    <h5>Number of doors</h5>
    </div>
</div>

@foreach ($cars as $car)
<div class="row">
    <div class="col-md-4">
        {{$car->title}}
    </div>
    <div class="col-md-4">
        {{$car->producer}}
    </div>
    <div class="col-md-4">
        {{$car->number_of_doors}}
    </div>
</div>


@endforeach
@endsection