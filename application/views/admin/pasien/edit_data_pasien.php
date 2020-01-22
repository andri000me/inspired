
        <!--  page-wrapper -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            EDIT DATA PASIEN
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h3>EDIT DATA DOKTER</h3>
                                    <div class="col-lg-6">
                                        <form role="form" action="<?= base_url() ?>/admin/updatePasien" method="post">
                                        <input type="hidden" name="no" value="<?= $pasien->no ?>">
                                            <div class="form-group">
                                                <label>Nama Pasien :</label>
                                                <input class="form-control" name="nama_pasien" value="<?= $pasien->nama_pasien ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Tempat Lahir :</label>
                                                <input class="form-control" name="tempat_lahir" value="<?= $pasien->tempat_lahir ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Tanggal :</label>
                                                <input class="form-control" name="tgl" value="<?= $pasien->tgl ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Umur :</label>
                                                <input class="form-control" name="umur" value="<?= $pasien->umur ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Jenis Kelamin :</label>
                                                <input class="form-control" name="jenis_kelamin" value="<?= $pasien->jenis_kelamin ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Alamat :</label>
                                                <input class="form-control" name="alamat" value="<?= $pasien->alamat ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Pekerjaan :</label>
                                                <input class="form-control" name="pekerjaan" value="<?= $pasien->pekerjaan ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Orang Tua :</label>
                                                <input class="form-control" name="nama_org_tua" value="<?= $pasien->nama_org_tua ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>No HP :</label>
                                                <input class="form-control" name="no_tlp" value="<?= $pasien->no_tlp ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Keterangan :</label>
                                                <input class="form-control" name="keterangan" value="<?= $pasien->keterangan ?>">
                                            </div>

                                            <button type="submit" class="btn btn-default">Update</button>
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
