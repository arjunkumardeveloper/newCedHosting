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

require 'Dbcon.php';

/**
 * Template Class Doc Comment
 * 
 * Template Class
 * 
 * @category Template_Class
 * @package  Template_Class
 * @author   Arjun <author@domain.com>
 * @license  https://www.cedcoss.com cedcoss
 * @link     http://localhost/
 */

class User
{
    public $conn;

    /**
     * Constructor function
     */
    public function __construct()
    {
        $dbcon = new Dbcon();
        $this->conn = $dbcon->createConnection();
    }

    /**
     * Function for register user
     * 
     * @param name      $name      comment
     * @param email     $email     comment
     * @param mobile    $mobile    comment
     * @param squestion $squestion comment
     * @param sanswer   $sanswer   comment
     * @param password  $password  comment
     * 
     * @return signup()
     */
    function signup($name, $email, $mobile, $squestion, $sanswer, $password)
    {
        $sql = "SELECT * FROM `tbl_user` WHERE `email` LIKE '$email' OR `mobile` = '$mobile'";
        $query = $this->conn->query($sql);
        // return $query->num_rows;
        // exit();
        
        if ($query->num_rows > 0) {
            $msg = "Email Or Mobile Already Exists";
            return $msg;
        } else {

            
            $sql = "INSERT INTO `tbl_user` (`name`, `email`, `mobile`, `security_question`, `security_answer`, `password`, `sign_up_date`) VALUES ('$name', '$email', '$mobile', '$squestion', '$sanswer', '$password', NOW() )";
            if ($this->conn->query($sql)) {
                $msg = true;
            } else {
                $msg = "Registration Faild...try again";
            }
            return $msg;
        }
    }

    /**
     * Function for login
     * 
     * @param email    $email    comment
     * @param password $password comment
     * 
     * @return login()
     */
    function login($email, $password)
    {
        $sql = "SELECT * FROM `tbl_user` WHERE `email` = '$email'
        AND `password` = '$password' AND `active` = 1 ";

        $result = $this->conn->query($sql);   
        // $data = mysqli_fetch_assoc($res);
        if ($result->num_rows > 0) {
            // $data = mysqli_fetch_assoc($res);
            $data = $result->fetch_assoc();
            // print_r($data);
            if ($data['active'] == 1) {
                $msg = $data;
            } else {
                $msg = false;
            }
        } else {
            $msg = "Login Faild !";
        }
        return $msg;
    }

    /**
     * Approve Email
     * 
     * @param cust_email $cust_email comment
     * 
     * @return approveEmail()
     */
    function approveEmail($cust_email)
    {
        $sql = "UPDATE `tbl_user` SET `email_approved` = 1, `active` = 1 WHERE 
        `email` = '$cust_email' ";
        if ($this->conn->query($sql) === true) {
            // echo "Record updated successfully";
            return true;
        } else {
            // echo "Error updating record: " . $conn->error;
            return false;
        }
    }
}
?>