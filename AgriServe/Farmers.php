<?php

class Farmers
{

    /**
     * @var Database
     */
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function addFarmer($firstname, $middlename, $surname, $extension_name, $address, $sex, $mobile_number, $date_of_birth, $place_of_birth, $religion, $civil_status, $highest_formal_education, $mother_maiden_name, $spouse_name, $is_pwd, $is_4ps, $is_ip, $has_government_id, $government_id_type, $government_id_number, $is_associated, $association_name, $is_household_head, $household_head_name, $household_head_relationship, $living_household_members, $no_of_female, $no_of_male, $emergency_contact_name, $emergency_contact_number) {

        try {
            $query = "INSERT INTO farmer_info (firstname, middlename, surname, extension_name, address, sex, mobile_number, date_of_birth, place_of_birth, religion, civil_status, highest_formal_education, mother_maiden_name, spouse_name, is_pwd, is_4ps, is_ip, has_government_id, government_id_type, government_id_number, is_associated, association_name, is_household_head, household_head_name, household_head_relationship, living_household_members, no_of_female, no_of_male, emergency_contact_name, emergency_contact_number) 
                      VALUES (:firstname, :middlename, :surname, :extension_name, :address, :sex, :mobile_number, :date_of_birth, :place_of_birth, :religion, :civil_status, :highest_formal_education, :mother_maiden_name, :spouse_name, :is_pwd, :is_4ps, :is_ip, :has_government_id, :government_id_type, :government_id_number, :is_associated, :association_name, :is_household_head, :household_head_name, :household_head_relationship, :living_household_members, :no_of_female, :no_of_male, :emergency_contact_name, :emergency_contact_number)";

            $stmt = $this->db->prepare($query);

            $stmt->bindParam(':firstname', $firstname);
            $stmt->bindParam(':middlename', $middlename);
            $stmt->bindParam(':surname', $surname);
            $stmt->bindParam(':extension_name', $extension_name);
            $stmt->bindParam(':address', $address);
            $stmt->bindParam(':sex', $sex);
            $stmt->bindParam(':mobile_number', $mobile_number);
            $stmt->bindParam(':date_of_birth', $date_of_birth);
            $stmt->bindParam(':place_of_birth', $place_of_birth);
            $stmt->bindParam(':religion', $religion);
            $stmt->bindParam(':civil_status', $civil_status);
            $stmt->bindParam(':highest_formal_education', $highest_formal_education);
            $stmt->bindParam(':mother_maiden_name', $mother_maiden_name);
            $stmt->bindParam(':spouse_name', $spouse_name);
            $stmt->bindParam(':is_pwd', $is_pwd);
            $stmt->bindParam(':is_4ps', $is_4ps);
            $stmt->bindParam(':is_ip', $is_ip);
            $stmt->bindParam(':has_government_id', $has_government_id);
            $stmt->bindParam(':government_id_type', $government_id_type);
            $stmt->bindParam(':government_id_number', $government_id_number);
            $stmt->bindParam(':is_associated', $is_associated);
            $stmt->bindParam(':association_name', $association_name);
            $stmt->bindParam(':is_household_head', $is_household_head);
            $stmt->bindParam(':household_head_name', $household_head_name);
            $stmt->bindParam(':household_head_relationship', $household_head_relationship);
            $stmt->bindParam(':living_household_members', $living_household_members);
            $stmt->bindParam(':no_of_female', $no_of_female);
            $stmt->bindParam(':no_of_male', $no_of_male);
            $stmt->bindParam(':emergency_contact_name', $emergency_contact_name);
            $stmt->bindParam(':emergency_contact_number', $emergency_contact_number);

            if($stmt->execute()){
                return true;
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function editFarmer($farmerId, $firstname, $middlename, $surname, $extension_name, $address, $sex, $mobile_number, $date_of_birth, $place_of_birth, $religion, $civil_status, $highest_formal_education, $mother_maiden_name, $spouse_name, $is_pwd, $is_4ps, $is_ip, $has_government_id, $government_id_type, $government_id_number, $is_associated, $association_name, $is_household_head, $household_head_name, $household_head_relationship, $living_household_members, $no_of_female, $no_of_male, $emergency_contact_name, $emergency_contact_number)
    {
        try {
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

            $stmt = $this->db->prepare($query);

            $stmt->bindParam(':farmerId', $farmerId);
            $stmt->bindParam(':firstname', $firstname);
            $stmt->bindParam(':middlename', $middlename);
            $stmt->bindParam(':surname', $surname);
            $stmt->bindParam(':extension_name', $extension_name);
            $stmt->bindParam(':address', $address);
            $stmt->bindParam(':sex', $sex);
            $stmt->bindParam(':mobile_number', $mobile_number);
            $stmt->bindParam(':date_of_birth', $date_of_birth);
            $stmt->bindParam(':place_of_birth', $place_of_birth);
            $stmt->bindParam(':religion', $religion);
            $stmt->bindParam(':civil_status', $civil_status);
            $stmt->bindParam(':highest_formal_education', $highest_formal_education);
            $stmt->bindParam(':mother_maiden_name', $mother_maiden_name);
            $stmt->bindParam(':spouse_name', $spouse_name);
            $stmt->bindParam(':is_pwd', $is_pwd);
            $stmt->bindParam(':is_4ps', $is_4ps);
            $stmt->bindParam(':is_ip', $is_ip);
            $stmt->bindParam(':has_government_id', $has_government_id);
            $stmt->bindParam(':government_id_type', $government_id_type);
            $stmt->bindParam(':government_id_number', $government_id_number);
            $stmt->bindParam(':is_associated', $is_associated);
            $stmt->bindParam(':association_name', $association_name);
            $stmt->bindParam(':is_household_head', $is_household_head);
            $stmt->bindParam(':household_head_name', $household_head_name);
            $stmt->bindParam(':household_head_relationship', $household_head_relationship);
            $stmt->bindParam(':living_household_members', $living_household_members);
            $stmt->bindParam(':no_of_female', $no_of_female);
            $stmt->bindParam(':no_of_male', $no_of_male);
            $stmt->bindParam(':emergency_contact_name', $emergency_contact_name);
            $stmt->bindParam(':emergency_contact_number', $emergency_contact_number);

            $stmt->execute();

            $stmt = null;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

}