<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Admin - Keepadding</title>
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
                                                <li class="breadcrumb-item active">Dashboard</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">Dashboard</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- end page title end breadcrumb -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="icon-contain">
                                                        <div class="row">
                                                            <div class="col-2 align-self-center">
                                                                <i class="fas fa-tasks text-gradient-success"></i>
                                                            </div>
                                                            <div class="col-10 text-right">
                                                                <h5 class="mt-0 mb-1"><?=$posts?></h5>
                                                                <p class="mb-0 font-12 text-muted">Total Forum Posts</p>   
                                                            </div>
                                                        </div>                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="card">
                                                <div class="card-body justify-content-center">
                                                    <div class="icon-contain">
                                                        <div class="row">
                                                            <div class="col-2 align-self-center">
                                                                <i class="far fa-gem text-gradient-danger"></i>
                                                            </div>
                                                            <div class="col-10 text-right">
                                                                <h5 class="mt-0 mb-1"><?=$projects?></h5>
                                                                <p class="mb-0 font-12 text-muted">Active Projects</p>
                                                            </div>
                                                        </div>                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="icon-contain">
                                                        <div class="row">
                                                            <div class="col-2 align-self-center">
                                                                <i class="fas fa-users text-gradient-warning"></i>
                                                            </div>
                                                            <div class="col-10 text-right">
                                                                <h5 class="mt-0 mb-1"><?=$business_users?></h5>
                                                                <p class="mb-0 font-12 text-muted">Total Business User</p>    
                                                            </div>
                                                        </div>                                                        
                                                    </div>                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="card ">
                                                <div class="card-body">
                                                    <div class="icon-contain">
                                                        <div class="row">
                                                            <div class="col-2 align-self-center">
                                                                <i class="fas fa-database text-gradient-primary"></i>
                                                            </div>
                                                            <div class="col-10 text-right">
                                                                <h5 class="mt-0 mb-1"><?=$channels?></h5>
                                                                <p class="mb-0 font-12 text-muted">Total Channels</p>    
                                                            </div>
                                                        </div>                                                        
                                                    </div>                                                    
                                                </div>
                                            </div>
                                        </div>                                             
                                    </div> 
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="btn-group btn-group-toggle float-right" data-toggle="buttons">
                                                <!-- <label class="btn btn-primary btn-sm active">
                                                    <input type="radio" name="options" id="option1" checked=""> This Week
                                                </label>
                                                <label class="btn btn-primary btn-sm">
                                                    <input type="radio" name="options" id="option2"> Last Month
                                                </label>                                                 -->
                                            </div>
                                            <h5 class="header-title mb-4 mt-0">Proposals By Month</h5>
                                            <canvas id="lineChart" height="82"></canvas>
                                        </div>

                                        <?php
                                        $month = [0,0,0,0,0,0,0,0,0,0,0,0];
                                        foreach($proposals_by_month as $p){
                                            $temp = date('m', strtotime($p->prop_created));
                                            $temp-=1;
                                            $month[$temp] += $p->prop_bid_amount;
                                        }
                                        ?>
                                    </div>                                    
                                </div>
                                                              
                            </div>
                           
                            <!-- end row -->
                            
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
        <script src="<?= base_url(); ?>assets/js/jquery.nicescroll.js"></script>
        <script src="<?= base_url(); ?>assets/js/jquery.scrollTo.min.js"></script>

        <script src="<?= base_url(); ?>assets/plugins/chart.js/chart.min.js"></script>
        <!-- <script src="<?= base_url(); ?>assets/pages/dashboard.js"></script> -->

        <!-- App js -->
        <script src="<?= base_url(); ?>assets/js/app.js"></script>
        
        <script>
        //line-chart
        var data_arr = "<?=implode(",",$month)?>";
        // console.log(data_arr);
        data_arr = data_arr.split(",");
        var ctx = document.getElementById('lineChart').getContext('2d');

        gradientStroke1 = ctx.createLinearGradient(0, 0, 0, 300);
          gradientStroke1.addColorStop(0, '#008cff');
          gradientStroke1.addColorStop(1, 'rgba(22, 195, 233, 0.1)');

        gradientStroke2 = ctx.createLinearGradient(0, 0, 0, 300);
          gradientStroke2.addColorStop(0, '#ec536c');
          gradientStroke2.addColorStop(1, 'rgba(222, 15, 23, 0.1)');

          var myChart = new Chart(ctx, {
            type: 'line',

            data: {
              labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sep','Oct','Nov' , 'Dec'],
              datasets: [{
                label: 'Proposals By Month',
                data: data_arr,
                pointBorderWidth: 0,
                pointHoverBackgroundColor: gradientStroke1,
                backgroundColor: gradientStroke1,
                borderColor: 'transparent',
                borderWidth: 1
              }
              ,
              // {
              //     label: '2-Dataset',
              //     data: [5, 15, 12, 25, 5, 7, 5],
              //     pointBorderWidth:0,
              //     pointHoverBackgroundColor: gradientStroke2,
              //     backgroundColor: gradientStroke2,
              //     borderColor: 'transparent',
              //     borderWidth: 1
              //   }
            ],
              
            },
            options: {
                legend: {
                  position: 'bottom',
                  display:true,
                  labels: {
                    boxWidth:12
                  }
                },
                tooltips: {
                  displayColors:true,
                  intersect: true,
                },
                elements: {
                    point:{
                        radius: 3
                    }
                },
                scales: {
                  xAxes: [{
                      ticks: {
                          max: 100,
                          min: 20,
                          stepSize: 10                        
                      },
                      
                      ticks: {
                        display: true,
                        fontFamily: "'Rubik', sans-serif"
                        },
                      
                  }],
                  yAxes: [{                   
                      
                      ticks: {
                          display: true,
                          fontFamily: "'Rubik', sans-serif"
                      },
                      
                  }]
              },
              }
          });

</script>

    </body>
</html>