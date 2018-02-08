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
								<h4>Ganti Password</h4>
								<hr>
								<div class="alert alert-success">
									Password anda telah berhasil di ganti.
								</div>
								<form action="">
									<div class="row">
										<div class="col-md-12">
											<label>Password Lama</label>
											<input type="password" class="form-control" placeholder="Masukan password lama anda!">
										</div>
										<div class="col-md-6">
											<label>Password Baru</label>
											<input type="password" class="form-control" placeholder="Masukan password baru anda!">
										</div>
										<div class="col-md-6">
											<label>Konfirmasi Password Baru</label>
											<input type="password" class="form-control" placeholder="Masukan konfirmasi password anda!">
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