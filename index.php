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
<!--This is the form that is to be submitted to the search processing back-end--> 
<P>
<FORM id="inline" method=post action="search_listing.php">
<INPUT name=search_field placeholder="search listing">&nbsp;&nbsp;&nbsp; 
<INPUT type=submit class="btn btn-primary" value=Search name=search_bttn>
<LABEL for=searchBtn></LABEL>&nbsp;&nbsp;&nbsp;
</FORM>
<!--This is the form that is to be submitted to the login processing back-end-->
<FORM id="inline" method=post action="login.php">
<INPUT name=login_username>&nbsp;&nbsp;&nbsp; 
<INPUT name=login_password>&nbsp;&nbsp;&nbsp; 
<INPUT type=submit class="btn btn-primary" value=Login name=login_bttn>
<LABEL for=login_bttn></LABEL>
</FORM>
</P>
<HR>
<!--This is the form that is to be submitted to the signup processing back-end-->
<P>
<FORM method=post action="signup.php">
<INPUT name=signup_password>&nbsp;&nbsp;&nbsp; 
<INPUT type=password name=signup_password></P>
<P><INPUT name=email></P>
<P><INPUT name=confirm_email></P>
<P><INPUT type=radio name="type" id="buyer">&nbsp;<LABEL FOR="buyer">Buyer</LABEL>&nbsp;&nbsp;&nbsp; 
<INPUT type=radio name="type" id="seller">&nbsp;<LABEL FOR="seller">Seller</LABEL></P>
<P>
<INPUT type=submit class="btn btn-primary" value="Sign Up" name=signup>
<LABEL for=signup></LABEL>
</P>
</FORM>
</BODY>
</HTML>