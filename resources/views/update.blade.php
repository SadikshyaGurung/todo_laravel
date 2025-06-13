@extends('partials.layout')
<style>
    body {
        text-align: center;
        background-color: beige;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        display:flex;
    }
    .title {
        font-family: serif;
        color: brown;
        padding: 3px;
        position: center;
        top: 280px;
        width: 100%;
    }
    
    .container2{
        border: 2px solid light blue;
        padding: 20px;
        width: 250px;
        border-radius: 10px;
        background: white;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        box-shadow: 5px 5px 5px 5px #888888;}
    .buttons{
        padding:10px;
        margin:10px;
    }
    .todo{
        padding:10px;
        margin:5px;
    }
    .priority{
        padding:10px;
        margin:5px;
    }
</style>
@section('title','TODO APP|ADD')
@section('content')
@if ($errors->any())
<div>
    <strong>Whoops!</strong>
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
        <li></li>
</ul>
</div>
@endif 
<div class="container2" >
    <form method="POST" action="/update/{{$todo['id']}}" enctype="multipart/form-data">
        @csrf
        @method("PUT")
        <input value="{{$todo['id']}}" name="id" hidden>
        <h1 class="title"> ADD </h1>
        <div class="todo">
        <label for="name">what to do:</label><br>
        <input type="text" id="name" name="name" value="{{$todo['name']}}" required><br>
        </div>
        <div class="priority">
        <label for="priority">write its priority:</label><br>
        <input type="number" id="priority" name="priority" value="{{$todo['priority']}}" required>
        </div>
        <div class="prio">
        <label for="image">Choose an img:</label>
        <input type="file" id="image" name="image" accept="image/*">
        </div>
        <div class="buttons">
        <button value="update" id="update" class="update">update</button>
        <button value="cancel" id="cancel" ><a href="./">cancel</button>
        </div>
        <img src="">
    </form>
</div>


@endsection
