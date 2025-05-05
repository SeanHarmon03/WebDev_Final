<?php
require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Database.php';

class ProductRepository {
    private $db;

    public function __construct() {
        $db = new Database();      
        $db->connect();            
        $this->db = $db->getConnection(); 
    }

    // get all products using pdo 
    public function getAllProducts(): array {
        $products = [];

        $sql = "SELECT * FROM products";
        $stmt = $this->db->query($sql);
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($rows as $row) {
            $products[] = new Product(
                (int)$row['id'],
                $row['name'],
                (float)$row['price'],
                $row['description'] ?? '',
                $row['image']
            );
        }

        
        return $products;
    }

    // add a product 
    public function addProduct($name, $price, $description, $image) {
        $sql = "INSERT INTO products (name, price, description, image) VALUES (?, ?, ?, ?)";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$name, $price, $description, $image]);
    }

    // view a product by id 
    public function getProductById($id): ?Product {
        $sql = "SELECT * FROM products WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$id]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
        if ($row) {
            return new Product(
                (int)$row['id'],
                $row['name'],
                (float)$row['price'],
                $row['description'] ?? '',
                $row['image']
            );
        }
    
        return null;
    } 

    // update a product
    public function updateProduct($id, $name, $price, $description, $image) {
        $sql = "UPDATE products SET name = ?, price = ?, description = ?, image = ? WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$name, $price, $description, $image, $id]);
    }

    // delete a product 
    public function deleteProduct($id) {
        $sql = "DELETE FROM products WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$id]);
    }
}