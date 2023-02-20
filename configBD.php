<?php

 #################### PARÀMETRES DE LA CONNEXIÓ ####################
    # Connecta amb la BD M2 MySQL local

    # Nom del servidor local
	switch ($_SERVER['SERVER_NAME']){
		case "localhost":
			define("USER_NAME", "root");
			define("PASSWORD", "");
			define("SERVER_NAME", "localhost");
			define("DB_NAME", "alumnes");
			break;
		case "phpashu.rf.gd":
			define("USER_NAME", "epiz_30985883");
			define("PASSWORD", "Nz5meTF30I");
			define("SERVER_NAME", "sql301.epizy.com");
			define("DB_NAME", "epiz_30985883.alumne");
			break;
	}

	# Usuari i conytasenya locals
	//define("USER_NAME", "root");
	//define("PASSWORD", "");

	# Base de dades
	#define("DB_NAME", "");

    # Data Source Name: string de conneció creat a partir dels valors anteriors
    # Molt important charset: indica codificació amb que s'envia o es rep 
    # dades de la BD
    define("DSN", "mysql:host=". SERVER_NAME . ";dbname=" . DB_NAME . ";charset=utf8mb4");   


?>