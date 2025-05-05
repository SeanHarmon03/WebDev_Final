<?php
require_once 'init.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ASC Motors - Contact Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap + Fonts + Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">

    <link href="css/contact.css" rel="stylesheet">
</head>
<body>

<?php include 'Header.php'; ?>

<div class="container mt-5 mb-5">
    <h2 class="text-center mb-4">Contact Us</h2>

    <form action="#" method="POST" class="w-75 mx-auto">
        <div class="mb-3">
            <label for="name" class="form-label">Full Name</label>
            <input type="text" class="form-control" name="name" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email" required>
        </div>

        <div class="mb-3">
            <label for="message" class="form-label">Your Message</label>
            <textarea class="form-control" name="message" rows="5" required></textarea>
        </div>

        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Send Message</button>
        </div>
    </form>
</div>

<?php include 'Footer.php'; ?>

</body>
</html>
