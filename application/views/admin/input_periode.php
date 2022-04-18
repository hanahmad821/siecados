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

                    <h3 class="content-header-title mb-0 d-inline-block">Form Input Periode</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper mr-1">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Imput Periode</a>
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
                                <?php if ($this->session->flashdata('success')) : ?>
                                    <div class="alert alert-success" role="alert">
                                        <?php echo $this->session->flashdata('success'); ?>
                                    </div>
                                <?php endif; ?>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <div class="col-md-12">
                                            <form class="form" action="<?php echo base_url(); ?>admin/Periode/add" method="post">
                                                <div class="form-group">
                                                    <label for="year">Tahun</label>
                                                    <input type="text" class="form-control <?php echo form_error('year') ? 'is-invalid' : '' ?>" placeholder="Tahun" name="year">
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('year') ?>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="semester">Semester</label>
                                                    <input type="text" class="form-control <?php echo form_error('semester') ? 'is-invalid' : '' ?>" placeholder="Semester" name="semester">
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('semester') ?>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="periode">Jumlah Periode</label>
                                                    <input type="number" min="0" class="form-control <?php echo form_error('periode') ? 'is-invalid' : '' ?>" placeholder="periode" name="periode">
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('periode') ?>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Status Periode</label>
                                                    <!-- <div class="row skin skin-flat" style="margin-left: initial;"> -->
                                                    <div>
                                                        <fieldset>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="status_periode" id="status_periode-yes" value="1"> Aktif</label>
                                                        </fieldset>
                                                        <fieldset>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="status_periode" id="status_periode-no" value="0"> Non Aktif</label>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                                <div class="form-actions">
                                                    <a href="<?php echo site_url('admin/Periode/add') ?>" type="button" class="btn btn-danger mr-1">
                                                        <i class="ft-x"></i> Cancel
                                                    </a>
                                                    <button type="submit" class="btn btn-primary" name="btn" value="Save">
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
    <script>
        // var dosen23 = "";
        var x = document.getElementById("pilih-dosen2");
        $('input[type="radio"]').change(function() {
            if ($(this).val() == 'yes') {
                x.style.display = "none";
                // var dosen23 = "International Journal";
            } else {
                x.style.display = "contents";
                // var dosen23 = "International Jsssssournal";
            }
            console.log(dosen23);

        });
    </script>
</body>

</html>