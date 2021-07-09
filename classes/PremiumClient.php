<?php
    require_once __DIR__ . '/Client.php';

    class PremiumClient extends Client {
        private $discount;
    }

    $client = new PremiumClient("Pinco", "Pallino", "PincoPallo", "Via Vecchia 19", "pincopallo@email.com");
    var_dump($client);

?>