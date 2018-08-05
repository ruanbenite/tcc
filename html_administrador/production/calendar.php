<!DOCTYPE html>
<html lang="pt-br">
    <?php include_once 'headCalendar.php'; ?>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <?php include_once 'menuleft.php'; ?>

                <!-- top navigation -->
                <?php include_once 'menutop.php'; ?>
                <!-- /top navigation -->

                <!-- page content -->

                <!-- /page content -->
                <?php include_once 'calendarConteudo.php'; ?>
                <!-- footer content -->
                <?php include_once 'footer.php'; ?>
                <!-- /footer content -->
            </div>
        </div>

        <!-- calendar modal -->
        <?php include_once 'calendarModal.php'; ?>

        <!-- /calendar modal -->
        <?php include_once 'scriptCalendar.php'; ?>
    </body>
</html>