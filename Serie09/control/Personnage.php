<?php
class Personnage
{
	private $_force;
	private $_localisation;
	private $_experience;
	private $_degats;

	public function __construct($force, $degats){
		$this->setForce($force); 
		$this->setDegats($degats);
		$this->_experience = 1 ; 
	}


	public function afficherExperience(){
		echo $this->_experience;
	}

	public function gagnerExperience(){

		$this->_experience = $this->_experience + 1;
	}


	public function setForce($force){
		if (!is_int($force))
		{
			trigger_error('La force d\'un personnage doit être un nombre entier', E_USER_WARNING);
			return;
		}

		if ($force > 100) 
		{
			trigger_error('La force d\'un personnage ne peut dépasser 100', E_USER_WARNING);
			return;
		}

		$this->_force = $force;
	}
	public function setDegats($degats){
		if (!is_int($degats))
		{
			trigger_error('Le niveau de dégâts d\'un personnage doit être un nombre entier', E_USER_WARNING);
			return;
		}

		$this->_degats = $degats;
	}

	public function augmenterDegats($degats){
		if (!is_int($degats))
		{
			trigger_error('Le niveau de dégâts d\'un personnage doit être un nombre entier', E_USER_WARNING);
			return;
		}

		$this->_degats += $degats;
	}

	public function frapper($persoAFrapper){
		$persoAFrapper->augmenterDegats($this->_force);
	}


	public function getForce(){
		return $this->_force;
	}

	public function getDegats(){
		return $this->_degats;
	}

	public function getExperience(){
		return $this->_experience;
	}  
	public function getLocalisation(){
		return $this->_localisation;
	}


}