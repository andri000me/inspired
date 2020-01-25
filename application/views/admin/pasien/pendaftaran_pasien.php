
        <!--  page-wrapper -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            INPUT DATA PASIEN
                        </div>
                        <div class="panel-body">
                            <div class="row">

                                <!--============================== BAGIAN KIRI ============================== -->
                                <div class="col-lg-6">
                                    <form role="form" action="<?= base_url() ?>/admin/storePasienAntri" method="post">
                                    <input type="hidden" name="id_pasien" id="id_pasien">
                                    
                                        <div class="form-group">
                                            <label>Nama Pasien :</label>
                                            <input class="form-control" id="pasien" onkeyup="isi_otomatis()" name="nama_pasien">
                                        </div>

                                        <div class="form-group">
                                            <label>Umur :</label>
                                            <input class="form-control" id="umur_pasien" name="umur_pasien">
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat :</label>
                                            <input class="form-control" id="alamat_pasien" name="alamat_pasien">
                                        </div>
                                        <div class="form-group">
                                            <label>No. Telephone :</label>
                                            <input class="form-control" id="no_telp_pasien" name="no_telp_pasien">
                                        </div>

                                        <div class="form-group">
                                            <label>Dokter :</label>
                                            <select class="form-control" id="kode_dokter" name="kode_dokter" required>
                                                <option value="">-- Pilih Dokter --</option>
                                                <?php foreach($dokter as $dokters) { ?>
                                                    <option value="<?= $dokters->no ?>"><?= strtoupper($dokters->nama_dokter)." | ".$dokters->spesialis ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Tanggal Berobat :</label>
                                            <input type="date" placeholder="Tanggal" class="form-control" id="tanggal_berobat_pasien" name="tanggal_berobat_pasien">
                                        </div>
                                        <button type="submit" class="btn btn-info">Daftar</button>
                                    </form>
                                </div>


                            </div>
                        </div>
                    </div>
                    <!-- End Form Elements -->
                </div>
            </div>
        </div>
        <!-- end page-wrapper -->
    </div>
    <!-- /#wrapper -->


    <script type="text/javascript">
		$(document).ready(function(){
		    $('#pasien').autocomplete({
                source: "<?php echo base_url('admin/get_pasienAutoComp/?');?>",
            });
		});

        function isi_otomatis(){
                var nama = $("#pasien").val();
                $.ajax({
                    url: "<?php echo base_url('admin/get_dataPasien');?>",
                    data:"nama="+nama,
                }).success(function (data) {
                    var json = data,
                    obj = JSON.parse(json);
                    $('#id_pasien').val(obj.no);
                    $('#umur_pasien').val(obj.umur);
                    $('#alamat_pasien').val(obj.alamat);
                    $('#no_telp_pasien').val(obj.hp);
                });
            }
    </script>