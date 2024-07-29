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
		href="attendence1.css">
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

           <i class="fa fa-sign-out" style="font-size:24px"></i><a href="logout.php">LOGOUT</a>
           </div>
				</div>
			</nav>
		</div>
		<nav class="navBottom">
				
			<li style="color:blue"><i class="fa fa-home" id="i1"></i><a href="dash.php" id="a1">Home</a></li>
			<li><i class="fa fa-user-circle-o"></i><a href="profile.php">Profile</a></li>
			<li id="li3"><i class="fa-solid fa-circle-plus"></i><a href="attendence.php" id="ed1">Add</a></li>
			<li><i class="fa fa-address-card" id="i3"  style="color:cyan"></i><a href="attendence1.php" id="ed"  style="color:cyan">Attendence</a></li>
			<li><i class="fa-regular fa-calendar-days"></i><a href="cattendence.php">Check</a></li>
				
			</nav>
		<div class="main" id="main">

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




        <div class="headingTop">
        <form action="attendence1.php" method="post">
            <h2>Take Attendence Here</h2>
            <div class="formTop">
                <span>Take attendence here for date : <input type="date" name="adate" required></span>
                <button type="submit"  name="dsub" id="dsub"><i class="fa-solid fa-plus"></i> Create Table</button>
            </div>
       </form>
	   <form action="attendence1.php" id="form" method="post">
		<div class="formDown">
			<span>Update table of <input type="date" name="udate" required></span>
			<button type="submit" name="utbl" id="utbl"><i class="fa-regular fa-pen-to-square"></i> Update Table</button>
		</div>
	   </form>
        </div>

		


		<?php 
if(isset($_POST["utbl"]))
{
	$date1=$_POST["udate"];
	$_SESSION["DATE"]=$date1;
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
	 <form action="attendence1.php" method="post">
	  <table class="table1">
		<tr>
			<th>Sno.</th>
			<th>Name</th>
			<th>Roll No.</th>
			<th>Attendence</th>
			<th>Update</th>
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
				$_SESSION["sno"]=$row["sno"];
					
                   ?>
				   <td><?php echo $k;?></td>
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
						echo "Attendence has not been taken";
					   }
			         }
					?>
				   </td>
				   <td>
					
					
		             <?php echo"<select name='sstatus[{$_SESSION['sno']}]' class='drop1'>
					                 <option value=''class='hhh'>Select Attendence here</option>
                                      <option value ='present' name='sstatus[{$_SESSION['sno']}]'>present</option>
                                      <option value ='absent' name='sstatus[{$_SESSION['sno']}]'>absent</option>
                       </select>";?>
					  
					
				   </td>
				   </tr>
				   <?php
				$k++;
			  }
			}
			?>
		

	  </table>
      
	  <input type="submit" name="subb" id="subb" value="Update">
	  </form>

	<?php 
}
}
	?>

<!-- filtering part is ending from here -->



















		<script>
		let o3=document.getElementsByClassName("option3")[0];
		let o1=document.getElementsByClassName("option1")[0];
        let o2=document.getElementsByClassName("option2")[0];
		let o5=document.getElementsByClassName("option5")[0];
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
        o9.addEventListener("click",function()
		{
            location.assign("logout.php");
		});
		o5.addEventListener("click",function()
		{
            location.assign("cattendence.php");
		});
