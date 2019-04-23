<section class="content-header">
  <h1>
    <?php echo __('Unidade'); ?>
  </h1>
  <ol class="breadcrumb">
    <li>
    <?= $this->Html->link('<i class="fa fa-dashboard"></i> ' . __('Voltar'), ['action' => 'index'], ['escape' => false])?>
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
                <h3 class="box-title"><?php echo __('Informação'); ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <dl class="dl-horizontal">
                                                                                                                <dt><?= __('Name') ?></dt>
                                        <dd>
                                            <?= h($unidade->name) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Slogan') ?></dt>
                                        <dd>
                                            <?= h($unidade->slogan) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Nuit') ?></dt>
                                        <dd>
                                            <?= h($unidade->nuit) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Email') ?></dt>
                                        <dd>
                                            <?= h($unidade->email) ?>
                                        </dd>
                                                                                                                                                    <dt><?= __('Category') ?></dt>
                                <dd>
                                    <?= $unidade->has('category') ? $unidade->category->name : '' ?>
                                </dd>
                                                                                                                <dt><?= __('Distrito') ?></dt>
                                <dd>
                                    <?= $unidade->has('distrito') ? $unidade->distrito->name : '' ?>
                                </dd>
                                                                                                
                                            
                                                                                                                                                            <dt><?= __('Numero Camas') ?></dt>
                                <dd>
                                    <?= $this->Number->format($unidade->numero_camas) ?>
                                </dd>
                                                                                                
                                                                                                        <dt><?= __('Data Fundacao') ?></dt>
                                <dd>
                                    <?= h($unidade->data_fundacao) ?>
                                </dd>
                                                                                                                                                                                                            
                                            
                                                                        <dt><?= __('Endereco') ?></dt>
                            <dd>
                            <?= $this->Text->autoParagraph(h($unidade->endereco)); ?>
                            </dd>
                                                    <dt><?= __('Comentarios') ?></dt>
                            <dd>
                            <?= $this->Text->autoParagraph(h($unidade->comentarios)); ?>
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
