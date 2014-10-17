<?php


class animals
{
	protected $species;
	protected $legs = 4;
	protected $nose = 1;
	protected $eyes = 2;
	
	protected function _construct() 
	{
		echo 'Your Species has been Registered';
	}

	
}


class dog extends animals
{
	
	protected function _construct($species, $legs, $nose, $eyes) 
	{
		parent::_construct();
		$this->species = $species;
		$this->legs = $legs;
		$this->nose = $nose;
		$this->eyes = $eyes;
	}
	
	
	
}

$animal = new dog('pitbull', 6, 2, 3);



?>
