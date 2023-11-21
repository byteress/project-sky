<?php

class Farmers
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function fetchAllFarmers()
    {
        $sql = "SELECT * FROM farmer_info";
        $stmt = $this->db->query($sql);
        if ($stmt->execute()){
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }

    public function fetchFarmerById($farmerId)
    {
        $sql = "SELECT * FROM farmer_info WHERE farmer_id = :fid";
        return $this->executeQuery($sql, [':fid' => $farmerId], true);
    }

    public function addFarmer($data)
    {
        $query = "INSERT INTO farmer_info (firstname, middlename, surname, extension_name, address, sex, mobile_number, date_of_birth, place_of_birth, religion, civil_status, highest_formal_education, mother_maiden_name, spouse_name, is_pwd, is_4ps, is_ip, has_government_id, government_id_type, government_id_number, is_associated, association_name, is_household_head, household_head_name, household_head_relationship, living_household_members, no_of_female, no_of_male, emergency_contact_name, emergency_contact_number) 
                  VALUES (:firstname, :middlename, :surname, :extension_name, :address, :sex, :mobile_number, :date_of_birth, :place_of_birth, :religion, :civil_status, :highest_formal_education, :mother_maiden_name, :spouse_name, :is_pwd, :is_4ps, :is_ip, :has_government_id, :government_id_type, :government_id_number, :is_associated, :association_name, :is_household_head, :household_head_name, :household_head_relationship, :living_household_members, :no_of_female, :no_of_male, :emergency_contact_name, :emergency_contact_number)";

        return $this->executeStatement($query, $data);
    }

    public function editFarmer($farmerId, $data)
    {
        $query = "UPDATE farmer_info SET
                  firstname = :firstname,
                  middlename = :middlename,
                  surname = :surname,
                  extension_name = :extension_name,
                  address = :address,
                  sex = :sex,
                  mobile_number = :mobile_number,
                  date_of_birth = :date_of_birth,
                  place_of_birth = :place_of_birth,
                  religion = :religion,
                  civil_status = :civil_status,
                  highest_formal_education = :highest_formal_education,
                  mother_maiden_name = :mother_maiden_name,
                  spouse_name = :spouse_name,
                  is_pwd = :is_pwd,
                  is_4ps = :is_4ps,
                  is_ip = :is_ip,
                  has_government_id = :has_government_id,
                  government_id_type = :government_id_type,
                  government_id_number = :government_id_number,
                  is_associated = :is_associated,
                  association_name = :association_name,
                  is_household_head = :is_household_head,
                  household_head_name = :household_head_name,
                  household_head_relationship = :household_head_relationship,
                  living_household_members = :living_household_members,
                  no_of_female = :no_of_female,
                  no_of_male = :no_of_male,
                  emergency_contact_name = :emergency_contact_name,
                  emergency_contact_number = :emergency_contact_number
                  WHERE farmer_id = :farmerId";

        $data[':farmerId'] = $farmerId;

        return $this->executeStatement($query, $data);
    }

    public function farmerDatatables() {
        $selectedBarangay = $_POST['barangay'];

        // Reading value
        $draw = $_POST['draw'];
        $row = $_POST['start'];
        $rowperpage = $_POST['length']; // Rows display per page
        $columnIndex = $_POST['order'][0]['column']; // Column index
        $columnName = $_POST['columns'][$columnIndex]['data']; // Column name
        $columnSortOrder = $_POST['order'][0]['dir']; // asc or desc
        $searchValue = $_POST['search']['value']; // Search value

        $searchArray = array();

        $filterBarangay = "";
        if ($selectedBarangay !== "All") {
            $filterBarangay = "AND address LIKE :filterQuery";
        }

        // Search
        $searchQuery = " ";
        if ($searchValue != '') {
            $searchQuery = " AND (firstname LIKE :surname OR surname LIKE :surname ) ";
            $searchArray = array(
                'firstname' => "%$searchValue%",
                'surname' => "%$searchValue%",
            );
        }

        // Total number of records without filtering
        $stmt = $this->db->prepare("SELECT COUNT(*) AS allcount FROM farmer_info WHERE 1 " . $filterBarangay);
        $stmt->execute();
        $records = $stmt->fetch();
        $totalRecords = $records['allcount'];

        // Total number of records with filtering
        $stmt = $this->db->prepare("SELECT COUNT(*) AS allcount FROM farmer_info WHERE 1 " . $filterBarangay . " " . $searchQuery);
        $stmt->execute($searchArray);
        $records = $stmt->fetch();
        $totalRecordwithFilter = $records['allcount'];

        // Fetch records
        $sql = "SELECT * FROM farmer_info WHERE 1 " . $filterBarangay . " " . $searchQuery . " ORDER BY " . $columnName . " " . $columnSortOrder . " LIMIT :limit,:offset";

        $stmt = $this->db->prepare($sql);

        // Bind values
        foreach ($searchArray as $key => $search) {
            $stmt->bindValue(':' . $key, $search, PDO::PARAM_STR);
        }

        if ($selectedBarangay !== "All") {
            $stmt->bindValue(':filterQuery', "%$selectedBarangay%", PDO::PARAM_STR);
        }

        $stmt->bindValue(':limit', (int)$row, PDO::PARAM_INT);
        $stmt->bindValue(':offset', (int)$rowperpage, PDO::PARAM_INT);
        $stmt->execute();
        $empRecords = $stmt->fetchAll();

        $data = array();

        foreach ($empRecords as $row) {
            $data[] = array(
                "firstname" => $row['firstname'],
                "surname" => $row['surname'],
                "middlename" => $row['middlename'],
                "address" => $row['address'],
                "mobile_number" => $row['mobile_number'],
                "birth_date" => $row['date_of_birth'],
                "actions" => '<td>
                <div class="btn-group">
                <button type="button" class="btn btn-outline-primary print_farmer" data-farmer-id="' . $row['farmer_id'] . '"><i class="fal fa-print"></i></button>
                <button type="button" class="btn btn-outline-info view_farmer" data-farmer-id="' . $row['farmer_id'] . '"><i class="fal fa-eye"></i></button>
                <button type="button" class="btn btn-outline-secondary edit_farmer" data-farmer-id="' . $row['farmer_id'] . '"><i class="fal fa-pencil"></i></button>
                <button type="button" class="btn btn-outline-danger delete_farmer" data-farmer-id="' . $row['farmer_id'] . '"><i class="fal fa-trash"></i></button>
                </div>
                </td>'
            );
        }

        // Response
        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordwithFilter,
            "aaData" => $data
        );

        echo json_encode($response);
    }

    private function executeQuery($sql, $params = [], $single = false)
    {
        $stmt = $this->db->prepare($sql);
        $stmt->execute($params);

        return ($single) ? $stmt->fetch(PDO::FETCH_ASSOC) : $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    private function executeStatement($query, $params)
    {
        $stmt = $this->db->prepare($query);
        return $stmt->execute($params);
    }
}
