<?php require_once __DIR__ . '/../modules/header.php'; ?>
<main>
    <div class="container flex">
        <?php require_once __DIR__ . '/../modules/sidebar.php'; ?>
        <div class="content">
            <h1>While</h1>
            <p>
                <?php
                $i = 1;
                while ($i <= 20) {
                    if ($i % 2) {
                        echo $i . ' - odd <br>';
                    } else {
                        echo $i . ' - even <br>';
                    }
                    $i++;
                }
                ?>
            </p>
        </div>
    </div>
</main>
<?php require_once __DIR__ . '/../modules/footer.php'; ?>