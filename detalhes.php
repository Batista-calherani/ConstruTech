<!DOCTYPE html> <?php include  'php/init.php';
$id = isset($_GET['id']) ? (int) $_GET['id']: 0;
if ($_SESSION['access'] == false) {
    header("Location: Login.php");
    exit();
}
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Style.css">
    <link rel="icon" href="img/icon.jpg">
    <title><?php print $title; ?></title>
</head>
<body>
        <?php require_once 'partial/header.php'; 
    echo'<main class="align-text">
        <div class="big_box"> <h1>';

        foreach($_SESSION['produtos'] as $produto )
        
        {if ($produto['id'] == $_GET['id']  ) {
        echo' '.$produto['nome'].' <p> <br> '.$produto['descricao_curta'].'</p> <a href="consulta.php" class="move" > Voltar </a> </h1>
        <img src="'.$produto['imagem'].'" class="i2" > <br>
        <b class="nope" > Quantidade:</b><div class="legend2" >'.$produto['Qtd'].'</div> <h1 class="move" >'.$produto['categoria'].' <br> Preço: <R1>'.$produto['preco'].'</R1><br></h1>';
        break; // Para o loop imediatamente após encontrar
    };   
};
?>
    </div>
</main>
<div class="div-consulta2"> 
    <div class="text"> <p> Adicionar mais ao estoque </p> </div>
    <form action="" method="post" class="form-consulta2">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="number" name="quantidade" placeholder="Quantidade a adicionar" required>
        <button type="submit">Adicionar</button>
    </form>
<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST' ){

    $id = $_POST['id'];
    $quantidade = $_POST['quantidade'];

    foreach($_SESSION['produtos'] as &$produto) {
        if ($produto['id'] == $id) {
            $produto['Qtd'] += $quantidade;
            break; // Para o loop imediatamente após encontrar
        }
    }
    unset($produto); // Desreferencia a variável para evitar efeitos colaterais
    Header('Location: detalhes.php?id='.$id); // Redireciona para a mesma página para atualizar os dados
}
?>
 </div>
<script src="Script/Script.js" >  </script>
</body>
</html>