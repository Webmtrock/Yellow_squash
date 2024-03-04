<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="light" data-toggled="close">

<head>

    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=no'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Zanex - Bootstrap 5 Premium Admin & Dashboard Template </title>
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
	<meta name="keywords" content="bootstrap template, template dashboard bootstrap, admin template, html admin panel template, bootstrap admin template, html and css templates, bootstrap, bootstrap html template, html admin dashboard template, bootstrap dashboard, admin panel html template">
    
    <link id="style" href="{{ asset('admin/assets/libs/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" >
    <link href="{{ asset('admin/assets/css/styles.min.css') }}" rel="stylesheet" >
    <link href="{{ asset('admin/assets/css/icons.css') }}" rel="stylesheet" >
    <link href="{{ asset('admin/assets/libs/node-waves/waves.min.css') }}" rel="stylesheet" > 
    <link href="{{ asset('admin/assets/libs/simplebar/simplebar.min.css') }}" rel="stylesheet" >
    <link rel="stylesheet" href="{{ asset('admin/assets/libs/flatpickr/flatpickr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/libs/@simonwep/pickr/themes/nano.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/libs/choices.js/public/assets/styles/choices.min.css') }}">
    <link rel="icon" href="{{ asset('admin/assets/images/brand-logos/favicon.ico') }}" type="image/x-icon">

</head>

