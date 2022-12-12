<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Issue 1 </title>
    </head>
    <body>
        <?php 

            // 1. Syntax
            
            echo "Hello World!"; 

            // This is is a single line comment

            # This is is a single line comment
            
            /* This is a
            multi-line
            comment */

            echo "Hello World";
        ?>

        <br>

        <?php
            // 2. Variables

            $txt = "Hello";

            $x = 5;
            $y = 7;
            echo $x + $y;
        ?>

        <br>

        <?php
            // 3. Strings

            echo strlen("Hello World!");
            echo strrev("Hello World!");
            $oldtxt = "Hello World!";
            echo str_replace("World", "Dolly", $oldtxt);

        ?>

        <?php
            // 4. Operators

            echo 10 * 5;
            echo 10 / 2;

            $a = 5;
            $b = 5;
            var_dump($a == $b);
            var_dump($a != $b);

        ?>

        <br>

        <?php 
            // 5. If...Else

            $a = 50;
            $b = 10;
            
            if ($a > $b ) {echo "Hello World";}
            if ($a != $b) {echo "Hello World";}

            if ($a == $b) {echo "Yes";} else {echo "No";}
            if ($a == $b) {echo "1";} elseif ($a > $b) {echo "2";} else {echo "3";}
        ?>

        <br>

        <?php 
            // 6. Switch

            $color = "red";
            switch ($color) {
                case "red":
                    echo "Hello";
                    break;
                case "green":
                    echo "Welcome";
                    break;
                }


            switch ($color) {
                case "red":
                    echo "Hello";
                    break;
                case "green":
                    echo "Welcome";
                    break;
                default:
                    echo "Neither";
            }
        ?>

        <br>

        <?php 
            // 7. Loops
            
            $i = 1;
            while ($i < 6) {
                echo $i;
                $i++;
            }
            $i = 1; 

            do {
                echo $i;
                $i++;
            } 
            while ($i < 6);

            for ($i = 0; $i < 10; $i++) {
                echo $i;
            }

            $colors = array("red", "green", "blue", "yellow"); 

            foreach ($colors as $x) {
                echo $x;
            }
        ?>

        <br>

        <?php 
            //  8. Functions

            function myFunction() {
                echo "Hello World!";
            }

            myFunction();

            function myFunction2($fname, $lname) {
                echo $fname;
            }

            function myFunction3($fname, $lname) {
                return $lname;
            }
        ?>

        <br>

        <?php 
            // 9. Arrays

            $fruits = array("Apple", "Banana", "Orange");
            echo count($fruits);
            echo $fruits[1];
            $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
            
            echo "Ben is " . $age['Ben'] . " years old.";

            
            foreach ($age as $x => $y) {
                echo "Key=" . $x . ", Value=" . $y;
            }

            $colors = array("red", "green", "blue", "yellow"); 
            sort($colors);
            rsort($colors);
            asort($age);

        ?>


        
    </body>
</html>