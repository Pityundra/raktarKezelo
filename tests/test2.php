<!DOCTYPE html>
<html>
<body>

<?php
require_once __DIR__ . '/../vendor/autoload.php';

use RaktarKezelo\Brand;
use RaktarKezelo\Collar;
use RaktarKezelo\Leash;
use RaktarKezelo\Storage;
use RaktarKezelo\StorageController;
use RaktarKezelo\Treat;

echo "------------------------ Teszt 2 ------------------------";
echo "<br>";
echo "Felvesz több terméket, de nincs elég hely";
echo "<br><br>";

// Márkák
$trixie = new Brand("Trixie", 3, "Németország");
$collarful = new Brand("Collarful", 5, "Magyarország");
$britCare = new Brand("Brit Care", 4, "Csehország");

// Termékek
$leash = new Leash("111222", "Póráz", "5.000 Ft", $trixie, "20g", 30);
$collar = new Collar("123456789", "Nyakörv", "4.500 Ft", $collarful, "10g", "M");
$treat = new Treat("987654321", "Jutifalat", "1.500 Ft", $britCare, "150g", "bárány");

// Raktárak
$center = new Storage("Központi raktár", "Valahol", 5, "0km");
$countrySide = new Storage("Vidéki raktár", "Vidéken", 3, "250km");

$controller = new StorageController([$center, $countrySide]);

// Raktárak feltöltése (több mint amennyi a kapacitás)
$controller->productStorageLoad($center, $leash);
$controller->productStorageLoad($center, $collar);
$controller->productStorageLoad($countrySide, $treat);
$controller->productStorageLoad($countrySide, $treat);
$controller->productStorageLoad($countrySide, $treat);
$controller->productStorageLoad($countrySide, $treat);
$controller->productStorageLoad($countrySide, $treat);
$controller->productStorageLoad($countrySide, $treat);
$controller->productStorageLoad($countrySide, $treat);
$controller->productStorageLoad($countrySide, $treat);
$controller->productStorageLoad($countrySide, $treat);
$controller->productStorageLoad($countrySide, $treat);

// Raktárak kiíratása
$center->getProducts();
$countrySide->getProducts();
?>

</body>
</html>
