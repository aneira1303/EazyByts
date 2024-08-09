<?php
	include ('config.php');
	session_start();
	if(isset($_POST['msg'])){
		$msg = addslashes($_POST['msg']);
		$id = $_POST['id'];
		mysqli_query($conn,"insert into `chat` (chat_room_id, chat_msg, user_id, chat_date) values ('$id', '$msg' , '".$_SESSION['unique_id']."', '$date')") or die(mysqli_error());
	}
?>
<?php
	if(isset($_POST['res'])){
		$id = $_POST['id'];
	?>
	<?php
		$query=mysqli_query($conn,"select * from `chat` left join `users` on users.unique_id=chat.user_id where chat_room_id='$id' order by chat_date asc") or die(mysqli_error());
		while($row=mysqli_fetch_array($query)){
	?>
	<?php

	?>
		<div class="container_messages">
		  <img src="profile_pictures/<?php echo $row['img'];?>"></img><?php echo $row['username']; ?>: <?php echo $row['chat_msg']; ?><br>
		</div>
		<br>
	<?php
		}
	}
?>
