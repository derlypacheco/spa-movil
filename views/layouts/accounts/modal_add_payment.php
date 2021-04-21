<?php
session_start();
if ($_SESSION['acc_c'] == '1') {
    $IDUser = $_GET['id'];
?>
    <div class="modal fade" id="modalAddPayment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Abonar a cuenta</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">

                    <form method="post" id="frmAddPaymentCostumer">

                        <div class="row my-2">
                            <div class="form-group">
                                <label for="">Cantidad a abonar</label>
                                <input type="number" name="cant" class="form-control" value="0" min="1" required>
                            </div>
                        </div>

                        <div class="row my-2">
                            <div class="form-group">
                                <label for="">Observaciones</label>
                                <textarea name="descr" required id="" cols="3" class="form-control" placeholder=""></textarea>
                            </div>
                        </div>

                        <div class="row ">
                            <div class="form-group my-2 d-grid">
                                <input type="hidden" name="id" value="<?php echo $IDUser; ?>">
                                <button class="btn btn-principal d-block" id="btn-add-payment-costumer"> Abonar </button>
                            </div>
                        </div>

                        <div class="row" id="r-addPayment"></div>

                    </form>

                </div>

            </div>
        </div>
    </div>

    <script>
        $('#frmAddPaymentCostumer').submit((e)=>{
            e.preventDefault();
           $('#btn-add-payment-costumer').attr('disabled', true);
           $.ajax({
               type: 'POST',
               url: 'add-payment',
               data: new FormData($('#frmAddPaymentCostumer')[0]),
               processData: false,
               contentType: false
           }).done((restu)=>{
              if (restu == 'ok') {
                  account('<?php echo $IDUser; ?>');
                  $('#r-addPayment').html('');
                  $('#frmAddPaymentCostumer')[0].reset();
              } else {
                  $('#r-addPayment').html('<div class="alert alert-danger text-center">'+restu+'</div>');
              }
               $('#btn-add-payment-costumer').attr('disabled', false);
           });
        });
    </script>

<?php } ?>