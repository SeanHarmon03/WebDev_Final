<?php
require_once 'classes/Database.php';


$db = new Database('localhost', 'root', 'Howimetyourmother2003!', 'asc_motors');

try {
    $db->connect();
    echo "PASS: Database connect()<br>";
} catch (Exception $e) {
    echo "FAIL: Database connect()<br>";
}
?>