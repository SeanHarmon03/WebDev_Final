<?php
require_once 'classes/Session.php';

// Start session
Session::start();

// Test setting session variable
Session::set('test_key', 'test_value');

if (Session::get('test_key') === 'test_value') {
    echo "PASS: Session set() and get()<br>";
} else {
    echo "FAIL: Session set() and get()<br>";
}

// Test unsetting session variable
Session::unset('test_key');

if (Session::get('test_key') === null) {
    echo "PASS: Session unset()<br>";
} else {
    echo "FAIL: Session unset()<br>";
}

// Test destroy (cannot really test destroy because it ends session, optional)
echo "ALL SESSION TESTS COMPLETED";
?>