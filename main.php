<?php

require_once 'Gun.php';
require_once 'GunStore.php';

$store = new GunStore([
    new Gun('AK-47', 'heavyWeapon123'),
    new Gun('Glock', 'lightPistol123'),
    new Gun('Shotgun', 'heavyWeapon123')
]);

$store->listAllGuns();