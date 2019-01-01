<html>
	<head>

		<title>User Login</title>
		<link rel="shortcut icon" href="icon.ico"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password],input[type=date],input[type=Gmail],select,table {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
/* Full-width input fields */
td,th{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width:100%;
    border-radius: 10%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)}
    to {-webkit-transform: scale(1)}
}

@keyframes animatezoom {
    from {transform: scale(0)}
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}

</style>


	<body background="farmer.jpg">
	<marquee behavior="alternate" direction="right"><img src="baner.jpg" alt="PANCHAPALLY SKUS LTD." class="avatar"></marquee>
	<hr size="4" color="#80FF80">



<table border="1">
<tr>
  <td >
<div class="container">
	<u><font color="#FF0000">USER LOGIN PAGE</font></u> <BR><BR>
	<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign Up</button>  <br>
	<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Sign In</button>

</div>
 </td>
  <td >nazmul islam</td>
</tr>
</table>
</body>
	<div id="id01" class="modal">
		<form class="modal-content animate" action="insert.php"method="post">
			<div class="imgcontainer">
				<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
				<img src="icon.ico">  New User Registration Form !!
			</div>

			<div class="container">
				<label for ="username"> <B> Name : </b></label>
				<input type="text" placeholder="Enter Username" name="username" required>
				<label for ="mob"> <B> Mobile No : </b></label>
				<input type="text" pattern="^(\d{10})$" placeholder="Enter 10 Degit Mobile No" name="mob" required>
				<label for ="gmail"> <B> Gmail : </b></label>
				<input type="Gmail" pattern=".+@gmail.com" placeholder="Enter Your Gmail ID" name="gmail" required>
				<label for ="dob"> <B> Date of Birth : </b></label>
				<input type="date" placeholder="Enter Your Date of Birth" name="dob" required><br>
				<label for ="degi"> <B> Designation : </b></label>
				<select size="1" name="degi">
                        <option>Manager</option>
                        <option>Assistant Manager</option>
                        <option>Accountant</option>
                        <option>Casher</option>
                </select>
				<label for ="uid"> <B> User Id : </b></label>
				<input type="text" placeholder="Enter User ID" name="uid" required>
				<label for ="pass"> <B> Password : </b></label>
				<input type="password" placeholder="Enter Password" name="pass" Name="pass" required>
                <label for ="conpass"> <B>Conform Password : </b></label>
				<input type="password" placeholder="Enter Conform Password" name="conpass" name="pass"required>
				<button type="submit">SUBMIT</button>
			</div>

			<div class="container" style="background-color:#f1f1f1">
				<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
			</div>
		</form>
	</div>


<div id="id02" class="modal">

  <form class="modal-content animate" action="http://localhost/index/upload.php">
      <div class="imgcontainer">
			<span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
			<img src="icon.ico">  Authorized Login Only!!
     </div>

		<div class="container">
			<label for="uname"><b>Username</b></label>
			<input type="text" placeholder="Enter Username" id="uname" name="uname" required>

			<label for="psw"><b>Password</b></label>
			<input type="password" placeholder="Enter Password" id="psw" name="psw" required>

			<button type="submit" name="login"id="login">Login </button>
			<label>
			<input type="checkbox" checked="checked" name="remember"> Remember me
			</label>
		</div>


		<div class="container" style="background-color:#f1f1f1">
			<button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
			<span class="psw">Forgot <a href="#">password?</a></span>
		</div>
	</form>
</div>

	
	<script>
	
		
	

var attempt = 3; // Variable to count number of attempts.
// Below function Executes on click of login button.
function validate(){
var uname = document.getElementById("uname").value;
var psw = document.getElementById("psw").value;
if ( uname == "ni2930" && psw == "2930"){
alert ("Login successfully");
window.location = "http://localhost/index/accountopeningform.php"; // Redirecting to other page.
return false;
}
else{
attempt --;// Decrementing by one.
alert("You have left "+attempt+" attempt;");
// Disabling fields after 3 attempts.
if( attempt == 0){
document.getElementById("uname").disabled = true;
document.getElementById("psw").disabled = true;
document.getElementById("login").disabled = true;
return false;
}
}
}


	</script>
</body>
</html>

