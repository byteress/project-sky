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
         handleAddFarmer();
            break;
        case 'editFarmer':
            handleEditFarmer();
            break;
        case 'fetchFarmerById':
            $farmer = new Farmers();
            $data = $farmer->fetchFarmerById($_POST['id']);
            echo json_encode($data);
            break;
        case 'deleteFarmer':
            $farmer = new Farmers();
            $farmer->deleteFarmer($_POST['id']);
            echo json_encode(['success' => true, 'message' => 'Farmer deleted successfully']);

            break;
        default:
            echo "Unknown request";
    }

}

function handleEditFarmer() {
    if (isset($_POST['id'])) {
        $farmer_id = $_POST['id'];

        $farmers = new Farmers();
        $existing_data = $farmers->fetchFarmerById($farmer_id);

        if (!$existing_data) {
            echo json_encode(['success' => false, 'message' => 'Farmer not found']);
            return;
        }

        // Update the fields based on the posted data
        $updated_data = array(
            'firstname' => $_POST['first_name'],
            'middlename' => $_POST['middle_name'],
            'surname' => $_POST['last_name'],
            'extension_name' => $_POST['extension_name'],
            'address' => $_POST['edit_address'],
            'sex' => $_POST['sex'],
            'mobile_number' => $_POST['mobile_number'],
            'date_of_birth' => $_POST['add_birthday'],
            'place_of_birth' => $_POST['edit_birthplace'],
            'religion' => $_POST['religion'],
            'civil_status' => $_POST['civil_status'],
            'highest_formal_education' => $_POST['education_level'],
            'mother_maiden_name' => $_POST['mother_maiden_name'],
            'spouse_name' => $_POST['spouse_name'],
            'is_pwd' => $_POST['is_pwd'],
            'is_4ps' => $_POST['is_4ps'],
            'is_ip' => $_POST['is_ip'],
            'government_id_type' => $_POST['government_id_type'],
            'government_id_number' => $_POST['government_id_number'],
            'is_associated' => $_POST['is_associated_edit'],
            'association_name' => $_POST['association_name'],
            'is_household_head' => $_POST['is_household_head'],
            'household_head_name' => $_POST['first_name'],
            'household_head_relationship' => $_POST['household_head_relationship'],
            'living_household_members' => $_POST['living_household_members'],
            'no_of_female' => $_POST['no_of_female'],
            'no_of_male' => $_POST['no_of_male'],
            'emergency_contact_name' => $_POST['emergency_contact_name'],
            'emergency_contact_number' => $_POST['emergency_contact_number']
        );

        $data_to_update = array_merge($existing_data, $updated_data);

        // Perform the update
        $farmers->editFarmer($farmer_id, $data_to_update);

        // Send a response back to the client
        echo json_encode(['success' => true, 'message' => 'Farmer updated successfully']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Invalid request']);
    }
}


function handleAddFarmer() {
    $farmers = new Farmers();

    $data = array(
        'firstname' => $_POST['first_name'],
        'middlename' => $_POST['middle_name'],
        'surname' => $_POST['last_name'],
        'extension_name' => $_POST['extension_name'],
        'address' => $_POST['house_number'] . ', ' . $_POST['street'] . ', '. $_POST['add_barangay'] . ', '. $_POST['add_municipality'] .', '. $_POST['add_province'],
        'sex' => $_POST['sex'],
        'mobile_number' => $_POST['mobile_number'],
        'date_of_birth' => $_POST['add_birthday'],
        'place_of_birth' => $_POST['add_birthplace_municipality'] . ', '. $_POST['add_birthplace_province'],
        'religion' => $_POST['religion'],
        'civil_status' => $_POST['civil_status'],
        'highest_formal_education' => $_POST['education_level'],
        'mother_maiden_name' => $_POST['mother_maiden_name'],
        'spouse_name' => $_POST['spouse_name'],
        'is_pwd' => $_POST['is_pwd'],
        'is_4ps' => $_POST['is_4ps'],
        'is_ip' => $_POST['is_ip'],
        'has_government_id' => ($_POST['government_id_type'] != '' && $_POST['government_id_number'] != ''),
        'government_id_type' => $_POST['government_id_type'],
        'government_id_number' => $_POST['government_id_number'],
        'is_associated' => $_POST['is_associated'],
        'association_name' => $_POST['association_name'],
        'is_household_head' => $_POST['is_household_head'],
        'household_head_name' => $_POST['first_name'],  // Assuming the first name is the household head name
        'household_head_relationship' => $_POST['household_head_relationship'],
        'living_household_members' => $_POST['living_household_members'],
        'no_of_female' => $_POST['no_of_female'],
        'no_of_male' => $_POST['no_of_male'],
        'emergency_contact_name' => $_POST['emergency_contact_name'],
        'emergency_contact_number' => $_POST['emergency_contact_number']
    );


    $farmers->addFarmer(
        $data
    );

    // Send a response back to the client
    echo json_encode(['success' => true, 'message' => 'Farmer added successfully']);

}