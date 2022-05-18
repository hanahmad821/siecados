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
                    <h3 class="content-header-title mb-0 d-inline-block">Form Bidang D</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper mr-1">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>#">Bidang D</a>
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
                <!-- Form control repeater section start -->
                <section id="form-control-repeater horizontal-form-layouts">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="file-repeater">Form Input</h4>
                                    <a class="heading-elements-toggle">
                                        <i class="la la-ellipsis-h font-medium-3"></i>
                                    </a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li>
                                                <a data-action="collapse">
                                                    <i class="ft-minus"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a data-action="reload">
                                                    <i class="ft-rotate-cw"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a data-action="expand">
                                                    <i class="ft-maximize"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a data-action="close">
                                                    <i class="ft-x"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <div class="col-md-12">
                                            <form class="form" action="" method="post">
                                                <!-- <label class="col-md-2 label-control" for="projectinput5">Kode Matkul</label> -->
                                                <!-- <div class="form-group">
                                                    <label for="kode_mk">Mata Kuliah</label>

                                                    <select id="kode_mk" name="kode_mk" class="form-control">

                                                        <option value="none" selected="" disabled="">Kode Matkul</option>
                                                        <?php foreach ($matkul as $mk) { ?>
                                                            <option value="<?php echo $mk->kode_matkul . " - " . $mk->nama_matkul; ?>"><?php echo $mk->kode_matkul . " - " . $mk->nama_matkul; ?> </option>
                                                        <?php } ?>
                                                    </select>
                                                </div> -->
                                                <div class="form-group">
                                                    <label for="sks">Jumlah SKS</label>
                                                    <input type="text" class="form-control" placeholder="SKS" name="sks">
                                                </div>
                                                <div class="form-group">
                                                    <label for="kelas">Kelas</label>
                                                    <input type="text" class="form-control" placeholder="Kelas" name="kelas">
                                                </div>
                                                <div class="form-group">
                                                    <label for="dosen1">Nama Dosen</label>
                                                    <input type="text" class="form-control" name="dosen1" placeholder="Nama Dosen" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label>Sebagai dosen tunggal?</label>
                                                    <!-- <div class="row skin skin-flat" style="margin-left: initial;"> -->
                                                    <div>
                                                        <fieldset>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="dosen2" id="dosen2-yes" value="yes"> Yes</label>
                                                        </fieldset>
                                                        <fieldset>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="dosen2" id="dosen2-no" value="no"> No</label>
                                                        </fieldset>
                                                        <!-- </div> -->
                                                    </div>
                                                    <!-- <div class="form-group" id="pilih-dosen2" style="display: none;">

                                                        <label for="dosen2">Dosen 2</label>
                                                        <select id="dosen2" name="dosen2" class="form-control">
                                                            <option value="none" selected="" disabled="">Dosen 2</option>
                                                            <?php foreach ($dosen2 as $dosen) { ?>
                                                                <option value="<?php echo $dosen->kode_dosen . " - " . $dosen->nama_dosen; ?>"><?php echo $dosen->kode_dosen . " - " . $dosen->nama_dosen; ?> </option>
                                                            <?php } ?>
                                                        </select>
                                                    </div> -->
                                                    <div class="form-actions">
                                                        <button type="button" class="btn btn-danger mr-1">
                                                            <i class="ft-x"></i> Cancel
                                                        </button>
                                                        <button type="submit" class="btn btn-primary">
                                                            <i class="la la-check-square-o"></i> Save
                                                        </button>
                                                    </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Form control repeater section end -->
            </div>
        </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
        <?php $this->load->view("_partials/footer.php") ?>
    </footer>
</body>

</html>
