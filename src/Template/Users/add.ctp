<section class="content-header">
  <h1>
    User
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
        <?= $this->Form->create($user, array('role' => 'form')) ?>
        <div class="box-body">

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Primeiro Nome</label>
                <?php echo $this->Form->input('primeiro_nome', ['label' => false, 'placeholder' => 'Digite nome']);?>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Apelido</label>
                <?php echo $this->Form->input('ultimo_nome', ['label' => false, 'placeholder' => 'Digite apelido']);?>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Nome de Utilizador</label>
                <?php echo $this->Form->input('username', ['label' => false, 'placeholder' => 'Digite nome de utilizador']);?>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Categoria</label>
                <?php echo $this->Form->input('grupo_id', ['label' => false, 'empty' => '- Seleccionar a categoria -']);?>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>E-meil</label>
                <?php echo $this->Form->input('email', ['label' => false, 'placeholder' => 'Digite e-mail']);?>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Passkey</label>
                <?php echo $this->Form->input('passkey', ['label' => false, 'placeholder' => 'Digite senha token']);?>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Senha</label>
                <?php echo $this->Form->input('password', ['label' => false, 'placeholder' => 'Digite a senha']);?>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Confirmar Senha</label>
                <?php echo $this->Form->input('confirm_password', ['type' => 'password', 'label' => false, 'placeholder' => 'Confirmar a senha']);?>
              </div>
            </div>
          </div>

        </div>
        <div class="box-footer">
          <?= $this->Form->button(__('Salvar')) ?>
        </div>
        <?= $this->Form->end() ?>
      </div>
    </div>
  </div>
</section>

