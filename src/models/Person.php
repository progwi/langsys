<?php
class Person
{
	private static $nextId = 1;
	private $id;
	private $firstName;
	private $lastName;
	private $user;

	public function __construct($firstName, $lastName, User $user)
	{
		$this->id = $this::$nextId++;
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->user = $user;
	}

	public function getId()
	{
		return $this->id;
	}

	public function getFirstName()
	{
		return $this->firstName;
	}

	public function getLastName()
	{
		return $this->lastName;
	}

	public function getUser()
	{
		return $this->user;
	}

	public function setFirstName($firstName)
	{
		$this->firstName = $firstName;
	}

	public function setLastName($lastName)
	{
		$this->lastName = $lastName;
	}

	public function setUser(User $user)
	{
		$this->user = $user;
	}

	public function __toString()
	{
		return $this->firstName . ' ' . $this->lastName . ' who is ' . $this->user->maxRole();
	}
}
