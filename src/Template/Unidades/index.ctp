<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Unidades
    <div class="pull-right"><?= $this->Html->link(__('Novo Registo'), ['action' => 'add'], ['class'=>'btn btn-success btn-xs']) ?></div>
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><?= __('Todos Registos') ?> </h3>
          <div class="box-tools">
            <form action="<?php echo $this->Url->build(); ?>" method="POST">
              <div class="input-group input-group-sm"  style="width: 250px;">
                <input type="text" name="search" class="form-control" placeholder="<?= __('Pesquisar aqui...') ?>">
                <span class="input-group-btn">
                <button class="btn btn-info btn-flat" type="submit"><?= __('Buscar') ?></button>
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
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('slogan') ?></th>
                <th><?= $this->Paginator->sort('nuit') ?></th>
                <th><?= $this->Paginator->sort('email') ?></th>
                <th><?= $this->Paginator->sort('data_fundacao') ?></th>
                <th><?= $this->Paginator->sort('categorie_id') ?></th>
                <th><?= __('Acções') ?></th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($unidades as $unidade): ?>
              <tr>
                <td><?= $this->Number->format($unidade->id) ?></td>
                <td><?= h($unidade->name) ?></td>
                <td><?= h($unidade->slogan) ?></td>
                <td><?= h($unidade->nuit) ?></td>
                <td><?= h($unidade->email) ?></td>
                <td><?= h($unidade->data_fundacao) ?></td>
                <td><?= $unidade->has('category') ? $this->Html->link($unidade->category->name, ['controller' => 'Categories', 'action' => 'view', $unidade->category->id]) : '' ?></td>
                <td class="actions" style="white-space:nowrap">
                  <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $unidade->id], ['class'=>'btn btn-info btn-xs']) ?>
                  <?= $this->Html->link(__('Editar'), ['action' => 'edit', $unidade->id], ['class'=>'btn btn-warning btn-xs']) ?>
                  <?= $this->Form->postLink(__('Apagar'), ['action' => 'delete', $unidade->id], ['confirm' => __('Pretende apagar este registo?'), 'class'=>'btn btn-danger btn-xs']) ?>
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
