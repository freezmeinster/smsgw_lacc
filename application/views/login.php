<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>dESiGNERz-CREW.iNFO - Admin Template - Login</title>
<link href="<?php echo base_url();?>/asset/styles/layout.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>/asset/styles/login.css" rel="stylesheet" type="text/css" />
<!-- Theme Start -->
<link href="<?php echo base_url();?>/asset/themes/blue/styles.css" rel="stylesheet" type="text/css" />
<!-- Theme End -->

</head>
<body>
	<div id="logincontainer">
    	<div id="loginbox">
        	<div id="loginheader">
            	<img SRC="<?php echo base_url();?>/asset/themes/blue/img/cp_logo_login.png" alt="Control Panel Login" />
            </div>
            <div id="innerlogin">
            	<form action="<?php echo site_url('core/dashboard');?>">
                	<p>Enter your username:</p>
                	<input type="text" class="logininput" />
                    <p>Enter your password:</p>
                	<input type="password" class="logininput" />
                   
                   	<input type="submit" class="loginbtn" value="Submit" /><br />
                    <p><a href="#" title="Forgoteen Password?">Forgotten Password?</a></p>
                </form>
            </div>
        </div>
        <img SRC="<?php echo base_url();?>/asset/img/login_fade.png" alt="Fade" />
    </div>
</body>
</html>