<!--navegacion-->
<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand d-flex align-items-center" href="<?php echo base_url('principal')?>">
        <img src="assets/img/logo.png" alt="Logo" width="90" height="50" class="img-fluid me-2"/>
        <span class="fw-bold text-white">Truckers S.A</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="quienes_somos">Quienes Somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="acercade">Acerca de</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Clientes
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="registro">Registro</a></li>
            <li><a class="dropdown-item" href="login">Login</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="newlogin">Nuevo Usuario</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit">Búsqueda</button>
      </form>
    </div>
  </div>
</nav>

<script src="assets/js/bootstrap.bundle.min.js"></script>
