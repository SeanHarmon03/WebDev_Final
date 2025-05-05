<?php
require_once 'init.php';
                                               
if (!isset($_SESSION['Active']) || $_SESSION['Active'] !== true) {
    header("Location: Login.php");                             
    exit;
}


// Comment the '*' entire thing out when testing {
// Consistency Test
//include 'tests/ConsistencyTest.php';

//testConsistency();

//This test checks if a logged-in user is presented with a clear way to log out.
//include 'tests/UserControlTest.php';                   //}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ASC Motors - Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap + Fonts + Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">

    <link href="css/index.css" rel="stylesheet">
</head>
<body>

<?php include 'Header.php'; ?>

<!--?php include 'Slideshow.php'; ?-->

    <center>
        <h1>Status: You are logged in as <?php echo isset ($_SESSION['username']) ? htmlspecialchars($_SESSION['username']) : " "; ?> </h1>
    </center>

<div class="hero-section text-center text-white d-flex flex-column justify-content-center align-items-center">
    <h1>Welcome to ASC Motors</h1>
    <p>Your trusted destination for high-performance vehicles.</p>
</div>

<div class="container my-5">
    <h2 class="text-center mb-4">Featured Vehicles</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php
        $featuredCars = [
            ['id' => 1, 'img' => 'bmw.png', 'name' => 'BMW 3 Series'],
            ['id' => 2, 'img' => 'tesla model3.png', 'name' => 'Tesla Model 3'],
            ['id' => 3, 'img' => 'ford mustang.png', 'name' => 'Ford Mustang']
        ];
        foreach ($featuredCars as $car): ?>
            <div class="col">
                <div class="card h-100 text-center">
                    <img src="Images/<?= htmlspecialchars($car['img']) ?>" class="card-img-top" alt="<?= htmlspecialchars($car['name']) ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= htmlspecialchars($car['name']) ?></h5>
                        <p class="card-text">Sleek design. Powerful performance.</p>
                        <form method="POST" action="AddToCart.php">
                            <input type="hidden" name="product_id" value="<?= $car['id'] ?>">
                            <button type="submit" class="btn btn-primary w-100">Add to Cart</button>
                        </form>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include 'Footer.php'; ?>

</body>
</html>
