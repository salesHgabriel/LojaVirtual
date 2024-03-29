<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Administração da loja</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="<?php echo base_url('Public/dist/bootstrap/dist/css/bootstrap.min.css')?>">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url('Public/dist/font-awesome/css/font-awesome.min.css')?>">
	<!-- Ionicons -->
	<link rel="stylesheet" href="<?php echo base_url('Public/dist/Ionicons/css/ionicons.min.css')?>">
	<link rel="stylesheet" href="Public/id">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url('Public/css/AdminLTE.min.css')?>"">
	<!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="<?php echo base_url('Public/css/AdminLTE.min.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('Public/css/skin-blue.min.css')?>">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- Google Font -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

	<header class="main-header">
		<!-- Logo -->
		<a href="Loja" class="logo">
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
						<a href="#" data-toggle="control-sidebar">Sair do Sistema <i class="fa fa-power-off"></i></a>
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
			<!-- Sidebar user panel -->
			<div class="user-panel">
				<div class="pull-left image">
					<img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
				</div>
				<div class="pull-left info">
					<p>Alexander Pierce</p>
					<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
				</div>
			</div>
			<!-- search form -->
			<!--            <form action="#" method="get" class="sidebar-form">-->
			<!--                <div class="input-group">-->
			<!--                    <input type="text" name="q" class="form-control" placeholder="Search...">-->
			<!--                    <span class="input-group-btn">-->
			<!--                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>-->
			<!--                </button>-->
			<!--              </span>-->
			<!--                </div>-->
			<!--            </form>-->
			<!-- /.search form -->
			<!-- sidebar menu: : style can be found in sidebar.less -->
			<ul class="sidebar-menu" data-widget="tree">
				<li class="header">MENU</li>

				<li><a href=""><i class="fa fa-book"></i><span>Principal</span></a></li>

				<li class="treeview">
					<a href="#">
						<i class="fa fa-plus-circle"></i> <span>Cadastro</span>
						<span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
					</a>
					<ul class="treeview-menu">
						<li><a href="../../index.html"><i class="fa fa-chevron-right"></i> Produtos </a></li>
						<li><a href="../../index2.html"><i class="fa fa-chevron-right"></i>Categorias </a></li>
						<li><a href="../../index2.html"><i class="fa fa-chevron-right"></i> Marca </a></li>
					</ul>
				<li><a href=""><i class="fa fa-power-off"></i><span>Sair</span></a></li>
				</li>
			</ul>
		</section>
		<!-- /.sidebar -->
	</aside>

	<!-- =============================================== -->

	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header conteudo) -->
<!--		<section class="content-header">-->
<!--			<h1> (titulo)-->
<!--				404 Error Page-->
<!--			</h1>-->
<!--			<ol class="breadcrumb"> caminho das paginas-->
<!--				<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>-->
<!--				<li><a href="#">Examples</a></li>-->
<!--				<li class="active">404 error</li>-->
<!--			</ol>-->
<!--		</section>-->

		<!-- Main content -->
		<section class="content">
			<div class="error-page">
				<h2 class="headline text-yellow"> 404</h2>

				<div class="error-content">
					<h3><i class="fa fa-warning text-yellow"></i> Oops! Página não encontrada.</h3>

					<p>
						Não foi possível encontrar a página que você estava procurando.
						Enquanto isso, você pode retornar ao painel  <a href="<?= base_url('Admin')?>">Clicando aqui</a>.
					</p>

<!--					<form class="search-form">-->
<!--						<div class="input-group">-->
<!--							<input type="text" name="search" class="form-control" placeholder="Search">-->
<!---->
<!--							<div class="input-group-btn">-->
<!--								<button type="submit" name="submit" class="btn btn-warning btn-flat"><i class="fa fa-search"></i>-->
<!--								</button>-->
<!--							</div>-->
<!--						</div>-->
						<!-- /.input-group -->
<!--					</form>-->
				</div>
				<!-- /.error-content -->
			</div>
			<!-- /.error-page -->
		</section>
		<!-- /.content -->
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
<script>
	$(document).ready(function () {
		$('.sidebar-menu').tree()
	})
</script>
</body>
</html>
