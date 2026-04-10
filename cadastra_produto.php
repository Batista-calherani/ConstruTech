<?php require_once 'php/init.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/Style.css">
    <link rel="icon" href="img/icon.jpg">
    <title><?php print $title; ?></title>
</head>
<body>
<?php require_once 'partial/header.php'; ?>
<form action="" method="POST" class="div" >
        <div class="conteiner-login">
            <div class="conteiner-login">         
                <div class="div-login">
                    <div class="col-d">
                        <div class="Pai">
                    <h1 class="Modo" >Cadastre um produto</h1>
                    <div class="logs">
                        <div class="circulo">
                            <img src="img/martelo.webp" id="a" draggable="false" >
                        </div>
                        <div class="circulo">
                            <img src="img/cimento.png" id="b" draggable="false" >
                            </div>
                        <div class="circulo">
                            <img src="img/torneira.webp" id="c" draggable="false" >
                        </div>
                    </div>
                    <div class="card">
                        <input type="text" placeholder="Nome" name="nome" required autocomplete="off" id="nome">
                        <input type="text" placeholder="Preço" name="preco" required autocomplete="off" id="preco">
                        <select name="categoria" id="categoria">
                            <option>Bruto</option>
                            <option>Ferramentas</option>
                            <option>Acabamento</option>
                        </select>
                        <input type="text" placeholder="descrição curta" name="descricao_curta" required autocomplete="off" id="descricao_curta">
                        <input type="text" placeholder="Link para imagem" name="image" required autocomplete="off" id="preco">
                        <input type="number" placeholder="Quantidade" name="Qntd" required id="Qntd">
                        <br>
                        <button id="btn" type="submit" >Send</button>
                        <p id="p">Preencha os campos do formulário</p>
                    </div>
                </div>
                    </div>
                </div>
            </div>
        </div>
</form>


<?php require_once 'partial/footer.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST' ){

    $ids = array_column($_SESSION['produtos'],'id');
    $novoId = $ids ? max($ids) + 1:1;

    $_SESSION['produtos'][] = [
    
        'id' => $novoId,
        'nome' => $_POST['nome'],
        'preco' => $_POST['preco'],
        'categoria' => $_POST['categoria'],
        'descricao_curta' => $_POST['descricao_curta'],
        'imagem' => $_POST['image'],
        'Qtd' => $_POST['Qntd'] ?? ''
];
};
?>
    <script src="Script/Script.js"></script>
</body>
</html>