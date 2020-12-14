<nav class="navbar navbar-expand-lg navbar-light bg-light navContainer">

  <!-- Toggle -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- LOGO -->
  <a class="navbar-brand" href="index.php">BeautyBuy</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">

    <!-- Nav Links -->
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

      <!-- New Arrivals Link -->
      <li class="nav-item">
        <a class="nav-link" href="">New Arrivals</a>
      </li>

      <!-- Browse Link -->
      <li class="nav-item">
        <a class="nav-link" href="index.php?page=browse">Browse</a>
      </li>

    </ul>
    
    <!-- Search Bar & Button -->
    <!-- <form class="form-inline my-2 my-lg-0 mr-2">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->

    <?php
		if (isset($_COOKIE['loggedIn'])) {
    /*
     * logged in, display option to logout
    */
		?>
    <ul class="nav navbar-nav navbar-right">

      <!-- Account Link -->
      <li class="nav-item">
        <a class="nav-link" href="index.php?page=account">Account</a>
      </li>

      <!-- Account Link -->
      <li class="nav-item">
        <a class="nav-link" href="index.php?page=dashboard">Dashboard</a>
      </li>

      <!-- Logout Link -->
      <li class="nav-item">
        <a class="nav-link" href="index.php?page=signout">Sign out</a>
      </li>

    </ul>
		<?php
		} else {
    /*
     * Not logged in, display links to sign in and sign up
    */
		?>

    <ul class="nav navbar-nav navbar-right">

      <!-- Sign in Link -->
      <li class="nav-item">
        <a class="nav-link" href="index.php?page=signin">Sign in</a>
      </li>

      <!-- Sign up Link -->
      <li class="nav-item ">
        <a class="nav-link" href="index.php?page=signup">Sign up</a>
      </li>

    </ul>

    <?php
    }
		?>

  </div>

</nav>