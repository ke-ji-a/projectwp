<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #5C2C06;">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">CAPYBARA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto md-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
            </ul>
            <a href="{{ route('register') }}">
                <button class="btn btn-outline-secondary" type="button" >Register</button>
            </a>
            <a href="{{ route('login') }}">
                <button class="btn btn-outline-secondary ms-2" type="button" >Login</button>
            </a>

        </div>
    </div>
</nav>