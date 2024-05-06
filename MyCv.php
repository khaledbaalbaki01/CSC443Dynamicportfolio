
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
<head>
    <div class="top">
        <a href="index.php">Home Page</a>
        <a class="active" href="MyCv.php">My Cv</a>
        <a href="Gallery.php">Projects</a>
        <a href="ContactInfo.php">Contact Me</a>
        <?php
    session_start();
    if(isset($_SESSION['username'])){
        echo"<button class='logbtt' onclick='confirmLogout()'>Logout</button>";
        echo "<span class='Welcome'>Welcome ".$_SESSION['username']."!</span> ";
    }
?>
        
    </div>
</head>
    <link href="MyCvStyle.css" rel="stylesheet" type="text/css">
    <body>
        


    <div id="d1"> 
        
        <img id="image" src="Me.jpeg" alt="" >
        <h1>Personal details</h2>
        <p>
            <li class="line1">Email: </li>
            <li class="line2">khaledb2345@gmail.com</li>
            <li class="line1">Number: </li>
            <li class="line2">+961 70676164</li>
            <li class="line1">Date of birth:</li>
            <li class="line2">July 14, 2003</li>

        </p>
        <hr width="80%" size="3" color="black">
        <h1>Languages</h2>
        
        <p >
        
           <li class="line3" >English </li> 
           <li class="line3" >Arabic</li> 
        </p>
        <hr width="80%" size="3" color="black">
        <h1>Hobbies</h2>
        <p>
            <li class="line3">Traveling and visiting new places</li>
            <li class="line3">Going to the gym to stay fit and healthy</li>
            
        </p>
        
    </div>


    <div id="d2">
        <h2>
            <center>
                <p id="title">Khaled Baalbaki<br>Computer science student</p>
            </center>
            
            
            
        </h1>
        <h2>Profile</h2>
        <hr width="10%" size="3" color="black">
        <p id="Profile_desc">
            A dedicated and motivated undergraduate currently in my second year pursuing a Bachelor's degree in computer science. I have a passion for programming and I'm always striving to be the best version of myself. I am skilled in object oriented programming across several languages such as Java, Python and C.
        </p>
        <h2>Education</h2>
        <hr width="10%" size="3" color="black">
        <p id="Education_desc" >
            Lebanese baccalaureate degree in Hariri high school 2<br> 2006 till 2021
            <br>
            <br>
            Bachelors in computer science in the Lebanese American University <br> Sep 2021 till present 
        </p>
        <h2>Skills</h2>
        <hr width="10%" size="3" color="black">
        <p>
           <li id="Multitasking" >Multitasking</li> 
           <li id="Time_managemnet">Time managemnet</li> 
           <li id="Proficient_in">Proficient in Java, Python and C</li>
           <li id="Problem_solving">Problem solving</li>

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