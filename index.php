<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Basic-Banking-App</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./css/style.css" />
  </head>
  <body>
    <div class="header">
      <nav class="navbar">
        <a href="./index.php" class="nav-logo">SparkBank.</a>
        <ul class="nav-menu">
          <li class="nav-item">
            <a href="./index.php" class="nav-link">HOME</a>
          </li>
          <li class="nav-item">
            <a href="./user.php" class="nav-link">USERS</a>
          </li>
          <li class="nav-item">
            <a href="./transactions.php" class="nav-link">TRANSACTIONS</a>
          </li>
        </ul>
        <div class="hamburger">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </div>
      </nav>
    </div>

    <div class="hero">
      <!-- Content section  -->
      <div class="hero__content">
        <h1 class="hero__title">
          Welcome to <span class="bank-name">SparkBank!</span>
        </h1>
        <h3 class="hero__subHeading">
          Explore the transaction proccess without any login or register
        </h3>
        <h5>-Developed By Pankaj Kulsange</h5>
        <br />
        <div class="hero__callToAction">
          <a href="./user.php">
            <button class="btn btn-primary btn-lg">Let's get Started >></button>
          </a>
        </div>
      </div>
      <!-- Image section  -->
      <div class="hero__image">
        <img class="hero__logo" src="./images/logo.png" alt="logo" />
      </div>
    </div>

    <script src="../js/script.js"></script>
  </body>
</html>
