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
                                <div class="card-content collapse show">
                                    <div class="card-body">

                                        <div class="col-md-12">
                                            <form class="form" action="" method="post">
                                                <div class="form-body">
                                                    <!-- <label class="col-md-2 label-control" for="projectinput5">Kode Matkul</label> -->
                                                    <div class="form-group">
                                                        <!-- <input type="text" class="form-control" placeholder="Kode Matkul" name="first"> -->
                                                        <label for="publikasi">Publikasi</label>
                                                        <select class="form-control border-primary" id="publikasi" name="publikasi">
                                                            <option value="none" selected="" disabled="">Publikasi</option>
                                                            <option value="International Journal">International Journal</option>
                                                            <option value="Nasional Journal">Nasional Journal</option>
                                                            <option value="International Conference">International Conference</option>
                                                        </select>
                                                    </div>
                                                    <div id="int-journal" style="display: none;">
                                                        <div class="form-group">
                                                            <label for="judul_paper">Judul Paper</label>
                                                            <input class="form-control border-primary" type="text" placeholder="Judul Paper" name="judul_paper">
                                                        </div>
                                                        <div class="file-repeater">
                                                            <div data-repeater-list="repeater-list">
                                                                <div data-repeater-item style="background-color: #f2f2f2; margin-bottom:20px">
                                                                    <div class="row">
                                                                        <div class="form-group col-md-6">
                                                                            <label for="kd_dosen1">Kode Dosen</label>
                                                                            <input class="form-control border-primary" type="text" name="kd_dosen1" placeholder="KODE DOSEN" disabled>
                                                                        </div>
                                                                        <div class="form-group col-md-6">
                                                                            <label for="dosen1">Nama Dosen</label>
                                                                            <input class="form-control border-primary" type="text" name="dosen1" placeholder="NAMA DOSEN" disabled>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="form-group col-md-11">
                                                                            <label for="afiliasi">Afiliasi</label>
                                                                            <input class="form-control border-primary" type="text" name="afiliasi" placeholder="Afiliasi">
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
                                                            <label for="author">As corresponding author?</label>
                                                            <div class="row skin skin-flat" style="margin-left: initial;">
                                                                <div>
                                                                    <fieldset>
                                                                        <input name="author" type="radio" name="input-radio-4" id="input-radio-15" value="yes">
                                                                        <label for="input-radio-15">Yes</label>
                                                                    </fieldset>
                                                                    <fieldset>
                                                                        <input name="author" type="radio" name="input-radio-4" id="input-radio-15" value="no">
                                                                        <label for="input-radio-16">No</label>
                                                                    </fieldset>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="nama_juranal">Nama Jurnal</label>
                                                            <input class="form-control border-primary" type="text" placeholder="Nama Jurnal" name="nama_juranal">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="publisher">Publisher</label>
                                                            <input class="form-control border-primary" type="text" placeholder="Publisher" name="publisher">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="link_jurnal">Link Jurnal</label>
                                                            <input class="form-control border-primary" type="text" placeholder="Link Jurnal" name="link_jurnal">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="isbn_issn">ISBN/ISSN</label>
                                                            <input class="form-control border-primary" type="text" placeholder="ISBN/ISSN" name="isbn_issn">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="volume_no">Volume/No</label>
                                                            <input class="form-control border-primary" type="text" placeholder="Volume/No" name="volume_no">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="tahun">Tahun</label>
                                                            <input class="form-control border-primary" type="text" placeholder="Tahun" name="tahun">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="loa">LOA (PDF/PNG/JPG)</label>
                                                            <input type="file" class="form-control form-control-file border-primary" id="loa" accept=".jpg, .jpeg, .png, .pdf">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="loa">FINAL PAPER (PDF)</label>
                                                            <input type="file" class="form-control form-control-file border-primary" id="loa" accept=".pdf">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="link_publikasi">Link Publikasi</label>
                                                            <input class="form-control border-primary" type="text" placeholder="Link Publikasi" name="link_publikasi">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="indeks">Indeks</label>
                                                            <input class="form-control border-primary" type="text" placeholder="IEEEE/SCOPUS/dll" name="indeks">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="link_indeks">Link Indeks</label>
                                                            <input class="form-control border-primary" type="text" placeholder="Link Indeks" name="link_indeks">
                                                        </div>


                                                    </div>

                                                    <div id="nas-journal" style="display: none;">
                                                        <div class="form-group">
                                                            <label for="judul_paper">Judul Paper</label>
                                                            <input class="form-control border-primary" type="text" placeholder="Judul Paper" name="judul_paper">
                                                        </div>
                                                        <div class="file-repeater">
                                                            <div data-repeater-list="repeater-list">
                                                                <div data-repeater-item style="background-color: #f2f2f2; margin-bottom:20px">
                                                                    <div class="row">
                                                                        <div class="form-group col-md-6">
                                                                            <label for="kd_dosen1">Kode Dosen</label>
                                                                            <input class="form-control border-primary" type="text" name="kd_dosen1" placeholder="KODE DOSEN" disabled>
                                                                        </div>
                                                                        <div class="form-group col-md-6">
                                                                            <label for="dosen1">Nama Dosen</label>
                                                                            <input class="form-control border-primary" type="text" name="dosen1" placeholder="NAMA DOSEN" disabled>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="form-group col-md-11">
                                                                            <label for="afiliasi">Afiliasi</label>
                                                                            <input class="form-control border-primary" type="text" name="afiliasi" placeholder="Afiliasi">
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
                                                            <label for="author">As corresponding author?</label>
                                                            <div class="row skin skin-flat" style="margin-left: initial;">
                                                                <div>
                                                                    <fieldset>
                                                                        <input name="author" type="radio" name="input-radio-4" id="input-radio-15" value="yes">
                                                                        <label for="input-radio-15">Yes</label>
                                                                    </fieldset>
                                                                    <fieldset>
                                                                        <input name="author" type="radio" name="input-radio-4" id="input-radio-15" value="no">
                                                                        <label for="input-radio-16">No</label>
                                                                    </fieldset>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="nama_juranal">Nama Jurnal</label>
                                                            <input class="form-control border-primary" type="text" placeholder="Nama Jurnal" name="nama_juranal">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="publisher">Publisher</label>
                                                            <input class="form-control border-primary" type="text" placeholder="Publisher" name="publisher">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="link_jurnal">Link Jurnal</label>
                                                            <input class="form-control border-primary" type="text" placeholder="Link Jurnal" name="link_jurnal">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="isbn_issn">ISBN/ISSN</label>
                                                            <input class="form-control border-primary" type="text" placeholder="ISBN/ISSN" name="isbn_issn">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="volume_no">Volume/No</label>
                                                            <input class="form-control border-primary" type="text" placeholder="Volume/No" name="volume_no">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="tahun">Tahun</label>
                                                            <input class="form-control border-primary" type="text" placeholder="Tahun" name="tahun">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="loa">LOA (PDF/PNG/JPG)</label>
                                                            <input type="file" class="form-control form-control-file border-primary" id="loa" accept=".jpg, .jpeg, .png, .pdf">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="loa">FINAL PAPER (PDF)</label>
                                                            <input type="file" class="form-control form-control-file border-primary" id="loa" accept=".pdf">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="link_publikasi">Link Publikasi</label>
                                                            <input class="form-control border-primary" type="text" placeholder="Link Publikasi" name="link_publikasi">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="indeks">Indeks</label>
                                                            <input class="form-control border-primary" type="text" placeholder="Sinta 1-Sinta 4" name="indeks">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="link_indeks">Link Indeks</label>
                                                            <input class="form-control border-primary" type="text" placeholder="Link Indeks" name="link_indeks">
                                                        </div>
                                                    </div>
                                                    <div id="int-con" style="display: none;">
                                                        <div class="form-group">
                                                            <label for="judul_paper">Judul Paper</label>
                                                            <input class="form-control border-primary" type="text" placeholder="Judul Paper" name="judul_paper">
                                                        </div>
                                                        <div class="file-repeater">
                                                            <div data-repeater-list="repeater-list">
                                                                <div data-repeater-item style="background-color: #f2f2f2; margin-bottom:20px">
                                                                    <div class="row">
                                                                        <div class="form-group col-md-6">
                                                                            <label for="kd_dosen1">Kode Dosen</label>
                                                                            <input class="form-control border-primary" type="text" name="kd_dosen1" placeholder="KODE DOSEN" disabled>
                                                                        </div>
                                                                        <div class="form-group col-md-6">
                                                                            <label for="dosen1">Nama Dosen</label>
                                                                            <input class="form-control border-primary" type="text" name="dosen1" placeholder="NAMA DOSEN" disabled>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="form-group col-md-11">
                                                                            <label for="afiliasi">Afiliasi</label>
                                                                            <input class="form-control border-primary" type="text" name="afiliasi" placeholder="Afiliasi">
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
                                                            <label for="author">As corresponding author?</label>
                                                            <div class="row skin skin-flat" style="margin-left: initial;">
                                                                <div>
                                                                    <fieldset>
                                                                        <input name="author" type="radio" name="input-radio-4" id="input-radio-15" value="yes">
                                                                        <label for="input-radio-15">Yes</label>
                                                                    </fieldset>
                                                                    <fieldset>
                                                                        <input name="author" type="radio" name="input-radio-4" id="input-radio-15" value="no">
                                                                        <label for="input-radio-16">No</label>
                                                                    </fieldset>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="nama_juranal">Nama Conference</label>
                                                            <input class="form-control border-primary" type="text" placeholder="Nama Jurnal" name="nama_juranal">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Pelaksanaan</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control daterange border-primary">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">
                                                                        <span class="la la-calendar"></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="penyelenggara">Penyelenggara</label>
                                                            <input class="form-control border-primary" type="text" placeholder="Penyelenggara" name="penyelenggara">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="link_conference">Link Conference</label>
                                                            <input class="form-control border-primary" type="text" placeholder="Link Conference" name="link_conference">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="loa">LOA (PDF/PNG/JPG)</label>
                                                            <input type="file" class="form-control form-control-file border-primary" id="loa" accept=".jpg, .jpeg, .png, .pdf">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="loa">FINAL PAPER (PDF)</label>
                                                            <input type="file" class="form-control form-control-file border-primary" id="loa" accept=".pdf">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="indeks">Indeks</label>
                                                            <input class="form-control border-primary" type="text" placeholder="IEEEE/SCOPUS/dll" name="indeks">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="link_indeks">Link Indeks</label>
                                                            <input class="form-control border-primary" type="text" placeholder="Link Indeks" name="link_indeks">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-actions">
                                                    <button type="button" class="btn btn-danger mr-1">
                                                        <i class="ft-x"></i> Cancels
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

    <!-- BEGIN VENDOR JS-->
    <script src="<?php echo base_url(); ?>app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="<?php echo base_url(); ?>app-assets/vendors/js/forms/repeater/jquery.repeater.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>app-assets/vendors/js/forms/icheck/icheck.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>app-assets/vendors/js/pickers/pickadate/picker.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>app-assets/vendors/js/pickers/pickadate/picker.date.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>app-assets/vendors/js/pickers/pickadate/picker.time.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>app-assets/vendors/js/pickers/pickadate/legacy.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>app-assets/vendors/js/pickers/dateTime/moment-with-locales.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>app-assets/vendors/js/pickers/daterange/daterangepicker.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN CHAMELEON  JS-->
    <script src="<?php echo base_url(); ?>app-assets/js/core/app-menu.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>app-assets/js/core/app.js" type="text/javascript"></script>
    <!-- END CHAMELEON  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="<?php echo base_url(); ?>app-assets/js/scripts/forms/form-repeater.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>app-assets/js/scripts/forms/checkbox-radio.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>app-assets/js/scripts/pickers/dateTime/pick-a-datetime.js" type="text/javascript"></script>


    <!-- END PAGE LEVEL JS-->

    <script>
        var publikasi = "";
        var x = document.getElementById("int-journal");
        var y = document.getElementById("nas-journal");
        var z = document.getElementById("int-con");

        $('#publikasi').change(function() {
            if ($(this).val() == 'International Journal') {
                var publikasi = "International Journal";
                x.style.display = "contents";
                y.style.display = "none";
                z.style.display = "none";
            } else if ($(this).val() == 'Nasional Journal') {
                var publikasi = "Nasional Journal";
                x.style.display = "none";
                y.style.display = "contents";
                z.style.display = "none";
            } else if ($(this).val() == 'International Conference') {
                var publikasi = "International Conference";
                x.style.display = "none";
                y.style.display = "none";
                z.style.display = "contents";
            } else {
                var publikasi = "";
            }
            console.log(publikasi);
        });
    </script>
    <?php
    ?>

</body>

</html>