
<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" integrity="sha512-HXXR0l2yMwHDrDyxJbrMD9eLvPe3z3qL3PPeozNTsiHJEENxx8DH2CxmV05iwG0dwoz5n4gQZQyYLUNt1Wdgfg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="tea_log.css">
    <script src="tea_log.js"></script>
    <title>Document</title>
</head>
<body>
<!-- login form starting -->
<script>
    function myFunction() {
var x = document.getElementById("password");
var y = document.getElementById("toggler");
if (x.type === "password") {
  x.type = "text";
y.className="fa fa-eye";
} else {
  x.type = "password";
  y.className="fa fa-eye-slash";
}
}
function myFunction1() {
var x = document.getElementById("password1");
var y = document.getElementById("toggler1");
if (x.type === "password") {
  x.type = "text";
y.className="fa fa-eye";
} else {
  x.type = "password";
  y.className="fa fa-eye-slash";
}
}




function myFunction2() {
var x = document.getElementById("mpassword");
var y = document.getElementById("mtoggler");
if (x.type === "password") {
  x.type = "text";
y.className="fa fa-eye";
} else {
  x.type = "password";
  y.className="fa fa-eye-slash";
}
}







  </script>








<div class="container">
    <div class="design">
   <div class="img" width="100%" height="100%">
  
  <h1>TEACHER'S LOGIN</h1>
 <div class="rot">
  <img src="mam-cutout.png">
   <p>
  <span>Login</span>
  <span>with</span>
  <span>your</span>
  <span>personal</span>
  <span>required</span>
  <span>details.</span>
  <span>100%</span>
  <span>security</span>
  <span>guarantee!</span>
 
  
</p>
</div>
   </div>
 
    </div>
    <div class="login">
      <form action="tea_log.php" method="post">
      <h2>Login Here</h2>
   <div class="all">
         <div class="txt_field">
            <input type="text"name="email"required>
            <span><i class="fa fa-envelope"id="gmail"></i></span>
            <label class="lb">Email Id</label>
         </div>
         <div class="txt_field">
            <input type="password"id="password"name="password"required>
            <span><i id="toggler"class="fa fa-eye-slash"onclick="myFunction()"></i></span>
            <span></span>
            <label class="lb">Password</label>
         </div>    
</div>
      <div class="checkbox">
        <input type="checkbox"id="checkbox"name="checkbox1">
        <span class="rm">Remember Me</span>
          </div>
          <div class="fp">
       <a href="#"onclick="openPopup1()">Forgot password?</a>
        </div>   
     <div class="log">
         <input type="submit"name="submit"value="Login"class="btn">
         </div>
         <div class="signup_link">
            Don't have an account?<a href="tea_reg.php"class="have">Register</a>
         </div>
</form>
     </div>
</div>
<!-- login form ending  -->



<!-- another login from is starting from here -->
  

<div class="mlogin">
  <form action="tea_log.php" method="post">
    <h2>Login here</h2>
    <div class="mcontainer">
    <div class="memail">
      <span>Enter your email id</span>
      <input type="email" name="email" id="memail" required>
      <span id="emi"><i class="fa fa-envelope"id="gmail"></i></span>
    </div>
    <div class="mpassword">
      <span>Enter your password</span>
      <input type="password" name="password" id="mpassword" required>
      <span id="eye1"><i id="mtoggler"class="fa fa-eye-slash"onclick="myFunction2()"></i></span>
    </div>
    <div class="rf">
      <p> <input type="checkbox"id="checkbox"name="checkbox1">
      <span class="rm">Remember Me</span></p>
      <div class="fp">
       <a href="#"onclick="openPopup1()">Forgot password?</a>
        </div>  
    </div>
    <input type="submit"name="submit"value="Login" id="button">
    <p id="rg"> Don't have an account? <a href="tea_reg.php"class="have">Register</a></p>
    </div>
  </form>
</div>







































