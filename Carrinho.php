<?php

class Carrinho {
    private $itens = [];

    public function adicionarProduto(Produto $produto, $quantidade) {
        if ($produto->temEstoque($quantidade)) {
            $this->itens[] = [
                'produto' => $produto,
                'quantidade' => $quantidade
            ];
            $produto->diminuirEstoque($quantidade);
        } else {
            echo "Estoque insuficiente para o produto: " . $produto->getNome() . PHP_EOL;
        }
    }

    public function calcularTotal() {
        $total = 0;
        foreach ($this->itens as $item) {
            $total += $item['produto']->getPreco() * $item['quantidade'];
        }
        return $total;
    }

    public function finalizarCompra() {
        if (empty($this->itens)) {
            echo "O carrinho está vazio." . PHP_EOL;
        } else {
            echo "Compra finalizada! Total: R$" . number_format($this->calcularTotal(), 2, ',', '.') . PHP_EOL;
        }
    }
}

?>