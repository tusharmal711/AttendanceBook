
<?php
session_start();
?>

<?php
$conn=mysqli_connect("localhost","root","","reg") or die ("connection failed");
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
		href="profile.css">
	<link rel="stylesheet"
		href="responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<style media="screen">

    .upload{
      margin-left:5.5rem;
     margin-top:0.7rem;
        width:140px;
        position: relative;
        
        text-align:center;
    }
    .upload img{
        border-radius:50%;
        border:6px solid rgb(131, 10, 245);
       
        box-shadow: 3px 3px 10px rgba(0, 30, 87, 1);
    }
    .upload .rightRound{
        position: absolute;
        bottom: 0;
        right:0;
        box-shadow: 3px 3px 10px rgba(0, 30, 87, 1);
        background:#0084FF;
        width:32px;
        height:32px;
        line-height:33px;
        text-align:center;
        border-radius:50%;
        overflow: hidden;
        cursor: pointer;
        }
        .upload .leftRound{
          box-shadow: 3px 3px 10px rgba(0, 30, 87, 1);
            position: absolute;
        bottom: 0;
        left:0;
        background:red;
        width:32px;
        height:32px;
        line-height:33px;
        text-align:center;
        border-radius:50%;
        overflow: hidden;
        cursor: pointer;
        }
        .upload .fa{
           color:white;
        }
        .upload input{
          margin-top:-0.5rem;
          padding:1rem;
            position: absolute;
            transform:scale(2);
            opacity: 0;
        }
        .upload input::-webkit-file-upload, .upload input[type=submit]
        {
            cursor: pointer;
           
        }

        
    </style>
<body>

	<!-- for header part -->
	<header>

			<div class="logo">
         <label class="limg"><img src="tush.png" height="43px"></label>
        <label class="text1">TushTEAM</label>
      </div>
		
		

		

		<div class="message">
			<div class="circle"></div>
			<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/8.png"
				class="icn"
				alt="">
			<div class="dp">
			

      <img src="img/<?php echo $user['img'];?>" height="40px" width="40px" onclick="opopup()">
      
<?php

$_SESSION['image']=$user['img'];
?>



			</div>
      <i class="fa-solid fa-ellipsis-vertical" id="dot3"></i>
		</div>

	</header>


  <!-- popup box for mobile no editing -->









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

		




	
		





      <div class="profile">


   <div class="content">

   <i class="fa-solid fa-arrow-left" id="arrow" onclick="rever()"></i>
      <script>
 let arrow=document.getElementById("arrow");
function rever()
 {
      location.assign("stu_profile.php");
 }
  </script>





















    <form class="" action="" enctype="multipart/form-data" method="post" class="form">
        <input type="hidden" name="email" value="<?php echo $user['stu_eml'];?>">
        <div class="upload">
        <img src="img/<?php echo $user['img'];?>" id="image" height="105px" width="105px">
        <div class="rightRound" id="upload">
         <input type="file" name="fileImg" id="fileImg" accept=".jpg, .jpeg, .png">
         <i class="fa fa-camera"></i>
        </div>
        <div class="leftRound" id="cancel5" style="display:none">
            <i class="fa fa-times"></i>
         
        </div>
        <div class="rightRound" id="confirm" style="display:none">
            <input type="submit" name="" value="">
            <i class="fa fa-check"></i>
        </div>
        </div>
</form>



<div class="pedit">
<label for="fileImg" id="pedit">
  <p><i class="fa-solid fa-pen-to-square" id="eicon"></i>Edit</p>
      </label>

      </div>

      



<div class="about">



	<h2>
	<?php
	 $query3="select first_name,last_name,college_name,department,subject from reg where email='$teeml'";
   
   $result=mysqli_query($conn,$query3);
   $count=mysqli_num_rows($result);
  
  if($count==1)
   { 
       
       while($row=mysqli_fetch_assoc($result))
       {
          ?>
        <h2 id="user_name">
        <?php
          echo $_SESSION["fsname"];
          ?>
          </h2>
          <?php
          $_SESSION["clgname"]=$row["college_name"];
          $_SESSION["department"]=$row["department"];
          $_SESSION["subject"]=$row["subject"];
         
?>

       <script>
  window.onload = function() {
    if(!window.location.hash) {
        window.location = window.location + '#loaded';
        window.location.reload();
    }
}
    </script>
    <?php
       }
}else{
   echo "Error";
}

