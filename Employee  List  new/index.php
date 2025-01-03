<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Employee list</title>
        
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-40">
                <div class="card">
                    <div class="card-header">
                        <h1> Employee list </h1>

<div class="card-body">
    <button class="btn btn-success"> <a href="add.php" class="text-light"> Add New </a> </button>
    <button class="btn btn-warning"> <a href="login.php" class="text-light"> logout</a></button
</br>
</div>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Address</th>
                <th>Mobile</th>
                <th>Salary</th>
                <th class="t5">Option</th>
            </tr>
</thead>


<tbody>
    <?php
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"employee");
    $sql = "select * from list";


    $run = mysqli_query($connection, $sql);

    $ID=1;

    while($row = mysqli_fetch_array($run))
    {
        $uid =$row['ID'];
        $Name =$row['Name'];
        $Address =$row['Address'];
        $Mobile =$row['Mobile'];
        $Salary =$row['Salary'];
    
    ?>

    <tr>
        <td><?php echo  $ID ?></td>
        <td><?php echo $Name ?></td>
        <td><?php echo $Address ?></td>
        <td><?php echo $Mobile ?></td>
        <td><?php echo $Salary ?></td>

    
    <td>
        <button class="btn btn-success"> <a href='edit.php?edit=<?php echo $uid ?>'class="text-light"> Edit </button> &nbsp;
        <button class="btn btn-danger"> <a href='delete.php?del=<?php echo $uid ?>'class="text-light"> Delete </button>
        <button class="btn btn-primary"> <a href='view.php?View=<?php echo $uid ?>'class="text-light"> View </button>
    </td>
    </tr>


        <?php $ID++; } ?>

<tbody>
</table>
</div>

</div>         
  
</div>
</div>
</div>
</div>
    
</body>
</html>