<?php
class Produtos {
    public $id;
    public $nome;
    public $valorProduto;
    public $quantidade;
    public $valorCalculado;


public function calcularValor(){
 $this->valorCalculado=$this->valorProduto*$this->quantidade;
}
}
?>
