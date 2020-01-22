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
                            <h3>INPUT DATA REKAM MEDIS PASIEN</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Id Pasien :</label>
                                            <input class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama :</label>
                                            <input class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat :</label>
                                            <input class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>No. Telephone :</label>
                                            <input class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Berobat :</label>
                                            <input type="date" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Diagnosa :</label>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Terapi</label>
                                            <textarea class="form-control" rows="2"></textarea>
                                        </div>
                                    </form>
                                </div>

                                <!-- =================================== BAGIAN KANAN ============================= -->
                                <div class="col-lg-6">
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Tempat Lahir :</label>
                                            <input class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Tanggal Lahir :</label>
                                            <input type="date" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Umur :</label>
                                            <input class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Nama Orang Tua :</label>
                                            <input class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Pekerjaan :</label>
                                            <input class="form-control">
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