<?php
function view($file, $data = []) {
    extract($data);
    require __DIR__ . '/App/views/' . $file;
}
