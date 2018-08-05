
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
<script type="text/javascript">



    $('#exampleModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); // Button that triggered the modal
        var recipientidFormaPagamento = button.data('whateveridformapagamento');
        var recipientnomeFormaPagamento = button.data('whatevernomeformapagamento');
        var recipientstatusFormaPagamento = button.data('whateverstatusformapagamento');
        var recipientobsFormaPagamento = button.data('whateverobsformapagamento');

        var modal = $(this);
        modal.find('.modal-title').text('Editar dados - ' + recipientnomeFormaPagamento);
        modal.find('#recipientidFormaPagamento').val(recipientidFormaPagamento);
        modal.find('#recipientnomeFormaPagamento').val(recipientnomeFormaPagamento);
        modal.find('#recipientstatusFormaPagamento').val(recipientstatusFormaPagamento);
        modal.find('#recipientobsFormaPagamento').val(recipientobsFormaPagamento);

    });

    $('#excluirModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); // Button that triggered the modal
        var recipientidFormaPagamento = button.data('whateveridformapagamento');
        var modal = $(this);
        modal.find('.modal-title').text('Excluir o cadastro ?');
        modal.find('#recipientidFormaPagamento').val(recipientidFormaPagamento);


    });

</script>
