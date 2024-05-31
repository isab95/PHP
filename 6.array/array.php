<html>
    <head>
        <title>let's make some array</title>
    </head>
    <body>
        <?php
            $myFamily = ['Anthony', 'Benedict', 'Colin', 'Daphné', 'Eloïse', 'Francesca', 'Gregory', 'Hortensia'];
            print_r($myFamily);

            //structure the print on multiple line
            echo '<pre>';
                print_r($myFamily);
            echo '</pre>';

            //give the type of variable and the lenght of the string before giving the value
            var_dump($myFamily)

            $me = array (
                'age' => 20,
                'firstname' => "Isis",
                'lastname' => "bloom",
                
            );
        ?>
    </body>
</html>