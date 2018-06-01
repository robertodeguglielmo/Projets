<?php
class Control_util
{
	public function __construct(){

	}

	public static function isAjax(){
		if (!(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' )) {
			return true;
		}else{
			return false;
		}

	}
}

?>