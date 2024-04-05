<?php
class ModeloDeVehiculo
{
    public $volumenMaximo;
    public $pesoMaximo;

    /**
     * Constructor de la clase ModeloDeVehiculo.
     * 
     * @param float $volumenMaximo Es el volumen máximo soportado por el vehículo.
     * @param float $pesoMaximo Es el peso máximo soportado por el vehículo.
     * 
     */
    public function __construct( $volumenMaximo, $pesoMaximo) 
    {
        $this->volumenMaximo= $volumenMaximo;
        $this->pesoMaximo= $pesoMaximo;
    }
    
    /**
     * Obtiene el volumen máximo soportado por el vehículo.
     * 
     * @return float El volumen máximo soportado por el vehículo.
     */
    public function getVolumenMaximo() {
        return $this->volumenMaximo;
    }

    /**
     * Obtiene el peso máximo soportado por el vehículo.
     * 
     * @return float El peso máximo soportado por el vehículo.
     */
    public function getPesoMaximo() {
        return $this->pesoMaximo;
    }

    /**
     * Comprueba que el peso a transportar no exceda la capacidad del vehículo.
     * 
     * @param float $peso Es el peso a verificar.
     * @return bool Devuelve true si el peso excede la capacidad del vehiculo, y devuelve false en caso de que no lo exceda.
     */
    public function excedePesoMaximo($peso) {
        if($peso > $this->pesoMaximo) {
            return true;
        } 
        return false;
    }

    /**
     * Comprueba que el volumen a transportar no exceda la capacidad del vehículo.
     * 
     * @param float $volumen Es el volumen a verificar.
     * @return bool Devuelve true si el volumen excede la capacidad del vehiculo, y devuelve false en caso de que no lo exceda.
     */
    public function excedeVolumenMaximo($volumen) {
        if($volumen > $this->volumenMaximo) {
            return true;
        } 
        return false;
    }
}
?>