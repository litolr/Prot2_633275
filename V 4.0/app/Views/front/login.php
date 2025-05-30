 <link href="assets/css/bootstrap.min.css" rel="stylesheet" >
<form method="post" action="<?php echo base_url('/enviarlogin'); ?>">
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4" style="width: 22rem;">
            <h2 class="text-center">Iniciar sesión</h2>
            <form>
                <div class="mb-3">
                    <label for="email" class="form-label">Correo electrónico</label>
                    <input type="email" class="form-control" id="email" placeholder="Ingrese su correo">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="password" placeholder="Ingrese su contraseña">
                </div>
                <button type="submit" class="btn btn-primary w-100">Ingresar</button>
                <button type="button" class="btn btn-secondary w-50" onclick="window.location.href='index.php'">Cancelar</button>
            </form>
        </div>
    </div>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
