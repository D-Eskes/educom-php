<html> 
    <body>
        <?php 


            trait Food {
                function eat() {
                    echo "I'm eating";
                }
            }



            class Fruit {
                use Food;

                public $color;

                function __construct(string $color) {
                    $this->$color = $color;
                }

            }

            $apple = new Fruit($color="red");

            $apple->eat()
        ?>
    </body>
</html>