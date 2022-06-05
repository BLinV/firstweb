<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="css/app.css"  media="screen"/> -->
    <style>
        .activo a {
            color: red;
            text-decoration: under
        }
    </style>
    <title>@yield('title')</title>
</head>

<body>

    <nav>
        @include('partials.navbar')
    </nav>
    @yield('content')
    <div>
        @include('partials.footer')
    </div>

</body>

</html>