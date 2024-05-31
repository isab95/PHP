<html>
    <head>
        <title>still making array</title>
    </head>
    <body>
        <?php
            $web_development = array('frontend' => [], 'backend' => []);
            $web_development['frontend'] [] = 'xhtml';
            $web_development['backend'] [] = 'Ruby on Rails';
            $web_development['frontend'] [] = 'css';
            $web_development['frontend'] [] = 'flash';
            $web_development['frontend'] [] = 'javascript';
            $web_development['backend'] [] = 'javascript';
            $web_development['frontend'] [0] = 'html';

            echo('<pre>');
                print_r($web_development);

            array_splice($web_development['frontend'], 2, 1);
            
                print_r($web_development);
            echo('</pre>');
        ?>
    </body>
</html>