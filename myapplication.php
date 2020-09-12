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
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src=""></script>
<link rel="stylesheet" type="text/css" href="process.css">
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
        <li class="header__el"><a href="home.php" class="header__link">Home</a></li>
        <li class="header__el"><a href="opportunity.php" class="header__link">Opportunities</a></li>
        <li class="header__el"><a href="about.php" class="header__link">About us</a></li>
        <li class="header__el"><a href="blogs.php" class="header__link">Blogs</a></li>
        <li class="header__el"><a href="contactus.php" class="header__link">Contact us</a></li>

        <li class="header__el header__el--blue"><a href="studentprofile.php" class="btn btn--white">Hello <?php echo $e1;?> →</a></li>

        <li class="header__el header__el--blue"><a href="logout.php" class="btn btn--white">Sign Out →</a></li>
      </ul>
    </nav>
  </div>
    </div>
</header>


<?php 
$cn=mysqli_connect("localhost","id14837133_platform","Kunal@123456","id14837133_bricksio");
if(!$cn)
{
	echo "unable to conenct";
	die();
}
$q1="select * from jobregisteration where enrollmentno='$e1'";
$q2="select * from internregisteration where enrollmentno='$e1'";
$q3="select * from hackathonregisteration where enrollmentno='$e1'";
$q4="select * from projectregisteration where enrollmentno='$e1'";
$result1=mysqli_query($cn,$q1);
$result2=mysqli_query($cn,$q2);
$result3=mysqli_query($cn,$q3);
$result4=mysqli_query($cn,$q4);
$n1=mysqli_num_rows($result1);
$n2=mysqli_num_rows($result2);
$n3=mysqli_num_rows($result3);
$n4=mysqli_num_rows($result4);
if($n1>0)
{
	$rw=mysqli_fetch_array($result1);
	$company=$rw["company"];
	$title=$rw["title"];
	$contact=$rw["contact"];
	
	?>
    
<div class="container my-5">
<div class="col-md-10 mx-auto">
      <h1 style="font-weight: 600;">Jobs 
</h1>
      
    </div>

      <div class="col-lg-10 mx-auto">
        <div class="text-secondary">
    <p class="my-2" style="line-height: 2;"><?php echo $company;?></p>
    <p class="my-2" style="line-height: 2;"><?php echo $title;?></p>
    <p class="my-2" style="line-height: 2;"><?php echo $contact;?></p>
    
	<?php
}
?>
    
    <br>
    <br>
    <br>
<?php
if($n2>0)
{
	$rw=mysqli_fetch_array($result2);
	$company=$rw["company"];
	$title=$rw["title"];
	$contact=$rw["contact"];
	
	?>
    
<div class="col-md-10 mx-auto">
      <h1 style="font-weight: 600;">Internships 
</h1>
      
    </div>

      <div class="col-lg-10 mx-auto">
        <div class="text-secondary">
    <p class="my-2" style="line-height: 2;"><?php echo $company;?></p>
    <p class="my-2" style="line-height: 2;"><?php echo $title;?></p>
    <p class="my-2" style="line-height: 2;"><?php echo $contact;?></p>
    
	<?php
}
?>  

<br/>
  
<?php
if($n3>0)
{
	$rw=mysqli_fetch_array($result3);
	$company=$rw["event"];
	$contact=$rw["contact"];
	
	?>
    
<div class="container my-5">
<div class="col-md-10 mx-auto">
      <h1 style="font-weight: 600;">Hackathons 
</h1>
      
    </div>

      <div class="col-lg-10 mx-auto">
        <div class="text-secondary">
    <p class="my-2" style="line-height: 2;"><?php echo $company;?></p>
    <p class="my-2" style="line-height: 2;"><?php echo "Hackathon";?></p>
    <p class="my-2" style="line-height: 2;"><?php echo $contact;?></p>
    
	<?php
}
?>    
      <br>
      
      
      
<?php
if($n4>0)
{
	$rw=mysqli_fetch_array($result4);
	$company=$rw["organisation"];
	$title=$rw["title"];
	$contact=$rw["contact"];
	
	?>
    
<div class="container my-5">
<div class="col-md-10 mx-auto">
      <h1 style="font-weight: 600;">Projects 
</h1>
      
    </div>

      <div class="col-lg-10 mx-auto">
        <div class="text-secondary">
    <p class="my-2" style="line-height: 2;"><?php echo $company;?></p>
    <p class="my-2" style="line-height: 2;"><?php echo $title;?></p>
    <p class="my-2" style="line-height: 2;"><?php echo $contact;?></p>
    
	<?php
}
?>      
       
  </div>
      </div>

</div>
</div>




</body>
</html>
