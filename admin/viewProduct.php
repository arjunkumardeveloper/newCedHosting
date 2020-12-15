<?php
/**
 * The file doc comment
 * php version 7.2.10
 * 
 * @category Class
 * @package  Package
 * @author   Original Author <author@example.com>
 * @license  https://www.cedcoss.com cedcoss 
 * @link     link
 */
  require 'header.php';
  require '../Product.php';
  $Product = new Product();

$data =  $Product->fetchParentCategory();
// print_r($data);

$msg = '';
if (isset($_POST['submit'])) {
    $cname = $_POST['cname'];
    $link = $_POST['link'];
    $pid = $_POST['pid'];
    // echo $pid;
    // exit();

    $res = $Product->addCategory($cname, $link, $pid);
    if ($res == true) {
        $msg = "Successfully Added Your Category !";
    } else {
        $msg = "Faild !";
    }
}
?>

  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary 
    border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <form class="navbar-search navbar-search-light form-inline mr-sm-3"
          id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close"
            data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" 
              data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" 
              data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-bell-55"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 
              overflow-hidden">
                <!-- Dropdown header -->
                <div class="px-3 py-3">
                  <h6 class="text-sm text-muted m-0">You have 
                  <strong class="text-primary">13</strong> notifications.</h6>
                </div>
                <!-- List group -->
                <div class="list-group list-group-flush">
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" 
                        src="assets/img/theme/team-1.jpg" 
                        class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between 
                        align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>2 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">
                        Let's meet at Starbucks at 11:30. Wdyt?</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" 
                        src="assets/img/theme/team-2.jpg" 
                        class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between 
                        align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>3 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">
                        A new issue has been reported for Argon.</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" 
                        src="assets/img/theme/team-3.jpg" 
                        class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between 
                        align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>5 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Your posts have been liked a lot.</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" 
                        src="assets/img/theme/team-4.jpg" 
                        class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between 
                        align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>2 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">
                        Let's meet at Starbucks at 11:30. Wdyt?</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" 
                        src="assets/img/theme/team-5.jpg" 
                        class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between 
                        align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>3 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">
                        A new issue has been reported for Argon.</p>
                      </div>
                    </div>
                  </a>
                </div>
                <!-- View all -->
                <a href="#!" class="dropdown-item text-center 
                text-primary font-weight-bold py-3">View all</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-ungroup"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-dark 
              bg-default dropdown-menu-right ">
                <div class="row shortcuts px-4">
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle 
                    bg-gradient-red">
                      <i class="ni ni-calendar-grid-58"></i>
                    </span>
                    <small>Calendar</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle 
                    bg-gradient-orange">
                      <i class="ni ni-email-83"></i>
                    </span>
                    <small>Email</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle 
                    bg-gradient-info">
                      <i class="ni ni-credit-card"></i>
                    </span>
                    <small>Payments</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle 
                    bg-gradient-green">
                      <i class="ni ni-books"></i>
                    </span>
                    <small>Reports</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle 
                    bg-gradient-purple">
                      <i class="ni ni-pin-3"></i>
                    </span>
                    <small>Maps</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle 
                    bg-gradient-yellow">
                      <i class="ni ni-basket"></i>
                    </span>
                    <small>Shop</small>
                  </a>
                </div>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="assets/img/profile.png">
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">
                        <?php 
                        if (isset($_SESSION['admindata'])) {
                            echo $_SESSION['admindata']['name'];
                        }
                        ?>
                    </span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>My profile</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-settings-gear-65"></i>
                  <span>Settings</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-calendar-grid-58"></i>
                  <span>Activity</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-support-16"></i>
                  <span>Support</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="../logout.php" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">View Product</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home">
                  </i></a></li>
                  <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                  <li class="breadcrumb-item active" aria-current="page">
                  View Product</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="#" class="btn btn-sm btn-neutral">New</a>
              <a href="#" class="btn btn-sm btn-neutral">Filters</a>
            </div>
          </div>
          
        </div>
      </div>
    </div>
    

      <div class="col-md-4">
        <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" 
        aria-labelledby="modal-form" aria-hidden="true">
          <div class="modal-dialog modal- modal-dialog-centered modal-lg" 
          role="document">
            <div class="modal-content">
              <div class="modal-body p-0">
                <div class="card bg-secondary border-0 mb-0">
                  <div class="card-header bg-transparent pb-5">
                    
                    <div class="btn-wrapper text-center">
                      
                    <h1>Edit Category</h1>
                    </div>
                  </div>
                  <div class="card-body px-lg-5 py-lg-5">
                  <form>
                <p class="text-danger">* Required Field</p>
                <h6 class="heading-small text-muted mb-4">Enter Product Details</h6>
                
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">
                        Select Product Category<span class="text-danger">*</span>
                        </label>
                        <!-- <input type="text" id="input-username" 
                        class="form-control" placeholder="Username" 
                        value="lucky.jesse"> -->
                        <select name="" id="cid" class="form-control">
                        <option value="">Select Category</option>
                        <?php 
                        $data = $Product->fetchChildCategory();
                        foreach ($data as $row) {
                            ?>
                          <option value="<?php echo $row['id']; ?>">
                            <?php echo $row['prod_name']; ?>
                          </option>
                            <?php 
                        } 
                        ?>
                            <!-- <option value="">Windows hosting</option>
                            <option value="">CMSHosting</option>
                            <option value="">WordPress hosting</option> -->
                        </select>
                        <div class="invalid-feedback">
                          Please select product category !
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">
                        Enter Product Name<span class="text-danger">*</span></label>
                        <input type="text" id="productName" 
                        class="form-control" placeholder="Enter Product Name">
                      <div class="invalid-feedback">
                        Please enter valid product name !
                      </div>
                      <small class="text-muted">
                        Enter alphanumeric/alphabetic, not only numeric,
                        only "-" special character allowed</small>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">
                        Page URL<span class="text-danger">*</span></label>
                        <input type="text" id="pageUrl" class="form-control" 
                        placeholder="Page URL">
                        <div class="invalid-feedback">
                          Please enter valid page url !
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4" />
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">
                Product Description (Enter Product Description Below)</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">
                        Enter Monthly Price<span class="text-danger">*</span></label>
                        <input type="text" id="monthPrice" class="form-control"
                         placeholder="ex: 23">
                        <div class="invalid-feedback">
                          Please enter valid monthly price !
                        </div>
                        <h6 class="heading-small text-muted mb-4">
                        Enter Monthly Price(max-length:15), only numeric,
                         allowed single dot</h6>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">
                        Enter Annual Price<span class="text-danger">*</span></label>
                        <input type="text" id="annualPrice" class="form-control"
                         placeholder="ex: 23">
                        <div class="invalid-feedback">
                          lease enter valid annual price !
                        </div>
                        <h6 class="heading-small text-muted mb-4">
                        Enter Annual Price(max-length:15), only numeric,
                         allowed single dot</h6>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" 
                        for="input-first-name">SKU<span class="text-danger">*</span>
                        </label>
                        <input type="text" id="sku" class="form-control"
                         placeholder="SKU">
                        <div class="invalid-feedback">
                          Please enter valid sku !
                        </div>
                        <h6 class="heading-small text-muted mb-4">
                        Enter not only special character,
                         all combination (only "#", "-" special char allowed)</h6>
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4" />
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Features</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">
                        Web Space(in GB)<span class="text-danger">*</span></label>
                        <input type="text" id="webSpace" class="form-control
                        " placeholder="Web Space(in GB)">
                        <div class="invalid-feedback">
                          Please enter valid web space !
                        </div>
                        <h6 class="heading-small text-muted mb-4">
                        Enter 0.5 for 512 MB, max-length: 5gb, 
                        only numeric, allowed single dot</h6>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">
                        Bandwidth (in GB)<span class="text-danger">*</span></label>
                        <input type="text" id="bandWidth" class="form-control"
                         placeholder="Bandwidth (in GB)">
                        <div class="invalid-feedback">
                          Please enter valid Band width !
                        </div>
                        <h6 class="heading-small text-muted mb-4">
                        Enter 0.5 for 512 MB, max-length: 5gb, 
                        only numeric, allowed single dot</h6>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">
                        Free Domain<span class="text-danger">*</span></label>
                        <input type="text" id="freeDomain" class="form-control"
                         placeholder="Free Domain">
                        <div class="invalid-feedback">
                          Please enter valid free domain !
                        </div>
                        <h6 class="heading-small text-muted mb-4">
                        Enter 0 if no domain available in this service, </h6>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">
                        Language / Technology Support<span class="text-danger">*
                        </span></label>
                        <input type="text" id="language" class="form-control"
                         placeholder="Free Domain">
                        <div class="invalid-feedback">
                          Please enter valid language / technology support !
                        </div>
                        <h6 class="heading-small text-muted mb-4">
                        Separate by (,) Ex: PHP, MySQL, MongoDB</h6>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">
                        Mailbox<span class="text-danger">*</span></label>
                        <input type="text" id="mailBox" class="form-control"
                         placeholder="Free Domain">
                        <div class="invalid-feedback">
                          Please enter valid mail box !
                        </div>
                        <h6 class="heading-small text-muted mb-4">
                        Enter Number of mailbox will be provided, enter 0 if none
                        </h6>
                      </div>
                    </div>
                  </div>
                  <input type="hidden" id="updateDescId">
                  <input type="hidden" id="updateCatId">
                  <div class="text-center">
                      <input type="submit" id="updateProduct" value="Update Now"
                       class="btn btn-primary">
                    </div>
                </div>
              </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>



    <div class="row">
        <div class="col-xl-12">
          <div class="card">
            <div class="table-responsive">
              <table  id='viewProduct' class="table align-items-center 
              table-flush cattable">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Sr No.</th>
                    <th scope="col">Product Parent Name</th>
                    <th scope="col">Category Name</th>
                    <th scope="col">Link</th>
                    <th scope="col">Status</th>
                    <th scope="col">Date</th>
                    <th scope="col">Web Space</th>
                    <th scope="col">Band Width</th>
                    <th scope="col">Free Domain</th>
                    <th scope="col">Language</th>
                    <th scope="col">Mail Box</th>
                    <th scope="col">Monthly Price</th>
                    <th scope="col">Annual Price</th>
                    <th scope="col">SKU</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
