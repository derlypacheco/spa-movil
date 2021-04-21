<?php
session_start();
if ($_SESSION['art_e'] == '1') {
    include_once  '../../../class/Config.php';
    $config = new Config();
    $listmarcas = $config->ListArray("select id_mark, name_mark from global_marks where active_mark = '1' and id_company = '".$_SESSION['company']."' ");
    $arryArt = $config->ListArray("select * from global_article where active_art = '1' and id_art = '".$_GET['id']."' ");
    foreach ($arryArt as $row);
    ?>
    <div class="modal fade" id="modalEditArticle" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Editar art&iacute;culo
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form enctype="multipart/form-data" method="post" id="frmEditArticle">

                        <div class="row form-group my-2">
                            <div class="col-12">
                                <div class="text-center">
                                        <img src="<?php echo $row['picture_art']; ?>" id="img-visor" height="120" class="rounded mx-auto d-block">
<!--                                        <label for="inpImage" class="m-2 d-grid d-block btn btn-info">Cambiar imagen</label>-->
                                        <input type="file" class="my-2" accept="image/*" name="picture" id="inpImage">
                                </div>
                            </div>
                        </div>

                        <div class="row form-group my-2">
                            <div class="col-12">
                                <label for="">Nombre del art&iacute;culo </label>
                                <input type="text" name="article" class="form-control" value="<?php echo $row['name_art']; ?>" required>
                            </div>
                        </div>

                        <div class="row form-group my-2">
                            <div class="col-6">
                                <label for="">Cantidad</label>
                                <input type="number" name="cant" value="<?php echo $row['cant_art']; ?>" class="form-control">
                            </div>
                            <div class="col-6">
                                <label for="">Marca</label>
                                <select name="marca" required class="form-control" id="">
                                    <option value=""></option>
                                    <?php foreach ($listmarcas as $row_mark) { ?>
                                        <option <?php if($row['id_mark'] == $row_mark['id_mark']) { echo 'selected'; } ?>  value="<?php echo $row_mark['id_mark']; ?>"><?php echo $row_mark['name_mark']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="row form-group my-2">
                            <div class="col-4">
                                <label for="">Costo</label>
                                <input type="number" required name="costo" value="<?php echo $row['buycost_art']; ?>" class="form-control">
                            </div>
                            <div class="col-4">
                                <label for="">Costo venta</label>
                                <input type="number" name="costo_cash" value="<?php echo $row['cashcost_art']; ?>" required class="form-control">
                            </div>
                            <div class="col-4">
                                <label for="">Costo credito</label>
                                <input type="number" name="costo_credit" value="<?php echo $row['creditcost_art']; ?>" required class="form-control">
                            </div>
                        </div>

                        <div class="row form-group my-2">
                            <div class="col-12">
                                <label for="">Descripci&oacute;n</label>
                                <textarea name="des_art" rows="2" class="form-control"><?php echo $row['desc_art']; ?></textarea>
                            </div>
                        </div>

                        <div class="row form-group my-2">
                            <div class="col-12 d-grid">
                                <input type="hidden" name="id" value="<?php echo $row['id_art']; ?>">
                                <button type="submit" id="btn-submit-edit-art" class="btn btn-principal my-2 d-block">
                                    Guardar art&iacute;culo
                                </button>
                            </div>
                        </div>

                        <div class="row form-group" id="result">

                        </div>

                    </form>

                    <script>
                        $('#frmEditArticle').submit((e)=>{
                            e.preventDefault();
                            $('#btn-submit-edit-art').attr('disabled', true);
                            $.ajax({
                                type: 'POST',
                                url: 'edit-article',
                                data: new FormData($('#frmEditArticle')[0]),
                                contentType: false,
                                processData: false
                            }).done(function (rest) {
                                $('#btn-submit-edit-art').attr('disabled', false);
                                if (rest == 'ok') {
                                    ListArticles();
                                    $('#result').addClass('row alert alert-success my-2 p-2 text-center ');
                                    $('#result').html('Art&iacute;culo guardado correctamente');
                                } else {
                                    $('#result').addClass(' alert alert-danger my-2 p-2 text-center ');
                                    $('#result').html(rest);
                                }
                            });
                        });

                        $('#inpImage').change(()=>{
                           const files = document.querySelector("#inpImage");
                           if (files || files.length) {
                               $('#img-visor').src = '';
                               return;
                           }
                           const  FristFile = files[0];
                           const objectUrl = URL.createObjectURL(FristFile);
                           $('#img-visor').src = objectUrl;
                        });

                        // // Obtener referencia al input y a la imagen
                        // const $seleccionArchivos = document.querySelector("#inpImage"),
                        //     $imagenPrevisualizacion = document.querySelector("#img-visor");
                        // // Escuchar cuando cambie
                        // $seleccionArchivos.addEventListener("change", () => {
                        //     // Los archivos seleccionados, pueden ser muchos o uno
                        //     const archivos = $seleccionArchivos.files;
                        //     // Si no hay archivos salimos de la función y quitamos la imagen
                        //     if (!archivos || !archivos.length) {
                        //         $imagenPrevisualizacion.src = "";
                        //         return;
                        //     }
                        //     // Ahora tomamos el primer archivo, el cual vamos a previsualizar
                        //     const primerArchivo = archivos[0];
                        //     // Lo convertimos a un objeto de tipo objectURL
                        //     const objectURL = URL.createObjectURL(primerArchivo);
                        //     // Y a la fuente de la imagen le ponemos el objectURL
                        //     $imagenPrevisualizacion.src = objectURL;
                        // });

                    </script>

                </div>
            </div>
        </div>
    </div>
<?php } ?>
