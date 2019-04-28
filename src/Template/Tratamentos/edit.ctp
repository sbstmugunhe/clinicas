<section class="content-header">
  <h1>
    Tratamento
    <small><?= __('Edit') ?></small>
  </h1>
  <ol class="breadcrumb">
    <li>
    <?= $this->Html->link('<i class="fa fa-dashboard"></i> '.__('Back'), ['action' => 'index'], ['escape' => false]) ?>
    </li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title"><?= __('Form') ?></h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <?= $this->Form->create($tratamento, array('role' => 'form')) ?>
          <div class="box-body">
          <?php
            echo $this->Form->input('contadormensal');
            echo $this->Form->input('unidade_id', ['options' => $unidades]);
            echo $this->Form->input('user_id', ['options' => $users]);
            echo $this->Form->input('paciente_id', ['options' => $pacientes]);
            echo $this->Form->input('diagnostico_id', ['options' => $diagnosticos]);
            echo $this->Form->input('tratam');
            echo $this->Form->input('obs');
            echo $this->Form->input('situacaovacinacao');
            echo $this->Form->input('situacaopaciente');
          ?>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <?= $this->Form->button(__('Save')) ?>
          </div>
        <?= $this->Form->end() ?>
      </div>
    </div>
  </div>
</section>

