<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Title</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
          integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
@include("includes.navbar")
<br>
<div class="container">
    <h1 class="text-center">OCENE</h1>
    <br>
    <div class="row">
        <br>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Predmet</th>
                <th>Ocena</th>
                <th>Profesor</th>
            </tr>
            </thead>
            <tbody>
            @foreach( $ocene as $key=>$ocena)
                <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{ $ocena->predmet }}</td>
                    <td>{{ $ocena->ocena }}</td>
                    <td>{{ $ocena->profesor }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
        integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
        crossorigin="anonymous"></script>
</body>
</html>
