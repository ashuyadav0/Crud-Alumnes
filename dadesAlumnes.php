<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PDO - Dades alumne</title>
  <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
 
</head>
<body>
 
 
    <!-- container -->
    <div class="container">
  
        <div class="page-header">
            <h1>Dades Alumne</h1>
        </div>
	<?php
	if (!empty($alumnes)){
		extract($alumnes);
		?>
         
       <table class="table table-hover table-responsive table-bordered">
           <tr>
               <td>ID</td>
               <td><?php echo $id ?></td>
           </tr>
           <tr>
               <td>Nom</td>
               <td><?php echo $nom ?></td>
           </tr>
           <tr>
               <td>Cognom1</td>
               <td><?php echo $cognom1 ?></td>
           </tr>
		   <tr>
               <td>Cognom2</td>
               <td><?php echo $cognom2 ?></td>
           </tr>
           <tr>
               <td>Telefon</td>
               <td><?php echo $telefon ?></td>
           </tr>
           <tr>
               <td>Data de Naixement</td>
               <td><?php echo $dataNaixement ?></td>
           </tr>
		   <tr>
               <td>Curs</td>
               <td><?php echo $curs ?></td>
           </tr>
           <tr>
               <td>Email</td>
               <td><?php echo $email ?></td>
           </tr>
           <tr>
               <td>Foto</td>
               <td><img src="default.png" width="50"></td>
           </tr>
           <tr>
               <td>Treballa</td>
               <td><?php echo $treballa ?></td>
           </tr>
           <tr>
               <td>Estudis</td>
               <td><?php echo $estudis ?></td>
           </tr>
		   <tr>
               <td>Observacions</td>
               <td><?php echo $observacions ?></td>
           </tr>
           <tr>
               <td></td>
               <td>
                   <a href="index.php" class="btn btn-primary">Tornar a la pàgina principal</a>
               </td>
           </tr>
       </table>
    </div> <!-- end .container -->
	<?php
	
	} else {
		?>
	<script>
		alert('No hi ha dades per aquest alumne!')
		location.href="index.php";
	</script>
	
	<?php
	}
	?>
	
     
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   
<!-- Latest compiled and minified Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
</body>
</html>