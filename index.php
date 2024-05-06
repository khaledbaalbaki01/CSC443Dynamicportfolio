
<html>
    <link href="MainPagee.css" rel="stylesheet" type="text/css">
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
			top:10px;
			border-radius:20px
		}
		</style>
<head>
    
    <div class="header">
        
        <div class="dropdown">
            <button class="button">Menu</button>
            <div class="drop">
                <a href="index.php">Home Page</a>
                <a href="MyCv.php">My Cv</a>
                <a href="Gallery.php">Projects</a>
                <a href="ContactInfo.php">Contact Me</a>
                
            </div>

            
        </div>
		<?php
    session_start();
    if(isset($_SESSION['username'])){
        echo"<button class='logbtt' onclick='confirmLogout()'>Logout</button>";
		echo "<span class='Welcome'>Welcome ".$_SESSION['username']."!</span> ";
    }
	
?>
        
        
       

        <div>
            <img id="image" src="Me.jpeg" alt="" >
            <p class="Who"> About me</p>
        </div>

    </div>


</head>

<body>
    
    <div class="div2">
       <p class="descr"> A dedicated and motivated undergraduate currently in my second year pursuing a Bachelor's degree in computer science. Im currently looking for internships to broaden my horizons and gain the experience needed.</p>
       <h2 id="cod">Skilled in </h2>
       <hr width="10%" size="3" color="black">
       <p>
          <li class="Proficient_in">Java</li>
          <li class="Proficient_in">Python</li>
          <li class="Proficient_in">C</li>
          <li class="Proficient_in">Html</li>
          <li class="Proficient_in">Css</li>
          
       </p>
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
