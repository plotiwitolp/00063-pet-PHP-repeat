<?php require_once __DIR__ . '/../modules/header.php'; ?>
<main>
    <div class="container flex">
        <?php require_once __DIR__ . '/../modules/sidebar.php'; ?>
        <div class="content">
            <h1>For</h1>
            <p>
                <?php
                for ($i = 0; $i < 10; $i++) {
                    echo "<div class='test-block'>
                        {$i} Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum suscipit facilis laudantium consequuntur culpa hic deserunt quaerat enim velit, qui incidunt ex perspiciatis voluptatem magnam neque nihil modi voluptates obcaecati
                        </div>";
                }
                ?>
            </p>
        </div>
    </div>
</main>
<?php require_once __DIR__ . '/../modules/footer.php'; ?>