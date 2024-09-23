<?php

$db = new PDO(
    'mysql:host=DB;dbname=collectorapp',
    'root',
    'password'
);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$dog_query = $db->prepare("SELECT * FROM `dogs`");

$result = $dog_query->execute();

$data = $dog_query -> fetchAll();
echo '<pre>';
var_dump($data);

$cat_query = $db->prepare("SELECT * FROM `cats`");

$result = $cat_query->execute();

$data = $cat_query -> fetchAll();
echo '<pre>';
var_dump($data);

$owners_query = $db->prepare("SELECT * FROM `owners`");

$result = $owners_query->execute();

$data = $owners_query -> fetchAll();
echo '<pre>';
var_dump($data);
