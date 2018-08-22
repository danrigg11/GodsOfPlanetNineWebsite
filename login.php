<?php include 'header.php' ?>
<?php include_once 'includes/dbh.php' ?>


<div class="container">
  <div class="text-center">
    <div class="row">
      <div class="col">

      </div>
      <div class="col-6">
        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>


        <form class="form-signin" action="includes/login.inc.php" method="POST">
          <input type="text" name="uid" class="form-control mb-1" placeholder="Username">
          <label for="inputPassword" class="sr-only">Password</label>
          <input type="password" name="pwd" class="form-control" placeholder="Password">
          <div class="checkbox mb-3">
          </div>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        </form>


      </div>
      <div class="col">

      </div>
    </div>


  </div>
</div>




<?php include 'footer.php' ?>
