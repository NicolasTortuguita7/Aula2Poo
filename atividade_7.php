

<?php

class ContaBancaria {
    public string $titular;
    public float $saldo;


    public function __construct($titular, $saldoInicial) {
        $this->titular = $titular;
        $this->saldo = $saldoInicial;
    }

    public function depositar($valor){
        if ($valor > 0) {
            $this->saldo += $valor;
        }
    }


    public function sacar(float $valor): void {
        if ($valor > 0 && $valor <= $this->saldo) {
            $this->saldo -= $valor;
        }
    }


    public function exibirSaldo(){
        $saldoFormatado = number_format($this->saldo, 2, ',', '.');
        echo "<b>Titular: {$this->titular} | Saldo Atual: R$ {$saldoFormatado}</b>";
    }
}


$minhaConta = new ContaBancaria("Maria Silva", 500.00);

$minhaConta->depositar(250.00);

$minhaConta->sacar(100.00);

$minhaConta->exibirSaldo();

?>