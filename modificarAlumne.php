<!DOCTYPE HTML>
<html>
    <head>
        <title>Modificar Alumne</title>
        <meta charset="UTF-8">
		
        <!-- Latest compiled and minified Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    </head>

    <body>
        <?php
            if(!empty($alumnes)){
                extract($alumnes);
            } 
        ?>
        <!-- container -->
        <div class="container">
      
      <h1>Modificar Alumne</h1>
      <form action="./?operacio=modificarAlumne&id=<?php echo $idAlumne?>" method="post">
            <table class='table table-hover table-responsive table-bordered'>
                <tr>
                    <td>Nom</td>
                    <td><input type="text" value="<?php echo $nom?>" name="nom" required></td>
                </tr>
                <tr>
                    <td>Primer Cognom</td>
                    <td><input type="text" value="<?php echo $cognom1?>" name="cognom1" required></td>
                </tr>
                <tr>
                    <td>Segon Cognom</td>
                    <td><input type="text" value="<?php echo $cognom2?>" name="cognom2"></td>
                </tr>
                <tr>
                    <td>Telèfon</td>
                    <td><input type="tel" value="<?php echo $telefon?>" name="telefon"></td>
                </tr>
                <tr>
                    <td>Data naixement</td>
                    <td><input type="date" value="<?php echo $dataNaixement?>" name="dataNaixement"></td>
                </tr>
                <tr>
                    <td>Curs</td>
                    <td><select name="curs" id="curs">
                    <option value="ASIX"<?php if ($curs == "ASIX") {echo " selected";} ?>>ASIX</option>
                    <option value="DAW"<?php if ($curs == "DAW") {echo " selected";} ?>>DAW</option>
                    <option value="DAM"<?php if ($curs == "DAM") {echo " selected";} ?>>DAM</option>
					<option value="DAM"<?php if ($curs == "SMX") {echo " selected";} ?>>SMX</option>
                </select>
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" value="<?php echo $email?>" name="email"></td>
                </tr>
                <tr>
                    <td>Foto</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Treballa?</td>
                    <td><input type="radio" id="treballa" name="treballa" value="Si" <?php if ($treballa == "Sí") {echo ' checked';}?>>
                    <label for="treballa">Si</label>
                    <input type="radio" id="treballa" name="treballa" value="No" <?php if ($treballa == "No") {echo ' checked';}?>>
                    <label for="treballa">No</label>
                    </td>
                </tr>
                <tr>
                <tr>
                    <td>Estudis</td>                            
                    <td>
                        <input type="checkbox" name="estudis[]" id="CFGM" value ="CFGM"<?php if(is_integer(strpos($estudis,"CFGM"))) { echo "selected";}?> ))>                                
                        <label for="CFGM">CFGM</label>

                        <input type="checkbox" name="estudis[]" id="CFGS" value="CFGS"<?php if(is_integer(strpos($estudis,"CFGS"))) { echo "selected";}?>>
                        <label for="CFGS">CFGS</label>

                        <input type="checkbox" name="estudis[]" id="BAT" value="BAT"<?php if(is_integer(strpos($estudis,"BAT"))) { echo "selected";}?>>
                        <label for="BAT">BAT</label>

                        <input type="checkbox" name="estudis[]" id="Universitat" value="Universitat" <?php if(is_integer(strpos($estudis,"Universitat"))) { echo "selected";}?>>
                        <label for="Universitat">Universitat</label>
                    </td>
                <tr>
                </tr>
                    <!-- Es un textarea, puedo hacer echo directamente, si no, debería usar nl2br() -->
                    <td>Observacions</td>
                    <td><textarea name="observacions" id="observacions" ><?php echo $observacions?></textarea></td>
                </tr>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input class="btn btn-primary" type="submit" value="Modificar Alumne">
                    </td>
                </tr>
            </table>
        </form>

    </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

        <!-- Latest compiled and minified Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </body>
</html>

