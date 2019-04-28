<section class="content-header">
  <h1>
    <?php echo __('Tratamento'); ?>
  </h1>
  <ol class="breadcrumb">
    <li>
    <?= $this->Html->link('<i class="fa fa-dashboard"></i> ' . __('Back'), ['action' => 'index'], ['escape' => false])?>
    </li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
<div class="row">
    <div class="col-md-12">
        <div class="box box-solid">
            <div class="box-header with-border">
                <i class="fa fa-info"></i>
                <h3 class="box-title"><?php echo __('Information'); ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <dl class="dl-horizontal">
                                                                                                        <dt><?= __('Unidade') ?></dt>
                                <dd>
                                    <?= $tratamento->has('unidade') ? $tratamento->unidade->name : '' ?>
                                </dd>
                                                                                                                <dt><?= __('User') ?></dt>
                                <dd>
                                    <?= $tratamento->has('user') ? $tratamento->user->id : '' ?>
                                </dd>
                                                                                                                <dt><?= __('Paciente') ?></dt>
                                <dd>
                                    <?= $tratamento->has('paciente') ? $tratamento->paciente->name : '' ?>
                                </dd>
                                                                                                                <dt><?= __('Diagnostico') ?></dt>
                                <dd>
                                    <?= $tratamento->has('diagnostico') ? $tratamento->diagnostico->name : '' ?>
                                </dd>
                                                                                                                        <dt><?= __('Tratam') ?></dt>
                                        <dd>
                                            <?= h($tratamento->tratam) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Obs') ?></dt>
                                        <dd>
                                            <?= h($tratamento->obs) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Situacaovacinacao') ?></dt>
                                        <dd>
                                            <?= h($tratamento->situacaovacinacao) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Situacaopaciente') ?></dt>
                                        <dd>
                                            <?= h($tratamento->situacaopaciente) ?>
                                        </dd>
                                                                                                                                    
                                            
                                                                                                                                                            <dt><?= __('Contadormensal') ?></dt>
                                <dd>
                                    <?= $this->Number->format($tratamento->contadormensal) ?>
                                </dd>
                                                                                                
                                                                                                                                                                                                
                                            
                                    </dl>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <!-- ./col -->
</div>
<!-- div -->

</section>
