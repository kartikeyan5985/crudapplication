<?php
    $connection = mysqli_connect("localhost","root","");
      $db = mysqli_select_db($connection,"employee");

      $sql = "select * from list";
      $result = mysqli_query($connection, $sql);
    
      


    if(isset($_POST['submit']))
     { 
        $Name = $_POST['Name'];
        $Address = $_POST['Address'];
        $Mobile = $_POST['Mobile'];
         $Salary = $_POST['Salary'];

         $sql = "insert into list (Name, Address, Mobile, Salary) VALUES ('$Name', '$Address', '$Mobile', '$Salary')";


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
                                <input type="text" name="Name" class="form-control" placeholder="Enter Name">
                                </div>

                                <div class="form-group">
                                <lable> Address </lable>
                                <input type="text" name="Address" class="form-control" placeholder="Enter Adderss">
                                </div>

                                <div class="form-group">
                                <lable> Mobile </lable>
                                <input type="text" name="Mobile" class="form-control" placeholder="Enter Mobile">
                                </div>

                                <div class="form-group">
                                <lable> Salary </lable>
                                <input type="text" name="Salary" class="form-control" placeholder="Enter Salary">
                                </div>
                                <br/>

                                <input type="submit" name="submit"class="btn btn-primary" value="Reister">
                          </form>
                        
                    </div>

                    </div>         
                    
                    </div>
                    </div>
                    </div>
                    </div>
                        
                    </body>
                    </html>