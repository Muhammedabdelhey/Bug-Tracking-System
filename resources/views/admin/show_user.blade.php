<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('css')

    <title>Show User</title>
</head>

<body>
    @include('admin/navbar');
    <div class="text-center">
        <br>
        <h2> User Data </h2>
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
                            <p class="text-muted mb-0">{{ $user->name }}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Email</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">
                            <p class="text-muted mb-0">{{ $user->email }}</p>
                            </p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">performance</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">{{ $user->performance }}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Role</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">{{ $user->role }}</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </section>
    <br>
    <div class="d-flex justify-content-center ">
        <a class="btn btn-danger mx-4" href='{{ url("admin/delete/$user->id") }}'>Delete</a>
        <a class="btn btn-info" href='{{ url("admin/edit/$user->id") }}'>Update</a>
    </div>
    @include('js')
</body>

</html>
