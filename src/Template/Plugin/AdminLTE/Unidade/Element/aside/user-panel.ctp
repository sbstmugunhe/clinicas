<?php
use Cake\Core\Configure;

$file = Configure::read('Theme.folder') . DS . 'src' . DS . 'Template' . DS . 'Element' . DS . 'aside' . DS . 'user-panel.ctp';

if (file_exists($file)) {
    ob_start();
    include_once $file;
    echo ob_get_clean();
} else {
    ?>
    <div class="user-panel">
        <div class="pull-left image">
            <?php echo $this->Html->image('user6-128x128.jpg', array('class' => 'img-circle', 'alt' => 'User Image')); ?>
        </div>
        <div class="pull-left info">
            <p> <?php
            if ($this->request->session()->read('Auth.User.primeiro_nome')) {
                echo $this->request->session()->read('Auth.User.primeiro_nome').' '.$this->request->session()->read('Auth.User.ultimo_nome');
            }
            ?>
        </p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
</div>
<?php } ?>
