<?php
<?php
include ("Produto.php");
include ("Vendas.php");

$vendas= new Vendas();
$vendas-> gerarProduto();
$vendas-> calcularValor();

echo"</br>";
echo "Valor venda:".$vendas->valorProduto;

//Produtos
class Produtos {
    public $id;
    public $nome;
    public $valorProduto;
    public $quantidade;
    public $valorCalculado;


public function calcularValor(){
 $this->valorCalculado=$this->valorProduto*$this->quantidade;
}
    
//Vendas
class Vendas {
    public $produtos;
    public $valorProduto;
    private $numProd=0;
    
    public function imprimir(){
        echo "Venda no valor:".$this->valorProduto."</br>";
        for ($i=0; $i<$numProd; $i++){
            echo"Produto:".$this->produtos[$i]->nome."</br>";
            echo"Valor UN:".$this->produtos[$i]->valorProduto."</br>";
            echo"Quantidade:".$this->produtos[$i]->quantidade."</br>";
            echo"Valor Total:".$this->produtos[$i]->valorCalculado."</br>";
            
        }
    }

public function calcValor(){
    return $this->valorProduto=0;
    for ($i=0; $i<$this->numProd; $i++){
    $this->valorProduto+=$this->produtos[$i]->valorCalculado; 
    
}
}

public function gerarProduto(){
    $p1=new Produtos();
    $p1->id=1;
    $p1->nome="Coca Cola";
    $p1->valorProduto=10;
    $p1->quantidade=1;
    $p1->calcValor();
    $p1->numProd++;

    $p2=new Produtos();
    $p2->id=2;
    $p2->nome="Fanta";
    $p2->valorProduto=20;
    $p2->quantidade=2;
    $p2->calcValor();
    $p2->numProd++;

    $p3=new Produtos();
    $p3->id=3;
    $p3->nome="Pães";
    $p3->valorProduto=20;
    $p3->quantidade=20;
    $p3->calcValor();
    $p3->numProd++;

    $p4=new Produtos();
    $p4->id=4;
    $p4->nome="Celular Samsung";
    $p4->valorProduto=3000;
    $p4->quantidade=1;
    $p4->calcValor();
    $p4->numProd++;
   

    $this->produtos[0]=$p1;
    $this->produtos[1]=$p2;
    $this->produtos[2]=$p3;
    $this->produtos[3]=$p4;
    
 
    $venda1 = new Venda();
    $venda1->id = 1;
    $venda1->paga = "Sim";
    $venda1->venda = "A vista";
    $venda1->produtos[0] = $p1;
    $venda1->numprod++;
    $venda1->produtos[1] = $p2;
    $venda1->numprod++;
    

    $venda2 = new Venda();
    $venda2->id = 2;
    $venda2->paga = "Sim";
    $venda2->venda = "A vista";
    $venda2->produtos[1] = $p2;
    $venda2->numprod++;
    $venda2->produtos[2] = $p3;
    $venda2->numprod++;

    
   
    $venda3 = new Venda();
    $venda3->id = 3;
    $venda3->paga = "Sim";
    $venda3->venda = "A vista";
    $venda3->produtos[0] = $p1;
    $venda3->numprod++;
    $venda3->produtos[1] = $p2;
    $venda3->numprod++;

    
    $venda4 = new Venda();
    $venda4->id = 4;
    $venda4->paga = "Não";
    $venda4->venda = "A prazo";
    $venda4->produtos[2] = $p3;
    $venda4->numprod++;
    $venda4->produtos[3] = $p4;
    $venda4->numprod++;

   
    $this->produtos[0]=$p1;
    $this->produtos[1]=$p2;
    $this->produtos[2]=$p3;
    $this->produtos[3]=$p4;

}
}
?>
