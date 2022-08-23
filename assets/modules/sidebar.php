<?php
$connection = mysqli_connect(
    '127.0.0.1',
    'root',
    '',
    'bd-00063'
);
if (!$connection) exit;
$result = mysqli_query($connection, "SELECT * FROM `articles_categories`");


?>
<aside>
    <form method="GET">
        <?php
        $i = 1;
        while ($r = mysqli_fetch_assoc($result)) {
            echo "<input type='checkbox' value='{$i}' name='inp{$i}' id='inp{$i}' >" . "<label for='inp{$i}'>" . $r['title'] . '</label>' .  '<br>';
            $i++;
        }
        ?>
        <input type="submit" value="Submit">
    </form>
</aside>