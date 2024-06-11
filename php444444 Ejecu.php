<?php

$coche1 = new Coche("02/02/2022", "Ferrari", "F1", 20, "combustion", 2, "si", "si");
$coche2 = new Coche ("03/02/2222","Opel","Astra", 40, "diesel",5,"si","si" );
$coche3= new Coche("03/04/1997","Citroën","C4",  0.5,"a pedales",3,"no","si" );
$motocicleta1 = new Motocicleta("03/02/2023", "Kawaziki", "690", 5, "Eléctrico", 125);
$motocicleta2 = new Motocicleta("01/02/1980", "Vespa", "Solo hay uno", 0.1 , "Gasofa", 5 );
$motocicleta3 = new Motocicleta("04/04/2024", "Ducati", "950S", 8 , "A ella le gusta la gasolina", 500  );

echo $coche1;
echo $coche2;
echo $coche3;
echo $motocicleta1;
echo $motocicleta2;
echo $motocicleta3;

$vehiculos = [
   $coche1, $coche2, $coche3, $motocicleta1, $motocicleta2, $motocicleta3
    
];
//Para poder sacar la información del array usamos "foreach" y de esta manera sacamos la información por pantalla:
foreach ($vehiculos as $vehiculo){
   echo $vehiculo;
}