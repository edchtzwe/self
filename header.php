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
		<FORM role="form" class="inline" method=post action="search_listing.php">		
		<DIV class="row">
			<DIV class="form-group col-lg-10">				
					<INPUT name=search_field type="text" class="form-control" placeholder="search listing">&nbsp;&nbsp;&nbsp;			
					<INPUT type=submit class="btn btn-primary form-control" value=Search name=search_bttn>									
			</DIV>
		</DIV>
		</FORM>		
		<P>
	</DIV>
	<DIV class="col-sm-4">	
		<P>
		<!--This is the form that is to be submitted to the login processing back-end-->					
			<FORM class="form-inline" role="form" method=post action="login.php">
			<DIV class="form-group">
				<INPUT name=login_username class="form-control" placeholder="username">&nbsp;&nbsp;&nbsp; 
				<INPUT name=login_password class="form-control" placeholder="password">&nbsp;&nbsp;&nbsp; 
				<INPUT type=submit class="btn btn-primary form-control" value=Login name=login_bttn>
				<LABEL for=login_bttn></LABEL>
			</FORM>			
			</DIV>
		</P>		
	</DIV>	
</DIV>
</BODY>
</HTML>