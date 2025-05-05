<?php
// UserControlFreedomTest.php
// UI Principle Test #10: User Control and Freedom

// This test checks if a logged-in user is presented with a clear way to log out.

if (isset($_SESSION['Active']) && $_SESSION['Active'] == true) {
    echo '<div class="p-3 text-center">';
    echo '<h4 style="color: green;">[TEST] User Control and Freedom: Logout button is visible.</h4>';
    echo '<a href=" " class="btn btn-danger">Logout</a>';
echo '</div>';
} else {
    echo '<div class="p-3 text-center">';
    echo '<h4 style="color: red;">[TEST] User Control and Freedom: User not logged in, logout button not shown.</h4>';
    echo '</div>';
}
?>