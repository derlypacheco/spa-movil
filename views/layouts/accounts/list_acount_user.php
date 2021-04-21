<?php
session_start();
if ($_SESSION['acc_v'] == '1') {
include_once '../../../class/Config.php';
$config = new Config();
$ID = $_GET['id'];
$nameCostumer = $config->get_name_costumer($ID);
$arrayAccount = $config->ListArray("select * from global_accounts where iduser_acc = '".$ID."' ");
?>

                <div class="form-group my-3">
                    <div class="row">
                        <div class="col-8">
                            <h2 class="text-white align-content-sm-center">
                                Estado de cuenta <?php echo $nameCostumer; ?>
                            </h2>
                        </div>
                        <div class="col-4" id="balance-account">
                            <h3 class="text-white text-end">
                                <?php
                                try {
                                    echo "Balance: $ ". $config->balance_account_costumer($ID);
                                } catch (Exception $e) {
                                    var_dump($e->getMessage());
                                }
                                ?>
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                        <div class="row my-2">
                            <div class="col-8">
                                <?php if ($_SESSION['client_v'] == '1') : ?>
                                    <button class="btn btn-principal" id="btn-new-account" onclick="new_account('<?php echo $ID; ?>')"> Nuevo cargo </button>
                                <?php endif; ?>
                                <button class="btn btn-principal" id="btn-add-payment" onclick="add_payment('<?php echo $ID; ?>')"> Abonar </button>

                            </div>
                           <div class="col-4">
                               <?php if ($_SESSION['acc_c'] == '1') : ?>
                                   <div class="text-end">
                                       <button class="btn btn-principal " onclick="ListCostumers()"> <i class="fa fa-arrow-circle-left"></i> </button>
                                   </div>
                               <?php endif; ?>
                           </div>
                        </div>
                </div>

                <div class="row">
                    <div id="resultDeletePayment"></div>
                    <div class="form-group col-6" id="account-costumer"></div>
                    <div class="form-group col-6" id="payments-costumer"></div>
                </div>
    <script>
        $(document).ready(()=>{
            list_payment_costumer('<?php echo $ID; ?>');
            list_accounts_costumer('<?php echo $ID; ?>');
        });
    </script>
<?php } ?>