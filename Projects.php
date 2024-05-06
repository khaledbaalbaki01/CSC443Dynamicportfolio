
<html>
    <link href="Projectss.css" rel="stylesheet" type="text/css">
    <style>
		.top{
			position:relative;
		}
		.logbtt{
			background-color:  #bc986a;
   			color: white;
    		padding: 16px;
   			font-size: 16px;
    		border: none;
			position:absolute;
			
			right:10px
		}
		.logbtt:hover {
			background-color:  white;
   			color:#bc986a ;
		}
        .Welcome{
			position:absolute;
			right:130px;
			color:black;
			background-color:  #bc986a;
    		padding: 16px;
   			font-size: 16px;
    		border: none;
			font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
			font-size:20px;
			
			border-radius:20px
		}
        .gallery:hover {
    border: 100% solid #777;
    transform: scale(1.04);
}
		</style>
<head >
    <div class="top">
        <a  href="index.php">Home Page</a>
        <a href="MyCv.php">My Cv</a>
        <a class="active" href="Gallery.php">Projects</a>
        <a href="ContactInfo.php">Contact Me</a>
        <?php
    session_start();
    if(isset($_SESSION['username'])){
        echo"<button class='logbtt' onclick='confirmLogout()'>Logout</button>";
        echo "<span class='Welcome'>Welcome ".$_SESSION['username']."!</span> ";
    }
?>
    </div>

    <div class="header"> 
        
            
            
            <div>
                <p id="gt"> University Database</p>
            </div>
               
    
    </div>
</head>

<body>
    <p class="para">
        A well-built database for a university that consists of organized data which stores the information of students, courses and instructors. This allows data to be easily accessible by users. The database is well designed which results in high efficiency and minimal errors.
    </p>
    
    
    <div class="gallery" id="galler">
        <a target="_self" href="Er diagram.png">
            <img src="Er diagram.png" alt="" >
        </a>
    </div> 
    <div class="gallery">
        <a target="_self" href="relat mod.png">
            <img src="relat mod.png" alt="" >
        </a>
    </div> 
    <script>
		function confirmLogout(){
			var confirmLogout=confirm("Are you sure you want to log out?");
			if(confirmLogout){
				window.location.href="SignupLogin.html"
			}
		}
		</script>

        
        

         
    
</body>