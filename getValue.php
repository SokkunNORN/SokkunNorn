
<?php

include_once 'src/GetValue_Class.php';

$name = '';
$province = '';
$email = '';
$gender = '';

if(isset($_POST['btn-send'])) {
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $province = $_POST['province'];
    $email = $_POST['email'];
}

$info = new GetValue($name, $gender, $province, $email);




