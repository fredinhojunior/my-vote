<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Votes</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px 12px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <h1>Votes</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Student Name</th>
            <th>Admission No</th>
            <th>President</th>
            <th>Deputy President</th>
            <th>Male Affairs</th>
            <th>Female Affairs</th>
            <th>information</th>
        </tr>
        <?php
        
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "votetable";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM votes";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['student_name']}</td>
                        <td>{$row['admission_no']}</td>
                        <td>{$row['president']}</td>
                        <td>{$row['deputy_president']}</td>
                        <td>{$row['male_affairs']}</td>
                        <td>{$row['female_affairs']}</td>
                        <td>{$row['information']}</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='7'>No votes found</td></tr>";
        }

        $conn->close();
        ?>
    </table>
</body>
</html>
