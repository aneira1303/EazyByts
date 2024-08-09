<?php
session_start();
include_once "config.php";
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

if(!empty($username) && !empty($password)) {
  $sql = mysqli_query($conn, "SELECT * FROM users WHERE username = '{$username}'
                      AND password = '{$password}'");
  if(mysqli_num_rows($sql) > 0) {
    $row = mysqli_fetch_assoc($sql);
    $status = "Active";
    $sql2 = mysqli_query($conn, "UPDATE users SET status = '{$status}' WHERE unique_id = {$row['unique_id']}");
    if($sql2){
      $_SESSION['unique_id'] = $row['unique_id'];
      echo "cool";
    }

  }else {//if the inputed data is not matching with the data in the database
    echo "Username or password is incorrect.";
  }
}else{
  echo "Username or password is missing.";
}

 ?>
