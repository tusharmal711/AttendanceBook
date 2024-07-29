
<?php
session_start();

?>
<?php
require 'config.php';
$_SESSION["id"]=1;
$sessionId=$_SESSION['id'];
$eml=$_SESSION["tuseml"];
$teeml=$_SESSION["tea_eml"];
$user=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM add_stu WHERE tea_eml='$teeml' and stu_eml='$eml'"));
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
         <label class="limg"><img src="attendence.png" height="40px" width="40px" alt=""></label>
        <label class="text1">AttendenceBook</label>
      </div>
		
		

		

		<div class="message">
			<div class="circle"></div>
			<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/8.png"
				class="icn"
				alt="">
			<div class="dp">
			<img src="img/<?php echo $user['img'];?>" height="40px" width="40px" onclick="red()">
			</div>
			<i class="fa-solid fa-ellipsis-vertical" id="dot3"></i>
		</div>

	</header>
	<script>
     function red()
	 {
		location.assign("stu_profile.php");
	 }
		</script>

	<div class="main-container">
		<div class="navcontainer">
			<nav class="nav">
				<div class="nav-upper-options">

					<div class="nav-option option1">

          <i class="fa fa-home" style="font-size:24px"></i><a href="stu_dash.php">Dashboard</a>
					</div>

					<div class="nav-option option2">
					
          <i class="fa fa-user-circle-o" style="font-size:24px"></i><a href="stu_profile.php">PROFILE</a>
					</div>

					<div class="nav-option option3">
					
					<i class="fa-regular fa-calendar-check" style="font-size:24px"></i><a href="stu_check.php">CHECK ATTENDENCE</a>
                              </div>
          <div class="nav-option option8">

          <i class="fa fa-question-circle" style="font-size:24px"></i><a href="stu_help.php">HELP</a>
           </div>
           <div class="nav-option option9">

           <i class="fa fa-sign-out" style="font-size:24px"></i><a href="stu_logout.php">LOGOUT</a>
           </div>
				</div>
			</nav>
		</div>

		
		<nav class="navBottom">
				
			<li id="li1"><i class="fa fa-home" id="i1" style="color:cyan" ></i><a href="#"id="a1" style="color:cyan" >Home</a></li>
			<li id="li1"><i class="fa fa-user-circle-o"></i><a href="stu_profile.php">Profile</a></li>
			
			
			<li id="li1"><i class="fa-regular fa-calendar-days"></i><a href="stu_check.php" id="a3">Attendence</a></li>
				
			</nav>













		<div class="main" id="smain">

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
	let main=document.getElementById("smain");
	
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


$connect=mysqli_connect("localhost","root","","reg") or die("connection failed");
$emailu=$_SESSION["tuseml"];
// $passu=$_SESSION["tuspass"];
// $query="SELECT * FROM stu_login WHERE stu_eml='$emailu'";
// $result=mysqli_query($connect,$query);
// $count=mysqli_num_rows($result);

// if($count==1)
// {    if($row=mysqli_fetch_assoc($result) and $row['stu_eml'] === $emailu)
//     {
//         if($row['password']===$passu)
//         {
//               echo $row["tea_eml"];
//               $_SESSION["tea_eml"]=$row["tea_eml"];
//         }
//     }else{echo "error";}
// }else{
//     echo "error";
// }


$teml=$_SESSION["tea_eml"];
 

$query1="select name from add_stu where stu_eml='$emailu' and tea_eml='$teml'";

$result1=mysqli_query($connect,$query1);
$count1=mysqli_num_rows($result1);

if($count1==1)
{ 
    
    while($row=mysqli_fetch_assoc($result1))
    {
      
        $fsname=strtoupper($row["name"]);
		$_SESSION["fsname"]=$fsname;
    }
}









 
  
   
    
    $query="select first_name,last_name,college_name,attendence_class,department,image,subject,session from reg where email='$teml'";
   
    $result=mysqli_query($connect,$query);
    $count=mysqli_num_rows($result);
   
   if($count==1)
    { 
        
        while($row=mysqli_fetch_assoc($result))
        {
            ?>
            <div class="w_m">
            <?php
		 
           echo "WELCOME  ".$fsname;
		   $_SESSION["fname"]=$row['first_name'];
		   $_SESSION["lname"]=$row['last_name'];
		   $_SESSION["cname"]=$row['college_name'];
		   $_SESSION["atclass"]=$row['attendence_class'];
		   $_SESSION["dept"]=$row['department'];
		   $_SESSION["sub"]=$row['subject'];
		   $_SESSION["ses"]=$row['session'];
		   $_SESSION["img"]=$row['image'];
	
           ?>
		   </div>
		   <?php
            
        }
}else{
    echo "Error";
}

?>




<!-- for stu_checkpage is starting from here -->

<?php

			$present=0;
			$absent=0;
			 $sql="select adate from date where tea_eml='$teml'";
			 $result=$conn->query($sql);
			
			   if($result->num_rows>0)
			   {
				while($row=$result->fetch_assoc())
				{
					
				      $adate=$row["adate"];
                    
						
						$query="select `$adate` from add_stu where `$adate`=`$adate` and tea_eml='$teeml' and stu_eml='$eml'";
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
						?>
				

					<?php

				}



				
			}
		





?>








<div class="viewProfile" id="viewProfile">
<i class="fa fa-close" style="font-size:29px" id="cross" onclick="non()"></i>
<img src="img/<?php echo $_SESSION["img"];?>"height="80px" width="78px" class="stuIm">
<h2><?php echo $_SESSION["fname"]." ". $_SESSION["lname"]?></h2>
<h4><?php echo $teeml;?></h4>
<p>TEACHER OF : <?php echo  $_SESSION["cname"];?></p>
<p>TEACHER OF : <?php echo  $_SESSION["dept"]." "."DEPARTMENT";?></p>
<p>MOBILE NO : +919641539527</p>
<p>DEGREE : H.S</p>
</div>















			<div class="box-container" id=boxCon>

				<div class="box box1" id="box1">
				<img src="img/<?php echo $_SESSION["img"];?>"height="50px" width="48px" class="stuImg">
					<div class="text">
					<h2 class="topic-heading">
					<?php 
					echo $_SESSION['fname']." ".$_SESSION['lname'];
					?>
					</h2>
						<h2 class="topic">Teacher's Name</h2>
					</div>

         
				</div>





				<script>
	let viewProfile=document.getElementById("viewProfile");
	let box1=document.getElementById("box1");
	let boxCon=document.getElementById("boxCon");
	let cross=document.getElementById("cross");
	viewProfile.style.display="none";
	box1.addEventListener("click",function()
	{
       viewProfile.style.display="block";
	   boxCon.classList.add("mnone");
	   

	});
	cross.addEventListener("click",function()
	{
		viewProfile.style.display="none";
	   boxCon.classList.remove("mnone");
	});
</script>






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
						<h2 class="topic">Total no of student in your class</h2>
					</div>
        
			
			</div>

			

					
				</div>
			</div>
		</div>
	</div>












</body>
</html>
