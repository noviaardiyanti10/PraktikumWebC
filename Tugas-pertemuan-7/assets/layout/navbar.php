<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Universitas Udayana</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
          <?php if ($_SESSION) : ?>
                <a class="nav-link js-scroll-trigger" href="#">Selamat Datang, <?php echo $nama; ?></a>
            <?php endif ?>
      </li>
      <li class="nav-item">
         <?php if ($_SESSION) : ?>
          <a class="nav-link js-scroll-trigger" href="logout.php">Logout</a>
         <?php else : ?>
          <a class="nav-link js-scroll-trigger" href="login.php">Login</a>
         <?php endif ?>
      </li>
    </ul>
  </div>
</nav>