</script>

		<div class="tableContainer">
	  <form action="attendence1.php" method="post">
        <?php
		error_reporting(0);
		
		if(isset($_POST['dsub']))
		{
			$adate=$_POST['adate'];
			?>
			<h3 id="take">Take attendence of : <?php echo $adate;?></h3>
			<?php
		
		
			try{
			
			 $query99="select * from date";
			 $result99=$conn->query($query99);
			if($result99->num_rows>0)
			{
				
			 while($row=$result99->fetch_assoc())
			 {
				if($row["adate"]==$adate && $row["tea_eml"]==$eml)
				{
					
					?>
					<script>
						let take=document.getElementById("take");
						take.style.display="none";
					</script>
					<div class="exist_table">
                     <h3>Attendence table of <?php echo $adate;?> is already exist , you can update table ...</h3>
					</div>
					<?php
					
					return;
					
				}
				
			 }
			 
			}
            
			
				// $adate=date("Y-m-d");
				
			 

			$query="ALTER TABLE `add_stu` ADD `$adate` VARCHAR(100) NOT NULL";
		    // mysqli_query($conn,$query);
			$_SESSION['aadate']=$adate;
			if($conn->query($query)==true)
				{
					
					




				}else{
					echo "Error";
				}
			
               
			 
		
			
			
			?>
		
	    <table class="table1" id="tush_table">
		
	    <tr>
		<th>Sno.</th>
		<th>Name</th>
		<th>Roll NO</th>
		<th>Attendence</th>
	    </tr>
			<?php
			$query3="select sno,name,roll,img,stu_eml from add_stu where tea_eml='$eml'";
			$i=1;
			$result=$conn->query($query3);
			if($result->num_rows>0)
			{
				
			 while($row=$result->fetch_assoc())
			 {
				$_SESSION['ssno']=$row['sno'];
				$_SESSION['sname']=$row['name'];
				$_SESSION['sroll']=$row['roll'];
                

				 ?>
             <tr>
			 <td><?php echo $i;$i++;?></td>
			 <td><?php echo $row['name'];?></td>
			 <td><?php echo $row['roll'];?></td>
			 <td>

             
			  <div class="pa2">
			  <label for="<?php echo $row["sno"]?>" id="lpr"><span><div id="dpr"><?php echo "<input type='radio' name='status[{$row['sno']}]' id='pr' value='present' required>Present";?></div></span></label>
			  <label for="<?php echo $i++;?>"><div id="dab"><?php echo "<input type='radio' name='status[{$row['sno']}]' id='ab' value='absent' required> Absent";echo "<br>";?></div><label>
			 </div>
			 
			 <?php
			 }
			 ?>
			
			 </td>
			 </tr>
			</table>
			 <div class="button">
	   <button type="button" id='cancel'>Cancel</button>
	    <input type="submit" name='submit' id="save"value='Save'>
       </div>
	           
			 <?php
				 
		}else{
			?>
		<p id="ermsg"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> No student is found . Please add students  in the table...</p>
		<?php
		?>
		<script>
			let table1=document.getElementsByClassName("table1")[0];
			
			table1.style.display="none";
		    
			</script>
		<?php
		}
	
}catch(Exception $e)
{
	
	?>
	<table class="table1">
	<tr>
	<th>Sno.</th>
	<th>Name</th>
	<th>Roll NO</th>
	<th>Attendence</th>
	</tr>
		<?php
		$query3="select sno,name,roll,img,stu_eml from add_stu where tea_eml='$eml'";
		$i=1;
		$result=$conn->query($query3);
		if($result->num_rows>0)
		{
			
		 while($row=$result->fetch_assoc())
		 {
			$_SESSION['ssno']=$row['sno'];
			$_SESSION['sname']=$row['name'];
			$_SESSION['sroll']=$row['roll'];
			$l=0;

			 ?>
		 <tr>
		 <td><?php echo $i;$i++;?></td>
		 <td><?php echo $row['name'];?></td>
		 <td><?php echo $row['roll'];?></td>
		 <td>

		 
         <div class="pa2">
		 <label for="<?php echo $row["sno"]?>" onclick="fun1()"><div id="dpr"><input type='radio' name="<?php echo "status[{$row['sno']}]";?>" id="<?php echo "{$row['sno']}";?>" class="prs" onclick="fun1()" value='present' required> Present</div></label>
		 <label for="<?php echo $i;?>"><div id="dab"><?php echo "<input type='radio' name='status[{$row['sno']}]' id='{$i}' value='absent' required> Absent";?></div></label>
		  
		 </div>
		 <script>
			let a=document.getElementById("dpr");
			let prs=document.getElementsById("prs")[0];
			function fun1()
			{
				
				a.style.background="green";
				a.style.color="white";
				

			}
			
		   </script>
		<?php
		 
		 }
		 ?>
           
		   
		
		
		
		   </td>
		   
		 </tr>
		 </table>
		 <div class="button">
	<button type="button" id='cancel'>Cancel</button>
	<input type="submit" name='submit' id="save"value='Save'>
</div>
		 <?php
			 
	}else{
		?>
		<p id="ermsg"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> No student is found . Please add students  in the table...</p>
		<?php
		?>
		<script>
			let table1=document.getElementsByClassName("table1")[0];
			
			table1.style.display="none";
		    button.style.display="none";
			</script>
		<?php
	}
}
}
		
		?>
        
	



