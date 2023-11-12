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

                <form id="add_farmer_form">
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
                               <select id="add_region" class="form-control"></select>
                           </div>
                            <div class="mb-3">
                                <select id="add_barangay" class="form-control"></select>

                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="mb-3">
                                <label></label>
                                <select id="add_province" class="form-control"></select>

                            </div>
                            <div class="mb-3">
                                <input type="text" id="house_number" placeholder="STREET/SITIO/SUBDIV" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label></label>
                                <select id="add_municipality" class="form-control"> </select>
                            </div>
                            <input type="text" id="house_number" placeholder="HOUSE/LOT/BLDG. NO./PUROK" class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="sex">Sex</label>
                                <select id="sex" name="sex" class="form-control">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="birtdate">Birthdate</label>
                                <input type="date" id="add_birthday" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="mb-3">
                                <label>Birthplace</label>
                                <select id="add_birthplace_region" class="form-control"></select>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="mb-3">
                                <label></label>
                                <select id="add_birthplace_province" class="form-control"></select>
                            </div>
                        </div>
                         <div class="col-md-3">
                            <div class="mb-3">
                                <label></label>
                                <select id="add_birthplace_municipality" class="form-control"></select>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="mobile_number">Mobile Number</label>
                                <input type="tel" id="mobile_number" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="date_of_birth">Date of Birth</label>
                                <input type="date" id="date_of_birth" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="place_of_birth">Place of Birth</label>
                                <input type="text" id="place_of_birth" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="religion">Religion</label>
                                <input type="text" id="religion" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="civil_status">Civil Status</label>
                                <select id="civil_status" class="form-control">
                                    <option value="Single">Single</option>
                                    <option value="Married">Married</option>
                                    <option value="Divorced">Divorced</option>
                                    <option value="Widowed">Widowed</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="education_level">Highest Formal Education</label>
                                <input type="text" id="education_level" class="form-control">
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="mother_maiden_name">Mother's Maiden Name</label>
                                <input type="text" id="mother_maiden_name" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="spouse_name">Spouse Name</label>
                                <input type="text" id="spouse_name" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="is_pwd">Is Person with Disability (PWD)</label>
                                <select id="is_pwd" class="form-control">
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="is_4ps">Is 4Ps Beneficiary</label>
                                <select id="is_4ps" class="form-control">
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="is_ip">Is Indigenous Person (IP)</label>
                                <select id="is_ip" class="form-control">
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="government_id_type">Government ID Type</label>
                                <input type="text" id="government_id_type" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="government_id_number">Government ID Number</label>
                                <input type="text" id="government_id_number" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="is_associated">Is Associated with an Organization</label>
                                <select id="is_associated" class="form-control">
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="association_name">Association Name</label>
                                <input type="text" id="association_name" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="is_household_head">Is Household Head</label>
                                <select id="is_household_head" class="form-control">
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="household_head_relationship">Household Head Relationship</label>
                                <input type="text" id="household_head_relationship" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="living_household_members">Number of Living Household Members</label>
                                <input type="number" id="living_household_members" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="no_of_female">Number of Female Household Members</label>
                                <input type="number" id="no_of_female" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="no_of_male">Number of Male Household Members</label>
                                <input type="number" id="no_of_male" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="emergency_contact_name">Emergency Contact Name</label>
                                <input type="text" id="emergency_contact_name" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="emergency_contact_number">Emergency Contact Number</label>
                                <input type="tel" id="emergency_contact_number" class="form-control">
                            </div>
                        </div>


                </form>

            </div>
            <div class="modal-footer">
                <button type="button" id="submitForm" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</div>
<script src="js/app.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://f001.backblazeb2.com/file/buonzz-assets/jquery.ph-locations-v1.0.0.js"></script>
<script>
    const dataTable = new simpleDatatables.DataTable("#farmers")


    $(document).ready(function () {
        $("#add_farmer_form").on("click", function () {
            var formData = $("#myForm").serialize();

            $.ajax({
                type: "POST",
                url: "AgriServe/Ajax.php",
                data: formData,
                dataType: 'json',
                success: function (response) {
                    console.log(response);
                    if (response.success) {
                        alert('Form submitted successfully!');
                        // You can redirect or update the UI as needed
                    } else {
                        // Handle errors from the server
                        alert('Error: ' + response.message);
                    }
                },
                error: function (error) {
                    console.log("Error: ", error);
                    // Handle AJAX request errors
                    alert('An error occurred while submitting the form.');
                }
            });
        });
    });



    var my_handlers = {
        fill_provinces: function () {
            var region_code = $(this).val();
            $('#add_province').ph_locations('fetch_list', [{ "region_code": region_code }]);
        },

        fill_cities: function () {
            var province_code = $(this).val();
            $('#add_municipality').ph_locations('fetch_list', [{ "province_code": province_code }]);
        },

        fill_barangays: function () {
            var city_code = $(this).val();
            $('#add_barangay').ph_locations('fetch_list', [{ "city_code": city_code }]);
        },

        fill_birthplace_provinces: function () {
            var region_code = $(this).val();
            $('#add_birthplace_province').ph_locations('fetch_list', [{ "region_code": region_code }]);
        },

        fill_birthplace_cities: function () {
            var province_code = $(this).val();
            $('#add_birthplace_municipality').ph_locations('fetch_list', [{ "province_code": province_code }]);
        },
    };

    $(function () {
        $('#add_region').on('change', my_handlers.fill_provinces);
        $('#add_province').on('change', my_handlers.fill_cities);
        $('#add_municipality').on('change', my_handlers.fill_barangays);

        $('#add_birthplace_region').on('change', my_handlers.fill_birthplace_provinces);
        $('#add_birthplace_province').on('change', my_handlers.fill_birthplace_cities);
        $('#add_birthplace_municipality').on('change', my_handlers.fill_barangays);

        $('#add_region').ph_locations({ 'location_type': 'regions' });
        $('#add_province').ph_locations({ 'location_type': 'provinces' });
        $('#add_municipality').ph_locations({ 'location_type': 'cities' });
        $('#add_barangay').ph_locations({ 'location_type': 'barangays' });

        $("#add_birthplace_region").ph_locations({ 'location_type': 'regions' })
        $('#add_birthplace_province').ph_locations({ 'location_type': 'provinces' });
        $('#add_birthplace_municipality').ph_locations({ 'location_type': 'cities' });

        $("#add_birthplace_region").ph_locations('fetch_list');
        $('#add_region').ph_locations('fetch_list');
    });


</script>
</body>
</html>
