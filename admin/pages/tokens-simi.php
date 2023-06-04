<?php
function aryax_integraciones(){ ?>

 
<div class="wrap">
    <div class="content-blackcats-maya">
        <h1 class="title-maya-1">Configuración blackcats Api Gateway</h1>
        <a class="page-title-action" id="btnnuevo"> Nuevo Token</a>

        <?php 
           require_once ARYAXPROPERTY_PLUGIN_DIR . '/admin/functions/savefunction.php'; 
           require_once ARYAXPROPERTY_PLUGIN_DIR . '/admin/functions/listarfunction.php';
           if(isset($_POST['btnguardar'])){
              savetoken();
            }
            listartokens();
        ?>
    </div>

<!-- Modal -->
<div class="modal fade" id="modalnuevo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Nuevo Token</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div>
           <form method="post">
            <div class="maya-conten-row">
                <div class="form-group maya-colum-3">
                   <label for="aryaxid">ID</label> <br>
                   <input type="text" id="aryaxid" name="aryaxid" class="maya-colum-12" required>
                </div>
                <div class="maya-colum-1"></div>
                <div class="form-group maya-colum-8">
                   <label for="aryaxnombre">NOMBRE</label> <br>
                   <input type="text" id="aryaxnombre" name="aryaxnombre" class="maya-colum-12">
                </div>
            </div>
                <div class="form-group">
                   <label for="aryaxtoken">TOKEN</label> <br>
                   <input type="text" id="aryaxtoken" name="aryaxtoken" class="maya-colum-12" required>
                </div>
                <div class="form-group">
                   <label for="aryaxcrm">CRM</label> <br>
                    <select name="aryaxcrm" id="aryaxcrm">
                            <option value="simi"selected>Simi</option>
                            <option value="wasi" >Wasi</option>
                    </select>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary" name="btnguardar" id="btnguardar">Guardar</button>
              </div>
           </form>
        </div>
      </div>

    </div>
  </div>
</div>
<?php }