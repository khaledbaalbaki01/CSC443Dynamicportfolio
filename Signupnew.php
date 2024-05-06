<?php
function readJSON($filename){
    $json_data=file_get_contents($filename);
    return json_decode($json_data,true);
}
function writeJSON($filename,$data){
    $json_data=json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents($filename,$json_data);
}
$filename="userdata.json";

if(isset($_POST['signup'])&& $_SERVER["REQUEST_METHOD"]=="POST"){
    
    if(empty($_POST['fullname'])||empty($_POST['username'])||empty($_POST['password'])||empty($_POST['gender'])||empty($_POST['birthdate'])){
        echo "<script>alert('Please fill out all required fields');</script>";
        echo "<script>window.location.href='SignupLogin.html';</script>";
        die();
    }
    if(!isset($_POST['terms'])){
        echo "<script>alert('Must accept terms and conditions');</script>";
        echo "<script>window.location.href='SignupLogin.html';</script>";
        die();
    }
    $new_user=array(
        "fullname"=> $_POST['fullname'],
        "username"=> $_POST['username'],
        "password"=> $_POST['password'],
        "gender"=>$_POST['gender'],
        "birthdate"=>$_POST["birthdate"],
        "terms"=>isset($_POST['terms']) ? true:false
    );
    $users= readJSON($filename);
    $username_taken=false;
    foreach($users as $user){
        if($user['username']==$new_user['username']){
            $username_taken=true;
            break;
        }
    }
    if($username_taken){
        echo "<script> alert('Username is already taken. Please try again');</script>";
    }else{
        $users[]=$new_user;
        writeJSON($filename,$users);
        echo"<script>alert('Signup successful');</script>";
        echo "<script>window.location.href='Login.html';</script>";
        die();
    }
}
?>