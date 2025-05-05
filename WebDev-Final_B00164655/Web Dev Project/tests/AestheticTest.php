<?php
require_once 'Header.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aesthetic and Minimalist Design Test</title>
    <link href="css/Product.css" rel="stylesheet"> 
    <style>
        .design-section {
            margin: 30px auto;
            width: 90%;
            padding: 20px;
        }

        .cluttered {
            border: 3px solid red;
            padding: 20px;
            margin-bottom: 40px;
            background-color: #ffecec;
        }

        .minimalist {
            border: 3px solid green;
            padding: 20px;
            background-color: #ecfff1;
        }

        .cluttered button, .minimalist button {
            margin: 5px;
        }

        .cluttered img, .minimalist img {
            width: 100px;
            margin: 5px;
        }
    </style>
</head>

<body>

<div class="container">
    <h2 style="margin-top: 20px;">Aesthetic and Minimalist Design Test</h2>
    <p>This page shows a comparison between a cluttered design and a minimalist design to demonstrate good UI practice.</p>

    <div class="design-section cluttered">
        <h3>Cluttered Design (Bad Example)</h3>
        <p>Too many elements, overwhelming the user.</p>
        <button>Buy Now</button>
        <button>Sign Up</button>
        <button>Learn More</button>
        <button>Subscribe</button>
        <button>Free Trial</button>
        <img src="images/ad2.jpg" alt="Messy Ad 1">
        <img src="images/ad3.png" alt="Messy Ad 2">
        <img src="images/ad4.jpg" alt="Messy Ad 3">
        <p style="color: red; font-size: 12px;">*Too many calls to action!*</p>
    </div>

    <div class="design-section minimalist">
        <h3>Minimalist Design (Good Example)</h3>
        <p>Clear focus, few distractions, easy navigation.</p>
        <button style="background-color: green; color: white;">Get Started</button>
        <img src="images/bmw.png" alt="Clean Product Image" style="width:150px;">
        <p style="font-size: 14px;">One clear action for users.</p>
    </div>

</div>

<?php
require_once 'Footer.php'; 
?>

</body>
</html>
