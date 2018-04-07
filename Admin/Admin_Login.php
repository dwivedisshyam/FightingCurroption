<!DOCTYPE html>
<html lang="en">

<head>
  <style type="text/css">
    <style type="text/css">
<!--div-->
.file-upload {
  position: relative;
  display: inline-block;
}
<!--label-->
.file-upload__label {
  display: block;
  color: #707B7C;
  border-radius: .4em;
  transition: background .3s;
}
<!--input-->
.file-upload__input {
    position: absolute;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    font-size: 1;
    width:0;
    height: 100%;
    opacity: 0;
}
  </style>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This is social network html5 template available in themeforest......" />
		<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
		<meta name="robots" content="index, follow" />
		<title>Fighting Corruption - Login</title>

    <!-- Stylesheets
    ================================================= -->
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/ionicons.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />

    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">

    <!--Favicon-->
    <link rel="icon" type="image/png" href="images/FC.png"/>
	</head>
	<body>

    <!-- Landing Page Contents
    ================================================= -->
    <div id="lp-register">
    	<div class="container wrapper">
        <div class="row">
        	<div class="col-sm-5">
            <div class="intro-texts">
              <img style="width:200px; height: 200px; margin-left: 50px;" src="images/FC.png" />
            	<h1 class="text-white">Share Our Problems !!!</h1>
            	<p>Fighting Corruption is a public platform that can be used to connect people. This site offers you share our stories, News Feed, Image/Video Feed and lot more. <br /> <br />What are you waiting for? &nbsp; Share Now</p>
              <button class="btn btn-primary">Learn More</button>
            </div>
          </div>
        	<div class="col-sm-6 col-sm-offset-1">
            <div class="reg-form-container">

              <!-- Register/Login Tabs-->
              <div class="reg-options">
                <ul class="nav nav-tabs">
                   <li  class="active"><a href="#login" data-toggle="tab">Login</a></li>
                </ul><!--Tabs End-->
              </div>

              <!--Registration Form Contents-->
              <div class="tab-content">
                <div class="tab-pane" id="register">
                  <h3>Register Now !!!</h3>
                  <p class="text-muted">Join today & Meet millions</p>


                  <p><a href="#">Already have an account?</a></p>
                  <button class="btn btn-primary" id="rbtn">Register Now</button>
                </div><!--Registration Form Contents Ends-->

                <!--Login-->
                <div class="tab-pane active" id="login">
                  <h3>Login</h3>
                  <p class="text-muted">Log into your account</p>

                  <!--Login Form-->
                  <form name="Login_form" id='Login_form'>
                     <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="my-email" class="sr-only">Email</label>
                        <input id="leml" class="form-control input-group-lg" type="text" name="Email" title="Enter User Name" placeholder="User Name"/>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="my-password" class="sr-only">Password</label>
                        <input id="lpassword" class="form-control input-group-lg" type="password" name="password" title="Enter password" placeholder="Password"/>
                      </div>
                    </div>
                  </form><!--Login Form Ends-->
                  <p><a href="#">Forgot Password?</a></p>
                  <button class="btn btn-primary" id="lbtn">Login Now</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-sm-offset-6">

            <!--Social Icons-->
            <ul class="list-inline social-icons">
              <li><a href="#"><i class="icon ion-social-facebook"></i></a></li>
              <li><a href="#"><i class="icon ion-social-twitter"></i></a></li>
              <li><a href="#"><i class="icon ion-social-googleplus"></i></a></li>
              <li><a href="#"><i class="icon ion-social-pinterest"></i></a></li>
              <li><a href="#"><i class="icon ion-social-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!--preloader-->
    <div id="spinner-wrapper">
      <div class="spinner"></div>
    </div>


    <!-- Scripts
    ================================================= -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.appear.min.js"></script>
		<script src="js/jquery.incremental-counter.js"></script>
    <script src="js/script.js"></script>
<script type="text/javascript">
$(function(){
var Gender="Male";

$('#lbtn').click(function(){
 var eml=$('#leml').val();
 var pwd=$('#lpassword').val();
 var str=eml+","+pwd;
$.ajax({
 url:'Admin_Login_Submit.php',
 datatype:'json',
 type:'POST',
 data:{"dt":str},
 success: function(data)
 {
 //alert("Login String"+str);
 $('#leml').val('');
 $('#lpassword').val('');
 if(data=="ok")
 alert("Hello")
 window.location.href = 'All_Posts.php';
 if(data=="wrong"){
 alert("Sorry you username or password is wrong");
 }
 },
 error: function()
 {
 console.log("Fail To Data Send");
 }
 });
});
});
</script>
	</body>

 </html>
