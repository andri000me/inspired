<!--  page-wrapper -->
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<!-- Form Elements -->
			<div class="alert-warning" role="alert">
				<span>
					<center><?php echo $this->session->flashdata('notif');?></center>
				</span>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					DATA PASIEN
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-lg-12">
							<table class="table table-hover">
								<thead>
									<tr>
										<th scope="col">#</th>
										<th scope="col">Nama PASIEN</th>
										<th scope="col">Umur</th>
										<th scope="col">Alamat</th>
										<th scope="col">No HP</th>
										<th scope="col">Jenis Kelamin</th>
										<th scope="col">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php $no=1; foreach($pasien as $pasiens) { ?>
									<tr>
										<th scope="row"><?= $no++ ?></th>
										<td><?= $pasiens->nama_pasien ?></td>
										<td><?= $pasiens->umur ?></td>
										<td><?= $pasiens->alamat ?></td>
										<td><?= $pasiens->no_tlp ?></td>
										<td><?= $pasiens->jenis_kelamin ?></td>
										<td><a href="<?= base_url('admin/editPasien')."/".$pasiens->no ?>"
												class="btn btn-primary">Edit</a> <a
												href="<?= base_url('admin/deletePasien')."/".$pasiens->no ?>"
												class="btn btn-danger">Hapus</a></td>
									</tr>
									<?php } ?>
								</tbody>
							</table>