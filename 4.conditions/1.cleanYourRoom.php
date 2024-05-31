<html>
    <head>
        <title>conditions</title>
    </head>
    <body>
        <?php
            $possible_states = ['filthy', 'dirty', 'clean'];
            $room_filthiness = 0;
            if($room_filthiness < (count($possible_states)-1)){
                echo "Yuk, Room is $possible_states[$room_filthiness] : let's clean it up !";
	            // cleanup_room();
	            echo "<br>Room is now clean!";
	            $possible_states = 2;
            } else {
	            echo "<br>Nothing to do, room is neat.";
            }
        ?>
    </body>
</html>