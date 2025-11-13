<?php
    $jml = $_GET['jml'];
    
    echo "<table border=1>\n";
    
    for ($a = $jml; $a > 0; $a--){
        echo "<tr>\n";
        $total = 0;
        for ($b = $a; $b > 0; $b--){
            
            echo "<td>$b</td>";
            $total += $b;
        }
        echo "</tr>\n";
        echo "<td>";
        echo "total: " .$total ;
        echo "</td>";
    }
    
    
    
    echo "</table>";
?>