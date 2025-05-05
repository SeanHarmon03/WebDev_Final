<?php
class Product {
    private int $id;
    private string $name;
    private float $price;
    private string $description;
    private string $image;

    public function __construct(int $id, string $name, float $price, string $description, string $image) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->image = $image;
    }

    public function getId(): int {
        return $this->id;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getPrice(): float {
        return $this->price;
    }

    public function getDescription(): string {
        return $this->description;
    }

    public function getImage(): string {
        return $this->image;
    }

    public function getFormattedPrice(): string {
        return '$' . number_format($this->price, 2);
    }

    public function toArray(): array {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'price' => $this->price,
            'description' => $this->description,
            'image' => $this->image
        ];
    }
}