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
                        <li class="breadcrumb-item active" aria-current="page">Create package</li>
                    </ol>
                </nav>
            </div>





            <div class="manage-package-block">
                <div class="white-box">
                    <div class="table-title">
                        <div class="container-fluid px-0">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h5>Create packages</h5>
                                </div>

                            </div>
                        </div>

                    </div>

                    <!-- Tabs -->
                    <div class="tabs-block">
                        <div class="top-tab">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#general" role="tab"
                                        aria-controls="home" aria-selected="true"><i class="fas fa-align-justify"></i>
                                        General</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#itinerary" role="tab"
                                        aria-controls="profile" aria-selected="false"><i class="fas fa-calendar-check"></i>
                                        Itinerary</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#inlcudes" role="tab"
                                        aria-controls="contact" aria-selected="false"><i class="fas fa-check-circle"></i>
                                        Includes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#excludes" role="tab"
                                        aria-controls="contact" aria-selected="false"><i class="fas fa-times-circle"></i>
                                        Excludes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#gallery" role="tab"
                                        aria-controls="contact" aria-selected="false"><i class="fas fa-image"></i>
                                        Gallery</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#departure" role="tab"
                                        aria-controls="contact" aria-selected="false"><i class="fas fa-calendar-alt"></i>
                                        Departure schedule</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#booking" role="tab"
                                        aria-controls="contact" aria-selected="false"><i class="fas fa-check-double"></i>
                                        Booking</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#prebooking" role="tab"
                                        aria-controls="contact" aria-selected="false"><i class="fas fa-check"></i>
                                        Pre-booking</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#reviews" role="tab"
                                        aria-controls="contact" aria-selected="false"><i class="fas fa-user"></i>
                                        Reviews</a>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
                                <div class="tab-content-wrapper">
                                    <div class="heading">
                                        <h5><i class="fas fa-align-justify"></i> General</h5>
                                    </div>
                                    <div class="main-content">
                                        <form>
                                            <div class="form-modified">
                                                <div class="form-group row align-items-center">

                                                    <label for="staticEmail" class="col-sm-2 col-form-label">Enter
                                                        destination</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="inputPassword"
                                                            placeholder="Destination name">
                                                    </div>
                                                </div>
                                                <div class="form-group row align-items-center">
                                                    <label for="inputPassword" class="col-sm-2 col-form-label">Teaser
                                                        title</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="inputPassword"
                                                            placeholder="Enter teaser title">
                                                    </div>
                                                </div>

                                                <div class="form-group row align-items-center">
                                                    <label for="inputPassword" class="col-sm-2 col-form-label">Tour
                                                        type</label>
                                                    <div class="col-sm-10">
                                                        <select class="selectpicker">
                                                            <option selected="">Select tour type</option>
                                                            <option value="1">Day tours</option>
                                                            <option value="2">Multiday tours</option>
                                                            <option value="3">Group tours</option>
                                                            <option value="3">Private tours</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group row align-items-center">
                                                    <label for="inputPassword" class="col-sm-2 col-form-label">Difficulty
                                                        level</label>
                                                    <div class="col-sm-10">
                                                        <select class="selectpicker">
                                                            <option selected="">Select difficulty level</option>
                                                            <option value="1">Hard</option>
                                                            <option value="2">Average</option>
                                                            <option value="3">Normal</option>
                                                            <option value="3">Easy</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group row align-items-center">
                                                    <label for="inputPassword" class="col-sm-2 col-form-label">Altitude</label>
                                                    <div class="col-sm-5">
                                                        <input type="text" class="form-control" id="inputPassword"
                                                            placeholder="Altitude in meter">
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <input type="text" class="form-control" id="inputPassword"
                                                            placeholder="Altitude in feet">
                                                    </div>
                                                </div>
                                            </div>

                                        </form>
                                    </div>

                                    <div class="heading">
                                        <h5><i class="fas fa-dollar-sign"></i> Price and Duration</h5>
                                    </div>
                                    <div class="main-content">
                                        <form>
                                            <div class="form-modified">
                                                <div class="form-group row align-items-center">

                                                    <label for="staticEmail" class="col-sm-2 col-form-label">Suitable
                                                        seasons</label>
                                                    <div class="col-sm-10">
                                                        <select class="selectpicker">
                                                            <option selected="">Select suitable seasons</option>
                                                            <option value="1">Day tours</option>
                                                            <option value="2">Multiday tours</option>
                                                            <option value="3">Group tours</option>
                                                            <option value="3">Private tours</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row align-items-center">
                                                    <label for="inputPassword" class="col-sm-2 col-form-label">Min-Max
                                                        people</label>
                                                    <div class="col-sm-5">
                                                        <input type="text" class="form-control" id="inputPassword"
                                                            placeholder="Minimum">
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <input type="text" class="form-control" id="inputPassword"
                                                            placeholder="Maximum">
                                                    </div>
                                                </div>

                                                <div class="form-group row align-items-center">
                                                    <label for="inputPassword" class="col-sm-2 col-form-label">Duration</label>
                                                    <div class="col-sm-5">
                                                        <input type="text" class="form-control" id="inputPassword"
                                                            placeholder="Nights">
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <input type="text" class="form-control" id="inputPassword"
                                                            placeholder="Days">
                                                    </div>
                                                </div>

                                                <div class="form-group row align-items-center">
                                                    <label for="inputPassword" class="col-sm-2 col-form-label">Price
                                                        basis</label>
                                                    <div class="col-sm-10">
                                                        <select class="selectpicker">
                                                            <option selected="">Select price basis</option>
                                                            <option value="1">Twin sharing basis</option>
                                                            <option value="2">Average</option>
                                                            <option value="3">Normal</option>
                                                            <option value="3">Easy</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group row align-items-center">
                                                    <label for="inputPassword" class="col-sm-2 col-form-label">Desinations
                                                        covered by this trek</label>
                                                    <div class="col-sm-10">
                                                        <select class="js-example-basic-multiple" name="states[]"
                                                            multiple="multiple" style="width:100%">

                                                            <option value="1">Annapurna region</option>
                                                            <option value="2">Tilicho</option>
                                                            <option value="3">Manang-mustang region</option>
                                                            <option value="3">Shey-Phoksundo</option>
                                                        </select>
                                                    </div>
                                                </div>


                                            </div>

                                        </form>
                                    </div>

                                    <div class="heading">
                                        <h5><i class="fas fa-exclamation-circle"></i> Important notes</h5>
                                    </div>
                                    <div class="main-content">
                                        <form>
                                            <div class="form-modified">
                                                <div class="form-group row align-items-center">

                                                    <label for="staticEmail" class="col-sm-2 col-form-label">Highlights</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="inputPassword"
                                                            placeholder="Write some of the highlights of this package">
                                                    </div>
                                                </div>

                                                <div class="form-group row">

                                                    <label for="staticEmail" class="col-sm-2 col-form-label">Cancelation
                                                        info</label>
                                                    <div class="col-sm-10">
                                                        <textarea name="" id="" placeholder="Write cancelation information"></textarea>
                                                    </div>
                                                </div>


                                                <div class="form-group row">

                                                    <label for="staticEmail" class="col-sm-2 col-form-label">Extra
                                                        info</label>
                                                    <div class="col-sm-10">
                                                        <textarea name="" id="" placeholder="Write extra information"></textarea>
                                                    </div>
                                                </div>

                                                <div class="content-block">
                                                    <div class="row">
                                                        <div class="col-md-10 offset-md-2">
                                                            <button class="btn default-btn save-btn" type="submit">Save</button>
                                                        </div>
                                                    </div>

                                                </div>


                                            </div>


                                        </form>
                                    </div>
                                </div>


                            </div>
                            <div class="tab-pane fade" id="itinerary" role="tabpanel" aria-labelledby="itinerary-tab">
                                <div class="itinerary-tab-header">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#day1"
                                                role="tab" aria-controls="home" aria-selected="true">Day 1</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#day2" role="tab"
                                                aria-controls="profile" aria-selected="false">Day 2</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#day3" role="tab"
                                                aria-controls="contact" aria-selected="false">Day 3</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="day1" role="tabpanel"
                                            aria-labelledby="home-tab">
                                            <div class="container-fluid">
                                                <div class="content-block">
                                                    <div class="row align-content-center">
                                                        <div class="col-md-10">
                                                            <form>
                                                                <div class="form-modified">
                                                                    <div class="form-group row align-items-center">

                                                                        <label for="staticEmail" class="col-sm-2 col-form-label">
                                                                            Segment title</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" class="form-control" id="inputPassword"
                                                                                placeholder="Enter segment title">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row align-items-center">

                                                                        <label for="staticEmail" class="col-sm-2 col-form-label">
                                                                            Title</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" class="form-control" id="inputPassword"
                                                                                placeholder="Enter title">
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group row align-items-center">

                                                                        <label for="staticEmail" class="col-sm-2 col-form-label">Description
                                                                        </label>
                                                                        <div class="col-sm-10">
                                                                            <textarea name="" id="" placeholder="Enter description"></textarea>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group row align-items-center">

                                                                        <label for="staticEmail" class="col-sm-2 col-form-label">Duration
                                                                        </label>
                                                                        <div class="col-sm-10">
                                                                            <textarea name="" id="" placeholder="eg. 8 hours"></textarea>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group row align-items-center">
                                                                        <label for="inputPassword" class="col-sm-2 col-form-label">Altitude</label>
                                                                        <div class="col-sm-5">
                                                                            <input type="text" class="form-control" id="inputPassword"
                                                                                placeholder="Altitude in meter">
                                                                        </div>
                                                                        <div class="col-sm-5">
                                                                            <input type="text" class="form-control" id="inputPassword"
                                                                                placeholder="Altitude in feet">
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group row">
                                                                        <label for="inputPassword" class="col-sm-2 col-form-label">Add
                                                                            image*</label>
                                                                        <div class="col-md-2">
                                                                            <div class="itinerary-img-container">
                                                                                <img src="img/image_placeholder.jpg"
                                                                                    alt="">
                                                                                <div class="upload-btn-wrapper">
                                                                                    <button class="btn add-btn">Select
                                                                                        image</button>
                                                                                    <input type="file" name="myfile" />
                                                                                </div>


                                                                            </div>

                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <div class="itinerary-img-container">
                                                                                <img src="img/image_placeholder.jpg"
                                                                                    alt="">

                                                                                <div class="row no-gutters">
                                                                                    <div class="col-sm-6">
                                                                                        <div class="remove-btn-wrapper">
                                                                                            <button type="button" class="btn btn-xs default-btn">
                                                                                                <i class="fas fa-times"></i>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-6">
                                                                                        <div class="change-btn-wrapper">
                                                                                            <button type="button" class="btn btn-xs default-btn">
                                                                                                <i class="fas fa-pen"></i>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>




                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <div class="itinerary-img-container">
                                                                                <img src="img/image_placeholder.jpg"
                                                                                    alt="">
                                                                                <div class="upload-btn-wrapper">
                                                                                    <button class="btn add-btn">Select
                                                                                        image</button>
                                                                                    <input type="file" name="myfile" />
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <div class="itinerary-img-container">
                                                                                <img src="img/image_placeholder.jpg"
                                                                                    alt="">
                                                                                <div class="upload-btn-wrapper">
                                                                                    <button class="btn add-btn">Select
                                                                                        image</button>
                                                                                    <input type="file" name="myfile" />
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <div class="itinerary-img-container">
                                                                                <img src="img/image_placeholder.jpg"
                                                                                    alt="">
                                                                                <div class="upload-btn-wrapper">
                                                                                    <button class="btn add-btn">Select
                                                                                        image</button>
                                                                                    <input type="file" name="myfile" />
                                                                                </div>

                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                    <div class="form-group row align-items-center">

                                                                        <label for="staticEmail" class="col-sm-2 col-form-label">
                                                                            Attractions</label>
                                                                        <div class="col-sm-10">
                                                                            <button type="button" class="btn add-btn"
                                                                                data-toggle="modal" data-target="#exampleModal">
                                                                                <i class="fas fa-plus"></i> Add
                                                                                attractions
                                                                            </button>
                                                                        </div>


                                                                    </div>

                                                                    <div class="form-group row">
                                                                        <div class="col-sm-10 offset-2">
                                                                            <div class="attraction-wrapper">
                                                                                <div class="attraction-title">
                                                                                    <div class="row align-items-center">
                                                                                        <div class="col-sm-9">
                                                                                            <h5>Paraglyding in pokhara</h5>
                                                                                        </div>
                                                                                        <div class="col-sm-3">
                                                                                            <div class="attraction-action">
                                                                                                <button type="button"
                                                                                                    class="btn btn-outline-light"
                                                                                                    data-toggle="modal"
                                                                                                    data-target="#viewAttraction">
                                                                                                    <i class="far fa-eye"></i>
                                                                                                </button>
                                                                                                <button type="button"
                                                                                                    class="btn btn-outline-light">
                                                                                                    <i class="fas fa-pen"></i>
                                                                                                </button>
                                                                                                <button type="button"
                                                                                                    class="btn btn-outline-light">
                                                                                                    <i class="fas fa-trash-alt"></i>
                                                                                                </button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                                <div class="attraction-content">
                                                                                    <p>You'll enjoy mesmerizing view of
                                                                                        the city and experience
                                                                                        paraglying.</p>

                                                                                </div>
                                                                            </div>


                                                                        </div>


                                                                    </div>






                                                                </div>

                                                            </form>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <a class="btn btn-sm add-btn" href="#" role="button"
                                                                data-toggle="modal" data-target="#addSegment"><i class="fas fa-plus"></i>
                                                                Add segment
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="tab-pane fade" id="day2" role="tabpanel" aria-labelledby="profile-tab">...</div>
                                        <div class="tab-pane fade" id="day3" role="tabpanel" aria-labelledby="contact-tab">...</div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="inlcudes" role="tabpanel" aria-labelledby="inlcudes-tab">
                                <div class="container-fluid">
                                    <div class="content-block">
                                        <div class="row align-content-center">
                                            <div class="col-md-10">
                                                <form>
                                                    <div class="form-modified">
                                                        <div class="form-group row">

                                                            <label for="staticEmail" class="col-sm-2 col-form-label">
                                                                Includes</label>
                                                            <div class="col-sm-10">
                                                                <textarea name="" id="" placeholder="eg. Necessary paperworks and all government papers."></textarea>
                                                            </div>
                                                            
                                                        </div>

                                                        




                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-md-2">
                                                <a class="btn btn-sm add-btn" href="#" role="button">
                                                    Save
                                                </a>
                                            </div>

                                            <div class="col-md-12">
                                                    <div class="form-group row">
                                                            <div class="col-lg-10 offset-lg-2">
                                                                <div class="includes-list">
                                                                    <div class="includes-list-item">
                                                                        <div class="row">
                                                                            <div class="col-lg-9">
                                                                                <p>Daily seasonal fresh fruits as per
                                                                                    the availability</p>
                                                                            </div>
                                                                            <div class="col-lg-3">
                                                                                <div class="includes-action">

                                                                                    <button type="button" class="btn">
                                                                                        <i class="fas fa-pen"></i>
                                                                                    </button>
                                                                                    <button type="button" class="btn"
                                                                                        data-toggle="modal" data-target="#delete">
                                                                                        <i class="fas fa-trash-alt"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="includes-list-item">
                                                                        <div class="row">
                                                                            <div class="col-lg-9">
                                                                                <p>Necessary paper works, all
                                                                                    government and local taxes</p>
                                                                            </div>
                                                                            <div class="col-lg-3">
                                                                                <div class="includes-action">

                                                                                    <button type="button" class="btn">
                                                                                        <i class="fas fa-pen"></i>
                                                                                    </button>
                                                                                    <button type="button" class="btn">
                                                                                        <i class="fas fa-trash-alt"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="includes-list-item">
                                                                        <div class="row">
                                                                            <div class="col-lg-9">
                                                                                <p>Airport pickup and drop-off (on
                                                                                    request) services in a private
                                                                                    vehicle</p>
                                                                            </div>
                                                                            <div class="col-lg-3">
                                                                                <div class="includes-action">

                                                                                    <button type="button" class="btn">
                                                                                        <i class="fas fa-pen"></i>
                                                                                    </button>
                                                                                    <button type="button" class="btn">
                                                                                        <i class="fas fa-trash-alt"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="includes-list-item">
                                                                        <div class="row">
                                                                            <div class="col-lg-9">
                                                                                <p>Down jackets, sleeping bags and
                                                                                    duffel bags (down jackets, sleeping
                                                                                    bags and duffel bags are to be
                                                                                    returned after the completion of
                                                                                    the trip</p>
                                                                            </div>
                                                                            <div class="col-lg-3">
                                                                                <div class="includes-action">

                                                                                    <button type="button" class="btn">
                                                                                        <i class="fas fa-pen"></i>
                                                                                    </button>
                                                                                    <button type="button" class="btn">
                                                                                        <i class="fas fa-trash-alt"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="excludes" role="tabpanel" aria-labelledby="excludes-tab">
                                <div class="container-fluid">
                                    <div class="content-block">
                                        <div class="row align-content-center">
                                            <div class="col-md-10">
                                                <form>
                                                    <div class="form-modified">
                                                        <div class="form-group row">

                                                            <label for="staticEmail" class="col-sm-2 col-form-label">
                                                                Excludes</label>
                                                            <div class="col-sm-10">
                                                                <textarea name="" id="" placeholder="eg. Necessary paperworks and all government papers."></textarea>
                                                            </div>
                                                            <!-- <div class="col-sm-2">
                                                                        <select class="selectpicker">
                                                                            <option selected="">Select icon</option>
                                                                            <option value="1" data-icon="glyphicon-picture">
                                                                                Plane
                                                                            </option>
                                                                            <option value="2">
        
                                                                            </option>
                                                                            <option value="3">Group tours</option>
                                                                            <option value="3">Private tours</option>
                                                                        </select>
                                                                    </div> -->
                                                        </div>

                                                        <div class="form-group row">
                                                            <div class="col-sm-10 offset-2">
                                                                <div class="excludes">
                                                                    <div class="includes-list">
                                                                        <div class="includes-list-item">
                                                                            <div class="row">
                                                                                <div class="col-lg-9">
                                                                                    <p>Daily seasonal fresh fruits as
                                                                                        per the availability</p>
                                                                                </div>
                                                                                <div class="col-lg-3">
                                                                                    <div class="includes-action">

                                                                                        <button type="button" class="btn">
                                                                                            <i class="fas fa-pen"></i>
                                                                                        </button>
                                                                                        <button type="button" class="btn">
                                                                                            <i class="fas fa-trash-alt"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="includes-list-item">
                                                                            <div class="row">
                                                                                <div class="col-lg-9">
                                                                                    <p>Necessary paper works, all
                                                                                        government and local taxes</p>
                                                                                </div>
                                                                                <div class="col-lg-3">
                                                                                    <div class="includes-action">

                                                                                        <button type="button" class="btn">
                                                                                            <i class="fas fa-pen"></i>
                                                                                        </button>
                                                                                        <button type="button" class="btn">
                                                                                            <i class="fas fa-trash-alt"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="includes-list-item">
                                                                            <div class="row">
                                                                                <div class="col-lg-9">
                                                                                    <p>Airport pickup and drop-off (on
                                                                                        request) services in a private
                                                                                        vehicle</p>
                                                                                </div>
                                                                                <div class="col-lg-3">
                                                                                    <div class="includes-action">

                                                                                        <button type="button" class="btn">
                                                                                            <i class="fas fa-pen"></i>
                                                                                        </button>
                                                                                        <button type="button" class="btn">
                                                                                            <i class="fas fa-trash-alt"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="includes-list-item">
                                                                            <div class="row">
                                                                                <div class="col-lg-9">
                                                                                    <p>Down jackets, sleeping bags and
                                                                                        duffel bags (down jackets,
                                                                                        sleeping bags and duffel bags
                                                                                        are to be returned after the
                                                                                        completion of the trip</p>
                                                                                </div>
                                                                                <div class="col-lg-3">
                                                                                    <div class="includes-action">

                                                                                        <button type="button" class="btn">
                                                                                            <i class="fas fa-pen"></i>
                                                                                        </button>
                                                                                        <button type="button" class="btn">
                                                                                            <i class="fas fa-trash-alt"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>




                                                    </div>

                                                </form>
                                            </div>
                                            <div class="col-md-2">
                                                <a class="btn btn-sm add-btn" href="#" role="button">
                                                    Save
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="gallery" role="tabpanel" aria-labelledby="gallery-tab">
                                <div class="container-fluid">
                                    <div class="content-block">
                                        <div class="row align-content-center">
                                            <div class="col-md-10">
                                                <form>
                                                    <div class="form-modified">
                                                        <div class="form-group row">

                                                            <label for="staticEmail" class="col-sm-2 col-form-label">
                                                                Gallery</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="inputPassword"
                                                                    placeholder="Enter segment title">
                                                            </div>

                                                        </div>






                                                    </div>

                                                </form>

                                                

                                            </div>
                                            <div class="col-md-2">
                                                <a class="btn btn-sm add-btn" href="#" data-toggle="modal" data-target="#browseImage"><i
                                                        class="fas fa-plus"></i>
                                                    Browse
                                                </a>
                                            </div>

                                            <div class="col-md-12">
                                                    <div class="content-block">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <div class="gallery-image-container">
                                                                        <img src="img/travel-2.jpg" alt="">
                                                                        <div class="overlay">
                                                                            <div class="middle">
                                                                                <button type="button" class="btn btn-primary">
                                                                                    <i class="fas fa-pen"></i>
                                                                                </button>
        
                                                                                <button type="button" class="btn btn-danger">
                                                                                    <i class="fas fa-trash-alt"></i>
                                                                                </button>
        
                                                                                <button type="button" class="btn btn-success">
                                                                                    <i class="fas fa-image"></i>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
        
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="gallery-image-container">
                                                                        <img src="img/travel-2.jpg" alt="">
                                                                        <div class="overlay">
                                                                            <div class="middle">
                                                                                <button type="button" class="btn btn-primary">
                                                                                    <i class="fas fa-pen"></i>
                                                                                </button>
        
                                                                                <button type="button" class="btn btn-danger">
                                                                                    <i class="fas fa-trash-alt"></i>
                                                                                </button>
        
                                                                                <button type="button" class="btn btn-success">
                                                                                    <i class="fas fa-image"></i>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="gallery-image-container">
                                                                        <img src="img/travel-2.jpg" alt="">
                                                                        <div class="overlay">
                                                                            <div class="middle">
                                                                                <button type="button" class="btn btn-primary">
                                                                                    <i class="fas fa-pen"></i>
                                                                                </button>
        
                                                                                <button type="button" class="btn btn-danger">
                                                                                    <i class="fas fa-trash-alt"></i>
                                                                                </button>
        
                                                                                <button type="button" class="btn btn-success">
                                                                                    <i class="fas fa-image"></i>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="departure" role="tabpanel" aria-labelledby="departure-tab">
                                <div class="container-fluid">
                                    <div class="content-block">
                                        <div class="row align-content-center">
                                            <div class="col-md-10">
                                                <form>
                                                    <div class="form-modified">
                                                        <div class="form-group row align-items-center">

                                                            <label for="staticEmail" class="col-sm-2 col-form-label">
                                                                Quota</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="inputPassword"
                                                                    placeholder="Enter segment title">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row align-items-center">

                                                            <label for="staticEmail" class="col-sm-2 col-form-label">
                                                                Departure date</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="inputPassword"
                                                                    placeholder="Enter title">
                                                            </div>
                                                        </div>

                                                        <div class="form-group row align-items-center">

                                                            <label for="staticEmail" class="col-sm-2 col-form-label">
                                                                Price</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="inputPassword"
                                                                    placeholder="$">
                                                            </div>
                                                        </div>


                                                        <div class="form-group row align-items-center">

                                                            <label for="staticEmail" class="col-sm-2 col-form-label">Note
                                                            </label>
                                                            <div class="col-sm-10">
                                                                <textarea name="" id="" placeholder="eg. 8 hours"></textarea>
                                                            </div>
                                                        </div>


                                                        <div class="content-block">
                                                            <div class="row">
                                                                <div class="col-md-10 offset-md-2">
                                                                    <button class="btn default-btn save-btn" type="submit">Save</button>
                                                                </div>
                                                            </div>

                                                        </div>





                                                    </div>

                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="booking" role="tabpanel" aria-labelledby="booking-tab">
                                <div class="booking-table-container">
                                    <div class="table-responsive">
                                        <table class="table" id="example">
                                            <thead class="table-light-bg">
                                                <tr>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Departure date <i class="fas fa-chevron-down"></i></th>
                                                    <th scope="col">Country <i class="fas fa-chevron-down"></i></th>
                                                    <th scope="col">Price <span>($)</span> <i class="fas fa-chevron-down"></i></th>
                                                    <th scope="col">Contact</th>
                                                    <th scope="col">Booking date <i class="fas fa-chevron-up"></i></th>
                                                    <th scope="col">Payment <i class="fas fa-chevron-down"></i></th>

                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="review-image">
                                                            <img src="img/user.jpg" alt="">
                                                        </div>

                                                        <div class="review-name">
                                                            James Harold
                                                            <p>jamesharold@email.com</p>
                                                        </div>

                                                    </td>
                                                    <td>12-09-2018
                                                        <p>12:08 pm</p>

                                                    </td>
                                                    <td>England</td>
                                                    <td>1400</td>
                                                    <td>+190 3993 494</td>
                                                    <td>12-08-2018</td>
                                                    <td>Stripe

                                                    </td>

                                                    <td>
                                                        <div class="ellipsis-btn">
                                                            <a href="#" class="btn dropdown-toggle" id="dropdownMenuButton"
                                                                data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="true">
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
                                                        <div class="review-image">
                                                            <img src="img/user.jpg" alt="">
                                                        </div>

                                                        <div class="review-name">
                                                            James Harold
                                                            <p>jamesharold@email.com</p>
                                                        </div>
                                                    </td>
                                                    <td>12-09-2018
                                                        <p>12:08 pm</p>

                                                    </td>
                                                    <td>England</td>
                                                    <td>1400</td>
                                                    <td>+190 3993 494</td>
                                                    <td>12-08-2018</td>
                                                    <td>Stripe

                                                    </td>

                                                    <td>
                                                        <div class="ellipsis-btn">
                                                            <a href="#" class="btn dropdown-toggle" id="dropdownMenuButton"
                                                                data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="true">
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
                                                        <div class="review-image">
                                                            <img src="img/user.jpg" alt="">
                                                        </div>

                                                        <div class="review-name">
                                                            James Harold
                                                            <p>jamesharold@email.com</p>
                                                        </div>
                                                    </td>
                                                    <td>12-09-2018
                                                        <p>12:08 pm</p>

                                                    </td>
                                                    <td>England</td>
                                                    <td>1400</td>
                                                    <td>+190 3993 494</td>
                                                    <td>12-08-2018</td>
                                                    <td>Stripe

                                                    </td>

                                                    <td>
                                                        <div class="ellipsis-btn">
                                                            <a href="#" class="btn dropdown-toggle" id="dropdownMenuButton"
                                                                data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="true">
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
                                                        <div class="review-image">
                                                            <img src="img/user.jpg" alt="">
                                                        </div>

                                                        <div class="review-name">
                                                            James Harold
                                                            <p>jamesharold@email.com</p>
                                                        </div>
                                                    </td>
                                                    <td>12-09-2018
                                                        <p>12:08 pm</p>

                                                    </td>
                                                    <td>England</td>
                                                    <td>1400</td>
                                                    <td>+190 3993 494</td>
                                                    <td>12-08-2018</td>
                                                    <td>Stripe

                                                    </td>

                                                    <td>
                                                        <div class="ellipsis-btn">
                                                            <a href="#" class="btn dropdown-toggle" id="dropdownMenuButton"
                                                                data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="true">
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
                            </div>
                            <div class="tab-pane fade" id="prebooking" role="tabpanel" aria-labelledby="prebooking-tab">
                                <div class="booking-table-container">
                                    <div class="table-responsive">
                                        <table class="table" id="example">
                                            <thead class="table-light-bg">
                                                <tr>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Departure date <i class="fas fa-chevron-down"></i></th>
                                                    <th scope="col">Country <i class="fas fa-chevron-down"></i></th>
                                                    <th scope="col">Price <span>($)</span> <i class="fas fa-chevron-down"></i></th>
                                                    <th scope="col">Contact</th>
                                                    <th scope="col">Booking date <i class="fas fa-chevron-up"></i></th>
                                                    <th scope="col">Payment <i class="fas fa-chevron-down"></i></th>

                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="review-image">
                                                            <img src="img/user.jpg" alt="">
                                                        </div>

                                                        <div class="review-name">
                                                            James Harold
                                                            <p>jamesharold@email.com</p>
                                                        </div>
                                                    </td>
                                                    <td>12-09-2018
                                                        <p>12:08 pm</p>

                                                    </td>
                                                    <td>England</td>
                                                    <td>1400</td>
                                                    <td>+190 3993 494</td>
                                                    <td>12-08-2018</td>
                                                    <td>Stripe

                                                    </td>

                                                    <td>
                                                        <div class="ellipsis-btn">
                                                            <a href="#" class="btn dropdown-toggle" id="dropdownMenuButton"
                                                                data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="true">
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
                                                        <div class="review-image">
                                                            <img src="img/user.jpg" alt="">
                                                        </div>

                                                        <div class="review-name">
                                                            James Harold
                                                            <p>jamesharold@email.com</p>
                                                        </div>
                                                    </td>
                                                    <td>12-09-2018
                                                        <p>12:08 pm</p>

                                                    </td>
                                                    <td>England</td>
                                                    <td>1400</td>
                                                    <td>+190 3993 494</td>
                                                    <td>12-08-2018</td>
                                                    <td>Stripe

                                                    </td>

                                                    <td>
                                                        <div class="ellipsis-btn">
                                                            <a href="#" class="btn dropdown-toggle" id="dropdownMenuButton"
                                                                data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="true">
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
                                                        <div class="review-image">
                                                            <img src="img/user.jpg" alt="">
                                                        </div>

                                                        <div class="review-name">
                                                            James Harold
                                                            <p>jamesharold@email.com</p>
                                                        </div>
                                                    </td>
                                                    <td>12-09-2018
                                                        <p>12:08 pm</p>

                                                    </td>
                                                    <td>England</td>
                                                    <td>1400</td>
                                                    <td>+190 3993 494</td>
                                                    <td>12-08-2018</td>
                                                    <td>Stripe

                                                    </td>

                                                    <td>
                                                        <div class="ellipsis-btn">
                                                            <a href="#" class="btn dropdown-toggle" id="dropdownMenuButton"
                                                                data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="true">
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
                                                        <div class="review-image">
                                                            <img src="img/user.jpg" alt="">
                                                        </div>

                                                        <div class="review-name">
                                                            James Harold
                                                            <p>jamesharold@email.com</p>
                                                        </div>
                                                    </td>
                                                    <td>12-09-2018
                                                        <p>12:08 pm</p>

                                                    </td>
                                                    <td>England</td>
                                                    <td>1400</td>
                                                    <td>+190 3993 494</td>
                                                    <td>12-08-2018</td>
                                                    <td>Stripe

                                                    </td>

                                                    <td>
                                                        <div class="ellipsis-btn">
                                                            <a href="#" class="btn dropdown-toggle" id="dropdownMenuButton"
                                                                data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="true">
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
                            </div>

                            <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="review-tab">
                                <div class="booking-table-container">
                                    <div class="table-responsive">
                                        <table class="table" id="example">
                                            <thead class="table-light-bg">
                                                <tr>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Title<i class="fas fa-chevron-down"></i></th>
                                                    <th scope="col">Review <i class="fas fa-chevron-down"></i></th>
                                                    <th scope="col">Country <i class="fas fa-chevron-down"></i></th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Rating <i class="fas fa-chevron-up"></i></th>
                                                    <th scope="col">Publish <i class="fas fa-chevron-down"></i></th>

                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="review-image">
                                                            <img src="img/user.jpg" alt="">
                                                        </div>
                                                        <div class="review-name">
                                                            <h5> James Harold</h5>
                                                            <p> James Harold</p>
                                                        </div>


                                                    </td>
                                                    <td>
                                                        Excellent!

                                                    </td>
                                                    <td>Very beautiful trek but...</td>
                                                    <td>England</td>
                                                    <td>12-08-2018</td>
                                                    <td>
                                                        <div class="rating-block">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="publish">
                                                            <a class="btn add-btn" href="#" role="button"><i class="fas fa-check"></i>
                                                                Publish
                                                            </a>
                                                        </div>



                                                    </td>

                                                    <td>
                                                        <div class="ellipsis-btn">
                                                            <a href="#" class="btn dropdown-toggle" id="dropdownMenuButton"
                                                                data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="true">
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
                                                        <div class="review-image">
                                                            <img src="img/user.jpg" alt="">
                                                        </div>
                                                        <div class="review-name">
                                                            <h5> James Harold</h5>
                                                            <p> James Harold</p>
                                                        </div>


                                                    </td>
                                                    <td>
                                                        Excellent!

                                                    </td>
                                                    <td>Very beautiful trek but...</td>
                                                    <td>England</td>
                                                    <td>12-08-2018</td>
                                                    <td>
                                                        <div class="rating-block">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="publish">
                                                            <a class="btn add-btn" href="#" role="button"><i class="fas fa-check"></i>
                                                                Publish
                                                            </a>
                                                        </div>



                                                    </td>

                                                    <td>
                                                        <div class="ellipsis-btn">
                                                            <a href="#" class="btn dropdown-toggle" id="dropdownMenuButton"
                                                                data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="true">
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
                                                        <div class="review-image">
                                                            <img src="img/user.jpg" alt="">
                                                        </div>
                                                        <div class="review-name">
                                                            <h5> James Harold</h5>
                                                            <p> James Harold</p>
                                                        </div>


                                                    </td>
                                                    <td>
                                                        Excellent!

                                                    </td>
                                                    <td>Very beautiful trek but...</td>
                                                    <td>England</td>
                                                    <td>12-08-2018</td>
                                                    <td>
                                                        <div class="rating-block">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="publish">
                                                            <a class="btn add-btn" href="#" role="button"><i class="fas fa-check"></i>
                                                                Publish
                                                            </a>
                                                        </div>



                                                    </td>

                                                    <td>
                                                        <div class="ellipsis-btn">
                                                            <a href="#" class="btn dropdown-toggle" id="dropdownMenuButton"
                                                                data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="true">
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
                                                        <div class="review-image">
                                                            <img src="img/user.jpg" alt="">
                                                        </div>
                                                        <div class="review-name">
                                                            <h5> James Harold</h5>
                                                            <p> James Harold</p>
                                                        </div>


                                                    </td>
                                                    <td>
                                                        Excellent!

                                                    </td>
                                                    <td>Very beautiful trek but...</td>
                                                    <td>England</td>
                                                    <td>12-08-2018</td>
                                                    <td>
                                                        <div class="rating-block">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="publish">
                                                            <a class="btn add-btn" href="#" data-toggle="modal"
                                                                data-target="#confirm"><i class="fas fa-times"></i>
                                                                Unpublish
                                                            </a>
                                                        </div>



                                                    </td>

                                                    <td>
                                                        <div class="ellipsis-btn">
                                                            <a href="#" class="btn dropdown-toggle" id="dropdownMenuButton"
                                                                data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="true">
                                                                <i class="fas fa-ellipsis-v"></i>

                                                            </a>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                <a class="dropdown-item" href="#" data-toggle="modal"
                                                                    data-target="#review-modal">View</a>
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
                            </div>
                        </div>


                    </div>

                    <!-- Tabs ends -->
                </div>

            </div>
        </div>
        <!-- /#page-content-wrapper -->



</div>
<?php require_once('scripts.php');?>

</body>
</html>