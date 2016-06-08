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
<DIV class="col-sm-4"><!--Left Side-Bar--></DIV>
<DIV class="col-sm-4">
<?php
    session_start();
echo($_SESSION['error']);
?>
<p>
<a class="btn btn-primary" href= <?php echo($_SESSION['page']); ?> style="text-align:center;" > Back</a>
</p>
</DIV>
<DIV class="col-sm-4"><!--Right Side-Bar--></DIV>
</BODY>
</HTML>