<div class="footerContainer">
    <div class="socialIcons">
        <a href="https://www.facebook.com/tushar.mal.33"><i class="fa-brands fa-facebook"></i></a>
        <a href="https://www.instagram.com/myself__tushar_/"><i class="fa-brands fa-instagram"></i></a>
        <a href="#"><i class="fa-brands fa-twitter"></i></a>
        <a href="#"><i class="fa-brands fa-telegram"></i></a>
        <a href="#"><i class="fa-brands fa-youtube"></i></a>
    </div>
    <div class="footerNav">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="stu_log.php">Student Login</a></li>
            <li><a href="tea_log.php">Teacher Login</a></li>
            <li><a href="tea_reg.php">Teacher Registration</a></li>
            <li><a href="#">Help</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact_us.php">Contact Us</a></li>
        </ul>
    </div>
    <div class="footerBottom">
        <p>Copyright &copy;2023; Designed by <span class="designer">TushTeam</span></p>
    </div>
</div>
  <!-- menu -->
  <div class="header">
    <input type="checkbox" class="toggle-sidebar" id="toggle-sidebar">
    <label for="toggle-sidebar" class="toggle-icon">
    <div class="bar-top"> </div>
    <div class="bar-center"></div>
    <div class="bar-end"></div>
    </label>
<!-- search bar starting -->
<div class="search-box">
  <input type="text" class="search-input" id="myInput" placeholder="Search here..." onkeyup="mySearch()">
  <a class="search-btn" href="#" onclick="mySearch()">
    <!-- Seach Icon -->
    <i class="fas fa-search"></i>
  </a>
</div>
<!-- when open sidenav then stop scrolling starting from here -->
<script>
      let checkbox = document.getElementById("toggle-sidebar");
      checkbox.addEventListener( "change", () => {
         if ( checkbox.checked ) {
            disableScroll();
         } else {
            enableScroll();
         }
      });
   </script>
<!-- when open sidenav then stop scrolling ending here -->
<script>
function mySearch() {
  // Declare variables
  var input, filter,a, i, txtValue;
  input = document.getElementById('myInput');
  filter = input.value.toUpperCase();
  let contain=document.getElementsByClassName("container")[0];
  let fo=contain.getElementsByTagName("form")[0];
  let user=fo.getElementsByClassName(" user-details")[0];
  let inputBox=user.getElementsByClassName("input-box");

  // Loop through all list items, and hide those who don't match the search query
  for (i = 0; i < inputBox.length; i++) {
    a = inputBox[i].getElementsByTagName("span")[0];
    txtValue = a.textContent || a.innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
          inputBox[i].classList.add("add");
    }
    else{
        inputBox[i].classList.remove("add");
    }
  if(filter=="")
  {
    inputBox[i].classList.remove("add");
  }
}
}
</script>
<!-- search bar ending -->
    <div class="sidebar">
    <ul class="menu">
        <li><a href="index.php">Home <label for="toggle-sidebar"><i class="fa fa-close" id="cross"></i></label></a></li>
        <li><a href="stu_log.php">Student Login</a></li>
        <li><a href="tea_log.php">Teacher Login</a></li>
        <li><a href="tea_reg.php">Teacher Registration</a></li>
        <li><a href="#">Help</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact_us.php">Contact Us</a></li>
    </ul>
 <ul class="icons">
        <a href="https://www.facebook.com/tushar.mal.33"><i class="fa-brands fa-facebook"></i></a>
        <a href="https://www.instagram.com/myself__tushar_/"><i class="fa-brands fa-instagram"></i></a>
        <a href="#"><i class="fa-brands fa-twitter"></i></a>
        <a href="#"><i class="fa-brands fa-telegram"></i></a>
        <a href="#"><i class="fa-brands fa-youtube"></i></a>
    </ul>
 </div>
 </div>
