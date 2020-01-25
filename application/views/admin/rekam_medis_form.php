

<div id="wrapper">
        <div id="page-wreper">
            <div class="row">
                <div class="col-md">
                    <div class="col-sm-10">
                        <div class="panel panel-info">

                            <center>
                                <table class="table">
                                    <tr>
                                        <th>
                                            <h4>Nama pasien:</h4>
                                        </th>
                                        <th>
                                                <input type="text" placeholder="Search" onkeyup="isi_otomatis()" id="pasien" class="form-control">
                                        </th>
                                        <th>
                                            <button type="button" class="btn btn-info">cari</button>
                                        </th>
                                    </tr>
                                </table>
                            </center>
                            <form action="<?= base_url() ?>admin/storerekammedis" method="post">
                                <div id="tes"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript">
		$(document).ready(function(){
		    $('#pasien').autocomplete({
                source: "<?php echo base_url('admin/autoCompPasienRekam/?');?>",
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
                    var html = '<br><center><table class="table"><input type="hidden" name="id_pasien" value="'+obj.no+'"><input type="hidden" name="id_dokter" value="<?php echo $this->session->userdata('id_dokter') ?>"><tr><th><h4>Nama pasien:</h4></th><th><input type="text" value="'+obj.nama_pasien+'" class="form-control"></th></tr><tr><th><h4>Umur:</h4></th><th><input type="text" value="'+obj.umur+'" class="form-control"></th></tr><tr><th><h4>Alamat:</h4></th><th><input type="text" value="'+obj.alamat+'" class="form-control"></th></tr><tr><th><h4>No HP:</h4></th><th><input type="text" value="'+obj.hp+'" class="form-control"></th></tr><tr><th><h4>Tanggal Berobat:</h4></th><th><input type="text" name="tgl_berobat" value="'+obj.tgl_berobat+'" class="form-control"></th></tr><tr><th><h4>Diagnosa:</h4></th><th><input type="text" name="diagnosa" value="" class="form-control"></th></tr><tr><th><h4>Terapi:</h4></th><th><input type="text" name="terapi" value="" class="form-control"></th></tr></table></center><input type="submit" value="Submit" class="btn btn-primary">';

                    $('#tes').html(html);
                });
            }
    </script>