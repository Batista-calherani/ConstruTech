<?php require_once 'php/init.php'; 

// print '<pre>';
// print_r($categoria);
// print_r($produtos_base);
// print '</pre>'

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
}
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/Style.css">
    <link rel="icon" href="img/icon.jpg">
    <title><?php print $title; ?></title>
</head>
<body>
    <?php require_once 'partial/header.php';?>
    <article>
        <div class="subtitulo">
                <p class="paragrafo"><?php echo $title ?>  </p>
                <div class="col-apresent">
                    <div class="botao-1">
                        <a href="Contato.php" >ENTRE EM CONTATO</a>
                    </div>
                </div>
            </div>
        </article>
        <?php 
        print ' <p class="paragrafo"> Catálogo </p>
        <ul class="col-apresent">';
        print ' <li>
                        <a class="button" href="Produtos.php?categoria=" >Todos Produtos</a>
                </li>';
        foreach($categoria as $kcat => $nome ) {
            echo '<li>
                        <a class="button" href="produtos.php?categoria='.$kcat.'">'.$nome.'</a>
                </li>';
        }
        echo '</ul>';
?>

        <p class="paragrafo"> Estoque, e Muito Mais!! </p>
            <?php
            echo '<div class="grid2">';
            foreach($_SESSION['produtos'] as $produto){
                if($_GET['categoria'] == '' || $produto['categoria'] == $_GET['categoria']  ){
                echo '<div class="item"><img src="'.$produto['imagem'].'" class="img" id="produtos"><p class="legend" >'.$produto['nome'].' <br> Preço: <R1>'.$produto['preco'].' </R1> Categoria: '.$produto['categoria'].' <button class="button"onclick=pagina('.$produto['id'].')>Comprar</button></p></div>';
            }
            };
            
            echo '</div>';
            ?>
    <script src="Script.js"></script>
</body>
</html>