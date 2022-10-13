<?php
$around= "around";


print 'What goes '.$around.', '.'comes '.$around;
echo "\n";

$num = 12;
for($x=0;$x<$num;$x++){
   echo $x * $x;
   echo "\n";
}

for($x=1;$x<8;$x++){
    echo "\n";
    for($y=1;$y<8;$y++){
        
        $multiply_t = $x * $y;
        print $multiply_t."      ";
        
    }
}



?>