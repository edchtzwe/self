<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<!--Chong Tze Wei @ Edmund; 7440820@gmail.com; https://github.com/edchtzwe; https://au.linkedin.com/in/chong-tze-wei-7b7564103;-->
<HTML><HEAD><TITLE>Sprout Kitchens</TITLE>
<META content="text/html; charset=utf-8" http-equiv=Content-Type>
<link rel="stylesheet" type="text/css" href="style1.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</HEAD>
<BODY>	
<?php
	include_once("header.php");
?>
<DIV class="row">
	<DIV class="col-sm-4"><!--Left Side-Bar--></DIV>
	<DIV class="col-sm-4">
		<!--This is the form that is to be submitted to the signup processing back-end-->
		<P>
		<FORM method=post action="signup.php">
		<P><INPUT name=signup_username class="longtext" placeholder="username"></p> 
		<P><INPUT type=password class="longtext" name=signup_password placeholder="password"></P>
		<P><INPUT name=email class="longtext" placeholder="email"></P>
		<P><INPUT name=confirm_email class="longtext" placeholder="confirm email"></P>
		<P><INPUT type=radio name="type" id="buyer">&nbsp;<LABEL FOR="buyer">Buyer</LABEL>&nbsp;&nbsp;&nbsp; 
		<INPUT type=radio name="type" id="seller">&nbsp;<LABEL FOR="seller">Seller</LABEL></P>
		<P>
		<INPUT type=submit class="btn btn-primary" value="Sign Up" name=signup>
		<LABEL for=signup></LABEL>
		</P>
		</FORM>
	</DIV>
	<DIV class="col-sm-4"><!--Right Side-Bar--></DIV>
</DIV>
</BODY>
</HTML>