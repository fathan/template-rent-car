<!DOCTYPE html>
<html>
<?php include 'shareds/head.php' ?>
<body>
	<div class="site-wrapper">
		<?php include 'shareds/header.php'; ?>
		<section class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<?php include 'shareds/menu-sidebar-member.php'; ?>
					</div>
					<div class="col-md-9">
						<div class="panel panel-default">
							<div class="panel-body">
								<h4>Edit Profile</h4>
								<hr>
								<div class="alert alert-success">
									Profil anda telah berhasil disimpan.
								</div>
								<form action="">
									<div class="row">
										<div class="col-md-12">
											<h4><strong>Data Umum</strong></h4>
											<hr>
										</div>
										<div class="col-md-12">
											<label>Email</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<br>
											<h4><strong>Data Profil</strong></h4>
											<hr>
										</div>
										<div class="col-md-6">
											<label>Nama Depan</label>
											<input type="text" class="form-control">
										</div>
										<div class="col-md-6">
											<label>Nama Belakang</label>
											<input type="text" class="form-control">
										</div>
										<div class="col-md-6">
											<label>Telepon</label>
											<input type="text" class="form-control">
										</div>
										<div class="col-md-6">
											<label>Jenis Kelamin</label>
											<input type="text" class="form-control">
										</div>
										<div class="col-md-6">
											<label>Status</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<br>
											<h4><strong>Data Alamat</strong></h4>
											<hr>
										</div>
										<div class="col-md-6">
											<label>Negara</label>
											<input type="text" class="form-control">
										</div>
										<div class="col-md-6">
											<label>Provinsi</label>
											<input type="text" class="form-control">
										</div>
										<div class="col-md-6">
											<label>Kota/Kabupaten</label>
											<input type="text" class="form-control">
										</div>
										<div class="col-md-6">
											<label>Desa/Kelurahan</label>
											<input type="text" class="form-control">
										</div>
										<div class="col-md-12">
											<br>
											<input type="submit" class="btn btn-default btn-sm" value="Submit">
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php include 'shareds/footer.php'; ?>
	</div>
</body>
<?php include 'shareds/javascript.php'; ?>
</html>