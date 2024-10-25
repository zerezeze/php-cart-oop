<?php

// Incluindo os arquivos de classe
require_once 'src/Produto.php';
require_once 'src/Carrinho.php';

// Criando alguns produtos
$produto1 = new Produto("Smartphone", 1500.00, 10);
$produto2 = new Produto("Notebook", 3000.00, 5);
$produto3 = new Produto("Tablet", 800.00, 8);

// Criando o carrinho
$carrinho = new Carrinho();

// Adicionando produtos ao carrinho
$carrinho->adicionarProduto($produto1, 2);
$carrinho->adicionarProduto($produto2, 1);
$carrinho->adicionarProduto($produto3, 3);

// Finalizando a compra
$carrinho->finalizarCompra();

?>