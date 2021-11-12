<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP_FUNCIONS_N1</title>
</head>

<body>
    <style type="text/css">
        p {font-weight:bold;} 
    </style>
    
    <!----- Excercici 1 ----->
    <h1>Excercici 1</h1>
    <p>Programa una funciò que, donat un número qualsevol(per exemple,la teva edat) ens digui si és parell o imparell mitjançant un missatge per pantalla.</p>
    <?php
   
    function parellimparell($age){
        if ($age % 2 != 0 ){
        echo "El número $age és imparell";
        }
        else {
            echo "El número $age és parell";
        }        
    }
    
    parellimparell(42);

    ?>

    
    <!----- Excercici 2 ----->
    
    <h1>Excercici 2</h1>
    <p>Per jugar a el "amagatall" se'ns ha demanat un programa que compti fins a 10. Però la persona que comptarà és una mica tramposa i ho farà comptant de dos en dos. Crea una funció que compti fins a 10, de 2 en 2, mostrant cada número del compte per pantalla.</p>
    <?php
    
    function tramposa(){
        for($x=0; $x<=10; $x++){
            echo $x ."\n";
            $x++;
        }
        
    }
    tramposa();
    
    ?>

    
    <!----- Excercici 3 ----->
    
    <h1>Excercici 3</h1>
    <p>Imagina't que volem que compti fins a un nombre diferent de 10. Programa la funció perquè el final del compte estigui parametritzat.</p>
    <?php
    
    $finalcompte = 50;
    
    function tramposainfinita($y){
        for($x=0; $x<=$y; $x++){
            echo $x ."\n";
            $x++;
        }
    }
    
    tramposainfinita($finalcompte);    

    ?>
    

    <!----- Excercici 4 ----->
    
    <h1>Excercici 4</h1>
    <p>Per prevenir oblits a l'utilitzar la nostra meravellosa opció "amagatall" establirem un paràmetre per defecte igual a 10 a la funció que s'encarrega de fer aquest compte.</p>
    <?php
    
    $finalcompte = 5;
    
    function tramposainfinitadefault($y,$default=10){
        if ($y<=$default){
            for($x=0; $x<=$default; $x++){
                echo $x ."\n";
                $x++;
            }
        }else{
            for($x=0; $x<=$y; $x++){
                echo $x ."\n";
                $x++;   
                }
            }
        
    }
    
    tramposainfinitadefault($finalcompte);

    ?>

    
    <!----- Excercici 5 ----->
    
    <h1>Excercici 5</h1>
    <p>Escriure una funciò per verificar el grau de un estudiant en d'acord a la nota.<br>
    Condicions<br>
    Si la nota és 60% o més, el grau hauria de ser Primera Divisió.<br>
    Si la nota està entre 45% i 59%, el grau hauria de ser Segona Divisió.<br>
    Si la nota està entre 33% to 44%, el grau hauria de ser Tercera Divisió.<br>
    Si la nota és menor a 33%, l'estudiant reprovarà.</p>

    <?php
    
    $note= 61;
    function verificarnota($note){
        $finalnote = $note/100;
        if ($finalnote>=0.6){
            echo "El teu grau és de Primera Divisió";
        }elseif ( $finalnote>=0.45 & $finalnote<=0.59){
            echo "El teu grau és de Segona Divisió";
        }elseif ($finalnote>=0.33 & $finalnote<=0.44){
            echo "El teu grau és de Tercera Divisió";
        }else {
            echo "Try again";
        }
    }
    
    echo "La teva nota es: $note" ."<br>";
    
    verificarnota($note);
     
    ?>
    
    
    
    <!----- Excercici 6 ----->
    <h1>Excercici 6</h1>
    <p>Escriu La funció isBitten () que retorna TRUE amb un 50% de probabilitat i FALSE en cas contrari.</p>

    <?php
       
    function isBitten(){
        $bitt= rand(0,100);
        $result = ($bitt %2) == 0 ? true : false;
        return $result;
    }
    echo isBitten();
    
    ?>
    
    
    
</body>
</html>