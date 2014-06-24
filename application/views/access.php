<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title> LOGIN</title>
    </head>
    <style>
    	html, body
		{
		    height: 100%;
		}

		body
		{
		    /*font: 12px 'Lucida Sans Unicode', 'Trebuchet MS', Arial, Helvetica;   */
		    font-family: century_gothic;
		    font-size: 12px; 
		    margin: 0;
		    background-color: #d9dee2;
		    background-image: -webkit-gradient(linear, left top, left bottom, from(#ebeef2), to(#d9dee2));
		    background-image: -webkit-linear-gradient(top, #ebeef2, #d9dee2);
		    background-image: -moz-linear-gradient(top, #ebeef2, #d9dee2);
		    background-image: -ms-linear-gradient(top, #ebeef2, #d9dee2);
		    background-image: -o-linear-gradient(top, #ebeef2, #d9dee2);
		    background-image: linear-gradient(top, #ebeef2, #d9dee2);    
		}

    </style>
    <body>
        	BIENVENIDO <?php echo $user->email; ?>
        	<br/>
        	<a href="<?php echo URL::base(); ?>login/logout">SALIR</a>
    </body>
</html>
