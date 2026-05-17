<?php
$jobs = require __DIR__ . '/../../../config/config.php';
view('listings.view.php', ['jobs' => $jobs]);
