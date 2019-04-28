<section class="content-header">
  <h1>
    <?php echo __('Paciente'); ?>
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
                                                                                                                <dt><?= __('Name') ?></dt>
                                        <dd>
                                            <?= h($paciente->name) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Area Trabalho') ?></dt>
                                        <dd>
                                            <?= h($paciente->area_trabalho) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Residencia') ?></dt>
                                        <dd>
                                            <?= h($paciente->residencia) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Genero') ?></dt>
                                        <dd>
                                            <?= h($paciente->genero) ?>
                                        </dd>
                                                                                                                                    
                                            
                                                                                                                                                            <dt><?= __('Idade') ?></dt>
                                <dd>
                                    <?= $this->Number->format($paciente->idade) ?>
                                </dd>
                                                                                                                <dt><?= __('Contacto') ?></dt>
                                <dd>
                                    <?= $this->Number->format($paciente->contacto) ?>
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
                    <h3 class="box-title"><?= __('Related {0}', ['Tratamentos']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($paciente->tratamentos)): ?>

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                                                    
                                    <th>
                                    Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Contadormensal
                                    </th>
                                        
                                                                    
                                    <th>
                                    Unidade Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    User Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Paciente Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Diagnostico Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Tratam
                                    </th>
                                        
                                                                    
                                    <th>
                                    Obs
                                    </th>
                                        
                                                                    
                                    <th>
                                    Situacaovacinacao
                                    </th>
                                        
                                                                    
                                    <th>
                                    Situacaopaciente
                                    </th>
                                        
                                                                                                                                            
                                <th>
                                    <?php echo __('Actions'); ?>
                                </th>
                            </tr>

                            <?php foreach ($paciente->tratamentos as $tratamentos): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($tratamentos->id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($tratamentos->contadormensal) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($tratamentos->unidade_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($tratamentos->user_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($tratamentos->paciente_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($tratamentos->diagnostico_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($tratamentos->tratam) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($tratamentos->obs) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($tratamentos->situacaovacinacao) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($tratamentos->situacaopaciente) ?>
                                    </td>
                                                                                                            
                                                                        <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'Tratamentos', 'action' => 'view', $tratamentos->id], ['class'=>'btn btn-info btn-xs']) ?>

                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Tratamentos', 'action' => 'edit', $tratamentos->id], ['class'=>'btn btn-warning btn-xs']) ?>

                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tratamentos', 'action' => 'delete', $tratamentos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tratamentos->id), 'class'=>'btn btn-danger btn-xs']) ?>    
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
