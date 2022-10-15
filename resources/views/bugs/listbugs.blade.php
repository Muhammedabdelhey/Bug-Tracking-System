<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('css')
    <title>Bugs</title>
</head>

@include($data[1] . '/navbar');

<body>
    <div class="text-center">
        <br>
        <h2> All Bugs </h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 mt-4 mx-auto">
                <table class="table ">
                    <thead class="thead-dark">
                        <th>Name</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>Action</th>
                        @if ($data[1] == 'developer')
                            <th></th>
                        @endif
                    </thead>
                    @foreach ($data[0] as $bug)
                        <tr>

                            <td>
                                {{ $bug->bug_name }}

                            </td>

                            <td>
                                {{ $bug->type }}

                            </td>
                            <td>
                                {{ $bug->status }}
                            </td>
                            <td>
                                <a class="btn btn-info" href='{{ url("$data[1]/showbug/$bug->id") }}'>Show</a>
                            </td>
                            @if ($data[1] == 'developer')
                            <td>
                            <a class="btn btn-info" href='{{ url("$data[1]/solvebug/$bug->id") }}'>Solve</a>
                            </td>
                            @endif
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    @include('js')
</body>

</html>
