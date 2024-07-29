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
		href="cattendence.css">
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
		
		<nav class="navBottom" id="nb">
				
			<li style="color:blue"><i class="fa fa-home"></i><a href="dash.php">Home</a></li>
			<li><i class="fa fa-user-circle-o"></i><a href="profile.php">Profile</a></li>
			<li id="li3"><i class="fa-solid fa-circle-plus"></i><a href="attendence.php" id="ed1">Add</a></li>
			<li><i class="fa fa-address-card" id="i3"></i><a href="attendence1.php" id="ed">Attendence</a></li>
			<li id="li4"><i class="fa-regular fa-calendar-days"  style="color:cyan"></i><a href="cattendence.php"  style="color:cyan">Check</a></li>
				
			</nav>
		<div class="main" id="main">

		<div class="more" id="more">
			<a href="#">Privacy & security</a>
			<a href="#">Help</a>
			<a onclick="op8()">Logout</a>
			
		</div>
		<div class="popup8">
  <form action="cattendence.php" method="post">
  <span>Logout of your account?</span>
  <div class="logbtn">
    <button type="button" id="logbtn1" onclick="can8()">Cancel</button>
    <button type="submit" name="yes" id="logbtn2">Logout</button>
  </div>
      </form>
</div>

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
  <script>
	let more=document.getElementById("more");
	let dot3=document.getElementById("dot3");
	let main=document.getElementById("main");
	let popup8=document.getElementsByClassName("popup8")[0];
	function op8()
{
  
  popup8.style.display="block";


}

function can8()
{
popup8.style.display="none";
}
	dot3.addEventListener("click",function()
	{
       more.classList.add("more_show");
	});
	main.addEventListener("click",function()
	{
      more.classList.remove("more_show");
	  more.classList.add("transition");
	});
  </script>

		




        <div class="search">
			
		<p class="heading">Search here</p>
		<div class="sear">
			<div>
            <form action="cattendence.php" method="post">


<p class="para">Please enter date here <input type="date" id="search" name="date1" required> <button type="submit" name="btn"id="btn"><i class="fa-solid fa-magnifying-glass"></i> Search</button></p>
<div class="altdiv">
	<button onclick="sisu()">Search Here</button>
</div>
</form>
<div class="popu" id="popu">
	<form action="cattendence.php" method="post">
	<span>Select date here</span>
	<input type="date" id="search" name="date1" required>

    <div class="altbtn">
		<button id="acan" onclick="cano()">Cancel</button>
		<button type="submit" id="asea" name="btn">Search</button>
	</div>
	</form>
</div>

   
	</div>
	<div>
	<form action="cattendence.php" method="post">


<p class="para">OR Check each student attendence details <input type="submit" name="btn1"id="btn" value="Check"></p>

<div class="altdiv1">
	<button type="submit" name="btn1">Check Percentage</button>
</div>

</form>
</div>
</div>

	
        </div>

<script>
let popu=document.getElementById("popu");
let acan=document.getElementById("acan");
let body=document.querySelector("body");
let header=document.querySelector("header");
let nb=document.getElementById("nb");
popu.style.display="none";
function sisu(){
	popu.style.display="block";
	body.classList.add("nn");
	popu.classList.add("nnn");
	nb.classList.add("nnn");
	header.classList.add("nnn");
}
function cano()
{
	popu.style.display="none";
	body.classList.remove("nn");
}
</script>


<?php
if((!isset($_POST["btn"])) and (!isset($_POST["btn1"])))
{
$ssql="select adate from date where tea_eml='$eml'";
$rresult=$conn->query($ssql);

if($rresult->num_rows>0)
{
 while($row=$rresult->fetch_assoc())
 {
	$date=$row["adate"];

      ?><p id="hdate" class="hdate"><?php echo "Attendence table for ".$row["adate"];?></p>
	  
	  <table class="table1">
		<tr>
			<th>Sno.</th>
			<th>Name</th>
			<th>Roll No.</th>
			<th>Attendence</th>
		</tr>
		<tr>
			<?php
			$k=1;
			$sql11="select * from add_stu where tea_eml='$eml'";
			$rresult1=$conn->query($sql11);

             if($rresult1->num_rows>0)
               {
              while($row=$rresult1->fetch_assoc())
              {
                   ?>
				   <td><?php echo $k;$k++;?></td>
				   <td><?php echo $row["name"];?></td>
				   <td><?php echo $row["roll"]; $rroll=$row["roll"];?></td>
				   <td>
					<?php
					$qry="select `$date` from add_stu where tea_eml='$eml' and roll='$rroll'";
					$rres=$conn->query($qry);

                      if($rres->num_rows>0)
                        {
                       $row=$rres->fetch_assoc();
                       echo $row["$date"];
			           if($row["$date"]=="")
					   {
						echo "Not taken yet";
					   }
			         }
					?>
				   </td>
				   </tr>
				   <?php
			  }
			}
			?>
		

	  </table>
	  <?php
 }
}
}
?>








