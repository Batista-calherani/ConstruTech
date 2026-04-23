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
    <div class="cont-grind">
    <?php require_once 'partial/leftbar.php'; ?>
    <div class="conteiner">
    <div class="center">
        <div class="big_box2">
        <h1>Bem-Vindo ao ConstruTech </h1> </div> 
        <p id="textoL" class="paragrafo1">Faça o login para acessar</p>
        <form method="POST" >
            <label style="text-align: center;">Usuário: </label>
            <input style="text-align: center; border: 5px solid silver; border-radius: 200px ;" type="text" placeholder="User" autocomplete='off' name="user" id="username" maxlength="20" method="POST" /> <br>
            <label style="text-align: center;">Senha : </label>
            <input style="text-align: center; border: 5px solid silver; border-radius: 200px ;" type="password" placeholder="Password" name="password" id="pass" maxlength="8" method="POST" /> <br> 
            <?php
            echo '<button type="submit" class="button1">Enter</button>';
            ?>
            </form>
    </div>
<?php
    if(isset($_POST['password']) && isset($_POST['user'])){
    $pass = $_POST['password'];
    $user = $_POST['user'];
    $thing = $complete;

    if ($user === '' && $pass === '') {
        echo '<div class="card" style="border: 1px solid #c23f36; padding: 11px; border-radius: 1rem; margin-bottom: 10px; background: #ffffff; width: 500px;text-align: center ">
        <span style="color:red; font-weight:300; font-size:large">No information entered!</span></div>';
    }
    elseif ($user === '' || $pass === '') {
        echo '<div class="card" style="border: 1px solid #c23f36; padding: 11px; border-radius: 1rem; margin-bottom: 10px; background: #ffffff; width: 500px;text-align: center"><span class="center1" style="color:red; font-weight:300;font-size:large; ">Something is still missing!</span></div>';
    }
    elseif (isset($thing[$user]) && $thing[$user] === $pass) {

        $_SESSION['access'] = true;
        $_SESSION['Active'] = $user;

        echo "<span class='center1' style='color:green; font-weight:600;'>Welcome $user!</span>";

        // Redirect (like window.location.href)
        header("Location: index.php");
        exit;
    }
    else {
        echo '<div class="card" style="border: 1px solid #c23f36; padding: 11px; border-radius: 1rem; margin-bottom: 10px; background: #ffffff; width: 500px;text-align: center"><span class="center1" style="color:red; font-weight:300;font-size:large">Wrong Password or user!</span></div>';
    }}
?>
    </div>
</div>
    </body>
</html>