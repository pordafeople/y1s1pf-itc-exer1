<?php
require_once('models/csv.php');

function redirect($page)
{
    header('Location: ' . '/views/' . $page . '.php');
}

function render($view, $data)
{
    $path = $_SERVER['DOCUMENT_ROOT'] . '/views/' . $view . '.php';
    ob_start();
    extract($data);
    include($path);
    return ob_get_clean();
}
