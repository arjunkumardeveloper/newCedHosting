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
// session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '/home/cedcoss/vendor/autoload.php';

require 'header.php';
if (isset($_GET['email'])) {
    $email = $_GET['email'];
    $mobile = $_GET['mobile'];
    $name = $_GET['name'];
}
$msg = '';
if (isset($_POST['sendEmail'])) {
    $eotp = rand(1000, 9999);
    $_SESSION['eotp']=$eotp;
    $mail = new PHPMailer();
    try {
        $mail->isSMTP(true);
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'cedcossarjun1023@gmail.com';
        $mail->Password = 'Cedcoss@1023';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setfrom('cedcossarjun1023@gmail.com', 'CedHosting');
        $mail->addAddress($email);
        $mail->addAddress($email, $name);

        $mail->isHTML(true);
        $mail->Subject = 'Account Verification';
        $mail->Body = 'Hi '.$name. ',Here is your OTP for account verification: '.$eotp;
        $mail->AltBody = 'Body in plain text for non-HTML mail clients';
        $mail->send();
        // header('location: verification.php?email=' . $email);
        $msg = "Dear $name OTP has been sent please check your email !";
    } catch (Exception $e) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }
}
// echo $_SESSION['eotp'];

if (isset($_POST['sendOtp'])) {
    $motp = rand(1000, 9999);
    $_SESSION['motp']=$motp;

    $fields = array(
      "sender_id" => "FSTSMS",
      "message" => "OTP for verify mobile no. : " . $motp,
      "language" => "english",
      "route" => "p",
      "numbers" => "$mobile",
    );

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://www.fast2sms.com/dev/bulk",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_SSL_VERIFYHOST => 0,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode($fields),
        CURLOPT_HTTPHEADER => array(
        "authorization: WtICYTA13kupfyxZ5DcvOgePhi07lb8Lmw9GRonJNrQSV4dBsaeRMWPqbN2ZoUCyInahzugElAVQO54w",
        "accept: */*",
        "cache-control: no-cache",
        "content-type: application/json"
        ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        // on your mobile number";
        if ($response == '{"return":true,"request_id":"p3bmn6rslugdoay","message":["Message sent successfully to NonDND numbers"]}') {
            $msg = "Your Mobile Number in DND, we can't send otp";
        
        }
    }
}

?>
<div class="content">
                <div class="main-1">
                    <div class="container">
                        <p id="successMsg"></p>
                        <a href="login.php" class="btn btn-success m-auto" id="loginbtn">
                        Go Login</a>
                        <div class="login-page">
                            <div class="account_grid">
                            
                                <div class="col-md-6 login-right">
                                    <h3>Verify Your Account Using Email</h3>
                                    <p>You can verify yourself through email</p>
                                    <form action="" method="post">
                                      <div>
                                        <span>Email Address<label>*</label></span>
                                        <input type="email" id="cust_email" 
                                        value="
                                        <?php
                                            echo $email;
                                        ?>
                                        " disabled> 
                                      </div>
                                      <input type="submit" name ="sendEmail" 
                                      value="Verify through Email">
                                      <p class="successMsg"><?php echo $msg; ?></p>
                                    </form>
                                    <form action="" method="post">
                                      <div>
                                        <span>Enter OTP<label>*</label></span>
                                        <input type="text" name="email" 
                                        id="emailOtp"> 
                                      </div>
                                      <input type="submit" name="submitEmail" 
                                      value="Validate OTP" id="verifyEmail">
                                    </form>
                                    
                                </div>
                                
                                <div class="col-md-6 login-right">
                                    <h3>Verify Your Account Using Mobile</h3>
                                    <p>You can verify yourself through mobile</p>
                                    <form action="" method="post">
                                      <div>
                                        <!-- <span>Mobile<label>*</label></span> -->
                                        <!-- <input type="text" name="otp"
                                        value="" disabled>   -->
                                        <!-- <p></p> -->
                                      </div>                                
                                      <input type="submit" name ="sendOtp" 
                                      value="Verify through mobile">
                                    </form>
                                    <form action="" method="post">
                                      <div>
                                        <span>Mobile<label>*</label></span>
                                        <input type="text" name="otp" > 
                                      </div>                                
                                      <input type="submit" name ="submitOtp" 
                                      value="Validate OTP">
                                    </form>
                                </div>  
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- login -->
<?php require 'footer.php'; ?>