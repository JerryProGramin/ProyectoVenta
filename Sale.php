<?php

declare(strict_types=1);

class Sale 
{
    public function __construct(
        private Product $Product,
        private int $Quantity
    ) 
    {
        $this->setQuantity($Quantity);
    }

    public function getProduct(): Product
    {
        return $this->Product;
    }

    public function getQuantity(): int 
    {
        return $this->Quantity;
    }

    public function setQuantity(int $Quantity): void
    {
        if ($Quantity < 1) 
        {
            throw new InvalidArgumentException("La cantidad de productos debe ser mayor a 0.");
        }
        $this -> Quantity = $Quantity;
    }


    public function CalculateTotal(): float
    {
        return $this->Product->getPrice() * $this->Quantity;
    }
}

?>