<?php

$database = App\Database::getInstance()->getConnection();

$p = new Produto();
$p->nome = 'Iogurte';
echo '<pre>'.var_export($p, true).'</pre>';

# Inserir no banco
/* $postRef = $database->getReference('produtos')->push($p);
$postKey = $postRef->getKey();
echo $postKey; */

# Ler do banco
// $snapshot = $database->getReference('produtos')->getSnapshot();
// $produtos = $snapshot->getValue();

$produtos = array(
    array('nome' => 'Produto 1', 'preco' => '0.00', 'Eletrodomésticos', 'Novo'),
    array('nome' => 'Produto 2', 'preco' => '0.00', 'Smartphones', 'Recondicionado'),
    array('nome' => 'Produto 3', 'preco' => '0.00', 'Bebês e Cia', 'Usado'),
);
echo count($produtos);
/* 
for ($i = 0; $i < count($produtos); $i++) {
    $produtos[$i]['condicao'] = 'Novo';
} */