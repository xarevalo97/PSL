    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="<?= media();?>/images/avatar.png" alt="User Image">
        <div>
          <p class="app-sidebar__user-name"><?= $_SESSION['userData']['nombres']; ?></p>
          <p class="app-sidebar__user-designation"><?= $_SESSION['userData']['nombrerol']; ?></p>
        </div>
      </div>
      <ul class="app-menu">
        <?php if(!empty($_SESSION['permisos'][1]['r'])){ ?>
        <li>
            <a class="app-menu__item" href="<?= base_url(); ?>/dashboard">
                <i class="app-menu__icon fa fa-dashboard"></i>
                <span class="app-menu__label">Panel Principal</span>
            </a>
        </li>
        <?php } ?>
        <?php if(!empty($_SESSION['permisos'][2]['r'])){ ?>
        <li class="treeview">
            <a class="app-menu__item" href="#" data-toggle="treeview">
                <i class="app-menu__icon fa fa-users" aria-hidden="true"></i>
                <span class="app-menu__label">Usuarios</span>
                <i class="treeview-indicator fa fa-angle-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="<?= base_url(); ?>/usuarios"><i class="icon fa fa-circle-o"></i> Usuarios</a></li>
                <li><a class="treeview-item" href="<?= base_url(); ?>/roles"><i class="icon fa fa-circle-o"></i> Roles</a></li>
            </ul>
        </li>
        <?php } ?>
        <?php if(!empty($_SESSION['permisos'][6]['r'])){ ?>
        <li class="treeview">
            <a class="app-menu__item" href="#" data-toggle="treeview">
                <i class="app-menu__icon fa fa-bank" aria-hidden="true"></i>
                <span class="app-menu__label">Instituciones</span>
                <i class="treeview-indicator fa fa-angle-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="<?= base_url(); ?>/añadir"><i class="icon fa fa-plus"></i>Añadir Institucion</a></li>
                <li><a class="treeview-item" href="<?= base_url(); ?>/instituciones"><i class="icon fa fa-bank"></i> Institucion</a></li>
            </ul>
        </li>
        <?php } ?>
        <?php if(!empty($_SESSION['permisos'][6]['r'])){ ?>
        <li>
            <a class="app-menu__item" href="<?= base_url(); ?>/gestiones">
                <i class="app-menu__icon fa fa-list" aria-hidden="true"></i>
                <span class="app-menu__label">Historico de Gestiones</span>
            </a>
        </li>
        <?php } ?>
        <?php if(!empty($_SESSION['permisos'][3]['r'])){ ?>
        <li>
            <a class="app-menu__item" href="<?= base_url(); ?>/clientes">
                <i class="app-menu__icon fa fa-user" aria-hidden="true"></i>
                <span class="app-menu__label">Clientes</span>
            </a>
        </li>
        <?php } ?>
        <?php if(!empty($_SESSION['permisos'][3]['r'])){ ?>
        <li>
            <a class="app-menu__item" href="<?= base_url(); ?>/creditos">
                <i class="app-menu__icon fa fa-money-bill" aria-hidden="true"></i>
                <span class="app-menu__label">Creditos</span>
            </a>
        </li>
        <?php } ?>
        <?php if(!empty($_SESSION['permisos'][3]['r'])){ ?>
        <li>
            <a class="app-menu__item" href="<?= base_url(); ?>/tarjetas">
                <i class="app-menu__icon fa fa-credit-card" aria-hidden="true"></i>
                <span class="app-menu__label">Tarjeta de Credito</span>
            </a>
        </li>
        <?php } ?>
        <?php if(!empty($_SESSION['permisos'][3]['r'])){ ?>
        <li>
            <a class="app-menu__item" href="<?= base_url(); ?>/ayuda">
                <i class="app-menu__icon fa fa-info" aria-hidden="true"></i>
                <span class="app-menu__label">Ayuda</span>
            </a>
        </li>
        <?php } ?>
        <?php if(!empty($_SESSION['permisos'][6]['r'])){ ?>
        <li class="treeview">
            <a class="app-menu__item" href="#" data-toggle="treeview">
                <i class="app-menu__icon fa fa-file-pdf" aria-hidden="true"></i>
                <span class="app-menu__label">Reportes</span>
                <i class="treeview-indicator fa fa-angle-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="<?= base_url(); ?>/añadir"><i class="icon fa fa-file-pdf"></i>Creditos</a></li>
                <li><a class="treeview-item" href="<?= base_url(); ?>/instituciones"><i class="icon fa fa-file-pdf"></i>Tarjetas</a></li>
                <li><a class="treeview-item" href="<?= base_url(); ?>/instituciones"><i class="icon fa fa-file-pdf"></i>Clientes</a></li>
            </ul>
        </li>
        <?php } ?>
        <?php if(!empty($_SESSION['permisos'][4]['r']) || !empty($_SESSION['permisos'][6]['r'])){ ?>
        <li class="treeview">
            
            
        </li>
        <?php } ?>
        <?php if(!empty($_SESSION['permisos'][5]['r'])){ ?>
        
         <?php } ?>
        <li>
            <a class="app-menu__item" href="<?= base_url(); ?>/logout">
                <i class="app-menu__icon fa fa-sign-out" aria-hidden="true"></i>
                <span class="app-menu__label">Cerrar Sesion</span>
            </a>
        </li>
      </ul>
    </aside>
    <?php

?>