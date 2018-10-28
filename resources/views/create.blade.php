<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ini Halaman Create</title>
</head>
<body>
    <h1>Ini Halaman Create</h1>

    <form action="{{route('post.store')}}" method="POST">
        {{ csrf_field() }}
        <label>Title</label> <input type="text" name="title"><br>
        <label>Body</label> <textarea name="body" id="body" cols="30" rows="10"></textarea><br>
        <button type="submit">Simpan</button><br>
    </form>

    <h2>Ke Halaman Show <a href="{{route('post.show', 10)}}">Disini</a></h2>
</body>
</html>