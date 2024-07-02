<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo APP_URL ?>body/">
        <img src="<?php echo APP_URL; ?>app/views/img/logo.png" alt="ImagenLogo">
    </a>
    <a class="nav-link text-white active" aria-current="page" href="<?php echo APP_URL ?>body/">LA'<span>s</span>  Pat<span>itas</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link text-white active" aria-current="page" href="<?php echo APP_URL ?>aboutUs/">¿Quienes somos?</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link text-white dropdown-toggle st1" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Mascotas
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="<?php echo APP_URL ?>donations/">Donar</a></li>
            <li><a class="dropdown-item" href="<?php echo APP_URL ?>adopt/">Adoptar</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
            <a class="nav-link text-white dropdown-toggle st1" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                ** User Name **
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="<?php echo APP_URL ?>userUpdate/">Mi cuenta</a></li>
                <li><a class="dropdown-item" href="<?php echo APP_URL ?>userPhoto/">Mi foto</a></li>
                <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="<?php echo APP_URL ?>logOut/" id="btn_exit">Salir</a></li>
          </ul>
        
      </form>
    </div>
  </div>
</nav>