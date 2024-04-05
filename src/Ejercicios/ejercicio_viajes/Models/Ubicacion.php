<?php
class Ubicacion
{
    public $direccion;
    public $latitud;
    public $longitud;

     /**
     * Constructor de la clase Ubicacion.
     *
     * @param string $direccion La dirección de la ubicación.
     * @param float $longitud La longitud de la ubicación, en grados decimales.
     * @param float $latitud La latitud de la ubicación, en grados decimales.
     */

    public function __construct( $direccion, $latitud, $longitud) 
    {
        $this->direccion = $direccion;
        $this->latitud = $latitud;
        $this->longitud = $longitud;
    }
    

     /**
     * Devuelve la latitud de la ubicacion
     * 
     * @return float La latitud en grados decimales
     */
    public function getLatitud() {
        return $this->latitud;
    }

    /**
     * Devuelve la longitud de la ubicacion.
     * 
     * @return float La longitud en grados decimales.
     */
    public function getLongitud() {
        return $this->longitud;
    }
}
?>