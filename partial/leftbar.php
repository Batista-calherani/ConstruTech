<?php
if ($_SESSION['access'] == true){
    echo '<div class="leftbar">
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="cadastra_produto.php">Adicionar Item</a></li>
        <li><a href="consulta.php">Consultar Estoque</a></li>
        <li><a href="Pedidos.php">Manejar Pedidos</a></li>
        <li><a href="Excluir_item.php">Remoção</a></li>
    </ul>
</div>';
}
else {
    echo'<div class="leftbar">
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="cadastra_produto.php">Adicionar Item</a></li>
        <li><a href="consulta.php">Consultar Estoque</a></li>
        <li><a href="Pedidos.php">Manejar Pedidos</a></li>
        <li><a href="Login.php">Login</a></li>
        <li><a href="Excluir_item.php">Remoção</a></li>
    </ul>
    </div>';
}
?>