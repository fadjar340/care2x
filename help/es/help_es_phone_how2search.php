<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<font face="Verdana, Arial" size=3 color="#0000cc"> <b>緾贸mo buscar? 
<?php
switch($src)
{
 	case "search": print 'busco un n煤mero telef贸nico?'; break;
	case "dir": print 'abro todo el directorio?';break;
	case "newphone": print 'escribo nueva informaci贸n telef贸nica?';break;
 }
 ?>
</b></font> 
<p><font size=2 face="verdana,arial" > 
<form action="#" >
  <?php if($src=="search") : ?>
  <font size="2" face="Verdana, Arial, Helvetica, sans-serif"><b>Paso 1</b> </font><font face="Verdana, Arial, Helvetica, sans-serif">
  <ul>
    <font size="2"> Escriba en el campo "<span style="background-color:yellow" >Escriba 
    la palabra clave.</span>" ya sea informaci贸n completa o unas pocas letras, 
    como por ejemplo un c贸digo de pabell贸n o departamento, nombre, o numero de 
    cuarto. <br>
    <font color="#000066">Ejemplo 1: escriba "m9a" o "M9A" o "M9". <br>
    Ejemplo 2: escriba "Guerrero" o "gue". <br>
    Ejemplo 3: escriba "Alfredo" o "Alf". <br>
    Ejemplo 4: escriba "op11" o "OP11" o "op". </font></font> 
  </ul>
  <font size="2"><b>Paso 2</b> </font></font> 
  <ul>
    <font size="2" face="Verdana, Arial, Helvetica, sans-serif"> D茅 clic en el 
    bot贸n 
    <input type="button" value="BUSCAR">
    para empezar la b煤squeda.</font> 
    <p> 
  </ul>
  <font size="2" face="Verdana, Arial, Helvetica, sans-serif"><b>Paso 3</b> </font> 
  <ul>
    <font size="2" face="Verdana, Arial, Helvetica, sans-serif"> Si la b煤squeda 
    halla resultado(s), una lista se desplegar谩.</font> 
    <p> 
  </ul>
  <font size="2" face="Verdana, Arial, Helvetica, sans-serif"> 
  <?php endif;?>
  <?php if($src=="dir") : ?>
  <b>Paso 1</b> </font><font face="Verdana, Arial, Helvetica, sans-serif">
  <ul>
    <font size="2"> D茅 clic en el bot贸n <img src="../img/en/en_phonedir-gray.gif" border="0">. 
    </font>
  </ul>
  <font size="2">
  <?php endif;?>
  <?php if($src=="newphone") : ?>
  <b>Paso 1</b> 
  <ul>
    D茅 clic en el bot贸n <img src="../img/en/en_newdata-gray.gif" border="0">. 
  </ul>
  <b>Paso 2</b> 
  <ul>
    Si usted ingres贸 su nombre y contrase帽a y tiene permiso para esta funci贸n, 
    aparecer谩 el formulario de ingreso de la nueva informaci贸n telef贸nica en la 
    ventana principal.<br>
    De otro modo, si usted no ha ingresado, se le pedir谩 que escriba su nombre 
    y contrase帽a. 
    <p> Escriba su nombre y contrase帽a y d茅 clic en el bot贸n <img <?php echo createLDImgSrc('../','continue.gif','0') ?>>.
    <p> Si usted decide cerrar esta ventana, d茅 clic en el bot贸n <img <?php echo createLDImgSrc('../','cancel.gif','0') ?>>. 
  </ul>
  </font></font><font size="2" face="Verdana, Arial, Helvetica, sans-serif"> 
  <?php endif;?>
  <b>Nota</b> </font><font face="Verdana, Arial, Helvetica, sans-serif">
  <ul>
    <font size="2"> Si usted decide cerrar la ventana de b煤squeda, d茅 clic en 
    el bot贸n <img <?php echo createLDImgSrc('../','cancel.gif','0') ?>>. </font> 
  </ul>


</font></form>

