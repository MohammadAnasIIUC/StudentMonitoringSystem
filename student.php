<?php
	session_start();
	
	require("conection/connect.php");
	$tag="";
	if (isset($_GET['tag']))
	$tag=$_GET['tag'];
	
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>::. Student Panel .::</title>
<link rel="stylesheet" type="text/css" href="css/everyone_format.css" />
<link rel="stylesheet" type="text/css" href="css/menu.css"/>
<link rel="stylesheet" type="text/css" href="css/home.css"/>

</head>

<body>

  
<br /><br />
<div id="admin">
	
        <div id="lmain">
                
                <div id="leftmanu">
                	<div >
                        <a href="?tag=home" title="HOME (Shift+Ctrl+H)">HOME</a><br />
                	</div>
					<div >
                        <a href="?tag=home" title="HOME (Shift+Ctrl+H)">Notice</a><br />
                	</div>
                	<div >
                        <a href="student.php?tag=view_subjects" class=" customer">Subject</a><br />
                	</div>
					<div >
                        <a href="?tag=home" title="HOME (Shift+Ctrl+H)">Payment Info</a><br />
                	</div>
					<div >
                        <a href="?tag=home" title="HOME (Shift+Ctrl+H)">Change Password</a><br />
                	</div>
                    
                   <?php /*?> 
                    <?php 
						$sql_menu=mysql_query("SELECT * FROM  article_tbl WHERE loca_id=1");
						while($row=mysql_fetch_array($sql_menu)){
						?>
						 <div><a href="?tag=view&v_id=<?php echo $row['a_id'];?>"><?php echo $row['title'];?></a></div>
						<?php	
							}
						?>  <?php */?>
                    
                    
                
                    
                    
                    
                     
                    
                     
                    
                    
                    
                     
                    
                </div><!-- end of leftmanu -->
        </div><!--end of lmaim -->
        
        <div>
        
        
        </div>
    <div id="rmain">
    	<div id="pic_manu">
    		<a href="#" title="Studnt"><img src="picture/student.png" hspace="10px" /></a>
            <a href="#" title="Teacher"><img src="picture/teacher.png" hspace="20px" /></a>
            <a href="#" title="Faculties"><img src="picture/faculties.png" hspace="15px" /></a>
            <a href="#" title="Subject"><img src="picture/subject.png" hspace="10px" /></a>
            <a href="#" title="Score"><img src="picture/score.png" hspace="20px" /></a>
            <a href="#" title="User"><img src="picture/user.png" hspace="10px" /></a>
            <a href="#" title="Location"><img src="picture/location.png" hspace="10px" /></a>
            <a href="#" title="Article"><img src="picture/article.png" hspace="10px" /></a>
            <a href="#" title="About us"><img src="picture/about us.png" hspace="15px" /></a>
            <a href="#" title="Contact"><img src="picture/contact.png" hspace="10px" /></a>
         </div><!--end of pic_manu -->
        
        
        
        
         <div id="menu2">
                
                <div style="width:4px; height:37px; padding:0px; margin:0px; float:left;"></div>
				 <li id="li_menu"><a href="?tag=home" title="HOME (Shift+Ctrl+H)">Home</a></li>
				  
               
                <li id="li_menu"><a href="#">Profile</a>
                
                    
                    
                
                
                </li>
				<li id="li_menu"><a href="">Schedule</a></li>
           <li id="li_menu"><a href="">Remarks</a>
                
                    
                    <ul>
                        
                        
                        <li id="li_submenu"><a href="student.php?tag=view_scores" class="order">View remarks</a></li>
                    </ul>
                
                
                </li>
                
                
               
                <li id="li_menu"><a href="">Task</a>
                
                    
                    <ul>
                    
                        <li id="li_submenu"><a href="?tag=view_artical" class="stocks">View Task</a></li>
                    </ul>
                
                
                </li>
				<li id="li_menu"><a href="">Records</a>
                
                    
                    <ul>
                    
                        <li id="li_submenu"> <a href="student.php?tag=test_score" class="customer" >View Records</a></li>
                    </ul>
                
                
                </li>
				
                    	
                    
				 <li id="li_menu"><a href="index.php">Logout</a></li>
				 
              
                           
      </div><!--end of menu2--> 
            
            
            <div id="contents">
            
            	<div id="informations">
                	<div id="in_informations">
				<?php
   						if($tag=="home" or $tag=="")
							include("home.php");
                        elseif($tag=="student_entry")
                            include("Students_Entry.php");
                        elseif($tag=="teachers_entry")
                            include("Teachers_Entry.php");
                        elseif($tag=="score_entry")
                            include("Score_Entry.php");	
                        elseif($tag=="subject_entry")
                            include("Subject_Entry.php");
                        elseif($tag=="faculties_entry")
                            include("Faculties_Entry.php");
                        elseif($tag=="susers_entry")
                            include("Users_Entry.php");	
                        elseif($tag=="view_students")
                            include("View_Students.php");
						elseif($tag=="view_teachers")
							include("View_Teachers.php");
						elseif($tag=="view_subjects")
							include("View_Subjects.php");
						elseif($tag=="view_scores")
							include("View_Scores.php");
						elseif($tag=="view_users")
							include("View_Users.php");
						elseif($tag=="view_faculties")
							include("View_Faculties.php");
						elseif($tag=="location_entry")
							include("Location_Entry.php");
						elseif($tag=="artical_entry")
							include("Artical_Entry.php");
						elseif($tag=="test_score")
							include("test_Scores .php");
						elseif($tag=="view_location")
							include("View_location.php");
						elseif($tag="view_artical")
							include("View_Articaly.php");
							/*$tag= $_REQUEST['tag'];
							
							if(empty($tag)){
								include ("Students_Entry.php");
							}
							else{
								include $tag;
							}*/
									
                        ?>
                    </div><!--end of in_informations -->
                </div><!--end of informations -->
    		</div><!--end of contens -->   
     </div><!--end of rmain -->
    	
    </div><!--end of admin -->

</body>
</html>