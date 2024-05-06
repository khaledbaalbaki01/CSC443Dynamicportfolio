<?php
    $data=file_get_contents("Employee.json");
    $employees=json_decode($data,true);
    $wage=0;
    $position="unknown";
    $tasks="none";
    $name="";
    $id="";
    
    
    if(isset($_GET['id'])  && isset($_GET['name'])){
        $id=$_GET['id'];
        $name=$_GET['name'];
        foreach($employees as $key=> $employee){
            if($employee['id']==$id){
                $wage=$employee['wage'];
                $tasks=$employee['tasks'];
                $position=$employee['position'];
                break;
            }
        }
    }
    if(isset($_POST['submit'])){
        $wage=$_POST['wage'];
        $tasks=$_POST['tasks'];
        $position=$_POST['position'];
        $name=$_POST['name'];
        $id=$_POST['id'];
        foreach($employees as &$employee){
            if($employee['id']==$id){
                $employee['wage']=$wage;
                $employee['tasks']=$tasks;
                $employee['position']=$position;
                $position=$employee['position'];
                break;
            }
        }
        file_put_contents('Employee.json',json_encode($employees,JSON_PRETTY_PRINT));
    }
?>
<html>
    <link href="manageemploy.css" rel="stylesheet" type="text/css">
    <style>
        .lower{
            background-color:blanchedalmond;
        }
    </style>
<head>
        <div class="top">
            <p class="title">Manage Employees</p>
        </div>
</head>

<body class="lower">
    
<form action="Manageemployee.php" method="post">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <input type="hidden" name="name" value="<?php echo $name; ?>">
    <p class="emp">Employee Name: <?php echo $name; ?></p>
    <p class="emp">Employee ID: <?php echo $id; ?></p>
    <p class="wagee">Current wage: <?php echo $wage; ?> </p>
    <p class="task">Current Tasks: <?php echo $tasks; ?></p>
    <p class="pos">Working hours: <?php echo $position; ?></p>
   
    <p class="wagee">Set their wage:</p>
    <input class="inp" type="text" placeholder="Wage" name="wage" value="<?php echo $wage; ?>">
     
    
    
   
    <p class="task">Set their tasks for the day:</p>
    <input class="inp" type="text" placeholder="Tasks" name="tasks" value="<?php echo $tasks; ?>">
    

    
    
    <p class="pos">Set their Working hours:</p>
    <input class="inp" type="text" placeholder="Position" name="position" value="<?php echo $position; ?>">
    <br>
    <br>
    <button class="bt" type="submit" name="submit">Submit</button> 
    <a href="Admin.html"><button class="bt" type="button">Go back</button>
</form>

    
</body>