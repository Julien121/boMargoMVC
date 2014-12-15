<section style="margin:50px 0 50px">
		<div class="container">
			<div class="col-md-10 col-md-offset-1">
				<table class="table table-bordered table-striped text-center">
					<tr>
						<th class="text-center" width="20%">MOT</th>
						<th class="text-center" width="20%">NOMBRES POINTS</th>
						<th class="text-center" width="20%">DUREE</th>
						<th class="text-center" width="40%">ACTIONS</th>
					</tr>
					<tr>
						<td>FRUITS</td>
						<td>24</td>
						<td>24</td>
						<td>
							<div class="row">
								<div class="col-md-6">
									<a href='#' class="btn btn-default btn-block col-md-6">MODIFIER</a>
								</div>
								<div class="col-md-6">
									<a href='#' class="btn btn-danger btn-block col-md-6" onclick="return confirm('Voulez vraiment supprimer');">SUPPRIMER</a>
								</div>
							</div>
						</td>

					</tr>
					<tr>
						<td>ANIMAUX</td>
						<td>15</td>
						<td>24</td>
						<td>
							<div class="row">
								<div class="col-md-6">
									<a href='#' class="btn btn-default btn-block col-md-6">MODIFIER</a>
								</div>
								<div class="col-md-6">
									<a href='#' class="btn btn-danger btn-block col-md-6" onclick="return confirm('Voulez vraiment supprimer');">SUPPRIMER</a>
								</div>
							</div>
					</td>
					<tr>
						<td><input type="text" class="form-control" id="inputMot" placeholder="ANIMAUX"></td>
						<td><input type="text" class="form-control" id="inputMot" placeholder="15"></td>
						<td><input type="text" class="form-control" id="inputMot" placeholder="24"></td>
						<td>
                                                    <div class="row">
                                                        <div class="col-md-6 col-md-offset-3">
                                                                <a href='#' type="submit" class="btn btn-primary btn-block">VALIDER</a>
                                                        </div>
                                                    </div>
                                                </td>
					</tr>
					<tr>
						<form method="POST" action="#">
							<td><input type="text" class="form-control" id="inputMot" placeholder="Mot"></td>
							<td><input type="text" class="form-control" id="inputPoint" placeholder="Point"></td>
							<td><input type="text" class="form-control" id="inputDuree" placeholder="Duree"></td>
							<td>
								<div class="row">
                                                                    <div class="col-md-6 col-md-offset-3">
                                                                            <a href='#' type="submit" class="btn btn-primary btn-block">VALIDER</a>
                                                                    </div>
								</div>
							</td>
						</form>
					</tr>
				</table>
			</div>
            <div class="col-md-3 col-md-offset-1">
                <a href='index.html' class="btn btn-default btn-block">LISTE DES THEMES</a>
            </div>
		</div>
	</section>