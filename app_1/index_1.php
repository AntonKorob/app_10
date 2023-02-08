<div style="display: flex;">

    <div style="margin:133px">
        <?php
    // Число кратное 2
    echo "Число кратное 2   ";
    echo "<hr>";
    $x = 1;
    
    while($x <= 100) {
        
      $x++;
      if($x %2 == 0) {
        echo "<ul>";
        echo "<li>".$x . "<br>";
        echo "</ul>";
    }
    }
    ?>
    </div>

    <div style="margin:133px">
        <?php
    // Число не кратное 2
    echo "Число не кратное 2 ";
    echo "<hr>";
    $x = 1;
    
    while($x <= 100) {
        
      $x++;
      if($x %2 !== 0) {
        echo "<ul>";
        echo "<li>".$x . "<br>";
        echo "</ul>";
    }
    }
    ?>
    </div>
    


</div>