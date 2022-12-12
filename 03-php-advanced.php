<html>
    <head>
        <title> Issue 3 </title>
    </head>
    <style>
        .red {
            color: red;
        }
    </style>
    <body>

        <div class="menu">
            <?php include 'menu.php';?>
        </div>

        <h1> Welcome to my home page! </h1>
        <?php include 'vars.php';
            echo "<p> I have a <span style='color: $color'> $color </span> $car. </p>";
        ?>


        <?php include 'footer.php';?>



    </body>
</html>