
<html>
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
		</style>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="ContactInfoo.css" rel="stylesheet" type="text/css">
    
    <head>
       
    
        <div class="top">
            <a href="index.php">Home Page</a>
            <a href="MyCv.php">My Cv</a>
            <a href="Gallery.php">Projects</a>
            <a class="active" href="ContactInfo.php">Contact Me</a>
            <?php
    session_start();
    if(isset($_SESSION['username'])){
        echo"<button class='logbtt' onclick='confirmLogout()'>Logout</button>";
        echo "<span class='Welcome'>Welcome ".$_SESSION['username']."!</span> ";
    }
    ?>
        </div>
        <div class="Contact"> 
            
            
             <p class="Contactdes">Contact Me</p>
            
        </div>
    
    </head>

    <body>
        
        
        <div class="info" >
                <i class="material-icons">mail</i>
                <p class="line1">Email: </p>
                <a class="line2" href="mailto:khaledb2345@gmail.com">khaledb2345@gmail.com</a>
                
        </div>
        <div class="info">
            <i class="material-icons">phone</i>
            <p class="line3">Number: </p>
            <p class="line4">+961 70676164</li>
        </div>

        <div class="info">
            <i class="material-icons md-48">home</i>
            <p>Address:</p>
            <p>Beirut, Karakol drouz</p>
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