<!-- backend starting of login form -->
 <div class="popup"id="popup">
        <img src="invalid.png">
        <i class="fa fa-close" id="cross1" onclick="closePopup()"></i>
        <h1>Sorry</h1>
        <p id="ic">Invalid Credentials.<br>Wrong email and password...</p>
        <button type="button"onclick="closePopup()">OK</button>
    </div>
    <script>
    let popup = document.getElementById("popup");
    let bod=document.querySelector("body");
 let form=document.querySelector("form");
 let container=document.getElementsByClassName("container")[0];
 let header=document.getElementsByClassName("header")[0];
 let design=document.getElementsByClassName("design")[0];
 let login=document.getElementsByClassName("login")[0];
 let btn=document.getElementsByClassName("search-btn")[0];
 let btn1=document.getElementsByClassName("btn")[0];
 let footer=document.getElementsByClassName("footerContainer")[0]
 let img=document.getElementsByClassName("img")[0];
   </script>
 <!-- forget password part is starting from here -->
<div class="popup8" id="popup8">
<div class="loader" id="loader"></div>
<!-- <label>Sending...</label> -->
</div>
 <script>
  
       let popup8 = document.getElementById("popup8");
       document.onreadystatechange = function () {
   if (document.readyState !== "complete") {
   
   popup8.style.visibility='visible';
      // show loading indicator and hide body
   } else {
    popup8.style.visibility='hidden';
   
      // show body, and hide loading indicator
   }
};

    </script>
 <div class="popup1"id="popup1">
        <img src="email.png">
        <i class="fa fa-close" id="cross1" onclick="closePopup1()"></i>
        <h1>SEND OTP</h1>
        <form action="tea_log.php" method="post">
        <div class="fp1">
        <label class="llb">Enter your email id here</label>
        <input type="email" name="email" class="em" required>
     </div>
        <button type="submit" name="send">SEND OTP</button>
     </form>
    </div>
    <script>
    let popup1 = document.getElementById("popup1");
   
    
   </script>
 <div class="popup2"id="popup2">
        <img src="invalid.png">
        <i class="fa fa-close" id="cross1" onclick="closePopup2()"></i>
        <h1>Sorry</h1>
        <p id="tush">Invalid email id . Please enter a valid email id ...</p>
        <button type="button"onclick="open2()">OK</button>
    </div>
    <script>
    let popup2 = document.getElementById("popup2");
   </script>
<div class="popup3"id="popup3">
        <img src="votp.png">
        <i class="fa fa-close" id="cross1" onclick="closePopup3()"></i>
        <h1>VERIFY OTP</h1>
        <form action="tea_log.php" method="post">
        <div class="fp1">
        <label class="llb">Enter OTP here</label>
        <div id="pinputs" class="pinputs"> 
            <input class="pinput" type="text" inputmode="numeric" maxlength="1" name=otp1 id="bt1"/> 
            <input class="pinput" type="text" inputmode="numeric" maxlength="1" name=otp2 /> 
            <input class="pinput" type="text" inputmode="numeric" maxlength="1" name=otp3 > 
            <input class="pinput" type="text" inputmode="numeric" maxlength="1" name=otp4 /> 
            <input class="pinput" type="text" inputmode="numeric" maxlength="1" name=otp5 /> 
            <input class="pinput" type="text" inputmode="numeric" maxlength="1" name=otp6 /> 
        </div> 
     </div>
        <button type="submit" name="vo">Verify OTP</button>
        <button type="submit" name="resend">Resend OTP</button>
     </form>
    </div>
    <script>
  const pinputs = document.getElementById("pinputs"); 
  const bt = document.getElementById("bt1"); 
  bt.addEventListener("focus", function (e) { 
      bt.style.background="rgb(11, 255, 174)";
  });
pinputs.addEventListener("input", function (e) { 
    const target = e.target; 
    const val = target.value; 
    if (isNaN(val)) { 
        target.value = ""; 
        return; 
    } 
    if (val != "") { 
     const next = target.nextElementSibling; 
        if (next) { 
            next.focus(); 
          next.style.background="rgb(11, 255, 174)";
        } 
    } 
}); 
pinputs.addEventListener("keyup", function (e) { 
    const target = e.target; 
    const key = e.key.toLowerCase(); 
    if (key == "backspace" || key == "delete") { 
        target.value = ""; 
       const prev = target.previousElementSibling; 
        if (prev) { 
            prev.focus();  
        } 
        return; 
    } 
});
    let popup3 = document.getElementById("popup3");
   </script>
