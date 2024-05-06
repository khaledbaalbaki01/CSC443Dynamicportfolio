
<?php
    session_start();
    if(isset($_SESSION['username'])){
        echo"<button class='logbtt' onclick='confirmLogout()'>Logout</button>";
    }
?>
<html>
<style>
		.header{
			position:relative;
		}
		.logbtt{
			background-color:  #bc986a;
   			color: white;
    		padding: 16px;
   			font-size: 16px;
    		border: none;
			position:absolute;
			top:10px;
			right:10px
		}
		.logbtt:hover {
			background-color:  white;
   			color:#bc986a ;
		}
		</style>
    <link href="Compilerp.css" rel="stylesheet" type="text/css">
    
<head >
    <div class="top">
        <a  href="index.php">Home Page</a>
        <a href="MyCv.php">My Cv</a>
        <a class="active" href="Gallery.php">Projects</a>
        <a href="ContactInfo.php">Contact Me</a>
    
    </div>

    <div class="header"> 
        
            
            
            <div>
                <p id="gt">Compiler</p>
            </div>
               
    
    </div>
</head>

<body>
    <p class="para">
        A newly designed programming language which is written in the lebanese dialect is compiled and produced into assembly code.
    </p>
    
    
    <div class="gallery">
        <a target="_self" href="Screenshot 2024-04-18 230508.png">
            <img src="Screenshot 2024-04-18 230508.png" alt="" >
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