<?php
    require_once __DIR__ . '/../classes/Client.php';
    require_once __DIR__ . '/../scripts/user-database.php';
?>

<header class="position-fixed">
    <div class="container d-flex justify-content-between align-items-center">
        <a href="#">
            <img src="images/amazon.png" alt="logo amazon">
        </a>
        <span class="text-end">
            Ciao,<br><a href="#"><?= $client->getFullName(); ?></a>
        </span>
    </div>
</header>