<?php
session_start();
?>
<?php
function tush(){
error_reporting(0);
$connect=mysqli_connect("localhost","root","","reg") or die("connection failed");
 if(isset($_POST['stu_add']))
 {
    session_start();
   $ttteml=$_SESSION["uemail"];
   $ssseml=$_POST["stu_email"];
$query="select  stu_eml from stu_login where tea_eml='$ttteml'";
   $result=mysqli_query($connect,$query);
    $count=mysqli_num_rows($result);
   if($count>0)
    { 
    while($row=mysqli_fetch_assoc($result))
        {
            if($ssseml==$row["stu_eml"])
            {
                return 1;
            }
           
            
        }
}else{
    return 0;
}
 }
}
?>
<?php
function roll(){
error_reporting(0);
$connect=mysqli_connect("localhost","root","","reg") or die("connection failed");
 if(isset($_POST['stu_add']))
 {
    session_start();
   $ttteml=$_SESSION["uemail"];
   $roll=$_POST["stu_roll"];
  $query="select roll from add_stu where tea_eml='$ttteml'";
    $result=mysqli_query($connect,$query);
    $count=mysqli_num_rows($result);
   if($count>0)
    { 
        while($row=mysqli_fetch_assoc($result))
        {
            if($roll==$row["roll"])
            {
                return 1;
            }
            
        }
}else{
    return 0;
}
 }
}
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
		href="attendence.css">
	<link rel="stylesheet"
		href="responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
	<header>
			<div class="logo">
         <label class="limg"><img src="attendence.png" height="40px" width="40px" alt=""></label>
        <label class="text1">AttendanceBook</label>
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

          <i class="fa fa-home" style="font-size:24px"></i><a href="dash.php">HOME</a>
					</div>

					<div class="nav-option option2">
					
          <i class="fa fa-user-circle-o" style="font-size:24px"></i><a href="profile.php">PROFILE</a>
					</div>

					<div class="nav-option option3">

					<i class="fa-solid fa-plus" style="font-size:20px"></i><a href="#">ADD STUDENT</a>
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
		<nav class="navBottom">
				
			<li style="color:blue"><i class="fa fa-home" id="i1" ></i><a href="dash.php" id="a1">Home</a></li>
			<li><i class="fa fa-user-circle-o"></i><a href="profile.php">Profile</a></li>
			<li id="li3"><i class="fa-solid fa-circle-plus" style="color:cyan"></i><a href="attendence.php" id="ed1" style="color:cyan">Add</a></li>
			<li href="attendence1.php"><i class="fa fa-address-card" id="i3"></i><a href="attendence1.php" id="ed">Attendence</a></li>
			<li><i class="fa-regular fa-calendar-days"></i><a href="cattendence.php">Check</a></li>
				
			</nav>
		<div class="main" id="main">
<!-- adding new student is starting from here -->
<div class="addcontainer">
	<form action="attendence.php" method="post">
	<h2 id="as">Add Student</h2>
	<div class="stu_details">
	<div class="stu_in">
     <span>Student name</span>
	 <input type="text" name="stu_name" id="stu_name" required>
	</div>
	<div class="stu_in">
	<span>Student roll no</span>
	 <input type="number" name="stu_roll" id="stu_roll" required>
	</div>
	<div class="stu_in">
	<span>Student email id</span>
	 <input type="email" name="stu_email" id="stu_email" required>
	</div>
	<div class="stu_in">
		<button type="submit" id="stu_add" name="stu_add"><i class="fa-solid fa-plus"></i> Add</button>
	</div>
	</div>
	</form>
</div>
	<div class="more" id="more">
			<a href="#">Privacy & security</a>
			<a href="#">Help</a>
			<a href="#" onclick="op8()">Logout</a>
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
   $email=$_SESSION['email2'];
 
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
<div class="popup777" id="popup777">
<div class="loader" id="loader"></div>

</div>
<script>
    </script>

<?php
$conn=mysqli_connect("localhost","root","","reg") or die ("connection failed");
if(isset($_POST['stu_add']))
{
	$sname=$_POST['stu_name'];
	$sroll=$_POST['stu_roll'];
	$semail=$_POST['stu_email'];
	
	$_SESSION["semail"]=$semail;
if(roll()==1)
{
   echo "You can't add student with same roll no ";
}else if($semail==$eml)
{
	echo "Sorry sir you can't add youself as a student .";
}else if(tush()==1)
{
    echo "Email is already exist";
}else if(strpos($semail,'@gmail.com')==false)
   {  
	 echo "Wrong email id ";
   }else if(preg_match('`[A-Z]`', $semail)==true)
   {
	echo "Wrong email id ";
   }
   else{
	function randomPassword($length)
	{
		$alphabet="0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#*@@@@@@@@@@#########";
		return substr(str_shuffle($alphabet),0,$length);
	}
	 $_SESSION["otp"]=randomPassword(6);
	 $pass=$_SESSION["otp"];
	 echo $_SESSION["otp"];
	  //  header("Location:ver.php");
	   $receiver="$semail";
	   $_SESSION['EM']=$receiver;
	   $subject="Student's password for login in AttendanceBook";
	   $body="Welcome ".$sname."!\nYour password is ".$_SESSION["otp"]." for check your attendence details in AttendanceBook.\nCollege : ". $_SESSION["cname"]."\nClass : ".$_SESSION["atclass"]."\nDepartment : ".$_SESSION["dept"]."\nSession : ". $_SESSION["ses"]."\nTeacher : ". $_SESSION["fname"]." ".$_SESSION["lname"];
	   $sender="From:attendancebook96@gmail.com";
	   if(mail($receiver,$subject,$body,$sender))
	   {
		
		// $_SESSION["uemail"]=$semail;
		// $_SESSION["temail"]=$eml;
		$sql="INSERT INTO `reg`.`add_stu` (`name`, `roll`, `stu_eml`, `tea_eml`) VALUES ('$sname','$sroll','$semail','$eml')";
	mysqli_query($conn,$sql);

	
	$sql1="INSERT INTO `reg`.`stu_login` (`tea_eml`, `stu_eml`,`password`) VALUES ('$eml','$semail','$pass')";
	mysqli_query($conn,$sql1);
		 echo "OTP successfully send";
	   }else{
		echo "Otp not send";
	   }
   }
	
}
?>
 <!-- adding new student is ending here -->

 <!-- showing student in table format is starting from here -->
 <div class="showcon">
 <table class="table1">
	<tr>
		<th class="th1"><p class="sn">Sno.</p></th>
		<th>Name</th>
		<th>Roll NO</th>
		<th>Image</th>
		
		<th>View Profile</th>
		
        <th>Delete Student</th>		
	</tr>
 <?php
	 $query3="select sno,name,roll,img,stu_eml from add_stu where tea_eml='$eml'";
	
	 $i=1;
 ?>
