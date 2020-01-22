<ul id="active" class="nav navbar-nav side-nav">
    <li><a href="<?= base_url().$this->uri->segment(1) ?>"><i class=""></i>Halaman Utama</a></li>
    <li><a href="<?= base_url() ?>admin/pendaftaranpasien"><i class=""></i>Pendaftaran Pasien</a></li>
    <li><a href="rekam_medis.php"><i class=""></i>Rekam Medis</a></li>
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            Data Dokter <span class="caret"></span>
        </a>
        <ul class="dropdown-menu">
            <li><a href="<?= base_url() ?>admin/tambahdokter">Input Data Dokter</a></li>
            <li><a href="<?= base_url() ?>admin/dokter">Data Dokter</a></li>
        </ul>
    </li>
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            Data Pasien <span class="caret"></span>
        </a>
        <ul class="dropdown-menu">
            <li><a href="<?= base_url() ?>admin/tambahpasien">Input Data Pasien</a></li>
            <li><a href="<?= base_url() ?>admin/pasien">Data Pasien</a></li>
        </ul>
    </li>
    <li><a href="<?= base_url() ?>admin/master"><i class=""></i>Data Master</a></li>
    <li><a href="pembayaran.php"><i class=""></i>Pembayaran</a></li>
    <li><a href="surat_rujukan.php"><i class=""></i>Surat Rujukan</a></li>
    <li><a href="laporan_kunjungan_pasien.php"><i class=""></i>Laporan Kunjungan Pasien</a></li>
</ul>