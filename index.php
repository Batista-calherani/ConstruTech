<?php
include_once "php/init.php";
if (isset($_GET['access']) && $_GET['access'] == 'true') {
    $_SESSION['access'] = true;
}
elseif ($_SESSION['access'] == false) {
    header("Location: Login.php");
    exit();
}
if (isset($_GET['Active'])){
    print_r($_SESSION['Active']);
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="./css/Style.css">
    <link rel="icon" href="img/icon.jpg">
    <title><?php print $title;?></title>
</head>
<body>

    <?php require_once 'partial/header.php';?>

    <div class="cont-grind">
    <?php require_once 'partial/leftbar.php'; ?>
    <div class="conteiner">

    <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nome</th>
                    <th>Categoria</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                    <th>Situação</th>
                    <th>Total:</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $subtudo = 0;
                foreach ($_SESSION['produtos'] as $coisas) {
                    $tudo = 0;

                    $tudo = $coisas['Qtd'] * $coisas['preco'];
                    $subtudo += $tudo;

                     if ($coisas['Qtd'] == $limite_minimo) {
                        $unidade = 'Quase Acabando ⚠';
                    }elseif ($coisas['Qtd'] == 0) {
                        $unidade = 'Sem Estoque ❌';
                    } elseif ($coisas['Qtd'] > $limite_minimo) {
                        $unidade = 'Tudo certo ✔';
                    } elseif ($coisas['Qtd'] < 0) {
                        $unidade = 'Quantidade em Falência ❌';
                    } else {
                        $unidade = 'Acabando ❌';
                    }
                    
                    echo '
                    <tr>
                    <td class="centro">' . $coisas['id'] . '</td>
                    <td>' . $coisas['nome'] . '</td>
                    <td>' . $coisas['categoria'] . '</td>
                    <td>' . round($coisas['preco'],2) . '</td>
                    <td class="centro">
                    ' . $coisas['Qtd'] . '
                    </td>
                    <td>' . $unidade . '</td>
                    <td>' . round($tudo,2) . '</td>  
                    </tr>   
                    ';
                }
                ?>
            </tbody>
            <tfoot>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>Subtudo: </td>
                <td><?php print round($subtudo,2) ?></td>
            </tfoot>
        </table>
    </div>
    </div>




    <?php require_once 'partial/footer.php';?>
    <script src="Script/Script.js"></script>
</body>
</html>