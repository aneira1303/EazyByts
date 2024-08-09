<?php
session_start();
include_once('config.php');
$chat_room_name = mysqli_real_escape_string($conn, $_POST['chat_room_name']);
$chat_room_date = date('Y-m-d H:i:s');

if(!empty($chat_room_name)) {
  $sql1 = mysqli_query($conn, "SELECT chat_room_name FROM chat_room WHERE chat_room_name = '{$chat_room_name}' ");
  if(mysqli_num_rows($sql1) > 0) {
    header('location:tab3.php');
  } else {
    $sql2 = mysqli_query($conn, "INSERT INTO chat_room (chat_room_name, chat_room_date)
                                  VALUES ('{$chat_room_name}','{$chat_room_date}' )");
    header('location:tab4.php');
  }

}else{
    header('location:tab3.php');

}


?>
