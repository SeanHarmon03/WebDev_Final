<?php
require_once 'init.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start(); 
    
}
// Define valid username and password
$Username = "User";
$Password = "password123";

$error = "";

//Get Rid of these comments if wanting to test {
// Feedback test 
//include 'tests/FeedbackTest.php';

//$loginSuccess = false; // Initialize loginSuccess flag

// Consistency Test
//include 'tests/ConsistencyTest.php';

//testConsistency(); //}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $inputUser = $_POST['username'] ?? '';
    $inputPass = $_POST['password'] ?? '';

    if (empty($inputUser) || empty($inputPass)) {
        $error = "Both fields are required.";
    } elseif ($inputUser === $Username && $inputPass === $Password) {
        $_SESSION['Username'] = $Username;      
        $_SESSION['Active'] = true;             
        header("Location: Index.php");          
        exit;
    } else {
        $error = "Invalid Username or Password!";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ASC Motors - Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap + Fonts + Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">

    <link href="css/login.css" rel="stylesheet">
</head>
<body>

<?php include 'Header.php'; ?>

<div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="card p-4" style="width: 100%; max-width: 400px;">
        <div class="text-center">
            <img src="Images/profile.png" alt="Profile Icon" style="width: 80px; height: 80px; object-fit: cover; border-radius: 50%; margin-bottom: 1rem;">
            <h2>Login</h2>
        </div>
        <form action=" " method="POST">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <div class="d-grid">
                <button type="submit" name="submit" class="btn btn-primary">Login</button>
            </div>
        </form>
    </div>
</div>

<center>
<?php
// Check if form is submitted
if (isset($_POST['submit'])) {

    // Check if both fields are filled
    if (empty($_POST['username']) || empty($_POST['password'])) {
        echo "Both fields are required.<br>";
    } else {

        // Validate entered username and password against defined values
        if ($_POST['username'] == $Username && $_POST['password'] == $Password) {
            // Set session variables
            $_SESSION['username'] = $Username;
            $_SESSION['user'] = true;
            //If taken away this can be tested for logging in successful only
            header("Location:"); // Redirect to the index page after successful login#
            echo "<div class='alert alert-success'>Login successful!</div>";
            exit;
        } else {
            // Debugging: Print out the posted values
            echo "Invalid Username or Password!<br>";
        }
    }
}

// Run the feedback test (show feedback if form is submitted)
//if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   // testFeedback($loginSuccess);
//}
?>
<center>

<?php include 'Footer.php'; ?>

</body>
</html>
