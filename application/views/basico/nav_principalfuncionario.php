<nav class="navbar navbar-inverse navbar-fixed-top " role="banner">
	<div class="container-fluid">
		<div class="row">

			<div class="col-md-3"></div>
			<div class="col-md-9 ">
				<div class="navbar-header ">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar1">
						<span class="sr-only">MENU</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo base_url() ?>acessofuncionario/index"> <?php echo $_SESSION['log']['NomeEmpresa2']; ?>/<?php echo $_SESSION['log']['Nome2']; ?></a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar1">

					<ul class="nav navbar-nav navbar-center">
						<!--
						<li>
							<?php echo form_open(base_url() . 'cliente/pesquisar', 'class="navbar-form navbar-left"'); ?>
							<div class="input-group">
								<span class="input-group-btn">
									<button class="btn btn-info" type="submit">
										<span class="glyphicon glyphicon-search"></span>
									</button>
								</span>
								<input type="text" placeholder="Pesquisar Cliente" class="form-control" name="Pesquisa" value="">
							</div>
							</form>
						</li>
						-->
						<!--
						<li class="btn-toolbar navbar-form" role="toolbar" aria-label="...">
							
							<div class="btn-group" role="group" aria-label="...">
								<a href="<?php echo base_url(); ?>agenda">
									<button type="button" class="btn btn-md btn-warning ">
										<span class="glyphicon glyphicon-calendar"></span>Agenda
									</button>
								</a>
							</div>
							-->
							<!--
							<div class="btn-group">
								<button type="button" class="btn btn-md btn-primary  dropdown-toggle" data-toggle="dropdown">
									<span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['log']['Nome2']; ?> <span class="caret"></span>
								</button>
								<ul class="dropdown-menu" role="menu">
									<li><a href="<?php echo base_url() ?>acessofuncionario/index"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['log']['Nome2']; ?></a></li>
									<li role="separator" class="divider"></li>
									
									<li><a href="<?php echo base_url(); ?>agendafuncionario"><span class="glyphicon glyphicon-calendar"></span> Agendas</a></li>
									<li role="separator" class="divider"></li>
									
									<li><a href="<?php echo base_url() ?>relatoriofuncionario/tarefa"><span class="glyphicon glyphicon-pencil"></span> Tarefas</a></li>
									<li role="separator" class="divider"></li>
									-->
									<!--
									<li><a href="<?php echo base_url() ?>tipobanco/cadastrar"><span class="glyphicon glyphicon-pencil"></span> Cad - Conta Corrente</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="<?php echo base_url() ?>relatorio/empresaassociado"><span class="glyphicon glyphicon-pencil"></span> Cad - Associados</a></li>
									<li role="separator" class="divider"></li>
									
									<li><a href="<?php echo base_url(); ?>loginfuncionario/sair"><span class="glyphicon glyphicon-log-out"></span> Sair</a></li>
								</ul>
							</div>
							-->
							<!--
							<div class="btn-group">
								<button type="button" class="btn btn-md btn-success dropdown-toggle" data-toggle="dropdown">
									<span class="glyphicon glyphicon-user"></span> Clientes <span class="caret"></span>
								</button>
								<ul class="dropdown-menu" role="menu">
									<li><a href="<?php echo base_url(); ?>relatoriofuncionario/clientesusuario"><span class="glyphicon glyphicon-pencil"></span> Rel. Clientes/Usuario</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="<?php echo base_url() ?>relatorio/clientes"><span class="glyphicon glyphicon-list"></span> Clientes & Contatos</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="<?php echo base_url(); ?>relatorio/clientes"><span class="glyphicon glyphicon-calendar"></span> Aniversariantes</a></li>							
									
								</ul>
							</div>
							-->
							<!--
							<div class="btn-group">
								<button type="button" class="btn btn-md btn-warning dropdown-toggle" data-toggle="dropdown">
									<span class="glyphicon glyphicon-calendar"></span> Agendas <span class="caret"></span>
								</button>
								<ul class="dropdown-menu" role="menu">
									<li><a href="<?php echo base_url(); ?>agenda"><span class="glyphicon glyphicon-calendar"></span> Agendas</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="<?php echo base_url() ?>relatorio/tarefa"><span class="glyphicon glyphicon-pencil"></span> Tarefas</a></li>
								</ul>
							</div>
							
							<div class="btn-group" role="group" aria-label="..."> </div>
						</li>
						-->
						<li class="btn-toolbar navbar-form" role="toolbar" aria-label="...">
							<div class="btn-group" role="group" aria-label="...">
								<a href="<?php echo base_url(); ?>relatoriofuncionario/consultores">
									<button type="button" class="btn btn-md btn-success ">
										<span class="glyphicon glyphicon-user"></span> Consultores
									</button>
								</a>
							</div>
							<div class="btn-group" role="group" aria-label="..."> </div>
						</li>
						
						<li class="btn-toolbar navbar-form" role="toolbar" aria-label="...">
							<div class="btn-group">
								<button type="button" class="btn btn-md btn-primary dropdown-toggle" data-toggle="dropdown">
									<span class="glyphicon glyphicon-pencil"></span> Cadastros <span class="caret"></span>
								</button>
								<ul class="dropdown-menu" role="menu">							
									<!--<li><a href="<?php echo base_url() ?>relatorio/clientes"><span class="glyphicon glyphicon-usd"></span> Clientes</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="<?php echo base_url() ?>agenda"><span class="glyphicon glyphicon-usd"></span> Consultas</a></li>
									<li role="separator" class="divider"></li>-->
									<li><a href="<?php echo base_url() ?>relatoriofuncionario/consultores"><span class="glyphicon glyphicon-usd"></span> Or�amentos</a></li>
									<li role="separator" class="divider"></li>							
									<li><a href="<?php echo base_url() ?>despesas/cadastrar"><span class="glyphicon glyphicon-usd"></span> Despesas</a></li>
									<li role="separator" class="divider"></li>
									<!--<li><a href="<?php echo base_url() ?>consumo/cadastrar"><span class="glyphicon glyphicon-pencil"></span> Consumos</a></li>
									<li role="separator" class="divider"></li>-->
									<li><a href="<?php echo base_url() ?>relatoriofuncionario/produtosempresa"><span class="glyphicon glyphicon-pencil"></span> Produtos</a></li>
									<!--<li role="separator" class="divider"></li>
									<li><a href="<?php echo base_url() ?>relatoriofuncionario/admin"><span class="glyphicon glyphicon-pencil"></span> Outros</a></li>
									<li role="separator" class="divider"></li>-->
								</ul>
							</div>
							<div class="btn-group" role="group" aria-label="..."> </div>
						</li>
						<li class="btn-toolbar navbar-form" role="toolbar" aria-label="...">
							<div class="btn-group">
								<button type="button" class="btn btn-md btn-primary  dropdown-toggle" data-toggle="dropdown">
									<span class="glyphicon glyphicon-list"></span> Relat�rios <span class="caret"></span>
								</button>
								<ul class="dropdown-menu" role="menu">
									<li><a href="<?php echo base_url() ?>relatoriofuncionario/orcamento"><span class="glyphicon glyphicon-list"></span> Or�amentos</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="<?php echo base_url() ?>relatoriofuncionario/receitas"><span class="glyphicon glyphicon-list"></span> Receitas X Pag.</a></li>							
									<li role="separator" class="divider"></li>
									<li><a href="<?php echo base_url() ?>relatoriofuncionario/produtosvend"><span class="glyphicon glyphicon-list"></span> Prd. X Ent.</a></li>
									<li role="separator" class="divider"></li>
									<!--<li><a href="<?php echo base_url() ?>relatoriofuncionario/despesas"><span class="glyphicon glyphicon-list"></span> Despesas</a></li>
									<li role="separator" class="divider"></li>-->
									<li><a href="<?php echo base_url() ?>relatoriofuncionario/produtosdevol1"><span class="glyphicon glyphicon-list"></span> Prd. X Dev.</a></li>
									<li role="separator" class="divider"></li>
									<!--<li><a href="<?php echo base_url() ?>relatoriofuncionario/produtoscomp"><span class="glyphicon glyphicon-list"></span> Despesas X Prd.</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="<?php echo base_url() ?>relatoriofuncionario/devolucao1"><span class="glyphicon glyphicon-list"></span> Devolu��es</a></li>
									<li role="separator" class="divider"></li>-->
									<li><a href="<?php echo base_url() ?>relatoriofuncionario/despesaspag"><span class="glyphicon glyphicon-list"></span> Despesas X Pag.</a></li>	
									<li role="separator" class="divider"></li>
									<li><a href="<?php echo base_url() ?>relatoriofuncionario/balanco"><span class="glyphicon glyphicon-usd"></span> Balan�o</a></li>
									<!--<li role="separator" class="divider"></li>
									<li><a href="<?php echo base_url() ?>relatorio/produtosdevol"><span class="glyphicon glyphicon-list"></span> Devol. X Cl. X Prd.(Desp)</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="<?php echo base_url() ?>relatoriofuncionario/consumo"><span class="glyphicon glyphicon-list"></span> Consumos</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="<?php echo base_url() ?>relatoriofuncionario/estoque"><span class="glyphicon glyphicon-list"></span> Estoque</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="<?php echo base_url() ?>relatoriofuncionario/rankingvendas"><span class="glyphicon glyphicon-list"></span> RankigVendas</a></li>
									-->
								</ul>
							</div>
							<div class="btn-group" role="group" aria-label="..."> </div>
						</li>						

						<li class="btn-toolbar navbar-form navbar-right" role="toolbar" aria-label="...">

							<div class="btn-group" role="group" aria-label="...">
								<a href="<?php echo base_url(); ?>loginfuncionario/sair">
									<button type="button" class="btn btn-md btn-danger ">
										<span class="glyphicon glyphicon-log-out"></span> Sair
									</button>
								</a>
							</div>

							<div class="btn-group" role="group" aria-label="..."> </div>
						</li>

					</ul>

				</div>
			</div>
		</div>	
	</div>
</nav>
<br>
