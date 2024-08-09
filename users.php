<?php
  session_start();

  include_once "config.php";
  $sql = mysqli_query($conn, "SELECT * FROM users");
  $query2=mysqli_query($conn,"SELECT * FROM chat_room");
  $row2=mysqli_fetch_array($query2);
  $output = "";


   if(mysqli_num_rows($sql) > 0) {
    while($row = mysqli_fetch_assoc($sql)) {
      if($row['status'] == "Active"){
        $output .=
        '
          <ul>
            <li>'.$row['username'].' <span style="font-size: 18px;">Room:&nbsp<span style="color: #09B83E;">'.$row['room'].'</span></span></li>
          </ul>
        ';
      }
    }
  }
  echo $output;
 ?>
