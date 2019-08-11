<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
	<?php echo $titulo ?>
	</h1>
	<ol class="breadcrumb">
		<li><a href="<?php echo base_url('Admin')?>"><i class="fa fa-dashboard"></i> Inicio</a></li>
		<li class="active"><?php echo $titulo?></li>
	</ol>
</section>

<!-- Main content -->
<!-- Main content -->
<section class="content">

	<!-- Default box -->
	<div class="box">
		<div class="box-header ">
			<div class="box-tools pull-right">
				<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
						title="Collapse">
					<i class="fa fa-minus"></i></button>
			</div>
		</div>
		<div class="box-body ">
			<div class="row">
				<div class="col-md-12 text-left">
					<h4>
						<a href="<?php echo base_url('Admin/Usuarios/Modulo') ?>" title="Novo" class="btn btn-success">
							<i class="fa fa-plus-circle"></i> Novo
						</a>
					</h4>
				</div>
			</div>
			<?php getMsg('msgCadastro'); ?>
					<table class="table table-striped table_listar_data-table">
						<thead>
							<tr>
								<th >Nome</th>
								<th>E-mail</th>
								<th class="text-center">Status</th>
								<th class="text-right">opções</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($usuario as $usuarios)
								{
									$substituicao = "***********";
									echo '<tr>';
										echo '<td>'. $usuarios->username . '</td>';
										echo '<td>' .substr($usuarios->email, 0, 4).$substituicao. '</td>';
										echo '<td class="text-center">' .($usuarios->active == 1 ? '<span class ="label label-success"><i class="fa fa-check"></i></span>' : '<span class ="label label-danger"><i class="fa fa-times"></i></span>') . '</td>';
										echo '<td class="text-right">';
												echo '<a href ="'. base_url('Admin/Usuarios/Modulo/'.$usuarios->id) .'" title="Editar" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></a>';
												echo ' <a href ="'. base_url('Admin/Usuarios/excluirUsuario/'.$usuarios->id) .'" title="Apagar" class="btn btn-danger"><i class="fa fa-trash"></i></a>';
										echo '</td>';
									echo '</tr>';
								}
							?>
						</tbody>
					</table>

				<!-- /.box-body -->
		</div>
		<!-- /.box-body -->
	</div>
	<!-- /.box -->

</section>
<!-- /.content -->
<!-- /.content-wrapper -->






