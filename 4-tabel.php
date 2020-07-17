<style>
table {
  border-collapse: collapse;
}

table, th, td {
  border: 1px solid #000000;
}

.hitam {
    background-color: #000000;
    color: #ffffff
}
</style>

<?php

function printTabel() {
    $t1 = $b1 = 1;
    $t2 = $b2 = 2;
    $t3 = $b3 = 1;
    $t4 = $b4 = 3;
    
    echo "<table>";
    for ($i = 0; $i < 8; $i++) {
        $start = ($i * 8);
        $range = $start + 8;

        echo "<tr>";
        for ($j = $start + 1; $j <= $range; $j++) {
            if (($t1) == $j || $t2 == $j || ($t3+4) == $j || ($t4+4) == $j) echo "<td class=\"hitam\">$j</td>";
            else echo "<td>$j</td>";
        }
        echo "</tr>";
        
        $b1 = (($b1 + 1) > 3)?1:$b1+1;
        $b2 = (($b2 + 1) > 3)?1:$b2+1;
        $b3 = (($b3 + 1) > 3)?1:$b3+1;
        $b4 = (($b4 + 1) > 3)?1:$b4+1;
        
        $t1 = $b1 + $range;
        $t2 = $b2 + $range;
        $t3 = $b3 + $range;
        $t4 = $b4 + $range;
    }
    echo "</table>";
}

printTabel();