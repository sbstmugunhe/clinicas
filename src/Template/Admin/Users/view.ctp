<section class="content-header">
  <h1>
    <?php echo __('User'); ?>
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
                                                                                                                <dt><?= __('Primeiro Nome') ?></dt>
                                        <dd>
                                            <?= h($user->primeiro_nome) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Ultimo Nome') ?></dt>
                                        <dd>
                                            <?= h($user->ultimo_nome) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Username') ?></dt>
                                        <dd>
                                            <?= h($user->username) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Email') ?></dt>
                                        <dd>
                                            <?= h($user->email) ?>
                                        </dd>
                                                                                                                                                    <dt><?= __('Grupo') ?></dt>
                                <dd>
                                    <?= $user->has('grupo') ? $user->grupo->name : '' ?>
                                </dd>
                                                                                                                        <dt><?= __('Passkey') ?></dt>
                                        <dd>
                                            <?= h($user->passkey) ?>
                                        </dd>
                                                                                                                                                                                                                    
                                            
                                                                                                                                            
                                                                                                        <dt><?= __('Timeout') ?></dt>
                                <dd>
                                    <?= h($user->timeout) ?>
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
