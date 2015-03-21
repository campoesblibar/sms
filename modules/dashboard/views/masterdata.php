<div class="container">
	<div class="row-fluid clearfix">
		<div class="col-md-12 column">

			<!-- TAB CLASS -->
			<div class="tabbable" id="tabmaster">

				<!-- Header TAB -->
				<ul class="nav nav-tabs">
					<li class="active">
						<a href="#tabkec" data-toggle="tab">Kecamatan</a>
					</li>
					<li>
						<a href="#tabdesa" data-toggle="tab">Desa</a>
					</li>
					<li>
						<a href="#tabkesatuan" data-toggle="tab">Kesatuan</a>
					</li>
					
				</ul>
				<!-- End Header TAB -->

				<!-- Tab Content -->
				<div class="tab-content">

					<!-- Tab Content Kecamatan -->
					<div class="tab-pane active" id="tabkec">
						<br> <!-- Tambahkan INI  -->

						<!-- SPLIT CANVAS 2 PART -->
						<div class="row-fluid">

							<!-- PART 1 FOR GRID -->
							<div class="col-md-6 column">
								<table class="table table-striped table-bordered table-hover" id="kecamatan">
									<thead>
										<th>Nama Kecamatan</th>
									</thead>
									<tbody>
										<tr>
											<td>Karanglewas Selatan</td>
										</tr>
									</tbody>						
								</table>	
							</div>
							<!-- END PART 1 FOR GRID -->
							
							<!-- PART 2 FOR FORM -->
							<div class="col-md-6 column">
								<form method="post" class="form-group" action="<?php //echo base_url(''); ?>">
								<div class="form-group">
									<label>Nama Kecamatan</label>
									<input type="text" class="form-control" nama="namakecamatan" id="namakecamatan">
								</div>
								<div>
									<button class="btn btn-info">Simpan</button>
								</div>
								</form>
							</div>
							<!-- END PART 2 FOR FORM -->

						</div>
						<!-- END SPLIT CANVAS 2 PART -->

					</div>
					<!-- End Tab Content Kecamatan -->

					<!-- Tab Content Desa -->
					<div class="tab-pane" id="tabdesa">
						<br> <!-- Tambahkan INI  -->

						<!-- SPLIT CANVAS 2 PART -->
						<div class="row-fluid">

							<!-- PART 1 FOR GRID -->
							<div class="col-md-6 column">
								<table class="table table-striped table-bordered table-hover" id="desa">
									<thead>
										<th>Nama Kecamatan</th>
										<th>Nama Desa</th>
									</thead>

									<tbody>
										<tr>
											<td>Karang lewas</td>
											<td>Kediri</td>
										</tr>
									</tbody>

								</table>

							</div>
							<!-- END PART 1 FOR GRID -->
							
							<!-- PART 2 FOR FORM -->
							<div class="col-md-6 column">
								<form method="post" class="form-group" action="<?php //echo base_url(''); ?>">
								<div class="form-group">
									<label>Nama Kecamatan</label>
									<select name="kecamatan" class="form-control">
										<option>-- Pilih --</option>
									</select>
									<label>Nama Desa</label>
									<input type="text" class="form-control" nama="namadesa" id="namadesa">
								</div>
								<div>
									<button class="btn btn-info">Simpan</button>
								</div>
								</form>
							</div>
							<!-- END PART 2 FOR FORM -->

						</div>
						<!-- END SPLIT CANVAS 2 PART -->

					</div>
					
					<!-- End Tab Content Desa -->
					<!-- Tab Content Kesatuan -->
					<div class="tab-pane" id="tabkesatuan">
						<br> <!-- Tambahkan INI  -->

						<!-- SPLIT CANVAS 2 PART -->
						<div class="row-fluid">

							<!-- PART 1 FOR GRID -->
							<div class="col-md-6 column">
								<table class="table table-striped table-bordered table-hover" id="kesatuan">
									<thead>
										<th>Nama Kesatuan</th>
									</thead>
									<tbody>
										<tr>
											<td>Barak Kuda</td>
										</tr>
									</tbody>						
								</table>	
							</div>
							<!-- END PART 1 FOR GRID -->
							
							<!-- PART 2 FOR FORM -->
							<div class="col-md-6 column">
								<form method="post" class="form-group" action="<?php //echo base_url(''); ?>">
								<div class="form-group">
									<label>Nama Kesatuan</label>
									<input type="text" class="form-control" nama="namakesatuan" id="namakesatuan">
								</div>
								<div>
									<button class="btn btn-info">Simpan</button>
								</div>
								</form>
							</div>
							<!-- END PART 2 FOR FORM -->

						</div>
						<!-- END SPLIT CANVAS 2 PART -->

					</div>
					<!-- End Tab Content Kesatuan -->

					
				</div>
				<!-- Tab Content -->

			</div>
			<!-- END TAB CLASS -->

		</div>
	</div>
</div>