@extends('partials.layout')

<style>
    body {
        text-align: center;
        background-color: beige;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    .title {
        font-family: serif;
        color: brown;
        padding: 3px;
        position: CENTER;
        top: 200px;
        width: 100%;
    }

    .box {
        padding: 20px;
        width: 350px;
        border-radius: 10px;
        background: white;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        box-shadow: 10px 10px 8px 10px #888888;
    }

    .todolist {
        background: rgb(188, 190, 192);
        padding: 10px;
        display: flex;
        justify-content: space-between;
        border-radius: 10px;
        margin: 10px;
        width: 100%;
    }
    .buttons{
        display: flex;
    }
    .btn{
        background: lightgrey;
        border-radius: 3px;
        border: solid black 1px;
        height: 30px;
        width: 40px;
        top:80px;
    }
    img{
        width:40px;
        height:40px;
        border-radius:10px;
    }
    .next{
        justify-content:center;
        
    }
</style>
@section('title','TODO APP | Home')

@section('content')
<h1 class="title">TO-DO LIST </h1>
  <button class="btn" value="add" id="add"><a href="add">add</a></button>
      <form method="POST" action="logout">
            @csrf
            <button value="logout" id="logout">logout</button>
     
</form>
    <div class="container" >
     <div class="box">
            
            @foreach ($todos as $todo)
            
            <div class="todolist">
            <img src="{{ asset($todo['image'])}}" alt="img">
            <p class="todo_name">{{ $todo['name'] }}</p>
            <input type="checkbox" id="first">
            </div>
             <div class="buttons">
            <!-- <form method="POST" action="/update/{{$todo['id']}}">
            @csrf
            @method("put")
            <button value="update" id="update">update</button>
</form> -->
            <button value="update" id="update" class="update"> <a href="/update/{{$todo['id']}}">update</a></button>
            <form method="POST" action="/delete/{{$todo['id']}}">
                @csrf
                @method("DELETE")
            <button value="delete" id="delete">delete</button>

            
            </form>
            </div>
            @endforeach
          <div class="next">
            {{$todos->links()}}
</div> 
            
            
            
         
    </div>
        
</div>
@endsection