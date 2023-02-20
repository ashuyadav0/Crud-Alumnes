<?php
	# CONTROLADOR
	# Punt d'entrada de l'aplicació
	session_start();
	# Inclou fitxer de configuració i utilitats
    require_once 'configBD.php';	
    require_once 'utilsBD.php';
	require_once 'utils.php';
	

	// Operació per defecte llistatAlumnes
	$operacio = "llistatAlumnes";

	# Comprova si s'envia alguna operació
	if (isset($_REQUEST['operacio'])) {
		$operacio = $_REQUEST['operacio'];
	}
	
	
	try {
    # Crea la connexió
    connectarBD();
		
		switch($operacio){
			case "llistatAlumnes":	
				# Obté el llistat d'alumnes
				$alumnes = llistatAlumnes();


				# Crida a la vista per mostrar el llista d'alumnes
				require_once './llistatAlumnes.php';
				break;
				
			case "dadesAlumnes":
				# Obtenir l'id de l'alumne
				# Comprova que hi haigi idAlumne a la petició
				if(!isset($_REQUEST['idAlumne'])){
					# No hi ha alumnes a la petició ---> ERROR
					alertErr("No hi ha id de l'alumne a la petició", "index.php");
				} else {
					# Si hi ha l'alumne l'agafa
					$idAlumne = $_REQUEST["idAlumne"];
								
					# Cosultar les dades de l'alumne
					$alumnes = dadesAlumnes($idAlumne);
					
					# Cridar a la vista que mostra les dades de l'alumne
					require_once './dadesAlumnes.php';
				}
				
				break;
				
			case "eliminarAlumne":
				if(isset($_REQUEST['id'])){

					$idAlumne = $_REQUEST['id'];

					# Elimino alumno de la BD
					eliminarAlumne($idAlumne);

					# Activo el interruptor FLAG, si existe, activa interruptor en otra página.
					$_SESSION['missatge'] = 'Alumne eliminat correctament!!<br>';

					# Recargo Página
					header("location:./");                    

				} else {
					#No hay alumno en la petición
					   alertErr("No hi hi alumne!!", "index.php");           
				}
				break;
			case "nouAlumne":
				echo "nouAlumne";
				break;
				
			case "editarAlumne":
				if(isset($_REQUEST['id'])){

            $idAlumne = $_REQUEST['id'];

            # Consultar datos alumno
            $alumnes = dadesAlumnes($idAlumne);

            # Llamo a la pagina de edición
            require_once 'modificarAlumne.php';
        
            
        } else {
            ?>

            <script>
                alert("¡No hay ID de alumno!"); 
                location.href="index.php"
            </script>
            <?php                    
        }
				break;
				
			case "modificarAlumne":
				if(isset($_POST['nom']) && isset($_POST['cognom1']) && isset($_POST['curs']) && isset($_POST['treballa'])){
					$idAlumne = $_REQUEST['id'];
					$nom = getFormValue('nom');
					$cognom1 = getFormValue('cognom1');
					$cognom2 = getFormValue('cognom2');
					$telefon = getFormValue('telefon');
					$data = $_REQUEST['dataNaixement'];
					$curs = $_REQUEST['curs'];
					$email = getFormValue('email');
					$estudis = "";
					if (!(empty($_POST['estudis']))) {
						$estudisArray = $_POST['estudis'];
						$estudis = implode(',',$estudisArray);
					} 
					$treballa = $_REQUEST['treballa'];
					$observacions = getFormValue('observacions');
					
					}
				
				modificarAlumne($idAlumne, $nom, $cognom1, $cognom2, $telefon, $data, $curs, $email, $treballa, $estudis, $observacions);
				
				# Cargo el llistatAlumnes
				$alumnes = llistatAlumnes();
				
				#Torno a cargar la nova pàgina llistat
				include_once 'llistatAlumnes.php';
				
				break;
			
			default:
				# Operació no vàlida
			//alertJS("Operació no valdia!", "index.php");
		}
	} catch (Exception $e){
		echo "ERROR: " . $e->getMessage();
	}