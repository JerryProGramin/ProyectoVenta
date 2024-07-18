<?php

require_once 'Product.php';
require_once 'Inventory.php';
require_once 'Sale.php';
require_once 'RegisterSales.php';

$Product1 = new Product(1,"Chocolate", "Excelente calidad", 2.50, 10);
$Product2 = new Product(2,"Galleta", "Buen precio", 1.00, 15);
$Product3 = new Product(3,"Chess", "Buen precio", 2.00, 16);
$Product4 = new Product(4,"Manzanas", "Buen precio", 3.00, 15);

$Inventary = new Inventory([$Product1,$Product2,$Product3,$Product4]);

echo "\n";
echo "--> Lista de productos en inventario:\n";
$Inventary->ListProduct();

$Sale1 = new Sale($Product1, 2); 
$Sale2 = new Sale($Product2, 3); 

$RegisterSales = new RegisterSales([$Sale1,$Sale2]);

echo "\n";
echo "--> Lista de ventas realizadas:\n";
echo "|-------------------------------|\n";
$RegisterSales->ListSales();

$TotalSales = $RegisterSales->CalTotSales();

echo "\n";
echo "--> Total de ganancias: s/." . $TotalSales . "\n";

/*
$ViewProduct = $Inventary->ViewProduct(1);
    echo "--> Producto obtenido: " . $ViewProduct->getName();
*/

?>



