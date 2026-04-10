<?php require_once 'php/init.php'; 
require_once 'php/data.php';
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
            
            <div class="div-consulta2">
            <?php
            echo '<div class="grid3">';
            foreach($categoria as $kcat => $nome ) {
            if($_GET['categoria'] == '' || $nome == $_GET['categoria']  ){
            echo '<div>Categoria: '.$nome.'<br> Quantidade em estoque: '.  $produto['Qtd'] .'</div>';}
        };
            ?>  
            </div>
    <script src="Script/Script.js">
        function Warning(){
    const Alert = document.getElementById('test')
    const color = document.getElementById('1')
    if(Alert <= 10){
        color.style.color = 'red'
    }
    setInterval(Warning(),1000);
}

    </script>
</body>
</html>