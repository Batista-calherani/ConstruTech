<?php 
include 'php/init.php';

$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

// Security check
if ($_SESSION['access'] == false) {
    header("Location: Login.php");
    exit();
}

// Handle the POST request BEFORE any HTML is output to the page
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $post_id = $_POST['id'];
    $quantidade = $_POST['quantidade'];
    $preco = $_POST['preco'];
    foreach($_SESSION['produtos'] as &$produto) {
        if ($produto['id'] == $post_id) {
            $produto['Qtd'] += $quantidade;
            $produto['preco'] += $preco;
            break; // Stops the loop immediately after finding it
        }
    }
    unset($produto); // Dereference the variable to avoid side effects
    
    // Redirects to the same page to update data
    header('Location: detalhes.php?id=' . $post_id); 
    exit(); // Always exit after a header redirect
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Style.css">
    <link rel="icon" href="img/icon.jpg">
    <title><?php print $title; ?></title>
</head>
<body>
    <?php require_once 'partial/header.php'; ?>

    <div class="cont-grind">
    <?php require_once 'partial/leftbar.php'; ?>
    <div class="conteiner">

    <main class="align-text">
        <div class="manager_box">
            <?php
            foreach($_SESSION['produtos'] as $produto) {
                if ($produto['id'] == $_GET['id']) {
                    
                    // 1. Display Product Details
                    echo ' <h1 class="Title-manager"> ' . $produto['nome'] . ' <p class="Title-prod"> ' . $produto['descricao_curta'] . ' </p> </h1> <br>  <a href="consulta.php" class="move" > Voltar </a>
                    <img src="' . $produto['imagem'] . '" class="i2" > <br>
                    <div class="Title-prod"><b class="nope" > Quantidade: </b>' . $produto['Qtd'] . '<div class="legend2">  <b class="nope" > Preço: </b> ' . round($produto['preco'],2) . ' </div></div> ';
                    
                    // 2. Display the Form INSIDE the foreach match
                    echo '
                    <div class="div-consulta3">
                        <div class="text"> <p> Alterações </p> </div>
                        <form action="" method="post" class="form-consulta2">
                            <input type="hidden" name="id" value="' . $id . '">
                            <input type="number" name="quantidade" placeholder="Quantidade a adicionar" required>
                            <input type="number" name="preco" placeholder="Preço Ex. 10.00" step="any" required>
                            <button type="submit">Adicionar</button> <br>
                            <p>*Ps: Se for mudar somente uma opção deixar a outra com 0 </p>    
                        </form>
                    </div>';
                    break; // Stops the loop immediately after finding it
                }   
            }
            ?>
        </div>
    </main>

    </div>
    </div>

    <script src="Script/Script.js"></script>
</body>
</html>