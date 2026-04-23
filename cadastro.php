<?php
require_once 'php/init.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_id'])) {
    $deleteId = intval($_POST['delete_id']);
    foreach ($_SESSION['produtos'] as $index => $produto) {
        if ($produto['id'] === $deleteId) {
            unset($_SESSION['produtos'][$index]);
            $_SESSION['produtos'] = array_values($_SESSION['produtos']);
            $message = 'Item removido com sucesso.';
            break;
        }
    }
};
if ($_SESSION['access'] == false) {
    header("Location: Login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php print $title; ?></title>
        <link rel="stylesheet" href="./css/Style.css"/>
        <link rel="icon" href="img/icon.jpg">
    </head>
<body>
<?php require_once 'partial/header.php'; ?>
<div class="cont-grind">
<?php require_once 'partial/leftbar.php'; ?>
<div class="conteiner">

<div class="conteiner-login">
    <div class="conteiner-login">
        <div class="div-login">
            <div class="col-d">
                <div class="Pai">
                    <h1 class="Modo">Excluir itens desnecessários</h1>
                    <div class="texto">
                        <p>Selecione o item que você não precisa mais e clique em excluir.</p>
                    </div>
                    <?php if (!empty($message)): ?>
                        <div class="card" style="border: 1px solid #4caf50; padding: 12px; margin-bottom: 16px; background: #e8f5e9; color: #2e7d32;">
                            <?= htmlspecialchars($message) ?>
                        </div>
                    <?php endif; ?>

                    <?php if (empty($_SESSION['produtos'])): ?>
                        <div class="card">
                            <p>Não há itens no estoque para remover.</p>
                        </div>
                    <?php else: ?>
                        <?php foreach ($_SESSION['produtos'] as $produto): ?>
                            <div class="card" style="margin-bottom: 14px;">
                                <div style="display: flex; gap: 16px; align-items: center; flex-wrap: wrap;">
                                    <img src="<?= htmlspecialchars($produto['imagem']) ?>" alt="<?= htmlspecialchars($produto['nome']) ?>" style="width: 100px; height: auto; border-radius: 8px;" />
                                    <div style="flex: 1; min-width: 220px;">
                                        <h2 style="margin: 0 0 8px;"><?= htmlspecialchars($produto['nome']) ?></h2>
                                        <p style="margin: 0 0 6px;"><?= htmlspecialchars($produto['descricao_curta']) ?></p>
                                        <p style="margin: 0 0 6px;">Categoria: <?= htmlspecialchars($produto['categoria']) ?></p>
                                        <p style="margin: 0 0 6px;">Preço: R$ <?= htmlspecialchars($produto['preco']) ?></p>
                                        <p style="margin: 0;">Quantidade: <?= htmlspecialchars($produto['Qtd']) ?></p>
                                    </div>
                                    <form action="" method="post" style="margin: 0;">
                                        <input type="hidden" name="delete_id" value="<?= htmlspecialchars($produto['id']) ?>">
                                        <button id="btn" type="submit">Excluir</button>
                                    </form>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<?php require_once 'partial/footer.php'; ?>
</body>
</html>