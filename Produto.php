<?php

class Produto {
    private $nome;
    private $preco;
    private $quantidadeEstoque;

    public function __construct($nome, $preco, $quantidadeEstoque) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidadeEstoque = $quantidadeEstoque;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function temEstoque($quantidade) {
        return $this->quantidadeEstoque >= $quantidade;
    }

    public function diminuirEstoque($quantidade) {
        if ($this->temEstoque($quantidade)) {
            $this->quantidadeEstoque -= $quantidade;
        } else {
            throw new Exception("Estoque insuficiente.");
        }
    }
}

?>