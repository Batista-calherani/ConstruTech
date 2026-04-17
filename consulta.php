<?php require_once 'php/init.php'; 
require_once 'php/data.php';
// print '<pre>';
// print_r($categoria);
// print_r($produtos_base);
// print '</pre>'
if ($_SESSION['access'] == false) {
    header("Location: Login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <script>
        // Example: Change '://example.com' to '://example.comwelcome'
const currentUrl = window.location.href;
const newWord = "categoria=";

// Check if the word is already there to avoid infinite loops or duplicates
if (!currentUrl.includes(newWord)) {
    const newUrl = currentUrl.endsWith('?') ? currentUrl + newWord : currentUrl + '?' + newWord;
    
    // Updates address bar without reloading
    window.history.replaceState({ path: newUrl }, '', newUrl);
    location.reload();
};  
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/Style.css">
    <link rel="icon" href="img/icon.jpg">
    <title><?php print $title; ?></title>
</head>
<body>
    <?php require_once 'partial/header.php';?>
    <div class="div-consulta">
        <?php 
        print ' <p class="paragrafo"> Catálogo </p>
        <ul class="col-apresent">';
        print ' <li>
                        <a class="button" href="consulta.php?categoria=" >Todos Produtos</a>
                </li>';
        foreach($categoria as $kcat => $nome ) {
            echo '<li>
                        <a class="button" href="consulta.php?categoria='.$kcat.'">'.$nome.'</a>
                </li>';
        }
        echo '</ul>';
?>
        
        <p class="paragrafo"> Estoque, e Muito Mais!! </p>
            <?php
            echo '<div class="grid2">';
            foreach($_SESSION['produtos'] as $produto){
                if($_GET['categoria'] == '' || $produto['categoria'] == $_GET['categoria']  ){
                echo '<div class="item" id="1" ><img src="'.$produto['imagem'].'" class="img" id="produtos"><p class="legend" >'.$produto['nome'].' <br> Preço: <R1>'.$produto['preco'].' </R1> <br> Categoria: '.$produto['categoria'].'<br> Quantidade em estoque: '.$produto['Qtd'].' <button class="button"onclick=pagina('.$produto['id'].')>Ajustar Qntd</button></p></div>';
            }
            };
            
            echo '</div></div>';
            ?>
            <div class="div-consulta4">
            <h2>Controle de Quantidades por Categoria</h2>

    <table class="table2" >
        <thead>
            <tr>
                <th>Produto</th>
                <th>Preço</th>
                <th>Quantidade</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categoria as $kcat => $nome): ?>
                
                <tr>
                    <td colspan="3" class="categoria-separador">
                        <?= $kcat ?>
                    </td>
                </tr>

                <?php foreach ($_SESSION['produtos'] as $produto): ?>
                    <?php if ($produto['categoria'] === $nome): ?>
                        <tr>
                            <td><?= $produto['nome'] ?></td>
                            <td>R$ <?= number_format($produto['preco'], 2, ',', '.') ?></td>
                            <td><?= $produto['Qtd'] ?></td>
                        </tr>
                    <?php endif; ?>
                <?php endforeach; ?>

            <?php endforeach; ?>
        </tbody>
    </table> 
            </div>
           <?php require_once 'partial/footer.php';?> 
    <script src="Script/Script.js">
    </script>
</body>
</html>