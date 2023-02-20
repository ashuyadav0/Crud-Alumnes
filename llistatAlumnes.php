<?php

    ##################################################################
    #
    # LLISTAT ALUMNES versió 1
    # 
    #################################################################
	
	# dispatcher deixa a la variable $alumnes les dades dels alumnes
	if(empty($alumnes)){
		echo "No hi ha alumnes !!!!!!!!!!!!!!!!!!!!!!!!!!!!";
	} else {	
		
	?>

	<!--<h2> Alumnes <?php echo(count($alumnes)) ?> </h2> -->
<?php

            # Comprueba si alguna acción ha dejado alguún mensaje
            if(isset($_SESSION['mensaje'])){ 
                # Muestro el mensaje
                echo $_SESSION['mensaje'];
                # Deshabilito el mensaje, si recargo, no sale.
                unset($_SESSION['mensaje']);
            }
            ?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
    <title>Alumnes APP</title>
     
    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
         
    <!-- custom css -->
    <style>
    .m-r-1em{ margin-right:1em; }
    .m-b-1em{ margin-bottom:1em; }
    .m-l-1em{ margin-left:1em; }
    .mt0{ margin-top:0; }
    </style>
 
</head>
<body>
 
    <!-- container -->
    <div class="container">
  
        <div class="page-header">
            <h1>Alumnes APP</h1>
        </div>
     
        <!-- PHP code to read records will be here -->
        <a href="dispatcher.php?operacio=formAlta" class="btn btn-success">
			<span class="glyphicon glyphicon-user"></span>&nbsp;Nou Alumne
		</a><br><br>
		
		<table class="table table-hover table-responsive table-bordered">
			<!-- Primera fila amb les capçaleres de les columnes -->
			<tr>
				<th>ID</th>
				<th>Nom</th>
				<th>Primer cognom</th>
				<th>Curs</th>
                <th>Acció</th>                
			</tr>
			
			<!-- Files amb les dades dels productes -->
			<?php
			foreach($alumnes as $alumne){
			extract($alumne); # Crea les variables $id, ..., $curs
				?>
			<tr>
				<td><?php echo $id ?></td>
				<td><?php echo $nom ?></td>
				<td><?php echo $cognom1 ?></td>
				<td><?php echo $curs ?></td>
                <td>
					<!--Mostrar Dades -->
                    <a href="./?idAlumne=<?php echo $id?>&operacio=dadesAlumnes" class="btn btn-info">
						<span class="glyphicon glyphicon-eye-open"></span>&nbsp;Veure Alumne
					</a>
					
					<!--Modificar Dades -->
					<a href="./?operacio=editarAlumne&id=<?php echo $id?>" class="btn btn-primary">
						<span class="glyphicon glyphicon-pencil"></span>&nbsp;Modificar
					</a>
					
					<!--Eliminar Dades -->
					<button type="button" class="btn btn-danger" onclick="confirmarEliminacio(<?php echo $id ?>, 
                                                                                                    '<?php echo $nom ?>', 
                                                                                                    '<?php echo $cognom1 ?>', 
                                                                                                    '<?php echo $curs ?>')">
                                                                                                    <i class="bi bi-trash"></i>
                                                                                                    &nbsp;Eliminar
                    </button>  
			</tr>
	</td><?php
                    }
                }

                /*# Mostra el nombre de registres del resultat
                echo "<h2>" . $resultat->rowCount() . " alumnes</h2>";
                
                # Mostra els registres del resultat SOLO ARRAY ASOCIATIVO
                print_r(llistatAlumnes($conn));*/
                ?>
                        
            </table> 

            <script>
                function confirmarEliminacio(id, nom, cognom1, curs) {
                    confirmacio = confirm("CONFIRMAR ELIMINACIÓ“: \n\n\ " + 
                                            "\t ALUMNE: " + nom + " " + cognom1 + "\n" +
                                            "\t CURS:  " + curs);
                                        
                    if (confirmacio) {
                        location.href='./?id=' + id + '&operacio=eliminarAlumne';
                    } else {
                        alert("EP !!! NO ELIMINEM ALUMNE !");
                    }
                }
            </script>
    </div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   
<!-- Latest compiled and minified Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
</body>
</html>
