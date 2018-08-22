<?php include 'header.php' ?>

<?php include_once 'includes/dbh.php' ?>

<div class="text-center">

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">


      <main role="main" class="inner cover">
        <h1 class="cover-heading">Next Season</h1>
        <!-- Display the countdown timer in an element -->
        <h2 id="demo" class="text-center text-danger mb-3"></h2>
        <p class="lead">When the season countdown ends the winner will be contacted via email to discuss what they would like implemented into the next season, this could be anything from the theme of level to a firepit being in the middle of the floor.</p>
      </main>

      <table class="table table-bordered">
  <thead class="table-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Username</th>
      <th scope="col">Time</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td class="text-primary">
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
      </td>
      <td class="text-primary">
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
    </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>
        <?php
        $data = "2";
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
      </td>
      <td>
        <?php
        $data = "2";
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
      </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td >
        <?php
        $data = "3";
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
      </td>
      <td >
        <?php
        $data = "3";
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
      </td>
    </tr>
  </tbody>
</table>

<table class="table table-bordered mt-5">
<thead class="table-dark">
<tr>
<th scope="col">#</th>
<th>Auto Changes</th>
</tr>
</thead>
<tbody>
<tr>
<th scope="row">1</th>
<td>Graphics update</td>

</tr>
<tr>
<th scope="row">2</th>
<td>Main menu page created</td>
</tr>
<tr>
<th scope="row">3</th>
<td>Highscore will show fastest time aswell as score</td>
</tr>
<tr>
  <th scope="row">4</th>
  <td>Player will no longer need to press re-start when finished level</td>
  </tr>
  <tr>
<th scope="row">5</th>
<td class="table-primary">Winner of season's Implement</td>
</tr>

</tbody>
</table>

    </div>




</div>





<?php include 'footer.php' ?>
