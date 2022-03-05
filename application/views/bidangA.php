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
                    <h3 class="content-header-title mb-0 d-inline-block">Form Repeater</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper mr-1">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>#">Forms</a>
                                </li>
                                <li class="breadcrumb-item active">Form Repeater
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
                                    <h4 class="card-title" id="file-repeater">Basic Example</h4>
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
                                            <div class="form-group col-md-6 mb-2">
                                                <input type="text" class="form-control" placeholder="First Name" name="first">
                                            </div>
                                            <div class="form-group col-md-6 mb-2">
                                                <input type="text" class="form-control" placeholder="Last name" name="last">
                                            </div>
                                            <div class="form-group col-md-6 mb-2">
                                                <input type="text" class="form-control" placeholder="City" name="city">
                                            </div>
                                            <div class="form-group col-md-6 mb-2">
                                                <input type="text" class="form-control" placeholder="State" name="state">
                                            </div>
                                            <div class="form-group col-12 mb-2">
                                                <textarea rows="5" class="form-control" name="description" placeholder="Description"></textarea>
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
                                        <form class="form form-horizontal">
                                            <div class="form-body">

                                                <h4 class="form-section"><i class="ft-clipboard"></i> Project Details</h4>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput5">Kode Matkul</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="projectinput5" class="form-control" placeholder="Kode Matkul" name="kode-matkul">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput6">Interested in</label>
                                                    <div class="col-md-9">
                                                        <select id="projectinput6" name="interested" class="form-control">
                                                            <option value="none" selected="" disabled="">Interested in</option>
                                                            <option value="design">design</option>
                                                            <option value="development">development</option>
                                                            <option value="illustration">illustration</option>
                                                            <option value="branding">branding</option>
                                                            <option value="video">video</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput7">Budget</label>
                                                    <div class="col-md-9">
                                                        <select id="projectinput7" name="budget" class="form-control">
                                                            <option value="0" selected="" disabled="">Budget</option>
                                                            <option value="less than 5000$">less than 5000$</option>
                                                            <option value="5000$ - 10000$">5000$ - 10000$</option>
                                                            <option value="10000$ - 20000$">10000$ - 20000$</option>
                                                            <option value="more than 20000$">more than 20000$</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control">Select File</label>
                                                    <div class="col-md-9">
                                                        <label id="projectinput8" class="file center-block">
                                                            <input type="file" id="file">
                                                            <span class="file-custom"></span>
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput9">About Project</label>
                                                    <div class="col-md-9">
                                                        <textarea id="projectinput9" rows="5" class="form-control" name="comment" placeholder="About Project"></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-actions right">
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