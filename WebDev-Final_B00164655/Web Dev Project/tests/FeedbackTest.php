<?php

// feedbackTest.php

// Function to simulate feedback based on login result
function testFeedback($loginSuccess) {
    if ($loginSuccess) {
        // Success feedback
        echo "<div class='alert alert-success' role='alert'>";
        echo "Login successful! Welcome back!";
        echo "</div>";
    } else {
        // Error feedback
        echo "<div class='alert alert-danger' role='alert'>";
        echo "Invalid username or password. Please try again.";
        echo "</div>";
    }
}
?>
