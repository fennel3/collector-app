<?php

$db = new PDO(
    'mysql:host=DB;dbname=collectorapp',
    'root',
    'password'
);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$dog_query = $db->prepare("SELECT * FROM `dogs`");

$dog_result = $dog_query->execute();

if ($dog_result){
$data = $dog_query -> fetchAll();
echo '<pre>';
var_dump($data);}

$cat_query = $db->prepare("SELECT * FROM `cats`");

$cat_result = $cat_query->execute();
if ($cat_result){
$data = $cat_query -> fetchAll();
echo '<pre>';
var_dump($data);}

$owners_query = $db->prepare("SELECT * FROM `owners`");

$owner_result = $owners_query->execute();

if ($owner_result){
$data = $owners_query -> fetchAll();
echo '<pre>';
var_dump($data);}
