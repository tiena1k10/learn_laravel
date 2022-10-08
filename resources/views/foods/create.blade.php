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
    <h1>Create food for today</h1>    
    <form action="/foods" method="POST">
        @csrf
        <input 
          class = "form-control"
          type="text"
          name="name"
          placeholder="Enter food's name"
        >
        <input 
          class = "form-control"
          type="text"
          name="description"
          placeholder="Enter food's description"
        >
        <input 
          class = "form-control"
          type="text"
          name="count"
          placeholder="Enter food's count"
        >
        <button class ="btn btn-primary" type ="submit">create</button>
    </form>
@endsection