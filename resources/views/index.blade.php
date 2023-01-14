<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>MyBBS</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <h1>My BBS</h1>
        <ul>
            @forelse($posts as $post)
                <li>{{ $post }}</li>
            @empty
                <li>No posts yet!</li>
            @endforelse
        </ul>
    </div>

</body>

</html>
