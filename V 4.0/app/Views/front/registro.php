<form method="post" action="<?php echo base_url('/enviarregistro'); ?>">
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4" style="width: 25rem;">
            <h2 class="text-center">Registro</h2>
            <form method="post" action="<?php echo base_url('/registrar'); ?>" class="needs-validation" novalidate>
                <div class="mb-3">
                    <label for="username" class="form-label">Nombre de usuario</label>
                    <input type="text" class="form-control" id="username" placeholder="Ingrese su nombre" required>
                    <div class="invalid-feedback">Este campo es obligatorio.</div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Correo electrónico</label>
                    <input type="email" class="form-control" id="email" placeholder="Ingrese su correo" required>
                    <div class="invalid-feedback">Ingrese un correo válido.</div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="password" placeholder="Ingrese su contraseña" required>
                    <div class="invalid-feedback">Debe ingresar una contraseña.</div>
                </div>
                <div class="mb-3">
                    <label for="confirmPassword" class="form-label">Confirmar contraseña</label>
                    <input type="password" class="form-control" id="confirmPassword" placeholder="Repita su contraseña" required>
                    <div class="invalid-feedback">Las contraseñas deben coincidir.</div>
                </div>
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary w-50">Registrarse</button>
                    <button type="button" class="btn btn-secondary w-50" onclick="window.location.href='index.php'">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        (function () {
            'use strict';
            var forms = document.querySelectorAll('.needs-validation');
            Array.prototype.slice.call(forms).forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        })();
    </script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
