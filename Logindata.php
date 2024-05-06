<?php 
session_start();    
$filename="userdata.json";

function readJSON($filename){
    $json_data=file_get_contents($filename);
    return json_decode($json_data,true);
}

if(isset($_POST['signin']) && $_SERVER["REQUEST_METHOD"]=="POST"){
    $username=$_POST["username"];
    $password=$_POST["password"];
    $users=readJSON($filename);
    foreach($users as $user){
        if($user['username']==$username && $user['password']==$password){
            $_SESSION['username']=$username;
            header("Location:index.php");
            exit();
        }
    }
    echo "<script>alert('Invalid username or password');</script>";
    echo "<script>window.location.href='login.html';</script>";
}
?>