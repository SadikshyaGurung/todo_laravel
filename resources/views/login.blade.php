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
.wrapper{
  width: 300px;
  background-color:white;
  border-radius: 8px;
  padding: 60px;
  border: 1px solid rgba(255, 255, 255, 0.5);
  box-shadow: 5px 5px 5px 5px #888888;
  border-radius: 10px;
}
form {
  display: flex;
  flex-direction: column;
}
h1 {
    font-family: serif;
    color: brown;
    padding: 3px;
    position: center;
    top: 280px;
    width: 100%;
}
.container {
  position: relative;
  margin: 15px 0;
}

/* input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
} */
button {
  
  padding:10px;
  margin:10px;
  
  border-radius:10px;
  cursor: pointer;

}
button:hover {
  color: #fff;
  border-color: #fff;
  background: rgba(28, 27, 83, 0.15);
}
</style>
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
    <div class="wrapper">
        <form method="POST" action="/login">
          @csrf
          <div class=h1>
            <h1>Sign In Form</h1>

          </div>
            <div class="container">
      <label for="email">Email or Phone Number</label><br>
      <input type="text" placeholder="Enter Email or Phone Number" name="email" id="email" required>
        <br>
        <br>
      <label for="psw">Password</label><br>
      
      <input type="password" placeholder="Enter Password" name="password" id="password" required>
      <br><br>

      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>

        </form>
@endsection