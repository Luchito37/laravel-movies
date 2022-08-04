<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('./js/app.js') }}"></script>
</head>
<body>
<div class="my-container">

    @include('partials.sidebar')

    <main>
        <h1 class="p-3">
            @yield('page_title')
        </h1>

        <hr>

        @yield('page_content')
    </main>
</div>
</body>
</html>