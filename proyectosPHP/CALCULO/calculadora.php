<style>
   .resultado{
    color:firebrick;
    font-weight:bold;
    font-size:32px;
   }
   
   </style>


<?php
   

     function calcular($calculo){
        if(!strcmp("suma",$calculo)){
            global $numero1;
            global $numero2;
            $resultado=$numero1+$numero2;
            echo "<p class='resultado'>El resultado es: $resultado</p>";

        }
     
    if(!strcmp("resta",$calculo)){
        global $numero1;
        global $numero2;
       $resultado=$numero1-$numero2;
        echo "<p class='resultado'>El resultado es: $resultado</p>";
    }
 

 if(!strcmp("multiplicación",$calculo)){
    global $numero1;
            global $numero2;
            $resultado=$numero1*$numero2;
    
    echo "<p class='resultado'>El resultado es: $resultado</p>";
}

if(!strcmp("división",$calculo)){
    global $numero1;
            global $numero2;
    $resultado=$numero1/$numero2;
            echo "<p class='resultado'>El resultado es: $resultado</p>";
}

if(!strcmp("modulo",$calculo)){
    global $numero1;
            global $numero2;
            $resultado=$numero1%$numero2;
    
            echo "<p class='resultado'>El resultado es: $resultado</p>";

}

if(!strcmp("Incremento",$calculo)){
    global $numero1;
            $numero1++;
            $resultado=$numero1;
    
    echo "<p class='resultado'>El resultado es: $resultado</p>";
}

if(!strcmp("Decremento",$calculo)){
    global $numero1;
            $numero1--;
            $resultado=$numero1;
    
            echo "<p class='resultado'>El resultado es: $resultado</p>";

     }


}
    
     ?>
