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

    // $sql = "CREATE TABLE MusicDiscs (
    //     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    //     title VARCHAR(30) NOT NULL,
    //     artist VARCHAR(30) NOT NULL, 
    //     country VARCHAR(30) NOT NULL, 
    //     company VARCHAR(30) NOT NULL, 
    //     price FLOAT(6, 2) NOT NULL,
    //     year INT(11) NOT NULL
    // )";

    // $result = $conn->query($sql);

    $sql = "INSERT INTO MusciDiscs (title, artist, country, company, price, year)
        VALUES ('Empire Burlesque', 'Bob Dylan', 'USA', 'Columbia', 10.90, 1985);";
    $sql .= "INSERT INTO MusciDiscs (title, artist, country, company, price, year)
        VALUES ('One night only', 'Bee Gees', 'UK', 'Polydor', 10.90, 1998);";
    $sql .= "INSERT INTO MusciDiscs (title, artist, country, company, price, year)
        VALUES ('The very best of', 'Cat Stevens', 'UK', 'Island', 8.90, 1990);";


    if ($conn->multi_query($sql) === TRUE) {
        echo "New records created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close()
?>