<?php require_once __DIR__ . '/../modules/header.php'; ?>
<main>
    <div class="container flex">
        <?php require_once __DIR__ . '/../modules/sidebars/sidebar2.php'; ?>
        <div class="content">
            <h1>БД SQL СУБД repeat</h1>
            <p>
                <?php
                $connection = mysqli_connect(
                    '127.0.0.1',
                    'root',
                    '',
                    'bd-00063-2'
                );
                if (!$connection) exit;
                $day = mysqli_query($connection, "SELECT * FROM `day`");
                $persons = mysqli_query($connection, "SELECT * FROM `persons`");
                $id = [];
                $date = [];
                $week_day = [];
                $income = [];
                $expenditure = [];
                $budget = [];
                $presons_id = [];
                $name = [];
                $name_id = [];
                while ($r = mysqli_fetch_assoc($day)) {
                    array_push($id, $r['id']);
                    array_push($date, $r['date']);
                    array_push($week_day, $r['week_day']);
                    array_push($income, $r['income']);
                    array_push($expenditure, $r['expenditure']);
                    array_push($budget, $r['budget']);
                    array_push($presons_id, $r['persons_id']);
                }
                ?>
                <?php
                while ($r = mysqli_fetch_assoc($persons)) {
                    array_push($name, $r['name']);
                    array_push($name_id, $r['id']);
                ?>
                <?php
                }
                // mysqli_query($connection, "INSERT INTO `day` (`date`, `week_day`) VALUE ('2022-08-23', 'пн')");
                // mysqli_query($connection, "INSERT INTO `day` (`date`, `week_day`) VALUE ('2022-08-23', 'пн')");
                ?>
                <?php for ($i = 0; $i < count($id); $i++) { ?>
            <div>
                <span class="w100"><?= $date[$i] ?></span>
                <span class="w100"><?= $week_day[$i] ?></span>
                <span class="w100"><?= $income[$i] ?></span>
                <span class="w100"><?= $expenditure[$i] ?></span>
                <span class="w100"><?= $budget[$i] ?></span>
                <span class="w100"><?= ($presons_id[$i] ==  $name_id[0]) ? $name[0] : $name[1]; ?></span>
            </div>
        <?php } ?>
        </p>
        </div>
    </div>
</main>
<?php require_once __DIR__ . '/../modules/footer.php'; ?>