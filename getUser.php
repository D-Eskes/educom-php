<!DOCTYPE html>
<html>
    <head>
        <style>
            table {
                width: 100%;
                border-collapse: collapse;
            }

            table, td, th {
                border: 1px solid black;
                padding: 5px;
            }

            th {text-align: left;}
        </style>
    </head>
    <body>

        <?php
            $q = intval($_GET['q']);

            $conn = new mysqli('localhost', 'root', '', 'mydb');
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM ajax_demo WHERE id = '".$q."'";
            $result = $conn->query($sql);

            echo "<table>
                <tr>
                    <th> Firstname </th>
                    <th> Lastname </th>
                    <th> Age </th>
                    <th> Hometown </th>
                    <th> Job </th>
                </tr>";

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['FirstName'] . "</td>";
                    echo "<td>" . $row['LastName'] . "</td>";
                    echo "<td>" . $row['Age'] . "</td>";
                    echo "<td>" . $row['Hometown'] . "</td>";
                    echo "<td>" . $row['Job'] . "</td>";
                    echo "</tr>";
                }
            }
            echo "</table>";

            $conn->close();
        ?>
    </body>
</html>