<?php include_once($_SERVER['DOCUMENT_ROOT'].'/limitless-full-theme-master/config.php') ?>
<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<?php include_once($partials.'head.php') ?>
<!-- /head -->

<body>
  <!-- Main navbar -->
  <?php include_once($partials.'nav.php') ?>
  <!-- /main navbar -->

  <!-- Page content -->
  <div class="page-content">
    <!-- Main sidebar -->
    <div class="sidebar sidebar-light sidebar-main sidebar-expand-md">
      <!-- Sidebar mobile toggler -->
      <div class="sidebar-mobile-toggler text-center">
        <a href="#" class="sidebar-mobile-main-toggle">
          <i class="icon-arrow-left8"></i>
        </a>
        <span class="font-weight-semibold">Navigation</span>
        <a href="#" class="sidebar-mobile-expand">
          <i class="icon-screen-full"></i>
          <i class="icon-screen-normal"></i>
        </a>
      </div>
      <!-- /sidebar mobile toggler -->

      <!-- Sidebar content -->
      <div class="sidebar-content">
        <!-- User menu -->
        <div class="sidebar-user-material">
          
          <!-- Main Sidebar -->
          <?php include_once($partials.'mainsidebar.php') ?>
          <!-- /Main Sidebar -->

          <div class="collapse" id="user-nav">
            <ul class="nav nav-sidebar">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="icon-user-plus"></i>
                  <span>My profile</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="icon-coins"></i>
                  <span>My balance</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="icon-comment-discussion"></i>
                  <span>Messages</span>
                  <span class="badge bg-teal-400 badge-pill align-self-center ml-auto">58</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="icon-cog5"></i>
                  <span>Account settings</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="icon-switch2"></i>
                  <span>Logout</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <!-- /user menu -->

        <!-- Main navigation -->
        <div class="card card-sidebar-mobile">
          <ul class="nav nav-sidebar" data-nav-type="accordion">
            <!-- Main -->
            <li class="nav-item-header">
              <div class="text-uppercase font-size-xs line-height-xs">
                Main
              </div>
              <i class="icon-menu" title="Main"></i>
            </li>
            <li class="nav-item">
              <a href="index.html" class="nav-link active">
                <i class="icon-home4"></i>
                <span> Dashboard </span>
              </a>
            </li>
            <li class="nav-item nav-item-submenu">
              <a href="#" class="nav-link"><i class="icon-copy"></i> <span>User Managment</span></a>

              <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                <li class="nav-item">
                  <a href="index.html" class="nav-link active">User</a>
                </li>
                <li class="nav-item">
                  <a href="../../../../layout_2/LTR/material/full/index.html" class="nav-link">Roles</a>
                </li>
                <li class="nav-item">
                  <a href="../../../../layout_3/LTR/material/full/index.html" class="nav-link">Sales Commision
                    Agents</a>
                </li>
                <li class="nav-item">
                  <a href="../../../../layout_6/LTR/material/full/index.html" class="nav-link disabled">Layout 6
                    <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a>
                </li>
              </ul>
            </li>
            <li class="nav-item nav-item-submenu">
              <a href="#" class="nav-link"><i class="icon-color-sampler"></i> <span>Contacts</span></a>

              <ul class="nav nav-group-sub" data-submenu-title="Themes">
                <li class="nav-item">
                  <a href="../../../LTR/default/full/index.html" class="nav-link">Suppliers</a>
                </li>
                <li class="nav-item">
                  <a href="index.html" class="nav-link">Coustomers</a>
                </li>
                <li class="nav-item">
                  <a href="index.html" class="nav-link">Coustomers Groups</a>
                </li>
                <li class="nav-item">
                  <a href="index.html" class="nav-link">Import Contacts</a>
                </li>
              </ul>
            </li>
            <li class="nav-item nav-item-submenu">
              <a href="#" class="nav-link"><i class="icon-stack"></i> <span>products</span></a>

              <ul class="nav nav-group-sub" data-submenu-title="Starter kit">
                <li class="nav-item">
                  <a href="../full/pos_ecommerce_product_list.html" class="nav-link">
                    list Products</a>
                </li>
                <li class="nav-item">
                  <a href="../full/create_product.html" class="nav-link">Add Products</a>
                </li>
                <li class="nav-item">
                  <a href="../seed/sidebar_main.html" class="nav-link">Print Labels</a>
                </li>
                <li class="nav-item">
                  <a href="../seed/sidebar_main.html" class="nav-link">Variation</a>
                </li>
                <li class="nav-item">
                  <a href="../seed/sidebar_main.html" class="nav-link">Import Porducts</a>
                </li>
                <li class="nav-item">
                  <a href="../seed/sidebar_main.html" class="nav-link">Import Opening Stock</a>
                </li>
                <li class="nav-item">
                  <a href="../seed/sidebar_main.html" class="nav-link">Selling Price Group</a>
                </li>

                <li class="nav-item">
                  <a href="../seed/sidebar_main.html" class="nav-link">Units</a>
                </li>
                <li class="nav-item">
                  <a href="../full/catagory_list.html" class="nav-link">Catagory</a>
                </li>
                <li class="nav-item">
                  <a href="../full/sub_catagory_list.html" class="nav-link">Sub Catagory</a>
                </li>
                <li class="nav-item">
                  <a href="../full/brand.html" class="nav-link">Brands</a>
                </li>

                <li class="nav-item">
                  <a href="../seed/layout_boxed.html" class="nav-link">Warranties</a>
                </li>
                <li class="nav-item-divider"></li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="changelog.html" class="nav-link">
                <i class="icon-list-unordered"></i>
                <span>POS</span>
                <span class="badge bg-blue-400 align-self-center ml-auto">1.0</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="../../../RTL/material/full/index.html" class="nav-link"><i class="icon-width"></i> <span>RTL
                  version</span></a>
            </li>
            <!-- /main -->

            <!-- Forms -->
            <!-- <li class="nav-item-header">
                <div class="text-uppercase font-size-xs line-height-xs">
                  Forms
                </div>
                <i class="icon-menu" title="Forms"></i>
              </li> -->
            <li class="nav-item nav-item-submenu">
              <a href="#" class="nav-link"><i class="icon-pencil3"></i> <span>Purchase</span></a>
              <ul class="nav nav-group-sub" data-submenu-title="Form components">
                <li class="nav-item">
                  <a href="form_inputs.html" class="nav-link">List Purchase</a>
                </li>
                <li class="nav-item">
                  <a href="form_checkboxes_radios.html" class="nav-link">Add Purchase</a>
                </li>
                <li class="nav-item">
                  <a href="form_checkboxes_radios.html" class="nav-link">List Purchase Return</a>
                </li>
              </ul>
            </li>
            <li class="nav-item nav-item-submenu">
              <a href="#" class="nav-link"><i class="icon-file-css"></i> <span>SALE</span></a>
              <ul class="nav nav-group-sub" data-submenu-title="JSON forms">
                <li class="nav-item">
                  <a href="alpaca_basic.html" class="nav-link">All Sale</a>
                </li>
                <li class="nav-item">
                  <a href="alpaca_advanced.html" class="nav-link">Add Sale</a>
                </li>
                <li class="nav-item">
                  <a href="alpaca_controls.html" class="nav-link">List POS</a>
                </li>
                <li class="nav-item">
                  <a href="alpaca_controls.html" class="nav-link">POS</a>
                </li>

                <li class="nav-item">
                  <a href="alpaca_controls.html" class="nav-link">Add Draft</a>
                </li>
                <li class="nav-item">
                  <a href="alpaca_controls.html" class="nav-link">Add Quotations</a>
                </li>
                <li class="nav-item">
                  <a href="alpaca_controls.html" class="nav-link">List Sales Return</a>
                </li>
                <li class="nav-item">
                  <a href="alpaca_controls.html" class="nav-link">Shipments</a>
                </li>
                <li class="nav-item">
                  <a href="alpaca_controls.html" class="nav-link">Discounts</a>
                </li>
                <li class="nav-item">
                  <a href="alpaca_controls.html" class="nav-link">Import Sale</a>
                </li>
              </ul>
            </li>
            <li class="nav-item nav-item-submenu">
              <a href="#" class="nav-link"><i class="icon-spell-check"></i>
                <span>Stock Transfer</span></a>
              <ul class="nav nav-group-sub" data-submenu-title="Text editors">
                <li class="nav-item">
                  <a href="editor_summernote.html" class="nav-link">List Stock Transfer</a>
                </li>
                <li class="nav-item">
                  <a href="editor_ckeditor.html" class="nav-link">Add Stock Transfer</a>
                </li>
              </ul>
            </li>
            <li class="nav-item nav-item-submenu">
              <a href="#" class="nav-link"><i class="icon-select2"></i>
                <span>Stock Adjustments</span></a>
              <ul class="nav nav-group-sub" data-submenu-title="Pickers">
                <li class="nav-item">
                  <a href="picker_date.html" class="nav-link">List Stock Adjustments</a>
                </li>
                <li class="nav-item">
                  <a href="picker_color.html" class="nav-link">Add Stock Adjustments</a>
                </li>
              </ul>
            </li>
            <li class="nav-item nav-item-submenu">
              <a href="#" class="nav-link"><i class="icon-insert-template"></i> <span>Expenses</span></a>
              <ul class="nav nav-group-sub" data-submenu-title="Form layouts">
                <li class="nav-item">
                  <a href="form_layout_vertical.html" class="nav-link">List Expenses</a>
                </li>
                <li class="nav-item">
                  <a href="form_layout_vertical.html" class="nav-link">Add Expenses</a>
                </li>
                <li class="nav-item">
                  <a href="form_layout_vertical.html" class="nav-link">Expanse Catagories</a>
                </li>
              </ul>
            </li>
            <!-- /forms -->

            <!-- Components -->
            <li class="nav-item-header">
              <div class="text-uppercase font-size-xs line-height-xs">
                Accounts
              </div>
              <i class="icon-menu" title="Components"></i>
            </li>
            <li class="nav-item nav-item-submenu">
              <a href="#" class="nav-link"><i class="icon-grid"></i> <span>Payment Accounts</span></a>
              <ul class="nav nav-group-sub" data-submenu-title="Basic components">
                <li class="nav-item">
                  <a href="components_modals.html" class="nav-link">List Accounts</a>
                </li>
                <li class="nav-item">
                  <a href="components_dropdowns.html" class="nav-link">Blance Sheet</a>
                </li>
                <li class="nav-item">
                  <a href="components_tabs.html" class="nav-link">Trial Balance</a>
                </li>
                <li class="nav-item">
                  <a href="components_pills.html" class="nav-link">Cash Follow</a>
                </li>
                <li class="nav-item">
                  <a href="components_collapsible.html" class="nav-link">Payment Accounts</a>
                </li>
                <li class="nav-item">
                  <a href="components_navs.html" class="nav-link">Navs</a>
                </li>
                <li class="nav-item">
                  <a href="components_buttons.html" class="nav-link">Buttons</a>
                </li>
                <li class="nav-item">
                  <a href="components_popups.html" class="nav-link">Tooltips and popovers</a>
                </li>
                <li class="nav-item">
                  <a href="components_alerts.html" class="nav-link">Alerts</a>
                </li>
                <li class="nav-item">
                  <a href="components_pagination.html" class="nav-link">Pagination</a>
                </li>
                <li class="nav-item">
                  <a href="components_badges.html" class="nav-link">Badges</a>
                </li>
                <li class="nav-item">
                  <a href="components_progress.html" class="nav-link">Progress</a>
                </li>
                <li class="nav-item">
                  <a href="components_breadcrumbs.html" class="nav-link">Breadcrumbs</a>
                </li>
                <li class="nav-item">
                  <a href="components_media.html" class="nav-link">Media objects</a>
                </li>
                <li class="nav-item">
                  <a href="components_scrollspy.html" class="nav-link">Scrollspy</a>
                </li>
              </ul>
            </li>

          </ul>
        </div>
        <!-- /main navigation -->
      </div>
      <!-- /sidebar content -->
    </div>
    <!-- /main sidebar -->

    <!-- Main content -->
    <div class="content-wrapper">
      <!-- Page header -->
      <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
          <div class="page-title d-flex">
            <h4>
              <i class="icon-arrow-left52 mr-2"></i>
              <span class="font-weight-semibold">Home</span> - Dashboard
            </h4>
            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
          </div>

          <div class="header-elements d-none">
            <div class="d-flex justify-content-center">
              <a href="#" class="btn btn-link btn-float font-size-sm font-weight-semibold text-default">
                <i class="icon-bars-alt text-pink-300"></i>
                <span>Statistics</span>
              </a>
              <a href="#" class="btn btn-link btn-float font-size-sm font-weight-semibold text-default">
                <i class="icon-calculator text-pink-300"></i>
                <span>Invoices</span>
              </a>
              <a href="#" class="btn btn-link btn-float font-size-sm font-weight-semibold text-default">
                <i class="icon-calendar5 text-pink-300"></i>
                <span>Schedule</span>
              </a>
            </div>
          </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
          <div class="d-flex">
            <div class="breadcrumb">
              <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
              <span class="breadcrumb-item active">Dashboard</span>
            </div>

            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
          </div>

          <div class="header-elements d-none">
            <div class="breadcrumb justify-content-center">
              <a href="#" class="breadcrumb-elements-item">
                <i class="icon-comment-discussion mr-2"></i>
                Support
              </a>

              <div class="breadcrumb-elements-item dropdown p-0">
                <a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
                  <i class="icon-gear mr-2"></i>
                  Settings
                </a>

                <div class="dropdown-menu dropdown-menu-right">
                  <a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Account security</a>
                  <a href="#" class="dropdown-item"><i class="icon-statistics"></i> Analytics</a>
                  <a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Accessibility</a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item"><i class="icon-gear"></i> All settings</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /page header -->

      <!-- Content area -->
      <div class="content">
        <!-- Main charts -->
        <div class="row">
          <div class="col-xl-7">
            <!-- Traffic sources -->
            <div class="card">


              <div class="dropdown-center">
                <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Select Shop Location
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">ONE</a></li>
                  <li><a class="dropdown-item" href="#">TWO two</a></li>
                  <li><a class="dropdown-item" href="#">TREEE three</a></li>
                </ul>
              </div>

              <div class="card-header header-elements-inline">
                <h6 class="card-title">Sales statistics Daily</h6>
                <div class="header-elements">
                  <div class="form-check form-check-right form-check-switchery form-check-switchery-sm">
                    <label class="form-check-label">
                      Live update:
                      <input type="checkbox" class="form-input-switchery" checked data-fouc />
                    </label>
                  </div>
                </div>
              </div>

              <div class="card-body py-0">
                <div class="row">
                  <div class="col-sm-3">
                    <div class="d-flex align-items-center justify-content-center mb-2">
                      <a href="#" class="btn bg-transparent border-teal text-teal rounded-round border-2 btn-icon mr-3">
                        <i class="icon-plus3"></i>
                      </a>
                      <div>
                        <div class="font-weight-semibold"> Today Total Sale</div>
                        <span class="text-muted">2,349 avg</span>
                      </div>
                    </div>
                    <div class="w-75 mx-auto mb-3" id="new-visitors"></div>
                  </div>

                  <div class="col-sm-3">
                    <div class="d-flex align-items-center justify-content-center mb-2">
                      <a href="#"
                        class="btn bg-transparent border-warning-400 text-warning-400 rounded-round border-2 btn-icon mr-3">
                        <i class="icon-watch2"></i>
                      </a>
                      <div>
                        <div class="font-weight-semibold">Total received (sales)</div>
                        <span class="text-muted">08:20 avg</span>
                      </div>
                    </div>
                    <div class="w-75 mx-auto mb-3" id="new-sessions"></div>
                  </div>

                  <div class="col-sm-3">
                    <div class="d-flex align-items-center justify-content-center mb-2">
                      <a href="#"
                        class="btn bg-transparent border-indigo-400 text-indigo-400 rounded-round border-2 btn-icon mr-3">
                        <i class="icon-people"></i>
                      </a>
                      <div>
                        <div class="font-weight-semibold">Today total Purchase</div>
                        <span class="text-muted"><span class="badge badge-mark border-success mr-2"></span>
                          5,378 avg</span>
                      </div>
                    </div>
                    <div class="w-75 mx-auto mb-3" id="total-online"></div>
                  </div>

                  <div class="col-sm-3">
                    <div class="d-flex align-items-center justify-content-center mb-2">
                      <a href="#" class="btn bg-transparent border-teal text-teal rounded-round border-2 btn-icon mr-3">
                        <i class="icon-plus3"></i>
                      </a>
                      <div>
                        <div class="font-weight-semibold">Today Total Expense</div>
                        <span class="text-muted"><span class="badge badge-mark border-danger mr-2"></span>
                          5,378 avg</span>
                      </div>
                    </div>
                    <div class="w-75 mx-auto mb-3" id="server-load2"></div>
                  </div>
                </div>
              </div>

              <div class="chart position-relative" id="traffic-sources"></div>
            </div>
            <!-- /traffic sources -->
          </div>

          <div class="col-xl-5">
            <!-- Sales stats -->
            <div class="card">

              <div class="dropdown-center">
                <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Select Shop Location
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">All</a></li>
                  <li><a class="dropdown-item" href="#">Shop ONE</a></li>
                  <li><a class="dropdown-item" href="#">Shop TWO</a></li>
                </ul>
              </div>

              <div class="card-header header-elements-inline">
                <h6 class="card-title">Sales statistics</h6>
                <div class="header-elements">
                  <select class="form-control custom-select" id="select_date">
                    <option value="val1">June, 29 - July, 28</option>
                    <option value="val2">July, 29 - August 28</option>
                    <option value="val3" selected>August, 29 - September, 28</option>
                    <option value="val4">September, 29 - October, 28 </option>
                  </select>
                </div>
              </div>




              <div class="card-body py-0">
                <div class="row text-center">
                  <div class="col-3">
                    <div class="mb-3">
                      <span class="text-muted font-size-lg">Sales</span>
                      <h5 class="font-weight-semibold mb-0">5,689</h5>
                    </div>
                  </div>

                  <div class="col-3">
                    <div class="mb-3">
                      <span class="text-muted font-size-lg">Purchase</span>
                      <h5 class="font-weight-semibold mb-0">32,568</h5>
                    </div>
                  </div>

                  <div class="col-3">
                    <div class="mb-3">
                      <span class="text-muted font-size-lg">Sales Return</span>
                      <h5 class="font-weight-semibold mb-0">$23,464</h5>
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="mb-3">
                      <span class="text-muted font-size-lg">Purchase Return</span>
                      <h5 class="font-weight-semibold mb-0">$23,464</h5>
                    </div>
                  </div>
                </div>
              </div>

              <div class="chart mb-2" id="app_sales"></div>
              <div class="chart" id="monthly-sales-stats"></div>
            </div>
            <!-- /sales stats -->
          </div>
        </div>
        <!-- /main charts -->

        <!-- Dashboard content -->
        <div class="row">
          <div class="col-xl-8">
            <!-- Marketing campaigns -->
            <div class="card">
              <div class="card-header header-elements-sm-inline">
                <h6 class="card-title">This Week Sales & Purchase</h6>
                <div class="header-elements">
                  <span class="badge bg-success badge-pill">28 active</span>
                  <div class="list-icons ml-3">
                    <div class="dropdown">
                      <a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i
                          class="icon-menu7"></i></a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item"><i class="icon-sync"></i> Update data</a>
                        <a href="#" class="dropdown-item"><i class="icon-list-unordered"></i> Detailed log</a>
                        <a href="#" class="dropdown-item"><i class="icon-pie5"></i> Statistics</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item"><i class="icon-cross3"></i> Clear list</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card-header header-elements-inline">
                <h5 class="card-title ">Chart transforms</h5>
                <div class="header-elements">
                  <button type="button" class="btn btn-info btn-sm" id="btn-transform" data-animation="tada">Transform</button>
                  <div class="list-icons ml-3">
                    <a class="list-icons-item" data-action="collapse"></a>
                    <a class="list-icons-item" data-action="reload"></a>
                    <a class="list-icons-item" data-action="remove"></a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="chart-container">
                  <div class="chart" id="c3-transform"></div>
                </div>
              </div>


              <!-- <div
                  class="card-body d-sm-flex align-items-sm-center justify-content-sm-between flex-sm-wrap"
                >
                  
                <div class="d-flex align-items-center mb-3 mb-sm-0">
                    <div id="campaigns-donut"></div>
                    <div class="ml-3">
                      <h5 class="font-weight-semibold mb-0">
                        38,289
                        <span
                          class="text-success font-size-sm font-weight-normal"
                          ><i class="icon-arrow-up12"></i> (+16.2%)</span
                        >
                      </h5>
                      <span class="badge badge-mark border-success mr-1"></span>
                      <span class="text-muted">May 12, 12:30 am</span>
                    </div>
                  </div>

                  <div class="d-flex align-items-center mb-3 mb-sm-0">
                    <div id="campaign-status-pie"></div>
                    <div class="ml-3">
                      <h5 class="font-weight-semibold mb-0">
                        2,458
                        <span
                          class="text-danger font-size-sm font-weight-normal"
                          ><i class="icon-arrow-down12"></i> (-4.9%)</span
                        >
                      </h5>
                      <span class="badge badge-mark border-danger mr-1"></span>
                      <span class="text-muted">Jun 4, 4:00 am</span>
                    </div>
                  </div>

                  <div>
                    <a href="#" class="btn bg-indigo-300"
                      ><i class="icon-statistics mr-2"></i> View report</a
                    >
                  </div>
                </div> -->

              <div class="table-responsive">
                <table class="table text-nowrap">
                  <thead>
                    <tr class="table-active table-border-double">
                      <td colspan="5">Today</td>
                      <td class="text-right">
                        <span class="progress-meter" id="today-progress" data-progress="40">
                          <a href="#" class="btn bg-blue-400"><i class="icon-statistics mr-2"></i> Report</a>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <th class="">Product</th>
                      <th>SKU</th>
                      <th>Quantity</th>
                      <th>Grand Total</th>
                      <th>Catagory</th>
                      <th class="text-center" style="width: 20px">
                        <i class="icon-arrow-down12"></i>
                      </th>
                    </tr>
                    
                  </thead>
                  <tbody>

                    <td>
                      <div class="d-flex align-items-center">
                        <div class="mr-3">
                          <a href="#">
                            <img src="../../../../global_assets/images/New Arrivals/01.webp" class="rounded-circle"
                              width="80" height="80" alt="" />
                          </a>
                        </div>
                        <div>
                          <a href="#" class="text-default font-weight-semibold">Facebook</a>
                          <div class="text-muted font-size-sm">
                            <span class="badge badge-mark border-blue mr-1"></span>
                            02:00 - 03:00
                          </div>
                        </div>
                      </div>
                    </td>
                    <td><span class="text-muted">Mintlime</span></td>
                    <td>
                      <span class="text-success-600"><i class="icon-stats-growth2 mr-2"></i> 2.43%</span>
                    </td>
                    <td>
                      <h6 class="font-weight-semibold mb-0">$5,489</h6>
                    </td>
                    <td><span class="badge bg-blue">Sports</span></td>
                    <td class="text-center">
                      <div class="list-icons">
                        <div class="dropdown">
                          <a href="#" class="list-icons-item" data-toggle="dropdown">
                            <i class="icon-menu9"></i>
                          </a>
    
                          <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                            <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                            <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                          </div>
                        </div>
                      </div>
                    </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="mr-3">
                            <a href="#">
                              <img src="../../../../global_assets/images/New Arrivals/03.webp" class="rounded-circle"
                                width="80" height="80" alt="" />
                            </a>
                          </div>
                          <div>
                            <a href="#" class="text-default font-weight-semibold">Youtube videos</a>
                            <div class="text-muted font-size-sm">
                              <span class="badge badge-mark border-danger mr-1"></span>
                              13:00 - 14:00
                            </div>
                          </div>
                        </div>
                      </td>
                      <td><span class="text-muted">CDsoft</span></td>
                      <td>
                        <span class="text-success-600"><i class="icon-stats-growth2 mr-2"></i> 3.12%</span>
                      </td>
                      <td>
                        <h6 class="font-weight-semibold mb-0">$2,592</h6>
                      </td>
                      <td><span class="badge bg-danger">Mens</span></td>
                      <td class="text-center">
                        <div class="list-icons">
                          <div class="dropdown">
                            <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i
                                class="icon-menu7"></i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a href="#" class="dropdown-item"><i class="icon-file-stats"></i> View
                                statement</a>
                              <a href="#" class="dropdown-item"><i class="icon-file-text2"></i> Edit
                                campaign</a>
                              <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Disable
                                campaign</a>
                              <div class="dropdown-divider"></div>
                              <a href="#" class="dropdown-item"><i class="icon-gear"></i> Settings</a>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="mr-3">
                            <a href="#">
                              <img src="../../../../global_assets/images/New Arrivals/04.png" class="rounded-circle"
                                width="80" height="80" alt="" />
                            </a>
                          </div>
                          <div>
                            <a href="#" class="text-default font-weight-semibold">Spotify ads</a>
                            <div class="text-muted font-size-sm">
                              <span class="badge badge-mark border-grey-400 mr-1"></span>
                              10:00 - 11:00
                            </div>
                          </div>
                        </div>
                      </td>
                      <td><span class="text-muted">Diligence</span></td>
                      <td>
                        <span class="text-danger"><i class="icon-stats-decline2 mr-2"></i> -
                          8.02%</span>
                      </td>
                      <td>
                        <h6 class="font-weight-semibold mb-0">$1,268</h6>
                      </td>
                      <td><span class="badge bg-grey-400">Bagpack</span></td>
                      <td class="text-center">
                        <div class="list-icons">
                          <div class="dropdown">
                            <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i
                                class="icon-menu7"></i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a href="#" class="dropdown-item"><i class="icon-file-stats"></i> View
                                statement</a>
                              <a href="#" class="dropdown-item"><i class="icon-file-text2"></i> Edit
                                campaign</a>
                              <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Disable
                                campaign</a>
                              <div class="dropdown-divider"></div>
                              <a href="#" class="dropdown-item"><i class="icon-gear"></i> Settings</a>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="mr-3">
                            <a href="#">
                              <img src="../../../../global_assets/images/New Arrivals/05.webp" class="rounded-circle"
                                width="80" height="80" alt="" />
                            </a>
                          </div>
                          <div>
                            <a href="#" class="text-default font-weight-semibold">Twitter ads</a>
                            <div class="text-muted font-size-sm">
                              <span class="badge badge-mark border-grey-400 mr-1"></span>
                              04:00 - 05:00
                            </div>
                          </div>
                        </div>
                      </td>
                      <td><span class="text-muted">Deluxe</span></td>
                      <td>
                        <span class="text-success-600"><i class="icon-stats-growth2 mr-2"></i> 2.78%</span>
                      </td>
                      <td>
                        <h6 class="font-weight-semibold mb-0">$7,467</h6>
                      </td>
                      <td><span class="badge bg-grey-400">Kids</span></td>
                      <td class="text-center">
                        <div class="list-icons">
                          <div class="dropdown">
                            <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i
                                class="icon-menu7"></i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a href="#" class="dropdown-item"><i class="icon-file-stats"></i> View
                                statement</a>
                              <a href="#" class="dropdown-item"><i class="icon-file-text2"></i> Edit
                                campaign</a>
                              <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Disable
                                campaign</a>
                              <div class="dropdown-divider"></div>
                              <a href="#" class="dropdown-item"><i class="icon-gear"></i> Settings</a>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>

                    <tr class="table-active table-border-double">
                      <td colspan="5">Yesterday</td>
                      <td class="text-right">
                        <span class="progress-meter" id="yesterday-progress" data-progress="65"></span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="mr-3">
                            <a href="#">
                              <img src="../../../../global_assets/images/New Arrivals/06.webp" class="rounded-circle"
                                width="80" height="80" alt="" />
                            </a>
                          </div>
                          <div>
                            <a href="#" class="text-default font-weight-semibold">Bing campaign</a>
                            <div class="text-muted font-size-sm">
                              <span class="badge badge-mark border-success mr-1"></span>
                              15:00 - 16:00
                            </div>
                          </div>
                        </div>
                      </td>
                      <td><span class="text-muted">Metrics</span></td>
                      <td>
                        <span class="text-danger"><i class="icon-stats-decline2 mr-2"></i> -
                          5.78%</span>
                      </td>
                      <td>
                        <h6 class="font-weight-semibold mb-0">$970</h6>
                      </td>
                      <td>
                        <span class="badge bg-success-400">Pending</span>
                      </td>
                      <td class="text-center">
                        <div class="list-icons">
                          <div class="dropdown">
                            <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i
                                class="icon-menu7"></i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a href="#" class="dropdown-item"><i class="icon-file-stats"></i> View
                                statement</a>
                              <a href="#" class="dropdown-item"><i class="icon-file-text2"></i> Edit
                                campaign</a>
                              <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Disable
                                campaign</a>
                              <div class="dropdown-divider"></div>
                              <a href="#" class="dropdown-item"><i class="icon-gear"></i> Settings</a>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="mr-3">
                            <a href="#">
                              <img src="../../../../global_assets/images/New Arrivals/07.webp" class="rounded-circle"
                                width="80" height="80" alt="" />
                            </a>
                          </div>
                          <div>
                            <a href="#" class="text-default font-weight-semibold">Amazon ads</a>
                            <div class="text-muted font-size-sm">
                              <span class="badge badge-mark border-danger mr-1"></span>
                              18:00 - 19:00
                            </div>
                          </div>
                        </div>
                      </td>
                      <td><span class="text-muted">Blueish</span></td>
                      <td>
                        <span class="text-success-600"><i class="icon-stats-growth2 mr-2"></i> 6.79%</span>
                      </td>
                      <td>
                        <h6 class="font-weight-semibold mb-0">$1,540</h6>
                      </td>
                      <td><span class="badge bg-blue">Active</span></td>
                      <td class="text-center">
                        <div class="list-icons">
                          <div class="dropdown">
                            <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i
                                class="icon-menu7"></i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a href="#" class="dropdown-item"><i class="icon-file-stats"></i> View
                                statement</a>
                              <a href="#" class="dropdown-item"><i class="icon-file-text2"></i> Edit
                                campaign</a>
                              <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Disable
                                campaign</a>
                              <div class="dropdown-divider"></div>
                              <a href="#" class="dropdown-item"><i class="icon-gear"></i> Settings</a>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="mr-3">
                            <a href="#">
                              <img src="../../../../global_assets/images/New Arrivals/08.jpg" class="rounded-circle"
                                width="80" height="80" alt="" />
                            </a>
                          </div>
                          <div>
                            <a href="#" class="text-default font-weight-semibold">Dribbble ads</a>
                            <div class="text-muted font-size-sm">
                              <span class="badge badge-mark border-blue mr-1"></span>
                              20:00 - 21:00
                            </div>
                          </div>
                        </div>
                      </td>
                      <td><span class="text-muted">Teamable</span></td>
                      <td>
                        <span class="text-danger"><i class="icon-stats-decline2 mr-2"></i>
                          9.83%</span>
                      </td>
                      <td>
                        <h6 class="font-weight-semibold mb-0">$8,350</h6>
                      </td>
                      <td><span class="badge bg-danger">Closed</span></td>
                      <td class="text-center">
                        <div class="list-icons">
                          <div class="dropdown">
                            <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i
                                class="icon-menu7"></i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a href="#" class="dropdown-item"><i class="icon-file-stats"></i> View
                                statement</a>
                              <a href="#" class="dropdown-item"><i class="icon-file-text2"></i> Edit
                                campaign</a>
                              <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Disable
                                campaign</a>
                              <div class="dropdown-divider"></div>
                              <a href="#" class="dropdown-item"><i class="icon-gear"></i> Settings</a>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /marketing campaigns -->

            <!-- Quick stats boxes -->
            <div class="row">
              <div class="col-lg-4">
                <!-- Members online -->
                <div class="card bg-teal-400">
                  <div class="card-body">
                    <div class="d-flex">
                      <h3 class="font-weight-semibold mb-0">3,450</h3>
                      <span class="badge bg-teal-800 badge-pill align-self-center ml-auto">+53,6%</span>
                    </div>

                    <div>
                      Members online
                      <div class="font-size-sm opacity-75">489 avg</div>
                    </div>
                  </div>

                  <div class="container-fluid">
                    <div id="members-online"></div>
                  </div>
                </div>
                <!-- /members online -->
              </div>

              <div class="col-lg-4">
                <!-- Current server load -->
                <div class="card bg-pink-400">
                  <div class="card-body">
                    <div class="d-flex">
                      <h3 class="font-weight-semibold mb-0">49.4%</h3>
                      <div class="list-icons ml-auto">
                        <div class="dropdown">
                          <a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i
                              class="icon-cog3"></i></a>
                          <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" class="dropdown-item"><i class="icon-sync"></i> Update data</a>
                            <a href="#" class="dropdown-item"><i class="icon-list-unordered"></i> Detailed
                              log</a>
                            <a href="#" class="dropdown-item"><i class="icon-pie5"></i> Statistics</a>
                            <a href="#" class="dropdown-item"><i class="icon-cross3"></i> Clear list</a>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div>
                      Current server load
                      <div class="font-size-sm opacity-75">34.6% avg</div>
                    </div>
                  </div>

                  <div id="server-load"></div>
                </div>
                <!-- /current server load -->
              </div>

              <div class="col-lg-4">
                <!-- Today's revenue -->
                <div class="card bg-blue-400">
                  <div class="card-body">
                    <div class="d-flex">
                      <h3 class="font-weight-semibold mb-0">$18,390</h3>
                      <div class="list-icons ml-auto">
                        <a class="list-icons-item" data-action="reload"></a>
                      </div>
                    </div>

                    <div>
                      Today's revenue
                      <div class="font-size-sm opacity-75">$37,578 avg</div>
                    </div>
                  </div>

                  <div id="today-revenue"></div>
                </div>
                <!-- /today's revenue -->
              </div>
            </div>
            <!-- /quick stats boxes -->

            <!-- Support tickets -->
            <div class="card">
              <div class="card-header header-elements-sm-inline">
                <h6 class="card-title">Support tickets</h6>
                <div class="header-elements">
                  <a class="text-default daterange-ranges font-weight-semibold cursor-pointer dropdown-toggle">
                    <i class="icon-calendar3 mr-2"></i>
                    <span></span>
                  </a>
                </div>
              </div>

              <div class="card-body d-md-flex align-items-md-center justify-content-md-between flex-md-wrap">
                <div class="d-flex align-items-center mb-3 mb-md-0">
                  <div id="tickets-status"></div>
                  <div class="ml-3">
                    <h5 class="font-weight-semibold mb-0">
                      14,327
                      <span class="text-success font-size-sm font-weight-normal"><i class="icon-arrow-up12"></i>
                        (+2.9%)</span>
                    </h5>
                    <span class="badge badge-mark border-success mr-1"></span>
                    <span class="text-muted">Jun 16, 10:00 am</span>
                  </div>
                </div>

                <div class="d-flex align-items-center mb-3 mb-md-0">
                  <a href="#"
                    class="btn bg-transparent border-indigo-400 text-indigo-400 rounded-round border-2 btn-icon">
                    <i class="icon-alarm-add"></i>
                  </a>
                  <div class="ml-3">
                    <h5 class="font-weight-semibold mb-0">1,132</h5>
                    <span class="text-muted">total tickets</span>
                  </div>
                </div>

                <div class="d-flex align-items-center mb-3 mb-md-0">
                  <a href="#"
                    class="btn bg-transparent border-indigo-400 text-indigo-400 rounded-round border-2 btn-icon">
                    <i class="icon-spinner11"></i>
                  </a>
                  <div class="ml-3">
                    <h5 class="font-weight-semibold mb-0">06:25:00</h5>
                    <span class="text-muted">response time</span>
                  </div>
                </div>

                <div>
                  <a href="#" class="btn bg-teal-400" ><i class="icon-statistics mr-2"></i> Report</a>
                </div>
              </div>

              
            </div>
            <!-- /support tickets -->

            <!-- Latest posts -->
            <div class="card">
              <div class="card-header header-elements-inline">
                <h6 class="card-title">Latest posts</h6>
                <div class="header-elements">
                  <div class="list-icons">
                    <a class="list-icons-item" data-action="collapse"></a>
                    <a class="list-icons-item" data-action="reload"></a>
                    <a class="list-icons-item" data-action="remove"></a>
                  </div>
                </div>
              </div>

              <div class="card-body pb-0">
                <div class="row">
                  <div class="col-xl-6">
                    <div class="media flex-column flex-sm-row mt-0 mb-3">
                      <div class="mr-sm-3 mb-2 mb-sm-0">
                        <div class="card-img-actions">
                          <a href="#">
                            <img src="../../../../global_assets/images/placeholders/placeholder.jpg"
                              class="img-fluid img-preview rounded" alt="" />
                            <span class="card-img-actions-overlay card-img"><i class="icon-play3 icon-2x"></i></span>
                          </a>
                        </div>
                      </div>

                      <div class="media-body">
                        <h6 class="media-title">
                          <a href="#">Up unpacked friendly</a>
                        </h6>
                        <ul class="list-inline list-inline-dotted text-muted mb-2">
                          <li class="list-inline-item">
                            <i class="icon-book-play mr-2"></i> Video
                            tutorials
                          </li>
                        </ul>
                        The him father parish looked has sooner. Attachment
                        frequently terminated son hello...
                      </div>
                    </div>

                    <div class="media flex-column flex-sm-row mt-0 mb-3">
                      <div class="mr-sm-3 mb-2 mb-sm-0">
                        <div class="card-img-actions">
                          <a href="#">
                            <img src="../../../../global_assets/images/placeholders/placeholder.jpg"
                              class="img-fluid img-preview rounded" alt="" />
                            <span class="card-img-actions-overlay card-img"><i class="icon-play3 icon-2x"></i></span>
                          </a>
                        </div>
                      </div>

                      <div class="media-body">
                        <h6 class="media-title">
                          <a href="#">It allowance prevailed</a>
                        </h6>
                        <ul class="list-inline list-inline-dotted text-muted mb-2">
                          <li class="list-inline-item">
                            <i class="icon-book-play mr-2"></i> Video
                            tutorials
                          </li>
                        </ul>
                        Alteration literature to or an sympathize mr
                        imprudence. Of is ferrars subject enjoyed...
                      </div>
                    </div>
                  </div>

                  <div class="col-xl-6">
                    <div class="media flex-column flex-sm-row mt-0 mb-3">
                      <div class="mr-sm-3 mb-2 mb-sm-0">
                        <div class="card-img-actions">
                          <a href="#">
                            <img src="../../../../global_assets/images/placeholders/placeholder.jpg"
                              class="img-fluid img-preview rounded" alt="" />
                            <span class="card-img-actions-overlay card-img"><i class="icon-play3 icon-2x"></i></span>
                          </a>
                        </div>
                      </div>

                      <div class="media-body">
                        <h6 class="media-title">
                          <a href="#">Case read they must</a>
                        </h6>
                        <ul class="list-inline list-inline-dotted text-muted mb-2">
                          <li class="list-inline-item">
                            <i class="icon-book-play mr-2"></i> Video
                            tutorials
                          </li>
                        </ul>
                        On it differed repeated wandered required in. Then
                        girl neat why yet knew rose spot...
                      </div>
                    </div>

                    <div class="media flex-column flex-sm-row mt-0 mb-3">
                      <div class="mr-sm-3 mb-2 mb-sm-0">
                        <div class="card-img-actions">
                          <a href="#">
                            <img src="../../../../global_assets/images/placeholders/placeholder.jpg"
                              class="img-fluid img-preview rounded" alt="" />
                            <span class="card-img-actions-overlay card-img"><i class="icon-play3 icon-2x"></i></span>
                          </a>
                        </div>
                      </div>

                      <div class="media-body">
                        <h6 class="media-title">
                          <a href="#">Too carriage attended</a>
                        </h6>
                        <ul class="list-inline list-inline-dotted text-muted mb-2">
                          <li class="list-inline-item">
                            <i class="icon-book-play mr-2"></i> FAQ section
                          </li>
                        </ul>
                        Marianne or husbands if at stronger ye. Considered is
                        as middletons uncommonly...
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /latest posts -->
          </div>

          <div class="col-xl-4">
            <!-- Progress counters -->
            <div class="row">
              <div class="col-sm-6">
                <!-- Available hours -->

                <!-- /available hours -->
              </div>

              <div class="col-sm-6">
                <!-- Productivity goal -->


                <!-- /productivity goal -->
              </div>
            </div>
            <!-- /progress counters -->

            <!-- Daily sales -->
            <div class="card">
              <div class="card-header header-elements-inline">
                <h5 class="card-title">Monthly Catagories Sales</h5>
                <div class="header-elements">
                  <div class="list-icons">
                    <a class="list-icons-item" data-action="collapse"></a>
                    <a class="list-icons-item" data-action="reload"></a>
                    <a class="list-icons-item" data-action="remove"></a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="chart-container text-center">
                  <div class="d-inline-block" id="c3-donut-chart"></div>
                </div>
              </div>


              <div class="table-responsive">
                <table class="table text-nowrap">
                  <thead>
                    <tr>
                      <th class="w-100">Application</th>
                      <th>Time</th>
                      <th>Price</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="mr-3">
                            <a href="#" class="btn bg-primary-400 rounded-round btn-icon btn-sm">
                              <span class="letter-icon"></span>
                            </a>
                          </div>
                          <div>
                            <a href="#" class="text-default font-weight-semibold letter-icon-title">Sigma
                              application</a>
                            <div class="text-muted font-size-sm">
                              <i class="icon-checkmark3 font-size-sm mr-1"></i>
                              New order
                            </div>
                          </div>
                        </div>
                      </td>
                      <td>
                        <span class="text-muted font-size-sm">06:28 pm</span>
                      </td>
                      <td>
                        <h6 class="font-weight-semibold mb-0">$49.90</h6>
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="mr-3">
                            <a href="#" class="btn bg-danger-400 rounded-round btn-icon btn-sm">
                              <span class="letter-icon"></span>
                            </a>
                          </div>
                          <div>
                            <a href="#" class="text-default font-weight-semibold letter-icon-title">Alpha
                              application</a>
                            <div class="text-muted font-size-sm">
                              <i class="icon-spinner11 font-size-sm mr-1"></i>
                              Renewal
                            </div>
                          </div>
                        </div>
                      </td>
                      <td>
                        <span class="text-muted font-size-sm">04:52 pm</span>
                      </td>
                      <td>
                        <h6 class="font-weight-semibold mb-0">$90.50</h6>
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="mr-3">
                            <a href="#" class="btn bg-indigo-400 rounded-round btn-icon btn-sm">
                              <span class="letter-icon"></span>
                            </a>
                          </div>
                          <div>
                            <a href="#" class="text-default font-weight-semibold letter-icon-title">Delta
                              application</a>
                            <div class="text-muted font-size-sm">
                              <i class="icon-lifebuoy font-size-sm mr-1"></i>
                              Support
                            </div>
                          </div>
                        </div>
                      </td>
                      <td>
                        <span class="text-muted font-size-sm">01:26 pm</span>
                      </td>
                      <td>
                        <h6 class="font-weight-semibold mb-0">$60.00</h6>
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="mr-3">
                            <a href="#" class="btn bg-success-400 rounded-round btn-icon btn-sm">
                              <span class="letter-icon"></span>
                            </a>
                          </div>
                          <div>
                            <a href="#" class="text-default font-weight-semibold letter-icon-title">Omega
                              application</a>
                            <div class="text-muted font-size-sm">
                              <i class="icon-lifebuoy font-size-sm mr-1"></i>
                              Support
                            </div>
                          </div>
                        </div>
                      </td>
                      <td>
                        <span class="text-muted font-size-sm">11:46 am</span>
                      </td>
                      <td>
                        <h6 class="font-weight-semibold mb-0">$55.00</h6>
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="mr-3">
                            <a href="#" class="btn bg-danger-400 rounded-round btn-icon btn-sm">
                              <span class="letter-icon"></span>
                            </a>
                          </div>
                          <div>
                            <a href="#" class="text-default font-weight-semibold letter-icon-title">Alpha
                              application</a>
                            <div class="text-muted font-size-sm">
                              <i class="icon-spinner11 font-size-sm mr-2"></i>
                              Renewal
                            </div>
                          </div>
                        </div>
                      </td>
                      <td>
                        <span class="text-muted font-size-sm">10:29 am</span>
                      </td>
                      <td>
                        <h6 class="font-weight-semibold mb-0">$90.50</h6>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /daily sales -->

            <!-- My messages -->
            
            <!-- /my messages -->

            <!-- Daily financials -->
            <div class="card">
              <div class="card-header header-elements-inline">
                <h6 class="card-title">Daily financials</h6>
                <div class="header-elements">
                  <div
                    class="form-check form-check-inline form-check-right form-check-switchery form-check-switchery-sm">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-input-switchery" id="realtime" checked data-fouc />
                      Realtime
                    </label>
                  </div>
                  <span class="badge bg-danger-400 badge-pill">+86</span>
                </div>
              </div>

              <div class="card-body">
                <div class="chart mb-3" id="bullets"></div>

                <ul class="media-list">
                  <li class="media">
                    <div class="mr-3">
                      <a href="#" class="btn bg-transparent border-pink text-pink rounded-round border-2 btn-icon"><i
                          class="icon-statistics"></i></a>
                    </div>

                    <div class="media-body">
                      Stats for July, 6:
                      <span class="font-weight-semibold">1938</span> orders,
                      <span class="font-weight-semibold text-danger">$4220</span>
                      revenue
                      <div class="text-muted">2 hours ago</div>
                    </div>

                    <div class="ml-3 align-self-center">
                      <a href="#" class="list-icons-item"><i class="icon-more"></i></a>
                    </div>
                  </li>

                  <li class="media">
                    <div class="mr-3">
                      <a href="#"
                        class="btn bg-transparent border-success text-success rounded-round border-2 btn-icon"><i
                          class="icon-checkmark3"></i></a>
                    </div>

                    <div class="media-body">
                      Invoices <a href="#">#4732</a> and
                      <a href="#">#4734</a> have been paid
                      <div class="text-muted">Dec 18, 18:36</div>
                    </div>

                    <div class="ml-3 align-self-center">
                      <a href="#" class="list-icons-item"><i class="icon-more"></i></a>
                    </div>
                  </li>

                  <li class="media">
                    <div class="mr-3">
                      <a href="#"
                        class="btn bg-transparent border-primary text-primary rounded-round border-2 btn-icon"><i
                          class="icon-alignment-unalign"></i></a>
                    </div>

                    <div class="media-body">
                      Affiliate commission for June has been paid
                      <div class="text-muted">36 minutes ago</div>
                    </div>

                    <div class="ml-3 align-self-center">
                      <a href="#" class="list-icons-item"><i class="icon-more"></i></a>
                    </div>
                  </li>

                  <li class="media">
                    <div class="mr-3">
                      <a href="#"
                        class="btn bg-transparent border-warning-400 text-warning-400 rounded-round border-2 btn-icon"><i
                          class="icon-spinner11"></i></a>
                    </div>

                    <div class="media-body">
                      Order <a href="#">#37745</a> from July, 1st has been
                      refunded
                      <div class="text-muted">4 minutes ago</div>
                    </div>

                    <div class="ml-3 align-self-center">
                      <a href="#" class="list-icons-item"><i class="icon-more"></i></a>
                    </div>
                  </li>

                  <li class="media">
                    <div class="mr-3">
                      <a href="#" class="btn bg-transparent border-teal text-teal rounded-round border-2 btn-icon"><i
                          class="icon-redo2"></i></a>
                    </div>

                    <div class="media-body">
                      Invoice <a href="#">#4769</a> has been sent to
                      <a href="#">Robert Smith</a>
                      <div class="text-muted">Dec 12, 05:46</div>
                    </div>

                    <div class="ml-3 align-self-center">
                      <a href="#" class="list-icons-item"><i class="icon-more"></i></a>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /daily financials -->
          </div>
        </div>
        <!-- /dashboard content -->
      </div>
      <!-- /content area -->

      <!-- Footer -->
      <div class="navbar navbar-expand-lg navbar-light">
        <div class="text-center d-lg-none w-100">
          <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse"
            data-target="#navbar-footer">
            <i class="icon-unfold mr-2"></i>
            Footer
          </button>
        </div>

        <div class="navbar-collapse collapse" id="navbar-footer">
          <span class="navbar-text">
            &copy; 2015 - 2018. <a href="#">Syntex Squad Web App Kit</a> by
            <a href="http://themeforest.net/user/Kopyov" target="_blank">Jituraz</a>
          </span>

          <ul class="navbar-nav ml-lg-auto">
            <li class="nav-item">
              <a href="#" class="navbar-nav-link" target="_blank"><i
                  class="icon-lifebuoy mr-2"></i> Support</a>
            </li>
            <li class="nav-item">
              <a href="#" class="navbar-nav-link" target="_blank"><i
                  class="icon-file-text2 mr-2"></i> Docs</a>
            </li>
            <li class="nav-item">
              <a href=""
                class="navbar-nav-link font-weight-semibold"><span class="text-pink-400"><i class="icon-cart2 mr-2"></i>
                  Purchase</span></a>
            </li>
          </ul>
        </div>
      </div>
      <!-- /footer -->
    </div>
    <!-- /main content -->
  </div>
  <!-- /page content -->

  <script>
    var label = document.querySelector(".label");
    var c = document.getElementById("c");
    var ctx = c.getContext("2d");
    var cw = c.width = 800;
    var ch = c.height = 400;
    var cx = cw / 2,
      cy = ch / 2;
    var rad = Math.PI / 180;
    var frames = 0;

    ctx.lineWidth = 1;
    ctx.strokeStyle = "#999";
    ctx.fillStyle = "#ccc";
    ctx.font = "14px monospace";

    var grd = ctx.createLinearGradient(0, 0, 0, cy);
    grd.addColorStop(0, "hsla(167,72%,60%,1)");
    grd.addColorStop(1, "hsla(167,72%,60%,0)");

    var oData = {
      "Day1": 10,
      "Day2": 39.9,
      "Day3": 17,
      "Day4": 30.0,
      "Day5": 5.3,
      "Day6": 38.4,
      "Day7": 15.7,

    };

    var valuesRy = [];
    var propsRy = [];
    for (var prop in oData) {

      valuesRy.push(oData[prop]);
      propsRy.push(prop);
    }


    var vData = 8;
    var hData = valuesRy.length;
    var offset = 50.5; //offset chart axis
    var chartHeight = ch - 2 * offset;
    var chartWidth = cw - 2 * offset;
    var t = 1 / 7; // curvature : 0 = no curvature 
    var speed = 5; // for the animation

    var A = {
      x: offset,
      y: offset
    }
    var B = {
      x: offset,
      y: offset + chartHeight
    }
    var C = {
      x: offset + chartWidth,
      y: offset + chartHeight
    }

    /*
          A  ^
          |  |  
          + 25
          |
          |
          |
          + 25  
          |__|_________________________________  C
          B
    */

    // CHART AXIS -------------------------
    ctx.beginPath();
    ctx.moveTo(A.x, A.y);
    ctx.lineTo(B.x, B.y);
    ctx.lineTo(C.x, C.y);
    ctx.stroke();

    // vertical ( A - B )
    var aStep = (chartHeight - 50) / (vData);

    var Max = Math.ceil(arrayMax(valuesRy) / 10) * 10;
    var Min = Math.floor(arrayMin(valuesRy) / 10) * 10;
    var aStepValue = (Max - Min) / (vData);
    console.log("aStepValue: " + aStepValue); //8 units
    var verticalUnit = aStep / aStepValue;

    var a = [];
    ctx.textAlign = "right";
    ctx.textBaseline = "middle";
    for (var i = 0; i <= vData; i++) {

      if (i == 0) {
        a[i] = {
          x: A.x,
          y: A.y + 25,
          val: Max
        }
      } else {
        a[i] = {}
        a[i].x = a[i - 1].x;
        a[i].y = a[i - 1].y + aStep;
        a[i].val = a[i - 1].val - aStepValue;
      }
      drawCoords(a[i], 3, 0);
    }

    //horizontal ( B - C )
    var b = [];
    ctx.textAlign = "center";
    ctx.textBaseline = "hanging";
    var bStep = chartWidth / (hData + 1);

    for (var i = 0; i < hData; i++) {
      if (i == 0) {
        b[i] = {
          x: B.x + bStep,
          y: B.y,
          val: propsRy[0]
        };
      } else {
        b[i] = {}
        b[i].x = b[i - 1].x + bStep;
        b[i].y = b[i - 1].y;
        b[i].val = propsRy[i]
      }
      drawCoords(b[i], 0, 3)
    }

    function drawCoords(o, offX, offY) {
      ctx.beginPath();
      ctx.moveTo(o.x - offX, o.y - offY);
      ctx.lineTo(o.x + offX, o.y + offY);
      ctx.stroke();

      ctx.fillText(o.val, o.x - 2 * offX, o.y + 2 * offY);
    }
    //----------------------------------------------------------

    // DATA
    var oDots = [];
    var oFlat = [];
    var i = 0;

    for (var prop in oData) {
      oDots[i] = {}
      oFlat[i] = {}

      oDots[i].x = b[i].x;
      oFlat[i].x = b[i].x;

      oDots[i].y = b[i].y - oData[prop] * verticalUnit - 25;
      oFlat[i].y = b[i].y - 25;

      oDots[i].val = oData[b[i].val];

      i++
    }



    ///// Animation Chart ///////////////////////////
    //var speed = 3;
    function animateChart() {
      requestId = window.requestAnimationFrame(animateChart);
      frames += speed; //console.log(frames)
      ctx.clearRect(60, 0, cw, ch - 60);

      for (var i = 0; i < oFlat.length; i++) {
        if (oFlat[i].y > oDots[i].y) {
          oFlat[i].y -= speed;
        }
      }
      drawCurve(oFlat);
      for (var i = 0; i < oFlat.length; i++) {
        ctx.fillText(oDots[i].val, oFlat[i].x, oFlat[i].y - 25);
        ctx.beginPath();
        ctx.arc(oFlat[i].x, oFlat[i].y, 3, 0, 2 * Math.PI);
        ctx.fill();
      }

      if (frames >= Max * verticalUnit) {
        window.cancelAnimationFrame(requestId);

      }
    }
    requestId = window.requestAnimationFrame(animateChart);

    /////// EVENTS //////////////////////
    c.addEventListener("mousemove", function (e) {
      label.innerHTML = "";
      label.style.display = "none";
      this.style.cursor = "default";

      var m = oMousePos(this, e);
      for (var i = 0; i < oDots.length; i++) {

        output(m, i);
      }

    }, false);

    function output(m, i) {
      ctx.beginPath();
      ctx.arc(oDots[i].x, oDots[i].y, 20, 0, 2 * Math.PI);
      if (ctx.isPointInPath(m.x, m.y)) {
        //console.log(i);
        label.style.display = "block";
        label.style.top = (m.y + 10) + "px";
        label.style.left = (m.x + 10) + "px";
        label.innerHTML = "<strong>" + propsRy[i] + "</strong>: " + valuesRy[i] + "%";
        c.style.cursor = "pointer";
      }
    }

    // CURVATURE
    function controlPoints(p) {
      // given the points array p calculate the control points
      var pc = [];
      for (var i = 1; i < p.length - 1; i++) {
        var dx = p[i - 1].x - p[i + 1].x; // difference x
        var dy = p[i - 1].y - p[i + 1].y; // difference y
        // the first control point
        var x1 = p[i].x - dx * t;
        var y1 = p[i].y - dy * t;
        var o1 = {
          x: x1,
          y: y1
        };

        // the second control point
        var x2 = p[i].x + dx * t;
        var y2 = p[i].y + dy * t;
        var o2 = {
          x: x2,
          y: y2
        };

        // building the control points array
        pc[i] = [];
        pc[i].push(o1);
        pc[i].push(o2);
      }
      return pc;
    }

    function drawCurve(p) {

      var pc = controlPoints(p); // the control points array

      ctx.beginPath();
      //ctx.moveTo(p[0].x, B.y- 25);
      ctx.lineTo(p[0].x, p[0].y);
      // the first & the last curve are quadratic Bezier
      // because I'm using push(), pc[i][1] comes before pc[i][0]
      ctx.quadraticCurveTo(pc[1][1].x, pc[1][1].y, p[1].x, p[1].y);

      if (p.length > 2) {
        // central curves are cubic Bezier
        for (var i = 1; i < p.length - 2; i++) {
          ctx.bezierCurveTo(pc[i][0].x, pc[i][0].y, pc[i + 1][1].x, pc[i + 1][1].y, p[i + 1].x, p[i + 1].y);
        }
        // the first & the last curve are quadratic Bezier
        var n = p.length - 1;
        ctx.quadraticCurveTo(pc[n - 1][0].x, pc[n - 1][0].y, p[n].x, p[n].y);
      }

      //ctx.lineTo(p[p.length-1].x, B.y- 25);
      ctx.stroke();
      ctx.save();
      ctx.fillStyle = grd;
      ctx.fill();
      ctx.restore();
    }

    function arrayMax(array) {
      return Math.max.apply(Math, array);
    };

    function arrayMin(array) {
      return Math.min.apply(Math, array);
    };

    function oMousePos(canvas, evt) {
      var ClientRect = canvas.getBoundingClientRect();
      return { //objeto
        x: Math.round(evt.clientX - ClientRect.left),
        y: Math.round(evt.clientY - ClientRect.top)
      }
    }
  </script>

</body>

</html>