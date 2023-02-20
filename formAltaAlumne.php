<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <title>Alta Alumnes</title>
 
  <!-- Latest compiled and minified Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
 
</head>
<body>
    <!-- container -->
    <div class="container">
  
        <div class="page-header">
            <h1>Nou Alumne</h1>
        </div>
         
        <!-- PHP read one record will be here -->
        
        <!-- HTML read one record table will be here -->
        <!--we have our html table here where the record will be displayed-->
		<form action="index.php" method="post">
       <table class="table table-hover table-responsive table-bordered">
           <tr>
               <td><label for="nom">Nom<span class="text-danger">*</span></label></td>
               <td><input type="text" class="form-control" id="nom" name="nom" value="Pepe" required></td>
           </tr>
           <tr>
               <td><label for="cognom1">Cognom1<span class="text-danger">*</span></label></td>
               <td><input type="text" class="form-control" id="cognom1" name="cognom1" value="Gotera" required></td>
           </tr>
		   <tr>
               <td><label for="cognom2">Cognom2</label></td>
               <td><input type="text" class="form-control" id="cognom2" name="cognom2" value=""></td>
           </tr>
		   <tr>
               <td><label for="telefon">Telèfon</label></td>
               <td><input type="number" class="form-control" id="telefon" name="telefon" value="97792932" required></td>
           </tr>
		   <tr>
               <td><label for="dataNaixement">Data de naixement</label></td>
               <td><input type="date" class="form-control" id="dataNaixement"  name="dataNaixement" value=""></td>
           </tr>
		   <tr>
              <td><label for="curs">Curs<span class="text-danger">*</span></label></td>
              <td><select name="curs" id="curs" required>
					<option value="ASIX">ASIX</option>
					<option value="DAW">DAW</option>
					<option value="DAM">DAM</option>
					<option value="SMX">SMX</option>
				  </select>
			  </td>
           </tr>
		   <tr>
               <td><label for="email">Email<span class="text-danger">*</span></label></td>
               <td><input type="email" class="form-control" id="email" name="email" value="pepe.gotera@gmail.com" required></td>
           </tr>
		   <tr>
               <td><label for="foto">Foto</label></td>
			   <td><input type="image" src="default.png" width="50" id="foto" name="foto"></td>

           </tr>
		   <tr>
               <td><label for="treballa">Treballa</label></td>
               <td><input type="radio" id="si" name="treballa" value="Si">
  					<label for="si">Si</label>
				   <input type="radio" id="no" name="treballa" value="No">
  					<label for="no">No</label>
			   </td>
           </tr>
		   <tr>
               <td><label for="estudi">Estudis de procedència<span class="text-danger">*</span></label></td>
               <td><input type="checkbox" name="estudis[]" id="CFGM" value="CFGM"><label for="CFGM">CFGM</label>
                        <input type="checkbox" name="estudis[]" id="CFGS" value="CFGS"><label for="CFGS">CFGS</label>
                        <input type="checkbox" name="estudis[]" id="BAT" value="BAT" checked><label for="BAT">BAT</label>
                        <input type="checkbox" name="estudis[]" id="Universitat" value="Universitat"><label for="Universitat">Universitat</label>
			   </td>
           </tr>
		   <tr>
               <td><label for="observacions">Observacions</label></td>
               <td><textarea name="observacions" id="observacions" class="form-control">Hola, Bondia</textarea></td>
           </tr>
		   <tr>
			   <td></td>
               <td>
                  <input class="btn btn-primary" type="submit" name ="operacio" value="nouAlumne">
               </td>
           </tr>
       </table>
	</form>
    </div> <!-- end .container -->
     
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   
<!-- Latest compiled and minified Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
</body>
</html>

