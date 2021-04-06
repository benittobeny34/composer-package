<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create Post</title>
</head>
<body>
    <h3>Create post page</h3>
    <form action="{{route('post.store')}}" method="POST">
        <input type="text" placeholder="Enter some text" name="body" required>
        <input type="email" placeholder="to email" name="email" required>
        <button type="submit">submit</button>
    </form>
</body>
</html>
