<section class="content-header">
  <h1>
    Campanha
    <small><?= __('Add') ?></small>
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
        <?= $this->Form->create($campanha, array('role' => 'form')) ?>
          <div class="box-body">
          <?php
            echo $this->Form->input('unidade_id', ['options' => $unidades]);
            echo $this->Form->input('user_id', ['options' => $users]);
            echo $this->Form->input('tipo_vacinacao');
            echo $this->Form->input('dose');
            echo $this->Form->input('US');
            echo $this->Form->input('brigada_movel');
            echo $this->Form->input('agente_CS');
            echo $this->Form->input('intervalo_idade');
            echo $this->Form->input('mulhere_p_parto');
            echo $this->Form->input('comentarios');
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

