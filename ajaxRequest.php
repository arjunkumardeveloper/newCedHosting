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
session_start();
require 'User.php';
$User = new User();

// require 'C:\xampp\phpMyAdmin\vendor\autoload.php';

if (isset($_POST['action']) && $_POST['action'] == "signup") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $squestion = $_POST['squestion'];
    $sanswer = $_POST['sanswer'];
    $password = $_POST['password'];

    $msg = $User->signup($name, $email, $mobile, $squestion, $sanswer, $password);
    echo $msg;
    // alert('<script>alert("Registration successfully ! Please verify your details.)</script>');
    // print_r($msg);
    // exit();
}

if (isset($_POST['action']) && $_POST['action'] == 'login') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // echo $email, $password;
    $msg = $User->login($email, $password);
    // echo $msg;
    // print_r($msg);
    // exit();
    if ($msg != "Login Faild !") {

        if ($msg['is_admin'] == 0) {
            $_SESSION['userdata'] = array('name'=>$msg['name']);
            echo "Login";
        } else if ($msg['is_admin'] == 1) {
            $_SESSION['admindata'] = array('name'=>$msg['name'], 'id'=>$msg['id']);
            echo "admin";
        }
    } else {
        echo $msg;
    }
}

if (isset($_POST['action']) && $_POST['action'] == 'verifyEmailOtp') {
    $eotp = $_POST['eotp'];
    $sotp = $_SESSION['eotp'];
    $cust_email = $_POST['cust_email'];
    // echo $_SESSION['eotp'];
    if ($eotp == $sotp) {
        // echo "success";
        // echo $_SESSION['eotp'];
        $msg = $User->approveEmail($cust_email);
        echo $msg;
    } else {
        echo "Please enter valid otp !";
    }
}


?>
<?php 

// session_start();
// require('User.php');
// require('Dbcon.php');
// $user = new User();
// $dbcon=new Dbcon();
// if ($_POST['action'] == 'verify_email_otp') {
//     $email_otp = $_POST['email_otp'];
//     $email = $_POST['email'];
//     // $id=$_SESSION['userdata']['id'];
//     // echo "print otp :".     $email_otp;
//     // echo "<pre>";
//     // print_r($_SESSION);
//     if($email_otp == $_SESSION['userdata']['otp']){
//         $user -> status_email_approved($dbcon -> conn,$email);
//     }
// }

// if($_POST['action'] == 'verify_phone_otp'){
//     $phone_otp = $_POST['phone_otp'];
//     if($phone_otp == $_SESSION['userdata']['otp']){
//         $user -> status_phone_approved($dbcon -> conn);
//     }
// }

?>