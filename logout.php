<?php
  session_start();
  if(isset($_SESSION['unique_id'])){ //making sure users can't access this page unless already logged in
    include_once "config.php";
    $logout_id = mysqli_real_escape_string($conn, $_GET['logout_id']);
    $uquery=mysqli_query($conn, "SELECT * FROM `users` WHERE unique_id='".$_SESSION['unique_id']."'");
    $uquery2=mysqli_query($conn, "select * from `chat_room` where chat_room_id='$id'");
    $urow2=mysqli_fetch_assoc($uquery2);
  	$urow=mysqli_fetch_assoc($uquery);
    $id = $urow['id'];
    if(isset($logout_id)){
      $status="Offline";
      $room="";
      $sql = mysqli_query($conn, "UPDATE users SET status = '{$status}' WHERE unique_id = {$logout_id}");
      $sql = mysqli_query($conn, "UPDATE users SET room = '{$room}' WHERE unique_id = {$logout_id}");
      $sql = mysqli_query($conn, "UPDATE users SET joined = '1' WHERE unique_id = {$logout_id}");
      $sqlC= mysqli_query($conn, "UPDATE chat_room SET connected = connected-1 WHERE chat_room_id = {$id}");
      $sql = mysqli_query($conn, "UPDATE users SET id = '' WHERE unique_id = {$logout_id}");
      if($sql) {
        session_unset();
        session_destroy();
        header('location:login.php');
      }
    }else{
      session_unset();
      session_destroy();
      header('location:login.phpp');
    }
  }else{
    session_unset();
    session_destroy();
    header('location:login.php');
  }

 ?>
