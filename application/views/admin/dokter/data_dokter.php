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
					DATA DOKTER
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-lg-12">
							<table class="table table-hover">
								<thead>
									<tr>
										<th scope="col">#</th>
										<th scope="col">Nama Dokter</th>
										<th scope="col">Spesialis</th>
										<th scope="col">Alamat</th>
										<th scope="col">No HP</th>
										<th scope="col">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php $no=1; foreach($dokter as $dokters) { ?>
									<tr>
										<th scope="row"><?= $no++ ?></th>
										<td><?= $dokters->nama_dokter ?></td>
										<td><?= $dokters->spesialis ?></td>
										<td><?= $dokters->alamat ?></td>
										<td><?= $dokters->no_tlp ?></td>
										<td><a href="<?= base_url('admin/editDokter')."/".$dokters->no ?>"
												class="btn btn-primary">Edit</a> <a
												href="<?= base_url('admin/deleteDokter')."/".$dokters->no ?>"
												class="btn btn-danger">Hapus</a></td>
									</tr>
									<?php } ?>
								</tbody>
							</table>