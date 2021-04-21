<?php
session_start();
if ($_SESSION['acc_v'] == '1') {
    include_once '../../../class/Config.php';
    $config = new Config();
    $ID = $_GET['id'];
    $listAccountUser = $config->ListArray("select * from global_accounts where active_acc = '1' and iduser_acc = '".$ID."' ");
    if (count($listAccountUser) == 0) { echo ' <div class="alert alert-info text-center">Aun no tiene <b>cargos</b> realizados a este cliente </div> '; exit(); }
?>
<div class="row my-2">
    <div class="col-6 text-white h4">
        Cargos
    </div>
    <div class="col-6 text-white text-end h4 fw-bolder pe-3">
        $ <?php echo $config->get_account_costumer($ID); ?>
    </div>
</div>
<table class="table bg-complement text-white table-responsive">
    <tbody>
    <?php
    foreach ($listAccountUser as $rows) { ?>
        <tr class="tr-bottom-4">
            <td class="align-middle">
                <span class="badge btn-principal"><?php echo $rows['cant_acc']; ?></span>
            </td>
            <td>
                <?php echo date('d M y', strtotime($rows['date_acc'])); ?>
            </td>
            <td class="align-middle"><?php echo $rows['item_acc']; ?></td>
            <td class="align-middle">$ <?php echo $rows['total_acc']; ?></td>
            <td class="align-content-end">
                <!-- <button class="btn btn-warning">
                    <i class="fa fa-eye"></i>
                </button> -->
                <?php if ($_SESSION['acc_d'] == '1') : ?>
                    <button class="btn btn-danger text-end" id="btn-delete-account-costumer-<?php echo $rows['id_account']; ?>" onclick="delete_account_costumer('<?php echo $rows['id_account']; ?>', '<?php echo $ID; ?>')">
                        <i class="fa fa-times"></i>
                    </button>
                <?php endif; ?>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>
<?php } ?>