<div class="popup4"id="popup4">
        <img src="invalid.png">
        <i class="fa fa-close" id="cross1" onclick="closePopup4()"></i>
        <h1>Sorry</h1>
        <p id="p4">Please enter 6 digit otp...</p>
        <button type="button"onclick="open4()">OK</button>
    </div>
    <script>
    let popup4 = document.getElementById("popup4");
   </script>
<div class="popup5"id="popup5">
        <img src="reset.png">
        <i class="fa fa-close" id="cross1" onclick="closePopup5()"></i>
        <h2>RESET PASSWORD</h2>
        <form action="tea_log.php" method="post">
        <div class="fp1">
          <label class="llb">Create a new password</label>
        
        <input type="password" name="cp" id="password1" class="em" required>
        <i id="toggler1"class="fa fa-eye-slash"onclick="myFunction1()"></i>
     </div>
      <button type="submit" name="repass">Reset Password</button>
     </form>
    </div>
    <script>
    let popup5 = document.getElementById("popup5");
   </script>
<div class="popup6"id="popup6">
        <img src="invalid.png">
        <i class="fa fa-close" id="cross1" onclick="closePopup6()"></i>
        <h1>Warning!!</h1>
        <p>Password length must should be atleast 6 with one digit,one uppercase,one lowercase and one special charecter...</p>
        <button type="button"onclick="open6()">OK</button>
    </div>
    <script>
    let popup6 = document.getElementById("popup6");
   </script>
    <div class="popup7"id="popup7">
        <img src="right.png">
        <i class="fa fa-close" id="cross1" onclick="closePopup7()"></i>
        <h2 id="h7">Congratulations!!</h2>
        <p id="p7">Your password has been reset successfully...</p>
        <button type="button" onclick="closePopup7()">OK</button>
    </div>
    
    <script>
    let popup7 = document.getElementById("popup7");
    </script>


   
<?php
 if(isset($_POST['send'])){
    $email=$_POST['email'];
if(strpos($email,'@gmail.com')==false)
{  
   ?>
   <script>
   openPopup2();
   </script>
   <?php
}elseif(preg_match('`[A-Z]`', $email)==true)
{
    ?>
   <script>
   openPopup2();
   </script>
   <?php
}
else{
 $_SESSION["otp"]=rand(111111,999999);   
   //  header("Location:ver.php");
    $receiver="$email";
    $_SESSION['EM']=$receiver;
    $subject="SAS";
    $body="Your OTP is ".$_SESSION["otp"]." for reset password of SAS[Student Attendence Site]";
    $sender="From:tushteam2@gmail.com";
    if(mail($receiver,$subject,$body,$sender))
    {
      ?>
      <script>
        openPopup3();
        </script>
      <?php 
    }else{
      ?>
      <script>
         let ic=document.getElementById("tush");
         ic.innerHTML="Please check your internet connection...";
         openPopup2();
        </script>
      <?php
    }
}
 }
?>
<?php
error_reporting(0);
if(isset($_POST['resend'])){
   $email=$_POST['email'];
   $em=$_SESSION['EM'];
   $_SESSION["otp"]=rand(111111,999999);
  //  header("Location:ver.php");
   $receiver="$em";
   $subject="SAS";
   $body="Your OTP is ".$_SESSION["otp"]." for reset password of SAS[Student Attendence Site]";
   $sender="From:tushteam2@gmail.com";
   if(mail($receiver,$subject,$body,$sender))
   {
      ?>
       <script>
        openPopup3();
        </script>
       <?php
   }else{
     echo "Email id not send";
   }
}
?>
<?php
    $OTP=$_SESSION["otp"];
  if(isset($_POST['vo']))
    {   $otp1=$_POST['otp1'];
        $otp2=$_POST['otp2'];
        $otp3=$_POST['otp3'];
        $otp4=$_POST['otp4'];
        $otp5=$_POST['otp5'];
        $otp6=$_POST['otp6'];
        $fotp=$otp1.$otp2.$otp3.$otp4.$otp5.$otp6;
        $len=strlen($fotp);
 if($len<6)
       {
        ?>
        <script>
openPopup4();
      </script>
    <?php
       }elseif($fotp==$OTP)
        {
          ?>
          <script>
  openPopup5();
         </script>
      <?php
             }else{
          ?>
      <script>
         let p4=document.getElementById("p4");
         p4.innerHTML="Mismatched otp .<br>Please enter correct otp...";
         openPopup4();
        </script>
      <?php
    }
    }
    ?>
