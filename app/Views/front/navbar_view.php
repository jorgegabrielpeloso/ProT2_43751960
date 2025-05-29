<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= base_url('/') ?>">
            <img src="<?= base_url('assets/img/logo.png') ?>" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
            MiSitio
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link" href="<?= base_url('/') ?>">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('/quienes_somos') ?>">Quiénes Somos</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('/acerca_de') ?>">Acerca de</a></li>
            </ul>

            <form class="d-flex me-3" role="search">
                <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
                <button class="btn btn-outline-light" type="submit">Buscar</button>
            </form>

            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="<?= base_url('/registro') ?>">Registrarse</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('/login') ?>">Login</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-4">
