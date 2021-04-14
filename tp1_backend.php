<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>TRABAJO PRACTICO N° 1</h1>
      <h2>1. Imprima por pantalla: “Hola mundo”.</h2>
        <h3>HOLA MUNDO</h3>
      <h2>2. Cargue en una variable la cadena de caracteres “Hola mundo” y luego la imprima por pantalla.</h2>
          <?php $saludo="HOLA MUNDO";
            echo $saludo;
          ?>
      <h2>3. Crear dos variables enteras y mostrar por pantalla, la suma, la resta, la multiplicación, la división
      entera y el resto de la división entera.</h2>
          <?php $N1=4;
            $N2=2;
            $resultado=$N1+$N2;
            echo "$N1 + $N2= ";
            echo $resultado;
          ?>
      <br>
          <?php
            $resultado1=$N1-$N2;
            echo "$N1 - $N2= ";
            echo $resultado1;
          ?>
      <br>
        <?php
            $resultado2=$N1*$N2;
            echo "$N1 x $N2= ";
            echo $resultado2;
        ?>
      <br>
        <?php
            $resultado3=$N1/$N2;
            echo "$N1 % $N2= ";
            echo $resultado3;

        ?>
      <br>
        <?php
            $resultado4=$N1/$N2-$N2;
            echo "$N1 % $N2= ";
            echo $resultado4;
            echo "  (RESTO)";
        ?>
      <h2>4. Realizar la transformación de grados Celsius a Fahrenheit, para el valor 20°C y luego lo imprima por
         pantalla</h2>

       <?php
          $C=20;
          $resultado5=($C * 9/5) + 32;
          echo "($C °C × 9/5) + 32 = ";
          echo $resultado5;
          echo "°F";
          ?>
      <h2>5. Implementar algoritmos que permitan:</h2>
        <h3>a) Calcular el perímetro y el área de un rectángulo, dado que su base es 18cm y su altura 12cm</h3>
          <h4>PERIMETRO RECTANGULO</h4>
            <h5>(2 x b) + (2 x h)</h5>
            <?php
              $base=18;
              $alt=12;
              $resultado6=2*$base+2*$alt;
              echo "(2 x $base)+(2 x $alt)=  ";
              echo $resultado6;
              echo " cm";
              ?>
              <h4>AREA DEL RECTANGULO</h4>
              <h5>(b x h)</h5>
              <?php
              $resultado7=$base*$alt;
              echo "($base) x ($alt)=  ";
              echo $resultado7;
              echo " cm2";
              ?>
        <h3>b) Calcular el perímetro y el área de un círculo dado que su radio es de 30cm</h3>
          <h4>PERIMETRO CIRCULO</h4>
            <h5>(PI X DIAMETRO)</h5>
              <?php
              $pi=3.1416;
              $radio=30;
              $resultado8=2*$radio*$pi;
              echo "(2 x $radio (radio) x $pi (PI))=  ";
              echo $resultado8;
              echo " cm";
              ?>
          <h4>AREA DEL CIRCULO</h4>
            <h5>(PI X RADIO 2 )</h5>
              <?php
              $resultado9=$pi*($radio**2);
              echo "( $pi (PI) x $radio (radio)2)=  ";
              echo $resultado9;
              echo " cm2";
             ?>
  </body>
</html>
