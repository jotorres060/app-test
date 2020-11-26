<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
    <meta name="author" content="Jorge Torres">
    <title>APP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <x-alert />

    <div class="container my-5">
        @yield ('content')
    </div>

    <div class="container">
        <hr>
        <footer class="text-center text-muted">
            Desarrollado por <br> Jorge Torres
        </footer>
    </div>
</body>
</html>
