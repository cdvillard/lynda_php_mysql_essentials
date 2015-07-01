<!DOCTYPE html>
<html>
    <head>
        <title>Strings</title>
    </head>
    <body>
        <?php
             echo "Hello world<br />";
             echo 'Hello world<br />';
             $greeting = "Hello";
             $target = "world";
             $phrase = $greeting." ".$target;
             echo $phrase;
        ?>
        <br />
        <?php
            echo "$phrase Again<br />";
            echo '$phrase Again<br />';
            echo "{$phrase}Again<br />";
        ?>
    </body>
</html>