<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>recruit</title></head>

<body>
<?php

 if(isset($_POST["b1"]))
 {
	 
	$name=$_POST["t1"];
	$description=$_POST["t2"];
	$title=$_POST["t3"];
	$jobdescription=$_POST["t4"];
	$contact=$_POST["t5"];
	$stipend=$_POST["t6"];
	$eligibility=$_POST["t7"];
	$date=$_POST["t8"];
	$duration=$_POST["t9"];
	$rounds=$_POST["t10"];
	$round1=$_POST["t11"];
	$round2=$_POST["t12"];
	$round3=$_POST["t13"];
	$round4=$_POST["t14"];
	$round5=$_POST["t15"];
	
	$usertype="employee";
        
$cn=mysqli_connect("localhost","id14837133_platform","Kunal@123456","id14837133_bricksio");

	if(!$cn)
	{
		echo "unable to connect";
		die();
	}
	
	$q1="insert into internship (name,description,title,jobdescription,contact,stipend,eligibility,date,duration,rounds,round1,round2,round3,round4,round5)
	 values
	
('$name',
'$description','$title','$jobdescription','$contact','$stipend','$eligibility','$date','$duration','$rounds','$round1','$round2','$round3','$round4','$round5')";
    
	$n1=mysqli_query($cn,$q1);
	$msg="Error";
	if($n1==1)
 	{
		?>
                    <style>
      body {
        text-align: center;
        padding: 40px 0;
        background: #EBF0F5;
      }
        h1 {
          color: #0f0f0f;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-weight: 900;
          font-size: 40px;
          margin-bottom: 10px;
        }
        p {
          color: #404F5E;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-size:20px;
          margin: 0;
        }
      i {
        color: #9ABC66;
        font-size: 100px;
        line-height: 200px;
        margin-left:-15px;
      }
      .card {
        background: white;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin: 0 auto;
        background-color: green;
      }
    </style>
      <div class="card">
      <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
        <i class="checkmark">✓</i>
      </div>
        <h1>Welcome new employee</h1>
        <h3>Login created</h3>
        <h3><a href="employeehome.php">Continue</a></h3> 
      </div>
	
	
	<?php
	}
	
?>


 <?php
 
    }
	else
	{
 
 
 ?>
   <h3><a href="employeehome.php">Form Fill</a></h3>
     

<?php	 
}  
?>





</body>
</html>>