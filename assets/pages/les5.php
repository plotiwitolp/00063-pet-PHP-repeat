<?php require_once __DIR__ . '/../modules/header.php'; ?>
<main>
    <div class="container flex">
        <?php require_once __DIR__ . '/../modules/sidebar.php'; ?>
        <div class="content">
            <h1>Function</h1>
            <p>
                <?php
                $br = "<br>";

                function getBigger(int $a, int $b)
                {
                    global $br;
                    if ($a > $b) {
                        return $a .  $br;
                    } else {
                        return $b .  $br;
                    }
                }
                echo getBigger(5, 10);
                echo getBigger(15, 10);

                $arr = [2, 8, 10, -14, 67, 54, 33, 3.8, 9.34];
                rsort($arr);
                foreach ($arr as $value) {
                    echo $value . ', ';
                }
                echo $br;
                sort($arr);
                foreach ($arr as $value) {
                    echo $value . ', ';
                }
                echo $br;
                echo min($arr);
                echo $br;
                echo max($arr);
                echo $br;
                echo array_sum($arr) / count($arr);
                echo $br;

                ?>
            </p>
        </div>
    </div>
</main>
<?php require_once __DIR__ . '/../modules/footer.php'; ?>