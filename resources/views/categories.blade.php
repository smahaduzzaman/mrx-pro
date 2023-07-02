<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categories</title>
</head>

<body>

    @foreach ($categories as $category)
        <h3>{{ $category->name }}</h3>
        @if ($category->latestPost)
            <p>Latest Post: {{ $category->latestPost->title }}</p>
        @endif
    @endforeach

</body>

</html>