<?php
  require 'footer.php';
?>
</div>
<script>
$('#productName').on('focusout', validateProductName);
    // $('#pageUrl').on('focusout', validateProductName);
    $('#monthPrice').on('blur', validateMonthPrice);
    $('#annualPrice').on('blur', validateAnnualPrice);
    $('#sku').on('blur', validateSku);
    $('#webSpace').on('blur', validateWebSpace);
    $('#bandWidth').on('blur', validateBandWidth);
    $('#freeDomain').on('blur', validateFreeDomain);
    $('#mailBox').on('blur', validateMailBox);
    $('#language').on('blur', validateTechnology);
    // $('#prodForm').on('submit', validateForm);

    $('#updateProduct').attr('disabled', true);

    /**
     * Function for validateProductName
     * 
     * @return validateProductName()
     */
    function validateProductName()
    {
      $('#updateProduct').attr('disabled', false);
        let value = $(this).val();
        let pattern = /^[^0-9][a-zA-Z0-9-\s]+$/;

        if (value != '') {
                if (value[0] == ' ' || value[value.length-1] == ' ') {
                    $(this).addClass('is-invalid');
                    $('.invalid-feedback').html('No space allowed at start and end !');
                    
                    // $('#updateProduct').attr('disabled', true);
                } else {
                    if (!pattern.test(value)) {
                        $(this).addClass('is-invalid');
                        $(this).removeClass('is-valid');
                        // $('#updateProduct').attr('disabled', true);
                    } else {
                        $(this).addClass('is-valid');
                        $(this).removeClass('is-invalid');
                        
                            
                        
                    }
                }
        } else {
            $(this).addClass('is-invalid');
            $(this).removeClass('is-valid');
            
            $('.invalid-feedback').html('Required field !');
            // $('#updateProduct').attr('disabled', true);
        }
    }


    /**
     * Function for validatePrice
     * 
     * @return validatePrice()
     */
    function validateMonthPrice()
    {
      $('#updateProduct').attr('disabled', false);
        let value = $(this).val();
        let pattern = /^([0-9]+(\.[0-9]+)?)$/;

        if (value != '') {
            if (value.length > 15) {
                $(this).addClass('is-invalid');
                $('.invalid-feedback').html('max-length 15 allowed !');
                $(this).removeClass('is-valid');
                
                // $('#updateProduct').attr('disabled', true);
            } else {
                if (!pattern.test(value)) {
                    $(this).addClass('is-invalid');
                    $(this).removeClass('is-valid');
                    
                    // $('#updateProduct').attr('disabled', true);
                } else {
                    $(this).addClass('is-valid');
                    $(this).removeClass('is-invalid');
                    
                }
            }
        } else {
            $(this).addClass('is-invalid');
            $('.invalid-feedback').html
            $(this).removeClass('is-valid');('Required field !');
            
            // $('#updateProduct').attr('disabled', true);
        }
    }

    function validateAnnualPrice()
    {
      $('#updateProduct').attr('disabled', false);
        let value = $(this).val();
        let pattern = /^([0-9]+(\.[0-9]+)?)$/;

        if (value != '') {
            if (value.length > 15) {
                $(this).addClass('is-invalid');
                $('.invalid-feedback').html('max-length 15 allowed !');
                $(this).removeClass('is-valid');
                
                // $('#updateProduct').attr('disabled', true);
            } else {
                if (!pattern.test(value)) {
                    $(this).addClass('is-invalid');
                    $(this).removeClass('is-valid');
                    
                    // $('#updateProduct').attr('disabled', true);
                } else {
                    $(this).addClass('is-valid');
                    $(this).removeClass('is-invalid');
                    
                }
            }
        } else {
            $(this).addClass('is-invalid');
            $('.invalid-feedback').html
            $(this).removeClass('is-valid');('Required field !');
            
            // $('#updateProduct').attr('disabled', true);
        }
    }


    /**proname+pageurl+month+annual+sku+webspace+bandwidth+freedomain+mailbox+language >= 10
     * Function for validateSku
     * 
     * @return validateSku()
     */
    function validateSku()
    {
      $('#updateProduct').attr('disabled', false);
        let value = $(this).val();
        // let pattern = /^[^0-9#-][a-zA-Z0-9^#-]+$/;
        let pattern = /^(([a-zA-Z0-9-#?]+)([a-zA-Z0-9]+))|(([a-zA-Z0-9-#?]+)([a-zA-Z0-9]+)([-#?]))+$/
        if (value != '') {
            if (!pattern.test(value)) {
                $(this).addClass('is-invalid');
                $(this).removeClass('is-valid');
                
                // $('#updateProduct').attr('disabled', true);
            } else {
                $(this).addClass('is-valid');
                $(this).removeClass('is-invalid');
                
            }
        } else {
            $(this).addClass('is-invalid');
            $('.invalid-feedback').html('Required field !');
            $(this).removeClass('is-valid');
            
            // $('#updateProduct').attr('disabled', true);
        }
    }

    /**
     * Function for validateGB
     * 
     * @return validateGB()
     */
    function validateWebSpace()
    {
      $('#updateProduct').attr('disabled', false);
        let value = $(this).val();
        let pattern = /^([0-9]+(\.[0-9]+)?)$/;
        if (value != '') {
            if (value.length > 5) {
                $(this).addClass('is-invalid');
                $('.invalid-feedback').html('max-length 5 allowed !');
                $(this).removeClass('is-valid');
                
                // $('#updateProduct').attr('disabled', true);
            } else {
                if (!pattern.test(value)) {
                    $(this).addClass('is-invalid');
                    $(this).removeClass('is-valid');
                   
                    // $('#updateProduct').attr('disabled', true);
                } else {
                    $(this).addClass('is-valid');
                    $(this).removeClass('is-invalid');
                    
                }
            }
        } else {
            $(this).addClass('is-invalid');
            $(this).removeClass('is-valid');
            $('.invalid-feedback').html('Required field !');
           
            // $('#updateProduct').attr('disabled', true);
        }
    }


    function validateBandWidth()
    {
      $('#updateProduct').attr('disabled', false);
        let value = $(this).val();
        let pattern = /^([0-9]+(\.[0-9]+)?)$/;
        if (value != '') {
            if (value.length > 5) {
                $(this).addClass('is-invalid');
                $('.invalid-feedback').html('max-length 5 allowed !');
                $(this).removeClass('is-valid');
               
                // $('#updateProduct').attr('disabled', true);
            } else {
                if (!pattern.test(value)) {
                    $(this).addClass('is-invalid');
                    $(this).removeClass('is-valid');
                   
                    // $('#updateProduct').attr('disabled', true);
                } else {
                    $(this).addClass('is-valid');
                    $(this).removeClass('is-invalid');
                    
                }
            }
        } else {
            $(this).addClass('is-invalid');
            $(this).removeClass('is-valid');
            $('.invalid-feedback').html('Required field !');
            
            // $('#updateProduct').attr('disabled', true);
        }
    }

    /**
     * Function for validateNumber
     * 
     * @return validateNumber()
     */
    function validateFreeDomain()
    {
      $('#updateProduct').attr('disabled', false);
        let value = $(this).val();
        // let pattern = /^[0-9]$/;
        let pattern = /^([a-zA-Z]+$)|(^([0-9])+$)/;
        if (value != '') {
            if (!pattern.test(value)) {
                $(this).addClass('is-invalid');
                $(this).removeClass('is-valid');
                
                // $('#updateProduct').attr('disabled', true);
            } else {
                $(this).addClass('is-valid');
                $(this).removeClass('is-invalid');
                
            }
        } else {
            $(this).addClass('is-invalid');
            $('.invalid-feedback').html('Required field !');
            $(this).removeClass('is-valid');
            
            // $('#updateProduct').attr('disabled', true);
        }
    }

    function validateMailBox()
    {
      $('#updateProduct').attr('disabled', false);
        let value = $(this).val();
        // let pattern = /^[0-9]$/;
        let pattern = /^([a-zA-Z]+$)|(^([0-9])+$)/;
        if (value != '') {
            if (!pattern.test(value)) {
                $(this).addClass('is-invalid');
                $(this).removeClass('is-valid');
                
                $('#updateProduct').attr('disabled', true);
                return false;
            } else {
                $(this).addClass('is-valid');
                $(this).removeClass('is-invalid');
                $('#updateProduct').attr('disabled', false);
                return true;
            }
        } else {
            $(this).addClass('is-invalid');
            $('.invalid-feedback').html('Required field !');
            $(this).removeClass('is-valid');
           
            $('#updateProduct').attr('disabled', true);
            return false;
        }
    }



    /**
     * Function for validateTechnology
     * 
     * @return validateTechnology()
     */
    function validateTechnology()
    {
      $('#updateProduct').attr('disabled', false);
        let value = $(this).val();
        let pattern = /^[a-zA-Z,\s]+$/;
        if (value != '') {
            if (value[0] == ' ' || value[value.length-1] == ' ') {
                $(this).addClass('is-invalid');
                $('.invalid-feedback').html('No space allowed at start and end !');
                $(this).removeClass('is-valid');
                
                $('#updateProduct').attr('disabled', true);
                return false;
            } else if (!pattern.test(value)) {
                $(this).addClass('is-invalid');
                $(this).removeClass('is-valid');
                $('#updateProduct').attr('disabled', true);
                return false;
                
            } else {
                $(this).addClass('is-valid');
                $(this).removeClass('is-invalid');
                $('#updateProduct').attr('disabled', false);
                return true;
            }
        } else {
            $(this).addClass('is-invalid');
            $('.invalid-feedback').html('Required field !');
            $(this).removeClass('is-valid');
            
            $('#updateProduct').attr('disabled', true);
            return false;
        }
    }
</script>
