<?php
$jobs = require __DIR__ . '/../../../config/config.php';
$id   = isset($_GET['id']) ? (int)$_GET['id'] : 1;

// Validate id is within range
if ($id < 1 || $id > count($jobs)) {
    $id = 1;
}

$job = $jobs[$id - 1];
view('listing.view.php', ['job' => $job]);