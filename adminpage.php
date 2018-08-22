<?php include 'header.php' ?>
<?php include_once 'includes/dbh.php' ?>


<div class="container">
<h1 class="mb-3 text-center">Admin Page</h1>
  <div class="card-deck pl-4 pr-4">

    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal text-center">Highscore</h4>
      </div>
      <div class="card-body">
        <table class="table table-bordered">
        <thead class="table">
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
      </div>
    </div>

    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal text-center">Update Highscore</h4>
      </div>
      <div class="card-body">
        <table class="table table-bordered">
        <thead class="table">
        <tr>
        <th scope="col">#</th>
        <th scope="col">Username</th>
        <th scope="col">Time</th>
        </tr>
        </thead>
        <tbody>

          <form action="includes/dbh.php" method="POST">
        <tr>
        <th scope="row">1</th>
        <td>
          <!-- top player name -->
          <input type="text" name="uid" placeholder="Username">
        </td>
        <td>
          <!-- top player name -->
          <input type="tex" name="score" placeholder="Score">
        </td>
        </tr>
        </form>
        
        <tr>
        <th scope="row">2</th>
        <td>

        </td>
        <td>

        </td>
        </tr>
        <tr>
        <th scope="row">3</th>
        <td >

        </td>
        <td >

        </td>
        </tr>
        </tbody>
        </table>
        <div class="float-right">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </div>

  </div>

</div>




<?php include 'footer.php' ?>
