<?php

class User
{
	private static $nextId = 1;
	private $id;
	private $name;
	private $email;
	private $password;

	private $roles = [];

	public function __construct($name, $email, $password)
	{
		$this->id = $this::$nextId++;
		$this->name = $name;
		$this->email = $email;
		$this->password = $password;
	}

	public function getId()
	{
		return $this->id;
	}

	public function getName()
	{
		return $this->name;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function setPassword($password)
	{
		$this->password = $password;
	}

	public function setName($name)
	{
		$this->name = $name;
	}

	public function setEmail($email)
	{
		$this->email = $email;
	}

	public function addRole(Role $role)
	{
		$this->roles[] = $role;
	}

	public function maxRole()
	{
		$max = 0;
		$maxRole = null;
		foreach ($this->roles as $role) {
			if ($role->getId() > $max) {
				$max = $role->getId();
				$maxRole = $role;
			}
		}
		return $maxRole;
	}
}
