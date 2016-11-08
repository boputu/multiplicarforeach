<?php




$tablas=[
  "primera"=>5,
  "segunda"=>13,
  "tercera"=>11
];
    echo "Tabla del 5,13,11<br>";
//El 5,13,11 será el $numeroamultiplicar
//El $numeroamultiplicar te coje el 5,13,11 gracias a la relación del foreach con $tablas as $numeroamultiplicar
foreach ($tablas as $numeroamultiplicar) {
    echo "<br>";
  for ($incremento=1; $incremento <= 10 ; $incremento++) {
    //El inicio del contador (incrmento) empezará en 1, y se realizará hasta ser igual o menor a 10, por lo que hará 5x1,5x2,5x3 hasta llegar a 10.
    //El incremento++ lo que hace es subir el contador de uno en uno, de esta forma llegará a 10.
    $resultado=$incremento  * $numeroamultiplicar;
    //Guardamos el resultado en una variable.
    echo "$numeroamultiplicar x $incremento = $resultado<br>";
    //Esto mostrará $numeroamultiplicar(5,3,11) x $incremento (1,2,3,4...10) = $resultado (variable definida anteriormente.)
    //Importante poner el br para el salto de linea, si no el incremento no funcionará correctamente.
  }
}




 ?>
