<?php
class HojaDeRuta
{
    public array $viajes = [];
    public array $hojasDeRuta = [];

    /**
     * Constructor de la clase HojaDeRuta
     * 
     * @param array $viajes Es un array que contiene informacion de los viajes.
     * @param array $hojasDeRuta Es un array que contiene hojas de ruta.
     */

    public function __construct(array $viajes, array $hojasDeRuta)
    {
        $this->viajes = $viajes;
        $this->hojasDeRuta = $hojasDeRuta;
    }
    
    /**
     * Calcula el costo total de la hoja de ruta, segun los viajes que tiene y sus hojas de ruta asociadas.
     * 
     * @return float Devuelve el costo total de la hoja de ruta.
     */

    public function calcularCostoTotal() {
        $costoTotal = 0;

        if(count($this->viajes) > 0) {
            foreach ($this->viajes as $viaje) {
                $costoTotal += $viaje->calcularCosto();
            }
        }

        if(count($this->hojasDeRuta) > 0) {
            foreach ($this->hojasDeRuta as $hojaDeRuta) {
                if(count($hojaDeRuta->viajes) > 0) {
                    foreach ($hojaDeRuta->viajes as $viaje) {
                        $costoTotal += $viaje->calcularCosto();
                    }
                }
            }
        }

        return $costoTotal;
    }

    /**
     * Calcula el volumen total de la hoja de ruta, segun los viajes que tiene y sus hojas de ruta asociadas.
     * 
     * @return float Devuelve el volumen total de la hoja de ruta.
     */

    public function calcularVolumenTotal() {
        $volumenTotal = 0;

        if(count($this->viajes) > 0) {
            foreach ($this->viajes as $viaje) {
                $volumenTotal += $viaje->calcularVolumenTotalPaquetes();
            }
        }

        if(count($this->hojasDeRuta) > 0) {
            foreach ($this->hojasDeRuta as $hojaDeRuta) {
                if(count($hojaDeRuta->viajes) > 0) {
                    foreach ($hojaDeRuta->viajes as $viaje) {
                        $volumenTotal += $viaje->calcularVolumenTotalPaquetes();
                    }
                }
            }
        }

        return $volumenTotal;
    }

    /**
     * Calcula el peso total de la hoja de ruta, segun los viajes que tiene y sus hojas de ruta asociadas.
     * 
     * @return float Devuelve el peso total de la hoja de ruta.
     */
    
     public function calcularPesoTotal() {
        $pesoTotal = 0;

        if(count($this->viajes) > 0) {
            foreach ($this->viajes as $viaje) {
                $pesoTotal += $viaje->calcularPesoTotalPaquetes();
            }
        }

        if(count($this->hojasDeRuta) > 0) {
            foreach ($this->hojasDeRuta as $hojaDeRuta) {
                if(count($hojaDeRuta->viajes) > 0) {
                    foreach ($hojaDeRuta->viajes as $viaje) {
                        $pesoTotal += $viaje->calcularPesoTotalPaquetes();
                    }
                }
            }
        }

        return $pesoTotal;
    }

}
?>