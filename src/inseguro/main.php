<?php

require_once "config.php";

require_once "db.php";



function debug($msg){
	if(AMB == "dev"){
		echo "<br>(Debug) $msg <br>";
	}
}