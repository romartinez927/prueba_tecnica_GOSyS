<?php
/**
 * Interface para calcular el costo de un viaje.
 */
interface CalculadorCostoInterface {
    /**
     * Calcula el costo del viaje.
     * 
     * @return float El costo del viaje.
     */
    public function calcularCosto();
}


class Viaje implements CalculadorCostoInterface 
{
    private array $paquetes = [];
    private Origen $origen;
    private Destino $destino;

    /**
     * Constructor de la clase Viaje.
     * 
     * @param array $paquetes Arreglo que contiene información sobre los paquetes del viaje.
     * @param Origen $origen El origen del viaje.
     * @param Destino $destino El destino del viaje.
     */
    public function __construct( array $paquetes, Origen $origen, Destino $destino) 
    {
        $this->paquetes = $paquetes;
        $this->origen = $origen;
        $this->destino = $destino;
    }

    public function calcularCosto() {
        return 0;
    }

    /**
     * Calcula el peso total de los paquetes del viaje.
     * 
     * @return float El peso total de los paquetes del viaje.
     */
    public function calcularPesoTotalPaquetes() {
        $total = 0;
        foreach ($this->paquetes as $paquete) {
            $total += $paquete->getPeso();
        }
        return $total;
    }

    /**
     * Calcula el volumen total de los paquetes del viaje.
     * 
     * @return float El volumen total de los paquetes del viaje.
     */
    public function calcularVolumenTotalPaquetes() {
        $total = 0;
        foreach ($this->paquetes as $paquete) {
            $total += $paquete->getVolumen();
        }
        return $total;
    }

    /**
     * Calcula la distancia del viaje entre el origen y el destino.
     * 
     * @return float La distancia del viaje.
     */
    public function calcularDistanciaViaje() {
        $latitudOrigen = $this->origen->getLatitud();
        $longitudOrigen = $this->origen->getLongitud();

        $latitudDestino = $this->destino->getLatitud();
        $longitudDestino = $this->destino->getLongitud();

        $distancia = $this->getDistanceBetweenPoints($latitudOrigen, $longitudOrigen, $latitudDestino, $longitudDestino);
        return $distancia;
    }
    
    /**
     * Calcula la distancia entre dos puntos geográficos.
     * 
     * @param float $latitude1 Latitud del punto de origen.
     * @param float $longitude1 Longitud del punto de origen.
     * @param float $latitude2 Latitud del punto destino.
     * @param float $longitude2 Longitud del punto destino.
     * 
     * @return float La distancia entre los dos puntos geográficos.
     */
    public function getDistanceBetweenPoints(float $latitude1, float $longitude1, float $latitude2, float $longitude2) : float {
        $theta = $longitude1 - $longitude2; 
        $distance = (sin(deg2rad($latitude1)) * sin(deg2rad($latitude2))) + (cos(deg2rad($latitude1)) * cos(deg2rad($latitude2)) * cos(deg2rad($theta))); 
        $distance = acos($distance); 
        $distance = rad2deg($distance); 
        $distance = $distance * 60 * 1.1515; 
        $distance = $distance * 1.609344;
        return (round($distance,2)); 
    }
   
}
?>