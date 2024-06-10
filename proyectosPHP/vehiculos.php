<?php
class Coche{
/*protected int $ruedas;
public string $color;

protected int $motor;

 public function __construct(){   //metodo constructor

    $this->ruedas=4;
    $this->color=" ";
    $this->motor=1600;

}*/

public function __construct(
  public String $color,
  public int $ruedas,
  protected int $motor
){}
function get_ruedas(){

  return $this->ruedas;
}

function get_motor(){
  return $this->motor;
}

function arrancar(){
  echo"Estoy arrancando<br>";
}

function girar(){
echo "Estoy girando<br>";
}

function frenar(){
echo "Estoy frenando<br>";
}

function establece_color($color_coche,$nombre_coche){//metodo set

    $this->color=$color_coche;
    echo  "El color del ".$nombre_coche.  " es: ". $this->color ."<br>";
}
}
class Camion extends Coche{ //HERENCIA
    public function __construct(){   //metodo constructor
    
        $this->ruedas=8;
        $this->color="gris ";
        $this->motor=2600;
    
    }
    function establece_color($color_camion,$nombre_camion){

      $this->color=$color_camion;
      echo  "El color del camion ".$nombre_camion.  " es: ". $this->color ."<br>";


  }
function arrancar(){

  parent::arrancar();
  echo "Camión arrancado";
}
}
    ?>