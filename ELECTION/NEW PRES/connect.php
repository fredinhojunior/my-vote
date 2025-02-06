<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "voting_system";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
$student_name = $_POST['student_name'];  
$admission_no = $_POST['admission_no'];
$president = $_POST['president'];
$deputy_president = $_POST['deputy_president'];
$male_affairs = $_POST['male_affairs'];
$female_affairs = $_POST['female_affairs'];

if (empty($student_name) || empty($admission_no) || empty($president) || empty($deputy_president) || empty($male_affairs) || empty($female_affairs)) {
    die("All fields are required.");
}

$sql = "INSERT INTO votes (student_name, admission_no, president, deputy_president, male_affairs, female_affairs) VALUES ('$student_name', '$admission_no', '$president', '$deputy_president', '$male_affairs', '$female_affairs')";

if ($conn->query($sql) === TRUE) {
    echo "Vote recorded successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