<body>
     @include('admin.partials.header')
   <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                @include('admin.partials.sidebar')
            </div>
            
            <div class="col-md-9">
                <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                        <div class="row total-sales-card-section">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                <div class="card custom-card overflow-hidden">  
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h6 class="fw-normal fs-14">Total Sales</h6>
                                                <h3 class="mb-2 number-font fs-24">34,516</h3>
                                                <p class="text-muted mb-0">
                                                    <span class="text-primary">
                                                        <i
                                                            class="ri-arrow-up-s-line bg-primary text-white rounded-circle fs-13 p-0 fw-semibold align-bottom"></i>
                                                        3%</span> last month
                                                </p>
                                            </div>
                                            <div class="col col-auto mt-2">
                                                <div
                                                    class="counter-icon bg-primary-gradient box-shadow-primary rounded-circle ms-auto mb-0">
                                                    <i class="fe fe-trending-up mb-5 "></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                <div class="card custom-card overflow-hidden">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h6 class="fw-normal fs-14">Total Leads</h6>
                                                <h3 class="mb-2 number-font fs-24">56,992</h3>
                                                <p class="text-muted mb-0">
                                                    <span class="text-secondary">
                                                        <i
                                                            class="ri-arrow-up-s-line bg-secondary text-white rounded-circle fs-13 p-0 fw-semibold align-bottom"></i>
                                                        3%</span> last month
                                                </p>
                                            </div>
                                            <div class="col col-auto mt-2">
                                                <div
                                                    class="counter-icon bg-danger-gradient box-shadow-danger rounded-circle  ms-auto mb-0">
                                                    <i class="ri-rocket-line mb-5  "></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                <div class="card custom-card overflow-hidden">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h6 class="fw-normal fs-14">Total Profit</h6>
                                                <h3 class="mb-2 number-font fs-24">$42,567</h3>
                                                <p class="text-muted mb-0">
                                                    <span class="text-success">
                                                        <i
                                                            class="ri-arrow-down-s-line bg-primary text-white rounded-circle fs-13 p-0 fw-semibold align-bottom"></i>
                                                        0.5%</span> last month
                                                </p>
                                            </div>
                                            <div class="col col-auto mt-2">
                                                <div
                                                    class="counter-icon bg-secondary-gradient box-shadow-secondary rounded-circle ms-auto mb-0">
                                                    <i class="fe fe-dollar-sign  mb-5 "></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                <div class="card custom-card overflow-hidden">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h6 class="fw-normal fs-14">Total Cost</h6>
                                                <h3 class="mb-2 number-font fs-24">$34,789</h3>
                                                <p class="text-muted mb-0">
                                                    <span class="text-danger">
                                                        <i
                                                            class="ri-arrow-down-s-line bg-danger text-white rounded-circle fs-13 p-0 fw-semibold align-bottom"></i>
                                                        0.2%</span> last month
                                                </p>
                                            </div>
                                            <div class="col col-auto mt-2">
                                                <div
                                                    class="counter-icon bg-success-gradient box-shadow-success rounded-circle  ms-auto mb-0">
                                                    <i class="fe fe-briefcase mb-5 "></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-9">
                        <div class="card custom-card">
                            <div class="card-header">
                                <h3 class="card-title">Total Transactions</h3>
                            </div>
                            <div class="card-body pb-0">
                                <div id="totaltransactions" width="1112" class="overflow-hidden"></div>
                            </div>
                        </div>
                    </div>
                    <!-- COL END -->
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-3">
                        <div class="card custom-card ">
                            <div class="card-header">
                                <h3 class="card-title">Recent Orders</h3>
                            </div>
                            <div class="card-body pt-0 ps-0 pe-0">
                                <div id="recent-orders" class="apex-charts ht-150" width="377"></div>

                                <div class="row sales-product-infomation pb-0 mb-0 mx-auto wd-100p mt-4">
                                    <div class="col-md-6 col justify-content-center text-center">
                                        <p class="mb-0 d-flex justify-content-center"><span
                                                class="legend bg-primary"></span>Delivered</p>
                                        <h3 class="mb-1 fw-bold">5238</h3>
                                        <div class="d-flex justify-content-center ">
                                            <p class="text-muted mb-0">Last 6 months</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col text-center float-end">
                                        <p class="mb-0 d-flex justify-content-center "><span
                                                class="legend bg-background2"></span>Cancelled</p>
                                        <h3 class="mb-1 fw-bold">3467</h3>
                                        <div class="d-flex justify-content-center ">
                                            <p class="text-muted mb-0">Last 6 months</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- COL END -->
                </div>
                <!-- ROW-1 END -->
                <!-- ROW-3 -->
                <div class="row">
                    <div class="col-xl-4 col-md-12">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-header">
                                <div>
                                    <h3 class="card-title">Timeline</h3>
                                </div>
                            </div>
                            <div class="card-body pb-0 pt-4">
                                <div class="activity1">
                                    <div class="activity-blog">
                                        <div class="activity-img rounded-circle bg-primary-transparent text-primary">
                                            <i class="ri-user-add-fill fs-20"></i>
                                        </div>
                                        <div class="activity-details d-flex">
                                            <div><b><span class="text-dark"> Mr John </span> </b> Started following you
                                                <span class="d-flex text-muted fs-11">01 June 2020</span>
                                            </div>
                                            <div class="ms-auto fs-13 text-dark fw-semibold"><span
                                                    class="badge bg-primary text-fixed-white">1m</span></div>
                                        </div>
                                    </div>
                                    <div class="activity-blog">
                                        <div
                                            class="activity-img rounded-circle bg-secondary-transparent text-secondary">
                                            <i class="ri-chat-1-fill fs-20"></i>
                                        </div>
                                        <div class="activity-details d-flex">
                                            <div><b><span class="text-dark"> Lily </span> </b> 1 Commented applied <span
                                                    class="d-flex text-muted fs-11">01 July 2020</span> </div>
                                            <div class="ms-auto fs-13 text-dark fw-semibold"><span
                                                    class="badge bg-danger text-fixed-white">3m</span></div>
                                        </div>
                                    </div>
                                    <div class="activity-blog">
                                        <div class="activity-img rounded-circle bg-success-transparent text-success">
                                            <i class="ri-thumb-up-fill fs-20"></i>
                                        </div>
                                        <div class="activity-details d-flex">
                                            <div><b><span class="text-dark"> Kevin </span> </b> liked your site <span
                                                    class="d-flex text-muted fs-11">05 July 2020</span></div>
                                            <div class="ms-auto fs-13 text-dark fw-semibold"><span
                                                    class="badge bg-warning text-fixed-white">5m</span></div>
                                        </div>
                                    </div>
                                    <div class="activity-blog">
                                        <div class="activity-img rounded-circle bg-info-transparent text-info">
                                            <i class="ri-mail-fill fs-20"></i>
                                        </div>
                                        <div class="activity-details d-flex">
                                            <div><b><span class="text-dark"> Andrena </span> </b> posted a new article
                                                <span class="d-flex text-muted fs-11">09 October 2020</span>
                                            </div>
                                            <div class="ms-auto fs-13 text-dark fw-semibold"><span
                                                    class="badge bg-info text-fixed-white">5m</span></div>
                                        </div>
                                    </div>
                                    <div class="activity-blog">
                                        <div class="activity-img rounded-circle bg-danger-transparent text-danger">
                                            <i class="ri-shopping-bag-fill fs-20"></i>
                                        </div>
                                        <div class="activity-details d-flex">
                                            <div><b><span class="text-dark"> Sonia </span> </b> Delivery in progress
                                                <span class="d-flex text-muted fs-11">12 October 2020</span>
                                            </div>
                                            <div class="ms-auto fs-13 text-dark fw-semibold"><span
                                                    class="badge bg-warning text-fixed-white">5m</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <h4 class="card-title">Browser Usage</h4>
                            </div>
                            <div class="card-body pt-2 pb-2">
                                <div class="d-md-flex align-items-center browser-stats">
                                    <div class="d-flex me-1">
                                        <i
                                            class="ri-chrome-fill bg-secondary-gradient text-fixed-white me-2 logo-icon"></i>
                                        <p class="fs-16 my-auto ">Chrome</p>
                                    </div>
                                    <div class="ms-auto my-auto">
                                        <div class="d-sm-flex text-end">
                                            <span class="my-auto fs-16">35,502</span>
                                            <span class="text-success fs-15 ms-3"><i
                                                    class="fe fe-arrow-up"></i>12.75%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-md-flex align-items-center browser-stats">
                                    <div class="d-flex me-1">
                                        <i class="ri-opera-fill text-fixed-white bg-danger-gradient me-2 logo-icon"></i>
                                        <p class="fs-16 my-auto ">Opera</p>
                                    </div>
                                    <div class="ms-auto my-auto">
                                        <div class="d-sm-flex text-end">
                                            <span class="my-auto fs-16">12,563</span>
                                            <span class="text-danger fs-15 ms-3"><i
                                                    class="fe fe-arrow-down"></i>15.12%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-md-flex align-items-center browser-stats">
                                    <div class="d-flex me-1">
                                        <i
                                            class="ri-firefox-fill text-fixed-white bg-purple-gradient me-2 logo-icon"></i>
                                        <p class="fs-16 my-auto ">IE</p>
                                    </div>
                                    <div class="ms-auto my-auto">
                                        <div class="d-sm-flex text-end">
                                            <span class="my-auto fs-16">25,364</span>
                                            <span class="text-success fs-15 ms-3"><i
                                                    class="fe fe-arrow-up"></i>24.37%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-md-flex align-items-center browser-stats">
                                    <div class="d-flex me-1">
                                        <i class="ri-edge-fill text-fixed-white bg-info-gradient me-2 logo-icon"></i>
                                        <p class="fs-16 my-auto ">Firefox</p>
                                    </div>
                                    <div class="ms-auto my-auto">
                                        <div class="d-sm-flex text-end">
                                            <span class="my-auto fs-16">14,635</span>
                                            <span class="text-success fs-15 ms-3"><i
                                                    class="fe fe-arrow-up"></i>15,63%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-md-flex align-items-center browser-stats">
                                    <div class="d-flex me-1">
                                        <i
                                            class="ri-android-fill text-fixed-white bg-success-gradient me-2 logo-icon"></i>
                                        <p class="fs-16 my-auto ">Android</p>
                                    </div>
                                    <div class="ms-auto my-auto">
                                        <div class="d-sm-flex text-end">
                                            <span class="my-auto fs-16">15,453</span>
                                            <span class="text-danger fs-15 ms-3"><i
                                                    class="fe fe-arrow-down"></i>23.70%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <h4 class="card-title">Daily Activity</h4>
                            </div>
                            <div class="card-body pb-0">
                                <ul class="task-list">
                                    <li>
                                        <i class="task-icon bg-primary"></i>
                                        <h6 class="fs-14">Task Finished<span class="text-muted fs-11 mx-2">29 Oct
                                                2020</span></h6>
                                        <p class="text-muted fs-12">Adam Berry finished task on<a
                                                href="javascript:void(0);" class="fw-semibold text-primary"> Project
                                                Management</a>
                                        </p>
                                    </li>
                                    <li>
                                        <i class="task-icon bg-secondary"></i>
                                        <h6 class="fs-14">New Comment<span class="text-muted fs-11 mx-2">25 Oct
                                                2020</span></h6>
                                        <p class="text-muted fs-12">Victoria commented on Project <a
                                                href="javascript:void(0);" class="fw-semibold text-primary"> AngularJS
                                                Template</a>
                                        </p>
                                    </li>
                                    <li>
                                        <i class="task-icon bg-primary"></i>
                                        <h6 class="fs-14">New Comment<span class="text-muted fs-11 mx-2">25 Oct
                                                2020</span></h6>
                                        <p class="text-muted fs-12">Victoria commented on Project <a
                                                href="javascript:void(0);" class="fw-semibold text-primary"> AngularJS
                                                Template</a>
                                        </p>
                                    </li>
                                    <li>
                                        <i class="task-icon bg-secondary"></i>
                                        <h6 class="fs-14">Task Overdue<span class="text-muted fs-11 mx-2">14 Oct
                                                2020</span></h6>
                                        <p class="text-muted mb-0 fs-12">Petey Cruiser finished task <a
                                                href="javascript:void(0);" class="fw-semibold text-primary"> Integrated
                                                management</a></p>
                                    </li>
                                    <li>
                                        <i class="task-icon bg-primary"></i>
                                        <h6 class="fs-14">Task Overdue<span class="text-muted fs-11 mx-2">29 Oct
                                                2020</span></h6>
                                        <p class="text-muted mb-0 fs-12">Petey Cruiser finished task <a
                                                href="javascript:void(0);" class="fw-semibold text-primary"> Integrated
                                                management</a></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- COL END -->
                <!-- ROW-3 END -->
                <!-- ROW-5 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Deals Statistics
                                </div>

                            </div>
                            <div class="card-body">

                                <div class="d-sm-flex mb-4 justify-content-between">
                                    <div class="my-1">
                                        <span class="">Show</span>
                                        <div class="btn-group">
                                            <!-- <button type="button" class="btn btn-outline-light dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                10
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">10</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">25</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">50</a></li>
                                            </ul> -->
                                            <select class="form-control" data-trigger name="choices-single-default" id="choices-single-default">
                                                <option value="Choice 1">10</option>
                                                <option value="Choice 2">20</option>
                                                <option value="Choice 3">30</option>
                                                <option value="Choice 4">40</option>
                                            </select>
                                        </div>
                                        <span class="">Entries</span>
                                    </div>
                                    <div class="d-flex flex-wrap gap-2 my-1">
                                        <div>
                                            <input class="form-control form-control-sm h-35" type="text"
                                                placeholder="Search Here" aria-label=".form-control-sm example">
                                        </div>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);"
                                                class="btn btn-primary btn-sm btn-wave waves-effect waves-light"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Sort By<i
                                                    class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                            </a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">New</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Popular</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Relevant</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="table-responsive deals-table">
                                    <table class="table text-nowrap table-hover border table-bordered">
                                        <thead class="border-top">
                                            <tr>
                                                <th class="bg-transparent border-bottom-0 w-5 text-uppercase">S.no</th>
                                                <th class="bg-transparent border-bottom-0 text-uppercase">Name</th>
                                                <th class="bg-transparent border-bottom-0 text-uppercase">Date</th>
                                                <th class="bg-transparent border-bottom-0 text-uppercase">Amount</th>
                                                <th class="bg-transparent border-bottom-0 text-uppercase">Status</th>
                                                <th class="bg-transparent border-bottom-0 text-uppercase">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="border-bottom">
                                                <td class="text-muted fs-15 fw-semibold">01.</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <img class="avatar avatar-md rounded-circle mt-1" alt="img"
                                                            src="../assets/images/faces/1.jpg">
                                                        <div class="ms-2 mt-0 mt-sm-2 d-block">
                                                            <h6 class="mb-0 fs-14 fw-semibold">Jake poole</h6>
                                                            <span class="fs-12 text-muted">jacke123@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-muted fs-15 fw-semibold">20-11-2020 </td>
                                                <td class="text-muted fs-15 fw-semibold">$5.321.2</td>
                                                <td class="text-success fs-15 fw-semibold">Success</td>
                                                <td class="">
                                                    <div class="btn-list">
                                                        <a class="btn btn-icon btn-primary btn-wave waves-effect waves-light"
                                                            data-bs-toggle="tooltip" data-bs-original-title="Edit">
                                                            <i class="ri-pencil-fill lh-1"></i>
                                                        </a>
                                                        <a class="btn btn-icon btn-danger btn-wave waves-effect waves-light"
                                                            data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                                            <i class="ri-delete-bin-7-line lh-1"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="border-bottom">
                                                <td class="text-muted fs-15 fw-semibold">02.</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <img class="avatar avatar-md rounded-circle mt-1" alt="img"
                                                            src="../assets/images/faces/2.jpg">
                                                        <div class="ms-2 mt-0 mt-sm-2 d-block">
                                                            <h6 class="mb-0 fs-14 fw-semibold">Virginia Gray</h6>
                                                            <span class="fs-12 text-muted">virginia456@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-muted fs-15 fw-semibold">20-11-2020 </td>
                                                <td class="text-muted fs-15 fw-semibold">$53,3654</td>
                                                <td class="text-success fs-15 fw-semibold">Success</td>
                                                <td class="">
                                                    <div class="btn-list">
                                                        <a class="btn btn-icon btn-primary btn-wave waves-effect waves-light"
                                                            data-bs-toggle="tooltip" data-bs-original-title="Edit">
                                                            <i class="ri-pencil-fill lh-1"></i>
                                                        </a>
                                                        <a class="btn btn-icon btn-danger btn-wave waves-effect waves-light"
                                                            data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                                            <i class="ri-delete-bin-7-line lh-1"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="border-bottom">
                                                <td class="text-muted fs-15 fw-semibold">03.</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <img class="avatar avatar-md rounded-circle mt-1" alt="img"
                                                            src="../assets/images/faces/3.jpg">
                                                        <div class="ms-2 mt-0 mt-sm-2 d-block">
                                                            <h6 class="mb-0 fs-14 fw-semibold">Jacob Thomson</h6>
                                                            <span class="fs-12 text-muted">jacobthomson@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-muted fs-15 fw-semibold">20-11-2020 </td>
                                                <td class="text-muted fs-15 fw-semibold">$1,56,3654</td>
                                                <td class="text-primary fs-15 fw-semibold">Pending</td>
                                                <td class="">
                                                    <div class="btn-list">
                                                        <a class="btn btn-icon btn-primary btn-wave waves-effect waves-light"
                                                            data-bs-toggle="tooltip" data-bs-original-title="Edit">
                                                            <i class="ri-pencil-fill lh-1"></i>
                                                        </a>
                                                        <a class="btn btn-icon btn-danger btn-wave waves-effect waves-light"
                                                            data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                                            <i class="ri-delete-bin-7-line lh-1"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="border-bottom">
                                                <td class="text-muted fs-15 fw-semibold">04.</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <img class="avatar avatar-md rounded-circle mt-1" alt="img"
                                                            src="../assets/images/faces/4.jpg">
                                                        <div class="ms-2 mt-0 mt-sm-2 d-block">
                                                            <h6 class="mb-0 fs-14 fw-semibold">Trevor Thomson</h6>
                                                            <span class="fs-12 text-muted">trevor@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-muted fs-15 fw-semibold">19-11-2020 </td>
                                                <td class="text-muted fs-15 fw-semibold">$12.3</td>
                                                <td class="text-success fs-15 fw-semibold">Success</td>
                                                <td class="">
                                                    <div class="btn-list">
                                                        <a class="btn btn-icon btn-primary btn-wave waves-effect waves-light"
                                                            data-bs-toggle="tooltip" data-bs-original-title="Edit">
                                                            <i class="ri-pencil-fill lh-1"></i>
                                                        </a>
                                                        <a class="btn btn-icon btn-danger btn-wave waves-effect waves-light"
                                                            data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                                            <i class="ri-delete-bin-7-line lh-1"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="border-bottom">
                                                <td class="text-muted fs-15 fw-semibold">05.</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <img class="avatar avatar-md rounded-circle mt-1" alt="img"
                                                            src="../assets/images/faces/5.jpg">
                                                        <div class="ms-2 mt-0 mt-sm-2 d-block">
                                                            <h6 class="mb-0 fs-14 fw-semibold">Kylie north</h6>
                                                            <span class="fs-12 text-muted">kylie@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-muted fs-15 fw-semibold">19-11-2020 </td>
                                                <td class="text-muted fs-15 fw-semibold">$5.312.2</td>
                                                <td class="text-primary fs-15 fw-semibold">Pending</td>
                                                <td class="">
                                                    <div class="btn-list">
                                                        <a class="btn btn-icon btn-primary btn-wave waves-effect waves-light"
                                                            data-bs-toggle="tooltip" data-bs-original-title="Edit">
                                                            <i class="ri-pencil-fill lh-1"></i>
                                                        </a>
                                                        <a class="btn btn-icon btn-danger btn-wave waves-effect waves-light"
                                                            data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                                            <i class="ri-delete-bin-7-line lh-1"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="border-bottom">
                                                <td class="text-muted fs-15 fw-semibold">06.</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <img class="avatar avatar-md rounded-circle mt-1" alt="img"
                                                            src="../assets/images/faces/11.jpg">
                                                        <div class="ms-2 mt-0 mt-sm-2 d-block">
                                                            <h6 class="mb-0 fs-14 fw-semibold">Jan Hodges</h6>
                                                            <span class="fs-12 text-muted">jan@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-muted fs-15 fw-semibold">19-11-2020 </td>
                                                <td class="text-muted fs-15 fw-semibold">$5.312.2</td>
                                                <td class="text-danger fs-15 fw-semibold">Cancel</td>
                                                <td class="">
                                                    <div class="btn-list">
                                                        <a class="btn btn-icon btn-primary btn-wave waves-effect waves-light"
                                                            data-bs-toggle="tooltip" data-bs-original-title="Edit">
                                                            <i class="ri-pencil-fill lh-1"></i>
                                                        </a>
                                                        <a class="btn btn-icon btn-danger btn-wave waves-effect waves-light"
                                                            data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                                            <i class="ri-delete-bin-7-line lh-1"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="border-bottom">
                                                <td class="text-muted fs-15 fw-semibold">07.</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <img class="avatar avatar-md rounded-circle mt-1" alt="img"
                                                            src="../assets/images/faces/7.jpg">
                                                        <div class="ms-2 mt-0 mt-sm-2 d-block">
                                                            <h6 class="mb-0 fs-14 fw-semibold">Trevor Thomson</h6>
                                                            <span class="fs-12 text-muted">trevor@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-muted fs-15 fw-semibold">19-11-2020 </td>
                                                <td class="text-muted fs-15 fw-semibold">$2,24,1421</td>
                                                <td class="text-success fs-15 fw-semibold">Success</td>
                                                <td class="">
                                                    <div class="btn-list">
                                                        <a class="btn btn-icon btn-primary btn-wave waves-effect waves-light"
                                                            data-bs-toggle="tooltip" data-bs-original-title="Edit">
                                                            <i class="ri-pencil-fill lh-1"></i>
                                                        </a>
                                                        <a class="btn btn-icon btn-danger btn-wave waves-effect waves-light"
                                                            data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                                            <i class="ri-delete-bin-7-line lh-1"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-muted fs-15 fw-semibold">08.</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <img class="avatar avatar-md rounded-circle mt-1" alt="img"
                                                            src="../assets/images/faces/8.jpg">
                                                        <div class="ms-2 mt-0 mt-sm-2 d-block">
                                                            <h6 class="mb-0 fs-14 fw-semibold">Emily Lewis</h6>
                                                            <span class="fs-12 text-muted">emily@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-muted fs-15 fw-semibold">19-11-2020 </td>
                                                <td class="text-muted fs-15 fw-semibold">$9.321.2</td>
                                                <td class="text-danger fs-15 fw-semibold">Cancel</td>
                                                <td class="">
                                                    <div class="btn-list">
                                                        <a class="btn btn-icon btn-primary btn-wave waves-effect waves-light"
                                                            data-bs-toggle="tooltip" data-bs-original-title="Edit">
                                                            <i class="ri-pencil-fill lh-1"></i>
                                                        </a>
                                                        <a class="btn btn-icon btn-danger btn-wave waves-effect waves-light"
                                                            data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                                            <i class="ri-delete-bin-7-line lh-1"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="d-flex align-items-center">
                                    <div>
                                        Showing 5 Entries <i class="bi bi-arrow-right ms-2 fw-semibold"></i>
                                    </div>
                                    <div class="ms-auto">
                                        <nav aria-label="Page navigation" class="pagination-style-4">
                                            <ul class="pagination mb-0">
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="javascript:void(0);">
                                                        Prev
                                                    </a>
                                                </li>
                                                <li class="page-item active"><a class="page-link"
                                                        href="javascript:void(0);">1</a></li>
                                                <li class="page-item"><a class="page-link"
                                                        href="javascript:void(0);">2</a></li>
                                                <li class="page-item">
                                                    <a class="page-link text-primary" href="javascript:void(0);">
                                                        next
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
                <!-- ROW-5 END -->

            </div>
        </div>
        
        
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModal" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                  <div class="input-group">
                    <a href="javascript:void(0);" class="input-group-text" id="Search-Grid"><i class="fe fe-search header-link-icon fs-18"></i></a>
                    <input type="search" class="form-control border-0 px-2" placeholder="Search" aria-label="Username">
                    <a href="javascript:void(0);" class="input-group-text" id="voice-search"><i class="fe fe-mic header-link-icon"></i></a>
                    <a href="javascript:void(0);" class="btn btn-light btn-icon" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fe fe-more-vertical"></i>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                      <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                      <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                    </ul>
                  </div>
                  <div class="mt-4">
                    <p class="font-weight-semibold text-muted mb-2">Are You Looking For...</p>
                    <span class="search-tags"><i class="fe fe-user me-2"></i>People<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a></span>
                    <span class="search-tags"><i class="fe fe-file-text me-2"></i>Pages<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a></span>
                    <span class="search-tags"><i class="fe fe-align-left me-2"></i>Articles<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a></span>
                    <span class="search-tags"><i class="fe fe-server me-2"></i>Tags<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a></span>
                  </div>
                  <div class="my-4">
                    <p class="font-weight-semibold text-muted mb-2">Recent Search :</p>
                    <div class="p-2 border br-5 d-flex align-items-center text-muted mb-2 alert">
                      <a href="notifications.html"><span>Notifications</span></a>
                      <a class="ms-auto lh-1" href="javascript:void(0);" data-bs-dismiss="alert" aria-label="Close"><i class="fe fe-x text-muted"></i></a>
                    </div>
                    <div class="p-2 border br-5 d-flex align-items-center text-muted mb-2 alert">
                      <a href="alerts.html"><span>Alerts</span></a>
                      <a class="ms-auto lh-1" href="javascript:void(0);" data-bs-dismiss="alert" aria-label="Close"><i class="fe fe-x text-muted"></i></a>
                    </div>
                    <div class="p-2 border br-5 d-flex align-items-center text-muted mb-0 alert">
                      <a href="mail.html"><span>Mail</span></a>
                      <a class="ms-auto lh-1" href="javascript:void(0);" data-bs-dismiss="alert" aria-label="Close"><i class="fe fe-x text-muted"></i></a>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <div class="btn-group ms-auto">
                    <button class="btn btn-sm btn-primary-light">Search</button>
                    <button class="btn btn-sm btn-primary">Clear Recents</button>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>


    @include('admin.partials.footer')
  </div>

<script src="{{ asset('admin/assets/libs/choices.js/public/assets/scripts/choices.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/main.js') }}"></script>
<script src="{{ asset('admin/assets/libs/@popperjs/core/umd/popper.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/defaultmenu.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/node-waves/waves.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/sticky.js') }}"></script>
<script src="{{ asset('admin/assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/simplebar.js') }}"></script>
<script src="{{ asset('admin/assets/libs/@simonwep/pickr/pickr.es5.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/index.js') }}"></script>
<script src="{{ asset('admin/assets/js/custom-switcher.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/custom.js') }}"></script>
</body>