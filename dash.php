
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
		href="dash.css">
	<link rel="stylesheet"
		href="responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>



	<!-- for header part -->
	<header>

		
			<div class="logo">
         <label class="limg"> <img src="attendence.png" height="40px" width="40px" alt=""></label>
        <label class="text1">AttendenceBook</label>
      </div>
		
		

		

	  <div class="message">
			
			<i class="fa-solid fa-bell" id="not"></i>
			<div class="dp">
			<img src="img/<?php echo $user['image'];?>" height="40px" width="40px" onclick="red()">
			</div>
			<i class="fa-solid fa-ellipsis-vertical" id="dot3"></i>
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

          <i class="fa fa-home" style="font-size:24px"></i><a href="#">HOME</a>
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

					<i class="fa fa-calendar" style="font-size:21px"></i><a href="cattendence.php">CHECK ATTENDENCE</a>
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

           <i class="fa fa-sign-out" style="font-size:24px"></i><a href="logout.php">LOGOUT</a>
           </div>
				</div>
			</nav>
		</div>
		
			<nav class="navBottom">
				
			<li><i class="fa fa-home" id="i1" style="color:cyan"></i><a href="#" id="a1" style="color:cyan">Home</a></li>
			<li><i class="fa fa-user-circle-o"></i><a href="profile.php">Profile</a></li>
			<li id="li3"><i class="fa-solid fa-circle-plus"></i><a href="attendence.php" id="ed1">Add</a></li>
			<li><i class="fa fa-address-card" id="i3"></i><a href="attendence1.php" id="ed">Attendence</a></li>
			<li><i class="fa-regular fa-calendar-days"></i><a href="cattendence.php">Check</a></li>
				
			</nav>
		
		<div class="main" id="main">

		<div class="more" id="more">
			<a href="#">Privacy & security</a>
			<a href="#">Help</a>
			<a onclick="op8()">Logout</a>
			
		</div>
		<div class="popup8">
  <form action="dash.php" method="post">
  <span>Logout of your account?</span>
  <div class="logbtn">
    <button type="button" id="logbtn1" onclick="can8()">Cancel</button>
    <button type="submit" name="yes" id="logbtn2">Logout</button>
  </div>
      </form>
</div>

  <script>
	let more=document.getElementById("more");
	let dot3=document.getElementById("dot3");
	let main=document.getElementById("main");
	
	dot3.addEventListener("click",function()
	{
       more.classList.add("more_show");
	});
	main.addEventListener("click",function()
	{
      more.classList.remove("more_show");
	  more.classList.add("transition");
	});



	let popup8=document.getElementsByClassName("popup8")[0];
	function op8()
{
  
  popup8.style.display="block";


}

function can8()
{
popup8.style.display="none";
}
  </script>

<?php
  
    error_reporting(0);
    $connect=mysqli_connect("localhost","root","","reg") or die("connection failed");
