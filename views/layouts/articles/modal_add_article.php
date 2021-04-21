<?php
session_start();
if ($_SESSION['art_c'] == '1') {
    include_once  '../../../class/Config.php';
    $config = new Config();
    $listmarcas = $config->ListArray("select id_mark, name_mark from global_marks where active_mark = '1' and id_company = '".$_SESSION['company']."' ");
?>
<div class="modal fade" id="modalAddArticle" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Agregar art&iacute;culo
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form enctype="multipart/form-data" method="post" id="frmAddArticle">

                <div class="row form-group my-2">
                    <div class="col-12">
                        <div class="">
                            <div class="text-center">
                                <label for="inpImage" class="m-2 pointer">
                                    <img src="src/img/no-image.jpg" id="img-visor" height="120" class="rounded mx-auto d-block">
                                </label>
                                <input type="file" class="visually-hidden" accept="image/*" name="picture" id="inpImage">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row form-group my-2">
                    <div class="col-12">
                        <label for="">Nombre del art&iacute;culo </label>
                        <input type="text" name="article" class="form-control" required>
                    </div>
                </div>

                <div class="row form-group my-2">
                    <div class="col-6">
                        <label for="">Cantidad</label>
                        <input type="number" name="cant" class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="">Marca</label>
                        <select name="marca" required class="form-control" id="">
                            <option value=""></option>
                            <?php foreach ($listmarcas as $row_mark) { ?>
                                <option value="<?php echo $row_mark['id_mark']; ?>"><?php echo $row_mark['name_mark']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="row form-group my-2">
                    <div class="col-4">
                        <label for="">Costo</label>
                        <input type="number" required name="costo" class="form-control">
                    </div>
                    <div class="col-4">
                        <label for="">Costo venta</label>
                        <input type="number" name="costo_cash" required class="form-control">
                    </div>
                    <div class="col-4">
                        <label for="">Costo credito</label>
                        <input type="number" name="costo_credit" required class="form-control">
                    </div>
                </div>

                <div class="row form-group my-2">
                    <div class="col-12">
                        <label for="">Descripci&oacute;n</label>
                        <textarea name="des_art"  rows="2" class="form-control"></textarea>
                    </div>
                </div>

                <div class="row form-group my-2">
                    <div class="col-12 d-grid">
                        <button type="submit" id="btn-submit-add-art" class="btn btn-principal my-2 d-block">
                            Guardar art&iacute;culo
                        </button>
                    </div>
                </div>

                    <div class="row form-group" id="result">

                    </div>

                </form>

                <script>
                    $('#frmAddArticle').submit((e)=>{
                        e.preventDefault();
                        $('#btn-submit-add-art').attr('disabled', true);
                        $.ajax({
                            type: 'POST',
                            url: 'add-article',
                            data: new FormData($('#frmAddArticle')[0]),
                            contentType: false,
                            processData: false
                        }).done(function (rest) {
                            $('#btn-submit-add-art').attr('disabled', false);
                            if (rest == 'ok') {
                                ListArticles();
                                $('#frmAddArticle')[0].reset();
                            } else {
                                $('#result').addClass(' alert alert-danger my-2 p-2 text-center ');
                                $('#result').html(rest);
                            }
                        });
                    });

                    $('#inpImage').change(()=>{
                        const file = $('#inpImage').prop("files")[0];
                        const imagen = URL.createObjectURL(file);
                        console.log(URL.createObjectURL(file));
                        $('#img-visor').attr('src', imagen);
                    });
                </script>

            </div>
        </div>
    </div>
</div>
<?php } ?>
