<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('css')
    <title>Login</title>
</head>

<body>
    <h1 class="text-center">Login </h1>
    <div class="container col-6">
        <div class="card card-password">
            <div class="card-body">
                <form action="loginrequest" method="POST" >
                    @csrf
                    <div class="form-group">
                        <label for=""> Email : <span class="text-danger">{{$color[0]}}</span></label>
                        <input style="border:1px solid {{$color[1]}} " class="form-control" type="text"
                            name="email">
                    </div>
                    <div class="form-group">
                        <label for=""> Password <span class="text-danger">{{$color[0]}}</span></label>
                        <input style="border:1px solid {{$color[1]}} " class="form-control" type="password"
                            name="password">
                    </div>

                    <button name="login" class="btn btn-info"> login </button>

                </form>
            </div>
        </div>
    </div>
    @include('js')

</body>

</html>
