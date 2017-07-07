<header>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-1 col-xs-1 visible-sm visible-xs">
				<button class="btn menu-btn" id="burguer-button">
					<i class="fa fa-bars" aria-hidden="true"></i>
				</button>
			</div>
			<div class="col-md-offset-4 col-md-4 col-sm-9 col-xs-9 text-center">
				<h1 class="logo"><i class="fa fa-cloud-download " aria-hidden="true"></i> FullDescargas</h1>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-1 col-xs-1 text-center">
				<button type="button" class="btn btn-log visible-lg visible-md" data-toggle="modal" data-target="#log">Entrar</button>
				<button type="button" class="btn btn-sing visible-lg visible-md" data-toggle="modal" data-target="#log">Registrarse</button>
				<button type="button" class="btn menu-btn visible-sm visible-xs" data-toggle="modal" data-target="#log">
					<i class="fa fa-user-circle-o" aria-hidden="true"></i>
				</button>
			</div>
		</div>
	</div>
</header>

<!-- Modal -->
<div class="modal fade" id="log" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">
					<i class="fa fa-cloud-download " aria-hidden="true"></i> FullDescargas
				</h4>
			</div>
			<div class="modal-body">
				<div class="sub-header"></div>
				<div>

					<!-- Nav tabs -->
					<ul class="nav nav-tabs nav-justified" role="tablist">
						<li role="presentation" class="active"><a href="#log-in" aria-controls="log-in" role="tab" data-toggle="tab">Entrar</a></li>
						<li role="presentation"><a href="#sing" aria-controls="sing" role="tab" data-toggle="tab">Registrarse</a></li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="log-in">
							<form action="">
								<div class="form-group">
									<input type="text" name="operador" class="form-control" placeholder="Número de celular">
								</div>
								<div class="form-group">
									<select name="operador" id="operador" class="form-control">
										<option value="">Operador</option>
										<option value="tigo">Tigo</option>
										<option value="claro">Claro</option>
									</select>
								</div>
								<div class="checkbox text-center">
									<label>
										<input type="checkbox" checked> Acepto los Términos y Condiciones
									</label>
								</div>
								<div class="form-group">
									<button type="button" class="btn">Entrar</button>
								</div>
							</form>
						</div>
						<div role="tabpanel" class="tab-pane" id="sing">
							<form action="">
								<div class="form-group">
									<input type="text" name="operador" class="form-control" placeholder="Número de celular">
								</div>
								<div class="form-group">
									<select name="operador" id="operador" class="form-control">
										<option value="">Operador</option>
										<option value="tigo">Tigo</option>
										<option value="claro">Claro</option>
									</select>
								</div>
								<div class="checkbox text-center">
									<label>
										<input type="checkbox" checked> Acepto los Términos y Condiciones
									</label>
								</div>
								<div class="form-group">
									<button type="button" class="btn">Registrarse</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>