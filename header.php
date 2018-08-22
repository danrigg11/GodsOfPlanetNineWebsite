<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body>

    <nav class="navbar navbar-expand-xs navbar-light bg-light mb-4 shadow-sm">
    <a class="navbar-brand" href="index.php"><h1>Gods of Planet Nine</h1></a>
    <div class="">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>

    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php"><h3>Home</h3></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="rules.php"><h3>Rules</h3></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="nextseason.php"><h3>Current Score</h3></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Applications.php"><h3>Submit a score</h3></a>
        </li>
        <?php
          if (isset($_SESSION['u_id'])) {
            echo '<li class="inline-flex">
                <a class="nav-link text-success" href="adminpage.php"><h3>Admin page</h3></a>
            </li>';
          }
        ?>
        <?php
            if (isset($_SESSION['u_id'])) {
              echo '<form action="includes/logout.inc.php" method="POST">
                <button type="submit" name="submit" class="btn btn-sm btn-dark">Logout</button>
              </form>';
            } else {
              echo '<form action="includes/login.inc.php" method="POST">
                <input type="text" name="uid" placeholder="Username/ e-mail">
                <input type="password" name="pwd" placeholder="Password">
                <button type="submit" name="submit" class="btn btn-sm btn-dark">Login</button>
              </form>';
            }
        ?>
      </ul>
    </div>
  </nav>
