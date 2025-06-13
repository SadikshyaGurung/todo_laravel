<!DOCTYPE html>
<html lang="en">
<head>
   <title>TODO APP</title>
   <link rel="stylesheet" type="text/css" href=".css/home.css">
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
        position: absolute;
        top: 210px;
        width: 100%;
    }

    .box {
        border: 2px solid light blue;
        padding: 20px;
        width: 250px;
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
        text-decoration:none;
    }
</style>

</head>
<body>
    <h1 class="title">TO-DO LIST </h1>
    <div class="container" >
        <div class="box">
         <div class="todolist">
            <label for="first">Drinking water</label>
            <button value="delete" id="delete" ><a href="delete">delete</button>
            <button value="save" id="save">
            <a href="./">save</button>
         </div>
        <div class="todolist">
            <label for="second">Exercising</label>
            <button value="delete" id="delete" ><a href="delete">delete</button>
            <button value="save" id="save">
            <a href="./">save</button>
        </div>
        <div class="todolist">
            <label for="third">Reading a book</label>
            <button value="delete" id="delete" ><a href="delete">delete</button>
            <button value="save" id="save">
            <a href="./">save</button>
        </div>
        <div class="todolist">
            <label for="fourth">Eating breakfast</label>
            <button value="delete" id="delete" ><a href="delete">delete</button>
            <button value="save" id="save">
            <a href="./">save</button>
            
        </div>
        <div class="todolist">
            <label for="fifth">Meditation</label>
            <button value="delete" id="delete" ><a href="delete">delete</button>
            <button value="save" id="save">
            <a href="./">save</button>
        </div>
    </div>
 </div>
        


 </div>

</body>
</html>