<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        div{
            border:1px solid brown;
            margin-bottom: 10px;
        }
        
    </style>
</head>
<h1>Posts</h1>
@forelse ($posts as $post)
<div>
    <h2>{{ $post->title }}</h2>
    <p>{{ $post->desc}}</p>
</div>
@empty
        <p>There is no posts for this user</p>
@endforelse
