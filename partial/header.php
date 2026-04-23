<?php
if ($_SESSION['access'] == true){
    echo '<div class="cont-header">
    <header>
        <nav>
        <div class="uni">
            <img src="' . $logo . '" class="logo"/>
            <h1 class="b" >CONSTRUTECH</h1>
        </div> 
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
        <div class="uni">
            <img src="' . $logo . '" class="logo"/>
            <h1 class="b">CONSTRUTECH</h1>
        </div> 
        </nav>
        <div class="ultbar">
         </div>
    </header>
    </div>';
}
?>
