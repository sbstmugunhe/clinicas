<section class="content-header">
  <h1>
    <?php echo __('Distrito'); ?>
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
                                            <?= h($distrito->name) ?>
                                        </dd>
                                                                                                                                    
                                            
                                                                                                                                            
                                                                                                                                                                                                
                                            
                                                                        <dt><?= __('Comentarios') ?></dt>
                            <dd>
                            <?= $this->Text->autoParagraph(h($distrito->comentarios)); ?>
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
                    <h3 class="box-title"><?= __('{0} Relacionados', ['Unidades']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($distrito->unidades)): ?>

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                                                    
                                    <th>
                                    Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Name
                                    </th>
                                        
                                                                    
                                    <th>
                                    Slogan
                                    </th>
                                        
                                                                    
                                    <th>
                                    Nuit
                                    </th>
                                        
                                                                    
                                    <th>
                                    Email
                                    </th>
                                        
                                                                    
                                    <th>
                                    Data Fundacao
                                    </th>
                                        
                                                                    
                                    <th>
                                    Categorie Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Distrito Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Numero Camas
                                    </th>
                                        
                                                                    
                                    <th>
                                    Endereco
                                    </th>
                                        
                                                                    
                                    <th>
                                    Comentarios
                                    </th>
                                        
                                                                                                                                            
                                <th>
                                    <?php echo __('Acções'); ?>
                                </th>
                            </tr>

                            <?php foreach ($distrito->unidades as $unidades): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($unidades->id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($unidades->name) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($unidades->slogan) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($unidades->nuit) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($unidades->email) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($unidades->data_fundacao) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($unidades->categorie_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($unidades->distrito_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($unidades->numero_camas) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($unidades->endereco) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($unidades->comentarios) ?>
                                    </td>
                                                                                                            
                                                                        <td class="actions">
                                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'Unidades', 'action' => 'view', $unidades->id], ['class'=>'btn btn-info btn-xs']) ?>

                                    <?= $this->Html->link(__('Editar'), ['controller' => 'Unidades', 'action' => 'edit', $unidades->id], ['class'=>'btn btn-warning btn-xs']) ?>

                                    <?= $this->Form->postLink(__('Eliminar'), ['controller' => 'Unidades', 'action' => 'delete', $unidades->id], ['confirm' => __('Tens a certeza que pretende eliminar # {0}?', $unidades->id), 'class'=>'btn btn-danger btn-xs']) ?>    
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
