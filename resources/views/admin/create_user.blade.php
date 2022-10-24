<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('css')
    <title>Add User</title>
</head>
@include('admin/navbar');
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-4 mx-auto">
                <form method="POST" action="/admin/store">
                    @csrf
                    <div class="text-center">
                        <h2>Add User </h2>
                    </div>
                    
                    <div class="form-group">
                        <label for="name">User Name </label><br>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label for="email">User Email </label><br>
                        <input type="text" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="pass">User Password </label><br>
                        <input type="text" name="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="roleid">Role </label><br>
                        <select name="role" class="form-control">
                            <option value="Tester">
                                Tester
                            </option>
                            <option value="Developer">
                                Developer
                            </option>
                            <option value="Project Manager">
                                Project Manager
                            </option>
                        </select>
                    </div>
                    <button class="btn btn-primary" name="insert">Add User</button>
                </form>
            </div>
        </div>
    </div>
    @include('js')
</body>

</html>
