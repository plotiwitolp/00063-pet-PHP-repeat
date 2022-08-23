<?php require_once __DIR__ . '/assets/modules/header.php'; ?>
<main>
    <div class="container flex">
        <?php require_once __DIR__ . '/assets/modules/sidebar.php'; ?>
        <div class="content">
            <h1>Главная страница</h1>
            <p>
            <h2>Данные с сайдбара:</h2>
            <span class="sum">text1: <?= $_GET["text1"] ?></span>
            <span class="sum">text2: <?= $_GET["text2"] ?></span>
            <span class="sum">text3: <?= $_GET["text3"] ?></span>
            <span class="sum">checkbox1: <?= $_GET["checkbox1"] ?></span>
            <span class="sum">checkbox2: <?= $_GET["checkbox2"] ?></span>
            </p>
        </div>
    </div>
</main>
<?php require_once __DIR__ . '/assets/modules/footer.php'; ?>