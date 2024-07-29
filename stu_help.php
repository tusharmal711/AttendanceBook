
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
		href="stu_help.css">
	<link rel="stylesheet"
		href="responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>



	<!-- for header part -->
	<header>

		
			<div class="logo">
         <label class="limg"><img src="tush.png" height="43px"></label>
        <label class="text1">TushTEAM</label>
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
			<img src="img/<?php echo $user['img'];?>" height="40px" width="40px" onclick="red()">
			</div>
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

          <i class="fa fa-home" style="font-size:24px"></i><a href="stu_dash.php">DASHBOARD</a>
					</div>

					<div class="nav-option option2">
					
          <i class="fa fa-user-circle-o" style="font-size:24px"></i><a href="stu_profile.php">PROFILE</a>
					</div>
                    <div class="nav-option option3">
					
                    <i class="fa fa-user-circle-o" style="font-size:24px"></i><a href="stu_check.php">CHECK ATTENDENCE</a>
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





	
	
           

			

					
				</div>
			</div>
		</div>
	</div>












</body>
</html>
