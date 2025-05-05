<?php
require_once 'init.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ASC Motors - Gallery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap + Icons + Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">

    <link href="css/slideshow.css" rel="stylesheet">
</head>
<body>

<?php include 'Header.php'; ?>

<div class="container mt-5">
    <h2 class="text-center mb-4">Gallery</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php
        $galleryCars = [
            ['file' => 'bmw.png', 'name' => 'BMW 3 Series'],
            ['file' => 'tesla model3.png', 'name' => 'Tesla Model 3'],
            ['file' => 'ford mustang.png', 'name' => 'Ford Mustang'],
            ['file' => 'toyota corolla.png', 'name' => 'Toyota Corolla'],
            ['file' => 'chevy.png', 'name' => 'Chevy Camaro']
        ];
        foreach ($galleryCars as $car): ?>
            <div class="col">
                <div class="card h-100 text-center">
                    <img src="Images/<?= htmlspecialchars($car['file']) ?>" class="card-img-top" alt="<?= htmlspecialchars($car['name']) ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= htmlspecialchars($car['name']) ?></h5>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include 'Footer.php'; ?>

</body>
</html>
