<section class="content-header">
  <h1>
    Unidade
    <small><?= __('Add') ?></small>
  </h1>
  <ol class="breadcrumb">
    <li>
    <?= $this->Html->link('<i class="fa fa-dashboard"></i> '.__('Voltar'), ['action' => 'index'], ['escape' => false]) ?>
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
          <h3 class="box-title"><?= __('Formulário') ?></h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <?= $this->Form->create($unidade, array('role' => 'form')) ?>
          <div class="box-body">
          <?php
            echo $this->Form->input('name');
            echo $this->Form->input('slogan');
            echo $this->Form->input('nuit');
            echo $this->Form->input('email');
            echo $this->Form->input('data_fundacao', ['empty' => true, 'default' => '', 'class' => 'datepicker form-control', 'type' => 'text']);
            echo $this->Form->input('categorie_id', ['options' => $categories]);
            echo $this->Form->input('distrito_id', ['options' => $distritos]);
            echo $this->Form->input('numero_camas');
            echo $this->Form->input('endereco');
            echo $this->Form->input('comentarios');
          ?>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <?= $this->Form->button(__('Salvar')) ?>
          </div>
        <?= $this->Form->end() ?>
      </div>
    </div>
  </div>
</section>

        <?php
$this->Html->css([
    'AdminLTE./plugins/datepicker/datepicker3',
  ],
  ['block' => 'css']);

$this->Html->script([
  'AdminLTE./plugins/input-mask/jquery.inputmask',
  'AdminLTE./plugins/input-mask/jquery.inputmask.date.extensions',
  'AdminLTE./plugins/datepicker/bootstrap-datepicker',
  'AdminLTE./plugins/datepicker/locales/bootstrap-datepicker.pt-BR',
],
['block' => 'script']);
?>
<?php $this->start('scriptBottom'); ?>
<script>
  $(function () {
    //Datemask mm/dd/yyyy
    $(".datepicker")
        .inputmask("yyyy/mm/dd", {"placeholder": "yyyy/mm/dd"})
        .datepicker({
            language:'pt-BR',
            format: 'yyyy/mm/dd'
        });
  });
</script>
<?php $this->end(); ?>
        