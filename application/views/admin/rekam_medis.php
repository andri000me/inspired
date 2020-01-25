<!--  page-wrapper -->
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
		
		<div class="alert-warning" role="alert">
				<span>
					<center><?php echo $this->session->flashdata('notif');?></center>
				</span>
			</div>

			<!-- Form Elements -->
			<div class="panel panel-default">
				<div class="panel-heading">
					PILIH DOKTER
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-lg-12">
                        <form action="<?= base_url('admin/rekammedisform') ?>" method="post">
                            <select name="dokter" class="form-control">
                                <option value="">-- Pilih Dokter --</option>
								<?php foreach($dokter as $data) { ?>
									<option value="<?= $data->no ?>"><?= $data->nama_dokter ?></option>
								<?php } ?>
                            </select>
							<button class="btn btn-default">Pilih</button>
                        </form>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
