<?php require_once __DIR__ . '/../modules/header.php'; ?>
<main>
    <div class="container flex">
        <?php require_once __DIR__ . '/../modules/sidebar.php'; ?>
        <div class="content">
            <h1>Math</h1>
            <p>
                <?php
                $a = $_POST['num1'];
                $b = $_POST['num2'];
                $c = $_POST['num3'];
                ?>
            <form method="POST">
                <input type="number" name="num1" value="<?= $a ?>"> +
                <input type="number" name="num2" value="<?= $b ?>"> *
                <input type="number" name="num3" value="<?= $c ?>">
                <input type="submit" value="посчитать">
            </form>
            <?php if (!$a || !$b || !$c) exit; ?>
            <span class="sum"><?= ($a + $b) * $c; ?></span>
            </p>
        </div>
    </div>
</main>
<?php require_once __DIR__ . '/../modules/footer.php'; ?>