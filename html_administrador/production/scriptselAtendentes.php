
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
        var recipientgeneroAtendente = button.data('whatevergeneroatendente');
        var recipientidAtendente = button.data('whateveridatendente');
        var recipientnomeAtendente = button.data('whatevernomeatendente');
        var recipientsobrenomeAtendente = button.data('whateversobrenomeatendente');
        var recipientemailAtendente = button.data('whateveremailatendente');
        var recipientsenhaAtendente = button.data('whateversenhaatendente');
        var recipienttel_celularAtendente = button.data('whatevertel_celularatendente');
        var recipienttel_fixoAtendente = button.data('whatevertel_fixoatendente');
        var recipientlogradouroAtendente = button.data('whateverlogradouroatendente');
        var recipientnumero_logradouroAtendente = button.data('whatevernumero_logradouroatendente');
        var recipientcepAtendente = button.data('whatevercepatendente');
        var recipientcpfAtendente = button.data('whatevercpfatendente');
        var recipientrgAtendente = button.data('whateverrgatendente');
        var recipientgrau_escolarAtendente = button.data('whatevergrau_escolaratendente');
        var recipientdt_contratacaoAtendente = button.data('whateverdt_contratacaoatendente');
        var recipientstatusAtendente = button.data('whateverstatusatendente');
        var recipientdt_nascimentoAtendente = button.data('whateverdt_nascimentoatendente');
        var recipientcidadeAtendente = button.data('whatevercidadeatendente');
        var recipientobsAtendente = button.data('whateverobsatendente');
        var recipientsalarioAtendente = button.data('whateversalarioatendente');

        var modal = $(this);
        modal.find('.modal-title').text('Editar dados - ' + recipientnomeAtendente);

        alert('if');

        if (recipientgeneroAtendente == 0) {
            alert(recipientgeneroAtendente);
            alert('masculino');
            $('#recipientgeneroFAtendente').prop("checked", "false");
            $('#recipientgeneroMAtendente').prop("checked", "true");
            $('#recipientgeneroMAtendente').addClass("iradio_flat-green checked");
            $('#recipientgeneroFAtendente').addClass("iradio_flat-green");
            // $("#recipientgeneroFAtendente").removeAttr('checked');
            // $('#recipientgeneroFAtendente').attr('checked', false);
            // $('#recipientgeneroMAtendente').attr('checked', true);
            //
            // $("#m").attr("checked", "checked");
            // $("#f").removeAttr('checked');
            //$('#f').prop("checked", "false");
            //$('#m').prop("checked", "true");

            //('#recipientgeneroMAtendente').val('checked');
        }
        if (recipientgeneroAtendente == 1) {
            alert(recipientgeneroAtendente);
            alert('feminino');
            $('#recipientgeneroMAtendente').prop("checked", "false");
            $('#recipientgeneroFAtendente').prop("checked", "true");
            $('#recipientgeneroMAtendente').addClass("iradio_flat-green");
            $('#recipientgeneroFAtendente').addClass("iradio_flat-green checked");
            // $("#recipientgeneroMAtendente").removeAttr('checked');
            //$('#recipientgeneroMAtendente').attr('checked', false);
            // $('#recipientgeneroFAtendente').attr('checked', true);
            //('#recipientgeneroFAtendente').val(checked);
            //
            //$('#m').prop("checked", "false");
            // $('#f').prop("checked", "true");
            //  $("#f").attr( "checked", "checked" );
            //  $("#m").removeAttr('checked');

        }
        alert('passei');

        modal.find('#ruan').val(recipientgeneroAtendente);
        modal.find('#recipientgeneroAtendente').val(recipientgeneroAtendente);
        modal.find('#recipientidAtendente').val(recipientidAtendente);
        modal.find('#recipientnomeAtendente').val(recipientnomeAtendente);
        modal.find('#recipientsobrenomeAtendente').val(recipientsobrenomeAtendente);
        modal.find('#recipientemailAtendente').val(recipientemailAtendente);
        modal.find('#recipientsenhaAtendente').val(recipientsenhaAtendente);
        modal.find('#recipienttel_celularAtendente').val(recipienttel_celularAtendente);
        modal.find('#recipienttel_fixoAtendente').val(recipienttel_fixoAtendente);
        modal.find('#recipientlogradouroAtendente').val(recipientlogradouroAtendente);
        modal.find('#recipientnumero_logradouroAtendente').val(recipientnumero_logradouroAtendente);
        modal.find('#recipientcepAtendente').val(recipientcepAtendente);
        modal.find('#recipientcpfAtendente').val(recipientcpfAtendente);
        modal.find('#recipientrgAtendente').val(recipientrgAtendente);
        modal.find('#recipientgrau_escolarAtendente').val(recipientgrau_escolarAtendente);
        modal.find('#recipientdt_contratacaoAtendente').val(recipientdt_contratacaoAtendente);
        modal.find('#recipientstatusAtendente').val(recipientstatusAtendente);
        modal.find('#recipientcidadeAtendente').val(recipientcidadeAtendente);
        modal.find('#recipientdt_nascimentoAtendente').val(recipientdt_nascimentoAtendente);
        modal.find('#recipientobsAtendente').val(recipientobsAtendente);
        modal.find('#recipientsalarioAtendente').val(recipientsalarioAtendente);
        // alert("ruan");
        // alert($("#recipientgeneroFAtendente")[0]);
        // alert(modal.find('#recipientgeneroFAtendente').val());
        if ($('#recipientgeneroFAtendente').is(":checked")) {
            alert('Feminino checkado');

        }
        if ($('#recipientgeneroMAtendente').is(":checked")) {
            alert('Masculino checkado');
            //  $("#r1").removeAttr('checked');
            // $("#r2").attr( "checked", "checked" );
        }
    });

    $('#excluirModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); // Button that triggered the modal
        var recipientidAtendente = button.data('whateveridatendente');
        alert(recipientidAtendente);
        var modal = $(this);
        modal.find('.modal-title').text('Excluir o cadastro ?');
        modal.find('#recipientidAtendente').val(recipientidAtendente);


    });

</script>

