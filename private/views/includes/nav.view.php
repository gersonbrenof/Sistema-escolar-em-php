
<style>
    nav ul li a:hover{
        background-color: blue !important;
    }
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light p-2">
<img src="https://logospng.org/download/php/logo-php-512.png" alt="" class=" d-block mx-auto rounded-circle" style="width: 75px;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Minha Escola</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home">Painel</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="usuarios">Usuarios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="classes">Classes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="testes">Testes</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Usuarios
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="perfil">Perfil</a></li>
            <li><a class="dropdown-item" href="home">Painel</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="sair">Sair</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>