<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('css')
    <title>Performance</title>
</head>

<body>
    @include('pm/navbar')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mt-4 mx-auto">
                <table class="table ">
                    <thead class="thead-dark">
                        <th>Name</th>
                        <th>Role</th>
                        <th>Performance</th>
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
                                {{ $user->performance }}
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
