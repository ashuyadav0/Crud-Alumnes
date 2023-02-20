<?php

    ##########################################################################
    #
    #  Pàgina que connecta amb la BD alumnes amb PDO
    #
    #########################################################################


    #################### CREAR LA CONNEXIÓ ####################
	require_once'configBD.php';
	require_once'utilsBD.php';
   
# Crea la connexió dintre d'un bloc try-catch, per capturar l'excepció si hi ha algun error
    try {
       $conn =connectarBD();
        # Si no hi ha error, mostra el missatge i acaba l'script.
        # Si hi ha error, "salta" al catch
        echo "Connected successfully";
    }
    catch(Exception $e){
        # Captura l'excepció a la variable $e
        # De l'excepció ens interessa el missatge de l'error que s'ha generat: $e->getMessage()
        echo "Connection failed: " . $e->getMessage();
	}
?>


