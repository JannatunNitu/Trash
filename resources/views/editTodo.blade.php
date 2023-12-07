<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
    <style>
        .todo-app{
    width: 100%;
    max-width:540px;
    background: #fff;
    margin: 100px auto 20px;
    padding: 40px 30px 70px;
    border-radius: 10px;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
}
.todo-app h3{
    font-size: 30px;
    font-weight: 700;
    display: flex;
    color: #002765;
    margin-bottom: 20px;
}
.todo-app span{
    margin-left: 10px;
    font-size: 20px;
    margin-top: 10px;
}
.input{
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: #edeef0;
    border-radius: 30px;
    padding-left: 20px;
    margin-bottom: 25px;
}
.input input{
    flex: 1;
    border: none;
    outline: none;
    background: transparent;
    padding: 10px;
    font-size: 14px;
    font-weight: 400;
}

.input button{
    border: none;
    outline: none;
    padding: 16px 50px;
    background-color: #DC8686;
    color: #fff;
    font-size: 14px;
    font-weight: 400;
    cursor: pointer;
    border-radius: 40px;
    margin-left: 180px;
}
    </style>
</head>
<body>
    <div class="container">
        <div class="todo-app">
            <h3>To-do App <span><i class="fa-solid fa-table-list"></i></span></h3>
            <div class="input">
               <form action="{{ route('update',$editTodos->id) }}" method="post">
               @csrf
               <input value="{{ $editTodos->title }}" name="title" type="text" placeholder="Edit your text">
                <button>Update</button>
                
               </form>
               
            </div>
    </div>
</body>
</html>