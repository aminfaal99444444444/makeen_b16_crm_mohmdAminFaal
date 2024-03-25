<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1>Edit posts</h1>
    <form action="/posts/edit/{{ $post->id }}" method="post">
        @csrf
        <input type="text" name="title" value="{{ $post->title }}"><br>
        <input type="text" name="name" value="{{ $post->name}}"><br>
        <textarea name="poststext" cols="30" rows="10">{{ $post->poststext }}</textarea><br>
        <input type="submit" value="ثبت">
    </form>

</body>

</html>
