<html>
    <head>
        <title>conditions</title>
    </head>
    <body>
        <?php
            $greetings = ["Hello kiddo!", "Hello Teenager !", "Hello Adult ", "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?"];
            $max_age_for_greeting = [12, 18, 115];

            if (isset($_GET['age'])) {
                //Form processing
                $age = $_GET['age'];
                if ($age < $max_age_for_greeting[0]){
                    echo $greetings[0];
                }elseif ($age < $max_age_for_greeting[1]){
                    echo $greetings[1];
                }elseif ($age < $max_age_for_greeting[2]){
                    echo $greetings[2];
                }else{
                    echo $greetings[3];
                }
            }
            //form incomplete
            echo '<form method="get" action="">
	                <label for="age">Please type your age :</label>
	                <input type="" name="age">
	                <input type="submit" name="submit" value="Greet me now">
                </form>';
        ?>
    </body>
</html>