@extends('layouts.master')

@section('content')
    <style>
        .form-control{
            margin: 20px ;
        }
        .btn-primary{
            margin: 0 0 20px 20px
        }
    </style>
    <h1>Edit food</h1>    
    <form action="/foods/{{ $food->id }}" method="POST">
        @csrf
        @method("PUT")
        <input 
          class = "form-control"
          type="text"
          name="name"
          placeholder="Enter food's name",
          value="{{$food->name}}"
        >
        <input 
          class = "form-control"
          type="text"
          name="description"
          placeholder="Enter food's description"
          value="{{$food->description}}"
        >
        <input 
          class = "form-control"
          type="text"
          name="count"
          placeholder="Enter food's count"
          value="{{$food->count}}"
        >
        <button class ="btn btn-primary" type ="submit">edit</button>
    </form>
@endsection