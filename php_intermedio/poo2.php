<?php
    class Persona{
        public $nombre;
        public $telefono;

        public function __construct($nomb, $tel){
            $this->nombre = $nomb;
            $this->telefono = $tel;
        }

        public function obtener_datos(){
            return "Nombre: ".$this->nombre." Telefono: ".$this->telefono;
        }
    }
class Alumno extends Persona{
    private $grado;
    private $turno;

    public function __construct($nomb, $tel, $grado, $turno){
        parent::__construct($nomb, $tel);
        $this->grado = $grado;
        $this->turno = $turno;
    }

public function obtener_datos(){
    return parent::obtener_datos()." Grado: ".$this->grado." Turno: ".$this->turno;
    }

    }
?>    
<h3>Crear un objeto array de la clase alumno</h3>
<?php
$alumno[0] = new Alumno("Camila", "0962288857", "Tercero - Nivel Medio","tarde");
$alumno[1]= new Alumno("Juan","097144787", "Cuarto","Manhana");
$alumno[2]= new Alumno("kevin el Gordo", "0965874123","Cuarto", "tarde");
?>
<h3>Imprimir sus datos con foreach </h3>

<?php 
//foreach nos permite recorrer el array 
foreach ($alumno as $alu){
    echo $alu->obtener_datos();
    echo "<hr>";
}
?>
