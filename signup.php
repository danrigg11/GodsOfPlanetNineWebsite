<?php include 'header.php' ?>
<?php include_once 'includes/dbh.php' ?>


<div class="container">
  <div class="text-center">
    <div class="row">
      <div class="col">

      </div>
      <div class="col-6">
        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>


        <form class="signup-form" action="includes/signup.inc.php" method="POST">
          <input type="text" name="first" class="form-control mb-1" placeholder="Firstname">
          <input type="text" name="email" class="form-control mb-1" placeholder="email">
          <input type="text" name="uid" class="form-control mb-1" placeholder="Username">
          <input type="password" name="pwd" class="form-control mb-1" placeholder="Password">
          <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign up</button>
        </form>


      </div>
      <div class="col">

      </div>
    </div>


  </div>
</div>




<?php include 'footer.php' ?>
