<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('css')

    <title>Show BUG</title>
</head>

<body>
    @include( $data[1].'/navbar');
    <br>
    <section class="d-flex justify-content-center">
        <div class="col-lg-8 ">
            <div class="card mb-5">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Bug Name</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">{{ $data[0]->bug_name }}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0"> Type</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">{{ $data[0]->type }}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Priority</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">{{ $data[0]->priority }}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Status</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">{{ $data[0]->status }}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Created_at</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">{{ $data[0]->created_at }}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Updated_at</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">{{ $data[0]->updated_at }}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Project Name </p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">{{ $data[0]->project_name }}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Developer</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">{{ $data[0]->developer_Name }}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Tester</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">{{ $data[0]->Tester_Name }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="d-flex justify-content-center ">
        <a class="btn btn-info" href="/{{$data[1]}}/bugimg/{{ $data[0]->img }}"> Show Image of Bug</a>
    </div>
    <br>
    @include('js')
</body>

</html>
