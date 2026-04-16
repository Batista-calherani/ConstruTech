<?php
$title = 'Gerenciamento';
$logo = 'img/logo.png';

$categoria = [
    'Bruto' => 'Bruto',
    'Ferramentas' => 'Ferramentas',
    'Acabamento' => 'Acabamento'
];

$categoriaTotal = [
    'Bruto' => 0,
    'Ferramentas' => 0,
    'Acabamento' => 0
];

$Produtos = [
    [
        'id' => 1,
        'nome' => 'Cimento',
        'preco' => '35.00',
        'categoria' => 'Bruto',
        'descricao_curta' => 'Uma saco de cimento de 50kg.',
        'imagem' => 'img/cimento.png',
        'Qtd' => 0
    ],
    [
        'id' => 2,
        'nome' => 'Martelo',
        'preco' => '25.00',
        'categoria' => 'Ferramentas',
        'descricao_curta' => 'Um martelo.',
        'imagem' => 'img/martelo.webp',
        'Qtd' => 0
    ],
    [
        'id' => 3,
        'nome' => 'Torneira',
        'preco' => '75.00',
        'categoria' => 'Acabamento',
        'descricao_curta' => 'Uma torneira.',
        'imagem' => 'img/torneira.webp',
        'Qtd' => 0
    ]
];

$users = ['Gustavo','Matheus'];
$pass = ['54321','40028'];
$access = false;
$Active = null;
