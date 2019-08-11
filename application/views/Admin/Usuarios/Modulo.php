<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
	<?php echo $titulo ?>
	</h1>
	<ol class="breadcrumb">
		<li><a href="<?php echo base_url('Admin')?>"><i class="fa fa-dashboard"></i> Inicio</a></li>
		<?php
			if (isset($navegacao))
			{
				echo '<li><a href="'. base_url($navegacao['link']).'"title=" '.$navegacao['Titulo'] .' ">'.$navegacao['Titulo'] .'</a></li>';
			}

		?>

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
					<h4><a href="<?php echo base_url('Admin/Usuarios')?>" title="Voltar" class="btn btn-success"><i class="fa fa-arrow-left"></i> Voltar</a></h4>
				</div>

			</div>

			<!--Form cadastro -->
			<form action="<?php echo base_url('Admin/Usuarios/core')?>" method="POST" accept-charset="utf-8" class="form-horizontal">
				<?php
					errosValidacao();
					getMsg('msgCadastro');
				?>

				<div class="form-group">
					<label class="col-sm-2 col-form-label">Nome</label>
					<div class="col-sm-9">
						<input type="text" name="nome" class="form-control" placeholder="Nome" value="<?php echo ($dados != null ? $dados->username : set_value('nome'));?>">
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 col-form-label">E-mail</label>
					<div class="col-sm-8">
						<input type="email" name="email" class="form-control" placeholder="E-mail" value="<?php echo ($dados != null ? $dados->email : set_value('email'));?>">
					</div>
				</div>

				<div class="form-group ">
					<label class="col-sm-2 col-form-label">Senha</label>
					<div class="col-sm-4">
						<input type="password" name="senha" class="form-control" placeholder="Senha">
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 col-form-label">Ativo</label>
					<div class="col-sm-2">
						<select name="ativo" class="form-control">
							<?php if ($dados){ ?>
								<option value="0"<?php echo ($dados ->active == 0 ? 'selected=""' : '')?>>Não</option>
								<option value="1"<?php echo ($dados ->active == 1 ? 'selected=""' : '')?>>Sim</option>
							<?php } else {?>
							<option value="0">Não</option>
							<option value="1">Sim</option>
							<?php }?>
						</select>
					</div>
				</div>


				<?php if ($dados) { ?>
					<input type="hidden" name="id_usuario" value="<?php echo $dados->id ?>">
				<?php }?>

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-success"><i class="fa fa-floppy-o"></i> Salvar</button>
					</div>
				</div>

			</form>

			<!--/Form cadastro -->

			<!-- /.box-body -->
		</div>
	</div>
	<!-- /.box -->

</section>
<!-- /.content -->
<!-- /.content-wrapper -->






