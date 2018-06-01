<?php 
	$out  = "";

	$titre= '<tr>';
	$titre_trt= false;

	foreach($Utilisateurs->data as $key => $element){
		$out .= '<tr id ="'.$element->utilisateur.'"  >';
		foreach($element as $subkey => $subelement){
			if($titre_trt==false){
				$titre .= '<th>'.$subkey.'</th>' ;	
			}

			$out .= '<td id="'.$subkey.'">'.$subelement.'</td>' ;
		}

		if($titre_trt==false){
			$titre.= '<th>Mod</th></tr>';
		}
		$titre_trt= true;
		$out .= '<td id="modifier" >Modifier</td></tr>';
	}
	$out = '<table id ="utilisateurs" >'.$titre.$out.'</table>';

	echo $out;

?>