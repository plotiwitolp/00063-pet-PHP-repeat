<?php require_once __DIR__ . '/../modules/header.php'; ?>
<main>
    <div class="container flex">
        <?php require_once __DIR__ . '/../modules/sidebars/sidebar1.php'; ?>
        <div class="content">
            <h1>БД SQL СУБД</h1>
            <p>
                <?php
                // 1
                // функция mysqli_connect соеднинения с БД
                // используя это соеднинение PHP отправляет или принимает комманды от БД
                // эта функция принимает 4 аргумента ('название-сервера', 'имя-пользователя', 'пароль', 'название-БД');
                $connection = mysqli_connect(
                    '127.0.0.1',
                    'root',
                    '',
                    'bd-00063'
                );
                if (!$connection) exit; // выйти, если не удалось соединиться
                // 2
                $result = mysqli_query($connection, "SELECT * FROM `articles`"); // сделать запрос в БД, получить всё из таблицы
                // echo 'Записей найдено: ' . mysqli_num_rows($result);

                // 3
                while ($r = mysqli_fetch_assoc($result)) { // проитерировать все имеющиеся результаты
                    foreach ($_GET as $value) {
                        if ($value == $r['categorie_id']) {
                            echo '<h2>' . $r['title'] . '</h2>' . '<p>' . $r['text'] . '</p>' . '<mybr>'; // вывести
                        }
                    }
                }
                mysqli_close($connection);
                ?>
            </p>
        </div>
    </div>
</main>
<?php require_once __DIR__ . '/../modules/footer.php'; ?>