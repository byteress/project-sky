<?php
include_once __DIR__ . '/../init.php';

if ($_POST['action']) {

    $action = $_POST['action'];

    switch ($action) {
        case 'userLogin':
            $auth = new Authentication();
            $auth->userLogin($_POST['username'], $_POST['password']);
        break;
        case 'addFarmer':

            break;
        default:
            echo "Unknown request";
    }

}

function handleAddFarmer() {
    $farmers = new Farmers();

    $firstname = $_POST['first_name'];
    $middlename = $_POST['middle_name'];
    $surname = $_POST['last_name'];
    $extension_name = $_POST['extension_name'];

    $add_region = $_POST['add_region'];
    $add_barangay = $_POST['add_barangay'];
    $add_province = $_POST['add_province'];
    $house_number_street = $_POST['house_number_street'];
    $add_municipality = $_POST['add_municipality'];

    $sex = $_POST['sex'];
    $add_birthday = $_POST['add_birthday'];
    $add_birthplace_region = $_POST['add_birthplace_region'];
    $add_birthplace_province = $_POST['add_birthplace_province'];
    $add_birthplace_municipality = $_POST['add_birthplace_municipality'];

    $mobile_number = $_POST['mobile_number'];
    $date_of_birth = $_POST['date_of_birth'];
    $place_of_birth = $_POST['place_of_birth'];

    $religion = $_POST['religion'];
    $civil_status = $_POST['civil_status'];
    $education_level = $_POST['education_level'];

    $mother_maiden_name = $_POST['mother_maiden_name'];
    $spouse_name = $_POST['spouse_name'];
    $is_pwd = $_POST['is_pwd'];
    $is_4ps = $_POST['is_4ps'];
    $is_ip = $_POST['is_ip'];

    $government_id_type = $_POST['government_id_type'];
    $government_id_number = $_POST['government_id_number'];
    $is_associated = $_POST['is_associated'];
    $association_name = $_POST['association_name'];

    $is_household_head = $_POST['is_household_head'];
    $household_head_relationship = $_POST['household_head_relationship'];
    $living_household_members = $_POST['living_household_members'];

    $no_of_female = $_POST['no_of_female'];
    $no_of_male = $_POST['no_of_male'];
    $emergency_contact_name = $_POST['emergency_contact_name'];
    $emergency_contact_number = $_POST['emergency_contact_number'];

    $farmers->addFarmer(
        $firstname, $middlename, $surname, $extension_name,
        $add_region, $add_barangay, $add_province, $house_number_street, $add_municipality,
        $sex, $add_birthday, $add_birthplace_region, $add_birthplace_province, $add_birthplace_municipality,
        $mobile_number, $date_of_birth, $place_of_birth,
        $religion, $civil_status, $education_level,
        $mother_maiden_name, $spouse_name, $is_pwd, $is_4ps, $is_ip,
        $government_id_type, $government_id_number, $is_associated, $association_name,
        $is_household_head, $household_head_relationship, $living_household_members,
        $no_of_female, $no_of_male, $emergency_contact_name, $emergency_contact_number
    );

    // Send a response back to the client
    echo json_encode(['success' => true, 'message' => 'Farmer added successfully']);

}