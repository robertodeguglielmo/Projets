<?php 


	$out  = "";

	$titre= '<tr>';
	$titre_trt= false;

	foreach($Tabletest->data as $key => $element){
		$out .= '<tr id ="'.$element->ID.'"  >';
		foreach($element as $subkey => $subelement){
			if($titre_trt==false){
				$titre .= '<th>'.$subkey.'</th>' ;	
			}

			$out .= '<td id="'.$subkey.'">'.$subelement.'</td>' ;
		}
		if($titre_trt==false){
			$titre.=  '</tr>';
		}
		$titre_trt= true;
		$out .= "</tr>";
	}
	$out = '<table id ="utilisateurs" >'.$titre.$out.'</table>';

	echo $out;

?>