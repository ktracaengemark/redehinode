<?php if (isset($msg)) echo $msg; ?>
<?php if ( !isset($evento) && isset($_SESSION['Consultor'])) { ?>

<div class="container-fluid">
	<div class="row">
	
		<div class="col-md-2"></div>
		<div class="col-md-8 ">
		

				


			
					<nav class="navbar navbar-inverse">
					  <div class="container-fluid">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span> 
							</button>
							<a class="navbar-brand" href="<?php echo base_url() . 'consultor/prontuario/' . $_SESSION['Consultor']['idApp_Consultor']; ?>">
								<?php echo '<small>' . $_SESSION['Consultor']['NomeConsultor'] . '</small> - <small>' . $_SESSION['Consultor']['idApp_Consultor'] . '</small>' ?> 
							</a>
						</div>
						<div class="collapse navbar-collapse" id="myNavbar">

							<ul class="nav navbar-nav navbar-center">
								<li>
									<a href="<?php echo base_url() . 'consultor/alterar/' . $_SESSION['Consultor']['idApp_Consultor']; ?>">
										<span class="glyphicon glyphicon-edit"></span> Edit. Consultor
									</a>
								</li>
								<li>
									<a href="<?php echo base_url() . 'orcatrata/listar/' . $_SESSION['Consultor']['idApp_Consultor']; ?>">
										<span class="glyphicon glyphicon-usd"></span> Listar Or�ams.
									</a>
								</li>
								<li>
									<a href="<?php echo base_url() . 'orcatrata/cadastrar/' . $_SESSION['Consultor']['idApp_Consultor']; ?>">
										<span class="glyphicon glyphicon-plus"></span> Cad. Or�am.
									</a>
								</li>
							</ul>

						</div>
					  </div>
					</nav>

					<?php } ?>
					<div class="row">
						<div class="col-md-12 col-lg-12">
							<div class="panel panel-primary">
								<div class="panel-heading"><strong>Or�amentos</strong></div>
								<div class="panel-body">

									<div>

										<!-- Nav tabs -->
										<ul class="nav nav-tabs" role="tablist">
											<li role="presentation" class="active" ><a href="#proxima" aria-controls="proxima" role="tab" data-toggle="tab">Aprovados</a></li>
											<li role="presentation" ><a href="#anterior" aria-controls="anterior" role="tab" data-toggle="tab">N�o Aprovados</a></li>
										</ul>

										<!-- Tab panes -->
										<div class="tab-content">

											<!-- Pr�ximas Consultas -->
											<div role="tabpanel" class="tab-pane active " id="proxima">

												<?php
												if ($aprovado) {

													foreach ($aprovado->result_array() as $row) {
												?>

												<div class="bs-callout bs-callout-success" id=callout-overview-not-both>

													<a class="btn btn-success" href="<?php echo base_url() . 'orcatrata/alterar/' . $row['idApp_OrcaTrata'] ?>" role="button">
														<span class="glyphicon glyphicon-edit"></span> Editar Dados
													</a>
													
														
													<a class="btn btn-md btn-info" target="_blank" href="<?php echo base_url() . 'OrcatrataPrint/imprimir/' . $row['idApp_OrcaTrata']; ?>" role="button">
														<span class="glyphicon glyphicon-print"></span> Vers�o para Impress�o
													</a>
													

													<br><br>

													<h4>
														<span class="glyphicon glyphicon-tags"></span> <b>N� Or�.:</b> <?php echo $row['idApp_OrcaTrata']; ?>
													</h4>
													<h5>
														<span class="glyphicon glyphicon-calendar"></span> <b>Data do Or�amento:</b> <?php echo $row['DataOrca']; ?>
													</h5>

													<p>
														<?php if ($row['ProfissionalOrca']) { ?>
														<span class="glyphicon glyphicon-user"></span> <b>Profissional:</b> <?php echo $row['ProfissionalOrca']; ?> -
														<?php } if ($row['AprovadoOrca']) { ?>
														<span class="glyphicon glyphicon-thumbs-up"></span> <b>Or�. Aprovado?</b> <?php echo $row['AprovadoOrca']; ?>
														<?php } ?>

													</p>
													<p>
														<?php if ($row['ServicoConcluido']) { ?>
														<span class="glyphicon glyphicon-ok"></span> <b>Or�. Conclu�do?</b> <?php echo $row['ServicoConcluido']; ?>
														<?php } ?>
													</p>
													<p>
														<?php if ($row['QuitadoOrca']) { ?>
														<span class="glyphicon glyphicon-usd"></span> <b>Or�. Quitado?</b> <?php echo $row['QuitadoOrca']; ?>
														<?php } ?>
													</p>
													<p>
														<span class="glyphicon glyphicon-pencil"></span> <b>Obs:</b> <?php echo nl2br($row['ObsOrca']); ?>
													</p>

												</div>

												<?php
													}
												} else {
													echo '<br><div class="alert alert-info text-center" role="alert"><b>Nenhum registro</b></div>';
												}
												?>

											</div>

											<!-- Hist�rico de Consultas -->
											<div role="tabpanel" class="tab-pane " id="anterior">

												<?php
												if ($naoaprovado) {

													foreach ($naoaprovado->result_array() as $row) {
												?>

												<div class="bs-callout bs-callout-danger" id=callout-overview-not-both>

													<a class="btn btn-danger" href="<?php echo base_url() . 'orcatrata/alterar/' . $row['idApp_OrcaTrata'] ?>" role="button">
														<span class="glyphicon glyphicon-edit"></span> Editar Dados
													</a>
													
													<a class="btn btn-md btn-info" target="_blank" href="<?php echo base_url() . 'OrcatrataPrint/imprimir/' . $row['idApp_OrcaTrata']; ?>" role="button">
														<span class="glyphicon glyphicon-print"></span> Vers�o para Impress�o
													</a>

													<br><br>

													<h4>
														<span class="glyphicon glyphicon-tags"></span> <b>N� Or�.:</b> <?php echo $row['idApp_OrcaTrata']; ?>
													</h4>
													<h5>
														<span class="glyphicon glyphicon-calendar"></span> <b>Data do Or�amento:</b> <?php echo $row['DataOrca']; ?>
													</h5>

													<p>
														<?php if ($row['ProfissionalOrca']) { ?>
														<span class="glyphicon glyphicon-user"></span> <b>Profissional:</b> <?php echo $row['ProfissionalOrca']; ?> -
														<?php } if ($row['AprovadoOrca']) { ?>
														<span class="glyphicon glyphicon-thumbs-up"></span> <b>Or�. Aprovado?</b> <?php echo $row['AprovadoOrca']; ?>
														<?php } ?>
													</p>
													<p>
														<?php if ($row['ServicoConcluido']) { ?>
														<span class="glyphicon glyphicon-ok"></span> <b>Or�. Conclu�do?</b> <?php echo $row['ServicoConcluido']; ?>
														<?php } ?>
													</p>
													<p>
														<?php if ($row['QuitadoOrca']) { ?>
														<span class="glyphicon glyphicon-usd"></span> <b>Or�. Quitado?</b> <?php echo $row['QuitadoOrca']; ?>
														<?php } ?>
													</p>
													<p>
														<span class="glyphicon glyphicon-pencil"></span> <b>Obs:</b> <?php echo nl2br($row['ObsOrca']); ?>
													</p>

												</div>

												<?php
													}
												} else {
													echo '<br><div class="alert alert-info text-center" role="alert"><b>Nenhum registro</b></div>';
												}
												?>

											</div>

										</div>

									</div>
								</div>
							</div>
						</div>
					</div>



		</div>
		<div class="col-md-2"></div>
	</div>	
</div>
