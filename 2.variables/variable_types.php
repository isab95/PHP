<html>
  <head>
    <title>Hi!</title>
  </head>
  <body>
  	<?php
      $name = 'isabelle';
      $age = 29;
      $eyesColor = 'blue';
      $family = ['dad', 'mom', 'older brother', 'older sister', 'another older sister', 'me', 'last sister'];
      $hungry = NULL;//boolean
    ?>
    	<p>Hi! My name is <?php echo($name); ?>.</p>
   	
    	<p>I am <?php echo($age); ?> year old.</p>

    	<p>My eyes are <?php echo($eyesColor); ?></p>

      <p>The first person in my family is <?php echo($family[0]); ?></p>
  </body>
</html>