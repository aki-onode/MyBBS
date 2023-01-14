<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>MyBBS</title>
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
</head>

<body>
    <div class="container">
        <div class="back-link">
            &laquo; <a href="{{ route('posts.index') }}">Back</a>
        </div>
        <h1>{{ $post }}</h1>
    </div>

</body>

</html>
