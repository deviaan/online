<?php

$pdo = new PDO(
    'mysql:dbname=' . $_ENV["MYSQL_DATABASE"] . ';host=mysql',
    $_ENV["MYSQL_USER"],
    $_ENV["MYSQL_PASSWORD"],
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);