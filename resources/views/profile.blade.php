<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('css')
    <title>Show {{ Auth::guard('web')->user()->role }}</title>
</head>

<body>
    @if (Auth::guard('web')->user()->role == 'Tester')
        @include('tester/navbar');
    @endif
    @if (Auth::guard('web')->user()->role == 'Project Manager')
        @include('pm/navbar');
    @endif
    @if (Auth::guard('web')->user()->role == 'Developer')
        @include('developer/navbar');
    @endif
    <div class="text-center">
        <br>
        <h2> {{ Auth::guard('web')->user()->role }} Data </h2>
        <br> <br>
    </div>
    <section class="d-flex justify-content-center">
        <div class="col-lg-8 ">
            <div class="card mb-5">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Full Name</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">{{ Auth::guard('web')->user()->name }}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Email</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">{{ Auth::guard('web')->user()->email }}</p>
                            </p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Role</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">{{ Auth::guard('web')->user()->role }}</p>
                        </div>
                    </div>
                    @if (Auth::guard('web')->user()->role != 'Project Manager')
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Performance</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ Auth::guard('web')->user()->performance }}</p>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
    @include('js');
</body>

</html>
