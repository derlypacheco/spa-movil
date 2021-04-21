<?php
session_start();
if ($_SESSION['art_v'] == '1') {
    include_once  '../../../class/Config.php';
    $config = new Config();
    $listArticles = $config->ListArray("select * from global_article where active_art = '1' and company_art = '".$_SESSION['company']."'");
?>

    <div class="form-group my-3">
        <div class="row">
            <div class="col-8">
                <h2 class="text-white align-content-sm-center">
                    Listado de art&iacute;culos
                </h2>
            </div>
            <div class="col">
                <input id="box-costumer" class="form-control" placeholder="Buscar art&iacute;culo">
            </div>
        </div>
    </div>


    <div class="form-group my-3">
        <div class="row">
            <div class="col">
                <?php if($_SESSION['art_c'] == '1'): ?>
                    <button type="button" class="btn btn-principal" id="btn-add-article">
                        Nuevo art&iacute;culo
                    </button>
                    <button type="button" class="btn btn-principal" id="btn-list-marks">
                        Marcas
                    </button>
                <?php endif; ?>
            </div>
        </div>
    </div>



<div class="mb-3 table-responsive">
  <table class="table bg-complement text-white">
   <tbody>
    <?php
     if(count($listArticles) == 0) { echo '<div class=" alert alert-info text-center p-2">No tiene art&iacute;culos registrados aun</div>'; }
     foreach ($listArticles as $rows) { ?>
        <tr class="tr-bottom-4 pointer" onclick="viwe_modal_art('<?php echo $rows['id_art']; ?>')" id="btn-view-article-<?php echo $rows['id_cliente']; ?>">
             <td align="center" style="width: 65px;" class="align-middle">
                 <img src="<?php echo $rows['picture_art']; ?>" class="rounded-circle thumbnail" height="55" width="55" alt="">
             </td>
             <td class="align-middle">
                 <span class="fw-bold"><?php echo $rows['name_art']; ?></span>  <br>
                 <small class="fw-lighter"><?php echo $rows['id_mark']; // marca ?></small>
             </td>
             <td class="align-middle">Cant: <?php echo $rows['cant_art']; ?> </td>
             <td class="align-middle"><?php echo $rows['desc_art']; ?></td>
            <td calss="align-middle">
                <button class="btn d-block btn-danger" onclick="delete_article('<?php echo $rows['id_art']; ?>')" id="btn-delete-article-<?php echo $rows['id_cliente']; ?>">
                    <i class="fa fa-times"></i>
                </button>
            </td>
        </tr>
    <?php } ?>
   </tbody>
  </table>
</div>

    <script>
        $('#btn-add-article').click(()=>{
            $('#btn-add-article').attr('disabled', true);
            $.ajax({
                url: 'modal-add-article'
            }).done(function (response) {
                $('#ModalGeneral').html(response);
                $('#modalAddArticle').modal('show');
                $('#btn-add-article').attr('disabled', false);
            });
        });

        function viwe_modal_art(id) {
            $('#btn-view-article-'+id).attr('disabled', true);
            $.ajax({
                url: 'modal-edit-article/'+id
            }).done(function (rest) {
                $('#ModalGeneral').html(rest);
                $('#modalEditArticle').modal('show');
                $('#btn-view-article-'+id).attr('disabled', false);
            });
        }
    </script>

<?php } ?>
