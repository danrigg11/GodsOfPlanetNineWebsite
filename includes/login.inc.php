<?php

session_start();

  if (isset($_POST['submit'])) {

    include_once 'dbh.php';

    $uid = mysqli_real_escape_string($conn, $_POST['uid']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

    //Error handlers
    //Check if inputs are empty
    if (empty($uid) || empty($pwd)) {
      header("Location: ../index.php?login=empty");
      exit();
    } else {
      $sql = "SELECT * FROM users WHERE user_uid='$uid' OR user_email='$uid'";
      $result = mysqli_query($conn, $sql);
      $resultCheck = mysqli_num_rows($result);
      if ($resultCheck < 1) {
        header("Location: ../index.php?login=error");
        exit();
      } else {
        if ($row = mysqli_fetch_assoc($result)) {
          //De-hashing the Password
          $hashedPwdCheck = password_verify($pwd, $row['user_pwd']);
          if ($hashedPwdCheck == false) {
            header("Location: ../index.php?login=error");
            exit();
          } elseif ($hashedPwdCheck == true) {
            // Log in the user here
            $_SESSION['u_id'] = $row['user_id'];
            $_SESSION['u_firstname'] = $row['user_firstname'];
            $_SESSION['u_email'] = $row['user_email'];
            $_SESSION['u_uid'] = $row['user_uid'];
            header("Location: ../adminpage.php?login=success");
            exit();
          }
        }
      }
    }
  } else {
    header("Location: ../index.php?login=error");
    exit();
  }

?>
