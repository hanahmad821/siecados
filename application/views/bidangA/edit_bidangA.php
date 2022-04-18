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
                                <?php if ($this->session->flashdata('success')) : ?>
                                    <div class="alert alert-success" role="alert">
                                        <?php echo $this->session->flashdata('success'); ?>
                                    </div>
                                <?php endif; ?>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <div class="col-md-12">
                                            <form class="form" action="" method="post">
                                            <input type="text" name="id_bidangA" value="<?php echo $bidangA->id_bidang_a ?>"  hidden = "hidden"/>
                                                <div class="form-group">
                                                    <label for="kode_matkul">Mata Kuliah</label>
                                                    <select id="kode_matkul" name="kode_matkul" class="form-control <?php echo form_error('kode_matkul') ? 'is-invalid' : '' ?>">
                                                        <option value="none" selected="" disabled="">Kode Matkul</option>
                                                        <?php foreach ($matkul as $row) : ?>
                                                            <option value="<?php echo $row->kode_matkul; ?>"<?php if($bidangA->kode_matkul == $row->kode_matkul) echo 'selected = "selected"'; ?>><?php echo $row->kode_matkul . " - " . $row->nama_matkul; ?> </option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="kelas">Kelas</label>
                                                    <input type="text" class="form-control <?php echo form_error('kelas') ? 'is-invalid' : '' ?>" placeholder="Kelas" name="kelas" value="<?php echo $bidangA->kelas; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="sks">Jumlah SKS</label>
                                                    <input type="number" class="form-control <?php echo form_error('sks') ? 'is-invalid' : '' ?>" placeholder="SKS" name="sks" value="<?php echo $bidangA->sks; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="form-group col-md-6">
                                                            <label for="kode_dosen1">Kode Dosen</label>
                                                            <input class="form-control <?php echo form_error('kode_dosen1') ? 'is-invalid' : '' ?> border-primary" type="text" name="kode_dosen1" value="<?php echo $dosen1->kode_dosen ?>" placeholder="KODE DOSEN" readonly="readonly">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="nama_dosen1">Nama Dosen</label>
                                                            <input class="form-control <?php echo form_error('nama_dosen1') ? 'is-invalid' : '' ?> border-primary" type="text" name="nama_dosen1" value="<?php echo $dosen1->nama_dosen; ?>" placeholder="NAMA DOSEN" readonly="readonly">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Sebagai dosen tunggal?</label>
                                                    <!-- <div class="row skin skin-flat" style="margin-left: initial;"> -->
                                                    <div>
                                                        <fieldset>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="select_dosen" id="dosen2-yes" value="yes"> Yes</label>
                                                        </fieldset>
                                                        <fieldset>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="select_dosen" id="dosen2-no" value="no"> No</label>
                                                        </fieldset>
                                                        <!-- </div> -->
                                                    </div>
                                                    <div class="form-group" id="pilih-dosen2" style="display: none;">
                                                        <label for="kode_dosen2">Dosen 2</label>
                                                        <select id="kode_dosen2" name="kode_dosen2" class="form-control <?php echo form_error('kode_dosen2') ? 'is-invalid' : '' ?>">
                                                            <option value="none" selected="" disabled="">Dosen 2</option>
                                                            <?php foreach ($dosen2 as $row) { ?>
                                                                <option value="<?php echo $row->kode_dosen; ?>" <?php if($bidangA->kode_dosen_2 == $row->kode_dosen) echo 'selected = "selected"'; ?>><?php echo $row->kode_dosen . " - " . $row->nama_dosen; ?> </option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                    <div class="form-actions">
                                                        <a href="<?php echo site_url('BidangA/') ?>" type="button" class="btn btn-danger mr-1">
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