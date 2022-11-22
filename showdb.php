<?php
    $host = "localhost";
    $dbname = "bangdiem_db";
    $username = "root";
    $password = "";
    $conn = mysqli_connect(hostname: $host, username: $username, password: $password, database: $dbname);
    if (mysqli_connect_errno()) {
        die("Connect Error: ". mysqli_connect_error());
    }
    $sql = "SELECT * FROM bangdiem";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result-> fetch_assoc()) {
            echo "<tr><td>".
            $row["mssv"]."</td><td>".
            $row["fullname"]."</td><td>".
            $row["midterm"]."</td><td>".
            $row["project"]."</td><td>".
            $row["finalterm"]."</td><td>".
            $row["gpa"]."</td></tr>";
        }
    } else {
        echo "No Result.";
    }
    $conn->close();
?>