<section class="content-header">
  <h1>
    <?php echo __('Campanha'); ?>
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
                                    <?= $campanha->has('unidade') ? $campanha->unidade->name : '' ?>
                                </dd>
                                                                                                                <dt><?= __('User') ?></dt>
                                <dd>
                                    <?= $campanha->has('user') ? $campanha->user->id : '' ?>
                                </dd>
                                                                                                                        <dt><?= __('Tipo Vacinacao') ?></dt>
                                        <dd>
                                            <?= h($campanha->tipo_vacinacao) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Comentarios') ?></dt>
                                        <dd>
                                            <?= h($campanha->comentarios) ?>
                                        </dd>
                                                                                                                                    
                                            
                                                                                                                                                            <dt><?= __('Dose') ?></dt>
                                <dd>
                                    <?= $this->Number->format($campanha->dose) ?>
                                </dd>
                                                                                                                <dt><?= __('Unidade Sanitaria') ?></dt>
                                <dd>
                                    <?= $this->Number->format($campanha->unidade_sanitaria) ?>
                                </dd>
                                                                                                                <dt><?= __('Brigada Movel') ?></dt>
                                <dd>
                                    <?= $this->Number->format($campanha->brigada_movel) ?>
                                </dd>
                                                                                                                <dt><?= __('Agente Comunitario Saude') ?></dt>
                                <dd>
                                    <?= $this->Number->format($campanha->agente_comunitario_saude) ?>
                                </dd>
                                                                                                                <dt><?= __('Intervalo Idade') ?></dt>
                                <dd>
                                    <?= $this->Number->format($campanha->intervalo_idade) ?>
                                </dd>
                                                                                                                <dt><?= __('Mulhere P Parto') ?></dt>
                                <dd>
                                    <?= $this->Number->format($campanha->mulhere_p_parto) ?>
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