<?php
   $result=$conn->query($query3);
   if($result->num_rows>0)
   {
	while($row=$result->fetch_assoc())
	{
		?>
  <tr>
	<td><?php echo $i; ?></td>
	<td><?php echo $row['name'];?></td>
	<td><?php echo $row['roll'];?></td>
	<td id="td4"><img src="img/<?php echo $row['img'];?>" class="stu_img"></td>
	
	
	<td>
		<form action="attendence.php" method="post">
		<button type="submit" id="view"  name="<?php echo $row['sno']?>"><i class="fa fa-eye"></i><span id="span_view">View</span></button>
	    </form>
	</td>
<?php
    $_SESSION['sno']=$row['sno'];
	?>
		<?php
		
		if(isset($_POST[$row['sno']]))
		{
			
			$_SESSION['simage']=$row['img'];
		$_SESSION['sname']=$row['name'];
		$_SESSION['sroll']=$row['roll'];
		$_SESSION['semail']=$row['stu_eml'];
			?>
			<script>
				let popup=document.getElementsByClassName("popup")[0];
				let show=document.getElementsByClassName("showcon")[0];
				let add=document.getElementsByClassName("addcontainer")[0];
				
				show.style.display="none";
				add.style.display="none";
				popup.style.display="block";
			</script>
			
			<?php
		
		}
		?>
<td>
       <form action="attendence.php" method="post">
	<button type="submit" id="dbtn" name="<?php echo $i; ?>"><i class="fa-solid fa-trash" id="trash"></i><span id="span_delete">Delete</span></button>
	</form>

		<?php
		
		if(isset($_POST[$i]))
		{

			$sl=$row['sno'];
			$query8="select stu_eml from add_stu where sno='$sl'";
			$result1=$conn->query($query8);
                        if($result1->num_rows>0)
                        {
							$row=$result1->fetch_assoc();
							$steml=$row["stu_eml"];
							// echo $row["stu_eml"];
							$sql2="DELETE FROM stu_login where tea_eml='$eml' and stu_eml='$steml'";
		                	mysqli_query($conn,$sql2);

						}

			
			$sql1="DELETE FROM add_stu where sno='$sl'";
			
			if ($conn->query($sql1) === TRUE) {
				
				?>
				<script>
					
					location.assign("attendence.php");
					
					</script>
				<?php
			  } else {
				echo "Error deleting record: " . $conn->error;
			  }
   
		}
		?>
		 
</td>
  </tr>
		<?php
		
    $i++;

	}
   }
 
?>
</table>

</div>
 <!-- showing student in table format is ending here -->
 <div class="popup" id="popup">
 <i class="fa-solid fa-arrow-left" id="larrow" onclick="cl()"></i>
<img src="img/<?php echo $_SESSION['simage'];?>" height="95px" width="95px">
<h1><?php echo $_SESSION['sname'];?></h1>
<p id="p1"><?php echo $_SESSION['semail'];?></p>
<div class="sabout">
<p><?php echo "Student of : ".$_SESSION["cname"];?></p>
<p><?php echo "Class : ". $_SESSION["atclass"];?></p>
<p><?php echo "Department : ". $_SESSION["dept"];?></p>
<p>Roll No : <?php echo $_SESSION['sroll'];?></p>
</div>
	 </div>

	 <script>
	popup.style.display="none";
  function cl()
  {
	location.assign("attendence.php");
  }
	</script>		
				</div>
			</div>
		</div>
	</div>
    <script>
		let o2=document.getElementsByClassName("option2")[0];
		let o1=document.getElementsByClassName("option1")[0];
		let o9=document.getElementsByClassName("option9")[0];
		let o4=document.getElementsByClassName("option4")[0];
		let o5=document.getElementsByClassName("option5")[0];
		o2.addEventListener("click",function()
		{
            location.assign("profile.php");
		});
		o1.addEventListener("click",function()
		{
            location.assign("dash.php");
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
<script src="attendence.js"></script>
	<script src="./index.js"></script>
</body>
</html>
