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
                    <h3 class="content-header-title mb-0 d-inline-block">Form Input User</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper mr-1">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Imput User</a>
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
                                                <input type="text" name="id_dosen" value="<?php echo $user->id_dosen ?>"  hidden = "hidden"/>

                                                <div class="form-group">
                                                    <label for="kode_dosen">Kode Dosen</label>
                                                    <input type="text" class="form-control <?php echo form_error('kode_dosen') ? 'is-invalid' : '' ?>" placeholder="Kode Dosen" name="kode_dosen" value="<?php echo $user->kode_dosen ?>">
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('kode_dosen') ?>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="nama_dosen">Nama Dosen</label>
                                                    <input type="text" class="form-control <?php echo form_error('nama_dosen') ? 'is-invalid' : '' ?>" placeholder="Nama Dosen" name="nama_dosen" value="<?php echo $user->nama_dosen ?>">
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('nama_dosen') ?>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="profil">Profil</label>

                                                    <select id="profil" name="profil" class="form-control">

                                                        <option value="none" selected="" disabled="">Profil</option>
                                                        <?php foreach ($profil as $dosen) { ?>
                                                            <option value="<?php echo $dosen->id_profil; ?>"<?php if($user->profil == $dosen->id_profil) echo 'selected = "selected"'; ?>><?php echo $dosen->nama_profil; ?> </option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Status Dosen</label>
                                                    <div>
                                                        <?php if ($user->aktif == 1) : ?>
                                                            <fieldset>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="status_dosen" id="status_dosen-yes" value="1" checked> Aktif</label>
                                                            </fieldset>
                                                            <fieldset>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="status_dosen" id="status_dosen-no" value="0"> Non Aktif</label>
                                                            </fieldset>
                                                        <?php else : ?>
                                                            <fieldset>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="status_dosen" id="status_dosen-yes" value="1"> Aktif</label>
                                                            </fieldset>
                                                            <fieldset>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="status_dosen" id="status_dosen-no" value="0" checked> Non Aktif</label>
                                                            </fieldset>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                                    <select id="jenis_kelamin" name="jenis_kelamin" class="form-control">
                                                        <option value="none" selected ="" disabled="">Jenis Kelamin</option>
                                                        <?php if ($user->jenis_kelamin == 'Pria') : ?>
                                                            <option value="Pria" selected>Pria </option>
                                                            <option value="Wanita">Wanita </option>
                                                        <?php else : ?>
                                                            <option value="Pria">Pria </option>
                                                            <option value="Wanita" selected>Wanita </option>
                                                        <?php endif; ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="jurusan">Jurusan</label>
                                                    <input type="text" class="form-control <?php echo form_error('jurusan') ? 'is-invalid' : '' ?>" placeholder="Jurusan" name="jurusan" value="<?php echo $user->jurusan ?>">
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('jurusan') ?>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="no_hp">No HP</label>
                                                    <input type="text" class="form-control <?php echo form_error('no_hp') ? 'is-invalid' : '' ?>" placeholder="No HP" name="no_hp" value="<?php echo $user->no_hp ?>">
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('no_hp') ?>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input type="email" class="form-control <?php echo form_error('email') ? 'is-invalid' : '' ?>" placeholder="Email" name="email" value="<?php echo $user->email ?>">
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('email') ?>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="kode_kelompok_rumpun_ilmu">Kode Kelompok Rumpun Ilmu</label>
                                                    <input type="number" class="form-control <?php echo form_error('kode_kelompok_rumpun_ilmu') ? 'is-invalid' : '' ?>" placeholder="Kode Kelompok Rumpun Ilmu" name="kode_kelompok_rumpun_ilmu" value="<?php echo $user->kode_kelompok_rumpun_ilmu ?>">
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('kode_kelompok_rumpun_ilmu') ?>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="kode_rumpun_ilmu">Kode Rumpun Ilmu</label>
                                                    <input type="number" class="form-control <?php echo form_error('kode_rumpun_ilmu') ? 'is-invalid' : '' ?>" placeholder="Kode Rumpun Ilmu" name="kode_rumpun_ilmu" value="<?php echo $user->kode_rumpun_ilmu ?>">
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('kode_rumpun_ilmu') ?>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="tipe_dosen">Tipe Dosen</label>
                                                    <select id="tipe_dosen" name="tipe_dosen" class="form-control">
                                                        <option value="none" selected="" disabled="">Tipe Dosen</option>
                                                        <option value="Faculty Member"<?php if($user->tipe_dosen == "Faculty Member") echo 'selected = "selected"'; ?>>Faculty Member </option>
                                                        <option value="Struktural"<?php if($user->tipe_dosen == "Struktural") echo 'selected = "selected"'; ?>>Struktural </option>
                                                        <option value="Subject Content Coordinator"<?php if($user->tipe_dosen == "Subject Content Coordinator") echo 'selected = "selected"'; ?>>Subject Content Coordinator </option>
                                                        <option value="Subject Content Specialist"<?php if($user->tipe_dosen == "Subject Content Specialist") echo 'selected = "selected"'; ?>>Subject Content Specialist </option>
                                                        <option value="Tutor"<?php if($user->tipe_dosen == "Tutor") echo 'selected = "selected"'; ?>>Tutor </option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="rentang_fm">Rentang FM</label>
                                                    <select id="rentang_fm" name="rentang_fm" class="form-control">
                                                        <option value="none" selected="" disabled="">Rentang FM</option>
                                                        <option value="AFM" <?php if($user->rentang_fm == "AFM") echo 'selected = "selected"'; ?>>AFM </option>
                                                        <option value="FM" <?php if($user->rentang_fm == "FM") echo 'selected = "selected"'; ?>>FM </option>
                                                        <option value="FM SCS" <?php if($user->rentang_fm == "FM SCS") echo 'selected = "selected"'; ?>>FM SCS </option>
                                                        <option value="FM STR" <?php if($user->rentang_fm == "FM STR") echo 'selected = "selected"'; ?>>FM STR </option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="jja">JJA</label>
                                                    <input type="text" class="form-control <?php echo form_error('jja') ? 'is-invalid' : '' ?>" placeholder="JJA" name="jja" value="<?php echo $user->jja ?>">
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('jja') ?>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="password">Password</label>
                                                    <input type="text" class="form-control <?php echo form_error('password') ? 'is-invalid' : '' ?>" placeholder="Password" name="password" value="<?php echo $user->password ?>">
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('password') ?>
                                                    </div>
                                                </div>
                                                <div class="form-actions">
                                                    <a href="<?php echo site_url('admin/user/') ?>" type="button" class="btn btn-danger mr-1">
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