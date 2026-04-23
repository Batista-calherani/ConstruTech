<?php
if ($_SESSION['access'] == true){
    echo '<div class="cont-header">
    <header>
        <nav>
            <h1 class="b" >CONSTRUTECH</h1>
            <div class="Login_img">
            <img src="img/icon.png" class="a" >
            <p> '.$_SESSION['Active'].'</p>
            </div>
        </nav>
        <div class="ultbar">
         </div>
    </header>
    </div>';
}
else {
    echo'<div class="cont-header">
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
