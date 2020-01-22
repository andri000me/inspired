
        <!--  page-wrapper -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            EDIT DATA DOKTER
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h3>TAMBAH DATA DOKTER</h3>
                                    <div class="col-lg-6">
                                        <form role="form" action="<?= base_url() ?>/admin/updateDokter" method="post">
                                        <input type="hidden" value="<?= $dokter->no ?>" name="id_dokter">
                                            <div class="form-group">
                                                <label>Nama Dokter :</label>
                                                <input class="form-control" name="nama_dokter" value="<?= $dokter->nama_dokter ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Spesialis :</label>
                                                <input class="form-control" name="spesialis" value="<?= $dokter->spesialis ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Alamat :</label>
                                                <input class="form-control" name="alamat" value="<?= $dokter->alamat ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>No. Telephone :</label>
                                                <input class="form-control" name="no_tlp" value="<?= $dokter->no_tlp ?>">
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
