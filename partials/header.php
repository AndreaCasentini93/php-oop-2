<?php
    require_once __DIR__ . '/../classes/Client.php';
    require_once __DIR__ . '/../scripts/user-database.php';
?>

<header class="position-fixed d-flex justify-content-between align-items-center">
    <a href="#">
        <img src="images/amazon.png" alt="logo amazon">
    </a>
    <span>
        Ciao<br><a href="#"><?= $client->getFullName(); ?></a>
    </span>
</header>