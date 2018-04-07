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
<!DOCTYPE html>
<html lang="en">

<head>
    <style type="text/css">
.file-upload {
  position: relative;
  display: inline-block;
}

.file-upload__label {
  display: block;
  color: #707B7C;
  border-radius: .4em;
  transition: background .3s;
}

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
		<title>Fighting Corruption |Social Network </title>

    <!-- Stylesheets
    ================================================= -->
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/ionicons.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link href="css/emoji.css" rel="stylesheet">

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
                  <h3><?php echo $unm;?>  </h3>
                  <p class="text-muted"></p>
                </div>
              </div>
              <div class="col-md-9">
                <ul class="list-inline profile-menu">
                  <li><a href="timeline.html" class="active"></a></li>
                  <li><a href="timeline-about.html"></a></li>
                  <li><a href="timeline-album.html"></a></li>
                  <li><a href="timeline-friends.html"></a></li>
                </ul>
                <ul class="follow-me list-inline">
                  <li>1  followers</li>
                  </ul>
              </div>
            </div>
          </div><!--Timeline Menu for Large Screens End-->

          <!--Timeline Menu for Small Screens-->
          <div class="navbar-mobile hidden-lg hidden-md">
            <div class="profile-info">
              <img src="images/users/user-1.jpg" alt="" class="img-responsive profile-photo" />
              <h4>Sarah Cruiz</h4>
              <p class="text-muted">Creative Director</p>
            </div>
            <div class="mobile-menu">
              <ul class="list-inline">
                <li><a href="timline.html" class="active">Timeline</a></li>
                <li><a href="timeline-about.html">About</a></li>
                <li><a href="timeline-album.html">Album</a></li>
                <li><a href="timeline-friends.html">Friends</a></li>
              </ul>
              <button class="btn-primary">Add Friend</button>
            </div>
          </div><!--Timeline Menu for Small Screens End-->

        </div>
        <div id="page-contents">
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-7">

              <!-- Post Create Box
              ================================================= -->
              <div class="create-post">
                <div class="row">
                  <div class="col-md-25 col-sm-25">
                    <div class="form-group">
                      <img src="images/users/user-1.jpg" alt="" class="profile-photo-md" />
                      <textarea name="texts" id="postText" cols="260" rows="12" class="form-control" placeholder="Write what you wish"></textarea>
                    </div>
                  </div>
                  <div class="col-md-25 col-sm-25">
                    <div class="tools">
                      <ul class="publishing-tools list-inline">
                       <!----<li><a href="#"><i class="ion-images"></i></a></li>--->

                      <div class="file-upload">
					                              <label for="fl" class="file-upload__label">Select Image &nbsp;<img style="height: 20px; width: 20px;" src="images/img-icon.png" /></label>
					                              <input id="fl" class="file-upload__input" type="file" accept="image/*">
                        </div>


                      </ul>
                    </div>
                    <div class="col-md-25 col-sm-25">
					       <div class="form-group">
					            <textarea name="texts" id="ylink" cols="260" rows="3" class="form-control" placeholder="Paste Your Youtube Link Here"></textarea>
					        </div>
                  </div>
               </div>
               <div class="tools">
			             <ul class="publishing-tools list-inline">
			                    <!----<li><a href="#"><i class="ion-images"></i></a></li>--->
			                   <button class="btn btn-primary pull-right" id="btn">Publish</button>
                        </ul>
                    </div>
                 </div>
              </div><!-- Post Create Box End-->


              <!-- Post Content
              ================================================= -->

       <!-- Footer
       ================================================= -->
       <footer id="footer">
         <div class="container">
         	<div class="row">
             <div class="footer-wrapper">
               <div class="col-md-3 col-sm-3">

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
<script>
$(function(){
$('#btn').click(function(){

 var posttext=$('#postText').val();
 var fl=$('#fl').val();
 var ylink=$('#ylink').val();
 var str=posttext+","+fl+","+ylink;
 alert(str);

$.ajax({
 url:'User_Post_Submit.php',
 datatype:'json',
 type:'POST',
 data:{"dt":str},
 success: function(data)
 {
 alert("Login String"+str);
 $('#postText').val('');
 $('#ylink').val('');
 //window.location.href = 'User_Landing.php';
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
