<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('css')

    <title>Update User</title>
</head>
@include('admin/navbar');

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-4 mx-auto">
                <form method="POST" action="/admin/update">
                    @csrf
                    <div class="text-center">
                        <h2>Update User </h2>
                    </div>
                    <input type="hidden" name="id" value="{{ $user->id }}">
                    <div class="form-group">
                        <label for="name">User Name </label><br>
                        <input type="text" class="form-control" name="name" value="{{ $user->name }}">
                    </div>
                    <div class="form-group">
                        <label for="email">User Email </label><br>
                        <input type="text" name="email" class="form-control" value="{{ $user->email }}">
                    </div>
                    <div class="form-group">
                        <label for="role">Role </label><br>
                        <select name="role" class="form-control">
                            <option value="Tester" @if ($user->role == 'Tester') : selected @endif>
                                Tester
                            </option>
                            <option value="Devloper"@if ($user->role == 'Developer') : selected @endif>
                                Devloper
                            </option>
                            <option value="Project Manager" @if ($user->role == 'Project Manager') : selected @endif>
                                Project Manager
                            </option>
                        </select>
                    </div>
                    <button class="btn btn-primary" name="insert">Update User</button>
                </form>
            </div>
        </div>
    </div>
    @include('js')

</body>

</html>
