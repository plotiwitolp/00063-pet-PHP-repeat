<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>00063-pet-PHP-repeat</title>
    <link rel="stylesheet" href="<?php __DIR__ ?>/style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>

<body>
    <header class="header">
        <div class="container flex">
            <div class="header__logo">
                <h1>Logo</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
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
                </div>
            </div>
        </div>
    </header>