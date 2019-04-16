<section class="content-header">
    <h1>
        <?php echo __('Grupo'); ?>
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
                            <?= h($grupo->name) ?>
                        </dd>





                        <dt><?= __('Comentarios') ?></dt>
                        <dd>
                            <?= $this->Text->autoParagraph(h($grupo->comentarios)); ?>
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

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <i class="fa fa-share-alt"></i>
                    <h3 class="box-title"><?= __('{0} Relacionados', ['Users']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                    <?php if (!empty($grupo->users)): ?>

                        <table class="table table-hover">
                            <tbody>
                                <tr>

                                    <th>
                                        Id
                                    </th>


                                    <th>
                                        Primeiro Nome
                                    </th>


                                    <th>
                                        Ultimo Nome
                                    </th>


                                    <th>
                                        Username
                                    </th>


                                    <th>
                                        Email
                                    </th>


                                    <th>
                                        Grupo Id
                                    </th>


                                    <th>
                                        Passkey
                                    </th>


                                    <th>
                                        Timeout
                                    </th>


                                    <th>
                                        Password
                                    </th>


                                    <th>
                                        <?php echo __('Acções'); ?>
                                    </th>
                                </tr>

                                <?php foreach ($grupo->users as $users): ?>
                                    <tr>

                                        <td>
                                            <?= h($users->id) ?>
                                        </td>

                                        <td>
                                            <?= h($users->primeiro_nome) ?>
                                        </td>

                                        <td>
                                            <?= h($users->ultimo_nome) ?>
                                        </td>

                                        <td>
                                            <?= h($users->username) ?>
                                        </td>

                                        <td>
                                            <?= h($users->email) ?>
                                        </td>

                                        <td>
                                            <?= h($users->grupo_id) ?>
                                        </td>

                                        <td>
                                            <?= h($users->passkey) ?>
                                        </td>

                                        <td>
                                            <?= h($users->timeout) ?>
                                        </td>

                                        <td>
                                            <?= h($users->password) ?>
                                        </td>

                                        <td class="actions">
                                            <?= $this->Html->link(__('Visualizar'), ['controller' => 'Users', 'action' => 'view', $users->id], ['class'=>'btn btn-info btn-xs']) ?>

                                            <?= $this->Html->link(__('Editar'), ['controller' => 'Users', 'action' => 'edit', $users->id], ['class'=>'btn btn-warning btn-xs']) ?>

                                            <?= $this->Form->postLink(__('Eliminar'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Tens a certeza que pretende eliminar # {0}?', $users->id), 'class'=>'btn btn-danger btn-xs']) ?>    
                                        </td>
                                    </tr>
                                <?php endforeach; ?>

                            </tbody>
                        </table>

                    <?php endif; ?>

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>
