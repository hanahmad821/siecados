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
                    <h3 class="content-header-title mb-0 d-inline-block">Form Imput Dosen</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper mr-1">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>#">Imput Dosen</a>
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
                                    <h4 class="card-title">User</h4>
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
                                        <a href="<?php echo site_url('admin/User/add') ?>" class="btn btn-info btn-md mb-2"><i class="ft-file-plus"></i> Add New</a>
                                        <table class="table table-striped table-bordered file-export table-responsive">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Kode Dosen</th>
                                                    <th>Nama Dosen</th>
                                                    <th>profil</th>
                                                    <th>aktif</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th>Jurusan</th>
                                                    <th>No HP</th>
                                                    <th>Email</th>
                                                    <th>Kode Kelompok Rumpun Ilmu</th>
                                                    <th>Kode Rumpun Ilmu</th>
                                                    <th>Tipe Dosen</th>
                                                    <th>Rentang FM</th>
                                                    <th>JJA</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1; ?>
                                                <?php foreach ($user as $dosen) : ?>
                                                    <?php if ($dosen->profil == 1) :
                                                        $profil = "dosen";
                                                    elseif ($dosen->profil == 2) :
                                                        $profil = "Dosen / OLC";
                                                    elseif ($dosen->profil == 3) :
                                                        $profil = "Admin";
                                                    elseif ($dosen->profil == 4) :
                                                        $profil = "Super Admin";
                                                    else :
                                                        $profil = $dosen->profil;
                                                    endif;
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $no; ?></td>
                                                        <td><?php echo $dosen->kode_dosen; ?></td>
                                                        <td><?php echo $dosen->nama_dosen; ?></td>
                                                        <td><?php echo $profil; ?></td>
                                                        <td><?php echo $dosen->aktif; ?></td>
                                                        <td><?php echo $dosen->jenis_kelamin; ?></td>
                                                        <td><?php echo $dosen->jurusan; ?></td>
                                                        <td><?php echo $dosen->no_hp; ?></td>
                                                        <td><?php echo $dosen->email; ?></td>
                                                        <td><?php echo $dosen->kode_kelompok_rumpun_ilmu; ?></td>
                                                        <td><?php echo $dosen->kode_rumpun_ilmu; ?></td>
                                                        <td><?php echo $dosen->tipe_dosen; ?></td>
                                                        <td><?php echo $dosen->rentang_fm; ?></td>
                                                        <td><?php echo $dosen->jja; ?></td>
                                                        <td align="center">
                                                            <a href="<?php echo site_url('admin/User/edit/' . $dosen->id_dosen) ?>" class="btn btn-primary btn-sm"><i class="la la-edit"></i></a>
                                                            <a onclick="deleteConfirm('<?php echo site_url('admin/User/delete/' . $dosen->id_dosen) ?>')" href="#!" class="btn btn-danger btn-sm"><i class="la la-trash"></i></a>
                                                        </td>
                                                    </tr>
                                                <?php $no++;
                                                endforeach; ?>
                                            </tbody>
                                            <tfoot>
                                                <th>No</th>
                                                <th>Kode Dosen</th>
                                                <th>Nama Dosen</th>
                                                <th>profil</th>
                                                <th>aktif</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Jurusan</th>
                                                <th>No HP</th>
                                                <th>Email</th>
                                                <th>Kode Kelompok Rumpun Ilmu</th>
                                                <th>Kode Rumpun Ilmu</th>
                                                <th>Tipe Dosen</th>
                                                <th>Rentang FM</th>
                                                <th>JJA</th>
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