<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"href="tea_reg.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
    <title>Document</title>
</head>
<body>



<?php

session_start();
?>


<?php
function tush(){
error_reporting(0);
$connect=mysqli_connect("localhost","root","","reg") or die("connection failed");
 if(isset($_POST['reg']))
 {
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
   
  
    $query="select email from reg where email='$email'";
   
   
    $result=mysqli_query($connect,$query);
    $count=mysqli_num_rows($result);
   
   if($count>0)
    { 
        
        while($row=mysqli_fetch_assoc($result))
        {
            if($email==isset($row["email"]))
            {
                return 1;
                
            }
           
            
        }
}else{
    
   
    return 0;
   
}
 }
}

?>


<!-- password showing -->
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
var x = document.getElementById("conpassword");
var y = document.getElementById("toggler1");
if (x.type === "password") {
  x.type = "text";
  y.className="fa fa-eye";

} else {
  x.type = "password";
  y.className="fa fa-eye-slash";
}
}
    </script>
<!-- end -->


    <div class="container">
        <div class="design1">
        <div class="img">
            <img src="mam-cutout.png">
        </div>
        <div class="text">
            <p>Register here with our personal details with 100% security guarantee .</p>
       </div>
        </div>
        <h2>Register Here</h2>
        <form action="tea_reg.php"method="post">
       <div class="user-details">
        <div class="input-box">
            <span class="details">First Name</span>
            <input type="text" name="fname"  placeholder="Enter your first name"required>
        </div>
        <div class="input-box">
            <span class="details">Last Name</span>
            <input type="text" name="lname" placeholder="Enter your last name"required>
        </div>
        <div class="input-box">
            <span class="details">Email Id</span>
            <input type="email" name="email" placeholder="Enter your email id"required>
        </div>
        <div class="input-box">
            <span class="details">Mobile No (10 digits)</span>
            <input type="number" name="mobile" placeholder="Enter your mobile number"required>
        </div>
       
         <div class="input-box">
                    <span class="details">College Name</span>
                    <input type="text"placeholder="Enter college name"  name="cname"required>
        </div>
              
        <div class="input-box">
                    <span class="details">Select Class for attendence</span>
                    <select name="dropdown1"class="drop1" required>
                        <option value=""class="hhh">Select Class</option>
                        <option value ="1">One</option>
                        <option value ="2">Two</option>
                        <option value ="3">Three</option>
                        <option value ="4">Four</option>
                        <option value ="5">Five</option>
                        <option value ="6">Six</option>
                        <option value ="7">Seven</option>
                        <option value ="8">Eight</option>
                        <option value ="9">Nine</option>
                        <option value ="10">Ten</option>
                        <option value ="11">Eleven</option>
                        <option value ="12">Twelve</option>
                       
                           
                        <option value ="Sem-1"id="sem">UG:Sem-1</option>
                        <option value ="Sem-2"id="sem">UG:Sem-2</option>
                        <option value ="Sem-3"id="sem">UG:Sem-3</option>
                        <option value ="Sem-4"id="sem">UG:Sem-4</option>
                        <option value ="Sem-5"id="sem">UG:Sem-5</option>
                        <option value ="Sem-6"id="sem">UG:Sem-6</option>
                        <option value ="Sem-7"id="sem">UG:Sem-7</option>
                        <option value ="Sem-8"id="sem">UG:Sem-8</option>
                  
                      
                       <option value ="Sem-1"id="sem">PG:Sem-1</option>
                       <option value ="Sem-2"id="sem">PG:Sem-2</option>
                       <option value ="Sem-3"id="sem">PG:Sem-3</option>
                       <option value ="Sem-4"id="sem">PG:Sem-4</option>
                       
                      </select>
                       </div>
                       <div class="input-box">
            <span class="details">Department</span>
            <input type="text" name="dept"  placeholder="Enter department name"required>
                   </div>
        <div class="input-box">
            <span class="details">Subject</span>
            <input type="text" name="sub"  placeholder="Enter subject name"required>
        </div>
                       <div class="input-box">
                        <span class="details">Year</span>
                        <input type="number"placeholder="Enter year"  name="session"required>
                    </div>
        <div class="input-box">
            <span class="details">Password (Strong password)</span>
            <input type="password" name="password" id="password" placeholder="Enter a password"required>
            <span><i id="toggler"class="fa fa-eye-slash"onclick="myFunction()"></i></span>
        </div>
        <div class="input-box">
            <span class="details">Confirm password</span>
            <input type="password" name="conpassword" id="conpassword" placeholder="Enter confirm password"required>
            <span><i id="toggler1"class="fa fa-eye-slash"onclick="myFunction1()"></i></span>
        </div>
       </div>
       <div class="alert">
       <input type="checkbox"required>
       <span>I accept all terms & conditions</span>
       </div>
       <div class="button">
        <input type="submit" class="btn" value="Register" name="reg">
       </div>
       <div class="alert1">
       <span>Already have an account? <a href="tea_log.php">Login</a></span>
       </div>
        </form>
    </div>


   







<!-- popup alert message -->
<div class="popup"id="popup">
        <img src="right.png">
        <h2>Thank you</h2>
        <p>Your details has been successfully submitted<br>Thanks for submission</p>
        <button type="button"onclick="closePopup()">OK</button>
    </div>

    <div class="popup1"id="popup1">
        <img src="war.png">
        <h2>Warning!!</h2>
        <p id="em">Please enter a valid email id...</p>
        <button type="button"onclick="closePopup1()">OK</button>
    </div>



