<?php include_once('include/header.php')  ?>
        <!-- Page Body start -->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <?php include_once('include/sidebar.php')  ?>
            <!-- Page Sidebar Ends-->

        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <div class="sidebar-wrapper">
                <div id="sidebarEffect"></div>
                <div>
                    <div class="logo-wrapper logo-wrapper-center">
                        <a href="index.php" data-bs-original-title="" title="">
                            <img class="img-fluid for-white" src="assets/images/logo/full-white.png" alt="logo">
                        </a>
                        <div class="back-btn">
                            <i class="fa fa-angle-left"></i>
                        </div>
                        <div class="toggle-sidebar">
                            <i class="ri-apps-line status_toggle middle sidebar-toggle"></i>
                        </div>
                    </div>
                    <div class="logo-icon-wrapper">
                        <a href="index.php">
                            <img class="img-fluid main-logo main-white" src="assets/images/logo/1-white.png" alt="logo">
                            <img class="img-fluid main-logo main-dark" src="assets/images/logo/logo-white.png"
                                alt="logo">
                        </a>
                    </div>
                    <nav class="sidebar-main">
                        <div class="left-arrow" id="left-arrow">
                            <i data-feather="arrow-left"></i>
                        </div>

                        <div id="sidebar-menu">
                            <ul class="sidebar-links" id="simple-bar">
                                <li class="back-btn"></li>

                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="index.php">
                                        <i class="ri-home-line"></i>
                                        <span>Dashboard</span>
                                    </a>
                                </li>

                                <li class="sidebar-list">
                                    <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-store-3-line"></i>
                                        <span>Product</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="products.php">Prodcts</a>
                                        </li>

                                        <li>
                                            <a href="add-new-product.php">Add New Products</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="sidebar-list">
                                    <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-list-check-2"></i>
                                        <span>Category</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="category.php">Category List</a>
                                        </li>

                                        <li>
                                            <a href="add-new-category.php">Add New Category</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="sidebar-list">
                                    <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-list-settings-line"></i>
                                        <span>Attributes</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="attributes.php">Attributes</a>
                                        </li>

                                        <li>
                                            <a href="add-new-attributes.php">Add Attributes</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-user-3-line"></i>
                                        <span>Users</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="all-users.php">All users</a>
                                        </li>
                                        <li>
                                            <a href="add-new-user.php">Add new user</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-user-3-line"></i>
                                        <span>Roles</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="role.php">All roles</a>
                                        </li>
                                        <li>
                                            <a href="create-role.php">Create Role</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="media.php">
                                        <i class="ri-price-tag-3-line"></i>
                                        <span>Media</span>
                                    </a>
                                </li>

                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-archive-line"></i>
                                        <span>Orders</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="order-list.php">Order List</a>
                                        </li>
                                        <li>
                                            <a href="order-detail.php">Order Detail</a>
                                        </li>
                                        <li>
                                            <a href="order-tracking.php">Order Tracking</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="sidebar-list">
                                    <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-focus-3-line"></i>
                                        <span>Localization</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="translation.php">Translation</a>
                                        </li>

                                        <li>
                                            <a href="currency-rates.php">Currency Rates</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="sidebar-list">
                                    <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-price-tag-3-line"></i>
                                        <span>Coupons</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="coupon-list.php">Coupon List</a>
                                        </li>

                                        <li>
                                            <a href="create-coupon.php">Create Coupon</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="taxes.php">
                                        <i class="ri-price-tag-3-line"></i>
                                        <span>Tax</span>
                                    </a>
                                </li>

                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="product-review.php">
                                        <i class="ri-star-line"></i>
                                        <span>Product Review</span>
                                    </a>
                                </li>

                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="support-ticket.php">
                                        <i class="ri-phone-line"></i>
                                        <span>Support Ticket</span>
                                    </a>
                                </li>

                                <li class="sidebar-list">
                                    <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-settings-line"></i>
                                        <span>Settings</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="profile-setting.php">Profile Setting</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="reports.php">
                                        <i class="ri-file-chart-line"></i>
                                        <span>Reports</span>
                                    </a>
                                </li>

                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="list-page.php">
                                        <i class="ri-list-check"></i>
                                        <span>List Page</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="right-arrow" id="right-arrow">
                            <i data-feather="arrow-right"></i>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Page Sidebar Ends-->

            <!-- Ticket Section Start -->
            <div class="page-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card card-table">
                                <!-- Table Start -->
                                <div class="card-body">
                                    <div class="title-header option-title">
                                        <h5>Support Ticket</h5>
                                    </div>
                                    <div>
                                        <div class="table-responsive">
                                            <table class="table ticket-table all-package theme-table" id="table_id">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            <div class="check-box-contain">
                                                                <span class="form-check user-checkbox checkall">
                                                                    <input class="checkbox_animated" type="checkbox"
                                                                        value="">
                                                                </span>
                                                                <span>Ticket Number</span>
                                                            </div>
                                                        </th>
                                                        <th>
                                                            <span>Date</span>
                                                        </th>
                                                        <th>
                                                            <span>Subject</span>
                                                        </th>
                                                        <th>
                                                            <span>Status</span>
                                                        </th>
                                                        <th>
                                                            <span>Options</span>
                                                        </th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="check-box-contain">
                                                                <span class="form-check user-checkbox">
                                                                    <input class="checkbox_animated check-it"
                                                                        type="checkbox" value="">
                                                                </span>
                                                                <span>#453</span>
                                                            </div>
                                                        </td>
                                                        <td>25-09-2021</td>

                                                        <td>Query about return & exchange</td>

                                                        <td class="status-danger">
                                                            <span>Pending</span>
                                                        </td>
                                                        <td>
                                                            <ul>
                                                                <li>
                                                                    <a href="javascript:void(0)">
                                                                        <i class="ri-pencil-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                        data-bs-target="#exampleModalToggle">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="check-box-contain">
                                                                <span class="form-check user-checkbox">
                                                                    <input class="checkbox_animated check-it"
                                                                        type="checkbox" value="">
                                                                </span>
                                                                <span>#453</span>
                                                            </div>
                                                        </td>

                                                        <td>20-10-2021</td>
                                                        <td>Query about return & exchange</td>
                                                        <td class="status-close">
                                                            <span>Closed</span>
                                                        </td>
                                                        <td>
                                                            <ul>
                                                                <li>
                                                                    <a href="javascript:void(0)">
                                                                        <i class="ri-pencil-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                        data-bs-target="#exampleModalToggle">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="check-box-contain">
                                                                <span class="form-check user-checkbox">
                                                                    <input class="checkbox_animated check-it"
                                                                        type="checkbox" value="">
                                                                </span>
                                                                <span>#456</span>
                                                            </div>
                                                        </td>

                                                        <td>30-01-2021</td>
                                                        <td>Query about return & exchange</td>
                                                        <td class="status-danger">
                                                            <span>Pending</span>
                                                        </td>
                                                        <td>
                                                            <ul>
                                                                <li>
                                                                    <a href="javascript:void(0)">
                                                                        <i class="ri-pencil-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                        data-bs-target="#exampleModalToggle">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="check-box-contain">
                                                                <span class="form-check user-checkbox">
                                                                    <input class="checkbox_animated check-it"
                                                                        type="checkbox" value="">
                                                                </span>
                                                                <span>#456</span>
                                                            </div>
                                                        </td>

                                                        <td>30-01-2021</td>
                                                        <td>Query about return & exchange</td>
                                                        <td class="status-danger">
                                                            <span>Pending</span>
                                                        </td>
                                                        <td>
                                                            <ul>
                                                                <li>
                                                                    <a href="javascript:void(0)">
                                                                        <i class="ri-pencil-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                        data-bs-target="#exampleModalToggle">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="check-box-contain">
                                                                <span class="form-check user-checkbox">
                                                                    <input class="checkbox_animated check-it"
                                                                        type="checkbox" value="">
                                                                </span>
                                                                <span>#782</span>
                                                            </div>
                                                        </td>

                                                        <td>02-04-2021</td>
                                                        <td>Query about return & exchange</td>
                                                        <td class="status-close">
                                                            <span>Closed</span>
                                                        </td>
                                                        <td>
                                                            <ul>
                                                                <li>
                                                                    <a href="javascript:void(0)">
                                                                        <i class="ri-pencil-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                        data-bs-target="#exampleModalToggle">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="check-box-contain">
                                                                <span class="form-check user-checkbox">
                                                                    <input class="checkbox_animated check-it"
                                                                        type="checkbox" value="">
                                                                </span>
                                                                <span>#214</span>
                                                            </div>
                                                        </td>

                                                        <td>10-01-2021</td>
                                                        <td>Query about return & exchange</td>
                                                        <td class="status-close">
                                                            <span>Closed</span>
                                                        </td>
                                                        <td>
                                                            <ul>
                                                                <li>
                                                                    <a href="javascript:void(0)">
                                                                        <i class="ri-pencil-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                        data-bs-target="#exampleModalToggle">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="check-box-contain">
                                                                <span class="form-check user-checkbox">
                                                                    <input class="checkbox_animated check-it"
                                                                        type="checkbox" value="">
                                                                </span>
                                                                <span>#258</span>
                                                            </div>
                                                        </td>

                                                        <td>26-07-2021</td>
                                                        <td>Query about return & exchange</td>
                                                        <td class="status-danger">
                                                            <span>Pending</span>
                                                        </td>
                                                        <td>
                                                            <ul>
                                                                <li>
                                                                    <a href="javascript:void(0)">
                                                                        <i class="ri-pencil-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                        data-bs-target="#exampleModalToggle">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="check-box-contain">
                                                                <span class="form-check user-checkbox">
                                                                    <input class="checkbox_animated check-it"
                                                                        type="checkbox" value="">
                                                                </span>
                                                                <span>#634</span>
                                                            </div>
                                                        </td>

                                                        <td>30-10-2020</td>
                                                        <td>Query about return & exchange</td>
                                                        <td class="status-close">
                                                            <span>Closed</span>
                                                        </td>
                                                        <td>
                                                            <ul>
                                                                <li>
                                                                    <a href="javascript:void(0)">
                                                                        <i class="ri-pencil-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                        data-bs-target="#exampleModalToggle">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="check-box-contain">
                                                                <span class="form-check user-checkbox">
                                                                    <input class="checkbox_animated check-it"
                                                                        type="checkbox" value="">
                                                                </span>
                                                                <span>#124</span>
                                                            </div>
                                                        </td>

                                                        <td>09-08-2021</td>
                                                        <td>Query about return & exchange</td>
                                                        <td class="status-danger">
                                                            <span>Pending</span>
                                                        </td>
                                                        <td>
                                                            <ul>
                                                                <li>
                                                                    <a href="javascript:void(0)">
                                                                        <i class="ri-pencil-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                        data-bs-target="#exampleModalToggle">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Table End -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer Start --> <!-- Footer End -->
            </div>
            <!-- Ticket Section End -->
        </div>
        <!-- Page Body End-->

        <!-- Modal Start -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
            <div class="modal-dialog  modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <h5 class="modal-title" id="staticBackdropLabel">Logging Out</h5>
                        <p>Are you sure you want to log out?</p>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="button-box">
                            <button type="button" class="btn btn--no" data-bs-dismiss="modal">No</button>
                            <button type="button" class="btn  btn--yes btn-primary">Yes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal End -->
    </div>
    <!-- page-wrapper End-->

    <?php include_once('include/footer.php') ?>