<!-- filtering part is starting from here -->
<?php 
if(isset($_POST["btn"]))
{
	$date1=$_POST["date1"];
$ssql="select adate from date where tea_eml='$eml' and adate='$date1'";
$rresult=$conn->query($ssql);

if($rresult->num_rows>0)
{
	?>
	
	<p id="record">
	<?php
	echo "Attendence record of : ".$date1;
	?>
	</p>	
	<?php
 $row=$rresult->fetch_assoc();
 
	$date=$row["adate"];

     ?>
	  
	  <table class="table1">
		<tr>
			<th>Sno.</th>
			<th>Name</th>
			<th>Roll No.</th>
			<th>Attendence</th>
		</tr>
		<tr>
			<?php
			$k=1;
			$sql11="select * from add_stu where tea_eml='$eml' and `$date`=`$date`";
			$rresult1=$conn->query($sql11);

             if($rresult1->num_rows>0)
               {
              while($row=$rresult1->fetch_assoc())
              {
                   ?>
				   <td><?php echo $k;$k++;?></td>
				   <td><?php echo $row["name"];?></td>
				   <td><?php echo $row["roll"]; $rroll=$row["roll"];?></td>
				   <td>
					<?php
					$qry="select `$date` from add_stu where tea_eml='$eml' and roll='$rroll'";
					$rres=$conn->query($qry);

                      if($rres->num_rows>0)
                        {
                       $row=$rres->fetch_assoc();
                       echo $row["$date"];
			           if($row["$date"]=="")
					   {
						echo "Not taken yet";
					   }
			         }
					?>
				   </td>
				   </tr>
				   <?php
			  }
			}
			?>
		

	  </table>
	  <?php
 
}else{
	?>
	<div class="warning">
		<h3>Attendence of date <?php echo $date1;?> has not been taken yet ...</h3>
	</div>
	<?php
}
}
?>

<!-- filtering part is ending from here -->









<div class="tableover">
<?php 
if(isset($_POST["btn1"]))
{

?>
<div class="tbl1_heading">
	
	<h3 id="h3">Attendence details for all students : <button onclick="window.print()">Print</button></h3>
	
</div>
<table class="table1" id="ttbl1">
	<tr>
	<th>Sno.</th>
	<th>Student's Name</th>
	<th>Roll NO.</th>
	<th>No. of present</th>
	<th>No. of absent</th>
	<th>Percentage</th>
</tr>
<tr>
	<?php
	 $query="select * from add_stu where tea_eml='$eml'";
	 $result10=$conn->query($query);
	 $j=1;
	 if($result10->num_rows>0)
	 {
	  while($row=$result10->fetch_assoc())
	  {
		$seml=$row["stu_eml"];
		?>
		<td><?php echo $j;$j++;?></td>
		<td><?php echo $row["name"];?></td>
		<td><?php echo $row["roll"];?></td>
		
		<?php
			$present=0;
			$absent=0;
			 $sql="select adate from date where tea_eml='$eml'";
			 $result=$conn->query($sql);
			
			   if($result->num_rows>0)
			   {
				while($row=$result->fetch_assoc())
				{
					$adate=$row["adate"];
                    
						
					$query="select `$adate` from add_stu where `$adate`=`$adate` and tea_eml='$eml' and stu_eml='$seml'";
					$result1=$conn->query($query);
					if($result1->num_rows>0)
					{
						$row=$result1->fetch_assoc();
							
						if($row["$adate"]=="present")
						{
							$present++;
						}else if($row["$adate"]=="absent")
						{
							 $absent++;
						}else{
							
							
						}
						$sum=$present+$absent;

						if($sum==0)
						{
						 $percentage=0;
						}else{
						 $percentage1=$present/$sum*100;
						 $percentage=(int)$percentage1;
						
	}
						 $_SESSION["present"]=$present;
						 $_SESSION["absent"]=$absent;
						 $_SESSION["percentage"]=$percentage;
						
				}
			}
		

	  }
	  ?>
	 <td><?php echo $present;?></td>
	 <td><?php echo $absent;?></td>
	 <td><?php echo $percentage."%";?></td></tr>
	 <?php
	}
}else{
	?>
	<p id="ndf1">No data found!</p>
	<?php
}
	
	?>
	

</table>
</div>
<?php
}
?>
          
        </div>
		

					
				</div>
			</div>
		</div>
	</div>









	<script>
		let o3=document.getElementsByClassName("option3")[0];
		let o1=document.getElementsByClassName("option1")[0];
        let o2=document.getElementsByClassName("option2")[0];
		let o4=document.getElementsByClassName("option4")[0];
        let o9=document.getElementsByClassName("option9")[0];
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
        o9.addEventListener("click",function()
		{
            location.assign("logout.php");
		});
</script>


	
</body>
</html>
