<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Laven</title>
	<style>
	@font-face {
   font-family: myFont;
   src: url(fonts/FredokaOne-Regular.ttf);
}

.html{
	background : url('https://tse2.mm.bing.net/th?id=OIP.t46aYZYYwQ6b_KO7fS0VFQHaFj&pid=Api&P=0&h=180');
}

* {
  box-sizing: border-box;
}

.selected{
  background-color: #ffe4e1; /* Misty rose for selection */
}

.ui-tooltip{
  font-size: 10pt;
  padding: 1px 1px;
  max-width: 300px;
  color: black;
  font-family: myFont;
  border-radius: 20px;
  box-shadow: 0 0 7px black;
  background-color: #ffebcd; /* Blanched almond */
}

div {
  font-family: myFont;
  font-size: 20px;
  border-radius: 5px;
  padding: 20px;
  text-align: center;
  background-color: #fff0f5; /* Lavender blush */
}

.warning{
  color: red;
  margin: auto;
}

#small_icon{
	width: 4.5%;
  	height: auto;
  	position: absolute;
    top: 20px;
    left: 20px;
}

#choice_icon{
	width: 30%;
  	height: auto;
}

#profile{
	width: 12%;
  	height: auto;
}

.header {
  color: white;
  font-size: 50px;
  text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.3);
  height: 100px;
  background: linear-gradient(135deg, #ff7f7f, #ffadad, #ffcccb);
  padding: 20px;
  border-radius: 15px;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
  display: flex;
  align-items: center;
  justify-content: center;
  border: 2px solid #ff1493; /* Deep pink border */
  position: relative;
  overflow: hidden;
}

.header::before {
  content: '';
  position: absolute;
  top: -50%;
  left: -50%;
  width: 200%;
  height: 200%;
  background: radial-gradient(circle, rgba(255,255,255,0.3) 0%, rgba(255,255,255,0) 60%);
 
}



.header .icon {
  position: absolute;
  top: 10px;
  left: 10px;
  width: 50px;
  height: 50px;
  background: url('path/to/rose-icon.png') no-repeat center center;
  background-size: cover;
}


.content {
	height: 80px;
}

.content_3{
	font-size: 30px;
}

input[type=text], select{
  font-family: myFont;
  width: 40%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ffb6c1; /* Light pink */
  border-radius: 4px;
  box-sizing: border-box;
  background-color: #fff0f5; /* Lavender blush */
}

input[type=password], select{
	font-family: myFont;
  width: 40%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ffb6c1; /* Light pink */
  border-radius: 4px;
  box-sizing: border-box;
  background-color: #fff0f5; /* Lavender blush */
}

input[type=button] {
  font-family: myFont;
  width: 40%;
  background-color: #ff69b4; /* Hot pink */
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=button]:hover {
  background-color: #ff1493; /* Deep pink */
}

input[type=submit] {
  font-family: myFont;
  width: 40%;
  background-color: #ff69b4; /* Hot pink */
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #ff1493; /* Deep pink */
}

#small_button{
	margin-right: 220px;
}

#small_button_back{
	width: 15%;
	margin-top: 180px;
    float: left;
}

#small_button_last{
	width: 15%;
	margin-top: 0px;
  margin-bottom: 0px;
    float: left;
}

#join_button{
  margin: 15px 200px;
}

#submit_button{
  margin: auto;
}

.users-list {
  width: 100%;
}
.chat_button{
	font-family: Arial;
	width: 35px;
	height: 35px;
	padding:0;
	float: right;
	border: 1px solid #ffb6c1; /* Light pink */
    border-radius: 5px;
    background-color:print;
  cursor: pointer;
}
.chat_button:hover{
	background: #ffd1dc; /* Light pink hover */
}

.column {
  float: left;
  font-size: 15px;
  width: 50%;
  padding: 15px;
}

.row:after {
  font-size: 20px;
  content: "";
  display: table;
  clear: both;
}

table {
  font-family: myFont;
  border-collapse: collapse;
  width: 60%;
  position: relative;
  margin-left: 300px;
  /*margin: auto;*/
}

th, td {
  border: 1px solid #ffb6c1; /* Light pink */
  text-align: left;
  padding: 4px;
}

tr{
	background-color: #fff0f5; /* Lavender blush */
}

th {
  background-color: #ff69b4; /* Hot pink */
  color: white;
}

.users {
  width: 25%;
  float: left;
}

.texts {
  width: 75%;
  float: left;
  background-color: #ffe4e1; /* Misty rose */
}

.log-out{
  font-family: myFont;
  width: 40%;
  background-color: #ff69b4; /* Hot pink */
  color: white;
  padding: 14px 20px;
  position: absolute;
  bottom: 30px;
  left: 10px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.log-out:hover{
  background-color: #ff1493; /* Deep pink */
}

.log-out a{
  text-decoration: none;
  color: #fff;
}

#message{
	width: 100%;
	border-color: #ffb6c1; /* Light pink */
}

#msg{
  width: 100%;
	border-color: #ffb6c1; /* Light pink */
  font-family: myFont;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ffb6c1; /* Light pink */
  border-radius: 4px;
  box-sizing: border-box;
  resize: none;
  background-color: #fff0f5; /* Lavender blush */
}

.container_messages {
  border: 2px solid #ffb6c1; /* Light pink */
  background-color: #ffffff;
  border-radius: 5px;
  padding: auto;
  margin: 10px 0;
  text-align: left;
}

.dark {
  border-color: #ffb6c1; /* Light pink */
  background-color: #ffe4e1; /* Misty rose */
  text-align: right;
}

.container_messages img {
  display: inline-block;
  position: relative;
  bottom: 10px;
  float: left;
  max-width: 60px;
  padding: 0px;
  width: 100%;
  margin-right: 20px;
  margin-bottom: 50px;
  border-radius: 50%;
}

.container_messages img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

		</style>
</head>

<body>

	
		<header class="header">
			<strong>Laven- The Chat Room</strong>
		</header>
		<main class="content">
			<p>Welcome to Laven, a chatroom website where</p>
			<p>This has a room for registered members to dicuss on various topics.</p>
		</main>

<section class="form signup">
  <form class="" action="#" enctype="multipart/form-data">
    <div class="error-text"></div>

      <input type="file" name="image" value="" placeholder="" required><br>
			<label for="username"></label><input type="text" name="username" value="" placeholder="Username" required autocomplete="nickname"><br>
			<label for="password"></label><input type="password" name="password" value="" placeholder="Password" required id="passID" autocomplete="new-password"><br>
      <input type="checkbox" onclick="passToggle()">Show Password<br>
      <div class="field button">
        <input type="submit" name="" value="Continue"><br>
      </div>
      Login <a href="login.php">here</a> If you already have an account.
	 	</div>
    </section>
	 	<warning id = "warning"></warning>
	</div>
  </form>
	<script src="js/jquery-1.11.0.js"></script>
	<script src="js/Tab1.js"></script>
  <script src="signup.js"></script>
</body>
</html>
