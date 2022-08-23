<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>00063-pet-PHP-repeat</title>
    <link rel="stylesheet" href="<?php __DIR__ ?>/style.css">
    <link rel="shortcut icon" href="<?php __DIR__ ?>/favicon.ico" type="image/x-icon">
</head>

<body>
    <header class="header">
        <div class="container flex">
            <div class="header__logo">
                <h1><a href="/">Logo</a></h1>
            </div>
            <nav>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="<?php __DIR__ ?>/assets/pages/les1.php">Math </a></li>
                    <li><a href="<?php __DIR__ ?>/assets/pages/les2.php">For </a></li>
                    <li><a href="<?php __DIR__ ?>/assets/pages/les3.php">While </a></li>
                    <li><a href="<?php __DIR__ ?>/assets/pages/les4.php">Foreach </a></li>
                    <li><a href="<?php __DIR__ ?>/assets/pages/les5.php">Function </a></li>
                    <li><a href="<?php __DIR__ ?>/assets/pages/les6.php">БД SQL СУБД </a></li>
                </ul>
            </nav>
            <div class="flex">
                <div class="header__search">
                    <input type="search" name="search" placeholder="Search">
                </div>
                <div>
                    <form action="<?php __DIR__ ?>/assets/modules/login.php" method="POST">
                        <input type="email" name="email" placeholder="email" required>
                        <input type="password" name="password" placeholder="password" required>
                        <input type="submit" value="Log in">
                    </form>
                    <?php
                    if ($_GET['error'] == 'err') {
                        echo '<span class="err">Неверный логин/пароль</span>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </header>
    <?php global $const;
