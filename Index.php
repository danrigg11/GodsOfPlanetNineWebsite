<?php include 'header.php' ?>

<?php include_once 'includes/dbh.php' ?>

<div class="card-deck mb-3 pl-3 pr-3 text-center">
  <div class="card mb-4 shadow-sm">
    <div class="card-header">
      <h4 class="my-0 font-weight-normal">Game Rules</h4>
    </div>
    <div class="card-body">
      <h1 class="card-title pricing-card-title">Rulebook</h1>
      <h2 class="card-title pricing-card-title mb-3">Copy <small class="text-muted"> 1.1</small></h2>
      <a href="rules.php" class="btn btn-block btn-outline-dark btn-lg" tabindex="-1" role="button" aria-disabled="true">Before You Start</a>
    </div>
  </div>
  <div class="card mb-4 shadow-sm">
    <div class="card-header">
      <h4 class="my-0 font-weight-normal">Countdown</h4>
    </div>
    <div class="card-body">
      <h1 class="card-title pricing-card-title">Season 1.2</h1>
      <!-- Display the countdown timer in an element -->
      <h2 id="demo" class="text-center mb-3 text-danger"></h2>
      <a href="nextseason.php" class="btn btn-lg btn-block btn-dark" tabindex="-1" role="button" aria-disabled="true">See Whats Next</a>
    </div>
  </div>
  <div class="card mb-4 shadow-sm">
    <div class="card-header">
      <h4 class="my-0 font-weight-normal">Current Score</h4>
    </div>
    <div class="card-body">
      <h1 class="card-title pricing-card-title text-primary">
        <?php
        $data = "1";
        $sql = "SELECT * FROM high_score where id=?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)){
          echo "SQL statment failed";
        } else {
          mysqli_stmt_bind_param($stmt, "s", $data);
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);

          while ($row = mysqli_fetch_assoc($result)) {
            echo $row['uid'];
          }
        }?>
      </h1>
      <h2 class="card-title pricing-card-title mb-3">
        <?php
        $data = "1";
        $sql = "SELECT * FROM high_score where id=?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)){
          echo "SQL statment failed";
        } else {
          mysqli_stmt_bind_param($stmt, "s", $data);
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);

          while ($row = mysqli_fetch_assoc($result)) {
            echo $row['score'];
          }
        }?>
        <small class="text-muted">Seconds</small></h2>
      <a href="Applications.php" class="btn btn-block btn-outline-dark btn-lg" tabindex="-1" role="button" aria-disabled="true">Submit your score</a>
    </div>
  </div>
</div>

<div class="card-deck mb-3 pl-3 pr-3 text-center">
  <div class="card mb-4 shadow-sm">
    <div class="card-header">
      <h4 class="my-0 font-weight-normal">Latest Season</h4>
    </div>
    <div class="card-body">
      <h1 class="card-title pricing-card-title">Mac <small class="text-muted">1.1</small></h1>
      <a href="#" class="btn btn-block btn-outline-success btn-lg" tabindex="-1" role="button" aria-disabled="true">Download</a>
    </div>
  </div>

  <div class="card mb-4 shadow-sm">
    <div class="card-header">
      <h4 class="my-0 font-weight-normal">Latest Season</h4>
    </div>
    <div class="card-body">
      <h1 class="card-title pricing-card-title">PC <small class="text-muted">1.1</small></h1>
      <a href="#" class="btn btn-block btn-outline-success btn-lg" tabindex="-1" role="button" aria-disabled="true">Download</a>
    </div>
  </div>
</div>







<div class="row HomeScreenBar mb-5 shadow">
  <div class="col-4 bg-dark">
  </div>
  <div class="col-4">
    <h3 class="text-center font-weight-bold">Previous Seasons</h3>
  </div>
  <div class="col-4 bg-dark">
  </div>
</div>



<div class="card-deck pl-4 pr-4">

  <div class="card mb-4 shadow-sm">
    <div class="card-header">
      <h4 class="my-0 font-weight-normal">Season 1.3</h4>
    </div>
    <div class="card-body">
      <img class="card-img-top" src="Images/Screen Shot 2018-08-19 at 21.47.57.png" alt="Version Image">
      <p class="card-text">Winners implement.</p>
      <button type="button" class="btn btn-lg btn-block btn-outline-dark">Go to version</button>
    </div>
  </div>

  <div class="card mb-4 shadow-sm">
    <div class="card-header">
      <h4 class="my-0 font-weight-normal">Season 1.2</h4>
    </div>
    <div class="card-body">
      <img class="card-img-top" src="Images/Screen Shot 2018-08-19 at 21.47.57.png" alt="Version Image">
      <p class="card-text">Winners implement.</p>
      <button type="button" class="btn btn-lg btn-block btn-outline-dark">Go to version</button>
    </div>
  </div>

  <div class="card mb-4 shadow-sm">
    <div class="card-header">
      <h4 class="my-0 font-weight-normal">Season 1.1</h4>
    </div>
    <div class="card-body">
      <img class="card-img-top" src="Images/Screen Shot 2018-08-19 at 21.47.57.png" alt="Version Image">
      <p class="card-text">Default Season.</p>
      <button type="button" class="btn btn-lg btn-block btn-outline-dark">Go to version</button>
    </div>
  </div>



</div>



<?php include 'footer.php' ?>
