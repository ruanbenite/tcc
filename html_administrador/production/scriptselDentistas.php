
<!-- jQuery -->
<script src="../vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="../vendors/nprogress/nprogress.js"></script>
<!-- iCheck -->
<script src="../vendors/iCheck/icheck.min.js"></script>
<!-- Datatables -->
<script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
<script src="../vendors/jszip/dist/jszip.min.js"></script>
<script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

<!-- Custom Theme Scripts -->
<script src="../build/js/custominzado.min.js" type="text/javascript"></script>
<script src="pt-br.js" type="text/javascript"></script>
<script src="../vendors/validator/validator.js"></script>
<script src="js/ajax/ajaxDentistas.js" type="text/javascript"></script>
<script type="text/javascript">



    $('#exampleModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); // Button that triggered the modal
        var recipientgeneroDentista = button.data('whatevergenerodentista');
        var recipientidDentista = button.data('whateveriddentista');
        var recipientnomeDentista = button.data('whatevernomedentista');
        var recipientsobrenomeDentista = button.data('whateversobrenomedentista');
        var recipientemailDentista = button.data('whateveremaildentista');
        var recipientsenhaDentista = button.data('whateversenhadentista');
        var recipienttel_celularDentista = button.data('whatevertel_celulardentista');
        var recipienttel_fixoDentista = button.data('whatevertel_fixodentista');
        var recipientlogradouroDentista = button.data('whateverlogradourodentista');
        var recipientnumero_logradouroDentista = button.data('whatevernumero_logradourodentista');
        var recipientcepDentista = button.data('whatevercepdentista');
        var recipientcpfDentista = button.data('whatevercpfdentista');
        var recipientrgDentista = button.data('whateverrgdentista');
        var recipientgrau_escolarDentista = button.data('whatevergrau_escolardentista');
        var recipientdt_nascimentoDentista = button.data('whateverdt_nascimentodentista');
        var recipientcidadeDentista = button.data('whatevercidadedentista');
        var recipientobsDentista = button.data('whateverobsdentista');
        var recipientcargoDentista = button.data('whatevercargodentista');
        var recipientprofissaoDentista = button.data('whateverprofissaodentista');
        var recipientstatusDentista = button.data('whateverstatusdentista');
        var recipientsalarioDentista = button.data('whateversalariodentista');
        var modal = $(this);
        modal.find('.modal-title').text('Editar dados - ' + recipientnomeDentista);
       
        alert('if');

        if (recipientgeneroDentista === 0) {
            alert(recipientgeneroDentista);
            alert('masculino');
            $('#recipientgeneroFDentista').prop("checked", "false");
            $('#recipientgeneroMDentista').prop("checked", "true");

        }
        if (recipientgeneroDentista === 1) {
            alert(recipientgeneroDentista);
            alert('feminino');
            $('#recipientgeneroMDentista').prop("checked", "false");
            $('#recipientgeneroFDentista').prop("checked", "true");

        }
        alert('passei');
        modal.find('#recipientgeneroDentista').val(recipientgeneroDentista);
        modal.find('#recipientidDentista').val(recipientidDentista);
        modal.find('#recipientnomeDentista').val(recipientnomeDentista);
        modal.find('#recipientsobrenomeDentista').val(recipientsobrenomeDentista);
        modal.find('#recipientemailDentista').val(recipientemailDentista);
        modal.find('#recipientsenhaDentista').val(recipientsenhaDentista);
        modal.find('#recipienttel_celularDentista').val(recipienttel_celularDentista);
        modal.find('#recipienttel_fixoDentista').val(recipienttel_fixoDentista);
        modal.find('#recipientlogradouroDentista').val(recipientlogradouroDentista);
        modal.find('#recipientnumero_logradouroDentista').val(recipientnumero_logradouroDentista);
        modal.find('#recipientcepDentista').val(recipientcepDentista);
        modal.find('#recipientcpfDentista').val(recipientcpfDentista);
        modal.find('#recipientrgDentista').val(recipientrgDentista);
        modal.find('#recipientgrau_escolarDentista').val(recipientgrau_escolarDentista);
        modal.find('#recipientprofissaoDentista').val(recipientprofissaoDentista);
        modal.find('#recipientcidadeDentista').val(recipientcidadeDentista);
        modal.find('#recipientdt_nascimentoDentista').val(recipientdt_nascimentoDentista);
        modal.find('#recipientobsDentista').val(recipientobsDentista);
        modal.find('#recipientstatusDentista').val(recipientstatusDentista);
        modal.find('#recipientcargoDentista').val(recipientcargoDentista);
        modal.find('#recipientsalarioDentista').val(recipientsalarioDentista);


    });

    $('#excluirModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); // Button that triggered the modal
        var recipientidDentista = button.data('whateveriddentista');
        alert(recipientidDentista);
        var modal = $(this);
        modal.find('.modal-title').text('Excluir o cadastro ?');
        modal.find('#recipientidDentista').val(recipientidDentista);


    });

</script>
