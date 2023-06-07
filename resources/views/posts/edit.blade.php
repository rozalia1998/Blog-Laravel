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
            width:200px;
            font-size:20px;
        }
        #create{
            color:white;
            font-size:18px;
            background-color:#04AA6D;
            padding: 5px 20px;
            margin: 8px 0;
        }
        input{
            width:300px;
        }
        select{
            width:300px;
        }
        span{
            color:red;
            margin-bottom:10px;
        }
        textarea{
            width:300px;
            height:100px;
        }
    </style>
</head>
<body>
    <center>
        <h1>Edit Post Form</h1></br>
    <form method="post" action="{{ route('posts.update', $post->id) }}">
        @csrf
        @method('PUT')
        <label for="title"><b>Title</b></label>
        <input type="text" placeholder="Enter Your Post Title" name="title" value="{{ $post->title}}"><br><br>

        <label for="desc"><b>Description</b></label>
        <textarea placeholder="Enter description" name="desc" value="{{ $post->desc}}"></textarea><br><br>
        
        <label for="user_id"><b>Post Publisher:</b></label>
        <select id="user_id" name="user_id" required>
            <option value="">Select the Publisher</option>
            @foreach($users as $user)
            <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
        </select><br><br>

        <button type="submit" id="create" name="submit">Edit</button>
    </form>
    </center>
</body>
</html>