<?php
    require_once __DIR__ . '/../classes/Client.php';
    require_once __DIR__ . '/../scripts/user-database.php';
?>

<header class="position-fixed d-flex align-items-center">
        <?= $client->getFullName(); ?>
</header>