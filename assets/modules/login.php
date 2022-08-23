<?php
echo "<pre>";
print_r($_POST['email']);
echo "</pre>";

if ($_POST['email'] != 'plotnikov.msk@yandex.ru' || $_POST['password'] != '123') {
    header("location: /../../index.php");
    exit;
} else {
    echo "Добро пожаловать!";
}
