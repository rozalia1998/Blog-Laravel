<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        label{
            display:inline-block;
            width:100px;
            font-size:20px;
        }
        #edit{
            color:white;
            font-size:18px;
            background-color:#04AA6D;
            padding: 5px 20px;
            margin: 8px 0;
        }
        input:not([type='submit']){
            width:300px;
        }
        span{
            color:red;
            margin-bottom:10px;
        }
    </style>
</head>
<body>
    <center>
        <h1>Edit User</h1></br>
        <form method="post" action="{{ route('users.update', $user->id) }}">
            @csrf
            @method('PUT')
            <label for='name'>Name</label>
            <input type='text' name='name' value="{{ $user->name}}"><br><br>
            <label for='email'>Email</label>
            <input type='email' name='email' value="{{ $user->email}}"><br><br>
            <label for='password'>Password</label>
            <input type='password' name='password' value="{{ $user->password}}"><br><br>
            <input type='submit' id='edit' value='edit'>
        </form>
    </center>
</body>
</html>