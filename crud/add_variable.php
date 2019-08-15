<?php
session_start();
require_once '../vendor/autoload.php';

use Medoo\Medoo;

$database = new Medoo([
    'database_type' => 'mysql',
    'database_name' => 'sop',
    'server' => '127.0.0.1',
    'port' => '3307',
    'username' => 'root',
    'password' => ''
]);


$cropName = isset($_SESSION['crop']) ? $_SESSION['crop'] : '';
$sopNo = isset($_SESSION['sopno']) ? $_SESSION['sopno'] : '';
$userId = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : '';
$odkFormId = isset($_SESSION['odkFormId']) ? $_SESSION['odkFormId'] : '';


$type = $_POST['type'];
$name = $_POST['name'];
$label = $_POST['label'];
$unit = $_POST['unit'];

$category1 = isset($_POST['category_1']) ? $_POST['category_1'] : '';
$category2 = isset($_POST['category_2']) ? $_POST['category_2'] : '';
$category3 = isset($_POST['category_3']) ? $_POST['category_3'] : '';
$category4 = isset($_POST['category_4']) ? $_POST['category_4'] : '';
$category5 = isset($_POST['category_5']) ? $_POST['category_5'] : '';
$category6 = isset($_POST['category_6']) ? $_POST['category_6'] : '';


$variableData = [
    'crop' => $cropName,
    'sopno' => $sopNo,
    'type' => $type,
    'label' => $label,
    'unit' => $unit,
    'name' => $name,
    'ODKFORM_id' => $odkFormId,
    'category_1' => $category1,
    'category_2' => $category2,
    'category_3' => $category3,
    'category_4' => $category4,
    'category_5' => $category5,
    'category_6' => $category6,


];

//insert data to the database
$result = $database->insert('variabletable', $variableData);
$resp = [
    'success' => $result->rowCount() > 0 ? true : false
];
echo json_encode($resp);
exit();


