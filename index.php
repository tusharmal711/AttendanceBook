<?php
 require 'config.php';
?>
<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">

</head>
<body>
    

<div class="container">


<div class="logo">
    <img src="attendence.png" alt="">
</div>
<h1>AttendanceBook</h1>

<section class="rotatingText">
  <div class="rotatingText-content">
   

    <h2 class="rotatingText-adjective">easy to use</h2>
    <h2 class="rotatingText-adjective">maintainable</h2>
    <h2 class="rotatingText-adjective">perfect 👌</h2>
  </div>
</section>





<div class="ui">
    <img src="ui.png" alt="">
</div>

<h3>Want to take attendence with online system or are you a student ?</h2>
<button onclick="redirect()">Start with AttendanceBook</button>



<script>
    function redirect()
    {
        location.assign("Ocupation.php");
    }
</script>











</div>







<?php
 $query="select email from teacher_login";
   
 $result=mysqli_query($conn,$query);
 $count=mysqli_num_rows($result);

if($count==1)
 { 
     
     while($row=mysqli_fetch_assoc($result))
     {
       
      
       ?>
       <script>
        location.assign("dash.php");
       </script>
       
       <?php
       session_start();
        $_SESSION["uemail"]=$row["email"];
     }

}




?>







</body>
</html>