<?php

session_start();

// var_dump($_POST);

$firstnameValid = false;
$lastnameValid = false;

if(isset($_POST['firstname']) && ctype_alpha($_POST['firstname'])) {
    $firstnameValid = true;
}

if (isset($_POST['lastname']) && ctype_alpha($_POST['lastname'])) {
    $lastnameValid = true;
}

if($firstnameValid && $lastnameValid) {
    include('admin.php');
}
else {

    $_SESSION['form_error'] = true;

    header('Location: form.php');
}