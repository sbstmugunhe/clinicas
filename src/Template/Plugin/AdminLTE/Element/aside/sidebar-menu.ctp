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
            <i class="fa fa-group"></i>
            <span> GRUPOS USERS</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li>
                <a href="<?php echo $this->Url->build('/grupos/add'); ?>"><i class="fa fa-circle-o"></i> Registar Grupo</a>
            </li>
            <li>
                <a href="<?php echo $this->Url->build('/grupos/index'); ?>"><i class="fa fa-circle-o"></i> Todos Grupos</a>
            </li>
        </ul>
    </li>

    <li class="treeview">
        <a href="#">
            <i class="fa fa-user"></i>
            <span> UTILIZADORES</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li>
                <a href="<?php echo $this->Url->build('/users/add'); ?>"><i class="fa fa-circle-o"></i> Registar Utilizador</a>
            </li>
            <li>
                <a href="<?php echo $this->Url->build('/users/index'); ?>"><i class="fa fa-circle-o"></i> Todos Utilizadores</a>
            </li>
        </ul>
    </li>
<!--Sessão para sedes distritais-->
    <li class="treeview">
        <a href="#">
            <i class="fa fa-home"></i>
            <span> SEDE DISTRITAL</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li>
                <a href="<?php echo $this->Url->build('/distritos/add'); ?>"><i class="fa fa-circle-o"></i> Registar Sede Distrital</a>
            </li>
            <li>
                <a href="<?php echo $this->Url->build('/distritos/index'); ?>"><i class="fa fa-circle-o"></i> Todos Sedes Distritais</a>
            </li>
        </ul>
    </li>

<!--Sessão para sedes Unidades Sanitarias-->
    <li class="treeview">
        <a href="#">
            <i class="fa fa-institution"></i>
            <span> CATEGORIAS US</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li>
                <a href="<?php echo $this->Url->build('/caterias/add'); ?>"><i class="fa fa-circle-o"></i> Registar Categoria US</a>
            </li>
            <li>
                <a href="<?php echo $this->Url->build('/categorias/index'); ?>"><i class="fa fa-circle-o"></i> Todos Categorias US</a>
            </li>
        </ul>
    </li>
<!--Sessão para sedes Unidades Sanitarias-->
    <li class="treeview">
        <a href="#">
            <i class="fa fa-hotel"></i>
            <span> UNIDADE SANIRÁRIA</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li>
                <a href="<?php echo $this->Url->build('/unidades/add'); ?>"><i class="fa fa-circle-o"></i> Registar Unidade Sanitária</a>
            </li>
            <li>
                <a href="<?php echo $this->Url->build('/unidades/index'); ?>"><i class="fa fa-circle-o"></i> Todos Unidades Sanitária</a>
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