
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Weather</title>


</head>

<body>
    <h1>Weather</h1>
    <?php 
    
    $wther = array("rain","sunshine","clouds","hail","sleet","snow","wind");
    $wther2 = array();
   
    

      
    array_push($wther2,$wther[5],$wther[6],$wther[1],$wther[2],$wther[0]);
    echo "<li>Excersice 1</li>";
    echo "We've seen all kinds of weather this month. At the beginning of 
        the month, we had $wther2[0] and $wther2[1]. Then came $wther2[2] with a few $wther2[3]
        and some $wther2[4]. At least we didn't get any $wther[3] or $wther[4].";

    echo "<br>";
    
    
    echo "<br><br>Excercise 2<br><li>Unordered list</li>";

    $citi = array("Tokyo","Mexico City", "New York City","Mumbai","Seoul","Shanghai","Lagos","Buenos Aires","Cairo","London");
    
    foreach ($citi as $val){
        echo "$val , ";
        
  
    }
    sort($citi);
  
    foreach ($citi as $val){
        echo "<ul>$val  </ul>";
    }

    echo "<br><li>Add city and Unordered list</li>";
    array_push($wther2,"Los Angeles","Calcutta","Osaka","Beijing");

    foreach ($citi as $val){
        echo "<ul>$val  </ul>";
    }

    ?>
</body>
</html>