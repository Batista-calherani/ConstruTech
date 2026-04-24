<footer>
        
            <div class="col-footer">
                <div class="col-interior">
                    <?php
                $subtudo = 0;
                foreach ($_SESSION['produtos'] as $coisas) {
                    $tudo = 0; 
                    $tudo = $coisas['Qtd'] * $coisas['preco'];
                    $subtudo += $tudo;
                }
                    echo '<p>Subtudo:  R$ '. round($subtudo,2) .'</p>';   
                    ?>
                </div>
            </div>
        </div>
    </footer>