<?php

require_once __DIR__ . '/models/User.php';
require_once __DIR__ . '/models/Role.php';
require_once __DIR__ . '/models/Person.php';

$roles = [];
$initialRoles = json_decode(file_get_contents(__DIR__ . '/models/roles.json'), true);

foreach ($initialRoles as $role) {
	$roles[] = new Role($role['id'], $role['name']);
}

$usuario2 = new User('mscheffer', 'mscheffer@gmail.com', '123456');
//$usuario2->addRole($role1);
$usuario2->addRole($roles[2]);
$usuario2->addRole($roles[3]);

$maru = new Person('Maru', 'Scheffer', $usuario2);

echo 'Created user ' . $maru . "\n";
