<?php

require_once 'Product.php';
require_once 'Inventory.php';
require_once 'Sale.php';
require_once 'RegisterSales.php';

$Product1 = new Product(1,"Chocolate", "Excelente calidad", 2.50, 10);
$Product2 = new Product(2,"Galleta", "Bueno", 1.00, 12);
$Product3 = new Product(3,"Chess", "Bonito", 2.00, 10);
$Product4 = new Product(4,"Manzanas", "Barato", 3.00, 15);

$Inventary = new Inventory([$Product1,$Product2,$Product3,$Product4]);

echo "\n";
echo "--> Lista de productos en inventario:\n";
$Inventary->ListProduct();

$Sale1 = new Sale($Product1, 2); 
$Sale2 = new Sale($Product2, 3); 

$RegisterSales = new RegisterSales([$Sale1,$Sale2]);

$Inventary->updateStock($Sale1->getProduct()->getId(), $Sale1->getQuantity());
$Inventary->updateStock($Sale2->getProduct()->getId(), $Sale2->getQuantity());

echo "\n";
echo "--> Lista de ventas realizadas:\n";
echo "|-------------------------------|\n";
$RegisterSales->ListSales();

$TotalQuantity = $RegisterSales->ViewTotalQuantity();
$TotalSales = $RegisterSales->CalTotSales();

echo "\n";
echo "--> Total de productos vendidos: " . $TotalQuantity . "\n";
echo "--> Total de ganancias: s/." . $TotalSales . "\n";

echo "\n";
echo "--> Lista de productos actulizada:\n";
$Inventary->ListProduct();

/*
$ViewProduct = $Inventary->ViewProduct(1);
    echo "--> Producto obtenido: " . $ViewProduct->getName();
*/

?>



