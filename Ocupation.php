<?php
     require 'config.php';
    
     session_start();
     ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="Ocupation.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <div class="logo">
    <img src="attendence.png" alt="">
    </div>
    <div class="con">

     <form action="Ocupation.php" method="post">
        <span class="div span">Please choose your occupation</span>
        <select name="dropdown" class="div select" id="dropdown" required>
                        <option value=""class="hhh">Select Occupation</option>
                        <option value ="1">Teacher</option>
                        <option value ="2">Student</option>

        </select>
        <button type="submit" name="submit" id="submit" class="div button">Next <i class="fa-solid fa-arrow-right" id="arrow"></i></button>
     </form>
    </div>
    </div>
    


<?php
if(isset($_POST["submit"]))
{
     $value=$_POST["dropdown"];
     if($value==1)
     {
       
      $phone=$_SESSION['phone'];
      $query="select * from reg where mobile = '$phone';";
        
      $result=mysqli_query($conn,$query);
      $count=mysqli_num_rows($result);
     
     if($count>0)
      { 
          
          while($row=mysqli_fetch_assoc($result))
          {
             if($phone==$row["mobile"])
             {
               header("Location:login_back.php");
             }
          }
      }else{
         header("Location:tea_reg.php");
      }




     }else{
        header("Location:stu_log.php");
     }
}
?>







</body>
</html>