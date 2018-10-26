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
                        <li class="breadcrumb-item active" aria-current="page">Pending invitation</li>
                    </ol>
                </nav>
            </div>





            <div class="invite-user-block">
                <div class="white-box">
                        <div class="table-title">
                                <div class="container-fluid px-0">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6">
                                            <h5>Pending invitation</h5>
                                            <p>To invite new User to your account please put details below.</p>
                                        </div>
                                        <div class="col-lg-6 text-lg-right">
                                                <a class="btn add-btn d-inline-block" href="invite-user.php" role="button"><i class="fas fa-user"></i> Invite user</a>
                                                
                                            </div>

                                         
                                    </div>
                                </div>
        
                            </div>

                            
                               

                            <div class="table-container">
                                    <div class="table-responsive">
                                        <table class="table" id="example">
                                            <thead class="table-light-bg">
                                                <tr>
                                                    <th scope="col">First name</th>
                                                    <th scope="col">Last name <i class="fas fa-chevron-down"></i></th>
                                                    <th scope="col">Email <i class="fas fa-chevron-down"></i></th>
                                                    <th scope="col">Invitation send date <i class="fas fa-chevron-down"></i></th>
                                                   
                                                    <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        Sangam 
                                                    </td>
                                                   <td>Uprety</td>
                                                    <td>test.travelise@gmail.com</td>
                                                    <td>
                                                       12-08-2018
                                                        
                                                    </td>
                                                    <td>
                                                            <div class="publish">
                                                                    <a class="btn add-btn" href="#" role="button">
                                                                        Disable
                                                                    </a>
                                                                </div>
                                                    </td>
                                                </tr>
                                               
                                                <tr>
                                                        <td>
                                                            Sangam 
                                                        </td>
                                                       <td>Uprety</td>
                                                        <td>test.travelise@gmail.com</td>
                                                        <td>
                                                           12-08-2018
                                                            
                                                        </td>
                                                        <td>
                                                                <div class="publish">
                                                                        <a class="btn add-btn" href="#" role="button">
                                                                            Disable
                                                                        </a>
                                                                    </div>
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                            <td>
                                                                Sangam 
                                                            </td>
                                                           <td>Uprety</td>
                                                            <td>test.travelise@gmail.com</td>
                                                            <td>
                                                               12-08-2018
                                                                
                                                            </td>
                                                            <td>
                                                                    <div class="publish">
                                                                            <a class="btn add-btn" href="#" role="button">
                                                                                Disable
                                                                            </a>
                                                                        </div>
                                                            </td>
                                                        </tr>


                                                        <tr>
                                                                <td>
                                                                    Sangam 
                                                                </td>
                                                               <td>Uprety</td>
                                                                <td>test.travelise@gmail.com</td>
                                                                <td>
                                                                   12-08-2018
                                                                    
                                                                </td>
                                                                <td>
                                                                        <div class="publish">
                                                                                <a class="btn add-btn" href="#" role="button">
                                                                                    Disable
                                                                                </a>
                                                                            </div>
                                                                </td>
                                                            </tr>
                                                
                                               
                                               
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="pagination-block justify-content-center">
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination">
                                                <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Previous">
                                                        <span aria-hidden="true">«</span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                </li>
                                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Next">
                                                        <span aria-hidden="true">»</span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                          
                </div>

            </div>
        </div>
        <!-- /#page-content-wrapper -->



</div>
<?php require_once('scripts.php');?>

</body>
</html>
