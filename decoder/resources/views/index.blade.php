<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/all.css') }}">

    <title>Decoder/Encoder</title>
</head>
<body>
<header class="marti">
<h2 class="text-center">Online decoder/encoder</h2>
</header>
<div class="container m">
<form method="GET" action="{{ route('decoder') }}">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="base64">Decode base64</label>
        <input type="text" class="form-control" id="base64" name="base64" placeholder="base64">
    </div>
    <button type="submit" class="btn btn-primary">Go</button>
    <div>{{ $text }}</div>
    </form>

    <form method="GET" action="{{ route('decoder') }}">
        {{ csrf_field() }}
    <div class="form-group">
        <label for="text_form">Encode base64</label>
        <input type="text" class="form-control" id="text_form" name="text_form" placeholder="text">
    </div>
    <button type="submit" class="btn btn-primary">Go</button>
    <div>{{ $base }}</div>
    </form>

    <form method="GET" action="{{ route('decoder') }}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="uue">Encode uue</label>
            <input type="text" class="form-control" id="uue" name="uue" placeholder="uue">
        </div>
        <button type="submit" class="btn btn-primary">Go</button>
        <div>{{ $text2 }}</div>
    </form>

    <form method="GET" action="{{ route('decoder') }}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="text_form2">Decode uue</label>
            <input type="text" class="form-control" id="text_form2" name="text_form2" placeholder="text">
        </div>
        <button type="submit" class="btn btn-primary">Go</button>
        <div>{{ $uue_answer }}</div>
    </form>

</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

