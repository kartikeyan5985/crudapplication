<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,"employee");

if (isset($_GET['edit'])) {
    $edit_id = intval($_GET['edit']); 
    $sql = "SELECT * FROM list WHERE ID = '$edit_id'";
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

<?php

if(isset($_POST['submit']))
{  
  $edit = $_POST['ID'];
  $Name = $_POST['Name'];
  $Address = $_POST['Address'];
  $Mobile = $_POST['Mobile'];
  $Salary = $_POST['Salary'];

   $sql = "update list set Name='$Name',Address='$Address',Mobile='$Mobile',salary='$Salary' where id = '$edit_id'";


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
    <title>Edit Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Edit Employee Details</h2>
        <form action="" method="post">
            <div class="mb-3">
                <label for="Name" class="form-label">Name</label>
                <input type="text" name="Name" id="Name" class="form-control" value="<?php echo($Name); ?>">
            </div>
            <div class="mb-3">
                <label for="Address" class="form-label">Address</label>
                <input type="text" name="Address" id="Address" class="form-control" value="<?php echo($Address); ?>">
            </div>
            <div class="mb-3">
                <label for="Mobile" class="form-label">Mobile</label>
                <input type="text" name="Mobile" id="Mobile" class="form-control" value="<?php echo ($Mobile); ?>">
            </div>
            <div class="mb-3">
                <label for="Salary" class="form-label">Salary</label>
                <input type="text" name="Salary" id="Salary" class="form-control" value="<?php echo ($Salary); ?>">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Update</button>
            
        </form>
    </div>
</body>
</html>