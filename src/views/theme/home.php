<?php $v->layout("theme/_theme"); ?>

<?php $v->start("container"); ?>

<div class="px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1>CALCULADORA DE TINTA</h1>
  <p class="lead">
    <?= SITE["desc"] ?>
  </p>
</div>

<div class="row row-cols-1 row-cols-md-2 mb-2 text-center">
  <?php for ($i = 1; $i <= 4; $i++) { ?>
  <div class="col">
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 fw-normal">
          PAREDE <?= $i ?>
        </h4>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <div class="mb-3 row">
              <div class="col-md-4">
                <label class="form-label">Largura</label>
              </div>
              <div class="col-md-6">
                <input onFocus="checkChange(this);" id="width-<?= $i ?>" value="0" class="form-control form-control-sm" placeholder="metros" />
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="mb-3 row">
              <div class="col-md-4">
                <label class="form-label">Altura</label>
              </div>
              <div class="col-md-6">
                <input onFocus="checkChange(this);" id="height-<?= $i ?>" value="0" class="form-control form-control-sm" placeholder="metros" />
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="mb-3 row">
              <div class="col-md-4">
                <label class="form-label">Porta(s)</label>
              </div>
              <div class="col-md-6">
                <input onFocus="checkChange(this);" id="door-<?= $i ?>" value="0" class="form-control form-control-sm" placeholder="0" />
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="mb-4 row">
              <div class="col-md-4">
                <label class="form-label">Janela(s)</label>
              </div>
              <div class="col-md-6">
                <input onFocus="checkChange(this);" id="window-<?= $i ?>" value="0" class="form-control form-control-sm" placeholder="0" />
              </div>
            </div>
          </div>
        </div>
        <p style="color: red;" id="error-<?= $i ?>" hidden="true"></p>
      </div>
    </div>
  </div>
  <?php } ?>

  <div class="mb-5 d-grid gap-2 col-5 mx-auto">
    <button class="btn btn-primary" id="calcular" type="button">Calcular</button>
  </div>
</div>

<!-- START MODAL -->
<?php include("_modal.php"); ?>
<!-- END MODAL -->

<?php $v->end(); ?>

<?php $v->start("scripts"); ?>

<script src="<?= asset("js/main.js"); ?>"></script>

<?php $v->end(); ?>
