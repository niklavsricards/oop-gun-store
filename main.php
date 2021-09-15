<?php

require_once 'Gun.php';
require_once 'LightPistol.php';
require_once 'HeavyWeapon.php';
require_once 'ListedItem.php';
require_once 'GunStore.php';
require_once 'Customer.php';

$store = new GunStore([
    new ListedItem(
        new Gun('glock', 'lightgunlicense123'), 100, 5
    ),
    new ListedItem(
        new HeavyWeapon('AK-47', 'heavygunlicense321'), 500, 10
    ),
    new ListedItem(
        new LightPistol('Electric gun', 'electricgunlicense'), 1000, 2
    )
]);

$customer = new Customer('John The Gunman', 1000);

