<?php
    class Restaurante {
        // Atributo estático privado
        private static int $numeroRest = 0;

        // Promoción de propiedades en el constructor
        public function __construct(
            private string $nombre,
            private string $tipoCocina,
            private array $ratings = []
        ) {
            self::$numeroRest++;
        }

        // Destructor
        public function __destruct() {}

        // Método toString
        public function __toString(): string {
            $ratingsStr = implode(", ", $this->ratings);
            return "Restaurante: {$this->nombre}, Tipo de cocina: {$this->tipoCocina}, Ratings: {$ratingsStr}";
        }

        // Getters
        public function getNombre(): string {
            return $this->nombre;
        }

        public function getTipoCocina(): string {
            return $this->tipoCocina;
        }

        public function getRatings(): array {
            return $this->ratings;
        }

        // Setters
        public function setNombre(string $nombre): void {
            $this->nombre = $nombre;
        }

        public function setTipoCocina(string $tipoCocina): void {
            $this->tipoCocina = $tipoCocina;
        }

        public function setRatings(array $ratings): void {
            $this->ratings = $ratings;
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

        // Método estático para obtener el total de restaurantes creados
        public static function totalRests(): int {
            return self::$numeroRest;
        }
    }

    $rest1 = new Restaurante("La Cantina", "Mexicana");
    $rest2 = new Restaurante("La Trattoria", "Italiana", [5,4,3]);

    echo $rest1 . "\n";
    echo $rest2 . "\n";

    echo "Total de restaurantes creados: " . Restaurante::totalRests() . "\n";
?>