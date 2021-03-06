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
              <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  
              py-0 overflow-hidden">
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
              <a class="nav-link" href="#" role="button" 
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-ungroup"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-lg 
              dropdown-menu-dark bg-default  dropdown-menu-right ">
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
              <a class="nav-link pr-0" href="#" role="button" 
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
              <h6 class="h2 text-white d-inline-block mb-0">Category</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#">
                  <i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                  <li class="breadcrumb-item active" 
                  aria-current="page">Category</li>
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
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row justify-content-center">
        <div class="col-xl-8">
          <div class="card bg-default">
          <div class="card bg-secondary border-0 mb-0">
            <div class="card-header bg-transparent pb-5 text-center">
              <h2>Create Category</h2>
            </div>
            <?php echo $msg; ?>
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                <!-- <small>Or sign in with credentials</small> -->
              </div>
              
                <form role="form" method="post" action="category.php">
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                      <i class="ni ni-bullet-list-67 text-default"></i></span>
                    </div>
                    <input class="form-control" 
                    value="<?php echo $data[0]['prod_name']; ?>"
                     type="text" readonly>
                    <input type="hidden" name="pid" 
                    value="<?php echo $data[0]['id']; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-bullet-list-67 
                      text-default"></i></i></span>
                    </div>
                    <input class="form-control" name="cname" id="cname"
                    placeholder="Category Name" type="text">
                    <div class="invalid-feedback"></div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                      HTML
                      <!-- <i class="ni ni-bullet-list-67 
                      text-default"></i> -->
                      </span>
                    </div>
                    <textarea class="form-control" name="link" 
                     type="text"></textarea>
                  </div>
                </div>
                <div class="text-center">
                  <input type="submit" value="Create Category" 
                  class="btn btn-primary" name="submit" 
                  onclick="return validateCategory()">
                </div>
              </form>
            </div>
          </div>
          
          </div>
        </div>    
      </div>
      <script>
        function validateCategory()
        {
          var cname = $('#cname').val();
          let pattern = /^[a-zA-Z0-9.\s]+$/
          if (cname != "") {
            if (cname[0] == ' ' || cname[cname.length-1] == ' ') {
                $('#cname').addClass('is-invalid');
                $('.invalid-feedback').html('No space allowed at start and end !');
                $('#cname').removeClass('is-valid');
                return false;
            } else if (!pattern.test(cname)) {
                $('#cname').addClass('is-invalid');
                $('#cname').removeClass('is-valid');
                $('.invalid-feedback').html('Enter valid category name !');
                return false;
            } else {
                $('#cname').addClass('is-valid');
                $('#cname').removeClass('is-invalid');
                $('.invalid-feedback').html('');
                return true;
            }
          } else {
            $('#cname').addClass('is-invalid');
            $('#cname').removeClass('is-valid');
            $('.invalid-feedback').html('Required field !');
            return false;
          } 

        }
      </script>
      <div class="col-md-4">
        <div class="modal fade" id="modal-form" tabindex="-1" role="dialog"
         aria-labelledby="modal-form" aria-hidden="true">
          <div class="modal-dialog modal- modal-dialog-centered modal-md" 
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
                    <form role="form" id='editform'>
                    <input type="hidden" id='uid' >
                    <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                      <i class="ni ni-bullet-list-67 text-default"></i></span>
                    </div>
                    <input class="form-control" 
                    value="<?php echo $data[0]['prod_name']; ?>" type="text" 
                    readonly>
                    <input type="hidden" name="pid" 
                    value="<?php echo $data[0]['prod_parent_id']; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                      <i class="ni ni-bullet-list-67 text-default"></i></i></span>
                    </div>
                    <input class="form-control" name="cname" 
                    placeholder="Category Name" id="ucname" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                      <i class="ni ni-bullet-list-67 text-default"></i></i></span>
                    </div>
                    <select name="avai" id="avai" class="form-control">
                      <option value="1">Available</option>
                      <option value="0">Unavailable</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                      <!-- <i class="ni ni-bullet-list-67 text-default"></i> -->
                      HTML
                      </span>
                    </div>
                    <textarea class="form-control" name="link2" id="ulink" 
                     type="text"></textarea>
                  </div>
                </div>
                <div class="text-center">
                  <input type="submit" value="Update Category" 
                  class="btn btn-primary" id="updateCategory">
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
              <table id='tableData' class="table align-items-center 
              table-flush cattable">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Sr.No.</th>
                    <th scope="col">Parent Name</th>
                    <th scope="col">Category Name</th>
                    <th scope="col">Link</th>
                    <th scope="col">Status</th>
                    <th scope="col">Date</th>
                    <th id="actionth" scope="col">Action</th>
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
