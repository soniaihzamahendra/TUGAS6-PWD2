<?php
echo "Bilangan dari 1 sampai 10 = ";
for ($i = 1; $i <= 10; $i++) {
    echo $i . " ";
}

echo "<br>";


echo "Bilangan genap dari 1 sampai 10 = ";
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo $i . " ";
    }
}
?>
