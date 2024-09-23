<?php
function data()
{
    $db = new PDO(
        'mysql:host=DB;dbname=collectorapp',
        'root',
        'password'

    );
    return $db;
}

$db = data();


