<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Utama</title>

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/local.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

    <!-- you need to include the shieldui css and js assets in order for the charts to work -->
    <link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light-bootstrap/all.min.css" />
    <link id="gridcss" rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/dark-bootstrap/all.min.css" />

    <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
    <script type="text/javascript" src="http://www.prepbootstrap.com/Content/js/gridData.js"></script>
</head>

<body>
    <div id="wrapper">
        <?php include 'template/top_bar.php'; ?>

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
                                    <form method="post" action="tambah_aksi.php">
                                        <div class="form-group">
                                            <label>Nama Pasien</label>
                                            <input type="text" name="nama_pasien" id="nama_pasien" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Tempat Lahir</label>
                                            <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Tanggal</label>
                                            <input type="date" name="tgl" id="tgl" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Umur</label>
                                            <input type="text" name="umur" id="umur" class="form-control">
                                        </div>

                                        <div>
                                            <label for="jenis_kelamin" class="col-md2">
                                                Jenis Kelamin
                                            </label>
                                            <div class="col-md-15">
                                                <label class="radio">
                                                    <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="male" checked>
                                                    Laki-Laki
                                                </label>
                                                <label class="radio">
                                                    <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="female">
                                                    Perempuan
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input type="text" name="alamat" id="alamat" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Pekerjaan</label>
                                            <input type="text" name="pekerjaan" id="pekerjaan" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Nama Orang Tua</label>
                                            <input type="text" name="nama_org_tua" id="nama_org_tua" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Nomor Telephone</label>
                                            <input type="text" name="no_tlp" id="no_tlp" class="form-control">
                                        </div>

                                        <button type="submit" class="btn btn-default">Simpan</button>
                                        <button type="reset" class="btn btn-default">Hapus</button>
                                    </form>
                                </div>

                                <!-- =================================== BAGIAN KANAN ============================= -->
                                <div class="col-lg-6">

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
        jQuery(function($) {
            var performance = [12, 43, 34, 22, 12, 33, 4, 17, 22, 34, 54, 67],
                visits = [123, 323, 443, 32],
                traffic = [{
                        Source: "Direct",
                        Amount: 323,
                        Change: 53,
                        Percent: 23,
                        Target: 600
                    },
                    {
                        Source: "Refer",
                        Amount: 345,
                        Change: 34,
                        Percent: 45,
                        Target: 567
                    },
                    {
                        Source: "Social",
                        Amount: 567,
                        Change: 67,
                        Percent: 23,
                        Target: 456
                    },
                    {
                        Source: "Search",
                        Amount: 234,
                        Change: 23,
                        Percent: 56,
                        Target: 890
                    },
                    {
                        Source: "Internal",
                        Amount: 111,
                        Change: 78,
                        Percent: 12,
                        Target: 345
                    }
                ];


            $("#shieldui-chart1").shieldChart({
                theme: "dark",

                primaryHeader: {
                    text: "Visitors"
                },
                exportOptions: {
                    image: false,
                    print: false
                },
                dataSeries: [{
                    seriesType: "area",
                    collectionAlias: "Q Data",
                    data: performance
                }]
            });

            $("#shieldui-chart2").shieldChart({
                theme: "dark",
                primaryHeader: {
                    text: "Traffic Per week"
                },
                exportOptions: {
                    image: false,
                    print: false
                },
                dataSeries: [{
                    seriesType: "pie",
                    collectionAlias: "traffic",
                    data: visits
                }]
            });

            $("#shieldui-grid1").shieldGrid({
                dataSource: {
                    data: traffic
                },
                sorting: {
                    multiple: true
                },
                rowHover: false,
                paging: false,
                columns: [{
                        field: "Source",
                        width: "170px",
                        title: "Source"
                    },
                    {
                        field: "Amount",
                        title: "Amount"
                    },
                    {
                        field: "Percent",
                        title: "Percent",
                        format: "{0} %"
                    },
                    {
                        field: "Target",
                        title: "Target"
                    },
                ]
            });
        });
    </script>
</body>

</html>