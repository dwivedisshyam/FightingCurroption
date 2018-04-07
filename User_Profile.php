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
		<title>Edit Profile | Edit Profile Page</title>

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
            <a class="navbar-brand" href="index-register.html"><img style="width: 95px; height: 100px;" src="images/FC.png" alt="logo" /></a>
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
                  <p class="text-muted"></p>
                </div>
              </div>
              <div class="col-md-9">
                <ul class="list-inline profile-menu">
                  <li><a href="timeline.html"></a></li>
                  <li><a href="timeline-about.html" class="active"></a></li>
                  <li><a href="timeline-album.html"></a></li>
                  <li><a href="timeline-friends.html"></a></li>
                </ul>
                <ul class="follow-me list-inline">
                  <li>1 followers</li>
                 </ul>
              </div>
            </div>
          </div><!--Timeline Menu for Large Screens End-->

          <!--Timeline Menu for Small Screens-->
          <div class="navbar-mobile hidden-lg hidden-md">
            <div class="profile-info">
              <img src="images/users/user-1.jpg" alt="" class="img-responsive profile-photo" />
              <h4><?php echo $unm; ?></h4>
              <p class="text-muted"></p>
            </div>
            <div class="mobile-menu">
              <ul class="list-inline">
                <li><a href="timline.html"></a></li>
                <li><a href="timeline-about.html" class="active"></a></li>
                <li><a href="timeline-album.html"></a></li>
                <li><a href="timeline-friends.html"></a></li>
              </ul>

            </div>
          </div><!--Timeline Menu for Small Screens End-->

        </div>
        <div id="page-contents">
          <div class="row">
            <div class="col-md-3">

              <!--Edit Profile Menu-->
              <ul class="edit-menu">
              	<li class="active"><i class="icon ion-ios-information-outline"></i><a href="User_Profile.php?id=<?php echo $uid; ?>">Basic Information</a></li>
              	<li><i class="icon ion-ios-locked-outline"></i><a href="Chng_Pswd.php">Change Password</a></li>
              </ul>
            </div>
            <div class="col-md-7">
            <?php
		     include("Connection.php");
			 $query = "select * from user_info where uid=".$uid;
			 $rs=mysql_query($query);
	         $rw=mysql_fetch_array($rs);
	         if($rw[0])
			  {
			    ?>
              <!-- Basic Information
              ================================================= -->
              <div class="edit-profile-container">
                <div class="block-title">
                  <h4 class="grey"><i class="icon ion-android-checkmark-circle"></i><?php echo $rw[1]."'s Profile"; ?></h4>
                  <div class="line"></div>
                </div>
                <div class="edit-block">
                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label for="firstname">First name</label>
                        <input id="fname" class="form-control input-group-lg" type="text" name="firstname" title="Enter first name" placeholder="First name" value='<?php echo $rw[3];?>' />
                      </div>
                      <div class="form-group col-xs-6">
                        <label for="lastname" class="">Last name</label>
                        <input id="lname" class="form-control input-group-lg" type="text" name="lastname" title="Enter last name" placeholder="Last name" value='<?php echo $rw[4];?>' />
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="phone">Phone Number </label>
                        <input id="phone" class="form-control input-group-lg" type="text" name="" title="Enter Phone" placeholder="Phone Number" value='<?php echo $rw[8];?>'  />
                      </div>
                    </div>

                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label for="city"> My city</label>
                        <input id="city" class="form-control input-group-lg" type="text" name="city" title="Enter city" placeholder="Your city" value='<?php echo $rw[14];}?>' />
                      </div>
						</div>
                    <button class="btn btn-primary" id="ubtn">Save Changes</button>

                </div>
              </div>
            </div>
            <div class="col-md-2 static">

              <!--Sticky Timeline Activity Sidebar-->

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
              <a href="#"><img style="width:150px; height:150px;" src="images/FC.png" alt="" class="footer-logo" /></a>
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
        <p>NonTech Team @2017. All rights reserved</p>
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
$('#ubtn').click(function(){
 var fname=$('#fname').val();
 var lname=$('#lname').val();
 var phone=$('#phone').val();
 var city=$('#city').val();
 var str=$('#fname').val()+","+$('#lname').val()+","+$('#phone').val()+","+$('#city').val();
 alert(str);

$.ajax({
 url:'User_Profile_Submit.php',
 datatype:'json',
 type:'POST',
 data:{"dt":str},
 success: function(data)
 {
 alert("Login String"+str);
 $('#f_name').val('');
 $('#l_name').val('');
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
