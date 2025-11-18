<?php
    class CuentaBancaria {
        // Atributos privados
        private string $numeroCuenta;
        private string $titular;
        private float $saldo;
        private int $numOperaciones;

        // Constructor
        public function __construct(string $numeroCuenta, string $titular) {
            $this->numeroCuenta = $numeroCuenta;
            $this->titular = $titular;
            $this->saldo = 0.0;
            $this->numOperaciones = 0;
        }

        // Destructor
        public function __destruct() {}

        // Método toString
        public function __toString(): string {
            return "Cuenta: {$this->numeroCuenta}, Titular: {$this->titular}, Saldo: {$this->saldo} €, Operaciones: {$this->numOperaciones}";
        }

        // Depositar dinero
        public function depositar(float $cantidad): void {
            $this->saldo += $cantidad;
            $this->numOperaciones++;
        }

        // Extraer dinero
        public function extraer(float $cantidad): void {
            $this->saldo -= $cantidad;
            $this->numOperaciones++;
        }

        // Transferir dinero a otra cuenta
        public function transferir(CuentaBancaria $destino, float $cantidad): void {
            $this->extraer($cantidad);
            $destino->depositar($cantidad);
        }

        // Getters
        public function getSaldo(): float {
            return $this->saldo;
        }

        public function getNumOperaciones(): int {
            return $this->numOperaciones;
        }
    }
?>