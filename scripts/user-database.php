<?php
    require_once __DIR__ . '/../classes/Client.php';

    $user = [
        "name" => "Andrea",
        "surname" => "Casentini",
        "username" => "AndreaCasentini",
        "address" => "Via di Ponente 85 Roma",
        "email" => "andrea.casentini@email.com",
        "password" => "abcdefg123456",
        "age" => 28,
        "fiscal_code" => "CSNNDR93B23L719H"
    ];

    $client = new Client($user["name"], $user["surname"], $user["username"], $user["address"], $user["email"],$user["password"] , $user["age"]);
    $client->setFiscalCode($user["fiscal_code"])

?>