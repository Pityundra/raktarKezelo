<!DOCTYPE html>
<html>
<body>

<?php
require_once __DIR__ . '/../vendor/autoload.php';

use RaktarKezelo\Brand;

echo "------------------------ Teszt 5 ------------------------";
echo "<br>";
echo "Nem megfelelő minőségkategóriájú márka felvétele";
echo "<br><br>";

// Érvényes márka
$validBrand = new Brand("Brit Care", 4, "Csehország");
echo "Érvényes márka létrehozva: " . $validBrand->getBrandName() . " (minőség: " . $validBrand->getQuality() . ")<br>";

echo "<br>";

// Hibás márka – minőség 6 (max 5)
echo "Kísérlet 6-os minőségkategóriával:<br>";
$tooHigh = new Brand("Brit Care 6", 6, "Csehország");

echo "<br>";

// Hibás márka – minőség 0 (min 1)
echo "Kísérlet 0-ás minőségkategóriával:<br>";
$tooLow = new Brand("Brit Care 0", 0, "Csehország");
?>

</body>
</html>
