<footer>
        <div class="conteiner-footer">
            <div class="col-footer">
                <div class="col-interior">
                    <h1>Suporte</h1>
                    <p>Sobrou alguma dúvida em relação a Hesko ou houve algum problema com o seu site? Não perca tempo e confira nossa central de atendimento,
                    capaz de responder qualquer dúvida que ainda tenha.  </p>
                </div>
            </div>
            <div class="col-footer">
                <div class="col-interior" id="redes-sociais">
                    <h1>Redes Sociais</h1>
                    <p><b>Instagram:</b> @heskoworks </p>
                    <p><b>GitHub:</b> @heskoworks </p>
                    <p><b>Linkedin:</b> linkedin.com/company/HeskoWorks</p>
                    <p><b>Twitter / X:</b> @HeskoWorks </p> 
                </div>
            </div>
            <div class="col-footer">
                <div class="col-interior">
                    <h1>Feedback</h1>
                    <p>Não deixe de avaliar a Hesko e seus serviços, para que nós possamos oferecer o melhor serviço possível.</p>
                </div>
            </div>
            <div class="col-footer">
                <div class="col-interior">
                    <?php
                $subtudo = 0;
                foreach ($_SESSION['produtos'] as $coisas) {
                    $tudo = 0; 
                    $tudo = $coisas['Qtd'] * $coisas['preco'];
                    $subtudo += $tudo;
                }
                    echo '<H1>Subtudo: </H1>
                <p> R$'. $subtudo .'</p>';   
                    ?>
                </div>
            </div>
        </div>
    </footer>