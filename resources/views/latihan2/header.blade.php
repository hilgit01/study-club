<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="#">MyApp</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li><a href=" {{ route('dasboard') }}">Dasboard</a></li>
            <li><a href=" {{ route('daftar') }}">Daftar</a></li>
            </ul>
        </div>
    </div>
</nav>

<ul>
    <li><a href=" {{ route('dasboard') }}">Dasboard</a></li>
    <li><a href=" {{ route('daftar') }}">Daftar</a></li>
</ul>

