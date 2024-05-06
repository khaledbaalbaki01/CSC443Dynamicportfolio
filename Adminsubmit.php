<?php
    if(isset($_POST['submit'])){
        $id=$_POST['id'];
        $data=file_get_contents('Employee.json');
        $employees=json_decode($data,true);
        $ids=array_column($employees,'id');
        
        if(in_array((string)$id,$ids)){
            $name=$employees[array_search($id,$ids)]['name'];
            header("Location:Manageemployee.php?id=$id&name=".urldecode($name));
            exit();
        }else{
            echo "<script>alert('ID NOT FOUND');window.location.href='Admin.html';</script>";
        }
    }

?>
