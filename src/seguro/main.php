<?php

require_once "config.php";

require_once "db.php";



function debug($msg){
	if(AMB == "dev"){
		echo "<br>(Debug) $msg <br>";
	}
}

function filtro($in){	

	return filter_var($in, FILTER_SANITIZE_STRING);

	/* 
	* Fontes:
	* http://php.net/filter.filters
	* http://www.phpit.com.br/artigos/filtrando-e-validando-dados-no-php-com-filter_var.phpit
	* http://php.net/manual/en/filter.filters.sanitize.php
	*/
}