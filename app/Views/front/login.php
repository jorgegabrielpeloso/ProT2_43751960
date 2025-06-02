<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Iniciar sesión - Fútbol Retro Shop</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1 class="mb-3 text-center">Iniciar sesión</h1>

    <?php if(session()->getFlashdata('msg')): ?>
        <div class="alert alert-warning"><?= session()->getFlashdata('msg') ?></div>
    <?php endif; ?>

    <form action="<?= base_url('/login/auth') ?>" method="post" class="row g-3 justify-content-center">
        <div class="col-md-6">
            <label>Email</label>
            <input type="email" name="email" class="form-control" placeholder="nombre@ejemplo.com" required>
        </div>
        <div class="col-md-6">
            <label>Contraseña</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary">Ingresar</button>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
