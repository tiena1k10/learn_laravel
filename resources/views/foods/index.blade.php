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
        <h4><a href="/foods/{{$food->id}}/edit">edit</a></h4>
        <form action="foods/{{$food->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit"> Delete </button>
        </form>
        <h1>===========================</h1>
    @endforeach
@endsection