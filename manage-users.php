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
                        <li class="breadcrumb-item active" aria-current="page">Manage users</li>
                    </ol>
                </nav>
            </div>





            <div class="manage-package-block">
                <div class="white-box">
                        <div class="table-title">
                                <div class="container-fluid px-0 border-bottom">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6">
                                            <h5>Manage users</h5>
                                            <p>To manage users and their role.</p>
                                        </div>
                                        <div class="col-lg-6 text-lg-right">
                                            <a class="btn add-btn d-inline-block" href="invite-user.php" role="button"><i class="fas fa-user"></i> Invite user</a>

                                                <a class="btn add-btn d-inline-block ml-3" href="pending.php" role="button"><i class="fas fa-hourglass-half"></i> View pending invitation</a>    
                                        </div>
                                    </div>
                                </div>
        
                            </div>

                            <div class="manage-user-block">
                                <div class="form-modified">
                                    <form action="">
                                        <div class="form-group row">
                                            <div class="col">
                                                  <input type="text" class="form-control" id="inputPassword" placeholder="Search by username">
                                            </div>

                                            <div class="col">
                                                    <input type="text" class="form-control" id="inputPassword" placeholder="Search by email">
                                              </div>

                                              <div class="col">
                                                    <input type="text" class="form-control" id="inputPassword" placeholder="Search by status">
                                              </div>
                                              
                                        </div>
                                           
                                    </form>
                                </div>

                                <div class="content-block">
                                        <div class="table-container">
                                                <div class="table-responsive">
                                                    <table class="table" id="example">
                                                        <thead class="table-light-bg">
                                                            <tr>
                                                                <th scope="col">Username</th>
                                                                <th scope="col">Email <i class="fas fa-chevron-down"></i></th>
                                                                <th scope="col">Role <i class="fas fa-chevron-down"></i></th>
                                                                <th scope="col">Status <span>($)</span> <i class="fas fa-chevron-down"></i></th>
                                                               
                                                                <th scope="col">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    Sangam Uprety
                                                                </td>
                                                               <td>test.travelise@gmail.com</td>
                                                                <td><span class="badge badge-primary">Admin</span></td>
                                                                <td>
                                                                    <div class="status-icon">
                                                                            <i class="fas fa-check-circle"></i>
                                                                    </div> 
                                                                    
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
                                                                        Sangam Uprety
                                                                    </td>
                                                                   <td>test.travelise@gmail.com</td>
                                                                    <td><span class="badge badge-secondary">Customer</span></td>
                                                                    <td> 
                                                                        <div class="status-icon">
                                                                                <i class="fas fa-times-circle"></i>
                                                                        </div>
                                                                        </td>
                                                                    <td>
                                                                            <div class="publish">
                                                                                    <a class="btn add-btn" href="#" role="button">
                                                                                        Enable
                                                                                    </a>
                                                                                </div>
                            
                                                                    </td>
                                                                </tr>
                                                           
                                                                <tr>
                                                                        <td>
                                                                            Sangam Uprety
                                                                        </td>
                                                                       <td>test.travelise@gmail.com</td>
                                                                        <td>
                                                                                <span class="badge badge-success">User</span>
                                                                        </td>
                                                                        <td>
                                                                            <div class="status-icon">
                                                                                    <i class="fas fa-check-circle"></i>
                                                                            </div> 
                                                                            
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
                                                                                Sangam Uprety
                                                                            </td>
                                                                           <td>test.travelise@gmail.com</td>
                                                                            <td>
                                                                                    <span class="badge badge-secondary">Customer</span>
                                                                            </td>
                                                                            <td> 
                                                                                <div class="status-icon">
                                                                                        <i class="fas fa-times-circle"></i>
                                                                                </div>
                                                                                </td>
                                                                            <td>
                                                                                    <div class="publish">
                                                                                            <a class="btn add-btn" href="#" role="button">
                                                                                                Enable
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

            </div>
        </div>
        <!-- /#page-content-wrapper -->



</div>
<?php require_once('scripts.php');?>

</body>
</html>
