<!DOCTYPE html>
<html>
<?php include 'shareds/head.php' ?>
<body>
	<div class="site-wrapper">
		<?php include 'shareds/header.php'; ?>
		<!-- START SUB HEADER TOP -->
		<section class="sub-header-top">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="pull-left">
							<span class="title">DAFTAR PRODUK</span>
						</div>
						<div class="pull-right">
							<span>TOTAL PRODUK : 5000</span>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- END SUB HEADER TOP -->

		<!-- START BOX LISTING PRODUCT -->
		<section class="box-listing-product">
			<div class="container">
				<div class="row">
					<!-- START ASIDE SEARCHING -->
					<div class="col-md-3">
						<aside class="sidebar-searching">
							<div class="title">
								filter pencarian
							</div>
							<div class="panel panel-default">
								<div class="panel-body">
									<div class="panel-group" role="tablist" aria-multiselectable="true">
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="headingTahun">
												<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
													TAHUN
													<span class="pull-right"><span class="caret"></span></span>
												</a>
											</div>
											<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTahun">
												<div class="panel-body">
													<div class="row">
														<div class="col-md-12">
															<label>Dari Tahun</label>
															<select name="#" class="form-control">
																<option value="#">--- PILIH TAHUN ---</option>
																<option value="2001">2001</option>
																<option value="2002">2002</option>
																<option value="2003">2003</option>
																<option value="2004">2004</option>
																<option value="2005">2005</option>
																<option value="2006">2006</option>
																<option value="2007">2007</option>
																<option value="2008">2008</option>
																<option value="2009">2009</option>
																<option value="2010">2010</option>
																<option value="2011">2011</option>
																<option value="2012">2012</option>
																<option value="2013">2013</option>
																<option value="2014">2014</option>
																<option value="2015">2015</option>
																<option value="2016">2016</option>
																<option value="2017">2017</option>
															</select>
														</div>
														<div class="col-md-12">
															<label>Sampai Tahun</label>
															<select name="#" class="form-control">
																<option value="#">--- PILIH TAHUN ---</option>
																<option value="2001">2001</option>
																<option value="2002">2002</option>
																<option value="2003">2003</option>
																<option value="2004">2004</option>
																<option value="2005">2005</option>
																<option value="2006">2006</option>
																<option value="2007">2007</option>
																<option value="2008">2008</option>
																<option value="2009">2009</option>
																<option value="2010">2010</option>
																<option value="2011">2011</option>
																<option value="2012">2012</option>
																<option value="2013">2013</option>
																<option value="2014">2014</option>
																<option value="2015">2015</option>
																<option value="2016">2016</option>
																<option value="2017">2017</option>
															</select>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="headingHarga">
												<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
													HARGA
													<span class="pull-right"><span class="caret"></span></span>
												</a>
											</div>
											<div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingHarga">
												<div class="panel-body">
													<div class="row">
														<div class="col-md-12">
															<label>Dari Harga</label>
															<input type="text" class="form-control" placeholder="E.x : 1000000">
														</div>
														<div class="col-md-12">
															<label>Sampai Harga</label>
															<input type="text" class="form-control" placeholder="E.x : 5000000">
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="headingModel">
												<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
													MODEL
													<span class="pull-right"><span class="caret"></span></span>
												</a>
											</div>
											<div id="collapseThree" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingModel">
												<div class="panel-body">
													<div class="row">
														<div class="col-md-12">
															<label>Brand</label>
															<select name="#" class="form-control">
																<option value="#">--- PILIH BRAND ---</option>
																<option value="suzuki">suzuki</option>
																<option value="honda">honda</option>
																<option value="toyota">toyota</option>
															</select>
														</div>
														<div class="col-md-12">
															<label>Model</label>
															<select name="#" class="form-control">
																<option value="#">--- PILIH MODEL ---</option>
																<option value="RX">RX</option>
																<option value="RH">RH</option>
																<option value="RG">RG</option>
															</select>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="headingLokasi">
												<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFor" aria-expanded="false" aria-controls="collapseFor">
													LOKASI
													<span class="pull-right"><span class="caret"></span></span>
												</a>
											</div>
											<div id="collapseFor" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingLokasi">
												<div class="panel-body">
													<div class="row">
														<div class="col-md-12">
															<label>Provinsi</label>
															<select name="#" class="form-control">
																<option value="#">--- PILIH PROVINSI ---</option>
																<option value="DKI Jakarta">DKI Jakarta</option>
																<option value="Jawa Barat">Jawa Barat</option>
																<option value="Jawa Timur">Jawa Timur</option>
															</select>
														</div>
														<div class="col-md-12">
															<label>Kota</label>
															<select name="#" class="form-control">
																<option value="#">--- PILIH KOTA ---</option>
																<option value="Jakarta Selatan">Jakarta Selatan</option>
																<option value="Jakarta Pusat">Jakarta Pusat</option>
																<option value="Jakarta Timur">Jakarta Timur</option>
															</select>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<br>
											<input type="submit" class="btn btn-success btn-block">
											<br>
										</div>
									</div>
								</div>
							</div>
						</aside>
					</div>
					<!-- END ASIDE SEARCHING -->

					<!-- START LISTING PRODUCT -->
					<div class="col-md-9">
						<div class="box-action-top">
							<div class="pull-left">
								<div class="btn-group">
									<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Sorting Produk <span class="caret"></span>
									</button>
									<ul class="dropdown-menu">
										<li><a href="#">Tanggal terbaru : Dimulai dari Terlama</a></li>
										<li><a href="#">Tanggal terbaru : Dimulai dari Terbaru</a></li>
										<li><a href="#">Harga : Dimulai dari Terendah</a></li>
										<li><a href="#">Harga : Dimulai dari Tertinggi</a></li>
									</ul>
								</div>
							</div>
							<div class="pull-right">
								<a href="#" class="btn btn-success">
									<i class="fa fa-save"></i>
									&nbsp;Simpan Pencarian
								</a>
							</div>
						</div>
						<div class="box-body-product">
							<div class="list-product">
								<div class="image">
									<div class="box-img-big">
										<img src="https://si.wsj.net/public/resources/images/OF-AD229_RUMBLE_P_20160323113838.jpg" alt="TITLE PRODUCT NYA">
										<div class="count-img">
											<i class="fa fa-image"></i>
											&nbsp;<span>6</span>
										</div>
									</div>
									<div class="box-img-three">
										<div class="img">
											<img src="https://si.wsj.net/public/resources/images/OF-AD229_RUMBLE_P_20160323113838.jpg" alt="TITLE PRODUCT NYA">
										</div>
										<div class="img">
											<img src="https://si.wsj.net/public/resources/images/OF-AD229_RUMBLE_P_20160323113838.jpg" alt="TITLE PRODUCT NYA">
										</div>
										<div class="img">
											<img src="https://si.wsj.net/public/resources/images/OF-AD229_RUMBLE_P_20160323113838.jpg" alt="TITLE PRODUCT NYA">
										</div>
									</div>
								</div>
								<div class="description">
									<div class="desc-top">
										<div class="row">
											<div class="col-md-9">
												<div class="title">
													Mercedes-Benz V-CLASS
												</div>
												<div class="pricing">
													Rp. 2.000.000
												</div>
											</div>
											<div class="col-md-3">
												<i class="fa fa-map-marker"></i>
												&nbsp;Jakarta Pusat
											</div>
										</div>
									</div>
									<div class="desc-bottom">
										<div class="row">
											<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
												<div class="desc-content">
													<p>
														Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae ipsum a aliquid perspiciatis in nam! Quam, saepe, temporibus! Laboriosam, aliquid? Autem, vel magnam pariatur! Dolorem quasi ducimus libero, fugit alias.
													</p>
													<a href="#" class="btn btn-success btn-sm">
														<i class="fa fa-heart"></i>
														Simpan Favorit
													</a>
													<a href="#" class="btn btn-warning btn-sm">
														<i class="fa fa-phone"></i>
														Hubungi Penyewa
													</a>
												</div>
											</div>
											<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
												<div class="box-point">
													<div class="icon">
														<i class="fa fa-calendar"></i>
														&nbsp;&nbsp;<span>Tahun 2015</span>
													</div>
													<div class="icon">
														<i class="fa fa-calendar"></i>
														&nbsp;&nbsp;<span>Model E250</span>
													</div>
													<div class="icon">
														<i class="fa fa-users"></i>
														&nbsp;&nbsp;<span>Kelas Menengah</span>
													</div>
													<a href="p-product-detail.php" class="btn btn-default btn-sm">
														<i class="fa fa-search"></i>
														Lihat Detail
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="list-product">
								<div class="image">
									<div class="box-img-big">
										<img src="https://si.wsj.net/public/resources/images/OF-AD229_RUMBLE_P_20160323113838.jpg" alt="TITLE PRODUCT NYA">
										<div class="count-img">
											<i class="fa fa-image"></i>
											&nbsp;<span>6</span>
										</div>
									</div>
									<div class="box-img-three">
										<div class="img">
											<img src="https://si.wsj.net/public/resources/images/OF-AD229_RUMBLE_P_20160323113838.jpg" alt="TITLE PRODUCT NYA">
										</div>
										<div class="img">
											<img src="https://si.wsj.net/public/resources/images/OF-AD229_RUMBLE_P_20160323113838.jpg" alt="TITLE PRODUCT NYA">
										</div>
										<div class="img">
											<img src="https://si.wsj.net/public/resources/images/OF-AD229_RUMBLE_P_20160323113838.jpg" alt="TITLE PRODUCT NYA">
										</div>
									</div>
								</div>
								<div class="description">
									<div class="desc-top">
										<div class="row">
											<div class="col-md-9">
												<div class="title">
													Mercedes-Benz V-CLASS
												</div>
												<div class="pricing">
													Rp. 2.000.000
												</div>
											</div>
											<div class="col-md-3">
												<i class="fa fa-map-marker"></i>
												&nbsp;Jakarta Pusat
											</div>
										</div>
									</div>
									<div class="desc-bottom">
										<div class="row">
											<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
												<div class="desc-content">
													<p>
														Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae ipsum a aliquid perspiciatis in nam! Quam, saepe, temporibus! Laboriosam, aliquid? Autem, vel magnam pariatur! Dolorem quasi ducimus libero, fugit alias.
													</p>
													<a href="#" class="btn btn-success btn-sm">
														<i class="fa fa-heart"></i>
														Simpan Favorit
													</a>
													<a href="#" class="btn btn-warning btn-sm">
														<i class="fa fa-phone"></i>
														Hubungi Penyewa
													</a>
												</div>
											</div>
											<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
												<div class="box-point">
													<div class="icon">
														<i class="fa fa-calendar"></i>
														&nbsp;&nbsp;<span>Tahun 2015</span>
													</div>
													<div class="icon">
														<i class="fa fa-calendar"></i>
														&nbsp;&nbsp;<span>Model E250</span>
													</div>
													<div class="icon">
														<i class="fa fa-users"></i>
														&nbsp;&nbsp;<span>Kelas Menengah</span>
													</div>
													<a href="p-product-detail.php" class="btn btn-default btn-sm">
														<i class="fa fa-search"></i>
														Lihat Detail
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="list-product">
								<div class="image">
									<div class="box-img-big">
										<img src="https://si.wsj.net/public/resources/images/OF-AD229_RUMBLE_P_20160323113838.jpg" alt="TITLE PRODUCT NYA">
										<div class="count-img">
											<i class="fa fa-image"></i>
											&nbsp;<span>6</span>
										</div>
									</div>
									<div class="box-img-three">
										<div class="img">
											<img src="https://si.wsj.net/public/resources/images/OF-AD229_RUMBLE_P_20160323113838.jpg" alt="TITLE PRODUCT NYA">
										</div>
										<div class="img">
											<img src="https://si.wsj.net/public/resources/images/OF-AD229_RUMBLE_P_20160323113838.jpg" alt="TITLE PRODUCT NYA">
										</div>
										<div class="img">
											<img src="https://si.wsj.net/public/resources/images/OF-AD229_RUMBLE_P_20160323113838.jpg" alt="TITLE PRODUCT NYA">
										</div>
									</div>
								</div>
								<div class="description">
									<div class="desc-top">
										<div class="row">
											<div class="col-md-9">
												<div class="title">
													Mercedes-Benz V-CLASS
												</div>
												<div class="pricing">
													Rp. 2.000.000
												</div>
											</div>
											<div class="col-md-3">
												<i class="fa fa-map-marker"></i>
												&nbsp;Jakarta Pusat
											</div>
										</div>
									</div>
									<div class="desc-bottom">
										<div class="row">
											<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
												<div class="desc-content">
													<p>
														Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae ipsum a aliquid perspiciatis in nam! Quam, saepe, temporibus! Laboriosam, aliquid? Autem, vel magnam pariatur! Dolorem quasi ducimus libero, fugit alias.
													</p>
													<a href="#" class="btn btn-success btn-sm">
														<i class="fa fa-heart"></i>
														Simpan Favorit
													</a>
													<a href="#" class="btn btn-warning btn-sm">
														<i class="fa fa-phone"></i>
														Hubungi Penyewa
													</a>
												</div>
											</div>
											<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
												<div class="box-point">
													<div class="icon">
														<i class="fa fa-calendar"></i>
														&nbsp;&nbsp;<span>Tahun 2015</span>
													</div>
													<div class="icon">
														<i class="fa fa-calendar"></i>
														&nbsp;&nbsp;<span>Model E250</span>
													</div>
													<div class="icon">
														<i class="fa fa-users"></i>
														&nbsp;&nbsp;<span>Kelas Menengah</span>
													</div>
													<a href="p-product-detail.php" class="btn btn-default btn-sm">
														<i class="fa fa-search"></i>
														Lihat Detail
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="list-product">
								<div class="image">
									<div class="box-img-big">
										<img src="https://si.wsj.net/public/resources/images/OF-AD229_RUMBLE_P_20160323113838.jpg" alt="TITLE PRODUCT NYA">
										<div class="count-img">
											<i class="fa fa-image"></i>
											&nbsp;<span>6</span>
										</div>
									</div>
									<div class="box-img-three">
										<div class="img">
											<img src="https://si.wsj.net/public/resources/images/OF-AD229_RUMBLE_P_20160323113838.jpg" alt="TITLE PRODUCT NYA">
										</div>
										<div class="img">
											<img src="https://si.wsj.net/public/resources/images/OF-AD229_RUMBLE_P_20160323113838.jpg" alt="TITLE PRODUCT NYA">
										</div>
										<div class="img">
											<img src="https://si.wsj.net/public/resources/images/OF-AD229_RUMBLE_P_20160323113838.jpg" alt="TITLE PRODUCT NYA">
										</div>
									</div>
								</div>
								<div class="description">
									<div class="desc-top">
										<div class="row">
											<div class="col-md-9">
												<div class="title">
													Mercedes-Benz V-CLASS
												</div>
												<div class="pricing">
													Rp. 2.000.000
												</div>
											</div>
											<div class="col-md-3">
												<i class="fa fa-map-marker"></i>
												&nbsp;Jakarta Pusat
											</div>
										</div>
									</div>
									<div class="desc-bottom">
										<div class="row">
											<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
												<div class="desc-content">
													<p>
														Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae ipsum a aliquid perspiciatis in nam! Quam, saepe, temporibus! Laboriosam, aliquid? Autem, vel magnam pariatur! Dolorem quasi ducimus libero, fugit alias.
													</p>
													<a href="#" class="btn btn-success btn-sm">
														<i class="fa fa-heart"></i>
														Simpan Favorit
													</a>
													<a href="#" class="btn btn-warning btn-sm">
														<i class="fa fa-phone"></i>
														Hubungi Penyewa
													</a>
												</div>
											</div>
											<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
												<div class="box-point">
													<div class="icon">
														<i class="fa fa-calendar"></i>
														&nbsp;&nbsp;<span>Tahun 2015</span>
													</div>
													<div class="icon">
														<i class="fa fa-calendar"></i>
														&nbsp;&nbsp;<span>Model E250</span>
													</div>
													<div class="icon">
														<i class="fa fa-users"></i>
														&nbsp;&nbsp;<span>Kelas Menengah</span>
													</div>
													<a href="p-product-detail.php" class="btn btn-default btn-sm">
														<i class="fa fa-search"></i>
														Lihat Detail
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="list-product">
								<div class="image">
									<div class="box-img-big">
										<img src="https://si.wsj.net/public/resources/images/OF-AD229_RUMBLE_P_20160323113838.jpg" alt="TITLE PRODUCT NYA">
										<div class="count-img">
											<i class="fa fa-image"></i>
											&nbsp;<span>6</span>
										</div>
									</div>
									<div class="box-img-three">
										<div class="img">
											<img src="https://si.wsj.net/public/resources/images/OF-AD229_RUMBLE_P_20160323113838.jpg" alt="TITLE PRODUCT NYA">
										</div>
										<div class="img">
											<img src="https://si.wsj.net/public/resources/images/OF-AD229_RUMBLE_P_20160323113838.jpg" alt="TITLE PRODUCT NYA">
										</div>
										<div class="img">
											<img src="https://si.wsj.net/public/resources/images/OF-AD229_RUMBLE_P_20160323113838.jpg" alt="TITLE PRODUCT NYA">
										</div>
									</div>
								</div>
								<div class="description">
									<div class="desc-top">
										<div class="row">
											<div class="col-md-9">
												<div class="title">
													Mercedes-Benz V-CLASS
												</div>
												<div class="pricing">
													Rp. 2.000.000
												</div>
											</div>
											<div class="col-md-3">
												<i class="fa fa-map-marker"></i>
												&nbsp;Jakarta Pusat
											</div>
										</div>
									</div>
									<div class="desc-bottom">
										<div class="row">
											<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
												<div class="desc-content">
													<p>
														Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae ipsum a aliquid perspiciatis in nam! Quam, saepe, temporibus! Laboriosam, aliquid? Autem, vel magnam pariatur! Dolorem quasi ducimus libero, fugit alias.
													</p>
													<a href="#" class="btn btn-success btn-sm">
														<i class="fa fa-heart"></i>
														Simpan Favorit
													</a>
													<a href="#" class="btn btn-warning btn-sm">
														<i class="fa fa-phone"></i>
														Hubungi Penyewa
													</a>
												</div>
											</div>
											<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
												<div class="box-point">
													<div class="icon">
														<i class="fa fa-calendar"></i>
														&nbsp;&nbsp;<span>Tahun 2015</span>
													</div>
													<div class="icon">
														<i class="fa fa-calendar"></i>
														&nbsp;&nbsp;<span>Model E250</span>
													</div>
													<div class="icon">
														<i class="fa fa-users"></i>
														&nbsp;&nbsp;<span>Kelas Menengah</span>
													</div>
													<a href="p-product-detail.php" class="btn btn-default btn-sm">
														<i class="fa fa-search"></i>
														Lihat Detail
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="list-product">
								<div class="image">
									<div class="box-img-big">
										<img src="https://si.wsj.net/public/resources/images/OF-AD229_RUMBLE_P_20160323113838.jpg" alt="TITLE PRODUCT NYA">
										<div class="count-img">
											<i class="fa fa-image"></i>
											&nbsp;<span>6</span>
										</div>
									</div>
									<div class="box-img-three">
										<div class="img">
											<img src="https://si.wsj.net/public/resources/images/OF-AD229_RUMBLE_P_20160323113838.jpg" alt="TITLE PRODUCT NYA">
										</div>
										<div class="img">
											<img src="https://si.wsj.net/public/resources/images/OF-AD229_RUMBLE_P_20160323113838.jpg" alt="TITLE PRODUCT NYA">
										</div>
										<div class="img">
											<img src="https://si.wsj.net/public/resources/images/OF-AD229_RUMBLE_P_20160323113838.jpg" alt="TITLE PRODUCT NYA">
										</div>
									</div>
								</div>
								<div class="description">
									<div class="desc-top">
										<div class="row">
											<div class="col-md-9">
												<div class="title">
													Mercedes-Benz V-CLASS
												</div>
												<div class="pricing">
													Rp. 2.000.000
												</div>
											</div>
											<div class="col-md-3">
												<i class="fa fa-map-marker"></i>
												&nbsp;Jakarta Pusat
											</div>
										</div>
									</div>
									<div class="desc-bottom">
										<div class="row">
											<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
												<div class="desc-content">
													<p>
														Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae ipsum a aliquid perspiciatis in nam! Quam, saepe, temporibus! Laboriosam, aliquid? Autem, vel magnam pariatur! Dolorem quasi ducimus libero, fugit alias.
													</p>
													<a href="#" class="btn btn-success btn-sm">
														<i class="fa fa-heart"></i>
														Simpan Favorit
													</a>
													<a href="#" class="btn btn-warning btn-sm">
														<i class="fa fa-phone"></i>
														Hubungi Penyewa
													</a>
												</div>
											</div>
											<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
												<div class="box-point">
													<div class="icon">
														<i class="fa fa-calendar"></i>
														&nbsp;&nbsp;<span>Tahun 2015</span>
													</div>
													<div class="icon">
														<i class="fa fa-calendar"></i>
														&nbsp;&nbsp;<span>Model E250</span>
													</div>
													<div class="icon">
														<i class="fa fa-users"></i>
														&nbsp;&nbsp;<span>Kelas Menengah</span>
													</div>
													<a href="p-product-detail.php" class="btn btn-default btn-sm">
														<i class="fa fa-search"></i>
														Lihat Detail
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="text-center">
								<nav aria-label="Page navigation">
									<ul class="pagination">
										<li>
											<a href="#" aria-label="Previous">
												<span aria-hidden="true">&laquo;</span>
											</a>
										</li>
										<li><a href="#">1</a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#">4</a></li>
										<li><a href="#">5</a></li>
										<li>
											<a href="#" aria-label="Next">
												<span aria-hidden="true">&raquo;</span>
											</a>
										</li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
					<!-- END LISTING PRODUCT -->
				</div>
			</div>
		</section>
		<!-- END BOX LISTING PRODUCT -->
		<?php include 'shareds/footer.php'; ?>
	</div>
</body>
<?php include 'shareds/javascript.php'; ?>
</html>