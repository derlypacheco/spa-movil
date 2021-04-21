<?php
session_start();
if ($_SESSION['acc_c'] == '1') {
include_once '../../../class/Config.php';
$ID = $_GET['id'];
$config = new Config();
$listArt = $config->ListArray("select id_art, name_art, cashcost_art, creditcost_art from global_article where active_art = '1' order by name_art ");
?>
    <div class="modal fade" id="ModalAddAccount" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hacer cargo a cliente</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="form-group col-12 fw-bolder h4 text-center my-2">
                            <?php echo $config->get_name_costumer($ID); ?>
                        </div>
                    </div>

                    <form method="post" id="frmAddAccount">

                        <div class="row my-2">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="">Tipo de venta</label>
                                    <input name="cant" id="" type="number" required min="1" value="1" class="form-control">
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="form-group">
                                    <label for="">Atr&iacute;culo </label>
                                    <select name="item" id="" class="form-control" required onchange="setCost(this.value)">
                                        <option value=""></option>
                                        <?php foreach ($listArt as $rowArt) { ?>
                                            <option value="<?php echo $rowArt['id_art']; ?>"><?php echo $rowArt['name_art']." | Venta a credito: ". $rowArt['creditcost_art']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row my-2">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Abono inicial</label>
                                    <input type="number" id="abono" name="abono" class="form-control">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Costo</label>
                                    <input type="hidden" name="costo" id="hiden-costo" value="">
                                    <input type="text" id="costo" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row my-2">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Observaciones</label>
                                    <textarea name="desc_ot" cols="3" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group d-grid my-3">
                                    <input type="hidden" name="id" value="<?php echo $ID; ?>">
                                    <button type="submit" class="btn btn-principal d-block" id="btn-frmadd-account"> Crear cuenta </button>
                                </div>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

    <script>
        $('#frmAddAccount').submit((e)=>{
            e.preventDefault();
            $('#btn-frmadd-account').attr('disabled', true);
            $.ajax({
                type: 'POST',
                url: 'add-acount',
                data: new FormData($('#frmAddAccount')[0]),
                processData: false,
                contentType: false
            }).done((rest)=>{
                if (rest == 'ok') {
                    $('#frmAddAccount')[0].reset();
                    list_payment_costumer('<?php echo $ID; ?>');
                    list_accounts_costumer('<?php echo $ID; ?>');
                }
                account('<?php echo $ID; ?>');
                $('#btn-frmadd-account').attr('disabled', false);
            });
        });

        function setCost(va) {
            $.ajax({
                url: 'get_cost_item/'+va
            }).done((restCost)=>{
                $('#hiden-costo').val(restCost);
                $('#costo').val(restCost);
            });
        }

    </script>

<?php } ?>