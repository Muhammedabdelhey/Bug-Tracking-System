<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('css')
    <title>Add Bug</title>
</head>

<body>
    @include('tester/navbar');
    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-4 mx-auto">
                <form method="POST" action="/tester/storebug" enctype="multipart/form-data">
                    @csrf
                    <div class="text-center">
                        <h2>Add Bug </h2>
                    </div>

                    <div class="form-group">
                        <label for="name"> Name </label><br>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label for="type">Type </label><br>
                        <input type="text" name="type" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="priority">Priority</label><br>
                        <input type="number" name="priority" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="image"> Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="project_id">Project </label><br>
                        <select name="project_id" class="form-control">
                            @foreach ($data[0] as $project)
                                <option value="{{ $project->id }}"> {{ $project->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="developer_id">Developer </label><br>
                        <select name="developer_id" class="form-control">
                            @foreach ($data[1] as $developer)
                                <option value="{{ $developer->id }}"> {{ $developer->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <button class="btn btn-primary" name="insert">Add Bug</button>
                </form>
            </div>
        </div>
    </div>

    @include('js')
</body>

</html>
