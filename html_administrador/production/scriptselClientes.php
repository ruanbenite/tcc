
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
<script src="../vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
<script src="../build/js/custominzado.min.js" type="text/javascript"></script>
<script src="pt-br.js" type="text/javascript"></script>
<script type="text/javascript">



    $('#exampleModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); // Button that triggered the modal
        var recipientgeneroCliente = button.data('whatevergenerocliente');
        alert(recipientgeneroCliente);
        var recipientidCliente = button.data('whateveridcliente');
        var recipientnomeCliente = button.data('whatevernomecliente');
        var recipientsobrenomeCliente = button.data('whateversobrenomecliente');
        var recipientemailCliente = button.data('whateveremailcliente');
        var recipientsenhaCliente = button.data('whateversenhacliente');
        var recipienttel_celularCliente = button.data('whatevertel_celularcliente');
        var recipienttel_fixoCliente = button.data('whatevertel_fixocliente');
        var recipientlogradouroCliente = button.data('whateverlogradourocliente');
        var recipientnumero_logradouroCliente = button.data('whatevernumero_logradourocliente');
        var recipientcepCliente = button.data('whatevercepcliente');
        var recipientcpfCliente = button.data('whatevercpfcliente');
        var recipientrgCliente = button.data('whateverrgcliente');
        var recipientgrau_escolarCliente = button.data('whatevergrau_escolarcliente');
        var recipientdt_nascimentoCliente = button.data('whateverdt_nascimentocliente');
        var recipientcidadeCliente = button.data('whatevercidadecliente');
        var recipientobsCliente = button.data('whateverobscliente');
        var recipientindicacaoCliente = button.data('whateverindicacaocliente');
        var recipientprofissaoCliente = button.data('whateverprofissaocliente');
        var modal = $(this);
        modal.find('.modal-title').text('Editar dados - ' + recipientnomeCliente);

        alert(recipientobsCliente);

        alert('if');

        //    if (recipientgeneroCliente === 0) {
        //        alert(recipientgeneroCliente);
        //        alert('masculino');
        //        $('#recipientgeneroFCliente').prop("checked", "false");
        //        $('#recipientgeneroMCliente').prop("checked", "true");

        //   }
        //   if (recipientgeneroCliente === 1) {
        //       alert(recipientgeneroCliente);
        //       alert('feminino');
        //      $('#recipientgeneroMCliente').prop("checked", "false");
        //     $('#recipientgeneroFCliente').prop("checked", "true");

        // }
        if (recipientgeneroCliente == 0) {
            alert(recipientgeneroCliente);
            alert('masculino');
            $('#recipientgeneroFCliente').prop("checked", "false");
            $('#recipientgeneroMCliente').prop("checked", "true");

            $('#recipientgeneroMCliente').addClass("iradio_flat-green checked");
            $('#recipientgeneroFCliente').addClass("iradio_flat-green");
        }
        if (recipientgeneroCliente == 1) {
            alert(recipientgeneroCliente);
            alert('feminino');
            $('#recipientgeneroMCliente').prop("checked", "false");
            $('#recipientgeneroFCliente').prop("checked", "true");

            $('#recipientgeneroMCliente').addClass("iradio_flat-green");
            $('#recipientgeneroFCliente').addClass("iradio_flat-green checked");
        }

        alert('passei');
        modal.find('#recipientgeneroCliente').val(recipientgeneroCliente);
        modal.find('#recipientidCliente').val(recipientidCliente);
        modal.find('#recipientnomeCliente').val(recipientnomeCliente);
        modal.find('#recipientsobrenomeCliente').val(recipientsobrenomeCliente);
        modal.find('#recipientemailCliente').val(recipientemailCliente);
        modal.find('#recipientsenhaCliente').val(recipientsenhaCliente);
        modal.find('#recipienttel_celularCliente').val(recipienttel_celularCliente);
        modal.find('#recipienttel_fixoCliente').val(recipienttel_fixoCliente);
        modal.find('#recipientlogradouroCliente').val(recipientlogradouroCliente);
        modal.find('#recipientnumero_logradouroCliente').val(recipientnumero_logradouroCliente);
        modal.find('#recipientcepCliente').val(recipientcepCliente);
        modal.find('#recipientcpfCliente').val(recipientcpfCliente);
        modal.find('#recipientrgCliente').val(recipientrgCliente);
        modal.find('#recipientgrau_escolarCliente').val(recipientgrau_escolarCliente);
        modal.find('#recipientprofissaoCliente').val(recipientprofissaoCliente);
        modal.find('#recipientcidadeCliente').val(recipientcidadeCliente);
        modal.find('#recipientdt_nascimentoCliente').val(recipientdt_nascimentoCliente);
        modal.find('#recipientobsCliente').val(recipientobsCliente);
        modal.find('#recipientindicacaoCliente').val(recipientindicacaoCliente);

    });

    $('#excluirModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); // Button that triggered the modal
        var recipientidCliente = button.data('whateveridcliente');
        alert(recipientidCliente);
        var modal = $(this);
        modal.find('.modal-title').text('Excluir o cadastro ?');
        modal.find('#recipientidCliente').val(recipientidCliente);


    });

</script>