<?php
  session_start();
?>
<?php
require 'config.php';
$_SESSION["id"]=1;
$sessionId=$_SESSION['id'];
$eml=$_SESSION["uemail"];
$user=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM reg WHERE email='$eml'"));
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible"
		content="IE=edge">
	<meta name="viewport"
		content="width=device-width, 
				initial-scale=1.0">
	<title>TushTEAM</title>
	<link rel="stylesheet"
		href="logout.css">
	<link rel="stylesheet"
		href="responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

	<!-- for header part -->
	<header>

	
			<div class="logo">
         <label class="limg"><img src="attendence.png" height="40px" width="40px" alt=""></label>
        <label class="text1">AttendenceBook</label>
      </div>
		
		

		<div class="searchbar">
			<input type="text"
				placeholder="Search">
			<div class="searchbtn">
      <i class="fas fa-search"></i>
			</div>
		</div>

		<div class="message">
			<div class="circle"></div>
			<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/8.png"
				class="icn"
				alt="">
			<div class="dp">
			<img src="img/<?php echo $user['image'];?>" height="40px" width="40px" onclick="red()">
			</div>
		</div>

	</header>
	
	<script>
     function red()
	 {
		location.assign("profile.php");
	 }
		</script>
	<div class="main-container">
		<div class="navcontainer">
			<nav class="nav">
				<div class="nav-upper-options">

					<div class="nav-option option1">

          <i class="fa fa-home" style="font-size:24px"></i><a href="dash.php">HOME</a>
					</div>

					<div class="nav-option option2">
					
          <i class="fa fa-user-circle-o" style="font-size:24px"></i><a href="profile.php">PROFILE</a>
					</div>

					<div class="nav-option option3">

					<i class="fa-solid fa-plus" style="font-size:20px"></i><a href="attendence.php">ADD STUDENT</a>
					</div>

					<div class="nav-option option4">

					<i class="fa fa-address-card" style="font-size:20px"></i><a href="attendence1.php">ATTENDENCE</a>
					</div>

					<div class="nav-option option5">

					<i class="fa fa-calendar" style="font-size:21px"></i><a href="#">CHECK ATTENDENCE</a>
					</div>

					<div class="nav-option option6">

					<i class="fa fa-lock" style="font-size:24px"></i><a href="#">PRIVACY AND SECURITY</a>
					</div>

					<div class="nav-option option7">

          <i class="fa fa-gear" style="font-size:24px"></i><a href="#">SETTING</a>
					</div>
          <div class="nav-option option8">

          <i class="fa fa-question-circle" style="font-size:24px"></i><a href="#">HELP</a>
           </div>
           <div class="nav-option option9">

           <i class="fa fa-sign-out" style="font-size:24px"></i><a href="#">LOGOUT</a>
           </div>
				</div>
			</nav>
		</div>
		<div class="main">

			<div class="searchbar2">
				<input type="text"
					name=""
					id=""
					placeholder="Search">
				<div class="searchbtn">
				<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png"
						class="icn srchicn"
						alt="search-button">
				</div>
			</div>

		

		<div class="logcontainer">
         
            <h3>Are you sure to logout?</h3>
           
            <div class="btn">
                <div class="btn1"onclick="cls()">
                <button type="button" id="no">No</button>
                </div>
                <div class="btn2">
                <form action="logout.php" method="post">
                <button type="submit" name="yes">Yes</button>
                </form>
                </div>
           </div>
          
        </div>
		

					
				</div>
			</div>
		</div>
	</div>

   
    <?php
  
    error_reporting(0);
    $connect=mysqli_connect("localhost","root","","reg") or die("connection failed");
if(isset($_POST['yes']))
{
   $email=$_SESSION['uemail'];
  
   
    
   $sql="DELETE FROM teacher_login where email='$email'";
   if ($connect->query($sql) === TRUE) {
       echo "Record deleted successfully";
	   ?>
   <script>
	location.assign("login_back.php");
   </script>
   <?php
     } else {
       echo "Error deleting record: " . $conn->error;
     }
  
    exit();
}
?>







	<script>
		let o3=document.getElementsByClassName("option3")[0];
		let o1=document.getElementsByClassName("option1")[0];
        let o2=document.getElementsByClassName("option2")[0];
		let o4=document.getElementsByClassName("option4")[0];
		let o5=document.getElementsByClassName("option5")[0];
		o3.addEventListener("click",function()
		{
            location.assign("attendence.php");
		});
		o1.addEventListener("click",function()
		{
            location.assign("dash.php");
		});
        o2.addEventListener("click",function()
		{
            location.assign("profile.php");
		});
		o4.addEventListener("click",function()
		{
            location.assign("attendence1.php");
		});
		o5.addEventListener("click",function()
		{
            location.assign("cattendence.php");
		});
</script>

<div class="logcontainer1">



<h3>Thank you to remain with us.</h3>
</div>

<script>
 let no=document.getElementById("no");

 let logc=document.getElementsByClassName("logcontainer")[0];
 let logc1=document.getElementsByClassName("logcontainer1")[0];

//  no.addEventListener("click",function()
//  {

	function cls(){
    logc.classList.add("hide");
	logc1.classList.add("vlogc1");
	setTimeout(() => {
		logc.classList.add("hide1");
	logc1.classList.add("vlogc2");
		logc1.classList.remove("vlogc1");
		logc.classList.remove("hide");
	},6000);
	setTimeout(() => {
		logc.classList.remove("hide1");
	logc1.classList.remove("vlogc2");
		logc1.classList.remove("vlogc1");
		logc.classList.remove("hide");
	},14000);
}
//  });


</script>
	
</body>
</html>
