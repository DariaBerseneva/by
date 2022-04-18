<?php

require_once 'quackbehavior.php';

class muteqack implements quackbehavior {
public function qack(){
	echo "я в муте!<br>";}
}

?>