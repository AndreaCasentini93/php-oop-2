<?php
    require_once __DIR__ . '/../classes/Client.php';
    require_once __DIR__ . '/../scripts/user-database.php';
?>

<header>
        <?= $client->getFullName() ?>
</header>