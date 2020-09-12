<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Globalshala</title></head>

<body>
<?php

 if(isset($_POST["b1"]))
 {
	 
	$enrollmentno=$_POST["t2"];
	$name=$_POST["t1"];
	
	$contact=$_POST["t4"];
	$password=$_POST["t3"];
	$usertype=$_POST["t5"];
        
	$cn=mysqli_connect("localhost","id14837133_platform","Kunal@123456","id14837133_bricksio");

	if(!$cn)
	{
		echo "unable to connect";
		die();
	}
	if($usertype!="student")
	{
	$q1="insert into employeedata (enrollmentno,name,password,contact)
	 values
	('$enrollmentno','$name','$password','$contact')";
	$q2="insert into logindata (enrollmentno,password,usertype)
	 values
	('$enrollmentno','$password','$usertype')";
	}
	if($usertype!="employee")
	{
	$q1="insert into studentdata (enrollmentno,name,password,contact)
	values
	('$enrollmentno','$name','$password','$contact')";
	$q2="insert into logindata (enrollmentno,password,usertype)
	 values
	('$enrollmentno','$password','$usertype')";
	}
	$n1=mysqli_query($cn,$q1);
	$n2=mysqli_query($cn,$q2);
	$msg="Error";
	if($n1==1 && $n2==1)
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
        <h3><a href="Login.php">Continue</a></h3> 
      </div>
	<?php
	 
	}
	
   	else if($n1==1)
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
        color: red;
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
        background-color: red;
      }
    </style>
      <div class="card">
      <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
        <i class="checkmark">✘</i>
      </div>
        <h1>Data Saved but Login is pending</h1>
        <h3><a href=Login.php>Continue</a></h3> 
      </div>

      <?php

	}
	else if($n2==1)
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
        color: red;
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
        background-color: red;
      }
    </style>
      <div class="card">
      <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
        <i class="checkmark">✘</i>
      </div>
        <h1>Login Created but Data is not Saved</h1>
        <h3><a href="Login.php">Continue</a></h3> 
      </div>
	<?php
	}
	
?>


 <?php
 
    }
	else
	{
 
 
 ?>
   <h3><a href="Login.php">Form Fill</a></h3>
     

<?php	 
}  
?>





</body>
</html>