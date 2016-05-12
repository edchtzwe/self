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
<DIV class="row">
	<DIV class="col-sm-4"></DIV>
	<DIV class="col-sm-4">
		<!--This is the form that is to be submitted to the search processing back-end--> 
		<P>
		<FORM id="inline" method=post action="search_listing.php">
		<INPUT name=search_field id="longtext" placeholder="search listing">&nbsp;&nbsp;&nbsp; 
		<INPUT type=submit class="btn btn-primary" value=Search name=search_bttn>
		<LABEL for=searchBtn></LABEL>&nbsp;&nbsp;&nbsp;
		</FORM>		
	</DIV>
	<DIV class="col-sm-4">		
		<!--This is the form that is to be submitted to the login processing back-end-->
		<FORM id="inline" method=post action="login.php">
		<INPUT name=login_username placeholder="username">&nbsp;&nbsp;&nbsp; 
		<INPUT name=login_password placeholder="password">&nbsp;&nbsp;&nbsp; 
		<INPUT type=submit class="btn btn-primary" value=Login name=login_bttn>
		<LABEL for=login_bttn></LABEL>
		</FORM>
		</P>
		<HR>
	</DIV>	
</DIV>
</BODY>
</HTML>