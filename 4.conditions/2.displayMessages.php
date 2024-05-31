<html>
    <head>
        <title>conditions</title>
    </head>
    <body>
        <?php
            $greeting = ["Good morning !", "Good day !", "Good afternoon !", "Good evening", "Good night"];
            $now = date('H:i:s');
            $hour = (int) date('H');
            if ($hour >= 5){
                if ($hour <= 9){
                    echo $greeting[0];
                }elseif ($hour <= 12){
                    echo $greeting[1];
                }elseif ($hour <= 16){
                    echo $greeting[2];
                }elseif ($hour <= 21){
                    echo $greeting[3];
                }else{
                    echo $greeting[4]; 
                }
            }else {
                echo $greeting[4];
            }
        ?>  
    </body>
</html>
