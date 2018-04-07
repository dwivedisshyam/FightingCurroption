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
.input_div
{
position: relative;
display: inline-block;
}
.input_label
{
display: block;
 color: #707B7C;
 border-radius: .4em;
 transition: background .3s;
}

chk
{
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
		<title>My Timeline | This is My Coolest Profile</title>

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
                  <h3><?php  echo $unm; ?></h3>
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
                <?php
												  include("Connection.php");
													 $query = "select count(*) from followers where uid=".$uid;
													 $rs=mysql_query($query);
														  if($rw=mysql_fetch_array($rs))
															 {

											                     ?>
								                  <li><?php echo $rw[0]."   &ensp;Followers"; ?></li>
								                  <?php
								                  }
                  ?>
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
                  <div class="col-md-7 col-sm-7">

                  </div>
                  <div class="col-md-5 col-sm-5">
                    <div class="tools">
                      <button class="btn btn-primary pull-right" id='btn'>Write Post</button>
                    </div>
                  </div>
                </div>
              </div><!-- Post Create Box End-->

              <!-- Post Content
              ================================================= -->
                 <?php
			                   $query = "select * from post order by date desc";
			 					$rs=mysql_query($query);
			                      while($rw=mysql_fetch_array($rs))
			                        {
			                        $query9 = "select * from user_info where uid=".$rw[6];
			 					    $rs9=mysql_query($query9);
			 					    if($rw9=mysql_fetch_array($rs9)){
			                     ?>

             <div class="post-content">

                <!--Post Date-->
                <div class="post-date hidden-xs hidden-sm">
                  <h5><?php echo $rw9[1]; ?></h5>
                  <p class="text-grey"><?php echo $rw[2]; ?><br><?php echo strtoupper($rw[3]); ?></p>
                </div><!--Post Date End-->

                <!----img src="images/post-images/12.jpg" alt="post-image" class="img-responsive post-image" /---->
                <div class="post-container">
                  <img src="images/users/user-1.jpg" alt="user" class="profile-photo-md pull-left" />
                  <div class="post-detail">
                    <div class="user-info">
                      <h5><a href="timeline.html" class="profile-link"><?php echo $rw9[1]; } ?></a> <span class="following">following</span></h5>
                      <p class="text-muted">Published a photo about 15 mins ago</p>
                    </div>
                    <div class="reaction">
                      <a class="btn text-green" href="Post_Like.php?id=<?php echo $rw[0];?>"><i class="icon ion-thumbsup"></i> <?php echo $rw[4];?></a>
                      <a class="btn text-red" href="Post_UnLike.php?id=<?php echo $rw[0];?>"><i class="fa fa-thumbs-down"></i> <?php echo $rw[5];?></a>
                    </div>
                    <div class="line-divider"></div>
                    <div class="post-text">
                    <!---Post Text-->
                      <p>
                      <?php
                      echo $rw[1];
                      $i=1;
                      ?>

                      <i class="em em-anguished"></i> <i class="em em-anguished"></i> <i class="em em-anguished"></i></p>
                      <?php
                     $query2= "select * from post_video where pid=".$rw[0];
					 $rs2=mysql_query($query2);
					 $rw2=mysql_fetch_array($rs2);
					 if($rw2[0])
			           {
			            $ar=explode("=",$rw2[2]);
			            echo"<div class='embed-responsive embed-responsive-16by9'><iframe class='embed-responsive-item' src='https://www.youtube.com/embed/".$ar[1]."' frameborder=0 allowfullscreen></iframe></div>";
                      }
                      ?>
                      <div class="fb-share-button" data-href="http://localhost/Makeathon/Show_Post.php" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Flocalhost%2FMakeathon%2FShow_Post.php&amp;src=sdkpreparse">Share</a></div> </div>

                    <div class="line-divider"></div>
                    <?php
                    $query1 = "select * from comment where pid=".$rw[0]." order by date desc";
					$rs1=mysql_query($query1);
					while($rw1=mysql_fetch_array($rs1))
				    {
				    $query6 = "select * from user_info where uid=".$rw1[2];
										  $rs6=mysql_query($query6);
										if($rw6=mysql_fetch_array($rs6)){
										?>
					                    <div class="post-comment">
					                      <img src="images/users/user-11.jpg" alt="" class="profile-photo-sm" />
					                      <p><a href="timeline.html" class="profile-link"><?php echo $rw6[1];} ?></a><i class="em em-laughing"></i>
					                    <?php echo $rw1[3];?>
					                    </p>
                    </div>
                    <?php
                     }
                    ?>
                    <div class="post-comment">
                      <img src="images/users/user-1.jpg" alt="" class="profile-photo-sm" />
                      <input type="text" class="form-control"  id="<?php echo $rw[0];?>"  placeholder="Post a comment">
                       <div class="input_div">
                       <label class="input_label" for="ck"><img style="width:20px; height: 20px;" src="images/send.png"/></label>
                       <input type='checkbox' id="ck" class="chk" name="chk"  value="<?php echo $rw[0];?>" hidden >

                       <label for="ckk" class="input_label"><img style="width:20px; heigth:20px;" src="images/report.png"/></label>
                       <input id="ckk" type='checkbox' class="chk1" name="chk1"  value="<?php echo $rw[0];?>" hidden >
                       </div>
                       <input type='hidden' id="uid"  value="<?php echo $uid; ?>" >
                    </div>
                  </div>
                </div>
              </div>

              <?php
              }
               ?>
          </div>
            <div class="col-md-2 static">
              <div id="sticky-sidebar">
                <h4 class="grey">Trend activity</h4>
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
        <p>NonTech Team © 2016. All rights reserved</p>
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
$('.btn').click(function () {
		   window.location.href = 'User_Landing.php';
});
var ctext="";
var pid="";
var uid=$('#uid').val();
$('.chk1').click(function () {
  $('.chk1:checked').each(function () {
	  var id= $(this).val();
	  window.location.href = 'Report_To_Admin.php?id='+id;
   $('input[name="chk1"]').each(function() {
 	  this.checked = false;
   });
});
});
		$('.chk').click(function () {

		       $('.chk:checked').each(function () {
		           pid= $(this).val();
		           ctext=document.getElementById(pid);
		           alert(ctext.value);
		           alert(pid);
               $('input[name="chk"]').each(function() {
			   			this.checked = false;
			   });
			   window.location.href = 'Show_Post.php';
		});

		var str=pid+","+uid+","+ctext.value;
		alert(str);
		 $.ajax({
		 url:'Comments_Submit.php',
		 datatype:'json',
		 type:'POST',
		 data:{"dt":str},
		 success: function(data)
		 {
		  //alert("Full String"+str);
		 $('#ct').val('');
		  },
		 error: function()
		 {
		 console.log("Fail To Data Send");
		 }
      });
   });
});
</script>
<div id="fb-root"></div>
<script>
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.10';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
</html>
