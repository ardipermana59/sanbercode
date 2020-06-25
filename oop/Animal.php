<?php 


class Animal {
	private $name;
	private $legs;
	private $cold_blooded;

	public function __construct($name = 'name animal', $legs = 2, $cold_blooded = 'false')
	{
		$this->name = $name;
		$this->legs = $legs;
		$this->cold_blooded = $cold_blooded;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setName($name)
	{
		$this->name = $name;
	}

	public function getLegs()
	{
		return $this->legs;
	}

	public function setLegs($legs)
	{
		$this->legs = $legs;
	}

	public function getColdBlooded()
	{
		return $this->cold_blooded;
	}

	public function setColdBlooded($coldBlooded)
	{
		$this->cold_blooded = $coldBlooded;
	}

}