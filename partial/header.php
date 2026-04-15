<?php
if ($_SESSION['access'] == true){
    echo '<div class="leftbar">
        <img src="' . $logo . '" class="logo"/>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="cadastra_produto.php">Gerenciar Item</a></li>
        <li><a href="consulta.php">Consultar Estoque</a></li>
        <li><a href="consulta.php">Manejar Pedidos</a></li>
        <li><a href="cadastro.php">Cadastro</a></li>
    </ul>
</div>

<div class="conteiner">
<header>
        <nav>
            <h1>CONSTRUTECH</h1> 
        </nav>
        <div class="ultbar">
         </div>
</header>
</div>';
}
else {
    echo'<div class="leftbar">
        <img src="' . $logo . '" class="logo"/>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="cadastra_produto.php">Gerenciar Item</a></li>
        <li><a href="consulta.php">Consultar Estoque</a></li>
        <li><a href="consulta.php">Manejar Pedidos</a></li>
        <li><a href="Login.php">Login</a></li>
        <li><a href="cadastro.php">Cadastro</a></li>
    </ul>
</div>

<div class="conteiner">
<header>
        <nav>
            <h1>CONSTRUTECH</h1> 
        </nav>
        <div class="ultbar">
         </div>
</header>
</div>';
}
?>
