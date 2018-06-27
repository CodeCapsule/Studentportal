<!DOCTYPE html>
<html>
<head>
  <title>School Portal</title>
  
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
 <style type="text/css">
   
 @font-face {
    font-family: 'texgyreadventorregular';
    src: url('../fonts/texgyreadventor-regular-webfont.ttf') format('truetype');
    font-weight: normal;
    font-style: normal;
}
@font-face {
     font-family: 'open_sansregular';
      src:url('../fonts/OpenSans-Regular-webfont.ttf') format('truetype');
}
body {
  font-family: 'open_sansregular';
  background:#ffffff;
  font-size: 100%;
}
/* start header */
.header_bg{
  border-top:10px groove #40bf40;
  background: #ffffff;
}
.header_bg1 {
  border-top:8px groove #3b3b3b;
  background: url('../images/slider_bg.jpg') no-repeat  left;
  background-size: 100%;
}
.header{
  padding: 2% 0;
}
.logo h1 a{
  font-size: 1em;
  text-transform: uppercase;
  color: #3B3B3B;
  text-decoration: none;
  font-family: 'texgyreadventorregular';
}
/* search */
.h_search{
  width: 30%;
  position: relative;
  margin-top: 2%;
}
.h_search form{
  width: 100%;
}
.h_search form input[type="text"]{
  font-family: 'open_sansregular';
  padding: 10px 16px;
  outline: none;
  color: #c6c6c6;
  font-size: 13px;
  border: 1px solid rgb(236, 236, 236);
  background: #FFFFFF;
  width: 73.333%;
  line-height: 22px;
  position: relative;
  -webkit-appearance: none;
}
.h_search form input[type="submit"]{
  font-family: 'open_sansregular';
  background: #3B3B3B;
  color: #ffffff;
  text-transform: uppercase;
  font-size: 13px;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
  width: 26.333%;
  position: absolute;
  line-height: 1.5em;
  outline: none;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  -webkit-appearance: none;
}
.h_search form input[type="submit"]:hover {
  background: #FF5454;
}
/* menu */
.h_menu{
  padding: 0; 
  background: #006600;
}
.navbar {
  position: relative;
  min-height: 60px;
  margin-bottom: 0px;
  border: none;
}
.navbar-default .navbar-collapse, .navbar-default .navbar-form {
  background: #006600;
  color: #ffffff;
  padding: 0;
}
.navbar-default .navbar-nav > .active > a,.navbar-default .navbar-nav>li>a:hover,.navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover{
  background: #008000;
  color: #ffffff;
}
.navbar-default .navbar-nav > li > a {
  color: #fff;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
.nav > li {
  border-right: 1px solid rgb(39, 37, 37);
}
.nav > li > a {
  font-size: 13px;
  padding: 20px 30px;
  text-transform: uppercase;
}

/*Tables*/


table { 
  width: 100%; 
  border-collapse: collapse; 
}
/* Zebra striping */
tr:nth-of-type(odd) { 
  background: #eee; 
}
th { 
  background: #333; 
  color: white; 
  font-weight: bold; 
}
td, th { 
  padding: 6px; 
  border: 1px solid #ccc; 
  text-align: left; 
}


/*Media Queries*/

@media only screen and (max-width: 1440px) and (min-width: 240px)  {
  .wrap{
    width:95%;
  }
}
@media only screen and (max-width: 1440px) {
}
@media only screen and (max-width: 1366px) {
}
@media only screen and (max-width: 1280px) {
}
@media only screen and (max-width: 1024px) {
  .images_1_of_4 h4 a {
    font-size: 1.2em;
  }
  .para {
    font-size: 13px;
  }
  .content_right h4 {
    font-size: 2em;
  }
}
@media only screen and (max-width: 768px) {
  .logo{
    text-align:center;
  }
  .h_search {
    width: 98%;
    padding: 20px;
  }
  .h_menu {
    position: relative;
  } 
  .soc_icons {
    position: absolute;
    top: 0px;
    background: #3b3b3b;
  }
  .navbar-default .navbar-toggle {
    border-color: #FFF;
  }
  .navbar {
    min-height: 51px;
  }
  .navbar-default .navbar-collapse, .navbar-default .navbar-form {
    border-color: #3b3b3b;
  }
  .navbar-default {
    background-color: #006600;
    border:none;
  }
  .navbar-nav {
    margin: 0px 0px;
  }
  .nav > li > a {
    padding: 20px 15px;
  }
  .soc_icons ul li a {
    font-size: 20px;
    line-height: 50px;
    width: 51px;
    height: 51px;
  }
  .slider_bg {
    background-size: 100% 100%;
  }
  .main {
    padding: 4% 0;
  }
  .images_1_of_4{
    margin-bottom: 4%;
  }
  .main{
    padding: 2%;
  }
  .technology {
    padding: 4%;
  }
  .about {
    padding: 4%;
  }
  .social_network_likes li {
    width: 24.3333%;
  }
  .tag_nav {
    margin: 4% 0;
  }
  .news_letter {
    margin: 4% 0;
  }
  .technology h4 {
    font-size: 20px;
  }
}


@media (min-width: 768px) {
  .navbar-nav {
    width: 100%;
    text-align: center;
  }
  .navbar-nav > li {
    float: none;
    display: inline-block;
  }
  .navbar-nav > li.navbar-right {
    float: right !important;
  }
}

 </style>
</head>
<body>


 <div class="header_bg">
<div class="container">
  <div class="row header">
    <div class="logo navbar-left">
      <h1><a href="index.html"><img src="1.png"> </a></h1>
    </div>
   <!--  <div class="h_search navbar-right">
      <form>
        <input type="text" class="text" value="Enter text here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter text here';}">
        <input type="submit" value="search">
      </form>
    </div> -->
    <div class="clearfix"></div>
  </div>
</div>
</div>
<div class="container">
  <div class="row h_menu">
    <nav class="navbar navbar-default navbar-left" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.html">Home</a></li>
            <li><a href="Announcement.html">Announcement & Events</a></li>
            
            <li><a href="blog.html"> Grades      </a></li>
            
            <li><a href="about.html">About</a></li>
           <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">My Account
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Profile</a></li>
                  <li><a href="#">Grades</a></li>
                  <li><a href="#">Log out</a></li>
                </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
        <!-- start soc_icons -->
    </nav>
    <div class="soc_icons navbar-right">
      <ul class="list-unstyled text-center">
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
      </ul> 
    </div>
  </div>
</div>


</div>
  

  <div id="main">
    <table>
        <thead>
        <tr>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Job Title</th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td>James</td>
          <td>Matman</td>
          <td>Chief Sandwich Eater</td>
        </tr>
        <tr>
          <td>The</td>
          <td>Tick</td>
          <td>Crimefighter Sorta</td>
        </tr>
        </tbody>
    </table>
  </div>

  <div id="footer"></div>
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
</body>
</html>