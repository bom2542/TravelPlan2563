<?php

include 'php/dbconnect_object.php';

class DB_con {

    function __construct() {
//        date_default_timezone_set("Asia/Bangkok");
//        $date=date('l jS \of F Y h:i:s A');
        $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
        $conn->set_charset("utf8");
        $this->dbcon = $conn;

        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL : " . mysqli_connect_error();
        }
    }

    public function insert($firstname, $lastname, $email, $phonenumber,	$address) {
        $result = mysqli_query($this->dbcon, "INSERT INTO tblusers(firstname, lastname, email, phonenumber, address) VALUES('$firstname', '$lastname', '$email', '$phonenumber', '$address')");
        return $result;
    }

    public function fetchdata2() {
        $result = mysqli_query($this->dbcon, "SELECT * FROM users WHERE user_type_id = 2 ORDER BY id DESC");
        return $result;
    }

    public function fetchdata($start_from, $num_per_page) {
        $result = mysqli_query($this->dbcon, "SELECT * FROM users WHERE user_type_id = 2 ORDER BY id DESC LIMIT $start_from, $num_per_page");
        return $result;
    }


    public function fetchonerecord($userid) {
        $result = mysqli_query($this->dbcon, "SELECT * FROM users WHERE id = '$userid'");
        return $result;
    }

    public function update($firstname, $lastname, $email, $phonenumber,	$address, $userid) {
        $result = mysqli_query($this->dbcon, "UPDATE tblusers SET
                firstname = '$firstname',
                lastname = '$lastname',
                email = '$email',
                phonenumber = '$phonenumber',
                address = '$address'
                WHERE id = '$userid'
            ");
        return $result;
    }

    public function delete($id) {
        $deleterecord = mysqli_query($this->dbcon, "DELETE FROM users WHERE id = '$id'");
        return $deleterecord;
    }

}


?>
