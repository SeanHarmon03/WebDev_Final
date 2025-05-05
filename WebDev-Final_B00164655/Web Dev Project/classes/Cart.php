<?php
require_once 'CartItem.php';

class Cart {
    private $items = [];

    public function addProduct(Product $product): void {
        $productId = $product->getId();
        if (isset($this->items[$productId])) {
            $this->items[$productId]->increaseQuantity();
        } else {
            $this->items[$productId] = new CartItem($product, 1);
        }
    }

    public static function loadFromSession(): Cart {
        if (isset($_SESSION['cart'])) {
            $cart = unserialize($_SESSION['cart']);

            // Ensure it's a valid Cart object
            if ($cart instanceof Cart) {
                return $cart;
            }
        }
        return new Cart(); // new cart if not found or invalid
    }

    public static function saveToSession(Cart $cart): void {
        $_SESSION['cart'] = serialize($cart);
    }

    public function getItems(): array {
        return is_array($this->items) ? $this->items : [];
    }

    public function getTotal(): float {
        $total = 0;
        foreach ($this->getItems() as $item) {
            $total += $item->getSubtotal();
        }
        return $total;
    }

    public function clear(): void {
        $this->items = [];
        self::saveToSession($this); // optional: clear immediately
    }
}