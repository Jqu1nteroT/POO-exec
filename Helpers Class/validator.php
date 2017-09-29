<?php

class Validator{

	public function checkChar($varChar){
		return is_string($varChar);
	}
	public function checkInt($varInt){
		return is_numeric($varInt);
	}
	public function checkFloat($varFloat){
		return is_float($varFloat);
	}

}

?>