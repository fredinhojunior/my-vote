<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "voting_system";

$conn = new mysqli($host, $username, $password, $dbname);

if($conn->connect_error){
    die("connection failed".$conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"]== "POST"){
 $student_name = $_POST['student_name'];  
$admission_no = $_POST['admission_no'];
$president = $_POST['president'];
$deputy_president = $_POST['deputy_president'];
$male_affairs = $_POST['male_affairs'];
$female_affairs = $_POST['female_affairs'];

    $sql = "INSERT INTO users (student_name, admission_no, president, deputy_president, male_affairs, female_affairs ) VALUES ('$student_name', '$admission_no', '$president', '$deputy_president', '$male_affairs', '$female_affairs')";
    if ($conn->query($sql) == TRUE){
        echo "New record created successfully";
    }else{
        echo "Error: ". $sql. "<br>". $conn->error;
    }

}
$conn->close();




?>