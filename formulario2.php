
<body bgcolor="#F6CEF5" text="#190707">
<center>
<?php
include("conexion.php");
$nombre= $_POST ['nombre'];
$correo= $_POST ['correo'];
$dirrecion= $_POST ['dirrecion'];
$pais= $_POST ['pais'];
$labiales= $_POST ['labiales'];
$color= $_POST['color'];
$polvos= $_POST['polvos'];
$color1= $_POST['color1'];
$rubor= $_POST['rubor'];
$color2= $_POST['color2'];
$iluminador= $_POST['iluminador'];
$color3= $_POST['color3'];
$crema= $_POST['crema'];
$mascara= $_POST['mascara'];
$color5= $_POST['color5'];
$corrector= $_POST['corrector'];
$total= $_POST['total'];
 $insertar = "INSERT INTO agenda (nombre,correo,dirrecion,pais,labiales,color,polvos,color1,rubor,color2,iluminador,color3,crema,mascara,color5,corrector,total) VALUES
('$nombre','$correo','$dirrecion','$pais','$labiales','$color','$polvos','$color1','$rubor','$color2','$iluminador','$color3','$crema','$mascara','$color5','$corrector','$total')";//tabla_agenda es nombre de la tabla
$resultado = mysqli_query($conexion, $insertar);
if(!$resultado){
echo "Error al registrarse";
}else{
echo "\n Usuario registrado con exito";
}
mysqli_close($conexion);
echo "<br>";
echo "<br>";
echo "<br>";
echo "LA INFORMACIÓN DE SU PEDIDO ES:";
echo "<br>";echo "<br>";
echo "El nombre recibido es:". $nombre. "<br/>";
echo "<br>";
echo "El correo es:". $correo. "<br/>";
echo "<br>";
echo "El correo es:". $dirrecion. "<br/>";
echo "<br>";
echo "El pais  es:". $pais. "<br/>";
echo "<br>";
echo "El pedido de labiales son :". $labiales. "<br/>";
echo "<br>";
echo "El color del labial es :". $color. "<br/>";
echo "<br>";
echo "El pedido de polvos son :". $polvos. "<br/>";
echo "<br>";
echo "El color del polvo es:". $color1. "<br/>";
echo "<br>";
echo "El pedido de rubor es:". $rubor. "<br/>";
echo "<br>";
echo "El color del rubor es:". $color2. "<br/>";
echo "<br>";
echo "El pedido de iluminador :". $iluminador. "<br/>";
echo "<br>";
echo "El color de iluminador es:". $color3. "<br/>";
echo "<br>";
echo "El pedido de la crema hidratante  es:". $crema. "<br/>";
echo "<br>";
echo "El pedido de mascara es:". $mascara. "<br/>";
echo "<br>";
echo "El color de las mascara  es:". $color5. "<br/>";
echo "<br>";
echo "El pedido del correptor es:". $corrector. "<br/>";
echo "<br>";
$a=60*$labiales;
$b=150*$polvos;
$c=150*$rubor;
$d=150*$iluminador;
$e=150*$crema;
$f=80*$mascara;
$g=70*$corrector;
$suma=$a+$b+$c+$d+$e+$f+$g;
echo "El total de los Labiales comprados es: $a";
echo "<br>";
echo "El total de los Polvos comprados es: $b";
echo "<br>";
echo "El total de los Rubor comprados es: $c";
echo "<br>";
echo "El total de los Iluminador comprados es: $d";
echo "<br>";
echo "El total de los Crema Hidratante comprados es: $e";
echo "<br>";
echo "El total de los Mascara comprada es: $f";
echo "<br>";
echo "El total de los Correctores comprados es: $g";
echo "<br>";
echo "EL TOTAL DE SU COMPRA: $suma";
?>
<center>
</body>