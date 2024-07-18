<?php
declare(strict_types=1);

class Inventory 
{
    private array $Products = [];

    public function __construct(array $EnterProduct = [])
    {
        foreach ($EnterProduct as $Product) 
        {
            $this->AddProduct($Product);
        }
    }

    public function AddProduct(Product $Product): void
    {
        $this->Products[$Product->getId()] = $Product;
    }

    public function ListProduct(): void
    {
        foreach ($this->Products as $Product) 
        {
            //echo "|--Id: " . $Product->getId() . "\n";
            echo "|--Nombre: " . $Product->getName() . "\n";
            echo "|--Descripción: " . $Product->getDescription() . "\n";
            echo "|--Precio: s/." . $Product->getPrice() . "\n";
            echo "|--Stock: " . $Product->getStock() . "\n";
            echo "|--------------------------\n";
        }
    }

    /*
    public function ViewProduct(int $Id): ?Product 
    {
        if (!isset($this->Products[$Id])) {
            echo("Producto no encontrado");
            return null;
        }
        return $this->Products[$Id];
    }
    */

    public function updateStock(int $ProductId, int $QuantitySold): void
    {
        if (isset($this->Products[$ProductId])) {
            $this->Products[$ProductId]->AmountStock($QuantitySold);
        }
    }
}


?>