?>
	
 
	</h2>
  
   </div>
  
   


   <div class="btn">
	<button type="button" onclick="view()" id="vpp">View Profile Picture</button>
	<button type="button" onclick="edit()" id="eprofile">Edit Profile</button>
</div>



<div class="about1">
	<h4 class="abh4">
      <?php
	  echo "EMAIL ID : ".$eml;
	  ?>
	</h4>
	
	<h4>
		<?php
	 echo "STUDENT OF : ".$_SESSION["clgname"];
	 ?>
   <p id="n2icon" onclick="emedit()"><i class="fa-solid fa-pen-to-square" id="nn2icon"></i>Edit<p>
	</h4>
  
  <h4>
		<?php
	 echo "DEPARTMENT : ". $_SESSION["department"];
	 ?>
   <p id="n1icon" onclick="mnoedit()"><i class="fa-solid fa-pen-to-square" id="nn1icon"></i>Edit<p>
	</h4>
  
  <h4>
		<?php
	 echo "SUBJECT : ".$_SESSION["subject"];
	 ?>
    <p id="nicon"  onclick="niedit()"><i class="fa-solid fa-pen-to-square" id="nnicon"></i>Edit<p>
	</h4>
 
</div>





<p id="n3icon"onclick="clname()"><i class="fa-solid fa-pen-to-square" id="nn3icon"></i>Edit<p>





<div class="pop" id="pop">
<div class="b1">
<label for="vpp">
<p><i class="fa-solid fa-image-portrait" id="click"></i>See Profile Picture</p>
</label>
</div>

<div class="b2">
<label for="fileImg">
<p><i class="fa-solid fa-image" id="click"></i>Change Profile Picture</p>
</label>
</div>

<div class="b3">
<form action="stu_profile.php" method="post">
  <label id="remove1">
<i class="fa-solid fa-trash" id="trash"></i>
<input type="submit" name="remove" id="remove" value='Remove Profile Picture'>
      </label>
 
</form>

</div>




    </div>


    </div>


  


   
   

    <i class="fa fa-close" style="font-size:29px" id="cross" onclick="non()"></i>
    <img src="img/<?php echo $user['img'];?>" id="image" height="410px" width="100%" class="image" ondblclick="zoom()" onclick="zoomin()">
  <p class="npp"></p>

      </div>

     

      










      <div class="popup" id="popup">
  <nav>
   <label for="vpp"><li><p><i class="fa-solid fa-image-portrait" id="click1"></i>View Profile Picture</p></li></label>
   <label for="eprofile"><li id="ep"><p><i class="fa-solid fa-pen-to-square" id="click2"></i>Edit Profile</p></li></label>
   <label for="yes">
   <li id="li3" onmouseover="hover()" onmouseout="hoverout()">
    
      <form action="stu_profile.php" method="post">
     <i class="fa-solid fa-right-from-bracket" id="click3"></i>
      <input type="button" value="Logout"id="yes" onclick="op8()">
      </form>
    </li>
    </label>
      </nav>
</div>

<script>
  let li3= document.getElementById('li3');
  let yes= document.getElementById('yes');
  function hover()
  {
     yes.style.background="rgb(43, 10, 75)";
     yes.style.color="white";
  }
  function hoverout()
  {
     yes.style.background="white";
     yes.style.color="black";
  }
  </script>




<script>
let dp=document.getElementsByClassName("dp")[0];
let popup= document.getElementById('popup');
dp.addEventListener("click",function()
{
  popup.classList.add("popani");
});
window.addEventListener('mouseup',function(event){
       
        if(event.target != pop && event.target.parentNode != pop){
           popup.classList.remove("popani");
        }
  });  

  dp.addEventListener('mouseup',function(event){
       
        if(event.target != pop && event.target.parentNode != pop){
           pop.classList.remove("popani");
        }
  }); 

