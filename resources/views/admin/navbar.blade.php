<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="/admin/showadmin">Profile <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                        aria-expanded="false">
                        Users
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="/admin/listusers">List All Users</a>
                        <a class="dropdown-item" href="/admin/addusers">Create New User</a>
                    </div>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="/admin/listbugs">Show All Bugs <span class="sr-only">(current)</span></a>
                </li>
        </div>
        <form action="/logout">
            @csrf
            <button class="btn btn-danger">logout</button>
        </form>
    </nav>
</header>
