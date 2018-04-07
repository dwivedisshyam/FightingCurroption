<!DOCTYPE html>
<html lang="en">
<?php
                session_start();
                if(!isset($_SESSION["username"]))
			 	  {
				  header('Location:User_Login.php');
                 }
                 else{
                   $unm=$_SESSION["username"];
                   $uid=$_SESSION["uid"];
                 }
                 ?>
 <head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This is social network html5 template available in themeforest......" />
		<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
		<meta name="robots" content="index, follow" />
		<title>Edit Profile | Change My Password</title>

    <!-- Stylesheets
    ================================================= -->
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/ionicons.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />

    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">

    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="images/fav.png"/>
	</head>
  <body>

    <!-- Header
    ================================================= -->
		<header id="header">
      <nav class="navbar navbar-default navbar-fixed-top menu">
        <div class="container">

          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index-register.html"><img style="width:95px; height:100px;" src="images/FC.png" alt="logo" /></a>
			          </div>

			          <!-- Collect the nav links, forms, and other content for toggling -->
			          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				   		              <ul class="nav navbar-nav navbar-right main-menu">
				   		                <li class="dropdown"><a href="Show_Post.php">Home</a></li>
				   		                 <li class="dropdown"><a href="User_Profile.php">Edit Profile</a></li>
				   		                <li class="dropdown">
				   						                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Users <span><img src="images/down-arrow.png" alt="" /></span></a>
				   						                  <ul class="dropdown-menu newsfeed-home">
				   						                    <li><a href="All_Users.php">Follow Users</a></li>
				   						                    <li><a href="See_Profile.php">Users Profile</a></li>
				   						                  </ul>
				                			 </li>
				   		                <li class="dropdown"><a href="Logout.php">Logout</a></li>
				   		              </ul>
	   		              <form class="navbar-form navbar-right hidden-sm">
            <form class="navbar-form navbar-right hidden-sm">
              <div class="form-group">
                 </div>
            </form>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
      </nav>
    </header>
    <!--Header End-->

    <div class="container">

      <!-- Timeline
      ================================================= -->
      <div class="timeline">
        <div class="timeline-cover">

          <!--Timeline Menu for Large Screens-->
          <div class="timeline-nav-bar hidden-sm hidden-xs">
            <div class="row">
              <div class="col-md-3">
                <div class="profile-info">
                  <img src="images/users/user-1.jpg" alt="" class="img-responsive profile-photo" />
                  <h3><?php echo $unm; ?></h3>
                  <p class="text-muted"> </p>
                </div>
              </div>
              <div class="col-md-9">
                <ul class="list-inline profile-menu">
                  <li><a href="timeline.html"> </a></li>
                  <li><a href="timeline-about.html" class="active"> </a></li>
                  <li><a href="timeline-album.html"> </a></li>
                  <li><a href="timeline-friends.html"> </a></li>
                </ul>
                <ul class="follow-me list-inline">
                  <li>1,299 people following her</li>
                 </ul>
              </div>
            </div>
          </div><!--Timeline Menu for Large Screens End-->

          <!--Timeline Menu for Small Screens-->
          <div class="navbar-mobile hidden-lg hidden-md">
            <div class="profile-info">
              <img src="images/users/user-1.jpg" alt="" class="img-responsive profile-photo" />
              <h4>?php echo $unm; ?></h4>
              <p class="text-muted"> </p>
            </div>
            <div class="mobile-menu">
              <ul class="list-inline">
                <li><a href="timline.html"> </a></li>
                <li><a href="timeline-about.html" class="active"> </a></li>
                <li><a href="timeline-album.html"> </a></li>
                <li><a href="timeline-friends.html"> </a></li>
              </ul>
              <button class="btn-primary"> </button>
            </div>
          </div><!--Timeline Menu for Small Screens End-->

        </div>
        <div id="page-contents">
          <div class="row">
            <div class="col-md-3">

              <!--Edit Profile Menu-->
              <ul class="edit-menu">
              	<li><i class="icon ion-ios-information-outline"></i><a href="User_Profile.php">Basic Information</a></li>
              	  	<li class="active"><i class="icon ion-ios-locked-outline"></i><a href="Chng_Pswd.php">Change Password</a></li>
              </ul>
            </div>
            <div class="col-md-7">

              <!-- Change Password
              ================================================= -->
              <div class="edit-profile-container">
                <div class="block-title">
                  <h4 class="grey"><i class="icon ion-ios-locked-outline"></i>Change Password</h4>
                  <div class="line"></div>
                   <div class="line"></div>
                </div>
                <div class="edit-block">
                     <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="my-password">Old password</label>
                        <input id="opwd" class="form-control input-group-lg" type="password" name="password" title="Enter password" placeholder="Old password"/>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label>New password</label>
                        <input class="form-control input-group-lg" id="npwd" type="password" name="password" title="Enter password" placeholder="New password"/>
                      </div>
                      <div class="form-group col-xs-6">
                        <label>Confirm password</label>
                        <input class="form-control input-group-lg" id="cpwd" type="password" name="password" title="Enter password" placeholder="Confirm password"/>
                      </div>
                    </div>
                    <p><a href="#">Forgot Password?</a></p>
                    <button class="btn btn-primary" id='btn'>Update Password</button>

                </div>
              </div>
            </div>
            <div class="col-md-2 static">

              <!--Sticky Timeline Activity Sidebar-->

            <div class="suggestions" id="sticky-sidebar">
              <h4 class="grey">Top Topics</h4>
               <?php
				$query = "select  * from post  order by like_status desc limit 2";
				include("Connection.php");
				$rs=mysql_query($query);
				while($rw=mysql_fetch_array($rs))
				  {
			    ?>
                <div class="feed-item">
                  <div class="live-activity">
                    <p><a href="#" class="profile-link"><?php echo $rw[1]; ?></a> Publish On</p>
                    <p class="text-muted"><?php echo $rw[2]; ?></p>
                  </div>
                </div>
                <?php
                 }
                 ?>
               </div>
             </div>
    		</div>
    	</div>
    </div>



    <!-- Footer
    ================================================= -->
    <footer id="footer">
      <div class="container">
      	<div class="row">
          <div class="footer-wrapper">
            <div class="col-md-3 col-sm-3">
              <a href="#"><img style="width: 150px; height: 150px;" src="images/FC.png" alt="" class="footer-logo" /></a>
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
      <div class="copyright">
        <p>Non Tech Team ?2017. All rights reserved</p>
      </div>
		</footer>

    <!--preloader-->
    <div id="spinner-wrapper">
      <div class="spinner"></div>
    </div>

         <!-- Scripts
    ================================================= -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky-kit.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="js/script.js"></script>
  </body>
<script type="text/javascript">
$(function(){
$('#btn').click(function(){
 var opwd=$('#opwd').val();
 var npwd=$('#npwd').val();
 var cpwd=$('#cpwd').val();
 if(npwd!=cpwd){
 alert("Your Confirm is not matched");
 }
  var str=$('#opwd').val()+","+$('#npwd').val()+","+$('#cpwd').val();
 alert(str);

$.ajax({
 url:'Chng_Pswd_Submit.php',
 datatype:'json',
 type:'POST',
 data:{"dt":str},
 success: function(data)
 {
 alert("Login String"+str);
 $('#opwd').val('');
 $('#npwd').val('');
 $('#cpwd').val('')
 },
 error: function()
 {
 console.log("Fail To Data Send");
 }
 });
});
});
</script>
 </html>
