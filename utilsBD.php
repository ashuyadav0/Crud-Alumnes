<?php
#############################################################################
#
#	Libreria de funcions que treballen amb la BD
#	  MODEL del MVC (Model, Vista, Controlador)
#
#############################################################################

# Crea la variable local que represnta la connexió
# Inicialment a null per indiacar que no hi ha connexió
$conn = null;

# Funció que crea uan connexió amb la BD
function connectarBD(){
	global $conn;
	try{
		# Crea una connexió amb la BD i la guarda a la variable $con. 
		# Tècnicament: crea un objecte de la classe PDO
		$conn = new PDO(DSN, USER_NAME, PASSWORD);


		# Opció de la connexió que si hi ha algun error a l'excutar alguna sentència SQL, 
		# PDO llença una PDOException amb el missatge de l'error que s'ha produït.    
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e){
		throw new Exception("ERROR al crear la BD: ".  $e->getMessage());
	}

}
/**
 * Funció que retorna una array amb les dades dels alumnes
 *

 * @return array Array amb les dades dels alumnes
 */ 

function llistatAlumnes(){
	global $conn;
	 # Codi SQL de la consulta
    $selectAlumnes ="SELECT id, nom, cognom1, curs
                     FROM alumnes";
    
	try{
		# Executa la consulta 
		$resultat = $conn->query($selectAlumnes);

		$retorn = $resultat->fetchAll(PDO::FETCH_ASSOC);

		return $retorn;
	} catch(PDOException $e){
		throw new Exception("ERROR al llistat alumnes: ".  $e->getMessage());
	}
}

/**
 * Funció que retorna una array amb les dades dels alumnes
 * @param integer $idAlumne id de l'alumne del que es volen obtenir les dades 
 * @return array Array amb les dades de l'alumne
 */ 
function dadesAlumnes($idAlumne){
	global $conn;
	
	 # Codi SQL de la consulta
    $selectAlumnes ="SELECT *
                     FROM alumnes
					 WHERE id=:idAlumne"; # Parametre de la consulta
    
	try{
		# Prepara la consulta
		$preparedSelect = $conn->prepare($selectAlumnes); 
		
		# Executa la consulta 
		$preparedSelect->execute(array("idAlumne"=>$idAlumne));

		$retorn = $preparedSelect->fetch(PDO::FETCH_ASSOC);
		return $retorn;
		
	} catch(PDOException $e){
		throw new Exception("ERROR dades alumnes: ".  $e->getMessage());
	}
	
}

/**
      * Función que elimina un alumno de la BD
      * @param int @idAlumne id del alumno que se quiere elimnar     
      */

    function eliminarAlumne($idAlumne) {

        # Cojo la variable global en php
        global $conn;
        
         # Código SQL de la consulta al poner :idAlumne, estoy indicando que es un parámetro que añadiré luego.
        $delete ="DELETE FROM alumnes 
                        WHERE ID = :idAlumne"; # En forma :parametro

        # La consulta puede dar error, por ello:
        try{
            # Preparo el delete
            $preparedDelete = $conn->prepare($delete);
            
            # Executa el delete
            $preparedDelete->execute( array( 'idAlumne' => $idAlumne) );

        } catch(PDOException $e){
            throw new Exception("ERROR datos alumno: ". $e->getMessage());
        }
        
    }

	function modificarAlumne ($id, $nom, $cognom1, $cognom2, $telefon, $dataNaixement, $curs, $email, $treballa, $estudis, $observacions) {

			global $conn;
			
			# Codi SQL de la consulta
			$update ="UPDATE alumnes
					  SET nom = :nom, cognom1 = :cognom1, cognom2 = :cognom2, telefon = :telefon, dataNaixement = :dataNaixement, curs = :curs, email = :email, treballa = :treballa, estudis = :estudis, observacions = :observacions
					  WHERE id = :id;";

			try {
				# Preparar update
				$prepareUpdate = $conn->prepare($update);

				# Executa el update
				$prepareUpdate -> execute(array("id"=>$id, "nom"=>$nom, "cognom1"=>$cognom1, "cognom2"=>$cognom2, "telefon"=>$telefon, "dataNaixement"=>$dataNaixement, "curs"=>$curs, "email"=>$email, "treballa"=>$treballa, "estudis"=>$estudis, "observacions"=>$observacions));
				

			} catch (Exception $ex) {
				throw new Exception("Err editar Alumne ".$ex->getMessage());
			}
		}


?>