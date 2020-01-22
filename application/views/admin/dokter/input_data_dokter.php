
        <!--  page-wrapper -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            INPUT DATA DOKTER
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h3>TAMBAH DATA DOKTER</h3>
                                    <div class="col-lg-6">
                                        <form role="form" action="<?= base_url() ?>/admin/storeDokter" method="post">
                                            <div class="form-group">
                                                <label>Nama Dokter :</label>
                                                <input class="form-control" name="nama_dokter">
                                            </div>
                                            <div class="form-group">
                                                <label>Spesialis :</label>
                                                <input class="form-control" name="spesialis">
                                            </div>
                                            <div class="form-group">
                                                <label>Alamat :</label>
                                                <input class="form-control" name="alamat">
                                            </div>
                                            <div class="form-group">
                                                <label>No. Telephone :</label>
                                                <input class="form-control" name="no_tlp">
                                            </div>
                                            <button type="submit" class="btn btn-default">Simpan</button>
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
