<?php
    // Clase abstracta
    abstract class CuentaBancaria {
        protected string $numeroCuenta;
        protected string $titular;
        protected float $saldo;
        protected int $numOperaciones;

        // Constructor
        public function __construct(string $numeroCuenta, string $titular) {
            $this->numeroCuenta = $numeroCuenta;
            $this->titular = $titular;
            $this->saldo = 0.0;
            $this->numOperaciones = 0;
        }

        // Destructor
        public function __destruct() {}

        // toString
        public function __toString(): string {
            return "Cuenta: {$this->numeroCuenta}, Titular: {$this->titular}, Saldo: {$this->saldo} €, Operaciones: {$this->numOperaciones}";
        }

        // Método común: depositar
        public function depositar(float $cantidad): void {
            $this->saldo += $cantidad;
            $this->numOperaciones++;
        }

        // Método abstracto: extraer (cada tipo de cuenta lo implementa distinto)
        abstract public function extraer(float $cantidad): bool;

        // Transferir dinero
        public function transferir(CuentaBancaria $destino, float $cantidad): bool {
            if ($this->extraer($cantidad)) {
                $destino->depositar($cantidad);
                return true;
            }
            return false;
        }

        // Getters
        public function getSaldo(): float {
            return $this->saldo;
        }

        public function getNumOperaciones(): int {
            return $this->numOperaciones;
        }
    }

    // Clase hija: Cuenta de Débito
    class CuentaDebito extends CuentaBancaria {
        public function extraer(float $cantidad): bool {
            if ($cantidad <= $this->saldo) {
                $this->saldo -= $cantidad;
                $this->numOperaciones++;
                return true;
            }
            return false; // no se puede quedar en negativo
        }
    }

    // Clase hija: Cuenta de Crédito
    class CuentaCredito extends CuentaBancaria {
        private float $limiteCredito;

        public function __construct(string $numeroCuenta, string $titular, float $limiteCredito) {
            parent::__construct($numeroCuenta, $titular);
            $this->limiteCredito = $limiteCredito;
        }

        public function extraer(float $cantidad): bool {
            if (($this->saldo - $cantidad) >= -$this->limiteCredito) {
                $this->saldo -= $cantidad;
                $this->numOperaciones++;
                return true;
            }
            return false; // superaría el límite de crédito
        }
    }

    // Crear cuentas
    $cuentaDeDebito = new CuentaDebito("ES111", "Pepe");
    $cuentaDeCredito = new CuentaCredito("ES222", "Lucía", 500);

    echo $cuentaDeDebito . "\n";
    echo $cuentaDeCredito . "\n";

    // Depositar
    $cuentaDeDebito->depositar(300);
    $cuentaDeCredito->depositar(200);

    echo $cuentaDeDebito . "\n";
    echo $cuentaDeCredito . "\n";

    // Extracciones
    echo "Extracción débito (200): " . ($cuentaDeDebito->extraer(200) ? "OK" : "Fallo") . "\n";
    echo "Extracción débito (200 más): " . ($cuentaDeDebito->extraer(200) ? "OK" : "Fallo") . "\n";

    echo "Extracción crédito (600): " . ($cuentaDeCredito->extraer(600) ? "OK" : "Fallo") . "\n";
    echo "Extracción crédito (200 más): " . ($cuentaDeCredito->extraer(200) ? "OK" : "Fallo") . "\n";

    echo $cuentaDeDebito . "\n";
    echo $cuentaDeCredito . "\n";

    // Transferencia
    echo "Transferencia de débito a crédito (50): " . ($cuentaDeDebito->transferir($cuentaDeCredito, 50) ? "OK" : "Fallo") . "\n";

    echo $cuentaDeDebito . "\n";
    echo $cuentaDeCredito . "\n";
?>