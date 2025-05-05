<?php
require_once __DIR__ . '/Product.php';

class CartItem {
    private $product;
    private $quantity;

    public function __construct(Product $product, int $quantity = 1) {
        $this->product = $product;
        $this->quantity = $quantity;
    }

    public function getProduct(): Product {
        return $this->product;
    }

    public function getQuantity(): int {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): void {
        $this->quantity = max(1, $quantity);
    }

    public function increaseQuantity(int $amount = 1): void {
        $this->quantity += $amount;
    }

    public function getSubtotal(): float {
        return $this->product->getPrice() * $this->quantity;
    }

    public function getTotalPrice(): float {
        return $this->getSubtotal();
    }
}