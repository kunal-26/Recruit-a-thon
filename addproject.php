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

  <form id="form1" name="form1" method="post" action="addproject1.php">
    <div class="form-group">
      <label id="name-label" for="name">Company/Startup/Institute Name</label>
      <input type="text" name="t1" class="form-control" placeholder="Enter name" required />
      <div class="form-group">
      <p>Company/Startup/Istitute Description</p>
      <textarea id="comments" name="t2" class="input-textarea"  
      placeholder="Enter your say here..." required/></textarea>
    </div>

    </div>
    <div class="form-group">
      <label id="email-label" for="email">Project Title</label>
      <input name="t3" class="form-control" placeholder="Enter Project Title" required />
    </div>

    <div class="form-group">
      <p>Project Description</p>
      <textarea id="comments" class="input-textarea" name="t4" 
      placeholder="Enter your say here..."></textarea>
    </div>
    
    <div class="form-group">
      <label id="phone-label" for="number">Contact Number</label>
      <input type="tel" name="t5"  class="form-control" placeholder="Enter your phone no." required />
    </div>
    
   
    <div class="form-group">
      <label id="email-label" for="email">Stipend(if any)</label>
      <input type="number" name="t6" class="form-control" placeholder="Enter Total Stipend" required />
    </div>
    
    <div class="form-group">
      <p>Eligibility Criteria</p>
      <textarea id="comments" class="input-textarea" name="t7" 
      placeholder="Enter eligibility Criteria"></textarea>
    </div>
    
    <div class="form-group">
      <label id="email-label" for="email">Last date</label>
      <input type="text" name="t8" class="form-control" placeholder="Enter date" required />
    </div>
    
    <div class="form-group">
      <label id="email-label" for="email">Duration</label>
      <input type="text" name="t9" class="form-control" placeholder="Enter Duration" 
      required />
    </div>
	
    <div class="form-group">
      <p>Number Of rounds</p>
      <label>
        <input type="radio" name="t10" value="3" class="input-radio" checked />Three</label>
     <label> <input type="radio" name="t10" value="4" class="input-radio" />Four</label>
      <label>
        <input type="radio" name="t10" value="5" class="input-radio" />Five</label>
    </div>
    <div class="form-group">
      <p>Round 1 details</p>
      <textarea id="comments" class="input-textarea" name="t11" 
      placeholder="Enter your say here..." required/></textarea>
    </div>
    <div class="form-group">
      <p>Round 2 details</p>
      <textarea id="comments" class="input-textarea" name="t12" 
      placeholder="Enter your say here..."></textarea>
    </div>
    <div class="form-group">
      <p>Round 3 details</p>
      <textarea id="comments" class="input-textarea" name="t13" 
      placeholder="Enter your say here..." required/></textarea>
    </div>
    <div class="form-group">
      <p>Round 4 details</p>
      <textarea id="comments" class="input-textarea" name="t14" 
      placeholder="Enter your say here..."></textarea>
    </div>
    <div class="form-group">
      <p>Round 5 details</p>
      <textarea id="comments" class="input-textarea" name="t15" 
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
