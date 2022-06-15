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

                                                <li class="breadcrumb-item active">Subscription</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">Subscription</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- end page title end breadcrumb -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body"> 

                                        
                                            <?php 
                                                $forum_feature = json_decode($subscription_list[0]->s_feature);
                                                $contractor_feature = json_decode($subscription_list[1]->s_feature);
                                                $business_feature = json_decode($subscription_list[2]->s_feature);
                                            
                                            ?>    


                                                    <h3>Free User</h3>
                                                  
                                                        <form action="<?=base_url()?>Subscription/update/1" method="post">
                                                            <div class="row">
                                                                <div class="col-xl-12 p-4">
                                                                   
                                                                    <div class="form-group row">
                                                                        <div class="col-sm-6">
                                                                            <label for="example-text-input" class="col-form-label">Monthly Amount</label>
                                                                            <input class="form-control" name="s_monthly" type="text" value="<?=$subscription_list[0]->s_monthly?>" >
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <label for="example-text-input" class=" col-form-label">Annually Amount</label>
                                                                            <input class="form-control" name="s_annually" type="text" value="<?=$subscription_list[0]->s_annually?>" >
                                                                        </div>
                                                                        
                                                                        
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <div class="col-sm-12">
                                                                            <label for="example-text-input" class="col-form-label">Features</label>
                                                                            <input class="form-control d-none" name="forum_feature_length" type="text" value="<?=count($forum_feature)?>" >
                                                                            <div id="forum_feature" class="mb-3 ">
                                                                                <?php
                                                                                    for($i=1;$i<=count($forum_feature);$i++){
                                                                                        $temp = $forum_feature[$i-1];
                                                                                ?>
                                                                                <input class="form-control my-2" name="feature_<?=$i?>" type="text" value="<?=$temp->feat?>" >
                                                                                <?php
                                                                                    }
                                                                                ?>
                                                                            </div>

                                                                            <div class="">

                                                                                <button type="button" onclick="forum_add()" class="btn btn-primary mr-2  ">Add More</button>
                                                                                <button type="button" onclick="forum_sub()" class="btn btn-primary mr-2 ">Less One</button>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                   
                                                               

                                                                    <button type="submit" class="btn btn-success btn-block ">Update</button>
                                                                
                                                                </div>
                                                            
                                                                </div>
                                                            
                                                            </form>  

                                                            <hr>
                                                            <h3 class="mt-4">Contractor User</h3>
                                                  
                                                        <form action="<?=base_url()?>Subscription/update/2" method="post">
                                                            <div class="row">
                                                                <div class="col-xl-12 p-4">
                                                                   
                                                                    <div class="form-group row">
                                                                        <div class="col-sm-6">
                                                                            <label for="example-text-input" class="col-form-label">Monthly Amount</label>
                                                                            <input class="form-control" name="s_monthly" type="text" value="<?=$subscription_list[1]->s_monthly?>" >
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <label for="example-text-input" class=" col-form-label">Annually Amount</label>
                                                                            <input class="form-control" name="s_annually" type="text" value="<?=$subscription_list[1]->s_annually?>" >
                                                                        </div>
                                                                        
                                                                        
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <div class="col-sm-12">
                                                                            <label for="example-text-input" class="col-form-label">Features</label>
                                                                            <input class="form-control d-none" name="contractor_feature_length" type="text" value="<?=count($contractor_feature)?>" >
                                                                            <div id="contractor_feature" class="mb-3 ">
                                                                                <?php
                                                                                    for($i=1;$i<=count($contractor_feature);$i++){
                                                                                        $temp = $contractor_feature[$i-1];
                                                                                ?>
                                                                                <input class="form-control my-2" name="feature_<?=$i?>" type="text" value="<?=$temp->feat?>" >
                                                                                <?php
                                                                                    }
                                                                                ?>
                                                                            </div>

                                                                            <div class="">

                                                                                <button type="button" onclick="contractor_add()" class="btn btn-primary mr-2  ">Add More</button>
                                                                                <button type="button" onclick="contractor_sub()" class="btn btn-primary mr-2 ">Less One</button>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                   
                                                               

                                                                    <button type="submit" class="btn btn-success btn-block ">Update</button>
                                                                
                                                                </div>
                                                            
                                                                </div>
                                                            
                                                            </form>  




                                                            <hr>
                                                            <h3 class="mt-4">Business User</h3>
                                                  
                                                  <form action="<?=base_url()?>Subscription/update/3" method="post">
                                                      <div class="row">
                                                          <div class="col-xl-12 p-4">
                                                             
                                                              <div class="form-group row">
                                                                  <div class="col-sm-6">
                                                                      <label for="example-text-input" class="col-form-label">Monthly Amount</label>
                                                                      <input class="form-control" name="s_monthly" type="text" value="<?=$subscription_list[2]->s_monthly?>" >
                                                                  </div>
                                                                  <div class="col-sm-6">
                                                                      <label for="example-text-input" class=" col-form-label">Annually Amount</label>
                                                                      <input class="form-control" name="s_annually" type="text" value="<?=$subscription_list[2]->s_annually?>" >
                                                                  </div>
                                                                  
                                                                  
                                                              </div>
                                                              <div class="form-group row">
                                                                  <div class="col-sm-12">
                                                                      <label for="example-text-input" class="col-form-label">Features</label>
                                                                      <input class="form-control d-none" name="business_feature_length" type="text" value="<?=count($business_feature)?>" >
                                                                      <div id="business_feature" class="mb-3 ">
                                                                          <?php
                                                                              for($i=1;$i<=count($business_feature);$i++){
                                                                                  $temp = $business_feature[$i-1];
                                                                          ?>
                                                                          <input class="form-control my-2" name="feature_<?=$i?>" type="text" value="<?=$temp->feat?>" >
                                                                          <?php
                                                                              }
                                                                          ?>
                                                                      </div>

                                                                      <div class="">

                                                                          <button type="button" onclick="business_add()" class="btn btn-primary mr-2  ">Add More</button>
                                                                          <button type="button" onclick="business_sub()" class="btn btn-primary mr-2 ">Less One</button>
                                                                      </div>
                                                                  </div>
                                                                  
                                                              </div>
                                                             
                                                         

                                                              <button type="submit" class="btn btn-success btn-block ">Update</button>
                                                          
                                                          </div>
                                                      
                                                          </div>
                                                      
                                                      </form>  

                                                
                                                
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
                // $('#datatable2').DataTable();  
            } );


            function forum_add(){
            var s = $('input[name=forum_feature_length]').val();
            s++;
            $('input[name=forum_feature_length]').val(s);
            $("#forum_feature").append(`
                <input class="form-control my-2" name="feature_${s}" type="text" value="" >
            `);

        }

        function forum_sub(){
            var s = $('input[name=forum_feature_length]').val();
            if(s >= 2){
                $("#forum_feature input[name=feature_"+s+"]").remove()
                s--;
                $('input[name=forum_feature_length]').val(s);
            }
        }

        function contractor_add(){
            var s = $('input[name=contractor_feature_length]').val();
            s++;
            $('input[name=contractor_feature_length]').val(s);
            $("#contractor_feature").append(`
                <input class="form-control my-2" name="feature_${s}" type="text" value="" >
            `);

        }

        function contractor_sub(){
            var s = $('input[name=contractor_feature_length]').val();
            if(s >= 2){
                $("#contractor_feature input[name=feature_"+s+"]").remove()
                s--;
                $('input[name=contractor_feature_length]').val(s);
            }
        }

        function business_add(){
            var s = $('input[name=business_feature_length]').val();
            s++;
            $('input[name=business_feature_length]').val(s);
            $("#business_feature").append(`
                <input class="form-control my-2" name="feature_${s}" type="text" value="" >
            `);

        }

        function business_sub(){
            var s = $('input[name=business_feature_length]').val();
            if(s >= 2){
                $("#business_feature input[name=feature_"+s+"]").remove()
                s--;
                $('input[name=business_feature_length]').val(s);
            }
        }
        </script>

    </body>
</html>