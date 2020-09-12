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

<link rel="stylesheet" type="text/css" href="addproject.css">

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
<?php 
$enrollmentno=$_POST["h1"];
$companyname=$_POST["h2"];
$title=$_POST["h3"];
$cn=mysqli_connect("localhost","id14837133_platform","Kunal@123456","id14837133_bricksio");
if(!$cn)
{
	echo "unable to conenct";
	die();
}
$sql="select * from studentdata where enrollmentno='$e1'";
$result=mysqli_query($cn,$sql);
$n=mysqli_num_rows($result);
if($n==1)
{
	$rw=mysqli_fetch_array($result);
	$a=$rw["enrollmentno"];
	$b=$rw["name"];
	$c=$rw["contact"];
	$d=$rw["college"];
	
	if(isset($_POST["b1"]))
	{
	?>

  <form id="form1" name="form1" method="post" action="registerproject.php">
    <div class="form-group">
      <label id="name-label" for="name">Name</label>
      <input readonly value="<?php echo $b?>" type="text" name="t1" class="form-control" required />
      

    </div>
    <div class="form-group">
      <label id="email-label" for="email">E-mail</label>
      <input readonly value="<?php echo $b?>" name="t2" class="form-control" type="text"  required />
    </div>

    
    <div class="form-group">
      <label id="phone-label" for="number">Contact Number</label>
      <input type="tel" name="t3"  class="form-control" value="<?php echo $c;?>" />
    </div>
    
   
    <div class="form-group">
      <label id="email-label" for="email">Recent Institute</label>
      <input type="text" name="t4" class="form-control" value="<?php echo $d?>" />
    </div>
         
<div class="form-group">
      <p>Current Education</p>
      <label>
        <input type="radio" name="t5" value="Bachelors" class="input-radio" checked />Bachelors</label>
     <label> <input type="radio" name="t5" value="Masters" class="input-radio" />Masters</label>
      <label>
        <input type="radio" name="t5" value="Graduate" class="input-radio" />Graduate</label>


    </div>
    
        <div class="form-group">
      <label id="email-label" for="email">Comapny Name</label>
      <input readonly value="<?php echo $companyname;?>" name="t6" class="form-control" type="text"  required />
    </div>

    <div class="form-group">
      <label id="email-label" for="email">Role title</label>
      <input readonly value="<?php echo $title?>" name="t7" class="form-control" type="text"  required />
    </div>


    <div class="form-group">
      <button type="submit" id="b1" name="b1" class="submit-button">Submit</button>
    </div>
    <div class="form-group">
      <button type="reset" id="reset" class="reset-button">Reset</button>
    </div>
    </form>
  </div>


		<?php
	}
}
else
{
	?>
	<h3>Error : No data found, try again</h3>
    <h4><a href="studenthome.php">Continue...</a></h4>
	<?php
}
?>
  

  		
</body>
</html>
