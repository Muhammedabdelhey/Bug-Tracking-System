<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('css')
    <style>
        div {
            display: flex;
            justify-content: center;
        }

        img {
            width: 90%;
        }
    </style>
    <title>Bug Image</title>
</head>
@include($data[1] . '/navbar');

<body>
    <br>
    <h2 class="text-center"> Bug Image </h2>
    <br>
    <div>
        <img src="{{ url('public/Image/' . $data[0]) }}">
    </div>
    <br>
    <div>
        <form>
            <input class="btn btn-info" type="button" value="Back" onclick="history.back()">
        </form>
    </div>
    <br>
</body>

</html>
