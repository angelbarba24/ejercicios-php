<?php
    interface Encendible {
        public function encender();
        public function apagar();

    }

    // Clase Bombilla
    class Bombilla implements Encendible {
        // Atributos
        private string $tipoBombilla;
        private int $lumenes;
        private bool $encendida;

        // Constructor
        public function __construct(string $tipoBombilla, int $lumenes) {
            $this->tipoBombilla = $tipoBombilla;
            $this->lumenes = $lumenes;
            $this->encendida = false; // inicialmente apagada
        }

        // Destructor
        public function __destruct() {
            echo "La bombilla de tipo {$this->tipoBombilla} ha sido eliminada.\n";
        }

        // Métodos
        public function encender() {
            $this->encendida = true;
            echo "Bombilla encendida.\n";
        }

        public function apagar() {
            $this->encendida = false;
            echo "Bombilla apagada.\n";
        }
    }

    // Clase Motocicleta
    class Motocicleta implements Encendible {
        // Atributos
        private float $gasolina;
        private int $bateria;
        private string $matricula;
        private bool $estado;

        // Constructor
        public function __construct(string $matricula) {
            $this->gasolina = 0;
            $this->bateria = 2;
            $this->estado = false;
            $this->matricula = $matricula;
        }

        // Métodos
        public function cargarGasolina(float $cantidad) {
            $this->gasolina += $cantidad;
            echo "Moto cargada con ", $cantidad, " litros.\n";
        }

        public function encender() {
            if ($this->estado == true or $this->bateria <= 0 or $this->gasolina <= 0){
                echo "Error, la moto no cumple las condiciones para poder arrancar.\n";
            } else {
                $this->estado = true;
                echo "Moto encendida.\n";
            }
        }

        public function apagar() {
             if ($this->estado == false){
                echo "Error, la moto se encuentra apagada.\n";
            } else {
                $this->estado = false;
                echo "Moto apagada.\n";
            }
        }
    }

    function enciende_algo (Encendible $algo) {
        $algo->encender();
    }
    $miBombilla = new Bombilla("led",12);
    $miMoto = new Motocicleta("3873 NXB");
    enciende_algo($miBombilla);
    enciende_algo($miMoto);
?>