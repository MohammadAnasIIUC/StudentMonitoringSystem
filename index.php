<?php
	session_start();
	
	require("conection/connect.php");
	
	$msg="";
	if(isset($_POST['btn_log'])){
		$uname=$_POST['unametxt'];
		$pwd=$_POST['pwdtxt'];
		
		$sql=mysqli_query("SELECT * FROM users_tbl
								WHERE username='$uname' AND password='$pwd' 
								
							");
						
		$cout=mysql_num_rows($sql);
			if($cout>0){
				$row=mysql_fetch_array($sql);
					
					if($row['type']=='admin'){
						$msg="Login trov hery!.....";
                      header("location: everyone.php");	
					}		
                       if($row['type']=='teacher'){
						$msg="Login trov hery!.....";
                      header("location: teacher.php");	
					}							
					 if($row['type']=='student'){
						$msg="Login trov hery!.....";
						header("location: student.php");
					 }
					
			}
			
			else
					$msg="Login ort trov te!......";
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="UTF-8">
		<title>Student Monitoring</title>
  
	<link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="themes/light/light.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="themes/dark/dark.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="themes/bar/bar.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />		


		<link rel="stylesheet" href="style.css" />
		
	<link rel="icon" href="img/favicon.png" type="image/png" />
	<link rel="shortcut icon" href="img/favicon.ico" />		
	<link href="bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/login.css" />
<link rel="stylesheet" href="style.css" />
</head>

<body>
<div class="main_wrap header_bg">
		<div class="wrap">
			<header>
				<div id="header">
					<h2>STUDENT MONITORING SYSTEM</h2>
					
				</div>
			</header>			
		</div>
	</div>	
	
	<form method="post">
    	<fieldset>
        	<fieldset></fieldset>
            	<div id="login_back">
        			<div id="msg">
                    
        			</div>
                    
                    <div id="login_form">
                    	<label for="login">Username:</label>
                    	<input type="text" class="fields" name="unametxt" title="Enter username here"  />
                        <div class="clear"></div>
                        <label for="login">Password:</label>
                        <input type="password" class="fields" name="pwdtxt"  title="Enter Password here"  autocomplete="off"/>
                        <div class="clear"></div>
                        
                        <div id="space_div"></div>
                        <input type="submit" class="button" name="btn_log" value="Log in" />	
                    
                    </div>
        		</div>
    	</fieldset>
    </form>
	<div class="wrap">
			<footer>
				<div id="footer">
					<p>&copy; All Right Reserved By- Mohammad Anas</p>
				</div>
			</footer>			
		</div>
	<h2 style="color:#00F;" align="center">
	<?php echo $msg; ?>
	</h2>
</body>
</html>