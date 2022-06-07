<?php 

    /*
        Facade
    */

    class Carrinho{
        public function fecharCarrinho(){
            echo 'Carrinho fechado';
        }
    }
    class Frete{
        public function calcularFrete(){
            echo 'Frete calculado';
        }
    }
    class Pedido{
        public function fecharPedido(){
            echo 'Pedido fechado';
        }
    }

    Class Loja{
        public function finalizarCompra(){
            $this->fecharCarrinho();
            echo '<hr>';
            $this->fecharPedido();
            echo '<hr>';
            $this->calcularFrete();
        }

        public function fecharCarrinho(){
            $carrinho = new Carrinho;
            $carrinho->fecharCarrinho();
        }

        public function fecharPedido(){
            $pedido = new Pedido;
            $pedido->fecharPedido();
        }
        
        public function calcularFrete(){
            $frete = new Frete;
            $frete->calcularFrete();
        }
    }


    $loja = new Loja();
    $loja->finalizarCompra();
?>