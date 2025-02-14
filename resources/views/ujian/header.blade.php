<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="#">MyApp</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li><a href=" {{ route('my.nama') }}">Nama</a></li>
            <li><a href=" {{ route('my.asal') }}">Asal</a></li>
            <li><a href=" {{ route('my.prodi') }}">Prodi</a></li>
            <li><a href=" {{ route('my.angkatan') }}">Angkatan</a></li>
            </ul>
        </div>
    </div>
</nav>