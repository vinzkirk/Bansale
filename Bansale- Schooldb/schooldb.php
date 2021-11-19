<?php
$servername = "localhost";
$username = "uspfstudent";
$password = "1234567";
$dbname = "schooldb";


$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("<br>Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE schooldb";
if ($conn->query($sql) === TRUE) {
  echo "<br><br>Database schooldb created successfully";
} else {
  echo "<br>Error creating database: " . $conn->error;
}

mysqli_select_db ( $conn , "schooldb" );

 //database name

// Create connection

// Check connection
if (!$conn) {
    die("<br>Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE studenttable (
Student_Id_Number VARCHAR(15) NOT NULL, Student_Family_Name VARCHAR(50) NOT NULL, Student_First_name VARCHAR(50) NOT NULL, Student_Middle_Name VARCHAR(50) NOT NULL, Student_Email_Address VARCHAR(50) NOT NULL, Student_Home_Address VARCHAR(100) NOT NULL, Student_Mobile_number VARCHAR(15) NOT NULL, Student_Course VARCHAR(50) NOT NULL)";

if ($conn->query($sql) === TRUE) {
  echo "<br>Table studenttable created successfully";
} else {
  echo "<br>Error creating table: " . $conn->error;
}


mysqli_close($conn);
?>