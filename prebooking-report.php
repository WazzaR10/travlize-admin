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
                        <li class="breadcrumb-item active" aria-current="page">Manage package</li>
                    </ol>
                </nav>
            </div>

            <div class="filter-block justify-content-end">
                <a class="btn filter-btn" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
                    aria-controls="collapseExample">
                    Show filters
                </a>
            </div>



            <div class="collapse" id="collapseExample">
                <div class="search-block">
                    <div class="white-box">
                        <div class="search-block-container">
                            <form>
                                <div class="form-title">
                                    <h5>Search package by :</h5>
                                </div>

                                <div class="form-modified">
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Package name">
                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">


                                                <select class="custom-select" id="inputGroupSelect03" aria-label="Example select with button addon">
                                                    <option selected>Duration</option>
                                                    <option value="1">1-7 days</option>
                                                    <option value="2">7-10 days</option>
                                                    <option value="3">10-14 days</option>
                                                </select>

                                            </div>

                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="option-list">
                                                    <h5>Price</h5>
                                                    <div class="container-fluid price-ranger">
                                                        <div class="row">
                                                            <div class="slider-row">
                                                                <div class="col-sm-12">
                                                                    <div id="slider-range"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row slider-labels">
                                                            <div class="col-lg-6 caption">
                                                                <strong>Min:</strong>
                                                                <span id="slider-range-value1"></span>
                                                            </div>
                                                            <div class="col-lg-6 caption justify-content-end">
                                                                <strong>Max:</strong>
                                                                <span id="slider-range-value2"></span>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <form>
                                                                    <input type="hidden" name="min-value" value="">
                                                                    <input type="hidden" name="max-value" value="">
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-6">

                                            <div class="form-group">


                                                <select class="custom-select" id="inputGroupSelect03" aria-label="Example select with button addon">
                                                    <option selected>Tour type</option>
                                                    <option value="1">Day tours</option>
                                                    <option value="2">Multiday tours</option>
                                                    <option value="3">Group tours</option>
                                                    <option value="3">Private tours</option>
                                                </select>


                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">


                                                <select class="custom-select" id="inputGroupSelect03" aria-label="Example select with button addon">
                                                    <option selected>Upcoming departure</option>
                                                    <option value="1">Jan</option>
                                                    <option value="2">Feb</option>
                                                    <option value="3">Mar</option>
                                                    <option value="3">Apr</option>
                                                </select>


                                            </div>
                                        </div>


                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>




            <div class="manage-package-block">
                <div class="white-box">
                    <div class="table-title">
                        <div class="container-fluid px-0">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <h5>Pre-booking report</h5>
                                </div>
                                <div class="col-lg-6">
                                    <div class="sales-action">
                                            <div class="export-block">
                                                    <a class="btn add-btn" href="#" data-toggle="modal" data-target="#browseImage"><i class="fas fa-file-export"></i>
                                                        Export to pdf
                                                    </a>
                                            </div>
                                                
                                         
                                            <select class="selectpicker">
                                                <option selected="">Filter</option>
                                                <option value="1">Today</option>
                                                <option value="2">This week</option>
                                                <option value="3">This month</option>
                                                <option value="3">This year</option>
                                            </select>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="table-container">
                        <div class="table-responsive">
                            <table class="table" id="example">
                                <thead class="table-light-bg">
                                    <tr>
                                        <th scope="col">Date of sales</th>
                                        <th scope="col">Customer <i class="fas fa-chevron-down"></i></th>
                                        <th scope="col">Package name</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Contact</th>
                                        <th scope="col">Start date</th>
                                       
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            12-08-2018
                                        </td>
                                        <td>
                                            James Harold
                                            <p>jamesharold@email.com</p>
                                        </td>
                                        <td>
                                            Mardi Himal Trek
                                        </td>
                                        <td><span class="badge badge-success">Invoiced</span></td>
                                        <td>+100 98383 038</td>
                                        <td>22-08-2018</td>
                                        <td><div class="publish">
                                            <a class="btn add-btn" href="#">
                                                View
                                            </a>
                                        </div></td>
                                        
                                    </tr>
                                    
                                    <tr>
                                        <td>
                                            12-08-2018
                                        </td>
                                        <td>
                                            James Harold
                                            <p>jamesharold@email.com</p>
                                        </td>
                                        <td>
                                            Mardi Himal Trek
                                        </td>
                                        <td><span class="badge badge-danger">Not invoiced</span></td>
                                        <td>+100 98383 038</td>
                                        <td>22-08-2018</td>
                                        <td><div class="publish">
                                            <a class="btn add-btn" href="#"> 
                                                View
                                            </a>
                                        </div></td>
                                        
                                    </tr>

                                    <tr>
                                        <td>
                                            12-08-2018
                                        </td>
                                        <td>
                                            James Harold
                                            <p>jamesharold@email.com</p>
                                        </td>
                                        <td>
                                            Mardi Himal Trek
                                        </td>
                                        <td>
                                                <span class="badge badge-success">Invoiced</span>
                                        </td>
                                        <td>+100 98383 038</td>
                                        <td>22-08-2018</td>
                                        <td><div class="publish">
                                            <a class="btn add-btn" href="#">
                                                View
                                            </a>
                                        </div></td>
                                        
                                    </tr>

                                    <tr>
                                        <td>
                                            12-08-2018
                                        </td>
                                        <td>
                                            James Harold
                                            <p>jamesharold@email.com</p>
                                        </td>
                                        <td>
                                            Mardi Himal Trek
                                        </td>
                                        <td>
                                                <span class="badge badge-success">Invoiced</span>
                                        </td>
                                        <td>+100 98383 038</td>
                                        <td>22-08-2018</td>
                                        <td><div class="publish">
                                            <a class="btn add-btn" href="#"> 
                                                View
                                            </a>
                                        </div></td>
                                        
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
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
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
<?php require_once('scripts.php');?>

</body>
</html>
