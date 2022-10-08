@extends('layouts.master')

@section('content')
    <h1>Foods for today</h1> 
    <h1><a href="foods/create">Create Food</a></h1>   
    @foreach ($foods as $food)
        <p>{{$food->name}}</p>
        <p>{{$food->count}}</p>
        <p>{{$food->description}}</p>
        <p>{{$food->created_at}}</p>
        <p>{{$food->updated_at}}</p>
        <h1>===========================</h1>
    @endforeach
@endsection