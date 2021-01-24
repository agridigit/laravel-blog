<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
</head>
<body>

<h1>List of Posts</h1>

<ul >
    @foreach($posts as $post)
    <li >{{$post->title}}</li>
        <p>{{$post->description}}</p>
    @endforeach

</ul>

</body>
</html>
