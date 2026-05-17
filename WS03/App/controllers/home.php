<?php
$jobs = require __DIR__ . '/../../config/config.php';
view('home.view.php', ['jobs' => $jobs]);
