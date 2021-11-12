<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP_FUNCIONS_N2</title>
</head>

<body>
    <style type="text/css">
        p {font-weight:bold;} 
    </style>

    
    <!----- Excercici 1 ----->
    <h1>Excercici 1</h1>
    <p>Ens han demanat un llistat de tots els anys on es van produir jocs olímpics desde 1960 inclós fins al 2016. Programa un bucle que calculi i mostri per pantalla els anys olímpics dins de l'interval esmentat.</p>
    
    <?php
        
        for($x=1960; $x<=2016; $x+=4){
            echo $x . "<br>";
            
        }
   
    ?>
    

    
    <!----- Excercici 2 ----->
    <h1>Excercici 2</h1>
    <p>Escriu una funció que determini la quantitat total a pagar per una trucada telefònica d'acord a les següents premisses:<br>
    Tota crida que duri menys de 3 minuts té un cost de 10 cèntims.<br>
    Cada minut addicional a partir dels 3 primers és un pas de comptador i costa 5 cèntims.</p>

    <?php

        
        function callcost($time,$cost=10){
            $extratime = $time-3;
            $extracost = $extratime*5;
            $totalcost = $cost+$extracost;
            if ($time<=3){
                echo "La durada de la trucada es de $time min. El total de la trucada es $cost";
            }else{
                echo "La durada de la trucada es de $time min. El total de la trucada es $totalcost";
            }
        }
        
        callcost(5);

    ?>
    

    <!----- Excercici 3 ----->
    <h1>Excercici 3</h1>
    <p>Imagina que som a una botiga on es ven:<br>
        Xocolata: 1 euro<br>
        Xiclets: 0.50 euros<br>
        Carmels: 1.50 euros<br>
    Implementa un programa que permeti afegir càlculs a un total de compres d'aquest tipus. Per exemple, que si comprem:<br>

    2 xocolates, 1 de xiclets i 1 de carmels, tinguem un programa que permeti anar afegint els subtotals a un total, tal que així:<br>
    funció(2 xocolates) + funció(1 de xiclets) + funció(1 de carmels) = 2 + 0.5 + 1.5<br>
    Sent per tant el total, 4.</p>

    <?php
    
        $xocolata=2;
        $xiclets=3;
        $carmels=5;
    
        function valorxocolata($xocol){
            $totalxoco = $xocol*1;
            return $totalxoco;
        }
    
        function valorxiclets($xicle){
            $totalxiclets = $xicle*0.5;
            return $totalxiclets;
        }
    
        function valorcarmels($carme){
            $totalcarmels = $carme*1.50;
            return $totalcarmels;
        }
    
        
        $xoc=valorxocolata($xocolata)." € de xocolata";
        $xic=valorxiclets($xiclets)." € de xiclets";
        $car=valorcarmels($carmels)." € de carmels";
        $total = valorxocolata($xocolata)+valorxiclets($xiclets)+valorcarmels($carmels);
        
        echo "$xoc + $xic + $car =  $total";
    
    ?>

    
</body>
</html>





