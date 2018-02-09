<?php 

class form{
	private this->monForm = '';

	public function __construct($name,$method,$action,$onsubmit,$legend){
		this->monForm='<form name="'.$name.'" method="'.$method.'" action="'.$action.'" onsubmit="'.$onsubmit.'">';
		this->monForm.='<fieldset><legend>'.$legend.'</legend>';
	}

	public function getForm(){
		this->endForm();
		return this->monForm;
	}

//Fonction qui permet d'ajouter une zone de texte
	public function setText($label,$name,$id,$param)
	{	
		
		this->monForm.='<label for="'.$id.'">'.$label.' </label>';
		this->monForm.='<input type="text" name="'.$name.'" id="'.$id.'"/><br/>';
		this->monForm.='<br/>';
		
	}
	
//Fonction supplémentaire qui permet d'ajouter du texte
	public function setText2($label,$param)
	{	
		
		this->monForm.= $label;
		this->monForm.='<br/>';
		
	}
	
//Fonction qui permet d'ajouter un bouton radio
	public function setRadio($label,$name,$id,$param)
	{
		
		this->monForm.='<input type="radio" name="'.$name.'" value="'.$id.'" id="'.$id.'"/>';
		this->monForm.='<label for="'.$id.'">'.$label.' </label><br/>';
		
	}

//Fonction qui permet d'ajouter une case a cocher
	public function setCheckbox($label,$name,$param)
	{
		
		this->monForm.='<input type="checkbox" name="'.$name.'" value="'.$name.'" id="'.$name.'" />';
		this->monForm.='<label for="'.$name.'">'.$label.'</label><br/>';
			
	}
	
//Fonction qui permet d'ajouter un bouton d'envoi
	public function setSubmit($name,$value,$param)
	{
		
		this->monForm.='<br/><input type="submit" name="'.$name.'" value="'.$value.'"/>';
		
	}

//Fonction qui permet d'ajouter un bouton reset
	public function setReset($name,$value,$param)
	{
		
		this->monForm.='  <input type="reset" name="'.$name.'" value="'.$value.'"/>';
		
	}
	
//Fonction qui permet d'ajouter un bouton simple
	public function setButton($name,$value,$retour,$param)
	{
		
		this->monForm.=' <input type="button" name="'.$name.'" value="'.$value.'" onclick="'.$retour.'" />';
		
	}

//Fonction qui permet de fermer le formulaire
	public function endForm()
	{
		this->monForm.='</fieldset></form>';
		
	}

}

?>