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
                                <div class="itinerary-tab-header">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#day1"
                                                role="tab" aria-controls="home" aria-selected="true">
                                                <i class="fas fa-align-justify"></i> General
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#day2" role="tab"
                                                aria-controls="profile" aria-selected="false">
                                                <i class="fas fa-dollar-sign"></i> Price and Duration
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#day5" role="tab"
                                                aria-controls="contact" aria-selected="false">
                                                <i class="fas fa-map-marker-alt"></i> Destinations covered
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#day4" role="tab"
                                                aria-controls="contact" aria-selected="false">
                                                <i class="fas fa-magic"></i> Highlights
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#day3" role="tab"
                                                aria-controls="contact" aria-selected="false">
                                                <i class="fas fa-exclamation-circle"></i> Important notes
                                            </a>
                                        </li>
                                        
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="day1" role="tabpanel"
                                            aria-labelledby="home-tab">
                                            <div class="container-fluid">
                                                <div class="content-block">
                                                    <form>
                                                        <div class="form-modified">
                                                            <div class="form-group row">

                                                                <label for="staticEmail" class="col-sm-2 col-form-label">Enter
                                                                    destination</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" id="inputPassword"
                                                                        placeholder="Destination name">
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">

                                                                <label for="staticEmail" class="col-sm-2 col-form-label">Enter
                                                                    description</label>
                                                                <div class="col-sm-10">
                                                                    <textarea name="editor" id="" cols="30" rows="4"
                                                                        class="form-control"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="inputPassword" class="col-sm-2 col-form-label">Teaser
                                                                    title</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" id="inputPassword"
                                                                        placeholder="Enter teaser title">
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
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

                                                            <div class="form-group row">
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

                                                            <div class="form-group row">
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
                                        <div class="tab-pane fade" id="day2" role="tabpanel" aria-labelledby="profile-tab">
                                            <div class="container-fluid">
                                                <div class="content-block">
                                                    <form>
                                                        <div class="form-modified">
                                                            <div class="form-group row">

                                                                <label for="staticEmail" class="col-sm-2 col-form-label">Suitable
                                                                    seasons</label>
                                                                <div class="col-sm-10">
                                                                    <select class="js-example-basic-multiple-suitable"
                                                                        name="" multiple="multiple" style="width:100%">
                                                                        <option value="1">Day tours</option>
                                                                        <option value="2">Something tours</option>
                                                                        <option value="3">Manang-mustang region</option>
                                                                        <option value="3">Shey-Phoksundo</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
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

                                                            <div class="form-group row">
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

                                                            <div class="form-group row">
                                                                <label for="inputPassword" class="col-sm-2 col-form-label">Price
                                                                    basis</label>
                                                                <div class="col-sm-10">
                                                                    <select class="selectpicker">
                                                                        <option selected="">Select price basis</option>
                                                                        <option value="1" data-icon="glyphicon glyphicon-eye-open"
                                                                            data-subtext="petrification">Twin sharing
                                                                            basis</option>
                                                                        <option value="2">Average</option>
                                                                        <option value="3">Normal</option>
                                                                        <option value="3">Easy</option>
                                                                    </select>
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
                                        <div class="tab-pane fade" id="day3" role="tabpanel" aria-labelledby="contact-tab">
                                            <div class="container-fluid">
                                                <div class="content-block">
                                                    <form>
                                                        <div class="form-modified">

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
                                        <div class="tab-pane fade" id="day4" role="tabpanel" aria-labelledby="contact-tab">
                                            <div class="container-fluid">
                                                <div class="content-block">
                                                    <div class="row align-content-center">
                                                        <div class="col-lg-10">
                                                            <form>
                                                                <div class="form-modified">
                                                                    <div class="form-group row">

                                                                        <label for="staticEmail" class="col-sm-2 col-form-label">
                                                                            Highlights</label>
                                                                        <div class="col-sm-8">
                                                                            <textarea name="" id="" placeholder="eg. Special highlights of the place"></textarea>
                                                                        </div>
                                                                        
                                                            <div class="col-sm-2">
                                                                <div class="form-group">
                                                                    <select class="selectpicker">
                                                                        <option selected="">Select icons</option>
                                                                        <option value="1">Plane</option>
                                                                        <option value="2">Hotel</option>
                                                                        <option value="3">Group tours</option>
                                                                        <option value="3">Private tours</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                                    </div>

                                                                    <div class="form-group row">
                                                                        <div class="col-sm-10 offset-2">
                                                                            <div class="includes">
                                                                                <div class="includes-list">
                                                                                    <div class="includes-list-item">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-9">
                                                                                                <p>Daily seasonal fresh
                                                                                                    fruits as
                                                                                                    per the
                                                                                                    availability</p>
                                                                                            </div>
                                                                                            <div class="col-lg-3">
                                                                                                <div class="includes-action">

                                                                                                    <button type="button"
                                                                                                        class="btn">
                                                                                                        <i class="fas fa-pen"></i>
                                                                                                    </button>
                                                                                                    <button type="button"
                                                                                                        class="btn">
                                                                                                        <i class="fas fa-trash-alt"></i>
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="includes-list-item">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-9">
                                                                                                <p>Necessary paper
                                                                                                    works, all
                                                                                                    government and
                                                                                                    local taxes</p>
                                                                                            </div>
                                                                                            <div class="col-lg-3">
                                                                                                <div class="includes-action">

                                                                                                    <button type="button"
                                                                                                        class="btn">
                                                                                                        <i class="fas fa-pen"></i>
                                                                                                    </button>
                                                                                                    <button type="button"
                                                                                                        class="btn">
                                                                                                        <i class="fas fa-trash-alt"></i>
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="includes-list-item">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-9">
                                                                                                <p>Airport pickup and
                                                                                                    drop-off (on
                                                                                                    request) services
                                                                                                    in a private
                                                                                                    vehicle</p>
                                                                                            </div>
                                                                                            <div class="col-lg-3">
                                                                                                <div class="includes-action">

                                                                                                    <button type="button"
                                                                                                        class="btn">
                                                                                                        <i class="fas fa-pen"></i>
                                                                                                    </button>
                                                                                                    <button type="button"
                                                                                                        class="btn">
                                                                                                        <i class="fas fa-trash-alt"></i>
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="includes-list-item">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-9">
                                                                                                <p>Down jackets,
                                                                                                    sleeping bags and
                                                                                                    duffel bags (down
                                                                                                    jackets,
                                                                                                    sleeping bags and
                                                                                                    duffel bags
                                                                                                    are to be returned
                                                                                                    after the
                                                                                                    completion of the
                                                                                                    trip</p>
                                                                                            </div>
                                                                                            <div class="col-lg-3">
                                                                                                <div class="includes-action">

                                                                                                    <button type="button"
                                                                                                        class="btn">
                                                                                                        <i class="fas fa-pen"></i>
                                                                                                    </button>
                                                                                                    <button type="button"
                                                                                                        class="btn">
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
                                                        <div class="col-lg-2">
                                                            <a class="btn btn-sm add-btn" href="#" role="button">
                                                                Save
                                                            </a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="day5" role="tabpanel" aria-labelledby="contact-tab">
                                            <div class="container-fluid">
                                                <div class="content-block">
                                                    <div class="row align-content-center">
                                                        <div class="col-lg-10">
                                                            <form>
                                                                <div class="form-modified">
                                                                    <div class="form-group row">
                                                                        <label for="inputPassword" class="col-sm-2 col-form-label">Destinations covered</label>
                                                                        <div class="col-sm-10">
                                                                            <select class="selectpicker">
                                                                                <option selected="">Select destinations covered</option>
                                                                                <option value="1">Annapurna Trek</option>
                                                                                <option value="2">Khaptad Trek</option>
                                                                                <option value="3">Group tours</option>
                                                                                <option value="3">Private tours</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group row">
                                                                        <div class="col-sm-10 offset-2">
                                                                            <div class="includes">
                                                                                <div class="includes-list">
                                                                                    <div class="includes-list-item">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-9">
                                                                                                <p>Annapurna Base Camp</p>
                                                                                            </div>
                                                                                            <div class="col-lg-3">
                                                                                                <div class="includes-action">

                                                                                                    <button type="button"
                                                                                                        class="btn">
                                                                                                        <i class="fas fa-pen"></i>
                                                                                                    </button>
                                                                                                    <button type="button"
                                                                                                        class="btn">
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
                                                        <div class="col-lg-2">
                                                            <a class="btn btn-sm add-btn" href="#" role="button">
                                                                Save
                                                            </a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
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
                                                                    <div class="form-group row">

                                                                        <label for="staticEmail" class="col-sm-2 col-form-label">
                                                                            Segment title</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" class="form-control" id="inputPassword"
                                                                                placeholder="Enter segment title">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">

                                                                        <label for="staticEmail" class="col-sm-2 col-form-label">
                                                                            Title</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" class="form-control" id="inputPassword"
                                                                                placeholder="Enter title">
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group row">

                                                                        <label for="staticEmail" class="col-sm-2 col-form-label">Description
                                                                        </label>
                                                                        <div class="col-sm-10">
                                                                            <textarea name="" id="" placeholder="Enter description"></textarea>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group row">

                                                                        <label for="staticEmail" class="col-sm-2 col-form-label">Duration
                                                                        </label>
                                                                        <div class="col-sm-5">
                                                                            <input type="text" class="form-control" id="inputPassword"
                                                                                placeholder="Min duration">
                                                                        </div>
                                                                        <div class="col-sm-5">
                                                                            <input type="text" class="form-control" id="inputPassword"
                                                                                placeholder="Max duration">
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group row">
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

                                                                        <div class="col-lg-10">
                                                                            <a class="btn btn-sm add-btn d-inline-block"
                                                                                href="#" data-toggle="modal"
                                                                                data-target="#browseImage"><i class="fas fa-plus"></i>
                                                                                Browse
                                                                            </a>


                                                                        </div>

                                                                    </div>

                                                                    <div class="form-group-row no-gutters">
                                                                        <div class="col-lg-10 offset-2">
                                                                            <div class="row">
                                                                                <div class="col-lg-3">
                                                                                    <div class="gallery-image-container">
                                                                                        <img src="img/travel-2.jpg" alt="">
                                                                                        <div class="overlay">
                                                                                            <div class="middle">

                                                                                                <button type="button"
                                                                                                    class="btn btn-danger rounded-btn">
                                                                                                    <i class="fas fa-trash-alt"></i>
                                                                                                </button>

                                                                                                <button type="button"
                                                                                                    class="btn btn-success rounded-btn">
                                                                                                    <i class="fas fa-image"></i>
                                                                                                </button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-3">
                                                                                    <div class="gallery-image-container">
                                                                                        <img src="img/travel-2.jpg" alt="">
                                                                                        <div class="overlay">
                                                                                            <div class="middle">

                                                                                                <button type="button"
                                                                                                    class="btn btn-danger rounded-btn">
                                                                                                    <i class="fas fa-trash-alt"></i>
                                                                                                </button>

                                                                                                <button type="button"
                                                                                                    class="btn btn-success rounded-btn">
                                                                                                    <i class="fas fa-image"></i>
                                                                                                </button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-3">
                                                                                    <div class="gallery-image-container">
                                                                                        <img src="img/travel-2.jpg" alt="">
                                                                                        <div class="overlay">
                                                                                            <div class="middle">

                                                                                                <button type="button"
                                                                                                    class="btn btn-danger rounded-btn">
                                                                                                    <i class="fas fa-trash-alt"></i>
                                                                                                </button>

                                                                                                <button type="button"
                                                                                                    class="btn btn-success rounded-btn">
                                                                                                    <i class="fas fa-image"></i>
                                                                                                </button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-3">
                                                                                    <div class="gallery-image-container">
                                                                                        <img src="img/travel-2.jpg" alt="">
                                                                                        <div class="overlay">
                                                                                            <div class="middle">

                                                                                                <button type="button"
                                                                                                    class="btn btn-danger rounded-btn">
                                                                                                    <i class="fas fa-trash-alt"></i>
                                                                                                </button>

                                                                                                <button type="button"
                                                                                                    class="btn btn-success rounded-btn">
                                                                                                    <i class="fas fa-image"></i>
                                                                                                </button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group row">

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
                                                                                    <div class="row">
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
                                                            <div class="col-sm-8">
                                                                <textarea name="" id="" placeholder="eg. Necessary paperworks and all government papers."></textarea>
                                                            </div>

                                                            <div class="col-sm-2">
                                                                <div class="form-group">
                                                                    <select class="selectpicker">
                                                                        <option selected="">Select icons</option>
                                                                        <option value="1">Plane</option>
                                                                        <option value="2">Hotel</option>
                                                                        <option value="3">Group tours</option>
                                                                        <option value="3">Private tours</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                        </div>
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
                            <div class="tab-pane fade" id="excludes" role="tabpanel" aria-labelledby="excludes-tab">
                                <div class="container-fluid">
                                    <div class="content-block">
                                        <div class="row align-content-center">
                                            <div class="col-md-10">
                                                <form>
                                                    <div class="form-modified">
                                                        <div class="form-group row">

                                                            <label for="staticEmail" class="col-sm-2 col-form-label">
                                                                Includes</label>
                                                            <div class="col-sm-8">
                                                                <textarea name="" id="" placeholder="eg. Necessary paperworks and all government papers."></textarea>
                                                            </div>

                                                            <div class="col-sm-2">
                                                                <div class="form-group">
                                                                    <select class="selectpicker">
                                                                        <option selected="">Select icons</option>
                                                                        <option value="1">Plane</option>
                                                                        <option value="2">Hotel</option>
                                                                        <option value="3">Group tours</option>
                                                                        <option value="3">Private tours</option>
                                                                    </select>
                                                                </div>
                                                            </div>

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
                                            <div class="col-md-2">
                                                <div class="form-modified">
                                                    <div class="form-group">

                                                        <label for="staticEmail" class="col-form-label">
                                                            Gallery</label>


                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="info-text">
                                                    <p> <i class="fas fa-exclamation-circle"></i>
                                                        Here,you can browse and add images for the gallery of the
                                                        package.</p>
                                                </div>
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
                                                        <div class="col-lg-3">
                                                            <div class="gallery-image-container">
                                                                <img src="img/travel-2.jpg" alt="">
                                                                <div class="overlay">
                                                                    <div class="middle">

                                                                        <button type="button" class="btn btn-danger rounded-btn">
                                                                            <i class="fas fa-trash-alt"></i>
                                                                        </button>

                                                                        <button type="button" class="btn btn-success rounded-btn">
                                                                            <i class="fas fa-image"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="col-lg-3">
                                                            <div class="gallery-image-container">
                                                                <img src="img/travel-2.jpg" alt="">
                                                                <div class="overlay">
                                                                    <div class="middle">

                                                                        <button type="button" class="btn btn-danger rounded-btn">
                                                                            <i class="fas fa-trash-alt"></i>
                                                                        </button>

                                                                        <button type="button" class="btn btn-success rounded-btn">
                                                                            <i class="fas fa-image"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <div class="gallery-image-container">
                                                                <img src="img/travel-2.jpg" alt="">
                                                                <div class="overlay">
                                                                    <div class="middle">

                                                                        <button type="button" class="btn btn-danger rounded-btn">
                                                                            <i class="fas fa-trash-alt"></i>
                                                                        </button>

                                                                        <button type="button" class="btn btn-success rounded-btn">
                                                                            <i class="fas fa-image"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <div class="gallery-image-container">
                                                                <img src="img/travel-2.jpg" alt="">
                                                                <div class="overlay">
                                                                    <div class="middle">

                                                                        <button type="button" class="btn btn-danger rounded-btn">
                                                                            <i class="fas fa-trash-alt"></i>
                                                                        </button>

                                                                        <button type="button" class="btn btn-success rounded-btn">
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

    <!-- Add attraction modal -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add attractions</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="">

                        <div class="form-modified">
                            <div class="form-group">
                                <input type="text" class="form-control" id="inputPassword" placeholder="Attraction title">
                            </div>

                            <div class="form-group">
                                <textarea name="" id="" placeholder="Enter description"></textarea>
                            </div>

                            <div class="form-group">
                                <select id="select" name="threads-icon" class="fa-select"></select>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" id="inputPassword" placeholder="Any links if availabel*">
                            </div>
                        </div>

                    </form>

                </div>
                <div class="modal-footer">

                    <button type="button" class="btn default-btn">Add</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Add attraction modal end-->


    <!-- View attraction modal -->
    <div class="modal fade" id="viewAttraction" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end attraction modal -->


    <!-- Browse image modal -->
    <!-- Modal -->

    <div class="modal fade" id="browseImage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Browse image</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-modified">
                        <div class="input-group mb-4">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile02">
                                <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose
                                    file</label>
                            </div>

                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" id="inputPassword" placeholder="Image title">
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn default-btn">Save</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Browse image modal ends -->



    <!-- Publish modal -->
    <div class="modal fade" id="confirm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="confirmation-block">
                        <p>Do you really want to publish this review?This process can't be undone.</p>
                        <button type="button" class="btn default-btn">Yes</button>
                        <button type="button" class="btn default-btn outline">No</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Publish modal ends -->


    <!-- Review modal -->
    <div class="modal fade" id="review-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Review</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="review-block">

                        <div class="review-image">
                            <img src="img/user.jpg" alt="">
                        </div>
                        <div class="review-name">
                            <h5> James Harold</h5>
                            <p> jamesharold@email.com</p>
                        </div>
                        <div class="review-date">
                            <p>From <span>England</span> on <span>12-08-2018</span> </p>

                        </div>
                        <div class="review-text">
                            <p>
                                “We completed this trek in late Sept. / early Oct. We did this trek as a family ( 2
                                adults
                                and 2 young children (12yo and 9yo). The trek was a lot of fun! Certainly a medium
                                difficulty - but doable by just about anyone! Spectacular!”
                            </p>
                        </div>

                        <div class="rating-block">
                            <p>Rating</p>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>


                    </div>

                </div>

                <div class="modal-footer">
                    <div class="publish-block">
                        <button type="button" class="btn default-btn"><i class="fas fa-check"></i> Publish</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Review modal ends -->


    <!-- Add segment -->
    <div class="modal fade" id="addSegment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add segment</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-modified">
                        <form action="">
                            <div class="form-group">
                                <input type="text" class="form-control" id="inputPassword" placeholder="Add segment">
                            </div>
                        </form>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn default-btn">Add</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Add segment ends -->


    <!-- Delete modal -->
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="confirmation-block">
                        <p>Do you really want to publish this review? This process can't be undone.</p>
                        <button type="button" class="btn default-btn">Yes</button>
                        <button type="button" class="btn default-btn outline">No</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Delete modal ends -->
    <?php require_once('scripts.php');?>

</body>

</html>