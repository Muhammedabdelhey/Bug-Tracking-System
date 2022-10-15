<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="/PM/profile">Profile <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" href="/PM/showperformance">Show Performance <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="/PM/listbugs">Show All Bugs <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
        <form action="/logout">
            @csrf
            <button class="btn btn-danger">logout</button>
        </form>
    </nav>
</header>
