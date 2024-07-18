<?php
declare(strict_types=1);

class Product 
{
    public function __construct(
        private int $Id,
        private string $Name,
        private string $Description,
        private float $Price,
        private int $Stock
    )
    {
        $this->setPrice($Price);
        $this->setStock($Stock);
    }

    public function getId(): int 
    {
        return $this->Id;
    }

    public function getName(): string
    {
        return $this->Name;
    }

    public function getDescription(): string
    {
        return $this->Description;
    }

    public function getPrice(): float
    {
        return $this->Price;
    }

    public function getStock(): int
    {
        return $this->Stock;
    }

    public function setPrice(float $Price): void
    {
        if ($Price < 1)
        {
            throw new InvalidArgumentException("El precio debe ser un número positivo");
        }
        $this ->Price = $Price;
    }

    public function setStock(int $Stock): void
    {
        if ($Stock < 1)
        {
            throw new InvalidArgumentException("El stock debe ser un número positivo");
        }
        $this ->Stock = $Stock;
    }

    public function AmountStock(int $quantity): void
    {
        if ($this->Stock < $quantity) {
            throw new InvalidArgumentException("Productos insuficientes");
        }
        $this->Stock -= $quantity;
    }
}

?>