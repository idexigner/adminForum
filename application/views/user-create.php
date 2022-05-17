<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Admin - KeepAdding</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Mannatthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="<?= base_url(); ?>assets/images/favicon.ico">

        <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url(); ?>assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css">
    </head>


    <body class="fixed-left">

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
                <?php include("page_component/sidebar.php") ?>
            <!-- Left Sidebar End -->

            <!-- Start right Content here -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">

                    <!-- Top Bar Start -->
                    <?php include("page_component/topbar.php") ?>
                    <!-- Top Bar End -->

                    <div class="page-content-wrapper ">

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="page-title-box">
                                        <div class="btn-group float-right">
                                            <ol class="breadcrumb hide-phone p-0 m-0">
                                                <li class="breadcrumb-item"><a href="<?=base_url()?>">Admin</a></li>

                                                <li class="breadcrumb-item active"> <?=($edit)?"Edit":"Add";?>User</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title"><?=($edit)?"Edit":"Add";?> User</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- end page title end breadcrumb -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">            
                                            <!-- <h4 class="mt-0 header-title">Textual inputs</h4>
                                            <p class="text-muted mb-4 font-13">Here are examples of <code
                                                    class="highlighter-rouge">.form-control</code> applied to each
                                                textual HTML5 <code class="highlighter-rouge">&lt;input&gt;</code> <code
                                                        class="highlighter-rouge">type</code>.
                                            </p> -->
                                            <form action="<?=base_url()?>User/<?=($edit)?"update":"create";?>_submit" method="post">
                                                <div class="row">
                                                    <div class="col-xl-12 p-4">
                                                        <div class="form-group row d-none">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label">User Id </label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" name="user_id" type="text" value="<?=$user->user_id?>" >
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label">Full Name</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" name="user_fullname" type="text" value="<?=$user->user_fullname?>" >
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" name="user_email" type="email" value="<?=$user->user_email?>" >
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label">User Name</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" name="user_username" type="text" value="<?=$user->user_username?>" >
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label">Password</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" name="user_pass" type="<?=($edit)?"Text":"Password";?>" value="<?=$user->user_pass?>" >
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">User Role</label>
                                                            <div class="col-sm-10">
                                                                <select class="custom-select" name="user_role">
                                                                    <option selected>User Role</option>
                                                                    <option value="1" <?=($user->user_role == '1')?"Selected":"";?>>Forum</option>
                                                                    <option value="2" <?=($user->user_role == '2')?"Selected":"";?>>Contractor</option>
                                                                    <option value="3" <?=($user->user_role == '3')?"Selected":"";?>>Business</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Status</label>
                                                            <div class="col-sm-10">
                                                                <select class="custom-select" name="is_active">
                                                                    <option selected>Status</option>
                                                                    <option value="1" <?=($user->is_active == '1')?"Selected":"";?>>Active</option>
                                                                    <option value="0" <?=($user->is_active == '0')?"Selected":"";?>>Not Active</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <button type="submit" class="btn btn-success ml-2 float-right"><?=($edit)?"Update":"Submit";?></button>
                                                    
                                                    </div>
                                                
                                                    </div>
                                                </div>     
                                            </form>                                       
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                            
                         


                       

                        </div><!-- container -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                <footer class="footer">
                    © 2022 Zoogler by Mannatthemes.
                </footer>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        <script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/popper.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/modernizr.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/detect.js"></script>
        <script src="<?= base_url(); ?>assets/js/fastclick.js"></script>
        <script src="<?= base_url(); ?>assets/js/jquery.slimscroll.js"></script>
        <script src="<?= base_url(); ?>assets/js/jquery.blockUI.js"></script>
        <script src="<?= base_url(); ?>assets/js/waves.js"></script>
        <script src="<?= base_url(); ?>assets/js/jquery.scrollTo.min.js"></script>

        <!-- App js -->
        <script src="<?= base_url(); ?>assets/js/app.js"></script>

    </body>
</html>