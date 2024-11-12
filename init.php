<?php
require 'models/csv.php';

function redirect($page)
{
    header('Location: ' . '/views/' . $page . '.php');
}

function render($view, $data)
{
    extract($data);
    require('/views/' . $view . '.php');
}
