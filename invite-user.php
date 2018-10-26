<!doctype html>
<html lang="en">
    <?php require_once('head.php');?>
    
<body>

<div id="wrapper">
<?php require_once('sidebar.php');?>
<?php require_once('top-nav.php');?>
 <!-- Page Content -->
 <div id="page-content-wrapper" class="dashboard">
 


<div class="breadcrumb-block">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Invite users</li>
                    </ol>
                </nav>
            </div>





            <div class="invite-user-block">
                <div class="white-box">
                        <div class="table-title">
                                <div class="container-fluid px-0 border-bottom">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6">
                                            <h5>Invite users</h5>
                                            <p>To invite new User to your account please put details below.</p>
                                        </div>
                                        <div class="col-lg-6 text-lg-right">
                                            <a class="btn add-btn d-inline-block" href="pending.php" role="button"><i class="fas fa-hourglass-half"></i> View pending invitation</a>

                                                
                                            </div>

                                         
                                    </div>
                                </div>
        
                            </div>

                            
                               

                                <div class="content-block">
                                    <form action="">
                                        <div class="form-modified">
                                                <div class="form-group row align-items-center">

                                                        <label for="staticEmail" class="col-sm-2 col-form-label">First name</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="inputPassword" placeholder="First name">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row align-items-center">

                                                            <label for="staticEmail" class="col-sm-2 col-form-label">Last name</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="inputPassword" placeholder="Last name">
                                                            </div>
                                                        </div>


                                                        <div class="form-group row align-items-center">

                                                                <label for="staticEmail" class="col-sm-2 col-form-label">Email address</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" id="inputPassword" placeholder="Email">
                                                                </div>
                                                            </div>

                                                            <div class="content-block">
                                                                    <div class="row">
                                                                        <div class="col-md-10 offset-md-2">
                                                                            <button class="btn default-btn save-btn" type="submit">Send invitation</button>
                                                                        </div>
                                                                    </div>
                
                                                                </div>
                                        </div>
                                    </form>                                    
                                </div>
                                
                          
                </div>

            </div>


        </div>
        <!-- /#page-content-wrapper -->



</div>
<?php require_once('scripts.php');?>

</body>
</html>
