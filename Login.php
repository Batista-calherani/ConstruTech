<?php include  'php/init.php'; 
include 'php/data.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php print $title;?></title>
        <link rel="stylesheet" href="css/Style.css"/>
        <link rel="icon" href="img/icon.jpg">
    </head>
    <body class="body_login">
        <?php require_once 'partial/header.php'; ?>
        <div class="big_box2">
        <h1>Bem-Vindo ao ConstruTech </h1> </div> 
        <p id="textoL" class="paragrafo1">Faça o login para acessar</p>
        <form>
            <label style="text-align: center;">Usuário: </label>
            <input style="text-align: center; border: 5px solid silver; border-radius: 200px ;" type="text" placeholder="User" autocomplete='off' name="user" id="username" maxlength="20" method="POST" /> <br>
            <label style="text-align: center;">Senha : </label>
            <input style="text-align: center; border: 5px solid silver; border-radius: 200px ;" type="password" placeholder="Password" name="password" id="pass" maxlength="8" method="POST" /> <br>
            </form>
            <?php
            echo '<button type="submit" class="button1" onclick="Confirmation()">Enter</button>';?>
    <script>
    function Confirmation(){
    const pass = document.getElementById("pass").value
    const user = document.getElementById("username").value
    const thing = <?php echo $try ?>;
    const ale = document.getElementById("textoL");

    if(pass == "" && user == ""){
        ale.innerText = "No information entered!";
        ale.style.color = "blue";
        ale.style.fontWeight = 600;
    }
    else if(pass == "" ||user =="" ){
        ale.innerText = "Something is still missing!";
        ale.style.color = "yellow";
        ale.style.fontWeight = 600;
    }
    else if(thing[user]&& thing [user] === pass ) {
        window.location.href = "index.php";
    }
    else {
        ale.innerText = "Wrong Password or user!";
        ale.style.color = "red";
        ale.style.fontWeight = 600;
    }

}
</script>
    </body>
</html>