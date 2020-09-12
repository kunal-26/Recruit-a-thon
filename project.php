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
<link rel="stylesheet" type="text/css" href="hackathon.css">
<link rel="stylesheet" type="text/css" href="hackathon1.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
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
<h1>Projects</h1>
<?php 
$cn=mysqli_connect("localhost","id14837133_platform","Kunal@123456","id14837133_bricksio");
if(!$cn)
{
	echo "Unable to connect";
	die();
}
$sql="select * from project";

//Fetch data
$result=mysqli_query($cn,$sql);

//Check number of rows
$n=mysqli_num_rows($result);

if($n>0)
{
	//show data
	while($rw=mysqli_fetch_array($result))
	{
		$a=$rw["name"];
		
		?>

        <div class="card 4" style="float:left; border-spacing: 50px; margin: 2.3%;">
  <div class="card_image">
    <img src="https://media.giphy.com/media/LwIyvaNcnzsD6/giphy.gif" />
    </div>
  <div class="card_title title-black">
  </div>

  <div class="card_title">
    <form method="post" action="project1.php">
    <input type="hidden" name="h1" value="<?php echo $a; ?>" />
    <input type="submit" value="<?php echo $a; ?>" name="b1" style="
	background-color:#44c767;
	border-radius:28px;
	border:1px solid #18ab29;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:17px;
	padding:16px 31px;
	text-decoration:none;
	text-shadow:0px 1px 0px #2f6627;
"/>
                        </form>
  </div>
</div>



  
<?php
	}
}
else
{
	?>
	<h2>No data found</h2>
	<?php
}
?>
    
</body>
</html>