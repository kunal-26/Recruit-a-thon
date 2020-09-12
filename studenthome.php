<?php 
session_start();
if(!isset($_SESSION["usertype"]))
{
	header("location:autherror.php");
	die();
}
$ut=$_SESSION["usertype"];
$e1=$_SESSION["enrollmentno"];
if($ut!="student")
{
	header("location:autherror.php");
	die();
}
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="index1.css">
<link rel="stylesheet" type="text/css" href="index11.css">
<script type="text/javascript" src="index1.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src=""></script>

  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/x-icon" href="https://image.ibb.co/fOur3b/favicon.png"/>
<meta name="theme-color" content="#1885ed">
  <title>Bricks.io - Homepage</title>
</head>

<body>
<header class="header">
  <div class="container header__container">
<div class="header__logo"><img class="header__img" src="https://image.ibb.co/kcVou6/path3000.png"> <h1 class="header__title">Bricks<span class="header__light">.io</span></h1></div> 
              
            </button>

  <div class="header__menu">
    <nav id="navbar" class="header__nav collapse">
      <ul class="header__elenco">
<li class="header__el header__el--blue"><a href="logout.php" class="btn btn--white">Home →</a></li>
        <li class="header__el header__el--blue"><a href="myapplication.php" class="btn btn--white">My Applications →</a></li>
        <li class="header__el header__el--blue"><a href="aboutus.php" class="btn btn--white">About us →</a></li>
 <li class="header__el header__el--blue"><a href="blogs.php" class="btn btn--white">Blogs →</a></li>       
 <li class="header__el header__el--blue"><a href="contactus.php" class="btn btn--white">Contact Us →</a></li>
        <li class="header__el header__el--blue"><a href="studentprofile.php" class="btn btn--white">Hello <?php echo $e1;?> →</a></li>

        <li class="header__el header__el--blue"><a href="logout.php" class="btn btn--white">Sign Out →</a></li>
      </ul>
    </nav>
  </div>
    </div>
</header>

<div class="cards-list">
  
<div class="card 1">
  <div class="card_image"> <img src="https://i.redd.it/b3esnz5ra34y.jpg" /> </div>
  <div class="card_title title-white">
    <p><a href="jobs.php" style="color:#FFF;">Job Openings</a></p>
  </div>
</div>

<div class="card 4">
  <div class="card_image">
    <img src="https://media.giphy.com/media/LwIyvaNcnzsD6/giphy.gif" />
    </div>
  <div class="card_title title-black">
    <p style="color:#FFF;"><a href="project.php" style="color:#FFF;">Projects</a></p>
  </div>
  </div>



  <div class="card 2">
  <div class="card_image">
    <img src="https://cdn.blackmilkclothing.com/media/wysiwyg/Wallpapers/PhoneWallpapers_FloralCoral.jpg" />
    </div>
  <div class="card_title title-white">
    <p style="color:#FFF;"><a href="internship.php" style="color:#FFF;">Internships</a></p>
  </div>
</div>


<div class="card 3">
  <div class="card_image">
    <img src="https://media.giphy.com/media/10SvWCbt1ytWCc/giphy.gif" />
  </div>
  <div class="card_title">
    <p><a href="hackathon.php" style="color:#FFF;">Hackathons</a></p>
  </div>
</div>
  
  
</div>
  
  
  
  </div>
  </div>
  </div>



<div class="sect sect--padding-top">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
    <div class="site">
      <h1 class="site__title">Fast paced way to grow your business</h1>
      <h2 class="site__subtitle">Manage analytics like a boss</h2>
      <div class="site__box-link">
        <a class="btn btn--width" href="">Pricing</a>
        <a class="btn btn--revert btn--width" href="">Contact</a>
      </div>
      <img class="site__img" src="https://image.ibb.co/c7grYb/image3015.png">
    </div>
    </div>
    </div>
  </div>
</div>

  
 </body>
 </html>