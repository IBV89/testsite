<?php

require_once __DIR__ . '/classes/DB.php';
require_once __DIR__ . '/includes/config.php';

$db = new DB($dsn, $user, $pass);

$sql = 'CREATE TABLE IF NOT EXISTS about (
        title VARCHAR(100) NOT NULL,
        text TEXT NOT NULL
)';

$sql2 = 'CREATE TABLE IF NOT EXISTS photo (
        id SERIAL NOT NULL,
        title VARCHAR (100) NOT NULL
)';

$sql3 = 'CREATE TABLE IF NOT EXISTS book (
        id SERIAL NOT NULL,
        name VARCHAR (100) NOT NULL,
        text VARCHAR (200) NOT NULL 
)';

$db->execute($sql);
$db->execute($sql2);
$db->execute($sql3);
