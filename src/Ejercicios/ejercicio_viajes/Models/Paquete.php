<?php
class Paquete
{
    public $peso;
    public $alto;
    public $ancho;
    public $largo;

    /**
     * Constructor de la clase Paquete.
     *
     * @param float $peso El peso del paquete.
     * @param float $alto El alto del paquete.
     * @param float $ancho El ancho del paquete.
     * @param float $largo El largo del paquete.
     */

    public function __construct( $peso, $alto, $ancho, $largo) 
    {
        $this->peso = $peso;
        $this->alto = $alto;
        $this->ancho = $ancho;
        $this->largo = $largo;
    }
    
    /**
     * Obtiene el peso del paquete.
     * 
     * @return float El peso del paquete.
     */
    public function getPeso() {
        return $this->peso;
    }

    /**
     * Calcula el volumen del paquete.
     * 
     * @return float El volumen del paquete.
     */
    public function getVolumen() {
        $volumen = $this->alto * $this->ancho * $this->largo;
        return $volumen;
    }
}
?>