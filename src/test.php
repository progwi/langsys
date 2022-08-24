<?php

require_once __DIR__ . '/models/User.php';
require_once __DIR__ . '/models/Role.php';
require_once __DIR__ . '/models/Person.php';

$role0 = new Role(0, 'guest');
$role1 = new Role(1, 'student');
$role2 = new Role(2, 'professor');
$role3 = new Role(3, 'admin');
$role4 = new Role(4, 'developer');

$usuario2 = new User('mscheffer', 'mscheffer@gmail.com', '123456');
//$usuario2->addRole($role1);
$usuario2->addRole($role2);
//$usuario2->addRole($role4);

$maru = new Person('Maru', 'Scheffer', $usuario2);

echo 'Created user ' . $maru . "\n";