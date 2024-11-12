<?php

function redirect($page)
{
    header('Location: ' . '/views/' . $page . '.php');
}

function render($view, $data)
{
    extract($data);
    require('/views/' . $view . '.php');
}

function csv_path($table)
{
    return __DIR__ . '/models/' . $table . '.csv';
}

function csv_read($table)
{
    $file = csv_path($table);
    $entries = array();

    $fileHandle = fopen($file, 'r');
    if ($fileHandle !== false) {
        while (($data = fgetcsv($fileHandle)) !== false) {
            $entries[] = $data;
        }
        fclose($fileHandle);
    }
    return $entries;
}

function csv_push($table, $data)
{
    $fileHandle = fopen(csv_path($table), 'a');
    $success = $fileHandle !== false;
    if ($success) {
        fputcsv($fileHandle, $data);
        fclose($fileHandle);
    }
    return $success;
}
