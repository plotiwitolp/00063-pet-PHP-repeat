<?php require_once __DIR__ . '/../modules/header.php'; ?>
<main>
    <div class="container flex">
        <?php require_once __DIR__ . '/../modules/sidebar.php'; ?>
        <div class="content">
            <h1>Foreach</h1>
            <p>
                <?php
                $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
                $arr2 = [
                    'name1' => 'John',
                    'name2' => 'Jek',
                    'name3' => 'Noah',
                    'name4' => 'Liam',
                    'name5' => 'Liam',
                ];
                foreach ($arr as $value) {
                    echo 'Куб числа ' . $value . " = " . ($value ** 3) . ";<br>";
                }
                ?><mybr>
                    <?php
                    foreach ($arr2 as $value) {
                        echo $value . ", ";
                    }
                    ?>
            </p>
        </div>
    </div>
</main>
<?php require_once __DIR__ . '/../modules/footer.php'; ?>