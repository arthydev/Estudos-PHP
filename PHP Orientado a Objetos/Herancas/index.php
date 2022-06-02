<?php 


    class Operacoes{
        public function soma($n1, $n2){
            return $n1 + $n2;
        }
        public function subtracao($n1, $n2){
            return $n1 - $n2;
        }
        public function divisao($n1, $n2){
            return $n1 / $n2;
        }
        public function multiplicacao($n1, $n2){
            return $n1 * $n2;
        }
    };

    class ExecutaOperacoes extends Operacoes{ # extends Herda propriedades de outra classe para que possa ser usada

        const num1 = 1;
        const num2 = 2;
        const num3 = 3;
        const num4 = 4;

        public function escreveSoma($n1, $n2){
            echo "O resultado da soma é " .$this->soma($n1, $n2);
        }
        public function escreveSubtracao($n1, $n2){
            echo "O resultado da subrtração é " .$this->subtracao($n1, $n2);
        }
        public function escreveDivisao($n1, $n2){
            echo "O resultado da divisão é " .$this->divisao($n1, $n2);
        }
        public function escreveMulti($n1, $n2){
            echo "O resultado da multiplicação é " .$this->multiplicacao($n1, $n2);
        }
    }


    $escrever = new ExecutaOperacoes;
    echo '<hr>';
    $escrever->escreveSoma(15, 14);
    echo '<hr>';
    $escrever->escreveDivisao(50, 3);
    echo '<hr>';
    $escrever->escreveSubtracao(30, 17);
    echo '<hr>';
    $escrever->escreveMulti(20, 5);
    /* 
            Acessando diferentes funções 
            em uma única variável 
    */
?>