@extends('layout.struttura')

@section('content')

<h1>Car of your dream</h1>

<h2>le nostre macchine</h2>

@foreach ($cars as $car)
<h3>{{$car->marca}}</h3>
<h4>{{$car->modello}}</h4>
<p>{{$car->targa}}</p>
<hr>
    
@endforeach
    
@endsection
