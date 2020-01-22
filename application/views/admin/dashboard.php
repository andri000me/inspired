<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Utama</title>

    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/admin/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/admin/css/jquery-ui.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/admin/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/admin/css/local.css" />

    <script type="text/javascript" src="<?= base_url() ?>template/admin/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>template/admin/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>template/admin/js/jquery-ui.min.js"></script>
    <!-- you need to include the shieldui css and js assets in order for the charts to work -->
    <link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light-bootstrap/all.min.css" />
    <link id="gridcss" rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/dark-bootstrap/all.min.css" />

    <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
    <script type="text/javascript" src="http://www.prepbootstrap.com/Content/js/gridData.js"></script>
</head>

<body>
    <div id="wrapper">
    
        <?php $this->load->view('layouts/top_bar') ?>

        <?php $this->load->view($konten) ?>
        

       
</body>

</html>