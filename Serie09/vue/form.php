<?php 

class form{
	private $monForm = '';
	private $classeBootstrap = '';

	public function __construct($pName,$pMethod,$pAction,$pOnsubmit='',$pLegend=''){
		$this->monForm='<form name="'.$pName.'" method="'.$pMethod.'" action="'.$pAction.'" onsubmit="'.$pOnsubmit.'">';
		$this->monForm.='<fieldset><legend>'.$pLegend.'</legend>';
	}

	public function getForm(){
		$this->endForm();
		return $this->monForm;
	}

//Fonction qui permet d'ajouter une zone de texte
	public function addEmail($pLabel,$pName,$pId,$pParam='',$pRequired=false , $pPlaceholder='' , $pValue='')
	{	
		
		$this->monForm.='<label for="'.$pId.'">'.$pLabel.' </label>';
		$this->monForm.='<input class= "'.$this->classeBootstrap.'" type="email" name="'.$pName.'" id="'.$pId.'" '.$this->getRequired($pRequired).' placeholder="'.$pPlaceholder.'" value = "'.$pValue.'"/><br/>';
		$this->monForm.='<br/>';
		
	}

	private function getRequired($pRequired){
		if($pRequired==true){
			return 'required';
		}
		else{
			return '';
		}
	}

	public function addText($pLabel,$pName,$pId,$pParam='',$pRequired=false , $pPlaceholder='' , $pValue='')
	{	
		
		$this->monForm.='<label for="'.$pId.'">'.$pLabel.' </label>';
		$this->monForm.='<input class= "'.$this->classeBootstrap.'" type="text" name="'.$pName.'" id="'.$pId.'" '.$this->getRequired($pRequired).' placeholder="'.$pPlaceholder.'" value = "'.$pValue.'"/><br/>';
		$this->monForm.='<br/>';
		
	}

	public function addPassword($pLabel,$pName,$pId,$pParam='',$pRequired=false , $pPlaceholder='' , $pValue='')
	{	
		$this->monForm.='<label for="'.$pId.'">'.$pLabel.' </label>';
		$this->monForm.='<input class= "'.$this->classeBootstrap.'" type="password" name="'.$pName.'" id="'.$pId.'" '.$this->getRequired($pRequired).' placeholder="'.$pPlaceholder.'" value = "'.$pValue.'"/><br/>';
		$this->monForm.='<br/>';
	}
	
//Fonction supplémentaire qui permet d'ajouter du texte
	public function addText2($pLabel,$pParam)
	{	
		
		$this->monForm.= $pLabel;
		$this->monForm.='<br/>';
		
	}
	
//Fonction qui permet d'ajouter un bouton radio
	public function addRadio($pLabel,$pName,$pId,$pParam)
	{
		
		$this->monForm.='<input class= "'.$this->classeBootstrap.'" type="radio" name="'.$pName.'" value="'.$pId.'" id="'.$pId.'"/>';
		$this->monForm.='<label for="'.$pId.'">'.$pLabel.' </label><br/>';
		
	}

//Fonction qui permet d'ajouter une case a cocher
	public function addCheckbox($pLabel,$pName,$pParam)
	{
		
		$this->monForm.='<input class= "'.$this->classeBootstrap.'" type="checkbox" name="'.$pName.'" value="'.$pName.'" id="'.$pName.'" />';
		$this->monForm.='<label for="'.$pName.'">'.$pLabel.'</label><br/>';
			
	}
	
//Fonction qui permet d'ajouter un bouton d'envoi
	public function addSubmit($pName,$pValue,$pParam=null)
	{
		
		$this->monForm.='<br/><input class= "'.$this->classeBootstrap.'" type="submit" name="'.$pName.'" value="'.$pValue.'"/>';
		
	}

//Fonction qui permet d'ajouter un bouton reset
	public function addReset($pName,$pValue,$pParam)
	{
		
		$this->monForm.='  <input class= "'.$this->classeBootstrap.'" type="reset" name="'.$pName.'" value="'.$pValue.'"/>';
		
	}
	
//Fonction qui permet d'ajouter un bouton simple
	public function addButton($pName,$pValue,$pRetour,$pParam)
	{
		
		$this->monForm.=' <input class= "'.$this->classeBootstrap.'" type="button" name="'.$pName.'" value="'.$pValue.'" onclick="'.$pRetour.'" />';
		
	}

//Fonction qui permet de fermer le formulaire
	private function endForm()
	{
		$this->monForm.='</fieldset></form>';
		
	}

}

?>