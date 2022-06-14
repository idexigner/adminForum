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

        <link href="<?= base_url(); ?>assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
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

                                                <li class="breadcrumb-item active"> Filter</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">Filter</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- end page title end breadcrumb -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">     
    
                                                        <form action="<?=base_url()?>Filter/search" method="post">
                                                            <div class="row">


                                                                <div class="col-xl-12 p-4">

                                                                <div class="form-group row">
                                                                        <label class="col-sm-2 col-form-label">Filter By</label>
                                                                        <div class="col-sm-10">
                                                                            <select class="custom-select" name="filter_by" required>
                                                                                <option selected>Filter By</option>
                                                                                <option value="by_project" <?=($filter->by == 'by_project')?"Selected":"";?>>By Project</option>
                                                                                <option value="by_posts" <?=($filter->by == 'by_posts')?"Selected":"";?>>By Posts</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                     <div class="form-group row">
                                                                        <label for="example-text-input" class="col-sm-2 col-form-label">Search Title</label>
                                                                        <div class="col-sm-10">
                                                                            <input class="form-control" name="search" type="text" value="<?=$filter->search?>" >
                                                                        </div>
                                                                    </div>


                                                                    <button type="submit" class="btn btn-success ml-2 float-right">Submit</button>
                                                                
                                                                </div>
                                                            
                                                                </div>
                                                            
                                                            </form>  

                                                <?php if ($filter->by == 'by_project'){ ?>

                                                    <hr class="my-4">
                                              
                                                    <table id="datatable2" class="table dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                        <thead>
                                                            <tr>
                                                            
                                                                <th>ID</th>
                                                                <th>Title</th>
                                                                <th>Business Owner</th>
                                                                <th>Point of Contact</th>
                                                                <th>Budget</th>  
                                                                <th>Created At</th>                                                              
                                                            </tr>
                                                        </thead>
        
        
                                                        <tbody>

                                                            <?php
                                                                foreach($project_list as $pl){
                                                            ?>
                                                                <tr>
                                                                    <td><?=$pl->pro_id?></td>
                                                                    <td><?=$pl->pro_title?></td>
                                                                    <td><?=$pl->pro_business_owner?></td>
                                                                    <td><?=$pl->pro_point_of_contact?></td>
                                                                    <td><?=$pl->pro_budget?></td>
                                                                    <td><?=$pl->pro_created?></td>
                                                                  
                                                                </tr>
                                                            <?php } ?>
                                                                                                             
                                                           
                                                        </tbody>
                                                    </table>
                                                 

                                                <?php } else if ($filter->by == 'by_posts'){ ?>

                                                    <hr class="my-4">

                                                    <table id="datatable2" class="table dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                        <thead>
                                                            <tr>
                                                            
                                                                <th>ID</th>
                                                                <th>Title</th>
                                                                <th>Type</th>
                                                                <th>Channel</th>
                                                                <th>User</th>  
                                                                <th>Created At</th>                                                              
                                                            </tr>
                                                        </thead>


                                                        <tbody>

                                                            <?php
                                                                foreach($posts_list as $pl){
                                                            ?>
                                                                <tr>
                                                                    <td><?=$pl->post_id?></td>
                                                                    <td><?=$pl->post_title?></td>
                                                                    <td><?=$pl->post_type?></td>
                                                                    <td><?=$pl->ch_title?></td>
                                                                    <td><?=$pl->user_fullname?></td>
                                                                    <td><?=$pl->post_created?></td>
                                                                
                                                                </tr>
                                                            <?php } ?>
                                                                                                            
                                                        
                                                        </tbody>
                                                    </table>


                                                <?php } ?>
                                                
                                            </div>       
                                        
                                                   
                                             
                                                                                
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                            
                       
            
                                    
            
                                         
            


                       

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

        <script src="<?= base_url(); ?>assets/plugins/datatables/dataTables.responsive.min.js"></script>

        <!-- App js -->
        <script src="<?= base_url(); ?>assets/js/app.js"></script>

        <script>
            $(document).ready(function() {
                $('#datatable2').DataTable();  
            } );
        </script>

    </body>
</html>