
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
        
        .description{
            font-size:25px;
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        
        
        
        .image:hover img{
            transform:scale(1.1);
         }
        
        
		</style>
    <link href="Gallerystyle.css" rel="stylesheet" type="text/css">
    
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
                <p id="gt"> Projects Gallery </p>
            </div>
               
    
    </div>
</head>

<body>
    
    
    <div class="gallery">
        <?php
        
        $gallery_file='gallery.json';
        $gallery_images=json_decode(file_get_contents($gallery_file,true));
        if($gallery_images){
            foreach($gallery_images as $image){
                echo '<div class="image">';
                echo'<a href="',$image->link.'">';
                echo '<img src="'.$image->src.'" alt="'.$image->name.'">';
                echo'</a>';
                echo '<p class="description">'.$image->description.'</p>';
                echo '</div>';
            }
        
        }
        ?>
        
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