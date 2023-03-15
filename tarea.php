<?php

$dia = date('d');
$mes = date('M');
$anno = date('Y');
$dd = $_POST['dd'];
$cargo = $_POST['cargo'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$estado = $_POST['estado'];
$municipio = $_POST['municipio'];
$parroquia = $_POST['parroquia'];
$cargo1 = $_POST['cargo1'];
$nombre1 = $_POST['nombre1'];
$apellido1 = $_POST['apellido1'];

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Tarea</title>
  </head>
  <body style="color:#fff; font-family:Comfortaa; background-color:#1b1b1b;">

    <!--Cabecera-->
    <div>
      <center>
	<p>República Bolivariana de Venezuela</p>
      	<p>Ministerio Del Poder Popular Para La Educación Universitaria</p>
      	<p>Programa Nacional De Formación En Ingeniería Informática</p>
	<?php echo "Municipio ", "$municipio","  ", "del Estado ", "$estado";?>
	<br>
	<br>
	<?php echo "$parroquia";?>
      </center>
    </div>

    <!--Titulo del Archivo-->
    <div style="margin-top:77px; margin-right:77px; margin-left:77px;">
      
      <?php echo "$dia"," de  ", "$mes"," del Presente Año ", "$anno";?>
	<br><br>
	<?php echo "$cargo ", "$nombre ", "$apellido";?>
	<br><br>
	<?php echo "Le saluda el/la ","$cargo1 ", "$nombre1 ", $apellido1;?>
      <p>Tengo el placer de escribirle con el motivo de expresarle mi gran sincera invitación a colocarme el 100% de la nota que vale esta actividad a evaluar en la fecha del <?php echo "$dd";?>.</p>
      <p>Seria para mí un gran placer ver el 100% de la nota que vale esta actividad en mi notas para apoyar una gran causa (poder pasar la materia).</p>
      <p>Sin más nada que agregar, muchas gracias por su atención y tiempo.</p>
      <p>Se despide, atentamente,</p>
	<?php echo "El/La ","$cargo1 ", "$nombre1 ", "$apellido1" ;?>
    </div>
    <!--Confirmacion-->
    <div style="margin-top: 77px; margin-bottom:77px;">
      <center>
        <form action="">
          <input type="submit" value="Sí, será un placer colocarte el 100%">
          <input type="submit" value="No, no quiero colocarte el 100%">
        </form>
        <style type="text/css" media="screen">
            input{
              background-color:#1b1b1b; 
              color: #FFF; 
              font-family:Comfortaa;
              border-color: #FFF; 
              border-style: solid; 
              border-width: 1px; 
              border-radius: 14px; 
              padding: 14px; 
              cursor: pointer;
              margin: 14px;
            }
            input:hover{
              scale:135%;
              box-shadow: 0 0 14px #FFF;
              transition: ease-in-out;
              transition-duration: 0.14s;
            }
        </style> 
      </center>
    </div>

    <!--pie-->
    <div style="background: linear-gradient(140deg, #1b1b1b, #2b2b2b, #1b1b1b); padding: 14px; border-radius: 77px">
      <center>
        <p style="font-size: 140%; text-shadow: 0 0 14px #FFF">Impulsado por HTML y PHP</p>
      </center>
    </div>
  </body>
</html>
