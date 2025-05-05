<?php
require_once 'Sessions.php'; // ✅ if you renamed from session.php
$session = new Session();
$session->forgetSession(); 
?>