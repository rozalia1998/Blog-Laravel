<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table{
            margin:20px 0;
        }
        table,tr,td{
            border:1px solid black;
            text-align:center;
        }
        tr,td{
            padding:5px;
        }
        form{
            display:inline-block;
        }
        a{
            text-decoration:none;
        }
    </style>
</head>
<body>
    <center>
        <h1>All Posts</h1><br>
        <a href={{ route('posts.create') }}>Create Post</a>
        <table>
            <tr>
                <td>Title</td>
                <td>Description</td>
                <td>Published By</td>
                <td cols='2'>Actions</td>
            </tr>
            @foreach ($posts as $post)
            <tr>
                <td>{{ $post->title }}</td>
                <td> {{ $post->desc }} </td>
                <td> {{ $post->user->name }}</td>
                
                 <td cols='4'>
                <a href={{ route('posts.edit', $post->id) }}>edit</a>
                 <form method="POST" action="{{ route('posts.destroy', $post->id) }}">
                 @csrf
                 @method('DELETE')
                 <button type="submit">Delete</button>
                 </form>
             </td>
            </tr>
             @endforeach
        </table>
        <a href={{ route('users.index') }}>Go Back</a>
    </center>
</body>
</html>