@extends('admin.layouts.app')
@section('title', ' vehicles | KRL')
@section('content')
       
       
            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0 font-size-18">Vehicles</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Vehicles</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                 

                    <div class="row add form">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <div>
                                        <h4>🚛 Vehicle Details</h4>
                                        <p>Enter the required details for the vehicle.</p>
                                    </div>
                                    <button class="btn" id="backToListBtn"
                                        style="background-color: #ca2639; color: white; border: none;">
                                        ⬅ Back to Listing
                                    </button>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="form-label">Vehicle Type</label>
                                            <input type="text" class="form-control" placeholder="Enter vehicle type">
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label">GVW</label>
                                            <input type="text" class="form-control" placeholder="Enter GVW">
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label">Payload</label>
                                            <input type="text" class="form-control" placeholder="Enter payload">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="form-label">Vehicle No</label>
                                            <input type="text" class="form-control" placeholder="Enter vehicle number">
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label">Chassis Number</label>
                                            <input type="text" class="form-control" placeholder="Enter chassis number">
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label">Engine Number</label>
                                            <input type="text" class="form-control" placeholder="Enter engine number">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="form-label">Registered Mobile Number</label>
                                            <input type="text" class="form-control" placeholder="Enter mobile number">
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label">Number of Tyres</label>
                                            <input type="text" class="form-control" placeholder="Enter number of tyres">
                                        </div>
                                    </div>

                                    <div class="accordion mt-4" id="documentAccordion">
                                        <!-- RC Document -->
                                         <div class="mb-3">
                                            <h5>Documents Upload</h5>
                                         </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#rcDocument">
                                                    📄 RC Document
                                                </button>
                                            </h2>
                                            <div id="rcDocument" class="accordion-collapse collapse show">
                                                <div class="accordion-body row g-3">
                                                    <div class="col-md-4">
                                                        <label class="form-label">Upload Document</label>
                                                        <input type="file" class="form-control">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">Valid From</label>
                                                        <input type="date" class="form-control">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">Valid Till</label>
                                                        <input type="date" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                       

                                        <!-- Fitness Document -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#fitnessDocument">
                                                    📄 Fitness Certificate
                                                </button>
                                            </h2>
                                            <div id="fitnessDocument" class="accordion-collapse collapse">
                                                <div class="accordion-body" id="fitnessContainer">
                                                    <div class="row g-3">
                                                        <div class="col-md-6">
                                                            <label class="form-label">Upload Document</label>
                                                            <input type="file" class="form-control">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="form-label">Valid Till</label>
                                                            <input type="date" class="form-control">
                                                        </div>
                                                        <div class="col-12 d-flex justify-content-end">
                                                            <button class="btn btn-primary btn-sm"
                                                                onclick="addMore('fitnessContainer')"><i
                                                                    class="fas fa-plus"></i> Add More</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Insurance Document -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#insuranceDocument">
                                                    📄 Insurance
                                                </button>
                                            </h2>
                                            <div id="insuranceDocument" class="accordion-collapse collapse">
                                                <div class="accordion-body" id="insuranceContainer">
                                                    <div class="row g-3">
                                                        <div class="col-md-4">
                                                            <label class="form-label">Upload Document</label>
                                                            <input type="file" class="form-control">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label class="form-label">Valid From</label>
                                                            <input type="date" class="form-control">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label class="form-label">Valid Till</label>
                                                            <input type="date" class="form-control">
                                                        </div>
                                                        <div class="col-12 d-flex justify-content-end">
                                                            <button class="btn btn-primary btn-sm"
                                                                onclick="addMore('insuranceContainer')"><i
                                                                    class="fas fa-plus"></i> Add More</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Authorization Permit -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#authPermit">
                                                    📄 Authorization Permit
                                                </button>
                                            </h2>
                                            <div id="authPermit" class="accordion-collapse collapse">
                                                <div class="accordion-body" id="authPermitContainer">
                                                    <div class="row g-3">
                                                        <div class="col-md-4">
                                                            <label class="form-label">Upload Document</label>
                                                            <input type="file" class="form-control">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label class="form-label">Valid From</label>
                                                            <input type="date" class="form-control">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label class="form-label">Valid Till</label>
                                                            <input type="date" class="form-control">
                                                        </div>
                                                        <div class="col-12 d-flex justify-content-end">
                                                            <button class="btn btn-primary btn-sm"
                                                                onclick="addMore('authPermitContainer')"><i
                                                                    class="fas fa-plus"></i> Add More</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- National Permit -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#nationalPermit">
                                                    📄 National Permit
                                                </button>
                                            </h2>
                                            <div id="nationalPermit" class="accordion-collapse collapse">
                                                <div class="accordion-body" id="nationalPermitContainer">
                                                    <div class="row g-3">
                                                        <div class="col-md-4">
                                                            <label class="form-label">Upload Document</label>
                                                            <input type="file" class="form-control">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label class="form-label">Valid From</label>
                                                            <input type="date" class="form-control">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label class="form-label">Valid Till</label>
                                                            <input type="date" class="form-control">
                                                        </div>
                                                        <div class="col-12 d-flex justify-content-end">
                                                            <button class="btn btn-primary btn-sm"
                                                                onclick="addMore('nationalPermitContainer')"><i
                                                                    class="fas fa-plus"></i> Add More</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Tax -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#nt">
                                                    📄 Tax
                                                </button>
                                            </h2>
                                            <div id="nt" class="accordion-collapse collapse">
                                                <div class="accordion-body" id="nationalPermitContainer">
                                                    <div class="row g-3">
                                                        <div class="col-md-4">
                                                            <label class="form-label">Upload Document</label>
                                                            <input type="file" class="form-control">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label class="form-label">Valid From</label>
                                                            <input type="date" class="form-control">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label class="form-label">Valid Till / Lifetime</label>
                                                            <input type="date" class="form-control">
                                                        </div>
                                                        <div class="col-12 d-flex justify-content-end">
                                                            <button class="btn btn-primary btn-sm"
                                                                onclick="addMore('nationalPermitContainer')"><i
                                                                    class="fas fa-plus"></i> Add More</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row mt-4">
                                        <div class="col-12 text-end">
                                            <button class="btn btn-primary">Save Vehicle Details</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Vehicle Listing Page -->
                    <div class="row listing-form">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <div>
                                        <h4 class="card-title">🚛 Vehicle Listing</h4>
                                        <p class="card-title-desc">View, edit, or delete vehicle details below.</p>
                                    </div>
                                    <button class="btn" id="addVehicleBtn"
                                        style="background-color: #ca2639; color: white; border: none;">
                                        <i class="fas fa-plus"></i> Add Vehicle
                                    </button>
                                </div>
                                <div class="card-body">
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap w-100">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Vehicle No</th>
                                                <th>Vehicle Type</th>
                                                <th>GVW</th>
                                                <th>Payload</th>
                                                <th>Registered Mobile Number</th>
                                                <th>Number of Tyres</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="vehicle-row" data-id="1">
                                                <td>1</td>
                                                <td>MP09AB1234</td>
                                                <td>Truck</td>
                                                <td>20 Ton</td>
                                                <td>12 Ton</td>
                                                <td>9876543210</td>
                                                <td>10</td>
                                                <td>
                                                    <button class="btn btn-sm btn-light view-btn"><i
                                                            class="fas fa-eye text-primary"></i></button>
                                                    <button class="btn btn-sm btn-light edit-btn"><i
                                                            class="fas fa-pen text-warning"></i></button>
                                                    <button class="btn btn-sm btn-light delete-btn"><i
                                                            class="fas fa-trash text-danger"></i></button>
                                                </td>
                                            </tr>
                                            <tr class="vehicle-row" data-id="2">
                                                <td>2</td>
                                                <td>MH12XY5678</td>
                                                <td>Container</td>
                                                <td>18 Ton</td>
                                                <td>10 Ton</td>
                                                <td>9123456789</td>
                                                <td>8</td>
                                                <td>
                                                    <button class="btn btn-sm btn-light view-btn"><i
                                                            class="fas fa-eye text-primary"></i></button>
                                                    <button class="btn btn-sm btn-light edit-btn"><i
                                                            class="fas fa-pen text-warning"></i></button>
                                                    <button class="btn btn-sm btn-light delete-btn"><i
                                                            class="fas fa-trash text-danger"></i></button>
                                                </td>
                                            </tr>
                                            <tr class="vehicle-row" data-id="3">
                                                <td>3</td>
                                                <td>GJ05LM4321</td>
                                                <td>Tanker</td>
                                                <td>25 Ton</td>
                                                <td>15 Ton</td>
                                                <td>9988776655</td>
                                                <td>12</td>
                                                <td>
                                                    <button class="btn btn-sm btn-light view-btn"><i
                                                            class="fas fa-eye text-primary"></i></button>
                                                    <button class="btn btn-sm btn-light edit-btn"><i
                                                            class="fas fa-pen text-warning"></i></button>
                                                    <button class="btn btn-sm btn-light delete-btn"><i
                                                            class="fas fa-trash text-danger"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>🚛 Vehicle Details</h4>
                                    <p>Manage vehicle information including document uploads.</p>
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead class="table-dark">
                                            <tr>
                                                <th>Vehicle Type</th>
                                                <th>GVW</th>
                                                <th>Payload</th>
                                                <th>Vehicle No</th>
                                                <th>Chassis Number</th>
                                                <th>Engine Number</th>
                                                <th>Registered Mobile</th>
                                                <th>Tyres</th>
                                                <th>Documents</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><span id="viewVehicleType"></span></td>
                                                <td><span id="viewGVW"></span></td>
                                                <td><span id="viewPayload"></span></td>
                                                <td><span id="viewVehicleNo"></span></td>
                                                <td><span id="viewChassisNumber"></span></td>
                                                <td><span id="viewEngineNumber"></span></td>
                                                <td><span id="viewMobileNumber"></span></td>
                                                <td><span id="viewTyres"></span></td>
                                                <td>
                                                    <img id="rcDocPreview" src="" alt="RC Document" class="img-thumbnail mb-2" style="display:none; width:100px;">
                                                    <img id="fitnessDocPreview" src="" alt="Fitness Certificate" class="img-thumbnail mb-2" style="display:none; width:100px;">
                                                    <img id="insuranceDocPreview" src="" alt="Insurance" class="img-thumbnail mb-2" style="display:none; width:100px;">
                                                    <img id="authPermitPreview" src="" alt="Authorization Permit" class="img-thumbnail mb-2" style="display:none; width:100px;">
                                                    <img id="nationalPermitPreview" src="" alt="National Permit" class="img-thumbnail mb-2" style="display:none; width:100px;">
                                                    <img id="taxDocPreview" src="" alt="Tax" class="img-thumbnail mb-2" style="display:none; width:100px;">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <script>
                    function loadVehicleDetails(data) {
                        document.getElementById("viewVehicleType").textContent = data.vehicleType;
                        document.getElementById("viewGVW").textContent = data.gvw;
                        document.getElementById("viewPayload").textContent = data.payload;
                        document.getElementById("viewVehicleNo").textContent = data.vehicleNo;
                        document.getElementById("viewChassisNumber").textContent = data.chassisNumber;
                        document.getElementById("viewEngineNumber").textContent = data.engineNumber;
                        document.getElementById("viewMobileNumber").textContent = data.mobileNumber;
                        document.getElementById("viewTyres").textContent = data.tyres;
                        
                        if (data.rcDoc) displayImage("rcDocPreview", data.rcDoc);
                        if (data.fitnessDoc) displayImage("fitnessDocPreview", data.fitnessDoc);
                        if (data.insuranceDoc) displayImage("insuranceDocPreview", data.insuranceDoc);
                        if (data.authPermit) displayImage("authPermitPreview", data.authPermit);
                        if (data.nationalPermit) displayImage("nationalPermitPreview", data.nationalPermit);
                        if (data.taxDoc) displayImage("taxDocPreview", data.taxDoc);
                    }
                    
                    function displayImage(imgId, src) {
                        var imgElement = document.getElementById(imgId);
                        imgElement.src = src;
                        imgElement.style.display = "block";
                    }
                    </script>
                    
                    
                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->


        
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->


    <!-- Right Sidebar -->
    <div class="right-bar">
        <div data-simplebar class="h-100">
            <div class="rightbar-title d-flex align-items-center p-3">

                <h5 class="m-0 me-2">Theme Customizer</h5>

                <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                    <i class="mdi mdi-close noti-icon"></i>
                </a>
            </div>

            <!-- Settings -->
            <hr class="m-0" />

            <div class="p-4">
                <h6 class="mb-3">Layout</h6>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout" id="layout-vertical" value="vertical">
                    <label class="form-check-label" for="layout-vertical">Vertical</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout" id="layout-horizontal"
                        value="horizontal">
                    <label class="form-check-label" for="layout-horizontal">Horizontal</label>
                </div>

                <h6 class="mt-4 mb-3 pt-2">Layout Mode</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-mode" id="layout-mode-light"
                        value="light">
                    <label class="form-check-label" for="layout-mode-light">Light</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-mode" id="layout-mode-dark" value="dark">
                    <label class="form-check-label" for="layout-mode-dark">Dark</label>
                </div>

                <h6 class="mt-4 mb-3 pt-2">Layout Width</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-width" id="layout-width-fuild"
                        value="fuild" onchange="document.body.setAttribute('data-layout-size', 'fluid')">
                    <label class="form-check-label" for="layout-width-fuild">Fluid</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-width" id="layout-width-boxed"
                        value="boxed" onchange="document.body.setAttribute('data-layout-size', 'boxed')">
                    <label class="form-check-label" for="layout-width-boxed">Boxed</label>
                </div>

                <h6 class="mt-4 mb-3 pt-2">Layout Position</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-position" id="layout-position-fixed"
                        value="fixed" onchange="document.body.setAttribute('data-layout-scrollable', 'false')">
                    <label class="form-check-label" for="layout-position-fixed">Fixed</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-position" id="layout-position-scrollable"
                        value="scrollable" onchange="document.body.setAttribute('data-layout-scrollable', 'true')">
                    <label class="form-check-label" for="layout-position-scrollable">Scrollable</label>
                </div>

                <h6 class="mt-4 mb-3 pt-2">Topbar Color</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="topbar-color" id="topbar-color-light"
                        value="light" onchange="document.body.setAttribute('data-topbar', 'light')">
                    <label class="form-check-label" for="topbar-color-light">Light</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="topbar-color" id="topbar-color-dark" value="dark"
                        onchange="document.body.setAttribute('data-topbar', 'dark')">
                    <label class="form-check-label" for="topbar-color-dark">Dark</label>
                </div>

                <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Size</h6>

                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="sidebar-size" id="sidebar-size-default"
                        value="default" onchange="document.body.setAttribute('data-sidebar-size', 'lg')">
                    <label class="form-check-label" for="sidebar-size-default">Default</label>
                </div>
                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="sidebar-size" id="sidebar-size-compact"
                        value="compact" onchange="document.body.setAttribute('data-sidebar-size', 'md')">
                    <label class="form-check-label" for="sidebar-size-compact">Compact</label>
                </div>
                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="sidebar-size" id="sidebar-size-small"
                        value="small" onchange="document.body.setAttribute('data-sidebar-size', 'sm')">
                    <label class="form-check-label" for="sidebar-size-small">Small (Icon View)</label>
                </div>

                <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Color</h6>

                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="sidebar-color" id="sidebar-color-light"
                        value="light" onchange="document.body.setAttribute('data-sidebar', 'light')">
                    <label class="form-check-label" for="sidebar-color-light">Light</label>
                </div>
                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="sidebar-color" id="sidebar-color-dark"
                        value="dark" onchange="document.body.setAttribute('data-sidebar', 'dark')">
                    <label class="form-check-label" for="sidebar-color-dark">Dark</label>
                </div>
                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="sidebar-color" id="sidebar-color-brand"
                        value="brand" onchange="document.body.setAttribute('data-sidebar', 'brand')">
                    <label class="form-check-label" for="sidebar-color-brand">Brand</label>
                </div>

                <h6 class="mt-4 mb-3 pt-2">Direction</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-direction" id="layout-direction-ltr"
                        value="ltr">
                    <label class="form-check-label" for="layout-direction-ltr">LTR</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-direction" id="layout-direction-rtl"
                        value="rtl">
                    <label class="form-check-label" for="layout-direction-rtl">RTL</label>
                </div>

            </div>

        </div> <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <!-- pace js -->
    <script src="assets/libs/pace-js/pace.min.js"></script>

    <!-- Required datatable js -->
    <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="assets/libs/jszip/jszip.min.js"></script>
    <script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
    <script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>
    <script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

    <!-- Responsive examples -->
    <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

    <!-- Datatable init js -->
    <script src="assets/js/pages/datatables.init.js"></script>

    <script src="assets/js/app.js"></script>

     <!-- JavaScript for Add/Remove -->
     <script>
        function addMore(sectionId) {
            let container = document.getElementById(sectionId);
            let newEntry = document.createElement("div");
            newEntry.classList.add("row", "g-3", "mt-2");
            newEntry.innerHTML = `
                <div class="col-md-4">
                    <label class="form-label">Upload Document</label>
                    <input type="file" class="form-control">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Valid From</label>
                    <input type="date" class="form-control">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Valid Till</label>
                    <input type="date" class="form-control">
                </div>
                <div class="col-12 d-flex justify-content-end">
                    <button class="btn btn-danger btn-sm me-2" onclick="removeEntry(this)"> <i class="fas fa-trash"></i> Remove</button>
                    <button class="btn btn-primary btn-sm" onclick="addMore('${sectionId}')"><i class="fas fa-plus"></i> Add More</button>
                </div>
            `;
            container.appendChild(newEntry);
        }

        function removeEntry(button) {
            button.closest(".row").remove();
        }
    </script>
@endsection
