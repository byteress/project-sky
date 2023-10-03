<?php

class User
{

    /**
     * @var mixed|null
     */
    private $loggedInUser;
    /**
     * @var Database
     */
    private $db;

    public function __construct(){
        $this->db = Database::getInstance();
        $this->loggedInUser = Session::getSession('user_id');
    }

    /**
     * Get the loggedin user data
     * @return false|mixed|void
     */
    public function getUserData()
    {

        $sql = "SELECT * FROM users INNER JOIN user_details ud on users.user_id = ud.user_id WHERE users.user_id = :uid LIMIT 1";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':uid', $this->loggedInUser);
        if($stmt->execute()){
            if($stmt->rowCount() > 0){
                return $stmt->fetch(PDO::FETCH_ASSOC);
            } else {
                return false;
            }
        }

    }


    /**
     * Change the user password
     * @param $oldpassword
     * @param $newpassword
     * @return bool
     */
    public function changePassword($oldpassword, $newpassword)
    {
        try {
            $sql = "SELECT password FROM users WHERE user_id = :user_id";
            $selectStmt = $this->db->prepare($sql);
            $selectStmt->bindParam(":user_id", $this->loggedInUser);

            if ($selectStmt->execute()) {
                $row = $selectStmt->fetch(PDO::FETCH_ASSOC);
                $password = $row['password'];

                if (password_verify($oldpassword, $password)) {
                    $updateSql = "UPDATE users SET password = :newpassword WHERE user_id = :user_id";
                    $updateStmt = $this->db->prepare($updateSql);
                    $password_hash = password_hash($newpassword, PASSWORD_DEFAULT);
                    $updateStmt->bindParam(':newpassword', $password_hash);
                    $updateStmt->bindParam(':user_id', $this->loggedInUser);

                    if ($updateStmt->execute()) {
                        return true;
                    } else {
                        throw new Exception("Failed to update the password");
                    }
                } else {
                    throw new Exception("The old password is incorrect");
                }
            } else {
                throw new Exception("Failed to fetch the stored password");
            }
        } catch (PDOException $e) {
            echo "Database error: " . $e->getMessage();
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        return false;
    }


}