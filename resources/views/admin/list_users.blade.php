<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('css')
    <title>All Users</title>
</head>
@include('admin/navbar');

<body>
    <div class="text-center">
        <br>
        <h2> All Users </h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 mt-4 mx-auto">
                <table class="table ">
                    <thead class="thead-dark">
                        <th>Name</th>
                        <th>Role</th>
                        <th>Action</th>
                    </thead>
                    @foreach ($users as $user)
                        <tr>

                            <td>
                                {{ $user->name }}

                            </td>

                            <td>
                                {{ $user->role }}

                            </td>
                            <td>
                                <a class="btn btn-info" href='{{ url("admin/showuser/$user->id") }}'>Show</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    @include('js')
</body>

</html>
