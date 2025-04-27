<?php
echo "<table border='1' cellpadding='5' cellspacing='5' style='border-spacing: 5px;'>";
echo "<tr><th>bilangan</th>"; 
    for ($i = 1; $i <= 10; $i++) {
        echo "<th style='background-color: #00FF00;'>$i</th>"; 
    }
echo "</tr>";

    for ($i = 1; $i <= 10; $i++) {
        echo "<tr>";
        echo "<th style='background-color: #00FF00;'>$i</th>"; 
        for ($j = 1; $j <= 10; $j++) {
            $hasil = $i * $j;

            if ($hasil % 2 == 0) {
                $warna = "#00FFFF"; 
            } else {
                $warna = "#FFFF00"; 
            }
            echo "<td style='background-color: $warna;'>$hasil</td>";
        }
        echo "</tr>";
    }

echo "</table>";
?>
