<?php include  'php/init.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php print $title; ?></title>
        <link rel="stylesheet" href="./css/Style.css"/>
        <link rel="icon" href="img/icon.jpg">

    </head>
<body>
<form action="" method='POST' >
        <div class="conteiner-login">
            <div class="conteiner-login">         
                <div class="continer-texto">
        
                </div>
                <div class="div-login">
                    <div class="col-e">
                        <h1>Bem vindo de Volta ! </h1>
                        <p>Caso queira criar uma conta, clique no botão abaixo</p>
                        <button ><a href="login.php">Login</a></button>
                        <button ><a href="index.php">Voltar</a></button>
                    </div>
                    <div class="col-d">
                        <div class="Pai">
                    <h1 class="Modo" >Crie uma Conta</h1>
                    <div class="logs">
                        <div class="circulo">
                            <img src="img/martelo.webp" id="a" draggable="false" >
                        </div>
                        <div class="circulo">
                            <img src="img/cimento.png" id="b" draggable="false" >
                            </div>
                        <div class="circulo">
                            <img src="img/torneira.webp" id="c" draggable="false" >
                        </div>
                    </div>
                    <div class="texto">
                        <p>Faça sua conta mais rápido, usando suas contas acima e faça cadastro por elas</p>
                    </div>
                    <div class="card">
                        <input type="text" placeholder="Usuario" required autocomplete="off" name="usuario">
                        <input type="password" placeholder="Senha" required minlength="5" maxlength="5" autocomplete="off" name="pass">
                        <br>
                        <button id="btn" type='submit' >Login</button>
                        <p id="p">Preencha os campos do formulário</p>
                    </div>
                </div>
                    </div>
                </div>
            </div>
        </div>
</form>

<?php require_once 'partial/footer.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST' ){

    $_SESSION['users'][] = $_POST['usuario'];
    $_SESSION['pass'][] = $_POST['pass'];
};

?>
</body>
</html>