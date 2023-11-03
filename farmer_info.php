<?php

include_once 'init.php';
//
//    if (!$user->isLoggedIn()) {
//        header("Location: login.php");
//    }

$page = "farmer_info";
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard | AgriServe</title>


    <link href="css/light.css" rel="stylesheet">
    <!--     <link href="css/dark.css" rel="stylesheet">-->
    <link href="https://cdn.jsdelivr.net/gh/hung1001/font-awesome-pro@4cac1a6/css/all.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" type="text/javascript"></script>

</head>
<body>

<body data-theme="light" data-layout="fluid" data-sidebar-position="left" data-sidebar-layout="default">
<div class="wrapper">
    <nav id="sidebar" class="sidebar js-sidebar">
        <div class="sidebar-content js-simplebar">
            <a class='sidebar-brand' href='/'>
					<span class="sidebar-brand-text align-middle">
						AgriServe
					</span>
                <svg class="sidebar-brand-icon align-middle" width="32px" height="32px" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="1.5"
                     stroke-linecap="square" stroke-linejoin="miter" color="#FFFFFF" style="margin-left: -3px">
                    <path d="M12 4L20 8.00004L12 12L4 8.00004L12 4Z"></path>
                    <path d="M20 12L12 16L4 12"></path>
                    <path d="M20 16L12 20L4 16"></path>
                </svg>
            </a>

            <?php

            include_once 'includes/navbar.php';

            ?>

        </div>
    </nav>

    <div class="main">
        <nav class="navbar navbar-expand navbar-light navbar-bg">
            <a class="sidebar-toggle js-sidebar-toggle">
                <i class="hamburger align-self-center"></i>
            </a>


            <div class="navbar-collapse collapse">
                <ul class="navbar-nav navbar-align">
                    <li class="nav-item dropdown">
                        <a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
                            <div class="position-relative">
                                <i class="align-middle" data-feather="bell"></i>
                                <span class="indicator">4</span>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
                            <div class="dropdown-menu-header">
                                4 New Notifications
                            </div>
                            <div class="list-group">
                                <a href="#" class="list-group-item">
                                    <div class="row g-0 align-items-center">
                                        <div class="col-2">
                                            <i class="text-danger" data-feather="alert-circle"></i>
                                        </div>
                                        <div class="col-10">
                                            <div class="text-dark">Update completed</div>
                                            <div class="text-muted small mt-1">Restart server 12 to complete the update.</div>
                                            <div class="text-muted small mt-1">30m ago</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="row g-0 align-items-center">
                                        <div class="col-2">
                                            <i class="text-warning" data-feather="bell"></i>
                                        </div>
                                        <div class="col-10">
                                            <div class="text-dark">Lorem ipsum</div>
                                            <div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate hendrerit et.</div>
                                            <div class="text-muted small mt-1">2h ago</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="row g-0 align-items-center">
                                        <div class="col-2">
                                            <i class="text-primary" data-feather="home"></i>
                                        </div>
                                        <div class="col-10">
                                            <div class="text-dark">Login from 192.186.1.8</div>
                                            <div class="text-muted small mt-1">5h ago</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="row g-0 align-items-center">
                                        <div class="col-2">
                                            <i class="text-success" data-feather="user-plus"></i>
                                        </div>
                                        <div class="col-10">
                                            <div class="text-dark">New connection</div>
                                            <div class="text-muted small mt-1">Christina accepted your request.</div>
                                            <div class="text-muted small mt-1">14h ago</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="dropdown-menu-footer">
                                <a href="#" class="text-muted">Show all notifications</a>
                            </div>
                        </div>
                    </li>


                    <li class="nav-item">
                        <a class="nav-icon js-fullscreen d-none d-lg-block" href="#">
                            <div class="position-relative">
                                <i class="align-middle" data-feather="maximize"></i>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-icon pe-md-0 dropdown-toggle" href="#" data-bs-toggle="dropdown">
                            <img src="img/avatars/avatar.jpg" class="avatar img-fluid rounded" alt="Charles Hall" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class='dropdown-item' href='/pages-settings'><i class="align-middle me-1" data-feather="settings"></i> Settings &
                                Privacy</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Log out</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <main class="content">
            <div class="container-fluid p-0">

                <div class="row mb-2 mb-xl-3">
                    <div class="col-auto d-none d-sm-block">
                        <h3><strong>Farmers'</strong> Personal Information</h3>
                    </div>
                </div>
                <div class="row">


                    <div class="col-xl-12 col-xxl-12 d-flex">
                        <div class="w-100">

                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <div class="btn-group btn-group-sm">
                                            <button type="button" class="btn btn-primary"><i class="fal fa-print"></i> Print</button>
                                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addFarmerModal"><i class="fal fa-user-plus"></i> Add Farmer</button>
                                        </div>
                                        <table class="table table-hover" id="farmers">
                                            <thead>
                                            <tr>
                                                <th scope="col">First Name</th>
                                                <th scope="col">Middle Name</th>
                                                <th scope="col">Last Name</th>
                                                <th scope="col">Birth Date</th>
                                                <th scope="col">Contact Number</th>
                                                <th scope="col">Address</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td scope="row">Goggy Villanueva</td>
                                                    <td>Winterfell</td>
                                                    <td>093432434</td>
                                                    <td>Sudipen</td>
                                                    <td>Sudipen</td>
                                                    <td>Sudipen</td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-outline-primary"><i class="fal fa-print"></i></button>
                                                            <button type="button" class="btn btn-outline-info"><i class="fal fa-eye"></i></button>
                                                            <button type="button" class="btn btn-outline-secondary"><i class="fal fa-pencil"></i></button>
                                                            <button type="button" class="btn btn-outline-danger"><i class="fal fa-trash"></i></button>
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


                </div>
            </div>
        </main>


        <?php

        include_once 'includes/footer.php';

        ?>


    </div>
</div>


<div class="modal fade" id="addFarmerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Farmer</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="first_name">First Name</label>
                                <input type="text" id="first_name" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="middle_name">Middle Name</label>
                                <input type="text" id="middle_name" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="last_name">Last Name</label>
                                <input type="text" id="last_name" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="extension_name">Ext. Name</label>
                                <input type="text" id="extension_name" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                           <div class="mb-3">
                               <label>Address</label>
                               <input type="text" id="house_number" placeholder="HOUSE/LOT/BLDG. NO./PUROK" class="form-control">
                           </div>
                            <div class="mb-3">
                                <input type="text" id="house_number" placeholder="MUNICIPALITY/CITY" class="form-control">
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="mb-3">
                                <label></label>
                                <input type="text" id="house_number" placeholder="STREET/SITIO/SUBDIV" class="form-control">
                            </div>
                            <div class="mb-3">
                                <input type="text" id="house_number" placeholder="PROVINCE" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label></label>
                                <input type="text" id="house_number" placeholder="BARANGAY" class="form-control">
                            </div>
                            <div class="mb-3">
                                <input type="text" id="house_number" placeholder="REGION" class="form-control">
                            </div>
                        </div>





                    </div>
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<script src="js/app.js"></script>
<script>
    const dataTable = new simpleDatatables.DataTable("#farmers")
</script>
</body>
</html>