</script>


<nav class="navBottom">
				
        <li style="color:blue" id="li1"><i class="fa fa-home" id="i1"></i><a href="stu_dash.php"id="a1">Home</a></li>
        <li id="li1"><i class="fa fa-user-circle-o"></i><a href="stu_profile.php">Profile</a></li>
        
        
        <li id="li1"><i class="fa-regular fa-calendar-days"></i><a href="stu_check.php" id="a3">Attendence</a></li>
          
        </nav>
  



































      
<?php
  
    error_reporting(0);
    $connect=mysqli_connect("localhost","root","","reg") or die("connection failed");
if(isset($_POST['yes']))
{
   $email=$_SESSION['email2'];
   session_destroy();
    
   $sql="DELETE FROM teacher_login where email='$email'";
   if ($connect->query($sql) === TRUE) {
       echo "Record deleted successfully";
     } else {
       echo "Error deleting record: " . $conn->error;
     }
   ?>
   <script>
    location.assign("index.php");
    </script>
   <?php
    exit();
}
?>







<?php
if($user['img']=="655b1f3230d3eprofile.png")
{
 ?>
 <script>
function rak()
{
  return true;
}
</script>
 <?php
}
?>
<?php
if(isset($_POST['remove']))
{
  $query1 = "UPDATE add_stu SET img = '655b1f3230d3eprofile.png' WHERE tea_eml='$teeml' AND stu_eml='$eml'";
  if ($connect->query($query1) === TRUE) {
	echo "Record deleted successfully";
  } else {
	echo "Error deleting record: " . $conn->error;
  }
  // and reloading browser immediatly
  ?>
<script>
	location.assign("stu_profile.php");
</script>
  <?php
 
}
?>








      <script>
          let imgs=document.getElementsByClassName("image")[0];
          imgs.style.display="none";
          let cross=document.getElementById("cross");
          let profile=document.getElementsByClassName("profile")[0];
          let content=document.getElementsByClassName("content")[0];
          let npp=document.getElementsByClassName("npp")[0];
          let vpp=document.getElementById("vpp");
          
     cross.style.display="none";
         
        vpp.addEventListener("click",function()
        {
          if(rak()==true)
         {
           npp.innerHTML="NO PROFILE PICTURE";
           npp.style.display="block";
         }
        });
        function view()
        {
       
          profile.classList.add("cover");
          imgs.style.display="block";
          cross.style.display="block";
        content.style.display="none";
        
        
        }
        function zoom()
        {
          
          profile.classList.add("zoom");
         
          return true;
        }
        function zoomin(){
          if(zoom()==true)
          {
          
            profile.classList.remove("zoom");
          }
        }
       function non()
       {

        profile.classList.remove("cover");
        imgs.style.display="none";
          cross.style.display="none";
        content.style.display="block";
        npp.style.display="none";
       }
        </script>












<!-- edit option is starting form here -->




<div class="popup4">
<form action="profile.php" method="post">
  <span>Change name here</span>
  <div>
    <span>First name</span>
  </div>
      <div>
        <input type="text" name="ffname" id="ffname" required>
      </div>
      <div>
    <span>Last name</span>
  </div>
      <div>
        <input type="text" name="llname" id="llname" required>
      </div>
    
      <div class="ubutton">
        <input type="button" value="Cancel" id="cancel" onclick="cancel1()">
       
        <input type="submit" name="save" value="Save" id="save">
      
      </div>
      </form>
</div>




<div class="popup5">
 <form action="profile.php" method="post">
  <span>Change department name</span>
  <div>
    <input type="text" name="mno" id="mno" required>
      </div>
      <div class="ubutton1">
        <input type="button" value="Cancel" id="cancel1" onclick="cancel2()">
       
        <input type="submit" name="save1" value="Save" id="save1">
      
      </div>
      </form>
</div>




