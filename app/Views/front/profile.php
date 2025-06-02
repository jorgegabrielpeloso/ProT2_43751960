<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Mi Perfil - Fútbol Retro Shop</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1 class="text-center">Bienvenido a tu Perfil</h1>
    <p class="text-center">¡Hola, <?= session('nombre') . ' ' . session('apellido') ?>! Has iniciado sesión con <?= session('email') ?>.</p>
    <div class="text-center mt-4">
        <a href="<?= base_url('/logout') ?>" class="btn btn-danger">Cerrar sesión</a>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
