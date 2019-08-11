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
					<h4><a href="<?php echo base_url('Admin/Clientes')?>" title="Voltar" class="btn btn-success"><i class="fa fa-arrow-left"></i> Voltar</a></h4>
				</div>

			</div>

			<!--Form cadastro -->
			<form action="<?php echo base_url('Admin/Clientes/core')?>" method="POST" accept-charset="utf-8" class="form-horizontal" id="formCadastroCliente">
				<!--Campo nome-->
				<div class="form-group">
					<label class="col-sm-2 col-form-label">Nome</label>
					<div class="col-sm-9">
						<input type="text" name="nome" class="form-control" placeholder="Nome" value="<?php echo ($dados != null ? $dados->nome : set_value('nome'));?>">
					</div>
				</div>

				<!--Campo CPF-->
				<div class="form-group">
					<label class="col-sm-2 col-form-label">CPF</label>
					<div class="col-sm-9">
						<input type="text" name="cpf" id="inputCpf" class="form-control" placeholder="CPF" value="<?php echo ($dados != null ? $dados->cpf : set_value('cpf'));?>">
					</div>
				</div>

				<!--Campo Telefone-->
				<div class="form-group">
					<label class="col-sm-2 col-form-label">Telefone</label>
					<div class="col-sm-9">
						<input type="text" name="telefone" id="phone" maxlength="15" class="form-control" placeholder="Telefone" value="<?php echo ($dados != null ? $dados->telefone : set_value('telefone'));?>">
					</div>
				</div>

				<!--Campo CEP-->
				<div class="form-group">
					<label class="col-sm-2 col-form-label">CEP</label>
					<div class="col-sm-9">
						<input type="text" name="cep" id="cep" class="form-control" placeholder="CEP" value="<?php echo ($dados != null ? $dados->cep : set_value('cep'));?>">
					</div>
				</div>

				<!--Campo data de nascimento-->
				<div class="form-group">
					<label class="col-sm-2 col-form-label">Data do nascimento</label>
					<div class="col-sm-9">
						<input type="text" name="data_Nascimento" id="inputData" class="form-control" placeholder="xx/xx/xxxx" value="<?php echo ($dados != null ? formataDataBr($dados->data_Nascimento) : set_value('data_Nascimento'));?>">
					</div>
				</div>

				<!--Campo bairro-->
				<div class="form-group">
					<label class="col-sm-2 col-form-label">Bairro</label>
					<div class="col-sm-9">
						<input type="text" name="bairro" class="form-control" placeholder="Bairro" value="<?php echo ($dados != null ? $dados->bairro : set_value('bairro'));?>">
					</div>
				</div>


				<!--Campo número-->
				<div class="form-group">
					<label class="col-sm-2 col-form-label">Número</label>
					<div class="col-sm-9">
						<input type="text" name="numero" class="form-control" maxlength="6" placeholder="Número" value="<?php echo ($dados != null ? $dados->numero : set_value('numero'));?>">
					</div>
				</div>


				<!--Campo complemento-->
				<div class="form-group">
					<label class="col-sm-2 col-form-label">Complemento</label>
					<div class="col-sm-9">
						<input type="text" name="complemento" class="form-control" maxlength="25" placeholder="Complemento" value="<?php echo ($dados != null ? $dados->complemento : set_value('complemento'));?>">
					</div>
				</div>

				<!--Campo Cidade-->
				<div class="form-group">
					<label class="col-sm-2 col-form-label">Cidade</label>
					<div class="col-sm-9">
						<input type="text" name="cidade" class="form-control" id="inputCity" placeholder="Digite sua cidade" value="<?php echo ($dados != null ? $dados->cidade : set_value('cidade'));?>">
					</div>
				</div>

				<!--Campo estado-->
				<div class="form-group">
					<label class="col-sm-2 col-form-label">Estado</label>
					<div class="col-sm-9">
						<select id="inputState" name="estado" class="form-control" value="<?php echo ($dados != null ? $dados->estado : set_value('estado'));?>">
							<option selected value="0">Escolha seu estado</option>
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
				</div>
					<!--Campo e-mail-->
					<div class="form-group">
						<label class="col-sm-2 col-form-label">E-mail</label>
						<div class="col-sm-9">
							<input type="email" name="email"   class="form-control" placeholder="Digite seu e-mail" value="<?php echo ($dados != null ? $dados->email : set_value('email'));?>">
						</div>
					</div>

					<!--Campo senha-->
					<div class="form-group">
						<label class="col-sm-2 col-form-label">senha</label>
						<div class="col-sm-9">
							<input type="password" name="senha"  class="form-control" placeholder="Digite sua senha">
						</div>
					</div>

					<!--Campo status-->
					<div class="form-group">
						<label class="col-sm-2 col-form-label">Ativo</label>
						<div class="col-sm-2">
							<select name="ativo" class="form-control">
								<?php if ($dados){ ?>
									<option value="0"<?php echo ($dados ->ativo == 0 ? 'selected=""' : '')?>>Não</option>
									<option value="1"<?php echo ($dados ->ativo == 1 ? 'selected=""' : '')?>>Sim</option>
								<?php } else {?>
									<option value="0">Não</option>
									<option value="1">Sim</option>
								<?php }?>
							</select>
						</div>
					</div>

				<?php if($dados){?>
					<input type="hidden" name="id_cliente" value="<?= $dados->id ?>"/>
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






