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
                  <li><a href="#register" data-toggle="tab">Register</a></li>
                  <li  class="active"><a href="#login" data-toggle="tab">Login</a></li>
                </ul><!--Tabs End-->
              </div>

              <!--Registration Form Contents-->
              <div class="tab-content">
                <div class="tab-pane" id="register">
                  <h3>Register Now !!!</h3>
                  <p class="text-muted">Join today & Meet millions</p>

                  <!--Register Form-->
                  <form name="registration_form" id='registration_form' class="form-inline">
                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label for="firstname" class="sr-only">First Name</label>
                        <input id="fnm" class="form-control input-group-lg" type="text" name="firstname" title="Enter first name" placeholder="First name"/>
                      </div>
                      <div class="form-group col-xs-6">
                        <label for="lastname" class="sr-only">Last Name</label>
                        <input id="lnm" class="form-control input-group-lg" type="text" name="lastname" title="Enter last name" placeholder="Last name"/>
                      </div>
                    </div>
                    <div class="row">
                      <p class="birth"><strong>Date of Birth</strong></p>
                      <div class="form-group col-sm-3 col-xs-6">
                        <label for="month" class="sr-only"></label>
                        <select class="form-control" id="day">
                          <option value="Day" disabled selected>Day</option>
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                          <option>6</option>
                          <option>7</option>
                          <option>8</option>
                          <option>9</option>
                          <option>10</option>
                          <option>11</option>
                          <option>12</option>
                          <option>13</option>
                          <option>14</option>
                          <option>15</option>
                          <option>16</option>
                          <option>17</option>
                          <option>18</option>
                          <option>19</option>
                          <option>20</option>
                          <option>21</option>
                          <option>22</option>
                          <option>23</option>
                          <option>24</option>
                          <option>25</option>
                          <option>26</option>
                          <option>27</option>
                          <option>28</option>
                          <option>29</option>
                          <option>30</option>
                          <option>31</option>
                        </select>
                      </div>
                      <div class="form-group col-sm-3 col-xs-6">
                        <label for="month" class="sr-only"></label>
                        <select class="form-control" id="month">
                          <option value="month" disabled selected>Month</option>
                          <option>Jan</option>
                          <option>Feb</option>
                          <option>Mar</option>
                          <option>Apr</option>
                          <option>May</option>
                          <option>Jun</option>
                          <option>Jul</option>
                          <option>Aug</option>
                          <option>Sep</option>
                          <option>Oct</option>
                          <option>Nov</option>
                          <option>Dec</option>
                        </select>
                      </div>
                      <div class="form-group col-sm-6 col-xs-12">
                        <label for="year" class="sr-only"></label>
                        <select class="form-control" id="year">
                          <option value="year" disabled selected>Year</option>
                          <option>2000</option>
                          <option>2001</option>
                          <option>2002</option>
                          <option>2004</option>
                          <option>2005</option>
                          <option>2006</option>
                          <option>2007</option>
                          <option>2008</option>
                          <option>2009</option>
                          <option>2010</option>
                          <option>2011</option>
                          <option>2012</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group gender">
                      <label class="radio-inline">
                        <input type="radio" id="rd1" value="Male" name="optradio" checked>Male
                      </label>
                      <label class="radio-inline">
                        <input type="radio" id="rd1" value="Female" name="optradio">Female
                      </label>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label for="city" class="sr-only">City</label>
                        <input id="city" class="form-control input-group-lg reg_name" type="text" name="city" title="Enter city" placeholder="Your city"/>
                      </div>
                      <div class="form-group col-xs-6">
                        <label for="country" class="sr-only"></label>
                        <select class="form-control" id="country">
                          <option value="country" disabled selected>Country</option>
                          <option value="Afghanistan">Afghanistan</option>
                          <option value="Albania">Albania</option>
                          <option value="Algeria">Algeria</option>
                          <option value="American Samoa">American Samoa</option>
                          <option value="Andorra">Andorra</option>
                          <option value="Angola">Angola</option>
                          <option value="Anguilla">Anguilla</option>
                          <option value="Antarctica">Antarctica</option>
                          <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                          <option value="Argentina">Argentina</option>
                          <option value="Armenia">Armenia</option>
                          <option value="Aruba">Aruba</option>
                          <option value="Australia">Australia</option>
                          <option value="Austria">Austria</option>
                          <option value="Azerbaijan">Azerbaijan</option>
                          <option value="Bahamas">Bahamas</option>
                          <option value="Bahrain">Bahrain</option>
                          <option value="Bangladesh">Bangladesh</option>
                          <option value="Barbados">Barbados</option>
                          <option value="Belarus">Belarus</option>
                          <option value="Belgium">Belgium</option>
                          <option value="Belize">Belize</option>
                          <option value="Benin">Benin</option>
                          <option value="Brazil">Brazil</option>
                          <option value="Bulgaria">Bulgaria</option>
                          <option value="Burkina Faso">Burkina Faso</option>
                          <option value="Burundi">Burundi</option>
                          <option value="Cambodia">Cambodia</option>
                          <option value="Cameroon">Cameroon</option>
                          <option value="Canada">Canada</option>
                          <option value="Cape Verde">Cape Verde</option>
                          <option value="Cayman Islands">Cayman Islands</option>
                          <option value="Central African Republic">Central African Republic</option>
                          <option value="Chad">Chad</option>
                          <option value="Chile">Chile</option>
                          <option value="China">China</option>
                          <option value="Christmas Island">Christmas Island</option>
                          <option value="Colombia">Colombia</option>
                          <option value="Cuba">Cuba</option>
                          <option value="Cyprus">Cyprus</option>
                          <option value="Ecuador">Ecuador</option>
                          <option value="Egypt">Egypt</option>
                          <option value="Finland">Finland</option>
                          <option value="France">France</option>
                          <option value="French Guiana">French Guiana</option>
                          <option value="French Polynesia">French Polynesia</option>
                          <option value="French Southern Territories">French Southern Territories</option>
                          <option value="Gabon">Gabon</option>
                          <option value="Gambia">Gambia</option>
                          <option value="Georgia">Georgia</option>
                          <option value="Germany">Germany</option>
                          <option value="Ghana">Ghana</option>
                          <option value="Gibraltar">Gibraltar</option>
                          <option value="Greece">Greece</option>
                          <option value="Greenland">Greenland</option>
                          <option value="Grenada">Grenada</option>
                          <option value="Guadeloupe">Guadeloupe</option>
                          <option value="Guam">Guam</option>
                          <option value="Guatemala">Guatemala</option>
                          <option value="Guernsey">Guernsey</option>
                          <option value="Guinea">Guinea</option>
                          <option value="Honduras">Honduras</option>
                          <option value="Hong Kong">Hong Kong</option>
                          <option value="Hungary">Hungary</option>
                          <option value="Iceland">Iceland</option>
                          <option value="Indonesia">India</option>
                          <option value="IDN">Indonesia</option>
                          <option value="Iran">Iran</option>
                          <option value="Iraq">Iraq</option>
                          <option value="Ireland">Ireland</option>
                          <option value="Isle of Man">Isle of Man</option>
                          <option value="Israel">Israel</option>
                          <option value="Italy">Italy</option>
                          <option value="Jamaica">Jamaica</option>
                          <option value="Japan">Japan</option>
                          <option value="Jersey">Jersey</option>
                          <option value="Jordan">Jordan</option>
                          <option value="Kazakhstan">Kazakhstan</option>
                          <option value="Kyrgyzstan">Kyrgyzstan</option>
                          <option value="Niger">Niger</option>
                          <option value="Nigeria">Nigeria</option>
                          <option value="Niue">Niue</option>
                          <option value="Norway">Norway</option>
                          <option value="Oman">Oman</option>
                          <option value="Pakistan">Pakistan</option>
                          <option value="Palau">Palau</option>
                          <option value="Peru">Peru</option>
                          <option value="Philippines">Philippines</option>
                          <option value="Pitcairn">Pitcairn</option>
                          <option value="Poland">Poland</option>
                          <option value="Portugal">Portugal</option>
                          <option value="Puerto Rico">Puerto Rico</option>
                          <option value="Qatar">Qatar</option>
                          <option value="Romania">Romania</option>
                          <option value="Russian Federation">Russian Federation</option>
                          <option value="Rwanda">Rwanda</option>
                          <option value="Sudan">Sudan</option>
                          <option value="Suriname">Suriname</option>
                          <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                          <option value="Swaziland">Swaziland</option>
                          <option value="Sweden">Sweden</option>
                          <option value="United States">United States</option>
                          <option value="Yemen">Yemen</option>
                          <option value="Zambia">Zambia</option>
                          <option value="Zimbabwe">Zimbabwe</option>
                        </select>
                      </div>
                    </div>
                    <div class="row">
					        <div class="form-group col-xs-6">
					           <label for="unm" class="sr-only">User Name</label>
					               <input id="unm" class="form-control input-group-lg" type="text" name="unm" title="Enter user name" placeholder="User name"/>
					         </div>
					       <div class="form-group col-xs-6">
					       <label for="Contact Number" class="sr-only">Contact Number</label>
					      <input id="con" class="form-control input-group-lg" type="text" name="con" title="Enter contact number" placeholder="contact number"/>
				 </div>
			</div>
           <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="email" class="sr-only">Email</label>
                        <input id="email" class="form-control input-group-lg" type="text" name="Email" title="Enter Email" placeholder="Your Email"/>
                      </div>
                    </div>
           <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="password" class="sr-only">Password</label>
                        <input id="password" class="form-control input-group-lg" type="password" name="password" title="Enter password" placeholder="Password"/>
                      </div>
           </div>
        <div class="row">
                          <div class="file-upload">
                            <label for="img" class="file-upload__label">Select Image &nbsp;<img style="height: 20px; width: 20px;" src="images/img-icon.png" /></label>
                            <input id="img" class="file-upload__input" type="file" name="fl" accept="image/*">
                          </div>
