<?php

    $fullname = $_POST["fullname"];
    $mssv = $_POST["mssv"];
    $email = $_POST["email"];
    $midterm = filter_input(INPUT_POST, "midterm", FILTER_VALIDATE_FLOAT);
    $project = filter_input(INPUT_POST, "project", FILTER_VALIDATE_FLOAT);
    $finalterm = filter_input(INPUT_POST, "finalterm", FILTER_VALIDATE_FLOAT);
    $gpa = filter_input(INPUT_POST, "gpa", FILTER_VALIDATE_FLOAT);

    //var_dump($fullname, $mssv, $email, $midterm, $project, $finalterm, $gpa);

    $host = "localhost";
    $dbname = "bangdiem_db";
    $username = "root";
    $password = "";
    $conn = mysqli_connect(hostname: $host, username: $username, password: $password, database: $dbname);
    if (mysqli_connect_errno()) {
        die("Connect Error: ". mysqli_connect_error());
    }
    $sql = "INSERT INTO  bangdiem(fullname, mssv, email, midterm, project, finalterm, gpa) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if (! mysqli_stmt_prepare($stmt, $sql)) {
        die(mysqli_error($conn));
    }
    mysqli_stmt_bind_param($stmt, "sssdddd", $fullname, $mssv, $email, $midterm, $project, $finalterm, $gpa);
    mysqli_stmt_execute($stmt);
    echo "Điểm đã được lưu.";
    mysqli_close($conn);
    header('Location: index.html');
?>