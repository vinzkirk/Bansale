<!DOCTYPE html>
<html>
<head>
  <title>Add Records in Database</title>
</head>
<body>

<?php
include_once "schooldb.php"; 

if(isset($_POST['submit']))
{		
    $fullname = $_POST['fullname'];
    $age = $_POST['age'];

    $insert = mysqli_query($db,"INSERT INTO tblemp`(fullname`, age) VALUES ('$fullname','$age')");

    if(!$insert)
    {
        echo mysqli_error($conn);
    }
    else
    {
        echo "Records added successfully.";
    }
}

mysqli_close($conn); 
?>

<h3>Fill the Form</h3>

<form method="POST">
  Full Name : <input type="text" name="fullname" placeholder="Enter Full Name" Required>
  <br/>
  Age : <input type="text" name="age" placeholder="Enter Age" Required>
  <br/>
  <input type="submit" name="submit" value="Submit">
</form>

</body>