<?php
error_reporting(0);
$connect=mysqli_connect("localhost","root","","reg") or die("connection failed");
if(isset($_POST['repass']))
{   $em=$_SESSION['EM'];
   $cp=$_POST['cp'];
  function count_digit($password)
    {
        return strlen((string) $password);
    }
if(count_digit($cp)>=6 and preg_match('`[A-Z]`', $cp) and preg_match('`[a-z]`', $cp) and preg_match("/\W/", $cp))
    {   $hash=password_hash($cp,PASSWORD_DEFAULT);
        $sql="UPDATE reg SET password='$hash' WHERE email='$em'";
        if($connect->query($sql)==true)
        {
          ?>
          <script>
  openPopup7();
         </script>
      <?php
        }else{
          ?>
          <script>
            let h7=document.getElementById("h7");
             let p7=document.getElementById("p7");
             h7.innerHTML="Error!!";
             p7.innerHTML="Password has not been updated...";
             openPopup7();
            </script>
          <?php
        }
    } 
}
    ?>
<?php
if(isset($_POST['repass']))
if(!count_digit($cp)>=6){
  ?>
  <script>
     openPopup6();
    </script>
  <?php
     }elseif(!preg_match('`[A-Z]`', $cp) )
     {
      ?>
      <script>
          openPopup6();
        </script>
      <?php
    }elseif(!preg_match("/\W/", $cp)){//for special charecter
      ?>
      <script>
          openPopup6();
        </script>
      <?php
    }elseif(!preg_match('`[a-z]`', $cp) )
    {
      ?>
      <script>
          openPopup6();
        </script>
      <?php
    }
    ?>
   <!-- forget password part is ending here -->
 <?php

$connect=mysqli_connect("localhost","root","","reg") or die("connection failed");
if(!empty($_POST['submit']))
{  $email=$_POST['email'];
   $_SESSION["uemail"]=$email;
   setcookie('uname',$email,time()+60*60*24*30);
    $password=$_POST['password'];
    $query="select * from reg where email='$email'";
    $result=mysqli_query($connect,$query);
    $count=mysqli_num_rows($result);
   if($count==1)
    {    if($row=mysqli_fetch_assoc($result) and $row['email'] === $email)
        {
            if(password_verify($password,$row['password']))
            {
              ?>
              <script>
                location.assign("dash.php");
                </script>
              <?php
               $hash=password_hash($password,PASSWORD_DEFAULT);
                $sql="INSERT INTO `reg`.`teacher_login`(`email`, `password`, `date`) VALUES ('$email', '$hash', current_timestamp());";
                
                
                
               $_SESSION["email2"]=$email;
               $i=1;
               $_SESSION["i"]=$i++;
              
              
                if($connect->query($sql)==true)
                {
                    echo "successful";
                }else{
                    echo "Error:$sql<br>$con->error";
                }


            

                   
                  
                   
             








                  
                   
                   
                        

                      

                  //   }
                  // }



               }else{
                ?>
                <script>
                   openPopup();
                </script>
        <?php
        }
      }
      else{
        ?><script>
               openPopup();
            </script>
    <?php
      }
    }else{
        ?>
        <script>
           openPopup();
        </script>
<?php  
    }
}
?>
 <!-- backend of login form ending -->
</body>
</html>