<div class="popup6">
 <form action="profile.php" method="post">
  <span>Change institution name</span>
  <div>
    <input type="text" name="el" id="el" required>
      </div>
      <div class="ubutton2">
        <input type="button" value="Cancel" id="cancel2" onclick="cancel3()">
       
        <input type="submit" name="save2" value="Save" id="save2">
      
      </div>
      </form>
</div>


<div class="popup7">
 <form action="profile.php" method="post">
  <span>Change subject name</span>
  <div>
   <input type="text" name="subname" id="clname" required>
      </div>
      <div class="ubutton3">
        <input type="button" value="Cancel" id="cancel3" onclick="cancel4()">
       
        <input type="submit" name="save3" value="Save" id="save3">
      
      </div>
      </form>
</div>



<div class="popup8">
  <form action="profile.php" method="post">
  <span>Logout of your account?</span>
  <div class="logbtn">
    <button type="button" id="logbtn1" onclick="can8()">Cancel</button>
    <button type="submit" name="yes" id="logbtn2">Logout</button>
  </div>
      </form>
</div>


<!-- errror popup box starting form here -->

<!-- error popup box ending here -->


<script>
   let upload=document.getElementById("upload");
   let btn=document.getElementsByClassName("btn")[0];
   let pedit=document.getElementsByClassName("pedit")[0];
   let about1=document.getElementsByClassName("about1")[0];
   let abh4=document.getElementsByClassName("abh4")[0];
   let h4=about1.querySelectorAll("h4")[2];
   let h1=about1.querySelectorAll("h4")[1];
   let pop=document.getElementById("pop");
   let nicon=document.getElementById("nicon");
   let n1icon=document.getElementById("n1icon");
   let n2icon=document.getElementById("n2icon");
   let n3icon=document.getElementById("n3icon");
   let errbtn2=document.getElementById("errbtn2");
   pedit.style.display="none";
   nicon.style.display="none";
   n1icon.style.display="none";
   n2icon.style.display="none";
   n3icon.style.display="none";
   arrow.style.display="none";

  function edit()
  {
    abh4.style.display="none";
   profile.classList.add("topu");
    h4.classList.add("pad1");
    h1.classList.add("pad1");
    about1.classList.add("top");
    arrow.style.display="block";
    n3icon.style.display="block";
    n1icon.style.display="block";
    nicon.style.display="block";
    pedit.style.display="block";
   upload.style.display="none";
   btn.style.display="none";
   pop.style.display="none";
   n2icon.style.display="block";
  }
  let popup4=document.getElementsByClassName("popup4")[0];
  let popup5=document.getElementsByClassName("popup5")[0];
  let popup6=document.getElementsByClassName("popup6")[0];
  let popup7=document.getElementsByClassName("popup7")[0];
  let popup8=document.getElementsByClassName("popup8")[0];

  let dp1=document.getElementsByClassName("dp")[0];
  popup4.style.display="none";
  popup5.style.display="none";
  popup6.style.display="none";
  popup7.style.display="none";
  popup8.style.display="none";
function niedit()
{
  dp1.classList.add("notclick");
  profile.classList.add("notclick");
  profile.classList.add("opacity");
 popup4.style.display="block";
}

function mnoedit()
{
  dp1.classList.add("notclick");
  profile.classList.add("notclick");
  profile.classList.add("opacity");
  popup5.style.display="block";
}

function cancel1()
{
  dp1.classList.remove("notclick");
  profile.classList.remove("notclick");
  profile.classList.remove("opacity");
popup4.style.display="none";
}

function cancel2()
{
  dp1.classList.remove("notclick");
  profile.classList.remove("notclick");
  profile.classList.remove("opacity");
popup5.style.display="none";
}

function emedit()
{
  dp1.classList.add("notclick");
  profile.classList.add("notclick");
  profile.classList.add("opacity");
  popup6.style.display="block";
}
function cancel3()
{
  dp1.classList.remove("notclick");
  profile.classList.remove("notclick");
  profile.classList.remove("opacity");
popup6.style.display="none";
}


