<?php
  session_start();
  include_once "config.php";
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  if(!empty($username) && !empty($password)) {
    //checking if username is valid
    if(strlen($username)>5 && strlen($password)>5) { //username requirement
      //checking if username already exists
      $sql = mysqli_query($conn, "SELECT username FROM users WHERE username = '{$username}' ");
      if(mysqli_num_rows($sql) > 0) { //if username already exists
        echo "$username - This username already exists.";
      }else {
        if(isset($_FILES['image'])) {
          $img_name = $_FILES['image']['name'];
          $img_type = $_FILES['image']['type'];
          $tmp_name = $_FILES['image']['tmp_name'];

          $img_explode = explode('.', $img_name);
          $img_ext = end($img_explode); //getting the img file extension (e.g. jpeg)

          $extensions = ['png', 'jpg', 'jpeg']; //specifying the accepted img formats
          if(in_array($img_ext, $extensions) === true) { //if the uploaded file is valid
            $time = time(); //time used to assign a unique id to all images, even if the names are the same
            $new_img_name = $time.$img_name;

            if(move_uploaded_file($tmp_name, "profile_pictures/".$new_img_name)){
              $status = "Active";
              $random_id = rand(time(), 10000);

              $sql2 = mysqli_query($conn, "INSERT INTO users (unique_id, username, password, img, status)
                                            VALUES ({$random_id}, '{$username}', '{$password}', '{$new_img_name}', '{$status}')");
              if($sql2) {
                $sql3 = mysqli_query($conn, "SELECT * FROM users WHERE username = '{$username}'");
                if(mysqli_num_rows($sql3) > 0){
                  $row = mysqli_fetch_assoc($sql3);
                  $_SESSION['unique_id'] = $row['unique_id'];
                  echo "cool";
                }
              }else{
                echo "error";
              }
            }
          }else {
            echo "invalid image format (png, jpg or jpeg are accepted)";
          }

        }else {
          echo "profile pic missing";
        }

      }
    }else { //if username is less than 5 characters
      echo "Username and password has to be at least 6 characters long.";
    }
  } else {
    echo "All input fields are required";
  }


 ?>
