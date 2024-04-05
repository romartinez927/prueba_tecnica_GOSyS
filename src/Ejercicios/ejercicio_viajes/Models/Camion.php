<?php
require_once "Viaje.php";

class Camion
{
    public ModeloDeVehiculo $modelo;
    public $patente;
    public HojaDeRuta $hojaDeRuta;

    /**
     * Constructor de la clase Camion.
     * 
     * @param ModeloDeVehiculo $modelo Es el modelo de vehiculo del camion.
     * @param string $patente Es la patente del camion.
     */
    public function __construct(ModeloDeVehiculo $modelo, $patente) 
    {
        $this->modelo = $modelo;
        $this->patente = $patente;
    }
    
    /**
    * Asigna una hoja de ruta al camion, luego de verificar que no exceda las capacidades del camion.
    * 
    * @param HojaDeRuta $hojaDeRuta Es la hoja de ruta a asignar.
    */
    public function asignarHojaDeRuta(HojaDeRuta $hojaDeRuta) {
        $volumenTotal = $hojaDeRuta->calcularVolumenTotal();
        $pesoTotal = $hojaDeRuta->calcularPesoTotal();

        if ($this->getModelo()->excedePesoMaximo($pesoTotal) || $this->getModelo()->excedeVolumenMaximo($volumenTotal)) {
            throw new Exception("La hoja de ruta supera las capacidades del camión.");
        }

        $this->hojaDeRuta = $hojaDeRuta;
    }

    /**
     * Calcula el costo total de la hoja de ruta del camion.
     * 
     * @return float Devuelve el costo total.
     */
    public function calcularCostoHojaDeRuta() {
        if ($this->getHojaDeRuta()) {
            return $this->hojaDeRuta->calcularCostoTotal();
        } else {
            throw new Exception("El camión no tiene asignada una hoja de ruta.");
        }
    }

    public function getHojaDeRuta() {
        return $this->hojaDeRuta;
    }

    public function getModelo() {
        return $this->modelo;
    }
}
?>