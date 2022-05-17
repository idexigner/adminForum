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

        <!-- DataTables -->
        <link href="<?= base_url(); ?>assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="<?= base_url(); ?>assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

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
                <?php include('page_component/sidebar.php') ?>
            <!-- Left Sidebar End -->

            <!-- Start right Content here -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">

                    <!-- Top Bar Start -->
                        <?php include('page_component/topbar.php') ?>
                    <!-- Top Bar End -->

                    <div class="page-content-wrapper ">

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="page-title-box">
                                        <div class="btn-group float-right">
                                            <ol class="breadcrumb hide-phone p-0 m-0">
                                                <li class="breadcrumb-item"><a href="<?=base_url()?>">Admin</a></li>
                                                <li class="breadcrumb-item active">User List</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">User List</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- end page title end breadcrumb -->
                           

                            <div class="row">
                                <div class="col-lg-12 col-sm-12">
                                    <div class="card">
                                        <div class="card-body table-responsive">
                                            <!-- <h5 class="header-title">Row Border Bottom Example</h5>
                                            <p class="text-muted mb-4 font-13">DataTables has most features enabled by default, so all you need to do to use it with your own ables is to call the construction function: <code>$().DataTable();</code> and border bottom.</p> -->
                                            <div class="">
                                                <table id="datatable2" class="table dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                    <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Role</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                        
                                                    </tr>
                                                    </thead>
    
    
                                                    <tbody>
                                                    <?php foreach($users as $u){ ?>
                                                    <tr>
                                                        <td><?=$u->user_id?></td>
                                                        <td><?=$u->user_fullname?></td>
                                                        <td><?=$u->user_email?></td>
                                                        <td>
                                                            <?php $r = $u->user_role;
                                                            if($r==1){$txt="Forum"; $cl="primary";}
                                                            else if($r==2){$txt="Contractor"; $cl="info";}
                                                            else if($r==3){$txt="Business"; $cl="warning";}
                                                            ?>
                                                            <span class="badge badge-<?=$cl?>"><?=$txt?></span>
                                                        </td>
                                                        <td>
                                                            <?php $a = $u->is_active;
                                                            if($a==1){$txt="Active"; $cl="success";}
                                                            else {$txt="Not Active"; $cl="danger";}
                                                            ?>
                                                            <span class="badge badge-<?=$cl?>"><?=$txt?></span>
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-sm btn-success" onclick="window.location.href='<?=base_url()?>user/update/<?=$u->user_id?>'"><i class="fas fa-edit"></i></button>
                                                            <button type="button" class="btn btn-sm btn-danger" onclick="deleteUser(<?=$u->user_id?>)"><i class="fas fa-trash-alt"></i></button>
                                                        </td>
                                                        
                                                    </tr>   
                                                    <?php } ?>                                                
                                                    </tbody>
                                                </table>
                                            </div>           
                                        </div>
                                    </div>
                                </div>
                            </div><!--end row-->
            
                            
                        </div><!-- container -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                <footer class="footer">
                    © 2022 KeepAdding. All rights reserved.
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

        <!-- Required datatable js -->
        <script src="<?= base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?= base_url(); ?>assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="<?= base_url(); ?>assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="<?= base_url(); ?>assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="<?= base_url(); ?>assets/plugins/datatables/jszip.min.js"></script>
        <script src="<?= base_url(); ?>assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="<?= base_url(); ?>assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="<?= base_url(); ?>assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="<?= base_url(); ?>assets/plugins/datatables/buttons.print.min.js"></script>
        <script src="<?= base_url(); ?>assets/plugins/datatables/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="<?= base_url(); ?>assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="<?= base_url(); ?>assets/plugins/datatables/responsive.bootstrap4.min.js"></script>

        <!-- Datatable init js -->
        <script src="<?= base_url(); ?>assets/pages/datatables.init.js"></script>

        <!-- App js -->
        <script src="<?= base_url(); ?>assets/js/app.js"></script>

        <script>
        function deleteUser(id){
            console.log("sad")
            var c = confirm("Are you sure, you want to delete this user?");
            if(c){
                window.location.href = "<?=base_url()?>User/delete/"+id;
            }
        }
        </script>

    </body>
</html>