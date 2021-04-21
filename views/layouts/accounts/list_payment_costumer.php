<?php
session_start();
if ($_SESSION['acc_v'] == '1') {
    include_once '../../../class/Config.php';
    $config = new Config();
    $ID = $_GET['id'];
    $listPayment = $config->ListArray("select * from global_payment where active_pay = '1' and costumer_pay = '".$ID."' ");
    if (count($listPayment) == 0) { echo ' <div class="alert alert-info text-center">Aun no tiene <b>abonos</b> realizados a este cliente </div> '; exit(); }
?>
    <div class="row my-2">
        <div class="col-6 h4 text-white">
            Abonos
        </div>
        <div class="col-6 text-white text-end h4 fw-bolder pe-3">
            $ <?php echo $config->get_payment_costumer($ID); ?>
        </div>
    </div>
    <table class="table bg-complement text-white table-responsive">
        <tbody>
        <?php foreach ($listPayment as $rows) { ?>
        <tr class="tr-bottom-4">
            <td class="align-middle"><?php echo date('d M y', strtotime($rows['date_pay'])); ?></td>
            <td class="align-middle"><?php echo $rows['desc_pay']; ?></td>
            <td class="align-middle">$ <?php echo $rows['cant_pay']; ?></td>
            <td class="align-content-end">
                <?php if ($_SESSION['acc_d'] == '1'): ?>
                    <button class="btn btn-danger" id="btn-delete-payment-<?php echo $rows['id_pay']; ?>" onclick="delete_payment_costumer('<?php echo $rows['id_pay']; ?>', '<?php echo $ID; ?>')"> <i class="fa fa-times"></i> </button>
                <?php endif; ?>
            </td>
        </tr>
        <?php } ?>
        </tbody>
    </table>
<?php } ?>
