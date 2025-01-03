<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,"employee");

$edit = ($_GET['edit']);


$sql ="select * from list where id  ='$edit'";

$run = mysqli_query($connection,$sql);

while($row=mysqli_fetch_array($run))
{
    $uid =$row['ID'];
    $Name =$row['Name'];
    $Address =$row['Address'];
    $Mobile =$row['Mobile'];
    $Salary =$row['Salary'];
}


?>



<?php
    $connection = mysqli_connect("localhost","root","");
      $db = mysqli_select_db($connection,"employee");

    if(isset($_POST['submit']))
     {  
        $edit = $_POST['ID'];
        $Name = $_POST['Name'];
        $Address = $_POST['Address'];
        $Mobile = $_POST['Mobile'];
        $Salary = $_POST['Salary'];

         $sql = "update list set Name='$Name',Address='$Address',Mobile='$Mobile',salary='$Salary' where id = '$edit'";


        if(mysqli_query($connection,$sql))
       {
        echo '<script> location.replace("index.php")</script>';
       }
         else 
       {
       echo "Some thing Error" . $connection->error;
     }
     
    }

        
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Employee list</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h1> Employee list </h1>

                    <div class="card-body">
                        <form action="add.php" method="post">
                            
                                <div class="form-group">
                                <lable> Name </lable>
                                <input type="text" name="Name" class="form-control" placeholder="Enter Name" value="<?php echo $Name; ?>">
                                </div>

                                <div class="form-group">
                                <lable> Address </lable>
                                <input type="text" name="Address" class="form-control" placeholder="Enter Adderss" value="<?php echo $Address; ?>">
                                </div>

                                <div class="form-group">
                                <lable> Mobile </lable>
                                <input type="text" name="Mobile" class="form-control" placeholder="Enter Mobile" value="<?php echo $Mobile; ?>">
                                </div>

                                <div class="form-group">
                                <lable> Salary </lable>
                                <input type="text" name="Salary" class="form-control" placeholder="Enter Salary" value="<?php echo $Salary; ?>">
                                </div>
                                <br/>

                                <input type="submit" class="btn btn-primary" name="submit" value="Reister" value="Edit">
                          </form>
                        
                    </div>

                    </div>         
                    
                    </div>
                    </div>
                    </div>
                    </div>
                        
                    </body>
                    </html>
                    
                    