function clname()
{
  dp1.classList.add("notclick");
  profile.classList.add("notclick");
  profile.classList.add("opacity");
  popup7.style.display="block";
}
function cancel4()
{
  dp1.classList.remove("notclick");
  profile.classList.remove("notclick");
  profile.classList.remove("opacity");
popup7.style.display="none";
}


function op8()
{
  dp1.classList.add("notclick");
  profile.classList.add("notclick");
  profile.classList.add("opacity");
  popup8.style.display="block";
}

function can8()
{
  dp1.classList.remove("notclick");
  profile.classList.remove("notclick");
  profile.classList.remove("opacity");
popup8.style.display="none";
}
   


  </script>



<?php
 if(isset($_POST['save']))
 {
  $ufname=$_POST['ffname'];
 $ulname=$_POST['llname'];
 $fname1=strtoupper($ufname);
    $lname1=strtoupper($ulname);
 $query2 = "UPDATE reg SET first_name = '$fname1' WHERE email='$eml'";
 $query3 = "UPDATE reg SET last_name = '$lname1' WHERE email='$eml'";
  mysqli_query($conn, $query2);
  mysqli_query($conn, $query3);
 }
 ?>





<!-- php code for changing college name -->
<?php
 if(isset($_POST['save2']))
 {
  $clname=$_POST['el'];
  $clname=strtoupper($clname);
 $query6 = "UPDATE reg SET college_name = '$clname' WHERE email='$eml'";
  mysqli_query($conn, $query6);

 }
 ?>


<!-- php code for changing department -->

<?php
 if(isset($_POST['save1']))
 {
  $clname=$_POST['mno'];
  $clname=strtoupper($clname);
 $query6 = "UPDATE reg SET department = '$clname' WHERE email='$eml'";
  mysqli_query($conn, $query6);

 }
 ?>



<?php
 if(isset($_POST['save3']))
 {
  $clname=$_POST['subname'];
  $clname=strtoupper($clname);
 $query6 = "UPDATE reg SET subject = '$clname' WHERE email='$eml'";
  mysqli_query($conn, $query6);

 }
 ?>



<!-- edit option is ending here -->




























<script>

let logo= document.getElementById('image');
let bod=document.querySelector("body");
logo.addEventListener("click",function()
{
  pop.classList.add("dis");
});
window.addEventListener('mouseup',function(event){
        var pop = document.getElementById('pop');
        if(event.target != pop && event.target.parentNode != pop){
           pop.classList.remove("dis");
        }
  });  

  logo.addEventListener('mouseup',function(event){
        var pop = document.getElementById('pop');
        if(event.target != pop && event.target.parentNode != pop){
           pop.classList.remove("dis");
        }
  }); 

</script> 












<script type="text/javascript">
    document.getElementById("fileImg").onchange = function(){
        document.getElementById("image").src = URL.createObjectURL(fileImg.files[0]);
        document.getElementById("cancel5").style.display="block";
        document.getElementById("confirm").style.display="block";
        document.getElementById("upload").style.display="none";
    }
    var userImage=  document.getElementById("image").src;
    document.getElementById("cancel5").onclick=function()
    {
        document.getElementById("image").src = userImage;
        document.getElementById("cancel5").style.display="none";
        document.getElementById("confirm").style.display="none";
        document.getElementById("upload").style.display="block";
    }
</script>
<?php 
if(isset($_FILES["fileImg"]["name"])){
    $email=$_POST["email"];
    $src=$_FILES["fileImg"]["tmp_name"];
    $imageName=uniqid() . $_FILES["fileImg"]["name"];
    $target= "img/" . $imageName;
    move_uploaded_file($src, $target);
    $query = "UPDATE add_stu SET img = '$imageName' WHERE tea_eml='$teeml' and stu_eml='$eml'";
   
    mysqli_query($conn, $query);
    ?>
              <script>
                location.assign("stu_profile.php");
                </script>
              <?php
}
?>








			<!-- <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210180014/profile-removebg-preview.png"
					
					height="105px" width="105px" class="lg"> -->
		


        






					
			


        
			</div>
      
		</div>




    
	</div>




















	<script src="./index.js"></script>






	</div>



</body>
</html>
