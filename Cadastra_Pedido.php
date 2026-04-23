<?php require_once 'php/init.php';
if ($_SESSION['access'] == false) {
    header("Location: Login.php");
    exit();
}
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

<div class="cont-grind">
<?php require_once 'partial/leftbar.php'; ?>
<div class="conteiner">
    
<form action="" method="POST" class="div" >
        <div class="conteiner-login">
            <div class="conteiner-login">         
                <div class="div-login">
                    <div class="col-d">
                        <div class="Pai">
                    <h1 class="Modo" >Anote um Pedido</h1>
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
                        <input type="text" placeholder="Telefone" name="telefone" required autocomplete="off" id="preco">
                        <select name="categoria" id="categoria">
                            <option>Bruto</option>
                            <option>Ferramentas</option>
                            <option>Acabamento</option>
                        </select>
                        <select name="Status" id="Status">
                            <option>Pendente</option>
                            <option>Aguardando</option>
                            <option>Concluido</option>
                        </select>
                        <input type="text" placeholder="descrição curta" name="descricao" required autocomplete="off" id="descricao">
                        <input type="text" placeholder="Produto" name="Produto" required autocomplete="off" id="preco">
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
</div>
</div>

<?php require_once 'partial/footer.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' ){

    $ids = array_column($_SESSION['pedidos'],'id');
    $novoId = $ids ? max($ids) + 1:1;

    $_SESSION['pedidos'][] = [
    
        'id' => $novoId,
        'nome' => $_POST['nome'],
        'categoria' => $_POST['categoria'],
        'produto' => $_POST['Produto'],
        'Descricao' => $_POST['descricao'],
        'Quantidade' => $_POST['Qntd'] ?? '',
        'telefone' => $_POST['telefone'],
        'status' => $_POST['Status']
        
];
};
?>

    <script src="Script/Script.js"></script>
</body>
</html>