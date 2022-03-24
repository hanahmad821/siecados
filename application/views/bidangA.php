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
                    <h3 class="content-header-title mb-0 d-inline-block">Form Bidang A</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper mr-1">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>#">Bidang A</a>
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

                                        <form class="form row">
                                            <!-- <label class="col-md-2 label-control" for="projectinput5">Kode Matkul</label> -->
                                            <div class="form-group col-md-12 mb-2">
                                                <!-- <input type="text" class="form-control" placeholder="Kode Matkul" name="first"> -->
                                                <select id="kode_mk" name="kode_mk" class="form-control">
                                                    <?php foreach ($kode_mk as $mk) { ?>
                                                        <option value="<?php echo $mk['mata_kuliah']; ?>"><?php echo $mk['mata_kuliah']; ?> </option>
                                                    <?php } ?>
                                                    <option value="none" selected="" disabled="">Kode Matkul</option>
                                                    <option value="ISYS6327035">ISYS6327035 - Thesis (lanjut)</option>
                                                    <option value="ISYS6296038">ISYS6296038 - Information Systems Concept</option>
                                                    <option value="ISYS6299035">ISYS6299035 - Business Process Fundamental</option>
                                                    <option value="ISYS6300035">ISYS6300035 - Enterprise Systems</option>
                                                    <option value="ISYS6305035">ISYS6305035 - Data and Information Management</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-12 mb-2">
                                                <input type="text" class="form-control" placeholder="SKS" name="sks">
                                            </div>
                                            <div class="form-group col-md-12 mb-2">
                                                <input type="text" class="form-control" placeholder="KELAS" name="kelas">
                                            </div>
                                            <div class="form-group col-12 mb-2">
                                                <input type="text" class="form-control" name="dosen1" placeholder="NAMA DOSEN" disabled>
                                            </div>
                                            <div class="form-group col-md-12 mb-2">
                                                <!-- <input type="text" class="form-control" placeholder="Kode Matkul" name="first"> -->
                                                <select id="dosen2" name="dosen2" class="form-control">
                                                    <option value="none" selected="" disabled="">Dosen 2</option>
                                                    <option value="ISYS6327035">D4567 - Titan, S.Kom., MMSI.</option>
                                                    <option value="ISYS6296038">D5001 - Hendro, S.Kom., M.M</option>
                                                    <option value="ISYS6299035">D5088 - Dr. Feri Sulianta, S.T., M.T.I</option>
                                                    <option value="ISYS6300035">ISYS6300035 - Enterprise Systems</option>
                                                    <option value="ISYS6305035">ISYS6305035 - Data and Information Management</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-12 mb-2 file-repeater">
                                                <div data-repeater-list="repeater-list">
                                                    <div data-repeater-item>
                                                        <div class="row mb-1">
                                                            <div class="col-9 col-xl-10">
                                                                <input type="text" class="form-control" placeholder="Phone No." name="phone">
                                                            </div>
                                                            <div class="col-2 col-xl-1">
                                                                <button type="button" data-repeater-delete class="btn btn-icon btn-danger mr-1">
                                                                    <i class="ft-x"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <button type="button" data-repeater-create class="btn btn-primary">
                                                    <i class="ft-plus"></i> Add another contact
                                                </button>
                                            </div>

                                        </form>
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

    <!-- BEGIN VENDOR JS-->
    <script src="<?php echo base_url(); ?>app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="<?php echo base_url(); ?>app-assets/vendors/js/forms/repeater/jquery.repeater.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN CHAMELEON  JS-->
    <script src="<?php echo base_url(); ?>app-assets/js/core/app-menu.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>app-assets/js/core/app.js" type="text/javascript"></script>
    <!-- END CHAMELEON  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="<?php echo base_url(); ?>app-assets/js/scripts/forms/form-repeater.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
</body>

</html>