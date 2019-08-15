<?php
session_start();
if (isset($_POST['odkFormId'])) {
    $odkFormId = $_POST['odkFormId'];
    $_SESSION['odkFormId'] = $odkFormId;
    echo json_encode($_POST);
}