<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

	<?php
		if (isset($titulo))
		{
			echo '<title>' .$titulo. '</title>';
		}else{
			echo '<title> Administração da loja </title>';
		}
	?>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo base_url('Public/dist/bootstrap/dist/css/bootstrap.min.css')?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url('Public/dist/font-awesome/css/font-awesome.min.css')?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url('Public/dist/Ionicons/css/ionicons.min.css')?>">
	<!-- Plugin datatable -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('Public/dist/data-tables/datatables.min.css') ?>"/>
	    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('Public/css/AdminLTE.min.css')?>">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url('Public/css/AdminLTE.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('Public/css/skin-blue.min.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('Public/dist/Iskins/_all-skins.min.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('Public/css/sweetalert2.mincss')?>">
<!--	<link rel="stylesheet" href="../../dist/css/">-->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
 <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>-->
<!--    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>-->
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
	<header class="main-header">
        <!-- Logo -->
        <a href="../../index2.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>G</b>S</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Loja Virtual </b>1.0</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="<?php echo base_url('Admin/Login/Sair') ?>"> Sair do Sistema <i class="fa fa-power-off"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">MENU</li>

				<li><a href="<?= base_url('Admin/Principal') ?>"><i class="fa fa-book"></i><span>Principal</span></a></li>

                <li class="treeview">
                    <a href="#">
						<i class="fa fa-plus-circle"></i> <span>Cadastro</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="../../index.html"><i class="fa fa-chevron-right"></i> Produtos </a></li>
                        <li><a href="<?= base_url('Admin/Categorias') ?>"><i class="fa fa-chevron-right"></i>Categorias </a></li>
						<li><a href="../../index2.html"><i class="fa fa-chevron-right"></i> Marca </a></li>
						<li>
							<a href="<?= base_url('Admin/Clientes') ?>" title="Listar clientes">
								<i class="fa fa-chevron-right"></i> Clientes
							</a>
						</li>
                    </ul>
				<li>
				<li class="treeview">
					<a href="#">
						<i class="fa fa-cog"></i> <span>Configuração</span>
						<span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
					</a>
					<ul class="treeview-menu">
						<li><a href="<?php echo base_url('Admin/Config') ?>"><i class="fa fa-chevron-right"></i> Loja </a></li>
						<li><a href="<?php echo base_url('Admin/Usuarios')?>"><i class="fa fa-chevron-right"></i>Usuários</a></li>
						<li><a href="../../index2.html"><i class="fa fa-chevron-right"></i> Correios </a></li>
						<li><a href="../../index2.html"><i class="fa fa-chevron-right"></i> PagSeguro </a></li>
					</ul>
				<li>
					<a href="<?php echo base_url('Admin/Login/Sair') ?>"><i class="fa fa-power-off"></i><span>Sair</span></a>
				</li>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

		<?php
			if (isset($view))
			{
				$this->load->view($view);
			}

		?>

	</div>
	<!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Loja virtual</b> 1.0.0
        </div>
        <strong>Copyright &copy; 2019 <a href="http://gabriel-sales-me.umbler.net">Gabriel Sales</a>.</strong> Todos direitos reservados.
    </footer>
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url('Public/js/jquery.min.js')?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('Public/dist/bootstrap/dist/js/bootstrap.min.js')?>"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url('Public/dist/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url('Public/dist/fastclick/lib/fastclick.js')?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('Public/js/adminlte.min.js')?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('Public/js/ademo.js')?>"></script>
<!-- Plugin datatable -->
<script type="text/javascript" src="<?php  echo base_url('Public/dist/data-tables/datatables.min.js ')?>"></script>
<!-- Main -->
<script src="<?php echo base_url('Public/js/Main.js')?>" ></script>
<!-- jQuery Mask Plugin -->
<script src="<?php echo base_url('Public/js/jquery.mask.min.js')?>" ></script>
<!-- jQuery validation-->
<script src="<?php echo base_url('Public/js/jquery.validate.min.js')?>" ></script>
<!-- jQuery validation metodos adicionais-->
<script type="text/javascript" src="<?php echo base_url('Public/js/additional-methods.min.js')?>"></script>
<!-- jQuery validation msg em br-->
<script type="text/javascript" src="<?php echo base_url('Public/localization/messages_pt_BR.js')?>"></script>
<!-- sweetalert2, swal obs[chamado via cd devido npm na minha maquina não funcionar]-->
<script src="<?php echo base_url('Public/js/sweetalert2.minjs')?>" ></script>
</body>
</html>
