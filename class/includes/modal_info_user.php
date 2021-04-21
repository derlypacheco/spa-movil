<?php
session_start();
if ($_SESSION['user'] != '') {
    include_once '../Config.php';
    $config = new Config();
    $listUser = $config->ListArray("select * from global_users where user_user = '".$_SESSION['user']."'");
    if (count($listUser) == 1) {
        foreach($listUser as $row);
?>
<div class="modal fade" id="modalInfoUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mis datos</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <form method="post" id="frminfouser">
            <div class="row">
                <div class="form-group my-2">
                    <label for="">Nombre completo</label>
                    <input type="text" name="nameuser" autocomplete="off" class="form-control" value="<?php echo $row['fullname_user']; ?>" require>
                </div>
            </div>

            <div class="row">
                <div class="form-group my-2">
                    <label for="">Correo</label>
                    <input type="text" name="correo" autocomplete="off" require class="form-control" value="<?php echo $row['mail_user']; ?>">
                </div>
            </div>

            <div class="row">
                <div class="form-group my-2">
                    <label for="">N&uacute;mero de celular</label>
                    <input type="tel" name="cell" autocomplete="off" class="form-control" value="<?php echo $row['cellphone_user']; ?>">
                </div>
            </div>

            <div class="row">
                <div class="form-group my-2">
                    <label for="">Nueva contrase&ntilde;a</label>
                    <input type="password" name="newp" id="ip2" autocomplete="off" class="form-control">
                </div>
            </div>

            <div id="resultInfo"></div>

            <div class="row">
                <div class="form-group my-2 d-grid">
                    <button type="submit" id="btn-info-user" class="btn d-block btn-principal py-2">
                        Actualizar infromaci&oacute;n
                    </button>
                </div>
            </div>
        </form>

      </div>
    </div>
  </div>
</div>
<script>
    $('#frminfouser').submit((e)=>{
    e.preventDefault();
    var a = $('#ip2').val();
    if (a != '') {
        if (a.length <= 5) {
            $('#resultInfo').html('<div class="alert alert-danger my-2">La contraseña es debíl, se recomienda una con al menos 6 caracteres</div>');
            finish();
        }
    }
    $('#btn-info-user').attr('disabled', true);
    $.ajax({
        type: 'POST',
        url: 'update-info-user',
        data: new FormData($('#frminfouser')[0]),
        processData: false,
        contentType: false
    }).done((restuserinfo)=>{
        $('#resultInfo').html(restuserinfo);
        $('#btn-info-user').attr('disabled', false);
    });
});
</script>
<?php } } ?>