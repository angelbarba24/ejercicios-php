<?php
    class BanderaFranjas {
        private string $orientacion;
        private array $franjas;
        private string $nombre;

        // Constructor
        public function __construct(string $orientacion, array $franjas, string $nombre = "sin adscripción") {
            $this->orientacion = $orientacion;
            $this->franjas = $franjas;
            $this->nombre = $nombre;
        }

        // Destructor
        public function __destruct() {}

        // Método toString
        public function mostrarBandera(): void {
            echo "Bandera de {$this->nombre} ({$this->orientacion}): " . implode(", ", $this->franjas) . "\n";
        }

        // Comparar si dos banderas son idénticas
        public function esIdentica(BanderaFranjas $otraBandera): bool {
            return $this->orientacion === $otraBandera->orientacion &&
                $this->franjas === $otraBandera->franjas &&
                $this->nombre === $otraBandera->nombre;
        }

        // Comparar si tienen las mismas franjas pero diferente orientación
        public function mismasFranjasDistintaOrientacion(BanderaFranjas $otra): bool {
            return $this->franjas === $otra->franjas &&
                $this->orientacion !== $otra->orientacion;
        }

        // Invertir el orden de los colores
        public function invertirColores(): void {
            $this->franjas = array_reverse($this->franjas);
        }

        // Invertir la orientación de las franjas
        public function invertirOrientacion(): void {
            $this->orientacion = ($this->orientacion === "horizontal") ? "vertical" : "horizontal";
        }
    }

    $bandera1 = new BanderaFranjas("horizontal", ["rojo", "blanco", "azul"], "País A");
    $bandera2 = new BanderaFranjas("horizontal", ["rojo", "blanco", "azul"], "País A");
    $bandera3 = new BanderaFranjas("vertical", ["rojo", "blanco", "azul"], "País A");

    $bandera1->mostrarBandera();
    $bandera2->mostrarBandera();
    $bandera3->mostrarBandera();

    echo "¿Bandera1 idéntica a Bandera2? " . ($bandera1->esIdentica($bandera2) ? "Sí" : "No") . "\n";
    echo "¿Bandera1 idéntica a Bandera3? " . ($bandera1->esIdentica($bandera3) ? "Sí" : "No") . "\n";
    echo "¿Bandera1 y Bandera3 tienen mismas franjas distinta orientación? " . 
        ($bandera1->mismasFranjasDistintaOrientacion($bandera3) ? "Sí" : "No") . "\n";

    $bandera1->invertirColores();
    $bandera1->mostrarBandera();

    $bandera1->invertirOrientacion();
    $bandera1->mostrarBandera();
?>