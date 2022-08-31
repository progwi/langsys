<?php

require_once __DIR__ . '/models/User.php';
require_once __DIR__ . '/models/Role.php';
require_once __DIR__ . '/models/Person.php';

// First, we take the roles.json file which contains a list of roles, and proccess each
$roles = [];
$initialRoles = json_decode(file_get_contents(__DIR__ . '/models/roles.json'), true);
foreach ($initialRoles as $role) {
	$roles[] = new Role($role['id'], $role['name']);
}

// Then, we take the users.json file which contains a list of users, and proccess each
$users = [];
$initialUsers = json_decode(file_get_contents(__DIR__ . '/models/users.json'), true);
foreach ($initialUsers as $user) {
	$newUser = new User($user['name'], $user['email'], $user['password']);

	foreach ($user['roles'] as $role) {
		$newUser->addRole($roles[$role]);
	}

	$newPerson = new Person($user['person']['firstName'], $user['person']['lastName'], $newUser);

	$newUser->setPerson($newPerson);

	$users[] = $newUser;
}

// Lastly we show the added users

foreach ($users as $user) {
	echo $user->getPerson() . PHP_EOL;
}

//$usuario2 = new User('mscheffer', 'mscheffer@gmail.com', '123456');
//$usuario2->addRole($role1);
//$usuario2->addRole($roles[2]);
//$usuario2->addRole($roles[3]);

//$maru = new Person('Maru', 'Scheffer', $usuario2);

//echo 'Created user ' . $maru . "\n";
