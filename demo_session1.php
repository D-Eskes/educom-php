<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Issue 3 </title>
    </head>
    <body>

    <?php
    // Set session variables
    $_SESSION["favcolor"] = "green";
    $_SESSION["favanimal"] = "cat";
    echo "Session variables are set.";
    ?>

    </body>
</html>