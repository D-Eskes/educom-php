<?php
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $database = "mydb";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully" . "<br><br>";



    $sql = "SELECT * FROM myguests WHERE lastname = 'Doe' ORDER BY id DESC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"] . " --- Year: ". (date("Y", strtotime($row["reg_date"]))). "<br>";
        }
    } else {
        echo "0 results";
    }

    $conn->close()
?>