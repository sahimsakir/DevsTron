@extends('layouts.app')
@section('title','DevsTron - Your Expectation Our Implementation')
@section('content')
<div class="header-application d-flex flex-column justify-content-center align-items-center mt-5">
    <a href="index.html"><img class="m-2" src="assets/images/logo/logo-black.png" width="300px" alt=""></a>
    <a class="m-2" href="career_single.html">Back to the Job Description</a>
    <h3 class="m-2">Software Engineer</h3>
</div>

<!-- MultiStep Form -->
<div class="container" id="grad1">
    <div class="row justify-content-center mt-0">
        <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3 application-card">
                <h4><strong>Apply for the Position</strong></h4>
                <p>Fill all form field to go the next step</p>
                <div class="row">
                    <div class="col-md-12 mx-0">
                        <form id="msform" action="#" method="post">
                            <!-- progressbar -->
                            <ul id="progressbar">
                                <li class="active" id="account"><strong>Personal</strong></li>
                                <li id="personal"><strong>Education</strong></li>
                                <li id="payment"><strong>Career</strong></li>
                                <li id="confirm"><strong>Finish</strong></li>
                            </ul>
                            <!-- fieldsets -->
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Personal Information</h2>
                                    <p>Passport Size Picture</p>
                                    <div class="upload-image mt-3 mb-4">
                                        <div class="drag-area">
                                            <div class="icon"><i class="fas fa-cloud-upload-alt"></i></div>
                                            <header class="text-center">Drag & Drop to Upload File</header>
                                            <span>OR</span>
                                            <button type="button">Browse File</button>
                                            <input type="file" hidden>
                                        </div>
                                    </div>
                                    <label for="full_name">Full Name</label>
                                    <input type="text" name="full_name" class="full_name"
                                        placeholder="Enter Your Full Name" />
                                    <!-- <div class="alert alert-danger alert-dismissible fade hide" role="alert">
                                        <p>Please fill up Your Full Name</p>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div> -->
                                    <label for="email">Email Address</label>
                                    <input type="email" name="email" placeholder="Enter Your Email" />
                                    <label for="phone">Cell Number</label>
                                    <input type="text" name="phone" placeholder="Enter Your Cell Number" />
                                    <!-- <input type="file" id="test"> -->
                                    <div class="file-upload d-flex justify-content-center">
                                        <div class="wrapper">
                                            <input class="file-input" type="file" name="file" hidden>
                                            <i class="fas fa-cloud-upload-alt"></i>
                                            <p>Browse File to Upload Your Resume</p>

                                            <section class="progress-area"></section>
                                            <section class="uploaded-area"></section>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" name="next" class="next action-button">Next Step</a>
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Educational Information</h2>
                                    <div id="repeater">
                                        <!-- Repeater Heading -->
                                        <div class="repeater-heading d-flex justify-content-end">
                                            <a href="#"
                                                class="btn btn-outline-info repeater-add-btn rounded-circle">
                                                <i class="fa-solid fa-plus"></i>
                                            </a>
                                        </div>
                                        <div class="clearfix"></div>
                                        <!-- Repeater Items -->
                                        <div class="items" data-group="test">
                                            <!-- Repeater Content -->
                                            <div class="item-content">
                                                <div class="row">
                                                    <div class="col-md-8 mt-4 mb-4">
                                                        <label for="instituion_name">Inistitution Name</label>
                                                        <input type="text" name="instituion_name[]"
                                                            placeholder="Enter Institution Name"
                                                            data-name="instituion_name" />
                                                    </div>
                                                    <div class="col-md-4 mt-4 mb-4">
                                                        <label for="grade">Grade</label>
                                                        <input type="text" name="grade[]" placeholder="Enter Grade"
                                                            data-name="grade" />
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="degree">Degree</label>
                                                        <select class="form-select" name="degree[]"
                                                            data-name="degree" aria-label=" Default select example">
                                                            <option selected>Select your Degree</option>
                                                            <option value="1">BSc</option>
                                                            <option value="2">MSc</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="passing_year">Passing Year</label>
                                                        <input type="text" name="passing_year[]"
                                                            placeholder="Enter Passing Year"
                                                            data-name="passing_year" />
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Repeater Remove Btn -->
                                            <div class="repeater-remove-btn d-flex justify-content-end">
                                                <a href="#"
                                                    class="btn btn-outline-danger remove-btn rounded-circle">
                                                    <i class="fa-solid fa-minus"></i>
                                                </a>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" name="previous" class="previous action-button-previous">Previous</a>
                                <a href="#" name="next" class="next action-button">Next Step</a>
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Career Information</h2>
                                    <div id="repeater-2">
                                        <!-- Repeater Heading -->
                                        <div class="repeater-heading d-flex justify-content-end">
                                            <a href="#"
                                                class="btn btn-outline-info repeater-add-btn rounded-circle">
                                                <i class="fa-solid fa-plus"></i>
                                            </a>
                                        </div>
                                        <div class="clearfix"></div>
                                        <!-- Repeater Items -->
                                        <div class="items" data-group="test">
                                            <!-- Repeater Content -->
                                            <div class="item-content">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="company_name">Company Name</label>
                                                        <input type="text" id="company_name" name="company_name[]"
                                                            placeholder="Enter Company Name"
                                                            data-name="company_name" />
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="designation">Designation</label>
                                                        <input type="text" id="designation" name="designation[]"
                                                            placeholder="Enter Designation"
                                                            data-name="designation" />
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="start_date">Joining Date</label>
                                                        <input type="date" placeholder="dd/mm/yy"
                                                            name="start_date[]" class="form-control"
                                                            data-name="start_date" />
                                                    </div>
                                                    <div class="col-md-4 d-flex align-items-center">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="check" id="checkbox" name="checkbox[]"
                                                                onclick="checkCurrent(this.id)" data-name="checkbox"
                                                                checked>
                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                Currently Working
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="end_date" class="end_date">Leaving Date</label>
                                                        <input type="date" placeholder="dd/mm/yy" id="end_date"
                                                            name="end_date[]" data-name="end_date" class="end_date"
                                                            class="form-control" />

                                                    </div>
                                                    <div class="col-md-12 mt-4 mb-4">
                                                        <div class="form-group">
                                                            <label for="work_summary">Work
                                                                Summary</label>
                                                            <textarea class="form-control" name="work_summary[]"
                                                                id="work_summary" rows="6"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Repeater Remove Btn -->
                                            <div class="repeater-remove-btn d-flex justify-content-end">
                                                <a href="#"
                                                    class="btn btn-outline-danger remove-btn rounded-circle">
                                                    <i class="fa-solid fa-minus"></i>
                                                </a>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" name="previous" class="previous action-button-previous">Previous</a>
                                <button type="submit" name="make_payment"
                                    class="submit next action-button">Confirm</button>
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title text-center">Success !</h2>
                                    <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-3">
                                            <lottie-player
                                                src="https://assets5.lottiefiles.com/packages/lf20_4chtroo0.json"
                                                background="transparent" speed="1" loop autoplay></lottie-player>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-7 text-center">
                                            <h5>Your Application Has Been Submitted</h5>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@section('scripts')

<script src="assets/js/image-upload.js"></script>
<script src="assets/js/repeater.js"></script>
<script src="assets/js/file-upload-progress.js"></script>
<script>
    /* Create Repeater */
    $("#repeater").createRepeater({
        showFirstItemToDefault: true,
    });
    $("#repeater-2").createRepeater({
        showFirstItemToDefault: true,
    });
</script>
@endsection
@endsection