<html>
    <head>
        <title>conditions</title>
    </head>
    <body>
        <?php
            $max_age_for_greeting = [12, 18, 115];

            if (isset($_GET['age']) && isset($_GET['gender'])) {
                //Form processing
                $age = $_GET['age'];
                $gender = $_GET['gender'];
                
                if ($age < $max_age_for_greeting[0]){
                    echo ("hello " . (($gender == 'F')?"girl!!":"boy!!"));
                }elseif ($age < $max_age_for_greeting[1]){
                    echo ("hello young " . (($gender == 'F')?"lady!":"man!"));
                }elseif ($age < $max_age_for_greeting[2]){
                    echo ("hello " . (($gender == 'F')?"madam":"mister"));
                }else{
                    echo "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
                }
            }
            //form incomplete
            echo '<form method="get" action=""></label>
	                <label for="age">Please type your age :
	                    <input type="" name="age">
	                    <input type="submit" name="submit" value="Greet me now"><br>
                    <label for="gender">Gender: </label><br>
                        <input type="radio" name="gender" id="F" value="F">
                        <label for="F">F</label>
                        <input type="radio" name="gender" id="M" value="M">
                        <label for="M">M</label>
                </form>';
        ?>
    </body>
</html>