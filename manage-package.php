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
                                <div class="col-lg-9">
                                    <h5>Manage packages</h5>
                                </div>
                                <div class="col-lg-3">
                                    <a class="btn add-btn" href="create-package.html" role="button"><i class="fas fa-plus"></i> Add new
                                        package</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="table-container">
                        <div class="table-responsive">
                            <table class="table" id="example">
                                <thead class="table-light-bg">
                                    <tr>
                                        <th scope="col">Image</th>
                                        <th scope="col">Package <i class="fas fa-chevron-down"></i></th>
                                        <th scope="col">Duration <i class="fas fa-chevron-down"></i></th>
                                        <th scope="col">Price <span>($)</span> <i class="fas fa-chevron-down"></i></th>
                                        <th scope="col">Type</th>
                                        <th scope="col">Upcoming departure <i class="fas fa-chevron-up"></i></th>
                                        <th scope="col">Bookings <i class="fas fa-chevron-down"></i></th>
                                        <th scope="col">Pre-bookings <i class="fas fa-chevron-down"></i></th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="table-image">
                                                <img src="img/signup-image.jpg" alt="">
                                            </div>
                                        </td>
                                        <td>Annapurna Circuit</td>
                                        <td>8 days/7 nights</td>
                                        <td>1400</td>
                                        <td>Multiday tours</td>
                                        <td>12-08-2018</td>
                                        <td> <a href="#" class="badge badge-success">15</a></td>
                                        <td> <a href="#" class="badge badge-primary">10</a> </td>
                                        <td>
                                            <div class="ellipsis-btn">
                                                <a href="#" class="btn dropdown-toggle" id="dropdownMenuButton"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                    <i class="fas fa-ellipsis-v"></i>

                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="#">View</a>
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="table-image">
                                                <img src="img/signup-image.jpg" alt="">
                                            </div>
                                        </td>
                                        <td>Annapurna Circuit</td>
                                        <td>8 days/7 nights</td>
                                        <td>1400</td>
                                        <td>Multiday tours</td>
                                        <td>12-08-2018</td>
                                        <td> <a href="#" class="badge badge-success">15</a></td>
                                        <td> <a href="#" class="badge badge-primary">10</a> </td>
                                        <td>
                                            <div class="ellipsis-btn">
                                                <a href="#" class="btn dropdown-toggle" id="dropdownMenuButton"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                    <i class="fas fa-ellipsis-v"></i>

                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="#">View</a>
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>

                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="table-image">
                                                <img src="img/signup-image.jpg" alt="">
                                            </div>
                                        </td>
                                        <td>Mardi Himal Trek</td>
                                        <td>8 days/7 nights</td>
                                        <td>1400</td>
                                        <td>Multiday tours</td>
                                        <td>12-08-2018</td>
                                        <td> <a href="#" class="badge badge-success">15</a></td>
                                        <td> <a href="#" class="badge badge-primary">10</a> </td>
                                        <td>
                                            <div class="ellipsis-btn">
                                                <a href="#" class="btn dropdown-toggle" id="dropdownMenuButton"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                    <i class="fas fa-ellipsis-v"></i>

                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="#">View details</a>
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>

                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="table-image">
                                                <img src="img/signup-image.jpg" alt="">
                                            </div>
                                        </td>
                                        <td>14 days manang-mustang</td>
                                        <td>8 days/7 nights</td>
                                        <td>1400</td>
                                        <td>Multiday tours</td>
                                        <td>12-08-2018</td>
                                        <td> <a href="#" class="badge badge-success">15</a></td>
                                        <td> <a href="#" class="badge badge-primary">10</a> </td>
                                        <td>
                                            <div class="ellipsis-btn">
                                                <a href="#" class="btn dropdown-toggle" id="dropdownMenuButton"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                    <i class="fas fa-ellipsis-v"></i>

                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="#">View</a>
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>

                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="table-image">
                                                <img src="img/signup-image.jpg" alt="">
                                            </div>
                                        </td>
                                        <td>Annapurna Circuit</td>
                                        <td>8 days/7 nights</td>
                                        <td>1400</td>
                                        <td>Multiday tours</td>
                                        <td>12-08-2018</td>
                                        <td> <a href="#" class="badge badge-success">15</a></td>
                                        <td> <a href="#" class="badge badge-primary">10</a> </td>
                                        <td>
                                            <div class="ellipsis-btn">
                                                <a href="#" class="btn dropdown-toggle" id="dropdownMenuButton"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                    <i class="fas fa-ellipsis-v"></i>

                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="#">View</a>
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
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
<?php require_once('scripts.php');?>

</body>
</html>
