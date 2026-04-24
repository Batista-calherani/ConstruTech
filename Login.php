<?php include  'php/init.php'; 
include 'php/data.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php print $title;?></title>
        <link rel="stylesheet" href="css/Style.css"/>
        <link rel="icon" href="img/icon.jpg">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    </head>
    <body class="body_login">
        <?php require_once 'partial/header.php'; ?>
    <div class="cont-grind">
    <?php require_once 'partial/leftbar.php'; ?>
    <div class="conteiner">


    <div class="Log_size">
        <div class="out_border">
            <div class="Log_box">
                <h2 class="Log_title">Gerenciamento de Estoque ConstruTech</h2> 
                <p id="textoL" class="paragrafo1">Faça o login para acessar</p>
                <form method="POST" >
                    <label style="text-align: center;"></label>
                    <input class="Log_input" type="text" placeholder="User" autocomplete='off' name="user" id="username" maxlength="20" method="POST" /> <br>
                    <br>
                    <label style="text-align: center;"></label>
                    <input class="Log_input" type="password" placeholder="Password" name="password" id="pass" maxlength="8" method="POST" /> <br> 
                    <?php
                    echo '<button type="submit" class="button_Log">Enter</button>';
                    ?>
                </form>
            </div>
        </div>
    </div>

<?php
    if(isset($_POST['password']) && isset($_POST['user'])){
    $pass = $_POST['password'];
    $user = $_POST['user'];
    $thing = $complete;

    if ($user === '' && $pass === '') {
        echo '<div class="card" style="border: 1px solid #c23f36; padding: 11px; margin-bottom: 10px; background: #ffcac5; width: 500px;text-align: center ">
        <span style="color:red; font-weight:300; font-size:large">No information entered!</span></div>';
    }
    elseif ($user === '' || $pass === '') {
        echo '<div class="card" style="border: 1px solid #c23f36; padding: 11px; margin-bottom: 10px; background: #ffcac5; width: 500px;text-align: center"><span class="center1" style="color:red; font-weight:300;font-size:large; ">Something is still missing!</span></div>';
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
        echo '<div class="card" style="border: 1px solid #c23f36; padding: 11px; margin-bottom: 10px; background: #ffcac5; width: 500px;text-align: center"><span class="center1" style="color:red; font-weight:300;font-size:large">Wrong Password or user!</span></div>';
    }}
?>
    </div>
</div>
    </body>
</html>