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
$name=$_POST["h1"];
$cn=mysqli_connect("localhost","id14837133_platform","Kunal@123456","id14837133_bricksio");
if(!$cn)
{
	echo "unable to conenct";
	die();
}
$sql="select * from hackathon where name='$name'";
$result=mysqli_query($cn,$sql);
$n=mysqli_num_rows($result);
if($n==1)
{
	$rw=mysqli_fetch_array($result);
	$description=$rw["description"];
	$statement=$rw["statement"];
	$start=$rw["start"];
	$end=$rw["end"];
	$contact=$rw["contact"];
	$prize=$rw["prize"];
	$rounds=$rw["rounds"];
	$round1=$rw["round1"];
	$round2=$rw["round2"];
	$round3=$rw["round3"];
	$round4=$rw["round5"];
	$round5=$rw["round5"];
	
	?>
<div class="container my-5">
<div class="col-md-10 mx-auto">
      <h1 style="font-weight: 600;"><?php echo $name;?> 
</h1>
      
    </div>

      <div class="col-lg-10 mx-auto">
        <div class="text-secondary">
    <p class="my-2" style="line-height: 2;"><?php echo $description;?></p>
    <br>
    <br>

    <h3 class="font-weight-bold text-dark">Problem Statement</h3>
    <div class="py-3 text-dark flex items-center justify-center">
      <small class="mr-3 flex flex-row items-center">
      <svg fill="currentColor" height="13px" width="13px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<g>
	<g>
		<path d="M256,0C114.837,0,0,114.837,0,256s114.837,256,256,256s256-114.837,256-256S397.163,0,256,0z M277.333,256
			c0,11.797-9.536,21.333-21.333,21.333h-85.333c-11.797,0-21.333-9.536-21.333-21.333s9.536-21.333,21.333-21.333h64v-128
			c0-11.797,9.536-21.333,21.333-21.333s21.333,9.536,21.333,21.333V256z"/>
	</g>
</g>
</svg>
      <span class="ml-1"><?php echo $start;?> TO <?php echo $end;?></span></small>
      <small><a href="#" class="flex flex-row items-center text-dark mr-3">
      <svg class="text-indigo-600" fill="currentColor" height="16px" aria-hidden="true" role="img" focusable="false" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill="currentColor" d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"></path><path d="M0 0h24v24H0z" fill="none"></path></svg>
      <span class="ml-1">AliSher Azimi</span></a></small>
      <small><a href="#" class="flex flex-row items-center text-dark">
      <svg  class="text-indigo-600" fill="currentColor" height="16px" aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18"><path fill="" d="M15.4496399,8.42490555 L8.66109799,1.63636364 L1.63636364,1.63636364 L1.63636364,8.66081885 L8.42522727,15.44178 C8.57869221,15.5954158 8.78693789,15.6817418 9.00409091,15.6817418 C9.22124393,15.6817418 9.42948961,15.5954158 9.58327627,15.4414581 L15.4486339,9.57610048 C15.7651495,9.25692435 15.7649133,8.74206554 15.4496399,8.42490555 Z M16.6084423,10.7304545 L10.7406818,16.59822 C10.280287,17.0591273 9.65554997,17.3181054 9.00409091,17.3181054 C8.35263185,17.3181054 7.72789481,17.0591273 7.26815877,16.5988788 L0.239976954,9.57887876 C0.0863319284,9.4254126 0,9.21716044 0,9 L0,0.818181818 C0,0.366312477 0.366312477,0 0.818181818,0 L9,0 C9.21699531,0 9.42510306,0.0862010512 9.57854191,0.239639906 L16.6084423,7.26954545 C17.5601275,8.22691012 17.5601275,9.77308988 16.6084423,10.7304545 Z M5,6 C4.44771525,6 4,5.55228475 4,5 C4,4.44771525 4.44771525,4 5,4 C5.55228475,4 6,4.44771525 6,5 C6,5.55228475 5.55228475,6 5,6 Z"></path></svg>
        <span class="ml-1">Rs <?php echo $prize;?></span></a></small>
        </div>
    <p class="my-2" style="line-height: 2;"><?php echo $statement;?> .</p>
    
    
       
  </div>
      </div>

</div>
</div>    




<div class="container my-5">
    <section>
        <div class="text-center mb-5">
            <span>STEPS - <?php echo $rounds;?></span>
            <h2 class="font-weight-bold display-4 ">How It <span style="color: #9B5DE5">Works?</span></h2>
        </div>
        
<?php
	if($rounds==3)
	{
		?>		
        <div class="col-12 col-md-6 mx-auto">
            <div class="">
                <div class="bg-light position-relative px-3 my-5">
                    <div class="font-weight-bold circle text-white rounded-circle d-flex align-items-center justify-content-center mx-auto position-relative border border-white"
                         style="width: 60px;height: 60px;top: -30px;border-width: 4px !important; background-color: #9B5DE5">
                        1
                    </div>
                    <div class="px-3 text-center pb-3">
                        <h4>Headline</h4>
                        <p class="font-weight-light my-3">
                        <?php echo $round1;?></p>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="bg-light position-relative px-3 my-5">
                    <div class="font-weight-bold circle text-white rounded-circle d-flex align-items-center justify-content-center mx-auto position-relative border border-white"
                         style="width: 60px;height: 60px;top: -30px;border-width: 4px !important; background-color: #9B5DE5">
                        2
                    </div>
                    <div class="px-3 text-center pb-3">
                        <h4>Headline</h4>
                        <p class="font-weight-light my-3"><?php echo $round2;?></p>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="bg-light position-relative px-3 my-5">
                    <div class="font-weight-bold circle text-white rounded-circle d-flex align-items-center justify-content-center mx-auto position-relative border border-white"
                         style="width: 60px;height: 60px;top: -30px;border-width: 4px !important; background-color: #9B5DE5">
                        3
                    </div>
                    <div class="px-3 text-center pb-3">
                        <h4>Headline</h4>
                        <p class="font-weight-light my-3"><?php echo $round3;?></p>
                    </div>
                </div>
          <?php
	}
	?>
    
    <?php
	if($rounds==4)
	{
?>

<div class="col-12 col-md-6 mx-auto">
            <div class="">
                <div class="bg-light position-relative px-3 my-5">
                    <div class="font-weight-bold circle text-white rounded-circle d-flex align-items-center justify-content-center mx-auto position-relative border border-white"
                         style="width: 60px;height: 60px;top: -30px;border-width: 4px !important; background-color: #9B5DE5">
                        1
                    </div>
                    <div class="px-3 text-center pb-3">
                        <h4>Headline</h4>
                        <p class="font-weight-light my-3">
                        <?php echo $round1;?></p>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="bg-light position-relative px-3 my-5">
                    <div class="font-weight-bold circle text-white rounded-circle d-flex align-items-center justify-content-center mx-auto position-relative border border-white"
                         style="width: 60px;height: 60px;top: -30px;border-width: 4px !important; background-color: #9B5DE5">
                        2
                    </div>
                    <div class="px-3 text-center pb-3">
                        <h4>Headline</h4>
                        <p class="font-weight-light my-3"><?php echo $round2;?></p>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="bg-light position-relative px-3 my-5">
                    <div class="font-weight-bold circle text-white rounded-circle d-flex align-items-center justify-content-center mx-auto position-relative border border-white"
                         style="width: 60px;height: 60px;top: -30px;border-width: 4px !important; background-color: #9B5DE5">
                        3
                    </div>
                    <div class="px-3 text-center pb-3">
                        <h4>Headline</h4>
                        <p class="font-weight-light my-3"><?php echo $round3;?></p>
                    </div>
                </div>
                
                <div class="">
                <div class="bg-light position-relative px-3 my-5">
                    <div class="font-weight-bold circle text-white rounded-circle d-flex align-items-center justify-content-center mx-auto position-relative border border-white"
                         style="width: 60px;height: 60px;top: -30px;border-width: 4px !important; background-color: #9B5DE5">
                        4
                    </div>
                    <div class="px-3 text-center pb-3">
                        <h4>Headline</h4>
                        <p class="font-weight-light my-3"><?php echo $round4;?></p>
                    </div>
                </div>
		



<?php
	}
	?>


<?php
	if($rounds==5)
	{
		?>		
        <div class="col-12 col-md-6 mx-auto">
            <div class="">
                <div class="bg-light position-relative px-3 my-5">
                    <div class="font-weight-bold circle text-white rounded-circle d-flex align-items-center justify-content-center mx-auto position-relative border border-white"
                         style="width: 60px;height: 60px;top: -30px;border-width: 4px !important; background-color: #9B5DE5">
                        1
                    </div>
                    <div class="px-3 text-center pb-3">
                        <h4>Headline</h4>
                        <p class="font-weight-light my-3">
                        <?php echo $round1;?></p>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="bg-light position-relative px-3 my-5">
                    <div class="font-weight-bold circle text-white rounded-circle d-flex align-items-center justify-content-center mx-auto position-relative border border-white"
                         style="width: 60px;height: 60px;top: -30px;border-width: 4px !important; background-color: #9B5DE5">
                        2
                    </div>
                    <div class="px-3 text-center pb-3">
                        <h4>Headline</h4>
                        <p class="font-weight-light my-3"><?php echo $round2;?></p>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="bg-light position-relative px-3 my-5">
                    <div class="font-weight-bold circle text-white rounded-circle d-flex align-items-center justify-content-center mx-auto position-relative border border-white"
                         style="width: 60px;height: 60px;top: -30px;border-width: 4px !important; background-color: #9B5DE5">
                        3
                    </div>
                    <div class="px-3 text-center pb-3">
                        <h4>Headline</h4>
                        <p class="font-weight-light my-3"><?php echo $round3;?></p>
                    </div>
                </div>
                
                <div class="">
                <div class="bg-light position-relative px-3 my-5">
                    <div class="font-weight-bold circle text-white rounded-circle d-flex align-items-center justify-content-center mx-auto position-relative border border-white"
                         style="width: 60px;height: 60px;top: -30px;border-width: 4px !important; background-color: #9B5DE5">
                        4
                    </div>
                    <div class="px-3 text-center pb-3">
                        <h4>Headline</h4>
                        <p class="font-weight-light my-3"><?php echo $round4;?></p>
                    </div>
                </div>
                
                <div class="">
                <div class="bg-light position-relative px-3 my-5">
                    <div class="font-weight-bold circle text-white rounded-circle d-flex align-items-center justify-content-center mx-auto position-relative border border-white"
                         style="width: 60px;height: 60px;top: -30px;border-width: 4px !important; background-color: #9B5DE5">
                        5
                    </div>
                    <div class="px-3 text-center pb-3">
                        <h4>Headline</h4>
                        <p class="font-weight-light my-3"><?php echo $round5;?></p>
                    </div>
                </div>
                
                
          <?php
	}
	?>







            </div>
        </div>
    </section>
<?php
}
?>
<?php

$cn=mysqli_connect("localhost","id14837133_platform","Kunal@123456","id14837133_bricksio");
if(!$cn)
{
	echo "Unable to connect";
	die();
}
$q1="select * from hackathonregisteration where enrollmentno='$e1'";
$q2="select * from hackathonregisteration where event='$name'";
//Fetch data

$result=mysqli_query($cn,$q2);
$sql=mysqli_query($cn,$q1);

//Check number of rows
$n1=mysqli_num_rows($result);
$n2=mysqli_num_rows($sql);
if($n1>0 && $n2>0)
{
	?>
	<input type="submit" value="Already Submitted"  style="
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
<?php
}

else
{

?>
    <form method="post" action="hackathonregister.php">
    <input type="hidden" name="h1" value="<?php echo $e1;?>" />
    <input type="hidden" name="h2" value="<?php echo $name;?>" />
    <input type="submit" value="Apply Now" name="b1" style="
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
<?php
 
}
?>
</body>
</html>
