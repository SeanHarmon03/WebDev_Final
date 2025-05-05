<?php
require_once 'classes/User.php';

// Create a User
$user = new User('john_doe', 'admin');

// Tests
if ($user->getUsername() === 'john_doe') {
    echo "PASS: User getUsername()<br>";
} else {
    echo "FAIL: User getUsername()<br>";
}

if ($user->getRole() === 'admin') {
    echo "PASS: User getRole()<br>";
} else {
    echo "FAIL: User getRole()<br>";
}

if ($user->isAdmin() === true) {
    echo "PASS: User isAdmin()<br>";
} else {
    echo "FAIL: User isAdmin()<br>";
}

if ($user->isCustomer() === false) {
    echo "PASS: User isCustomer()<br>";
} else {
    echo "FAIL: User isCustomer()<br>";
}
?>