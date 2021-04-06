<?php

class Calculadora{

    public function __construct(string $op, float $a, float $b){

        switch ($op) {
            case '+':
                $this->somar($a, $b);
                break;
            case '-':
                $this->subtrair($a, $b);
                break;
            case '*':
                $this->multiplicar($a, $b);
                break;
            case '/':
                $this->dividir($a, $b);
                break;
            
            default:
                echo 'Operação inválida';
                break;
        }

    }

    private function somar($a, $b){
        $res = $a + $b;
        echo $res;
    }

    private function subtrair($a, $b){
        $res = $a - $b;
        echo $res;
    }

    private function multiplicar($a, $b){
        $res = $a * $b;
        echo $res;
    }

    private function dividir($a, $b){
        $res = $a / $b;
        echo $res;
    }

}

$calc = new Calculadora('-',8,3);