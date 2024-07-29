
<?php
 session_start();
 require 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" integrity="sha512-HXXR0l2yMwHDrDyxJbrMD9eLvPe3z3qL3PPeozNTsiHJEENxx8DH2CxmV05iwG0dwoz5n4gQZQyYLUNt1Wdgfg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="stu_log.css">
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
  
  <h1>STUDENT'S LOGIN</h1>
 <div class="rot">
  <img src="student.png">
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
      <form action="stu_log.php" method="post">
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
         
     <div class="log">
         <input type="submit"name="submit"value="Login"class="btn">
         </div>
        
</form>
     </div>
</div>
<!-- login form ending  -->
















<div class="mlogin">
  <form action="stu_log.php" method="post">
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
     
    </div>
    <input type="submit"name="submit"value="Login" id="button">
   
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
<!-- backend stargin of login form -->
 <div class="popup"id="popup">
        <img src="invalid.png">
        <i class="fa fa-close" id="cross1" onclick="closePopup()"></i>
        <h1>Sorry</h1>
        <p id="ic">Invalid Credentials.<br>Wrong email and password...</p>
        <button type="button"onclick="closePopup()">OK</button>
    </div>
    <script>
      let popup=document.getElementById("popup");
      function openPopup()
      {
        popup.classList.add("open-popup");c
      }
      function closePopup()
      {
        popup.classList.remove("open-popup");
      }
      </script>


  <?php
   
  if(isset($_POST["submit"]))
  {
    $email=$_POST["email"];
   
    $password=$_POST["password"];
    $query="select * from stu_login where password='$password'";
    $result=mysqli_query($conn,$query);
    $count=mysqli_num_rows($result);
   if($count==1)
    {    if($row=mysqli_fetch_assoc($result) and $row['stu_eml'] === $email)
        {
            if($row['password']===$password)
            {
              
              $_SESSION["tuseml"]=$email;
              $_SESSION["tuspass"]=$password;
              $_SESSION["tea_eml"]=$row["tea_eml"];
              ?>
              <script>
                location.assign("stu_dash.php");
                </script>
                <?php
                }else
                {
                  ?>
              <script>
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
             
            }else{
              ?>
              <script>
                openPopup();
               
                </script>
                <?php
            }
  }
  ?>


   <div class="msg_bar" id="msg_bar">
    <span>Login Information</span>
    <p>Login with your valid email id and password which you have received on your corrosponding gmail account, 
      send by your teacher . If password not received then contact with your teacher.
    </p>
    <button onclick="closeBox()">OKK</button>
   </div>
<script>
  let msg_bar=document.getElementById("msg_bar");
  let body=document.querySelector("body");
  setTimeout(function()
{
         msg_bar.classList.add("open_Bar");
         body.classList.add("none");
         msg_bar.classList.add("yes");
},1000);



function closeBox()
{
  msg_bar.classList.remove("open_Bar");
  body.classList.remove("none");
  msg_bar.classList.add("tran");
}

</script>



 <!-- backend of login form ending -->
</body>
</html>