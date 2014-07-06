<?php
require_once 'vendor/autoload.php';

// Connect to Twitter
session_start();
$twitter = require_once 'connect.php'; // See README.md

// Store the URL of the previous page
$_SESSION['back'] = isset($_SERVER['HTTP_REFERER']) ? basename($_SERVER['HTTP_REFERER']) : '.';

// Authenticate with twitter
$twitter->auth();

// Go bac to the previous URL
$back = $_SESSION['back'];
unset($_SESSION['back']);

header("Location: $back");
