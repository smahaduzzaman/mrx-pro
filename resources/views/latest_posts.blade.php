<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latest Posts</title>
</head>

<body>

    @foreach ($categories as $category)
        <h2>Latest Post for Category: {{ $category->name }}</h2>
        @if ($category->latestPost)
            <h3>{{ $category->latestPost->title }}</h3>
            <p>{{ $category->latestPost->content }}</p>
        @else
            <p>No posts available for this category.</p>
        @endif
    @endforeach


</body>

</html>
