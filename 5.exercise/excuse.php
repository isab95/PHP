
<?php
    echo '
        <form action="" method="GET">
            <label for="name">Child\'s name: </label><br>
            <input name="name" id="name" type="text"><br><br>
            <label for="gender">Gender: </label><br>
            <input type="radio" name="gender" id="F" value="F">
            <label for="F">F</label>
            <input type="radio" name="gender" id="M" value="M">
            <label for="M">M</label><br><br>
            <label for="teacher">Teacher\'s name: </label><br>
            <input name="teacher" id="teacher" type="text"><br><br>
            <label for="justification">Reason of absence:</label><br>
            <input type="radio" name="justification" id="ill" value="illness">
            <label for="ill">Illness</label><br>
            <input type="radio" name="justification" id="death" value="death">
            <label for="death">Death of a pet or family member</label><br>
            <input type="radio" name="justification" id="activity" value="activity">
            <label for="activity">Significant extra-curricular activity</label><br>
            <input type="radio" name="justification" id="other" value="other">
            <label for="other">Other</label><br><br>
            <button type="submit">Generate Excuse</button><br>
        </form>
    ';

    
    if (isset($_GET['name']) && (isset($_GET['teacher'])) && (isset($_GET['gender'])) && (isset($_GET['justification']))){

        $name = $_GET['name'];
        $teacher = $_GET['teacher'];
        $gender = $_GET['gender'];
        $justification = $_GET['justification'];
        ($gender == "M")? $_gender = "son" : $_gender = "daughter";

        $illness_excuses = [
            "$name ilness excuse 1",
            "$name ilness excuse 2",
            "$name ilness excuse 3",
            "$name ilness excuse 4",
            "$name ilness excuse 5"
        ];
        $death_excuses = [
            "$name death excuse 1",
            "$name death excuse 2",
            "$name death excuse 3",
            "$name death excuse 4",
            "$name death excuse 5"
        ];
        $activity_excuses = [
            "$name activity excuse 1",
            "$name activity excuse 2",
            "$name activity excuse 3",
            "$name activity excuse 4",
            "$name activity excuse 5"
        ];
        $other_excuses = [
            "$name other excuse 1",
            "$name other excuse 2",
            "$name other excuse 3",
            "$name other excuse 4",
            "$name other excuse 5"
        ];

        echo "Dear Mr(s) $teacher, <br><br>
        Our $gender will not be able to attend school today.<br><br>";
        switch ($justification) {
            case $justification == "illness":
                echo $illness_excuses[rand(0, (count($illness_excuses)-1))];
                break;
            case $justification == "death":
                echo $death_excuses[rand(0, (count($death_excuses)-1))];
                break;
            case $justification == "activity":
                echo $activity_excuses[rand(0, (count($activity_excuses)-1))];
                break;
            case $justification == "other":
                echo $other_excuses[rand(0, (count($other_excuses)-1))];
                break;
        }
        ;
        echo "<br><br>We thank you for your understanding. <br><br>
        Yours faithfully, <br><br>
        $name's parents";
    }
    ?>