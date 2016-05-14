<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<!--Chong Tze Wei @ Edmund; 7440820@gmail.com; https://github.com/edchtzwe; https://au.linkedin.com/in/chong-tze-wei-7b7564103;-->
<HTML><HEAD><TITLE>Sprout Kitchens: Add Listing</TITLE>
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
<div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-5">
		<!--This is the form that is to be submitted to the add_listing processing back-end-->
		<P>
            <FORM method=post action="add_listing_process.php" class="col-sm-8">
                <FIELDSET>
                <legend>Basic Details</legend>
                    <P><INPUT placeholder="kitchen name" class="form-control " name=kitchen_name></P>
                    <P>
                        <SELECT class="form-control" name=kitchen_type>
                        <OPTION selected value=0>Cafe</OPTION>
                        <OPTION value=1>Restaurant</OPTION>
                        <OPTION value=2>Bar</OPTION>
                        <OPTION value=3>Other</OPTION>
                        </SELECT>
                    </P>
                </FIELDSET>
                <FIELDSET>
                <LEGEND>Address</LEGEND>
                    <div class="row">
                    <div class="col-sm-6">
                        <P><INPUT class="form-control" placeholder="street number" name=loc_number></INPUT></P>
                        <p>
                        <P>
                    <select class="form-control" name="state">
                        <option value="0" selected>State</option>
                        <option value="1">ACT</option>
                        <option value="2">NSW</option>
                        <option value="3">NT</option>
                        <option value="4">QLD</option>
                        <option value="5">SA</option>
                        <option value="6">TAS</option>
                        <option value="7">VIC</option>
                        <option value="8">WA</option>
                    </select> 
                        </p>
                        <P><INPUT placeholder="city" class="form-control" name=loc_city></P>
                    </div>
                    <!--side-by-side-->
                    <div class="col-sm-6">
                        <P><INPUT class="form-control" placeholder="street name" name=loc_street></P>
                        <p><INPUT class="form-control" placeholder="postcode" name=loc_pcode></p>
                        <p><INPUT class="form-control" placeholder="country" name=loc_country></p>
                    </div>
                    </div>
                </FIELDSET>
            </FORM>            
        </P>
        </div>
    <div class="col-sm-3"></div>
</div>                        
</BODY>
</HTML>