<nav class="navbar navbar-expand-md navbar-dark" style="background-color: #7a7d7b;">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse navbar-body" id="navbarTogglerDemo03">
      <ul class="navbar-nav navbar-center mx-auto">
        <li class="nav-item text-center">
          <a class="nav-link" aria-current="page" href="?page=home"><i class="fas fa-home"></i> Beranda</a>
        </li>
        <li class="nav-item text-center">
          <a class="nav-link" aria-current="page" href="?page=paketwedding"><i class="fas fa-hand-holding-heart"></i> Paket Wedding</a>
        </li>
        <?php
        if (isset($_SESSION['level_user']) && isset($_SESSION['logged_stat'])) {
          $session = $_SESSION['level_user'];
          if ($session == "User") {
            echo "
            <li class='nav-item text-center'>
              <a class='nav-link' aria-current='page' href='?page=pemesanan'><i class='fas fa-shopping-cart'></i> Pemesanan</a>
            </li>
            ";
          }
        }
        ?>
        <li class="nav-item text-center">
          <a class="nav-link" aria-current="page" href="?page=about"><i class="fas fa-info-circle"></i> About</a>
        </li>
        <?php if (isset($_SESSION['level_user']) && isset($_SESSION['logged_stat'])) : ?>
          <?php $session = $_SESSION['level_user'] ?>
          <?php if ($session == "User" || $session == "Admin") : ?>
            <li class="nav-item text-center">
              <a class="nav-link" aria-current="page" href="php/logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
            </li>
          <?php endif ?>
        <?php else : ?>
          <li class="nav-item text-center">
            <a class="nav-link" aria-current="page" href="?page=login"><i class="fas fa-clipboard-list"></i> Login</a>
          </li>
        <?php endif ?>
      </ul>
    </div>
  </div>
</nav>