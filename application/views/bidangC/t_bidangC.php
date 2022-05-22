<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <?php $this->load->view("_partials/head.php") ?>
</head>

<body class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-color="bg-chartbg" data-col="2-columns">

    <?php $this->load->view("_partials/navbar.php") ?>


    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <?php $this->load->view("_partials/sidebar.php") ?>


    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-wrapper-before"></div>
            <div class="content-header row">
                <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">Form Imput Matkul</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper mr-1">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>#">Imput Matkul</a>
                                </li>
                                <li class="breadcrumb-item active">Form Input
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="content-header-right col-md-4 col-12"> <a class="btn btn-warning btn-min-width float-md-right box-shadow-4 mr-1 mb-1" href="<?php echo base_url(); ?>chat-application.html"><i class="ft-mail"></i> Email</a></div>
            </div>
            <div class="content-body">
                <section id="file-export">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Mata Kuliah</h4>
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">
                                        <a href="<?php echo site_url('BidangC/add') ?>" class="btn btn-info btn-md mb-2"><i class="ft-file-plus"></i> Add New</a>
                                        <table class="table table-striped table-bordered file-export table-responsive">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Kode Dosen</th>
                                                    <th>Nama Kegiatan</th>
                                                    <th>Tempat Pelaksanaan</th>
                                                    <th>Waktu Pelaksanaan</th>
                                                    <th>Nama Komunitas</th>
                                                    <th>Judul Materi</th>
                                                    <th>Jumlah Peserta</th>
                                                    <th>Sertifikat Pembicara</th>
                                                    <th>Dokumentasi</th>
                                                    <th>Proposal</th>
                                                    <th>Laporan</th>
                                                    <th>Materi</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1; ?>
                                                <?php foreach ($BidangC as $BidangC) : ?>
                                                    <tr>
                                                        <td><?php echo $no; ?></td>
                                                        <td><?php echo $BidangC->kode_dosen; ?></td>
                                                        <td><?php echo $BidangC->nama_kegiatan; ?></td>
                                                        <td><?php echo $BidangC->tempat_pelaksanaan; ?></td>
                                                        <td><?php echo $BidangC->waktu_pelaksanaan; ?></td>
                                                        <td><?php echo $BidangC->nama_komunitas; ?></td>
                                                        <td><?php echo $BidangC->judul_materi; ?></td>
                                                        <td><?php echo $BidangC->jumlah_peserta; ?></td>
                                                        <td><?php echo $BidangC->sertifikat_pembicara; ?></td>
                                                        <td><?php echo $BidangC->dokumentasi; ?></td>
                                                        <td><?php echo $BidangC->proposal; ?></td>
                                                        <td><?php echo $BidangC->laporan; ?></td>
                                                        <td><?php echo $BidangC->materi; ?></td>
                                                        <td align="center">
                                                            <a href="<?php echo site_url('BidangC/edit/' . $BidangC->id_bidang_c) ?>" class="btn btn-primary btn-sm"><i class="la la-edit"></i></a>
                                                            <a onclick="deleteConfirm('<?php echo site_url('BidangC/delete/' . $BidangC->id_bidang_c) ?>')" href="#!" class="btn btn-danger btn-sm"><i class="la la-trash"></i></a>
                                                        </td>
                                                    </tr>
                                                <?php $no++;
                                                endforeach; ?>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Kode Dosen</th>
                                                    <th>Nama Kegiatan</th>
                                                    <th>Tempat Pelaksanaan</th>
                                                    <th>Waktu Pelaksanaan</th>
                                                    <th>Nama Komunitas</th>
                                                    <th>Judul Materi</th>
                                                    <th>Jumlah Peserta</th>
                                                    <th>Sertifikat Pembicara</th>
                                                    <th>Dokumentasi</th>
                                                    <th>Proposal</th>
                                                    <th>Laporan</th>
                                                    <th>Materi</th>
                                                    <th>Action</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
        <?php $this->load->view("_partials/footer.php") ?>
    </footer>
    <script>
        function deleteConfirm(url) {
            $('#btn-delete').attr('href', url);
            $('#deleteModal').modal();
        }
    </script>

    <?php $this->load->view("_partials/modal.php") ?>
</body>

</html>