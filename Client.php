<?php

class Client{
	
	private $nom;
	private $adresse;
	private $contact;
	private $age;
	
	//le constructeur de la classe
	function __construct($nom, $adresse, $contact, $age = 0){
		
		$this->nom = $nom;
		$this->adresse = $adresse;
		$this->contact = $contact;
		$this->age = isset($age) ? $age : 0;
	}
	
	//afficher les infos d'un client
	
	public function afficherClient(){
		
		return "<h3>Infos sur le client : </h3><hr/> <p>Nom : ".
		$this->nom. "<br/>Adresse : ".
		$this->adresse. "<br/>Contact : ".
		$this->contact."</p>";

	}
}

