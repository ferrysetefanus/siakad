<div class="container-fluid">
	<div class="alert alert-info" role="alert">
		<i class="mr-2 fas fa-fw fa-tachometer-alt"></i>Dashboard
	</div>

	<div class="alert alert-info" role="alert">
		<h4 class="alert-heading">Selamat Datang</h4>
		<p>Selamat Datang <strong><?= $username ?></strong> di Sistem Informasi Akademik, Anda telah login sebagai <strong><?= $level ?></strong></p>
		<hr>
		<p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
		<!-- Button trigger modal -->
		<button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
			<i class="fas fa-cogs mr-1"></i>Control Panel
		</button>

		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-cogs mr-1"></i>Control Panel</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-md-3 text-info text-center">
								<a href="<?= base_url() ?>"><p class="text-info small nav-link">MAHASISWA</p></a>
								<i class="fas fa-3x fa-user-graduate"></i>
							</div>
							<div class="col-md-3 text-info text-center">
								<a href="<?= base_url() ?>"><p class="text-info small nav-link">TAHUN AKADEMIK</p></a>
								<i class="fas fa-3x fa-calendar-alt"></i>
							</div>
							<div class="col-md-3 text-info text-center">
								<a href="<?= base_url() ?>"><p class="text-info small nav-link">KRS</p></a>
								<i class="fas fa-3x fa-edit"></i>
							</div>
							<div class="col-md-3 text-info text-center">
								<a href="<?= base_url() ?>"><p class="text-info small nav-link">KHS</p></a>
								<i class="fas fa-3x fa-file-alt"></i>
							</div>
						</div><hr>

						<div class="row">
							<div class="col-md-3 text-info text-center">
								<a href="<?= base_url() ?>"><p class="text-info small nav-link">INPUT NILAI</p></a>
								<i class="fas fa-3x fa-sort-numeric-down"></i>
							</div>
							<div class="col-md-3 text-info text-center">
								<a href="<?= base_url() ?>"><p class="text-info small nav-link">CETAK TRANSKRIP</p></a>
								<i class="fas fa-3x fas fa-3x fa-print"></i>
							</div>
							<div class="col-md-3 text-info text-center">
								<a href="<?= base_url() ?>"><p class="text-info small nav-link">KATEGORI</p></a>
								<i class="fas fa-3x fa-list-ul"></i>
							</div>
							<div class="col-md-3 text-info text-center">
								<a href="<?= base_url() ?>"><p class="text-info small nav-link">INFO KAMPUS</p></a>
								<i class="fas fa-3x fa-bullhorn"></i>
							</div>
						</div><hr>

						<div class="row">
							<div class="col-md-3 text-info text-center">
								<a href="<?= base_url() ?>"><p class="text-info small nav-link">IDENTITAS</p></a>
								<i class="fas fa-3x fa-id-card-alt"></i>
							</div>
							<div class="col-md-3 text-info text-center">
								<a href="<?= base_url() ?>"><p class="text-info small nav-link">TENTANG KAMPUS</p></a>
								<i class="fas fa-3x fa-info-circle"></i>
							</div>
							<div class="col-md-3 text-info text-center">
								<a href="<?= base_url() ?>"><p class="text-info small nav-link">FASILITAS</p></a>
								<i class="fas fa-3x fa-laptop"></i>
							</div>
							<div class="col-md-3 text-info text-center">
								<a href="<?= base_url() ?>"><p class="text-info small nav-link">GALERI</p></a>
								<i class="fas fa-3x fa-image"></i>
							</div>
						</div><hr>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
