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
                    <h3 class="content-header-title mb-0 d-inline-block">Form Bidang B</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper mr-1">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>#">Bidang B</a>
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
                <section id="horizontal-form-layouts">
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
                                            <form class="form" action="<?php echo base_url(); ?>IntJurnal/add" method="post" enctype="multipart/form-data">
                                                <div class="form-body">

                                                    <div class="form-group">
                                                        <label for="judul_paper">Judul Paper</label>
                                                        <input class="form-control <?php echo form_error('judul_paper') ? 'is-invalid' : '' ?>" type="text" placeholder="Judul Paper" name="judul_paper">
                                                        <div class="invalid-feedback">
                                                            <?php echo form_error('judul_paper') ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="form-group col-md-6">
                                                                <label for="kode_dosen">Kode Dosen</label>
                                                                <input class="form-control <?php echo form_error('kode_dosen') ? 'is-invalid' : '' ?>" type="text" name="kode_dosen" value="<?php echo $dosen1->kode_dosen ?>" placeholder="KODE DOSEN" readonly="readonly">
                                                                <div class="invalid-feedback">
                                                                    <?php echo form_error('kode_dosen') ?>
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="nama_dosen">Nama Dosen</label>
                                                                <input class="form-control <?php echo form_error('nama_dosen') ? 'is-invalid' : '' ?>" type="text" name="nama_dosen" value="<?php echo $dosen1->nama_dosen; ?>" placeholder="NAMA DOSEN" readonly="readonly">\
                                                                <div class="invalid-feedback">
                                                                    <?php echo form_error('nama_dosen') ?>
                                                                </div>
                                                            </div>

                                                            <div class="form-group col-md-12">
                                                                <label for="afiliasi">Afiliasi</label>
                                                                <input class="form-control <?php echo form_error('afiliasi') ? 'is-invalid' : '' ?>" type="text" name="afiliasi" placeholder="Afiliasi">
                                                                <div class="invalid-feedback">
                                                                    <?php echo form_error('afiliasi') ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                            <label>As corresponding author?</label>
                                                            <fieldset>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="select_dosen" id="dosen2-yes" value="yes"> Yes</label>
                                                            </fieldset>
                                                            <fieldset>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="select_dosen" id="dosen2-no" value="no"> No</label>
                                                            </fieldset>
                                                        </div>
                                                        <div class="file-repeater" id="author21" style="display: none;">
                                                            <div data-repeater-list="repeater-list">
                                                                <div data-repeater-item style="background-color: #f2f2f2; margin-bottom:20px">
                                                                    <div class="row">
                                                                        <div class="form-group col-md-6">
                                                                            <label for="kode_dosen_add">Kode Dosen</label>
                                                                            <input class="form-control" type="text" name="kode_dosen_add" placeholder="KODE DOSEN">
                                                                        </div>
                                                                        <div class="form-group col-md-6">
                                                                            <label for="nama_dosen_add">Nama Dosen</label>
                                                                            <input class="form-control" type="text" name="nama_dosen_add" placeholder="NAMA DOSEN">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="form-group col-md-11">
                                                                            <label for="afiliasi_add">Afiliasi</label>
                                                                            <input class="form-control" type="text" name="afiliasi_add" placeholder="Afiliasi">
                                                                        </div>
                                                                        <div class="form-group col-xl-1" style="margin-top: 25px; float:right;">
                                                                            <button type="button" data-repeater-delete class="btn btn-icon btn-danger mr-1">
                                                                                <i class="ft-x"></i>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <button type="button" data-repeater-create class="btn btn-primary">
                                                                    <i class="ft-plus"></i> Add Author
                                                                </button>
                                                            </div>
                                                        </div>
                                                    <div class="form-group">
                                                        <label for="nama_jurnal">Nama Jurnal</label>
                                                        <input class="form-control <?php echo form_error('nama_jurnal') ? 'is-invalid' : '' ?>" type="text" placeholder="Nama Jurnal" name="nama_jurnal">
                                                        <div class="invalid-feedback">
                                                            <?php echo form_error('nama_jurnal') ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="publisher">Publisher</label>
                                                        <input class="form-control <?php echo form_error('publisher') ? 'is-invalid' : '' ?>" type="text" placeholder="Publisher" name="publisher">
                                                        <div class="invalid-feedback">
                                                            <?php echo form_error('publisher') ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="link_jurnal">Link Jurnal</label>
                                                        <input class="form-control <?php echo form_error('link_jurnal') ? 'is-invalid' : '' ?>" type="text" placeholder="Link Jurnal" name="link_jurnal">
                                                        <div class="invalid-feedback">
                                                            <?php echo form_error('link_jurnal') ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="isbn_issn">ISBN/ISSN</label>
                                                        <input class="form-control <?php echo form_error('isbn_isssn') ? 'is-invalid' : '' ?>" type="text" placeholder="ISBN/ISSN" name="isbn_isssn">
                                                        <div class="invalid-feedback">
                                                            <?php echo form_error('isbn_isssn') ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="volume_no">Volume/No</label>
                                                        <input class="form-control <?php echo form_error('volume_no') ? 'is-invalid' : '' ?>" type="text" placeholder="Volume/No" name="volume_no">
                                                        <div class="invalid-feedback">
                                                            <?php echo form_error('volume_no') ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="tahun">Tahun</label>
                                                        <input class="form-control <?php echo form_error('tahun') ? 'is-invalid' : '' ?>" type="text" placeholder="Tahun" name="tahun">
                                                        <div class="invalid-feedback">
                                                            <?php echo form_error('tahun') ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="loa">LOA (PDF/PNG/JPG)</label>
                                                        <input type="file" class="form-control form-control-file <?php echo form_error('loa') ? 'is-invalid' : '' ?>" id="loa" name="loa" accept=".jpg, .jpeg, .png, .pdf">
                                                        <div class="invalid-feedback">
                                                            <?php echo form_error('loa') ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="final_paper">FINAL PAPER (PDF)</label>
                                                        <input type="file" class="form-control form-control-file <?php echo form_error('final_paper') ? 'is-invalid' : '' ?>" id="final_paper" name="final_paper" accept=".pdf">
                                                        <div class="invalid-feedback">
                                                            <?php echo form_error('final_paper') ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="link_publikasi">Link Publikasi</label>
                                                        <input class="form-control  <?php echo form_error('link_publikasi') ? 'is-invalid' : '' ?>" type="text" placeholder="Link Publikasi" name="link_publikasi">
                                                        <div class="invalid-feedback">
                                                            <?php echo form_error('link_publikasi') ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="indeks">Indeks</label>
                                                        <input class="form-control  <?php echo form_error('indeks') ? 'is-invalid' : '' ?>" type="text" placeholder="IEEEE/SCOPUS/dll" name="indeks">
                                                        <div class="invalid-feedback">
                                                            <?php echo form_error('indeks') ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="link_indeks">Link Indeks</label>
                                                        <input class="form-control  <?php echo form_error('link_indeks') ? 'is-invalid' : '' ?>" type="text" placeholder="Link Indeks" name="link_indeks">
                                                        <div class="invalid-feedback">
                                                            <?php echo form_error('link_indeks') ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-actions">
                                                        <a href="<?php echo site_url('IntJurnal/add') ?>" type="button" class="btn btn-danger mr-1">
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
            </div>
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
        var author21 = document.getElementById("author21");
        $('input[type="radio"]').change(function() {
            if ($(this).val() == 'yes') {
                author21.style.display = "none";
                // var dosen23 = "International Journal";
            } else {
                author21.style.display = "contents";
                // var dosen23 = "International Jsssssournal";
            }
        });
        var author22 = document.getElementById("author22");
        $('input[type="radio"]').change(function() {
            if ($(this).val() == 'yes') {
                author22.style.display = "none";
                // var dosen23 = "International Journal";
            } else {
                author22.style.display = "contents";
                // var dosen23 = "International Jsssssournal";
            }
        });

        var author23 = document.getElementById("author23");
        $('input[type="radio"]').change(function() {
            if ($(this).val() == 'yes') {
                author23.style.display = "none";
                // var dosen23 = "International Journal";
            } else {
                author23.style.display = "contents";
                // var dosen23 = "International Jsssssournal";
            }
        });
    </script>
    <?php
    ?>

</body>

</html>