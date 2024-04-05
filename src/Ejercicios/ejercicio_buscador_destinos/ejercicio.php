<?php

$ejemploDestinos1 = [
  [
    "nombre" => "America", 
    "hijos" => [
      [
        "nombre" => "Argentina",
        "hijos" => [
          [
            "nombre" => "Buenos Aires", 
            "hijos" => [
              [
                "nombre" => "Pilar",
                "hijos" => [["nombre" => "Manzanares"]]
              ]
            ]
          ],
          ["nombre" => "Córdoba"]
        ],
      ],
      [
        "nombre" => "Venezuela",
        "hijos" => [
          ["nombre" => "Caracas"],
          ["nombre" => "Vargas"]
        ]
      ]
    ]
  ]
];

$ejemploDestinos2 = [
  [
    "nombre" => "America", 
    "hijos" => [
      [
        "nombre" => "Argentina",
        "hijos" => [
          ["nombre" => "Buenos Aires"],
          ["nombre" => "Córdoba"],
          ["nombre" => "Santa Fe"]
        ],
      ],
      [
        "nombre" => "EEUU",
        "hijos" => [
          ["nombre" => "Arizona"],
          ["nombre" => "Florida"]
        ]
      ]
    ]
  ],
  [
      "nombre" => "Europa",
      "hijos" => [
          ["nombre" => "España"],
          ["nombre" => "Italia"],
      ]
  ]
];

function buscarDestinos(array $destinos, string $busqueda) : array {

  $arrayDestinos = [];
  
  foreach ($destinos as $destino) {
    if ($destino['nombre'] !== null && stripos($destino['nombre'], $busqueda) !== false) {
      $arrayDestinos[] = $destino['nombre'];
    }

    if (array_key_exists('hijos', $destino)) {
      $arrayDestinos = array_merge($arrayDestinos, buscarDestinos($destino['hijos'], $busqueda));
    }
  }

  return $arrayDestinos;

}



//ej
$coincidencias = buscarDestinos($ejemploDestinos1, "ar"); //["Argentina", "Arizona"]
echo "<pre>";
print_r($coincidencias);
echo "<pre/>";

?>