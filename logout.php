<?php
require_once 'vendor/autoload.php';

session_start();
session_destroy();

header('Location: .');
