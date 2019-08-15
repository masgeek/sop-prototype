<?php
require_once '../vendor/autoload.php';

use Medoo\Medoo;

// Initialize
$database = new Medoo([
    'database_type' => 'mysql',
    'database_name' => 'sop',
    'server' => '127.0.0.1',
    'port' => '3307',
    'username' => 'root',
    'password' => ''
]);

$data = $database->select('variabletable', [
    'id',
    'user_id',
    'crop',
    'sopno',
    'type',
    'unit',
    'name',
    'label',
    'ODKFORM_id',
    'category_1',
    'category_2',
    'category_3',
    'category_4',
    'category_5',
    'category_6',
]);

echo json_encode($data);
exit();
