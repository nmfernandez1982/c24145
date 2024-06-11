<?php 

class vehiculo
{
    //atributos
    private $marca;
    private $modelo;
    private $año;
    private $tamañoTanque;
    private $cantCombustible;

    public function __construct($marca,$modelo,$año,$tamañoTanque,$cantCombustible)
    {
        $this->marca=$marca;
        $this->modelo=$modelo;
        $this->año=$año;
        $this->tamañoTanque=$tamañoTanque;
        $this->cantCombustible=$cantCombustible;        
    }

    public function getDetalles()
    {
        return "Marca:".$this->marca.", Modelo:".$this->modelo;
    }

    public function mover()
    {
    return "El Vehiculo acelero"; 
    }
}

//clase derivada/ va a heredar de alguien

class Auto extends vehiculo
{
    private $cantPuertas;
    private $esSedan;

    public function __construct($marca,$modelo,$año,$tamañoTanque,$cantCombustible,$cantPuertas,$esSedan)
    {
        parent::__construct($marca,$modelo,$año,$tamañoTanque,$cantCombustible);       
        $this->cantPuertas=$cantPuertas;
        $this->esSedan=$esSedan;        
    }

    public function getDetalles()
    {
        return parent::getDetalles()." Cant. Puertas:".$this->cantPuertas." Es Sedan:".$this->esSedan;
    }

}

class Camion extends vehiculo
{
    private $tieneAcoplado;

    public function __construct($marca,$modelo,$año,$tamañoTanque,$cantCombustible,$tieneAcoplado)
    {
        parent::__construct($marca,$modelo,$año,$tamañoTanque,$cantCombustible);       
        $this->tieneAcoplado=$tieneAcoplado;             
    }


}




$auto1=new Auto("Renault","Clio",2019,50,5,3,true);

$camion1=new Camion("Iveco","Algun Camion",2023,120,60,true);


echo $auto1->getDetalles()."\n";

echo $camion1->getDetalles()."\n";

echo $auto1->mover()."\n";

echo $camion1->mover()."\n";
?>