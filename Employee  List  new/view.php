<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h1>Employee Details</h1>
                </div>
                <div class="card-body">
                    <button class="btn btn-success">
                        <a href="index.php" class="text-light">Back</a>
                    </button>
                    <div class="employee-details">

                    <div class="card-body">
                        <form action="index.php" method="post">


                        
    <table class="table ">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Address</th>
                <th>Mobile</th>
                <th>Salary</th>
            
            </tr>
</thead>

<tbody>



<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,"employee");

if (isset($_GET['View'])) {
    $View_id = intval($_GET['View']); 
    $sql = "SELECT * FROM list WHERE ID = '$View_id'";
    $result = mysqli_query($connection, $sql);

    if ($row = mysqli_fetch_assoc($result)) {
        $Name = $row['Name'];
        $Address = $row['Address'];
        $Mobile = $row['Mobile'];
        $Salary = $row['Salary'];
    } else {
        echo "<script>location.replace('index.php');</script>";
        
    }
} else {
    echo "<script>('Employee not found.'); location.replace('index.php');</script>";
    
}
?>
    <tr>
        <td><?php echo  $row['ID'] ?></td>
    </br>
        <td><?php echo $row['Name'] ?></td>
    </br>
        <td><?php echo $row['Address'] ?></td>
    </br>
        <td><?php echo $row['Mobile'] ?></td>
    </br>
        <td><?php echo $row['Salary'] ?></td>

    </tr>


    <?php  ?>

                        
</div>

</div>         

</div>
</div>
</div>
</div>
    
</body>
</html>
</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>