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

echo "------------------------ Teszt 4 ------------------------";
echo "<br>";
echo "Több terméket kérünk, mint amennyi a raktárjainkban összesen van";
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

// Raktárak feltöltése
$controller->productStorageLoad($center, $leash);
$controller->productStorageLoad($center, $collar);
$controller->productStorageLoad($center, $treat);
$controller->productStorageLoad($center, $treat);
$controller->productStorageLoad($countrySide, $treat);
$controller->productStorageLoad($countrySide, $treat);
$controller->productStorageLoad($countrySide, $collar);
$controller->productStorageLoad($countrySide, $collar);

// Raktárak kiíratása
echo "<br>";
$center->getProducts();
$countrySide->getProducts();
echo "<br>";

// Kiszállítás kísérlete (csak 1 db póráz van, 3-at kérünk)
$controller->productDelivery($leash, 3);
echo "<br>";
?>

</body>
</html>