if(isset($_POST['yes']))
{
   $email=$_SESSION['uemail'];
  
    
   $sql="DELETE FROM teacher_login where email='$email'";
   if ($connect->query($sql) === TRUE) {
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
			<?php

error_reporting(0);
$connect=mysqli_connect("localhost","root","","reg") or die("connection failed");

    $email=$_POST['email'];
    // $email= validate($_POST['email']);
    $emailu=$_SESSION["uemail"];
    $password=$_POST['password'];
    
    $query="select first_name,last_name,mobile,college_name,attendence_class,department,subject,session from reg where email='$emailu'";
   
    $result=mysqli_query($connect,$query);
    $count=mysqli_num_rows($result);
   
   if($count==1)
    { 
        
        while($row=mysqli_fetch_assoc($result))
        {
            ?>
            <div class="w_m">
            <?php
		   $_SESSION["p"]=$row['phone'];
		   if($_SESSION["i"]==1)
		   {
			echo "WELCOME  ".$row["first_name"]."  ".$row["last_name"];
			$_SESSION["i"]++;
		   }
			
		   
          
		   $_SESSION["fname"]=$row['first_name'];
		   $_SESSION["lname"]=$row['last_name'];
		   $_SESSION["cname"]=$row['college_name'];
		   $_SESSION["atclass"]=$row['attendence_class'];
		   $_SESSION["dept"]=$row['department'];
		   $_SESSION["sub"]=$row['subject'];
		   $_SESSION["ses"]=$row['session'];
		   $_SESSION["mob"]=$row['mobile'];
           ?>
		   </div>
		   <?php
            
        }
}else{
    echo "Error";
}

?>
			<div class="box-container">

				<div class="box box1">
        <i class="fa fa-user" style="font-size:20px"></i>
					<div class="text">
					<h2 class="topic-heading">
					<?php 
					echo $_SESSION['fname']." ".$_SESSION['lname'];
					?>
					</h2>
						<h2 class="topic">Teacher's Name</h2>
					</div>
					
         
				</div>



				<div class="box box8">
				<i class="fa-solid fa-phone" style="font-size:20px"></i>
					<div class="text">
					<h2 class="topic-heading">
					<?php 
					echo $_SESSION["mob"];
					?>
					</h2>
						<h2 class="topic">Mobile No</h2>
					</div>
        
				
				</div>














				<div class="box box2">
        <i class="fa fa-institution" style="font-size:20px"></i>
					<div class="text">
					<h2 class="topic-heading">
					<?php 
					echo $_SESSION['cname'];
					?>
					</h2>
						<h2 class="topic">Institution's Name</h2>
					</div>
        
				
				</div>



				<div class="box box4">
        <i class='fas fa-book-reader' style='font-size:20px'></i>
					<div class="text">
					<h2 class="topic-heading">
					<?php 
					echo $_SESSION['atclass'];
					?>
					</h2>
						<h2 class="topic">Class</h2>
					</div>
        
			
			</div>





				<div class="box box3">
        <i class="fa-regular fa-building" style='font-size:20px'></i>
					<div class="text">
						<h2 class="topic-heading">
							<?php 
					     echo  $_SESSION["dept"];
					    ?>

						</h2>
						<h2 class="topic">Department</h2>
					</div>
         
				
				</div>

		

      <div class="box box5">
      <i class="fa-solid fa-book"  style='font-size:20px'></i>
					<div class="text">
						<h2 class="topic-heading"><?php 
					     echo  $_SESSION["sub"];
					    ?></h2>
						<h2 class="topic">Subject</h2>
					</div>
        
			
			</div>


      <div class="box box6">
      <i class="fa-regular fa-calendar-days" style='font-size:20px'></i>
					<div class="text">
					<h2 class="topic-heading">
					<?php 
					echo $_SESSION['ses'];
					?>
					</h2>
						<h2 class="topic">Session</h2>
					</div>
        
			
			</div>
      <div class="box box7">
      <i class="fa-solid fa-children" style='font-size:20px'></i>
					<div class="text">
						<h2 class="topic-heading">
							
                  <?php
                    $sql = "SELECT * from add_stu where tea_eml='$eml' ";

                    if ($result = mysqli_query($conn, $sql)) {
  
	  
	                    $rowcount = mysqli_num_rows( $result );
	  
	  
	                    printf("%d\n", $rowcount);
                     }
   
	
                  ?>
						</h2>
						<h2 class="topic">Total no of student</h2>
					</div>
        
			
			</div>

			

					
				</div>
			</div>
		</div>
	</div>
	<script>
		let o2=document.getElementsByClassName("option2")[0];
		let o3=document.getElementsByClassName("option3")[0];
		let o9=document.getElementsByClassName("option9")[0];
		let o4=document.getElementsByClassName("option4")[0];
		let o5=document.getElementsByClassName("option5")[0];
		o2.addEventListener("click",function()
		{
            location.assign("profile.php");
		});
		o3.addEventListener("click",function()
		{
            location.assign("attendence.php");
		});
		o9.addEventListener("click",function()
		{
            location.assign("logout.php");
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
	<script src="./index.js"></script>













</body>
</html>
