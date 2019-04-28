<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Tratamentos
    <div class="pull-right"><?= $this->Html->link(__('New'), ['action' => 'add'], ['class'=>'btn btn-success btn-xs']) ?></div>
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><?= __('List of') ?> Tratamentos</h3>
          <div class="box-tools">
            <form action="<?php echo $this->Url->build(); ?>" method="POST">
              <div class="input-group input-group-sm"  style="width: 180px;">
                <input type="text" name="search" class="form-control" placeholder="<?= __('Fill in to start search') ?>">
                <span class="input-group-btn">
                <button class="btn btn-info btn-flat" type="submit"><?= __('Filter') ?></button>
                </span>
              </div>
            </form>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <thead>
              <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('contadormensal') ?></th>
                <th><?= $this->Paginator->sort('unidade_id') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th><?= $this->Paginator->sort('paciente_id') ?></th>
                <th><?= $this->Paginator->sort('diagnostico_id') ?></th>
                <th><?= $this->Paginator->sort('tratam') ?></th>
                <th><?= __('Actions') ?></th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($tratamentos as $tratamento): ?>
              <tr>
                <td><?= $this->Number->format($tratamento->id) ?></td>
                <td><?= $this->Number->format($tratamento->contadormensal) ?></td>
                <td><?= $tratamento->has('unidade') ? $this->Html->link($tratamento->unidade->name, ['controller' => 'Unidades', 'action' => 'view', $tratamento->unidade->id]) : '' ?></td>
                <td><?= $tratamento->has('user') ? $this->Html->link($tratamento->user->id, ['controller' => 'Users', 'action' => 'view', $tratamento->user->id]) : '' ?></td>
                <td><?= $tratamento->has('paciente') ? $this->Html->link($tratamento->paciente->name, ['controller' => 'Pacientes', 'action' => 'view', $tratamento->paciente->id]) : '' ?></td>
                <td><?= $tratamento->has('diagnostico') ? $this->Html->link($tratamento->diagnostico->name, ['controller' => 'Diagnosticos', 'action' => 'view', $tratamento->diagnostico->id]) : '' ?></td>
                <td><?= h($tratamento->tratam) ?></td>
                <td class="actions" style="white-space:nowrap">
                  <?= $this->Html->link(__('View'), ['action' => 'view', $tratamento->id], ['class'=>'btn btn-info btn-xs']) ?>
                  <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tratamento->id], ['class'=>'btn btn-warning btn-xs']) ?>
                  <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tratamento->id], ['confirm' => __('Confirm to delete this entry?'), 'class'=>'btn btn-danger btn-xs']) ?>
                </td>
              </tr>
            <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer clearfix">
          <ul class="pagination pagination-sm no-margin pull-right">
            <?php echo $this->Paginator->numbers(); ?>
          </ul>
        </div>
      </div>
      <!-- /.box -->
    </div>
  </div>
</section>
<!-- /.content -->
