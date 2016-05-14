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
                    <LABEL FOR="kitchen_other">
                        If other, please specify: 
                        <INPUT class="form-control" placeholder="Other" name=kitchen_other>
                    </LABEL>  
                </FIELDSET>
                <br>
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
                <br>
                <fieldset>
                <legend>Availability</legend>
                    <P>
                        <LABEL class="checkbox-inline" FOR=mon><INPUT value="0" type=checkbox name=mon>Monday</LABEL>
                        <LABEL class="checkbox-inline" FOR=tue><INPUT value="1" type=checkbox name=tue>Tuesday</LABEL>
                        <LABEL class="checkbox-inline" FOR=wed><INPUT value="2" type=checkbox name=wed>Wednesday</LABEL>
                        <LABEL class="checkbox-inline" FOR=thu><INPUT value="3" type=checkbox name=thu>Thursday</LABEL>
                        <LABEL class="checkbox-inline" FOR=fri><INPUT value="4" type=checkbox name=fri>Friday</LABEL>
                        <LABEL class="checkbox-inline" FOR=sat><INPUT value="5" type=checkbox name=sat>Saturday</LABEL>
                        <LABEL class="checkbox-inline" FOR=sun><INPUT value="6" type=checkbox name=sun>Sunday</LABEL>
                    </P>
                    <p>
                        <fieldset>
                        <legend>Timeslot</legend>
                            <P>
                                <INPUT class="form-control" placeholder="eg. 0800-1200, 1400-1600" name=timeslot>
                            </P>
                        </fieldset>
                    </p>
                </fieldset>
                <br>
                <fieldset>
                <legend>Details</legend>                    
                        <LABEL FOR="size">
                            Size: <INPUT class="form-control" placeholder="S/M/L/XL" name=size>
                        </LABEL> 
                        <br>
                        <LABEL FOR="price">
                            Price(AUD): <INPUT class="form-control" placeholder="pricing per hour" name=price>
                        </LABEL>  
                </fieldset>
            </FORM>            
        </P>
        </div>
    <div class="col-sm-3"></div>
</div>                        
</BODY>
</HTML>