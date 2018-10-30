<!doctype html>
<html lang="en">
    <?php require_once('head.php');?>
    
<body>

<div id="wrapper">
<?php require_once('sidebar.php');?>
<?php require_once('top-nav.php');?>
 <!-- Page Content -->
 <div id="page-content-wrapper" class="dashboard">
            <div class="dashboard-block">
                <div class="container-fluid px-0">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="white-box">
                                <div class="info-card">
                                    <div class="info-card-header">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="card-icon">
                                                    <i class="fas fa-clipboard-check"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="info-card-title">
                                                    <p>Total bookings</p>
                                                    <h1>300</h1>
                                                </div>
                                            </div>
                                        </div>



                                    </div>

                                </div>

                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="white-box">
                                <div class="info-card">
                                    <div class="info-card-header">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="card-icon">
                                                    <i class="fas fa-check-double"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="info-card-title">
                                                    <p>Total pre-bookings</p>
                                                    <h1>1270</h1>
                                                </div>
                                            </div>
                                        </div>



                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="white-box">
                                <div class="info-card">
                                    <div class="info-card-header">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="card-icon">
                                                    <i class="fas fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="info-card-title">
                                                    <p>Total clients</p>
                                                    <h1>1305</h1>
                                                </div>
                                            </div>
                                        </div>



                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="white-box">
                                <div class="info-card">
                                    <div class="info-card-header">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="card-icon">
                                                    <i class="fas fa-chart-bar"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="info-card-title">
                                                    <p>Total pre-bookings</p>
                                                    <h1>420</h1>
                                                </div>


                                            </div>
                                        </div>



                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="content-block">
                                <div class="white-box">
                                        <div class="table-title">
                                                <div class="container-fluid px-0">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <h5>Booking stats</h5>
                                                        </div>
                        
                                                    </div>
                                                </div>
                        
                                            </div>
                                    <canvas id="myChart" width="400" height="400"></canvas>
                                </div>
                            </div>


                        </div>
                    </div>



                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->



 </div>

 
<?php require_once('scripts.php');?>

</body>
</html>
