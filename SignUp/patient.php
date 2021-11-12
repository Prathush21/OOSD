<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
<html lang="en" dir="ltr">
<?php
require_once 'validate.php'


?>
<head>
  <meta charset="UTF-8" />
  <!--<title> Login and Registration Form in HTML & CSS | CodingLab </title>-->
  <link rel="stylesheet" href="signup.css" />
  <!-- Fontawesome CDN Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<script>
  function errorMessage() {
    var user =document.getElementById("uname");
    <?php 
    $validate=new Validate();
    $uname= "<script>document.write(user)</script>";
    $result= $validate->checkUser($uname);
    echo $result;
    ?> 
    var result=<?php echo $result ?>;
    if(result){
      document.getElementById("unm").style.color = "red";
      document.getElementById("unm").innerHTML =
        "User exists";
      return false;

    }
    if (
      document.getElementById("password").value !=
      document.getElementById("repassword").value
    ) {
      document.getElementById("repsw").style.color = "red";
      document.getElementById("repsw").innerHTML =
        "Password did not match";
      return false;
    }
    else{
      return true;
    }
  };
</script>

<body>
  <div class="container">
    <input type="checkbox" id="flip" />

    <div class="forms">
      <!-- <div class="form-content"> -->
      <div  class="signup-form" >
        <div class="title">Signup</div>
        <form  action="signup.php" onsubmit="return errorMessage()" method="post">
          <div class="input-boxes">
            <div class="input-box">
              <label for="name"><b>Name</b></label>
              <input type="text" placeholder="Enter your name" name="name" required /><br />
            </div>
            <div class="input-box">
              <label for="uname"><b>Username</b></label>
              <input type="text" placeholder="Enter a username" id="uname" name="uname" required />
              <span id="unm"></span>

            </div>
            <div class="input-box">
              <label for="password"><b>Password</b></label>
              <input type="password" placeholder="Enter your password" id="password" name="password" required />
              <span id="psw"></span>
            </div>

            <div class="input-box">
              <label for="repassword"><b>Re-enter Password</b></label>
              <input type="password" placeholder="Re-enter your password" id="repassword" name="repassword" required />
              <span id="repsw"></span>

            </div>

            <div class="input-box">
              <label for="nic"><b>NIC number</b></label>
              <input type="text" placeholder="Enter your NIC number" name="nic" required />
              <span id="nic"></span>

            </div>

            <div class="input-box">
              <label for="address"><b>Residential Address</b></label>
              <input type="text" placeholder="Enter your Residential Address" name="address" required />
            </div>

            <div class="input-box">
              <label for="mobileno"><b>Mobile Number</b></label>
              <input type="text" placeholder="Enter your mobile number" name="mobileno" required />
              <span id="mobileno"></span>

            </div>

            <div class="input-box">
              <label for="email-id"><b>Email Address</b></label>
              <input type="text" placeholder="Enter your Email Address" name="email-id" required />
            </div>

            <div class="input-box">
              <label for="dob"><b>Date of Birth</b></label>
              <input type="text" placeholder="Enter your Date of Birth" name="dob" required />
            </div>
            <!-- <div class="input-box"> -->
            <!-- <div class = "selection"> -->
            <label for="gender"><b>Gender</b></label> <br /><br />

            <input type="radio" id="male" name="gender" value="male" />
              <label for="male" style="color: black">Male</label>
             
            <input type="radio" id=" female" name="gender" value="female" />
              <label for="female" style="color: black">Female</label>
             
            <input type="radio" id="other" name="gender" value="other" />
              <label for="other" style="color: black">Other</label><br><br>
            <!-- </div> -->
            <!-- </div> -->
            <label for="disease"><b>Chronic Disease</b></label> <br /><br />
            <input type="Checkbox" name="asthma" value="yes" />Asthma <br> <br>
            <input type="Checkbox" name="lungdisease" value="yes" />Chronic lung disease<br> <br>
            <input type="Checkbox" name="kidney" value="yes" />Kidney failure <br> <br>
            <input type="Checkbox" name="heart" value="yes" />Heart Disease <br> <br>
            <input type="Checkbox" name="diabetes" value="yes" />Diabetes <br> <br>
            <input type="Checkbox" name="hyper" value="yes" />Hyper Tension <br> <br>
            <input type="Checkbox" name="cancer" value="yes" />Cancer <br> <br>
            <input type="Checkbox" name="immuno" value="yes" />Immunodeficiency Diseases <br>

            <div class="button input-box">
              <input type="submit"  value="Submit" />
            </div>
            

            <!-- <script>
              function errorMessage() {
                if (
                    document.getElementById("password").value ==
                    document.getElementById("repassword").value
                  ) {
                    document.getElementById("repassword").style.color = "green";
                    document.getElementById("repassword").innerHTML =
                      "Passwords matched";
                  } else {
                    document.getElementById("repassword").style.color = "red";
                    document.getElementById("repassword").innerHTML =
                      "Password did not match";
                  }

              }
            </script> -->
            <div class="text sign-up-text">
              Already have an account? <label for="flip">Login now</label>
            </div>
          </div>
        </form>
      </div>
      <!-- </div> -->
    </div>
  </div>
</body>

</html>