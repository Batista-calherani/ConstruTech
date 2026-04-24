<?php
include_once "php/init.php";
include_once "php/data.php";
if ($_SESSION['access'] == false) {
    header("Location: Login.php");
    exit();
}
if (isset($_GET['action']) && isset($_GET['id'])) {
    $action = $_GET['action'];
    $id     = $_GET['id'];
    $pedidoEncontrado = false;

    foreach ($_SESSION['pedidos'] as &$pedido) {
        if ($pedido['id'] == $id) {
            $pedidoEncontrado = true;
            if ($action == "aumentar") {
                if ($pedido['status'] == "Pendente") {
                    $pedido['status'] = "Aguardando";
                } elseif ($pedido['status'] == "Aguardando") {
                    $pedido['status'] = "Concluido";
                } else {
                    // Status já é "Concluido" ou inválido, não faz nada
                }
            } elseif ($action == "diminuir") {
                if ($pedido['status'] == "Concluido") {
                    $pedido['status'] = "Aguardando";
                } elseif ($pedido['status'] == "Aguardando") {
                    $pedido['status'] = "Pendente";
                } else {
                    // Status já é "Pendente" ou inválido, não faz nada
                }
            }
            break;  // Sai do loop após encontrar e alterar
        }
    }
    
    if (!$pedidoEncontrado) {
    header('Location: Pedidos.php');
    }
    header('Location: Pedidos.php');
    exit;
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
                    <th>Descricao</th>
                    <th>Quantidade</th>
                    <th>Produto</th>
                    <th>Contato</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($_SESSION['pedidos'] as $coisas) {
                    echo '
                    <tr>
                    <td class="centro">' . $coisas['id'] . '</td>
                    <td>' . $coisas['nome'] . '</td>
                    <td>'; foreach($coisas['categoria'] as $catego ){
                        echo $catego, "<br>";
                    } echo '</td>
                    <td>' . $coisas['Descricao'] . '</td>
                    <td class="centro">
                    ' . $coisas['Quantidade'] . '
                    </td> <td>' . $coisas['produto'] . '</td>
                    <td>' . $coisas['telefone'] . '</td> 
                    <td><a href="?action=aumentar&id=' . $coisas['id'] . '" title="Aumentar"><strong>+</strong></a>' . $coisas['status']. '<a href="?action=diminuir&id=' . $coisas['id'] . '" title="Diminuir"><strong>-</strong></a></td>
                    </tr>   
                    ';
                }
                ?>
            </tbody>
        </table>
    </div>
    </div>




<?php require_once 'partial/footer.php';?>
    <script src="Script/Script.js"></script>
</body>
</html>