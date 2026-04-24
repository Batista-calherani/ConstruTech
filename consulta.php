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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="icon" href="img/icon.jpg">
    <title><?php print $title; ?></title>
</head>
<body>
    <?php require_once 'partial/header.php';?>

    <div class="cont-grind">
    <?php require_once 'partial/leftbar.php'; ?>
    <div class="conteiner">

    <div class="cont-consulta">
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
        
        <p class="paragrafo"></p>
            <?php
            echo '<div class="grid2">';
            foreach($_SESSION['produtos'] as $produto){
                if($_GET['categoria'] == '' || $produto['categoria'] == $_GET['categoria']  ){
                echo '<div class="item" id="1" ><img src="'.$produto['imagem'].'" class="img" id="produtos"><p class="legend" >'.$produto['nome'].' <br> Preço: <R1>'.round($produto['preco'],2).' </R1> <br> Categoria: '.$produto['categoria'].'<br> Quantidade em estoque: '.$produto['Qtd'].' <button class="button"onclick=pagina('.$produto['id'].')>Ajustar</button></p></div>';
            }
            };
            
            echo '</div></div>';
            ?>
            

    </div>
    </div>

           <?php require_once 'partial/footer.php';?> 
    <script src="Script/Script.js">
    </script>
</body>
</html>