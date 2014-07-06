<?php
require_once 'vendor/autoload.php';

session_start();
$twitter = require_once 'connect.php'; // See README.md

require_once 'views/index.php';
