<!DOCTYPE html>
<html lang="pt-br">
    <?php include_once 'headerselAtendentes.php'; ?>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <?php include_once 'menuleft.php'; ?>

                <!-- top navigation -->
                <?php include_once 'menutop.php'; ?>
                <!-- /top navigation -->

                <!-- page content -->
                <?php include_once 'selCaixaConteudo.php'; ?>
                <!-- /page content -->
                <?php include_once 'caixaModal.php'; ?>

                <?php include_once 'footer.php'; ?>
            </div>
        </div>
        <?php include_once 'scriptselCaixa.php'; ?>
    </body>
</html>