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
		<title>Nearby People | Find Local People</title>

    <!-- Stylesheets
    ================================================= -->
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/ionicons.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />

    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">

    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="images/FC.png"/>
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

	   		              </form>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
      </nav>
    </header>
    <!--Header End-->
<br/><br/>
    <div id="page-contents">
    	<div class="container">
    		<div class="row">

    			<!-- Newsfeed Common Side Bar Left
          ================================================= -->
    			<div class="col-md-3 static">
            <div class="profile-card">
            	<img src="images/users/user-1.jpg" alt="user" class="profile-photo" />
            	<h5><a href="timeline.html" class="text-white">Sarah Cruiz</a></h5>
            	<a href="#" class="text-white"><i class="ion ion-android-person-add"></i> 1,299 followers</a>
            </div><!--profile card ends-->
            <ul class="nav-news-feed">
              <li><i class="icon ion-ios-paper"></i><div><a href="newsfeed.html">My Newsfeed</a></div></li>
              <li><i class="icon ion-ios-people"></i><div><a href="newsfeed-people-nearby.html">People Nearby</a></div></li>
              <li><i class="icon ion-ios-people-outline"></i><div><a href="newsfeed-friends.html">Friends</a></div></li>
              <li><i class="icon ion-chatboxes"></i><div><a href="newsfeed-messages.html">Messages</a></div></li>
              <li><i class="icon ion-images"></i><div><a href="newsfeed-images.html">Images</a></div></li>
              <li><i class="icon ion-ios-videocam"></i><div><a href="newsfeed-videos.html">Videos</a></div></li>
            </ul><!--news-feed links ends-->

          </div>
    			<div class="col-md-7">

            <!-- Post Create Box
            ================================================= -->
            <div class="create-post">
            	<div class="row">
            		<div class="col-md-7 col-sm-7">
                  <div class="form-group">

                  </div>
                </div>
            		<div class="col-md-5 col-sm-5">
                  <div class="tools">

                    <button class="btn btn-primary pull-right" id="btn">Write Post</button>
                  </div>
                </div>
            	</div>
            </div><!-- Post Create Box End -->

            <!-- Nearby People List
            ================================================= -->
            <div class="people-nearby">

              <?php
			  			                     include("Connection.php");
			  			 					$query = "select * from user_info where uid!=".$uid;
			  			 					$rs=mysql_query($query);
			  			                      while($rw=mysql_fetch_array($rs))
			  			                        {
			                     ?>
              <div class="nearby-user">
                <div class="row">
                  <div class="col-md-2 col-sm-2">
                    <img src="images/users/user-15.jpg" alt="user" class="profile-photo-lg" />
                  </div>
                  <div class="col-md-7 col-sm-7">
                    <h5><a href="#" class="profile-link"><?php echo $rw[1]; ?></a></h5>
                    <p>Followers</p>
                    <?php
                    $query1 = "select count(pid) from post where uid=".$rw[0];
                    $rs1=mysql_query($query1);
					$rw1=mysql_fetch_array($rs1);
			  		{
			  	   ?>
                    <p class="text-muted"><?php echo  $rw1[0]." Posts";}?></p>
                  </div>
                  <div class="col-md-3 col-sm-3">
                    <a  href="User_Follow_Submit.php?id=<?php echo $rw[0]; ?>" class="btn btn-primary pull-right" id="fbtn">See Profile</a>
                  </div>
                  </div>
              </div>
              <?php
              }
              ?>
              </div>
          </div>

          <!-- Newsfeed Common Side Bar Right
          ================================================= -->
    		<div class="col-md-2 static">
            <div class="suggestions" id="sticky-sidebar">
              <h4 class="grey">Top Topics</h4>
               <?php
				$query = "select  * from post  order by like_status desc limit 5";
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
        <p>Non Tech © 2016. All rights reserved</p>
      </div>
		</footer>

    <!--preloader-->
    <div id="spinner-wrapper">
      <div class="spinner"></div>
    </div>



    <!-- Scripts
    ================================================= -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTMXfmDn0VlqWIyoOxK8997L-amWbUPiQ&amp;callback=initMap"></script>
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky-kit.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="js/script.js"></script>
    <script>
    $('.btn').click(function () {
			   window.location.href = 'User_Landing.php';
    });
    $('.fbtn').click(function () {
				   window.location.href = 'User_Profile.php';
    });
    </script>
  </body>

</html>
