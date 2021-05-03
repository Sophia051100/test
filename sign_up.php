<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<title>Sign Up</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<!----------------------------------style--------------------->
<link rel="stylesheet" type="text/css" href="signmenubar/signmenubar.css">
<link rel="stylesheet" type="text/css" href="emptybc/emptybc.css">
<link rel="stylesheet" type="text/css" href="signup/sign_up.css">
<link rel="stylesheet" type="text/css" href="footer/footer1.css">


        <header>
          <?php include ('signmenubar/signmenubar.php');?>
        </header>
        
        <div class="sample" style="height:65px;border:5px solid red;"></div>
        <!--PARA MA CALL SI BREADCRUMBS-->
        <?php include ('emptybc/emptybc.php');?>
        </div> 

<body>
        
		<center><div class="sign">SIGN UP</div></center>
	    <div class="signupform">
        <br><center class="fillout">FILL OUT THIS FORM</center>

    <label class="name"><b>Name:</b></label>
        <input type="text" class="firstname" placeholder="&nbsp;&nbsp;First Name" name="firstname">
        <input type="text" class="lastname"placeholder="&nbsp;&nbsp;Last Name" name="lastname">
        <input type="text" class="suffix" placeholder="&nbsp;&nbsp;Suffix" name="suffix"><br><br>
        

    <label class="address"><b>Address:</b></label>
        <input type="text" class="house" placeholder="&nbsp;&nbsp;House No." name="house">
        <input type="text" class="street" placeholder="&nbsp;&nbsp;Street" name="street">
        <input type="text" class="barangay" placeholder="&nbsp;&nbsp;Barangay" name="barangay">
        <select name="city" class="bacoor">
          <option>&nbsp;&nbsp;City</option>
          <option name="bacoor">Bacoor</option>
        </select><br><br>


    <label class="contactno"><b>Contact No:</b></label>
        <input type="text" class="contact" placeholder="&nbsp;&nbsp;+63" name="contact"><br><br> 

    <label class="emailadd" style=""><b>Email Address:</b></label>
        <input type="text" class="email" placeholder="&nbsp;&nbsp;Email Address" name="email"><br><br>

    <label class="username"><b>Username:</b></label>
        <input type="text" class="usernamebox" placeholder="&nbsp;&nbsp;Enter Username" name="username"><br><br>

    <label class="password"><b>Password:</b></label>
        <input type="text" class="pwbox" placeholder="&nbsp;&nbsp;Enter Password" name="password"><br><br>

    <label class="confirmpw"><b>Confirm Password:</b></label>
        <input type="text" class="confirmpwbox" placeholder="&nbsp;&nbsp;Re-enter Password" name="confirmpwbox">

    <center><input type="submit" class="button" value="Sign Up" name="signupbt"></center>
        </div>

        <section id ="sas" class="sam">
           <!--div class="smp" style="height:15px;border:2px solid red; color: blue;">ITO YUNG SECTOIN</div-->
        </section>
        
        <footer>
          <?php include ('footer/footer1.php');?>
        </footer>

</body>
</html>