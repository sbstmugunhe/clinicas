<ul class="sidebar-menu">
    <li class="header"> MENU DE NAVEGAÇÃO</li>
    
    <li class="treeview">
        <a href="<?php echo $this->Url->build(' '); ?>">
            <i class="fa fa-dashboard"></i> <span>PAINEL PRINCIPAL</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>

    </li>

    <li class="treeview">
        <a href="#">
            <i class="fa fa-home"></i>
            <span> CAMPANHA </span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li>
                <a href="<?php echo $this->Url->build('/distritos/add'); ?>"><i class="fa fa-circle-o"></i> Registar Campanha </a>
            </li>
            <li>
                <a href="<?php echo $this->Url->build('/distritos/index'); ?>"><i class="fa fa-circle-o"></i> Todas Campanhas </a>
            </li>
        </ul>
    </li>

<!--Sessão para sedes Unidades Sanitarias-->
    <li class="treeview">
        <a href="#">
            <i class="fa fa-institution"></i>
            <span> DIAGNOSTICO </span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li>
                <a href="<?php echo $this->Url->build('/categorias/add'); ?>"><i class="fa fa-circle-o"></i> Registar Diagnosticos </a>
            </li>
            <li>
                <a href="<?php echo $this->Url->build('/categorias/index'); ?>"><i class="fa fa-circle-o"></i> Todos Diagnosticos </a>
            </li>
        </ul>
    </li>
<!--Sessão para sedes Unidades Sanitarias-->
    <li class="treeview">
        <a href="#">
            <i class="fa fa-hotel"></i>
            <span> PACIENTE </span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li>
                <a href="<?php echo $this->Url->build('/unidades/add'); ?>"><i class="fa fa-circle-o"></i> Registar Paciente</a>
            </li>
            <li>
                <a href="<?php echo $this->Url->build('/unidades/index'); ?>"><i class="fa fa-circle-o"></i> Todos Pacientes</a>
            </li>
        </ul>
    </li>


<li class="treeview">
        <a href="#">
            <i class="fa fa-hotel"></i>
            <span> TRATAMENTO </span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li>
                <a href="<?php echo $this->Url->build('/unidades/add'); ?>"><i class="fa fa-circle-o"></i> Registar Tratamento</a>
            </li>
            <li>
                <a href="<?php echo $this->Url->build('/unidades/index'); ?>"><i class="fa fa-circle-o"></i> Todos Tratamentos</a>
            </li>
        </ul>
    </li>


    <li class="treeview">
        <a href="<?php echo $this->Url->build('/users/logout '); ?>">
            <i class="fa fa-power-off"></i> <span>TERMINAR SESSÃO</span>
            <span class="pull-right-container">
            </span>
        </a>

    </li>

</ul>