<!-- disable click oparation starting from here -->
<script>
     
 
        function Fun_call() {
            document.addEventListener('contextmenu',
                event => event.preventDefault());
 
           
        }  
      

    
    </script>
<!-- disable click oparation ending here -->





<!-- nav menu -->

  <!-- menu -->

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

  //container

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
















 <script>
    function disableScroll() {
    // Get the current page scroll position
    scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,

        // if any scroll is attempted, set this to the previous value
        window.onscroll = function() {
            window.scrollTo(scrollLeft, scrollTop);
        };
}

function enableScroll() {
    window.onscroll = function() {};
}
    </script>
 <!-- disable scrolling and enable scrolling ending here -->



 <script>
    let popup1 = document.getElementById("popup1");
    let body=document.querySelector("body");


function openPopup1()
{
     popup1.classList.add("open-popup1");
     body.classList.add("disable");
     popup1.classList.add("enable");
}
function closePopup1()
{
   popup1.classList.remove("open-popup1");
   body.classList.remove("disable");
}
   </script>




    <!-- backend -->

    <?php
    error_reporting(0);
    
    if(isset($_POST['reg']))
    {
    $server="localhost";
    $username="root";
    $password="";
    $con=mysqli_connect($server,$username,$password);
    
    if(!$con)
     {
        die("connection failed".mysqli_connect_error); 
    }
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $dept=$_POST['dept'];
    $mobile=$_POST["mobile"];
    $_SESSION["phone"]=$mobile;
    setcookie('uname',$mobile,time()+60*60*24*30);
    $sub=$_POST['sub'];
    $cname=$_POST['cname'];
    $dropdown1=$_POST['dropdown1'];
    $session=$_POST['session'];
    $password=$_POST['password'];
    $conpassword=$_POST['conpassword'];

    function count_digit($password)
    {
        return strlen((string) $password);
    }
  

    $fname=strtoupper($fname);
    $lname=strtoupper($lname);
    $cname=strtoupper($cname);
    if(tush()==1)
    {
        ?>
        <script>
         let a=document.getElementById("em");
         a.innerHTML="Email id is already exist...";
        console.log("email id is already exist");
         openPopup1();
         </script>
        <?php
    }
    elseif(strpos($email,'@gmail.com')==false)
    {
       ?>
       <script>

        openPopup1();
       </script>
       <?php
    }
    elseif(preg_match('`[A-Z]`', $email)==true)
    {
       ?>
       <script>
       openPopup1();
        </script>
       <?php
    }
    elseif(count_digit($session)!=4)
    {
        ?>
       <script>
        let a=document.getElementById("em");
        a.innerHTML="Please enter a valid 4 digit year...";
        openPopup1();
        </script>
       <?php
    } 
     elseif(count_digit($password)<6)
    {
        ?>
       <script>
        let a=document.getElementById("em");
        a.innerHTML="Password length must be atleast 6 with one digit,one uppercase,one lowercase and one special charecter...";
        openPopup1();
        </script>
       <?php
    }elseif(!preg_match('`[A-Z]`', $password))
    {
        ?>
        <script>
         let a=document.getElementById("em");
         a.innerHTML="Password length must be atleast 6 with one digit,one uppercase,one lowercase and one special charecter...";
         openPopup1();
         </script>
        <?php
    }elseif(!preg_match('`[a-z]`', $password))
    {
        ?>
       <script>
        let a=document.getElementById("em");
        a.innerHTML="Password length must be atleast 6 with one digit,one uppercase,one lowercase and one special charecter...";
        openPopup1();
        </script>
       <?php
    }elseif(!preg_match("/\W/", $password))
    {
        ?>
       <script>
        let a=document.getElementById("em");
        a.innerHTML="Password length must be atleast 6 with one digit,one uppercase,one lowercase and one special charecter...";
        openPopup1();
        </script>
       <?php
    }elseif(!preg_match('`[0-9]`', $password))
    {
        ?>
       <script>
        let a=document.getElementById("em");
        a.innerHTML="Password length must be atleast 6 with one digit,one uppercase,one lowercase and one special charecter...";
        openPopup1();
        </script>
       <?php
    }
    else if($password!=$conpassword)
    {
        ?>
       <script>
        let a=document.getElementById("em");
        a.innerHTML="Mismatched confirm password...";
        openPopup1();
        </script>
       <?php
    }
    else{
        $hash=password_hash($password,PASSWORD_DEFAULT);
        $sql="INSERT INTO `reg`.`reg`(`first_name`, `last_name`, `email`,`mobile`,`college_name`,
        `attendence_class`,`department`,`subject`,`session`, `password`, `date`) VALUES ('$fname','$lname','$email','$mobile',
        '$cname','$dropdown1','$dept','$sub','$session','$hash', current_timestamp())";
        
    }
    
            if($con->query($sql)==true)
            {
              ?>
              <script>
            //    let bod=document.querySelector("body");
                 let popup = document.getElementById("popup");
                
                 
                 function openPopup()
              {
                
                                                                                                                                                                        
              popup.classList.add("open-popup");
              body.classList.add("disable");
              popup.classList.add("enable");

              }
                 function closePopup()
                {
                   
               popup.classList.remove("open-popup");
               body.classList.remove("disable");
                location.assign("tea_log.php");

                 }
                 openPopup();
                </script>
              <?php
            }else{
                echo "Error:$sql<br>$con->error";
            }
    
    $con->close();
    }
    
    ?>


<!-- footer item  -->

<script src="tea_reg.js"></script>
</body>
</html>


