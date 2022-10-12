<?php 
    headerAdmin($data); 
    getModal('modalGestiones',$data);
?>
  <main class="app-content">    
      <div class="app-title">
        <div>
            <h1><i class="fas fa-user-tag"></i> <?= $data['page_title'] ?>
                <?php if($_SESSION['permisosMod']['w']){ ?>
                <button class="btn btn-primary" type="button" onclick="openModal();" ><i class="fas fa-plus-circle"></i> Nuevo</button>
              <?php } ?>
            </h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="<?= base_url(); ?>/clientes"><?= $data['page_title'] ?></a></li>
        </ul>
      </div>
        <div class="row">
            <div class="col-md-12">
              <div class="tile">
                <div class="tile-body">
                  <div class="table-responsive">
                    <table class="table table-hover table-bordered" id="tableClientes">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Nombre</th>
                          <th>Departamento</th>
                          <th>Municipio</th>
                          <th>Canton</th>
                          <th>Direccion Principal</th>
                          <th>Direccion Secundaria</th>
                          <th>Telefono</th>
                          <th>Garantia</th>
                          <th>Fecha Prox.Pago</th>
                          <th>Saldo en mora</th>
                          <th>Estado</th>
                          <th>Ultimo Pago</th>
                          <th>Total Deuda</th>
                          <th>Fecha de Promesa</th>
                          <th>Observacion</th>
                        </tr>
                      </thead>
                      <tbody>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </main>
<?php footerAdmin($data); ?>
    