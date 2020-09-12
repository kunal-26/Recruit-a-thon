<?php 
session_start();
if(!isset($_SESSION["usertype"]))
{
	header("location:autherror.php");
	die();
}
$ut=$_SESSION["usertype"];
$e1=$_SESSION["enrollmentno"];
if($ut!="employee")
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

 <form id="form1" name="form1" method="post" action="addhackathon1.php">
    <div class="form-group">
      <label id="name-label" for="name">Company Name</label>
      <input type="text" name="t1" class="form-control" placeholder="Enter company name" required />
      <div class="form-group">
      <p>Company Description</p>
      <textarea id="comments" name="t2" class="input-textarea"  
      placeholder="Enter your say here..." required/></textarea>
    </div>


    <div class="form-group">
      <p>Problem Statement</p>
      <textarea id="comments" class="input-textarea" name="t3" 
      placeholder="Enter your say here..."></textarea>
    </div>
    
    <div class="form-group">
      <label id="email-label" for="email">Start Date</label>
      <input type="text" name="t4" class="form-control" placeholder="Enter Total Stipend" required />
    </div>

<div class="form-group">
      <label id="email-label" for="email">End date</label>
      <input type="text" name="t5" class="form-control" placeholder="Enter Total Stipend" required />
    </div>

    
    
    <div class="form-group">
      <label id="phone-label" for="number">Contact Number</label>
      <input type="tel" name="t6"  class="form-control" placeholder="Enter your phone no." required />
    </div>
    
   
    <div class="form-group">
      <label id="email-label" for="email">Total Prize</label>
      <input type="number" name="t7" class="form-control" placeholder="Enter Total Stipend" required />
    </div>
    
    <div class="form-group">
      <p>Number Of rounds</p>
      <label>
        <input type="radio" name="t8" value="3" class="input-radio" checked />Three</label>
     <label> <input type="radio" name="t8" value="4" class="input-radio" />Four</label>
      <label>
        <input type="radio" name="t8" value="5" class="input-radio" />Five</label>
    </div>
    <div class="form-group">
      <p>Round 1 details</p>
      <textarea id="comments" class="input-textarea" name="t9" 
      placeholder="Enter your say here..." required/></textarea>
    </div>
    <div class="form-group">
      <p>Round 2 details</p>
      <textarea id="comments" class="input-textarea" name="t10" 
      placeholder="Enter your say here..."></textarea>
    </div>
    <div class="form-group">
      <p>Round 3 details</p>
      <textarea id="comments" class="input-textarea" name="t11" 
      placeholder="Enter your say here..." required/></textarea>
    </div>
    <div class="form-group">
      <p>Round 4 details</p>
      <textarea id="comments" class="input-textarea" name="t12" 
      placeholder="Enter your say here..."></textarea>
    </div>
    <div class="form-group">
      <p>Round 5 details</p>
      <textarea id="comments" class="input-textarea" name="t13" 
      placeholder="Enter your say here..."></textarea>
    </div>
     
    <div class="form-group">
      <button type="submit" id="b1" name="b1" class="submit-button">Submit</button>
    </div>
    <div class="form-group">
      <button type="reset" id="reset" class="reset-button">Reset</button>
    </div>
    </form>
  </div>


  

  		
</body>
</html>
