<nav class="navbar navbar-dark bg-dark">

    <a class="navbar-brand" href="home.php">

      <img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
    </a>

    <ul class="navbar-nav">

      <li class="nav-item" style="color: white;">
        <?php print_r($_SESSION['email']); ?>
      </li>
      
      <li class="nav-item">
        <a href="logoff.php" class="nav-link">SAIR</a>
      </li>
    </ul>
</nav>