<script>

	let button=document.getElementsByClassName("button")[0];
	button.style.display="none";

   let cancel=document.getElementById("cancel");
   let table=document.getElementsByClassName("table1")[0];
   cancel.addEventListener("click",function()
   {
     table.style.display="none";
	 button.style.display="none";
	 take.style.display="none";
   });




	</script>






<?php

if(isset($_POST['dsub']))
		{
      ?>
          <script>
      button.style.display="block";
	 
	 
	 
		  </script>
		  <?php
		  

		}
		?>
		
		<div class="popup">
<p class="msg">Attendence for <?php echo $_SESSION["atclass"];?> has been saved successfully</p>
<button id="ok">OK</button>
</div>
	  
		<?php

	try{	
		//  $aadate=date("Y-m-d");
		$adate=$_SESSION["aadate"];
$sql="SELECT `$adate` FROM add_stu WHERE tea_eml='$eml'";
$result=$conn->query($sql);
if($result->num_rows>0)
		{
			
		 while($row=$result->fetch_assoc())
		 {
		
		
		if(!empty($row["$adate"]))
		{
			
			?>
			
			<?php
		}
		
			
		
	}
	}
}catch(Exception $e)
{

}

		

?>
	</form>


	<script>
		
		let popup=document.getElementsByClassName("popup")[0];
		let ok=document.getElementById("ok");

		popup.style.display="none";
		ok.addEventListener("click",function()
		{
			
			
			
            popup.style.display="none";
		});
		
		</script>
<?php


$count=0;
if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST['submit']))
{
	

	
   
	$sql="INSERT INTO `date` (`tea_eml`,`adate`) VALUES ('$eml','$adate')";
	if($conn->query($sql)==true)
	{
		echo "Date insert";
	}else{
		echo "date not inserted";
	}

   


	?>
	<!-- <script>
		 let ch=document.getElementById("dsub");
		 var icon='<i class="fa-solid fa-pen-to-square" id="click2"></i>';
				var text="Update Table";
				var combHTML=icon + ' ' + text;
				change.innerHTML=combHTML;
		</script> -->
	<?php
	$status=$_POST['status'];
	$sno=$_SESSION['ssno'];

	$adate=$_SESSION['aadate'];
	foreach($status as $sno =>$value)
	{
		
			$sql="UPDATE `add_stu` SET `$adate` = '$value' WHERE `add_stu`.`sno` = '$sno';";
			$conn->query($sql);
			
		  
	}

	?>
	<script>
        popup.style.display="block";
		
		</script>
	<?php
}

?>

<?php

if(isset($_POST['subb']))
{
	

	
$sql111="SELECT sno,roll FROM add_stu WHERE tea_eml='$eml'";
$result111=$conn->query($sql111);
if($result111->num_rows>0)
		{
			
		 if($row=$result111->fetch_assoc())
		 {
			$_SESSION['sssno']=$row["sno"];
		 }
		}
   
	
	$sstatus=$_POST['sstatus'];
	$sno=$row['sno'];
	$uudate=$_SESSION["DATE"];
    
	
		
	foreach($sstatus as $sno =>$value)
	{
			$sqll="UPDATE `add_stu` SET `$uudate` = '$value' WHERE `add_stu`.`sno` = '$sno' ";
			$conn->query($sqll);
			
	}
	


}

?>












	</div>






	










		

		

					
				</div>
			</div>
		</div>
	</div>


    

</body>
</html>