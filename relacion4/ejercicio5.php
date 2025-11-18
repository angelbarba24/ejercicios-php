<?php
    class Restaurante {
        public string $nombre;
        public string $tipoCocina;
        public array $ratings;

        // Constructor
        function __construct($nombre, $tipoCocina, $ratings=[]) {
            $this -> nombre = $nombre;
            $this -> tipoCocina = $tipoCocina;
            $this -> ratings = $ratings;
        }

        // Destructor
        public function __destruct() {}

        // Método toString
        public function __toString(): string {
            $ratingsStr = implode(", ", $this->ratings);
            return "Restaurante: {$this->nombre}, Tipo de cocina: {$this->tipoCocina}, Ratings: {$ratingsStr}";
        }        

        // Método que devuelve el número de ratings
        public function obtenerNumeroRatings(): int {
            return count($this->ratings);
        }

        // Método para añadir 1 rating
        public function añadirRating(int $rating): void {
            $this->ratings[] = $rating;
        }

        // Método para añadir varios ratings
        public function añadirRatings(array $nuevosRatings): void {
            $this->ratings = array_merge($this->ratings, $nuevosRatings);
        }

        // Método que devuelve la media de los ratings
        public function calcularRatingMedio(): float {
            if (empty($this->ratings)) {
                return 0;
            }
            return array_sum($this->ratings) / count($this->ratings);
        }
    }

    // Crear objeto Restaurante
    $miRestaurante = new Restaurante("La Cantina", "Mexicana");
    echo $miRestaurante . "\n";

    // Mostrar el restaurante (usa __toString)
    echo $miRestaurante . "\n";

    // Añadir un rating
    $miRestaurante->añadirRating(5);
    echo $miRestaurante . "\n";

    // Añadir varios ratings
    $miRestaurante->añadirRatings([4, 3, 5]);
    echo $miRestaurante . "\n";

    // Número de ratings
    echo "Número de ratings: " . $miRestaurante->obtenerNumeroRatings() . "\n";

    // Rating medio
    echo "Rating medio: " . $miRestaurante->calcularRatingMedio() . "\n";
?>