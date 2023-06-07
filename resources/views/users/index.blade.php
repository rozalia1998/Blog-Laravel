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
        <h1>All Users</h1><br>
        <a href={{ route('users.create') }}>Create User</a><br>
        <a href="{{ route('posts.index') }}" class="btn-edit">Show Posts</a>
        <table>
            <tr>
                <td>Name</td>
                <td>Email</td>
                <td>Password</td>
                <td cols='4'>Actions</td>
            </tr>
            @foreach ($users as $user)
            <tr>
            <td>
                    <a href='Show/{{$user->id}}'>
                        {{ $user->name }}
                    </a>
                </td>
                {{-- <td>{{ $user->name }}</td> --}}
                <td> {{ $user->email }} </td>
                <td> {{ $user->password }} </td>
                 <td cols='4'>
                <a href={{ route('users.edit', $user->id) }}>edit</a>
                 <form method="POST" action="{{ route('users.destroy', $user->id) }}">
                 @csrf
                 @method('DELETE')
                 <button type="submit">Delete</button>
                 </form>
             </td>
            </tr>
             @endforeach
        </table>
    </center>
</body>
</html>