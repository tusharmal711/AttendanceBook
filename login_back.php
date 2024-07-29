<?php
     require 'config.php';
    
     session_start();
     ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login_back.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
    <h2>Login with...</h2>
    <button id="button">
    <i class="fa-solid fa-arrow-left"></i> Back
    </button>
    <div class="btn_container">
    <button id="b_other">Login with other account</button>
    <p class="or">------------ or -------------</p>
    <button id="r_other">Create a new account</button>
    <p class="or">------------ or -------------</p>
    </div>
    <div class="container">
   
   
    <script>
        let button=document.getElementById("button");
        let other=document.getElementById("b_other");
        let create=document.getElementById("r_other");
        button.addEventListener("click",function()
    {
                location.assign("Ocupation.php");
    });
    other.addEventListener("click",function()
    {
                location.assign("tea_log.php");
    });
    create.addEventListener("click",function()
    {
                location.assign("tea_reg.php");
    });
    </script>
   <?php
   
        $phone=$_SESSION['phone'];
       
   
     $query="select * from reg where mobile = '$phone';";
        
        $result=mysqli_query($conn,$query);
        $count=mysqli_num_rows($result);
       
       if($count>0)
        { 
            
            while($row=mysqli_fetch_assoc($result))
            {
                $i=0;
                ?>
               
                <div class="main-div">
                    
                    <img src="img/<?php echo $row['image'];?>" width="55px" height="55px" id="log_img">
                    
                    <div class="sentence">
                    <p>Name:<?php
                    echo $row["first_name"]." ".$row["last_name"];
                    ?></p>
                     <p>Email:<?php
                    echo $row["email"];
                   
                    ?></p>
                     <p>College:<?php
                    echo $row["college_name"];
                    ?></p>
                     <p>Department:<?php
                    echo $row["department"];
                    ?></p>
                     <p>Subject:<?php
                    echo $row["subject"];
                    ?></p>
                      <p>Year:<?php
                    echo $row["session"];
                    ?></p>
                    </div>
                    <div>
                   <form action="login_back.php" method="post">
                    <button type="submit" name="<?php echo $row["sno"];?>">Login</button>
                    </form>
                    </div>
<?php
if(isset($_POST[$row["sno"]]))
{
$ssno=$row["sno"];
$nquery="select email,password from reg where sno='$ssno'";
  
$result1=mysqli_query($conn,$nquery);
$count1=mysqli_num_rows($result1);

if($count1>0)
{ 
    
    if($row=mysqli_fetch_assoc($result1))
    {
        $email=$row["email"];
        $password=$row["password"];
        $sql="INSERT INTO `reg`.`teacher_login`(`email`, `password`, `date`) VALUES ('$email', '$password', current_timestamp());";
        $_SESSION["email2"]=$email;
         $_SESSION["login"]=1;
                $i=1;
               $_SESSION["i"]=$i++;
         if($conn->query($sql)==true)
         {
             echo "successful";
         }else{
             echo "Error:$sql<br>$con->error";
         }

        $_SESSION["uemail"]=$row["email"];
        setcookie('uuname',$row["email"],time()+60*60*24*30);
        header("Location:dash.php");

    }
}
}

?>

                </div>
                <?php
            }
        }
     
    ?>







</div>
</body>
</html>