<!--
		                      <div class="form-group col-xs-12">
		                        <label for="Image" class="sr-only">Image</label>
		                        <input id="img" class="btn btn-primary" type="file" name="fl" />
		                      </div>
                        -->
           </div>
                  </form><!--Register Now Form Ends-->
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
                        <input id="leml" class="form-control input-group-lg" type="text" name="Email" title="Enter Email" placeholder="Your Email"/>
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
$("form input:radio").change(function () {
    if ($(this).val() == "Male") {
        Gender="Male";
        }
        else {
        Gender="Female";
    }
});
$('#lbtn').click(function(){
 var eml=$('#leml').val();
 var pwd=$('#lpassword').val();
 var str=eml+","+pwd;
$.ajax({
 url:'User_Login_Submit.php',
 datatype:'json',
 type:'POST',
 data:{"dt":str},
 success: function(data)
 {
 // alert("Login String"+str);
 $('#leml').val('');
 $('#lpassword').val('');
 if(data=="ok")
 window.location.href = 'Show_Post.php';
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


//Registration String
$('#rbtn').click(function(){
 alert("Hello"+Gender);
 var fnm=$('#fnm').val();
 var lnm=$('#lnm').val();
 var day=$('#day').val();
 var month=$('#month').val();
 var year=$('#year').val();
 var city=$('#city').val();
 var country=$('#country').val();
 var unm=$('#unm').val();
 var email=$('#email').val();
 var password=$('#password').val();
 var img=$('#img').val();
 if(fnm=="")
 {
 alert("Please Enter First Name");
 }
 else
 if(lnm=="")
 {
 alert("Please Enter Last Name");
 }
 else
 if(day=="Day")
 {
 alert("Please Select Day");
 }
 else
 if(month=="Month")
 {
 alert("Please Select Month");
 }
 else
  if(year=="Year")
  {
  alert("Please Select Month");
 }
 else
 if(email=="")
 {
 alert("Please Enter Email-Id Of Faculty");
 }
 else
  if(city=="")
  {
  alert("Please Enter your city");
 }
 else
  if(country=="")
  {
  alert("Please Select your country");
 }
 else
 if(password=="")
 {
 alert("Please Enter Password");
 }
 else
 if(unm=="")
 {
 alert("Please Enter User Name For Login");
 }
 else
 {
 var dob=$('#day').val()+"/"+$('#month').val()+"/"+$('#year').val();
var str=$('#unm').val()+","+$('#password').val()+","+$('#fnm').val()+","+$('#lnm').val()+","+Gender+","+dob+","+$('#email').val()+","+$('#con').val()+","+$('#img').val()+","+$('#city').val()+","+$('#country').val();
 $.ajax({
 url:'User_Reg_Submit.php',
 datatype:'json',
 type:'POST',
 data:{"dt":str},
 success: function(data)
 {
  //alert("Full String"+str);
 $('#unm').val('');
 $('#password').val('');
 $('#fnm').val('');
 $('#lnm').val('');
 $('#email').val('');
 $('#con').val('');
 $('#img').val('');
 if(data=="ok")
 window.location.href = 'User_Login.php';
 },
 error: function()
 {
 console.log("Fail To Data Send");
 }
 });
 }

});
});
</script>
	</body>

<!-- Mirrored from thunder-team.com/friend-finder/index-register.html by HTTrack Website Copier/3.x [XR&CO'2013], Thu, 26 Oct 2017 15:10:03 GMT -->
</html>
