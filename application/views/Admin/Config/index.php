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
					<h4><a href="<?= base_url('Admin')?>" title="Novo" class="btn btn-success"><i class="fa fa-arrow-left"></i> Voltar</a></h4>
				</div>
				<div class="col-md-12 text-left">
					<!-- Validação de erros -->
					<?php
					echo errosValidacao();
					getMsg('msgCadastro')
					?>
				<!--Conteudo -->
					<form method="post" action="<?= base_url('Admin/Config') ?>">
						<div class="form-row">

							<div class="form-group col-md-6">
								<label>Titulo</label>
								<input type="text" name="titulo" class="form-control"  placeholder="Titulo" value="<?= $query->titulo ?>" >
							</div>

							<div class="form-group col-md-6">
								<label>Nome da empresa</label>
								<input type="text" name="empresa" class="form-control"  placeholder="Nome da empresa" value="<?= $query->empresa ?>">
							</div>
						</div>

						<div class="form-group col-md-2">
							<label>Cep</label>
							<input type="text" name="cep"  class="form-control"	maxlength="9" placeholder="Digite seu cep" value="<?= $query->cep ?>" >
						</div>
						<div class="form-group col-md-4">
							<label>Endereço</label>
							<input type="text" name="endereco"  class="form-control" placeholder="Digite seu endereço" value="<?= $query->endereco ?>">
						</div>
						<div class="form-group col-md-6">
							<label>Bairro</label>
							<input type="text" name="bairro"  class="form-control" placeholder="Digite seu bairro" value="<?= $query->bairro ?>">
						</div>

						<div class="form-group col-md-3">
							<label>Complemento</label>
							<input type="text" name="complemento"  class="form-control"	maxlength="14" placeholder="Digite seu complemento" value="<?= $query->complemento ?>">
						</div>

						<div class="form-row">
							<div class="form-group col-md-4">
								<label for="inputCity">Cidade</label>
								<input type="text" name="cidade" class="form-control" id="inputCity" placeholder="Digite sua cidade" value="<?= $query->cidade ?>">
							</div>
							<div class="form-group col-md-5">
								<label for="inputState">Estado</label>
								<select id="inputState" name="estado" class="form-control" value="<?= $query->estado ?>">
									<option selected>Escolha seu estado</option>
									<option value="AC">Acre</option>
									<option value="AL">Alagoas</option>
									<option value="AP">Amapá</option>
									<option value="AM">Amazonas</option>
									<option value="BA">Bahia</option>
									<option value="CE">Ceará</option>
									<option value="DF">Distrito Federal</option>
									<option value="ES">Espírito Santo</option>
									<option value="GO">Goiás</option>
									<option value="MA">Maranhão</option>
									<option value="MT">Mato Grosso</option>
									<option value="MS">Mato Grosso do Sul</option>
									<option value="MG">Minas Gerais</option>
									<option value="PA">Pará</option>
									<option value="PB">Paraíba</option>
									<option value="PR">Paraná</option>
									<option value="PE">Pernambuco</option>
									<option value="PI">Piauí</option>
									<option value="RJ">Rio de Janeiro</option>
									<option value="RN">Rio Grande do Norte</option>
									<option value="RS">Rio Grande do Sul</option>
									<option value="RO">Rondônia</option>
									<option value="RR">Roraima</option>
									<option value="SC">Santa Catarina</option>
									<option value="SP">São Paulo</option>
									<option value="SE">Sergipe</option>
									<option value="TO">Tocantins</option>
								</select>
							</div>

							<div class="form-group col-md-3">
								<label>E-mail</label>
								<input type="email" name="email"  class="form-control" placeholder="Digite seu e-mail" value="<?= $query->email ?>">
							</div>

							<div class="form-group col-md-3">
								<label>Telefone</label>
								<input type="tel" id="phone" name="telefone"  class="form-control" placeholder="Digite seu telefone" value="<?= $query->telefone?>" >
							</div>

							<div class="form-group col-md-3">
								<label>Total produtos destaque</label>
								<input type="text" name="p_destaque" class="form-control" placeholder="Total produtos destaques" value="<?= $query->p_destaque ?>">
							</div>
						</div>
						<div class="form-group row">
							<div class="col-sm-10">
								<button type="submit" class="btn btn-success">Salvar</button>
							</div>
						</div>
					</form>
				<!--/Conteudo -->
				</div>
			</div>
			<!-- /.box-body -->
		</div>
		<!-- /.box-body -->
	</div>
	<!-- /.box -->

</section>
<!-- /.content -->
<!-- /.content-wrapper -->
