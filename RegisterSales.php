<?php

class RegisterSales {
    private array $Sales = [];

    public function __construct(array $EnterSales = []) 
    {
        foreach ($EnterSales as $Sale)
        {
            $this->AddSale($Sale);
        }
    }

    public function AddSale(Sale $Sale): void
    {
        $this->Sales[] = $Sale;
    }

    public function ListSales() {
        foreach ($this->Sales as $Sale) 
        {
            echo "|--Producto: " . $Sale->getProduct()->getName() . "\n";
            echo "|--Cantidad: " . $Sale->getQuantity() . "\n";
            echo "|--Total: s/." . $Sale->CalculateTotal() . "\n";
            echo "|--------------------------\n";
        }
    }

    public function CalTotSales(): float
    {
        $Total = 0;
        foreach ($this->Sales as $Sale) {
            $Total += $Sale->CalculateTotal();
        }
        return $Total;
    }
}

?>