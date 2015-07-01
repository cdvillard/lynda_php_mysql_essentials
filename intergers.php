<!DOCTYPE html>
<html>
    <head>
        <title>Intergers</title>
    </head>
    <body>
        <?php
             $var1 = 3;
             $var2 = 4
        ?>
    
        Basic Math:          <?php echo ((1 + 2 + $var1) * $var2) / 2 - 5; ?><br />
    
        Absolute value:      <?php echo abs(0 - 300); ?><br />
        Exponential:         <?php echo pow(2,8); ?><br />
        Square root:         <?php echo sqrt(100); ?><br />
        Modulo:              <?php echo fmod(20,7); ?><br />
        Random:              <?php echo rand(); ?><br />
        Random (min,max):    <?php echo rand(1,10); ?><br />
        <br />
        
        += : <?php $var2 += 4; echo $var2; ?><br />
        -= : <?php $var2 -= 4; echo $var2; ?><br />
        *= : <?php $var2 *= 3; echo $var2; ?><br />
        /= : <?php $var2 /= 4; echo $var2; ?><br />
        <br />
        Increment: <?php $var2++; echo $var2; ?><br />
        Decrement: <?php $var2--; echo $var2; ?><br />
        <br />
        Adding strings of numbers to intergers:<br />            
        <?php echo 1 + "1;" ?> - Added interger 1 to string "1", resulting in interger 2<br />
        <br />
        Adding strings of numbers and words to intergers:<br />    
        <?php echo 1 + "2 houses;" ?> - Added interger 1 to string "2 houses", resulting in interger 3 by finding the number 2 and trashing the rest.<br />
    </body>
</html>